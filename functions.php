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


//Шаблон для создания нового типа записи
add_action( 'init', 'register_post_types' );

function register_post_types(){

	register_post_type( 'list_news', [
		'label'  => null,
		'labels' => [
			'name'               => 'Новости', // основное название для типа записи
			'singular_name'      => 'Новость', // название для одной записи этого типа
			'add_new'            => 'Добавить новость', // для добавления новой записи
			'add_new_item'       => 'Добавление новости', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование новости', // для редактирования типа записи
			'new_item'           => 'Новое новость', // текст новой записи
			'view_item'          => 'Смотреть новость', // для просмотра записи этого типа.
			'search_items'       => 'Искать новость', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Новости', // название меню
		],
		'description'            => '',
		'public'                 => true,
		// 'publicly_queryable'  => null, // зависит от public
		// 'exclude_from_search' => null, // зависит от public
		// 'show_ui'             => null, // зависит от public
		// 'show_in_nav_menus'   => null, // зависит от public
		'show_in_menu'           => null, // показывать ли в меню админки
		// 'show_in_admin_bar'   => null, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-format-aside',
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor','author','thumbnail','excerpt', 'custom-fields','comments' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );

}
