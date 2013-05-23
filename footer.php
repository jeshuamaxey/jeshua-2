<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package jeshua-2.0
 * @since jeshua-2.0 1.0
 */
?>

	</div><!-- #main -->
	<div class='divide footer-divide'><span class='divide-char'>&sect;</span></div>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'jeshua_2_0_credits' ); ?>
			<span class="footer-credits">Thanks: <a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'jeshua_2_0' ); ?>" rel="generator"><?php printf( __( '%s', 'jeshua_2_0' ), 'WordPress' ); ?></a></span>
			<!--<span class="sep"> | </span>-->
			<span class="footer-credits"><?php printf( __( 'Theme: %1$s', 'jeshua_2_0' ), '<a href="https://github.com/jeshuamaxey/jeshua-2.0.git" rel="designer">Jeshua 2.0</a>' ); ?></span>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	<div class='divide footer-divide'><span class='divide-char'>&sect;</span></div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>