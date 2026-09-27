<?php
/**
 * Template Name: Mentors
 * Template Post Type: page
 * @package TBI_Theme
 */
get_header();

require_once get_template_directory() . '/inc/mentors-data.php';
$mentors = tbi_get_mentors_data();

$category_counts = [
    'all' => count($mentors),
    'technology' => 0,
    'ideation' => 0,
    'product-development' => 0,
    'strategy' => 0,
    'marketing' => 0,
    'finance' => 0,
    'operations' => 0,
    'legal' => 0,
];

foreach ($mentors as $m) {
    if (isset($category_counts[$m['category']])) {
        $category_counts[$m['category']]++;
    }
}
?>


<!-- Editorial Page Header -->
<section
    style="background:#FFFFFF; padding: clamp(100px,10vw,130px) clamp(20px,5vw,64px) clamp(60px,7vw,100px); text-align:center; position:relative;">
        <?php tbi_hero_grid(); ?>
        <div class="tbi-hero-content" style="max-width:900px; margin:0 auto;">

        <!-- Yellow "Mentors" label pill -->
        <div style="margin-bottom:24px;">
            <span
                style="font-family:'Playfair Display',Georgia,serif; font-size:clamp(1.8rem,4vw,3rem); font-weight:500; background-color:#F8D316; color:#1A1A2E; padding:4px 24px; display:inline-block;">Mentors</span>
        </div>

        <!-- Main heading — same font as home page -->
        <h1
            style="font-family:'Playfair Display',Georgia,'Times New Roman',serif; font-size:clamp(2.5rem,5vw,4.5rem); font-weight:500; line-height:1.08; color:#1A1A2E; letter-spacing:-0.02em; margin:0 0 24px 0;">
            Expert Mentoring<br>For Startups
        </h1>

        <!-- Subtext -->
        <p
            style="font-family:'Inter',sans-serif; font-size:clamp(1rem,1.5vw,1.2rem); color:#555555; line-height:1.7; margin:0;">
            Mentoring is crucial for startups as it provides guidance, industry insights, and a network of contacts that
            can help navigate challenges and accelerate growth. Mentors offer valuable experience and perspective,
            aiding in strategic decision-making and enhancing overall entrepreneurial success.
        </p>

    </div>
</section>

<hr style="border:none;border-top:1px solid #e0e0e0;margin:0 7%;">

<!-- ===================== MENTORS DIRECTORY ===================== -->
<section class="mentors-directory-section" id="mentors-directory">
    <div class="section-label" style="text-align:center;margin-bottom:12px;">ADVISORY NETWORK</div>
    <h2 class="page-heading" style="text-align:center;margin-bottom:16px;">MEET OUR MENTORS</h2>
    <p class="mono-text" style="text-align:center;max-width:760px;margin:0 auto 44px;">
        Connect with over 45+ visionary leaders, domain specialists, and seasoned entrepreneurs guiding startups across
        critical technology disciplines and growth stages.
    </p>

    <!-- Search & Filter Controls -->
    <div class="mentors-controls-wrap">
        <div class="mentors-search-row">
            <div class="mentors-search-box">
                <i class="fas fa-search search-icon" aria-hidden="true"></i>
                <input type="text" id="mentorSearchInput" class="mentors-search-input"
                    placeholder="Search by name, company, or domain..." autocomplete="off" aria-label="Search mentors">
                <button type="button" id="mentorSearchClear" class="mentors-search-clear" aria-label="Clear search">
                    <i class="fas fa-times" aria-hidden="true"></i>
                </button>
            </div>
            <div class="mentors-header-right-actions">
                <div class="mentors-stats-counter">
                    Showing <strong id="mentorCountDisplay"><?php echo count($mentors); ?></strong> of
                    <?php echo count($mentors); ?> Mentors
                </div>
                <!-- View Mode Switcher -->
                <div class="mentors-view-toggle-btns" role="group" aria-label="View mode">
                    <button type="button" class="view-toggle-btn active" data-view="scroll"
                        title="Horizontal Scroll View">
                        <i class="fas fa-arrows-alt-h" aria-hidden="true"></i> Scroll
                    </button>
                    <button type="button" class="view-toggle-btn" data-view="grid" title="Grid View">
                        <i class="fas fa-th-large" aria-hidden="true"></i> Grid
                    </button>
                </div>
            </div>
        </div>

        <!-- Filter Category Pills -->
        <div class="mentors-filter-pills" role="tablist" aria-label="Filter mentors by category">
            <button type="button" class="mentor-filter-btn active" data-filter="all">
                <span>All Mentors</span>
                <span class="filter-count"><?php echo $category_counts['all']; ?></span>
            </button>
            <button type="button" class="mentor-filter-btn" data-filter="technology">
                <span>Technology</span>
                <span class="filter-count"><?php echo $category_counts['technology']; ?></span>
            </button>
            <button type="button" class="mentor-filter-btn" data-filter="ideation">
                <span>Early Stage Ideation</span>
                <span class="filter-count"><?php echo $category_counts['ideation']; ?></span>
            </button>
            <button type="button" class="mentor-filter-btn" data-filter="product-development">
                <span>Product Development</span>
                <span class="filter-count"><?php echo $category_counts['product-development']; ?></span>
            </button>
            <button type="button" class="mentor-filter-btn" data-filter="strategy">
                <span>Business Strategy</span>
                <span class="filter-count"><?php echo $category_counts['strategy']; ?></span>
            </button>
            <button type="button" class="mentor-filter-btn" data-filter="marketing">
                <span>Marketing &amp; Branding</span>
                <span class="filter-count"><?php echo $category_counts['marketing']; ?></span>
            </button>
            <button type="button" class="mentor-filter-btn" data-filter="finance">
                <span>Finance &amp; Funding</span>
                <span class="filter-count"><?php echo $category_counts['finance']; ?></span>
            </button>
            <button type="button" class="mentor-filter-btn" data-filter="operations">
                <span>Operations</span>
                <span class="filter-count"><?php echo $category_counts['operations']; ?></span>
            </button>
            <button type="button" class="mentor-filter-btn" data-filter="legal">
                <span>Legal &amp; Compliance</span>
                <span class="filter-count"><?php echo $category_counts['legal']; ?></span>
            </button>
        </div>
    </div>

    <!-- Horizontal Scroll Navigation & Hint -->
    <div class="mentors-scroll-header-bar">
        <div class="mentors-scroll-hint">
            <i class="fas fa-arrows-alt-h" aria-hidden="true"></i>
            <span>Scroll or drag horizontally to browse mentors</span>
        </div>
        <div class="mentors-scroll-nav-btns">
            <button type="button" class="mentor-nav-arrow" id="mentorScrollPrev" aria-label="Scroll left" disabled>
                <i class="fas fa-chevron-left" aria-hidden="true"></i>
            </button>
            <button type="button" class="mentor-nav-arrow" id="mentorScrollNext" aria-label="Scroll right">
                <i class="fas fa-chevron-right" aria-hidden="true"></i>
            </button>
        </div>
    </div>

    <!-- Mentors Horizontal Scroll Track -->
    <div class="mentors-scroll-track mentors-track" id="mentorsGrid">
        <?php foreach ($mentors as $mentor): ?>
            <?php
            $image_url = get_template_directory_uri() . '/assets/tbi-photos/mentors/' . esc_attr($mentor['image']);
            $search_haystack = strtolower(esc_attr($mentor['name'] . ' ' . $mentor['designation'] . ' ' . $mentor['company'] . ' ' . $mentor['mentorship'] . ' ' . $mentor['description']));
            $category_pill_class = 'pill-' . esc_attr($mentor['category']);
            ?>
            <div class="mentor-card" data-category="<?php echo esc_attr($mentor['category']); ?>"
                data-search="<?php echo $search_haystack; ?>">
                <div class="mentor-card-top">
                    <div class="mentor-avatar-wrap">
                        <img src="<?php echo $image_url; ?>" alt="<?php echo esc_attr($mentor['name']); ?>"
                            class="mentor-avatar-img" loading="lazy" decoding="async">
                    </div>
                    <div class="mentor-header-meta">
                        <h3 class="mentor-name"><?php echo esc_html($mentor['name']); ?></h3>
                        <div class="mentor-designation"><?php echo esc_html($mentor['designation']); ?></div>
                        <div class="mentor-company-badge" title="<?php echo esc_attr($mentor['company']); ?>">
                            <i class="fas fa-building" aria-hidden="true"></i>
                            <span><?php echo esc_html($mentor['company']); ?></span>
                        </div>
                    </div>
                </div>

                <div class="mentor-card-body">
                    <p class="mentor-desc"><?php echo esc_html($mentor['description']); ?></p>
                </div>

                <div class="mentor-card-footer">
                    <span class="mentor-area-label">Mentorship Area</span>
                    <span class="mentor-domain-pill <?php echo $category_pill_class; ?>">
                        <?php echo esc_html($mentor['mentorship']); ?>
                    </span>
                </div>
            </div>
        <?php endforeach; ?>

        <!-- Empty State When Search / Filter Finds No Mentors -->
        <div class="mentors-empty-state" id="mentorsEmptyState">
            <i class="fas fa-user-slash" aria-hidden="true"></i>
            <h3>No mentors match your search</h3>
            <p>Try searching for a different keyword or clearing your category filters.</p>
            <button type="button" class="mentors-reset-btn" id="mentorsResetBtn">View All Mentors</button>
        </div>
    </div>
</section>

<!-- ===================== MENTORING PROCESS DIAGRAM ===================== -->
<section class="mentoring-process-section">
    <div class="mentoring-process-header">
        <h2 class="mentoring-process-title">Mentoring Process</h2>
    </div>

    <div class="mp-timeline-wrapper" style="padding: 40px 0;">
        <style>
            .mp-timeline {
                display: flex;
                flex-direction: column;
                gap: 32px;
                position: relative;
                max-width: 1100px;
                margin: 0 auto;
            }

            .mp-timeline::before {
                content: '';
                position: absolute;
                top: 0;
                bottom: 0;
                left: 32px;
                width: 2px;
                background: #e2e8f0;
                z-index: 0;
            }

            .mp-step {
                display: flex;
                flex-direction: column;
                gap: 16px;
                position: relative;
                z-index: 1;
                padding-left: 80px;
            }

            .mp-step-number {
                position: absolute;
                left: 8px;
                top: 0;
                width: 48px;
                height: 48px;
                background: #1A1A2E;
                color: #FFFFFF;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                font-family: 'Inter', sans-serif;
                font-size: 1.25rem;
                font-weight: 700;
                border: 4px solid #ffffff;
                box-shadow: 0 4px 12px rgba(26, 26, 46, 0.15);
            }

            .mp-card {
                background: #ffffff;
                border: 1px solid #e2e8f0;
                border-radius: 12px;
                padding: 24px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.02), 0 10px 15px -3px rgba(0, 0, 0, 0.05);
                transition: transform 0.2s ease, box-shadow 0.2s ease;
            }

            .mp-card:hover {
                transform: translateY(-4px);
                box-shadow: 0 12px 24px rgba(0, 0, 0, 0.08);
                border-color: #2563EB;
            }

            .mp-card-title {
                font-family: 'Playfair Display', Georgia, serif;
                font-size: 1.4rem;
                font-weight: 700;
                color: #1A1A2E;
                margin: 0 0 12px 0;
                display: inline-block;
                border-bottom: 2px solid #2563EB;
                padding-bottom: 4px;
            }

            .mp-card-list {
                list-style: none;
                margin: 0;
                padding: 0;
                font-family: 'Inter', sans-serif;
                font-size: 0.95rem;
                color: #475569;
                line-height: 1.6;
            }

            .mp-card-list li {
                position: relative;
                padding-left: 20px;
                margin-bottom: 8px;
            }

            .mp-card-list li::before {
                content: '→';
                position: absolute;
                left: 0;
                color: #2563EB;
                font-weight: bold;
            }

            .mp-card-list li:last-child {
                margin-bottom: 0;
            }

            /* Directional Arrows Between Steps */
            .mp-step:not(:last-child)::after {
                content: '';
                position: absolute;
                left: 33px;
                /* centers on the 2px line at left:32px */
                top: calc(100% + 10px);
                /* middle of the 32px gap */
                width: 8px;
                height: 8px;
                border-bottom: 2px solid #94a3b8;
                border-right: 2px solid #94a3b8;
                transform: translateX(-50%) rotate(45deg);
                z-index: 1;
            }

            @media (min-width: 900px) {
                .mp-timeline {
                    flex-direction: row;
                    gap: 24px;
                }

                .mp-timeline::before {
                    top: 24px;
                    bottom: auto;
                    left: 0;
                    right: 0;
                    width: 100%;
                    height: 2px;
                }

                .mp-step {
                    flex: 1;
                    padding-left: 0;
                    padding-top: 72px;
                    align-items: center;
                    text-align: center;
                }

                .mp-step-number {
                    left: 50%;
                    transform: translateX(-50%);
                }

                .mp-step:not(:last-child)::after {
                    left: calc(100% + 12px);
                    /* middle of the 24px gap */
                    top: 25px;
                    /* centers on the 2px line at top:24px */
                    border-bottom: 2px solid #94a3b8;
                    border-right: 2px solid #94a3b8;
                    transform: translateY(-50%) rotate(-45deg);
                }

                .mp-card {
                    width: 100%;
                    text-align: left;
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                }

                .mp-card-title {
                    text-align: center;
                }

                .mp-card-list {
                    width: 100%;
                }

                .mp-card-list li::before {
                    content: '•';
                    color: #1A1A2E;
                }
            }
        </style>

        <div class="mp-timeline">
            <!-- Step 1 -->
            <div class="mp-step">
                <div class="mp-step-number">1</div>
                <div class="mp-card">
                    <h3 class="mp-card-title">Initiation</h3>
                    <ul class="mp-card-list">
                        <li>RCOEM TBI recommends Mentors</li>
                        <li>The startup chooses the mentor</li>
                    </ul>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="mp-step">
                <div class="mp-step-number">2</div>
                <div class="mp-card">
                    <h3 class="mp-card-title">Initial Engagement</h3>
                    <ul class="mp-card-list">
                        <li>Help you connect</li>
                        <li>Formalize the role and contribution</li>
                    </ul>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="mp-step">
                <div class="mp-step-number">3</div>
                <div class="mp-card">
                    <h3 class="mp-card-title">Continued Involvement</h3>
                    <ul class="mp-card-list">
                        <li>Continuous follow-up</li>
                        <li>Contribution and engagement</li>
                    </ul>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="mp-step">
                <div class="mp-step-number">4</div>
                <div class="mp-card">
                    <h3 class="mp-card-title">Success</h3>
                    <ul class="mp-card-list">
                        <li>Positive Results</li>
                        <li>Entering into a new relationship</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<hr style="border:none;border-top:1px solid #e0e0e0;margin:0 7%;">

<!-- CTAs -->
<div class="page-section" style="padding-top:60px;padding-bottom:80px;">
    <div class="section-label">GET INVOLVED</div>
    <div class="split-layout">
        <div class="accent-card" style="display:flex;flex-direction:column;justify-content:space-between;gap:24px;">
            <div>
                <div class="card-label">LOOKING FOR A MENTOR?</div>
                <p>Apply to get matched with an industry expert who can guide your startup journey from idea to
                    enterprise.</p>
            </div>
            <a href="https://docs.google.com/forms/d/e/1FAIpQLScP_MK7ARNTKByBObMe1zReK6qVftwsOCcorLnwGQcvKpcA9w/formrestricted"
                target="_blank"
                style="display:inline-block; background:#0057B0; color:#fff; padding:12px 28px; font-weight:700; font-family:var(--mono); font-size:0.82rem; letter-spacing:0.1em; text-transform:uppercase; text-decoration:none; align-self:flex-start;">
                APPLY NOW →
            </a>
        </div>
        <div class="accent-card" style="display:flex;flex-direction:column;justify-content:space-between;gap:24px;">
            <div>
                <div class="card-label">WANT TO BE A MENTOR?</div>
                <p>Help the next generation of entrepreneurs achieve their dreams. Share your expertise and make a
                    lasting impact.</p>
            </div>
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSfUNL8lGtIq4ETdwWifHfbv6G0zhycj8_JeDGHcnt8uFM_88g/viewform"
                target="_blank"
                style="display:inline-block; background:#0057B0; color:#fff; padding:12px 28px; font-weight:700; font-family:var(--mono); font-size:0.82rem; letter-spacing:0.1em; text-transform:uppercase; text-decoration:none; align-self:flex-start;">
                BECOME A MENTOR →
            </a>
        </div>
    </div>
</div>

<?php get_footer(); ?>