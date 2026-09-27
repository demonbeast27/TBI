<?php
/**
 * Template Name: Programs
 * Template Post Type: page
 * @package TBI_Theme
 */
get_header();
?>

<style>
    .reports-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 24px;
    }

    @media (max-width: 1000px) {
        .reports-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 640px) {
        .reports-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<!-- Editorial Page Header -->
<div class="page-editorial-header">
    <?php tbi_hero_grid(); ?>
    <div class="peh-inner">
        <div class="peh-label">Programs</div>
        <h1 class="peh-heading">
            Launchpad for your <span class="ph-red">big ideas</span>
            &amp; bold ventures
        </h1>
        <p class="peh-desc">
            Structured programs designed to take your startup from concept to scale.<br>
            <strong>Every program is built for traction, not just theory.</strong>
        </p>
    </div>
</div>

<!-- INTRO -->
<div class="page-section" style="padding-top:80px;padding-bottom:60px;">
    <div class="section-label">OUR PROGRAMS</div>
    <div class="split-layout">
        <h2 class="page-heading">STRUCTURED PROGRAMS FOR EVERY STAGE</h2>
        <p class="mono-text">RCOEM TBI offers a range of structured programs designed to support entrepreneurs at every stage — from ideation workshops to full-scale incubation and funding readiness. Our annual reports document the full scope of programs, activities, and impact each year.</p>
    </div>
</div>

<hr style="border:none;border-top:1px solid #e0e0e0;margin:0 7%;">

<!-- ANNUAL REPORTS -->
<div class="page-section" style="padding-top:60px;padding-bottom:60px;">
    <div class="section-label">ANNUAL REPORTS</div>
    <h2 class="page-heading" style="margin-bottom:40px;">IMPACT BY THE NUMBERS</h2>

    <div class="reports-grid">
        <div class="accent-card">
            <div class="card-label">2025 – 26</div>
            <p style="margin-bottom:24px;">Annual Report documenting all programs, startups incubated, and milestones achieved.</p>
            <a href="<?php echo esc_url( get_template_directory_uri() . '/assets/docs/Annual-Report-2025-26.pdf' ); ?>" target="_blank"
               style="display:inline-block;background:#0057B0;color:#fff;padding:10px 22px;font-family:var(--mono);font-size:0.8rem;letter-spacing:0.1em;text-transform:uppercase;text-decoration:none;font-weight:700;">
                DOWNLOAD PDF →
            </a>
        </div>
        <div class="accent-card">
            <div class="card-label">2024 – 25</div>
            <p style="margin-bottom:24px;">Comprehensive overview of incubated startups, programs run, and ecosystem partnerships.</p>
            <a href="<?php echo esc_url( get_template_directory_uri() . '/assets/docs/Annual-Report-2024-25.pdf' ); ?>" target="_blank"
               style="display:inline-block;background:#0057B0;color:#fff;padding:10px 22px;font-family:var(--mono);font-size:0.8rem;letter-spacing:0.1em;text-transform:uppercase;text-decoration:none;font-weight:700;">
                DOWNLOAD PDF →
            </a>
        </div>
        <div class="accent-card">
            <div class="card-label">2023 – 24</div>
            <p style="margin-bottom:24px;">Year-in-review covering funding facilitation, mentoring sessions, and startup growth metrics.</p>
            <a href="<?php echo esc_url( get_template_directory_uri() . '/assets/docs/Report-2023-24.pdf' ); ?>" target="_blank"
               style="display:inline-block;background:#0057B0;color:#fff;padding:10px 22px;font-family:var(--mono);font-size:0.8rem;letter-spacing:0.1em;text-transform:uppercase;text-decoration:none;font-weight:700;">
                DOWNLOAD PDF →
            </a>
        </div>
    </div>
</div>

<hr style="border:none;border-top:1px solid #e0e0e0;margin:0 7%;">

<!-- PROGRAM TYPES -->
<div class="page-section" style="padding-top:60px;padding-bottom:80px;">
    <div class="section-label">PROGRAM TYPES</div>
    <h2 class="page-heading" style="margin-bottom:50px;">WHAT WE RUN</h2>

    <div class="numbered-grid">
        <div class="numbered-item">
            <span class="num-badge">01</span>
            <div class="num-content">
                <h4>Incubation Program</h4>
                <p>Core startup incubation with workspace, mentoring, resources, and ecosystem access from idea to commercialization.</p>
            </div>
        </div>
        <div class="numbered-item">
            <span class="num-badge">02</span>
            <div class="num-content">
                <h4>Entrepreneurship Development Programs</h4>
                <p>Structured bootcamps and workshops to build entrepreneurial mindset, business planning, and pitch skills.</p>
            </div>
        </div>
        <div class="numbered-item">
            <span class="num-badge">03</span>
            <div class="num-content">
                <h4>Design Thinking &amp; Ideation Workshops</h4>
                <p>Hands-on frameworks to identify problems and build innovative solutions through structured ideation.</p>
            </div>
        </div>
        <div class="numbered-item">
            <span class="num-badge">04</span>
            <div class="num-content">
                <h4>Pitch Your Idea</h4>
                <p>Competitive pitch events where entrepreneurs present ideas to mentors, investors, and industry experts.</p>
            </div>
        </div>
        <div class="numbered-item">
            <span class="num-badge">05</span>
            <div class="num-content">
                <h4>Business Plan Competitions</h4>
                <p>Annual competitions challenging student teams to develop comprehensive business plans for recognition and seed funding.</p>
            </div>
        </div>
        <div class="numbered-item">
            <span class="num-badge">06</span>
            <div class="num-content">
                <h4>Startup Internships</h4>
                <p>Internship pathways to validate your own startup idea or work within an incubated startup team.</p>
            </div>
        </div>
    </div>

    <div style="margin-top:50px;text-align:center;">
        <a href="https://forms.gle/hzaZ7GbYGFqg2V3fA" target="_blank"
           style="display:inline-block;background:#0057B0;color:#fff;padding:16px 40px;font-family:var(--mono);font-size:0.88rem;letter-spacing:0.12em;text-transform:uppercase;text-decoration:none;font-weight:700;">
            APPLY FOR INCUBATION →
        </a>
    </div>
</div>

<?php get_footer(); ?>
