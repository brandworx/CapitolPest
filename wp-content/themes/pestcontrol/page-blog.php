<?php
/**
 * Template Name: Blog
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package pestControl
 */

get_header(); ?>

	<div id="mainWrap">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
			<?php get_template_part('content','head'); ?>

			<div id="contentWrap">
				<section id="contentInner">
					<div class="entry-content">
				
					<?php 
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

					query_posts( array( 'post_type' => 'post', 'posts_per_page' => 4, 'paged' => $paged ) );

					if(have_posts()) : ?> 

						<?php while(have_posts()) : the_post(); ?>

							<div class="entry-sum">
								<?php the_post_thumbnail('thumbnail', array('class'=>'alignleft')); ?>
								<h3><?php the_title(); ?></h3>
								<?php the_excerpt(); ?>
								<a class="button blue" href="<?php the_permalink(); ?>">Read More</a>
							</div>

						<?php endwhile; ?>
					
						<div id="posts-nav">
							<span class="alignright"><?php next_posts_link(); ?></span>
							<span class="alignleft"><?php previous_posts_link(); ?></span>
						</div>
						<div class="clearfix"></div>

					<?php endif; ?>

					<?php wp_reset_query(); ?>

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
