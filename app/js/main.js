jQuery.noConflict();
jQuery(function($) {

  $(document).ready(function() {

  	//Gestion de la navigation
  	$('#navigation li').mousemove(function(e){
  		var widthButton = $(this).width(),
					x = e.pageX - this.offsetLeft,
					middleWidth = widthButton / 2;

			if( x < middleWidth ) {
				$(this).find('a').addClass('left');
				$(this).find('a').removeClass('right');
			} else if ( x > middleWidth ) {
				$(this).find('a').addClass('right');
				$(this).find('a').removeClass('left');
			}
   });

  	var $carousel = $('.slider_pi').flickity({
		  prevNextButtons: false,
		  pageDots: false
		});
		// Flickity instance
		var flkty = $carousel.data('flickity');
		// elements
		var $cellButtonGroup = $('.button-group--cells');
		var $cellButtons = $cellButtonGroup.find('.button');

		// update selected cellButtons
		$carousel.on( 'select.flickity', function() {
		  $cellButtons.filter('.is-selected')
		    .removeClass('is-selected');
		  $cellButtons.eq( flkty.selectedIndex )
		    .addClass('is-selected');
		});

		// select cell on button click
		$cellButtonGroup.on( 'click', '.button', function() {
		  var index = $(this).index();
		  $carousel.flickity( 'select', index );
		});
		// previous
		$('.button--previous').on( 'click', function() {
		  $carousel.flickity('previous');
		});
		// next
		$('.button--next').on( 'click', function() {
		  $carousel.flickity('next');
		});

		//Gestion du footer [work]
		function heightContFoo() {
			var heightFootW = $('.footer-nav').height();
			$('.single-work footer .content').css('padding-bottom', (heightFootW+20) + 'px');
		} heightContFoo();
		$( window ).resize(function() {
			heightContFoo();
		});

  }); /* End document ready */

}); /* jQuery end */
