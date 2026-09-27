<?php
/**
 * Template Name: Modern SaaS Home
 *
 * @package TBI_Theme
 */

get_header();
?>

<!-- Light Hero Section -->
<section class="hero-light-section" aria-label="Hero">

    <!-- 3D Isometric Cube Background (CSS only) -->
    <div class="hero-cube-bg" aria-hidden="true"></div>
    <div class="hero-cube-bg-mask" aria-hidden="true"></div>

    <div class="hero-light-inner">

        <!-- Left: Text Content -->
        <div class="hero-light-text">

            <h1 class="hero-light-headline">
                We create, incubate,<br>
                and <span class="word-sustainable">accelerate.</span>
            </h1>

            <!-- OUR ADVANTAGE block -->
            <div class="hero-advantage">
                <span class="hero-advantage-label">Our Advantage</span>
                <div class="hero-advantage-wrap">
                    <div class="hero-advantage-body">
                        <span class="hero-advantage-plus">+</span>
                        <p class="hero-advantage-desc">
                            See how we mix industry expertise, influential talent, and hustle to launch impactful ventures.
                        </p>
                    </div>
                </div>
            </div>

            <!-- CTA Buttons -->
            <div class="hero-light-ctas">
                <a href="https://forms.gle/hzaZ7GbYGFqg2V3fA" target="_blank" class="btn-hero-primary" id="hero-apply-btn">
                    Apply for Incubation
                    <i class="fas fa-arrow-right" style="font-size:11px;"></i>
                </a>
                <a href="<?php echo esc_url(home_url('/about/')); ?>" class="btn-hero-secondary" id="hero-learn-btn">
                    Learn More
                </a>
            </div>

        </div>

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

    </div>
</section>

<!-- Achievements / Stats Section -->
<section class="stats-light-section" aria-label="Our Impact">
    <div class="stats-light-inner">

        <!-- Left Statement Column -->
        <div class="stats-light-statement">
            <p>
                RCOEM TBI is an independent innovation and startup ecosystem. This is a snapshot of our growth and impact.
            </p>
            <div class="video-wrap">
                <video style="width:100%;height:auto;display:block;"
                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/video/tbiVideo.mp4' ); ?>"
                    autoplay loop muted playsinline controlslist="nodownload"
                    aria-label="RBU TBI Growth and Impact Video"></video>
            </div>
        </div>

        <!-- Right 2×2 Stats Grid -->
        <div class="stats-light-grid">
            <div class="stat-light-item">
                <div class="stat-light-number">100+</div>
                <div class="stat-light-label">Startups Mentored</div>
            </div>
            <div class="stat-light-item">
                <div class="stat-light-number">70+</div>
                <div class="stat-light-label">Startups Incubated</div>
            </div>
            <div class="stat-light-item">
                <div class="stat-light-number">2.6 CR+</div>
                <div class="stat-light-label">Funding Raised</div>
            </div>
            <div class="stat-light-item">
                <div class="stat-light-number">2016</div>
                <div class="stat-light-label">Year Founded</div>
            </div>
        </div>

    </div>
</section>

<!-- Our Objectives Section -->
<section class="objectives-section" aria-label="Our objectives">
    <div class="objectives-container">

        <!-- Section Header (Centered) -->
        <div class="objectives-header-center">
            <h2 class="objectives-title">Our Objectives</h2>
            <p class="objectives-subtext">How RCOEM TBI drives innovation, growth, and impact across the startup ecosystem.</p>
        </div>

        <!-- 3-Column Responsive Card Grid -->
        <div class="objectives-card-grid">

            <!-- Card 1: Eco-System -->
            <div class="obj-card-panel">
                <div class="obj-card-top">
                    <span class="obj-micro-label">Objective</span>
                    <h3 class="obj-panel-title">Eco-System</h3>
                    <p class="obj-panel-desc">Nurturing innovation and Startups in the region for sustainable economic growth.</p>
                </div>
                <div class="obj-card-bottom">
                    <div class="obj-graphic-block">
                        <i class="fas fa-globe obj-graphic-icon"></i>
                        <span class="obj-action-btn" aria-hidden="true"><i class="fas fa-plus"></i></span>
                    </div>
                    <div class="obj-tags-line">Innovation | Growth</div>
                </div>
            </div>

            <!-- Card 2: Venture Creation -->
            <div class="obj-card-panel">
                <div class="obj-card-top">
                    <span class="obj-micro-label">Objective</span>
                    <h3 class="obj-panel-title">Venture Creation</h3>
                    <p class="obj-panel-desc">Inculcate entrepreneurship and new venture creation based on innovative technology.</p>
                </div>
                <div class="obj-card-bottom">
                    <div class="obj-graphic-block">
                        <i class="fas fa-rocket obj-graphic-icon"></i>
                        <span class="obj-action-btn" aria-hidden="true"><i class="fas fa-plus"></i></span>
                    </div>
                    <div class="obj-tags-line">Startups | Innovation</div>
                </div>
            </div>

            <!-- Card 3: Tech Commercialization -->
            <div class="obj-card-panel">
                <div class="obj-card-top">
                    <span class="obj-micro-label">Objective</span>
                    <h3 class="obj-panel-title">Tech Commercialization</h3>
                    <p class="obj-panel-desc">Platform for speedy commercialization of technologies from the host institution.</p>
                </div>
                <div class="obj-card-bottom">
                    <div class="obj-graphic-block">
                        <i class="fas fa-microchip obj-graphic-icon"></i>
                        <span class="obj-action-btn" aria-hidden="true"><i class="fas fa-plus"></i></span>
                    </div>
                    <div class="obj-tags-line">Commercialization | IPR</div>
                </div>
            </div>

            <!-- Card 4: Interfacing -->
            <div class="obj-card-panel">
                <div class="obj-card-top">
                    <span class="obj-micro-label">Objective</span>
                    <h3 class="obj-panel-title">Interfacing</h3>
                    <p class="obj-panel-desc">Interfacing between academia, industry, and financial institutions.</p>
                </div>
                <div class="obj-card-bottom">
                    <div class="obj-graphic-block">
                        <i class="fas fa-handshake obj-graphic-icon"></i>
                        <span class="obj-action-btn" aria-hidden="true"><i class="fas fa-plus"></i></span>
                    </div>
                    <div class="obj-tags-line">Industry | Academia</div>
                </div>
            </div>

            <!-- Card 5: Networking -->
            <div class="obj-card-panel">
                <div class="obj-card-top">
                    <span class="obj-micro-label">Objective</span>
                    <h3 class="obj-panel-title">Networking</h3>
                    <p class="obj-panel-desc">Networking between academia, industry and financial institution.</p>
                </div>
                <div class="obj-card-bottom">
                    <div class="obj-graphic-block">
                        <i class="fas fa-network-wired obj-graphic-icon"></i>
                        <span class="obj-action-btn" aria-hidden="true"><i class="fas fa-plus"></i></span>
                    </div>
                    <div class="obj-tags-line">Connect | Collaborate</div>
                </div>
            </div>

            <!-- Card 6: Value Addition -->
            <div class="obj-card-panel">
                <div class="obj-card-top">
                    <span class="obj-micro-label">Objective</span>
                    <h3 class="obj-panel-title">Value Addition</h3>
                    <p class="obj-panel-desc">Value added services: legal, financial, technical, IPR, and more.</p>
                </div>
                <div class="obj-card-bottom">
                    <div class="obj-graphic-block">
                        <i class="fas fa-layer-group obj-graphic-icon"></i>
                        <span class="obj-action-btn" aria-hidden="true"><i class="fas fa-plus"></i></span>
                    </div>
                    <div class="obj-tags-line">Services | Support</div>
                </div>
            </div>

        </div><!-- /.objectives-card-grid -->
    </div><!-- /.objectives-container -->
</section>

<!-- ══════════════════════════════════════════════════════════════════════════
     FINAL CTA BANNER
     ══════════════════════════════════════════════════════════════════════════ -->
<section style="padding:80px 0;background:#ffffff;position:relative;z-index:10;overflow:hidden;">
    <div style="max-width:1200px;margin:0 auto;padding:0 24px;">
        <div class="cloudflare-cta-banner" style="border-radius:2.5rem;padding:80px 60px;text-align:center;background:linear-gradient(145deg,#1E40AF 0%,#2563EB 100%);box-shadow:0 25px 60px -15px rgba(37,99,235,0.40),inset 0 1px 1px rgba(255,255,255,0.35);overflow:hidden;position:relative;">

            <div class="cf-dot-grid" aria-hidden="true"></div>
            <div class="cf-bottom-glow" aria-hidden="true"></div>

            <div class="cf-floating-badge cf-float-1" style="top:15%;left:5%;" aria-hidden="true"><div class="cf-diamond-inner"><i class="fas fa-server"></i></div></div>
            <div class="cf-floating-badge cf-float-2" style="top:52%;left:3%;" aria-hidden="true"><div class="cf-diamond-inner"><i class="fas fa-sliders-h"></i></div></div>
            <div class="cf-floating-badge cf-float-1" style="top:15%;right:5%;" aria-hidden="true"><div class="cf-diamond-inner"><i class="fas fa-layer-group"></i></div></div>
            <div class="cf-floating-badge cf-float-3" style="top:52%;right:3%;" aria-hidden="true"><div class="cf-diamond-inner"><i class="fas fa-cube"></i></div></div>

            <div style="position:relative;z-index:10;max-width:680px;margin:0 auto;">
                <h2 style="font-family:'Playfair Display',Georgia,serif;font-size:clamp(1.8rem,3.5vw,3.2rem);font-weight:800;color:#1A1A2E;margin-bottom:18px;line-height:1.15;letter-spacing:-0.02em;">
                    Ready to Launch Your Startup?
                </h2>
                <p style="font-size:1.05rem;color:rgba(255,255,255,0.92);line-height:1.7;margin-bottom:36px;max-width:520px;margin-left:auto;margin-right:auto;">
                    Join RCOEM TBI and get access to co-working spaces, mentors, funding connections, and a thriving startup community.
                </p>
                <div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap;">
                    <a href="https://forms.gle/hzaZ7GbYGFqg2V3fA" target="_blank" id="cta-apply-btn"
                       style="padding:14px 36px;background:#fff;color:#111;border-radius:9999px;font-weight:700;font-size:0.95rem;text-decoration:none;box-shadow:0 4px 20px rgba(0,0,0,0.15);">
                        Apply for Incubation Now
                    </a>
                    <a href="<?php echo esc_url(home_url('/services/')); ?>" id="cta-services-btn"
                       style="padding:14px 32px;background:rgba(255,255,255,0.18);color:#fff;border-radius:9999px;font-weight:600;font-size:0.95rem;text-decoration:none;border:1px solid rgba(255,255,255,0.35);">
                        Explore Services
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
