@extends('saas.frontend.layouts.app')

@section('content')

<!-- homec Hero -->
<section id="hero" class="homec-hero service-hero homec-bg-cover p-relative" style="background-image:url('{{ asset('frontend/assets/img/payment-and-collections/banner.webp') }}');">

    <div class="homec-overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-10 offset-md-1 col-12">
                    <div class="homec-hero__inner service-hero_inner">
                        <!-- Hero Content -->
                        <div class="homec-hero__content homec-hero__content-mt-0">
                            <h1 class="homec-hero__title homec-hero__title-nor-pos">Payment collections</h1>
                            <p>Highest ratio of bill collections with proprietary billing and payment solutions</p>
                            <div class="mg-top-40 d-flex justify-content-center w-100">
                                <a href="/hosts" class="homec-btn"><span>Host</span></a>
                            </div>
                        </div>
                    </div>
                </div>

           @include('feature')

            
        </div>
    </div>
</section>
<!-- End homec Hero -->

<section class="homec-features pd-top-80 pd-btm-80 bg-light-gray">
    <div class="container">

        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Section TItle -->
                        <div class="homec-section__head text-center mg-btm-60">
                            <h2 class="homec-section__title">Members pay on-time with Prroperties</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="co-rent-single">
                            <div class="homec-features__content">
                                <div class="co-rent-icon mg-btm-20"><img src="{{ asset('frontend/assets/img/payment-and-collections/advanced-payment-systems.png') }}" alt=""></div>
                                <h3 class="homec-features__title mg-btm-10">Advanced payment systems</h3>
                                <p>Bill Payments, accounts receivable, and payables take the utmost priority for a proper host and member experience. Multiple ways to get payments. Auto-pay setup, recurring, and one-time solutions to make payments a breeze!</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="co-rent-single">
                            <div class="homec-features__content">
                                <div class="co-rent-icon mg-btm-20"><img src="{{ asset('frontend/assets/img/payment-and-collections/frequent-flexible-payments.png') }}" alt=""></div>
                                <h3 class="homec-features__title mg-btm-10">Frequent and flexible payments</h3>
                                <p>Prroperties software allows daily, weekly, and monthly payments setup, which reduces barriers from movie-ins and helps members be on top of their finances. Hosts can recognize which member is behind and who is engaged quickly.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="co-rent-single">
                            <div class="homec-features__content">
                                <div class="co-rent-icon mg-btm-20"><img src="{{ asset('frontend/assets/img/payment-and-collections/prevent-renters-falling.png') }}" alt=""></div>
                                <h3 class="homec-features__title mg-btm-10">Prevent renters from falling behind</h3>
                                <p>Built-in mechanism and technology to help renters catch up with their finances to ensure rent is collected. We partner with local lenders to offer an additional leg up.</p>
                            </div>
                        </div>
                    </div>

                    <div class="mg-top-50 d-flex justify-content-center w-100">
                        <a href="/hosts" class="homec-btn"><span>Start hosting</span></a>
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
                    <h2 class="homec-section__title">Members pay on-time with Prroperties</h2>
                </div>
            </div>
        </div>
        <div class="container homec-container-medium">
            <div class="row homec-container-medium__row align-items-center">
                <div class="col-lg-6 col-12 mg-top-30">
                    <div class="homec-section__head">
                        <h2 class="homec-section__title2">Advanced payment systems</h2>
                        <p class="mg-btm-30">Bill Payments, accounts receivable, and payables take the utmost priority for a proper host and member experience. Multiple ways to get payments. Auto-pay setup, recurring, and one-time solutions to make payments a breeze!</p>
                        <h2 class="homec-section__title2">Frequent and flexible payments</h2>
                        <p class="mg-btm-30">Prroperties software allows daily, weekly, and monthly payments setup, which reduces barriers from movie-ins and helps members be on top of their finances. Hosts can recognize which member is behind and who is engaged quickly.</p>
                        <h2 class="homec-section__title2">Prevent renters from falling behind</h2>
                        <p>Built-in mechanism and technology to help renters catch up with their finances to ensure rent is collected. We partner with local lenders to offer an additional leg up.</p>
                        <div class="mg-top-30">
                        <a href="/hosts" class="homec-btn"><span>Start hosting</span></a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 mg-top-30 d-none-tab">
                    <!-- Support Img -->
                    <div class="homec-support-img">
                        <img src="{{ asset('frontend/assets/img/payment-and-collections/members-pay-on-time.webp') }}" alt="Rental listing for Porter Ranch property management">
                    </div>
                    <!-- End Support Img -->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="homec-bg-cover service-features pd-top-90 pd-btm-90 homec-featured-property-bg">
    <div class="container">
        <div class="container homec-container-medium">
            <div class="row homec-container-medium__row align-items-center">
                <div class="homec-section__head">
                    <h2 class="homec-section__title mg-btm-30 text-center">Top of the line bill payment operations team</h2>
                    <div class="earn-more-wrp">
                        <ul>
                            <li>
                                <div class="earn-icon"><img src="{{ asset('frontend/assets/img/payment-and-collections/finance.png') }}" alt=""></div>
                                    <h3 class="earn-title">Real-time finance <br/>monitoring</h3>
                            </li>
                            <li>
                                <div class="earn-icon"><img src="{{ asset('frontend/assets/img/payment-and-collections/support.png') }}" alt=""></div>
                                    <h3 class="earn-title">24/7 phone, text, email, <br/> chat support</h3>
                            </li>
                            <li>
                                <div class="earn-icon"><img src="{{ asset('frontend/assets/img/payment-and-collections/experience.png') }}" alt=""></div>
                                    <h3 class="earn-title">Years of <br/>experience</h3>
                            </li>
                        </ul>
                    </div>
                    <div class="para-align">
                        <p class="text-center">Prroperties operations teams monitor complete financials, payments, and bill payments of all members across all properties. We engage members proactively, including weekly check-ins, to ensure they stay current with streamlined reporting with calls, texts, emails, and chats.</p>
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
                <div class="col-lg-6 col-md-6 col-12 mg-top-30 d-none-tab">
                    <!-- Support Img -->
                    <div class="homec-support-img">
                        <img src="{{ asset('frontend/assets/img/payment-and-collections/financial-support-property.webp') }}" alt="Rental listing for Porter Ranch property management">
                    </div>
                    <!-- End Support Img -->
                </div>

                <div class="col-lg-6 col-12 mg-top-30">
                    <div class="homec-section__head">
                        <h2 class="homec-section__title1 mg-btm-20">Financial, support, and property<br/> real-time reporting</h2>
                        <p>Powerful dashboard to showcase detailed revenues, profits, maintenance issues, and payments on complete tenant and property portfolios. </p>
                        <div class="mg-top-30">
                            <a href="/hosts" class="homec-btn"><span>Start hosting</span></a>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
</section>

@include('Testimonial')
@include('blogs')

<section class="homec-bg-cover pd-top-15 pd-btm-15 mg-btm-30  d-none">
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

<section class="homec-bg-cover pd-top-15 pd-btm-15 mg-btm-40 d-none">
    <div class="container">
        <div class="refern-earn-wrap-box">
            <div class="refern-earn-wrap-icon"><img src="{{ asset('frontend/assets/img/refer.svg') }}" alt=""></div>
            <div class="refern-earn-wrap-txt">
                <h2 class="homec-section__title mg-btm-10">Refer & earn</h2>
                <p class="sec-head__text">Receive $500 once your referral activates the first listing. No limitations! Refer to as many posts as you’d like and make money!</p>
                <div class="mg-top-30">
                    <a href="https://prroperties.com/partner/signup" class="homec-btn"><span>Get started</span></a>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection