<section>
<?php
$my_posts = get_posts( array(
	'numberposts' => 5,
) );

global $post;

foreach( $my_posts as $post ){
	setup_postdata( $post );?>
    <?php the_time('j F Y'); ?><br>
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br>

<?php }

wp_reset_postdata(); // сброс
?>
</section>