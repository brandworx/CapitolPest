<?php
/**
 * Template Name: Full Width Page
 *
 * @package pestControl
 */

get_header(); ?>

	<div id="mainWrap">
		
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'full' ); ?>

			<?php endwhile; // end of the loop. ?>
	</div>

<?php get_footer(); ?>
