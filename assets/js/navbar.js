/**
 * Clonix / Framer-Style Navbar Behavior & Vanilla Scroll Animations
 */
(function() {
    'use strict';

    document.addEventListener('DOMContentLoaded', () => {
        // =========================================================================
        // 1. Scroll-Triggered Floating Pill Navbar
        // =========================================================================
        const siteHeader = document.getElementById('siteHeader');
        const scrollThreshold = 30;
        let ticking = false;

        function updateNavbar() {
            const currentScroll = window.pageYOffset || document.documentElement.scrollTop;

            if (currentScroll > scrollThreshold) {
                siteHeader.classList.add('is-scrolled');
            } else {
                siteHeader.classList.remove('is-scrolled');
            }
            ticking = false;
        }

        window.addEventListener('scroll', () => {
            if (!ticking) {
                window.requestAnimationFrame(updateNavbar);
                ticking = true;
            }
        }, { passive: true });

        // Initial check on load
        updateNavbar();

        // =========================================================================
        // 2. StaggeredMenu Navigation (ported from React Bits)
        // =========================================================================
        const staggeredWrapper = document.getElementById('staggeredMenu');
        const staggeredToggle = document.getElementById('staggeredMenuToggle');
        
        if (staggeredWrapper && staggeredToggle && typeof gsap !== 'undefined') {
            const panel = staggeredWrapper.querySelector('.staggered-menu-panel');
            const preContainer = staggeredWrapper.querySelector('.sm-prelayers');
            const preLayers = Array.from(staggeredWrapper.querySelectorAll('.sm-prelayer'));
            const plusH = staggeredToggle.querySelector('.sm-icon-line:not(.sm-icon-line-v)');
            const plusV = staggeredToggle.querySelector('.sm-icon-line-v');
            const textInner = staggeredToggle.querySelector('.sm-toggle-textInner');
            const textWrap = staggeredToggle.querySelector('.sm-toggle-textWrap');
            
            let open = false;
            let busy = false;
            let openTl = null;
            let closeTween = null;
            let spinTween = null;
            let textCycleAnim = null;
            
            const position = staggeredWrapper.getAttribute('data-position') || 'right';
            const accentColor = staggeredWrapper.style.getPropertyValue('--sm-accent') || '#5227FF';
            
            // Initial state
            gsap.set([panel, ...preLayers], { xPercent: position === 'left' ? -100 : 100, opacity: 1 });
            if (preContainer) gsap.set(preContainer, { xPercent: 0, opacity: 1 });
            gsap.set(plusH, { transformOrigin: '50% 50%', rotate: 0 });
            gsap.set(plusV, { transformOrigin: '50% 50%', rotate: 90 });
            gsap.set(staggeredToggle, { color: '#fff' });
            
            function buildOpenTimeline() {
                openTl?.kill();
                closeTween?.kill();
                closeTween = null;
                
                const itemEls = Array.from(panel.querySelectorAll('.sm-panel-itemLabel'));
                const numberEls = Array.from(panel.querySelectorAll('.sm-panel-list[data-numbering] .sm-panel-item'));
                const socialTitle = panel.querySelector('.sm-socials-title');
                const socialLinks = Array.from(panel.querySelectorAll('.sm-socials-link'));
                
                const offscreen = position === 'left' ? -100 : 100;
                
                if (itemEls.length) gsap.set(itemEls, { yPercent: 140, rotate: 10 });
                if (numberEls.length) gsap.set(numberEls, { '--sm-num-opacity': 0 });
                if (socialTitle) gsap.set(socialTitle, { opacity: 0 });
                if (socialLinks.length) gsap.set(socialLinks, { y: 25, opacity: 0 });
                
                const tl = gsap.timeline({ paused: true });
                
                preLayers.forEach((el, i) => {
                    tl.fromTo(el, { xPercent: offscreen }, { xPercent: 0, duration: 0.5, ease: 'power4.out' }, i * 0.07);
                });
                
                const lastTime = preLayers.length ? (preLayers.length - 1) * 0.07 : 0;
                const panelInsertTime = lastTime + (preLayers.length ? 0.08 : 0);
                const panelDuration = 0.65;
                
                tl.fromTo(panel, { xPercent: offscreen }, { xPercent: 0, duration: panelDuration, ease: 'power4.out' }, panelInsertTime);
                
                if (itemEls.length) {
                    const itemsStart = panelInsertTime + panelDuration * 0.15;
                    tl.to(itemEls, {
                        yPercent: 0,
                        rotate: 0,
                        duration: 1,
                        ease: 'power4.out',
                        stagger: { each: 0.1, from: 'start' }
                    }, itemsStart);
                    
                    if (numberEls.length) {
                        tl.to(numberEls, {
                            duration: 0.6,
                            ease: 'power2.out',
                            '--sm-num-opacity': 1,
                            stagger: { each: 0.08, from: 'start' }
                        }, itemsStart + 0.1);
                    }
                }
                
                if (socialTitle || socialLinks.length) {
                    const socialsStart = panelInsertTime + panelDuration * 0.4;
                    if (socialTitle) {
                        tl.to(socialTitle, { opacity: 1, duration: 0.5, ease: 'power2.out' }, socialsStart);
                    }
                    if (socialLinks.length) {
                        tl.to(socialLinks, {
                            y: 0,
                            opacity: 1,
                            duration: 0.55,
                            ease: 'power3.out',
                            stagger: { each: 0.08, from: 'start' },
                            onComplete: () => gsap.set(socialLinks, { clearProps: 'opacity' })
                        }, socialsStart + 0.04);
                    }
                }
                
                openTl = tl;
                return tl;
            }
            
            function playOpen() {
                if (busy) return;
                busy = true;
                if (window.lenis) window.lenis.stop();
                document.body.style.overflow = 'hidden';
                const tl = buildOpenTimeline();
                if (tl) {
                    tl.eventCallback('onComplete', () => { busy = false; });
                    tl.play(0);
                } else {
                    busy = false;
                }
            }
            
            function playClose() {
                openTl?.kill();
                openTl = null;
                if (window.lenis) window.lenis.start();
                document.body.style.overflow = '';
                
                const all = [...preLayers, panel];
                closeTween?.kill();
                const offscreen = position === 'left' ? -100 : 100;
                closeTween = gsap.to(all, {
                    xPercent: offscreen,
                    duration: 0.32,
                    ease: 'power3.in',
                    overwrite: 'auto',
                    onComplete: () => {
                        const itemEls = Array.from(panel.querySelectorAll('.sm-panel-itemLabel'));
                        if (itemEls.length) gsap.set(itemEls, { yPercent: 140, rotate: 10 });
                        const numberEls = Array.from(panel.querySelectorAll('.sm-panel-list[data-numbering] .sm-panel-item'));
                        if (numberEls.length) gsap.set(numberEls, { '--sm-num-opacity': 0 });
                        const socialTitle = panel.querySelector('.sm-socials-title');
                        const socialLinks = Array.from(panel.querySelectorAll('.sm-socials-link'));
                        if (socialTitle) gsap.set(socialTitle, { opacity: 0 });
                        if (socialLinks.length) gsap.set(socialLinks, { y: 25, opacity: 0 });
                        busy = false;
                    }
                });
            }
            
            function animateIcon(opening) {
                spinTween?.kill();
                const icon = staggeredToggle.querySelector('.sm-icon');
                if (!icon) return;
                if (opening) {
                    spinTween = gsap.to(icon, { rotate: 225, duration: 0.8, ease: 'power4.out', overwrite: 'auto' });
                } else {
                    spinTween = gsap.to(icon, { rotate: 0, duration: 0.35, ease: 'power3.inOut', overwrite: 'auto' });
                }
            }
            
            function animateText(opening) {
                if (!textInner || !textWrap) return;
                textCycleAnim?.kill();
                
                const currentLabel = opening ? 'More' : 'Close';
                const targetLabel = opening ? 'Close' : 'More';
                const cycles = 3;
                const seq = [currentLabel];
                let last = currentLabel;
                for (let i = 0; i < cycles; i++) {
                    last = last === 'More' ? 'Close' : 'More';
                    seq.push(last);
                }
                if (last !== targetLabel) seq.push(targetLabel);
                seq.push(targetLabel);
                
                textInner.innerHTML = seq.map(l => `<span class="sm-toggle-line">${l}</span>`).join('');
                
                gsap.set(textInner, { yPercent: 0 });
                const lineCount = seq.length;
                const finalShift = ((lineCount - 1) / lineCount) * 100;
                textCycleAnim = gsap.to(textInner, {
                    yPercent: -finalShift,
                    duration: 0.5 + lineCount * 0.07,
                    ease: 'power4.out'
                });
            }
            
            function toggleMenu() {
                const target = !open;
                open = target;
                staggeredToggle.setAttribute('aria-expanded', target);
                staggeredToggle.setAttribute('aria-label', target ? 'Close menu' : 'Open menu');
                panel.setAttribute('aria-hidden', !target);
                staggeredWrapper.setAttribute('data-open', target || undefined);
                
                if (target) {
                    playOpen();
                } else {
                    playClose();
                }
                animateIcon(target);
                animateText(target);
            }
            
            function closeMenu() {
                if (!open) return;
                open = false;
                staggeredToggle.setAttribute('aria-expanded', 'false');
                staggeredToggle.setAttribute('aria-label', 'Open menu');
                panel.setAttribute('aria-hidden', 'true');
                staggeredWrapper.removeAttribute('data-open');
                playClose();
                animateIcon(false);
                animateText(false);
            }
            
            staggeredToggle.addEventListener('click', (e) => {
                e.stopPropagation();
                toggleMenu();
            });
            
            // Close on click away
            document.addEventListener('mousedown', (e) => {
                if (!open) return;
                if (
                    panel.contains(e.target) ||
                    staggeredToggle.contains(e.target)
                ) {
                    return;
                }
                closeMenu();
            });
            
            // Close on Escape
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape' && open) {
                    closeMenu();
                }
            });
            
            // Close menu links on click
            panel.querySelectorAll('a').forEach(link => {
                link.addEventListener('click', () => {
                    setTimeout(closeMenu, 150);
                });
            });
        }

        // =========================================================================
        // 4. Achievement Stats Number Counter Animation
        // =========================================================================
        const counters = document.querySelectorAll('.counter, [data-target]');

        if (counters.length > 0) {
            function animateCounter(el) {
                const targetAttr = el.getAttribute('data-target') || el.innerText.trim();
                const target = parseFloat(targetAttr);
                if (isNaN(target)) return;

                const isDecimal = targetAttr.includes('.');
                const decimals = isDecimal ? targetAttr.split('.')[1].length : 0;
                const duration = 1600; // ms
                let startTimestamp = null;

                function step(timestamp) {
                    if (!startTimestamp) startTimestamp = timestamp;
                    const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                    // Ease Out Cubic
                    const easeOut = 1 - Math.pow(1 - progress, 3);
                    const currentVal = easeOut * target;

                    el.innerText = isDecimal ? currentVal.toFixed(decimals) : Math.floor(currentVal);

                    if (progress < 1) {
                        window.requestAnimationFrame(step);
                    } else {
                        el.innerText = targetAttr;
                    }
                }

                window.requestAnimationFrame(step);
            }

            if ('IntersectionObserver' in window) {
                const counterObserver = new IntersectionObserver((entries, observer) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            animateCounter(entry.target);
                            observer.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.2 });

                counters.forEach(counter => counterObserver.observe(counter));
            } else {
                counters.forEach(animateCounter);
            }
        }
    });
})();
