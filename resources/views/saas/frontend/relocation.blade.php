@extends('saas.frontend.layouts.app')

@section('content')
<!-- homec Hero -->
<section id="hero" class="homec-hero service-hero homec-bg-cover p-relative" style="background-image:url('{{ asset('frontend/assets/img/services/relocation/relocation-bg.webp') }}');">

    <div class="homec-overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-10 offset-md-1 col-12">
                    <div class="homec-hero__inner service-hero_inner">
                        <!-- Hero Content -->
                        <div class="homec-hero__content homec-hero__content-mt-0">
                            <h1 class="homec-hero__title homec-hero__title-nor-pos">Plan your move with us</h1>
                            <p>Not just a move planning tool, but a trusted guide for informed decisions, offering comprehensive services from reliable movers who uphold their promises.</p>
                            <div class="mg-top-40 d-flex justify-content-center w-100">
                                <a href="https://relocation.prroperties.com/" class="homec-btn"><span>Schedule a move</span></a>
                            </div>
                        </div>
                    </div>
                </div>

                     @include('feature')

            
        </div>
    </div>
    <div class="powered-by">
        <a href="https://relocation.prroperties.com/" target="_blank"><img src="{{ asset('frontend/assets/img/powered-by-renesent.png') }}" alt=""></a>
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
                    <h2 class="homec-section__title">Relocating can be easy and fun too</h2>
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
                                <h3 class="homec-features__title">IOS/ Android App</h3>
                                <p class="homec-features__text">Schedule moves using our mobile app, controlling prices to vehicle size. Select your moving date and time, get cost estimates, and add additional services like packing, unpacking, storage, and more.</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <a href="javascript:void(0)" class="homec-features__single">
                            <div class="icon-embed-xsmall w-embed">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--bx" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><circle cx="12" cy="4" r="2" fill="currentColor"></circle><path fill="currentColor" d="M12 18h2v-5h2V9c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v4h2v5h2z"></path><path fill="currentColor" d="m18.446 11.386l-.893 1.789C19.108 13.95 20 14.98 20 16c0 1.892-3.285 4-8 4s-8-2.108-8-4c0-1.02.892-2.05 2.446-2.825l-.893-1.789C3.295 12.512 2 14.193 2 16c0 3.364 4.393 6 10 6s10-2.636 10-6c0-1.807-1.295-3.488-3.554-4.614z"></path></svg>
                            </div>
                            <div class="homec-features__content">
                                <h3 class="homec-features__title">Verified Movers</h3>
                                <p class="homec-features__text">Trust our company's efficient, punctual, and attentive team of local movers. They're fully background-checked and skilled to ensure your move is smooth.</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <a href="javascript:void(0)" class="homec-features__single">
                            <div class="icon-embed-xsmall w-embed">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--bx" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M16 14h.5c.827 0 1.5-.673 1.5-1.5v-9c0-.827-.673-1.5-1.5-1.5h-13C2.673 2 2 2.673 2 3.5V18l5.333-4H16zm-9.333-2L4 14V4h12v8H6.667z"></path><path fill="currentColor" d="M20.5 8H20v6.001c0 1.1-.893 1.993-1.99 1.999H8v.5c0 .827.673 1.5 1.5 1.5h7.167L22 22V9.5c0-.827-.673-1.5-1.5-1.5z"></path></svg>
                            </div>
                            <div class="homec-features__content">
                                <h3 class="homec-features__title">Complete Insurance</h3>
                                <p class="homec-features__text">Prroperties ensures peace of mind in every move with comprehensive relocation insurance - safeguarding your valuable possessions so you can enjoy your new home worry-free.</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <a href="javascript:void(0)" class="homec-features__single">
                            <div class="icon-embed-xsmall w-embed">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--bx" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm0 18a8 8 0 1 1 8-8a8 8 0 0 1-8 8z"></path><path fill="currentColor" d="M12 11c-2 0-2-.63-2-1s.7-1 2-1s1.39.64 1.4 1h2A3 3 0 0 0 13 7.12V6h-2v1.09C9 7.42 8 8.71 8 10c0 1.12.52 3 4 3c2 0 2 .68 2 1s-.62 1-2 1c-1.84 0-2-.86-2-1H8c0 .92.66 2.55 3 2.92V18h2v-1.08c2-.34 3-1.63 3-2.92c0-1.12-.52-3-4-3z"></path></svg>
                            </div>
                            <div class="homec-features__content">
                                <h3 class="homec-features__title">Packing Assistance</h3>
                                <p class="homec-features__text">Our experienced team's professional packing and unpacking services save you time and energy, specializing in careful handling of delicate, breakable, or valuable items like fine art and appliances.</p>
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
                    <span class="homec-section__badge homec-primary-color homec-section__badge--small m-0">Stress-free experience </span>
                    <h2 class="homec-section__title">Book your move with our trusted partner </h2>
                </div>
            </div>
        </div>
        <div class="container homec-container-medium">
            <div class="row homec-container-medium__row align-items-center">
                <div class="col-lg-6 col-12 mg-top-30">
                    <div class="homec-section__head">
                        <h2 class="homec-section__title mg-btm-30">On-demand independent drivers </h2>
                        <p>When it comes to planning your move, we're more than just a tool; we're your trusted guide for making informed decisions. Our comprehensive relocation assistance services connect you with reliable movers who uphold their promises, ensuring a smooth transition to your new space.</p>
                        <div class="mg-top-30">
                            <a href="https://relocation.prroperties.com/" target="_blank" class="homec-btn"><span>Book now</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 mg-top-30 d-none-tab">
                    <!-- Support Img -->
                    <div class="homec-support-img">
                        <img src="{{ asset('frontend/assets/img/services/relocation/relocate-with-expert-assistance.webp') }}" alt="Renesent employee standing by a van ready for relocation services">
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
                        <img src="{{ asset('frontend/assets/img/services/relocation/hustle free move.webp') }}" alt="Renesent worker with dolly by truck, showcasing easy moving app">
                    </div>
                    <!-- End Support Img -->
                </div>
                <div class="col-lg-6 col-12 mg-top-30">
                    <div class="homec-section__head">
                        <h2 class="homec-section__title mg-btm-30">Hassle-free move
</h2>
                        <p>Simply log into our user-friendly app, input your pickup and drop-off locations, choose the right vehicle size, and leave the rest to our experienced team. Enjoy a stress-free move and settle comfortably into your new home. Schedule your delivery today for a seamless experience.</p>
                        <div class="mg-top-30">
                            <a href="https://relocation.prroperties.com/" target="_blank" class="homec-btn"><span>Book your move</span></a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <p class="power-by">Powered by <a href="https://relocation.prroperties.com/" target="_blank">Renesent</a></p>
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
                        <h2 class="homec-section__title mg-btm-30">Precious items, secure location
</h2>
                        <p>Each item in your home, be it furniture or a gadget, is important and we treat it as such. We ensure the safe relocation of your high-value items without any damage, using bubble wrap and corrugated packing to prevent any scratches during transport. Our team handles your precious belongings with the utmost care.</p>
                        <div class="mg-top-30">
                         <a href="/pricing" class="homec-btn"><span>Get in touch</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 mg-top-30 d-none-tab">
                    <!-- Support Img -->
                    <div class="homec-support-img">
                        <img src="{{ asset('frontend/assets/img/services/relocation/precise.webp') }}" alt="Confident young professional in Renesent t-shirt beside white truck">
                    </div>
                    <!-- End Support Img -->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="service-wrap-mrg  mg-btm-40">
    <div class="row align-items-center row-mg-lr-0">
        <div class="col-lg-6 col-12 col-pd-lr-0">
            <section id="hero" class="homec-hero service-hero homec-bg-cover p-relative" style="background-image:url('{{ asset('frontend/assets/img/services/relocation/precise.webp') }}');">
                <div class="service-homec-overlay1"></div>
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-10 offset-md-1 col-12">
                                <div class="homec-hero__inner service-hero_inner">
                                    <!-- Hero Content -->
                                    <div class="homec-hero__content homec-hero__content-mt-0">
                                        <h2 class="homec-hero__title homec-hero__title-nor-pos">Secure Items & location</h2>
                                        <p>Each item in your home, be it furniture or a gadget, is important and we treat it as such. We ensure the safe relocation of your high-value items without any damage, using bubble wrap and corrugated packing to prevent any scratches during transport. Our team handles your precious belongings with the utmost care.</p>

                                        <div class="mg-top-40 d-flex justify-content-center w-100">
                                            <a href="https://prroperties.com/contact" target="_blank" class="homec-btn"><span>Get in touch</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        <div class="col-lg-6 col-12 col-pd-lr-0">
        <section id="hero" class="homec-hero service-hero homec-bg-cover p-relative" style="background-image:url('{{ asset('frontend/assets/img/services/relocation/relocation-bg1.webp') }}');">
                <div class="service-homec-overlay"></div>
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-10 offset-md-1 col-12">
                                <div class="homec-hero__inner service-hero_inner">
                                    <!-- Hero Content -->
                                    <div class="homec-hero__content homec-hero__content-mt-0">
                                        <h2 class="homec-hero__title homec-hero__title-nor-pos">Secured storage spaces</h2>
                                        <p>Prroperties simplifies the storage process, offering round-the-clock access to price comparisons and reservations with local providers. Whether you're moving locally or nationally, Prroperties is your trusted solution for secure storage spaces. Ensure the safety of your belongings with our easy storage solutions.</p>

                                        <div class="mg-top-40 d-flex justify-content-center w-100">
                                            <a href="https://relocation.prroperties.com/" target="_blank" class="homec-btn homec-btn-service"><span>Get your storage space</span></a>
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
<section id="hero" class="homec-hero service-hero homec-bg-cover p-relative d-none" style="background-image:url('{{ asset('frontend/assets/img/services/relocation/relocation-bg1.webp') }}');">
    <div class="homec-overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-10 offset-md-1 col-12">
                    <div class="homec-hero__inner service-hero_inner">
                        <!-- Hero Content -->
                        <div class="homec-hero__content homec-hero__content-mt-0">
                            <h2 class="homec-hero__title homec-hero__title-nor-pos">Secured storage spaces</h2>
                            <p>Prroperties simplifies the storage process, offering round-the-clock access to price comparisons and reservations with local providers. Whether you're moving locally or nationally, Prroperties is your trusted solution for secure storage spaces. Ensure the safety of your belongings with our easy storage solutions.</p>

                            <div class="mg-top-40 d-flex justify-content-center w-100">
                        <a href="/pricing" class="homec-btn"><span>Get your storage space</span></a>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- End homec Hero -->
@endsection
