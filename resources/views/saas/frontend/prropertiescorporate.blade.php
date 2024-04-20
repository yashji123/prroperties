@extends('saas.frontend.layouts.app')

@section('content')

<!-- homec Hero -->
<section id="hero" class="homec-hero service-hero homec-bg-cover p-relative" style="background-image:url('{{ asset('frontend/assets/img/corporate/banner.webp') }}');">

    <div class="homec-overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-10 offset-md-1 col-12">
                    <div class="homec-hero__inner service-hero_inner">
                        <!-- Hero Content -->
                        <div class="homec-hero__content homec-hero__content-mt-0">
                            <h1 class="homec-hero__title homec-hero__title-nor-pos">Organizations use Prroperties</h1>
                            <p>Join our corporate club to unlock special pricing with our flexible rentals</p>
                            <div class="mg-top-40 d-flex justify-content-center w-100">
                                <a href="/contact" class="homec-btn"><span>Connect with our expert</span></a>
                            </div>
                        </div>
                    </div>
                </div>

           @include('feature')

            
        </div>
    </div>
</section>
<!-- End homec Hero -->

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
                    <h2 class="homec-section__title">Why businesses choose Prroperties</h2>
                </div>
            </div>
        </div>
        <div class="container homec-container-medium">
            <div class="row homec-container-medium__row align-items-center">
                <div class="col-lg-6 col-12 mg-top-30">
                    <div class="homec-section__head">
                        <h2 class="homec-section__title2">Global access</h2>
                        <p class="mg-btm-15">Trendy and comfortable properties in the best of neighborhoods, in proximity to the most popular metropolitan cities.</p>
                        <h2 class="homec-section__title2">Convenience</h2>
                        <p class="mg-btm-15">Full amenities and enhanced comfort with all the necessities to make employees feel at home.</p>
                        <h2 class="homec-section__title2">Technology</h2>
                        <p class="mg-btm-15">From instantly booking stays 24/7 support to intelligent automation and security at all properties.</p>
                        <h2 class="homec-section__title2">Sustainable</h2>
                        <p class="mg-btm-15">100% renewable energy, biodegradable locally sourced furniture, and fixtures to ensure a healthy green stay.</p>
                        <h2 class="homec-section__title2">Consistency</h2>
                        <p>Rest assured, all properties included high-speed wifi and kitchen supplies.</p>
                        <div class="mg-top-30">
                            <a href="/contact" class="homec-btn"><span>Contact an expert</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 mg-top-30 d-none-tab">
                    <!-- Support Img -->
                    <div class="homec-support-img">
                        <img src="{{ asset('frontend/assets/img/corporate/why-businesses-choose.webp') }}" alt="">
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
        <img class="homec-shape-single homec-shape-2 serv-shape-2" src="{{ asset('frontend/assets/img/anim-shape-2.svg') }}" alt="icon">
        <img class="homec-shape-single homec-shape-3" src="{{ asset('frontend/assets/img/anim-shape-3.svg') }}" alt="icon">
    </div>
    <div class="container">
        <div class="container homec-container-medium">
            <div class="row homec-container-medium__row align-items-center">
                <div class="col-lg-6 col-md-6 col-12 mg-top-30 d-none-tab">
                    <!-- Support Img -->
                    <div class="homec-support-img">
                        <img src="{{ asset('frontend/assets/img/corporate/a-new-level-hospitality.webp') }}" alt="">
                    </div>
                    <!-- End Support Img -->
                </div>

                <div class="col-lg-6 col-12 mg-top-30">
                    <div class="homec-section__head">
                        <h2 class="homec-section__title1 mg-btm-20">A new level of hospitality for innovative companies</h2>
                        <p>Prroperties source the perfect alternatives to hotels with decked-out innovative automated technology, locally designed and sourced furniture, and fixtures to match trendy neighborhoods in top metropolitan cities. Properties are always clean and ready to stay, with flexible stays for days, weeks, and months. All properties have a kitchen, laundry, intelligent access, high-speed wifi, furniture, and 24/7 support.</p>
                        <div class="mg-top-30">
                            <a href="/contact" class="homec-btn"><span>Contact an expert</span></a>
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
        <img class="homec-shape-single homec-shape-2 serv-shape-2" src="{{ asset('frontend/assets/img/anim-shape-2.svg') }}" alt="icon">
        <img class="homec-shape-single homec-shape-3" src="{{ asset('frontend/assets/img/anim-shape-3.svg') }}" alt="icon">
    </div>
    <div class="container">
        <div class="container homec-container-medium">
            <div class="row homec-container-medium__row align-items-center">
                <div class="col-lg-6 col-12 mg-top-30">
                    <div class="homec-section__head">
                        <h2 class="homec-section__title">Your employees will love and thank you for it!</h2>
                        <p class="mg-top-30">Prroperties will save you lots of money and time by taking away the stress of searching and booing corporate accommodations for your teams</p>
                        <div class="mg-top-30">
                            <a href="/contact" class="homec-btn"><span>Get in touch</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 mg-top-30 d-none-tab">
                    <!-- Support Img -->
                    <div class="homec-support-img">
                        <img src="{{ asset('frontend/assets/img/corporate/your-employees-love.webp') }}" alt="Rental listing for Porter Ranch property management">
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
        <img class="homec-shape-single homec-shape-2 serv-shape-2" src="{{ asset('frontend/assets/img/anim-shape-2.svg') }}" alt="icon">
        <img class="homec-shape-single homec-shape-3" src="{{ asset('frontend/assets/img/anim-shape-3.svg') }}" alt="icon">
    </div>
    <div class="container">
        <div class="container homec-container-medium">
            <div class="row homec-container-medium__row align-items-center">
                <div class="col-lg-6 col-md-6 col-12 mg-top-30 d-none-tab">
                    <!-- Support Img -->
                    <div class="homec-support-img">
                        <img src="{{ asset('frontend/assets/img/corporate/qualitystay-your-day.webp') }}" alt="Rental listing for Porter Ranch property management">
                    </div>
                    <!-- End Support Img -->
                </div>

                <div class="col-lg-6 col-12 mg-top-30">
                    <div class="homec-section__head">
                        <h2 class="homec-section__title1 mg-btm-20">Quality stay for your day-to-day</h2>
                        <p class="mg-btm-30">Highest of qualities for the proper budgets. Whether you are a digital nomad or a part of a corporate team, Prroperties locations are always classy in the best of neighborhoods to provide an accessible experience to your home away from home.</p>
                        <p>Quality boutique to unique properties with enhanced charmed neighborhoods. Never worry about utilities, wifi, essentials, utensils, appliances, linens, and beds. Prroperties make sure you have ready-to-go places at a fraction of the cost.</p>
                        <div class="mg-top-30">
                            <a href="/contact" class="homec-btn"><span>Get started</span></a>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
</section>

<section class="homec-bg-cover service-features pd-top-90 pd-btm-30 homec-faq-bg">
    <div class="homec-shape">
        <img class="homec-shape-single homec-shape-1" src="{{ asset('frontend/assets/img/anim-shape-1.svg') }}" alt="icon">
        <img class="homec-shape-single homec-shape-2 serv-shape-2" src="{{ asset('frontend/assets/img/anim-shape-2.svg') }}" alt="icon">
        <img class="homec-shape-single homec-shape-3" src="{{ asset('frontend/assets/img/anim-shape-3.svg') }}" alt="icon">
    </div>
    <div class="container">
        <div class="row d-none">
            <div class="col-12">
                <!-- Section TItle -->
                <div class="homec-section__head text-center mg-btm-90">
                    <h2 class="homec-section__title">Why switch to Prroperties</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="container">
                <div class="row prop-corpo">
                    <div class="col-lg-3 col-md-6 col-12 mg-btm-80">
                        <div class="co-rent-single vac-rent-single">
                            <div class="homec-features__content">
                                <div class="vac-rent-icon"><img src="{{ asset('frontend/assets/img/corporate/icons/active.png') }}" alt=""></div>
                                <h3 class="homec-features__title">Active</h3>
                                <p>Properties are close to your favorite gyms</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mg-btm-80">
                        <div class="co-rent-single vac-rent-single">
                            <div class="homec-features__content">
                                <div class="vac-rent-icon"><img src="{{ asset('frontend/assets/img/corporate/icons/clean.png') }}" alt=""></div>
                                <h3 class="homec-features__title">Clean</h3>
                                <p>Professional cleaning and maintenance</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mg-btm-80">
                        <div class="co-rent-single vac-rent-single">
                            <div class="homec-features__content">
                                <div class="vac-rent-icon"><img src="{{ asset('frontend/assets/img/corporate/icons/connected.png') }}" alt=""></div>
                                <h3 class="homec-features__title">Connected</h3>
                                <p>Always have high-speed wifi and TVs</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mg-btm-80">
                        <div class="co-rent-single vac-rent-single">
                            <div class="homec-features__content">
                                <div class="vac-rent-icon"><img src="{{ asset('frontend/assets/img/corporate/icons/cool.png') }}" alt=""></div>
                                <h3 class="homec-features__title">Cool</h3>
                                <p>Local designer of furnishings and fixtures</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mg-btm-80">
                        <div class="co-rent-single vac-rent-single">
                            <div class="homec-features__content">
                                <div class="vac-rent-icon"><img src="{{ asset('frontend/assets/img/corporate/icons/dinner.png') }}" alt=""></div>
                                <h3 class="homec-features__title">Dinner</h3>
                                <p>Full-equipped kitchen with coffee, tea, and essential</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mg-btm-80">
                        <div class="co-rent-single vac-rent-single">
                            <div class="homec-features__content">
                                <div class="vac-rent-icon"><img src="{{ asset('frontend/assets/img/corporate/icons/fresh.png') }}" alt=""></div>
                                <h3 class="homec-features__title">Fresh</h3>
                                <p>Toiletries, fresh towels, linens, and top-of-the-line laundry facilities</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mg-btm-80">
                        <div class="co-rent-single vac-rent-single">
                            <div class="homec-features__content">
                                <div class="vac-rent-icon"><img src="{{ asset('frontend/assets/img/corporate/icons/hassle-free.png') }}" alt=""></div>
                                <h3 class="homec-features__title">Hassle-free</h3>
                                <p>24/7 keyless entry smart home</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mg-btm-80">
                        <div class="co-rent-single vac-rent-single">
                            <div class="homec-features__content">
                                <div class="vac-rent-icon"><img src="{{ asset('frontend/assets/img/corporate/icons/hosted.png') }}" alt=""></div>
                                <h3 class="homec-features__title">Hosted</h3>
                                <p>Dedicated 24/7 support concierge</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mg-btm-80">
                        <div class="co-rent-single vac-rent-single">
                            <div class="homec-features__content">
                                <div class="vac-rent-icon"><img src="{{ asset('frontend/assets/img/corporate/icons/local.png') }}" alt=""></div>
                                <h3 class="homec-features__title">Local</h3>
                                <p>Unique properties in the best of neighborhoods</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mg-btm-80">
                        <div class="co-rent-single vac-rent-single">
                            <div class="homec-features__content">
                                <div class="vac-rent-icon"><img src="{{ asset('frontend/assets/img/corporate/icons/network.png') }}" alt=""></div>
                                <h3 class="homec-features__title">Network</h3>
                                <p>Connect with nearby likeminded people</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mg-btm-80">
                        <div class="co-rent-single vac-rent-single">
                            <div class="homec-features__content">
                                <div class="vac-rent-icon"><img src="{{ asset('frontend/assets/img/corporate/icons/rested.png') }}" alt=""></div>
                                <h3 class="homec-features__title">Rested</h3>
                                <p>Premium beds, pillows and blankets</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mg-btm-80">
                        <div class="co-rent-single vac-rent-single">
                            <div class="homec-features__content">
                                <div class="vac-rent-icon"><img src="{{ asset('frontend/assets/img/corporate/icons/sustainable.png') }}" alt=""></div>
                                <h3 class="homec-features__title">Sustainable</h3>
                                <p>All renewable energy with recycled waste</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
       
    </div>
</section>

@include('Testimonial')
@include('blogs')

@endsection