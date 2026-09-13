<?php
/**
 * Template Name: Services
 * Template Post Type: page
 *
 * @package TBI_Theme
 */
get_header();
?>

<!-- ===================== PAGE HEADER (editorial style) ===================== -->
<div class="svc-page-header">
    <div class="svc-bracket-label">
        <span class="svc-bracket svc-bracket--left">[—</span>
        <span class="svc-bracket-text">WHAT WE OFFER</span>
        <span class="svc-bracket svc-bracket--right">—]</span>
    </div>

    <h1 class="svc-main-heading">
        <span class="svc-heading-black">COMPREHENSIVE STARTUP</span><br>
        <span class="svc-heading-red">SUPPORT &amp; INFRASTRUCTURE</span>
    </h1>

    <p class="svc-header-desc">
        From co-working spaces and state-of-the-art labs to mentoring and investor connect,<br>
        <strong>we give every startup the tools it needs to grow and thrive.</strong>
    </p>
</div>

<hr style="border:none; border-top:1px solid #e0e0e0; margin:0 7%;">

<!-- ===================== CO-WORKING SPACE ===================== -->
<!-- Matches mockup: heading, staggered image layout -->
<div class="page-section" style="padding-top:60px; padding-bottom:60px;">
    <div class="section-label">INFRASTRUCTURE</div>
    <h2 class="page-heading" style="margin-bottom:50px;">CO-WORKING SPACE</h2>

    <!-- Staggered images (mockup style) -->
    <div class="staggered-images" style="height:380px; margin-bottom:20px;">
        <img class="img-front"
             src="<?php echo get_template_directory_uri(); ?>/assets/images/tbi-infra-screenshot-1.png"
             alt="Co-working space">
        <span class="img-label" style="position:absolute; top: calc(70% + 8px); left:0;">co-working space</span>
        <img class="img-back"
             src="<?php echo get_template_directory_uri(); ?>/assets/images/tbi-infra-screenshot-2.png"
             alt="RCOEM TBI co-working space">
        <span class="img-label" style="position:absolute; bottom: calc(30% - 24px); right:0; text-align:right;">RCOEM TBI co-working space</span>
    </div>
</div>

<hr style="border:none; border-top:1px solid #e0e0e0; margin:0 7%;">

<!-- ===================== CENTERS OF EXCELLENCE ===================== -->
<!-- Matches mockup: section heading, bullet list left, staggered images right -->
<div class="page-section" style="padding-top:60px; padding-bottom:60px;">
    <div class="section-label">INFRASTRUCTURE</div>
    <h2 class="page-heading" style="margin-bottom:40px;">CENTERS OF EXCELLENCE (COE)</h2>

    <div class="split-layout">
        <!-- Left: Bullet list -->
        <div>
            <ul class="bullet-list">
                <li>RBU-TATA Centre of Invention, Innovation, Incubation and Training</li>
                <li>CoE in Microsystems with Intellisense</li>
                <li>Energy Research Centre</li>
                <li>RBU-QCFI Centre of Human Excellence</li>
            </ul>
        </div>

        <!-- Right: Staggered images -->
        <div class="coe-image-grid" style="height:300px;">
            <span class="img-label" style="position:absolute; top:0; left:0; display:block; height:65%; width:55%;">
                <img class="coe-img-a"
                     src="<?php echo get_template_directory_uri(); ?>/assets/images/tbi-idai-center.jpg"
                     alt="Centre of Excellence"
                     style="position:absolute;top:0;left:0;width:55%;height:65%;object-fit:cover;z-index:2;">
                <span style="position:absolute;top:calc(65% + 8px);left:0;font-family:var(--mono);font-size:0.72rem;color:#94a3b8;letter-spacing:0.08em;">Centre of Excellence</span>
            </span>
            <img class="coe-img-b"
                 src="<?php echo get_template_directory_uri(); ?>/assets/images/tbi-iamc-center.jpg"
                 alt="CoE Infrastructure"
                 style="position:absolute;bottom:0;right:0;width:55%;height:65%;object-fit:cover;z-index:1;">
            <span style="position:absolute;bottom:calc(35% - 28px);right:0;font-family:var(--mono);font-size:0.72rem;color:#94a3b8;letter-spacing:0.08em;text-align:right;">CoE Infrastructure</span>
        </div>
    </div>

    <!-- Funding facilitation image below (mockup shows a second row) -->
    <div class="split-layout" style="margin-top:60px; align-items:center;">
        <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tbi-infra-screenshot-3.png"
                 alt="Coaching and training"
                 style="width:100%; object-fit:cover; height:220px; display:block;">
            <span class="img-label">Coaching and Training</span>
        </div>
        <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tbi-faad.png"
                 alt="Funding Facilitation"
                 style="width:100%; object-fit:cover; height:220px; display:block;">
            <span class="img-label">Funding Facilitation — MSME HI/BI</span>
        </div>
    </div>
</div>

<hr style="border:none; border-top:1px solid #e0e0e0; margin:0 7%;">

<!-- ===================== STATE-OF-THE-ART LABS ===================== -->
<div class="page-section" style="padding-top:60px; padding-bottom:60px;">
    <div class="section-label">INFRASTRUCTURE</div>
    <h2 class="page-heading" style="margin-bottom:40px;">STATE-OF-THE-ART LABS</h2>

    <div class="numbered-grid">
        <div class="numbered-item">
            <span class="num-badge">01</span>
            <div class="num-content">
                <h4>Design Lab</h4>
                <p>Product design, UI/UX prototyping &amp; ideation studio with professional software tools.</p>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tbi-infra-screenshot-4.png" alt="Design Lab" style="width:100%;height:180px;object-fit:cover;display:block;margin-top:12px;">
        </div>
        <div class="numbered-item">
            <span class="num-badge">02</span>
            <div class="num-content">
                <h4>Fab Lab</h4>
                <p>3D printers, CNC machines, laser cutters, and electronics workstations for rapid prototyping.</p>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tbi-sla-3d-printer.jpg" alt="Fab Lab" style="width:100%;height:180px;object-fit:cover;display:block;margin-top:12px;">
        </div>
        <div class="numbered-item">
            <span class="num-badge">03</span>
            <div class="num-content">
                <h4>IoT Lab</h4>
                <p>Microcontrollers, sensors, wireless modules for connected devices and smart systems.</p>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tbi-arc-welding-robot.png" alt="IoT Lab" style="width:100%;height:180px;object-fit:cover;display:block;margin-top:12px;">
        </div>
        <div class="numbered-item">
            <span class="num-badge">04</span>
            <div class="num-content">
                <h4>All Engineering Labs</h4>
                <p>Full access to university mechanical, electrical, electronics, and CS labs.</p>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tbi-fdm-3d-printer.jpg" alt="Engineering Labs" style="width:100%;height:180px;object-fit:cover;display:block;margin-top:12px;">
        </div>
    </div>
</div>

<hr style="border:none; border-top:1px solid #e0e0e0; margin:0 7%;">

<!-- ===================== HOW WE HELP (Converging Paths) ===================== -->
<section class="hwh-section" aria-label="How We Help">
    <div class="hwh-container">
        
        <div class="hwh-header">
            <span class="hwh-eyebrow">SUPPORT SERVICES</span>
            <h2 class="hwh-title">How We Help</h2>
        </div>

        <div class="hwh-body">
            
            <!-- Left Side: List -->
            <div class="hwh-list">
                
                <!-- Item 1 -->
                <div class="hwh-item">
                    <div class="hwh-num">01</div>
                    <div class="hwh-divider"></div>
                    <div class="hwh-content">
                        <div class="hwh-item-header">
                            <i data-lucide="users" class="hwh-icon"></i>
                            <h3 class="hwh-item-title">Mentoring</h3>
                        </div>
                        <p class="hwh-item-desc">Industry insights, a network of contacts, and strategic decision-making support for navigating startup challenges.</p>
                    </div>
                    <div class="hwh-row-anchor"></div>
                </div>

                <!-- Item 2 -->
                <div class="hwh-item">
                    <div class="hwh-num">02</div>
                    <div class="hwh-divider"></div>
                    <div class="hwh-content">
                        <div class="hwh-item-header">
                            <i data-lucide="scale" class="hwh-icon"></i>
                            <h3 class="hwh-item-title">Advisory Services</h3>
                        </div>
                        <p class="hwh-item-desc">Legal, regulatory guidance, IP protection, and compliance support for your business operations.</p>
                    </div>
                    <div class="hwh-row-anchor"></div>
                </div>

                <!-- Item 3 -->
                <div class="hwh-item">
                    <div class="hwh-num">03</div>
                    <div class="hwh-divider"></div>
                    <div class="hwh-content">
                        <div class="hwh-item-header">
                            <i data-lucide="handshake" class="hwh-icon"></i>
                            <h3 class="hwh-item-title">Investor Connect</h3>
                        </div>
                        <p class="hwh-item-desc">Links to potential investors and venture capitalists to secure funding and accelerate growth.</p>
                    </div>
                    <div class="hwh-row-anchor"></div>
                </div>

                <!-- Item 4 -->
                <div class="hwh-item">
                    <div class="hwh-num">04</div>
                    <div class="hwh-divider"></div>
                    <div class="hwh-content">
                        <div class="hwh-item-header">
                            <i data-lucide="coins" class="hwh-icon"></i>
                            <h3 class="hwh-item-title">Funding Facilitation</h3>
                        </div>
                        <p class="hwh-item-desc">Assistance with MSME hackathons, government grants, and other funding scheme applications. Ongoing: MSME HI/BI Scheme, Govt. of India.</p>
                    </div>
                    <div class="hwh-row-anchor"></div>
                </div>

                <!-- Item 5 -->
                <div class="hwh-item">
                    <div class="hwh-num">05</div>
                    <div class="hwh-divider"></div>
                    <div class="hwh-content">
                        <div class="hwh-item-header">
                            <i data-lucide="trending-up" class="hwh-icon"></i>
                            <h3 class="hwh-item-title">Business Development</h3>
                        </div>
                        <p class="hwh-item-desc">Market analysis, strategic planning, partnership building, and customer acquisition strategies.</p>
                    </div>
                    <div class="hwh-row-anchor"></div>
                </div>

                <!-- Item 6 -->
                <div class="hwh-item">
                    <div class="hwh-num">06</div>
                    <div class="hwh-divider"></div>
                    <div class="hwh-content">
                        <div class="hwh-item-header">
                            <i data-lucide="monitor" class="hwh-icon"></i>
                            <h3 class="hwh-item-title">Soft Resources</h3>
                        </div>
                        <p class="hwh-item-desc">Software subscriptions to reduce operational costs and enable efficient development workflows.</p>
                    </div>
                    <div class="hwh-row-anchor"></div>
                </div>

                <!-- Item 7 -->
                <div class="hwh-item">
                    <div class="hwh-num">07</div>
                    <div class="hwh-divider"></div>
                    <div class="hwh-content">
                        <div class="hwh-item-header">
                            <i data-lucide="graduation-cap" class="hwh-icon"></i>
                            <h3 class="hwh-item-title">Coaching & Training</h3>
                        </div>
                        <p class="hwh-item-desc">Tailored programs equipping startups with business acumen, innovation strategies, and pitching skills.</p>
                    </div>
                    <div class="hwh-row-anchor"></div>
                </div>

            </div>

            <!-- Right Side: SVG Container -->
            <div class="hwh-svg-wrapper">
                <!-- SVG paths injected via JS -->
            </div>

        </div>
    </div>
</section>

<?php get_footer(); ?>