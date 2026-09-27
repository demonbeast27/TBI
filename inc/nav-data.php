<?php
/**
 * Primary navigation — single source of truth.
 *
 * Rendered by the StaggeredMenu "More" panel in header.php and by the
 * footer's Quick Links column in footer.php, so the two can never drift.
 * Order here is the display order in both places.
 *
 * @package TBI_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function tbi_primary_nav_items() {
    return array(
        array(
            'slug' => '/',
            'label' => 'Home',
            'aria'  => 'Go to home page',
        ),
        array(
            'slug' => '/about/',
            'label' => 'About',
            'aria'  => 'Learn about us',
        ),
        array(
            'slug' => '/services/',
            'label' => 'Services',
            'aria'  => 'View our services',
        ),
        array(
            'slug' => '/e-cell/',
            'label' => 'E-Cell',
            'aria'  => 'E-Cell',
        ),
        array(
            'slug' => '/mentors/',
            'label' => 'Mentors',
            'aria'  => 'Meet our mentors',
        ),
        array(
            'slug' => '/funding/',
            'label' => 'Funding',
            'aria'  => 'Funding opportunities',
        ),
        array(
            'slug' => '/startups/',
            'label' => 'Startups',
            'aria'  => 'Our startups',
        ),
        array(
            'slug' => '/co-founder/',
            'label' => 'Co-Founder',
            'aria'  => 'Co-Founder matching',
        ),
        array(
            'slug' => '/careers/',
            'label' => 'Careers',
            'aria'  => 'Careers at RCOEM TBI',
        ),
        array(
            'slug' => '/programs/',
            'label' => 'Programs',
            'aria'  => 'Explore our programs',
        ),
        array(
            'slug' => '/contact/',
            'label' => 'Contact',
            'aria'  => 'Get in touch',
        ),
    );
}

function tbi_primary_nav_url( $slug ) {
    return home_url( $slug );
}

/**
 * True when the given nav slug is the page currently being viewed.
 */
function tbi_is_nav_current( $slug ) {
    if ( '/' === $slug ) {
        return is_front_page() || is_home();
    }

    $path = trim( $slug, '/' );

    if ( is_page( $path ) ) {
        return true;
    }

    $queried = get_queried_object();
    if ( $queried instanceof WP_Post ) {
        return $queried->post_name === $path;
    }

    return false;
}
