<?php
/*
Template Name: Базовый шаблон
*/
?>
<?php get_header(); the_post();  have_posts(); ?>
<main>
    <?php the_title() ?>
    <?php the_content() ?>
</main>
<?php get_footer(); ?>