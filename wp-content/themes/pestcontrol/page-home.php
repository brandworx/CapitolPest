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
			$form = get_field('box_right_form','option');
		?>
			<img id="slideBG" src="<?php echo $slideBG; ?>" />
			<div id="featuredLeft">
				<h1><?php the_field('box_left_title','option'); ?></h1>
				<span><?php the_field('box_left_text','option'); ?></span>
			</div>
			<div id="featuredRight">
				<h2><?php the_field('box_right_title','option'); ?></h2>
				<span><?php the_field('box_right_text','option'); ?></span>
				<?php echo do_shortcode($form); ?>
			</div>
		</section>
		<section id="services">
		<?php
			$serviceImg_1 = get_field('service_1_image','option');
			$serviceSize_1 = 'serviceThumb';
			$slideImg_1 = $serviceImg_1['sizes'][$serviceSize_1];

			$serviceImg_2 = get_field('service_2_image','option');
			$serviceSize_2 = 'serviceThumb';
			$slideImg_2 = $serviceImg_2['sizes'][$serviceSize_2];

			$serviceImg_3 = get_field('service_3_image','option');
			$serviceSize_3 = 'serviceThumb';
			$slideImg_3 = $serviceImg_3['sizes'][$serviceSize_3];

			$serviceImg_4 = get_field('service_4_image','option');
			$serviceSize_4 = 'serviceThumb';
			$slideImg_4 = $serviceImg_4['sizes'][$serviceSize_4];
		?>
			<h2><?php the_field('service_heading','option'); ?></h2>
			<div class="service-wrap">
				<img src="<?php echo $slideImg_1; ?>" />
				<h6><?php the_field('service_1_title','option'); ?></h6>
				<p><?php the_field('service_1_text','option'); ?></p>
				<a class="button blue" href="<?php the_field('service_1_cta_link','option'); ?>"><?php the_field('service_1_cta_text','option'); ?></a>
			</div>
			<div class="service-wrap">
				<img src="<?php echo $slideImg_2; ?>" />
				<h6><?php the_field('service_2_title','option'); ?></h6>
				<p><?php the_field('service_2_text','option'); ?></p>
				<a class="button blue" href="<?php the_field('service_2_cta_link','option'); ?>"><?php the_field('service_2_cta_text','option'); ?></a>
			</div>
			<div class="service-wrap">
				<img src="<?php echo $slideImg_3; ?>" />
				<h6><?php the_field('service_3_title','option'); ?></h6>
				<p><?php the_field('service_3_text','option'); ?></p>
				<a class="button blue" href="<?php the_field('service_3_cta_link','option'); ?>"><?php the_field('service_3_cta_text','option'); ?></a>
			</div>
			<div class="service-wrap">
				<img src="<?php echo $slideImg_4; ?>" />
				<h6><?php the_field('service_4_title','option'); ?></h6>
				<p><?php the_field('service_4_text','option'); ?></p>
				<a class="button blue" href="<?php the_field('service_4_cta_link','option'); ?>"><?php the_field('service_4_cta_text','option'); ?></a>
			</div>
		</section>
		<section id="testimonials">
			<?php if(have_rows('testimonials','option')) : ?>

				<div id="slider" class="flexslider">
			        <ul class="slides">

					<?php while(have_rows('testimonials','option')) : the_row(); 
						$image = get_sub_field('image','option');
						$name = get_sub_field('name','option');
						$title = get_sub_field('title','option');
						$text = get_sub_field('testimonial','option');
					?>
		                <li class="clearfix">
		                	<div class="slideText">
		                		<?php 
		                		if($image) { ?>
		                			<img class="alignleft" src="<?php echo $image['sizes']['thumbnail']; ?>" />
		                		<?php 
		                		}

		                		if($name && $title){ 
		                			echo '<h6>' . $name . ' - ' . $title . '</h6>';
	                			} elseif ($name && !$title) {
		                			echo '<h6>' . $name . '</h6>';
	                			} 

	                			echo $text;
	                			?>
		                	</div>
		                </li>

		    	<?php endwhile; ?>

		    		</ul>
			    </div>
			<?php endif; ?>
		</section>
	</div><!-- #mainWrap -->

<?php get_footer(); ?>
