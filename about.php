<?php
/**
 * Template Name: About
 * Template Post Type: page
 *
 * @package TBI_Theme
 */
get_header();
?>

<!-- Redesigned About Us Hero Section -->
<section class="about-hero-section" aria-label="About Us Hero">
    <?php tbi_hero_grid(); ?>
    <div class="about-hero-container">
        <!-- Main Headline with Serif Typography and Yellow Accent -->
        <h1
            style="display: flex; align-items: center; flex-wrap: wrap; gap: 16px; justify-content: center; font-family: 'Playfair Display', Georgia, 'Times New Roman', serif; font-size: clamp(3.2rem, 5.5vw, 5.5rem); font-weight: 500; line-height: 1.08; color: #1A1A2E; letter-spacing: -0.02em; margin: 0; text-align: center;">
            <span
                style="background-color: #F8D316; color: #1A1A2E; padding: 4px 20px; font-weight: 500; font-family: inherit;">About</span>
            RCOEM TBI Foundation
        </h1>

        <!-- Subtext Paragraph -->
        <p class="about-hero-desc">
            RCOEM TBI is a technology business incubator built to empower innovators, nurture ambitious ideas, and
            transform early-stage ventures into impactful entrepreneurial journeys.
        </p>
    </div>
</section>

<!-- ===================== ABOUT SECTION ===================== -->
<!-- Matches mockup: left = black image, right = stacked Mission + Objective cards -->
<div class="page-section" style="padding-top:80px; padding-bottom:80px;">

    <div class="section-label">ABOUT RCOEM TBI</div>

    <div class="split-layout gap-lg" style="align-items:center;">

        <!-- LEFT: Video -->
        <div>
            <video src="<?php echo get_template_directory_uri(); ?>/assets/video/tbi-intro.mp4"
                poster="<?php echo get_template_directory_uri(); ?>/assets/tbi-photos/facility/Screenshot-2025-01-13-at-7.28.49-PM-1024x681.png"
                autoplay loop muted playsinline
                style="width:100%; aspect-ratio:4/5; object-fit:cover; display:block; border-radius:16px; border:1px solid rgba(0,0,0,0.08); box-shadow:0 4px 20px -2px rgba(0,0,0,0.06), 0 2px 6px -1px rgba(0,0,0,0.04);"></video>
        </div>

        <!-- RIGHT: Mission + Objective Cards stacked -->
        <div style="display:flex; flex-direction:column; gap:24px;">

            <div class="accent-card">
                <div class="card-label">MISSION</div>
                <p>Our mission is to empower startups with comprehensive resources and expert guidance to accelerate
                    their journey from idea to impactful enterprise.</p>
            </div>

            <div class="accent-card">
                <div class="card-label">OBJECTIVE</div>
                <p>Our objective is to foster a dynamic ecosystem that empowers tech start-ups through tailored "Start
                    to Scale" support, aimed at catalysing the conversion of innovative research into successful
                    entrepreneurial ventures.</p>
            </div>

        </div>
    </div>
</div>

<hr style="border:none; border-top:1px solid #e0e0e0; margin:0 7%;">

<!-- ===================== ABOUT TEXT ===================== -->
<div class="page-section" style="padding-top:60px; padding-bottom:60px;">
    <div class="split-layout">
        <div>
            <div class="section-label">WHO WE ARE</div>
            <h2 class="page-heading">RCOEM TBI</h2>
        </div>
        <div>
            <p class="mono-text">RCOEM Technology Business Incubators Foundation (RCOEM TBI), established in 2016, is an
                official incubator of Ramdeobaba University. It is a Section 8 company incorporated for fostering
                innovation, entrepreneurship, and business acumen amongst students in the technological realm.</p>
            <p class="mono-text" style="margin-top:16px;">RCOEM TBI equips students with the skills, knowledge, and
                networking needed to thrive in today's competitive landscape. Through a range of programs, initiatives,
                and partnerships the foundation cultivates a culture of innovation and entrepreneurial thinking.</p>
        </div>
    </div>
</div>



<!-- ===================== GRANT & FUNDING PARTNERS ===================== -->
<div style="background-color:#f6f6f6; padding:48px clamp(20px,5vw,80px) 52px; position:relative; overflow:hidden;">

    <!-- Subtle decorative lines background -->
    <div style="position:absolute;inset:0;pointer-events:none;overflow:hidden;opacity:0.06;">
        <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="diag-lines" width="40" height="40" patternUnits="userSpaceOnUse"
                    patternTransform="rotate(-30)">
                    <line x1="0" y1="0" x2="0" y2="40" stroke="#000000" stroke-width="0.8" />
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#diag-lines)" />
        </svg>
    </div>

    <!-- Header -->
    <div style="text-align:center; position:relative; z-index:2; margin-bottom:28px;">
        <h2
            style="font-family:'Playfair Display',Georgia,serif; font-size:clamp(1.6rem,3vw,2.4rem); font-weight:700; color:#e53e3e; margin:0 0 10px 0; letter-spacing:-0.01em;">
            Our Grant &amp; Funding Partners
        </h2>
        <!-- Decorative squiggle line -->
        <div style="display:flex;align-items:center;justify-content:center;gap:2px;margin-bottom:16px;">
            <?php for ($i = 0; $i < 12; $i++): ?>
                <div style="width:5px;height:2px;background:#e53e3e;border-radius:2px;"></div>
            <?php endfor; ?>
        </div>
        <p
            style="font-family:'Inter',sans-serif; font-size:clamp(0.85rem,1.2vw,0.95rem); color:rgba(0,0,0,0.72); line-height:1.7; max-width:680px; margin:0 auto;">
            Strong ecosystem partners are pivotal in enriching our incubator's network, fostering collaboration, and
            amplifying opportunities for mutual growth and innovation. By cultivating robust relationships with
            ecosystem partners, we enhance support networks, access expertise, and broaden opportunities for success
            and impact.
        </p>
    </div>

    <!-- Logo Grid -->
    <div style="position:relative;z-index:2;width:100%;max-width:100%;">

        <!-- Row 1 -->
        <div
            style="display:flex;justify-content:center;align-items:center;gap:clamp(20px,4vw,60px);flex-wrap:wrap;margin-bottom:32px;">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/partners/msme.png" alt="MSME"
                style="height:52px;width:auto;object-fit:contain;filter:brightness(0);opacity:1;">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/partners/aspire-card.png"
                alt="ASPIRE" style="height:60px;width:auto;object-fit:contain;opacity:1;">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/partners/thinkuvate.png"
                alt="Thinkuvate" style="height:40px;width:auto;object-fit:contain;filter:brightness(0);opacity:1;">
        </div>

        <!-- Row 2 -->
        <div
            style="display:flex;justify-content:center;align-items:center;gap:clamp(20px,4vw,60px);flex-wrap:wrap;margin-bottom:32px;">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/partners/wadhwani.png"
                alt="Wadhwani Foundation"
                style="height:52px;width:auto;object-fit:contain;filter:brightness(0);opacity:1;">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/partners/faad.png" alt="FAAD"
                style="height:44px;width:auto;object-fit:contain;filter:brightness(0);opacity:1;">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/partners/tie.png"
                alt="TiE Nagpur" style="height:48px;width:auto;object-fit:contain;filter:brightness(0);opacity:1;">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/partners/earlyseed.png"
                alt="Earlyseed Ventures"
                style="height:38px;width:auto;object-fit:contain;filter:brightness(0);opacity:1;">
        </div>

        <!-- Row 3 -->
        <div style="display:flex;justify-content:center;align-items:center;gap:clamp(20px,4vw,60px);flex-wrap:wrap;">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/partners/mia.png" alt="MIA"
                style="height:52px;width:auto;object-fit:contain;filter:brightness(0);opacity:1;">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/partners/tata.png"
                alt="Tata Technologies"
                style="height:44px;width:auto;object-fit:contain;filter:brightness(0);opacity:1;">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/partners/hitavada.png"
                alt="The Hitavada" style="height:36px;width:auto;object-fit:contain;filter:brightness(0);opacity:1;">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/partners/raca.png" alt="RACA"
                style="height:52px;width:auto;object-fit:contain;filter:brightness(0);opacity:1;">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/partners/headstart.png"
                alt="Headstart" style="height:36px;width:auto;object-fit:contain;filter:brightness(0);opacity:1;">
        </div>

    </div>
</div>


<!-- ===================== ECOSYSTEM PARTNERS ===================== -->
<div
    style="background-color:#f6f6f6; padding:48px clamp(20px,5vw,80px) 52px; position:relative; overflow:hidden; border-top:1px solid rgba(0,0,0,0.08);">

    <!-- Subtle decorative lines background -->
    <div style="position:absolute;inset:0;pointer-events:none;overflow:hidden;opacity:0.06;">
        <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="diag-lines-2" width="40" height="40" patternUnits="userSpaceOnUse"
                    patternTransform="rotate(-30)">
                    <line x1="0" y1="0" x2="0" y2="40" stroke="#000000" stroke-width="0.8" />
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#diag-lines-2)" />
        </svg>
    </div>

    <!-- Header -->
    <div style="text-align:center; position:relative; z-index:2; margin-bottom:28px;">
        <h2
            style="font-family:'Playfair Display',Georgia,serif; font-size:clamp(1.6rem,3vw,2.4rem); font-weight:700; color:#e53e3e; margin:0 0 10px 0; letter-spacing:-0.01em;">
            Ecosystem Partners
        </h2>
        <!-- Decorative squiggle line -->
        <div style="display:flex;align-items:center;justify-content:center;gap:2px;margin-bottom:16px;">
            <?php for ($i = 0; $i < 12; $i++): ?>
                <div style="width:5px;height:2px;background:#e53e3e;border-radius:2px;"></div>
            <?php endfor; ?>
        </div>
        <p
            style="font-family:'Inter',sans-serif; font-size:clamp(0.85rem,1.2vw,0.95rem); color:rgba(0,0,0,0.72); line-height:1.7; max-width:680px; margin:0 auto;">
            Strong ecosystem partners are pivotal in enriching our incubator's network, fostering collaboration, and
            amplifying opportunities for mutual growth and innovation. By cultivating robust relationships with
            ecosystem partners, we enhance support networks, access expertise, and broaden opportunities for success
            and impact.
        </p>
    </div>

    <!-- Logo Grid -->
    <div style="position:relative;z-index:2;width:100%;max-width:100%;">

        <!-- Row 1: TiE, MIA, Tata, RACA -->
        <div
            style="display:flex;justify-content:center;align-items:center;gap:clamp(30px,5vw,80px);flex-wrap:wrap;margin-bottom:40px;">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/partners/tie.png"
                alt="TiE Nagpur" style="height:60px;width:auto;object-fit:contain;filter:brightness(0);opacity:1;">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/partners/mia.png" alt="MIA"
                style="height:64px;width:auto;object-fit:contain;filter:brightness(0);opacity:1;">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/partners/tata.png"
                alt="Tata Technologies"
                style="height:56px;width:auto;object-fit:contain;filter:brightness(0);opacity:1;">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/partners/raca.png" alt="RACA"
                style="height:64px;width:auto;object-fit:contain;filter:brightness(0);opacity:1;">
        </div>

        <!-- Row 2: Wadhwani, Hitavada, Headstart -->
        <div style="display:flex;justify-content:center;align-items:center;gap:clamp(30px,5vw,80px);flex-wrap:wrap;">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/partners/wadhwani.png"
                alt="Wadhwani Foundation"
                style="height:64px;width:auto;object-fit:contain;filter:brightness(0);opacity:1;">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/partners/hitavada.png"
                alt="The Hitavada" style="height:44px;width:auto;object-fit:contain;filter:brightness(0);opacity:1;">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/partners/headstart.png"
                alt="Headstart" style="height:44px;width:auto;object-fit:contain;filter:brightness(0);opacity:1;">
        </div>

    </div>
</div>


<!-- Matches mockup: red line label, large heading, mono description, 2-col numbered list -->
<div class="page-section" style="padding-top:80px; padding-bottom:80px;">

    <div class="section-label">COMPANY BOARD</div>
    <h2 class="page-heading" style="margin-bottom:16px;">RCOEM TBI COMPANY BOARD</h2>
    <p class="mono-text" style="margin-bottom:60px;">RCOEM TBI is a section 8 company having its board members from
        diverse fields bringing vast experience and expertise to the table.</p>

    <div class="numbered-grid">
        <!-- 01 -->
        <div class="numbered-item">
            <span class="num-badge">01</span>
            <div class="num-content">
                <h4>Satyanarayan Nandlal Nuwal</h4>
                <p>Director – Industrialist</p>
            </div>
        </div>
        <!-- 02 -->
        <div class="numbered-item">
            <span class="num-badge">02</span>
            <div class="num-content">
                <h4>Shyamsunder Fatehlalji Rathi</h4>
                <p>Director &amp; CEO – Business Professional</p>
            </div>
        </div>
        <!-- 03 -->
        <div class="numbered-item">
            <span class="num-badge">03</span>
            <div class="num-content">
                <h4>Rajendra Banwarilal Purohit</h4>
                <p>Director – Business Professional</p>
            </div>
        </div>
        <!-- 04 -->
        <div class="numbered-item">
            <span class="num-badge">04</span>
            <div class="num-content">
                <h4>Kailash Chandra Bisesarlal Agrawal</h4>
                <p>Director – Business Professional</p>
            </div>
        </div>
        <!-- 05 -->
        <div class="numbered-item">
            <span class="num-badge">05</span>
            <div class="num-content">
                <h4>Ashok Kumar Banwarilal Pacheriwala</h4>
                <p>Director – Business Professional</p>
            </div>
        </div>
        <!-- 06 -->
        <div class="numbered-item">
            <span class="num-badge">06</span>
            <div class="num-content">
                <h4>Pradeep Babulal Agrawal</h4>
                <p>Director – Business Professional</p>
            </div>
        </div>
        <!-- 07 -->
        <div class="numbered-item">
            <span class="num-badge">07</span>
            <div class="num-content">
                <h4>Rajendra Mukundarao Patrikar</h4>
                <p>Director – Academician</p>
            </div>
        </div>
        <!-- 08 -->
        <div class="numbered-item">
            <span class="num-badge">08</span>
            <div class="num-content">
                <h4>Shashikant Eknath Chaudhary</h4>
                <p>Director – Business Professional &amp; Investor</p>
            </div>
        </div>
        <!-- 09 -->
        <div class="numbered-item">
            <span class="num-badge">09</span>
            <div class="num-content">
                <h4>Rajesh Suresh Pande</h4>
                <p>Director – Academician</p>
            </div>
        </div>
        <!-- 10 -->
        <div class="numbered-item">
            <span class="num-badge">10</span>
            <div class="num-content">
                <h4>Rupesh Shyam Pais</h4>
                <p>Director – Academician</p>
            </div>
        </div>
    </div>
</div>

<hr style="border:none; border-top:1px solid #e0e0e0; margin:0 7%;">

<!-- ===================== OUR TEAM ===================== -->
<div class="page-section" style="padding-top:60px; padding-bottom:80px;">
    <div class="section-label">OUR TEAM</div>
    <div style="display:flex; gap:40px; flex-wrap:wrap; margin-top:20px; justify-content:center;">
        <div style="text-align:center;">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dr-rupesh-pais.png"
                alt="Dr. Rupesh Pais"
                style="width:160px; height:160px; object-fit:cover; border-radius:50%; margin-bottom:14px;">
            <p style="font-weight:700; color:#0f172a;">Dr. Rupesh Pais</p>
            <p class="mono-text" style="font-size:0.95rem; max-width:none; color:#64748b;">Director, RCOEM TBI</p>
        </div>
        <div style="text-align:center;">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/tbi-photos/events/prashant.png"
                alt="Prashant Umbarkar"
                style="width:160px; height:160px; object-fit:cover; border-radius:50%; margin-bottom:14px;">
            <p style="font-weight:700; color:#0f172a;">Prashant Umbarkar</p>
            <p class="mono-text" style="font-size:0.95rem; max-width:none; color:#64748b;">Manager, RCOEM TBI</p>
        </div>
    </div>
</div>

<?php get_footer(); ?>