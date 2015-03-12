<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package pestControl
 */

get_header(); ?>

	<div id="mainWrap">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
			<?php get_template_part('content','headcat'); ?>

			<div id="contentWrap">
				<section id="contentInner">
					<div class="entry-content">
				
					<?php if ( have_posts() ) : ?>

						<header class="page-header">
							<?php
								the_archive_description( '<div class="taxonomy-description">', '</div>' );
							?>
						</header><!-- .page-header -->

						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>

							<div class="entry-sum">
								<?php the_post_thumbnail('thumbnail', array('class'=>'alignleft')); ?>
								<h3><?php the_title(); ?></h3>
								<?php the_excerpt(); ?>
								<a class="button blue" href="<?php the_permalink(); ?>">Read More</a>
							</div>

						<?php endwhile; ?>

						<?php the_posts_navigation(); ?>

					<?php else : ?>

						<?php get_template_part( 'content', 'none' ); ?>

					<?php endif; ?>

					</div><!-- .entry-content -->

					<footer class="entry-footer">
						<?php edit_post_link( __( 'Edit', 'pestcontrol' ), '<span class="edit-link">', '</span>' ); ?>
					</footer><!-- .entry-footer -->

				</section>
				<?php get_sidebar(); ?>
			</div>
		</article><!-- #post-## -->
	</div>

<?php get_footer(); ?>
