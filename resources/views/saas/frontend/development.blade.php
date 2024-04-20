@extends('saas.frontend.layouts.app')

@section('content')
<!-- homec Hero -->
<section id="hero" class="homec-hero service-hero homec-bg-cover p-relative" style="background-image:url('{{ asset('frontend/assets/img/services/development/development-bg.webp') }}');">

    <div class="homec-overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-10 offset-md-1 col-12">
                    <div class="homec-hero__inner service-hero_inner">
                        <!-- Hero Content -->
                        <div class="homec-hero__content homec-hero__content-mt-0">
                            <h1 class="homec-hero__title homec-hero__title-nor-pos">Complete construction and design solutions</h1>
                            <p>Prroperties Bridging design, construction, and post-build support with a team of seasoned professionals, for budget-friendly residential and commercial transformations.</p>
                            <div class="mg-top-40 d-flex justify-content-center w-100">
                                <a href="/contact" class="homec-btn"><span>Talk to us</span></a>
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
                    <h2 class="homec-section__title">Build it with the best</h2>
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
                                <h3 class="homec-features__title">Project Details</h3>
                                <p class="homec-features__text">We can build or remodel projects of any size according to your vision and plans.</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <a href="javascript:void(0)" class="homec-features__single">
                            <div class="icon-embed-xsmall w-embed">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--bx" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><circle cx="12" cy="4" r="2" fill="currentColor"></circle><path fill="currentColor" d="M12 18h2v-5h2V9c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v4h2v5h2z"></path><path fill="currentColor" d="m18.446 11.386l-.893 1.789C19.108 13.95 20 14.98 20 16c0 1.892-3.285 4-8 4s-8-2.108-8-4c0-1.02.892-2.05 2.446-2.825l-.893-1.789C3.295 12.512 2 14.193 2 16c0 3.364 4.393 6 10 6s10-2.636 10-6c0-1.807-1.295-3.488-3.554-4.614z"></path></svg>
                            </div>
                            <div class="homec-features__content">
                                <h3 class="homec-features__title">Quotations</h3>
                                <p class="homec-features__text">Receive the most competitive quote from our Architect and project management team, always keeping your pre-determined budget in consideration.</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <a href="javascript:void(0)" class="homec-features__single">
                            <div class="icon-embed-xsmall w-embed">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--bx" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M16 14h.5c.827 0 1.5-.673 1.5-1.5v-9c0-.827-.673-1.5-1.5-1.5h-13C2.673 2 2 2.673 2 3.5V18l5.333-4H16zm-9.333-2L4 14V4h12v8H6.667z"></path><path fill="currentColor" d="M20.5 8H20v6.001c0 1.1-.893 1.993-1.99 1.999H8v.5c0 .827.673 1.5 1.5 1.5h7.167L22 22V9.5c0-.827-.673-1.5-1.5-1.5z"></path></svg>
                            </div>
                            <div class="homec-features__content">
                                <h3 class="homec-features__title">Design & Materials</h3>
                                <p class="homec-features__text">Select from a broad assortment of materials and designs to customize your space exactly as you've always envisioned.</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <a href="javascript:void(0)" class="homec-features__single">
                            <div class="icon-embed-xsmall w-embed">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--bx" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm0 18a8 8 0 1 1 8-8a8 8 0 0 1-8 8z"></path><path fill="currentColor" d="M12 11c-2 0-2-.63-2-1s.7-1 2-1s1.39.64 1.4 1h2A3 3 0 0 0 13 7.12V6h-2v1.09C9 7.42 8 8.71 8 10c0 1.12.52 3 4 3c2 0 2 .68 2 1s-.62 1-2 1c-1.84 0-2-.86-2-1H8c0 .92.66 2.55 3 2.92V18h2v-1.08c2-.34 3-1.63 3-2.92c0-1.12-.52-3-4-3z"></path></svg>
                            </div>
                            <div class="homec-features__content">
                                <h3 class="homec-features__title">Work In Progress</h3>
                                <p class="homec-features__text">Once approved, our team will work on your project, offering regular updates and ensuring timely completion.</p>
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
                    <span class="homec-section__badge homec-primary-color homec-section__badge--small m-0">All-In-One Property Management Platform</span>
                    <h2 class="homec-section__title">Experience the power of unified control</h2>
                </div>
            </div>
        </div>
        <div class="container homec-container-medium">
            <div class="row homec-container-medium__row align-items-center">
                <div class="col-lg-6 col-12 mg-top-30">
                    <div class="homec-section__head">
                        <h2 class="homec-section__title mg-btm-30">Residential construction</h2>
                        <p>Whether you're building a new residence or renovating an existing one, our skilled team is by your side throughout the entire process. Our comprehensive residential construction services encompass new construction, renovations, restorations, and remodeling, ensuring your vision becomes a reality</p>
                        <div class="mg-top-30">
                            <a href="/contact" class="homec-btn"><span>Build with us</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 mg-top-30 d-none-tab">
                    <!-- Support Img -->
                    <div class="homec-support-img">
                        <img src="{{ asset('frontend/assets/img/services/development/residential construction.webp') }}" alt="Under-construction residential building at dusk">
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
                        <img src="{{ asset('frontend/assets/img/services/development/development-2.webp') }}" alt="Indoor construction site with scattered materials">
                    </div>
                    <!-- End Support Img -->
                </div>
                <div class="col-lg-6 col-12 mg-top-30">
                    <div class="homec-section__head">
                        <h2 class="homec-section__title mg-btm-30">Commercial construction</h2>
                        <p>For commercial property owners, we offer a range of services, including restoration, construction, and roofing, tailored to various spaces such as offices, warehouses, and restaurants. Our expertise in turnkey projects means we can secure the best bids, ensuring your commercial project is a success</p>
                        <div class="mg-top-30">
                            <a href="/contact" class="homec-btn"><span>Elevate your business</span></a>
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
        <img class="homec-shape-single homec-shape-2" src="{{ asset('frontend/assets/img/anim-shape-2.svg') }}" alt="icon">
        <img class="homec-shape-single homec-shape-3" src="{{ asset('frontend/assets/img/anim-shape-3.svg') }}" alt="icon">
    </div>
    <div class="container">
        <div class="container homec-container-medium">
            <div class="row homec-container-medium__row align-items-center">
                <div class="col-lg-6 col-12 mg-top-30">
                    <div class="homec-section__head">
                        <h2 class="homec-section__title mg-btm-30">Disaster construction</h2>
                        <p>In times of crisis, our disaster construction team acts swiftly to assess the damage, implement temporary solutions, and devise a comprehensive plan for rebuilding and fortifying your home or workspace. Whether facing minor or major damage, count on us to restore normalcy quickly and efficiently.</p>
                        <div class="mg-top-30">
                            <a href="/contact" class="homec-btn"><span>Rebuild with us</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 mg-top-30 d-none-tab">
                    <!-- Support Img -->
                    <div class="homec-support-img">
                        <img src="{{ asset('frontend/assets/img/services/development/disaster construction.webp') }}" alt="Damaged house under post-disaster reconstruction">
                    </div>
                    <!-- End Support Img -->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="service-wrap-mrg mg-btm-40">
    <div class="row align-items-center row-mg-lr-0">
        <div class="col-lg-6 col-12 col-pd-lr-0">
            <section id="hero" class="homec-hero service-hero homec-bg-cover p-relative" style="background-image:url('{{ asset('frontend/assets/img/services/development/disaster construction.webp') }}');">
                <div class="service-homec-overlay1"></div>
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-10 offset-md-1 col-12">
                                <div class="homec-hero__inner service-hero_inner">
                                    <!-- Hero Content -->
                                    <div class="homec-hero__content homec-hero__content-mt-0">
                                        <h2 class="homec-hero__title homec-hero__title-nor-pos">Disaster construction</h2>
                                        <p>In times of crisis, our disaster construction team acts swiftly to assess the damage, implement temporary solutions, and devise a comprehensive plan for rebuilding and fortifying your home or workspace. </p>

                                        <div class="mg-top-40 d-flex justify-content-center w-100">
                                            <a href="/contact" class="homec-btn"><span>Rebuild with us</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        <div class="col-lg-6 col-12 col-pd-lr-0">
        <section id="hero" class="homec-hero service-hero homec-bg-cover p-relative" style="background-image:url('{{ asset('frontend/assets/img/services/development/development-bg1.webp') }}');">
                <div class="service-homec-overlay"></div>
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-10 offset-md-1 col-12">
                                <div class="homec-hero__inner service-hero_inner">
                                    <!-- Hero Content -->
                                    <div class="homec-hero__content homec-hero__content-mt-0">
                                        <h2 class="homec-hero__title homec-hero__title-nor-pos">Permits & Permissions</h2>
                                        <p>Expect your first distribution roughly 3-6 months from the start of your investment, while our team takes care of finding, designing, and launching profitable properties for your portfolio.</p>

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

<!-- homec Hero -->
<section id="hero" class="homec-hero service-hero homec-bg-cover p-relative  d-none" style="background-image:url('{{ asset('frontend/assets/img/services/development/development-bg1.webp') }}');">
    <div class="homec-overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-10 offset-md-1 col-12">
                    <div class="homec-hero__inner service-hero_inner">
                        <!-- Hero Content -->
                        <div class="homec-hero__content homec-hero__content-mt-0">
                            <h2 class="homec-hero__title homec-hero__title-nor-pos">Permits & Permissions</h2>
                            <p>Expect your first distribution roughly 3-6 months from the start of your investment, while our team takes care of finding, designing, and launching profitable properties for your portfolio.</p>

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
