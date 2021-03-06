<?php

define('TM_DIR', get_template_directory(__FILE__));
define('TM_URL', get_template_directory_uri(__FILE__));

require_once TM_DIR . '/lib/Parser.php';

function add_style(){
    wp_enqueue_style( 'my-bootstrap-extension', get_template_directory_uri() . '/css/bootstrap.css', array(), '1');
    wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css', array('my-bootstrap-extension'), '1');
    wp_enqueue_style( 'my-styles', get_template_directory_uri() . '/css/style.css', array('my-bootstrap-extension'), '1');
    wp_enqueue_style( 'my-sass', get_template_directory_uri() . '/sass/style.css', array('my-bootstrap-extension'), '1');
    wp_enqueue_style( 'fotorama', get_template_directory_uri() . '/css/fotorama.css', array('my-bootstrap-extension'), '1');
}

function add_script(){
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-2.1.3.min.js', array(), '1');
    wp_enqueue_script( 'jq', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js', array(), '1');
    wp_enqueue_script( 'my-bootstrap-extension', get_template_directory_uri() . '/js/bootstrap.js', array(), '1');
    wp_enqueue_script( 'my-script', get_template_directory_uri() . '/js/script.min.js', array(), '1');
    wp_enqueue_script( 'fotorama-js', get_template_directory_uri() . '/js/fotorama.js', array(), '1');
}

function add_admin_script(){
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-2.1.3.min.js', array(), '1');
    wp_enqueue_script('admin',get_template_directory_uri() . '/js/admin.js', array(), '1');
    wp_enqueue_style( 'my-bootstrap-extension-admin', get_template_directory_uri() . '/css/bootstrap.css', array(), '1');
    wp_enqueue_script( 'my-bootstrap-extension', get_template_directory_uri() . '/js/bootstrap.js', array(), '1');
    wp_enqueue_style( 'my-style-admin', get_template_directory_uri() . '/css/admin.css', array(), '1');
}

add_action('admin_enqueue_scripts', 'add_admin_script');
add_action( 'wp_enqueue_scripts', 'add_style' );
add_action( 'wp_enqueue_scripts', 'add_script' );

function prn($content) {
    echo '<pre style="background: lightgray; border: 1px solid black; padding: 2px">';
    print_r ( $content );
    echo '</pre>';
}

function my_pagenavi() {
    global $wp_query;

    $big = 999999999; // уникальное число для замены

    $args = array(
        'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) )
    ,'format' => ''
    ,'current' => max( 1, get_query_var('paged') )
    ,'total' => $wp_query->max_num_pages
    );

    $result = paginate_links( $args );

    // удаляем добавку к пагинации для первой страницы
    $result = str_replace( '/page/1/', '', $result );

    echo $result;
}

function excerpt_readmore($more) {
    return '... <br><a href="'. get_permalink($post->ID) . '" class="readmore">' . 'Читать далее' . '</a>';
}
add_filter('excerpt_more', 'excerpt_readmore');

if ( function_exists( 'add_theme_support' ) )
    add_theme_support( 'post-thumbnails' );

/*===================THEME SETTINGS============================*/
/* */
add_action('customize_register', function($customizer){
    /*Меню настройки контактов*/
    $customizer->add_section(
        'contacts_section',
        array(
            'title' => 'Настройки контактов',
            'description' => 'Контакты',
            'priority' => 35,
        )
    );
    $customizer->add_setting(
        'address_textbox',
        array('default' => 'г. Нижний Новгород, ул. Бориса Панина, д.9')
    );
    $customizer->add_setting(
        'mail_textbox',
        array('default' => 'admin@admin.ru')
    );
    $customizer->add_setting(
        'phone_textbox',
        array('default' => '+7 (930) 8-1111-99')
    );

    $customizer->add_control(
        'phone_textbox',
        array(
            'label' => 'Телефон',
            'section' => 'contacts_section',
            'type' => 'text',
        )
    );
    $customizer->add_control(
        'address_textbox',
        array(
            'label' => 'Адрес',
            'section' => 'contacts_section',
            'type' => 'text',
        )
    );
    $customizer->add_control(
        'mail_textbox',
        array(
            'label' => 'Email',
            'section' => 'contacts_section',
            'type' => 'text',
        )
    );

    /*Меню настройки соц-сетей*/
    $customizer->add_section(
        'social_section',
        array(
            'title' => 'Настройки соц. сетей',
            'description' => 'Социальные сети',
            'priority' => 35,
        )
    );
    $customizer->add_setting(
        'vk_textbox',
        array('default' => 'http://vk.com/oilbox_russia')
    );
    $customizer->add_setting(
        'inst_textbox',
        array('default' => 'http://instagram.com')
    );

    $customizer->add_control(
        'vk_textbox',
        array(
            'label' => 'Вконтакте',
            'section' => 'social_section',
            'type' => 'text',
        )
    );
    $customizer->add_control(
        'inst_textbox',
        array(
            'label' => 'Instagram',
            'section' => 'social_section',
            'type' => 'text',
        )
    );
});

/*=================END THEME SETTINGS==========================*/

/*=======================FEEDBACK==============================*/

add_action('wp_ajax_send_feedback', 'sendFeedback');
add_action('wp_ajax_nopriv_send_feedback', 'sendFeedback');

function sendFeedback(){
    $admin_mail = get_option('admin_email');

    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $phone = $_POST['phone'];




    if($_POST['option']){
        $str = "С вашего сайта сделали заказ:";
        $str .= "</br> Товар: ".$_POST['option'];
        $str .= "<br> Имя: $name<br> Телефон: $phone<br> Email: $mail";
    }else{
        $str = "С вашего сайта запросили обратную связь:";
        $str .= "<br> Имя: $name<br> Телефон: $phone<br> Email: $mail";
    }

    mail($admin_mail, "Письмо с сайта oilbox24.ru",$str , "Content-type: text/html; charset=UTF-8\r\n");
}

/*======================END FEEDBACK===========================*/

/*----------------------------------------------— REVIEWS —---------------------------------------------------------*/

add_action('init', 'myCustomInitReviews');

function myCustomInitReviews()
{
    $labels = array(
        'name' => 'Отзывы', // Основное название типа записи
        'singular_name' => 'Отзывы', // отдельное название записи типа Book
        'add_new' => 'Добавить отзыв',
        'add_new_item' => 'Добавить новый отзыв',
        'edit_item' => 'Редактировать отзыв',
        'new_item' => 'Новый отзыв',
        'view_item' => 'Посмотреть отзыв',
        'search_items' => 'Найти отзыв',
        'not_found' => 'Отзывов не найдено',
        'not_found_in_trash' => 'В корзине отзывов не найдено',
        'parent_item_colon' => '',
        'menu_name' => 'Отзывы'

    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'editor','thumbnail')
    );
    register_post_type('reviews', $args);
}

function reviewShortcode()
{
    $args = array(
        'post_type' => 'reviews',
        'post_status' => 'publish',
        'posts_per_page' => -1);

    $my_query = null;
    $my_query = new WP_Query($args);

    $parser = new Parser();
    $parser->render(TM_DIR . '/view/reviews.php', ['my_query' => $my_query]);
}

add_shortcode('reviews', 'reviewShortcode');

/*---------------------------------------------— END REVIEWS —------------------------------------------------------*/

/*---------------------------------------------— PRODUCTION —------------------------------------------------------*/

add_action('save_post', 'myExtraFieldsUpdate', 10, 1);

/* Сохраняем данные, при сохранении поста */
function myExtraFieldsUpdate($post_id)
{
    if (!isset($_POST['extra'])) return false;
    foreach ($_POST['extra'] as $key => $value) {
        if (empty($value)) {
            delete_post_meta($post_id, $key); // удаляем поле если значение пустое
            continue;
        }

        update_post_meta($post_id, $key, $value); // add_post_meta() работает автоматически
    }
    return $post_id;
}

add_action('init', 'myCustomInitProducts');

function myCustomInitProducts()
{
    $labels = array(
        'name' => 'Товары', // Основное название типа записи
        'singular_name' => 'Товары', // отдельное название записи типа Book
        'add_new' => 'Добавить товар',
        'add_new_item' => 'Добавить новый товар',
        'edit_item' => 'Редактировать товар',
        'new_item' => 'Новый товар',
        'view_item' => 'Посмотреть товар',
        'search_items' => 'Найти товар',
        'not_found' => 'Товаров не найдено',
        'not_found_in_trash' => 'В корзине товаров не найдено',
        'parent_item_colon' => '',
        'menu_name' => 'Товары'

    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'editor','thumbnail')
    );
    register_post_type('product', $args);
}

function productsShortcode()
{

    $args = array(
        'post_type' => 'product',
        'post_status' => 'publish',
        'posts_per_page' => -1);

    $my_query = null;
    $my_query = new WP_Query($args);

    $parser = new Parser();
    $parser->render(TM_DIR . '/view/products.php', ['my_query' => $my_query]);
}

add_shortcode('products', 'productsShortcode');

function extraFieldsProductsSubtitle($post)
{
    ?>
    <p>
        <span>Подзаголовок: </span>
        <input type="text" name='extra[subtitle]' value="<?php echo get_post_meta($post->ID, "subtitle", 1); ?>">
    </p>
    <?php
}

function extraFieldsProductsPrice($post)
{
    ?>
    <p>
        <span>Цена: </span>
        <input type="text" name='extra[price]' value="<?php echo get_post_meta($post->ID, "price", 1); ?>">
    </p>
    <?php
}

function myExtraFieldsProducts()
{
    add_meta_box('extra_subtitle', 'Подзаголовок', 'extraFieldsProductsSubtitle', 'product', 'normal', 'high');
    add_meta_box('extra_price', 'Цена', 'extraFieldsProductsPrice', 'product', 'normal', 'high');
}

add_action('add_meta_boxes', 'myExtraFieldsProducts', 1);

/*---------------------------------------------— END PRODUCTION —------------------------------------------------------*/
