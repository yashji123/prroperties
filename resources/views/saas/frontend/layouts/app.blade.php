<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @if (isset($_SERVER['HTTPS']))
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />
    @endif
 
           @if(Request::is('/'))
        <meta name="title" content="{{ config('app.name') }}">
        <meta name="description" content="Discover Properties&#039; range of offerings, from live and work properties, and short and long-term rentals, to corporate office spaces and exclusive corporate rentals. Your property solution awaits.">
    @else
    <meta name="description" content="{{ $description ?? $metaDescription ?? 'Prrpoerties' }}">


    @endif

    <meta name="keywords" content="{{ getOption('meta_keyword') }}">
    <meta name="author" content="{{ getOption('meta_author') }}">

    <meta property="og:type" content="Property">
    <meta property="og:title" content="{{ getOption('app_name') }}">
    <meta property="og:description" content="{{ getOption('meta_description') }}">
    <meta property="og:image" content="{{ getSettingImage('app_logo') }}">

    <meta name="twitter:card" content="{{ getOption('app_name') }}">
    <meta name="twitter:title" content="{{ getOption('app_name') }}">
    <meta name="twitter:description" content="{{ getOption('meta_description') }}">
    <meta name="twitter:image" content="{{ getSettingImage('app_logo') }}">
<link rel="canonical" href="{{ $canonicalUrl ?? '' }}" />
    <meta name="msapplication-TileImage" content="{{ getSettingImage('app_logo') }}">

    <meta name="msapplication-TileColor" content="#F8F8F8">
    <meta name="theme-color" content="#3686FC">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!--<title>{{ getOption('app_name') . ' - ' . @$pageTitle }}</title>-->
    <title>{{ @$pageTitle ?: '' }}</title>

    @include('saas.frontend.layouts.style')

    <!-- FAVICONS -->
    <link rel="icon" href="{{ getSettingImage('app_fav_icon') }}" type="image/png" sizes="16x16">
    <link rel="shortcut icon" href="{{ getSettingImage('app_fav_icon') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ getSettingImage('app_fav_icon') }}">
   <meta name="google-site-verification" content="_L82VziyyVs3Fiq1aZ-iE2KMBdUKLH_8GFXAnbFzjAY" />  
<!-- Inside the head tag or near the end of the body tag -->
@stack('scripts')

<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-SECVBBS2ZQ');
</script>



<!-- degio -->


<!-- Google tag (gtag.js) -->
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11460382478"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-11460382478');
</script>

<!-- degio -->



</head>

<body class="{{ selectedLanguage()->rtl == 1 ? 'direction-rtl' : 'direction-ltr' }}">

    <!-- Pre Loader Area start -->
    @if (getOption('app_preloader_status') == 1)
        <div id="preloader">
            <div id="preloaderInner"><img src="{{ getSettingImage('app_preloader') }}" alt="img"></div>
        </div>
    @endif
    <!-- Pre Loader Area End -->

    <!--Main Menu/Navbar Area Start -->
    @include('saas.frontend.layouts.menu')
    <!--Main Menu/Navbar Area End -->

    <main data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true"
        tabindex="0">
        @yield('content')
        @include('saas.frontend.layouts.footer')
    </main>

    @include('saas.frontend.layouts.script')
    <script>
        $("#topBannerClose").on('click', function() {
            $(this).parent().remove();
        });
    </script>
    
    

    
    
    
</body>

</html>
