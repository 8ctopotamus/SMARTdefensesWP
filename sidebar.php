<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package smart_defenses
 */

if (
	is_active_sidebar( 'footer-1' ) && is_active_sidebar( 'footer-2' ) &&
	is_active_sidebar( 'footer-3' )
) {
	$colCount = 4;
}
elseif (
	is_active_sidebar( 'footer-1' ) && is_active_sidebar( 'footer-2' ) ||
	is_active_sidebar( 'footer-1' ) && is_active_sidebar( 'footer-3' ) || is_active_sidebar( 'footer-2' ) && is_active_sidebar( 'footer-3' )
) {
	$colCount = 6;
} elseif (
	is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) ||  is_active_sidebar( 'footer-2' )
) {
	$colCount = 12;
} else {
	return;
} ?>

<div class="widget-wrapper">
	<div class="container">
		<div class="row">
			<aside id="secondary" class="widget-area col-sm-<?php echo $colCount; ?>" role="complementary">
				<?php dynamic_sidebar( 'footer-1' ); ?>
			</aside><!-- #secondary -->
			<aside id="secondary" class="widget-area col-sm-<?php echo $colCount; ?>" role="complementary">
				<?php dynamic_sidebar( 'footer-2' ); ?>
			</aside><!-- #secondary -->
			<aside id="secondary" class="widget-area col-sm-<?php echo $colCount; ?>" role="complementary">
				<?php dynamic_sidebar( 'footer-3' ); ?>
			</aside><!-- #secondary -->
		</div>
	</div>
</div>
