<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package evolt
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="header" style="background: url(<?php the_field('bkg_head_cs'); ?>) no-repeat 50% 100% / 100% auto;" data-rjs="3">
		<div class="wrapper">
			<div class="flex-container flex-container-v">
				<div class="w80 tiny-w100">
					<h1><?php the_title(); ?></h1>
					<p class="accr"><?php the_field('accroche_cs'); ?></p>
				</div>
			</div>
		</div>
	</header>

	<div class="body">
		<?php
		if( have_rows('challenge_cs') ):

			echo '<div class="approche wrapper">';
			echo '<div class="flex-container">';
			echo '<div class="w80 center tiny-w100 small-w100">';
			echo '<div class="flex-container has-gutter-xl">';
			while ( have_rows('challenge_cs') ) : the_row();
		?>
			<div class="w40 tiny-w100 <?php echo (++$j % 2 == 0) ? 'push' : ''; ?> small-w75">
				<?php the_sub_field('col_intro_cs'); ?>
			</div>
		<?php
			endwhile;
			echo '</div>';
			echo '</div>';
			echo '</div>';
			echo '</div>';
		endif;
		?>
		<div class="inner">
		<?php
		if( have_rows('ajout_sous_sec_cs') ):
    	while ( have_rows('ajout_sous_sec_cs') ) : the_row();


        $bkgType2 = get_sub_field('type_bkg_v2_cs');

        if( $bkgType2 === 'bkg_uni_full' || $bkgType2 === 'bkg_uni_part' ) :

        	$bkgFirst2 = get_sub_field('couleur_sous_sec_v2_cs');
        	$bkgColor = 'background-color: ' . $bkgFirst2 . ';';

        elseif( $bkgType2 === 'bkg_gradient_full' || $bkgType2 === 'bkg_gradient_part' ) :

        	$bkgFirst2 = get_sub_field('couleur_1_sous_sec_v2_cs');
        	$bkgSecond2 = get_sub_field('couleur_2_sous_sec_v2_cs');
        	$bkgColor = 'background-color: -moz-linear-gradient(top, ' . $bkgFirst2 . ' 0%, ' . $bkgSecond2 . ' 100%); background: -webkit-linear-gradient(top, ' . $bkgFirst2 . ' 0%, ' . $bkgSecond2 . ' 100%); background: linear-gradient(to bottom, ' . $bkgFirst2 . ' 0%, ' . $bkgSecond2 . ' 100%);';

        endif;

        $addImg = get_sub_field('add_img_sous_sec_v2_cs');
        if( $addImg ) {
        	$imgField = get_sub_field('ajout_img_fond_sous_sec_v2_cs');
        	$imgPosTop = get_sub_field('pos_top_img_sec_v2_cs');
        	$imgPosleft = get_sub_field('pos_left_img_sec_v2_cs');
        	$imgSize = get_sub_field('size_bkg_sous_sec_v2_cs');

        	$bkgImg = 'background-image: url(' . $imgField . ');';
        	$bkgPos = 'background-position: ' . $imgPosleft . '% ' . $imgPosTop . '%;';
        	$bkgSize = 'background-size: ' . $imgSize . ';';
        }

        if( $bkgType2 === 'bkg_uni_part' || $bkgType2 === 'bkg_gradient_part' ) {

        	$ancBloc = get_sub_field('point_anc_sous_sec_v2_cs');
        	$posTopBloc = get_sub_field('pos_top_sec_v2_cs');
        	$posLeftBloc = get_sub_field('pos_left_sec_v2_cs');
        	$posBloc = 'top: ' . $posTopBloc . '%; left: ' . $posLeftBloc . '%;';
        	$widthBkg = get_sub_field('larg_sous_sec_v2_cs');
        	$heightBkg = get_sub_field('haut_sous_sec_v2_cs');
        	$addImg = get_sub_field('add_img_sous_sec_v2_cs');
        	$noAnim = get_sub_field('no_anim_bkg_cs');
      	if( $noAnim == 1 ) {
      		$bkgAnim = 'no_anim';
      	}

        	if( $ancBloc === 'top_left' ) {
        		$posBloc = 'top: ' . $posTopBloc . '%; left: ' . $posLeftBloc . '%;';
        	}
        	elseif( $ancBloc === 'top_right' ) {
        		$posBloc = 'top: ' . $posTopBloc . '%; right: ' . $posLeftBloc . '%;';
        	}
        	elseif( $ancBloc === 'bottom_left' ) {
        		$posBloc = 'bottom: ' . $posTopBloc . '%; left: ' . $posLeftBloc . '%;';
        	}
        	elseif( $ancBloc === 'bottom_right' ) {
        		$posBloc = 'bottom: ' . $posTopBloc . '%; right: ' . $posLeftBloc . '%;';
        	}

        	if( $addImg ) {
        		echo '<div class="section"><div class="bkg_part ' . $bkgAnim . '" style="' . $bkgColor . ' ' . $posBloc . ' height: ' . $heightBkg . '%;' . $bkgImg . ' ' . $bkgPos . ' ' . $bkgSize . ' background-repeat: no-repeat;" data-width="' . $widthBkg . '%" data-rjs="3"></div>';
        	} else {
        		echo '<div class="section"><div class="bkg_part ' . $bkgAnim . '" style="' . $bkgColor . ' ' . $posBloc . ' height: ' . $heightBkg . '%;" data-width="' . $widthBkg . '%" data-rjs="3"></div>';
        	}

        } else {
        	$addImg = get_sub_field('add_img_sous_sec_v2_cs');
        	if( $addImg ) {
        		echo '<div class="section" style="' . $bkgColor . ' ' . $bkgImg . ' ' . $bkgPos . ' ' . $bkgSize . ' background-repeat: no-repeat;" data-rjs="3">';
      		} else {
      			echo '<div class="section" style="' . $bkgColor . '">';
      		}
        }

        if( have_rows('sous_sec_cs') ):
	    		while ( have_rows('sous_sec_cs') ) : the_row();

		        //end background section

			      if( get_row_layout() == 'bloc_text_cs' ):

			      	$nbrCol = get_sub_field('num_col_text_cs');
			      	$contentBloc = get_sub_field('text_cs');
			      	$contentBlocBis = get_sub_field('text_cs_bis');
			      	$imgBloc1 = get_sub_field('visuel_right_cs');
			      	$imgBloc2 = get_sub_field('visuel_left_cs'); ?>

			      	<div class="wrapper">
			      		<div class="flex-container posrel">
		      				<?php
		      						if( $nbrCol === 'one_col') :

		      						echo '<div class="w60 center tiny-w100 small-w75">';
		      						echo $contentBloc;
		      						echo '</div>';

		      					elseif( $nbrCol === 'two_col') :

		      						echo '<div class="w60 center tiny-w100 small-w75">';
		      						echo '<div class="grid-2-small-1 has-gutter-xl">';
		      						echo '<div>';
		      							echo $contentBloc;
		      						echo '</div>';
		      						echo '<div class="push">';
		      							echo $contentBlocBis;
		      						echo '</div>';
		      						echo '</div>';
		      						echo '</div>';

		      					elseif( $nbrCol === 'one_col_img') :

		      						echo '<div class="w80 center imgFull tiny-w100 small-w75 imganim">';
		      							echo '<img src="' . $imgBloc1 . '" alt="" data-rjs="3" />';
		      						echo '</div>';

										elseif( $nbrCol === 'two_col_img_left') :

		      						echo '<div class="w80 center tiny-w100 small-w75">';
		      						echo '<div class="flex-container">';
		      						echo '<div class="w50 tiny-w100 small-w100 imganim">';
		      							echo '<img src="' . $imgBloc2 . '" alt="" data-rjs="3" />';
		      						echo '</div>';
		      						echo '<div class="w40 pr10 marginauto tiny-w100 small-w100">';
		      							echo $contentBlocBis;
		      						echo '</div>';
		      						echo '</div>';
		      						echo '</div>';

		      					elseif( $nbrCol === 'two_col_img_right') :

		      						echo '<div class="w70 center tiny-w100 small-w75">';
		      						echo '<div class="flex-container">';
		      						echo '<div class="w40 pl10 marginauto tiny-w100 small-w100">';
		      							echo $contentBloc;
		      						echo '</div>';
		      						echo '<div class="w50 push tiny-w100 small-w100 imganim">';
		      							echo '<img src="' . $imgBloc1 . '" alt="" data-rjs="3" />';
		      						echo '</div>';
		      						echo '</div>';
		      						echo '</div>';

		      					endif;
		      				?>
			      		</div>
			      	</div>

		      	<?php endif;

			      if( get_row_layout() == 'slider_fs_cs' ):

			      	$sliderPos = get_sub_field('slider_fs_pos_cs');


			      	if( have_rows('visuels_sfs_cs') ): ?>
			      		<div class="wrapper_slider">
				      		<div class="carousel slider_full slider_<?php echo $sliderPos; ?>"" data-flickity='{ "freeScroll": true, "pageDots": false, "prevNextButtons": false, "setGallerySize": false, "imagesLoaded": true, "cellAlign": "<?php echo $sliderPos; ?>" }'>

		    					<?php while ( have_rows('visuels_sfs_cs') ) : the_row();

			    					$visuSfS = get_sub_field('visuel_sfs_cs');
			    					$urlSfS = $visuSfS['url'];
			    					$altSfS = $visuSfS['alt'];

			    					echo '<img src="' . $urlSfS . '" alt="' . $altSfS .'" data-rjs="3" />';

		    					endwhile;
		    					echo '</div>';
	    					echo '</div>';
    					endif;
    					$ajoutDescSlider = get_sub_field('ajout_text_desc_sfs_cs');

    					if( $ajoutDescSlider ) :

	    					$descSlider = get_sub_field('text_desc_sfs_cs');
	    					if( $descSlider ) : ?>

	    						<div class="wrapper">
	    							<div class="flex-container">
	    								<div class="w70 center tiny-w100 small-w75">
	    									<div class="w50 tiny-w100 small-w100">
	    										<?php echo $descSlider; ?>
	  										</div>
	    								</div>
	    							</div>
	    						</div>

	    					<?php endif; // end text descriptif slider full screen

	    				endif;

			      endif; // End Slider full screen

			      if( get_row_layout() == 'slider_pi_cs' ):
			      	$sliderType = get_sub_field('supp_spi_cs'); ?>

		      	<div class="wrapper">
  						<div class="flex-container">
  							<div class="w70 center tiny-w100 small-w75 fullMove">
  								<?php
  								if( have_rows('visuels_spi_cs') ):

  									echo '<div class="carousel slider_pi '. $sliderType . '">';

  									while( have_rows('visuels_spi_cs') ): the_row();

  										$visuPad = get_sub_field('visuel_spi_cs');
    									$urlPad = $visuPad['url'];
    									$altPad = $visuPad['alt'];
    									$sizePad = 'slider_ipad';
    									$imgPad = $visuPad['sizes'][$sizePad];
    									$widthPad = $visuPad['sizes'][ $sizePad . '-width' ];
    									$heightPad = $visuPad['sizes'][ $sizePad . '-height' ];
  									?>

  										<img src="<?php echo $urlPad; ?>" alt="<?php echo $altPad; ?>" width="<?php echo $widthPad; ?>" height="<?php echo $heightPad; ?>" data-rjs="3" />

  									<?php endwhile;

  									echo '</div>';

									endif;

									if( have_rows('visuels_spi_cs') ):
										$b = 1;
									?>

									<div class="button-row txtcenter">
										<button class="button button--previous"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/prev-next-slider.svg" alt="Prédécent" /></button>
										<div class="button-group button-group--cells">

											<?php while( have_rows('visuels_spi_cs') ): the_row(); ?>
												<button class="button<?php echo ($b == 1) ? ' is-selected' : ''; ?>"><span><?php echo $b; ?></span></button>
											<?php $b++; endwhile; ?>

										</div>
										<button class="button button--next"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/prev-next-slider.svg" alt="Suivant" /></button>
									</div>

								<?php endif; ?>

								</div>
							</div>
						</div>

					<?php
		      endif; // End Slider de présentation d'interfaces

		      if( get_row_layout() == 'chatbot_cs' ):

		      	$linkChat = get_sub_field('select_chat_cs');

		      	//($linkChat);

		      ?>

		      <div class="wrapper">

		      	<div class="flex-container">

		      		<div class="w70 center tiny-w100 small-w75">
			      		<div class="chat_bot">
			      			<?php
			      				if( $linkChat ):
			      					$post = $linkChat;
			      					setup_postdata( $post );

			      						echo get_template_part('/template-parts/content', 'chat');

			      					wp_reset_postdata();

		      					endif;
			      			?>
			      		</div>
		      		</div>

		      	</div>

		      </div>

		      <?php endif; // End exemple de chatbot

	      	endwhile;
	    	endif; // END FLEXIBLE CONTENT

			echo '</div>'; //End section
    	endwhile;
  	endif;
		?>
		</div><!-- END INNER -->
	</div>

	<?php
		$bkgColor = get_field('bkg_color_footer_cs');
		$bkgImg = get_field('bkg_img_footer_cs');
		if( $bkgColor ) :
			echo '<footer class="footer" style="background: ' . $bkgColor . ';">';
		else :
			echo '<footer class="footer">';
		endif;
		if( $bkgImg ) :
			echo '<div class="bkgImg"><img src="' . $bkgImg . '" alt="" data-rjs="3" /></div>';
			echo '<div class="inner innerPos">';
		else :
			echo '<div class="inner">';
		endif;
	?>
			<div class="content">
				<div class="wrapper">
					<div class="flex-container">
						<div class="w60 center tiny-w100 small-w75">
							<?php the_field('text_footer_cs'); ?>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-nav">
				<div class="wrapper">
					<div class="flex-container">
						<div class="w60 center bg-nav tiny-w100 small-w75 smallMarge">
						<?php
							$nextPost = get_next_post_link();

							$nextPost = get_next_post_link('%link', '%title');
							$postTitle = get_next_post_link('%link', '%title');
							$postLink = get_next_post_link('%link', '<span>'.  pll__('See case study') . '<span>');

							if( $nextPost === '' ) :

								$args = array(
									'post_type' => 'work',
									'posts_per_page' => 1,
									'order' => 'ASC',
									'orderby' => 'date'
								);

								$nextWork = new WP_Query( $args );

								if ( $nextWork->have_posts() ) : while ( $nextWork->have_posts() ) : $nextWork->the_post();

									$postTitle = '<a href="' . get_the_permalink() . '" rel="next">' . get_the_title() . '</a>';
									$postLink = '<a href="' . get_the_permalink() . '" rel="next"><span>'.  pll__('See case study') . '</span></a>';

									endwhile;
									wp_reset_postdata();
								endif;
							endif;
						?>
							<div class="flex-container">
								<div class="w50 bloc tiny-w100">
									<p><?php echo pll__('Next case study'); ?><br />
									<span class="next"><?php echo $postTitle; ?></span></p>
								</div>
								<div class="w50 txtright bloc tiny-w100">
									<p class="link"><?php echo $postLink; ?></p>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>

</article>
