<?php
/**
 * IKR Theme functions and definitions
 */

if (!defined('_S_VERSION')) {
    define('_S_VERSION', '1.0.0');
}

/**
 * Enqueue scripts and styles.
 */
function ikr_theme_scripts() {
    wp_enqueue_style('ikr-theme-style', get_stylesheet_uri(), array(), _S_VERSION);
    wp_enqueue_script('ikr-theme-navigation', get_template_directory_uri() . '/js/main.js', array('jquery'), _S_VERSION, true);

    // Подключаем скрипт карты только на странице инвестиционной карты
    if (is_page_template('page-investment-map.php')) {
        wp_enqueue_script('ikr-theme-map', get_template_directory_uri() . '/js/investment-map.js', array('jquery'), _S_VERSION, true);
    }
}
add_action('wp_enqueue_scripts', 'ikr_theme_scripts');

/**
 * Register navigation menus
 */
function ikr_theme_register_menus() {
    register_nav_menus(
        array(
            'primary' => esc_html__('Главное меню', 'ikr-theme'),
            'footer' => esc_html__('Меню в подвале', 'ikr-theme'),
        )
    );
}
add_action('after_setup_theme', 'ikr_theme_register_menus');

/**
 * Add theme support
 */
function ikr_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'height'      => 250,
        'width'       => 250,
        'flex-width'  => true,
        'flex-height' => true,
    ));
}
add_action('after_setup_theme', 'ikr_theme_setup');

/**
 * Register widget areas
 */
function ikr_theme_widgets_init() {
    register_sidebar(
        array(
            'name'          => esc_html__('Боковая панель', 'ikr-theme'),
            'id'            => 'sidebar-1',
            'description'   => esc_html__('Добавьте виджеты сюда.', 'ikr-theme'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action('widgets_init', 'ikr_theme_widgets_init');

/**
 * Investment Rules Shortcode
 */
function investment_rules_shortcode() {
    ob_start();
    get_template_part('template-parts/content', 'investment-rules');
    return ob_get_clean();
}
add_shortcode('investment_rules', 'investment_rules_shortcode'); 