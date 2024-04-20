@extends('saas.frontend.layouts.app')

@section('content')
<!-- homec Hero -->
<section id="hero" class="homec-hero service-hero homec-bg-cover p-relative" style="background-image:url('{{ asset('frontend/assets/img/partners/banner.webp') }}');">

    <div class="homec-overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-10 offset-md-1 col-12">
                    <div class="homec-hero__inner service-hero_inner">
                        <!-- Hero Content -->
                        <div class="homec-hero__content homec-hero__content-mt-0">
                            <h1 class="homec-hero__title homec-hero__title-nor-pos">Increase your income by selling the #1 property management software and service!</h1>
                            <!-- <p>Your remote, talent-powered property management solution.</p> -->
                            <div class="mg-top-40 d-flex justify-content-center w-100">
                                <a href="/pricing" class="homec-btn"><span>Signup now</span></a>
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
                    <h2 class="homec-section__title">Residential, Commercial Short &<br/> Long Term Management</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <a href="javascript:void(0)" class="homec-features__single">
                            <div class="icon-embed-xsmall w-embed">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--bx" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M10.385 21.788a.997.997 0 0 0 .857.182l8-2A.999.999 0 0 0 20 19V5a1 1 0 0 0-.758-.97l-8-2A1.003 1.003 0 0 0 10 3v1H6a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h4v1c0 .308.142.599.385.788zM12 4.281l6 1.5v12.438l-6 1.5V4.281zM7 18V6h3v12H7z"></path><path fill="currentColor" d="M14.242 13.159c.446-.112.758-.512.758-.971v-.377a1 1 0 1 0-2 .001v.377a1 1 0 0 0 1.242.97z"></path></svg>
                            </div>
                            <div class="homec-features__content">
                                <h3 class="homec-features__title">Complete Occupancy</h3>
                                <p class="homec-features__text">We ensure constant rental of your residential and commercial spaces, eliminating vacancy concerns</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <a href="javascript:void(0)" class="homec-features__single">
                            <div class="icon-embed-xsmall w-embed">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--bx" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><circle cx="12" cy="4" r="2" fill="currentColor"></circle><path fill="currentColor" d="M12 18h2v-5h2V9c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v4h2v5h2z"></path><path fill="currentColor" d="m18.446 11.386l-.893 1.789C19.108 13.95 20 14.98 20 16c0 1.892-3.285 4-8 4s-8-2.108-8-4c0-1.02.892-2.05 2.446-2.825l-.893-1.789C3.295 12.512 2 14.193 2 16c0 3.364 4.393 6 10 6s10-2.636 10-6c0-1.807-1.295-3.488-3.554-4.614z"></path></svg>
                            </div>
                            <div class="homec-features__content">
                                <h3 class="homec-features__title">Tenant Screening</h3>
                                <p class="homec-features__text">We perform comprehensive background checks, credit checks, and bankruptcy searches on prospective tenants.</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <a href="javascript:void(0)" class="homec-features__single">
                            <div class="icon-embed-xsmall w-embed">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--bx" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M16 14h.5c.827 0 1.5-.673 1.5-1.5v-9c0-.827-.673-1.5-1.5-1.5h-13C2.673 2 2 2.673 2 3.5V18l5.333-4H16zm-9.333-2L4 14V4h12v8H6.667z"></path><path fill="currentColor" d="M20.5 8H20v6.001c0 1.1-.893 1.993-1.99 1.999H8v.5c0 .827.673 1.5 1.5 1.5h7.167L22 22V9.5c0-.827-.673-1.5-1.5-1.5z"></path></svg>
                            </div>
                            <div class="homec-features__content">
                                <h3 class="homec-features__title">Maintenance Requests</h3>
                                <p class="homec-features__text">Initiate repair tasks, communicate with your team, and track each job's progress.</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <a href="javascript:void(0)" class="homec-features__single">
                            <div class="icon-embed-xsmall w-embed">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--bx" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm0 18a8 8 0 1 1 8-8a8 8 0 0 1-8 8z"></path><path fill="currentColor" d="M12 11c-2 0-2-.63-2-1s.7-1 2-1s1.39.64 1.4 1h2A3 3 0 0 0 13 7.12V6h-2v1.09C9 7.42 8 8.71 8 10c0 1.12.52 3 4 3c2 0 2 .68 2 1s-.62 1-2 1c-1.84 0-2-.86-2-1H8c0 .92.66 2.55 3 2.92V18h2v-1.08c2-.34 3-1.63 3-2.92c0-1.12-.52-3-4-3z"></path></svg>
                            </div>
                            <div class="homec-features__content">
                                <h3 class="homec-features__title">Financial Management</h3>
                                <p class="homec-features__text">Automated payment collection, detailed billing, financial reports, and agreement storage.</p>
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
        <div class="row d-none">
            <div class="col-12">
                <!-- Section TItle -->
                <div class="homec-section__head text-center mg-btm-60">
                    <span class="homec-section__badge homec-primary-color homec-section__badge--small m-0">All-In-One Property Management Platform</span>
                    <h2 class="homec-section__title">Experience the power of unified control</h2>
                </div>
            </div>
        </div>
        <div class="container homec-container-medium">
            <div class="row homec-container-medium__row align-items-center">
                <div class="col-lg-6 col-12 mg-top-30">
                    <div class="homec-section__head">
                        <h2 class="homec-section__title mg-btm-30">Why Prroperties</h2>
                        <p><b>Earn more</b><br/>Cross-selling opportunities with multiple real estate products</p>
                        <ul>
                            <li>Earn 3x more by generating your own exclusive leads </li>
                            <li>Identify real estate pros with assets to strategically recommend to sell</li>
                            <li>Discover high-value prospects who are interested in buying and selling</li>
                            <li>In down markets, connect directly with real estate investors to manage their assets</li>
                        </ul>
                        <div class="mg-top-30">
                        <a href="" class="homec-btn"><span>Grow my business</span></a>
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
                        <img src="{{ asset('frontend/assets/img/partners/hosts.webp') }}" alt="">
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
                        <img src="{{ asset('frontend/assets/img/partners/get-more-listings.webp') }}" alt="Property manager at surveillance workstation">
                    </div>
                    <!-- End Support Img -->
                </div>
                <div class="col-lg-6 col-12 mg-top-30">
                    <div class="homec-section__head">
                        <h2 class="homec-section__title mg-btm-30">Get more listings</h2>
                        <p>Property management, relocation, construction, and remodeling concierge with Prroperties allows partners to convert leads, earn trust, and build relationships that maximize sales.</p>
                        <ul>
                            <li>Cross-selling services earn trust, win more listings </li>
                            <li>Properties that use a professional management service sell for higher value</li>
                            <li>A property that is appropriately managed sells faster than ones that don’t</li>
                        </ul>
                        <div class="mg-top-30">
                            <a href="/contact" class="homec-btn"><span>Signup now</span></a>
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
                        <h2 class="homec-section__title mg-btm-30">Work less</h2>
                        <p>Prroperties provides partners with all back-office work, and powerful software so you can focus on your clients </p>
                        <ul>
                            <li>Powerful software to manage your clients, track your earnings, and provide detailed property reporting
                            <li>Nurture your deals and tend to your clients</li>
                            <li>Create dynamic listings, promote and market properties with a few clicks</li>
                            <li>Eliminate back-office tasks with entire 24/7 staff in 5 countries</li>
                        </ul>
                        <div class="mg-top-30">
                            <a href="/pricing" class="homec-btn"><span>Become a partner</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 mg-top-30 d-none-tab">
                    <!-- Support Img -->
                    <div class="homec-support-img">
                        <img src="{{ asset('frontend/assets/img/partners/work-less.webp') }}" alt="Apartment upkeep tracking dashboard">
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
                        <img src="{{ asset('frontend/assets/img/partners/grow-your-brand.webp') }}" alt="Property manager at surveillance workstation">
                    </div>
                    <!-- End Support Img -->
                </div>
                <div class="col-lg-6 col-12 mg-top-30">
                    <div class="homec-section__head">
                        <h2 class="homec-section__title mg-btm-30">Grow your brand</h2>
                        <p>Prroperties provides full-scale marketing teams to enhance your visibility in your market</p>
                        <ul>
                            <li>Prroperties gives you all the tools, resources, and expert marketing team to make an impact in your community</li>
                            <li>All-in-one dashboard to streamline social media, advertising, and prospecting with ease.</li>
                            <li>Dedicated account manager to help craft growth strategies and maximize success</li>
                            <li>Promote listings and be visible to a nationwide audience to reach your brand goals, ultimately</li>
                        </ul>
                        <div class="mg-top-30">
                            <a href="/contact" class="homec-btn"><span>Get started</span></a>
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
                        <h2 class="homec-section__title mg-btm-30">Build your network</h2>
                        <p>We provide resources and exclusive coaching with industry experts every week.</p>
                        <ul>
                            <li>Access likeminded real estate pros who will enhance your competitive edge</li>
                            <li>Join Prroperties networking events where you get expert advice, learn, build connections</li>
                            <li>Get one-on-one coaching sessions with top industry leaders and increase your professional value</li>
                            <li>24/7 dedicated leaders and support agents to help every step of the way and guide you through success</li>
                        </ul>
                        <div class="mg-top-30 d-none">
                            <a href="/pricing" class="homec-btn"><span>Become a partner</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 mg-top-30 d-none-tab">
                    <!-- Support Img -->
                    <div class="homec-support-img">
                        <img src="{{ asset('frontend/assets/img/partners/build-your-network.webp') }}" alt="Apartment upkeep tracking dashboard">
                    </div>
                    <!-- End Support Img -->
                </div>
            </div>
        </div>
    </div>
</section>

<!-- homec Hero -->
<section class="service-wrap-mrg d-none">
    <div class="row align-items-center row-mg-lr-0">
        <div class="col-lg-6 col-12 col-pd-lr-0">
            <section id="hero" class="homec-hero service-hero homec-bg-cover p-relative" style="background-image:url('{{ asset('frontend/assets/img/services/management/6.webp') }}');">
                <div class="service-homec-overlay1"></div>
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-10 offset-md-1 col-12">
                                <div class="homec-hero__inner service-hero_inner">
                                    <!-- Hero Content -->
                                    <div class="homec-hero__content homec-hero__content-mt-0">
                                        <h2 class="homec-hero__title homec-hero__title-nor-pos">Dedicated security</h2>
                                        <p>Enjoy 24/7 property access with our monitoring and alerts. Track user tasks and maintenance work orders, ensuring nothing is overlooked. Your data's security is our guarantee.</p>

                                        <div class="mg-top-40 d-flex justify-content-center w-100">
                                            <a href="/contact" class="homec-btn"><span>Get in touch</span></a>
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
                                        <h2 class="homec-hero__title homec-hero__title-nor-pos">Always accessible</h2>
                                        <p>Our support staff 24/7 can assist you at any time, ensuring all your queries are resolved while helping you even when you are away.</p>

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
<!-- End homec Hero -->

@include('Testimonial')
@include('blogs')


<section class="talk-us-wrap pd-top-90 pd-btm-90">
    <div class="container">
        <div class="talk-us-wrap-inner">
            <div class="talk-lt-wrp wd-50 padd-70">
            <h2 class="homec-section__title mg-btm-40">Talk to us </h2>
            <ul class="talkus-ulli">
                <li>
                    <div class="talkus-icon"><img src="{{ asset('frontend/assets/img/talk-us/icon-1.png') }}" alt=""></div>
                    <div class="talkus-title">We want to know your struggles and goals</div>
                </li>
                <li>
                    <div class="talkus-icon"><img src="{{ asset('frontend/assets/img/talk-us/icon-2.png') }}" alt=""></div>
                    <div class="talkus-title">We provide you with free tips to increase growth</div>
                </li>
                <li>
                    <div class="talkus-icon"><img src="{{ asset('frontend/assets/img/talk-us/icon-3.png') }}" alt=""></div>
                    <div class="talkus-title">Join our platform that transforms real estate as you know it</div>
                </li>
            </ul>
            </div>
            <div class="talk-rt-wrp wd-50 padd-70">
                <div class="talk-us-form">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Mobile">
                    </div>
                    <div class="form-group">
                        <select class="form-select">
                            <option selected>City</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-select">
                            <option selected>State</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="w-100 form-group">
                        <button type="submit" class="homec-btn"><span>Submit</span></button>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
