@extends('saas.frontend.layouts.app')

@section('content')

<!-- homec Hero -->
<section id="hero" class="homec-hero service-hero homec-bg-cover p-relative" style="background-image:url('{{ asset('frontend/assets/img/propety-vs-rental/banner.webp') }}');">

    <div class="homec-overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-10 offset-md-1 col-12">
                    <div class="homec-hero__inner service-hero_inner">
                        <!-- Hero Content -->
                        <div class="homec-hero__content homec-hero__content-mt-0">
                            <h1 class="homec-hero__title homec-hero__title-nor-pos">Recuperate lost revenue on vacation rentals with Prroperties</h1>
                            <p>With flexible to mid-term rentals, you increase your average revenue by 33%, reduce your workload, and reach above 80% occupancy.</p>
                            
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

<section class="homec-bg-cover service-features pd-top-70 pd-btm-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Section TItle -->
                <div class="homec-section__head text-center mg-btm-90">
                    <h2 class="homec-section__title">Why switch to Prroperties</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12 mg-btm-50">
                        <div class="co-rent-single">
                            <div class="homec-features__content">
                                <div class="co-rent-icon mg-btm-20"><img src="{{ asset('frontend/assets/img/propety-vs-rental/earn-more-rental.webp') }}" alt=""></div>
                                <h3 class="homec-features__title mg-btm-10">Earn more in rental revenue!</h3>
                                <p>Flexible short-mid-long term rental models allow higher occupancy with lower turnover costs to increase steady income!</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-12 mg-btm-50 d-none">
                        <div class="co-rent-single">
                            <div class="homec-features__content">
                                <div class="co-rent-icon mg-btm-20"><img src="{{ asset('frontend/assets/img/propety-vs-rental/fewer-vacancies.webp') }}" alt=""></div>
                                <h3 class="homec-features__title mg-btm-10">Fewer vacancies</h3>
                                <p>Short-term rentals derive around 40% occupancy, while Prroperties averages above 80%.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 mg-btm-50">
                        <div class="co-rent-single">
                            <div class="homec-features__content">
                                <div class="co-rent-icon mg-btm-20"><img src="{{ asset('frontend/assets/img/propety-vs-rental/your-first-booking.webp') }}" alt=""></div>
                                <h3 class="homec-features__title mg-btm-10">Your first booking within days</h3>
                                <p>Faster occupancy with our expert marketing and customer acquisition teams.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 mg-btm-50">
                        <div class="co-rent-single">
                            <div class="homec-features__content">
                                <div class="co-rent-icon mg-btm-20"><img src="{{ asset('frontend/assets/img/propety-vs-rental/verified-renters.webp') }}" alt=""></div>
                                <h3 class="homec-features__title mg-btm-10">Verified renters</h3>
                                <p>Our advertising efforts on significant search engines and platforms attract thousands of prospects. Prroperties screens complete criminal background, income, and eviction reports.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 mg-btm-50">
                        <div class="co-rent-single">
                            <div class="homec-features__content">
                                <div class="co-rent-icon mg-btm-20"><img src="{{ asset('frontend/assets/img/propety-vs-rental/less-regulation-fewer-risks.webp') }}" alt=""></div>
                                <h3 class="homec-features__title mg-btm-10">Less regulation, fewer risks</h3>
                                <p>Vacation rentals are constantly under scrutiny and becoming too complex and costly for investors, while with Prroperties, we continuously develop new strategies and explore new markets</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 mg-btm-50">
                        <div class="co-rent-single">
                            <div class="homec-features__content">
                                <div class="co-rent-icon mg-btm-20"><img src="{{ asset('frontend/assets/img/propety-vs-rental/flexible-occupancy-fewer.webp') }}" alt=""></div>
                                <h3 class="homec-features__title mg-btm-10">Flexible occupancy and fewer vacancies</h3>
                                <p>Average members stay close to 12 months. Short-term rentals derive around 40% occupancy, while Prroperties averages above 80%.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 mg-btm-50">
                        <div class="co-rent-single">
                            <div class="homec-features__content">
                                <div class="co-rent-icon mg-btm-20"><img src="{{ asset('frontend/assets/img/propety-vs-rental/strengthen-your-community.webp') }}" alt=""></div>
                                <h3 class="homec-features__title mg-btm-10">Strengthen your community</h3>
                                <p>Make a meaningful impact by providing affordable spaces to quality renters, saving hundreds of dollars monthly!</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
       
    </div>
</section>


<section class="homec-bg-cover service-features pd-top-50 pd-btm-50 homec-faq-bg">
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
                    <h2 class="homec-section__title">Compare Prroperties vs. vacation rentals</h2>
                    <p>How does a Miami rental compare?</p>
                </div>
            </div>
        </div>

        <div class="jss80">
            <table class="jss81">
            <thead>
                <tr class="jss82">
                    <th class="typographyRoot headingH3 jss84">Prroperties</th>
                    <th class="typographyRoot headingH3 jss84">Vacation rentals</th>
                </tr>
                <tr class="jss83">
                    <th class="typographyRoot body jss84 jss85">**80% Occupancy - 25 days (8 rooms per property)</th>
                    <th class="typographyRoot body jss84 jss85">*60% Occupancy - <span></span>18 days</th>
                </tr>
            </thead>
            <tbody>
                <tr class="jss86">
                    <td class="jss87">
                        <div class="typographyRoot headingH1">$282</div>
                        <div class="typographyRoot headingH5">Rent per week</div>
                    </td>
                    <td class="jss87">
                        <div class="typographyRoot headingH1">$290</div>
                        <div class="typographyRoot headingH5">Rent per week</div>
                    </td>
                </tr>
                <tr class="jss86">
                    <td class="jss87">
                        <div class="typographyRoot headingH1">$6,800</div>
                        <div class="typographyRoot headingH5">Gross monthly earnings</div>
                    </td>
                    <td class="jss87">
                        <div class="typographyRoot headingH1">$5,320</div>
                        <div class="typographyRoot headingH5">Gross monthly earnings</div>
                    </td>
                </tr>
                <tr class="jss86">
                    <td class="jss87">
                        <div class="typographyRoot headingH1">$718</div>
                        <div class="typographyRoot headingH5">Platform fees (12%)</div>
                    </td>
                    <td class="jss87">
                        <div class="typographyRoot headingH1">$179</div>
                        <div class="typographyRoot headingH5">Platform fees (3%)</div>
                    </td>
                </tr>
                <tr class="jss86">
                    <td class="jss87">
                        <div class="typographyRoot headingH1" style="color:#128050">$3,291</div>
                        <div class="typographyRoot headingH5">Net monthly earnings</div>
                    </td>
                    <td class="jss87">
                        <div class="typographyRoot headingH1" style="color:#CC4848">$2,276</div>
                        <div class="typographyRoot headingH5">Net monthly earnings</div>
                    </td>
                </tr>
            </tbody>
            </table>
        </div>
       
    </div>
</section>


@include('Testimonial')

<div class="mg-btm-40"></div>


<section class="homec-bg-cover service-features pd-top-50 pd-btm-90 homec-faq-bg d-none">
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
                        <h2 class="homec-section__title mg-btm-30">Switch to Prroperties and start your hosting today</h2>
                        <p>Automated dashboard and easy rental management at your fingertips.</p>
                        <div class="mg-top-30">
                            <a href="/contact" class="homec-btn"><span>Start hosting</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 mg-top-30 d-none-tab">
                    <!-- Support Img -->
                    <div class="homec-support-img">
                        <img src="{{ asset('frontend/assets/img/propety-vs-rental/switch-to-prroperties.webp') }}" alt="">
                    </div>
                    <!-- End Support Img -->
                </div>
            </div>
        </div>
    </div>
</section>

@endsection