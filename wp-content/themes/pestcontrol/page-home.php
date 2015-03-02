<?php
/**
 * Template Name: Home Page
 *
 * @package pestControl
 */

get_header(); ?>

	<div id="mainWrap">
		<section id="featured">
		<?php
			$slideImg = get_field('featured_background','option');
			$slideSize = 'homeSlide';
			$slideBG = $slideImg['sizes'][$slideSize];
		?>
			<img id="slideBG" src="<?php echo $slideBG; ?>" />
			<div id="featuredLeft">
				<h1><?php the_field('box_left_title','option'); ?></h1>
				<span><?php the_field('box_left_text','option'); ?></span>
			</div>
			<div id="featuredLeft">
				<h2><?php the_field('box_right_title','option'); ?></h2>
				<span><?php the_field('box_right_text','option'); ?></span>
				<?php the_field('box_right_form','option'); ?>
			</div>
		</section>
	</div><!-- #mainWrap -->

<?php get_footer(); ?>
