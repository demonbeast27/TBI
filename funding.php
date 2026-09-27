<?php
/**
 * Template Name: Funding
 * Template Post Type: page
 * @package TBI_Theme
 */
get_header();
?>

<!-- Editorial Page Header -->
<section
    style="background:#FFFFFF; padding: clamp(100px,10vw,130px) clamp(20px,5vw,64px) clamp(60px,7vw,100px); text-align:center; position:relative;">
        <?php tbi_hero_grid(); ?>
        <div class="tbi-hero-content" style="max-width:900px; margin:0 auto;">
        <!-- Yellow "Funding" label pill -->
        <div style="margin-bottom:24px;">
            <span
                style="font-family:'Playfair Display',Georgia,serif; font-size:clamp(1.8rem,4vw,3rem); font-weight:500; background-color:#F8D316; color:#1A1A2E; padding:4px 24px; display:inline-block;">Funding</span>
        </div>

        <!-- Main heading -->
        <h1
            style="font-family:'Playfair Display',Georgia,'Times New Roman',serif; font-size:clamp(2.5rem,5vw,4.5rem); font-weight:500; line-height:1.08; color:#1A1A2E; letter-spacing:-0.02em; margin:0 0 24px 0;">
            Fueling Your Startup's<br>Growth
        </h1>

        <!-- Subtext -->
        <p
            style="font-family:'Inter',sans-serif; font-size:clamp(1rem,1.5vw,1.2rem); color:#555555; line-height:1.7; margin:0;">
            Connecting startups with the right capital, at the right time. From angel investors to government grants —
            we open the doors.
        </p>
    </div>
</section>

<!-- SERVICES / OFFERINGS -->
<div class="page-section" style="padding-top:80px;padding-bottom:80px;background:#f8fafc;">
    <div class="split-layout" style="gap:40px;">

        <!-- Investor Connect -->
        <div
            style="background:#ffffff; border:1px solid #e2e8f0; border-radius:12px; padding:40px; box-shadow:0 10px 25px -5px rgba(0,0,0,0.05); height:100%; box-sizing:border-box;">
            <h2
                style="font-family:'Playfair Display',Georgia,serif; font-size:2rem; color:#1A1A2E; margin-bottom:20px; border-bottom:3px solid #2563EB; display:inline-block; padding-bottom:8px;">
                Investor Connect</h2>
            <p style="font-family:'Inter',sans-serif; font-size:1.1rem; color:#475569; line-height:1.7;">
                We facilitate investor connections for startups, linking them with potential investors and venture
                capitalists to secure funding and accelerate their growth trajectory.
            </p>
        </div>

        <!-- Funding Facilitation -->
        <div
            style="background:#ffffff; border:1px solid #e2e8f0; border-radius:12px; padding:40px; box-shadow:0 10px 25px -5px rgba(0,0,0,0.05); height:100%; box-sizing:border-box;">
            <h2
                style="font-family:'Playfair Display',Georgia,serif; font-size:2rem; color:#1A1A2E; margin-bottom:20px; border-bottom:3px solid #F8D316; display:inline-block; padding-bottom:8px;">
                Funding Facilitation</h2>
            <p style="font-family:'Inter',sans-serif; font-size:1.1rem; color:#475569; line-height:1.7;">
                In terms of government grants, MSME hackathons, and other funding schemes, we assist startups in
                identifying, applying for, and securing these opportunities, providing guidance through the application
                process.
            </p>
            <p style="font-family:'Inter',sans-serif; font-size:1.1rem; color:#475569; line-height:1.7; margin-top:24px;">
                <strong>Ongoing Schemes:</strong> MSME HI/BI, Govt. of India
            </p>
        </div>

    </div>
</div>

<!-- PARTNER LOGOS SECTION -->
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
            We Are Partnered With
        </h2>
        <!-- Decorative squiggle line -->
        <div style="display:flex;align-items:center;justify-content:center;gap:2px;margin-bottom:16px;">
            <?php for ($i = 0; $i < 12; $i++): ?>
                <div style="width:5px;height:2px;background:#e53e3e;border-radius:2px;"></div>
            <?php endfor; ?>
        </div>
    </div>

    <!-- Logo Grid -->
    <div style="position:relative;z-index:2;width:100%;max-width:100%;">
        <div style="display:flex;justify-content:center;align-items:center;gap:clamp(20px,4vw,60px);flex-wrap:wrap;">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partners/faad.png" alt="FAAD"
                style="height:55px;width:auto;object-fit:contain;filter:brightness(0);opacity:1;">

            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partners/earlyseed.png"
                alt="Earlyseed Ventures"
                style="height:65px;width:auto;object-fit:contain;filter:brightness(0);opacity:1;">

            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partners/thinkuvate.png" alt="Thinkuvate"
                style="height:50px;width:auto;object-fit:contain;filter:brightness(0);opacity:1;">
        </div>
    </div>
</div>

<!-- PITCH / CONTACT CTA -->
<div class="page-section" style="padding-top:100px;padding-bottom:100px; text-align:center;">
    <div style="max-width:800px; margin:0 auto;">
        <h2
            style="font-family:'Playfair Display',Georgia,serif; font-size:clamp(2rem,4vw,3rem); color:#1A1A2E; margin-bottom:24px;">
            Want to pitch your startup for funding or want to submit a proposal to funding agencies?</h2>

        <p style="font-family:'Inter',sans-serif; font-size:1.1rem; color:#475569; margin-bottom:40px;">
            Reach out to the RCOEM TECHNOLOGY BUSINESS INCUBATORS FOUNDATION to get started.
        </p>

        <a href="mailto:rcoemtbi@rknec.edu"
            style="display:inline-block; background-color:#2563EB; color:#ffffff; font-family:'Inter',sans-serif; font-weight:600; padding:16px 32px; border-radius:30px; text-decoration:none; font-size:1.1rem; transition:background-color 0.2s, transform 0.2s; margin-bottom:32px;"
            onmouseover="this.style.backgroundColor='#1d4ed8'; this.style.transform='translateY(-2px)';"
            onmouseout="this.style.backgroundColor='#2563EB'; this.style.transform='translateY(0)';">
            Contact Us
        </a>

        <div
            style="display:flex; justify-content:center; gap:32px; flex-wrap:wrap; font-family:'Inter',sans-serif; font-size:1rem; color:#64748b;">
            <div style="display:flex; align-items:center; gap:8px;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path
                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                    </path>
                </svg>
                <span>9960722491 | 9890100429</span>
            </div>
            <div style="display:flex; align-items:center; gap:8px;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                    <polyline points="22,6 12,13 2,6"></polyline>
                </svg>
                <span>rcoemtbi@rknec.edu</span>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>