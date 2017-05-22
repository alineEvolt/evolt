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

	<?php else :
		$contact = pll_get_post(10);
		if(is_page($contact) ):
			$bkgFoot = get_field('footer_bkg_color');
			$colorFoot = get_field('footer_text_color');
			echo '<footer id="footer" class="white">';
		else:
			$bkgFoot = get_field('footer_bkg_color');
			$colorFoot = get_field('footer_text_color');
			echo '<footer id="footer" class="text-' . $colorFoot . '" style="background: ' . $bkgFoot .';">';
		endif;

	 ?>
			<div class="wrapper">
				<div class="flex-container">
					<div class="w80 center tiny-w100 small-w75">
						<div class="flex-container">

							<div class="w70 tiny-w100 small-w100 txt-left">
								<?php the_field('text_left_foot', pll_current_language('slug')); ?>
								<p class="link"><a href="mailto:<?php the_field('email_foot', pll_current_language('slug')); ?>" title="<?php echo pll__('Contacter évolt'); ?>" target="_blank"><?php echo pll__('Get in touch'); ?></a></p>
							</div>

							<div class="w30 tiny-w100 small-w100 txt-right">
								<div class="flex-container">

									<div class="right">
										<h3><?php echo pll__('Social'); ?></h3>
										<?php
											if( have_rows('social_option', 'option') ):
												echo '<ul class="social">';
												while ( have_rows('social_option', pll_current_language('slug')) ) : the_row();
											?>
												<li><a href="<?php the_sub_field('url_soc_option', 'option'); ?>" title="Suivez-nous sur <?php the_sub_field('nom_soc_option', pll_current_language('slug')); ?>" target="_blank"><?php the_sub_field('nom_soc_option', pll_current_language('slug')); ?></a></li>
											<?php
												endwhile;
												echo '</ul>';
											endif; ?>
									</div>
									<div class="right">
										<h3><?php echo pll__('Contact'); ?></h3>
										<p><a href="mailto:<?php the_field('email_foot', pll_current_language('slug')); ?>" title="<?php echo pll__('Contacter évolt'); ?>" target="_blank"><?php the_field('email_foot', pll_current_language('slug')); ?></a></p>
										<p><?php the_field('tel_foot', pll_current_language('slug')); ?></p>
										<h3><?php echo pll__('Legal'); ?></h3>
										<?php
										$mention_footer = get_field('mentions_foot', pll_current_language('slug'));
											if( $mention_footer ):
												$post = $mention_footer;
												setup_postdata( $post );
										?>
									    	<p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
									    <?php
									    wp_reset_postdata();
									   	endif;
									  ?>
									  <p>&copy; Évolt <?php echo date('Y'); ?></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>

	<?php	endif; ?>

<div id="overlay"></div>
</div><!--END PAGE -->
<?php wp_footer(); ?>

</body>
</html>
