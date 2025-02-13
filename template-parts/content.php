<?php the_title() ?>
<?php if( has_excerpt() ){
	the_excerpt();
} else {} ?>
<?php 
if ( has_post_thumbnail()) { ?>
	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
		<?php the_post_thumbnail(); ?>
	</a>
<?php } 
?>
<?php the_content() ?>