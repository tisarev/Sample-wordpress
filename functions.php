<?php

// Подключаем стили и скрипты
add_action( 'wp_enqueue_scripts', function() { 
    
    // css
    wp_enqueue_style( 'reset', get_stylesheet_directory_uri() . '/assets/css/reset.css', array(), time() );
    wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/assets/css/style.css', array(), time() );

    // js
    wp_enqueue_script( 'script', get_stylesheet_directory_uri() . '/assets/js/script.js', array(), null, true );

} );

// Регистрируем возможности темы
add_action( 'after_setup_theme', function() {

    // добавляет ссылки на RSS фиды постов и комментариев
    add_theme_support( 'automatic-feed-links' );

    // создание метатега <title> через хук
    add_theme_support( 'title-tag' );

    // включаем меню в админке
	add_theme_support( 'menus' );

    // вывести миниатюру в файле
    add_theme_support( 'post-thumbnails' );

    // возможность загрузить картинку логотипа в админке
    add_theme_support(
		'custom-logo',
		array(
			'height'      => 60,
			'width'       => 60,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);

     // регистрация меню
    register_nav_menus( [
		'main_menu' => 'Главное меню',
		'main_menu_eng' => 'Main menu eng'
	] );

} );
