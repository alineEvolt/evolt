<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package evolt
 */

get_header();

$idContact = pll_get_post(10);

?>


			<?php
			while ( have_posts() ) : the_post();

			if(is_page($idContact)) {
				get_template_part( 'template-parts/content', 'contact' );
			} else {
				get_template_part( 'template-parts/content', 'page' );
			}

			endwhile; // End of the loop.
			?>


<?php
get_footer();
