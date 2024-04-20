@extends('saas.frontend.layouts.app')

@section('content')
<!-- homec Hero -->
<section id="hero" class="homec-hero service-hero homec-bg-cover p-relative" style="background-image:url('{{ asset('frontend/assets/img/services/investment/investment-bg.webp') }}');">

    <div class="homec-overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-10 offset-md-1 col-12">
                    <div class="homec-hero__inner service-hero_inner">
                        <!-- Hero Content -->
                        <div class="homec-hero__content homec-hero__content-mt-0">
                            <h1 class="homec-hero__title homec-hero__title-nor-pos">Unlock Passive Income Opportunities</h1>
                            <p>Whether you're a seasoned investor or just starting, our streamlined process ensures that you can tap into the lucrative rental market without the hassle. You invest, and we do the rest, providing you with a hassle-free and income-generating opportunity.</p>
                            <div class="mg-top-40 d-flex justify-content-center w-100">
                                <a href="/contact" class="homec-btn"><span>Invest now</span></a>
                            </div>
                        </div>
                    </div>
                </div>

           @include('feature')

            
        </div>
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
                    <h2 class="homec-section__title">Asset Analysis : Complete care & precision</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <a href="javascript:void(0)" class="homec-features__single">
                            <div class="icon-embed-xsmall w-embed">
                                <svg version="1.0" xmlns="http://www.w3.org/2000/svg"  class="iconify iconify--bx" width="100%" height="100%" viewBox="0 0 64.000000 64.000000" preserveAspectRatio="xMidYMid meet"><g transform="translate(0.000000,64.000000) scale(0.100000,-0.100000)" fill="currentColor"><path d="M66 571 c-28 -29 -28 -58 0 -47 12 4 14 -19 14 -134 0 -83 -4 -140 -10 -140 -16 0 -32 -41 -25 -67 3 -15 18 -30 40 -39 36 -15 44 -28 24 -40 -7 -4 -19 3 -29 16 -17 23 -40 20 -40 -5 0 -8 13 -29 30 -47 l30 -32 30 32 c44 49 37 91 -20 110 -31 11 -38 26 -19 38 7 4 20 -4 30 -17 14 -19 21 -21 30 -12 10 10 10 18 1 38 -6 14 -16 25 -22 25 -6 0 -10 51 -10 140 0 115 2 138 14 134 28 -11 28 18 0 47 -15 16 -31 29 -34 29 -3 0 -19 -13 -34 -29z"/><path d="M506 571 c-28 -29 -27 -58 1 -47 13 5 14 0 8 -31 -22 -120 -117 -223 -255 -280 -63 -25 -74 -50 -21 -45 51 4 145 58 204 117 58 58 91 116 108 192 8 34 16 50 24 46 27 -10 26 20 -1 48 -15 16 -31 29 -34 29 -3 0 -19 -13 -34 -29z"/><path d="M485 310 c-13 -21 11 -31 61 -28 36 2 49 7 49 18 0 19 -99 27 -110 10z"/><path d="M485 250 c-13 -21 11 -31 61 -28 36 2 49 7 49 18 0 19 -99 27 -110 10z"/><path d="M345 190 c-13 -21 11 -31 61 -28 36 2 49 7 49 18 0 19 -99 27 -110 10z"/><path d="M485 190 c-13 -21 11 -31 61 -28 36 2 49 7 49 18 0 19 -99 27 -110 10z"/><path d="M205 130 c-13 -21 11 -31 61 -28 36 2 49 7 49 18 0 19 -99 27 -110 10z"/><path d="M345 130 c-13 -21 11 -31 61 -28 36 2 49 7 49 18 0 19 -99 27 -110 10z"/><path d="M485 130 c-13 -21 11 -31 61 -28 36 2 49 7 49 18 0 19 -99 27 -110 10z"/><path d="M205 70 c-13 -21 11 -31 61 -28 36 2 49 7 49 18 0 19 -99 27 -110 10z"/><path d="M345 70 c-13 -21 11 -31 61 -28 36 2 49 7 49 18 0 19 -99 27 -110 10z"/><path d="M485 70 c-13 -21 11 -31 61 -28 36 2 49 7 49 18 0 19 -99 27 -110 10z"/></g></svg>
                            </div>
                            <div class="homec-features__content">
                                <h3 class="homec-features__title">Massive ROI</h3>
                                <p class="homec-features__text">We aim to optimize occupancy rates, increase rental income, and minimize expenses, all contributing to the goal of helping you realize substantial returns on your investment.</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <a href="javascript:void(0)" class="homec-features__single">
                            <div class="icon-embed-xsmall w-embed">
                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" class="iconify iconify--bx" width="100%" height="100%" viewBox="0 0 64.000000 64.000000"  preserveAspectRatio="xMidYMid meet"><g transform="translate(0.000000,64.000000) scale(0.100000,-0.100000)" fill="currentColor"><path d="M424 543 c-31 -54 -63 -108 -71 -121 -7 -12 -11 -27 -8 -32 10 -16 295 -13 295 3 -1 18 -134 240 -147 244 -6 2 -37 -40 -69 -94z"/><path d="M89 607 c-73 -49 -72 -155 0 -204 84 -57 190 -1 191 100 1 105 -105 162 -191 104z"/><path d="M75 240 l-80 -80 83 -83 82 -82 82 82 83 83 -80 80 c-44 44 -82 80 -85 80 -3 0 -41 -36 -85 -80z"/><path d="M364 277 c-2 -7 -3 -65 -2 -128 l3 -114 125 0 125 0 0 125 0 125 -123 3 c-95 2 -124 0 -128 -11z"/></g></svg>
                            </div>
                            <div class="homec-features__content">
                                <h3 class="homec-features__title">Diversification</h3>
                                <p class="homec-features__text">Diversify your investment portfolio by tapping into the lucrative rental market. Investing with us provides an opportunity to spread risk and explore a new avenue of income generation.</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <a href="javascript:void(0)" class="homec-features__single">
                            <div class="icon-embed-xsmall w-embed">
                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg"  class="iconify iconify--bx" width="100%" height="100%" viewBox="0 0 30.000000 30.000000" preserveAspectRatio="xMidYMid meet"><g transform="translate(0.000000,30.000000) scale(0.100000,-0.100000)" fill="currentColor"><path d="M60 174 c0 -131 0 -132 42 -96 16 13 19 11 37 -32 22 -50 23 -51 52 -36 18 10 18 13 4 47 -21 49 -19 53 15 53 17 0 30 4 30 8 0 9 -166 182 -175 182 -3 0 -5 -57 -5 -126z"/></g></svg>
                            </div>
                            <div class="homec-features__content">
                                <h3 class="homec-features__title">Streamlined</h3>
                                <p class="homec-features__text">Our investment platform streamlines the process, making it accessible to both experienced investors and those new to real estate. We handle the complexities, allowing you to invest effortlessly.</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <a href="javascript:void(0)" class="homec-features__single">
                            <div class="icon-embed-xsmall w-embed">
                                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" class="iconify iconify--bx" width="100%" height="100%" viewBox="0 0 64.000000 64.000000"  preserveAspectRatio="xMidYMid meet"><g transform="translate(0.000000,64.000000) scale(0.100000,-0.100000)" fill="currentColor"><path d="M265 615 c-14 -13 -25 -29 -25 -35 0 -5 -7 -10 -16 -10 -12 0 -14 -10 -12 -52 l3 -53 105 0 105 0 3 53 c2 42 0 52 -12 52 -9 0 -16 5 -16 10 0 23 -50 60 -80 60 -19 0 -40 -9 -55 -25z m76 -25 c12 -7 19 -21 19 -40 0 -23 -5 -31 -25 -36 -15 -4 -32 -1 -40 6 -20 17 -19 57 3 69 21 13 20 13 43 1z"/><path d="M303 569 c-15 -15 -5 -39 17 -39 22 0 32 24 17 39 -6 6 -14 11 -17 11 -3 0 -11 -5 -17 -11z"/><path d="M95 517 c-3 -7 -4 -125 -3 -262 l3 -250 225 0 225 0 0 260 0 260 -47 3 -47 3 -3 -38 -3 -38 -125 0 -125 0 -3 38 c-3 37 -3 37 -48 37 -27 0 -47 -5 -49 -13z m173 -174 l-3 -68 -60 0 -60 0 -3 68 -3 67 66 0 66 0 -3 -67z m232 57 c0 -6 -38 -10 -94 -10 -53 0 -98 4 -101 10 -4 6 30 10 94 10 61 0 101 -4 101 -10z m0 -40 c0 -6 -38 -10 -94 -10 -53 0 -98 4 -101 10 -4 6 30 10 94 10 61 0 101 -4 101 -10z m0 -40 c0 -6 -38 -10 -94 -10 -53 0 -98 4 -101 10 -4 6 30 10 94 10 61 0 101 -4 101 -10z m0 -40 c0 -6 -38 -10 -94 -10 -53 0 -98 4 -101 10 -4 6 30 10 94 10 61 0 101 -4 101 -10z m-230 -140 l0 -70 -65 0 -65 0 0 70 0 70 65 0 65 0 0 -70z m230 60 c0 -6 -40 -10 -100 -10 -60 0 -100 4 -100 10 0 6 40 10 100 10 60 0 100 -4 100 -10z m0 -40 c0 -6 -40 -10 -100 -10 -60 0 -100 4 -100 10 0 6 40 10 100 10 60 0 100 -4 100 -10z m0 -40 c0 -6 -40 -10 -100 -10 -60 0 -100 4 -100 10 0 6 40 10 100 10 60 0 100 -4 100 -10z m0 -40 c0 -6 -40 -10 -100 -10 -60 0 -100 4 -100 10 0 6 40 10 100 10 60 0 100 -4 100 -10z"/><path d="M150 340 l0 -50 50 0 50 0 0 50 0 50 -50 0 -50 0 0 -50z m90 22 c0 -5 -10 -18 -23 -30 -18 -17 -26 -19 -35 -10 -16 16 -15 29 1 22 8 -3 20 2 27 11 13 16 30 20 30 7z"/><path d="M150 140 l0 -50 50 0 50 0 0 50 0 50 -50 0 -50 0 0 -50z m90 22 c0 -16 -48 -54 -59 -47 -15 9 -14 25 3 25 7 0 19 7 26 15 14 16 30 20 30 7z"/> </g></svg>
                            </div>
                            <div class="homec-features__content">
                                <h3 class="homec-features__title">Reporting</h3>
                                <p class="homec-features__text">Stay informed about your investment's performance with transparent reporting and analytics. Access comprehensive data on occupancy rates, rental income, expenses.</p>
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
                    <span class="homec-section__badge homec-primary-color homec-section__badge--small m-0">Invest With The Best</span>
                    <h2 class="homec-section__title">Experience the power of unified control</h2>
                </div>
            </div>
        </div>
        <div class="container homec-container-medium">
            <div class="row homec-container-medium__row align-items-center">
                <div class="col-lg-6 col-12 mg-top-30">
                    <div class="homec-section__head">
                        <h2 class="homec-section__title mg-btm-30">Let your money work</h2>
                        <p>With our investment model, you receive quarterly checks without lifting a finger. We meticulously manage your properties, optimize occupancy rates, and handle all the day-to-day tasks. You'll appreciate the simplicity and reliability of receiving income without the stress of property management.</p>
                        <div class="mg-top-30">
                            <a href="/contact" class="homec-btn"><span>Start earning</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 mg-top-30 d-none-tab">
                    <!-- Support Img -->
                    <div class="homec-support-img">
                        <img src="{{ asset('frontend/assets/img/services/investment/short term rental.webp') }}" alt="Lakeside rental home interior with payment schedule">
                    </div>
                    <!-- End Support Img -->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="homec-bg-cover service-features pd-top-90 pd-btm-120 homec-featured-property-bg">
    <div class="container">
        <div class="container homec-container-medium">
            <div class="row homec-container-medium__row align-items-center">
                <div class="col-lg-6 col-md-6 col-12 mg-top-30 d-none-tab">
                    <!-- Support Img -->
                    <div class="homec-support-img">
                        <img src="{{ asset('frontend/assets/img/services/investment/investment-2.webp') }}" alt="Inviting reception area highlighting investment benefits">
                    </div>
                    <!-- End Support Img -->
                </div>
                <div class="col-lg-6 col-12 mg-top-30">
                    <div class="homec-section__head">
                        <h2 class="homec-section__title mg-btm-30">Invest Smart, Invest Strategically</h2>
                        <p>Investing in rental properties has never been more accessible and strategic. By partnering with us, you gain access to a proven model that combines the benefits of real estate investing with the convenience of passive income. With a low entry point of just $25,000, you can diversify your investment portfolio and secure a reliable income stream.</p>
                        <div class="mg-top-30">
                            <a href="/contact" class="homec-btn"><span>Unlock profit potential</span></a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>

<section class="homec-bg-cover service-features pd-top-90 pd-btm-120 homec-faq-bg">
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
                        <h2 class="homec-section__title1 mg-btm-10">Invest in properties that maximize revenues</h2>
                        <p class="mg-btm-30">A comprehensive technology and easy-to-use tool that provides powerful insights to identify properties that will generate high profits and ROIs. Access a team of experts to make strategic decisions backed by real-time data.</p>
                        <h2 class="homec-section__title1 mg-btm-10">Exclusive deals </h2>
                        <p>Access exclusive, turnkey on and off-market undervalued properties for sale in emerging markets. Our offerings encompass a network of industry experts of realtors and wholesalers</p>
                        <div class="mg-top-30">
                            <a href="/contact" class="homec-btn"><span>Start Investing</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 mg-top-30 d-none-tab">
                    <!-- Support Img -->
                    <div class="homec-support-img">
                        <img src="{{ asset('frontend/assets/img/services/investment/invest-in-properties-maximize-revenues.webp') }}" alt="Modern kitchen with island and pendant lights">
                    </div>
                    <!-- End Support Img -->
                </div>
            </div>
        </div>
    </div>
</section>


<section class="homec-bg-cover service-features pd-top-90 pd-btm-120 homec-featured-property-bg">
    <div class="homec-shape">
        <img class="homec-shape-single homec-shape-1" src="{{ asset('frontend/assets/img/anim-shape-1.svg') }}" alt="icon">
        <img class="homec-shape-single homec-shape-2" src="{{ asset('frontend/assets/img/anim-shape-2.svg') }}" alt="icon">
        <img class="homec-shape-single homec-shape-3" src="{{ asset('frontend/assets/img/anim-shape-3.svg') }}" alt="icon">
    </div>
    <div class="container">
        <div class="container homec-container-medium">
            <div class="row homec-container-medium__row align-items-center">
                <div class="col-lg-6 col-md-6 col-12 mg-top-30 d-none-tab">
                    <!-- Support Img -->
                    <div class="homec-support-img">
                        <img src="{{ asset('frontend/assets/img/services/investment/data-driven.webp') }}" alt="Modern kitchen with island and pendant lights">
                    </div>
                    <!-- End Support Img -->
                </div>
                <div class="col-lg-6 col-12 mg-top-30">
                    <div class="homec-section__head">
                        <h2 class="homec-section__title mg-btm-30">Data-driven market predictability and analysis</h2>
                        <p><b>Predict your earnings</b><br/>
                        Providing investors with up-to-date analytics to make intelligent data-driven decisions. Get complete performance-comparable property reports within seconds. Customize inputs to fit your investment strategy.</p>
                        <div class="mg-top-30">
                            <a href="/contact" class="homec-btn"><span>Invest in properties</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="homec-bg-cover service-features pd-top-90 pd-btm-120 homec-faq-bg">
    <div class="container">
        <div class="container homec-container-medium">
            <div class="row homec-container-medium__row align-items-center">
                <div class="col-lg-6 col-12 mg-top-30">
                    <div class="homec-section__head">
                    <h2 class="homec-section__title mg-btm-30">Invest, list quickly, and manage </h2>
                    <p>Attract interest from prospects directly on Prroperties platforms by listings easily and onboarding new prospects seamlessly.</p>
                    <ul>
                        <li>Fast move-ins, maximized earnings</li>
                        <li>Manage communication, Collect rent</li>
                    </ul>
                        <div class="mg-top-30">
                            <a href="/contact" class="homec-btn"><span>Start hosting</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 mg-top-30 d-none-tab">
                    <!-- Support Img -->
                    <div class="homec-support-img">
                        <img src="{{ asset('frontend/assets/img/services/investment/invest-list-quickly.webp') }}" alt="Inviting reception area highlighting investment benefits">
                    </div>
                    <!-- End Support Img -->
                </div>
                
                
            </div>
        </div>
    </div>
</section>

<section class="homec-bg-cover service-features pd-top-90 pd-btm-120 homec-featured-property-bg">
    <div class="homec-shape">
        <img class="homec-shape-single homec-shape-1" src="{{ asset('frontend/assets/img/anim-shape-1.svg') }}" alt="icon">
        <img class="homec-shape-single homec-shape-2" src="{{ asset('frontend/assets/img/anim-shape-2.svg') }}" alt="icon">
        <img class="homec-shape-single homec-shape-3" src="{{ asset('frontend/assets/img/anim-shape-3.svg') }}" alt="icon">
    </div>
    <div class="container">
        <div class="container homec-container-medium">
            <div class="row homec-container-medium__row align-items-center">
                <div class="col-lg-6 col-md-6 col-12 mg-top-30 d-none-tab">
                    <!-- Support Img -->
                    <div class="homec-support-img">
                        <img src="{{ asset('frontend/assets/img/services/investment/expert-executives.webp') }}" alt="Modern kitchen with island and pendant lights">
                    </div>
                    <!-- End Support Img -->
                </div>    
                <div class="col-lg-6 col-12 mg-top-30">
                    <div class="homec-section__head">
                        <h2 class="homec-section__title mg-btm-30">Expert executives on your side</h2>
                        <p>A dedicated account manager to support you throughout your investment and management process. Prroperties guides you from selecting a property, underwriting, reviewing floor plans, design, and renovations to attracting new renters and managing units seamlessly.</p>
                        <div class="mg-top-30">
                            <a href="/contact" class="homec-btn"><span>Get started</span></a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>

<section class="homec-bg-cover service-features pd-top-20 pd-btm-20 homec-faq-bg">
    <div class="container">
        <div class="container homec-container-medium">
            <div class="row homec-container-medium__row align-items-center">
                <div class="col-lg-6 col-12 mg-top-30">
                    <div class="homec-section__head">
                    <h2 class="homec-section__title mg-btm-30">We’ll let the numbers speak</h2>
                    <p><b>Earn 3x more</b> <br/>Various rental options </p><br/>

                    <p><b>5-star ratings</b> <br/>9 out of ten recommend </p><br/>

                    <p><b>More than 50% of hosts expand</b> <br/>By listing a second property with Prroperties. </p>
                        <div class="mg-top-30">
                            <a href="/contact" class="homec-btn"><span>Contact an expert</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 mg-top-30 d-none-tab">
                    <!-- Support Img -->
                    <div class="homec-support-img">
                        <img src="{{ asset('frontend/assets/img/services/investment/we-will-let-number.webp') }}" alt="Inviting reception area highlighting investment benefits">
                    </div>
                    <!-- End Support Img -->
                </div>
                
                
            </div>
        </div>
    </div>
</section>

@include('Testimonial')
@include('blogs')

<section class="service-wrap-mrg  mg-btm-40">
    <div class="row align-items-center row-mg-lr-0">
        <div class="col-lg-6 col-12 col-pd-lr-0">
            <section id="hero" class="homec-hero service-hero homec-bg-cover p-relative" style="background-image:url('{{ asset('frontend/assets/img/services/investment/investment-3.webp') }}');">
                <div class="service-homec-overlay1"></div>
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-10 offset-md-1 col-12">
                                <div class="homec-hero__inner service-hero_inner">
                                    <!-- Hero Content -->
                                    <div class="homec-hero__content homec-hero__content-mt-0">
                                        <h2 class="homec-hero__title homec-hero__title-nor-pos">Co-own a second luxury home</h2>
                                        <p>We’ve refined the co-ownership system offering second-home buyers an easy way to partially own luxury properties without full ownership burdens via our limited company structure.</p>

                                        <div class="mg-top-40 d-flex justify-content-center w-100">
                                            <a href="/contact" class="homec-btn"><span>Grow with us</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        <div class="col-lg-6 col-12 col-pd-lr-0">
        <section id="hero" class="homec-hero service-hero homec-bg-cover p-relative" style="background-image:url('{{ asset('frontend/assets/img/services/investment/investment-bg1.webp') }}');">
                <div class="service-homec-overlay"></div>
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-10 offset-md-1 col-12">
                                <div class="homec-hero__inner service-hero_inner">
                                    <!-- Hero Content -->
                                    <div class="homec-hero__content homec-hero__content-mt-0">
                                        <h2 class="homec-hero__title homec-hero__title-nor-pos">Multiplying your investments</h2>
                                        <p>Expect your first distribution about 3-6 months from the beginning of your investment. While our team does all the Finding, designing and launching of profitable properties for your portfolio.</p>

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


<section class="homec-bg-cover pd-top-15 pd-btm-15 mg-top-80 mg-btm-50 d-none">
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
                     <h2 class="homec-section__title mg-top-30">Join our hosting community and start earning today</h2>
                     <p class="sec-head__text">Renting your space has never been so easy! Robust technology and support team to manage your properties seamlessly.</p>
                     <div class="mg-top-30">
                        <a href="/hosts" class="homec-btn homec-btn-service"><span>Start hosting</span></a>
                    </div>
                  </div>
               </div>
               <div class="download-app__img">
                  <img src="{{ asset('frontend/assets/img/mobile-app-bg.png') }}" alt="mobile_app">
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<!-- homec Hero -->
<section id="hero" class="homec-hero service-hero homec-bg-cover p-relative d-none" style="background-image:url('{{ asset('frontend/assets/img/services/investment/investment-bg1.webp') }}');">
    <div class="homec-overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-10 offset-md-1 col-12">
                    <div class="homec-hero__inner service-hero_inner">
                        <!-- Hero Content -->
                        <div class="homec-hero__content homec-hero__content-mt-0">
                            <h2 class="homec-hero__title homec-hero__title-nor-pos">Multiplying your investments</h2>
                            <p>Expect your first distribution about 3-6 months from the beginning of your investment. While our team does all the Finding, designing and launching of profitable properties for your portfolio.</p>

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
