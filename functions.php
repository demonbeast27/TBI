<?php
/**
 * RBU TBI Theme Functions
 * 
 * @package TBI_Theme
 * @version 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Shared data: primary navigation (menu panel + footer quick links)
require_once get_template_directory() . '/inc/nav-data.php';

/**
 * Theme Setup
 */
function tbi_theme_setup()
{
    // Add theme support features
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption'
    ));

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'tbi-theme'),
    ));
}
add_action('after_setup_theme', 'tbi_theme_setup');

/**
 * Infinite scrolling grid background for a page hero.
 *
 * Must be called as the FIRST child of the hero element, which must be
 * position:relative. Hero content needs position:relative + z-index:1 so
 * the absolutely positioned grid layers sit behind the text.
 */
function tbi_hero_grid()
{
    echo '<div class="hero-infinite-grid" aria-hidden="true">'
        . '<div class="hero-grid-layer hero-grid-layer--base"></div>'
        . '<div class="hero-grid-layer hero-grid-layer--reveal"></div>'
        . '</div>';
}

/**
 * Enqueue Styles and Scripts
 */
function tbi_asset_version($relative_path, $fallback = '1.0.0')
{
    $file = get_template_directory() . '/' . ltrim($relative_path, '/');
    return file_exists($file) ? (string) filemtime($file) : $fallback;
}

function tbi_enqueue_assets()
{
    // Styles
    wp_enqueue_style('tbi-main-style', get_template_directory_uri() . '/assets/css/style.css', array(), tbi_asset_version('assets/css/style.css'));
    wp_enqueue_style('tbi-mockup-style', get_template_directory_uri() . '/assets/css/mockup-design.css', array('tbi-main-style'), tbi_asset_version('assets/css/mockup-design.css'));
    wp_enqueue_style('tbi-services-style', get_template_directory_uri() . '/assets/css/services.css', array(), tbi_asset_version('assets/css/services.css'));
    wp_enqueue_style('tbi-startups-style', get_template_directory_uri() . '/assets/css/incubated-startups.css', array(), tbi_asset_version('assets/css/incubated-startups.css'));
    wp_enqueue_style('tbi-ecell-style', get_template_directory_uri() . '/assets/css/ecell.css', array(), tbi_asset_version('assets/css/ecell.css'));
    wp_enqueue_style('tbi-how-we-help-style', get_template_directory_uri() . '/assets/css/how-we-help.css', array('tbi-main-style'), tbi_asset_version('assets/css/how-we-help.css'));
    wp_enqueue_style('tbi-profile-card-style', get_template_directory_uri() . '/assets/css/profile-card.css', array(), tbi_asset_version('assets/css/profile-card.css'));
    wp_enqueue_style('tbi-objectives-journey-style', get_template_directory_uri() . '/assets/css/objectives-journey.css', array('tbi-main-style'), tbi_asset_version('assets/css/objectives-journey.css'));
    wp_enqueue_style('tbi-navbar-style', get_template_directory_uri() . '/assets/css/navbar.css', array('tbi-main-style'), tbi_asset_version('assets/css/navbar.css'));
    wp_enqueue_style('tbi-flowing-menu-style', get_template_directory_uri() . '/assets/css/FlowingMenu.css', array('tbi-navbar-style'), tbi_asset_version('assets/css/FlowingMenu.css'));
    wp_enqueue_style('tbi-staggered-menu-style', get_template_directory_uri() . '/assets/css/StaggeredMenu.css', array('tbi-navbar-style'), tbi_asset_version('assets/css/StaggeredMenu.css'));
    wp_enqueue_style('tbi-drift-wall-style', get_template_directory_uri() . '/assets/css/DriftWall.css', array('tbi-main-style'), tbi_asset_version('assets/css/DriftWall.css'));
    wp_enqueue_style('tbi-card-swap-style', get_template_directory_uri() . '/assets/css/CardSwap.css', array('tbi-main-style'), tbi_asset_version('assets/css/CardSwap.css'));
    wp_enqueue_style('tbi-scroll-stack-style', get_template_directory_uri() . '/assets/css/scroll-stack.css', array('tbi-main-style'), tbi_asset_version('assets/css/scroll-stack.css'));
    wp_enqueue_style('tbi-mentors-style', get_template_directory_uri() . '/assets/css/mentors.css', array('tbi-main-style'), tbi_asset_version('assets/css/mentors.css'));
    // Scripts
    wp_enqueue_script('tbi-profile-card-script', get_template_directory_uri() . '/assets/js/profile-card.js', array(), tbi_asset_version('assets/js/profile-card.js'), true);
    wp_enqueue_script('tbi-how-we-help-script', get_template_directory_uri() . '/assets/js/how-we-help.js', array(), tbi_asset_version('assets/js/how-we-help.js'), true);
    wp_enqueue_script('tbi-objectives-journey-script', get_template_directory_uri() . '/assets/js/objectives-journey.js', array(), tbi_asset_version('assets/js/objectives-journey.js'), true);
    wp_enqueue_script('tbi-navbar-script', get_template_directory_uri() . '/assets/js/navbar.js', array('gsap'), tbi_asset_version('assets/js/navbar.js'), true);
    wp_enqueue_script('tbi-drift-wall-script', get_template_directory_uri() . '/assets/js/drift-wall.js', array(), tbi_asset_version('assets/js/drift-wall.js'), true);
    wp_localize_script('tbi-drift-wall-script', 'tbiThemeURI', array('root' => get_template_directory_uri()));
    wp_enqueue_script('tbi-card-swap-script', get_template_directory_uri() . '/assets/js/card-swap.js', array('gsap'), tbi_asset_version('assets/js/card-swap.js'), true);
    wp_enqueue_script('tbi-scroll-stack-script', get_template_directory_uri() . '/assets/js/ScrollStack.js', array(), tbi_asset_version('assets/js/ScrollStack.js'), true);
    wp_enqueue_script('tbi-mentors-script', get_template_directory_uri() . '/assets/js/mentors.js', array(), tbi_asset_version('assets/js/mentors.js'), true);

    // Fonts & Icons (self-hosted)
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/vendor/font-awesome/css/all.min.css', array(), '6.4.0');
    wp_enqueue_style('google-fonts', get_template_directory_uri() . '/assets/fonts/google-fonts.css', array(), tbi_asset_version('assets/fonts/google-fonts.css'));

    // Hero light CSS (home page hero + global light theme overrides for all pages)
    wp_enqueue_style('tbi-hero-light', get_template_directory_uri() . '/assets/css/hero-light.css', array('tbi-main-style', 'tbi-navbar-style'), tbi_asset_version('assets/css/hero-light.css'));

    // Hero infinite grid (cursor-following reveal) — used on every page hero
    wp_enqueue_script('tbi-hero-grid-script', get_template_directory_uri() . '/assets/js/hero-grid.js', array(), tbi_asset_version('assets/js/hero-grid.js'), true);

    // Lucide Icons & GSAP and Lenis for all pages (self-hosted)
    wp_enqueue_script('lucide', get_template_directory_uri() . '/assets/vendor/js/lucide.min.js', array(), '0.454.0', true);
    wp_enqueue_script('gsap', get_template_directory_uri() . '/assets/vendor/js/gsap.min.js', array(), '3.12.2', true);
    wp_enqueue_script('gsap-flip', get_template_directory_uri() . '/assets/vendor/js/Flip.min.js', array('gsap'), '3.12.2', true);
    wp_enqueue_script('lenis', get_template_directory_uri() . '/assets/vendor/js/lenis.min.js', array(), '1.0.29', true);

    if (file_exists(get_template_directory() . '/assets/js/main.js')) {
        // Main script: depends on gsap, gsap-flip, lenis, lucide (ScrollTrigger removed)
        wp_enqueue_script('tbi-main-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery', 'gsap', 'gsap-flip', 'lenis', 'lucide'), tbi_asset_version('assets/js/main.js'), true);
    }
}
add_action('wp_enqueue_scripts', 'tbi_enqueue_assets');

/**
 * Custom Navigation Walker (Optional - for better control)
 */
class TBI_Walker_Nav_Menu extends Walker_Nav_Menu
{
    public function start_el(&$output, $data_object, $depth = 0, $args = null, $current_object_id = 0)
    {
        $item = $data_object;
        $classes = empty($item->classes) ? array() : (array) $item->classes;

        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

        $output .= '<a href="' . esc_url($item->url) . '"' . $class_names . '>';
        $output .= apply_filters('the_title', $item->title, $item->ID);
        $output .= '</a>';
    }
}

/**
 * Add body classes for different pages
 */
function tbi_body_classes($classes)
{
    if (is_front_page()) {
        $classes[] = 'home-page';
    }
    return $classes;
}
add_filter('body_class', 'tbi_body_classes');

/**
 * Custom excerpt length
 */
function tbi_excerpt_length($length)
{
    return 30;
}
add_filter('excerpt_length', 'tbi_excerpt_length');