@extends('saas.frontend.layouts.app')
@section('content')
<div class="properties-area">
    <div class="container-fluid p-0">
        <div class="">
            <div class="col-lg-12">
<div class="properties-filter">
                    <form action="{{ route('listings') }}" method="GET" id="searchForm">

                        <div class="sidebar">
                            <h1
                                class="border-bottom filter-header d-flex d-md-none p-3 mb-0 align-items-center justify-content-space">
                                <div class="head">Filters</div> <span class="mr-2 filter-close-btn">X</span>
                            </h1>
                            <div class="sidebar__inner">
                                <div class="filter-body">
                                    <div>
                                        <!-- Filter start here -->
                                        <div class="first-filter"></div>
                                        <div class="properties-search d-none">
                                            <div class="search-icon">
                                                <i class="ri-search-line"></i>
                                            </div>
                                            <input type="search" placeholder="{{ __('Search') }}" name="q" id="search"
                                                value="{{ request('q') }}">
                                        </div>

                                        <div class="d-flex list-itm pd-lt-30">
                                            <div class="form-group equalHM">
                                                <select name="country" id="country" class="select2 sel-cus">
                                                    <option value="">{{ __('Country') }}</option>
                                                    @foreach ($countries as $country)
                                                    @if ($country)
                                                    <option value="{{ $country }}"
                                                        {{ request('country') == $country ? 'selected' : '' }}>
                                                        {{ Str::ucfirst($country) }}</option>
                                                    @endif
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group equalHM">
                                                <select name="state" id="state" class="select2">
                                                    <option value="">{{ __('State') }}</option>
                                                    @foreach ($states as $state)
                                                    @if ($state)
                                                    <option value="{{ $state }}"
                                                        {{ request('state') == $state ? 'selected' : '' }}>
                                                        {{ Str::ucfirst($state) }}
                                                    </option>
                                                    @endif
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group equalHM">
                                                <select name="city" id="city" class="select2 sel-cus">
                                                    <option value="">{{ __('City') }}</option>
                                                    @foreach ($cities as $city)
                                                    @if ($city)
                                                    <option value="{{ $city }}"
                                                        {{ request('city') == $city ? 'selected' : '' }}>
                                                        {{ Str::ucfirst($city) }}
                                                    </option>
                                                    @endif
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group equalHM">
                                                <select name="price" class="select2">
                                                    <option value="">Price Range</option>
                                                    <option value="">$0 - $600</option>
                                                    <option value="">$600 - $10k</option>
                                                    <option value="">$10k - $20k</option>
                                                    <option value="">$20k - $30k</option>
                                                    <option value="">$30k - $40k</option>
                                                    <option value="">$40k - $50k</option>
                                                </select>
                                            </div>

                                            <div class="form-group equalHM">


                                                <select name="bed_room" id="bed_room" class="select2 sel-cus">
                                                    <option value="">{{ __('Bedroom') }}</option>
                                                    @foreach ($bedRooms as $bedRoom)
                                                    @if ($bedRoom)
                                                    <option value="{{ $bedRoom }}"
                                                        {{ request('bed_room') == $bedRoom ? 'selected' : '' }}>
                                                        {{ $bedRoom }}
                                                    </option>
                                                    @endif
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group equalHM">


                                                <select name="bath_room" id="bath_room" class="select2 sel-cus">
                                                    <option value="">{{ __('Bathroom') }}</option>
                                                    @foreach ($bathRooms as $bathRoom)
                                                    @if ($bathRoom)
                                                    <option value="{{ $bathRoom }}"
                                                        {{ request('bath_room') == $bathRoom ? 'selected' : '' }}>
                                                        {{ $bathRoom }}
                                                    </option>
                                                    @endif
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group">



                                                <!-- <select name="kitchen" id="kitchen" class="select2 sel-cus">
                                                        <option value="">{{ __('Kitchen Room') }}</option>
                                                        @foreach ($kitchens as $kitchen)
                                                            @if ($kitchen)
                                                                <option value="{{ $kitchen }}"
                                                                    {{ request('kitchen') == $kitchen ? 'selected' : '' }}>
                                                                    {{ $kitchen }}
                                                                </option>
                                                            @endif
                                                        @endforeach
                                                    </select> -->
                                            </div>
                                        </div>

                                    </div>
                                    <!-- Filter end here -->
                                </div>
                            </div>
                        </div>
                </div>

                </form>
            </div>

            <!-- responsive filter start 
                    <div class="pro-filter-resp">
                        <div class="filter-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-2" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M3 18h6v-2H3v2zM3 6v2h18V6H3zm0 7h12v-2H3v2z"></path></svg> Filters</div>
                    </div>
                     responsive filter end -->

        </div>
    </div>
    <div class="row list-wrp">
        @if (count($listings))

        <div class="col-lg-8">
            <div class="row ml-1 mt-2 mb-4">
                @foreach ($listings as $listing)
                <div class="col-md-6 col-12 mg-top-30">
                    <!-- Single property-->
                    <div class="homec-property">
                        <!-- Property Head-->
                        <div class="homec-property__head">
                            <a href="{{ route('listing.details', $listing->slug) }}" class="dis-block"> <img
                                    src="{{ assetUrl($listing->folder_name . '/' . $listing->file_name) }}"
                                    alt="{{ $listing->name }}"></a>
                            <!-- Top Sticky -->
                            <div class="homec-property__hsticky">
                                <a href="javascript:;" class="homec-heart add-to-wishlist" data-property-id="15">
                                    <svg width="23" height="20" viewBox="0 0 23 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.5745 3.73257L11.1008 4.69447L11.6272 3.73258C11.9704 3.10535 12.5438 2.26267 13.3886 1.60933C14.2595 0.935774 15.2355 0.6 16.3044 0.6C19.29 0.6 21.6017 3.03446 21.6017 6.3966C21.6017 8.18186 20.8932 9.70959 19.5597 11.3187C18.211 12.9462 16.2694 14.6033 13.8617 16.6552L14.2508 17.1119L13.8617 16.6552L13.8611 16.6557C13.0479 17.3487 12.1237 18.1363 11.1625 18.9769L11.1623 18.977C11.1457 18.9916 11.1241 18.9999 11.1008 18.9999C11.0776 18.9999 11.056 18.9916 11.0394 18.9771L11.0391 18.9768C10.0784 18.1367 9.15452 17.3493 8.34203 16.6569L8.34054 16.6556L8.34053 16.6556C5.93251 14.6035 3.99081 12.9463 2.64202 11.3188C1.30844 9.70958 0.6 8.18186 0.6 6.3966C0.6 3.03446 2.91167 0.6 5.89732 0.6C6.96614 0.6 7.94219 0.935773 8.81311 1.60933C9.6579 2.26267 10.2313 3.10532 10.5745 3.73257Z"
                                            stroke-width="1.2"></path>
                                    </svg>
                                </a>
                                @php
                                $advantages = json_decode($listing->advantage);
                                @endphp

                                @if(is_array($advantages) && in_array('2', $advantages))
                                <span class="homec-property__salebadge">For Rent</span>
                                @elseif(is_array($advantages) && in_array('3', $advantages))
                                <span class="homec-property__salebadge">For Sale</span>
                                @endif


                            </div>
                            <!-- End Top Sticky -->
                        </div>
                        <!-- Property Body-->
                        <div class="homec-property__body">
                            <div class="homec-property__topbar">
                                <!-- <div class="homec-property__price">$500.00</div> -->
                                <p class="homec-property__price">
                                    {{ currencyPrice($listing->price) }} /
                                    @if ($listing->price_duration_type == DURATION_TYPE_MONTHLY)
                                    <span> {{ __('Monthly') }}</span>
                                    @elseif($listing->price_duration_type == DURATION_TYPE_YEARLY)
                                    <span> {{ __('Yearly') }}</span>
                                    @elseif($listing->price_duration_type == DURATION_TYPE_FOR_SALE)
                                    <span> {{ __('Sale') }}</span>
                                    @elseif($listing->price_duration_type == DURATION_TYPE_FOR_DAILY)
                                    <span>{{ __('Night') }}</span>
                                    @elseif($listing->price_duration_type == DURATION_TYPE_FOR_WEEKLY)
                                    <span>{{ __('Weekly') }}</span>
                                    @else
                                    {{ __('Custom') }}
                                    @endif
                                </p>
                            </div>
                            <!-- <h3 class="homec-property__title"><a href="{{ route('listing.details', $listing->slug) }}">@php
                                            $words = explode(' ', $listing->name);
                                            $wordCount = 9; // Change this value as per your requirement
                                        @endphp

                                        @if(count($words) > $wordCount)
                                            {{ implode(' ', array_slice($words, 0, $wordCount)) }}...
                                        @else
                                            {{ $listing->name }}
                                        @endif</a></h3> -->
                            <div class="homec-property__text">
                                <img src="{{ asset('frontend/assets/img/location-icon.svg') }}" alt="address">
                                <p>{{ $listing->address }}</p>
                            </div>
                            <!-- Property List-->
                            <ul class="homec-property__list homec-border-top list-none">
                                <li><img src="{{ asset('frontend/assets/img/icon/room-icon2.svg') }}"
                                        alt="total_bedroom">{{ $listing->bed_room }} {{ __('Bed') }}</li>
                                <li><img src="{{ asset('frontend/assets/img/icon/bath-icon2.svg') }}"
                                        alt="total_bathroom">{{ $listing->bath_room }} {{ __('Bath') }}</li>
                                <li><img src="{{ asset('frontend/assets/img/icon/size-icon2.svg') }}"
                                        alt="total_bathroom">{{ $listing->other_room }} {{ __('Sqft') }}</li>

                            </ul>
                        </div>
                    </div>
                    <!-- End Single property-->
                </div>

                @endforeach
                <div class="col-md-12">
                    {{ $listings->appends(request()->query())->links() }}
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="map-area map-height sticky-post">
                <div id="map" class="w-100 map-property-h"></div>
            </div>
        </div>
        @else
        <div class="col-md-12 text-center mt-15">
            {{ __('No Data Found') }}
        </div>
        @endif
    </div>
</div>
</div>






<div class="filters-actions">
    <div><button class="btn filter-btn d-md-none"><svg xmlns="http://www.w3.org/2000/svg" class="mr-2" height="24px"
                viewBox="0 0 24 24" width="24px" fill="#000000">
                <path d="M0 0h24v24H0V0z" fill="none" />
                <path d="M3 18h6v-2H3v2zM3 6v2h18V6H3zm0 7h12v-2H3v2z" />
            </svg> Filter</button></div>
</div>



@endsection
@push('style')
<link rel="stylesheet" href="{{ asset('assets/properties/css/properties.css') }}">
<link href='https://api.mapbox.com/mapbox.js/v3.3.1/mapbox.css' rel='stylesheet' />
<link href='https://api.mapbox.com/mapbox.js/plugins/leaflet-markercluster/v1.0.0/MarkerCluster.css' rel='stylesheet' />
<link href='https://api.mapbox.com/mapbox.js/plugins/leaflet-markercluster/v1.0.0/MarkerCluster.Default.css'
    rel='stylesheet' />
<style>
#map {
    width: 100%;
    height: 100%;
    border-radius: 5px;
    /* border: 2px solid #75cff0; */
}
</style>
@endpush
@push('script')
<script>
$(document).on('change', '#search,#country,#state,#city,#bed_room,#bath_room,#kitchen', function() {
    $('#searchForm').submit();
});
</script>

<script src='https://api.mapbox.com/mapbox.js/v3.3.1/mapbox.js'></script>
<script src='https://api.mapbox.com/mapbox.js/plugins/leaflet-markercluster/v1.0.0/leaflet.markercluster.js'></script>
<script>
L.mapbox.accessToken =
    "{{ getOption('map_api_key') }}";
const mapData = @json($mapData);

//map data prepare
window.map = L.mapbox.map('map')
    .setView([-37.82, 175.215], 50)
    .addLayer(L.mapbox.styleLayer('mapbox://styles/mapbox/streets-v11'));

window.markers = L.markerClusterGroup({
    iconCreateFunction: function(cluster) {
        var childCount = cluster.getChildCount();
        return new L.DivIcon({
            html: '<div><span>' + childCount + '</span></div>',
            className: 'd-flex justify-content-center align-items-center bg-theme font-bold rounded-5 text-white',
            iconSize: [40, 40]
        });
    }
});
if (mapData.length > 0) {
    mapData.forEach(feature => {
        var popupContent = feature.properties.popup;
        var marker = L.marker(new L.LatLng(feature.coordinates.lat, feature.coordinates.long), {
            icon: L.icon({
                iconUrl: feature.properties.image,
                iconSize: [40, 40],
                className: 'border border-3 border-light rounded-5',
            }),
            title: feature.properties.name
        });
        marker.bindPopup(popupContent);
        window.markers.addLayer(marker);
    });


    window.map.addLayer(window.markers);
    window.map.fitBounds(window.markers.getBounds()).zoomOut(0);
}
</script>
<script>
const mediaQuerymobile = window.matchMedia("(max-width: 767.98px)");
// mobile filter jquery start
$(".filter-btn").click(function() {
    $(".sidebar").addClass("open");
    $("body").addClass("overflow-hidden vh-100");
});
$(".filter-close-btn").click(function() {
    $(".sidebar").removeClass("open");
    $("body").removeClass("overflow-hidden vh-100");
});
// mobile filter jquery end
</script>
@endpush