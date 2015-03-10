<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package pestControl
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php if( is_front_page() ) { ?>
	<img id="ladyBugFly" src="<?php echo bloginfo('template_url'); ?>/images/ladybug.gif" />
<?php } ?>

<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'pestcontrol' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<a id="logo" href="<?php echo bloginfo('url'); ?>" rel="home"><img src="<?php the_field('logo','option'); ?>" /></a>
			<div id="topCTA">
				<h2><?php the_field('header_right_cta','option'); ?></h2>
				<a class="button red" href="tel:<?php the_field('phone','option'); ?>"><?php the_field('phone','option'); ?></a>
			</div>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e( 'Primary Menu', 'pestcontrol' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
