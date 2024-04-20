@extends('saas.frontend.layouts.app')

@section('content')
<!-- homec Hero -->
<section id="hero" class="homec-hero service-hero homec-bg-cover p-relative" style="background-image:url('{{ asset('frontend/assets/img/services/maintenance/maintenance-bg.webp') }}');">

    <div class="homec-overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-10 offset-md-1 col-12">
                    <div class="homec-hero__inner service-hero_inner">
                        <!-- Hero Content -->
                        <div class="homec-hero__content homec-hero__content-mt-0">
                            <h1 class="homec-hero__title homec-hero__title-nor-pos no-width">Maintenance for multiple properties <br/>in just one click</h1>
                            <p class="no-width">With Prroperties, maintenance requests are just a click away for managers and tenants.<br/> Discover hassle-free property maintenance in our platform</p>
                            <div class="mg-top-40 d-flex justify-content-center w-100">
                            <a class="homec-btn" data-bs-toggle="modal" href="#myModal"><span>Watch demo</span></a>
                            </div>
                        </div>
                    </div>
                </div>

                     @include('feature')

                     

            <script>
                document.addEventListener("DOMContentLoaded", function() {
            // Get the modal element
            var modal = document.getElementById('myModal');

            // Function to stop the video
            var stopVideo = function() {
                var iframe = document.getElementById('youtubeVideo');
                var iframeSrc = iframe.src;
                iframe.src = iframeSrc; // Resetting the src attribute to its original value stops the video
            };

            // Event listener for closing the modal
            modal.addEventListener('hidden.bs.modal', stopVideo);
            });
                </script>
            <!-- The Modal -->
            <div class="modal" id="myModal">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">

                    <!-- Modal Header -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <iframe id="youtubeVideo" width="100%" height="400" src="https://www.youtube.com/embed/W1aZvxpmG10?si=Lg73OyE8Kz1EgPZo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>

                    </div>
                </div>
            </div>

        </div>
        
    </div>
    <div class="powered-by">
        <a href="https://trelegate.com/" target="_blank"><img src="{{ asset('frontend/assets/img/powered-by-trelegate.png') }}" alt=""></a>
    </div>
</section>
<!-- End homec Hero -->


<section class="homec-features pd-top-120 pd-btm-50 bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Section TItle -->
                <div class="homec-section__head text-center mg-btm-60">
                    <span class="homec-section__badge homec-primary-color homec-section__badge--small m-0">Discover the key features</span>
                    <h2 class="homec-section__title">Smart property owners get<br/> things done with Prroperties</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <a href="javascript:void(0)" class="homec-features__single">
                            <div class="icon-embed-xsmall w-embed">
                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" class="iconify iconify--bx" width="100%" height="100%" viewBox="0 0 200.000000 192.000000" preserveAspectRatio="xMidYMid meet"><g transform="translate(0.000000,192.000000) scale(0.100000,-0.100000)" fill="currentColor">
                            <path d="M870 1910 c-254 -32 -444 -149 -533 -329 -30 -61 -32 -73 -32 -166 0
                            -93 2 -105 32 -165 18 -36 53 -89 78 -118 45 -50 46 -53 35 -86 -26 -80 -113
                            -188 -190 -236 l-35 -22 64 7 c108 11 251 53 351 102 l96 48 59 -13 c81 -17
                            329 -10 410 13 182 50 334 165 403 303 35 71 37 82 37 166 0 78 -4 99 -28 150
                            -58 125 -146 209 -288 276 -128 60 -314 88 -459 70z"/><path d="M1315 719 c-35 -5 -87 -23 -125 -43 -292 -152 -268 -143 -610 -246
                            -166 -51 -202 -76 -185 -129 17 -54 131 -52 393 7 95 21 175 35 178 31 6 -10
                            1 -11 -188 -53 -263 -60 -353 -60 -388 -3 -11 18 -18 39 -15 47 3 11 -41 39
                            -164 103 -92 48 -175 87 -184 87 -20 0 -29 -27 -17 -50 19 -36 158 -154 265
                            -226 181 -120 427 -227 556 -241 75 -8 137 14 242 83 177 118 354 175 478 155
                            l47 -7 72 180 72 181 -24 18 c-36 30 -128 74 -189 90 -75 21 -143 26 -214 16z"/><path d="M1797 606 c-26 -26 -180 -424 -173 -449 3 -13 20 -30 40 -40 47 -22
                            164 -43 175 -31 4 5 43 103 85 217 l78 209 -24 25 c-36 40 -109 83 -139 83
                            -15 0 -34 -6 -42 -14z"/><path d="M220 565 c-7 -9 -11 -17 -9 -19 2 -2 57 -31 122 -66 65 -34 116 -64
                            114 -66 -2 -3 -74 31 -160 76 -162 83 -218 98 -231 63 -4 -9 -3 -20 1 -24 4
                            -4 79 -44 166 -89 152 -79 159 -82 177 -65 11 10 55 30 97 45 l78 27 -90 46
                            c-50 25 -87 46 -82 46 4 1 47 -19 96 -43 87 -44 88 -45 137 -32 l49 13 -73 36
                            c-119 61 -222 79 -222 40 0 -11 -5 -13 -17 -8 -36 15 -107 35 -123 35 -10 0
                            -23 -7 -30 -15z"/></g></svg>
                            </div>
                            <div class="homec-features__content">
                                <h3 class="homec-features__title">On-demand help</h3>
                                <p class="homec-features__text">Expert advice on repairs, design, and remodels as well as access to real-time management tools.</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <a href="javascript:void(0)" class="homec-features__single">
                            <div class="icon-embed-xsmall w-embed">
                                <svg version="1.0" xmlns="http://www.w3.org/2000/svg"  class="iconify iconify--bx" width="100%" height="100%" viewBox="0 0 64.000000 64.000000"  preserveAspectRatio="xMidYMid meet"><g transform="translate(0.000000,64.000000) scale(0.100000,-0.100000)" fill="currentColor"><path d="M84 626 c-18 -14 -18 -16 21 -55 37 -39 38 -42 22 -58 -16 -16 -19 -15 -58 22 -39 39 -41 39 -55 21 -30 -42 -6 -130 47 -169 14 -10 44 -21 66 -24 35 -5 53 -18 136 -102 79 -81 96 -102 101 -136 3 -22 14 -51 24 -65 38 -52 126 -76 168 -46 18 14 18 16 -21 55 -37 39 -38 42 -22 58 16 16 19 15 58 -22 39 -39 41 -39 55 -21 30 42 6 130 -46 168 -14 10 -43 21 -65 24 -34 5 -55 22 -136 101 -84 83 -97 101 -102 136 -3 22 -14 52 -24 66 -39 53 -127 77 -169 47z"/><path d="M487 602 l-37 -38 58 -57 58 -57 37 38 c20 21 37 42 37 48 0 13 -93 104 -106 104 -5 0 -27 -17 -47 -38z"/><path d="M380 495 l-34 -35 57 -57 57 -57 35 34 c19 19 35 39 35 45 0 14 -92 105 -106 105 -5 0 -25 -16 -44 -35z"/><path d="M125 240 l-50 -50 58 -58 57 -57 52 53 53 52 -55 55 c-30 30 -57 55 -60 55 -3 0 -28 -23 -55 -50z"/><path d="M26 84 c-16 -39 -23 -71 -18 -76 8 -8 115 25 134 42 5 3 -14 27 -41 54 l-48 48 -27 -68z"/></g></svg>
                            </div>
                            <div class="homec-features__content">
                                <h3 class="homec-features__title">Know how & expertise</h3>
                                <p class="homec-features__text">Our team has decades of experience in the housing industry. We know how to maximize rental efficiency, streamline processes and more.</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <a href="javascript:void(0)" class="homec-features__single">
                            <div class="icon-embed-xsmall w-embed">
                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" class="iconify iconify--bx" width="100%" height="100%" viewBox="0 0 64.000000 64.000000"  preserveAspectRatio="xMidYMid meet"><g transform="translate(0.000000,64.000000) scale(0.100000,-0.100000)" fill="currentColor"><path d="M265 615 c-14 -13 -25 -29 -25 -35 0 -5 -7 -10 -16 -10 -12 0 -14 -10 -12 -52 l3 -53 105 0 105 0 3 53 c2 42 0 52 -12 52 -9 0 -16 5 -16 10 0 23 -50 60 -80 60 -19 0 -40 -9 -55 -25z m76 -25 c12 -7 19 -21 19 -40 0 -23 -5 -31 -25 -36 -15 -4 -32 -1 -40 6 -20 17 -19 57 3 69 21 13 20 13 43 1z"/><path d="M303 569 c-15 -15 -5 -39 17 -39 22 0 32 24 17 39 -6 6 -14 11 -17 11 -3 0 -11 -5 -17 -11z"/><path d="M95 517 c-3 -7 -4 -125 -3 -262 l3 -250 225 0 225 0 0 260 0 260 -47 3 -47 3 -3 -38 -3 -38 -125 0 -125 0 -3 38 c-3 37 -3 37 -48 37 -27 0 -47 -5 -49 -13z m173 -174 l-3 -68 -60 0 -60 0 -3 68 -3 67 66 0 66 0 -3 -67z m232 57 c0 -6 -38 -10 -94 -10 -53 0 -98 4 -101 10 -4 6 30 10 94 10 61 0 101 -4 101 -10z m0 -40 c0 -6 -38 -10 -94 -10 -53 0 -98 4 -101 10 -4 6 30 10 94 10 61 0 101 -4 101 -10z m0 -40 c0 -6 -38 -10 -94 -10 -53 0 -98 4 -101 10 -4 6 30 10 94 10 61 0 101 -4 101 -10z m0 -40 c0 -6 -38 -10 -94 -10 -53 0 -98 4 -101 10 -4 6 30 10 94 10 61 0 101 -4 101 -10z m-230 -140 l0 -70 -65 0 -65 0 0 70 0 70 65 0 65 0 0 -70z m230 60 c0 -6 -40 -10 -100 -10 -60 0 -100 4 -100 10 0 6 40 10 100 10 60 0 100 -4 100 -10z m0 -40 c0 -6 -40 -10 -100 -10 -60 0 -100 4 -100 10 0 6 40 10 100 10 60 0 100 -4 100 -10z m0 -40 c0 -6 -40 -10 -100 -10 -60 0 -100 4 -100 10 0 6 40 10 100 10 60 0 100 -4 100 -10z m0 -40 c0 -6 -40 -10 -100 -10 -60 0 -100 4 -100 10 0 6 40 10 100 10 60 0 100 -4 100 -10z"/><path d="M150 340 l0 -50 50 0 50 0 0 50 0 50 -50 0 -50 0 0 -50z m90 22 c0 -5 -10 -18 -23 -30 -18 -17 -26 -19 -35 -10 -16 16 -15 29 1 22 8 -3 20 2 27 11 13 16 30 20 30 7z"/><path d="M150 140 l0 -50 50 0 50 0 0 50 0 50 -50 0 -50 0 0 -50z m90 22 c0 -16 -48 -54 -59 -47 -15 9 -14 25 3 25 7 0 19 7 26 15 14 16 30 20 30 7z"/> </g></svg>
                            </div>
                            <div class="homec-features__content">
                                <h3 class="homec-features__title">The most complete platform</h3>
                                <p class="homec-features__text">All-in-one platform at your fingertips. You can manage your property, list with us, rent affordable rooms and houses, etc.</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <a href="javascript:void(0)" class="homec-features__single">
                            <div class="icon-embed-xsmall w-embed">
                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" class="iconify iconify--bx" width="100%" height="100%" viewBox="0 0 64.000000 64.000000" preserveAspectRatio="xMidYMid meet"><g transform="translate(0.000000,64.000000) scale(0.100000,-0.100000)" fill="currentColor"><path d="M306 562 c-5 -15 -15 -22 -34 -22 -26 -1 -26 -1 -7 -16 13 -10 19 -24 17 -41 -4 -24 -2 -26 12 -14 13 11 22 11 42 2 23 -10 25 -10 19 10 -4 13 -1 27 11 40 16 18 16 19 -3 19 -11 0 -27 10 -35 22 l-15 23 -7 -23z"/><path d="M150 516 c0 -15 -7 -29 -15 -32 -21 -9 -19 -24 4 -24 12 0 23 -10 29 -27 9 -27 9 -28 16 -5 5 15 15 22 33 22 21 0 23 2 13 15 -7 8 -10 26 -8 40 6 27 1 30 -22 15 -10 -6 -20 -4 -32 7 -17 15 -18 14 -18 -11z"/><path d="M476 531 c-5 -8 -19 -11 -38 -7 -26 5 -29 4 -23 -15 4 -13 0 -27 -11 -40 -16 -18 -16 -19 10 -19 15 0 29 -7 32 -15 8 -21 21 -19 27 5 3 13 14 20 28 20 20 0 21 1 6 18 -8 9 -17 28 -19 42 -2 18 -5 21 -12 11z"/><path d="M82 432 c-10 -18 -20 -23 -38 -19 -23 4 -24 3 -10 -18 9 -14 11 -27 5 -36 -15 -23 -10 -29 15 -20 17 7 27 5 40 -7 15 -15 16 -14 16 9 0 17 8 30 23 36 l22 11 -27 7 c-19 5 -28 14 -30 33 l-3 27 -13 -23z"/><path d="M534 423 c-3 -12 -15 -25 -26 -29 -19 -6 -19 -6 2 -21 14 -10 20 -22 17 -34 -6 -22 6 -25 22 -5 7 8 21 12 32 9 17 -5 19 -2 14 20 -4 14 -2 28 4 31 19 12 12 24 -9 19 -13 -4 -26 1 -35 13 -14 18 -15 18 -21 -3z"/><path d="M261 394 c-29 -36 -26 -60 9 -96 25 -24 36 -29 58 -24 89 21 78 146 -12 146 -25 0 -40 -7 -55 -26z"/><path d="M250 241 c-37 -19 -64 -52 -75 -88 -6 -23 -6 -23 109 -23 l116 0 0 28 c0 15 3 37 6 49 13 46 -91 69 -156 34z"/><path d="M493 253 c-34 -7 -73 -59 -73 -99 0 -50 46 -98 94 -98 71 0 122 72 97 136 -16 42 -70 70 -118 61z m87 -66 c0 -7 -16 -28 -35 -47 -37 -36 -55 -35 -79 3 -14 22 0 34 23 20 15 -10 23 -7 42 13 24 26 49 32 49 11z"/></g></svg>
                            </div>
                            <div class="homec-features__content">
                                <h3 class="homec-features__title">Access vetted local pros</h3>
                                <p class="homec-features__text">Thousands of nationwide, background-checked, 5-star pros along with Prroperties managers to oversee your projects run smoothly</p>
                            </div>
                        </a>
                    </div>
                </div>
                
                <div class="mg-top-50 d-flex justify-content-center w-100">
                    <a href="/contact" class="homec-btn"><span>Contact an expert</span></a>
                </div>
            </div>
        </div>
        
    </div>
</section>

<section class="homec-bg-cover service-features pd-top-90 pd-btm-120 homec-faq-bg">
    <div class="homec-shape">
        <img class="homec-shape-single homec-shape-1" src="{{ asset('frontend/assets/img/anim-shape-1.svg') }}" alt="icon">
        <img class="homec-shape-single homec-shape-2 serv-shape-2" src="{{ asset('frontend/assets/img/anim-shape-2.svg') }}" alt="icon">
        <img class="homec-shape-single homec-shape-3" src="{{ asset('frontend/assets/img/anim-shape-3.svg') }}" alt="icon">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Section TItle -->
                <div class="homec-section__head text-center mg-btm-60">
                    <span class="homec-section__badge homec-primary-color homec-section__badge--small m-0">Complete Maintenance Automation</span>
                    <h2 class="homec-section__title">Experience the power of unified control</h2>
                </div>
            </div>
        </div>
        <div class="container homec-container-medium">
            <div class="row homec-container-medium__row align-items-center">
            <div class="col-lg-6 col-md-6 col-12 mg-top-30 d-none-tab">
                    <!-- Support Img -->
                    <div class="homec-support-img">
                        <img src="{{ asset('frontend/assets/img/services/maintenance/get-real-time-virtual-assistance.webp') }}" alt="Workers performing interior maintenance in a house">
                    </div>
                    <!-- End Support Img -->
                </div>
                <div class="col-lg-6 col-12 mg-top-30">
                    <div class="homec-section__head">
                        <h2 class="homec-section__title mg-btm-30">Real-time assistance to manage your projects</h2>
                        <p><b>Starting a projects has never been easier</b></p>
                        <ul class="numberul">
                            <li>Tell us about your project</li>
                            <li>We vett and connect you with a licensed pro</li>
                            <li>You rest. We handle planning and payments</li>
                        </ul>
                        <div class="mg-top-30">
                            <!-- <a href="/contact" class="homec-btn"><span>Transform now</span></a> -->
                            <a href="/contact" class="homec-btn"><span>Contact an expert</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="homec-bg-cover service-features pd-top-90 pd-btm-120 homec-featured-property-bg">
    <div class="homec-shape">
        <img class="homec-shape-single homec-shape-1" src="{{ asset('frontend/assets/img/anim-shape-1.svg') }}" alt="icon">
        <img class="homec-shape-single homec-shape-2 serv-shape-2" src="{{ asset('frontend/assets/img/anim-shape-2.svg') }}" alt="icon">
        <img class="homec-shape-single homec-shape-3" src="{{ asset('frontend/assets/img/anim-shape-3.svg') }}" alt="icon">
    </div>
    <div class="container">
        <div class="container homec-container-medium">
            <div class="row homec-container-medium__row align-items-center">
                <div class="col-lg-6 col-12 mg-top-30">
                    <div class="homec-section__head">
                        <h2 class="homec-section__title mg-btm-30">Maintenance in minutes</h2>
                        <p>Managing multiple properties is a breeze with Prroperties, as we offer a streamlined solution for property maintenance, making it easy for both managers and tenants to submit requests with just a click. We take the hassle out of work orders, ensuring that every maintenance task is handled promptly discover our rental solutions and stop worrying about maintenance, management or other issues.</p>
                        <div class="mg-top-30">
                            <!-- <a href="/contact" class="homec-btn"><span>Transform now</span></a> -->
                            <a href="/pricing" class="homec-btn"><span>Create a account</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 mg-top-30 d-none-tab">
                    <!-- Support Img -->
                    <div class="homec-support-img">
                        <img src="{{ asset('frontend/assets/img/services/maintenance/maintanence in minutes.webp') }}" alt="Workers performing interior maintenance in a house">
                    </div>
                    <!-- End Support Img -->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="homec-bg-cover service-features pd-top-90 pd-btm-120 homec-faq-bg d-none">
    <div class="container">
        <div class="container homec-container-medium">
            <div class="row homec-container-medium__row align-items-center">
                <div class="col-lg-6 col-md-6 col-12 mg-top-30 d-none-tab">
                    <!-- Support Img -->
                    <div class="homec-support-img">
                        <img src="{{ asset('frontend/assets/img/services/maintenance/skilled pros.webp') }}" alt="Woman wearing a Trelegate T-shirt with home service icons">
                    </div>
                    <!-- End Support Img -->
                </div>
                <div class="col-lg-6 col-12 mg-top-30">
                    <div class="homec-section__head">
                        <h2 class="homec-section__title mg-btm-30">Skilled pros by Trelegate</h2>
                        <p>Our team of skilled professionals specializes in a wide range of home repairs, from roofs to kitchens and plumbing. We prioritize swift responses to emergency calls, understanding the importance of time in critical situations.</p>
                        <div class="mg-top-30">
                            <a href="https://trelegate.com/" target="_blank" class="homec-btn"><span>Get expert help</span></a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- <p class="power-by">Powered by <a href="https://trelegate.com/" target="_blank">Trelegate</a></p> -->
</section>

<section class="homec-bg-cover service-features pd-top-90 pd-btm-120 homec-faq-bg d-none">
    <div class="homec-shape">
        <img class="homec-shape-single homec-shape-1" src="{{ asset('frontend/assets/img/anim-shape-1.svg') }}" alt="icon">
        <img class="homec-shape-single homec-shape-2" src="{{ asset('frontend/assets/img/anim-shape-2.svg') }}" alt="icon">
        <img class="homec-shape-single homec-shape-3" src="{{ asset('frontend/assets/img/anim-shape-3.svg') }}" alt="icon">
    </div>
    <div class="container">
        <div class="container homec-container-medium">
            <div class="row homec-container-medium__row align-items-center">
                <div class="col-lg-6 col-12 mg-top-30">
                    <div class="homec-section__head">
                        <h2 class="homec-section__title mg-btm-30">Swift solutions</h2>
                        <p>No matter the scale of the maintenance issue, our skilled professionals are ready to tackle it within a matter of hours. We conduct routine home maintenance checks every six months to ensure the health of your property. From minor repairs to major renovations, we have you covered.</p>
                        <div class="mg-top-30">
                            <a href="/pricing" class="homec-btn"><span>Get started</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 mg-top-30 d-none-tab">
                    <!-- Support Img -->
                    <div class="homec-support-img">
                        <img src="{{ asset('frontend/assets/img/services/maintenance/swift solution.webp') }}" alt="Man mowing lawn for property maintenance">
                    </div>
                    <!-- End Support Img -->
                </div>
            </div>
        </div>
    </div>
</section>



<section class="service-wrap-mrg">
    <div class="row align-items-center row-mg-lr-0">
        <div class="col-lg-6 col-12 col-pd-lr-0">
            <section id="hero" class="homec-hero service-hero homec-bg-cover p-relative" style="background-image:url('{{ asset('frontend/assets/img/services/maintenance/swift solution.webp') }}');">
                <div class="service-homec-overlay1"></div>
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-10 offset-md-1 col-12">
                                <div class="homec-hero__inner service-hero_inner">
                                    <!-- Hero Content -->
                                    <div class="homec-hero__content homec-hero__content-mt-0">
                                        <h2 class="homec-hero__title homec-hero__title-nor-pos">Swift solutions</h2>
                                        <p>No matter the scale of the maintenance issue, our skilled professionals are ready to tackle it within a matter of hours. We conduct routine home maintenance checks every six months to ensure the health of your property and to guard your passive income.</p>

                                        <div class="mg-top-40 d-flex justify-content-center w-100">
                                            <a href="/pricing" class="homec-btn"><span>Get started</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        <div class="col-lg-6 col-12 col-pd-lr-0">
        <section id="hero" class="homec-hero service-hero homec-bg-cover p-relative" style="background-image:url('{{ asset('frontend/assets/img/services/fix-bg-1.webp') }}');">
                <div class="service-homec-overlay"></div>
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-10 offset-md-1 col-12">
                                <div class="homec-hero__inner service-hero_inner">
                                    <!-- Hero Content -->
                                    <div class="homec-hero__content homec-hero__content-mt-0">
                                        <h2 class="homec-hero__title homec-hero__title-nor-pos">Home safety assessment</h2>
                                        <p>Our through inspections encompass current condition reviews, risks identification, and maintenance upgrades. <br/>Discover hassle-free property maintenance.</p>

                                        <div class="mg-top-40 d-flex justify-content-center w-100">
                                            <a href="/contact" class="homec-btn homec-btn-service"><span>Get in touch</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
        </div>
    </div>
</section>


<section class="homec-bg-cover pd-top-15 pd-btm-15 mg-top-80 mg-btm-50">
   <div class="homec-shape">
      <div class="homec-shape-single homec-shape-11"><img src="https://quomodothemes.website/homeco/frontend/img/anim-shape-10.svg" alt="#"></div>
      <div class="homec-shape-single homec-shape-13"><img src="https://quomodothemes.website/homeco/frontend/img/anim-shape-10.svg" alt="#"></div>
   </div>
   <div class="container">
      <div class="row">
         <div class="col-12">
            <div class="download-app__middle homec-bg-primary-color">
               <div class="download-app__content">
                  <div class="homec-section__head section-white mg-btm-30">
                     <h2 class="homec-section__title mg-top-30">Get unlimited expert help with your next repair or project for just $99 monthly. Cancel anytime.</h2>
                     <div class="mg-top-30">
                        <a href="/pricing" class="homec-btn homec-btn-service"><span>Signup now!</span></a>
                    </div>
                  </div>
               </div>
               <div class="download-app__img">
                  <img src="{{ asset('frontend/assets/img/services/maintenance/get-unlimited-expert-help.webp') }}" alt="mobile_app">
               </div>
            </div>
         </div>
      </div>
   </div>
</section>


@include('Testimonial')
@include('blogs')

<!-- homec Hero -->
<section id="hero" class="homec-hero service-hero homec-bg-cover p-relative d-none" style="background-image:url('{{ asset('frontend/assets/img/services/fix-bg.webp') }}');">
    <div class="homec-overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-10 offset-md-1 col-12">
                    <div class="homec-hero__inner service-hero_inner">
                        <!-- Hero Content -->
                        <div class="homec-hero__content homec-hero__content-mt-0">
                            <h2 class="homec-hero__title homec-hero__title-nor-pos">Home safety assessment</h2>
                            <p>Our through inspections encompass current condition reviews, risks identified by our property inspectors, and necessary maintenance upgrades for each area examined.</p>

                            <div class="mg-top-40 d-flex justify-content-center w-100">
                                <a href="/contact" class="homec-btn"><span>Get in touch</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- End homec Hero -->
@endsection
