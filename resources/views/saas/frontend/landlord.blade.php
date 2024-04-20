@extends('saas.frontend.layouts.app')

@section('content')

<!-- homec Hero -->
<section id="hero" class="homec-hero service-hero homec-bg-cover p-relative" style="background-image:url('{{ asset('frontend/assets/img/host/banner.webp') }}');">

    <div class="homec-overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-10 offset-md-1 col-12">
                    <div class="homec-hero__inner service-hero_inner">
                        <!-- Hero Content -->
                        <div class="homec-hero__content homec-hero__content-mt-0">
                            <h1 class="homec-hero__title homec-hero__title-nor-pos">List your space with Prroperties</h1>
                            <p>Boost your property revenue and maximize rental income with flexible rental solutions such as short and long-term and shared rentals for corporate and essential workers.</p>
                            <div class="mg-top-40 d-flex justify-content-center w-100">
                                <a href="/pricing" class="homec-btn"><span>Start hosting</span></a>
                            </div>
                        </div>
                    </div>
                </div>

           @include('feature')

            
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
                    <span class="homec-section__badge homec-primary-color homec-section__badge--small m-0">Discover the key features</span>
                    <h2 class="homec-section__title">Uninterrupted Occupancy.</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <a href="#" class="homec-features__single">
                            <div class="icon-embed-xsmall w-embed">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--bx" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M10.385 21.788a.997.997 0 0 0 .857.182l8-2A.999.999 0 0 0 20 19V5a1 1 0 0 0-.758-.97l-8-2A1.003 1.003 0 0 0 10 3v1H6a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h4v1c0 .308.142.599.385.788zM12 4.281l6 1.5v12.438l-6 1.5V4.281zM7 18V6h3v12H7z"></path><path fill="currentColor" d="M14.242 13.159c.446-.112.758-.512.758-.971v-.377a1 1 0 1 0-2 .001v.377a1 1 0 0 0 1.242.97z"></path></svg>
                            </div>
                            <div class="homec-features__content">
                                <h3 class="homec-features__title">Complete Management</h3>
                                <p class="homec-features__text">Our program handles your property's needs from A to Z, freeing you from managing any tasks directly.</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <a href="#" class="homec-features__single">
                            <div class="icon-embed-xsmall w-embed">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--bx" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><circle cx="12" cy="4" r="2" fill="currentColor"></circle><path fill="currentColor" d="M12 18h2v-5h2V9c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v4h2v5h2z"></path><path fill="currentColor" d="m18.446 11.386l-.893 1.789C19.108 13.95 20 14.98 20 16c0 1.892-3.285 4-8 4s-8-2.108-8-4c0-1.02.892-2.05 2.446-2.825l-.893-1.789C3.295 12.512 2 14.193 2 16c0 3.364 4.393 6 10 6s10-2.636 10-6c0-1.807-1.295-3.488-3.554-4.614z"></path></svg>
                            </div>
                            <div class="homec-features__content">
                                <h3 class="homec-features__title">100% Occupancy</h3>
                                <p class="homec-features__text">Our proprietary software and skilled team ensure year-round occupancy, eliminating property vacancies.</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <a href="#" class="homec-features__single">
                            <div class="icon-embed-xsmall w-embed">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--bx" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M16 14h.5c.827 0 1.5-.673 1.5-1.5v-9c0-.827-.673-1.5-1.5-1.5h-13C2.673 2 2 2.673 2 3.5V18l5.333-4H16zm-9.333-2L4 14V4h12v8H6.667z"></path><path fill="currentColor" d="M20.5 8H20v6.001c0 1.1-.893 1.993-1.99 1.999H8v.5c0 .827.673 1.5 1.5 1.5h7.167L22 22V9.5c0-.827-.673-1.5-1.5-1.5z"></path></svg>
                            </div>
                            <div class="homec-features__content">
                                <h3 class="homec-features__title">Maintenance</h3>
                                <p class="homec-features__text">With just a click, create a request for minor maintenance issues and our handyman will promptly address the repairs.</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <a href="#" class="homec-features__single">
                            <div class="icon-embed-xsmall w-embed">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--bx" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm0 18a8 8 0 1 1 8-8a8 8 0 0 1-8 8z"></path><path fill="currentColor" d="M12 11c-2 0-2-.63-2-1s.7-1 2-1s1.39.64 1.4 1h2A3 3 0 0 0 13 7.12V6h-2v1.09C9 7.42 8 8.71 8 10c0 1.12.52 3 4 3c2 0 2 .68 2 1s-.62 1-2 1c-1.84 0-2-.86-2-1H8c0 .92.66 2.55 3 2.92V18h2v-1.08c2-.34 3-1.63 3-2.92c0-1.12-.52-3-4-3z"></path></svg>
                            </div>
                            <div class="homec-features__content">
                                <h3 class="homec-features__title">24/7 Support</h3>
                                <p class="homec-features__text">Our 24/7 support staff is always available to assist with any needs concerning your investment.</p>
                            </div>
                        </a>
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
        <div class="row">
            <div class="col-12">
                <!-- Section TItle -->
                <div class="homec-section__head text-center mg-btm-60">
                    <h2 class="homec-section__title">Prroperties vs. Traditional Property Managers</h2>
                    <div class="para-align">
                        <p class="mg-top-30">Prroperties transforms underutilized spaces into additional multi-rental solutions. 
We increase revenues and lower the cost per room for members through flexible rentals. With Prroperties, you can earn 3x more than with  traditional rental spaces.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container homec-container-medium">
            <div class="row homec-container-medium__row align-items-center">
                <div class="pro-manage-wrp">
                    <div class="lt-wrp">
                        <h2 class="homec-section__title">Before</h2>
                        <h3>$1,649</h3>
                        <p class="com-txt">Monthly rent <br/>
                        <b>5 bed 3 bath</b></p>
                    </div>

                    <!-- <div class="middle-wrp">
                        <div class="before-after-wrp">
                            <img src="{{ asset('frontend/assets/img/after-prop.png') }}" alt="">
                        </div>
                    </div> -->

                    <div class="middle-wrp">
                        <div class="before-after-wrp">
                        <main>
                            <div class="c-compare" style="--value:50%;">
                                <img class="c-compare__left" src="{{ asset('frontend/assets/img/before-prop.png') }}"  alt="" />
                                <img class="c-compare__right" src="{{ asset('frontend/assets/img/after-prop.png') }}"  alt="" />
                                <input type="range" class="c-rng c-compare__range" min="0" max="100" value="50" oninput="this.parentNode.style.setProperty('--value', `${this.value}%`)" />
                            </div>
                            </main>
                        </div>
                    </div>

                    <div class="rt-wrp">
                        <h2 class="homec-section__title">After</h2>
                        <h3>$4,183</h3>
                        <p class="com-txt">Monthly rent <br/><b>8 bed 4 bath</b></p>
                    </div>
                </div>

                <div class="mg-top-40 d-flex justify-content-center w-100">
                    <a href="/contact" class="homec-btn"><span>Start hosting</span></a>
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
                    <h2 class="homec-section__title mg-btm-30 text-center">Do good, and earn more!</h2>

                    <div class="earn-more-wrp">
                        <ul>
                            <li>
                                <div class="earn-icon"><img src="{{ asset('frontend/assets/img/host/more-rooms.png') }}" alt=""></div>
                                    <h3 class="earn-title">More rooms</h3>
                            </li>
                            <li>
                                <div class="earn-icon"><img src="{{ asset('frontend/assets/img/host/increased-roi.png') }}" alt=""></div>
                                    <h3 class="earn-title">Increased ROI</h3>
                            </li>
                            <li>
                                <div class="earn-icon"><img src="{{ asset('frontend/assets/img/host/more-collections.png') }}" alt=""></div>
                                    <h3 class="earn-title">More collections</h3>
                            </li>
                        </ul>

                    </div>

                    <p class="text-center">Prroperties marketplace connects landlords with background-checked renters looking for affordable spaces to live and work. Additionally, Prroperties helps real estate investors leverage their spaces with flexible rental solutions to increase profitability while getting members access to more affordable and safe neighborhoods.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="homec-bg-cover service-features pd-top-50 pd-btm-50">
    <div class="homec-shape">
        <img class="homec-shape-single homec-shape-1" src="{{ asset('frontend/assets/img/anim-shape-1.svg') }}" alt="icon">
        <img class="homec-shape-single homec-shape-2" src="{{ asset('frontend/assets/img/anim-shape-2.svg') }}" alt="icon">
        <img class="homec-shape-single homec-shape-3" src="{{ asset('frontend/assets/img/anim-shape-3.svg') }}" alt="icon">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Section TItle -->
                <div class="homec-section__head text-center mg-btm-60">
                    <h2 class="homec-section__title">Hosting has never been so easy!</h2>
                </div>
            </div>
        </div>

        <div class="container homec-container-medium mg-top-50 mg-btm-50">
            <div class="row homec-container-medium__row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="homec-section__head">
                        <h2 class="homec-section__title mg-btm-30">List a property</h2>
                        <p>Sign up quickly with friendly tools to showcase your property photos, description, amenities, and features. Our team will assist in increasing your visibility.</p>
                        <div class="mg-top-30">
                            <a href="/pricing" class="homec-btn"><span>Get started</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <!-- Support Img -->
                    <div class="homec-support-img host-support-img">
                        <img src="{{ asset('frontend/assets/img/host/list-property.webp') }}" alt="Woman reviewing tenant screening results on tablet">
                    </div>
                    <!-- End Support Img -->
                </div>
            </div>
        </div>

        <div class="container homec-container-medium mg-top-50 mg-btm-50">
            <div class="row homec-container-medium__row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <!-- Support Img -->
                    <div class="homec-support-img host-support-img">
                        <img src="{{ asset('frontend/assets/img/host/connect-with-vetted.webp') }}" alt="Woman reviewing tenant screening results on tablet">
                    </div>
                    <!-- End Support Img -->
                </div>
                <div class="col-lg-6 col-12">
                    <div class="homec-section__head">
                        <h2 class="homec-section__title mg-btm-30">Connect with vetted renters</h2>
                        <p>Our marketing teams reach out to thousands of prospects a day. We filter and screen suitable candidates with complete identity, criminal background, income, and eviction checks.</p>
                        <div class="mg-top-30">
                            <a href="/pricing" class="homec-btn"><span>Start listing</span></a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

        <div class="container homec-container-medium mg-top-50 mg-btm-50">
            <div class="row homec-container-medium__row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="homec-section__head">
                        <h2 class="homec-section__title mg-btm-30">Real-time management on auto-pilot</h2>
                        <p>State-art powerful software and tools to handle your move-in, move-outs, maintenance requests, finances, payment collections, and communications</p>
                        <div class="mg-top-30">
                            <a href="/pricing" class="homec-btn"><span>Start managing</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <!-- Support Img -->
                    <div class="homec-support-img host-support-img">
                        <img src="{{ asset('frontend/assets/img/host/real-time-management-auto-pilot.webp') }}" alt="Woman reviewing tenant screening results on tablet">
                    </div>
                    <!-- End Support Img -->
                </div>
            </div>
        </div>

        <div class="container homec-container-medium mg-top-50 mg-btm-50">
            <div class="row homec-container-medium__row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <!-- Support Img -->
                    <div class="homec-support-img host-support-img">
                        <img src="{{ asset('frontend/assets/img/host/earn-3x-more-prroperties.webp') }}" alt="Woman reviewing tenant screening results on tablet">
                    </div>
                    <!-- End Support Img -->
                </div>
                <div class="col-lg-6 col-12">
                    <div class="homec-section__head">
                        <h2 class="homec-section__title mg-btm-30">Earn 3x more with Prroperties</h2>
                        <p>Discover the most impressive rental earnings for your properties! A comprehensive dashboard with extensive tools, reports, tracking, and automated technologies platform to seamlessly manage your tenants.</p>
                        <div class="mg-top-30">
                            <a href="/pricing" class="homec-btn"><span>Start earning</span></a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>



    </div>
</section>

@include('Testimonial')
@include('blogs')

<section class="homec-bg-cover pd-top-40 pd-btm-90 homec-faq-bg  mg-btm-40">
    
    
    <div class="container homec-container-medium">
        <div class="row homec-container-medium__row justify-content-center">
            <div class="homec-section__head mg-top-30 mg-btm-30">
                <div class="homec-section__shape">
                </div>
                <h1 class="homec-section__title text-center">Common questions from Hosts</h1>
            </div>

            <div class="col-lg-6 col-12">

                <div class="homec-accordion accordion accordion-flush" id="homec-accordion">
                    <!-- End Single Accordion -->
                    <div class="accordion-item homec-accordion__single mg-top-30">
                        <h2 class="accordion-header" id="homect-1-0">
                            <button class="accordion-button collapsed homec-accordion__heading" type="button" data-bs-toggle="collapse" data-bs-target="#ac-collapse1-0">How can I boost my property revenue with Prroperties?</button>
                        </h2>
                        <div id="ac-collapse1-0" class="accordion-collapse collapse" data-bs-parent="#homec-accordion">
                            <div class="accordion-body homec-accordion__body">
                                <p>Boost your property revenue by listing your space on Prroperties for flexible rental solutions, including short-term, long-term, and shared rentals, aimed at corporate and essential workers. By transforming under-utilized spaces into additional rental solutions, you can maximize your rental income.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Accordion -->
                    
                    <!-- End Single Accordion -->
                    <div class="accordion-item homec-accordion__single mg-top-30">
                        <h2 class="accordion-header" id="homect-1-1">
                            <button class="accordion-button collapsed homec-accordion__heading" type="button" data-bs-toggle="collapse" data-bs-target="#ac-collapse1-1">What are the benefits of listing my property with Prroperties?</button>
                        </h2>
                        <div id="ac-collapse1-1" class="accordion-collapse collapse " data-bs-parent="#homec-accordion">
                            <div class="accordion-body homec-accordion__body">
                                <p>Listing with Prroperties allows you to earn up to 3 times more than with traditional rental methods by offering multi-rental solutions. You can increase your property's monthly rent significantly by converting additional spaces into rentable units, thus lowering the cost per room for members through flexible rentals.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Accordion -->
                    
                    <!-- End Single Accordion -->
                    <div class="accordion-item homec-accordion__single mg-top-30">
                        <h2 class="accordion-header" id="homect-1-2">
                            <button class="accordion-button collapsed homec-accordion__heading" type="button" data-bs-toggle="collapse" data-bs-target="#ac-collapse1-2">How does Prroperties compare to traditional property managers?</button>
                        </h2>
                        <div id="ac-collapse1-2" class="accordion-collapse collapse " data-bs-parent="#homec-accordion">
                            <div class="accordion-body homec-accordion__body"> 
                                <p>Prroperties stands out by specializing in flexible rentals that transform under-utilized spaces into profitable rental solutions, increasing your revenue and providing more affordable living options for renters. This approach offers higher earnings compared to traditional property management methods.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Accordion -->
                    
                    <!-- End Single Accordion -->
                    <div class="accordion-item homec-accordion__single mg-top-30">
                        <h2 class="accordion-header" id="homect-1-3">
                            <button class="accordion-button collapsed homec-accordion__heading" type="button" data-bs-toggle="collapse" data-bs-target="#ac-collapse1-3">What kind of properties can I list?</button>
                        </h2>
                        <div id="ac-collapse1-3" class="accordion-collapse collapse " data-bs-parent="#homec-accordion">
                            <div class="accordion-body homec-accordion__body">
                                <p>You can list properties that can accommodate flexible rental solutions, including properties that can be converted or optimized for short and long-term rentals, as well as shared living spaces for corporate and essential workers.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Accordion -->


                    <!-- End Single Accordion -->
                    <div class="accordion-item homec-accordion__single mg-top-30">
                        <h2 class="accordion-header" id="homect-1-4">
                            <button class="accordion-button collapsed homec-accordion__heading" type="button" data-bs-toggle="collapse" data-bs-target="#ac-collapse1-4"> How does Prroperties ensure the quality of renters?</button>
                        </h2>
                        <div id="ac-collapse1-4" class="accordion-collapse collapse " data-bs-parent="#homec-accordion">
                            <div class="accordion-body homec-accordion__body">
                                <p>Prroperties connects landlords with background-checked renters, ensuring safety and compatibility. The platform conducts identity, criminal background, income, and eviction checks to vet potential renters thoroughly.</p>
                            </div>
                        </div>
                    </div>

                    <!-- End Single Accordion -->
                    <div class="accordion-item homec-accordion__single mg-top-30">
                        <h2 class="accordion-header" id="homect-1-5">
                            <button class="accordion-button collapsed homec-accordion__heading" type="button" data-bs-toggle="collapse" data-bs-target="#ac-collapse1-5"> Can I manage multiple properties through Prroperties?</button>
                        </h2>
                        <div id="ac-collapse1-5" class="accordion-collapse collapse " data-bs-parent="#homec-accordion">
                            <div class="accordion-body homec-accordion__body">
                                <p>Yes, Prroperties offers comprehensive tools and reports for hosts to manage multiple properties efficiently, tracking earnings and tenant interactions through an automated technology platform.</p>
                                <p>For additional information or specific inquiries, hosts are encouraged to contact Prroperties directly through website.</p>
                            </div>
                        </div>
                    </div>
                  
                    
                      
                </div>
            </div>
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
                        <a href="/pricing" class="homec-btn homec-btn-service"><span>Start hosting</span></a>
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
<section id="hero" class="homec-hero service-hero homec-bg-cover p-relative d-none" style="background-image:url('{{ asset('frontend/assets/img/landlord/landlord-bg.webp') }}');">
    <div class="homec-overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-10 offset-md-1 col-12">
                    <div class="homec-hero__inner service-hero_inner">
                        <!-- Hero Content -->
                        <div class="homec-hero__content homec-hero__content-mt-0">
                            <h2 class="homec-hero__title homec-hero__title-nor-pos">24/7 state-of-the-art security</h2>
                            <p>With our 24/7 security, you can rest assured that your property is protected at all times. Our vigilant team and state-of-the-art security systems work tirelessly to monitor and safeguard your premises, providing a secure environment for you, your tenants, and your valuable assets.</p>

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
