/* ==========================================================================
   Flip Cards Init
   ========================================================================== */

(function() {
  'use strict';

  function initFlipCards() {
    const cards = document.querySelectorAll('.objectives-flip-cards .flip-card');
    cards.forEach((card) => {
      card.addEventListener('mouseenter', () => {
        card.querySelector('.content').style.transform = 'rotateY(180deg)';
      });
      card.addEventListener('mouseleave', () => {
        card.querySelector('.content').style.transform = 'rotateY(0deg)';
      });
    });
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initFlipCards);
  } else {
    initFlipCards();
  }
})();
