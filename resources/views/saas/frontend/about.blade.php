@extends('saas.frontend.layouts.app')

@section('content')
<section class="homec-about pd-top-120 pd-btm-120">
    <div class="homec-shape">
        <div class="homec-shape-single homec-shape-1"><img src="{{ asset('frontend/assets/img/anim-shape-1.svg') }}" alt="shape"></div>
        <div class="homec-shape-single homec-shape-2"><img src="{{ asset('frontend/assets/img/anim-shape-2.svg') }}" alt="shape"></div>
        <div class="homec-shape-single homec-shape-3"><img src="{{ asset('frontend/assets/img/anim-shape-3.svg') }}"  alt="shape"></div>
        <div class="homec-shape-single homec-shape-4"><img src="{{ asset('frontend/assets/img/anim-shape-1.svg') }}"  alt="shape"></div>
        <div class="homec-shape-single homec-shape-5"><img src="{{ asset('frontend/assets/img/anim-shape-2.svg') }}"  alt="shape"></div>
        <div class="homec-shape-single homec-shape-6"><img src="{{ asset('frontend/assets/img/anim-shape-3.svg') }}"  alt="shape"></div>
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 offset-lg-0 col-md-10 offset-md-1 col-12 mg-top-30">
                <!-- Homec Image Group -->
                <div class="homec-image-group homec-image-group--v2">
                    <div class="homec-image-group__main">
                        <img src="{{ asset('frontend/assets/img/about.png') }}" alt="Renesent building overlooking suburban streetscape">
                        <div class="homec-experiences">
                            <h4 class="homec-experiences__title about-head">20 Years<sup>+</sup> <span>Experience</span></h4>
                        </div>
                    </div>
                    <!-- <div class="homec-ceo-quote">
                        <div class="homec-ceo-quote__img">
                            <div class="homec-overlay"></div>
                            <img src="{{ asset('frontend/assets/img/author-image.webp') }}" alt="author_image">
                        </div>
                        <h4 class="homec-ceo-quote__title">Wade De Warren<span>Homeco Founder</span></h4>
                    </div> -->
                </div>
                <!-- End Homec Image Group -->
            </div>
            <div class="col-lg-6 col-12 mg-top-30">
                <div class="homec-about-content homec-about-content--v2">
                    <!-- Section Title -->
                    <div class="homec-section__head">
                        <div class="homec-section__shape">
                            <!-- <span class="homec-section__badge homec-section__badge--shape " data-aos="fade-down" data-aos-delay="300">About Homeco</span> -->
                        </div>
                        <h1 class="homec-section__title">Driving innovation in <a href="/management">Property Management</a></h1>
                    </div>
                    <div class="homec-about-content__inner mg-top-20 " data-aos="fade-in" data-aos-delay="500">
                        <p class="homec-about-content__text">At Prroperties, we are passionate about simplifying property rentals and ownership for, individuals and enterprise by curating ready to live and work properties. Our dedicated and experienced teams are made of technology experts, and real estate professionals that see a need for a modern, efficient, and transparent way to rent and manage properties.</p>
                        <p class="homec-about-content__text mg-top-20">
                        With years of experience in the industry, we understand the challenges that renters and landlords face. We are committed to revolutionizing the real estate landscape by offering innovative solutions and exceptional service.</p>
                        <div class=" homec-focus-content--v2 mg-top-20 d-none">
                            <p>Our dedicated team of property management enthusiasts, technology experts, and real estate professionals see a need for a modern, efficient, and transparent way to manage properties. With years of experience in the industry, we understand the challenges that landlords and property managers face. We are committed to revolutionizing the property management landscape by offering innovative solutions and exceptional service.</p>
                        </div>
                        <!-- <div class="homec-dflex-space">
                            <div class="homec-funfact__single homec-funfact__single--v2">
                                <div class="homec-funfact__icon">
                                    <img src="{{ asset('frontend/assets/img/about-us-item-one.svg') }}" alt="icon">
                                </div>
                                <h3 class="homec-funfact__number"><span class="counter">90</span>k+ Agents</h3>
                                <p class="homec-funfact__text">believe in our service &amp; Care</p>
                            </div>
                            <div class="homec-funfact__single homec-funfact__single--v2">
                                <div class="homec-funfact__icon">
                                    <img src="{{ asset('frontend/assets/img/about-us-item-two.svg') }}" alt="icon">
                                </div>
                                <h3 class="homec-funfact__number"><span class="counter">90</span>k+ Agents</h3>
                                <p class="homec-funfact__text">believe in our service &amp; Care</p>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="homec-about homec-bg-third-color pd-top-90 pd-btm-120">
    <div class="homec-shape">
        <div class="homec-shape-single homec-shape-1"><img src="{{ asset('frontend/assets/img/anim-shape-1.svg') }}" alt="shape"></div>
        <div class="homec-shape-single homec-shape-2"><img src="{{ asset('frontend/assets/img/anim-shape-2.svg') }}" alt="shape"></div>
        <div class="homec-shape-single homec-shape-3"><img src="{{ asset('frontend/assets/img/anim-shape-3.svg') }}"  alt="shape"></div>
        <div class="homec-shape-single homec-shape-4"><img src="{{ asset('frontend/assets/img/anim-shape-1.svg') }}"  alt="shape"></div>
        <div class="homec-shape-single homec-shape-5"><img src="{{ asset('frontend/assets/img/anim-shape-2.svg') }}"  alt="shape"></div>
        <div class="homec-shape-single homec-shape-6"><img src="{{ asset('frontend/assets/img/anim-shape-3.svg') }}"  alt="shape"></div>
    </div>
    <div class="container">
        <div class="row justify-content-space our-vision-wrap">
            <div class="our-vision-card">
                <div class="icon mission"><img src="{{ asset('frontend/assets/img/mission.webp') }}" alt=""></div>
                <h3>Our Mission</h3>
                <p class="text">Our mission is to provide reliable and empowering experience for renters to become real estate investors to ultimately live a free and balanced life</p>
            </div>
            <div class="our-vision-card">
                <div class="icon vision"><img src="{{ asset('frontend/assets/img/vision.webp') }}" alt=""></div>
                <h3>Our Vision</h3>
                <p class="text">To be the premier place for professionals and corporations to rent ready to live and work properties while offering suppliers advanced low cost platform to invest and manage their real estate</p>
            </div>
            <div class="our-vision-card">
                <div class="icon values"><img src="{{ asset('frontend/assets/img/values.webp') }}" alt=""></div>
                <h3>Our Values</h3>
                <p class="text">Prroperties is anchored in a set of core values that drive our commitment to transforming the real estate industry. Efficiency lies at the heart of our solutions, empowering property renters, owners and managers to streamline operations, save time, and focus on growth and a balanced life. We prioritize seamless communication, fostering better connections between stakeholders for smoother interactions and enhanced satisfaction.</p>
            </div>
        </div>
    </div>

</section>

<section class="homec-funfacts pd-btm-100">
    <img src="{{ asset('frontend/assets/img/counter-bg.jpg') }}" alt="bg_image">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="homec-funfact homec-border homec-funfact--bg">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-12">
                            <div class="homec-funfact__inner">
                                <div class="homec-funfact__content " data-aos="fade-up" data-aos-delay="300">
                                    <h2 class="homec-section__title mg-btm-10">Experience & Expertise</h2>
                                    <!-- <p>There are many variations of passages of Lorem Ipsum available, majority have suffered.</p> -->
                                </div>
                                <!-- Homec List -->
                                <ul class="homec-iconic-list list-none mg-top-30 " data-aos="fade-up" data-aos-delay="400">
                                    <li><i class="fa-solid fa-check"></i>Thousands of properties managed</li>
                                    <li><i class="fa-solid fa-check"></i>Nationwide satisfied customers</li>
                                    <li><i class="fa-solid fa-check"></i>20+ years of real estate experience</li>
                                </ul>
                                <!-- Homec Button -->
                                <div class="homec-btn__main mg-top-40" data-aos="fade-up" data-aos-delay="500">
                                    <a href="/contact" class="homec-btn"><span>Contact Us</span></a>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-7 col-12">
                            <div class="homec-funfacts">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12 d-none" data-aos="fade-in" data-aos-delay="400">
                                        <!-- FunFacts Single -->
                                        <div class="homec-funfact__single homec-border">
                                            <div class="homec-funfact__icon">
                                                <img src="{{ asset('frontend/assets/img/counter/counter-1.svg') }}" alt="icon">
                                            </div>
                                            <h3 class="homec-funfact__number"><span class="counter">1000</span><sup class="plus-funfact">+</sup></h3>
                                            <p class="homec-funfact__text">Properties managed</p>
                                        </div>
                                        <!-- End FunFacts Single -->
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12"  data-aos="fade-in" data-aos-delay="400">
                                        <!-- FunFacts Single -->
                                        <div class="homec-funfact__single homec-border">
                                            <div class="homec-funfact__icon">
                                                <img src="{{ asset('frontend/assets/img/counter/counter-1.svg') }}" alt="icon">
                                            </div>
                                            <h3 class="homec-funfact__number"><span class="counter">100</span><sup class="plus-funfact">+</sup></h3>
                                            <p class="homec-funfact__text">Daily bookings</p>
                                        </div>
                                        <!-- End FunFacts Single -->
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12"  data-aos="fade-in" data-aos-delay="400">
                                        <!-- FunFacts Single -->
                                        <div class="homec-funfact__single homec-border">
                                            <div class="homec-funfact__icon">
                                                <img src="{{ asset('frontend/assets/img/counter/counter-2.svg') }}" alt="icon">
                                            </div>
                                            <h3 class="homec-funfact__number"><span class="counter">1000</span><sup class="plus-funfact">+</sup></h3>
                                            <p class="homec-funfact__text">Trusted pros</p>
                                        </div>
                                        <!-- End FunFacts Single -->
                                    </div>
                                    
                                    <div class="col-lg-6 col-md-6 col-12 d-none" data-aos="fade-in" data-aos-delay="400">
                                        <!-- FunFacts Single -->
                                        <div class="homec-funfact__single homec-border">
                                            <div class="homec-funfact__icon">
                                                <img src="{{ asset('frontend/assets/img/counter/counter-2.svg') }}" alt="icon">
                                            </div>
                                            <h3 class="homec-funfact__number"><span class="counter">151</span></h3>
                                            <p class="homec-funfact__text">Active Clients</p>
                                        </div>
                                        <!-- End FunFacts Single -->
                                    </div>
                                    
                                    <div class="col-lg-6 col-md-6 col-12"  data-aos="fade-in" data-aos-delay="400">
                                        <!-- FunFacts Single -->
                                        <div class="homec-funfact__single homec-border">
                                            <div class="homec-funfact__icon">
                                                <img width="40" src="{{ asset('frontend/assets/img/counter/support.svg') }}" alt="icon">
                                            </div>
                                            <h3 class="homec-funfact__number"><span class="">24/7</span></h3>
                                            <p class="homec-funfact__text">Support</p>
                                        </div>
                                        <!-- End FunFacts Single -->
                                    </div>
                                    
                                    <div class="col-lg-6 col-md-6 col-12 " data-aos="fade-in" data-aos-delay="400">
                                        <!-- FunFacts Single -->
                                        <div class="homec-funfact__single homec-border">
                                            <div class="homec-funfact__icon">
                                                <img src="{{ asset('frontend/assets/img/counter/counter-4.svg') }}" alt="icon">
                                            </div>
                                            <h3 class="homec-funfact__number"><span class="counter">20</span><sup class="plus-funfact">+</sup></h3>
                                            <p class="homec-funfact__text">Years of experience</p>
                                        </div>
                                        <!-- End FunFacts Single -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="homec-about homec-bg-third-color pd-top-80 pd-btm-120 mg-btm-40">
    <div class="homec-shape">
        <div class="homec-shape-single homec-shape-1"><img src="{{ asset('frontend/assets/img/anim-shape-1.svg') }}" alt="shape"></div>
        <div class="homec-shape-single homec-shape-2"><img src="{{ asset('frontend/assets/img/anim-shape-2.svg') }}" alt="shape"></div>
        <div class="homec-shape-single homec-shape-3"><img src="{{ asset('frontend/assets/img/anim-shape-3.svg') }}"  alt="shape"></div>
        <div class="homec-shape-single homec-shape-4"><img src="{{ asset('frontend/assets/img/anim-shape-1.svg') }}"  alt="shape"></div>
        <div class="homec-shape-single homec-shape-5"><img src="{{ asset('frontend/assets/img/anim-shape-2.svg') }}"  alt="shape"></div>
        <div class="homec-shape-single homec-shape-6"><img src="{{ asset('frontend/assets/img/anim-shape-3.svg') }}"  alt="shape"></div>
    </div>
    <div class="container">
        <div class="row align-items-center">
            
            <div class="col-lg-5 col-12 mg-top-30">
                <div class="homec-about-content homec-about-content--v2">
                    <!-- Section Title -->
                    <div class="homec-section__head">
                        <div class="homec-section__shape">
                        </div>
                        <h2 class="homec-section__title">Meet the Team</h2>
                    </div>
                    <div class="homec-about-content__inner mg-top-20">
                        <p class="homec-about-content__text">At Properties, our team is a blend of diverse talents and perspectives, united by a passion for innovation and excellence. Find the best work environment and team work with us. Meet the minds behind our success:</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 offset-lg-0 col-md-10 offset-md-1 col-12 mg-top-30">
                <!-- Homec Image Group -->
                <div class="h__partners">
                    <div class="h__partners-swiper1">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="{{ asset('frontend/assets/img/team/diego.webp') }}" alt="Team member Diego at Prroperties with orange backdrop"></div>
                            <div class="swiper-slide"><img src="{{ asset('frontend/assets/img/team/renzo.webp') }}" alt="Prroperties team member Renzo"></div>
                            <div class="swiper-slide"><img src="{{ asset('frontend/assets/img/team/nick.webp') }}" alt="Prroperties team member Nick with coral background"></div>
                            <div class="swiper-slide"><img src="{{ asset('frontend/assets/img/team/kate.webp') }}" alt="Prroperties team member Kate on purple background"></div>
                            <div class="swiper-slide"><img src="{{ asset('frontend/assets/img/team/tom.webp') }}" alt="Team member Tom at Prroperties against purple background"></div>
                        </div>
                    </div>
                </div>
                <!-- End Homec Image Group -->
            </div>
        </div>
    </div>
</section>


@endsection
