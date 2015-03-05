<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package pestControl
 */
?>

	</div><!-- #content -->

	<div id="footer">
		<div class="foot-widget">
			<h6><?php the_field('mission_statement_title','option'); ?></h6>
			<p><?php the_field('mission_statement','option'); ?></p>
		</div>
		<div class="foot-widget">
			<h6><?php the_field('footer_contact_title','option'); ?></h6>
			<div itemscope itemtype="http://schema.org/LocalBusiness">
				<a id="phone" href="tel:<?php the_field('phone','option'); ?>"><span itemprop="telephone"><?php the_field('phone','option'); ?></span></a>
				<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
					<span id="address" itemprop="streetAddress"><?php the_field('street_address','option'); ?></span><br>
					<?php 
					$street2 = get_field('street_address_2','option');
					if($street2) { ?>
					<span id="address" itemprop="streetAddress"><?php the_field('street_address_2','option'); ?></span><br>	
					<?php } ?>
					<span itemprop="addressLocality"><?php the_field('city','option'); ?></span>, <span itemprop="addressRegion"><?php the_field('state','option'); ?></span> <span itemprop="postalCode"><?php the_field('zip','option'); ?></span>
				</div>
			</div>
			<a id="email" href="mailto:<?php the_field('email','option'); ?>"><?php the_field('email','option'); ?></a>
		</div>
	</div>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'pestcontrol' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'pestcontrol' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'pestcontrol' ), 'pestControl', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
