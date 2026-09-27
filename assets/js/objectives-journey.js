/**
 * Objectives Journey — Scroll-Driven Animation
 * Uses GSAP ScrollTrigger (loaded via CDN in functions.php) for path draw + walker
 * Falls back gracefully to IntersectionObserver for node reveals
 */
(function () {
  'use strict';

  // ── Data ─────────────────────────────────────────────────────
  const OBJECTIVES = [
    { num: '01', title: 'Eco-System' },
    { num: '02', title: 'Venture Creation' },
    { num: '03', title: 'Tech Commercialization' },
    { num: '04', title: 'Networking' },
    { num: '05', title: 'Value Addition' },
  ];

  // SVG coordinate space
  const SVG_W      = 1120;  // matches the max-width of the inner body
  const STEP_H     = 205;   // Compact height per slot
  const SVG_H      = STEP_H * OBJECTIVES.length; // 1025px
  const CX         = SVG_W / 2;                  // 560 — center x

  // Node x positions (shifted to give cards ample 350px+ width)
  const LEFT_X  = 410;
  const RIGHT_X = SVG_W - 410; // 710

  // Node y positions: center of each slot
  function nodeY(i) { return STEP_H * i + STEP_H / 2; } // 120, 360, 600 …

  // Node x: even→left, odd→right
  function nodeX(i) { return i % 2 === 0 ? LEFT_X : RIGHT_X; }

  // ── Build the SVG path (smooth S-curves) ─────────────────────
  function buildPath() {
    const pts = [];
    // Start at top-center
    pts.push(`M ${CX},0`);

    for (let i = 0; i < OBJECTIVES.length; i++) {
      const nx = nodeX(i);
      const ny = nodeY(i);
      // Arrive at node i with a cubic bezier
      // Control point 1: straight down from previous exit
      // Control point 2: horizontal approach to node
      const prevY = i === 0 ? 0 : nodeY(i - 1);
      const prevX = i === 0 ? CX : nodeX(i - 1);
      const midY  = (prevY + ny) / 2;

      pts.push(`C ${prevX},${midY} ${nx},${midY} ${nx},${ny}`);
    }

    // End: continue past last node to bottom of SVG
    const lastX = nodeX(OBJECTIVES.length - 1);
    const lastY = nodeY(OBJECTIVES.length - 1);
    pts.push(`C ${lastX},${lastY + 60} ${CX},${lastY + 100} ${CX},${SVG_H}`);

    return pts.join(' ');
  }

  // ── Walking figure SVG markup ─────────────────────────────────
  function walkerMarkup() {
    return `
      <g class="obj-walker-group" id="obj-walker">
        <!-- Shadow on path -->
        <ellipse class="obj-walker-shadow" cx="0" cy="2" rx="11" ry="3.5"/>
        <!-- Head -->
        <circle class="obj-walker-body" cx="0" cy="-30" r="6"/>
        <!-- Torso -->
        <line class="obj-walker-body" x1="0" y1="-24" x2="0" y2="-10"
              stroke="#0d1117" stroke-width="2.8" stroke-linecap="round"/>
        <!-- Arm back -->
        <line class="obj-walker-body" x1="0" y1="-20" x2="-8" y2="-13"
              stroke="#0d1117" stroke-width="2" stroke-linecap="round"/>
        <!-- Arm forward -->
        <line class="obj-walker-body" x1="0" y1="-20" x2="7" y2="-15"
              stroke="#0d1117" stroke-width="2" stroke-linecap="round"/>
        <!-- Leg back -->
        <line class="obj-walker-body" x1="0" y1="-10" x2="-7" y2="2"
              stroke="#0d1117" stroke-width="2.5" stroke-linecap="round"/>
        <!-- Leg forward -->
        <line class="obj-walker-body" x1="0" y1="-10" x2="6" y2="1"
              stroke="#0d1117" stroke-width="2.5" stroke-linecap="round"/>
      </g>`;
  }

  // ── Inject the SVG into the DOM ───────────────────────────────
  function buildSVG(container) {
    const pathD = buildPath();

    const svgEl = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
    svgEl.setAttribute('class', 'obj-svg');
    svgEl.setAttribute('viewBox', `0 0 ${SVG_W} ${SVG_H}`);
    svgEl.setAttribute('preserveAspectRatio', 'xMidYMin meet');
    svgEl.setAttribute('aria-hidden', 'true');

    svgEl.innerHTML = `
      <path class="obj-path-bg"   id="obj-path-bg"   d="${pathD}"/>
      <path class="obj-path-live" id="obj-path-live" d="${pathD}"/>
      ${walkerMarkup()}
    `;

    container.appendChild(svgEl);
    return svgEl;
  }

  // ── Position the step items absolutely ───────────────────────
  function positionSteps(body, svgEl) {
    const steps = body.querySelectorAll('.obj-step');
    const bodyW = body.offsetWidth - 48; // minus padding
    const scaleX = bodyW / SVG_W;
    const scaleY = body.offsetHeight  / SVG_H;
    // Use scaleX for horizontal, scaleX for vertical (uniform scale based on width)
    const scale  = Math.min(scaleX, (body.offsetHeight || SVG_H) / SVG_H);

    steps.forEach((step, i) => {
      const nx   = nodeX(i);
      const ny   = nodeY(i);
      const side = i % 2 === 0 ? 'left' : 'right';

      // Convert SVG coordinates to pixel positions in body
      const pxX = nx * scaleX;
      const pxY = ny * scaleX; // uniform scale based on width

      const circleRadius = 44; // half of 88px circle width
      if (side === 'left') {
        step.style.left  = '0';
        step.style.width = `${pxX + circleRadius}px`;
        step.style.right = 'auto';
        step.style.top   = `${pxY}px`;
      } else {
        step.style.right = '0';
        step.style.width = `${bodyW - (pxX - circleRadius)}px`;
        step.style.left  = 'auto';
        step.style.top   = `${pxY}px`;
      }
    });
  }

  // ── Main init ─────────────────────────────────────────────────
  function init() {
    const section = document.getElementById('obj-journey-section');
    if (!section) return;

    const body = section.querySelector('.obj-journey-body');
    if (!body) return;

    const isMobile = window.innerWidth <= 768;

    if (isMobile) {
      body.classList.add('is-mobile');
      initMobile(section);
      return;
    }

    // ── Desktop: set body height to match SVG ──────────────────
    // We size the body so that the SVG's height = SVG_W * (SVG_H/SVG_W) scaled to body width
    const bodyW  = body.offsetWidth - 48;
    const scale  = bodyW / SVG_W;
    const bodyH  = SVG_H * scale;
    body.style.height = bodyH + 'px';

    // Build SVG
    const svgEl = buildSVG(body);
    const pathBg   = svgEl.querySelector('#obj-path-bg');
    const pathLive = svgEl.querySelector('#obj-path-live');
    const walker   = svgEl.querySelector('#obj-walker');

    // Position step items
    positionSteps(body, svgEl);

    // ── Path draw-in setup ─────────────────────────────────────
    const totalLen = pathLive.getTotalLength();
    pathLive.style.strokeDasharray  = totalLen;
    pathLive.style.strokeDashoffset = totalLen;

    // ── Node circles ───────────────────────────────────────────
    const circles = section.querySelectorAll('.obj-node-circle');

    // ── Walker initial position ────────────────────────────────
    const startPt = pathLive.getPointAtLength(0);
    walker.setAttribute('transform', `translate(${startPt.x},${startPt.y})`);

    // ── Scroll handler ─────────────────────────────────────────
    function onScroll() {
      const rect     = section.getBoundingClientRect();
      const winH     = window.innerHeight;
      // progress: 0 when section top hits bottom of viewport, 1 when section bottom hits top
      const progress = Math.min(1, Math.max(0,
        (-rect.top + winH * 0.3) / (rect.height - winH * 0.3)
      ));

      // 1. Path draw-in
      pathLive.style.strokeDashoffset = totalLen * (1 - progress);

      // 2. Walker position along path
      const walkerLen = totalLen * Math.min(progress * 1.05, 1);
      const pt = pathLive.getPointAtLength(Math.min(walkerLen, totalLen));
      // Slight look-ahead to orient walker (not rotating, just translating)
      walker.setAttribute('transform', `translate(${pt.x},${pt.y})`);
      walker.style.opacity = progress > 0.01 ? '1' : '0';

      // 3. Node states
      circles.forEach((circle, i) => {
        const nodeProgress = (i + 0.5) / OBJECTIVES.length;
        if (progress >= nodeProgress + 0.04) {
          circle.classList.add('is-past');
          circle.classList.remove('is-active');
        } else if (progress >= nodeProgress - 0.04) {
          circle.classList.add('is-active');
          circle.classList.remove('is-past');
        } else {
          circle.classList.remove('is-active', 'is-past');
        }
      });

      // 4. Step text reveal + active highlight
      const steps = section.querySelectorAll('.obj-step');
      steps.forEach((step, i) => {
        const nodeProgress = (i + 0.5) / OBJECTIVES.length;
        if (progress >= nodeProgress - 0.06) {
          step.classList.add('is-visible');
        }
        if (progress >= nodeProgress - 0.04 && progress < nodeProgress + 0.06) {
          step.classList.add('is-active');
        } else {
          step.classList.remove('is-active');
        }
      });
    }

    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll(); // run once on load

    // ── Resize ─────────────────────────────────────────────────
    let resizeTimer;
    window.addEventListener('resize', () => {
      clearTimeout(resizeTimer);
      resizeTimer = setTimeout(() => {
        if (window.innerWidth <= 768) {
          location.reload(); // simplest mobile switch
          return;
        }
        const bW   = body.offsetWidth - 48;
        const sc   = bW / SVG_W;
        const bH   = SVG_H * sc;
        body.style.height = bH + 'px';
        positionSteps(body, svgEl);
        onScroll();
      }, 200);
    });
  }

  // ── Mobile: simple IntersectionObserver stagger ──────────────
  function initMobile(section) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          const idx = parseInt(entry.target.dataset.step || '0');
          const circle = entry.target.querySelector('.obj-node-circle');
          if (circle) {
            setTimeout(() => {
              circle.classList.add('is-active');
            }, 200);
          }
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.2 });

    section.querySelectorAll('.obj-step').forEach(step => observer.observe(step));
  }

  // ── Boot ──────────────────────────────────────────────────────
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }

})();
