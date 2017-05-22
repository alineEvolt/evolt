<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package evolt
 */

?>
<section id="home">
	<header>
		<div class="wrapper">
			<div class="flex-container-v h100">
				<div class="flex-item-center left w45 tiny-w100 small-w100">
					<h2><?php the_field('slogan_home'); ?></h2>
					<p><?php the_field('text_intro_header'); ?></p>
				</div>
			</div>
		</div>
	</header>
	<div class="body">
		<div class="grid-2-small-1 has-gutter-xl first">
			<div class="bkg-part" data-width="92%"></div>
			<div class="one-half">
				<div class="mask">
				<?php
					if( have_rows('slider_home') ):

						echo '<div id="slide_home">';

					    while ( have_rows('slider_home') ) : the_row();

					        $image = get_sub_field('slider_photo_home');
					        $url = $image['url'];
									$alt = $image['alt'];
									$size = 'slider_home';
									$thumb = $image['sizes'][ $size ];
									$width = $image['sizes'][ $size . '-width' ];
									$height = $image['sizes'][ $size . '-height' ];

									echo '<div class="slide"><img src="' . $url . '" alt="' . $alt . '" width="' . $width . '" height="' . $height . '" data-rjs="3" /></div>';

					    endwhile;

					    echo '</div>';

					endif;
					?>
					</div>
			</div>

			<div class="one-third marginauto intro_home">

				<?php the_field('bloc_intro_bhome'); ?>

			</div>
		</div>
		<div class="compet-row">
			<div class="bkg-part" data-width="92%"></div>
			<div class="wrapper">

				<h2><?php echo pll__('Things we do well'); ?></h2>

				<?php
				if( have_rows('comp_home') ):
					echo '<div class="grid-3-small-1">';
				   while ( have_rows('comp_home') ) : the_row(); ?>

				   <div class="one-third compet-bloc">
					    <h3><?php the_sub_field('title_comp_home'); ?></h3>
					    <h4><?php the_sub_field('subtitle_comp_home'); ?></h4>
					    <p><?php the_sub_field('detail_comp_home_copie'); ?></p>

				    </div>

				  <?php endwhile;
				   echo '</div>';
				endif;

				?>
			<p class="link"><a href="<?php the_field('link_comp_home'); ?>"><?php echo pll__('View more'); ?></a></p>
			</div>
		</div>

		<div class="work-row">
			<div class="wrapper">
				<h2><?php echo pll__('Case studies'); ?></h2>
				<div class="grid-2 has-gutter">
				<?php
					$args = array(
						'post_type' => 'work',
						'posts_per_page' => 4,
						'orderby' => 'date',
						'order' => 'DESC'
					);
					$works = new WP_query( $args );
					if ( $works->have_posts() ):
						while ( $works->have_posts() ):	$works->the_post();
				?>
					<div class="one-half bloc-work post-<?php echo $post->ID; ?>">
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" style="background: url(<?php the_field('bkg_head_cs'); ?>) no-repeat 50% 100% / auto 100%;" data-rjs="3">
							<h3><?php the_title(); ?></h3>
							<p class="accr"><?php the_field('accroche_cs'); ?></p>
						</a>
					</div>

				<?php
						endwhile;
						wp_reset_postdata();
					endif;

				?>
				</div>
			</div>
		</div>

	</div>
</section>