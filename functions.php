<?php
/**
* Загружаемые стили и скрипты
**/
function load_style_script()
{
	wp_enqueue_script('mobile', get_template_directory_uri() . '/js/mobile.js');
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('stylemob', get_template_directory_uri() . '/css/mobile.css');
}

/**
* Загружаем стили и скрипты
**/
add_action('wp_enqueue_scripts', 'load_style_script');

/**
 * Меню
 */
register_nav_menus(array(
	'top'    => 'Верхнее меню',    //Название месторасположения меню в шаблоне
	'bottom' => 'Нижнее меню'      //Название другого месторасположения меню в шаблоне
));

/**
 * Чтобы можно было установить миниатюру ( изображение ) поста
 */
if (!function_exists('mytheme_setup')):
    function mytheme_setup(){
        add_theme_support('post-thumbnails');
        set_post_thumbnail_size(1200, 9999);
    }
endif;
add_action('after_setup_theme', 'mytheme_setup');


?>