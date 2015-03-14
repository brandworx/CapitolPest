<?php
/**
 * The template used for displaying page title area in content-page.php
 *
 * @package pestControl
 */
?>

<header class="entry-header">
	<section id="featured">
		<?php
			$defImg = get_field('featured_background','option');
			$titleImg = get_field('title_bg');
			$titleSize = 'titleBG';
			$defImgBG = $defImg['sizes'][$titleSize];
			if($titleImg){
				$titleImgBG = $titleImg['sizes'][$titleSize];				
			}
		?>
		<?php if( !$titleImg ) {
			echo '<img id="titleBG" src="' . $defImgBG . '" />';
		} else {
			echo '<img id="titleBG" src="' . $titleImgBG . '" />';
		} ?>
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>			
	</section>
</header><!-- .entry-header -->