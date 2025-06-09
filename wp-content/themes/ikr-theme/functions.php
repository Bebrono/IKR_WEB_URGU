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

// Создание таблицы для обратной связи при активации темы
function create_feedback_table() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'feedback_messages';
    
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE IF NOT EXISTS $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        name varchar(100) NOT NULL,
        surname varchar(100) NOT NULL,
        email varchar(100) NOT NULL,
        message text NOT NULL,
        created_at datetime DEFAULT CURRENT_TIMESTAMP NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}
add_action('after_switch_theme', 'create_feedback_table');

// Обработка AJAX запроса формы обратной связи
function handle_feedback_submission() {
    check_ajax_referer('feedback_nonce', 'nonce');

    $name = sanitize_text_field($_POST['name']);
    $surname = sanitize_text_field($_POST['surname']);
    $email = sanitize_email($_POST['email']);
    $message = sanitize_textarea_field($_POST['message']);

    global $wpdb;
    $table_name = $wpdb->prefix . 'feedback_messages';

    $result = $wpdb->insert(
        $table_name,
        array(
            'name' => $name,
            'surname' => $surname,
            'email' => $email,
            'message' => $message
        ),
        array('%s', '%s', '%s', '%s')
    );

    if ($result) {
        wp_send_json_success('Сообщение успешно отправлено');
    } else {
        wp_send_json_error('Ошибка при отправке сообщения');
    }
}
add_action('wp_ajax_submit_feedback', 'handle_feedback_submission');
add_action('wp_ajax_nopriv_submit_feedback', 'handle_feedback_submission');

// Добавление страницы в админ-панель для экспорта обращений
function add_feedback_export_page() {
    add_menu_page(
        'Экспорт обращений',
        'Экспорт обращений',
        'manage_options',
        'feedback-export',
        'render_feedback_export_page',
        'dashicons-download',
        30
    );
}
add_action('admin_menu', 'add_feedback_export_page');

// Рендеринг страницы экспорта
function render_feedback_export_page() {
    ?>
    <div class="wrap">
        <h1>Экспорт обращений</h1>
        <form method="post" action="">
            <?php wp_nonce_field('export_feedback_nonce', 'export_nonce'); ?>
            <p>
                <input type="submit" name="export_feedback" class="button button-primary" value="Экспорт в Excel">
            </p>
        </form>
    </div>
    <?php

    if (isset($_POST['export_feedback']) && check_admin_referer('export_feedback_nonce', 'export_nonce')) {
        global $wpdb;
        $table_name = $wpdb->prefix . 'feedback_messages';
        
        $messages = $wpdb->get_results("SELECT * FROM $table_name ORDER BY created_at DESC", ARRAY_A);

        if ($messages) {
            // Заголовки для Excel
            header('Content-Type: application/vnd.ms-excel');
            header('Content-Disposition: attachment;filename="feedback_export_' . date('Y-m-d') . '.xls"');
            header('Cache-Control: max-age=0');

            // Вывод данных
            echo "Имя\tФамилия\tEmail\tСообщение\tДата\n";
            foreach ($messages as $message) {
                echo $message['name'] . "\t";
                echo $message['surname'] . "\t";
                echo $message['email'] . "\t";
                echo $message['message'] . "\t";
                echo $message['created_at'] . "\n";
            }
            exit;
        }
    }
} 