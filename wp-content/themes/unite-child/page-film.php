<?php
/**
 * Template Name: Film Page Template
 *
 * This is the template that displays full width page without sidebar
 *
 * @package unite
 */

get_header(); ?>
	<div class="col-md-8">
		

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'film' ); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>	
	</div>

	<?php get_sidebar(); ?>	
	<?php get_footer(); ?>
