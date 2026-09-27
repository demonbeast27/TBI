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
    <?php tbi_hero_grid(); ?>
    <div class="svc-inner">
        <h1 class="svc-main-heading">
            Comprehensive startup
            <span class="svc-heading-red">support &amp; infrastructure</span>
        </h1>

        <p class="svc-header-desc">
            From co-working spaces and state-of-the-art labs to mentoring and investor connect,<br>
            <strong>we give every startup the tools it needs to grow and thrive.</strong>
        </p>
    </div>
</div>

<hr style="border:none; border-top:1px solid #e0e0e0; margin:0 7%;">

<!-- ===================== CO-WORKING SPACE ===================== -->
<div class="page-section" style="padding-top:60px; padding-bottom:60px;">
    <div class="section-label">INFRASTRUCTURE</div>
    <h2 class="page-heading" style="margin-bottom:36px;">CO-WORKING SPACE</h2>

    <!-- Side-by-side Framed Images (No Overlap) -->
    <div class="coworking-frames-grid">
        <!-- Frame 1: Open Workstations -->
        <div class="coworking-mockup-frame">
            <div class="mockup-frame-header">
                <div class="mockup-frame-dots">
                    <span class="mockup-dot dot-red"></span>
                    <span class="mockup-dot dot-yellow"></span>
                    <span class="mockup-dot dot-green"></span>
                </div>
                <div class="mockup-frame-address">
                    <i class="fas fa-lock" style="font-size: 9px; margin-right: 6px; color: #10b981;"></i>
                    <span>tbi.rbu.edu/co-working/workstations</span>
                </div>
                <span class="mockup-frame-tag">Zone 01</span>
            </div>
            <div class="mockup-frame-screen">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tbi-coworking-space-1.png"
                     alt="Co-working space — open workstations"
                     class="mockup-frame-img">
            </div>
            <div class="mockup-frame-caption">
                <div>
                    <span class="caption-title">Open Workstations &amp; Hot Desks</span>
                    <span class="caption-sub">High-speed Wi-Fi, ergonomic seating &amp; plug-and-play setup</span>
                </div>
                <span class="img-label" style="margin:0;">Zone 01</span>
            </div>
        </div>

        <!-- Frame 2: Conference Room -->
        <div class="coworking-mockup-frame">
            <div class="mockup-frame-header">
                <div class="mockup-frame-dots">
                    <span class="mockup-dot dot-red"></span>
                    <span class="mockup-dot dot-yellow"></span>
                    <span class="mockup-dot dot-green"></span>
                </div>
                <div class="mockup-frame-address">
                    <i class="fas fa-lock" style="font-size: 9px; margin-right: 6px; color: #10b981;"></i>
                    <span>tbi.rbu.edu/co-working/conference-room</span>
                </div>
                <span class="mockup-frame-tag">Zone 02</span>
            </div>
            <div class="mockup-frame-screen">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tbi-coworking-space-2.png"
                     alt="RCOEM TBI conference room"
                     class="mockup-frame-img">
            </div>
            <div class="mockup-frame-caption">
                <div>
                    <span class="caption-title">Conference &amp; Discussion Suite</span>
                    <span class="caption-sub">AV-equipped meeting room for team discussions &amp; pitches</span>
                </div>
                <span class="img-label" style="margin:0;">Zone 02</span>
            </div>
        </div>
    </div>
</div>

<hr style="border:none; border-top:1px solid #e0e0e0; margin:0 7%;">

<!-- ===================== CENTERS OF EXCELLENCE ===================== -->
<!-- Matches mockup: section heading, bullet list left, staggered images right -->
<div class="page-section" style="padding-top:60px; padding-bottom:60px;">
    <div class="section-label">INFRASTRUCTURE</div>
    <h2 class="page-heading" style="margin-bottom:40px;">CENTERS OF EXCELLENCE (COE)</h2>

    <div class="split-layout" style="align-items: center; gap: 40px;">
        <!-- Left: Custom Bordered List -->
        <div style="flex: 1;">
            <div class="coe-custom-list">
                <div class="coe-custom-item">
                    <span class="coe-dash">-</span>
                    <span>RBU-TATA Centre of Invention, Innovation, Incubation and Training</span>
                </div>
                <div class="coe-custom-item">
                    <span class="coe-dash">-</span>
                    <span>CoE in Microsystems with Intellisense</span>
                </div>
                <div class="coe-custom-item">
                    <span class="coe-dash">-</span>
                    <span>Energy Research Centre</span>
                </div>
                <div class="coe-custom-item">
                    <span class="coe-dash">-</span>
                    <span>RBU-QCFI Centre of Human Excellence</span>
                </div>
            </div>
        </div>

        <!-- Right: Side-by-side images with rounded borders -->
        <div style="flex: 1; display: flex; gap: 20px;">
            <div style="flex: 1; display: flex; flex-direction: column;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tbi-idai-center.jpg"
                     alt="Centre of Excellence"
                     style="width: 100%; aspect-ratio: 4/5; object-fit: cover; border-radius: 16px;">
                <span style="margin-top: 12px; font-family: var(--mono, monospace); font-size: 0.75rem; color: #64748b; letter-spacing: 0.08em; text-transform: uppercase;">Centre of Excellence</span>
            </div>
            <div style="flex: 1; display: flex; flex-direction: column;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/tbi-photos/facility/Screenshot-2025-01-13-at-7.28.49-PM-1024x681.png"
                     alt="CoE Infrastructure"
                     style="width: 100%; aspect-ratio: 4/5; object-fit: cover; border-radius: 16px;">
                <span style="margin-top: 12px; font-family: var(--mono, monospace); font-size: 0.75rem; color: #64748b; letter-spacing: 0.08em; text-transform: uppercase;">CoE Infrastructure</span>
            </div>
        </div>
    </div>

    <style>
        .coe-custom-list {
            display: flex;
            flex-direction: column;
            border-top: 1px solid #e2e8f0;
        }
        .coe-custom-item {
            display: flex;
            align-items: center;
            padding: 20px 0;
            border-bottom: 1px solid #e2e8f0;
            font-size: 1.05rem;
            font-weight: 600;
            color: #0d1117;
            font-family: inherit; 
            line-height: 1.5;
        }
        .coe-dash {
            color: #0057B0;
            margin-right: 16px;
            font-weight: bold;
            font-size: 1.2rem;
        }
        @media (max-width: 768px) {
            .split-layout {
                flex-direction: column;
            }
        }
    </style>


</div>

<hr style="border:none; border-top:1px solid #e0e0e0; margin:0 7%;">

<!-- ===================== STATE-OF-THE-ART LABS ===================== -->
<div class="page-section" style="padding-top:60px; padding-bottom:60px;">
    <div class="section-label">INFRASTRUCTURE</div>
    <h2 class="page-heading" style="margin-bottom:40px;">STATE-OF-THE-ART LABS</h2>

    <div class="numbered-grid">
        <div class="numbered-item lab-item">
            <span class="num-badge">01</span>
            <div class="num-content">
                <h4>Design Lab</h4>
                <p>Product design, UI/UX prototyping &amp; ideation studio with professional software tools.</p>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tbi-coworking-space-1.png" alt="Design Lab" style="width:100%;height:180px;object-fit:cover;display:block;margin-top:12px;">
        </div>
        <div class="numbered-item lab-item">
            <span class="num-badge">02</span>
            <div class="num-content">
                <h4>Fab Lab</h4>
                <p>3D printers, CNC machines, laser cutters, and electronics workstations for rapid prototyping.</p>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tbi-sla-3d-printer.jpg" alt="Fab Lab" style="width:100%;height:180px;object-fit:cover;display:block;margin-top:12px;">
        </div>
        <div class="numbered-item lab-item">
            <span class="num-badge">03</span>
            <div class="num-content">
                <h4>IoT Lab</h4>
                <p>Microcontrollers, sensors, wireless modules for connected devices and smart systems.</p>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tbi-arc-welding-robot.png" alt="IoT Lab" style="width:100%;height:180px;object-fit:cover;display:block;margin-top:12px;">
        </div>
        <div class="numbered-item lab-item">
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



<!-- ===================== SUPPORT SERVICES LIST ===================== -->
<style>
.svc-list-section {
    background: #fff;
    padding: 80px 0 60px;
}
.svc-list-container {
    max-width: 1100px;
    margin: 0 auto;
    padding: 0 7%;
}
.svc-list-header {
    margin-bottom: 48px;
}
.svc-list-eyebrow {
    display: inline-block;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 0.2em;
    text-transform: uppercase;
    color: #0057B0;
    margin-bottom: 10px;
    font-family: 'JetBrains Mono', monospace;
}
.svc-list-title {
    font-size: clamp(1.8rem, 3.5vw, 2.8rem);
    font-weight: 800;
    color: #0d1117;
    margin: 0;
    letter-spacing: -0.02em;
    line-height: 1.15;
}
/* Each service row */
.svc-list-item {
    padding: 36px 0;
    border-top: 1px solid #e5e9ef;
    display: grid;
    grid-template-columns: 260px 1fr;
    gap: 40px;
    align-items: start;
}
.svc-list-item:last-child {
    border-bottom: 1px solid #e5e9ef;
}
.svc-list-left {
    display: flex;
    align-items: flex-start;
    gap: 14px;
}
.svc-list-num {
    font-family: 'JetBrains Mono', monospace;
    font-size: 11px;
    font-weight: 700;
    color: #0057B0;
    letter-spacing: 0.08em;
    padding-top: 4px;
    min-width: 24px;
}
.svc-list-name {
    font-size: 1.1rem;
    font-weight: 700;
    color: #0d1117;
    margin: 0;
    line-height: 1.3;
}
.svc-list-right {}
.svc-list-desc {
    font-size: 0.95rem;
    color: #475569;
    line-height: 1.7;
    margin: 0 0 20px;
    max-width: 680px;
}
.svc-list-note {
    font-size: 0.85rem;
    font-weight: 600;
    color: #0d1117;
    margin: 0 0 16px;
}
.svc-list-logos {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    gap: 24px 32px;
}
.svc-list-logos img {
    height: 48px;
    width: auto;
    max-width: 100%;
    object-fit: contain;
    opacity: 0.75;
    transition: opacity 0.2s ease;
}
.svc-list-logos img:hover {
    opacity: 1;
}
@media (max-width: 860px) {
    .svc-list-item {
        grid-template-columns: 1fr;
        gap: 12px;
    }
    /* grid items default to min-width:auto, so long headings force overflow */
    .svc-list-left,
    .svc-list-right {
        min-width: 0;
    }
    .svc-list-name {
        overflow-wrap: anywhere;
    }
}
</style>

<section class="svc-list-section">
    <div class="svc-list-container">

        <div class="svc-list-header">
            <span class="svc-list-eyebrow">What We Offer</span>
            <h2 class="svc-list-title">Support Services</h2>
        </div>

        <!-- 1. Soft Resources -->
        <div class="svc-list-item">
            <div class="svc-list-left">
                <span class="svc-list-num">01</span>
                <h3 class="svc-list-name">Soft Resources</h3>
            </div>
            <div class="svc-list-right">
                <p class="svc-list-desc">Soft resources such as software and subscriptions help startups reduce their operational costs, enabling access to essential tools for development, and creating a more efficient workflow. They also facilitate rapid prototyping, market testing, and scalability without significant upfront investments in infrastructure.</p>
                <div class="svc-list-logos">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Logos/YNOS.png" alt="YNOS">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Logos/FRESHWORKS.png" alt="Freshworks">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Logos/HUBSPOT.png" alt="HubSpot">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Logos/VAKIL.png" alt="VakilSearch">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Logos/DIGITAL OCEAN.png" alt="DigitalOcean">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Logos/PAYTM.png" alt="Paytm">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Logos/ZOHO.png" alt="ZOHO">
                </div>
            </div>
        </div>

        <!-- 2. Mentoring -->
        <div class="svc-list-item">
            <div class="svc-list-left">
                <span class="svc-list-num">02</span>
                <h3 class="svc-list-name">Mentoring</h3>
            </div>
            <div class="svc-list-right">
                <p class="svc-list-desc">Mentoring is crucial for startups as it provides guidance, industry insights, and a network of contacts that can help navigate challenges and accelerate growth. Mentors offer valuable experience and perspective, aiding in strategic decision-making and enhancing overall entrepreneurial success.</p>
                <div class="svc-list-logos">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Logos/THINKUVATE.png" alt="ThinkUvate">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Logos/TIE.png" alt="TiE">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Logos/HEADSTART.png" alt="Headstart">
                </div>
            </div>
        </div>

        <!-- 3. Advisory Services -->
        <div class="svc-list-item">
            <div class="svc-list-left">
                <span class="svc-list-num">03</span>
                <h3 class="svc-list-name">Advisory Services</h3>
            </div>
            <div class="svc-list-right">
                <p class="svc-list-desc">We provide startups with essential legal and regulatory guidance, ensuring compliance, protecting intellectual property, and navigating complex legal landscapes to safeguard their business operations and interests.</p>
                <div class="svc-list-logos">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Logos/VAKIL.png" alt="VakilSearch">
                </div>
            </div>
        </div>

        <!-- 4. Investor Connect -->
        <div class="svc-list-item">
            <div class="svc-list-left">
                <span class="svc-list-num">04</span>
                <h3 class="svc-list-name">Investor Connect</h3>
            </div>
            <div class="svc-list-right">
                <p class="svc-list-desc">We facilitate investor connections for startups, linking them with potential investors and venture capitalists to secure funding and accelerate their growth trajectory.</p>
                <div class="svc-list-logos">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Logos/THINKUVATE.png" alt="ThinkUvate">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Logos/IRA.png" alt="Indian Angel Network">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Logos/ASPIRE.png" alt="EarlySeed Ventures">
                </div>
            </div>
        </div>

        <!-- 5. Funding Facilitation -->
        <div class="svc-list-item">
            <div class="svc-list-left">
                <span class="svc-list-num">05</span>
                <h3 class="svc-list-name">Funding Facilitation</h3>
            </div>
            <div class="svc-list-right">
                <p class="svc-list-desc">In terms of government grants, MSME hackathons, and other funding schemes, we assist startups in identifying, applying for and guidance throughout the application process.</p>
                <p class="svc-list-note">Ongoing Schemes: MSME HI/BI, Govt. of India</p>
                <div class="svc-list-logos">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Logos/MSME.png" alt="MSME">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Logos/FAAD.png" alt="FAAD">
                </div>
            </div>
        </div>

        <!-- 6. Coaching & Training -->
        <div class="svc-list-item">
            <div class="svc-list-left">
                <span class="svc-list-num">06</span>
                <h3 class="svc-list-name">Coaching &amp; Training</h3>
            </div>
            <div class="svc-list-right">
                <p class="svc-list-desc">We organise tailored coaching and training programs for startups, equipping them with essential skills, knowledge, and strategies to enhance their business acumen, foster innovation, and achieve desired success.</p>
                <div class="svc-list-logos">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Logos/WADHWANI.png" alt="Wadhwani Foundation">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Logos/HEADSTART.png" alt="Headstart">
                </div>
            </div>
        </div>

        <!-- 7. Business Development Support -->
        <div class="svc-list-item">
            <div class="svc-list-left">
                <span class="svc-list-num">07</span>
                <h3 class="svc-list-name">Business Development Support</h3>
            </div>
            <div class="svc-list-right">
                <p class="svc-list-desc">We provide comprehensive business development support to startups, including market analysis, strategic planning, partnership building, and customer acquisition strategies, empowering them to scale effectively and achieve their growth objectives.</p>
            </div>
        </div>

    </div>
</section>

<hr style="border:none; border-top:1px solid #e0e0e0; margin:0 7%;">




<!-- ===================== FACILITY GALLERY ===================== -->
<div class="page-section" style="padding-top:60px; padding-bottom:60px;">
    <div class="section-label">OUR SPACE</div>
    <h2 class="page-heading" style="margin-bottom:12px;">FACILITY GALLERY</h2>
    <p class="mono-text" style="margin-bottom:40px; max-width:600px;">A look inside our state-of-the-art incubation facility — from labs and co-working spaces to innovation hubs.</p>

    <style>
        .facility-gallery {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-auto-rows: 220px;
            gap: 12px;
        }
        .facility-gallery__item {
            overflow: hidden;
            position: relative;
            background: #f0f0f0;
        }
        .facility-gallery__item:first-child {
            grid-column: span 2;
            grid-row: span 2;
        }
        .facility-gallery__item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.45s ease;
        }
        .facility-gallery__item:hover img {
            transform: scale(1.06);
        }
        .facility-gallery__overlay {
            position: absolute;
            inset: 0;
            background: rgba(0,0,0,0);
            transition: background 0.35s ease;
            display: flex;
            align-items: flex-end;
            padding: 14px;
        }
        .facility-gallery__item:hover .facility-gallery__overlay {
            background: rgba(0,0,0,0.28);
        }
        @media (max-width: 768px) {
            .facility-gallery {
                grid-template-columns: repeat(2, 1fr);
                grid-auto-rows: 180px;
            }
            .facility-gallery__item:first-child {
                grid-column: span 2;
                grid-row: span 1;
            }
        }
        @media (max-width: 480px) {
            .facility-gallery {
                grid-template-columns: 1fr;
                grid-auto-rows: 220px;
            }
            .facility-gallery__item:first-child {
                grid-column: span 1;
                grid-row: span 1;
            }
        }
    </style>

    <div class="facility-gallery">
        <div class="facility-gallery__item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/tbi-photos/facility/Screenshot-2025-01-13-at-7.28.49-PM-1024x681.png" alt="TBI Facility">
            <div class="facility-gallery__overlay"></div>
        </div>
        <div class="facility-gallery__item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/tbi-photos/facility/Screenshot-2025-01-13-at-7.29.57-PM-e1743135869922.png" alt="TBI Facility">
            <div class="facility-gallery__overlay"></div>
        </div>
        <div class="facility-gallery__item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/tbi-photos/facility/Screenshot-2025-01-13-at-7.32.07-PM-300x199.png" alt="TBI Facility">
            <div class="facility-gallery__overlay"></div>
        </div>
        <div class="facility-gallery__item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/tbi-photos/facility/Screenshot-2025-01-13-at-7.36.08-PM-282x300.png" alt="TBI Facility">
            <div class="facility-gallery__overlay"></div>
        </div>
        <div class="facility-gallery__item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/tbi-photos/facility/Screenshot-2025-01-13-at-7.39.28-PM-253x300.png" alt="TBI Facility">
            <div class="facility-gallery__overlay"></div>
        </div>
        <div class="facility-gallery__item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tbi-coworking-space-1.png" alt="Design Lab">
            <div class="facility-gallery__overlay"></div>
        </div>
        <div class="facility-gallery__item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tbi-sla-3d-printer.jpg" alt="Fab Lab">
            <div class="facility-gallery__overlay"></div>
        </div>
        <div class="facility-gallery__item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tbi-arc-welding-robot.png" alt="IoT Lab">
            <div class="facility-gallery__overlay"></div>
        </div>
        <div class="facility-gallery__item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tbi-fdm-3d-printer.jpg" alt="Engineering Labs">
            <div class="facility-gallery__overlay"></div>
        </div>
    </div>


</div>

<?php get_footer(); ?>