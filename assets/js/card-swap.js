/* ==========================================================================
   CardSwap — Vanilla JS port (React Bits JS + CSS variant)
   ========================================================================== */

(function() {
  'use strict';

  const prefersReducedMotion = () =>
    typeof window !== 'undefined' && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  const makeSlot = (i, distX, distY, total) => ({
    x: i * distX,
    y: -i * distY,
    z: -i * distX * 1.5,
    zIndex: total - i
  });

  const placeNow = (el, slot, skew) => {
    if (typeof gsap === 'undefined' || !gsap.set) return;
    gsap.set(el, {
      x: slot.x,
      y: slot.y,
      z: slot.z,
      xPercent: -50,
      yPercent: -50,
      skewY: skew,
      transformOrigin: 'center center',
      zIndex: slot.zIndex,
      force3D: true
    });
  };

  class CardSwap {
    constructor(container, opts = {}) {
      this.container = container;
      this.width = opts.width || 500;
      this.height = opts.height || 400;
      this.cardDistance = opts.cardDistance || 60;
      this.verticalDistance = opts.verticalDistance || 70;
      this.delay = opts.delay || 5000;
      this.pauseOnHover = opts.pauseOnHover || false;
      this.skewAmount = opts.skewAmount || 6;
      this.easing = opts.easing || 'elastic';
      this.onCardClick = opts.onCardClick || null;
      this.cards = [];
      this.order = [];
      this.tlRef = null;
      this.intervalRef = null;
      this.reduced = prefersReducedMotion();

      this.init();
    }

    init() {
      const cardEls = Array.from(this.container.querySelectorAll('.card'));
      if (!cardEls.length) return;

      this.cards = cardEls;
      this.order = Array.from({ length: this.cards.length }, (_, i) => i);

      const total = this.cards.length;
      this.cards.forEach((el, i) => {
        placeNow(el, makeSlot(i, this.cardDistance, this.verticalDistance, total), this.skewAmount);
        el.addEventListener('click', () => {
          if (typeof this.onCardClick === 'function') {
            this.onCardClick(i);
          }
        });
      });

      this.swap();
      this.intervalRef = window.setInterval(() => this.swap(), this.delay);

      if (this.pauseOnHover) {
        const pause = () => {
          if (this.tlRef) this.tlRef.pause();
          if (this.intervalRef) clearInterval(this.intervalRef);
        };
        const resume = () => {
          if (this.tlRef) this.tlRef.play();
          this.intervalRef = window.setInterval(() => this.swap(), this.delay);
        };
        this.container.addEventListener('mouseenter', pause);
        this.container.addEventListener('mouseleave', resume);
        this._pause = pause;
        this._resume = resume;
      }
    }

    getConfig() {
      if (this.easing === 'elastic') {
        return {
          ease: 'elastic.out(0.6,0.9)',
          durDrop: 2,
          durMove: 2,
          durReturn: 2,
          promoteOverlap: 0.9,
          returnDelay: 0.05
        };
      }
      return {
        ease: 'power1.inOut',
        durDrop: 0.8,
        durMove: 0.8,
        durReturn: 0.8,
        promoteOverlap: 0.45,
        returnDelay: 0.2
      };
    }

    swap() {
      if (this.order.length < 2) return;
      if (typeof gsap === 'undefined' || !gsap.timeline) return;

      const config = this.getConfig();
      const [front, ...rest] = this.order;
      const elFront = this.cards[front];
      const total = this.cards.length;

      const tl = gsap.timeline();
      this.tlRef = tl;

      tl.to(elFront, {
        y: '+=500',
        duration: config.durDrop,
        ease: config.ease
      });

      tl.addLabel('promote', `-=${config.durDrop * config.promoteOverlap}`);
      rest.forEach((idx, i) => {
        const el = this.cards[idx];
        const slot = makeSlot(i, this.cardDistance, this.verticalDistance, total);
        tl.set(el, { zIndex: slot.zIndex }, 'promote');
        tl.to(
          el,
          {
            x: slot.x,
            y: slot.y,
            z: slot.z,
            duration: config.durMove,
            ease: config.ease
          },
          `promote+=${i * 0.15}`
        );
      });

      const backSlot = makeSlot(total - 1, this.cardDistance, this.verticalDistance, total);
      tl.addLabel('return', `promote+=${config.durMove * config.returnDelay}`);
      tl.call(() => {
        gsap.set(elFront, { zIndex: backSlot.zIndex });
      }, undefined, 'return');
      tl.to(
        elFront,
        {
          x: backSlot.x,
          y: backSlot.y,
          z: backSlot.z,
          duration: config.durReturn,
          ease: config.ease
        },
        'return'
      );

      tl.call(() => {
        this.order = [...rest, front];
      });
    }

    destroy() {
      if (this.intervalRef) {
        clearInterval(this.intervalRef);
        this.intervalRef = null;
      }
      if (this.tlRef) {
        this.tlRef.kill();
        this.tlRef = null;
      }
      if (this._pause && this.container) {
        this.container.removeEventListener('mouseenter', this._pause);
        this.container.removeEventListener('mouseleave', this._resume);
      }
    }
  }

  function initCardSwaps() {
    const containers = document.querySelectorAll('.card-swap-container');
    const instances = [];

    containers.forEach((container) => {
      const opts = {
        width: parseInt(container.getAttribute('data-width') || '500', 10),
        height: parseInt(container.getAttribute('data-height') || '400', 10),
        cardDistance: parseInt(container.getAttribute('data-card-distance') || '60', 10),
        verticalDistance: parseInt(container.getAttribute('data-vertical-distance') || '70', 10),
        delay: parseInt(container.getAttribute('data-delay') || '5000', 10),
        pauseOnHover: container.getAttribute('data-pause-on-hover') === 'true',
        skewAmount: parseInt(container.getAttribute('data-skew-amount') || '6', 10),
        easing: container.getAttribute('data-easing') || 'elastic',
        onCardClick: null
      };

      const instance = new CardSwap(container, opts);
      instances.push(instance);
    });

    return instances;
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initCardSwaps);
  } else {
    initCardSwaps();
  }
})();
