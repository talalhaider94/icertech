(function($){

	//
	// Do this stuff straight away
	//

	//
	// Finds the viewport dimensions
	//
	function viewport() {
	    var e = window, a = 'inner';
	    if (!('innerWidth' in window )) {
	        a = 'client';
	        e = document.documentElement || document.body;
	    }
	    return { width : e[ a+'Width' ] , height : e[ a+'Height' ] };
	}

	// Do this stuff when the document is ready
	$(function() {





		// Calculated the Banner height, menu height, and scroll height and adds a class to the menu if it is over the .section--banner
		function menuTransition(){
			if($('.section--banners').outerHeight()){
				bannersHeight = $('.section--banners').outerHeight();
			} else if ($('.section--banners--home')){
				bannersHeight = $('.section--banners--home').outerHeight();
			}
			menuHeight = $('.navbar--main').outerHeight();
			scrollHeight = $(window).scrollTop();

			if ( scrollHeight < ( bannersHeight - menuHeight ) ) {
				$('.navbar--main').addClass('navbar--banner-overlay');
			} else {
				$('.navbar--main').removeClass('navbar--banner-overlay');
			}

		};

		// call the menuTransition() function when the document is ready.
		menuTransition();

		var scrollTimeout;  // global for any pending scrollTimeout

		$(window).scroll(function () {
		    if (scrollTimeout) {
		        // clear the timeout, if one is pending
		        clearTimeout(scrollTimeout);
		        scrollTimeout = null;
		    }
		    scrollTimeout = setTimeout(menuTransition(), 250);
		});

		//
		// Initialize & configure Slick Slider for slider--logo
		//
		$('#slider--logo').slick({
			autoplay: true,
			autoplaySpeed: 5000,
			dots: false,
			arrows: false,
			slidesToShow: 6,
			slidesToScroll: 1,
			responsive: [
				{
					breakpoint: 768,
					settings: {
						slidesToShow: 1
					}
				}
			]
		});


		//
		// Add the background image to any item with .img-conditional if screen is wider than 992px
		//
		function imgConditional(){
			var screenWidth = viewport().width;
			if( screenWidth >= 992 ){
				$('.img-conditional').each(function(){
					var imgSrc = $(this).data('img-src');
					$(this).css({
						'background': 'url('+ imgSrc +') no-repeat center center',
						'background-size': 'cover'
					})
				});
			} else {
				$('.img-conditional').each(function(){
					$(this).css({
						'background': '',
						'background-size': ''
					})
				});
			}
		}
		imgConditional();

		//
		// Call the imgConditional script every time the window resizes.
		//
		var doit;
		window.onresize = function(){
		  clearTimeout(doit);
		  doit = setTimeout(imgConditional(), 100);
		};

		//
		// On click switch the active .channel
		//
		$('.channel-overlay').click(function(){
			var channel = $(this);
			$('.channel').removeClass('channel--active');
			$(this).parent().addClass('channel--active');
			setTimeout(function(){
				$('.channel-overlay').removeClass('hidden');
				channel.addClass('hidden');
			},250);

		});



	});

	// do this stuff when the window has loaded
	$(window).load(function(){


	});


}(jQuery));
