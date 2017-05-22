jQuery.noConflict();
jQuery(function($) {

  $(document).ready(function() {

  	$('body').addClass('load');

  	//Gestion de l'affichage du header au scroll
  	windowHeight = $(window).height(),
  	titleHeader = $('.fullHeight').prev();

  	$(window).scroll( function() {

      if( $(this).scrollTop() > 100 ) {
      	$('#masthead').addClass('fixed');
      } else {
      	$('#masthead').removeClass('fixed');
      	$('#masthead').removeClass('open');
      	$('#overlay').fadeOut();
      	$('#mainnav .burger input#menu').prop( 'checked', false );
      }

      if( $('#masthead').hasClass('color-white') ) {

	      if( $('body').hasClass('home') ) {
	      	var bodyHome = $('.home #main .body').offset().top;
	      	var margeSlide = $('#slide_home').css('marginTop');
	      } else {
	      	var bodyHome = $('#main section header').next().offset().top;
	      	var margeSlide = '0px';
	      	console.log(bodyHome);
	      }


	      var heightHeader = $('#masthead').height(),
	      		realMarge = bodyHome;
	      if( $(this).scrollTop() > (realMarge - (heightHeader - 28)) ) {
	      	$('#masthead').addClass('dark');
	      } else {
	      	$('#masthead').removeClass('dark');
	      }
      }

			   var percent = $(document).scrollTop() / ($(window).height() / 2);
			   titleHeader.css('opacity', 0 + percent);
    });

    //console.log($('#masthead').offset().top);
    if($('#masthead').offset().top > 100) {
    	$('#masthead').hide();
    	$('#masthead').addClass('fixed').show();
    }


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
  	$('#navigation li:not(.current-menu-item) a').hover( function() {
  		thisEq = $(this).parent().prevAll().length,
  		currentEq = $('#navigation li.current-menu-item').prevAll().length;
  		if( thisEq > currentEq) {
  			$('#navigation li.current-menu-item').addClass('normal-item').find('a').addClass('right');
  		} else {
  			$('#navigation li.current-menu-item').addClass('normal-item').find('a').addClass('left');
			}
  	}, function() {
  		if( thisEq > currentEq) {
  			$('#navigation li.current-menu-item').removeClass('normal-item').find('a').removeClass('right');
  		} else {
  			$('#navigation li.current-menu-item').removeClass('normal-item').find('a').removeClass('left');
			}
  	});

  	//Gestion de l'ouverture du menu burger
  	$('#mainnav .burger input#menu').on('click', function(e) {

  		if( $(this).is(':checked') ) {
  			$('#masthead').addClass('open');
  			$('#overlay').fadeIn();
  			$('html').css('overflow', 'hidden');
  		} else {
  			$('#masthead').removeClass('open');
  			$('#overlay').fadeOut();
  			$('html').css('overflow', 'auto');
  		}

  	});

  	$('#overlay').on('click', function(e) {
  		$('#masthead').removeClass('open');
			$('#overlay').fadeOut();
			$('html').css('overflow', 'auto');
			$('#mainnav .burger input#menu').prop('checked', false);
			e.preventDefault();
  	});

  	//Gestion du slider de présentation d'interfaces [Case studies]
  	var $carousel = $('.slider_pi').flickity({
		  prevNextButtons: false,
		  pageDots: false,
		  setGallerySize: false
		});
		//Gestion du slider de la 404
		if( $('.error404').length > 0 ) {
			$('.slider-404 .inner-slider').addClass('move');
		}
  	/*var $slide404 = $('.slider-404').flickity({
		  prevNextButtons: false,
		  pageDots: false,
		  autoPlay: 3000,
		  wrapAround: true,
		  freeScroll: true,
		  pauseAutoPlayOnHover: false,
		  selectedAttraction: 0.0001,
			friction: 0.05
		});*/

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

		//Gestion du slider de la home
		var $carouselHome = $('#slide_home').flickity({
		  prevNextButtons: false,
		  pageDots: false,
		  autoPlay: 3000,
		  setGallerySize: false
		});//Gestion du slider de la home
		var $carouselHome = $('.slide_page').flickity({
		  prevNextButtons: false,
		  pageDots: false,
		  autoPlay: 3000,
		  setGallerySize: false
		});

		//Gestion du footer [work]
		function heightContFoo() {
			var heightFootW = $('.footer-nav').height();
			$('.single-work footer .content').css('padding-bottom', (heightFootW+20) + 'px');
		} heightContFoo();
		$( window ).resize(function() {
			heightContFoo();
		});

		//Gestion du placement du slider left sur les pages de contenu
		if (matchMedia('only screen and (min-width: 545px)').matches) {
			function paddingSlideLeft() {

				var windowWidth = $(window).width(),
						wrapperWidth = $('#main .wrapper').width(),
						paddingSlide = (windowWidth - wrapperWidth) / 2,
						wrapperWidthS = (wrapperWidth * 80) / 100,
						paddingSlide2 = (windowWidth - wrapperWidthS) / 2;

				//$('#main .slider_fulls.slider_left').css('padding-left', paddingSlide);
				$('#main .paddingR').css('padding-right', paddingSlide2);
				$('#main .paddingL').css('padding-left', paddingSlide2);
				//$('#main .slider_full.slider_left').css('padding-left', (paddingSlide + paddingSlide2));

			} paddingSlideLeft();

			$( window ).resize(function() {

				paddingSlideLeft();

			});
		}

		//Gestiondu hover sur la page [archive work]
		$('.work-list li a').hover( function() {
			$(this).parents('.work-list').addClass('hover');
			$(this).addClass('active');
		}, function() {
			$(this).parents('.work-list').removeClass('hover');
			$(this).removeClass('active');
		});

		//Gestion des anims smooth
		//[home]
		var intro_home = $('.home .intro_home');
		if( intro_home.length > 0 ) {
			var anim_intro = intro_home.waypoint({
        handler: function(direction) {
          if( direction === 'down' ) {
            intro_home.addClass('move-text');
          }
        },
        offset: '90%'
      });
		}
		$('h2, .section h3').each( function() {
			var h2 = $(this);
			var anim_h2 = h2.waypoint({
        handler: function(direction) {
          if( direction === 'down' ) {
            h2.addClass('move');
          }
        },
        offset: '99%'
      });
		});
		$('.section .flex-container, .info-contact p, .info-contact ul, .single-work p, .single-work li, .single-work blockquote, .slider_pi, .button-row, .no-slide, #home header p, #slide_home').each( function() {
			var secp = $(this);
			var anim_p = secp.waypoint({
        handler: function(direction) {
          if( direction === 'down' ) {
            secp.addClass('move');
          }
        },
        offset: '90%'
      });
		});
		$('.single-work .footer').each( function() {
			var footerS = $(this);
			var anim_f = footerS.waypoint({
        handler: function(direction) {
          if( direction === 'down' ) {
            footerS.find('.footer-nav').addClass('move');
          }
        },
        offset: '90%'
      });
		});
		$('.fullMove').each( function() {
			var row = $(this);
			var anim_row = row.waypoint({
        handler: function(direction) {
          if( direction === 'down' ) {
            row.addClass('move');
          }
        },
        offset: '90%'
      });
		});

		var compet_row = $('.compet-row');
		if( compet_row.length > 0 ) {
			$('.compet-row .wrapper .compet-bloc').each( function() {
				var compet_bloc = $(this);
				var anim_compet = compet_bloc.waypoint({
	        handler: function(direction) {
	          if( direction === 'down' ) {
	            compet_bloc.addClass('move');
	          }
	        },
	        offset: '90%'
	      });
			});
			var compet_link = $('.compet-row .wrapper .link');
			var anim_compet_link = compet_link.waypoint({
        handler: function(direction) {
          if( direction === 'down' ) {
            compet_link.addClass('move');
          }
        },
        offset: '99%'
      });
		}
		var work_row = $('.work-row');
		if( work_row.length > 0 ) {
			$('.work-row .wrapper .bloc-work').each( function() {
				var work_bloc = $(this);
				var anim_work = work_bloc.waypoint({
	        handler: function(direction) {
	          if( direction === 'down' ) {
	            work_bloc.addClass('move');
	          }
	        },
	        offset: '90%'
	      });
			});
		}
		var work_list = $('.work-list');
		if( work_list.length > 0 ) {

			$('.work-list li').each( function() {
				var work_li = $(this);
				var anim_workli = work_li.waypoint({
	        handler: function(direction) {
	          if( direction === 'down' ) {
	            work_li.addClass('move');
	          }
	        },
	        offset: '90%'
	      });
			});
		}

		/*var slider_fulls = $('.slider_fulls');
		if( slider_fulls.length > 0 ) {
			$.each($('.slider_fulls .slide'), function(i, el){
				var slideFs = $(this);
				var anim_slideFs = slideFs.waypoint({
	        handler: function(direction) {
	          if( direction === 'down' ) {
	          	setTimeout(function(){
	            	slideFs.addClass('move');
	            },100 + ( i * 100 ));
	          }
	        },
	        offset: '90%'
	      });
			});

		}*/

		var headerSingle = $('.single-work #main article header');
		var anim_headers = headerSingle.waypoint({
	    handler: function(direction) {
	      if( direction === 'down' ) {
	        headerSingle.addClass('show');
	      }
	    },
	    offset: '90%'
	  });

		var formSec = $('.form-section');
		var anim_form = formSec.waypoint({
	    handler: function(direction) {
	      if( direction === 'down' ) {
	        formSec.addClass('show');
	      }
	    },
	    offset: '90%'
	  });

		var footer = $('#footer');
		var anim_footer = footer.waypoint({
	    handler: function(direction) {
	      if( direction === 'down' ) {
	        footer.addClass('show');
	      }
	    },
	    offset: '90%'
	  });

		var homeBkg = $('#home .body');
		var anim_homeBkg = homeBkg.waypoint({
	    handler: function(direction) {
	      if( direction === 'down' ) {
	        homeBkg.addClass('showbg');
	      }
	    },
	    offset: '0'
	  });

		var contact = $('.content-contact .bkg_part');
		if( contact.length > 0 ) {
			var contactBkg = $('.content-contact .bkg_part');
			var anim_contactBkg = contactBkg.waypoint({
		    handler: function(direction) {
		      if( direction === 'down' ) {
		        contactBkg.addClass('show');
		      }
		    },
		    offset: '15%'
		  });

			$('.content-contact .wpcf7-form-control-wrap').each( function() {
				var contactBorder = $(this).after();
				var anim_contactBorder = contactBorder.waypoint({
	        handler: function(direction) {
	          if( direction === 'down' ) {
	            contactBorder.addClass('showB');
	          }
	        },
	        offset: '60%'
	      });
	    });
	  }

	  var pageBkgs = $('.section .bkg_part');
		if( pageBkgs.length > 0 ) {
			$('.section .bkg_part').each( function() {
				if( $(this).hasClass('no_anim') == false ) {
					var pageBkg = $(this),
							widthBkg = $(this).attr('data-width');
					var anim_pageBkg = pageBkg.waypoint({
		        handler: function(direction) {
		          if( direction === 'down' ) {
		            pageBkg.animate({
				        	'width': widthBkg
				        }, 800);
		          }
		        },
		        offset: '90%'
		      });
	      } else {
	      	var pageBkg = $(this),
							widthBkg = $(this).attr('data-width');
					$(this).css('width', widthBkg);
	      }
			});
		}

	  var divimgs = $('.imganim, figure');
		if( divimgs.length > 0 ) {
			$('.imganim, figure').each( function() {
				var divimg = $(this),
						animimg = $(this).find('img, figcaption');
				var anim_imgs = animimg.waypoint({
	        handler: function(direction) {
	          if( direction === 'down' ) {
	            animimg.addClass('show');
	          }
	        },
	        offset: '90%'
	      });
			});
		}

		var chatbot = $('.chat_bot');
		if( chatbot.length > 0 ) {
			var anim_chat = chatbot.waypoint({
        handler: function(direction) {
          if( direction === 'down' ) {
            chatbot.addClass('show');
          }
        },
        offset: '90%'
      });
		}

		var visuContact = $('.content-contact .visuel');
		if( visuContact.length > 0 ) {
			var anim_contact = visuContact.waypoint({
        handler: function(direction) {
          if( direction === 'down' ) {
            visuContact.addClass('show');
          }
        },
        offset: '90%'
      });
		}

		var sliderF = $('.slider_full, .slide_page, .slider_fulls');
		if( sliderF.length > 0 ) {
			$('.slider_full, .slide_page, .slider_fulls').each( function() {
				var slider_f = $(this);
				var anim_sliderF = slider_f.waypoint({
	        handler: function(direction) {
	          if( direction === 'down' ) {
	            slider_f.find('.flickity-viewport').addClass('animleft');
	          }
	        },
	        offset: '90%'
	      });
			});
		}


  }); /* End document ready */

}); /* jQuery end */
