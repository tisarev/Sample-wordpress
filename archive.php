<?php get_header();?>
<main>
<h1>
    <!-- вывод название категории, тега, автора -->
    <?php 

    if(is_category() ){
        echo get_queried_object_id()->name;
    }
    if(is_tag() ){
        echo get_queried_object_id()->name;
    }
    if(is_author() ){
        echo get_the_author_meta( 'display_name' );
    }
    if(is_date() ){
        echo get_the_date( 'j F Y' );
    }

    ?>
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
</main>
<?php get_footer(); ?>