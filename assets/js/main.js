// Safety fallback: ensure animated elements are always visible if JS fails.
// IntersectionObserver / GSAP will override these when running correctly.
(function () {
    const style = document.createElement('style');
    style.id = 'anim-safety-fallback';
    style.textContent = `
        .anim-ready {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.7s ease, transform 0.7s ease, filter 0.7s ease;
        }
        .anim-ready.anim-from-left  { transform: translateX(-30px); }
        .anim-ready.anim-blur       { filter: blur(8px); transform: translateY(16px); }
        .anim-ready.anim-visible    { opacity: 1 !important; transform: none !important; filter: none !important; }
    `;
    document.head.appendChild(style);
})();

document.addEventListener("DOMContentLoaded", () => {

    // ─── Initialize Lucide Icons ──────────────────────────────────────────────
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }

    // ─── 1. Lenis Smooth Scroll ───────────────────────────────────────────────
    if (typeof Lenis !== 'undefined') {
        const lenis = new Lenis({
            duration: 1.2,
            easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
            direction: 'vertical',
            gestureDirection: 'vertical',
            smooth: true,
            mouseMultiplier: 1,
            smoothTouch: false,
            touchMultiplier: 2,
            infinite: false,
        });

        // Integrate Lenis with GSAP ticker (no ScrollTrigger needed)
        if (typeof gsap !== 'undefined') {
            gsap.ticker.add((time) => {
                lenis.raf(time * 1000);
            });
            gsap.ticker.lagSmoothing(0);
        } else {
            function raf(time) {
                lenis.raf(time);
                requestAnimationFrame(raf);
            }
            requestAnimationFrame(raf);
        }
    }

    // ─── 2. IntersectionObserver Scroll Animations ────────────────────────────
    // Helper: observe an element and add .anim-visible when it enters the viewport
    function observeReveal(el, delay = 0) {
        el.style.transitionDelay = delay + 'ms';
        const io = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('anim-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });
        io.observe(el);
    }

    // A. Section Labels — fade in from left
    document.querySelectorAll('.section-label').forEach(el => {
        el.classList.add('anim-ready', 'anim-from-left');
        observeReveal(el);
    });

    // B. Page Headings — blur reveal, word by word
    document.querySelectorAll('.page-heading').forEach(el => {
        const text = el.innerText;
        const words = text.split(' ');
        el.innerHTML = words.map(word =>
            `<span class="anim-ready anim-blur" style="display:inline-block;">${word}</span>`
        ).join(' ');

        el.querySelectorAll('span').forEach((span, i) => {
            observeReveal(span, i * 60); // 60ms stagger per word
        });
    });

    // C. Paragraphs / mono-text — fade up
    document.querySelectorAll('.mono-text').forEach(el => {
        el.classList.add('anim-ready');
        observeReveal(el, 100);
    });

    // D. Accent Cards — staggered fade up per section
    document.querySelectorAll('.page-section').forEach(container => {
        const cards = container.querySelectorAll('.accent-card');
        cards.forEach((card, i) => {
            card.classList.add('anim-ready');
            observeReveal(card, i * 120);
        });
    });

    // E. Numbered Grid Items — staggered fade up
    document.querySelectorAll('.numbered-grid').forEach(grid => {
        grid.querySelectorAll('.numbered-item').forEach((item, i) => {
            item.classList.add('anim-ready');
            observeReveal(item, i * 80);
        });
    });

    // F. Staggered Images — img-back slides from right, img-front slides from left
    document.querySelectorAll('.staggered-images').forEach(container => {
        const imgBack  = container.querySelector('.img-back');
        const imgFront = container.querySelector('.img-front');
        if (imgBack)  { imgBack.classList.add('anim-ready');  observeReveal(imgBack,  0);   }
        if (imgFront) { imgFront.classList.add('anim-ready'); observeReveal(imgFront, 120); }
    });

    // G. Default split-layout images — fade up
    document.querySelectorAll(
        '.split-layout img:not(.img-back):not(.img-front):not(.coe-img-a):not(.coe-img-b)'
    ).forEach(img => {
        img.classList.add('anim-ready');
        observeReveal(img);
    });

    // ─── 3. Morphing Cards — GSAP Flip (unchanged, no ScrollTrigger) ──────────
    if (typeof gsap !== 'undefined' && typeof Flip !== 'undefined') {
        gsap.registerPlugin(Flip);

        const overlay = document.createElement('div');
        overlay.className = 'dialog-overlay';
        Object.assign(overlay.style, {
            position: 'fixed', top: 0, left: 0, width: '100%', height: '100%',
            background: 'rgba(0,0,0,0.6)', backdropFilter: 'blur(4px)',
            zIndex: 999, opacity: 0, pointerEvents: 'none', transition: 'opacity 0.3s'
        });
        document.body.appendChild(overlay);

        const dialogContainer = document.createElement('div');
        dialogContainer.className = 'dialog-container';
        Object.assign(dialogContainer.style, {
            position: 'fixed', top: '50%', left: '50%', transform: 'translate(-50%, -50%)',
            width: '90%', maxWidth: '600px', zIndex: 1000, pointerEvents: 'none'
        });
        document.body.appendChild(dialogContainer);

        let activeCard = null;
        let originalParent = null;
        let originalNextSibling = null;

        document.querySelectorAll('.accent-card').forEach(card => {
            card.style.cursor = 'pointer';
            card.addEventListener('click', () => {
                if (activeCard) return;
                activeCard = card;
                originalParent = card.parentNode;
                originalNextSibling = card.nextSibling;

                const state = Flip.getState(card);
                dialogContainer.appendChild(card);
                card.classList.add('expanded-dialog');
                Object.assign(card.style, {
                    width: '100%', height: 'auto', maxHeight: '80vh', overflowY: 'auto'
                });
                overlay.style.opacity = 1;
                overlay.style.pointerEvents = 'auto';
                dialogContainer.style.pointerEvents = 'auto';

                Flip.from(state, {
                    duration: 0.6,
                    ease: 'power3.inOut',
                    absolute: true,
                    zIndex: 1001,
                    onComplete: () => {
                        const closeBtn = document.createElement('button');
                        closeBtn.innerHTML = '&times;';
                        closeBtn.className = 'dialog-close-btn';
                        Object.assign(closeBtn.style, {
                            position: 'absolute', top: '16px', right: '16px',
                            background: 'rgba(0,0,0,0.1)', border: 'none', borderRadius: '50%',
                            width: '32px', height: '32px', display: 'flex', alignItems: 'center',
                            justifyContent: 'center', fontSize: '24px', cursor: 'pointer', color: 'var(--black)'
                        });
                        card.appendChild(closeBtn);
                        closeBtn.addEventListener('click', closeDialog);
                    }
                });
            });
        });

        overlay.addEventListener('click', closeDialog);

        function closeDialog(e) {
            if (e) e.stopPropagation();
            if (!activeCard) return;

            const closeBtn = activeCard.querySelector('.dialog-close-btn');
            if (closeBtn) closeBtn.remove();

            const state = Flip.getState(activeCard);

            if (originalNextSibling) {
                originalParent.insertBefore(activeCard, originalNextSibling);
            } else {
                originalParent.appendChild(activeCard);
            }

            activeCard.classList.remove('expanded-dialog');
            Object.assign(activeCard.style, {
                width: '', height: '', maxHeight: '', overflowY: ''
            });
            overlay.style.opacity = 0;
            overlay.style.pointerEvents = 'none';
            dialogContainer.style.pointerEvents = 'none';

            Flip.from(state, {
                duration: 0.6,
                ease: 'power3.inOut',
                absolute: true,
                zIndex: 1001,
                onComplete: () => {
                    activeCard = null;
                    originalParent = null;
                    originalNextSibling = null;
                }
            });
        }
    }
});
