<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package evolt
 */
?>

<article id="post-<?php the_ID(); ?>" class="content-contact">
	<div class="bkg_part"></div>
	<div class="wrapper">
		<div class="flex-container">
			<div class="w80 center tiny-w100">
				<?php
					the_content();
					echo '<div class="visuel"><div class="mask"></div>';
					if ( has_post_thumbnail() ) :
						the_post_thumbnail();
					endif;
					echo '</div>';
				?>
				<div class="grid-3-small-2 info-contact">
					<div class="one-third">
						<h2><?php echo pll__('Location'); ?></h2>
						<p><?php the_field('adress_foot', pll_current_language('slug')); ?></p>
					</div>
					<div class="one-third">
						<h2><?php echo pll__('Email'); ?></h2>
						<p><a href="mailto:<?php the_field('email_foot', pll_current_language('slug')); ?>" title="<?php echo pll__('Contacter évolt'); ?>" target="_blank"><?php the_field('email_foot', pll_current_language('slug')); ?></a><br />
						<?php the_field('tel_foot', pll_current_language('slug')); ?></p>
					</div>
					<div class="one-third">
						<h2><?php echo pll__('Follow us'); ?></h2>
						<?php
						if( have_rows('social_option', pll_current_language('slug')) ):
							echo '<ul class="social">';
							while ( have_rows('social_option', pll_current_language('slug')) ) : the_row();
						?>
							<li><a href="<?php the_sub_field('url_soc_option', pll_current_language('slug')); ?>" title="Suivez-nous sur <?php the_sub_field('nom_soc_option', pll_current_language('slug')); ?>" target="_blank"><?php the_sub_field('nom_soc_option', pll_current_language('slug')); ?></a></li>
						<?php
							endwhile;
							echo '</ul>';
						endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="form-section">
		<div class="wrapper">
			<div class="flex-container">
				<div class="w80 center tiny-w100">
					<?php echo do_shortcode(get_field('contact_form_shortcode')); ?>
				</div>
			</div>
		</div>
	</div>
</article>


