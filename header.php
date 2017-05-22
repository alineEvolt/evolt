<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package evolt
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">


	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png" />

	<link rel="stylesheet" type="text/css" href="https://cloud.typography.com/6527176/6457772/css/fonts.css" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
    e.src='//www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-96863055-1','auto');ga('send','pageview');
</script>
<?php
		while ( have_posts() ) : the_post();
			if( have_rows('ajout_sous_sec_pa') ):
		  	while ( have_rows('ajout_sous_sec_pa') ) : the_row();
		  		$secIntro = get_sub_field('section_intro_pa');
		  		$navColor = get_sub_field('couleur_nav_pr_pa');
					if( $secIntro == '1' ) {
						if( $navColor ) {
							$colorNav = $navColor;
						} else {
							$colorNav = 'dark';
						}
					}
				endwhile;
			endif;
		/*	$navColor2 = get_field('couleur_nav_pr_pa_ho');
			if( $navColor2 ) {
				$colorNav = $navColor2;
			} else {
				$colorNav = 'dark';
			}*/

		endwhile;
		wp_reset_postdata();
	?>
<div id="page">
<?php if (is_front_page() ) {
	echo '<header id="masthead" class="color-white">';
} else {
	echo '<header id="masthead" class="color-' . $colorNav .'">';
} ?>
		<div class="wrapper">
			<div class="flex-container">
				<div class="w50 tiny-w100">
					<h1 class="logo"><a href="<?php echo get_bloginfo('url'); ?>" title="<?php echo pll__('Revenir à la page d\'accueil'); ?>"><img class="white" src="<?php echo get_template_directory_uri(); ?>/dist/images/logo-white.svg" alt="évolt" width="60" height="24" /><img class="black" src="<?php echo get_template_directory_uri(); ?>/dist/images/logo.svg" alt="évolt" width="60" height="24" /></a></h1>
				</div>

				<div id="mainnav" class="w50 txtright tiny-w100">
					<div class="burger fr">
			   		<input type="checkbox" id="menu" />
			    	<label class="label" for="menu"><span></span></label>
		    	</div>
		    	<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'navigation', 'container_id' => 'wrapper-nav' ) ); ?>
				</div>
			</div>
		</div>
	</header>
	<main id="main">

