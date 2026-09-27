/**
 * Mentors Directory Interactive Filters, Search & Horizontal Scrolling
 * RCOEM TBI Foundation
 */

document.addEventListener('DOMContentLoaded', () => {
    const track = document.getElementById('mentorsGrid');
    if (!track) return;

    const cards = Array.from(track.querySelectorAll('.mentor-card'));
    const filterBtns = Array.from(document.querySelectorAll('.mentor-filter-btn'));
    const searchInput = document.getElementById('mentorSearchInput');
    const searchClear = document.getElementById('mentorSearchClear');
    const countDisplay = document.getElementById('mentorCountDisplay');
    const emptyState = document.getElementById('mentorsEmptyState');
    const resetBtn = document.getElementById('mentorsResetBtn');

    // Horizontal Scroll Controls
    const prevBtn = document.getElementById('mentorScrollPrev');
    const nextBtn = document.getElementById('mentorScrollNext');
    const viewToggleBtns = Array.from(document.querySelectorAll('.view-toggle-btn'));

    let currentCategory = 'all';
    let searchQuery = '';

    // ─── 1. Filter & Search Logic ─────────────────────────────
    function applyFilters() {
        let visibleCount = 0;
        const normalizedQuery = searchQuery.trim().toLowerCase();

        cards.forEach(card => {
            const category = card.getAttribute('data-category') || '';
            const searchIndex = card.getAttribute('data-search') || '';

            const matchesCategory = (currentCategory === 'all' || category === currentCategory);
            const matchesSearch = !normalizedQuery || searchIndex.includes(normalizedQuery);

            if (matchesCategory && matchesSearch) {
                card.style.display = 'flex';
                visibleCount++;
            } else {
                card.style.display = 'none';
            }
        });

        // Update count
        if (countDisplay) {
            countDisplay.textContent = visibleCount;
        }

        // Handle empty state
        if (emptyState) {
            emptyState.style.display = (visibleCount === 0) ? 'block' : 'none';
        }

        // Reset scroll to beginning on filter/search change
        track.scrollTo({ left: 0, behavior: 'smooth' });
        updateArrowStates();
    }

    // Category button clicks
    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            filterBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            currentCategory = btn.getAttribute('data-filter') || 'all';
            applyFilters();
        });
    });

    // Search input
    if (searchInput) {
        searchInput.addEventListener('input', (e) => {
            searchQuery = e.target.value;
            if (searchClear) {
                if (searchQuery.length > 0) {
                    searchClear.classList.add('is-visible');
                } else {
                    searchClear.classList.remove('is-visible');
                }
            }
            applyFilters();
        });
    }

    // Search clear button
    if (searchClear && searchInput) {
        searchClear.addEventListener('click', () => {
            searchInput.value = '';
            searchQuery = '';
            searchClear.classList.remove('is-visible');
            searchInput.focus();
            applyFilters();
        });
    }

    // Reset button in empty state
    if (resetBtn) {
        resetBtn.addEventListener('click', () => {
            currentCategory = 'all';
            searchQuery = '';
            if (searchInput) searchInput.value = '';
            if (searchClear) searchClear.classList.remove('is-visible');
            filterBtns.forEach(b => {
                if (b.getAttribute('data-filter') === 'all') {
                    b.classList.add('active');
                } else {
                    b.classList.remove('active');
                }
            });
            applyFilters();
        });
    }

    // ─── 2. Horizontal Scroll Buttons ─────────────────────────
    function getScrollStep() {
        const firstVisibleCard = cards.find(c => c.style.display !== 'none');
        if (firstVisibleCard) {
            return (firstVisibleCard.offsetWidth + 24) * 1.5;
        }
        return 384;
    }

    function updateArrowStates() {
        if (!prevBtn || !nextBtn) return;
        const maxScrollLeft = track.scrollWidth - track.clientWidth - 5;
        prevBtn.disabled = track.scrollLeft <= 5;
        nextBtn.disabled = track.scrollLeft >= maxScrollLeft;
    }

    if (prevBtn) {
        prevBtn.addEventListener('click', () => {
            track.scrollBy({ left: -getScrollStep(), behavior: 'smooth' });
        });
    }

    if (nextBtn) {
        nextBtn.addEventListener('click', () => {
            track.scrollBy({ left: getScrollStep(), behavior: 'smooth' });
        });
    }

    track.addEventListener('scroll', () => {
        updateArrowStates();
    }, { passive: true });

    // Initial check
    setTimeout(updateArrowStates, 300);
    window.addEventListener('resize', updateArrowStates);

    // ─── 3. Mouse Drag-to-Scroll ──────────────────────────────
    let isDown = false;
    let startX;
    let scrollLeft;

    track.addEventListener('mousedown', (e) => {
        if (track.classList.contains('view-mode-grid')) return;
        // Don't drag if clicking buttons or links
        if (e.target.closest('button') || e.target.closest('a')) return;

        isDown = true;
        track.classList.add('is-dragging');
        startX = e.pageX - track.offsetLeft;
        scrollLeft = track.scrollLeft;
    });

    track.addEventListener('mouseleave', () => {
        isDown = false;
        track.classList.remove('is-dragging');
    });

    track.addEventListener('mouseup', () => {
        isDown = false;
        track.classList.remove('is-dragging');
    });

    track.addEventListener('mousemove', (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - track.offsetLeft;
        const walk = (x - startX) * 1.4; // Scroll speed multiplier
        track.scrollLeft = scrollLeft - walk;
    });

    // ─── 4. View Mode Toggle (Scroll vs Grid) ─────────────────
    viewToggleBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const mode = btn.getAttribute('data-view');
            viewToggleBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            if (mode === 'grid') {
                track.classList.add('view-mode-grid');
                if (prevBtn) prevBtn.style.display = 'none';
                if (nextBtn) nextBtn.style.display = 'none';
            } else {
                track.classList.remove('view-mode-grid');
                if (prevBtn) prevBtn.style.display = 'flex';
                if (nextBtn) nextBtn.style.display = 'flex';
                updateArrowStates();
            }
        });
    });

    // ─── 5. Image Fallback Handling ───────────────────────────
    const avatarImages = track.querySelectorAll('.mentor-avatar-img');
    avatarImages.forEach(img => {
        img.addEventListener('error', function() {
            const mentorName = this.getAttribute('alt') || 'Mentor';
            const initials = mentorName.split(' ')
                .filter(w => w && !w.startsWith('Dr.'))
                .slice(0, 2)
                .map(n => n[0])
                .join('')
                .toUpperCase() || 'M';

            const fallbackDiv = document.createElement('div');
            fallbackDiv.className = 'mentor-avatar-fallback';
            fallbackDiv.style.width = '100%';
            fallbackDiv.style.height = '100%';
            fallbackDiv.style.borderRadius = '50%';
            fallbackDiv.style.background = '#0057b0';
            fallbackDiv.style.color = '#ffffff';
            fallbackDiv.style.display = 'flex';
            fallbackDiv.style.alignItems = 'center';
            fallbackDiv.style.justifyContent = 'center';
            fallbackDiv.style.fontWeight = '700';
            fallbackDiv.style.fontSize = '1.4rem';
            fallbackDiv.style.border = '2px solid #ffffff';
            fallbackDiv.textContent = initials;

            if (this.parentNode) {
                this.parentNode.replaceChild(fallbackDiv, this);
            }
        });
    });
});
