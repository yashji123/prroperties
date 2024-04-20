@extends('saas.frontend.layouts.app')

@section('content')

<!-- Pricing -->
<section class="pd-top-90 pd-btm-80">
    <div class="container">
        <div class="row">

        <div class="col-12">
            <div class="homec-section__head text-center mg-btm-50 mg-top-30">
                <span class="homec-section__badge homec-primary-color homec-section__badge--small m-0">Flexible plans, transparent pricing, meeting your needs</span>
                <h1 class="homec-section__title">Flexible plans, no hidden costs!</h1>
            </div>
        </div>

        <div class="pricing-table-container">
            <div class="pricing-table">
            <div class="table best-value1">
                <span class="value">Try 1 month free! CODE: PRRSOFT23</span>
                    <div class="content">
                        <h3>Software</h3>

                        <div class="price-container">
                            <span class="price basic-price ">$1</span>
                            <span class="plan-duration">/ Per Door / Per Month</span>
                        </div>

                        <div class="number-door d-flex align-item-center description justify-content-space">
                            <div>No of Doors: <input type="number" id="software-doors" value="0" min="0" oninput="updatePrice('software', 1)">
                            </div>
                            <div class="calculated-price">Total: <span class="per-total-price">$<span id="software-price">0</span></span></div>
                        </div>

                        <div class="description">
                            This plan is the best for individuals
                        </div>

                        <ul class="features">
                            <li>All-in-one technology/ CRM </li>
                            <li>Tenant portal and communication tools Reporting & analytics</li>
                        </ul>

                        <div class="view-more-feature"><a href="#pricingTab" class="smooth-scroll">View more features</a></div>

                        <!-- <a href="#" class="btn"></a> -->
                        <a href="#" onclick="choosePlan('software')" class="homec-btn homec-btn__thrid"><span>Choose Plan</span></a>
                        
                    </div>
                    <img class="table-bg"  src="{{ asset('frontend/assets/img/pricing/bg-shape1.svg') }}" alt="">
                </div>

                <!-- End of basic plan -->


                <div class="table best-value">

                    <div class="maintenance-tab">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-pro-tab" data-bs-toggle="tab" data-bs-target="#nav-pro" type="button" role="tab" aria-selected="false">Pro</button>
                                <button class="nav-link" id="nav-standard-tab" data-bs-toggle="tab" data-bs-target="#nav-standard" type="button" role="tab" aria-selected="true">Standard</button>
                            </div>
                        </nav>
                        
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane active show" id="nav-pro" role="tabpanel" aria-labelledby="nav-pro-tab">
                                <div class="content">
                                    <h3>Maintenance pro</h3>

                                    <div class="price-container">
                                        <span class="price professional-price ">$99</span>
                                        <span class="plan-duration">/ Per Door / Per Month</span>
                                    </div>

                                    <div class="number-door d-flex align-item-center description justify-content-space">
                                        <div>No of Doors: <input type="number" id="maintenance-doors" value="0" oninput="updatePrice('maintenance', 99)"></div>
                                    <div class="calculated-price">Total: <span class="per-total-price">$<span id="maintenance-price">0</span></span></div>
                                    </div>

                                    <div class="description">
                                        This plan is for businesses are getting started
                                    </div>

                                    <ul class="features">
                                        <li>Full Property Inspection</li>
                                        <li>Handyman On Demand</li>
                                        <li>General Contractor Licensed</li>
                                    </ul>

                                    <div class="view-more-feature col-white"><a href="#pricingTab" class="smooth-scroll">View more features</a></div>

                                    <!--<a href="#" class="homec-btn"><span>Choose Plan</span> </a>-->
                                    <a href="#" onclick="choosePlan('maintenance')" class="homec-btn"><span>Choose Plan</span></a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-standard" role="tabpanel" aria-labelledby="nav-standard-tab">
                                <div class="content">
                                    <h3>Maintenance standard</h3>

                                    <div class="price-container">
                                        <span class="price professional-price ">$29</span>
                                        <span class="plan-duration">/ Per Door / Per Month</span>
                                    </div>

                                    <div class="number-door d-flex align-item-center description justify-content-space">
                                        <div>No of Doors: <input type="number" id="maintenance-standard-doors" value="0" oninput="updatePrice('maintenance-standard', 29)"></div>
                                        <div class="calculated-price">Total: <span class="per-total-price">$<span id="maintenance-standard-price">0</span></span></div>
                                    </div>

                                    <div class="description">
                                        This plan is for businesses are getting started
                                    </div>

                                    <ul class="features">
                                        <li>All-in-one real time Dashboard.</li>
                                        <li>24/7 Home Emergency Support</li>
                                        <li>Instant booking with Service Providers</li>
                                    </ul>

                                    <div class="view-more-feature col-white"><a href="#pricingTab" class="smooth-scroll">View more features</a></div>

                                    <!--<a href="#" class="homec-btn"><span>Choose Plan</span> </a>-->
                                    <a href="#" onclick="choosePlan('maintenance-standard')" class="homec-btn"><span>Choose Plan</span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    


                    <img class="table-bg"  src="{{ asset('frontend/assets/img/pricing/bg-shape2.svg') }}" alt="">
                </div>

                <!-- End of Professional Plan -->


                <div class="table">
                    <div class="content">
                        <h3>Property management</h3>

                        <div class="price-container">
                            <span class="price business-price property-price-head">Request a Quote</span>
                        </div>

                        <div class="description">
                            This plan is the best for large businesses
                        </div>

                        <ul class="features">
                            <li>All-in-one technology / crm owner & tenant portal </li>
                            <li>24/7 virtual staff</li>
                            <li>Off/on-site property management</li>
                            <li>Property surveillance</li>
                        </ul>

                        <div class="view-more-feature"><a href="#pricingTab" class="smooth-scroll">View more features</a></div>

                        <a href="#propertyManagform" class="homec-btn homec-btn__thrid" data-bs-toggle="modal"><span>Choose Plan</span> </a>
                     
                    </div>
                    <img class="table-bg"  src="{{ asset('frontend/assets/img/pricing/bg-shape1.svg') }}" alt="">
                </div>
            </div>
            </div>

        <div class="d-none">
            <div class="col-lg-4 col-md-4 col-12 mg-top-30">
                <div class="homec-psingle">
                    <div class="homec-psingle__head">
                        <h4 class="homec-psingle__title">Software</h4>
                        <div class="homec-psingle__amount">
                            <span class="homec-psingle__currency">$</span>1<span>/ Per door</span>
                        </div>
                    </div>
                    
                    <div class="homec-psingle__body">
                        <ul class="homec-psingle__list">
                            <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Recurring rent collection</li>
                            <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>All-in-one technology/ crm to manage properties and tenants</li>
                            <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Owner portal</li>
                            <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Tenant portal and communication tools</li>
                            <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Tenant screening and background verification</li>
                            <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Tenant's maintenance requests</li>
                            <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Tenant complete move-in/out process</li>
                            <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Esignatures & online rental applications</li>
                            <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Mass announcements</li>
                            <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Best-in-class optimized directory listings</li>
                            <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Listings on all top booking sites</li>
                            <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Monitor and surveillance of properties around the clock</li>
                            <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Renters insurance</li>
                            <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Financials, bookkeeping, and accounts payable/receivable</li>
                            <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>24/7 virtual staff to support any tenant emergencies</li>
                            <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Off/on-site property management</li>
                            <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Reporting & analytics</li>
                            <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Vendor and contractor directory</li>
                        </ul>
                        
                        <div class="homec-psingle__button">
                            <a href="/owner-register" class="homec-btn"><span>Try for free</span></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-4 col-12 mg-top-30">
                <div class="homec-psingle">
                    <div class="homec-psingle__head">
                        <h4 class="homec-psingle__title">Property management</h4>

                        <div class="mg-top-20">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#shortTerm">Short term</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#longTerm">Long term</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <!-- Tab start -->
                                <div class="tab-pane active" id="shortTerm">
                                    <div class="price-txt">
                                        <div class="homec-psingle__amount">
                                            <span class="price-spa">15%</span><br/> Rental <div class="mg-top-10 mg-btm-10">+</div>
                                            <span class="price-spa">50%</span><br/> Downpayment 1<sup>st</sup> month
                                        </div>
                                    </div>
                                </div>
                                <!-- Tab end -->

                                <!-- Tab start -->
                                <div class="tab-pane fade" id="longTerm">
                                    <div class="price-txt">
                                        <div class="homec-psingle__amount">
                                            <span class="price-spa">5%</span><br/> Rental <div class="mg-top-10 mg-btm-10">+</div>
                                            <span class="price-spa">50%</span><br/> Downpayment 1<sup>st</sup> month
                                        </div>
                                    </div>
                                </div>
                                <!-- Tab end -->
                            </div>
                            <!-- Tab panes -->

                        </div>

                        <div class="homec-psingle__body">
                            <ul class="homec-psingle__list pd-lt-0">
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>All-in-one technology to manage properties and tenants</li>
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Recurring rent collection</li>
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Maintenance requests</li>
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Lease management</li>
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Landlord support</li>
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Property surveillance</li>
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Tenant screening/ background check</li>
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Property maintenance</li>
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>24/7 multilingual virtual staff to support any tenant emergencies</li>
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Help secure short & long-term tenants</li>
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Manage short-term (str management) guests' stays</li>
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Tenant screening and background verification</li>
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Solve tenant's maintenance issues</li>
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Monitor and surveillance of properties around the clock</li>


                                <li class="toggleable" style="display: none;"><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Tenant complete move-in/out process</li>
                                <li class="toggleable" style="display: none;"><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Funnel campaigns to drive real estate buyer and seller leads</li>
                                <li class="toggleable" style="display: none;"><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Manage reputation reviews and listings</li>
                                <li class="toggleable" style="display: none;"><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Utility bill payments</li>
                                <li class="toggleable" style="display: none;"><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Help with taxes and permits</li>
                                <li class="toggleable" style="display: none;"><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Off/on-site property management</li>
                                <li class="toggleable" style="display: none;"><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Financials, bookkeeping, and accounts payable/receivable</li>
                                <li class="toggleable" style="display: none;"><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Guest screening & damage coverage</li>
                                <li class="toggleable" style="display: none;"><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Reporting & analytics</li>
                                <li class="toggleable" style="display: none;"><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Advertising</li>
                                <li class="toggleable" style="display: none;"><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Renovation assistance</li>
                            </ul>

                            <button id="readMoreButton">Read More >></button>
                            
                           

                            <div class="homec-psingle__button cus-active">
                                <a href="/owner-register" class="homec-btn"><span>Try for free</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-4 col-12 mg-top-30">
                <div class="homec-psingle">
                    <div class="homec-psingle__head">
                        <h4 class="homec-psingle__title">Maintenance</h4>
                        <div class="homec-psingle__amount">
                            <span class="homec-psingle__currency"></span>15%<span> From rental income</span>
                        </div>
                    </div>

                    <div class="homec-psingle__body">
                        <ul class="homec-psingle__list">
                            <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Scheduled inspections</li>
                            <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Preventative maintenance</li>
                            <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Exclusive access to certified professionals</li>
                            <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Comprehensive coverage</li>
                            <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Seasonal maintenance warranty compliance</li>
                            <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Safety checks</li>
                            <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Lawn and landscape care</li>
                            <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Filter replacement reminders</li>
                            <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Clear leaves and yard debris</li>
                            <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Water and leakage issues resolution</li>
                            <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Clean and inspect gutters</li>
                            <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Landscaping and exterior maintenance</li>
                            <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Inspect lawn sprinklers</li>
                            <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Utility monitoring</li>
                            <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Energy-efficiency assessments</li>
                            <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Security and alarm system upgrades</li>
                            <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Cost tracking and budgeting</li>
                            <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Emergency repair services</li>
                        </ul>
                        
                        <div class="homec-psingle__button">
                            <a href="/owner-register" class="homec-btn"><span>Try for free</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </div>
</section>
<!-- End Priicng -->


<section class="homec-bg-cover service-features pd-top-90 pd-btm-120 homec-featured-property-bg pricing-tab" id="pricingTab">
    <div class="col-12">
        <!-- Section TItle -->
        <div class="homec-section__head text-center mg-btm-60">
            <span class="homec-section__badge homec-primary-color homec-section__badge--small m-0">Compare your plan features</span>
            <h2 class="homec-section__title">Pricing features</h2>
        </div>
    </div>

    <div class="container">
        <div class="container homec-container-medium">

        <div class="d-flex align-items-start">
            <div class="col-md-3">
                <div class="nav flex-column nav-pills nav-pills-custom me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="nav-link mb-3 p-4 shadow active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
                        <span class="font-weight-bold small">Software</span></a>
                    </button>
                    <button class="nav-link mb-3 p-4 shadow" id="v-pills-maintenance-tab" data-bs-toggle="pill" data-bs-target="#v-pills-maintenance" type="button" role="tab" aria-controls="v-pills-maintenance" aria-selected="false">
                        <span class="font-weight-bold small">Maintenance standard</span></a>
                    </button>
                    <button class="nav-link mb-3 p-4 shadow" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                        <span class="font-weight-bold small">Maintenance pro</span></a>
                    </button>
                    <button class="nav-link mb-3 p-4 shadow" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                        <span class="font-weight-bold small">Property management</span></a>
                    </button>
                </div>
            </div>

            <div class="col-md-9">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade shadow rounded bg-white show active p-3" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <ul class="homec-psingle__list d-flex justify-content-space">
                            <div class="col-md-6">
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Recurring rent collection</li>
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>All-in-one technology/ crm to manage properties and tenants</li>
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Owner portal</li>
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Tenant portal and communication tools</li>
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Tenant screening and background verification</li>
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Tenant's maintenance requests</li>
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Tenant complete move-in/out process</li>
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Esignatures & online rental applications</li>
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Mass announcements</li>
                            </div>

                            <div class="col-md-6">
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Best-in-class optimized directory listings</li>
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Listings on all top booking sites</li>
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Monitor and surveillance of properties around the clock</li>
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Renters insurance</li>
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Financials, bookkeeping, and accounts payable/receivable</li>
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Off/on-site property management</li>
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Reporting & analytics</li>
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Vendor and contractor directory</li>
                            </div>
                        </ul>
                    </div>

                    <div class="tab-pane fade shadow rounded bg-white p-3" id="v-pills-maintenance" role="tabpanel" aria-labelledby="v-pills-maintenance-tab">
                        <ul class="homec-psingle__list d-flex justify-content-space">
                            <div class="">
                            <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>24/7 Home Emergency Support for urgent repairs, leaks, heating issues and more</li>
                            <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Instant booking for HVAC, Handyman Electrical, and Plumbing jobs</li>
                            <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Same-day or next-day availability with vetted service providers</li>
                            <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Unlimited expert advice for bids, cost estimates, renovation planning and more Personalized Maintenance Plans to track, remind & book service pros</li>
                            </div>
                        </ul>
                    </div>

                    <div class="tab-pane fade shadow rounded bg-white p-3" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <ul class="homec-psingle__list d-flex justify-content-space">
                            <div class="col-md-6">
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Scheduled inspections</li>
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Preventative maintenance</li>
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Exclusive access to certified professionals</li>
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Comprehensive coverage</li>
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Seasonal maintenance warranty compliance</li>
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Safety checks</li>
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Lawn and landscape care</li>
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Filter replacement reminders</li>
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Clear leaves and yard debris</li>
                            </div>

                            <div class="col-md-6">
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Water and leakage issues resolution</li>
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Clean and inspect gutters</li>
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Landscaping and exterior maintenance</li>
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Inspect lawn sprinklers</li>
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Utility monitoring</li>
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Energy-efficiency assessments</li>
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Security and alarm system upgrades</li>
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Cost tracking and budgeting</li>
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Emergency repair services</li>
                            </div>
                        </ul>
                    </div>

                    <div class="tab-pane fade shadow rounded bg-white p-3" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                    <ul class="homec-psingle__list d-flex justify-content-space">
                            <div class="col-md-6">
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>All-in-one technology to manage properties and tenants</li>
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Short term</li>
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Long term</li>
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Recurring rent collection</li>
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Maintenance requests</li>
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Lease management</li>
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Landlord support</li>
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Property surveillance</li>
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Tenant screening/ background check</li>
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Property maintenance</li>
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>24/7 multilingual virtual staff to support any tenant emergencies</li>
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Help secure short & long-term tenants</li>
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Manage short-term (str management) guests' stays</li>
                            </div>

                            <div class="col-md-6">
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Tenant screening and background verification</li>
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Solve tenant's maintenance issues</li>
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Monitor and surveillance of properties around the clock</li>
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Tenant complete move-in/out process</li>
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Funnel campaigns to drive real estate buyer and seller leads</li>
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Manage reputation reviews and listings</li>
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Utility bill payments</li>
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Help with taxes and permits</li>
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Off/on-site property management</li>
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Financials, bookkeeping, and accounts payable/receivable</li>
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Guest screening & damage coverage</li>
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Reporting & analytics</li>
                                <li><span class="homec-psingle__icon homec-check-color"><i class="fas fa-check"></i></span>Advertising</li>
                            </div>
                        </ul>
                    
                    </div>

                </div>
            </div>
            
        </div>
        </div>
    </div>
</section>

<section class="homec-bg-cover pd-top-70 pd-btm-90 homec-faq-bg pricing-faq">
    <div class="container homec-container-medium">
        <div class="row homec-container-medium__row">
            <div class="col-12">
                <div class="homec-section__head text-center mg-btm-30 mg-top-60">
                    <span class="homec-section__badge homec-primary-color homec-section__badge--small m-0">If you want to know Frequently Ask Questions</span>
                    <h2 class="homec-section__title">FAQ</h2>
                </div>
            </div>

            <div class="col-lg-6 col-12">

                <div class="homec-accordion accordion accordion-flush" id="homec-accordion">
                    <!-- End Single Accordion -->
                    <div class="accordion-item homec-accordion__single mg-top-30">
                        <h2 class="accordion-header" id="homect-1-0">
                            <button class="accordion-button collapsed homec-accordion__heading" type="button" data-bs-toggle="collapse" data-bs-target="#ac-collapse1-0">What types of services does Prroperties offer?</button>
                        </h2>
                        <div id="ac-collapse1-0" class="accordion-collapse collapse" data-bs-parent="#homec-accordion">
                            <div class="accordion-body homec-accordion__body">
                                <p>Prroperties provides a wide range of services, including Property Management, Maintenance, Software All-in-one CRM, Relocation, and Investment solutions.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Accordion -->
                    
                    <!-- End Single Accordion -->
                    <div class="accordion-item homec-accordion__single mg-top-30">
                        <h2 class="accordion-header" id="homect-1-1">
                            <button class="accordion-button collapsed homec-accordion__heading" type="button" data-bs-toggle="collapse" data-bs-target="#ac-collapse1-1">How is the pricing structured for your services?</button>
                        </h2>
                        <div id="ac-collapse1-1" class="accordion-collapse collapse " data-bs-parent="#homec-accordion">
                            <div class="accordion-body homec-accordion__body">
                                <p>Our pricing varies depending on the service and the specific plan you choose. Each service may have different pricing options</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Accordion -->
                    
                    <!-- End Single Accordion -->
                    <div class="accordion-item homec-accordion__single mg-top-30">
                        <h2 class="accordion-header" id="homect-1-2">
                            <button class="accordion-button collapsed homec-accordion__heading" type="button" data-bs-toggle="collapse" data-bs-target="#ac-collapse1-2">How does the pricing for Software All-in-one CRM services work?</button>
                        </h2>
                        <div id="ac-collapse1-2" class="accordion-collapse collapse " data-bs-parent="#homec-accordion">
                            <div class="accordion-body homec-accordion__body"> 
                                <p>Our Software All-in-one CRM service is priced at $1 per door per month. You will be billed based on the number of doors you manage. The total cost is calculated by multiplying the number of doors by $1.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Accordion -->
                    
                    <!-- End Single Accordion -->
                    <div class="accordion-item homec-accordion__single mg-top-30">
                        <h2 class="accordion-header" id="homect-1-3">
                            <button class="accordion-button collapsed homec-accordion__heading" type="button" data-bs-toggle="collapse" data-bs-target="#ac-collapse1-3">Are there any additional charges for the Software plan?</button>
                        </h2>
                        <div id="ac-collapse1-3" class="accordion-collapse collapse " data-bs-parent="#homec-accordion">
                            <div class="accordion-body homec-accordion__body">
                                <p>The Software plan includes all features listed in the plan description, and there are no additional charges, making it a cost-effective choice for individuals.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Accordion -->


                    <!-- End Single Accordion -->
                    <div class="accordion-item homec-accordion__single mg-top-30">
                        <h2 class="accordion-header" id="homect-1-4">
                            <button class="accordion-button collapsed homec-accordion__heading" type="button" data-bs-toggle="collapse" data-bs-target="#ac-collapse1-4"> What is the pricing for the Maintenance plan?</button>
                        </h2>
                        <div id="ac-collapse1-4" class="accordion-collapse collapse " data-bs-parent="#homec-accordion">
                            <div class="accordion-body homec-accordion__body">
                                <p>The Maintenance plan price goes from 25$ to $99 per door per month. Similar to the Software plan, the total cost is calculated based on the number of doors you manage.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Accordion -->

                    <!-- End Single Accordion -->
                    <div class="accordion-item homec-accordion__single mg-top-30">
                        <h2 class="accordion-header" id="homect-1-5">
                            <button class="accordion-button collapsed homec-accordion__heading" type="button" data-bs-toggle="collapse" data-bs-target="#ac-collapse1-5"> What services are included in the Maintenance plan?</button>
                        </h2>
                        <div id="ac-collapse1-5" class="accordion-collapse collapse " data-bs-parent="#homec-accordion">
                            <div class="accordion-body homec-accordion__body">
                                <p>The Maintenance plan offers a comprehensive package that includes full property inspection, handyman on demand, and general contractor licensed services, making it ideal for businesses that are getting started.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Accordion -->

                    <!-- End Single Accordion -->
                    <div class="accordion-item homec-accordion__single mg-top-30">
                        <h2 class="accordion-header" id="homect-1-6">
                            <button class="accordion-button collapsed homec-accordion__heading" type="button" data-bs-toggle="collapse" data-bs-target="#ac-collapse1-6"> How can I get pricing information for Property Management services?</button>
                        </h2>
                        <div id="ac-collapse1-6" class="accordion-collapse collapse " data-bs-parent="#homec-accordion">
                            <div class="accordion-body homec-accordion__body">
                                <p>Property Management pricing is available upon request. This plan is tailored for large businesses and includes features such as all-in-one technology, CRM, owner & tenant portal, 24/7 virtual staff, off/on-site property management, and property surveillance.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Accordion -->

                </div>
            </div>

            <div class="col-lg-6 col-12">
                <div class="homec-accordion accordion accordion-flush" id="homec-accordion">
                    <!-- End Single Accordion -->
                    <div class="accordion-item homec-accordion__single mg-top-30">
                        <h2 class="accordion-header" id="homect-1-7">
                            <button class="accordion-button collapsed homec-accordion__heading" type="button" data-bs-toggle="collapse" data-bs-target="#ac-collapse1-7"> Can I customize my service plan based on my specific needs?</button>
                        </h2>
                        <div id="ac-collapse1-7" class="accordion-collapse collapse " data-bs-parent="#homec-accordion">
                            <div class="accordion-body homec-accordion__body">
                                <p>Yes, we offer flexibility in customizing service plans to meet your unique requirements. Please contact our team to discuss your specific needs and receive a personalized quote.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Accordion -->

                    <!-- End Single Accordion -->
                    <div class="accordion-item homec-accordion__single mg-top-30">
                        <h2 class="accordion-header" id="homect-1-8">
                            <button class="accordion-button collapsed homec-accordion__heading" type="button" data-bs-toggle="collapse" data-bs-target="#ac-collapse1-8"> Are there any discounts available for long-term commitments?</button>
                        </h2>
                        <div id="ac-collapse1-8" class="accordion-collapse collapse " data-bs-parent="#homec-accordion">
                            <div class="accordion-body homec-accordion__body">
                                <p>We may offer discounts or special packages for long-term commitments and bundled services. Feel free to inquire about any available discounts during your consultation.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Accordion -->

                    <!-- End Single Accordion -->
                    <div class="accordion-item homec-accordion__single mg-top-30">
                        <h2 class="accordion-header" id="homect-1-9">
                            <button class="accordion-button collapsed homec-accordion__heading" type="button" data-bs-toggle="collapse" data-bs-target="#ac-collapse1-9"> What if I have more questions or need assistance in choosing the right plan?</button>
                        </h2>
                        <div id="ac-collapse1-9" class="accordion-collapse collapse " data-bs-parent="#homec-accordion">
                            <div class="accordion-body homec-accordion__body">
                                <p>If you have additional questions or need assistance in selecting the right plan, our team is here to help. Please contact us through our Contact page, and we'll guide you through the process.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Accordion -->

                    <!-- End Single Accordion -->
                    <div class="accordion-item homec-accordion__single mg-top-30">
                        <h2 class="accordion-header" id="homect-2-0">
                            <button class="accordion-button collapsed homec-accordion__heading" type="button" data-bs-toggle="collapse" data-bs-target="#ac-collapse2-0"> What is the pricing currency?</button>
                        </h2>
                        <div id="ac-collapse2-0" class="accordion-collapse collapse " data-bs-parent="#homec-accordion">
                            <div class="accordion-body homec-accordion__body">
                                <p>All prices are in US dollars.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Accordion -->

                    <!-- End Single Accordion -->
                    <div class="accordion-item homec-accordion__single mg-top-30">
                        <h2 class="accordion-header" id="homect-2-1">
                            <button class="accordion-button collapsed homec-accordion__heading" type="button" data-bs-toggle="collapse" data-bs-target="#ac-collapse2-1"> What payment methods do you accept?</button>
                        </h2>
                        <div id="ac-collapse2-1" class="accordion-collapse collapse " data-bs-parent="#homec-accordion">
                            <div class="accordion-body homec-accordion__body">
                                <p>You can pay using the following payment methods:</p>
                                <ul>
                                    <li>All major credit cards including Visa, Mastercard, Discover, American Express, and UnionPay</li>
                                    <li>Wire transfer (upon request)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Accordion -->

                    <!-- End Single Accordion -->
                    <div class="accordion-item homec-accordion__single mg-top-30">
                        <h2 class="accordion-header" id="homect-2-2">
                            <button class="accordion-button collapsed homec-accordion__heading" type="button" data-bs-toggle="collapse" data-bs-target="#ac-collapse2-2"> What is Prroperties refund policy?</button>
                        </h2>
                        <div id="ac-collapse2-2" class="accordion-collapse collapse " data-bs-parent="#homec-accordion">
                            <div class="accordion-body homec-accordion__body">
                                <p>Refund or Payment upon If this Agreement is terminated by Customer in accordance with the “Termination” section, Prroperties will refund Customer any prepaid fees covering the remainder of the term of all Order Forms after the effective date of termination. If this Agreement is terminated by Prroperties in accordance with the “Termination” section, Customer will pay any unpaid fees covering the remainder of the term of all Order Forms to the extent permitted by applicable law. In no event will termination relieve Customer of its obligation to pay any fees payable to Prroperties for the period prior to the effective date of termination.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Accordion -->

                     <!-- End Single Accordion -->
                     <div class="accordion-item homec-accordion__single mg-top-30">
                        <h2 class="accordion-header" id="homect-2-3">
                            <button class="accordion-button collapsed homec-accordion__heading" type="button" data-bs-toggle="collapse" data-bs-target="#ac-collapse2-3"> Can I cancel my subscription anytime?</button>
                        </h2>
                        <div id="ac-collapse2-3" class="accordion-collapse collapse " data-bs-parent="#homec-accordion">
                            <div class="accordion-body homec-accordion__body">
                                <p>Yes, you have the flexibility to cancel your Prroperties Plan whenever you choose, as there is no long-term commitment required. However, it's important to note that upon cancellation, your membership will remain active until the end of your current billing cycle. This cycle is determined by the type of subscription you have chosen, whether it's monthly, quarterly, semi-annual, or annual. Please be aware that we do not offer refunds for any unused portion of your membership. If you decide to reactivate your membership in the future, you can simply contact our support team at <a href="mailto:support@prroperties.com">[support@prroperties.com]</a>.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Accordion -->
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12 mg-top-30 d-none-tab d-none">
                <!-- Support Img -->
                <div class="homec-support-img">
                    <img src="{{ asset('frontend/assets/img/faq-support.webp') }}" alt="support_image">
                    <div class="homec-support-img__content">
                        <img src="{{ asset('frontend/assets/img/support-icon-white.svg') }}" alt="support_image">
                        <h4 class="homec-support-img__title">24/7 Support <span>Have any Questions Contact Us?</span>
                        </h4>
                    </div>
                </div>
                <!-- End Support Img -->
            </div>
        </div>
    </div>
</section>

<!--<form id="payment-form" action="{{ route('payment.charge') }}" method="post">-->
<!--        @csrf-->
<!--     <input type="email" name="email" placeholder="Email" required>-->
<!--    <input type="tel" name="phone" placeholder="Phone Number" required>-->
<!--        <input type="number" name="amount" id="amount" placeholder="Amount" required>-->
<!--        <div id="card-element"></div>-->
<!--        <div id="card-errors" role="alert"></div>-->
<!--        <button type="submit">Submit Payment</button>-->
<!--    </form>-->
<div id="paymentModal" class="modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <!-- Modal Header -->
            <button type="button" class="btn-close" onclick="closeModal()" data-bs-dismiss="modal"></button>
            <div class="panel-heading">
                <div class="row">
                    <h3 class="">Payment Details</h3>
                    <div class="inlineimage"> <img class="img-responsive images" src="https://cdn0.iconfinder.com/data/icons/credit-card-debit-card-payment-PNG/128/Mastercard-Curved.png"> <img class="img-responsive images" src="https://cdn0.iconfinder.com/data/icons/credit-card-debit-card-payment-PNG/128/Discover-Curved.png"> <img class="img-responsive images" src="https://cdn0.iconfinder.com/data/icons/credit-card-debit-card-payment-PNG/128/Paypal-Curved.png"> <img class="img-responsive images" src="https://cdn0.iconfinder.com/data/icons/credit-card-debit-card-payment-PNG/128/American-Express-Curved.png"> </div>
                </div>
            </div>

            <form id="payment-form" action="{{ route('payment.charge') }}" method="post" onsubmit="return handleSubmit()">
            @csrf
            <input type="email" name="email" placeholder="Email" required>
            <input type="tel" name="phone" placeholder="Phone number" required>

            <input type="hidden" name="plan_name" id="plan-name">
            <input type="hidden" name="amount" id="payment-amount">
            <!--<label for="amount">Amount to be charged:</label>-->
            <!--<span id="display-amount">$0</span>-->
            <div id="card-element"></div>
             <div class="d-flex align-items-center dis-wrap">
            <input type="discount" id="discount-code" name="discount_code" placeholder="Discount Code">
            <button type="button" onclick="applyDiscount()">Apply</button>
        </div>
            <div id="card-errors" role="alert"></div>

            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
              <label class="form-check-label" for="flexCheckChecked">
                I agree to the <a href="/terms-conditions" style="text-decoration: underline;">terms and conditions.</a>
              </label>
            </div>
        
            <button type="submit">Pay<span id="display-amount">$0</span></button>
            </form>
        </div>
    </div>
</div>




<!-- Trigger Button -->


<!-- Pop-up Form -->
<div id="propertyManagform" class="modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <!-- Modal Header -->
            <button type="button" class="btn-close" onclick="closeModal()" data-bs-dismiss="modal"></button>
            <div class="panel-heading">
                <div class="row">
                    <h3 class="mb-3">Request a Quote</h3>
                </div>
            </div>

            <form id="payment-form" action="https://formcarry.com/s/-ZERlbF7Hk" method="post" enctype="multipart/form-data">
            @csrf
            <input type="name" name="name" placeholder="Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="tel" name="phone" placeholder="Phone number" required>
            <input type="tel" name="no_properties" placeholder="No of properties" required>
            <textarea name="message" placeholder="Message"></textarea>
        
            <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>


<style>
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 9999; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
    }
    .modal-dialog{
        width: 100%;
        max-width: 500px;
    }

    .modal-content {
        background-color: #fefefe;
        padding: 20px;
        border: 1px solid #888;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    }

    .panel-heading .images {
    /* display: inline-block; */
    max-width: 98%;
    height: auto;
    width: 17%;
    margin: 1%;
    left: 20px;
    /* text-align: center; */
    }

    .panel-heading h3{
        font-size: 24px;
        margin-bottom: 0;
    }

    #payment-form {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    #payment-form input[type="name"],
    #payment-form input[type="email"],
    #payment-form input[type="tel"]{
        padding: 10px;
        margin: 5px 0;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    #payment-form input[type="discount"]{
        padding: 10px;
        margin: 5px 0;
        border: 1px solid #ccc;
        border-radius: 4px 0px 0px 4px;
        box-sizing: border-box;
        width: calc(100% - 80px);
        height: 46px;
    }

    #payment-form .dis-wrap button{
        border-radius: 0px 4px 4px 0px
    }

    #payment-form textarea {
    height: 100px;
    padding: 10px;
    margin: 5px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    }

    #card-element {
        padding: 15px 10px;
        margin: 5px 0;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    #payment-form button {
        background-color: #2a6ed5;
        color: white; /* White text */
        padding: 15px 20px;
        margin: 10px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }

    #payment-form button:hover {
        background-color: #11499e;
    }

    #display-amount {
        font-weight: bold;
        color: #fff;
        margin-left: 5px;
    }

    #card-errors {
        color: red;
        margin-top: 10px;
    }
</style>


    <script>
        var stripe = Stripe('{{ env('STRIPE_KEY') }}');
        var elements = stripe.elements();
        var card = elements.create('card');
        card.mount('#card-element');

        card.addEventListener('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });

        var form = document.getElementById('payment-form');
        form.addEventListener('submit', function(event) {
            event.preventDefault();
            stripe.createToken(card).then(function(result) {
                if (result.error) {
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                } else {
                    var tokenInput = document.createElement('input');
                    tokenInput.setAttribute('type', 'hidden');
                    tokenInput.setAttribute('name', 'stripeToken');
                    tokenInput.setAttribute('value', result.token.id);
                    form.appendChild(tokenInput);
                    form.submit();
                }
            });
        });
    </script>

<script>
document.getElementById("readMoreButton").addEventListener("click", function() {
    var toggleableItems = document.querySelectorAll('.toggleable');
    for (var i = 0; i < toggleableItems.length; i++) {
        if (toggleableItems[i].style.display === 'none') {
            toggleableItems[i].style.display = 'flex';
            this.textContent = 'Read Less >>'; // Change button text to 'Read Less'
        } else {
            toggleableItems[i].style.display = 'none';
            this.textContent = 'Read More >>'; // Change button text back to 'Read More'
        }
    }
});
</script>

<script>

function handleSubmit() {
    var amount = document.getElementById('payment-amount').value;
    
    if (amount == 0) {
        // Redirect to signup page if amount is zero
        window.location.href = '/owner-register';
        return false; // Prevent form submission
    }

    return true; // Proceed with form submission
}

function updatePrice(plan, pricePerDoor) {
    var numberOfDoors = document.getElementById(plan + '-doors').value;
    
     var doorsInput = document.getElementById(plan + '-doors');
    var numberOfDoors = parseInt(doorsInput.value, 10);
    
    if (numberOfDoors < 0) {
        doorsInput.value = 0;
        numberOfDoors = 0;
    }
    
    
    var totalPrice = numberOfDoors * pricePerDoor;
    var priceElementId = plan === 'maintenance' ? 'maintenance-price' : 'maintenance-standard-price';

    document.getElementById(plan + '-price').innerText = totalPrice;

    // Update the hidden field in the payment form with the dollar value
    if (plan === selectedPlan) {
        document.getElementById('payment-amount').value = totalPrice;
        document.getElementById('plan-name').value = plan.charAt(0).toUpperCase() + plan.slice(1);
        document.getElementById('display-amount').innerText = '$' + totalPrice;
    }
}

var selectedPlan = ''; // Global variable to track the selected plan

function choosePlan(planType) {
    selectedPlan = planType;
    var pricePerDoor = 0;

    switch (planType) {
        case 'software':
            pricePerDoor = 1;
            break;
        case 'maintenance':
            pricePerDoor = 99;
            break;
        case 'maintenance-standard':
            pricePerDoor = 29;
            break;
        default:
            pricePerDoor = 0; // Default price if plan type is unrecognized
    }

    updatePrice(planType, pricePerDoor);
    openModal();
}

function openModal() {
    document.getElementById('paymentModal').style.display = 'block';
}

function closeModal() {
    document.getElementById('paymentModal').style.display = 'none';
}




</script>

<script>

function applyDiscount() {
    var discountCode = document.getElementById('discount-code').value;
    if (discountCode === 'PRRSOFT23') {
        document.getElementById('payment-amount').value = 0;
        document.getElementById('display-amount').innerText = '$0';
    }
}
</script>

@endsection


