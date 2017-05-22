<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package evolt
 */

get_header(); ?>

<div class="slider-404">
	<div class="inner-slider">
	  <div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/affiches.jpg" alt="Les films qu'on préfère !!!!" height="1071" width="1919" /></div>
	  <div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/affiches.jpg" alt="Les films qu'on préfère !!!!" height="1071" width="1919" /></div>
	  <div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/affiches.jpg" alt="Les films qu'on préfère !!!!" height="1071" width="1919" /></div>
	  <div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/affiches.jpg" alt="Les films qu'on préfère !!!!" height="1071" width="1919" /></div>
	  <div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/affiches.jpg" alt="Les films qu'on préfère !!!!" height="1071" width="1919" /></div>
	  <div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/affiches.jpg" alt="Les films qu'on préfère !!!!" height="1071" width="1919" /></div>
  </div>
</div>
<div class="container-404">
	<div class="wrapper">
		<div class="flex-container">
			<div class="w100">
				<h1><?php echo pll__('Woops! Error 404'); ?></h1>
				<p><?php echo pll__('This page does not exist.'); ?></p>
				<p class="link"><a href="<?php echo get_bloginfo('url'); ?>"><?php echo pll__('Back to homepage'); ?></a></p>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();
