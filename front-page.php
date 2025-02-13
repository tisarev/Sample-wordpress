<?php
/*
Template Name: Главная страница
*/
?>
<?php get_header(); ?>
<main>Главная страница
    <hr>
    <article>
        <?php get_template_part( 'template-parts/content-list', get_post_type() ); ?>
    </article>
</main>
<?php get_footer(); ?>