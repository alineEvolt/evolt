<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package evolt
 */

get_header(); ?>

<section id="work">
	<header>
		<div class="wrapper">
		<?php
			$idWork = pll_get_post(6);
			$txtPage = new WP_Query( array( 'page_id' => $idWork ) );

			if ( $txtPage->have_posts() ) :
				while ( $txtPage->have_posts() ) : $txtPage->the_post();
					echo '<div class="flex-container-v">';
						echo '<div class="marginauto">'; ?>
							<?php the_content(); ?>
						<?php echo '</div>';
					echo '</div>';

				endwhile;
				wp_reset_postdata();
			endif; ?>
			</div>
		</header>

	<?php if ( have_posts() ) : ?>
		<ul class="work-list">
		<?php while ( have_posts() ) : the_post(); ?>

			<li>
				<a href="<?php the_permalink(); ?>">
					<div class="wrapper">
						<div class="flex-container">
							<div class="flex-item-center w50 tiny-w100">
								<h2><?php the_title(); ?></h2>
								<p class="accr"><?php the_field('accroche_cs'); ?></p>
							</div>
							<div class="flex-item-center w25 tiny-w100">
								<p class="project"><span><?php echo pll__('Project:'); ?></span><br />
								<?php the_field('type_cs'); ?></p>
							</div>
							<div class="flex-item-center w25 tiny-w100 txtright">
								<p class="link"><?php echo pll__('See case study'); ?></p>
							</div>
						</div>
					</div>
				</a>
			</li>

	<?php endwhile; ?>
		</ul>
<?php endif;
?>

	<footer>
		<div class="flex-item-center">
			<h2><?php echo pll__('Envie de découvrir notre univers graphique ?'); ?></h2>
			<p class="btn-b"><a href="https://dribbble.com/evolt" target="_blank"><?php echo pll__('Explorer'); ?></a></p>
		</div>
	</footer>
</section>


<?php
get_footer();
