<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <!-- Clean Light Modern Top Navbar -->
    <header class="navbar-wrapper" id="siteHeader">
        <div class="navbar-container">
            <!-- Brand Logo -->
            <a href="<?php echo esc_url(home_url('/')); ?>" class="brand-logo" aria-label="RBU TBI Home">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Logos/RCOEM TBI logo.jpg" alt="RCOEM TBI Logo" class="logo-img">
            </a>

            <!-- Right Navigation & Menu Toggle -->
            <div class="navbar-right">
                <nav class="nav-menu" aria-label="Main Navigation">
                    <ul class="nav-list">
                        <li class="nav-item"><a href="<?php echo esc_url(home_url('/')); ?>" class="nav-link <?php echo (is_front_page() || is_home()) ? 'active' : ''; ?>">Home</a></li>
                        <li class="nav-item"><a href="<?php echo esc_url(home_url('/about/')); ?>" class="nav-link">About</a></li>
                        <li class="nav-item"><a href="<?php echo esc_url(home_url('/services/')); ?>" class="nav-link">Services</a></li>
                        <li class="nav-item"><a href="<?php echo esc_url(home_url('/e-cell/')); ?>" class="nav-link">E-Cell</a></li>
                        <li class="nav-item"><a href="<?php echo esc_url(home_url('/contact/')); ?>" class="nav-link">Contact</a></li>
                    </ul>
                </nav>

                <span class="nav-divider" aria-hidden="true"></span>

                <!-- StaggeredMenu / More Toggle Button -->
                <button class="sm-toggle btn-more-pill" id="staggeredMenuToggle" aria-label="Open menu" aria-expanded="false" type="button">
                    <span class="sm-toggle-textWrap" aria-hidden="true">
                        <span class="sm-toggle-textInner">
                            <span class="sm-toggle-line">More</span>
                        </span>
                    </span>
                    <span class="sm-icon" aria-hidden="true">
                        <span class="sm-icon-line"></span>
                        <span class="sm-icon-line sm-icon-line-v"></span>
                    </span>
                </button>
            </div>
        </div>
    </header>

    <!-- StaggeredMenu (ported from React Bits) -->
    <div class="staggered-menu-wrapper fixed-wrapper" id="staggeredMenu" data-position="right" style="--sm-accent: #5227FF;">
        <div class="sm-prelayers" aria-hidden="true">
            <div class="sm-prelayer" style="background: #B497CF"></div>
            <div class="sm-prelayer" style="background: #5227FF"></div>
        </div>

        <aside id="staggered-menu-panel" class="staggered-menu-panel" aria-hidden="true">
            <div class="sm-panel-inner">
                <ul class="sm-panel-list" role="list" data-numbering>
                    <li class="sm-panel-itemWrap">
                        <a class="sm-panel-item" href="<?php echo esc_url(home_url('/')); ?>" aria-label="Go to home page" data-index="1">
                            <span class="sm-panel-itemLabel">Home</span>
                        </a>
                    </li>
                    <li class="sm-panel-itemWrap">
                        <a class="sm-panel-item" href="<?php echo esc_url(home_url('/about/')); ?>" aria-label="Learn about us" data-index="2">
                            <span class="sm-panel-itemLabel">About</span>
                        </a>
                    </li>
                    <li class="sm-panel-itemWrap">
                        <a class="sm-panel-item" href="<?php echo esc_url(home_url('/services/')); ?>" aria-label="View our services" data-index="3">
                            <span class="sm-panel-itemLabel">Services</span>
                        </a>
                    </li>
                    <li class="sm-panel-itemWrap">
                        <a class="sm-panel-item" href="<?php echo esc_url(home_url('/mentors/')); ?>" aria-label="Meet our mentors" data-index="4">
                            <span class="sm-panel-itemLabel">Mentors</span>
                        </a>
                    </li>
                    <li class="sm-panel-itemWrap">
                        <a class="sm-panel-item" href="<?php echo esc_url(home_url('/programs/')); ?>" aria-label="Explore programs" data-index="5">
                            <span class="sm-panel-itemLabel">Programs</span>
                        </a>
                    </li>
                    <li class="sm-panel-itemWrap">
                        <a class="sm-panel-item" href="<?php echo esc_url(home_url('/funding/')); ?>" aria-label="Funding opportunities" data-index="6">
                            <span class="sm-panel-itemLabel">Funding</span>
                        </a>
                    </li>
                    <li class="sm-panel-itemWrap">
                        <a class="sm-panel-item" href="<?php echo esc_url(home_url('/startups/')); ?>" aria-label="Our startups" data-index="7">
                            <span class="sm-panel-itemLabel">Startups</span>
                        </a>
                    </li>
                    <li class="sm-panel-itemWrap">
                        <a class="sm-panel-item" href="<?php echo esc_url(home_url('/co-founder/')); ?>" aria-label="Co-Founder matching" data-index="8">
                            <span class="sm-panel-itemLabel">Co-Founder</span>
                        </a>
                    </li>
                    <li class="sm-panel-itemWrap">
                        <a class="sm-panel-item" href="<?php echo esc_url(home_url('/careers/')); ?>" aria-label="Careers" data-index="9">
                            <span class="sm-panel-itemLabel">Careers</span>
                        </a>
                    </li>
                    <li class="sm-panel-itemWrap">
                        <a class="sm-panel-item" href="<?php echo esc_url(home_url('/e-cell/')); ?>" aria-label="E-Cell" data-index="10">
                            <span class="sm-panel-itemLabel">E-Cell</span>
                        </a>
                    </li>
                    <li class="sm-panel-itemWrap">
                        <a class="sm-panel-item" href="<?php echo esc_url(home_url('/contact/')); ?>" aria-label="Get in touch" data-index="12">
                            <span class="sm-panel-itemLabel">Contact</span>
                        </a>
                    </li>
                </ul>

                <div class="sm-socials" aria-label="Social links">
                    <h3 class="sm-socials-title">Socials</h3>
                    <ul class="sm-socials-list" role="list">
                        <li class="sm-socials-item">
                            <a href="#" target="_blank" rel="noopener noreferrer" class="sm-socials-link">Twitter</a>
                        </li>
                        <li class="sm-socials-item">
                            <a href="#" target="_blank" rel="noopener noreferrer" class="sm-socials-link">GitHub</a>
                        </li>
                        <li class="sm-socials-item">
                            <a href="#" target="_blank" rel="noopener noreferrer" class="sm-socials-link">LinkedIn</a>
                        </li>
                    </ul>
                </div>
            </div>
        </aside>
    </div>