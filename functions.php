<?php
/**
* Загружаемые стили и скрипты
**/
function load_style_script()
{
	wp_enqueue_script('mobile', get_template_directory_uri() . '/js/mobile.js');
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('style', get_template_directory_uri() . '/css/mobile.css');
}

/**
* Загружаем стили и скрипты
**/
add_action('wp_enqueue_scripts', 'load_style_script');

?>