<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package jeshua-2.0
 * @since jeshua-2.0 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<script src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/themes/jeshua-2-0/js/jquery.js" type="text/javascript"></script>
<script src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/themes/jeshua-2-0/js/global.js" type="text/javascript"></script>
<!-- syntax highlighting -->
<link id="code-theme" current-theme=light other-theme=dark rel="stylesheet" href="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/themes/jeshua-2-0/js/highlightjs/styles/solarized_dark.css">
<script src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/themes/jeshua-2-0/js/highlightjs/highlight.pack.js"></script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="colour-toggle" class="colour-toggle"><img class="white-switch" src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/jeshua-2-0/images/switch-white.png" /><img class="black-switch" src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/jeshua-2-0/images/switch-black.png" /></div>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
		<hgroup>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</hgroup>

		<nav id="site-navigation" class="navigation-main" role="navigation">
			<h1 class="menu-toggle"><?php _e( 'Menu', 'jeshua_2_0' ); ?></h1>
			<div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'jeshua_2_0' ); ?>"><?php _e( 'Skip to content', 'jeshua_2_0' ); ?></a></div>

			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="main" class="site-main">