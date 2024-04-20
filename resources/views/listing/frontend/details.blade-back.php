@extends('saas.frontend.layouts.app')
@section('content')
    <div class="property-details-area">
        <div class="row">
            <div class="col-md-12">
                <div class="property-bander-text">
                    <h5 class="property-bander-header">{{ __('Property Details') }}</h5>
                    <p class="property-home-part">
                        <a href="{{ route('frontend') }}">Home </a> / <a href="{{ route('listings') }}">{{ __('Properties') }}</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                        <!-- html start here -->
                        <div class="homec-property-slides">
                            <div class="homec-property-main">
                                <div class="flexslider" id="f1">
                                    <ul class="slides">
                                    @foreach ($images as $image)
                                        <li>
                                     
                                            <div class="homec-image-gallery">
                                                <!-- Amount Card -->
                                                <div class="homec-amount-card homec-amount-card__sticky">
                                                    <h4 class="homec-amount-card__amount">  {{ currencyPrice($listing->price) }}/ <span>
                                    @if ($listing->price_duration_type == DURATION_TYPE_MONTHLY)

                                        {{ __('Monthly') }}
                                    @elseif($listing->price_duration_type == DURATION_TYPE_YEARLY)
                                        {{ __('Yearly') }}
                                    @else
                                        {{ __('Custom') }}
                                    @endif
                                </span></h4>
                                                </div>
                                                
                                                <!-- End Amount Card -->
                                         <div class="homec-overlay"></div>

                                                <img src="{{ assetUrl($image->folder_name . '/' . $image->file_name) }}" alt="{ $listing->name }}" draggable="false">
                                                
                                                <div class="homec-image-gallery__bottom">
                                                    <div class="homec-image-gallery__content">
                                                        <h3 class="homec-image-gallery__title">{{ $listing->name }}</h3>
                                                        <p class="homec-image-gallery__text">
                                                        <img src="{{ asset('frontend/assets/img/map-icon.svg')}}" alt="#">
                                                        {{ $listing->address }} </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                       </ul>
                                </div>

                                <div class="homec-property-thumbs--top">
                                    <div class="homec-property-thumbs mg-top-10">
                                        <div class="flexslider carousel" id="f2">
                                            
                                        <div class="flex-viewport" style="overflow: hidden; position: relative;">
                                            <ul class="slides">
                                            @foreach ($images as $image)
                                                <li>
                                                    <div class="single-thumbs">
                                                    <img src="{{ assetUrl($image->folder_name . '/' . $image->file_name) }}"
                                    alt="{{ $listing->name }}">
                                                    </div>
                                                </li>
                                                @endforeach
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- html end here -->
                </div>
            </div>

            <!-- feature start here -->
            <div class="pd-top-10 pd-btm-50">
                <div class="col-12">
                    <div class="pd-features">
                        <!-- Pd Features -->
                        <div class="pd-features__single mg-top-30">
                            <div class="pd-features__icon">
                                <img src="{{ asset('/frontend/assets/img/pd-icon-1.svg') }}">
                              
                            </div>
                            <h4 class="pd-features__title"> {{ __('Living Rooms') }}</h4>
                            <p class="pd-features__text">{{ $listing->living_room }} Living Rooms</p>
                        </div>
                        <!-- End Pd Features -->
                        <!-- Pd Features -->
                        <div class="pd-features__single mg-top-30">
                            <div class="pd-features__icon">
                                <img src="{{ asset('/frontend/assets/img/pd-icon-2.svg') }}">
                            </div>
                            <h4 class="pd-features__title"> {{ __('Dining Rooms') }}</h4>
                            <p class="pd-features__text">{{ $listing->dining_room }} Dining Rooms</p>
                        </div>
                        <!-- End Pd Features -->
                        <!-- Pd Features -->
                        <div class="pd-features__single mg-top-30">
                            <div class="pd-features__icon">
                                <img src="{{ asset('/frontend/assets/img/pd-icon-3.svg') }}">
                            </div>
                            <h4 class="pd-features__title">Bedroom</h4>
                            <p class="pd-features__text">{{ $listing->bed_room }} Bedroom</p>
                        </div>
                        <!-- End Pd Features -->
                        <!-- Pd Features -->
                        <div class="pd-features__single mg-top-30">
                            <div class="pd-features__icon">
                                <img src="{{ asset('/frontend/assets/img/pd-icon-4.svg') }}">
                            </div>
                            <h4 class="pd-features__title">Bathroom</h4>
                            <p class="pd-features__text">{{ $listing->bath_room }} Bath Room</p>
                        </div>
                        <!-- End Pd Features -->
                        <!-- Pd Features -->
                        <div class="pd-features__single mg-top-30">
                            <div class="pd-features__icon">
                                <img src="{{ asset('/frontend/assets/img/pd-icon-5.svg') }}">
                            </div>
                            <h4 class="pd-features__title">Kitchen</h4>
                            <p class="pd-features__text">{{ $listing->kitchen_room }} Kitchen</p>
                        </div>
                        <!-- End Pd Features -->
                    </div>
                </div>
            </div>
            <!-- feature end here -->
        </div>
    </section>

    <section class="pd-top-0 homec-bg-third-color pd-btm-80 homec-bg-cover homec-property-single-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 ol-12">
                    <div class="list-group homec-list-tabs homec-list-tabs--v2" id="list-tab" role="tablist">
                        <a class="list-group-item active" data-bs-toggle="list" href="#homec-pd-tab1" role="tab">Property Details</a>
                        <a class="list-group-item" data-bs-toggle="list" href="#homec-pd-tab2" role="tab">Video</a>
                        <a class="list-group-item" data-bs-toggle="list" href="#homec-pd-tab3" role="tab">Locations </a>
                        <a class="list-group-item" data-bs-toggle="list" href="#homec-pd-tab4" role="tab">Review</a>
                    </div>

                    <div class="homec-pdetails-tab">
                        <div class="tab-content" id="nav-tabContent">
                            <!--  Property Details -->
                            <div class="tab-pane fade show active" id="homec-pd-tab1" role="tabpanel">
                                <div class="homec-pdetails-tab__inner">
                                    <p>{!! $listing->details !!}</p>
                                    
                                   
                                    <!-- Homec Features -->

                                                                        <!-- End Homec Features -->
                                                                            <!-- Homec Features -->
                                        <div class="homec-ptdetails-features mg-top-30">
                                            <h4 class="homec-ptdetails-features__title">Property Details</h4>
                                            <ul class="homec-ptdetails-features__list">
                                                <li><b> {{ __('Interior') }}:</b> <span>{{ $listing->interior }}</span></li>
                                                <li><b> {{ __('Property Type') }}:</b> <span>{{ $listing->type }}</span></li>
                                               
                                            </ul>
                                        </div>


                                        <div class="homec-ptdetails-features mg-top-30">
                                            <h4 class="homec-ptdetails-features__title">Amenities</h4>
                                            <ul class="homec-ptdetails-features__list">
                                            @foreach (json_decode($listing->amenities) ?? [] as $amenity)
                                                <li><b><i class="fas fa-check"></i>  {{ getPropertyAmenities($amenity) }}</b></li>
                                                @endforeach
                                            
                                            </ul>
                                        </div>

                                        <div class="homec-ptdetails-features mg-top-30">
                                            <h4 class="homec-ptdetails-features__title">Additional Information</h4>
                                            <ul class="homec-ptdetails-features__list">
                                            @foreach (json_decode($listing->advantage) ?? [] as $advantage)
                                                <li>  {{ getPropertyAdvantages($advantage) }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <!-- End Homec Features -->
                                    
                                                                            <!-- Homec Features -->

                                        <!-- End Homec Features -->
                                                                    </div>
                            </div>
                            <!--  End Property Details -->

                            <!--  Property Video -->
                            <div class="tab-pane fade" id="homec-pd-tab2" role="tabpanel">
                                <div class="homec-pdetails-tab__inner">
                                    <p>Appetere fabellas ius te. Nonumes splendide deseruisse ea vis, alii velit vel eu. Eos ut scaevola platonem rationibus. Vis natum vivendo sententiae in, ea aperiam apeirian pri, in partem eleifend quo. Pro ex nobis utinam, nam et vidit numquam fastidii, ne per munere adolescens.</p>
                                    <!-- Homec Features -->
                                    <div class="homec-ptdetails-video">
                                        <div class="homec-overlay"></div>
                                    <img src="http://localhost:8888/Prroperties-new/uploads/custom-images/video-thumb-2023-05-08-10-32-17-7093.webp">
                                    <div class="homec-ptdetails-video__video">
                                            <a data-video-id="video-light" class="js-video-btn homec-btn homec-btn__second homec-btn__video">
                                                <div class="homec-btn__inside">
                                                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M24 45.6001C35.9293 45.6001 45.6001 35.9296 45.6001 24C45.6001 12.0707 35.9296 2.39995 24 2.39995C12.0707 2.39995 2.39995 12.0707 2.39995 24C2.39995 35.9293 12.0707 45.6001 24 45.6001ZM24 48C37.2547 48 48 37.2547 48 24C48 10.7451 37.2547 0 24 0C10.7451 0 0 10.7451 0 24C0 37.2547 10.7451 48 24 48Z" fill="#111111"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M30.2363 24L19.1998 16.6424V31.3579L30.2363 24ZM32.4661 22.6023C33.4637 23.2673 33.4637 24.733 32.4661 25.3981L19.4115 34.1013C18.2951 34.8456 16.7996 34.0451 16.7996 32.7033V15.297C16.7996 13.9552 18.2951 13.1549 19.4115 13.8993L32.4661 22.6023Z" fill="#111111"></path>
                                                    </svg>
                                                    <span>Play Video</span>
                                                </div>
                                            </a>
                                    </div>

                                    </div>
                                    <!-- End Homec Features -->
                                </div>
                            </div>
                            <!--  End Property Video -->

                            <!--  Property Map -->
                            <div class="tab-pane fade" id="homec-pd-tab3" role="tabpanel">
                                <div class="homec-pdetails-tab__inner m-0">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="homec-location-card mg-top-20">
                                                <div class="homec-location-card__icon">
                                                <svg width="31" height="35" viewBox="0 0 31 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M21.1 22.9899C24.8026 17.1798 24.3372 17.9046 24.4439 17.7531C25.7919 15.8518 26.5044 13.6139 26.5044 11.2814C26.5044 5.09565 21.4848 0 15.291 0C9.11739 0 4.0776 5.08559 4.0776 11.2814C4.0776 13.6124 4.80505 15.9088 6.19728 17.8358L9.48193 22.9899C5.97009 23.5296 0 25.1379 0 28.6791C0 29.9701 0.842569 31.8097 4.85656 33.2433C7.65937 34.2443 11.365 34.7956 15.291 34.7956C22.6324 34.7956 30.582 32.7247 30.582 28.6791C30.582 25.1373 24.6189 23.5307 21.1 22.9899ZM7.90029 16.7144C7.88908 16.6969 7.87739 16.6798 7.86515 16.6629C6.70664 15.0691 6.11641 13.1802 6.11641 11.2814C6.11641 6.18314 10.2216 2.0388 15.291 2.0388C20.3499 2.0388 24.4656 6.18498 24.4656 11.2814C24.4656 13.1833 23.8865 15.0081 22.7907 16.5599C22.6925 16.6894 23.2048 15.8935 15.291 28.3114L7.90029 16.7144ZM15.291 32.7568C7.27213 32.7568 2.0388 30.3997 2.0388 28.6791C2.0388 27.5227 4.72785 25.6213 10.6866 24.8801L14.4313 30.7561C14.6185 31.0499 14.9427 31.2277 15.2909 31.2277C15.6392 31.2277 15.9635 31.0498 16.1506 30.7561L19.8952 24.8801C25.8541 25.6213 28.5432 27.5227 28.5432 28.6791C28.5432 30.3851 23.357 32.7568 15.291 32.7568Z"/>
                                                        <path d="M15.2923 6.18457C12.4818 6.18457 10.1953 8.47109 10.1953 11.2816C10.1953 14.0921 12.4818 16.3786 15.2923 16.3786C18.1028 16.3786 20.3893 14.0921 20.3893 11.2816C20.3893 8.47109 18.1028 6.18457 15.2923 6.18457ZM15.2923 14.3398C13.606 14.3398 12.2341 12.9679 12.2341 11.2816C12.2341 9.59528 13.606 8.22337 15.2923 8.22337C16.9786 8.22337 18.3505 9.59528 18.3505 11.2816C18.3505 12.9679 16.9786 14.3398 15.2923 14.3398Z" />
                                                    </svg>
                                                </div>
                                                <h4 class="homec-location-card__title">Address</h4>
                                                <p class="homec-location-card__desc">{{ $listing->address }}</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="homec-location-card mg-top-20">
                                            @php
use Illuminate\Support\Str;
@endphp

                                                <p class="homec-location-card__text">{{ Str::limit($listing->details, 300, '...') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                <div class="homec-gmap-canvas mg-top-30 property-location-area">
                                <div id="map" class="w-100"></div>
                                    </div>
                                </div>
                            </div>
                            <!--  End Property Map -->
                            <!--  Property Review -->
                            <div class="tab-pane fade" id="homec-pd-tab4" role="tabpanel">
                                <div class="homec-pdetails-tab__inner">
                                <div class="homec-pdetails-tab--review">
                                        <div class="homec-testimonial homec-testimonial--review homec-border mg-top-30">
                                            <div class="homec-rating--main mg-btm-15">
                                                <!-- Author Rating -->
                                                <ul class="homec-rating list-none">
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                </ul>
                                                <span class="homec-primary-color">May 08 2023</span>
                                            </div>
                                            <!-- Testimonial Text -->
                                            <p class="homec-testimonial__text">“The storage in this property is impressive. The closets are spacious and there's plenty of room for all of my belongings.”</p>
                                            <div class="homec-testimonial__bottom">
                                                <!-- Testimonial Author -->
                                                <div class="homec-testimonial__author">
                                                    <img src="http://localhost:8888/Prroperties-new/uploads/custom-images/julie-ana-2023-05-08-09-47-41-1563.jpg" alt="image">

                                                    <div class="homec-testimonial__author--info">
                                                        <h5 class="homec-testimonial__author--title">Julie Ana</h5>
                                                        <p class="homec-testimonial__author--position">HomeCo Founder</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="homec-testimonial homec-testimonial--review homec-border mg-top-30">
                                            <div class="homec-rating--main mg-btm-15">
                                                <!-- Author Rating -->
                                                <ul class="homec-rating list-none">
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                </ul>
                                                <span class="homec-primary-color">May 08 2023</span>
                                            </div>
                                            <!-- Testimonial Text -->
                                            <p class="homec-testimonial__text">“The value of this property is unbeatable. With all of the features and amenities included, it's a steal!”</p>
                                            <div class="homec-testimonial__bottom">
                                                <!-- Testimonial Author -->
                                                <div class="homec-testimonial__author">
                                                    <img src="http://localhost:8888/Prroperties-new/uploads/custom-images/cody-fisher-2023-05-07-04-31-07-5498.jpg" alt="image">
                                                    <div class="homec-testimonial__author--info">
                                                        <h5 class="homec-testimonial__author--title">Cody Fisher</h5>
                                                        <p class="homec-testimonial__author--position">Real Estate Broker</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="homec-testimonial homec-testimonial--review homec-border mg-top-30">
                                            <div class="homec-rating--main mg-btm-15">
                                                <!-- Author Rating -->
                                                <ul class="homec-rating list-none">
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                </ul>
                                                <span class="homec-primary-color">May 08 2023</span>
                                            </div>
                                            <!-- Testimonial Text -->
                                            <p class="homec-testimonial__text">“I love the historic charm of this property. It has so much character and the original features really make it stand out.”</p>
                                            <div class="homec-testimonial__bottom">
                                                <!-- Testimonial Author -->
                                                <div class="homec-testimonial__author">
                                                    <img src="http://localhost:8888/Prroperties-new/uploads/custom-images/john-doe-2023-05-07-12-57-43-3520.jpg" alt="image">
                                                    <div class="homec-testimonial__author--info">
                                                        <h5 class="homec-testimonial__author--title">John Doe</h5>
                                                        <p class="homec-testimonial__author--position">Real Estate Broker</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row mg-top-40">
                                            <div class="homec-pagination">
                                                <ul class="homec-pagination__list list-none">

                                                </ul>
                                            </div>
                                        </div>

                                </div>
                                </div>
                            </div>
                            <!--  End Property Review -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-12">
                    <!-- Property Agent Card -->
                    <div class="homec-property-ag homec-property-ag--side homec-bg-cover homec-agent-side-cover">
                        <h3 class="homec-property-ag__title">Schedule Tour</h3>
                        <!-- Property Profile -->

                        <!-- End Property Profile -->
                        <form id="agentEmailForm" action="{{ route('listing.contact.store') }}" class="homec-property-ag__form ajax" method="POST" data-handler="getShowMessage">
                            @csrf
                            <input type="hidden" name="id" value="{{ $listing->id }}">
                            <div class="form-group">
                                <input type="text" id="name"  name="name" placeholder="{{ __('Full Name') }}">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email"  id="email" placeholder="{{ __('Email') }}">
                            </div>
                            <div class="form-group">
                                <input type="text" id="phone" name="phone" placeholder="{{ __('Phone Number') }}">
                            </div>


                            <!-- <div class="form-group">
                                <input type="text" id="profession" name="profession" placeholder="{{ __('Profession') }}">
                            </div> -->
                            <div class="form-group">
                                <textarea name="details" id="details" placeholder="{{ __('Details') }}"></textarea>
                            </div>
                            <div class="form-group">
                                <div class="g-recaptcha" data-sitekey=""></div>
                            </div>

                            <button id="agentEmailBtnId" type="submit" class="homec-btn homec-btn__second homec-property-ag__button"><span>Book a Tour</span></button>
                        </form>
                    </div>
                    <!-- End Property Agent Card -->
                </div>
            </div>
        </div>
    </section>
    
    <div class="related-properties">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="related-title">{{ __('Related Properties') }}</h4>
                </div>
            </div>
            <div class="row">
                @foreach ($relatedListings as $relatedListing)
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="all-single-properties">
                            <div class="single-properties">
                                <div class="properties-img">
                                    <img src="{{ assetUrl($relatedListing->folder_name . '/' . $relatedListing->file_name) }}"
                                        alt="{{ $relatedListing->name }}">
                                </div>
                                <div class="properties-text-info">
                                    <h5 class="properties-name">{{ $relatedListing->name }}</h5>
                                    <div class="properties-location">
                                        <div class="properties-icon-type-location">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                        <p>{{ $relatedListing->address }}</p>
                                    </div>
                                    <div class="room-details">
                                        <div class="single-option">
                                            <div class="properties-icon-type">
                                                <i class="fas fa-cube"></i>
                                            </div>
                                            <p>{{ $relatedListing->interior }} {{ __('sqft') }}</p>
                                        </div>
                                        <div class="single-option">
                                            <div class="properties-icon-type">
                                                <i class="ri-layout-2-fill"></i>
                                            </div>
                                            <p>{{ $relatedListing->bed_room }} {{ __('Rooms') }}</p>
                                        </div>
                                        <div class="single-option">
                                            <div class="properties-icon-type">
                                                <i class="ri-user-2-fill"></i>
                                            </div>
                                            <p>{{ $relatedListing->type }}</p>
                                        </div>
                                        <p class="price-properties">{{ __('Price') }} :
                                            {{ currencyPrice($listing->price) }}/
                                            @if ($listing->price_duration_type == DURATION_TYPE_MONTHLY)
                                                {{ __('Month') }}
                                            @elseif($listing->price_duration_type == DURATION_TYPE_YEARLY)
                                                {{ __('Yearly') }}
                                            @else
                                                {{ __('Custom') }}
                                            @endif
                                        </p>
                                    </div>
                                    <a href="{{ route('listing.details', $relatedListing->slug) }}"
                                        class="btn mt-3 py-3 rounded  theme-btn w-100">{{ __('View Details') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


@endsection
@push('style')
    <link rel="stylesheet" href="{{ asset('assets/properties/css/properties.css') }}">
    <link href='https://api.mapbox.com/mapbox.js/v3.3.1/mapbox.css' rel='stylesheet' />
    <link href='https://api.mapbox.com/mapbox.js/plugins/leaflet-markercluster/v1.0.0/MarkerCluster.css'
        rel='stylesheet' />
    <link href='https://api.mapbox.com/mapbox.js/plugins/leaflet-markercluster/v1.0.0/MarkerCluster.Default.css'
        rel='stylesheet' />
    <style>
        #map {
            width: 100%;
            height: 454px;
            border-radius: 5px;
            border: 2px solid #75cff0;
        }
    </style>
@endpush
@push('script')
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
            window.map.fitBounds(window.markers.getBounds())
        }
    </script>
     <script>
        function propertyReview(rating){
            $(".property_rat").each(function(){
                var property_rat = $(this).data('rating')
                if(property_rat > rating){
                    $(this).removeClass('fa-solid fa-star').addClass('fa-regular fa-star');
                }else{
                    $(this).removeClass('fa-regular fa-star').addClass('fa-solid fa-star');
                }
            })
            $("#property_rating").val(rating);
        }
    </script>
@endpush
