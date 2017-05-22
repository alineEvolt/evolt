<?php
/**
 * evolt functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package evolt
 */

if ( ! function_exists( 'evolt_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function evolt_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on evolt, use a find and replace
	 * to change 'evolt' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'evolt', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
	add_image_size('slider_ipad', 900, 586);
	add_image_size('slider_home', 750, 845);
	add_image_size('slider_team', 390, 400);

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'evolt' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'evolt_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet. *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function evolt_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'evolt_content_width', 1200 );
}
add_action( 'after_setup_theme', 'evolt_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function evolt_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'evolt' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'evolt' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'evolt_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function evolt_scripts() {

	wp_enqueue_style( 'evolt-style', get_stylesheet_uri() );

	/* à remettre pour le build (prod)*/
	//wp_enqueue_style( 'evolt-styles', get_template_directory_uri() . '/dist/css/styles.min.css' );

  //A virer pour le build
  wp_enqueue_style( 'evolt-flickity', get_template_directory_uri() . '/bower_components/flickity/dist/flickity.css' );
  wp_enqueue_style( 'evolt-jsueryui', get_template_directory_uri() . '/app/css/jquery-ui.css' );
  wp_enqueue_style( 'evolt-swiper', get_template_directory_uri() . '/bower_components/swiper/dist/css/swiper.css' );
  wp_enqueue_style( 'evolt-styles', get_template_directory_uri() . '/app/css/knacss.css' );
  // end a virer pour le build

  wp_enqueue_script( 'evolt-modernirz', get_template_directory_uri() . '/dist/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js', array("jquery"), '20170522', false );

	wp_enqueue_script( 'evolt-functions', get_template_directory_uri() . '/dist/js/main.min.js', array("jquery"), '20170522', true );
	wp_localize_script('evolt-functions', 'ajaxurl', admin_url( 'admin-ajax.php' ) );

	wp_register_script( 'evolt-chatjs', get_template_directory_uri() . '/dist/chat/chat.min.js', array("jquery"), '20170522', true );
	wp_localize_script( 'evolt-chatjs', 'chatux_params', array( 'chat_ajax_url' => admin_url( 'admin-ajax.php' ) ) );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if( !is_front_page() ){
	  wp_enqueue_script( 'evolt-chatjs' );
	}

}
add_action( 'wp_enqueue_scripts', 'evolt_scripts' );


/**
 * add custom posts type
 */

require get_template_directory() . '/inc/types.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
