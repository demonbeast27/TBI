/**
 * Hero infinite grid — cursor-following reveal.
 *
 * Drives the --grid-x / --grid-y custom properties that the radial mask on
 * .hero-grid-layer--reveal is built from. Writes are coalesced into a single
 * requestAnimationFrame so a fast pointer can't queue up style recalcs.
 *
 * The scroll animation itself is pure CSS (see hero-light.css).
 */
document.addEventListener('DOMContentLoaded', () => {
    const grids = document.querySelectorAll('.hero-infinite-grid');
    if (!grids.length) return;

    // Touch devices have no cursor to follow; CSS hides the reveal layer there.
    if (!window.matchMedia('(hover: hover) and (pointer: fine)').matches) {
        return;
    }

    const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)');

    grids.forEach(grid => {
        const hero = grid.parentElement;
        if (!hero) return;

        let rafId = null;
        let x = 0;
        let y = 0;

        const paint = () => {
            rafId = null;
            grid.style.setProperty('--grid-x', x + 'px');
            grid.style.setProperty('--grid-y', y + 'px');
        };

        hero.addEventListener('pointermove', event => {
            if (reduceMotion.matches) return;

            const rect = grid.getBoundingClientRect();
            x = event.clientX - rect.left;
            y = event.clientY - rect.top;

            grid.classList.add('is-active');

            if (rafId === null) {
                rafId = requestAnimationFrame(paint);
            }
        }, { passive: true });

        hero.addEventListener('pointerleave', () => {
            grid.classList.remove('is-active');
        }, { passive: true });
    });
});
