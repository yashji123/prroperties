@extends('owner.layouts.app')
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="page-content-wrapper bg-white p-30 radius-20">
                    <div class="row">
                        <div class="col-12">
                            <div
                                class="page-title-box d-sm-flex align-items-center justify-content-between border-bottom mb-20">
                                <div class="page-title-left">
                                    <h3 class="mb-sm-0">{{ $pageTitle }}</h3>
                                </div>
                                <div class="page-title-right">
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="{{ route('owner.dashboard') }}"
                                                title="{{ __('Dashboard') }}">{{ __('Dashboard') }}</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">{{ $pageTitle }}</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="billing-center-area bg-off-white theme-border radius-4 p-25">
                            <table id="contactDataTable" class="table responsive theme-border p-20 ">
                                <thead>
                                    <th>{{ __('SL') }}</th>
                                    <th>{{ __('Name') }}</th>
                                    <th>{{ __('Email') }}</th>
                                    <th>{{ __('Phone') }}</th>
                                    <th>{{ __('Listing Name') }}</th>
                                    <th>{{ __('Property Type') }}</th>
                                    <th>{{ __('Checkin Date') }}</th>
                                    <th>{{ __('Checkout Date') }}</th>
                                    <th>{{ __('Guests') }}</th>
                                    <th>{{ __('Final Price') }}</th>
                                    <th>{{ __('Status') }}</th>
                                    <th>{{ __('Action') }}</th>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="replyModal" tabindex="-1" aria-labelledby="replyModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="replyModalLabel"><span class="modalTitle">{{ __('Reply Message') }}</span>
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span
                            class="iconify" data-icon="akar-icons:cross"></span></button>
                </div>
                <form class="ajax" action="{{ route('owner.listing.contact.reply') }}" method="post"
                    enctype="multipart/form-data" data-handler="getShowMessage">
                    <input type="hidden" class="id" name="id">
                    <div class="modal-body">
                        <div class="modal-inner-form-box">
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table">
                                        <tr>
                                            <th class="w-25">{{ __('Name') }}</th>
                                            <td class="name"></td>
                                        </tr>
                                        <tr>
                                            <th class="w-25">{{ __('Email') }}</th>
                                            <td class="email"></td>
                                        </tr>
                                        <tr>
                                            <th class="w-25">{{ __('Phone') }}</th>
                                            <td class="phone"></td>
                                        </tr>
                                        <!--<tr>-->
                                        <!--    <th class="w-25">{{ __('Profession') }}</th>-->
                                        <!--    <td class="profession"></td>-->
                                        <!--</tr>-->
                                        <tr>
                                            <th class="w-25">{{ __('Listing Name') }}</th>
                                            <td class="listing-name"></td>
                                        </tr>
                                        <tr>
                                            <th class="w-25">{{ __('Property Type') }}</th>
                                            <td class="property-type"></td>
                                        </tr>
                                        <tr>
                                            <th class="w-25">{{ __('Checkin Date') }}</th>
                                            <td class="checkin-date"></td>
                                        </tr>
                                        <tr>
                                            <th class="w-25">{{ __('Checkout Date') }}</th>
                                            <td class="checkout-date"></td>
                                        </tr>
                                        <tr>
                                            <th class="w-25">{{ __('Guests') }}</th>
                                            <td class="guests"></td>
                                        </tr>
                                        <tr>
                                            <th class="w-25">{{ __('Final Price') }}</th>
                                            <td class="final-price"></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-start">
                        <a href="javascript:void(0)" class="theme-btn-back me-3" data-bs-dismiss="modal"
                            title="{{ __('Back') }}">{{ __('Back') }}</a>
                        <button type="submit" class="theme-btn me-3"
                            title="{{ __('Reply') }}">{{ __('Reply') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <input type="hidden" id="listingContactRoute" value="{{ route('owner.listing.contact') }}">
    <input type="hidden" id="listingContactInfoInfoRoute" value="{{ route('owner.listing.contact.info') }}">
@endsection

@push('style')
    @include('common.layouts.datatable-style')
@endpush

@push('script')
    @include('common.layouts.datatable-script')
    <script src="{{ asset('assets/js/custom/listing/listing-contact.js') }}"></script>
@endpush
