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

    // Добавляем данные для AJAX
    wp_localize_script('ikr-theme-navigation', 'ajax_object', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('feedback_nonce')
    ));

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

    // Проверяем длину сообщения
    if (mb_strlen($message) > 2048) {
        wp_send_json_error('Сообщение не должно превышать 2048 символов');
        return;
    }

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
        wp_send_json_error('Сообщение слишком большое');
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

// Обработка удаления обращения
function handle_feedback_delete() {
    check_ajax_referer('feedback_nonce', 'nonce');
    
    if (!current_user_can('manage_options')) {
        wp_send_json_error('Недостаточно прав для удаления');
        return;
    }

    $message_id = intval($_POST['message_id']);
    
    global $wpdb;
    $table_name = $wpdb->prefix . 'feedback_messages';
    
    $result = $wpdb->delete(
        $table_name,
        array('id' => $message_id),
        array('%d')
    );

    if ($result) {
        wp_send_json_success('Обращение успешно удалено');
    } else {
        wp_send_json_error('Ошибка при удалении обращения');
    }
}
add_action('wp_ajax_delete_feedback', 'handle_feedback_delete');

// Рендеринг страницы экспорта
function render_feedback_export_page() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'feedback_messages';
    
    // Проверяем, был ли запрос на экспорт
    if (isset($_POST['export_feedback']) && check_admin_referer('export_feedback_nonce', 'export_nonce')) {
        $messages = $wpdb->get_results("SELECT * FROM $table_name ORDER BY created_at DESC", ARRAY_A);
        
        if ($messages) {
            // Создаем временный файл
            $filename = 'feedback_export_' . date('Y-m-d') . '.xls';
            $filepath = wp_upload_dir()['path'] . '/' . $filename;
            
            // Создаем XML файл
            $xml = '<?xml version="1.0" encoding="UTF-8"?>';
            $xml .= '<?mso-application progid="Excel.Sheet"?>';
            $xml .= '<Workbook xmlns="urn:schemas-microsoft-com:office:spreadsheet" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns:ss="urn:schemas-microsoft-com:office:spreadsheet" xmlns:html="http://www.w3.org/TR/REC-html40">';
            $xml .= '<Worksheet ss:Name="Обращения">';
            $xml .= '<Table>';
            
            // Заголовки
            $xml .= '<Row>';
            $xml .= '<Cell><Data ss:Type="String">Дата</Data></Cell>';
            $xml .= '<Cell><Data ss:Type="String">Имя</Data></Cell>';
            $xml .= '<Cell><Data ss:Type="String">Фамилия</Data></Cell>';
            $xml .= '<Cell><Data ss:Type="String">Email</Data></Cell>';
            $xml .= '<Cell><Data ss:Type="String">Сообщение</Data></Cell>';
            $xml .= '</Row>';
            
            // Данные
            foreach ($messages as $message) {
                $xml .= '<Row>';
                $xml .= '<Cell><Data ss:Type="String">' . date('d.m.Y H:i', strtotime($message['created_at'])) . '</Data></Cell>';
                $xml .= '<Cell><Data ss:Type="String">' . htmlspecialchars($message['name']) . '</Data></Cell>';
                $xml .= '<Cell><Data ss:Type="String">' . htmlspecialchars($message['surname']) . '</Data></Cell>';
                $xml .= '<Cell><Data ss:Type="String">' . htmlspecialchars($message['email']) . '</Data></Cell>';
                $xml .= '<Cell><Data ss:Type="String">' . htmlspecialchars($message['message']) . '</Data></Cell>';
                $xml .= '</Row>';
            }
            
            $xml .= '</Table>';
            $xml .= '</Worksheet>';
            $xml .= '</Workbook>';
            
            // Сохраняем файл
            file_put_contents($filepath, $xml);
            
            // Добавляем правильные заголовки для файла
            add_filter('upload_mimes', function($mimes) {
                $mimes['xls'] = 'application/vnd.ms-excel';
                return $mimes;
            });
            
            // Скачиваем файл
            $file_url = wp_upload_dir()['url'] . '/' . $filename;
            ?>
            <script>
                window.location.href = '<?php echo $file_url; ?>';
            </script>
            <?php
            exit;
        }
    }
    
    // Если это не запрос на экспорт, показываем форму
    ?>
    <div class="wrap">
        <h1>Обращения</h1>
        <form method="post" action="">
            <?php wp_nonce_field('export_feedback_nonce', 'export_nonce'); ?>
            <p>
                <input type="submit" name="export_feedback" class="button button-primary" value="Экспорт в Excel">
            </p>
        </form>
        
        <h2>Список обращений</h2>
        <table class="wp-list-table widefat fixed striped">
            <thead>
                <tr>
                    <th>Дата</th>
                    <th>Имя</th>
                    <th>Фамилия</th>
                    <th>Email</th>
                    <th>Сообщение</th>
                    <th>Действия</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $messages = $wpdb->get_results("SELECT * FROM $table_name ORDER BY created_at DESC", ARRAY_A);
                foreach ($messages as $message): ?>
                    <tr id="feedback-row-<?php echo $message['id']; ?>">
                        <td><?php echo date('d.m.Y H:i', strtotime($message['created_at'])); ?></td>
                        <td><?php echo esc_html($message['name']); ?></td>
                        <td><?php echo esc_html($message['surname']); ?></td>
                        <td><?php echo esc_html($message['email']); ?></td>
                        <td><?php echo esc_html($message['message']); ?></td>
                        <td>
                            <button type="button" 
                                    class="button button-small delete-feedback" 
                                    data-id="<?php echo $message['id']; ?>">
                                Удалить
                            </button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?php
} 