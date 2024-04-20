<!--=======================================
        All Css Style link
        ===========================================-->

<!-- Bootstrap core CSS -->

<link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>

<script src="https://js.stripe.com/v3/"></script>


<link rel="preload" as="style" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/css/bootstrap.min.css">
  <link rel="preload" as="style" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


  <!-- Asynchronously load non-critical CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/css/bootstrap.min.css" 
        onload="this.onload=null;this.rel='stylesheet'"
        onerror="this.href='your-local-path/bootstrap.min.css'">
  <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/css/bootstrap.min.css"></noscript>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" 
        onload="this.onload=null;this.rel='stylesheet'"
        onerror="this.href='your-local-path/jquery-ui.css'">
  <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css"></noscript>



<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<!-- Animate Css-->
<link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">

<link rel="stylesheet" href="{{ asset('assets/libs/owl-carousel/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/libs/owl-carousel/owl.theme.default.min.css') }}">

 <!--Swiper Slider CSS -->
<link href="
https://cdn.jsdelivr.net/npm/swiper@11.0.5/swiper-bundle.min.css
" rel="stylesheet">
<!-- <link rel="stylesheet" href="{{ asset('frontend/assets/css/swiper-slider.min.css') }}"> -->

<link rel="stylesheet" href="{{ asset('frontend/assets/css/flex-slider.css') }}">

 <!--Select2 CSS -->
<link rel="stylesheet" href="{{ asset('frontend/assets/css/select2-min.css') }}">

 <!--Icons -->
<link rel="stylesheet" href="{{ asset('assets/css/font-awesome-all.min.css') }}">
 <link rel="stylesheet" href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet"> 
<link rel="stylesheet" href="{{ asset('assets/css/toastr.min.css') }}">










<style>
    :root {
        @if (getOption('website_color_mode', 0) == ACTIVE)
            --primary-color: {{ getOption('website_primary_color', '#3686FC') }};
            --secondary-color: {{ getOption('website_secondary_color', '#4831DB') }};
            --blue-color: {{ getOption('button_primary_color', '#3686FC') }};
            --primary-hover-color: {{ getOption('button_hover_color', '#0066D9') }};
        @else
            --primary-color: #3686FC;
            --secondary-color: #4831DB;
            --blue-color: #3686FC;
            --primary-hover-color: #0066D9;
        @endif
    }
</style>
<!-- Custom styles for this template -->
<link rel="stylesheet" href="{{ asset('frontend/assets/css/theme-default.css') }}">
<link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/assets/css/custom.css') }}" rel="stylesheet">

<!-- Responsive Css-->
<link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">
@stack('style')
