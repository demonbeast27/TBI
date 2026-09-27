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

    <!-- Infinite scrolling grid background, with a cursor-following reveal -->
    <div class="hero-infinite-grid" aria-hidden="true">
        <div class="hero-grid-layer hero-grid-layer--base"></div>
        <div class="hero-grid-layer hero-grid-layer--reveal"></div>
    </div>

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
                    We create, incubate,<br>
                    and <span class="word-sustainable">accelerate.</span>
                </h1>
            </div>

            <!-- CTA Buttons -->
            <div class="hero-light-ctas">
                <a href="https://forms.gle/hzaZ7GbYGFqg2V3fA" target="_blank" rel="noopener" class="btn-hero-primary" id="hero-apply-btn">
                    Apply for Incubation
                    <svg class="hero-btn-arrow" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </a>
                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="btn-hero-secondary" id="hero-explore-btn">
                    Explore Services
                </a>
            </div>
        </div><!-- /.hero-left-content -->

        <!-- Right Side: Two-Column Vertical Infinite Slider -->
        <div class="hero-cards-wrapper hero-slider-wrapper">
            <!-- Top Fade-out Mask -->
            <div class="hero-slider-fade hero-slider-fade-top" aria-hidden="true"></div>

            <div class="hero-slider-container" aria-label="Incubated startups slider">

                <!-- Column 1: Scrolling Upwards (11 startups) -->
                <div class="hero-slider-col hero-slider-col-1">
                    <div class="hero-slider-track hero-slider-track-up">
                        <!-- Group 1 -->
                        <div class="hero-slider-group">
                            <!-- 1. Happico India (Rocca) -->
                            <div class="hero-card">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Logos/ROCCA.png" alt="Happico India (Rocca)" class="hero-card-logo">
                            </div>

<!-- 3. Sigmatronics Innovations -->
                            <div class="hero-card">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Logos/SIGMATRONICS.png" alt="Sigmatronics Innovations" class="hero-card-logo">
                            </div>

<!-- 5. Empowrclub -->
                            <div class="hero-card">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Logos/EMPOWRCLUB.png" alt="Empowrclub" class="hero-card-logo">
                            </div>
                            <!-- 6. Shashtav Charging Bharat -->
                            <div class="hero-card">
                                <span class="hero-card-name">Shashtav<br>Charging Bharat</span>
                            </div>
                            <!-- 7. Health COCO / Smiling Bird -->
                            <div class="hero-card">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Logos/SMILEBIRD.png" alt="Health COCO / Smiling Bird" class="hero-card-logo">
                            </div>
                            <!-- 8. Easywire Technology -->
                            <div class="hero-card">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Logos/EASYWIRE.png" alt="Easywire Technology" class="hero-card-logo">
                            </div>
                            <!-- 9. MechHelp -->
                            <div class="hero-card">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Logos/MECHHELP.png" alt="MechHelp" class="hero-card-logo">
                            </div>
                            <!-- 10. Prograssia (Sharun Innovations) -->
                            <div class="hero-card">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Logos/PROGRESSIA.png" alt="Prograssia" class="hero-card-logo">
                            </div>
                            <!-- 11. HAWLT Technology -->
                            <div class="hero-card">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Logos/HAWLA.png" alt="HAWLT Technology" class="hero-card-logo">
                            </div>
                        </div>
                        <!-- Group 2 (Duplicate for seamless loop) -->
                        <div class="hero-slider-group" aria-hidden="true">
                            <div class="hero-card"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Logos/ROCCA.png" alt="Happico India (Rocca)" class="hero-card-logo"></div>
<div class="hero-card"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Logos/SIGMATRONICS.png" alt="Sigmatronics Innovations" class="hero-card-logo"></div>
<div class="hero-card"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Logos/EMPOWRCLUB.png" alt="Empowrclub" class="hero-card-logo"></div>
                            <div class="hero-card"><span class="hero-card-name">Shashtav<br>Charging Bharat</span></div>
                            <div class="hero-card"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Logos/SMILEBIRD.png" alt="Health COCO / Smiling Bird" class="hero-card-logo"></div>
                            <div class="hero-card"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Logos/EASYWIRE.png" alt="Easywire Technology" class="hero-card-logo"></div>
                            <div class="hero-card"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Logos/MECHHELP.png" alt="MechHelp" class="hero-card-logo"></div>
                            <div class="hero-card"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Logos/PROGRESSIA.png" alt="Prograssia" class="hero-card-logo"></div>
                            <div class="hero-card"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Logos/HAWLA.png" alt="HAWLT Technology" class="hero-card-logo"></div>
                        </div>
                    </div>
                </div>

                <!-- Column 2: Scrolling Downwards (Reverse) — 11 startups -->
                <div class="hero-slider-col hero-slider-col-2">
                    <div class="hero-slider-track hero-slider-track-down">
                        <!-- Group 1 -->
                        <div class="hero-slider-group">
                            <!-- 12. Bio-Spectronics -->
                            <div class="hero-card">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Logos/BIOSPECTRONICS.png" alt="Bio-Spectronics" class="hero-card-logo">
                            </div>
                            <!-- 13. Parkby -->
                            <div class="hero-card">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/tbi-photos/parkby.png" alt="Parkby" class="hero-card-logo">
                            </div>
                            <!-- 14. Rihla Technologies (Yoo CAB) -->
                            <div class="hero-card">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Logos/YOO CABS.png" alt="Rihla Technologies (Yoo CAB)" class="hero-card-logo">
                            </div>
                            <!-- 15. DVSLA Technologies -->
                            <div class="hero-card">
                                <span class="hero-card-name">DVSLA<br>Technologies</span>
                            </div>
                            <!-- 16. Wooferzz Innovations -->
                            <div class="hero-card">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Logos/WOOFERZZ.png" alt="Wooferzz Innovations" class="hero-card-logo">
                            </div>

<!-- 18. BeRAM -->
                            <div class="hero-card">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Logos/BERAM.png" alt="BeRAM" class="hero-card-logo">
                            </div>
                            <!-- 19. Wise-Besarv -->
                            <div class="hero-card">
                                <span class="hero-card-name">Wise-Besarv</span>
                            </div>
                            <!-- 20. Pbridge Consultancy -->
                            <div class="hero-card">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Logos/PBRIDGE.png" alt="Pbridge Consultancy" class="hero-card-logo">
                            </div>

<!-- 22. Cupda Project -->
                            <div class="hero-card">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Logos/Cupda Project.png" alt="Cupda Project" class="hero-card-logo">
                            </div>
                        </div>
                        <!-- Group 2 (Duplicate for seamless loop) -->
                        <div class="hero-slider-group" aria-hidden="true">
                            <div class="hero-card"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Logos/BIOSPECTRONICS.png" alt="Bio-Spectronics" class="hero-card-logo"></div>
                            <div class="hero-card"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/tbi-photos/parkby.png" alt="Parkby" class="hero-card-logo"></div>
                            <div class="hero-card"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Logos/YOO CABS.png" alt="Rihla Technologies (Yoo CAB)" class="hero-card-logo"></div>
                            <div class="hero-card"><span class="hero-card-name">DVSLA<br>Technologies</span></div>
                            <div class="hero-card"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Logos/WOOFERZZ.png" alt="Wooferzz Innovations" class="hero-card-logo"></div>
<div class="hero-card"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Logos/BERAM.png" alt="BeRAM" class="hero-card-logo"></div>
                            <div class="hero-card"><span class="hero-card-name">Wise-Besarv</span></div>
                            <div class="hero-card"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Logos/PBRIDGE.png" alt="Pbridge Consultancy" class="hero-card-logo"></div>
<div class="hero-card"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Logos/Cupda Project.png" alt="Cupda Project" class="hero-card-logo"></div>
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
                    <span class="stat-cell-number" data-target="95" data-suffix="+">95+</span>
                    <span class="stat-cell-label">Startup Ideas<br>Curated</span>
                </div>

                <!-- Stat 2 -->
                <div class="stat-cell">
                    <span class="stat-cell-number" data-target="30" data-suffix="+">30+</span>
                    <span class="stat-cell-label">Registered<br>Companies</span>
                </div>

                <!-- Stat 3 -->
                <div class="stat-cell">
                    <span class="stat-cell-number" data-target="17">17</span>
                    <span class="stat-cell-label">Funded<br>Startups</span>
                </div>

                <!-- Stat 4 -->
                <div class="stat-cell">
                    <span class="stat-cell-number" data-target="74" data-suffix="+L">74+L</span>
                    <span class="stat-cell-label">Funding by<br>RBU</span>
                </div>

                <!-- Stat 5 -->
                <div class="stat-cell">
                    <span class="stat-cell-number" data-target="17">17</span>
                    <span class="stat-cell-label">Revenue<br>Generating</span>
                </div>

                <!-- Stat 6 -->
                <div class="stat-cell">
                    <span class="stat-cell-number" data-target="3" data-suffix="Cr">3Cr</span>
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
        <h2 class="obj-journey-title">Our Objectives</h2>
        <p class="obj-journey-sub">How RCOEM TBI drives innovation, growth, and impact across the startup ecosystem.</p>
    </div>

    <!-- Journey Body: SVG path + step items (SVG injected by JS) -->
    <div class="obj-journey-body">

        <!-- Step 01: Eco-System (LEFT) -->
        <div class="obj-step obj-step--left" data-step="0">
            <div class="obj-node-circle" data-step="0">
                <span class="obj-node-num">01</span>
            </div>
            <div class="obj-step-text">
                <h3 class="obj-step-title">Eco-System</h3>
                <p class="obj-step-desc">Nurturing innovation and Startups in the region for sustainable economic growth.</p>
            </div>
        </div>

        <!-- Step 02: Venture Creation (RIGHT) -->
        <div class="obj-step obj-step--right" data-step="1">
            <div class="obj-node-circle" data-step="1">
                <span class="obj-node-num">02</span>
            </div>
            <div class="obj-step-text">
                <h3 class="obj-step-title">Venture Creation</h3>
                <p class="obj-step-desc">Inculcate entrepreneurship and new venture creation based on innovative technology.</p>
            </div>
        </div>

        <!-- Step 03: Tech Commercialization (LEFT) -->
        <div class="obj-step obj-step--left" data-step="2">
            <div class="obj-node-circle" data-step="2">
                <span class="obj-node-num">03</span>
            </div>
            <div class="obj-step-text">
                <h3 class="obj-step-title">Tech Commercialization</h3>
                <p class="obj-step-desc">Platform for speedy commercialization of technologies from the host institution.</p>
            </div>
        </div>

        <!-- Step 04: Networking (RIGHT) -->
        <div class="obj-step obj-step--right" data-step="3">
            <div class="obj-node-circle" data-step="3">
                <span class="obj-node-num">04</span>
            </div>
            <div class="obj-step-text">
                <h3 class="obj-step-title">Networking</h3>
                <p class="obj-step-desc">Networking between academia, industry and financial institution.</p>
            </div>
        </div>

        <!-- Step 05: Value Addition (LEFT) -->
        <div class="obj-step obj-step--left" data-step="4">
            <div class="obj-node-circle" data-step="4">
                <span class="obj-node-num">05</span>
            </div>
            <div class="obj-step-text">
                <h3 class="obj-step-title">Value Addition</h3>
                <p class="obj-step-desc">Value added services: legal, financial, technical, IPR, and more.</p>
            </div>
        </div>

    </div><!-- /.obj-journey-body -->
</section>



<!-- ══════════════════════════════════════════════════════════════════════════
     FINAL CTA BANNER
     ══════════════════════════════════════════════════════════════════════════ -->
<section class="cta-banner-section" aria-label="Ready to launch">
    <div class="cta-banner-wrap">
        <div class="cloudflare-cta-banner">

            <div class="cf-dot-grid" aria-hidden="true"></div>
            <div class="cf-bottom-glow" aria-hidden="true"></div>

            <div class="cta-banner-content">
                <h2 class="cta-banner-title">
                    Ready to Launch Your Startup?
                </h2>
                <p class="cta-banner-text">
                    Join RCOEM TBI and get access to co-working spaces, expert mentors, funding connections, and a thriving startup community.
                </p>
                <div class="cta-banner-actions">
                    <a href="https://forms.gle/hzaZ7GbYGFqg2V3fA" target="_blank" rel="noopener" id="cta-apply-btn" class="cta-btn cta-btn--primary">
                        Apply for Incubation Now
                    </a>
                    <a href="<?php echo esc_url(home_url('/services/')); ?>" id="cta-services-btn" class="cta-btn cta-btn--ghost">
                        Explore Services
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
