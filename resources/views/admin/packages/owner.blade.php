@extends('admin.layouts.app')

@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="page-content-wrapper bg-white p-30 radius-20 owner-packge">
                    <div class="row">
                        <div class="col-12">
                            <div
                                class="page-title-box d-sm-flex align-items-center justify-content-between border-bottom mb-20">
                                <div class="page-title-left">
                                    <h3 class="mb-sm-0">{{ $pageTitle }}</h3>
                                </div>
                                <div class="page-title-right">
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"
                                                title="{{ __('Dashboard') }}">{{ __('Dashboard') }}</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">{{ $pageTitle }}</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @if (isAddonInstalled('PROTYSAAS') > 5)
                            <div class="property-top-search-bar">
                                <div class="row align-items-center">
                                    <div class="col-md-12">
                                        <div class="property-top-search-bar-right text-end">
                                            <button type="button" class="theme-btn mb-25" id="addPackage"
                                                title="{{ __('Assign Package') }}">{{ __('Assign Package') }}
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="billing-center-area bg-off-white theme-border radius-4 p-25">
                            <table id="allDataTable" class="table responsive theme-border p-20 ">
                                <thead>
                                    <th class="all">{{ __('SL') }}</th>
                                    <th class="all">{{ __('Name') }}</th>
                                    <th class="all">{{ __('Email') }}</th>
                                    <th class="all">{{ __('Package Name') }}</th>
                                    <th class="all">{{ __('Gateway') }}</th>
                                    <th class="desktop">{{ __('Duration') }}</th>
                                    <th class="desktop">{{ __('Status') }}</th>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
th, td {
  text-align: left;
  padding: 8px;
}

th {
  background-color: #f2f2f2;
}

.status-btn {
  display: inline-block;
  padding: 5px 10px;
  border-radius: 4px;
  color: white;
}

.status-btn-green {
  background-color: #4CAF50;
}

.status-btn-blue {
  background-color: #2196F3;
}

</style>

    @if (isAddonInstalled('PROTYSAAS') > 5)
        <div class="modal fade" id="addPackageModal" tabindex="-1" aria-labelledby="addPackageModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="addPackageModalLabel"><span
                                class="modalTitle">{{ __('Assign Package') }}</span></h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span
                                class="iconify" data-icon="akar-icons:cross"></span></button>
                    </div>
                    <form class="ajax" action="{{ route('admin.packages.assign') }}" method="post"
                        enctype="multipart/form-data" data-handler="getShowMessage">
                        <input type="hidden" name="gateway" value="cash">
                        <input type="hidden" name="currency" value="USD">
                        <div class="modal-body">
                            <div class="modal-inner-form-box border-bottom mb-25">
                                <div class="row">
                                    <div class="col-md-6 mb-25">
                                        <label class="label-text-title color-heading font-medium mb-2">{{ __('Owner') }}
                                            <span class="text-danger">*</span></label>
                                        <select name="user_id" class="form-control select2">
                                            @foreach ($owners as $owner)
                                                <option value="{{ $owner->id }}">{{ $owner->first_name }}
                                                    {{ $owner->last_name }}({{ $owner->email }})</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-25">
                                        <label class="label-text-title color-heading font-medium mb-2">{{ __('Package') }}
                                            <span class="text-danger">*</span></label>
                                        <select name="package_id" class="form-control">
                                            @foreach ($packages as $package)
                                                <option value="{{ $package->id }}">{{ $package->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-25">
                                        <label class="label-text-title color-heading font-medium mb-2">{{ __('Type') }}
                                            <span class="text-danger">*</span></label>
                                        <select name="duration_type" class="form-control">
                                            <option value="1">{{ __('Monthly') }}</option>
                                            <option value="2">{{ __('Yearly') }}</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-end">
                            <a href="javascript:void(0)" class="theme-btn-back me-3" data-bs-dismiss="modal"
                                title="{{ __('Back') }}">{{ __('Back') }}</a>
                            <button type="submit" class="theme-btn me-3"
                                title="{{ __('Assing') }}">{{ __('Assing') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endif
    <input type="hidden" id="packagesOwnerRoute" value="{{ route('admin.packages.owner') }}">
@endsection

@push('style')
    @include('common.layouts.datatable-style')
@endpush

@push('script')
    @include('common.layouts.datatable-script')
    <script src="{{ asset('assets/js/custom/packages-owner.js') }}"></script>
@endpush
