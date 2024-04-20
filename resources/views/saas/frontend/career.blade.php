@extends('saas.frontend.layouts.app')

@section('content')
<!-- homec Hero -->
<section id="hero" class="homec-hero service-hero homec-bg-cover p-relative" style="background-image:url('{{ asset('frontend/assets/img/career/career main banner.webp') }}');">

    <div class="homec-overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-10 offset-md-1 col-12">
                    <div class="homec-hero__inner service-hero_inner">
                        <!-- Hero Content -->
                        <div class="homec-hero__content homec-hero__content-mt-0">
                            <h1 class="homec-hero__title homec-hero__title-nor-pos">Grow with us </h1>
                            <p>We’re looking for creative, growth-minded people who are passionate about changing property management for the better.</p>
                            <div class="mg-top-40 d-flex justify-content-center w-100">
                                <!--<a href="https://pe.indeed.com/cmp/Algorip-3?from=mobviewjob&tk=1hgj0e7eqh1hc800&fromjk=7c78e9bea0335dde&attributionid=mobvjcmp" class="homec-btn"><span>Apply Now</span></a>-->
                            </div>
                            
                        </div>
                    </div>
                </div>
        </div>
    </div>
</section>
<!-- End homec Hero -->

<section class="homec-features pd-top-120 pd-btm-120 bg-light-gray d-none">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Section TItle -->
                <div class="homec-section__head text-center mg-btm-60">
                    <span class="homec-section__badge homec-primary-color homec-section__badge--small m-0">Prioritizing work life balance</span>
                    <h2 class="homec-section__title">Our Core Values</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <a href="javascript:void(0)" class="homec-features__single">
                            <div class="icon-embed-xsmall w-embed">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--bx" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M10.385 21.788a.997.997 0 0 0 .857.182l8-2A.999.999 0 0 0 20 19V5a1 1 0 0 0-.758-.97l-8-2A1.003 1.003 0 0 0 10 3v1H6a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h4v1c0 .308.142.599.385.788zM12 4.281l6 1.5v12.438l-6 1.5V4.281zM7 18V6h3v12H7z"></path><path fill="currentColor" d="M14.242 13.159c.446-.112.758-.512.758-.971v-.377a1 1 0 1 0-2 .001v.377a1 1 0 0 0 1.242.97z"></path></svg>
                            </div>
                            <div class="homec-features__content">
                                <h3 class="homec-features__title">Unwavering Dedication to Progress</h3>
                                <p class="homec-features__text">Our fundamental work ethic revolves around individuals with a relentless desire to ascend in their careers.</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <a href="javascript:void(0)" class="homec-features__single">
                            <div class="icon-embed-xsmall w-embed">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--bx" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><circle cx="12" cy="4" r="2" fill="currentColor"></circle><path fill="currentColor" d="M12 18h2v-5h2V9c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v4h2v5h2z"></path><path fill="currentColor" d="m18.446 11.386l-.893 1.789C19.108 13.95 20 14.98 20 16c0 1.892-3.285 4-8 4s-8-2.108-8-4c0-1.02.892-2.05 2.446-2.825l-.893-1.789C3.295 12.512 2 14.193 2 16c0 3.364 4.393 6 10 6s10-2.636 10-6c0-1.807-1.295-3.488-3.554-4.614z"></path></svg>
                            </div>
                            <div class="homec-features__content">
                                <h3 class="homec-features__title">Striving for Excellence</h3>
                                <p class="homec-features__text">Executing tasks to the best of your abilities and proactively seeking solutions are indispensable to our workflow.</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <a href="javascript:void(0)" class="homec-features__single">
                            <div class="icon-embed-xsmall w-embed">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--bx" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M16 14h.5c.827 0 1.5-.673 1.5-1.5v-9c0-.827-.673-1.5-1.5-1.5h-13C2.673 2 2 2.673 2 3.5V18l5.333-4H16zm-9.333-2L4 14V4h12v8H6.667z"></path><path fill="currentColor" d="M20.5 8H20v6.001c0 1.1-.893 1.993-1.99 1.999H8v.5c0 .827.673 1.5 1.5 1.5h7.167L22 22V9.5c0-.827-.673-1.5-1.5-1.5z"></path></svg>
                            </div>
                            <div class="homec-features__content">
                                <h3 class="homec-features__title">Challenging the Status Quo</h3>
                                <p class="homec-features__text">Prroperties presents an opportunity to collaborate with an exceptionally cohesive and industry-leading team. Our unwavering dedication to quality service places it as our number one priority. </p>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
        
    </div>
</section>

<section class="homec-bg-cover service-features pd-top-90 pd-btm-120 homec-featured-property-bg career-core">
    <div class="container">
    <div class="row">
            <div class="col-12">
                <!-- Section TItle -->
                <div class="homec-section__head text-center mg-btm-60">
                    <span class="homec-section__badge homec-primary-color homec-section__badge--small m-0">Guiding Principles for Success in Work and Life</span>
                    <h2 class="homec-section__title">Work Ethic and Core Values at Properties</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="container">
                <div class="row text-center">

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="homec-slider-property-slider">
                            <!-- Swiper Card Slider -->
                            <div class="swiper mySwiper career-core-sliderOne loading">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <!-- Single property-->
                                        <div class="homec-property homec-property__card">
                                            <div class="icon-imgs">
                                                <img src="{{ asset('frontend/assets/img/career/icons/innovation.webp') }}" alt="">
                                            </div>
                                            <div class="homec-features__content">
                                            <h3 class="homec-features__title">Innovation</h3>
                                            <p class="homec-features__text">Encouraging creativity and embracing new ideas to improve processes and products.</p>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <!-- Single property-->
                                        <div class="homec-property homec-property__card">
                                            <div class="icon-imgs">
                                                <img src="{{ asset('frontend/assets/img/career/icons/integrity.webp') }}" alt="">
                                            </div>
                                            <div class="homec-features__content">
                                            <h3 class="homec-features__title">Integrity</h3>
                                            <p class="homec-features__text">Upholding honesty and ethical behavior in all actions and decisions.</p>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <!-- Single property-->
                                        <div class="homec-property homec-property__card">
                                            <div class="icon-imgs">
                                                <img src="{{ asset('frontend/assets/img/career/icons/professionalism.webp') }}" alt="">
                                            </div>
                                            <div class="homec-features__content">
                                            <h3 class="homec-features__title">Professionalism</h3>
                                            <p class="homec-features__text">Conducting oneself with respect, courtesy, and a positive attitude.</p>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ENd Swiper Card Slider-->
                            <div class="swiper-pagination swiper-pagination__v2 swiper-pagination__featuredOne"></div>
                        </div>
                    </div>
                    

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="homec-slider-property-slider">
                            <!-- Swiper Card Slider -->
                            <div class="swiper mySwiper career-core-sliderTwo loading">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <!-- Single property-->
                                        <div class="homec-property homec-property__card">
                                            <div class="icon-imgs">
                                                <img src="{{ asset('frontend/assets/img/career/icons/adaptibility.webp') }}" alt="">
                                            </div>
                                            <div class="homec-features__content">
                                            <h3 class="homec-features__title">Adaptability</h3>
                                            <p class="homec-features__text">Being flexible and open to change in a dynamic work environment.</p>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <!-- Single property-->
                                        <div class="homec-property homec-property__card">
                                            <div class="icon-imgs">
                                                <img src="{{ asset('frontend/assets/img/career/icons/respect.webp') }}" alt="">
                                            </div>
                                            <div class="homec-features__content">
                                            <h3 class="homec-features__title">Respect</h3>
                                            <p class="homec-features__text">Treating others with consideration, regardless of differences in opinions or backgrounds.</p>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ENd Swiper Card Slider-->
                            <div class="swiper-pagination swiper-pagination__v2 swiper-pagination__featuredTwo"></div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="homec-slider-property-slider">
                            <!-- Swiper Card Slider -->
                            <div class="swiper mySwiper career-core-sliderThree loading">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <!-- Single property-->
                                        <div class="homec-property homec-property__card">
                                            <div class="icon-imgs">
                                                <img src="{{ asset('frontend/assets/img/career/icons/excellence.webp') }}" alt="">
                                            </div>
                                            <div class="homec-features__content">
                                            <h3 class="homec-features__title">Excellence</h3>
                                            <p class="homec-features__text">Pursuing the highest quality in work standards and outcomes.</p>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <!-- Single property-->
                                        <div class="homec-property homec-property__card">
                                            <div class="icon-imgs">
                                                <img src="{{ asset('frontend/assets/img/career/icons/teamwork.webp') }}" alt="">
                                            </div>
                                            <div class="homec-features__content">
                                            <h3 class="homec-features__title">Teamwork</h3>
                                            <p class="homec-features__text">Collaborating effectively, valuing diverse perspectives, and supporting colleagues.</p>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <!-- Single property-->
                                        <div class="homec-property homec-property__card">
                                            <div class="icon-imgs">
                                                <img src="{{ asset('frontend/assets/img/career/icons/customer-focus.webp') }}" alt="">
                                            </div>
                                            <div class="homec-features__content">
                                            <h3 class="homec-features__title">Customer Focus</h3>
                                            <p class="homec-features__text">Prioritizing customer satisfaction and understanding their needs.</p>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ENd Swiper Card Slider-->
                            <div class="swiper-pagination swiper-pagination__v2 swiper-pagination__featuredThree"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        
    </div>
</section>

<section class="homec-bg-cover service-features pd-top-90 pd-btm-120">
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
                        <h2 class="homec-section__title mg-btm-30">Why join Prrpoperties?</h2>
                        <p>We're a collective of innovators, visionaries, and craftsmen from diverse backgrounds, all connected by one shared ambition: to empower a greater number of individuals to realize their aspirations providing flexible rentals. Whether your expertise lies in real estate, technology, customer service, finance, or any field that touches the cornerstone of living spaces, if your passion is to engage in impactful work alongside a team that values excellence and is invested in your overall wellness—mental, physical, and spiritual—you've found your community.</p>
                     
                        <div class="mg-top-30 d-flex">
                            <!-- <a href="" class="homec-btn"><span>Apply Now</span></a> -->
                            
                       <a  class="homec-btn" id="openPopup"><span>Explore openings</span></a>



<script>
     document.getElementById('openPopup').addEventListener('click', function() {
        document.getElementById('popup').style.display = 'block';
        document.getElementById('overlay').style.display = 'block';
    });

    document.getElementById('closePopup').addEventListener('click', function() {
        document.getElementById('popup').style.display = 'none';
        document.getElementById('overlay').style.display = 'none';
    });
</script>

<div class="overlay" id="overlay"></div>

<div class="popup" id="popup">
    <div class="popup-header">
        <h5>Join our team:</h5>
        <button class="close-btn  " id="closePopup">&times;</button>
    </div>
    <div class="button-group">
        <a href="https://www.linkedin.com/company/prroperties" target="_blank">
            <button class="btn btn-linkedin btn-lg"><i class="fa-brands fa-linkedin"></i> LinkedIn</button>
        </a>
        <a href="https://pe.indeed.com/cmp/Algorip-3?from=mobviewjob&tk=1hgj0e7eqh1hc800&fromjk=7c78e9bea0335dde&attributionid=mobvjcmp" target="_blank">
            <button class="btn btn-linkedin btn-lg"><i class="fa-solid fa-magnifying-glass"></i> Indeed</button>
        </a>
    </div>
</div>
<style>
.popup {
    display: none;
    position: fixed;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    border: 1px solid #ddd;
    background-color: white;
    padding: 32px;
    z-index: 1000;
    width: 398px; /* Adjust as needed */
        border-radius: 15px;
}
.overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.7);
    z-index: 999;
}
.button-group {
    display: flex;
    justify-content: center;
    margin-bottom: 20px;
    
}
.popup-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}
.popup-header h3 {
    margin: 0;
}
.popup-header .close-btn {
    cursor: pointer;
    border: none;
    background: none;
    font-size: 24px;
}
.btn-linkedin {
    background: #2a6ed5;
    border-radius: 0;
    color: #fff;
    border-width: 1px;
    border-style: solid;
    border-color: #084461;
    margin-right: 10px; /* Add right margin to each button */
    border-radius: 2px;
}
.btn-linkedin:link, .btn-linkedin:visited {
    color: #fff;
}
.btn-linkedin:active, .btn-linkedin:hover {
    background: #084461;
    color: #fff;
}
</style>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 mg-top-30 d-none-tab">
                    <!-- Support Img -->
                    <div class="homec-support-img">
                        <img src="{{ asset('frontend/assets/img/career/4.webp') }}" alt="Professionals handshaking in a corporate environment">
                    </div>
                    <!-- End Support Img -->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="homec-bg-cover service-features pd-top-90 pd-btm-120 homec-featured-property-bg d-none">
    <div class="container">
        <div class="container homec-container-medium">
            <div class="row homec-container-medium__row align-items-center">
                <div class="col-lg-6 col-md-6 col-12 mg-top-30 d-none-tab">
                    <!-- Support Img -->
                    <div class="homec-support-img">
                        <img src="{{ asset('frontend/assets/img/career/img-2.webp') }}" alt="Business presentation in Prroperties office">
                    </div>
                    <!-- End Support Img -->
                </div>
                <div class="col-lg-6 col-12 mg-top-30">
                    <img src="{{ asset('frontend/assets/img/linkedin-white.png') }}" alt="">
                    <div class="homec-section__head">
                        <h2 class="homec-section__title mg-btm-30">Fostering a Collaborative Work Environment</h2>
                        <p>We assess your performance based on your proactive contributions and your readiness to support your colleagues.</p>
                        <div class="mg-top-30">
                            <a href="https://pe.indeed.com/cmp/Algorip-3?from=mobviewjob&tk=1hgj0e7eqh1hc800&fromjk=7c78e9bea0335dde&attributionid=mobvjcmp" class="homec-btn"><span>Join Our Team</span></a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>

<section class="homec-bg-cover service-features pd-top-90 pd-btm-120 d-none">
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
                        <h2 class="homec-section__title mg-btm-30">Enjoying the Perks</h2>
                        <p>At Prroperties, our exceptional team leaders are always available to assist you with your tasks. We arrange weekly training sessions and host team activities to boost morale. In our office, you'll find a selection of healthy snacks, refreshments, and an abundance of coffee to keep you fueled and energized.</p>
                        <div class="mg-top-30">
                            <a href="" class="homec-btn"><span>View open jobs</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 mg-top-30 d-none-tab">
                    <!-- Support Img -->
                    <div class="homec-support-img">
                        <img src="{{ asset('frontend/assets/img/career/img-3.webp') }}" alt="Employees working at Prroperties office desks">
                    </div>
                    <!-- End Support Img -->
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="row align-items-center row-mg-lr-0">
        <div class="col-lg-6 col-12 col-pd-lr-0">
            <section id="hero" class="homec-hero service-hero homec-bg-cover p-relative" style="background-image:url('{{ asset('frontend/assets/img/career/img-2.webp') }}');">
                <div class="service-homec-overlay1"></div>
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-10 offset-md-1 col-12">
                            
                                <div class="homec-hero__inner service-hero_inner flex-direction">
                                    <!-- Hero Content -->
                                    <a href="https://www.linkedin.com/company/prroperties" target="_blank"><img class="mb-4" src="{{ asset('frontend/assets/img/linkedin-white.png') }}" alt=""></a>
                                    <div class="homec-hero__content homec-hero__content-mt-0">
                                        <h2 class="homec-hero__title homec-hero__title-nor-pos">Fostering a Collaborative Work Environment</h2>
                                        <p>We assess your performance based on your proactive contributions and your readiness to support your colleagues.</p>

                                        <div class="mg-top-40 d-flex justify-content-center w-100">
                                            <a href="https://www.linkedin.com/company/prroperties" target="_blank" class="homec-btn"><span>Join Our Team</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        <div class="col-lg-6 col-12 col-pd-lr-0">
        <section id="hero" class="homec-hero service-hero homec-bg-cover p-relative" style="background-image:url('{{ asset('frontend/assets/img/career/img-3.webp') }}');">
                <div class="service-homec-overlay"></div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-10 offset-md-1 col-12">
                            <div class="homec-hero__inner service-hero_inner flex-direction">
                                <!-- Hero Content -->
                                <a href="https://pe.indeed.com/cmp/Algorip-3?from=mobviewjob&tk=1hgj0e7eqh1hc800&fromjk=7c78e9bea0335dde&attributionid=mobvjcmp" target="_blank"><img class="mb-4" src="{{ asset('frontend/assets/img/indeed-white.png') }}" alt=""></a>
                                <div class="homec-hero__content homec-hero__content-mt-0">
                                    <h2 class="homec-hero__title homec-hero__title-nor-pos">Your Gateway to a Fulfilling Career Journey.</h2>
                                    <p>At Prroperties, our exceptional team leaders are always available to assist you with your tasks. We arrange weekly training sessions and host team activities to boost morale. </p>
                                    <div class="mg-top-40 d-flex justify-content-center w-100">
                                        <a href="https://pe.indeed.com/cmp/Algorip-3?from=mobviewjob&tk=1hgj0e7eqh1hc800&fromjk=7c78e9bea0335dde&attributionid=mobvjcmp" target="_blank" class="homec-btn homec-btn-service"><span>View open jobs</span></a>
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

<section class="homec-bg-cover service-features pd-top-90 pd-btm-120 homec-featured-property-bg d-none">
    <div class="container">
        <div class="container homec-container-medium">
            <div class="row homec-container-medium__row align-items-center">
                <div class="col-lg-6 col-md-6 col-12 mg-top-30 d-none-tab">
                    <!-- Support Img -->
                    <div class="homec-support-img">
                        <img src="{{ asset('frontend/assets/img/services/management/5.webp') }}" alt="">
                    </div>
                    <!-- End Support Img -->
                </div>
                <div class="col-lg-6 col-12 mg-top-30">
                    <div class="homec-section__head">
                        <h2 class="homec-section__title mg-btm-30">Embracing the Benefits</h2>
                        <p>Our offices worldwide offer full-time employees an array of benefits, including top-tier healthcare packages covering dental, vision, and general healthcare. We ensure a steady and consistent workflow, resulting in a reliable income.</p>
                        <div class="mg-top-30">
                            <a href="/contact" class="homec-btn"><span>Explore more</span></a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>

<section class="homec-bg-cover service-features pd-top-90 pd-btm-120 d-none">
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
                        <h2 class="homec-section__title mg-btm-30">Open and Effective Communication</h2>
                        <p>At Prroperties, we cultivate a nurturing environment for our global teams and departments. We prioritize open and constructive feedback to ensure that everyone remains aligned and informed at all times. We're dedicated to creating a comfortable work atmosphere that minimizes distractions, allowing our employees to focus and excel. </p>
                        <div class="mg-top-30 d-flex">
                            <!-- <a href="" class="homec-btn"><span>Get Started</span></a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 mg-top-30 d-none-tab">
                    <!-- Support Img -->
                    <div class="homec-support-img">
                        <img src="{{ asset('frontend/assets/img/services/management/4.webp') }}" alt="">
                    </div>
                    <!-- End Support Img -->
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
