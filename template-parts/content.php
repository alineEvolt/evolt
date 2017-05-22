<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package evolt
 */
?>

<article id="post-<?php the_ID(); ?>" class="content-page">
	<?php
		if( have_rows('ajout_sous_sec_pa') ):
    	while ( have_rows('ajout_sous_sec_pa') ) : the_row();
    	$secIntro = get_sub_field('section_intro_pa');
    	$heightHead = get_sub_field('section_intro_full_pa');

    	$secIntro = get_sub_field('section_intro_pa');
  		$navColor = get_sub_field('couleur_nav_pr_pa');
			if( $secIntro == '1' ) {
				if( $navColor ) {
					$colorNav = $navColor;
				} else {
					$colorNav = 'dark';
				}
			}

    	if( $heightHead == '1' ) {
    		$heightIntro = 'fullHeight';
    	} else {
    		$heightIntro = 'normalHeight';
    	}

    	$bkgType2 = get_sub_field('type_bkg_v2_pa');

      if( $bkgType2 === 'bkg_uni_full' || $bkgType2 === 'bkg_uni_part' ) :

      	$bkgFirst2 = get_sub_field('couleur_sous_sec_v2_pa');
      	$bkgColor = 'background-color: ' . $bkgFirst2 . ';';

      elseif( $bkgType2 === 'bkg_gradient_full' || $bkgType2 === 'bkg_gradient_part' ) :

      	$bkgFirst2 = get_sub_field('couleur_1_sous_sec_v2_pa');
      	$bkgSecond2 = get_sub_field('couleur_2_sous_sec_v2_pa');
      	$bkgColor = 'background-color: -moz-linear-gradient(top, ' . $bkgFirst2 . ' 0%, ' . $bkgSecond2 . ' 100%); background: -webkit-linear-gradient(top, ' . $bkgFirst2 . ' 0%, ' . $bkgSecond2 . ' 100%); background: linear-gradient(to bottom, ' . $bkgFirst2 . ' 0%, ' . $bkgSecond2 . ' 100%);';

      endif;

      $addImg = get_sub_field('add_img_sous_sec_v2_pa');
      if( $addImg ) {
      	$imgField = get_sub_field('ajout_img_fond_sous_sec_v2_pa');
      	$imgPosTop = get_sub_field('pos_top_img_sec_v2_pa');
      	$imgPosleft = get_sub_field('pos_left_img_sec_v2_pa');
      	$imgSize = get_sub_field('size_bkg_sous_sec_v2_pa');

      	$bkgImg = 'background-image: url(' . $imgField . ');';
      	$bkgPos = 'background-position: ' . $imgPosleft . '% ' . $imgPosTop . '%;';
      	$bkgSize = 'background-size: ' . $imgSize . ';';
      }

      if( $bkgType2 === 'bkg_uni_part' || $bkgType2 === 'bkg_gradient_part' ) {

      	$ancBloc = get_sub_field('point_anc_sous_sec_v2_pa');
      	$posTopBloc = get_sub_field('pos_top_sec_v2_pa');
      	$posLeftBloc = get_sub_field('pos_left_sec_v2_pa');
      	$posBloc = 'top: ' . $posTopBloc . '%; left: ' . $posLeftBloc . '%;';
      	$widthBkg = get_sub_field('larg_sous_sec_v2_pa');
      	$heightBkg = get_sub_field('haut_sous_sec_v2_pa');
      	$addImg = get_sub_field('add_img_sous_sec_v2_pa');

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
    			if( $secIntro  == '1' ):
	    		echo '<header class="header ' . $heightIntro . ' ' . $colorNav . '"><div class="bkg_part" style="' . $bkgColor . ' ' . $posBloc . ' height: ' . $heightBkg . '%; width: ' . $widthBkg . '%; ' . $bkgImg . ' ' . $bkgPos . ' ' . $bkgSize . ' background-repeat: no-repeat;"></div>';
		    	else :
		    		echo '<div class="section"><div class="bkg_part" style="' . $bkgColor . ' ' . $posBloc . ' height: ' . $heightBkg . '%; width: ' . $widthBkg . '%; ' . $bkgImg . ' ' . $bkgPos . ' ' . $bkgSize . ' background-repeat: no-repeat;"></div>';
		    	endif;
      	} else {
      		if( $secIntro  == '1' ):
	    		echo '<header class="header ' . $heightIntro . ' ' . $colorNav . '"><div class="bkg_part" style="' . $bkgColor . ' ' . $posBloc . ' height: ' . $heightBkg . '%; width: ' . $widthBkg . '%;"></div>';
		    	else :
		    		echo '<div class="section"><div class="bkg_part" style="' . $bkgColor . ' ' . $posBloc . ' height: ' . $heightBkg . '%; width: ' . $widthBkg . '%;"></div>';
		    	endif;
      	}

      } else {
      	$addImg = get_sub_field('add_img_sous_sec_v2_pa');
      	if( $addImg ) {
      		if( $secIntro  == '1' ):
	    		echo '<header class="header ' . $heightIntro . ' ' . $colorNav . '" style="' . $bkgColor . ' ' . $bkgImg . ' ' . $bkgPos . ' ' . $bkgSize . ' background-repeat: no-repeat;">';
		    	else :
		    		echo '<div class="section" style="' . $bkgColor . ' ' . $bkgImg . ' ' . $bkgPos . ' ' . $bkgSize . ' background-repeat: no-repeat;">';
		    	endif;
    		} else {

      		if( $secIntro  == '1' ):
	    		echo '<header class="header ' . $heightIntro . ' ' . $colorNav . '" style="' . $bkgColor . '">';
		    	else :
		    		echo '<div class="section" style="' . $bkgColor . '">';
		    	endif;
    		}
      }
    	if( have_rows('sous_sec_pa') ):
    		while ( have_rows('sous_sec_pa') ) : the_row();

	        //end background section
		      if( get_row_layout() == 'bloc_text_pa' ):

		      	$nbrCol = get_sub_field('num_col_text_pa');
		      	$contentBloc = get_sub_field('text_pa');
		      	$contentBlocBis = get_sub_field('text_pa_bis');
		      	$imgBloc1 = get_sub_field('visuels_right_pa');
		      	$imgBloc2 = get_sub_field('visuels_left_pa');
		      	$bkgWhite = get_sub_field('add_bkg_white_pa');

		      	if( $bkgWhite == '1' ) {
		      		$blocWhite = 'bkg-white';
		      	}

		      	?>

	      				<?php
	      						if( $nbrCol === 'one_col') :

	      							$colwidth = get_sub_field('larg_bloc_text_pa');

	      							if( $colwidth == '' ) {
	      								$widthCol = 'w100';
	      							}
	      							elseif( $colwidth == 'w70') {
	      								$widthCol = 'w70 center';
	      							} else {
	      								$widthCol = $colwidth;
	      							}

	      						echo '<div class="wrapper">';
	      							echo '<div class="flex-container">';
	      								echo '<div class="' . $widthCol . ' ' . $blocWhite . ' tiny-w100">';
				      						if( get_sub_field('titre_bloc_pa') ) :
			      								echo '<h2>' . get_sub_field('titre_bloc_pa') . '</h2>';
			      							endif;
	      									echo $contentBloc;
	      								echo '</div>';
	      							echo '</div>';
	      						echo '</div>';

	      					elseif( $nbrCol === 'two_col') :
	      						echo '<div class="wrapper">';
	      							echo '<div class="flex-container">';
			      						echo '<div class="w100">';
			      						if( get_sub_field('titre_bloc_pa') ) :
		      								echo '<h2>' . get_sub_field('titre_bloc_pa') . '</h2>';
		      							endif;
			      						echo '<div class="flex-container">';
			      						echo '<div class="w40 tiny-w100">';
			      							echo $contentBloc;
			      						echo '</div>';
			      						echo '<div class="w40 tiny-w100 push">';
			      							echo $contentBlocBis;
			      						echo '</div>';
			      						echo '</div>';
			      						echo '</div>';
	      							echo '</div>';
	      						echo '</div>';

	      					elseif( $nbrCol === 'one_col_img') :

	      						echo '<div class="wrapper">';
	      							echo '<div class="flex-container">';

			      						echo '<div class="w100 center imgFull">';
			      						if( have_rows('visuels_right_pa') ):

													echo '<div class="slide_page">';

												    while ( have_rows('visuels_right_pa') ) : the_row();

												        $image = get_sub_field('visuel_right_pa');
												        $url = $image['url'];
																$alt = $image['alt'];
																$size = 'slider_ipad';
																$thumb = $image['sizes'][ $size ];
																$width = $image['sizes'][ $size . '-width' ];
																$height = $image['sizes'][ $size . '-height' ];

																echo '<div class="slide"><img src="' . $url . '" alt="' . $alt . '" width="' . $width . '" height="' . $height . '" /></div>';

												    endwhile;

												    echo '</div>';

												endif;

			      						echo '</div>';
			      					echo '</div>';
			      				echo '</div>';

									elseif( $nbrCol === 'two_col_img_left') :

	      						echo '<div class="grid">';
		      						echo '<div class="one-half slider-col">';
		      						if( have_rows('visuels_left_pa') ):

												echo '<div class="slide_page">';

											    while ( have_rows('visuels_left_pa') ) : the_row();

											        $image = get_sub_field('visuel_left_pa');
											        $url = $image['url'];
															$alt = $image['alt'];
															$size = 'slider_ipad';
															$thumb = $image['sizes'][ $size ];
															$width = $image['sizes'][ $size . '-width' ];
															$height = $image['sizes'][ $size . '-height' ];

															echo '<div class="slide"><img src="' . $url . '" alt="' . $alt . '" width="' . $width . '" height="' . $height . '" /></div>';

											    endwhile;

											    echo '</div>';

											endif;

		      						echo '</div>';
		      						echo '<div class="one-half paddingR">';
		      							if( get_sub_field('titre_bloc_pa') ) :
		      								echo '<h2>' . get_sub_field('titre_bloc_pa') . '</h2>';
		      							endif;
		      							echo $contentBlocBis;
		      						echo '</div>';
			      				echo '</div>';

	      					elseif( $nbrCol === 'two_col_img_right') :

	      						echo '<div class="grid">';
	      							echo '<div class="one-half paddingL">';
		      							if( get_sub_field('titre_bloc_pa') ) :
		      								echo '<h2>' . get_sub_field('titre_bloc_pa') . '</h2>';
		      							endif;
	      								echo $contentBloc;
	      							echo '</div>';
	      							echo '<div class="one-half slider-col">';
		      						if( have_rows('visuels_right_pa') ):
												echo '<div class="slide_page">';

											    while ( have_rows('visuels_right_pa') ) : the_row();

											        $image = get_sub_field('visuel_right_pa');
											        $url = $image['url'];
															$alt = $image['alt'];
															$size = 'slider_ipad';
															$thumb = $image['sizes'][ $size ];
															$width = $image['sizes'][ $size . '-width' ];
															$height = $image['sizes'][ $size . '-height' ];

															echo '<div class="slide"><img src="' . $url . '" alt="' . $alt . '" width="' . $width . '" height="' . $height . '" /></div>';

											    endwhile;

											    echo '</div>';
											endif;

	      							echo '</div>';
	      						echo '</div>';

	      					endif;
	      				?>

	      	<?php endif; // End bloc_text_pa

	      	if( get_row_layout() == 'slider_fs_pa' ):

			      	$sliderPos1 = get_sub_field('slider_fs_pos_pa');


			      	if( have_rows('visuels_sfs_pa') ): ?>
			      		<div class="carousel slider_fulls slider_<?php echo $sliderPos1; ?>" data-flickity='{ "freeScroll": true, "pageDots": false, "prevNextButtons": false, "imagesLoaded": true, "cellAlign": "<?php echo $sliderPos1; ?>" }'>

	    					<?php while ( have_rows('visuels_sfs_pa') ) : the_row();

		    					$visuSfS1 = get_sub_field('visuel_sfs_pa');
		    					$urlSfS1 = $visuSfS1['url'];
		    					$altSfS1 = $visuSfS1['alt'];
		    					$legende = get_sub_field('legende_sfs_pa');
		    					$sizeT1 = 'slider_team';
									$thumbT = $visuSfS1['sizes'][ $sizeT1 ];
									$widthT1 = $visuSfS1['sizes'][ $sizeT1 . '-width' ];
									$heightT1 = $visuSfS1['sizes'][ $sizeT1 . '-height' ];

		    					echo '<div class="slide">';
		    					echo '<img src="' . $urlSfS1 . '" alt="' . $altSfS1 .'" width="' . $widthT1 . '" height="' . $heightT1 . '" />';
		    					if( $legende ) {
		    						echo '<p class="legende">' . $legende . '</p>';
		    					}
		    					echo '</div>';

	    					endwhile;
	    					echo '</div>';
    					endif;

			      endif; // End Slider full screen

			      if( get_row_layout() == 'slider_fsb_pa' ):

			      	$sliderPos = get_sub_field('slider_fbs_pos_pa');


			      	if( have_rows('visuels_sfbs_pa') ): ?>
			      		<div class="carousel slider_full slider_<?php echo $sliderPos; ?>" data-flickity='{ "freeScroll": true, "pageDots": false, "prevNextButtons": false, "imagesLoaded": true, "cellAlign": "<?php echo $sliderPos; ?>" }'>

	    					<?php while ( have_rows('visuels_sfbs_pa') ) : the_row();

		    					$visuSfS = get_sub_field('visuel_sfbs_pa');
		    					$urlSfS = $visuSfS['url'];
		    					$altSfS = $visuSfS['alt'];

		    					echo '<img src="' . $urlSfS . '" alt="' . $altSfS .'" />';

	    					endwhile;
	    					echo '</div>';
    					endif;
    					$ajoutDescSlider = get_sub_field('ajout_text_desc_sfbs_cs');

    					if( $ajoutDescSlider ) :

	    					$descSlider = get_sub_field('text_desc_sfbs_cs');
	    					if( $descSlider ) : ?>

	    						<div class="wrapper">
	    							<div class="flex-container">
	    								<div class="w70 center tiny-w100">
	    									<div class="w50 tiny-w100">
	    										<?php echo $descSlider; ?>
	  										</div>
	    								</div>
	    							</div>
	    						</div>

	    					<?php endif; // end text descriptif slider full screen

	    				endif;

			      endif; // End Slider full screen

      	endwhile;
      endif; // End sous sec pa

    	if( $secIntro  == '1' ):
    		echo '</header>';
    	else :
    		echo '</div>'; // End section
    	endif;

			endwhile;
	endif;
	?>

</article>