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
 * Enqueue Styles and Scripts
 */
function tbi_enqueue_assets()
{
    // Styles
    wp_enqueue_style('tbi-main-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0');
    wp_enqueue_style('tbi-mockup-style', get_template_directory_uri() . '/assets/css/mockup-design.css', array('tbi-main-style'), '1.0.0');
    wp_enqueue_style('tbi-services-style', get_template_directory_uri() . '/assets/css/services.css', array(), '1.0.0');
    wp_enqueue_style('tbi-startups-style', get_template_directory_uri() . '/assets/css/incubated-startups.css', array(), '1.0.0');
    wp_enqueue_style('tbi-ecell-style', get_template_directory_uri() . '/assets/css/ecell.css', array(), '1.0.0');
    wp_enqueue_style('tbi-how-we-help-style', get_template_directory_uri() . '/assets/css/how-we-help.css', array('tbi-main-style'), '1.0.0');
    wp_enqueue_style('tbi-profile-card-style', get_template_directory_uri() . '/assets/css/profile-card.css', array(), '1.0.0');
    wp_enqueue_style('tbi-objectives-journey-style', get_template_directory_uri() . '/assets/css/objectives-journey.css', array('tbi-main-style'), '1.0.0');
    wp_enqueue_style('tbi-navbar-style', get_template_directory_uri() . '/assets/css/navbar.css', array('tbi-main-style'), '1.2.0');
    wp_enqueue_style('tbi-flowing-menu-style', get_template_directory_uri() . '/assets/css/FlowingMenu.css', array('tbi-navbar-style'), '1.0.0');
    wp_enqueue_style('tbi-staggered-menu-style', get_template_directory_uri() . '/assets/css/StaggeredMenu.css', array('tbi-navbar-style'), '1.0.0');
    wp_enqueue_style('tbi-drift-wall-style', get_template_directory_uri() . '/assets/css/DriftWall.css', array('tbi-main-style'), '1.0.0');
    wp_enqueue_style('tbi-card-swap-style', get_template_directory_uri() . '/assets/css/CardSwap.css', array('tbi-main-style'), '1.0.0');
    wp_enqueue_style('tbi-scroll-stack-style', get_template_directory_uri() . '/assets/css/scroll-stack.css', array('tbi-main-style'), '1.0.0');
    // Scripts
    wp_enqueue_script('tbi-profile-card-script', get_template_directory_uri() . '/assets/js/profile-card.js', array(), '1.0.0', true);
    wp_enqueue_script('tbi-how-we-help-script', get_template_directory_uri() . '/assets/js/how-we-help.js', array(), '1.0.0', true);
    wp_enqueue_script('tbi-objectives-journey-script', get_template_directory_uri() . '/assets/js/objectives-journey.js', array(), '1.0.0', true);
    wp_enqueue_script('tbi-navbar-script', get_template_directory_uri() . '/assets/js/navbar.js', array('gsap'), '1.2.0', true);
    wp_enqueue_script('tbi-drift-wall-script', get_template_directory_uri() . '/assets/js/drift-wall.js', array(), '1.0.0', true);
    wp_enqueue_script('tbi-card-swap-script', get_template_directory_uri() . '/assets/js/card-swap.js', array('gsap'), '1.0.0', true);
    wp_enqueue_script('tbi-scroll-stack-script', get_template_directory_uri() . '/assets/js/ScrollStack.js', array(), '1.0.0', true);

    // Fonts & Icons
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Oswald:wght@400;600;700&display=swap', array(), null);

    // Hero light CSS (home page hero + global light theme overrides for all pages)
    wp_enqueue_style('tbi-hero-light', get_template_directory_uri() . '/assets/css/hero-light.css', array('tbi-main-style', 'tbi-navbar-style'), '1.0.1');

    // Enqueue landing page styles & scripts ONLY on front page
    if (is_front_page() || is_home()) {
        // Front page specific — nothing extra needed
    }



    // Lucide Icons & GSAP and Lenis for all pages
    wp_enqueue_script('lucide', 'https://unpkg.com/lucide@latest', array(), null, true);
    wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js', array(), '3.12.2', true);
    wp_enqueue_script('gsap-flip', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/Flip.min.js', array('gsap'), '3.12.2', true);
    wp_enqueue_script('lenis', 'https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.29/bundled/lenis.min.js', array(), '1.0.29', true);

    if (file_exists(get_template_directory() . '/assets/js/main.js')) {
        // Main script: depends on gsap, gsap-flip, lenis, lucide (ScrollTrigger removed)
        wp_enqueue_script('tbi-main-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery', 'gsap', 'gsap-flip', 'lenis', 'lucide'), '1.0.0', true);
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