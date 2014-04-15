<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link href='http://fonts.googleapis.com/css?family=PT+Sans|Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <script type='text/javascript' src='wp-content/themes/twentythirteen/js/jquery-2.1.0.js'></script>
	<script type='text/javascript' src='wp-content/themes/twentythirteen/js/carousel_2008.js'></script>
	<script type='text/javascript' src='wp-content/themes/twentythirteen/js/carousel_2008_conf.js'></script>
	<script type="text/javascript">
	
	$(document).ready(function() {
		(function ($) {
			var original = [];
			$('.new_content_front').each(function (i) {
				original.push($(this).css('margin-top'));
			});
			$('.new_content_back').hover(function (e) {
				$(this).find('.new_content_front').stop().animate(
					{"margin-top" : (
						$(this).parent().outerHeight()
					)},
					250
				);
			}, function (e){
				$('.new_content_front').stop().animate(
					{"margin-top": '170px'},
					250
				);
			});
		}(jQuery));

		(function ($) {
			var original = [];
			$('.new_notice_front').each(function (i) {
				original.push($(this).css('margin-top'));
			});
			$('.new_notice_back').hover(function (e) {
				$(this).find('.new_notice_front').stop().animate(
					{"margin-top" : (
						$(this).parent().outerHeight()
					)},
					250
				);
			}, function (e){
				$('.new_notice_front').stop().animate(
					{"margin-top": '170px'},
					250
				);
			});
		}(jQuery));


	});
	
	
	</script>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	<div id="page" class="hfeed site">
		<header id="masthead" class="site-header" role="banner">
<!--
			<a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?> "rel="home">
				<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			</a>
-->

			<img id="logo-citt" src="wp-content/themes/twentythirteen/images/logocitt.jpg"/>
			<img id="logo-clab" src="wp-content/themes/twentythirteen/images/logo-clab.png" />
			<div id="navbar" class="navbar">
				<nav id="site-navigation" class="navigation main-navigation" role="navigation">
					<h3 class="menu-toggle"><?php _e( 'Menu', 'twentythirteen' ); ?></h3>
					<a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentythirteen' ); ?>"><?php _e( 'Skip to content', 'twentythirteen' ); ?></a>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
					
				</nav><!-- #site-navigation -->
			</div>
		</header><!-- #masthead -->

		<div id="main" class="site-main">