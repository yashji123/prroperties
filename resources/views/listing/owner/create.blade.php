@extends('owner.layouts.app')
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="upload-property">
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
                                            <li class="breadcrumb-item" aria-current="page">{{ __('My Listing') }}</li>
                                            <li class="breadcrumb-item active" aria-current="page">{{ $pageTitle }}</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <form class="ajax" action="{{ route('owner.listing.store') }}" method="POST"
                                    data-handler="getShowListingMessage">
                                    <div class="upload-from-area">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="single-upload-from-property">
                                                    <div class="col-lg-12">
                                                        <h5 class="single-input-title">{{ __('Property Information') }}</h5>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="single-upload-input-from">
                                                                <label for="name">{{ __('Name') }}</label>
                                                                <input type="text" class="form-control" name="name"
                                                                    placeholder="{{ __('Name') }}" id="name">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="single-upload-input-from">
                                                                <label for="price">{{ __('Price') }}</label>
                                                                <div class="input-group mb-3">
                                                                    <input type="number" step="any"
                                                                        class="form-control" name="price"
                                                                        placeholder="{{ __('Price') }}" id="price">
                                                                    <select name="price_duration_type" class="form-control" onchange="priceDurationType(event.target.value)">
                                                                        @foreach (getDurationTypes() as $key => $durationType)
                                                                            <option value="{{ $key }}">
                                                                                {{ $durationType }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    <input type="number" step="any" class="form-control d-none" name="min_booking_days" placeholder="Min Booking Days" id="min_booking_days" min="0">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="single-upload-input-from">
                                                                <label for="status">{{ __('Status') }}</label>
                                                                <div class="input-group mb-3">
                                                                    <select name="status" class="form-control">
                                                                        <option value="1"> {{ __('Active') }}
                                                                        </option>
                                                                        <option value="2"> {{ __('Deactivate') }}
                                                                        </option>
                                                                        <option value="3"> {{ __('Close') }}
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="single-upload-input-from">
                                                                <label for="country">{{ __('Country') }}</label>
                                                                <input type="text" class="form-control" name="country"
                                                                    placeholder="{{ __('Country') }}" id="country">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="single-upload-input-from">
                                                                <label for="state">{{ __('State') }}</label>
                                                                <input type="text" class="form-control" name="state"
                                                                    placeholder="{{ __('State') }}" id="state">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="single-upload-input-from">
                                                                <label for="city">{{ __('City') }}</label>
                                                                <input type="text" class="form-control" name="city"
                                                                    placeholder="{{ __('City') }}" id="city">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="single-upload-input-from">
                                                                <label for="zip_code">{{ __('Zip Code') }}</label>
                                                                <input type="text" class="form-control" name="zip_code"
                                                                    placeholder="{{ __('Zip Code') }}" id="zip_code">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="single-upload-input-from">
                                                                <label for="address">{{ __('Address') }}</label>
                                                                <input type="text" class="form-control" name="address"
                                                                    placeholder="{{ __('address') }}" id="address">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="single-upload-input-from">
                                                                <label for="latitude">{{ __('Latitude') }}</label>
                                                                <input type="number" step="any" name="latitude"
                                                                    value="" class="form-control" id="latitude"
                                                                    placeholder="{{ __('Latitude') }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="single-upload-input-from">
                                                                <label for="longitude">{{ __('Longitude') }}</label>
                                                                <input type="number" step="any" name="longitude"
                                                                    value="" class="form-control" id="longitude"
                                                                    placeholder="{{ __('Longitude') }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="single-upload-input-from">
                                                                <label>{{ __('Location') }}</label>
                                                                <div id="map"></div>
                                                                <div class="position-relative">
                                                                    <div class="position-absolute bottom-0 start-0">
                                                                        <pre id="coordinates" class="coordinates"></pre>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="single-upload-input-from">
                                                                <label>{{ __('Details') }}</label>
                                                                <textarea name="details" placeholder="{{ __('Details') }}" cols="30" rows="10"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="single-upload-from-property">
                                                    <div class="col-lg-12">
                                                        <h5 class="single-input-title">{{ __('Property Specification') }}
                                                        </h5>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="single-upload-input-from">
                                                                <label for="bed_room">{{ __('Bedrooms') }}</label>
                                                                <input type="text" name="bed_room" id="bed_room"
                                                                    placeholder="{{ __('Bedrooms') }}" id="bed_room">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="single-upload-input-from">
                                                                <label for="bath_room">{{ __('Bathrooms') }}</label>
                                                                <input type="text" name="bath_room" id="bath_room"
                                                                    placeholder="{{ __('Bathrooms') }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="single-upload-input-from">
                                                                <label for="kitchen_room">{{ __('Kitchen Room') }}</label>
                                                                <input type="text" name="kitchen_room"
                                                                    id="kitchen_room"
                                                                    placeholder="{{ __('Kitchen Room') }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="single-upload-input-from">
                                                                <label for="dining_room">{{ __('Dining Room') }}</label>
                                                                <input type="text" name="dining_room" id="dining_room"
                                                                    placeholder="{{ __('Dining Room') }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="single-upload-input-from">
                                                                <label for="living_room">{{ __('Living Room') }}</label>
                                                                <input type="text" name="living_room" id="living_room"
                                                                    placeholder="{{ __('Living Room') }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="single-upload-input-from">
                                                                <label for="storage_room">{{ __('Storage Room') }}</label>
                                                                <input type="text" name="storage_room"
                                                                    id="storage_room"
                                                                    placeholder="{{ __('Storage Room') }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="single-upload-input-from">
                                                                <label for="other_room">{{ __('Area in Sqft') }}</label>
                                                                <input type="text" name="other_room" id="other_room"
                                                                    placeholder="{{ __('without Sqft') }}">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="single-upload-from-property">
                                                    <div class="col-lg-12">
                                                        <h5 class="single-input-title">{{ __('Property Details') }}</h5>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="single-upload-input-from">
                                                                <label for="interior">{{ __('Interior') }}</label>
                                                                <input type="text" name="interior" id="interior"
                                                                    placeholder="{{ __('Interior') }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="single-upload-input-from">
                                                                <label for="type">{{ __('Property Type') }}</label>
                                                                <input type="text" name="type" id="type"
                                                                    placeholder="{{ __('Property Type') }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="single-upload-input-from">
                                                                <label for="image">{{ __('Images') }}</label>
                                                                <input type="file" id="image" name="images[]"
                                                                    multiple>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="single-upload-from-property">
                                                    <div class="col-lg-12">
                                                        <h5 class="single-input-title">{{ __('Amenities') }}</h5>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="amenities-upload-input">
                                                                @foreach (getPropertyAmenities() as $key => $amenity)
                                                                    <div class="single-interior">
                                                                        <input type="checkbox" name="amenities[]"
                                                                            id="amenity{{ $key }}"
                                                                            value="{{ $key }}">
                                                                        <label
                                                                            for="amenity{{ $key }}">{{ $amenity }}</label>
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="single-upload-from-property">
                                                    <div class="col-lg-12 d-flex content-justify-left">
                                                        <h5 class="single-input-title mr-15">
                                                            {{ __('Nearby Information') }}</h5>
                                                        <button type="button" class="btn rounded theme-btn"
                                                            id="addInfo"><i class="fas fa-plus"></i></button>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12" id="infoItems">
                                                            <div class="row mb-3">
                                                                <div class="col-lg-6">
                                                                    <div class="single-upload-input-from">
                                                                        <label>{{ __('Name') }}</label>
                                                                        <input type="text" name="info[name][]"
                                                                            class="info-name"
                                                                            placeholder="{{ __('Name') }}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="single-upload-input-from">
                                                                        <label>{{ __('Distance') }}</label>
                                                                        <input type="text" name="info[distance][]"
                                                                            placeholder="{{ __('Distance') }}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="single-upload-input-from">
                                                                        <label>{{ __('Contact Number') }}</label>
                                                                        <input type="text"
                                                                            name="info[contact_number][]"
                                                                            placeholder="{{ __('Contact Number') }}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="single-upload-input-from">
                                                                        <label
                                                                            for="image">{{ __('Upload Image') }}</label>
                                                                        <input type="file" name="info[image][]">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12">
                                                                    <div class="single-upload-input-from">
                                                                        <label>{{ __('Details') }}</label>
                                                                        <textarea name="info[details][]" placeholder="{{ __('Details') }}" cols="30" rows="10"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 d-flex justify-content-center">
                                                                    <button type="button"
                                                                        class="upload-count-trash theme-btn-red ms-4 removeInfo"><i
                                                                            class="far fa-trash-alt"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="single-upload-from-property">
                                                    <div class="col-lg-12">
                                                        <h5 class="single-input-title">{{ __('Listing type') }}</h5>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="amenities-upload-input">
                                                                @foreach (getPropertyAdvantages() as $key => $advantage)
                                                                    <div class="single-interior">
                                                                        <input type="checkbox" name="advantage[]"
                                                                            value="{{ $key }}"
                                                                            id="advantage{{ $key }}">
                                                                        <label
                                                                            for="advantage{{ $key }}">{{ $advantage }}</label>
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <button type="submit"
                                                    class="btn btn-primary  py-3 px-4 mt-3">{{ __('Submit') }}</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" value="{{ route('owner.listing.index') }}" id="listingRoute">
@endsection
@push('style')
    <link rel="stylesheet" href="{{ asset('assets/properties/css/properties.css') }}">
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.10.0/mapbox-gl.css" rel="stylesheet">
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.10.0/mapbox-gl.js"></script>
    <style>
        #map {
            width: 100%;
            height: 450px;
            border-radius: 5px;
            border: 2px solid #75cff0;
        }

        .coordinates {
            background: rgba(0, 0, 0, 0.5);
            color: #fff;
            padding: 5px 10px;
            margin: 0;
            font-size: 11px;
            line-height: 18px;
            border-radius: 3px;
            display: none;
        }
    </style>
@endpush
@push('script')
    <script src="{{ asset('assets/js/custom/listing/listing.js') }}"></script>

    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.min.js"></script>
    <link rel="stylesheet"
        href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.css"
        type="text/css">

    <script>
        const ACCESSTOKENKEY =
            "pk.eyJ1Ijoic2FkZWt1cmljdCIsImEiOiJjbGE4NXo1bGkwMG55M3VwZWJib2drODFoIn0.mvPqQbnkh6B1V0928bnG_g";
        const APPTHEMECOLOR = '#5e3fd7';
        "use strict";

        mapboxgl.accessToken = ACCESSTOKENKEY;
        var latId = document.getElementById('latitude');
        var longId = document.getElementById('longitude');
        var coordinates = document.getElementById('coordinates');
        var point = [longId.value, latId.value];
        var zoom = 2;
        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v11',
            center: [longId.value, latId.value],
            zoom: zoom
        });

        var marker = new mapboxgl.Marker({
                color: APPTHEMECOLOR,
                draggable: true
            }).setLngLat(point)
            .addTo(map);

        function onDragEnd() {
            var lngLat = marker.getLngLat();
            longId.value = lngLat.lng;
            latId.value = lngLat.lat;
        }
        marker.on('dragend', onDragEnd);

        $(document).on("change", "#country,#state,#city", function() {
            var country = ($(document).find('#country').val() != '') ? ',' + $(document).find('#country').val() :
                '';
            var state = ($(document).find('#state').val() != '') ? ',' + $(document).find('#state').val() : '';
            var city = ($(document).find('#city').val() != '') ? $(document).find('#city').val() : '';
            var search = city + state + country;
            var url = 'https://api.mapbox.com/geocoding/v5/mapbox.places/' + search + '.json?access_token=' +
                ACCESSTOKENKEY;
            $.ajax({
                url: url,
                cache: false,
                success: function(res) {
                    var newPoint = [res.features['0'].center[0], res.features['0'].center[1]];
                    map.project(newPoint);
                    map.flyTo({
                        'center': newPoint
                    });
                    marker.setLngLat(newPoint);
                    longId.value = newPoint[0];
                    latId.value = newPoint[1];
                }
            });
        });

        $(document).on('input', '#latitude,#longitude', function() {
            var newPoint = [longId.value, latId.value];
            map.project(newPoint);
            map.flyTo({
                'center': newPoint
            });
            marker.setLngLat(newPoint);
        });
        
        function priceDurationType(val){
            if(val == '4'){
                min_booking_days.classList.remove('d-none');
            }else{
                min_booking_days.classList.add('d-none');
            }
        }
    </script>
@endpush
