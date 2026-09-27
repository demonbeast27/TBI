<?php
/**
 * Template Name: Incubated Startups
 * Template Post Type: page
 * @package TBI_Theme
 */
get_header();
?>

<!-- Editorial Page Header -->
<div class="page-editorial-header">
    <?php tbi_hero_grid(); ?>
    <div class="peh-inner">
        <div class="peh-label">Incubated Startups</div>
        <h1 class="peh-heading">
            Turning <span class="ph-red">ideas</span> into
            successful <span class="ph-red">ventures</span>
        </h1>
        <p class="peh-desc">
            A growing portfolio of startups that chose to build at RCOEM TBI.<br>
            <strong>Innovators who turned their vision into real, scalable products.</strong>
        </p>
    </div>
</div>

<!-- INTRO -->
<div class="page-section" style="padding-top:80px;padding-bottom:60px;">
    <div class="section-label">OUR PORTFOLIO</div>
    <div class="split-layout">
        <h2 class="page-heading">STARTUPS WE HAVE INCUBATED</h2>
        <p class="mono-text">All current startup profiles — including founder details, ventures, and milestones — are available in our comprehensive portfolio document, updated as of October 2025. Currently 18 ideas are being incubated, and seven startups have progressed to commercialization.</p>
    </div>
</div>

<hr style="border:none;border-top:1px solid #e0e0e0;margin:0 7%;">

<!-- STATS ROW -->
<div class="page-section" style="padding-top:60px;padding-bottom:60px;">
    <div class="stats-row">
        <div class="stats-row__item">
            <div class="stats-row__value">100<span class="stats-row__unit">+</span></div>
            <div class="stats-row__label">Startups Mentored</div>
        </div>
        <div class="stats-row__item">
            <div class="stats-row__value">70<span class="stats-row__unit">+</span></div>
            <div class="stats-row__label">Startups Incubated</div>
        </div>
        <div class="stats-row__item">
            <div class="stats-row__value">2.6<span class="stats-row__unit stats-row__unit--sm">CR+</span></div>
            <div class="stats-row__label">Funding Raised</div>
        </div>
    </div>
</div>

<hr style="border:none;border-top:1px solid #e0e0e0;margin:0 7%;">

<!-- PORTFOLIO DOWNLOAD & GALLERY -->
<div class="page-section" style="padding-top:60px;padding-bottom:80px;">
    <div class="section-label">STARTUP PROFILES</div>
    <div class="split-layout" style="align-items:center;grid-template-columns:1fr;max-width:820px;">
        <div>
            <h2 class="page-heading">FULL PORTFOLIO</h2>
            <p class="mono-text" style="margin-top:20px;">Explore all incubated ventures — their founders, technology domains, funding status, and business milestones in our comprehensive portfolio document.</p>
            <a href="<?php echo esc_url( get_template_directory_uri() . '/assets/docs/STARTUP-PROFILES.pdf' ); ?>" target="_blank"
               style="display:inline-block;margin-top:32px;background:#0057B0;color:#fff;padding:16px 36px;font-family:var(--mono);font-size:0.85rem;letter-spacing:0.12em;text-transform:uppercase;text-decoration:none;font-weight:700;">
                DOWNLOAD STARTUP PROFILES →
            </a>
        </div>
    </div>

    <!-- STARTUP CARDS GRID -->
    <div class="page-section" style="padding-top:80px;padding-bottom:80px;">
        <div class="section-label">OUR PORTFOLIO</div>
        <h2 class="page-heading" style="margin-bottom:48px;">INCUBATED STARTUPS</h2>

        <style>
            .startup-cards-grid {
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
                gap: 28px;
            }
            .startup-card {
                background: #ffffff;
                border: 1px solid #e2e8f0;
                border-radius: 14px;
                padding: 28px;
                display: flex;
                flex-direction: column;
                gap: 16px;
                box-shadow: 0 4px 16px rgba(0,0,0,0.05);
                transition: transform 0.2s ease, box-shadow 0.2s ease;
            }
            .startup-card:hover {
                transform: translateY(-4px);
                box-shadow: 0 12px 32px rgba(0,0,0,0.1);
            }
            .startup-card-logo {
                height: 56px;
                width: auto;
                max-width: 140px;
                object-fit: contain;
                object-position: left center;
            }
            .startup-card-logo-placeholder {
                height: 56px;
                width: 56px;
                background: linear-gradient(135deg, #0057B0, #2563EB);
                border-radius: 10px;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 1.4rem;
                font-weight: 800;
                color: #fff;
                font-family: var(--mono);
            }
            .startup-card-name {
                font-family: 'Playfair Display', Georgia, serif;
                font-size: 1.05rem;
                font-weight: 700;
                color: #0f172a;
                line-height: 1.3;
            }
            .startup-card-desc {
                font-family: 'Inter', sans-serif;
                font-size: 0.85rem;
                color: #64748b;
                line-height: 1.65;
                flex: 1;
            }
            .startup-card-link {
                display: inline-flex;
                align-items: center;
                gap: 6px;
                font-family: var(--mono);
                font-size: 0.75rem;
                letter-spacing: 0.08em;
                text-transform: uppercase;
                color: #0057B0;
                text-decoration: none;
                font-weight: 700;
                border-top: 1px solid #f1f5f9;
                padding-top: 14px;
                margin-top: auto;
                transition: color 0.2s;
            }
            .startup-card-link:hover { color: #e53e3e; }
            .startup-card-link svg { transition: transform 0.2s; }
            .startup-card-link:hover svg { transform: translateX(3px); }
            .startup-card-founders {
                display: flex;
                flex-wrap: wrap;
                align-items: baseline;
                padding: 10px 0 0;
                border-top: 1px solid #f1f5f9;
            }
            .startup-card-founders-label {
                font-family: var(--mono);
                font-size: 0.68rem;
                letter-spacing: 0.1em;
                text-transform: uppercase;
                color: #94a3b8;
                font-weight: 600;
                width: 100%;
                margin-bottom: 4px;
            }
            .startup-card-founder-tag {
                display: inline;
                font-family: 'Inter', sans-serif;
                font-size: 0.84rem;
                color: #1e293b;
                font-weight: 600;
                line-height: 1.45;
            }
            .startup-card-founder-tag:not(:last-child)::after {
                content: ', ';
                color: #64748b;
                font-weight: 400;
                margin-right: 4px;
            }
            @media (max-width: 640px) {
                .startup-cards-grid { grid-template-columns: 1fr; }
            }
        </style>

        <div class="startup-cards-grid">

            <!-- 1. Happico India -->
            <div class="startup-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Logos/ROCCA.png" alt="Happico India (Rocca)" class="startup-card-logo">
                <div class="startup-card-name">Happico India</div>
                <p class="startup-card-desc">Manufacturer of premium artisanal Dark Belgian Chocolates, offering handcrafted confectionery under the brand Rocca.</p>
                <div class="startup-card-founders">
                    <span class="startup-card-founders-label">Founder(s)</span>
                    <span class="startup-card-founder-tag">Yash Pande</span>
                    <span class="startup-card-founder-tag">Sonal Bahilani</span>
                </div>
                <a href="https://myrocca.in/" target="_blank" rel="noopener noreferrer" class="startup-card-link">Visit Website <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
            </div>

            <!-- 2. Sigmatronics Innovations -->
            <div class="startup-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Logos/SIGMATRONICS.png" alt="Sigmatronics" class="startup-card-logo">
                <div class="startup-card-name">Sigmatronics Innovations Pvt Ltd</div>
                <p class="startup-card-desc">Contactless, IoT based, Pneumo-suction mechanism, high stacking capacity mask vending machine.</p>
                <div class="startup-card-founders">
                    <span class="startup-card-founders-label">Founder(s)</span>
                    <span class="startup-card-founder-tag">Mr. Siddharth Satish Mishra</span>
                </div>
                <a href="https://www.sigmatronics.co.in/" target="_blank" rel="noopener noreferrer" class="startup-card-link">Visit Website <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
            </div>

            <!-- 3. Empowrclub -->
            <div class="startup-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Logos/EMPOWRCLUB.png" alt="Empowrclub" class="startup-card-logo">
                <div class="startup-card-name">Empowrclub Pvt. Ltd</div>
                <p class="startup-card-desc">Social Audio Based Application bridging online &amp; offline reading experiences for literary communities.</p>
                <div class="startup-card-founders">
                    <span class="startup-card-founders-label">Founder(s)</span>
                    <span class="startup-card-founder-tag">Ms. Meher Kohli</span>
                </div>
                <a href="https://empowrclub.com/" target="_blank" rel="noopener noreferrer" class="startup-card-link">Visit Website <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
            </div>

            <!-- 4. Health COCO / Smiling Bird -->
            <div class="startup-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Logos/SMILEBIRD.png" alt="Smiling Bird" class="startup-card-logo">
                <div class="startup-card-name">Health COCO / Smiling Bird</div>
                <p class="startup-card-desc">Single platform (online/offline) providing preventive and curative solutions for users to live well, healthy &amp; happy for 100+ years.</p>
                <div class="startup-card-founders">
                    <span class="startup-card-founders-label">Founder(s)</span>
                    <span class="startup-card-founder-tag">Mr. Mohit Saluja (BE CSE, 2018)</span>
                    <span class="startup-card-founder-tag">Mr. Gulshan Saluja (BTech, VNIT)</span>
                </div>
                <a href="https://healthcoco.com/" target="_blank" rel="noopener noreferrer" class="startup-card-link">Visit Website <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
            </div>

            <!-- 5. Unboxing Art -->
            <div class="startup-card">
                <div class="startup-card-logo-placeholder">U</div>
                <div class="startup-card-name">Unboxing Art</div>
                <p class="startup-card-desc">Thoughtfully structured art programs connecting learners to mentors &amp; providing an art community to call ‘home’. Solo product of Dark Room Poets EdTech Pvt. Ltd.</p>
                <div class="startup-card-founders">
                    <span class="startup-card-founders-label">Founder(s)</span>
                    <span class="startup-card-founder-tag">Dark Room Poets (B.E Ind. Engg, 2014)</span>
                </div>
                <a href="https://unboxingart.godaddysites.com/" target="_blank" rel="noopener noreferrer" class="startup-card-link">Visit Website <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
            </div>

            <!-- 6. Easywire Technology -->
            <div class="startup-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Logos/EASYWIRE.png" alt="Easywire" class="startup-card-logo">
                <div class="startup-card-name">Easywire Technology Pvt. Ltd</div>
                <p class="startup-card-desc">Electronic product design, development, and engineering support services for hardware innovation.</p>
                <div class="startup-card-founders">
                    <span class="startup-card-founders-label">Founder(s)</span>
                    <span class="startup-card-founder-tag">Mr. Sumit Dandekar (BE EDT, 2017)</span>
                </div>
                <a href="https://easywire.in/" target="_blank" rel="noopener noreferrer" class="startup-card-link">Visit Website <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
            </div>

            <!-- 7. MechHelp -->
            <div class="startup-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Logos/MECHHELP.png" alt="MechHelp" class="startup-card-logo">
                <div class="startup-card-name">MechHelp Pvt. Ltd</div>
                <p class="startup-card-desc">On-demand digital platform for vehicle repair, breakdown support, and fast roadside mechanical assistance.</p>
                <div class="startup-card-founders">
                    <span class="startup-card-founders-label">Founder(s)</span>
                    <span class="startup-card-founder-tag">Gaurav Chauhan (B.E EE, 3rd Year)</span>
                </div>
                <a href="https://mechhelp.in/" target="_blank" rel="noopener noreferrer" class="startup-card-link">Visit Website <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
            </div>

            <!-- 8. Swasthavyas Emergency -->
            <div class="startup-card">
                <div class="startup-card-logo-placeholder">S</div>
                <div class="startup-card-name">Swasthavyas Emergency LLP</div>
                <p class="startup-card-desc">Developing a next-generation emergency response platform to provide rapid, connected ambulance and medical services.</p>
                <div class="startup-card-founders">
                    <span class="startup-card-founders-label">Founder(s)</span>
                    <span class="startup-card-founder-tag">Sujal Agrawal</span>
                </div>
                <a href="mailto:agrawalsa_7@rknec.edu" class="startup-card-link">Contact Startup <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
            </div>

            <!-- 9. Prograssia (Sharun Innovations) -->
            <div class="startup-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Logos/PROGRESSIA.png" alt="Prograssia" class="startup-card-logo">
                <div class="startup-card-name">Prograssia (Sharun Innovations LLP)</div>
                <p class="startup-card-desc">Edtech platform delivering industry-oriented workshops and hands-on training for real-world skill development.</p>
                <div class="startup-card-founders">
                    <span class="startup-card-founders-label">Founder(s)</span>
                    <span class="startup-card-founder-tag">Vinay Dhawad (B.Tech)</span>
                </div>
                <a href="https://www.sharuninnovations.solutions/" target="_blank" rel="noopener noreferrer" class="startup-card-link">Visit Website <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
            </div>

            <!-- 10. Shashtav Charging Bharat -->
            <div class="startup-card">
                <div class="startup-card-logo-placeholder">⚡</div>
                <div class="startup-card-name">Shashtav Charging Bharat Private Limited</div>
                <p class="startup-card-desc">Smart Electric Vehicle (EV) battery charging station infrastructure and charging network solutions.</p>
                <div class="startup-card-founders">
                    <span class="startup-card-founders-label">Founder(s)</span>
                    <span class="startup-card-founder-tag">Ashwin Dube</span>
                    <span class="startup-card-founder-tag">Varun Dixit</span>
                </div>
                <a href="https://www.linkedin.com/company/shashtav-charging-bharat-private-limited?originalSubdomain=in" target="_blank" rel="noopener noreferrer" class="startup-card-link">View on LinkedIn <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
            </div>

            <!-- 11. HAWLT TECHNOLOGY -->
            <div class="startup-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Logos/HAWLA.png" alt="HAWLT" class="startup-card-logo">
                <div class="startup-card-name">HAWLT TECHNOLOGY PVT. LTD</div>
                <p class="startup-card-desc">Smart digital booking platform for PG hostels, student accommodations, and managed private properties.</p>
                <div class="startup-card-founders">
                    <span class="startup-card-founders-label">Founder(s)</span>
                    <span class="startup-card-founder-tag">Suraj Sharma</span>
                    <span class="startup-card-founder-tag">Pranab Mishra</span>
                    <span class="startup-card-founder-tag">Shivam Thakur</span>
                </div>
                <a href="https://www.linkedin.com/company/shashtav-charging-bharat-private-limited?originalSubdomain=in" target="_blank" rel="noopener noreferrer" class="startup-card-link">View on LinkedIn <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
            </div>

            <!-- 12. Bio-Spectronics -->
            <div class="startup-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Logos/BIOSPECTRONICS.png" alt="Bio-Spectronics" class="startup-card-logo">
                <div class="startup-card-name">Bio-Spectronics Pvt. Ltd</div>
                <p class="startup-card-desc">IoT-enabled Biochemical Blood Analyzer combining precision spectroscopy with automated diagnostic analysis.</p>
                <div class="startup-card-founders">
                    <span class="startup-card-founders-label">Founder(s)</span>
                    <span class="startup-card-founder-tag">Ms. Sangeeta Sammanwar (Palekar)</span>
                </div>
                <a href="https://www.biospectronics.in/" target="_blank" rel="noopener noreferrer" class="startup-card-link">Visit Website <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
            </div>

            <!-- 13. Rihla Technologies (Yoo CAB) -->
            <div class="startup-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Logos/YOO CABS.png" alt="Yoo CAB" class="startup-card-logo">
                <div class="startup-card-name">Rihla Technologies Pvt. Ltd (Yoo CAB)</div>
                <p class="startup-card-desc">Safe and reliable taxi booking platform featuring verified lady drivers to ensure secure and dignified travel.</p>
                <div class="startup-card-founders">
                    <span class="startup-card-founders-label">Founder(s)</span>
                    <span class="startup-card-founder-tag">Naveen Purohit</span>
                    <span class="startup-card-founder-tag">Sandeep Sengokar</span>
                </div>
                <a href="mailto:naveen.purohit02@gmail.com" class="startup-card-link">Contact Startup <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
            </div>

            <!-- 14. Wooferzz Innovations -->
            <div class="startup-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Logos/WOOFERZZ.png" alt="Wooferzz" class="startup-card-logo">
                <div class="startup-card-name">Wooferzz Innovations Pvt Ltd</div>
                <p class="startup-card-desc">Wholesome pet food, nutritious diets, and specialized care products designed for beloved canine companions.</p>
                <div class="startup-card-founders">
                    <span class="startup-card-founders-label">Founder(s)</span>
                    <span class="startup-card-founder-tag">Durva Deshpande (CSE Sem-V)</span>
                    <span class="startup-card-founder-tag">Anirudha Lakha (ECE Sem-V)</span>
                </div>
                <a href="https://wooferzz.com/" target="_blank" rel="noopener noreferrer" class="startup-card-link">Visit Website <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
            </div>

            <!-- 15. BeRAM -->
            <div class="startup-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Logos/BERAM.png" alt="BeRAM" class="startup-card-logo">
                <div class="startup-card-name">BeRAM Pvt. Ltd</div>
                <p class="startup-card-desc">Advanced autonomous drone charging systems and remote power infrastructure for unmanned aerial vehicles.</p>
                <div class="startup-card-founders">
                    <span class="startup-card-founders-label">Founder(s)</span>
                    <span class="startup-card-founder-tag">Tejas Bhandarkar</span>
                </div>
                <a href="https://beramdrones.com/" target="_blank" rel="noopener noreferrer" class="startup-card-link">Visit Website <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
            </div>

            <!-- 16. DVSLA technologies -->
            <div class="startup-card">
                <div class="startup-card-logo-placeholder">D</div>
                <div class="startup-card-name">DVSLA technologies Pvt Ltd</div>
                <p class="startup-card-desc">AC Battery Charging systems engineered specifically for domestic and residential applications.</p>
                <div class="startup-card-founders">
                    <span class="startup-card-founders-label">Founder(s)</span>
                    <span class="startup-card-founder-tag">Mr. Varun Dixit</span>
                </div>
                <a href="mailto:info@rcoemtbi.org?subject=Inquiry%20about%20DVSLA%20technologies" class="startup-card-link">Connect via TBI <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
            </div>

            <!-- 17. Kridun AI Solutions -->
            <div class="startup-card">
                <div class="startup-card-logo-placeholder">K</div>
                <div class="startup-card-name">Kridun AI Solutions LLP</div>
                <p class="startup-card-desc">AI-based marketing optimization and next-generation educational technology platform.</p>
                <div class="startup-card-founders">
                    <span class="startup-card-founders-label">Founder(s)</span>
                    <span class="startup-card-founder-tag">Founding Team</span>
                </div>
                <a href="mailto:info@rcoemtbi.org?subject=Inquiry%20about%20Kridun%20AI%20Solutions" class="startup-card-link">Connect via TBI <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
            </div>

            <!-- 18. Wise-Besarv -->
            <div class="startup-card">
                <div class="startup-card-logo-placeholder">W</div>
                <div class="startup-card-name">Wise-Besarv</div>
                <p class="startup-card-desc">Pioneering sustainable E-Mobility solutions and smart green transport engineering.</p>
                <div class="startup-card-founders">
                    <span class="startup-card-founders-label">Founder(s)</span>
                    <span class="startup-card-founder-tag">Founding Team</span>
                </div>
                <a href="mailto:info@rcoemtbi.org?subject=Inquiry%20about%20Wise-Besarv" class="startup-card-link">Connect via TBI <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
            </div>

            <!-- 19. Pbridge Consultancy -->
            <div class="startup-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Logos/PBRIDGE.png" alt="Pbridge" class="startup-card-logo">
                <div class="startup-card-name">Pbridge Consultancy Pvt Ltd</div>
                <p class="startup-card-desc">Developing innovative assistive technologies, devices, and digital solutions for specially-abled individuals.</p>
                <div class="startup-card-founders">
                    <span class="startup-card-founders-label">Founder(s)</span>
                    <span class="startup-card-founder-tag">Swati Naidu</span>
                </div>
                <a href="mailto:info@rcoemtbi.org?subject=Inquiry%20about%20Pbridge%20Consultancy" class="startup-card-link">Connect via TBI <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
            </div>

            <!-- 20. Cupda Project -->
            <div class="startup-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Logos/Cupda Project.png" alt="Cupda Project" class="startup-card-logo">
                <div class="startup-card-name">Cupda Project Pvt ltd</div>
                <p class="startup-card-desc">Upcycled textile manufacturer repurposing fabric waste into sustainable, high-value consumer products.</p>
                <div class="startup-card-founders">
                    <span class="startup-card-founders-label">Founder(s)</span>
                    <span class="startup-card-founder-tag">Founding Team</span>
                </div>
                <a href="mailto:info@rcoemtbi.org?subject=Inquiry%20about%20Cupda%20Project" class="startup-card-link">Connect via TBI <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
            </div>

            <!-- 21. Parkby -->
            <div class="startup-card">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/tbi-photos/parkby.png" alt="Parkby" class="startup-card-logo">
                <div class="startup-card-name">Parkby</div>
                <p class="startup-card-desc">Intelligent parking management solution optimizing parking space discovery, reservation, and automated operations.</p>
                <div class="startup-card-founders">
                    <span class="startup-card-founders-label">Founder(s)</span>
                    <span class="startup-card-founder-tag">Yash Ghoderao</span>
                </div>
                <a href="https://www.park-by.com/" target="_blank" rel="noopener noreferrer" class="startup-card-link">Visit Website <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
            </div>

            <!-- 22. NOVERRA Growth Studio -->
            <div class="startup-card">
                <div class="startup-card-logo-placeholder">N</div>
                <div class="startup-card-name">NOVERRA Growth Studio Pvt. Ltd</div>
                <p class="startup-card-desc">Specialized growth agency providing targeted digital marketing, branding, and scale strategies for MSMEs.</p>
                <div class="startup-card-founders">
                    <span class="startup-card-founders-label">Founder(s)</span>
                    <span class="startup-card-founder-tag">Founding Team</span>
                </div>
                <a href="mailto:info@rcoemtbi.org?subject=Inquiry%20about%20NOVERRA%20Growth%20Studio" class="startup-card-link">Connect via TBI <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
            </div>

        </div>
    </div>
</div>

<?php get_footer(); ?>