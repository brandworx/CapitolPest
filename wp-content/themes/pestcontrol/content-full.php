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

				<?php if( have_rows('faqs') ): ?>
					<div id="accordion">
					    <?php while ( have_rows('faqs') ) : the_row(); ?>
					        
							<h4 class="question">Q: <?php the_sub_field('question'); ?></h4>
							<div class="answer">
								<h5 class="answer-title">Answer:</h5>
								<?php the_sub_field('answer'); ?>
							</div>

					    <?php endwhile; ?>
				    </div>
				<?php endif; ?>

				<?php if( have_rows('tabs') ): ?>
					<?php $count = 0; ?>
					<div id="tabsWrap">
						<div id="tabs">
							<ul>
							<?php while ( have_rows('tabs') ) : the_row(); ?>
									<li><a href="#tabs-<?php echo $count; ?>"><?php the_sub_field('service'); ?></a></li>
									<?php $count++; ?>
							<?php endwhile; ?>
							</ul>
					<?php endif; ?>
					<?php if( have_rows('tabs') ): ?>
						<?php $count2 = 0; ?>
							<?php while ( have_rows('tabs') ) : the_row(); ?>
									<div id="tabs-<?php echo $count2; ?>">
										<?php the_sub_field('service_text'); ?>
									</div>
									<?php $count2++; ?>
							<?php endwhile; ?>
						</div>
					</div>
				<?php endif; ?>

				<div class="clearfix"></div>

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
