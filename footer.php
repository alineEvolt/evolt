<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package evolt
 */

?>

	</main><!-- END MAIN -->
	<?php if( is_singular('work') ) : ?>

	<?php else : ?>
		<footer id="footer">
		<div class="wrapper">
			<div class="grid">

				<div>
					<div class="logo"><a href="#top"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo-white.svg" alt="évolt" width="60" height="24" /></a></div>
					<p class="copyright">&copy; <?php echo date('Y'); ?> évolt All rights reserved</p>
				</div>

				<div class="txtright">
					<p class="contact"><a href="mailto:<?php the_field('contact_option', 'option'); ?>" target="_blank" title="Contacter évolt"><?php the_field('contact_option', 'option'); ?></a></p>
					<?php
					if( have_rows('social_option', 'option') ):
						echo '<ul class="social">';
						while ( have_rows('social_option', 'option') ) : the_row();
					?>
						<li><a href="<?php the_sub_field('url_soc_option', 'option'); ?>" title="Suivez-nous sur <?php the_sub_field('nom_soc_option', 'option'); ?>" target="_blank"><img src="<?php the_sub_field('picto_soc_option', 'option'); ?>" alt="<?php the_sub_field('nom_soc_option', 'option'); ?>" /></a></li>

					<?php
						endwhile;
						echo '</ul>';
					endif; ?>
					</ul>
				</div>

			</div>
	</footer>

	<?php	endif; ?>

</div><!--END PAGE -->
<?php wp_footer(); ?>

</body>
</html>
