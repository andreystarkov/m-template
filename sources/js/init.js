/* M-Template by Andrey Starkov
	im@andreystarkov.ru | github/andreystarkov */

	(function($) {
		$.fn.parallax = function(options) {
			var windowHeight = $(window).height();
			var settings = $.extend({
				speed: 0.15
			}, options);

			return this.each(function() {
				var $this = $(this);
				$(document).scroll(function() {
					var scrollTop = $(window).scrollTop();
					var offset = $this.offset().top;
					var height = $this.outerHeight();
					if (offset + height <= scrollTop || offset >= scrollTop + windowHeight) {
						return;
					}
					var yBgPosition = Math.round((offset - scrollTop) * settings.speed);
					$this.css('background-position', 'center ' + yBgPosition + 'px');
				});
			});
		}
	}(jQuery));

	function initScreen() {
		$('.cd-hero-slider li .overlay').css({
			backgroundColor: 'rgba(30,28,27,0.5)'
		});
		$('.caption div, .navigation').fadeIn(1500);
	};

	function animateElement(element, animation) {
		var classes = "animated " + animation;
		$(element).removeClass('faded hidden icon-hidden').css({
			translateY: '-1000px'
		}).addClass("visible " + classes);
		setTimeout(function() {
			$(element).removeClass(animation)
		}, 1500);
	}

	function svgDraw(svgObj, waypointObj, animationType, animationDuration) {
		var theObj = new Vivus(svgObj, {
			type: animationType,
			duration: animationDuration,
			start: 'manual',
			onReady: function(obj) {
				obj.el.classList.add('svg-stroked');
			}
		}, function(obj) {
			obj.el.classList.add('svg-done');
		});
		new Waypoint({
			element: $(waypointObj),
			handler: function(direction) {
				console.log('Waypoint initialized');
				theObj.play();
			},
			offset: '75%'
		});
		return theObj;
	}

	var mIcon = new Vivus('svg-mrestorator', {
			type: 'async',
			duration: 120,
			start: 'manual',
			onReady: function(obj) {
				obj.el.classList.add('stroke');
				setTimeout(function() {
					obj.el.classList.add('finished');
					initScreen();
				}, 3200);
			}
		},
		function(obj) {
			$('.caption div').css({
				opacity: '1',
				'transition': '0.7s ease-in-out opacity'
			});
			obj.el.classList.add('shadowed');
		});

	setTimeout(function() {
		mIcon.play();
	}, 400);


	$(function() {
		$('.caption div').css({
			opacity: '0'
		});

		$('#recent').pongstgrm({
			accessId: '1590265550',
			accessToken: '1590265550.d8874ae.f5c1cbb59f6a4d09bf2e5ae4e6034d4f',
			show: 'recent'
		});

		$('.cd-slider-nav li').each(function() {
			$(this).css({
				'height': $('.cd-slider-nav').height()
			});
		});

		/*	    if ($(window).width() > 1000) {
	        $('.parallax-background').parallax({
	            speed: 0.2
	        });
	    }*/

		svgDraw('svg-icon-wine', '.intro-feature', 'async', 160);
		svgDraw('svg-icon-gift', '.intro-feature', 'async', 160);
		svgDraw('svg-icon-heart', '.intro-feature', 'async', 160);
		svgDraw('svg-icon-news', '.container-news', 'async', 200);
		svgDraw('svg-icon-mail', '.section-form', 'async', 200);
		svgDraw('svg-icon-camera', '#instagram-header', 'async', 254);
		// svgDraw('svg-icon-partners', '#partners-header', 'async', 250);

		var news = new WOW({
			boxClass: 'blog-post',
			animateClass: 'animated bounceInUp',
			offset: 10,
			delay: "0.5s",
			duration: '0.8s',
			mobile: false,
			live: true
		});

		var animObjects = new WOW({
			boxClass: 'wow',
			mobile: false,
			live: true
		});

		news.init();
		animObjects.init();

		$('.tip').tooltip();

		var pagesLoaded = 0;

		$("#btn-more-news").click(function(e) {
			$.post('testing.php', {
				'page': pagesLoaded
			}, function(data) {
				$(".container-news").append(data);
				$("html, body").animate({
					scrollTop: $(".first-loaded").offset().top
				}, 800, function() {
					$(".first-loaded").removeClass('first-loaded');
				});
				pagesLoaded++;
			}).fail(function(xhr, ajaxOptions, thrownError) {
				console.log("fail: ".thrownError);
			}).done(function() {
				setTimeout(function() {
					animateElement("#btn-more-news", "fadeInUp");
				}, 900);
			});
		});



	});