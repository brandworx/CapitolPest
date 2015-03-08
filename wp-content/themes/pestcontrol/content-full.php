<?php
/**
 * The template used for displaying page content in page-full.php
 *
 * @package pestControl
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<?php get_template_part('content','head'); ?>

	<div id="contentWrap">
		<section id="contentInner" class="full">
			<div class="entry-content">
				<?php the_content(); ?>

				<?php 
					if( have_rows('faqs') ):
					    while ( have_rows('faqs') ) : the_row();
					        the_sub_field('');
					    endwhile;
					endif;
				?>

				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'pestcontrol' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->

			<footer class="entry-footer">
				<?php edit_post_link( __( 'Edit', 'pestcontrol' ), '<span class="edit-link">', '</span>' ); ?>
			</footer><!-- .entry-footer -->

		</section>
	</div>
</article><!-- #post-## -->
