<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package evolt
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function evolt_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'evolt_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function evolt_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'evolt_pingback_header' );

//Ajout des options du thème [ACF]
if( function_exists('acf_add_options_page') ) {

	// Main Theme Settings Page
  $parent = acf_add_options_page( array(
    'page_title' => 'Theme General Settings',
    'menu_title' => 'Theme Settings',
    'redirect'   => 'Theme Settings',
  ) );

  $languages = array( 'fr', 'en' );
  foreach ( $languages as $lang ) {
    acf_add_options_sub_page( array(
      'page_title' => 'Options (' . strtoupper( $lang ) . ')',
      'menu_title' => __('Options (' . strtoupper( $lang ) . ')', 'text-domain'),
      'menu_slug'  => "options-${lang}",
      'post_id'    => $lang,
      'parent'     => $parent['menu_slug']
    ) );
  }
}

// REMOVE WP EMOJI
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
