@extends('layouts.app')
@push('title')
    {{ __('Sign Up') }} -
@endpush
@section('content')
<section class="plan-select-wrap">
    <div class="container">
    <div class="user-selction">
            <div class="user-sel-wrap">
                <h2 class="sel-head">Select your property management solution</h2>
                <p>You can change your plans at any time on the subscription tab on your profile.</p>
                <div class="d-flex justify-content-space">
                    <div class="personal-wrap box-wrap text-center">
                        
                        
                        <h5>DIY software </h5>
                        <div class=""><img src="{{ asset('assets/images/software.png') }}" alt="" class="img-fluid"></div>
                        <div class="plan-features">
                            <ul>
                                <li>All-in-one technology/ CRM</li>
                                <li>Recurring rent collection</li>
                                <li>Listings on all top booking sites</li>
                                <li>Owner portal</li>
                            </ul>
                            <div class="view-more-feature"><a data-bs-toggle="modal" href="#myModal-software" class="">View more features</a></div>
                        </div>
                        <div class="plan-btn">
                            <a href="/softwareplan?email=<?php echo $_GET['email']; ?>" class="homec-btn"><span>Choose Plan</span></a>
                        </div>
                        <!-- <p>Develop your business or startup idea</p> -->

                       

                    </div>
                    <div class="business-wrap box-wrap text-center">
                        <h5>Full-service</h5>
                        <div class=""><img src="{{ asset('assets/images/management.png') }}" alt="" class="img-fluid"></div>
                        <div class="plan-features">
                                <ul>
                                    <li>24/7 virtual staff</li>
                                    <li>Property maintenance</li>
                                    <li>Property surveillance</li>
                                    <li>Lease management</li>
                                </ul>
                                <div class="view-more-feature"><a data-bs-toggle="modal" href="#myModal-property" class="">View more features</a></div>
                            </div>
                            <div class="plan-btn">
                                <a href="/promanagment" class="homec-btn"><span>Choose Plan</span></a>
                            </div>
                            <!-- <p>Manage your account with Clevertone</p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

 <!-- Software Modal -->
 <div class="modal plan-modal-features" id="myModal-software">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

        <!-- Modal Header -->
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>

        <!-- Modal body -->
        <div class="modal-body">
        <h5>Software features</h5>
        <ul class="homec-psingle__list d-flex justify-content-space">
            <div class="col-md-6">
                <li>Recurring rent collection</li>
                <li>All-in-one technology/ crm to manage properties and tenants</li>
                <li>Owner portal</li>
                <li>Tenant portal and communication tools</li>
                <li>Tenant screening and background verification</li>
                <li>Tenant's maintenance requests</li>
                <li>Tenant complete move-in/out process</li>
                <li>Esignatures &amp; online rental applications</li>
                <li>Mass announcements</li>
            </div>
            <div class="col-md-6">
                <li>Best-in-class optimized directory listings</li>
                <li>Listings on all top booking sites</li>
                <li>Monitor and surveillance of properties around the clock</li>
                <li>Renters insurance</li>
                <li>Financials, bookkeeping, and accounts payable/receivable</li>
                <li>Off/on-site property management</li>
                <li>Reporting &amp; analytics</li>
                <li>Vendor and contractor directory</li>
            </div>
            </ul>
        </div>

        </div>
    </div>
</div>
<!-- Software Modal -->

<!-- Property management Modal -->
<div class="modal plan-modal-features" id="myModal-property">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

        <!-- Modal Header -->
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>

        <!-- Modal body -->
        <div class="modal-body">
        <h5>Property management features</h5>
        <ul class="homec-psingle__list d-flex justify-content-space">
            <div class="col-md-6">
                <li>All-in-one technology to manage properties and tenants</li>
                <li>Short term</li>
                <li>Long term</li>
                <li>Recurring rent collection</li>
                <li>Maintenance requests</li>
                <li>Lease management</li>
                <li>Landlord support</li>
                <li>Property surveillance</li>
                <li>Tenant screening/ background check</li>
                <li>Property maintenance</li>
                <li>24/7 multilingual virtual staff to support any tenant emergencies</li>
                <li>Help secure short &amp; long-term tenants</li>
                <li>Manage short-term (str management) guests' stays</li>
            </div>
            <div class="col-md-6">
                <li>Tenant screening and background verification</li>
                <li>Solve tenant's maintenance issues</li>
                <li>Monitor and surveillance of properties around the clock</li>
                <li>Tenant complete move-in/out process</li>
                <li>Funnel campaigns to drive real estate buyer and seller leads</li>
                <li>Manage reputation reviews and listings</li>
                <li>Utility bill payments</li>
                <li>Help with taxes and permits</li>
                <li>Off/on-site property management</li>
                <li>Financials, bookkeeping, and accounts payable/receivable</li>
                <li>Guest screening &amp; damage coverage</li>
                <li>Reporting &amp; analytics</li>
                <li>Advertising</li>
            </div>
            </ul>
        </div>

        </div>
    </div>
</div>
<!-- Property management Modal -->

@endsection
