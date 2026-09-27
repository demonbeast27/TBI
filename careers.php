<?php
/**
 * Template Name: Careers
 * Template Post Type: page
 * @package TBI_Theme
 */
get_header();
?>

<!-- Editorial Page Header -->
<div class="page-editorial-header">
    <?php tbi_hero_grid(); ?>
    <div class="peh-inner">
        <div class="peh-label">Careers at RCOEM TBI</div>
        <h1 class="peh-heading">
            Build your <span class="ph-red">startup</span>
            career from day one
        </h1>
        <p class="peh-desc">
            Two internship pathways. Real founders. Real problems.<br>
            <strong>Choose how you want to build your entrepreneurial journey.</strong>
        </p>
    </div>
</div>

<!-- INTRO -->
<div class="page-section" style="padding-top:80px;padding-bottom:60px;">
    <div class="section-label">INTERNSHIPS</div>
    <div class="split-layout">
        <h2 class="page-heading">TWO WAYS TO START</h2>
        <div>
            <p class="mono-text">At RCOEM TBI, we run a dedicated internship ecosystem with two distinct pathways — one for aspiring entrepreneurs building their own venture, and one for students who want to work inside our incubated startups.</p>
            <p class="mono-text" style="margin-top:14px;">Both routes are built around hands-on learning, real-world execution, and direct mentorship from founders and our incubation team, so you leave with practical skills and entrepreneurial confidence.</p>
        </div>
    </div>
</div>

<hr style="border:none;border-top:1px solid #e0e0e0;margin:0 7%;">

<!-- INTERNSHIP PATHWAYS -->
<div class="page-section" style="padding-top:60px;padding-bottom:60px;">
    <div class="section-label">INTERNSHIP PATHWAYS</div>
    <div class="split-layout">
        <div class="accent-card" style="display:flex;flex-direction:column;justify-content:space-between;gap:24px;">
            <div>
                <div class="card-label">STARTUP INTERNSHIP</div>
                <p>Designed for students and aspiring entrepreneurs who wish to validate their own business ideas. Gain a deep understanding of venture development, market research, customer discovery, and product-market fit through hands-on learning, workshops, and one-on-one mentoring.</p>
            </div>
            <a href="https://forms.gle/Q1nmCq13q7zwyzbg6" target="_blank" rel="noopener noreferrer"
               style="display:inline-block;background:#0057B0;color:#fff;padding:12px 24px;font-family:var(--mono);font-size:0.8rem;letter-spacing:0.1em;text-transform:uppercase;text-decoration:none;font-weight:700;align-self:flex-start;">
                APPLY NOW →
            </a>
        </div>
        <div class="accent-card" style="display:flex;flex-direction:column;justify-content:space-between;gap:24px;">
            <div>
                <div class="card-label">INTERNSHIP WITH INCUBATED STARTUPS</div>
                <p>Work directly with our incubated startups and contribute meaningfully to live projects. Immerse yourself in the daily operations of early-stage companies across marketing, technology, finance, and operations, collaborating with dynamic teams of founders.</p>
            </div>
            <a href="https://forms.gle/234AaoLcGFKEkaNu5" target="_blank" rel="noopener noreferrer"
               style="display:inline-block;background:#0057B0;color:#fff;padding:12px 24px;font-family:var(--mono);font-size:0.8rem;letter-spacing:0.1em;text-transform:uppercase;text-decoration:none;font-weight:700;align-self:flex-start;">
                APPLY NOW →
            </a>
        </div>
    </div>
</div>

<hr style="border:none;border-top:1px solid #e0e0e0;margin:0 7%;">

<!-- FAQs -->
<div class="page-section" style="padding-top:60px;padding-bottom:80px;">
    <div class="section-label">FAQs</div>
    <h2 class="page-heading" style="margin-bottom:50px;">FREQUENTLY ASKED QUESTIONS</h2>

    <div class="numbered-grid">
        <div class="numbered-item" style="flex-direction:column;align-items:flex-start;gap:10px;">
            <div style="display:flex;gap:20px;align-items:flex-start;">
                <span class="num-badge">01</span>
                <div class="num-content">
                    <h4>What does the Startup Internship program cover?</h4>
                    <p>Venture development, market research, customer discovery, and product-market fit — taught through hands-on learning, workshops, and one-on-one mentoring to help you turn a business concept into a viable venture.</p>
                </div>
            </div>
        </div>
        <div class="numbered-item" style="flex-direction:column;align-items:flex-start;gap:10px;">
            <div style="display:flex;gap:20px;align-items:flex-start;">
                <span class="num-badge">02</span>
                <div class="num-content">
                    <h4>Who is the incubated-startup internship for?</h4>
                    <p>Students who want to work inside our incubated startups and contribute to real projects. You'll be immersed in the daily operations of early-stage companies across marketing, technology, finance, operations, and more.</p>
                </div>
            </div>
        </div>
        <div class="numbered-item" style="flex-direction:column;align-items:flex-start;gap:10px;">
            <div style="display:flex;gap:20px;align-items:flex-start;">
                <span class="num-badge">03</span>
                <div class="num-content">
                    <h4>Do I need my own business idea to apply?</h4>
                    <p>For the Startup Internship, an idea of your own helps — the program is designed for students and aspiring entrepreneurs who wish to validate their own business ideas. If you don't have one yet, you can build one during the program.</p>
                </div>
            </div>
        </div>
        <div class="numbered-item" style="flex-direction:column;align-items:flex-start;gap:10px;">
            <div style="display:flex;gap:20px;align-items:flex-start;">
                <span class="num-badge">04</span>
                <div class="num-content">
                    <h4>What do I gain from an internship here?</h4>
                    <p>Practical skills, exposure to the fast-paced startup ecosystem, hands-on execution on live projects, one-on-one mentoring, and a professional network — building the entrepreneurial confidence to chart your own startup journey.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
