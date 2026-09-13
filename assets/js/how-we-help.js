/**
 * How We Help Section — Converging SVG Paths
 */
(function () {
  'use strict';

  function initHowWeHelp() {
    const section = document.querySelector('.hwh-section');
    if (!section) return;

    const svgWrapper = section.querySelector('.hwh-svg-wrapper');
    const anchors = section.querySelectorAll('.hwh-row-anchor');
    if (!svgWrapper || anchors.length === 0) return;

    function drawPaths() {
      // If mobile, clear and skip
      if (window.innerWidth <= 992) {
        svgWrapper.innerHTML = '';
        return;
      }

      const wrapperRect = svgWrapper.getBoundingClientRect();
      const w = wrapperRect.width;
      const h = wrapperRect.height;
      
      // Convergence point
      const cx = w * 0.75;
      const cy = h / 2;

      let svgHTML = `<svg class="hwh-svg" viewBox="0 0 ${w} ${h}" style="width:100%; height:100%; overflow:visible;">`;
      
      // Draw curve for each anchor
      anchors.forEach((anchor) => {
        const anchorRect = anchor.getBoundingClientRect();
        // Calculate Y position relative to the SVG wrapper
        const startY = anchorRect.top - wrapperRect.top + (anchorRect.height / 2);
        const startX = 0; // Starts at left edge of SVG wrapper

        // Cubic bezier: starts horizontally, ends horizontally
        const cp1x = cx * 0.4;
        const cp2x = cx * 0.6;
        
        const d = `M ${startX},${startY} C ${cp1x},${startY} ${cp2x},${cy} ${cx},${cy}`;
        svgHTML += `<path class="hwh-path" d="${d}" fill="none" stroke="#0057B0" stroke-width="2.5" stroke-linecap="round"></path>`;
      });

      // Draw final straight line
      const endX = w - 10;
      svgHTML += `<path class="hwh-path" d="M ${cx},${cy} L ${endX},${cy}" fill="none" stroke="#0057B0" stroke-width="2.5" stroke-linecap="round"></path>`;

      // Position figure
      const figureX = endX - 20; // Slightly before the end of the line
      const figureY = cy; // Standing exactly on the line
      
      svgHTML += `
        <g transform="translate(${figureX}, ${figureY})" style="color: #0d1117;">
          <!-- Head -->
          <circle cx="0" cy="-28" r="5" fill="currentColor"></circle>
          <!-- Torso -->
          <line x1="0" y1="-23" x2="0" y2="-10" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"></line>
          <!-- Left Arm (Raised) -->
          <line x1="0" y1="-20" x2="-10" y2="-32" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"></line>
          <!-- Right Arm (Raised) -->
          <line x1="0" y1="-20" x2="10" y2="-32" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"></line>
          <!-- Left Leg -->
          <line x1="0" y1="-10" x2="-8" y2="0" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"></line>
          <!-- Right Leg -->
          <line x1="0" y1="-10" x2="8" y2="0" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"></line>
        </g>
      </svg>`;

      svgWrapper.innerHTML = svgHTML;
    }

    // Initial draw
    drawPaths();

    // Redraw on resize
    let resizeTimer;
    window.addEventListener('resize', () => {
      clearTimeout(resizeTimer);
      resizeTimer = setTimeout(drawPaths, 100);
    });
  }

  // Boot
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initHowWeHelp);
  } else {
    initHowWeHelp();
  }

})();
