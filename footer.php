<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package smart_defenses
 */

?>

		<footer id="colophon" class="site-footer text-center" role="contentinfo">
				<div class="site-info">
					<?php printf( esc_html__( 'Theme by %1$s.', 'smart_defenses' ), '<a href="https://icshelpsyou.com" rel="designer">ICS Helps You</a>' ); ?>
				</div><!-- .site-info -->
		</footer><!-- #colophon -->

	</div><!-- #content -->


</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
