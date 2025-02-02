<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
<div class="logo">
    <?php 
        if( has_custom_logo() ){
            echo get_custom_logo();
        }
    ?>
    <a href="<?php echo site_url() ?>">
        <div class="logo-text">
            <div class="logo-text__name"><?php bloginfo( 'name' ); ?></div>
            <div class="logo-text__desc"><?php bloginfo( 'description' ); ?></div>
        </div>
    </a>
</div>
<?php 
    wp_nav_menu( [
        'theme_location'  => 'main_menu', //Идентификатор расположение меню в шаблоне.
        'container'       => 'nav',
        'container_class' => 'header-menu',
        'menu_class'      => 'menu',
        'menu_id'         => '',
        'echo'            => true,
        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'depth'           => 0,
    ] );
?>  