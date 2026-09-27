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
    <div class="staggered-menu-wrapper fixed-wrapper" id="staggeredMenu" data-position="right" data-lenis-prevent style="--sm-accent: #5227FF;">
        <div class="sm-prelayers" aria-hidden="true">
            <div class="sm-prelayer" style="background: #B497CF"></div>
            <div class="sm-prelayer" style="background: #5227FF"></div>
        </div>

        <aside id="staggered-menu-panel" class="staggered-menu-panel" aria-hidden="true" data-lenis-prevent>
            <div class="sm-panel-inner">
                <ul class="sm-panel-list" role="list" data-numbering>
                    <?php
                    $tbi_nav_items = tbi_primary_nav_items();
                    foreach ( $tbi_nav_items as $tbi_i => $tbi_item ) :
                        ?>
                        <li class="sm-panel-itemWrap">
                            <a class="sm-panel-item<?php echo tbi_is_nav_current( $tbi_item['slug'] ) ? ' is-current' : ''; ?>"
                               href="<?php echo esc_url( tbi_primary_nav_url( $tbi_item['slug'] ) ); ?>"
                               aria-label="<?php echo esc_attr( $tbi_item['aria'] ); ?>"
                               data-index="<?php echo esc_attr( $tbi_i + 1 ); ?>">
                                <span class="sm-panel-itemLabel"><?php echo esc_html( $tbi_item['label'] ); ?></span>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </aside>
    </div>