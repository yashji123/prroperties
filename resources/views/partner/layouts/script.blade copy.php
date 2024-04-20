<!-- Scrool Top -->
<a href="#" class="scrollToTop">Go Top<i class="fa-solid fa-angle-right"></i></a>

<!--=======================================
        All Jquery Script link home
        ===========================================-->
<!-- Bootstrap core JavaScript -->
<script src="{{ asset('assets/libs/jquery/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('frontend/assets/vendor/jquery/popper.min.js') }}"></script>
<script src="{{ asset('frontend/assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

{{-- <script src="assets/js/jquery-ui.min.js"></script> --}}
<script src="{{ asset('frontend/assets/js/jquery-migrate.js') }}"></script>
<script src="{{ asset('assets/libs/jquery-ui/jquery-ui.min.js') }}"></script>

<!-- ==== Plugin JavaScript ==== -->
{{-- <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script> --}}
<script src="{{ asset('frontend/assets/js/easing.min.js') }}"></script>

<!-- Waypoints JS -->
<script src="{{ asset('frontend/assets/js/waypoints.min.js') }}"></script>

<!-- Counterup JS -->
<script src="{{ asset('frontend/assets/js/jquery.counterup.min.js') }}"></script>

<!-- Swiper SLider JS -->
<script src="{{ asset('frontend/assets/js/swiper-slider.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/flex-slider.js') }}"></script>

{{-- <script src="assets/js/owl.carousel.min.js"></script> --}}
<script src="{{ asset('assets/libs/owl-carousel/owl.carousel.min.js') }}"></script>

<!-- Select2 JS-->
<script src="{{ asset('frontend/assets/js/select2-js.min.js') }}"></script>

<!--Wow Script-->
<script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>

<!--Iconify Icon-->
{{-- <script src="assets/js/iconify.min.js"></script> --}}
<script src="{{ asset('assets/js/iconify.min.js') }}"></script>
<script src="{{ asset('assets/js/custom/common.js') }}"></script>
<script src="{{ asset('assets/js/toastr.min.js') }}"></script>
<!-- Standalon Js Script Start -->

<!-- Standalon Js Script End -->

<!-- Menu js -->
<script src="{{ asset('frontend/assets/js/menu.js') }}"></script>

<!-- Custom scripts for this template -->
<script src="{{ asset('frontend/assets/js/custom.js') }}"></script>
@stack('script')

<script>
    (function($) {
        "use strict";
        $(document).ready(function () {

        /* Home Featured Slider */
        var swiper = new Swiper(".homec-slider-pcard", {
                autoplay: {
                        delay: 2500,
                },
                navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                },
                effect: 'fade',
                mousewheel: true,
                keyboard: true,
                loop: true,
                grabCursor: true,
                speed: 500,
                spaceBetween: 15,
                centeredSlides: false,
                pagination: {
                        el: '.swiper-pagination__featured',
                        type: 'bullets',
                        clickable: true,
                },
                slidesPerView: "1",
        });

        var swiper = new Swiper(".homec-slider-agent__card", {
                autoplay: {
                                delay: 344500,
                },
                navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                },
                mousewheel: true,
                keyboard: true,
                loop: true,
                grabCursor: true,
                spaceBetween: 30,
                centeredSlides: false,
                pagination: {
                        el: '.swiper-pagination__slider--agent',
                        type: 'bullets',
                        clickable: true,
                },
                slidesPerView: "1",
        });

                /* Slider Property */
                var swiper = new Swiper(".homec-slider-property", {
                        // autoplay: {
                        // 	 delay: 4000,
                        // },
                        autoplay: false,
                        allowTouchMove: false,
                        navigation: {
                                nextEl: ".swiper-button-next",
                                prevEl: ".swiper-button-prev",
                        },
                        mousewheel: false,
                        keyboard: true,
                        loop: false,
                        grabCursor: true,
                        spaceBetween: 30,
                        centeredSlides: false,
                        pagination: false,
                        a11y: false,
                        // pagination: {
                        // 	el: '.swiper-pagination__property',
                        // 	type: 'bullets',
                        // 	clickable: true,
                        // },
                        slidesPerView: "4",
                        breakpoints: {
                                320: {
                                slidesPerView: "1",
                                },
                                428: {
                                slidesPerView:"1",
                                },
                                640: {
                                slidesPerView: "2",
                                },
                                768: {
                                slidesPerView: "2",
                                },
                                1024: {
                                slidesPerView: "3",
                                },
                        },
                });

                /* Agent Slider */
                var swiper = new Swiper(".homec-slider-agent", {
                        autoplay: {
                                        delay: 4000,
                        },
                        navigation: {
                                nextEl: ".swiper-button-next",
                                prevEl: ".swiper-button-prev",
                        },
                        mousewheel: true,
                        keyboard: true,
                        loop: true,
                        grabCursor: true,
                        spaceBetween: 30,
                        centeredSlides: false,
                        pagination: {
                                el: '.swiper-pagination__agent',
                                type: 'bullets',
                                clickable: true,
                        },
                        slidesPerView: "4",
                        breakpoints: {
                                320: {
                                slidesPerView: "1",
                                },
                                428: {
                                slidesPerView:"1",
                                },
                                640: {
                                slidesPerView: "2",
                                },
                                768: {
                                slidesPerView: "2",
                                },
                                1024: {
                                slidesPerView: "3",
                                },
                                1100: {
                                slidesPerView: "4",
                                },
                        },
                });

                /* Testimonial Slider */
                var swiper = new Swiper(".homec-slider-testimonial", {
                        autoplay: {
                                        delay: 4000,
                        },
                        mousewheel: true,
                        keyboard: true,
                        loop: true,
                        grabCursor: true,
                        spaceBetween: 30,
                        centeredSlides: false,
                        breakpoints: {
                                320: {
                                slidesPerView: "1",
                                },
                                428: {
                                slidesPerView:"1",
                                },
                                768: {
                                slidesPerView:"1",
                                },
                                1024: {
                                slidesPerView:"2",
                                },
                        },
                });

                /* Client Slider */
                var swiper = new Swiper(".homec-slider-client", {
                        autoplay: {
                                        delay: 3500,
                        },
                        navigation: {
                                nextEl: ".swiper-button-next",
                                prevEl: ".swiper-button-prev",
                        },
                        mousewheel: true,
                        keyboard: true,
                        loop: true,
                        grabCursor: true,
                        spaceBetween: 30,
                        centeredSlides: false,
                        slidesPerView: "4",
                        breakpoints: {
                                320: {
                                slidesPerView: "2",
                                },
                                428: {
                                slidesPerView:"2",
                                },
                                640: {
                                slidesPerView: "3",
                                },
                                768: {
                                slidesPerView: "4",
                                },
                                1024: {
                                slidesPerView: "6",
                                },
                        },
                });


                $('#f1').flexslider({
		    animation: "fade",
		    controlNav: false,
			directionNav: false,
		    start: function(slider){
		      $('body').removeClass('loading');
		    }
                });
		 $('#f2').flexslider({
		    animation: "slide",
		    animationLoop: true,
		    itemWidth: 200,
			itemMargin: 0,
		    pausePlay: false,
		    mousewheel: true,
		    asNavFor:'.flexslider',
		    controlNav: false,
			move: 1,
			pauseOnAction: false,
			slideshow: false,
			manualControls: true
                });

        });
        
})(jQuery);
</script>