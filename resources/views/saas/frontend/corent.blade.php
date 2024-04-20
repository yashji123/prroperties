@extends('saas.frontend.layouts.app')

@section('content')

<!-- homec Hero -->
<section id="hero" class="homec-hero service-hero homec-bg-cover p-relative" style="background-image:url('{{ asset('frontend/assets/img/co-rent/banner.webp') }}');">

    <div class="homec-overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-10 offset-md-1 col-12">
                    <div class="homec-hero__inner service-hero_inner">
                        <!-- Hero Content -->
                        <div class="homec-hero__content homec-hero__content-mt-0">
                            <h1 class="homec-hero__title homec-hero__title-nor-pos">Rent a private space and<br/> move in quick</h1>
                            <div class="bann-flex-row">
                                <ul>
                                    <li>
                                        <div class="flex-icons"><img src="{{ asset('frontend/assets/img/trust-white.svg') }}" alt="mobile_app"></div>
                                        <div class="flex-text">Flexible stay</div>
                                    </li>
                                    <li>
                                        <div class="flex-icons"><img src="{{ asset('frontend/assets/img/safety-white.svg') }}" alt="mobile_app"></div>
                                        <div class="flex-text">Background checked renters</div>
                                    </li>
                                    <li>
                                        <div class="flex-icons"><img src="{{ asset('frontend/assets/img/fast-move.svg') }}" alt="mobile_app"></div>
                                        <div class="flex-text">Move-in quickly</div>
                                    </li>
                                </ul>
                            </div>

                            <div class="mg-top-40 d-flex justify-content-center w-100 d-none">
                                <a href="/hosts" class="homec-btn"><span>Start hosting</span></a>
                            </div>
                        </div>
                    </div>
                </div>

           @include('feature')

            
        </div>
    </div>
</section>
<!-- End homec Hero -->


<section class="homec-features pd-top-120 pd-btm-120 bg-light-gray">
    <div class="container">
        <div class="row d-none">
            <div class="col-12">
                <!-- Section TItle -->
                <div class="homec-section__head text-center mg-btm-60">
                    <span class="homec-section__badge homec-primary-color homec-section__badge--small m-0">Discover the key features</span>
                    <h2 class="homec-section__title">Smart property owners get things done with Prroperties</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="co-rent-single">
                            <div class="homec-features__content">
                                <div class="co-rent-icon mg-btm-20"><img src="{{ asset('frontend/assets/img/co-rent/save-money.png') }}" alt=""></div>
                                <h3 class="homec-features__title mg-btm-20 d-flex">Build credit & <div class="home-head-dash">save money</div></h3>
                                <ul>
                                    <li>
                                        <div class="co-rent-icon cus-co-rent"><img src="{{ asset('frontend/assets/img/coin.svg') }}" alt=""></div>
                                        <div class="co-rent-text">Weekly payments. No hidden fees</div>
                                    </li>
                                    <li>
                                        <div class="co-rent-icon cus-co-rent"><img src="{{ asset('frontend/assets/img/credit-card.svg') }}" alt=""></div>
                                        <div class="co-rent-text">Your credit improves with co-renting</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="co-rent-single">
                            <div class="homec-features__content">
                                <div class="co-rent-icon mg-btm-20"><img src="{{ asset('frontend/assets/img/co-rent/trustworthiness.png') }}" alt=""></div>
                                <h3 class="homec-features__title  mg-btm-20 d-flex"><div class="home-head-dash">Trustworthiness</div> guarantee</h3>
                                <ul>
                                    <li>
                                        <div class="co-rent-icon cus-co-rent"><img src="{{ asset('frontend/assets/img/badge-check.svg') }}" alt=""></div>
                                        <div class="co-rent-text">All renters are background checked Easily communicate with renters</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="co-rent-single">
                            <div class="homec-features__content">
                                <div class="co-rent-icon mg-btm-20"><img src="{{ asset('frontend/assets/img/co-rent/move-in.png') }}" alt=""></div>
                                <h3 class="homec-features__title  mg-btm-20 d-flex"><div class="home-head-dash">Seamless move-ins</div></h3>
                                <ul>
                                    <li>
                                        <div class="co-rent-icon cus-co-rent"><img src="{{ asset('frontend/assets/img/verified.svg') }}" alt=""></div>
                                        <div class="co-rent-text">Quick approvals 24 hour move-ins</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        
    </div>
</section>

<section class="homec-bg-cover service-features pd-top-90 pd-btm-120 homec-faq-bg d-none">
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
                    <h2 class="homec-section__title">Explore our rooms</h2>
                </div>
            </div>
        </div>
        <div class="container homec-container-medium">
            <div class="find-rooms-wrap">
                <div class="row">
                    <ul>
                        <li>
                            <a href="https://prroperties.com/properties/348-los-angeles-ca-90036-usa">
                            <div class="room-img"><img src="https://prroperties.com/storage/files/ListingImage/1701337193.png" alt=""></div>
                            <div class="room-info">
                                <h2 class="homec-section__title">Los Angeles</h2>
                                <p>for $495/night</p>
                            </div>
                            <div class="read-more">
                                <img src="{{ asset('frontend/assets/img/arrow-circle.svg') }}" alt="">
                            </div>
                            </a>
                        </li>

                        <li>
                            <a href="https://prroperties.com/properties/florida-fl-33312">
                            <div class="room-img"><img src="https://prroperties.com/storage/files/ListingImage/1701329501.png" alt=""></div>
                            <div class="room-info">
                                <h2 class="homec-section__title">Florida</h2>
                                <p>for $400/night</p>
                            </div>
                            <div class="read-more">
                                <img src="{{ asset('frontend/assets/img/arrow-circle.svg') }}" alt="">
                            </div>
                            </a>
                        </li>

                        <li>
                            <a href="https://prroperties.com/properties/5551-los-angeles-ca-90036-usa">
                            <div class="room-img"><img src="https://prroperties.com/storage/files/ListingImage/1701418469.png" alt=""></div>
                            <div class="room-info">
                                <h2 class="homec-section__title">Los Angeles</h2>
                                <p>for $543/night</p>
                            </div>
                            <div class="read-more">
                                <img src="{{ asset('frontend/assets/img/arrow-circle.svg') }}" alt="">
                            </div>
                            </a>
                        </li>

                        <li>
                            <a href="https://prroperties.com/properties/fort-lauderdale-fl-33304">
                            <div class="room-img"><img src="https://prroperties.com/storage/files/ListingImage/1707909372.webp" alt=""></div>
                            <div class="room-info">
                                <h2 class="homec-section__title">Fort Lauderdale</h2>
                                <p>for $700/night</p>
                            </div>
                            <div class="read-more">
                                <img src="{{ asset('frontend/assets/img/arrow-circle.svg') }}" alt="">
                            </div>
                            </a>
                        </li>

                        <li>
                            <a href="https://prroperties.com/properties/12036-porter-ranch-ca-91326">
                            <div class="room-img"><img src="https://prroperties.com/storage/files/ListingImage/1707297712.webp" alt=""></div>
                            <div class="room-info">
                                <h2 class="homec-section__title">Porter Ranch</h2>
                                <p>for $7,122/Monthly</p>
                            </div>
                            <div class="read-more">
                                <img src="{{ asset('frontend/assets/img/arrow-circle.svg') }}" alt="">
                            </div>
                            </a>
                        </li>

                        <li>
                            <a href="https://prroperties.com/properties/austin-tx-78729">
                            <div class="room-img"><img src="https://prroperties.com/storage/files/ListingImage/1707908297.webp" alt=""></div>
                            <div class="room-info">
                                <h2 class="homec-section__title">Austin</h2>
                                <p>for $570/night</p>
                            </div>
                            <div class="read-more">
                                <img src="{{ asset('frontend/assets/img/arrow-circle.svg') }}" alt="">
                            </div>
                            </a>
                        </li>

                        <li>
                            <a href="https://prroperties.com/properties/washington-dc-20001">
                            <div class="room-img"><img src="https://prroperties.com/storage/files/ListingImage/1707907885.webp" alt=""></div>
                            <div class="room-info">
                                <h2 class="homec-section__title">Washington</h2>
                                <p>for $600/night</p>
                            </div>
                            <div class="read-more">
                                <img src="{{ asset('frontend/assets/img/arrow-circle.svg') }}" alt="">
                            </div>
                            </a>
                        </li>

                        <li>
                            <a href="https://prroperties.com/properties">
                            <div class="room-img"><img src="https://prroperties.com/frontend/assets/img/flexible/one.webp" alt=""></div>
                            <div class="room-info">
                                <h2 class="homec-section__title">Los Angeles</h2>
                                <p>for $795/night</p>
                            </div>
                            <div class="read-more">
                                <img src="{{ asset('frontend/assets/img/arrow-circle.svg') }}" alt="">
                            </div>
                            </a>
                        </li>

                        <li>
                            <a href="https://prroperties.com/properties">
                            <div class="room-img"><img src="https://prroperties.com/frontend/assets/img/flexible/three.webp" alt=""></div>
                            <div class="room-info">
                                <h2 class="homec-section__title">Fort Lauderdale</h2>
                                <p>for $495/night</p>
                            </div>
                            <div class="read-more">
                                <img src="{{ asset('frontend/assets/img/arrow-circle.svg') }}" alt="">
                            </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row homec-container-medium__row align-items-center d-none">
                <div class="col-lg-6 col-12 mg-top-30">
                    <div class="homec-section__head">
                        <h2 class="homec-section__title mg-btm-30">Hosting with Prroperties at another level</h2>
                        <p><b>Control move-ins and outs</b> <br/>
                        Prroperties technology allows you to manage communication for move-in and out a calendar with support AI messaging prompts to ensure you’re not on stand-by to enjoy your life ultimately.</p>
                        <div class="mg-top-30 d-flex">
                        <!-- <a data-bs-toggle="modal" href="#myModal" class="homec-btn me-3"><span>Watch demo</span></a>  -->
                        <a href="/host" class="homec-btn"><span>Host</span></a>
                        </div>

                        <!-- The Modal -->
                        <div class="modal" id="myModal">
                            <div class="modal-dialog  modal-dialog-centered">
                                <div class="modal-content">

                                <!-- Modal Header -->
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>

                                <!-- Modal body -->
                                <div class="modal-body">
                                <iframe width="100%" height="400" src="https://www.youtube.com/embed/7uKlcJQiS-A?si=u8fwzfXf-3O9sCH9" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 mg-top-30 d-none-tab">
                    <!-- Support Img -->
                    <div class="homec-support-img">
                        <img src="{{ asset('frontend/assets/img/services/management/4.webp') }}" alt="Rental listing for Porter Ranch property management">
                    </div>
                    <!-- End Support Img -->
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
            <div class="col-lg-6 col-md-6 col-12 mg-top-30 d-none-tab">
                    <!-- Support Img -->
                    <div class="homec-support-img">
                        <img src="{{ asset('frontend/assets/img/co-rent/host-your-space.webp') }}" alt="Workers performing interior maintenance in a house">
                    </div>
                    <!-- End Support Img -->
                </div>
                <div class="col-lg-6 col-12 mg-top-30">
                    <div class="homec-section__head">
                        <h2 class="homec-section__title mg-btm-30">Host your space and earn</h2>
                        <p>Access thousands of vendors, partners and helpful resources Increase occupancy rates and lower costs of vacancy. Add value and Impact your community</p>
                        <div class="mg-top-30">
                            <!-- <a href="/contact" class="homec-btn"><span>Transform now</span></a> -->
                            <a href="/pricing" class="homec-btn"><span>List my space</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="homec-bg-cover service-features pd-top-30 pd-btm-60 homec-featured-property-bg">
    <div class="container">
        <div class="container homec-container-medium">
            <div class="row homec-container-medium__row align-items-center">
                <div class="col-lg-6 col-12 mg-top-30">
                    <div class="homec-section__head">
                        <h2 class="homec-section__title mg-btm-30">Move in to a ready-to-go property</h2>
                        <p>Find the right space to live or work with a range of locations to choose from.</p>
                        <div class="mg-top-30">
                            <!-- <a href="/contact" class="homec-btn"><span>Transform now</span></a> -->
                            <a href="/pricing" class="homec-btn"><span>Find a space</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 mg-top-30 d-none-tab">
                    <!-- Support Img -->
                    <div class="homec-support-img">
                        <img src="{{ asset('frontend/assets/img/co-rent/ready-to-go-property.webp') }}" alt="Workers performing interior maintenance in a house">
                    </div>
                    <!-- End Support Img -->
                </div>
                
            </div>
        </div>
    </div>
</section>

<section class="homec-bg-cover service-features pd-top-90 pd-btm-90">
    <div class="homec-shape d-none">
        <img class="homec-shape-single homec-shape-1" src="{{ asset('frontend/assets/img/anim-shape-1.svg') }}" alt="icon">
        <img class="homec-shape-single homec-shape-2 serv-shape-2" src="{{ asset('frontend/assets/img/anim-shape-2.svg') }}" alt="icon">
        <img class="homec-shape-single homec-shape-3" src="{{ asset('frontend/assets/img/anim-shape-3.svg') }}" alt="icon">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Section TItle -->
                <div class="homec-section__head text-center mg-btm-60">
                    <h2 class="homec-section__title">Why co-rent with Prroperties</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="co-rent-single">
                            <div class="homec-features__content">
                                <div class="co-rent-icon mg-btm-20"><img src="{{ asset('frontend/assets/img/co-rent/safer-than-craigslist.png') }}" alt=""></div>
                                <h3 class="homec-features__title mg-btm-10">Safer than Craigslist</h3>
                                <p>Prroperties verifies every member with criminal and identify background checks to ensure safe stays.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="co-rent-single">
                            <div class="homec-features__content">
                                <div class="co-rent-icon mg-btm-20"><img src="{{ asset('frontend/assets/img/co-rent/affordable-than-short-term.png') }}" alt=""></div>
                                <h3 class="homec-features__title mg-btm-10">Affordable than short term rentals</h3>
                                <p>Same amenities, half the price of all short term rentals sites.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="co-rent-single">
                            <div class="homec-features__content">
                                <div class="co-rent-icon mg-btm-20"><img src="{{ asset('frontend/assets/img/co-rent/private-home-quieter.png') }}" alt=""></div>
                                <h3 class="homec-features__title mg-btm-10">Private home quieter than a noisy hotel</h3>
                                <p>Endless private rooms, flexible stays and respectful co-renters</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        
    </div>
</section>

<!-- Testimonials & Clients -->
<section class="homec-bg-third-color pd-top-120 pd-btm-120 homec-bg-cover homec-bg-testimonial">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Section TItle -->
                <div class="homec-section__head text-center mg-btm-60">
                    <span class="homec-section__badge homec-primary-color homec-section__badge--small m-0"  data-aos="fade-in" data-aos-delay="300">Our shoutout</span>
                    <h2 class="homec-section__title"  data-aos="fade-in" data-aos-delay="400">What Our Customers Say</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <!-- Testimonial Slider -->
                <div class="swiper mySwiper homec-slider-testimonial loading">
                    <div class="swiper-wrapper">
                        
                        <div class="swiper-slide">
                            <!-- Testimonial Single -->
                            <div class="homec-testimonial homec-border">
                                <!-- Author Rating -->
                                <ul class="homec-rating list-none mg-btm-15">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                                <!-- Testimonial Text -->
                                <p class="homec-testimonial__text">Amazing stay with an easy booking process. The beautiful pool house offers an exceptional atmosphere, making it a perfect getaway. Definitely planning to book again for another memorable experience.”</p>
                                <div class="homec-testimonial__bottom mg-top-10">
                                    <!-- Testimonial Author -->
                                    <div class="homec-testimonial__author">
                                        <img src="{{ asset('frontend/assets/img/testimonials/david-richard.jpg') }}"  alt="image">
                                        <div class="homec-testimonial__author--info">
                                            <h5 class="homec-testimonial__author--title">David Richard</h5>
                                            <p class="homec-testimonial__author--position">Tenant</p>
                                        </div>
                                    </div>
                                    <!-- Testimonial Quoute Icon -->
                                    <div class="homec-testimonial__quote">
                                        <svg width="153" height="108" viewBox="0 0 153 108" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g opacity="0.1">
                                            <path d="M31.9633 67.8044C32.2714 71.1357 32.0357 80.1918 23.3603 92.7847C22.704 93.735 22.8231 95.0167 23.638 95.8314C27.175 99.3684 29.3649 101.6 30.9008 103.162C32.9205 105.221 33.8425 106.16 35.1921 107.383C36.0931 108.193 37.4565 108.207 38.3671 107.413C53.4884 94.2555 70.2837 67.0666 67.8534 33.7562C66.4293 14.1969 52.1623 2.42806e-05 33.9312 2.58744e-05C15.2218 2.751e-05 2.24064e-05 15.2194 2.40421e-05 33.9291C2.562e-05 51.978 14.1663 66.7795 31.9633 67.8044ZM33.9312 4.78132C49.5874 4.78132 61.8464 17.1128 63.0859 34.1017C63.0859 34.1017 63.0859 34.1017 63.0859 34.1041C65.8199 71.5677 43.55 95.9014 36.8215 102.345C36.1655 101.698 35.4161 100.937 34.3118 99.8121C32.9812 98.458 31.16 96.6043 28.4053 93.84C38.9368 77.6144 36.9499 66.0535 36.0792 64.3958C35.6659 63.609 34.8184 63.079 33.9312 63.079C17.8575 63.079 4.78133 50.0029 4.78132 33.9291C4.78132 17.8575 17.8575 4.78132 33.9312 4.78132Z"/>
                                            <path d="M116.868 67.8043C117.179 71.1264 116.95 80.1755 108.265 92.7847C107.612 93.735 107.728 95.0166 108.543 95.8314C112.073 99.3614 114.261 101.591 115.795 103.153C117.821 105.217 118.746 106.158 120.095 107.383C120.996 108.193 122.36 108.205 123.27 107.416C138.391 94.2578 155.189 67.0735 152.763 33.7562L152.763 33.7538C151.334 14.1969 137.065 -6.23648e-06 118.834 -4.64267e-06C100.125 -3.00702e-06 84.9028 15.2194 84.9028 33.9291C84.9028 51.9801 99.0693 66.784 116.868 67.8043ZM118.834 4.7813C134.488 4.7813 146.754 17.1127 147.996 34.1041L147.996 34.1017C150.723 71.5746 128.453 95.9038 121.725 102.345C121.066 101.698 120.314 100.933 119.208 99.8049C117.879 98.4508 116.061 96.5995 113.31 93.84C123.842 77.612 121.855 66.0534 120.984 64.3981C120.571 63.6114 119.721 63.079 118.834 63.079C102.76 63.079 89.6841 50.0028 89.6841 33.9291C89.6841 17.8574 102.76 4.7813 118.834 4.7813Z"/>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <!-- End Testimonial Single -->
                        </div>

                        <div class="swiper-slide">
                            <!-- Testimonial Single -->
                            <div class="homec-testimonial homec-border">
                                <!-- Author Rating -->
                                <ul class="homec-rating list-none mg-btm-15">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                                <!-- Testimonial Text -->
                                <p class="homec-testimonial__text">Perfect escape in a cozy Fort Lauderdale home, offering stunning beach views for a tranquil retreat. Seamless booking and check-out process. A must-visit for those seeking a peaceful getaway with breathtaking scenery.”</p>
                                <div class="homec-testimonial__bottom mg-top-10">
                                    <!-- Testimonial Author -->
                                    <div class="homec-testimonial__author">
                                        <img src="{{ asset('frontend/assets/img/testimonials/david-simmons.jpg') }}"  alt="image">
                                        <div class="homec-testimonial__author--info">
                                            <h5 class="homec-testimonial__author--title">John Simmons</h5>
                                            <p class="homec-testimonial__author--position">Landlord</p>
                                        </div>
                                    </div>
                                    <!-- Testimonial Quoute Icon -->
                                    <div class="homec-testimonial__quote">
                                        <svg width="153" height="108" viewBox="0 0 153 108" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g opacity="0.1">
                                            <path d="M31.9633 67.8044C32.2714 71.1357 32.0357 80.1918 23.3603 92.7847C22.704 93.735 22.8231 95.0167 23.638 95.8314C27.175 99.3684 29.3649 101.6 30.9008 103.162C32.9205 105.221 33.8425 106.16 35.1921 107.383C36.0931 108.193 37.4565 108.207 38.3671 107.413C53.4884 94.2555 70.2837 67.0666 67.8534 33.7562C66.4293 14.1969 52.1623 2.42806e-05 33.9312 2.58744e-05C15.2218 2.751e-05 2.24064e-05 15.2194 2.40421e-05 33.9291C2.562e-05 51.978 14.1663 66.7795 31.9633 67.8044ZM33.9312 4.78132C49.5874 4.78132 61.8464 17.1128 63.0859 34.1017C63.0859 34.1017 63.0859 34.1017 63.0859 34.1041C65.8199 71.5677 43.55 95.9014 36.8215 102.345C36.1655 101.698 35.4161 100.937 34.3118 99.8121C32.9812 98.458 31.16 96.6043 28.4053 93.84C38.9368 77.6144 36.9499 66.0535 36.0792 64.3958C35.6659 63.609 34.8184 63.079 33.9312 63.079C17.8575 63.079 4.78133 50.0029 4.78132 33.9291C4.78132 17.8575 17.8575 4.78132 33.9312 4.78132Z"/>
                                            <path d="M116.868 67.8043C117.179 71.1264 116.95 80.1755 108.265 92.7847C107.612 93.735 107.728 95.0166 108.543 95.8314C112.073 99.3614 114.261 101.591 115.795 103.153C117.821 105.217 118.746 106.158 120.095 107.383C120.996 108.193 122.36 108.205 123.27 107.416C138.391 94.2578 155.189 67.0735 152.763 33.7562L152.763 33.7538C151.334 14.1969 137.065 -6.23648e-06 118.834 -4.64267e-06C100.125 -3.00702e-06 84.9028 15.2194 84.9028 33.9291C84.9028 51.9801 99.0693 66.784 116.868 67.8043ZM118.834 4.7813C134.488 4.7813 146.754 17.1127 147.996 34.1041L147.996 34.1017C150.723 71.5746 128.453 95.9038 121.725 102.345C121.066 101.698 120.314 100.933 119.208 99.8049C117.879 98.4508 116.061 96.5995 113.31 93.84C123.842 77.612 121.855 66.0534 120.984 64.3981C120.571 63.6114 119.721 63.079 118.834 63.079C102.76 63.079 89.6841 50.0028 89.6841 33.9291C89.6841 17.8574 102.76 4.7813 118.834 4.7813Z"/>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <!-- End Testimonial Single -->
                        </div>

                    </div>
                </div>
                <!-- End Testimonial Slider -->
            </div>
        </div>

        <div class="row mg-top-50 d-none">
            <div class="col-12">
                <h4 class="homec-medium-title text-center mg-btm-30">Trusted by big brands</h4>
                <!-- Clients Logo Slider -->
                <div class="swiper mySwiper homec-slider-client loading">
                    <div class="swiper-wrapper">
                        
                        <div class="swiper-slide">
                            <div class="homec-cl-logo">
                                <a href="#"><img src="{{ asset('frontend/assets/img/partner/our-partner1.png') }}"  alt="Client Logo"></a>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="homec-cl-logo">
                                <a href="#"><img src="{{ asset('frontend/assets/img/partner/our-partner2.png') }}"  alt="Client Logo"></a>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="homec-cl-logo">
                                <a href="#"><img src="{{ asset('frontend/assets/img/partner/our-partner3.png') }}"  alt="Client Logo"></a>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="homec-cl-logo">
                                <a href="#"><img src="{{ asset('frontend/assets/img/partner/our-partner4.png') }}"  alt="Client Logo"></a>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="homec-cl-logo">
                                <a href="#"><img src="{{ asset('frontend/assets/img/partner/our-partner1.png') }}"  alt="Client Logo"></a>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="homec-cl-logo">
                                <a href="#"><img src="{{ asset('frontend/assets/img/partner/our-partner2.png') }}"  alt="Client Logo"></a>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- End Clients Logo Slider -->
            </div>
        </div>
    </div>
</section>
<!-- End Testimonials & Clients -->

<section class="homec-bg-cover pd-top-40 pd-btm-90 homec-featured-property-bg mg-btm-40">
    <div class="container homec-container-medium">
        <div class="row homec-container-medium__row justify-content-center">
            <div class="homec-section__head mg-top-30 mg-btm-30">
                <div class="homec-section__shape">
                </div>
                <h1 class="homec-section__title text-center">Common questions</h1>
            </div>

            <div class="col-lg-6 col-12">

                <div class="homec-accordion accordion accordion-flush" id="homec-accordion">
                    <!-- End Single Accordion -->
                    <div class="accordion-item homec-accordion__single mg-top-30">
                        <h2 class="accordion-header" id="homect-1-0">
                            <button class="accordion-button collapsed homec-accordion__heading" type="button" data-bs-toggle="collapse" data-bs-target="#ac-collapse1-0">How can I rent a private space quickly with Prroperties?</button>
                        </h2>
                        <div id="ac-collapse1-0" class="accordion-collapse collapse" data-bs-parent="#homec-accordion">
                            <div class="accordion-body homec-accordion__body">
                                <p>You can easily find and move into private spaces with Prroperties by exploring our listings in locations like Los Angeles, Florida, Fort Lauderdale, Porter Ranch, Austin, Washington, and more. Our flexible stay options and mobile app ensure a smooth and quick rental process.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Accordion -->
                    
                    <!-- End Single Accordion -->
                    <div class="accordion-item homec-accordion__single mg-top-30">
                        <h2 class="accordion-header" id="homect-1-1">
                            <button class="accordion-button collapsed homec-accordion__heading" type="button" data-bs-toggle="collapse" data-bs-target="#ac-collapse1-1">What does flexible stay mean?</button>
                        </h2>
                        <div id="ac-collapse1-1" class="accordion-collapse collapse " data-bs-parent="#homec-accordion">
                            <div class="accordion-body homec-accordion__body">
                                <p>Flexible stay with Prroperties means you can choose rental periods that suit your needs, whether it’s for a short visit or a longer-term arrangement. This flexibility is designed to accommodate your schedule and preferences without the constraints of traditional lease agreements.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Accordion -->
                    
                    <!-- End Single Accordion -->
                    <div class="accordion-item homec-accordion__single mg-top-30">
                        <h2 class="accordion-header" id="homect-1-2">
                            <button class="accordion-button collapsed homec-accordion__heading" type="button" data-bs-toggle="collapse" data-bs-target="#ac-collapse1-2">Are all renters background checked?</button>
                        </h2>
                        <div id="ac-collapse1-2" class="accordion-collapse collapse " data-bs-parent="#homec-accordion">
                            <div class="accordion-body homec-accordion__body"> 
                                <p>Yes, ensuring your safety and trust is our priority. Every renter through Prroperties undergoes a thorough background check, covering criminal and identity verifications, to maintain a safe and secure community of co-renters. </p>
                                <p>How does renting with Prroperties help me build credit and save money?</p>
                                <p>By choosing Prroperties for co-renting, you can enjoy weekly payment options with no hidden fees. This not only helps you manage your finances better but also contributes to improving your credit score through consistent, timely payments.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Accordion -->
                    
                    <!-- End Single Accordion -->
                    <div class="accordion-item homec-accordion__single mg-top-30">
                        <h2 class="accordion-header" id="homect-1-3">
                            <button class="accordion-button collapsed homec-accordion__heading" type="button" data-bs-toggle="collapse" data-bs-target="#ac-collapse1-3">What makes co-renting with Prroperties safer than other platforms?</button>
                        </h2>
                        <div id="ac-collapse1-3" class="accordion-collapse collapse " data-bs-parent="#homec-accordion">
                            <div class="accordion-body homec-accordion__body">
                                <p>Safety is a cornerstone of our service. Unlike other platforms, Prroperties verifies every member through comprehensive criminal and identity background checks. This process ensures a safer co-renting experience, giving you peace of mind.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Accordion -->


                    <!-- End Single Accordion -->
                    <div class="accordion-item homec-accordion__single mg-top-30">
                        <h2 class="accordion-header" id="homect-1-4">
                            <button class="accordion-button collapsed homec-accordion__heading" type="button" data-bs-toggle="collapse" data-bs-target="#ac-collapse1-4"> How is co-renting with Prroperties more affordable than short-term rentals?</button>
                        </h2>
                        <div id="ac-collapse1-4" class="accordion-collapse collapse " data-bs-parent="#homec-accordion">
                            <div class="accordion-body homec-accordion__body">
                                <p>Prroperties offers the same amenities as short-term rentals but at half the price. Our affordable rates, combined with the flexibility and quality of accommodations, provide exceptional value compared to traditional short-term rental sites.</p>
                                <p>Can I expect privacy and quiet when co-renting a private home through Prroperties?</p>
                                <p>Absolutely! Prroperties provides access to endless private rooms, offering the quietude and privacy of a private home. Our flexible stay options and respectful co-renting community ensure that your stay is as peaceful as it is comfortable.</p>
                            </div>
                        </div>
                    </div>


                    <!-- End Single Accordion -->
                    <div class="accordion-item homec-accordion__single mg-top-30">
                        <h2 class="accordion-header" id="homect-1-5">
                            <button class="accordion-button collapsed homec-accordion__heading" type="button" data-bs-toggle="collapse" data-bs-target="#ac-collapse1-5"> How quickly can I move in?</button>
                        </h2>
                        <div id="ac-collapse1-5" class="accordion-collapse collapse " data-bs-parent="#homec-accordion">
                            <div class="accordion-body homec-accordion__body">
                                <p>Prroperties specializes in seamless move-ins, with quick approvals and the possibility of moving in within 24 hours of approval. Our streamlined process is designed to get you settled in your new space as quickly and efficiently as possible.</p>
                                <p>For any specific inquiries or additional information, feel free to reach out to us directly or visit our website. We're here to make your co-renting experience smooth, affordable, and safe.</p>
                            </div>
                        </div>
                    </div>
                  
                    
                      
                </div>
            </div>
        </div>
    </div>
</section>



@endsection