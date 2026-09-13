<?php
/**
 * Template Name: Funding
 * Template Post Type: page
 * @package TBI_Theme
 */
get_header();
?>

<!-- Editorial Page Header -->
<div class="page-editorial-header">
    <div class="peh-label">FUNDING</div>
    <h1 class="peh-heading">
        INVESTOR <span class="ph-red">CONNECT</span><br>
        &amp; <span class="ph-red">GRANT</span> FACILITATION
    </h1>
    <p class="peh-desc">
        Connecting startups with the right capital, at the right time.<br>
        <strong>From angel investors to government grants — we open the doors.</strong>
    </p>
</div>

<!-- INVESTOR CONNECT -->
<div class="page-section" style="padding-top:80px;padding-bottom:60px;">
    <div class="section-label">INVESTOR CONNECT</div>
    <div class="split-layout" style="align-items:center;">
        <div>
            <h2 class="page-heading">CONNECTING STARTUPS TO CAPITAL</h2>
            <p class="mono-text" style="margin-top:20px;">We facilitate investor connections for startups, linking them with potential investors and venture capitalists to secure funding and accelerate their growth trajectory.</p>
            <p class="mono-text" style="margin-top:14px;">Our strong network of funding partners and ecosystem partners are pivotal in enriching our incubator's network, fostering collaboration, and amplifying opportunities for mutual growth and innovation.</p>
        </div>
        <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tbi-infra-screenshot-5.png"
                 alt="Investor Connect" style="width:100%;height:360px;object-fit:cover;display:block;">
            <span class="img-label">Investor Connect at RCOEM TBI</span>
        </div>
    </div>
</div>

<hr style="border:none;border-top:1px solid #e0e0e0;margin:0 7%;">

<!-- FUNDING FACILITATION -->
<div class="page-section" style="padding-top:60px;padding-bottom:60px;">
    <div class="section-label">FUNDING FACILITATION</div>
    <div class="split-layout" style="align-items:center;">
        <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tbi-funding-facilitation.png"
                 alt="Funding Facilitation" style="width:100%;height:340px;object-fit:cover;display:block;">
            <span class="img-label">MSME HI/BI Scheme — Govt. of India</span>
        </div>
        <div>
            <h2 class="page-heading">GRANT & SCHEME SUPPORT</h2>
            <p class="mono-text" style="margin-top:20px;">In terms of government grants, MSME hackathons, and other funding schemes, we assist startups in identifying, applying for, and securing these opportunities — providing guidance through the entire application process.</p>
            <div style="margin-top:30px; padding:24px; border-left:3px solid #0057B0; background:#f8fafc; border:1px solid #e2e8f0; border-left-width:3px; border-radius:12px;">
                <p style="font-family:var(--mono);font-size:0.8rem;color:#0057B0;font-weight:700;margin-bottom:6px;letter-spacing:0.1em;text-transform:uppercase;">ONGOING SCHEME</p>
                <p style="font-family:var(--mono);font-size:0.9rem;color:#0f172a;font-weight:700;">MSME HI/BI Scheme — Government of India</p>
            </div>
        </div>
    </div>
</div>

<hr style="border:none;border-top:1px solid #e0e0e0;margin:0 7%;">

<!-- SOFT RESOURCES -->
<div class="page-section" style="padding-top:60px;padding-bottom:60px;">
    <div class="section-label">SOFT RESOURCES</div>
    <div class="split-layout" style="align-items:center;">
        <div>
            <h2 class="page-heading">SOFTWARE &amp; SUBSCRIPTIONS</h2>
            <p class="mono-text" style="margin-top:20px;">Software and subscriptions help startups reduce operational costs, enabling access to essential tools for development, and creating a more efficient workflow. They also facilitate rapid prototyping, market testing, and scalability without significant upfront investments.</p>
        </div>
        <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tbi-infra-screenshot-6.png"
                 alt="Soft Resources" style="width:100%;height:300px;object-fit:cover;display:block;">
        </div>
    </div>
</div>

<hr style="border:none;border-top:1px solid #e0e0e0;margin:0 7%;">

<!-- CONTACT CTA -->
<div class="page-section" style="padding-top:60px;padding-bottom:80px;">
    <div class="section-label">GET IN TOUCH</div>
    <div class="split-layout">
        <h2 class="page-heading">READY TO PITCH FOR FUNDING?</h2>
        <div>
            <ul class="bullet-list" style="margin-bottom:30px;">
                <li>+91 9960722491 / 9890100429</li>
                <li>rcoemtbi@rknec.edu</li>
                <li>Ramdeo Tekdi, Katol Road, Nagpur 440013</li>
            </ul>
            <a href="mailto:rcoemtbi@rknec.edu"
               style="display:inline-block;background:#0057B0;color:#fff;padding:14px 32px;font-family:var(--mono);font-size:0.85rem;letter-spacing:0.1em;text-transform:uppercase;text-decoration:none;font-weight:700;">
                CONTACT US →
            </a>
        </div>
    </div>
</div>

<?php get_footer(); ?>
