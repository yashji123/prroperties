@extends('saas.frontend.layouts.app')

@section('content')

<!-- homec Hero -->
<section id="hero" class="homec-hero service-hero homec-bg-cover p-relative" style="background-image:url('{{ asset('frontend/assets/img/marketing/banner.webp') }}');">

    <div class="homec-overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-10 offset-md-1 col-12">
                    <div class="homec-hero__inner service-hero_inner">
                        <!-- Hero Content -->
                        <div class="homec-hero__content homec-hero__content-mt-0">
                            <h1 class="homec-hero__title homec-hero__title-nor-pos">Marketing & Rentals</h1>
                            <p>Powerful advertisement for your listings</p>
                            <div class="mg-top-40 d-flex justify-content-center w-100">
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

<section class="homec-bg-cover service-features pd-top-90 pd-btm-120 homec-faq-bg">
    <div class="homec-shape">
        <img class="homec-shape-single homec-shape-1" src="{{ asset('frontend/assets/img/anim-shape-1.svg') }}" alt="icon">
        <img class="homec-shape-single homec-shape-2 serv-shape-2" src="{{ asset('frontend/assets/img/anim-shape-2.svg') }}" alt="icon">
        <img class="homec-shape-single homec-shape-3" src="{{ asset('frontend/assets/img/anim-shape-3.svg') }}" alt="icon">
    </div>
    <div class="container">
        <div class="row d-none">
            <div class="col-12">
                <!-- Section TItle -->
                <div class="homec-section__head text-center mg-btm-60">
                    <h2 class="homec-section__title">Powerful advertisement for your listings</h2>
                </div>
            </div>
        </div>
        <div class="container homec-container-medium">
            <div class="row homec-container-medium__row align-items-center">
                <div class="col-lg-6 col-12 mg-top-30">
                    <div class="homec-section__head">
                        <h2 class="homec-section__title2">Digital campaigns</h2>
                        <p class="mg-btm-30">Prroperties advertising network stretches to hundreds of distribution channels online to maximize the exposure of your listings</p>
                        <h2 class="homec-section__title2">Search engine optimization</h2>
                        <p class="mg-btm-30">#1 in ranking for multiple keywords in various markets and niches</p>
                        <h2 class="homec-section__title2">Real estate partner network</h2>
                        <p>We partner with all major rental platforms to curate the right prospects for your listings</p>
                        <div class="mg-top-30">
                        <a href="/hosts" class="homec-btn"><span>Start hosting</span></a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 mg-top-30 d-none-tab">
                    <!-- Support Img -->
                    <div class="homec-support-img">
                        <img src="{{ asset('frontend/assets/img/marketing/powerful-advertisement-for-your.webp') }}" alt="Rental listing for Porter Ranch property management">
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
        <div class="row">
            <div class="col-12">
                <!-- Section TItle -->
                <div class="homec-section__head text-center mg-btm-60">
                    <h2 class="homec-section__title">Ensuring the safety and security of our hosts and their investments</h2>
                </div>
            </div>
        </div>
        <div class="container homec-container-medium">
            <div class="row homec-container-medium__row align-items-center">
                <div class="col-lg-6 col-md-6 col-12 mg-top-30 d-none-tab">
                    <!-- Support Img -->
                    <div class="homec-support-img">
                        <img src="{{ asset('frontend/assets/img/marketing/renters-and-members.webp') }}" alt="">
                    </div>
                    <!-- End Support Img -->
                </div>

                <div class="col-lg-6 col-12 mg-top-30">
                    <div class="homec-section__head">
                        <h2 class="homec-section__title1 mg-btm-20">Renters and members go through an extensive background check.</h2>
                        <p>We take screening of new renters with the utmost seriousness by conducting a series of comprehensive vetting of criminal background checks, evictions, and income verification checks, providing hosts added security and assurances.</p>
                        <div class="mg-top-30">
                        <a href="/hosts" class="homec-btn"><span>Start hosting</span></a>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
</section>

<section class="homec-features pd-top-120 pd-btm-120 bg-light-gray">
    <div class="container">

        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="co-rent-single">
                            <div class="homec-features__content">
                                <div class="co-rent-icon mg-btm-20"><img src="{{ asset('frontend/assets/img/marketing/verified-identity.webp') }}" alt=""></div>
                                <h3 class="homec-features__title mg-btm-10">Verified identity</h3>
                                <p>We prevent fraud by implementing an extra layer of real-time ID verifications</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="co-rent-single">
                            <div class="homec-features__content">
                                <div class="co-rent-icon mg-btm-20"><img src="{{ asset('frontend/assets/img/marketing/criminal-checks-icon.webp') }}" alt=""></div>
                                <h3 class="homec-features__title mg-btm-10">Criminal and eviction checks</h3>
                                <p>We decline users with past 10-year felonies and at one eviction</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="co-rent-single">
                            <div class="homec-features__content">
                                <div class="co-rent-icon mg-btm-20"><img src="{{ asset('frontend/assets/img/marketing/proof-of-income.webp') }}" alt=""></div>
                                <h3 class="homec-features__title mg-btm-10">Proof of income</h3>
                                <p>All renters MUST submit the most recent bank statements and pay stubs to our password-protected portal</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="small-wrap-box mg-top-60">
            <div class="small-wrap-icon"><img src="{{ asset('frontend/assets/img/marketing/verified-identity.webp') }}" alt=""></div>
            <div class="small-wrap-txt">Prroperties software provides a powerful platform that encompasses extra layers of security to encourage screened and verified renters and members.</div>
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
                        <h2 class="homec-section__title mg-btm-30">No more paper trail with a digital document signing and storage</h2>
                        <p>Property owners enjoy a seamless solution for their properties with an all-in-one platform to execute and store documents, making your rental management simple.</p>
                        <div class="mg-top-30">
                            <!-- <a href="/contact" class="homec-btn"><span>Transform now</span></a> -->
                            <a href="/pricing" class="homec-btn"><span>Get started</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 mg-top-30 d-none-tab">
                    <!-- Support Img -->
                    <div class="homec-support-img">
                        <img src="{{ asset('frontend/assets/img/marketing/no-more-paper-trail.webp') }}" alt="Workers performing interior maintenance in a house">
                    </div>
                    <!-- End Support Img -->
                </div>
                
            </div>
        </div>
    </div>
</section>

@include('Testimonial')
@include('blogs')

<section class="homec-bg-cover pd-top-15 pd-btm-15 mg-btm-50 d-none">
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

@endsection