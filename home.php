<?php
/*
Template Name: Блог
*/
?>
<?php get_header(); ?>
<h1>
    <?php the_title() ?>
</h1>
<div class="list">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="item">
            <?php the_time('j F Y'); ?><br>
            <?php 
            if ( has_post_thumbnail()) { ?>
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
                    <?php the_post_thumbnail(); ?>
                </a>
            <?php 
                } else {
                    echo '<img src="'.get_template_directory_uri().'/images/plug.jpg" />';
                }
            ?><br>
            <?php the_title() ?><br>
            <?php if( has_excerpt() ){
                the_excerpt();
            } else {} ?><br>
            <?php the_author(); ?><br>
            <a href="<?php the_permalink(); ?>">Подробнее</a>
        </div>
        <?php endwhile; else: ?>
        Записей нет.
    <?php endif; ?>
</div>
<?php get_footer(); ?>