<!-- Js files -->

	<!-- JavaScript -->
	<script src="{{ asset('clients/js/jquery-2.2.3.min.js') }}"></script>
	<!-- Default-JavaScript-File -->

	<!-- Owl-Carousel-JavaScript (for welcome section) -->
	<script src="{{ asset('clients/js/owl.carousel.js') }}"></script>
	<script>
		var owl = $('.owl-carousel');
		owl.owlCarousel({
			items: 1,
			loop: true,
			margin: 10,
			autoplay: true,
			autoplayTimeout: 2000,
			autoplayHoverPause: true,
		});
	</script>
	<!-- //Owl-Carousel-JavaScript (for welcome section) -->

	<!-- flexisel slider (for middle Slider) -->
	<script src="{{ asset('clients/js/jquery.flexisel.js') }}"></script>
	<script>
		$(window).load(function () {
			$("#flexiselDemo1").flexisel({
				visibleItems: 5,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: {
					portrait: {
						changePoint: 440,
						visibleItems: 1
					},
					landscape: {
						changePoint: 667,
						visibleItems: 3
					},
					tablet: {
						changePoint: 900,
						visibleItems: 4
					}
				}
			});

		});
	</script>
	<!-- //flexisel slider (for middle Slider) -->

	<!-- flexSlider (for testimonials) -->
	<script defer src="{{ asset('clients/js/jquery.flexslider.js') }}"></script>
	<script>
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				start: function (slider) {
					$('body').removeClass('loading');
				}
			});
		});
	</script>
	<!-- //flexSlider (for testimonials) -->

	<!-- stats -->
	<script src="{{ asset('clients/js/jquery.waypoints.min.js') }}"></script>
	<script src="{{ asset('clients/js/jquery.countup.js') }}"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //stats -->

	<!-- smooth scrolling -->
	<script src="{{ asset('clients/js/SmoothScroll.min.js') }}"></script>
	<!-- //smooth scrolling -->

	<!-- start-smoth-scrolling -->
	<script src="{{ asset('clients/js/move-top.js') }}"></script>
	<script src="{{ asset('clients/js/easing.js') }}"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->

	<!-- smooth scrolling-bottom-to-top -->
	<script>
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});
		});
	</script>
	<!-- //smooth scrolling-bottom-to-top -->

	<!-- Pogo slider (for banner) -->
	<script src="{{ asset('clients/js/jquery.pogo-slider.min.js') }}"></script>
	<script src="{{ asset('clients/js/main.js') }}"></script>
	<!-- Pogo slider (for banner) -->

	<script src="{{ asset('clients/js/bootstrap.js') }}"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!-- //Js files -->
