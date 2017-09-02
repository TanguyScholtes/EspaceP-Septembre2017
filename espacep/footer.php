<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage espacep
 * @since Espace P 0.0.1
 */
?>

	</div><!-- .site-content -->

	<div class="footer-wrapper">
		<footer id="colophon" class="footer" role="contentinfo">
			<div class="site-info">
				<div class="footer-menu">
					<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
				</div>
				<p class="legal"><a href="<?php echo esc_url( __( 'http://tanguyscholtes.be/', 'espacep' ) ); ?>"><?php printf( __( 'Powered by %s', 'espacep' ), 'Tanguy SCHOLTES' ); ?></a></p>
			</div><!-- .site-info -->
			<div class="social">
				<?php echo do_shortcode('[custom-facebook-feed]'); ?>
			</div>
		</footer><!-- .site-footer -->
	</div>
</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
