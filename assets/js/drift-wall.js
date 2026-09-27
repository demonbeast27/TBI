/* ==========================================================================
   DriftWall — Vanilla JS port (React Bits JS + CSS variant)
   ========================================================================== */

(function() {
  'use strict';

  const THEME_ROOT =
    (typeof tbiThemeURI !== 'undefined' && tbiThemeURI && tbiThemeURI.root)
      ? tbiThemeURI.root
      : '/wp-content/themes/rbu-tbi/tbi-theme';

  const DEFAULT_ITEMS = Array.from({ length: 15 }, (_, i) => {
    const ids = [1015, 1025, 1039, 1043, 1044, 1050, 1062, 1069, 1074, 1080, 1084, 106, 110, 133, 164];
    return {
      image: `${THEME_ROOT}/assets/vendor/img/drift-wall/tile-${ids[i % ids.length]}.jpg`,
      title: `Tile ${i + 1}`,
      href: undefined
    };
  });

  const prefersReducedMotion = () =>
    typeof window !== 'undefined' && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  const columnFactor = (index, variance) => {
    const pseudo = ((index * 0.6180339887 + 0.35) % 1) * 2 - 1;
    return 1 + variance * pseudo;
  };

  class DriftWall {
    constructor(container, opts = {}) {
      this.container = container;
      this.items = opts.items || DEFAULT_ITEMS;
      this.columns = opts.columns || 5;
      this.tileWidth = opts.tileWidth || 180;
      this.tileHeight = opts.tileHeight || 120;
      this.gap = opts.gap || 14;
      this.radius = opts.radius || 10;
      this.tilt = opts.tilt || 16;
      this.turn = opts.turn || -14;
      this.roll = opts.roll || 0;
      this.perspective = opts.perspective || 1200;
      this.depth = opts.depth || 120;
      this.speed = opts.speed || 42;
      this.direction = opts.direction || 'up';
      this.variance = opts.variance || 0.45;
      this.parallax = opts.parallax || 0.6;
      this.pauseOnHover = opts.pauseOnHover || false;
      this.lift = opts.lift || 48;
      this.fade = opts.fade || 0.6;
      this.dim = opts.dim || 0.55;
      this.grayscale = opts.grayscale || false;
      this.overlayColor = opts.overlayColor || '#0a0200';

      this.planeRef = null;
      this.trackRefs = [];
      this.offsetsRef = [];
      this.velocitiesRef = [];
      this.hoveredColRef = -1;
      this.wallHoveredRef = false;
      this.pointerRef = { x: 0, y: 0 };
      this.pointerDampedRef = { x: 0, y: 0 };
      this.lastTsRef = null;
      this.rafRef = null;
      this.activeIdRef = null;
      this.containerHeight = 600;
      this.reduced = prefersReducedMotion();

      this.init();
    }

    init() {
      this.planeRef = this.container.querySelector('.drift-wall__plane');
      this.applyCssVars();
      this.buildColumns();
      this.bindEvents();
      this.startAnimation();

      if (!this.reduced) {
        const ro = new ResizeObserver(([entry]) => {
          this.containerHeight = entry.contentRect.height || 600;
          this.buildColumns();
        });
        ro.observe(this.container);
        this._ro = ro;
      }
    }

    applyCssVars() {
      const container = this.container;
      container.style.setProperty('--dw-tile-w', `${this.tileWidth}px`);
      container.style.setProperty('--dw-tile-h', `${this.tileHeight}px`);
      container.style.setProperty('--dw-gap', `${this.gap}px`);
      container.style.setProperty('--dw-radius', `${this.radius}px`);
      container.style.setProperty('--dw-perspective', `${this.perspective}px`);
      container.style.setProperty('--dw-lift', `${this.lift}px`);
      container.style.setProperty('--dw-dim', String(this.dim));
      container.style.setProperty('--dw-gray', this.grayscale ? '1' : '0');
      container.style.setProperty('--dw-overlay', this.overlayColor);
      container.style.setProperty('--dw-edge', `${Math.max(0, (1 - this.fade) * 100)}%`);
    }

    buildColumns() {
      this.trackRefs = [];
      this.offsetsRef = [];
      this.velocitiesRef = [];
      this.baseVelocities = [];

      const columnItems = [];
      for (let c = 0; c < this.columns; c++) {
        columnItems.push(this.items.filter((_, i) => i % this.columns === c));
      }

      columnItems.forEach((col, c) => {
        if (!col.length) col.push(this.items[0]);
      });

      const unit = this.tileHeight + this.gap;
      const columnMeta = columnItems.map(col => {
        const copyHeight = Math.max(unit, col.length * unit);
        const copies = Math.max(2, Math.ceil((this.containerHeight * 1.6) / copyHeight) + 1);
        return { copyHeight, copies };
      });

      this.columnItems = columnItems;
      this.columnMeta = columnMeta;

      const plane = this.container.querySelector('.drift-wall__plane');
      if (!plane) return;

      plane.innerHTML = '';

      columnItems.forEach((col, c) => {
        const colEl = document.createElement('div');
        colEl.className = 'drift-wall__col';

        const track = document.createElement('div');
        track.className = 'drift-wall__track';
        this.trackRefs.push(track);

        const copies = columnMeta[c].copies;
        for (let copy = 0; copy < copies; copy++) {
          col.forEach((item, itemIndex) => {
            const tile = this.createTile(item, `${c}-${copy}-${itemIndex}`, c);
            track.appendChild(tile);
          });
        }

        colEl.appendChild(track);
        plane.appendChild(colEl);
      });

      this.offsetsRef = columnMeta.map((meta, c) => meta.copyHeight * ((c * 0.37) % 1));
      this.velocitiesRef = columnItems.map(() => 0);
      this.baseVelocities = columnItems.map((_, c) => {
        const dirSign = this.direction === 'up' ? 1 : -1;
        const altSign = c % 2 === 0 ? 1 : -1;
        return this.speed * columnFactor(c, this.variance) * dirSign * altSign;
      });
    }

    createTile(item, id, colIndex) {
      const inner = document.createElement('span');
      inner.className = 'drift-wall__inner';

      const img = document.createElement('img');
      img.src = item.image;
      img.alt = item.title || '';
      img.loading = 'lazy';
      img.draggable = false;

      const overlay = document.createElement('span');
      overlay.className = 'drift-wall__overlay';
      overlay.setAttribute('aria-hidden', 'true');

      inner.appendChild(img);
      inner.appendChild(overlay);

      let tile;
      if (item.href) {
        tile = document.createElement('a');
        tile.href = item.href;
        tile.target = '_blank';
        tile.rel = 'noreferrer noopener';
      } else {
        tile = document.createElement('div');
        tile.tabIndex = 0;
        tile.role = 'button';
        tile.setAttribute('aria-label', item.title || 'tile');
      }

      tile.className = 'drift-wall__tile';
      tile.setAttribute('data-tile-id', id);
      tile.setAttribute('data-col', String(colIndex));
      tile.appendChild(inner);

      tile.addEventListener('pointerenter', () => this.activate(id, colIndex));
      tile.addEventListener('pointerleave', () => this.release());
      tile.addEventListener('focus', () => this.activate(id, colIndex));
      tile.addEventListener('blur', () => this.release());

      return tile;
    }

    activate(id, colIndex) {
      this.activeIdRef = id;
      this.hoveredColRef = colIndex;
      const tile = this.container.querySelector(`[data-tile-id="${id}"]`);
      if (tile) tile.classList.add('is-active');
    }

    release() {
      if (this.activeIdRef) {
        const tile = this.container.querySelector(`[data-tile-id="${this.activeIdRef}"]`);
        if (tile) tile.classList.remove('is-active');
      }
      this.activeIdRef = null;
      this.hoveredColRef = -1;
    }

    applyPlaneTransform(px, py) {
      const plane = this.planeRef;
      if (!plane) return;
      plane.style.transform =
        `translate(-50%, -50%) scale(1.18) ` +
        `rotateX(${this.tilt + py}deg) rotateY(${this.turn + px}deg) rotateZ(${this.roll}deg) ` +
        `translateZ(${-this.depth}px)`;
    }

    startAnimation() {
      const animate = (ts) => {
        if (this.lastTsRef === null) this.lastTsRef = ts;
        const dt = Math.min(0.05, Math.max(0, ts - this.lastTsRef) / 1000);
        this.lastTsRef = ts;

        if (!this.reduced) {
          const maxTilt = this.parallax * 8;
          const targetX = this.pointerRef.x * maxTilt;
          const targetY = -this.pointerRef.y * maxTilt;
          const damp = 1 - Math.exp(-dt / 0.12);
          this.pointerDampedRef.x += (targetX - this.pointerDampedRef.x) * damp;
          this.pointerDampedRef.y += (targetY - this.pointerDampedRef.y) * damp;
          this.applyPlaneTransform(this.pointerDampedRef.x, this.pointerDampedRef.y);

          for (let c = 0; c < this.trackRefs.length; c++) {
            const meta = this.columnMeta[c];
            if (!meta) continue;
            const paused = this.wallHoveredRef && this.pauseOnHover;
            const factor = paused || this.hoveredColRef === c ? 0 : 1;
            const target = this.baseVelocities[c] * factor;

            const ease = 1 - Math.exp(-dt / (target === 0 ? 0.16 : 0.28));
            this.velocitiesRef[c] += (target - this.velocitiesRef[c]) * ease;
            let next = (this.offsetsRef[c] || 0) + this.velocitiesRef[c] * dt;
            next = ((next % meta.copyHeight) + meta.copyHeight) % meta.copyHeight;
            this.offsetsRef[c] = next;

            const el = this.trackRefs[c];
            if (el) {
              el.style.transform = `translate3d(0, ${-next}px, 0)`;

              const normalizedPos = next / meta.copyHeight;
              const fadeEdge = 0.3;
              let opacity = 1;
              if (normalizedPos < fadeEdge) {
                opacity = normalizedPos / fadeEdge;
              } else if (normalizedPos > 1 - fadeEdge) {
                opacity = (1 - normalizedPos) / fadeEdge;
              }
              el.style.opacity = Math.max(0.2, opacity);
            }
          }
        } else {
          for (let c = 0; c < this.trackRefs.length; c++) {
            const el = this.trackRefs[c];
            const meta = this.columnMeta[c];
            if (el && meta) {
              el.style.transform = `translate3d(0, ${-(this.offsetsRef[c] || 0)}px, 0)`;
              const normalizedPos = ((this.offsetsRef[c] || 0) % meta.copyHeight) / meta.copyHeight;
              const fadeEdge = 0.3;
              let opacity = 1;
              if (normalizedPos < fadeEdge) {
                opacity = normalizedPos / fadeEdge;
              } else if (normalizedPos > 1 - fadeEdge) {
                opacity = (1 - normalizedPos) / fadeEdge;
              }
              el.style.opacity = Math.max(0.2, opacity);
            }
          }
        }

        this.rafRef = requestAnimationFrame(animate.bind(this));
      };

      this.rafRef = requestAnimationFrame(animate.bind(this));
    }

    bindEvents() {
      this.container.addEventListener('pointermove', (e) => {
        const rect = this.container.getBoundingClientRect();
        if (this.parallax > 0 && !this.reduced) {
          this.pointerRef = {
            x: (e.clientX - rect.left) / rect.width - 0.5,
            y: (e.clientY - rect.top) / rect.height - 0.5
          };
        }
      });

      this.container.addEventListener('pointerenter', () => {
        this.wallHoveredRef = true;
      });

      this.container.addEventListener('pointerleave', () => {
        this.wallHoveredRef = false;
        this.pointerRef = { x: 0, y: 0 };
        this.release();
      });
    }

    destroy() {
      if (this.rafRef) {
        cancelAnimationFrame(this.rafRef);
        this.rafRef = null;
      }
      if (this._ro) {
        this._ro.disconnect();
        this._ro = null;
      }
      this.lastTsRef = null;
    }
  }

  function initDriftWalls() {
    const containers = document.querySelectorAll('.drift-wall');
    const instances = [];

    containers.forEach((container) => {
      const existingTiles = Array.from(container.querySelectorAll('.drift-wall__tile'));
      const items = existingTiles.length > 0
        ? existingTiles.map((tile, i) => {
            const img = tile.querySelector('img');
            const href = tile.getAttribute('href');
            return {
              image: img ? img.src : '',
              title: img ? img.alt : `Tile ${i + 1}`,
              href: href || undefined
            };
          })
        : DEFAULT_ITEMS;

      const opts = {
        items: items,
        columns: parseInt(container.getAttribute('data-columns') || '5', 10),
        tileWidth: parseInt(container.getAttribute('data-tile-width') || '180', 10),
        tileHeight: parseInt(container.getAttribute('data-tile-height') || '120', 10),
        gap: parseInt(container.getAttribute('data-gap') || '14', 10),
        radius: parseInt(container.getAttribute('data-radius') || '10', 10),
        tilt: parseInt(container.getAttribute('data-tilt') || '16', 10),
        turn: parseInt(container.getAttribute('data-turn') || '-14', 10),
        roll: parseInt(container.getAttribute('data-roll') || '0', 10),
        perspective: parseInt(container.getAttribute('data-perspective') || '1500', 10),
        depth: parseInt(container.getAttribute('data-depth') || '20', 10),
        speed: parseInt(container.getAttribute('data-speed') || '42', 10),
        direction: container.getAttribute('data-direction') || 'up',
        variance: parseFloat(container.getAttribute('data-variance') || '0.45'),
        parallax: parseFloat(container.getAttribute('data-parallax') || '0.6'),
        pauseOnHover: container.getAttribute('data-pause-on-hover') === 'true',
        lift: parseInt(container.getAttribute('data-lift') || '48', 10),
        fade: parseFloat(container.getAttribute('data-fade') || '0.6'),
        dim: parseFloat(container.getAttribute('data-dim') || '0.55'),
        grayscale: container.getAttribute('data-grayscale') === 'true',
        overlayColor: container.getAttribute('data-overlay-color') || '#0a0200'
      };

      try {
        const instance = new DriftWall(container, opts);
        instances.push(instance);
      } catch (err) {
        console.error('[DriftWall] Failed to create instance:', err);
      }
    });

    return instances;
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initDriftWalls);
  } else {
    initDriftWalls();
  }
})();
