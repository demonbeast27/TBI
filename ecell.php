<?php
/**
 * Template Name: E-Cell
 * Template Post Type: page
 *
 * @package TBI_Theme
 */

get_header();
?>

<!-- Editorial Page Header -->
<div class="page-editorial-header">
    <div class="peh-label">E-CELL COMMITTEE</div>
    <h1 class="peh-heading">
        FOSTERING <span class="ph-red">INNOVATION</span><br>
        &amp; <span class="ph-red">ENTREPRENEURSHIP</span><br>
        AMONG STUDENTS
    </h1>
    <p class="peh-desc">
        E-Cell empowers students through mentorship, workshops, and collaborative events.<br>
        <strong>Equipping aspiring entrepreneurs with tools, resources, and networks.</strong>
    </p>
</div>

<!-- Mission & Vision -->
<div class="ecell-container">

    <div class="left-section">
        <div class="upper">
            <h1>Our Mission</h1>
            <p>E-Cell strives to empower students through mentorship, workshops, and collaborative events. We equip
                aspiring entrepreneurs with the tools, resources, and networks needed to turn their ideas into
                successful ventures, fostering creativity and real-world problem-solving skills among the student
                community.</p>
        </div>

        <div class="lower">
            <h1>Our Vision</h1>
            <p>Our vision is to cultivate a vibrant entrepreneurial ecosystem where students are encouraged to
                challenge norms and build startups. We aim to create future leaders who not only excel in business
                but also contribute meaningfully to society, driving positive change through creativity and
                entrepreneurship.</p>
        </div>
    </div>

    <div class="right-section">
        <!-- Videos are currently missing from the project, but path structure is updated assuming they will be in assets/images/videos or similar. For now pointing to assets/images/ for consistency if user uploads them there. -->
        <video src="<?php echo get_template_directory_uri(); ?>/assets/images/ecell.mp4" autoplay muted loop></video>
    </div>

</div>

<!-- Core Committee -->
<section class="tbi-section" style="padding-bottom: 0; text-align:center;">
    <span class="section-label" style="display:inline-block; font-size:0.8rem; letter-spacing:0.2em; color:#0057B0; font-weight:700; font-family:'JetBrains Mono',monospace; margin-bottom:8px;">STUDENT LEADERSHIP</span>
    <h2 class="section-title" style="font-size:2.5rem; font-weight:800; letter-spacing:-0.03em;">CORE COMMITTEE 25-26</h2>
    <p style="color:#64748b; font-family:'JetBrains Mono',monospace; font-size:0.9rem; max-width:600px; margin:10px auto 0;">Driving the entrepreneurial revolution at RCOEM TBI with student-led venture acceleration and mentorship.</p>
</section>

<?php
$core_committee = array(
    array(
        'name' => 'Ved Tidke',
        'title' => 'President',
        'handle' => 'ved_tidke',
        'status' => 'President',
        'image' => 'ECELL COMMITTEE-20260905T095545Z-1-001/ved tidke.jpg',
        'contact' => 'Connect'
    ),
    array(
        'name' => 'Chetan Lahoti',
        'title' => 'General Secretary',
        'handle' => 'chetan_lahoti',
        'status' => 'General Secretary',
        'image' => 'ECELL COMMITTEE-20260905T095545Z-1-001/chetan lahoti.jpg',
        'contact' => 'Connect'
    ),
    array(
        'name' => 'Vismay Shende',
        'title' => 'Incharge of Media',
        'handle' => 'vismay_shende',
        'status' => 'Media Incharge',
        'image' => 'ECELL COMMITTEE-20260905T095545Z-1-001/vismay shende.jpg',
        'contact' => 'Connect'
    ),
    array(
        'name' => 'Vedika Jain',
        'title' => 'Incharge of Media',
        'handle' => 'vedika_jain',
        'status' => 'Media Incharge',
        'image' => 'ECELL COMMITTEE-20260905T095545Z-1-001/vedika jain.jpg',
        'contact' => 'Connect'
    ),
    array(
        'name' => 'Tilak Sorte',
        'title' => 'Incharge of Design',
        'handle' => 'tilak_sorte',
        'status' => 'Design Incharge',
        'image' => 'ECELL COMMITTEE-20260905T095545Z-1-001/tilak sorte.jpg',
        'contact' => 'Connect'
    ),
    array(
        'name' => 'Saksham Boldhan',
        'title' => 'Incharge of Tech',
        'handle' => 'saksham_boldhan',
        'status' => 'Tech Incharge',
        'image' => 'ECELL COMMITTEE-20260905T095545Z-1-001/saksham boldhan.jpg',
        'contact' => 'Connect'
    ),
    array(
        'name' => 'Aarryan Parakh',
        'title' => 'Vice President',
        'handle' => 'aarryan_parakh',
        'status' => 'Vice President',
        'image' => 'ECELL COMMITTEE-20260905T095545Z-1-001/aarryan parakh.jpg',
        'contact' => 'Connect'
    ),
    array(
        'name' => 'Bhumika Reddy',
        'title' => 'Incharge of Sponsorship',
        'handle' => 'bhumika_reddy',
        'status' => 'Sponsorship Incharge',
        'image' => 'ECELL COMMITTEE-20260905T095545Z-1-001/bhumika reddy.jpg',
        'contact' => 'Connect'
    ),
    array(
        'name' => 'Rishi Palod',
        'title' => 'Incharge of Events',
        'handle' => 'rishi_palod',
        'status' => 'Events Incharge',
        'image' => 'ECELL COMMITTEE-20260905T095545Z-1-001/rishi palod.jpg',
        'contact' => 'Connect'
    ),
    array(
        'name' => 'Devansh Lakhotia',
        'title' => 'Incharge of Finance',
        'handle' => 'devansh_lakhotia',
        'status' => 'Finance Incharge',
        'image' => 'ECELL COMMITTEE-20260905T095545Z-1-001/devansh lakhotia.jpg',
        'contact' => 'Connect'
    ),
    array(
        'name' => 'Shubh Surana',
        'title' => 'Treasurer',
        'handle' => 'shubh_surana',
        'status' => 'Treasurer',
        'image' => 'ECELL COMMITTEE-20260905T095545Z-1-001/shubh surana.jpg',
        'contact' => 'Connect'
    ),
    array(
        'name' => 'Shashwat Sinha',
        'title' => 'Incharge of Marketing',
        'handle' => 'shashwat_sinha',
        'status' => 'Marketing Incharge',
        'image' => 'ECELL COMMITTEE-20260905T095545Z-1-001/shashwat sinha.jpg',
        'contact' => 'Connect'
    ),
    array(
        'name' => 'Pragnya Mogalla',
        'title' => 'Incharge of Content',
        'handle' => 'pragnya_mogalla',
        'status' => 'Content Incharge',
        'image' => 'ECELL COMMITTEE-20260905T095545Z-1-001/pragnya mogalla.jpg',
        'contact' => 'Connect'
    ),
    array(
        'name' => 'Kripa Tawri',
        'title' => 'Incharge of Operations',
        'handle' => 'kripa_tawri',
        'status' => 'Operations Incharge',
        'image' => 'ECELL COMMITTEE-20260905T095545Z-1-001/kripa tawri.jpg',
        'contact' => 'Connect'
    ),
);
?>

<div class="pc-grid">
    <?php foreach ($core_committee as $member) : ?>
        <div class="pc-card-wrapper">
            <div class="pc-behind"></div>
            <div class="pc-card-shell">
                <div class="pc-card">
                    <img class="pc-card-photo"
                         src="<?php echo get_template_directory_uri(); ?>/assets/images/<?php echo esc_attr($member['image']); ?>"
                         alt="<?php echo esc_attr($member['name']); ?>"
                         loading="lazy">
                    <div class="pc-card-footer">
                        <a href="mailto:info@rcoemtbi.org" class="pc-connect-btn" aria-label="Connect with <?php echo esc_attr($member['name']); ?>">Connect</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<!-- Recently Organized -->
<section class="tbi-section" style="padding: 40px 10% 0;">
    <h2 class="section-title">RECENTLY ORGANIZED BY E-CELL CLUB</h2>
</section>

<!-- Transpreneur Event -->
<div class="ecell-container">
    <div class="right-section">
        <video src="<?php echo get_template_directory_uri(); ?>/assets/images/T1.mp4" autoplay muted loop></video>
    </div>
    <div class="left-section">
        <div class="upper">
            <h1>Transpreneur</h1>
            <p>‘Transprenuer’ is an engaging platform where students connect with technology experts and
                entrepreneurs, fostering invaluable interactions that inspire innovation and entrepreneurial spirit.
                It’s a catalyst for learning and collaboration, shaping the future leaders of technology-driven
                industries.</p>
        </div>
        <div class="lower"></div> <!-- Spacer/Visual balance -->
    </div>
    <div class="right-section">
        <video src="<?php echo get_template_directory_uri(); ?>/assets/images/T2.mp4" autoplay muted loop></video>
    </div>
</div>

<!-- Ideathon Event -->
<div class="ecell-container">
    <div class="right-section">
        <video src="<?php echo get_template_directory_uri(); ?>/assets/images/I1.mp4" autoplay muted loop></video>
    </div>
    <div class="left-section">
        <div class="upper">
            <h1>Ideathons</h1>
            <p>‘Ideathon’ is an exciting forum where young minds pitch their innovative ideas to experts, receiving
                invaluable feedback and validation. It cultivates creativity and entrepreneurial skills, empowering
                participants to refine their concepts for real-world impact.</p>
        </div>
        <div class="lower"></div>
    </div>
    <div class="right-section">
        <video src="<?php echo get_template_directory_uri(); ?>/assets/images/I2.mp4" autoplay muted loop></video>
    </div>
</div>

<!-- Venture Vault Event -->
<div class="ecell-container">
    <div class="right-section">
        <video src="<?php echo get_template_directory_uri(); ?>/assets/images/I4.mp4" autoplay muted loop></video>
    </div>
    <div class="left-section">
        <div class="upper">
            <h1>Venture Vault</h1>
            <p>A premier event showcasing startup ideas and ventures, providing a launchpad for student
                entrepreneurs to secure funding and mentorship.</p>
        </div>
        <div class="lower"></div>
    </div>
    <div class="right-section">
        <video src="<?php echo get_template_directory_uri(); ?>/assets/images/I3.mp4" autoplay muted loop></video>
    </div>
</div>

<!-- E-Cell Family -->
<section class="tbi-section" style="padding-bottom: 0;">
    <h2 class="section-title">E-CELL FAMILY</h2>
</section>

<div class="photo-container">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/grp.jpg" alt="E-Cell Family Group Photo">
</div>

<?php
get_footer();