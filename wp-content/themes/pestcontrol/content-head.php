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
			$defTitleImg = get_field('featured_background','option');
			$titleImg = get_field('title_bg');
			$titleSize = 'titleBG';
			$titleBG = $titleImg['sizes'][$titleSize];
			$defBG = $defTitleImg['sizes'][$titleSize];
		?>
		<?php if( $titleImg ) { ?>
			<img id="titleBG" src="<?php echo $titleBG; ?>" />
		<?php } else { ?>
			<img id="titleBG" src="<?php echo $defBG; ?>" />
		<?php } ?>
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>			
	</section>
</header><!-- .entry-header -->