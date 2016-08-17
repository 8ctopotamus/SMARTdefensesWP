<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package smart_defenses
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
	
	<nav class="navbar navbar-inverse secondary-nav">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#secondary-nav-collapse" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
					
				<a class="site-branding" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<div class="navbar-brand-custom" rel="home">
						<img src="<?php bloginfo('template_directory'); ?>/images/smartdefenses-logo.svg" alt="SMART Defenses" />
					</div>
					
					<!-- flex item -->
					<div>
						<?php
						if ( is_front_page() ) : ?>
							<h1 class="site-title h2"><?php bloginfo( 'name' ); ?></h1>
						<?php else : ?>
							<p class="site-title h4"><?php bloginfo( 'name' ); ?></p>
						<?php
						endif;
					
						$description = get_bloginfo( 'description', 'display' );
						if ( $description || is_customize_preview() ) : ?>
							<p class="site-description <?php if (is_front_page()) { echo "sr-only"; } ?>"><?php echo $description; /* WPCS: xss ok. */ ?></p>
						<?php
						endif; ?>
					</div>
					<!-- /end div item -->
				</a>
				
				
			</div>
			<?php
				wp_nav_menu( array(
						'menu'              => 'secondary',
						'theme_location'    => 'secondary',
						'depth'             => 2,
						'container'         => 'div',
						'container_class'   => 'collapse navbar-collapse navbar-right',
						'container_id'      => 'secondary-nav-collapse',
						'menu_class'        => 'nav navbar-nav',
						'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
						'walker'            => new wp_bootstrap_navwalker())
				); ?>
		</div>
	</nav>
	
<div id="page" class="site">
	
	<header id="masthead" class="site-header" role="banner">
    <!--<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo"><img src="<?php bloginfo('template_directory'); ?>/images/smartdefenses-logo.svg" alt="SMART Defenses" /></a>-->
		
		<div data-spy="affix" data-offset-top="0">
			<?php wp_nav_menu( array(
				'theme_location' => 'primary',
			 	'menu_id' => 'primary-menu',
				'container' => 'nav'
			)); ?>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content main-wrapper">
