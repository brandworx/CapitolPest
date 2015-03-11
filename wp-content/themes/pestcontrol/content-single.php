<?php
/**
 * @package pestControl
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<?php get_template_part('content','head'); ?>

	<div id="contentWrap">
		<section id="contentInner">
			<div class="entry-content">
				<span id="postMeta">Posted by <?php the_author(); ?> on <?php the_date(); ?></span>
				<?php the_content(); ?>
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

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		</section>
		<?php get_sidebar(); ?>
	</div>
</article><!-- #post-## -->
