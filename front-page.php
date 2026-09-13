<?php
/**
 * Template Name: Modern SaaS Home
 *
 * @package TBI_Theme
 */

get_header();
?>

<!-- ══════════════════════════════════════════════════════════════════════════
     HERO SECTION — Exact match with reference design
     ══════════════════════════════════════════════════════════════════════════ -->
<section class="hero-light-section" aria-label="Hero landing section">

    <!-- 3D Isometric Cube Circular Dome on Left -->
    <div class="hero-dome-wrapper" aria-hidden="true">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/isometric-cubes-dome.svg" alt="" class="hero-dome-img">
    </div>

    <!-- Main Hero Inner Container -->
    <div class="hero-light-inner">

        <!-- Left / Center Content: Headline & Advantage -->
        <div class="hero-left-content">

            <!-- Main Headline — clean single-block, no word-splitting -->
            <div class="hero-headline-wrap">
                <h1 class="hero-light-headline">
                    We create and incubate<br>
                    companies that are<br>
                    <span class="word-sustainable">sustainable</span>
                </h1>
            </div>
        </div><!-- /.hero-left-content -->

        <!-- Right Side: Two-Column Vertical Infinite Slider -->
        <div class="hero-cards-wrapper hero-slider-wrapper">
            <!-- Top Fade-out Mask -->
            <div class="hero-slider-fade hero-slider-fade-top" aria-hidden="true"></div>

            <div class="hero-slider-container" aria-label="Incubated startups slider">
                <!-- Column 1: Scrolling Upwards -->
                <div class="hero-slider-col hero-slider-col-1">
                    <div class="hero-slider-track hero-slider-track-up">
                        <!-- Group 1 -->
                        <div class="hero-slider-group">
                            <div class="hero-card">
                                <span class="hero-card-name">Michel</span>
                            </div>
                            <div class="hero-card">
                                <span class="hero-card-name">Ilark</span>
                            </div>
                            <div class="hero-card">
                                <span class="hero-card-name">Same Ad</span>
                            </div>
                        </div>
                        <!-- Group 2 (Duplicate for seamless loop) -->
                        <div class="hero-slider-group" aria-hidden="true">
                            <div class="hero-card">
                                <span class="hero-card-name">Michel</span>
                            </div>
                            <div class="hero-card">
                                <span class="hero-card-name">Ilark</span>
                            </div>
                            <div class="hero-card">
                                <span class="hero-card-name">Same Ad</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Column 2: Scrolling Downwards (Reverse) -->
                <div class="hero-slider-col hero-slider-col-2">
                    <div class="hero-slider-track hero-slider-track-down">
                        <!-- Group 1 -->
                        <div class="hero-slider-group">
                            <div class="hero-card">
                                <span class="hero-card-name">Michel<br>Woofers</span>
                            </div>
                            <div class="hero-card">
                                <span class="hero-card-name">R1Fer</span>
                            </div>
                            <div class="hero-card">
                                <span class="hero-card-name hero-card-options">and these<br>type of options</span>
                            </div>
                        </div>
                        <!-- Group 2 (Duplicate for seamless loop) -->
                        <div class="hero-slider-group" aria-hidden="true">
                            <div class="hero-card">
                                <span class="hero-card-name">Michel<br>Woofers</span>
                            </div>
                            <div class="hero-card">
                                <span class="hero-card-name">R1Fer</span>
                            </div>
                            <div class="hero-card">
                                <span class="hero-card-name hero-card-options">and these<br>type of options</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.hero-slider-container -->

            <!-- Bottom Fade-out Mask -->
            <div class="hero-slider-fade hero-slider-fade-bottom" aria-hidden="true"></div>
        </div><!-- /.hero-cards-wrapper -->

    </div><!-- /.hero-light-inner -->
</section>

<!-- ══════════════════════════════════════════════════════════════════════════
     STATS / METRICS SECTION — Light Theme Grid
     ══════════════════════════════════════════════════════════════════════════ -->
<section class="stats-metrics-section" aria-label="Our key metrics and impact">
    <div class="stats-metrics-container">

        <!-- Left Column: Narrow Intro Text (Vertically Centered) -->
        <div class="stats-intro-col">
            <p class="stats-intro-text">
                RCOEM TBI Foundation is an innovation and entrepreneurship ecosystem. We support ideas, nurture startups, empower founders, and help transform promising ventures into meaningful impact.
            </p>
        </div>

        <!-- Right Column: Wide 2x3 Stat Grid with Hairline Dividers -->
        <div class="stats-grid-col">
            <div class="stats-hairline-grid">

                <!-- Stat 1 -->
                <div class="stat-cell">
                    <span class="stat-cell-number">95+</span>
                    <span class="stat-cell-label">Startup Ideas<br>Curated</span>
                </div>

                <!-- Stat 2 -->
                <div class="stat-cell">
                    <span class="stat-cell-number">30+</span>
                    <span class="stat-cell-label">Registered<br>Companies</span>
                </div>

                <!-- Stat 3 -->
                <div class="stat-cell">
                    <span class="stat-cell-number">17</span>
                    <span class="stat-cell-label">Funded<br>Startups</span>
                </div>

                <!-- Stat 4 -->
                <div class="stat-cell">
                    <span class="stat-cell-number">74+L</span>
                    <span class="stat-cell-label">Funding by<br>RBU</span>
                </div>

                <!-- Stat 5 -->
                <div class="stat-cell">
                    <span class="stat-cell-number">17</span>
                    <span class="stat-cell-label">Revenue<br>Generating</span>
                </div>

                <!-- Stat 6 -->
                <div class="stat-cell">
                    <span class="stat-cell-number">3Cr</span>
                    <span class="stat-cell-label">External Fund<br>Raised</span>
                </div>

            </div>
        </div>

    </div>
</section>

<!-- ══════════════════════════════════════════════════════════════════════════
     OBJECTIVES SECTION — Scroll-Driven Winding Path Journey
     ══════════════════════════════════════════════════════════════════════════ -->
<section class="obj-journey-section" id="obj-journey-section" aria-label="Our Objectives">

    <!-- Section Header -->
    <div class="obj-journey-header">
        <span class="obj-journey-eyebrow">What We Do</span>
        <h2 class="obj-journey-title">Our Objectives</h2>
        <p class="obj-journey-sub">How RCOEM TBI drives innovation, growth, and impact across the startup ecosystem.</p>
    </div>

    <!-- Journey Body: SVG path + step items (SVG injected by JS) -->
    <div class="obj-journey-body">

        <!-- Step 01: Eco-System (LEFT) -->
        <div class="obj-step obj-step--left" data-step="0">
            <div class="obj-node-circle" data-step="0">
                <svg class="obj-node-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
                <span class="obj-node-num">01</span>
            </div>
            <div class="obj-step-text">
                <span class="obj-step-eyebrow">Objective</span>
                <h3 class="obj-step-title">Eco-System</h3>
                <p class="obj-step-desc">Nurturing innovation and Startups in the region for sustainable economic growth.</p>
                <div class="obj-step-tags">
                    <span class="obj-step-tag">Innovation</span>
                    <span class="obj-step-tag">Growth</span>
                </div>
            </div>
        </div>

        <!-- Step 02: Venture Creation (RIGHT) -->
        <div class="obj-step obj-step--right" data-step="1">
            <div class="obj-node-circle" data-step="1">
                <svg class="obj-node-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M9.5 2A2.5 2.5 0 0 1 12 4.5v15a2.5 2.5 0 0 1-5 0V4.5A2.5 2.5 0 0 1 9.5 2z"/><path d="M14.5 8A2.5 2.5 0 0 1 17 10.5V18a2.5 2.5 0 0 1-5 0v-7.5A2.5 2.5 0 0 1 14.5 8z"/><path d="M4.5 14A2.5 2.5 0 0 1 7 16.5V19a2.5 2.5 0 0 1-5 0v-2.5A2.5 2.5 0 0 1 4.5 14z"/></svg>
                <span class="obj-node-num">02</span>
            </div>
            <div class="obj-step-text">
                <span class="obj-step-eyebrow">Objective</span>
                <h3 class="obj-step-title">Venture Creation</h3>
                <p class="obj-step-desc">Inculcate entrepreneurship and new venture creation based on innovative technology.</p>
                <div class="obj-step-tags">
                    <span class="obj-step-tag">Startups</span>
                    <span class="obj-step-tag">Innovation</span>
                </div>
            </div>
        </div>

        <!-- Step 03: Tech Commercialization (LEFT) -->
        <div class="obj-step obj-step--left" data-step="2">
            <div class="obj-node-circle" data-step="2">
                <svg class="obj-node-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><rect x="2" y="2" width="20" height="8" rx="2"/><rect x="2" y="14" width="20" height="8" rx="2"/><line x1="6" y1="6" x2="6.01" y2="6"/><line x1="6" y1="18" x2="6.01" y2="18"/></svg>
                <span class="obj-node-num">03</span>
            </div>
            <div class="obj-step-text">
                <span class="obj-step-eyebrow">Objective</span>
                <h3 class="obj-step-title">Tech Commercialization</h3>
                <p class="obj-step-desc">Platform for speedy commercialization of technologies from the host institution.</p>
                <div class="obj-step-tags">
                    <span class="obj-step-tag">Commercialization</span>
                    <span class="obj-step-tag">IPR</span>
                </div>
            </div>
        </div>

        <!-- Step 04: Interfacing (RIGHT) -->
        <div class="obj-step obj-step--right" data-step="3">
            <div class="obj-node-circle" data-step="3">
                <svg class="obj-node-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
                <span class="obj-node-num">04</span>
            </div>
            <div class="obj-step-text">
                <span class="obj-step-eyebrow">Objective</span>
                <h3 class="obj-step-title">Interfacing</h3>
                <p class="obj-step-desc">Interfacing between academia, industry, and financial institutions.</p>
                <div class="obj-step-tags">
                    <span class="obj-step-tag">Industry</span>
                    <span class="obj-step-tag">Academia</span>
                </div>
            </div>
        </div>

        <!-- Step 05: Networking (LEFT) -->
        <div class="obj-step obj-step--left" data-step="4">
            <div class="obj-node-circle" data-step="4">
                <svg class="obj-node-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><circle cx="12" cy="5" r="3"/><circle cx="5" cy="19" r="3"/><circle cx="19" cy="19" r="3"/><line x1="12" y1="8" x2="5" y2="16"/><line x1="12" y1="8" x2="19" y2="16"/></svg>
                <span class="obj-node-num">05</span>
            </div>
            <div class="obj-step-text">
                <span class="obj-step-eyebrow">Objective</span>
                <h3 class="obj-step-title">Networking</h3>
                <p class="obj-step-desc">Networking between academia, industry and financial institution.</p>
                <div class="obj-step-tags">
                    <span class="obj-step-tag">Connect</span>
                    <span class="obj-step-tag">Collaborate</span>
                </div>
            </div>
        </div>

        <!-- Step 06: Value Addition (RIGHT) -->
        <div class="obj-step obj-step--right" data-step="5">
            <div class="obj-node-circle" data-step="5">
                <svg class="obj-node-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                <span class="obj-node-num">06</span>
            </div>
            <div class="obj-step-text">
                <span class="obj-step-eyebrow">Objective</span>
                <h3 class="obj-step-title">Value Addition</h3>
                <p class="obj-step-desc">Value added services: legal, financial, technical, IPR, and more.</p>
                <div class="obj-step-tags">
                    <span class="obj-step-tag">Services</span>
                    <span class="obj-step-tag">Support</span>
                </div>
            </div>
        </div>

    </div><!-- /.obj-journey-body -->
</section>



<!-- ══════════════════════════════════════════════════════════════════════════
     FINAL CTA BANNER
     ══════════════════════════════════════════════════════════════════════════ -->
<section style="padding:80px 0;background:var(--lt-bg,#F7F7F5);position:relative;z-index:10;overflow:hidden;">
    <div style="max-width:1200px;margin:0 auto;padding:0 48px;">
        <div class="cloudflare-cta-banner" style="border-radius:2rem;padding:72px 56px;text-align:center;position:relative;">

            <div class="cf-dot-grid" aria-hidden="true"></div>
            <div class="cf-bottom-glow" aria-hidden="true"></div>

            <div class="cf-floating-badge cf-float-1" style="top:14%;left:5%;" aria-hidden="true"><div class="cf-diamond-inner"><i class="fas fa-server"></i></div></div>
            <div class="cf-floating-badge cf-float-2" style="top:55%;left:3%;" aria-hidden="true"><div class="cf-diamond-inner"><i class="fas fa-sliders-h"></i></div></div>
            <div class="cf-floating-badge cf-float-1" style="top:14%;right:5%;" aria-hidden="true"><div class="cf-diamond-inner"><i class="fas fa-layer-group"></i></div></div>
            <div class="cf-floating-badge cf-float-3" style="top:55%;right:3%;" aria-hidden="true"><div class="cf-diamond-inner"><i class="fas fa-cube"></i></div></div>

            <div style="position:relative;z-index:10;max-width:640px;margin:0 auto;">
                <h2 style="font-family:'Playfair Display',Georgia,serif;font-size:clamp(1.8rem,3.2vw,3rem);font-weight:800;color:#1A1A2E;margin-bottom:18px;line-height:1.15;letter-spacing:-0.02em;">
                    Ready to Launch Your Startup?
                </h2>
                <p style="font-family:'Inter',sans-serif;font-size:1rem;color:rgba(255,255,255,0.90);line-height:1.7;margin-bottom:36px;max-width:500px;margin-left:auto;margin-right:auto;">
                    Join RCOEM TBI and get access to co-working spaces, expert mentors, funding connections, and a thriving startup community.
                </p>
                <div style="display:flex;gap:14px;justify-content:center;flex-wrap:wrap;">
                    <a href="https://forms.gle/hzaZ7GbYGFqg2V3fA" target="_blank" rel="noopener" id="cta-apply-btn"
                       style="padding:13px 34px;background:#fff;color:#1A1A2E;border-radius:9999px;font-weight:700;font-size:0.9rem;text-decoration:none;box-shadow:0 4px 20px rgba(0,0,0,0.15);font-family:'Inter',sans-serif;transition:all 0.25s ease;">
                        Apply for Incubation Now
                    </a>
                    <a href="<?php echo esc_url(home_url('/services/')); ?>" id="cta-services-btn"
                       style="padding:13px 28px;background:rgba(255,255,255,0.20);color:#fff;border-radius:9999px;font-weight:600;font-size:0.9rem;text-decoration:none;border:1px solid rgba(255,255,255,0.30);font-family:'Inter',sans-serif;transition:all 0.25s ease;">
                        Explore Services
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
