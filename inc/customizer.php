<?php
/**
 * evolt Theme Customizer
 *
 * @package evolt
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function evolt_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'evolt_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function evolt_customize_preview_js() {
	wp_enqueue_script( 'evolt_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'evolt_customize_preview_js' );


/*
* Ajout d'un bouton dans wysiwyg
*/
add_filter( 'mce_buttons_2', 'fb_mce_editor_buttons' );
function fb_mce_editor_buttons( $buttons ) {

    array_unshift( $buttons, 'styleselect' );
    return $buttons;
}

/*
* Ajout de styles et classes dans wysiwyg
*/
add_filter( 'tiny_mce_before_init', 'fb_mce_before_init' );

function fb_mce_before_init( $settings ) {

  $style_formats = array(
    array(
      'title' => 'Big text (gris)',
      'selector' => 'p',
      'classes' => 'big-text',
      'styles' => array(
        'font-size' => '22px',
        'font-weight' => '300',
        'color' => 'rgba(0,0,0,0.6)'
      )
    ),
    array(
      'title' => 'Big text (noir)',
      'selector' => 'p',
      'classes' => 'big-text-noir',
      'styles' => array(
        'font-size' => '20px',
        'font-weight' => '500',
        'color' => '#05060F',
        'font-family' => '"Gotham SSm A", "Gotham SSm B"'
      )
    ),
    array(
      'title' => 'Small Titre : h2 (en cap.)',
      'selector' => 'h2',
      'classes' => 'small-cap',
      'styles' => array(
        'font-size' => '13px',
        'font-weight' => '500',
        'text-transform' => 'uppercase',
        'font-family' => '"Gotham SSm A", "Gotham SSm B"'
      )
    ),
    array(
      'title' => 'Titre : h1 (Big like homepage)',
      'selector' => 'h1',
      'classes' => 'h1-home',
      'styles' => array(
        'font-size' => '80px'
      )
    ),
    array(
      'title' => 'Text intro type h2 (40px)',
      'selector' => 'p',
      'classes' => 'like-h2',
      'styles' => array(
        'font-size' => '40px',
        'font-weight' => '500',
        'font-family' => '"Gotham SSm A", "Gotham SSm B"'
      )
    ),
    array(
      'title' => 'Lien (Bleu / Cap)',
      'selector' => 'p',
      'classes' => 'link',
      'styles' => array(
        'font-size' => '14px',
        'font-weight' => '500',
        'color' => '#003EFF',
        'text-transform' => 'uppercase',
        'font-family' => '"Gotham SSm A", "Gotham SSm B"'
      )
    ),
    array(
      'title' => 'Effet parallax',
      'block' => 'div',
      'classes' => 'parallax',
      'wrapper' => true
    )
  );

  $settings['style_formats'] = json_encode( $style_formats );

  return $settings;

}

//Tradutions de chaînes [Polylang]
pll_register_string('header', 'Revenir à la page d\'accueil');

pll_register_string('chat', 'Write a message...');
pll_register_string('chat', 'Send');

pll_register_string('home', 'Things we do well');
pll_register_string('home', 'View more');
pll_register_string('home', 'Case studies');
pll_register_string('home', 'Our work');

pll_register_string('footer', 'Social');
pll_register_string('footer', 'Contact');
pll_register_string('footer', 'Legal');
pll_register_string('footer', 'Contacter évolt');
pll_register_string('footer', 'Get in touch');

pll_register_string('contact', 'Location');
pll_register_string('contact', 'Email');
pll_register_string('contact', 'Follow us');

pll_register_string('Work', 'Project:');
pll_register_string('Work', 'See case study');
pll_register_string('Work', 'Next case study');
pll_register_string('Work', 'Envie de découvrir notre univers graphique ?');
pll_register_string('Work', 'Explorer');



//AJAX
/*add_action( 'wp_ajax_mon_action', 'mon_action' );
add_action( 'wp_ajax_nopriv_mon_action', 'mon_action' );

function mon_action() {

  $param = $_POST['param'];

  echo $param;

  die();
}*/

