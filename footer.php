<footer id="footer">
    <div class="copyright">&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?></div>
    <?php 
    wp_nav_menu( [
        'theme_location'  => 'main_menu', //Идентификатор расположение меню в шаблоне.
        'container'       => 'nav',
        'container_class' => 'footer-menu',
        'menu_class'      => 'menu',
        'menu_id'         => '',
        'echo'            => true,
        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'depth'           => 0,
    ] );
    ?>
<footer>

<?php wp_footer(); ?>
</body>
</html>