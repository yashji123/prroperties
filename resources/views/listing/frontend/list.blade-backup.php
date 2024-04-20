@extends('saas.frontend.layouts.app')
@section('content')
    <div class="properties-area">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-lg-12">
                    <div class="properties-filter">
                        <form action="{{ route('listings') }}" method="GET" id="searchForm">
                            <div class="first-filter">
                                
                                <div class="properties-search">
                                    <div class="search-icon">
                                        <i class="ri-search-line"></i>
                                    </div>
                                    <input type="search" placeholder="{{ __('Search') }}" name="q" id="search" value="{{ request('q') }}">
                                </div>

                                <div class="form-group">
                                   
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

                                <div class="form-group">
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

                                <div class="form-group">
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

                                <div class="form-group">
                                    <select name="price" class="select2">
                                        <option value="">Price Range</option>
                                        <option value="">$0 - $635</option>
                                        <option value="">$636 - $1120</option>
                                        <option value="">$1120 - $1605</option>
                                        <option value="">$1606 - $2090</option>
                                        <option value="">$2091 - $2575</option>
                                        <option value="">$2576 - $3060</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                  

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

                                <div class="form-group">
                                   

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
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                @if (count($listings))
                    
                    <div class="col-lg-8">
                        <div class="row ml-1 mt-2 mb-4">
                            @foreach ($listings as $listing)
                            <div class="col-md-6 col-12 mg-top-30">
                                <!-- Single property-->
                                <div class="homec-property">
                                    <!-- Property Head-->
                                    <div class="homec-property__head">
                                    <img src="{{ assetUrl($listing->folder_name . '/' . $listing->file_name) }}"
                                                    alt="{{ $listing->name }}">
                                        <!-- Top Sticky -->
                                        <div class="homec-property__hsticky">
                                            <a href="javascript:;" class="homec-heart add-to-wishlist" data-property-id="15">
                                                <svg width="23" height="20" viewBox="0 0 23 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10.5745 3.73257L11.1008 4.69447L11.6272 3.73258C11.9704 3.10535 12.5438 2.26267 13.3886 1.60933C14.2595 0.935774 15.2355 0.6 16.3044 0.6C19.29 0.6 21.6017 3.03446 21.6017 6.3966C21.6017 8.18186 20.8932 9.70959 19.5597 11.3187C18.211 12.9462 16.2694 14.6033 13.8617 16.6552L14.2508 17.1119L13.8617 16.6552L13.8611 16.6557C13.0479 17.3487 12.1237 18.1363 11.1625 18.9769L11.1623 18.977C11.1457 18.9916 11.1241 18.9999 11.1008 18.9999C11.0776 18.9999 11.056 18.9916 11.0394 18.9771L11.0391 18.9768C10.0784 18.1367 9.15452 17.3493 8.34203 16.6569L8.34054 16.6556L8.34053 16.6556C5.93251 14.6035 3.99081 12.9463 2.64202 11.3188C1.30844 9.70958 0.6 8.18186 0.6 6.3966C0.6 3.03446 2.91167 0.6 5.89732 0.6C6.96614 0.6 7.94219 0.935773 8.81311 1.60933C9.6579 2.26267 10.2313 3.10532 10.5745 3.73257Z" stroke-width="1.2"></path>
                                                </svg>
                                            </a>
                                            <span class="homec-property__salebadge">For Sale</span>
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
                                                        @else
                                                            {{ __('Custom') }}
                                                        @endif
                                                    </p>
                                        </div>
                                        <h3 class="homec-property__title"><a href="{{ route('listing.details', $listing->slug) }}">@php
        $words = explode(' ', $listing->name);
        $wordCount = 9; // Change this value as per your requirement
    @endphp

    @if(count($words) > $wordCount)
        {{ implode(' ', array_slice($words, 0, $wordCount)) }}...
    @else
        {{ $listing->name }}
    @endif</a></h3>
                                        <div class="homec-property__text">
                                            <img src="{{ asset('frontend/assets/img/location-icon.svg') }}" alt="address"><p>{{ $listing->address }}</p>
                                        </div>
                                        <!-- Property List-->
                                        <ul class="homec-property__list homec-border-top list-none">
                                            <li><img src="{{ asset('frontend/assets/img/icon/room-icon2.svg') }}" alt="total_bedroom">{{ $listing->bed_room }} {{ __('Bed Rooms') }}</li>
                                            <li><img src="{{ asset('frontend/assets/img/icon/bath-icon2.svg') }}" alt="total_bathroom">{{ $listing->bath_room }} {{ __('Bath Rooms') }}</li>
                                            <li><img src="{{ asset('frontend/assets/img/icon/size-icon2.svg') }}" alt="total_bathroom">600 sq</li>
                                          
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
            .setView([-37.82, 175.215], 14)
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
    window.map.fitBounds(window.markers.getBounds()).zoomOut(5);
        }
    </script>
@endpush
