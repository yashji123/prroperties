@extends('saas.frontend.layouts.app')



@section('content')
<!-- homec Hero -->

@push('scripts')
  <script type="application/ld+json">
{
 "@context": "https://schema.org/",
 "@type": "WebSite",
 "name": "prroperties",
 "url": "https://www.prroperties.com/",
 "potentialAction": {
   "@type": "SearchAction",
   "target": "https://www.prroperties.com/contact{search_term_string}",
   "query-input": "required name=search_term_string"
 }
}
</script>





<script type="application/ld+json">
{
 "@context": "https://schema.org/",
 "@type": "BreadcrumbList",
 "itemListElement": [{
   "@type": "ListItem",
   "position": 1,
   "name": "Live and Work Properties",
   "item": "https://www.prroperties.com/"  
 },{
   "@type": "ListItem",
   "position": 2,
   "name": "Manage Your Property Seamlessly",
   "item": "https://www.prroperties.com/landlord"  
 },{
   "@type": "ListItem",
   "position": 3,
   "name": "Contact Prroperties",
   "item": "https://www.prroperties.com/contact"  
 }]
}
</script>



<script type="application/ld+json">
{
 "@context": "https://schema.org",
 "@type": "Organization",
 "name": "Prroperties",
 "alternateName": "prroperties.com",
 "url": "https://www.prroperties.com/",
 "logo": "https://www.prroperties.com/frontend/assets/img/logo.png",
 "sameAs": [
   "https://www.facebook.com/Prroperties",
   "https://twitter.com/Prroperties",
   "https://www.linkedin.com/company/prroperties/",
   "https://www.prroperties.com/",
   "https://www.instagram.com/Prroperties/",
   "https://www.pinterest.com/Prroperties/"
 ]
}
</script>

@endpush



<section id="hero" class="homec-hero homec-bg-cover p-relative" style="background-image:url('{{ asset('frontend/assets/img/slider-01.webp') }}');">

    <div class="homec-overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-10 offset-md-1 col-12">
                    <div class="homec-hero__inner">
                        <svg class="homec-arrow-left" style="display: none;" width="106" height="193" viewBox="0 0 106 193" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M41.5023 1.15691C14.2375 16.2178 -4.14265 43.6931 1.00245 74.3315C2.53343 83.4634 6.44872 93.3821 13.1666 100.543C11.7779 112.322 13.677 124.712 18.1444 135.489C24.5277 150.884 36.148 165.77 52.4032 172.661C62.4926 176.936 73.8871 178.399 84.5622 176.158C81.5002 179.845 78.8816 183.843 76.9324 188.127C75.3846 191.505 79.9859 194.096 82.2113 190.98C88.4356 182.269 94.8272 174.624 103.821 168.305C107.786 165.523 104.599 160.27 100.073 162.042C93.815 164.474 88.3687 161.589 84.2359 157.234C81.4333 154.285 76.4555 158.045 78.4633 161.415C81.1906 165.977 85.7752 168.631 90.8032 169.577C90.7279 169.648 90.6526 169.72 90.5857 169.783C51.575 182.905 18.7635 141.927 19.4495 105.828C21.1729 106.941 23.0218 107.903 25.0045 108.658C37.6456 113.498 51.8009 109.079 61.7899 101.004C71.8793 92.8337 79.0657 78.9173 71.9295 66.8765C65.3538 55.7815 50.5292 55.7497 39.8375 60.9793C27.1881 67.1785 19.3993 77.5344 15.576 89.3844C12.6563 84.5443 10.7572 79.0206 9.75329 73.9182C4.36558 46.6734 21.1311 20.446 43.7193 4.8685C45.9949 3.29485 44.0539 -0.249828 41.5023 1.15691ZM26.6945 80.5227C32.6678 71.208 44.2714 61.488 56.5946 62.402C63.9818 62.9504 68.6249 68.9032 68.9763 75.6588C69.3109 82.1441 65.5713 88.1287 60.8863 92.5635C53.3151 99.7085 41.0924 104.962 30.3755 101.711C26.5355 100.543 23.2895 98.4448 20.5705 95.7823C21.6916 90.362 23.6911 85.2039 26.6945 80.5227Z" fill="#F2C94C"/>
                        </svg>
                        <!-- Hero Content -->
                        <div class="homec-hero__content">
                        
                        <!-- Hero Tabs -->
                        <div class="homec-hero__tabs">
                            <!-- Features Tab List -->
                            <div id="homec-tabs" class="list-group homec-tabs homec-tabs--noborder"  role="tablist">
                                <a class="list-group-item active" data-bs-toggle="list" href="#homec-tab2" role="tab">Rent</a>
                                <a class="list-group-item" data-bs-toggle="list" href="#homec-tab1" role="tab">Buy</a>
                                <a class="list-group-item" href="/pricing">Sell</a>
                            </div>
                        </div>
                        <div class="homec-hero__tabs--detail">
                            <div class="tab-content" id="nav-tabContent">
                                <!--  Tab One -->
                                <div class="tab-pane fade" id="homec-tab1" role="tabpanel">
                                    <h2 class="homec-hero__title homec-hero__title-pos">Easily locate your ideal rental home</h2>
                                    
                                    <div class="homec-filters homec-filters__margin">
                                       <form action="/properties" method="get">
                                            <input type="hidden" name="purpose" value="rent">
                                            <div class="homec-filter-group">
                                                <!-- Form Group -->
                                                <div class="form-group">
                                                    <span class="homec-filter-group__label">Property</span>
                                                    <select name="type" class="select2">
                                                   
                                                        <option value="" data-display="">Apartment</option>
                                                        <option value="" data-display="">Building</option>
                                                        <option value="" data-display="">Duplex House</option>
                                                        <option value="" data-display="">Plaza</option>
                                                    </select>
                                                </div>
                                                <!-- Form Group -->
                                                <!-- <div class="form-group">
                                                    <span class="homec-filter-group__label">Locaiton</span>
                                                    <select name="location" class="select2">
                                                        <option value="" data-display="">Select</option>
                                                        <option value="" data-display="">Alabama</option>
                                                        <option value="" data-display="">Alaska</option>
                                                        <option value="" data-display="">Arizona</option>
                                                        <option value="" data-display="">Arkansas</option>
                                                        <option value="" data-display="">California</option>
                                                        <option value="" data-display="">Colorado</option>
                                                        <option value="" data-display="">Florida</option>
                                                        <option value="" data-display="">Hawaii</option>
                                                        <option value="" data-display="">Idaho</option>
                                                        <option value="" data-display="">Illinois</option>
                                                        <option value="" data-display="">Indiana</option>
                                                        <option value="" data-display="">Maryland</option>
                                                    </select>
                                                </div> -->
                                                <div class="form-group">
                                                    <span class="homec-filter-group__label">Location</span>                                        
                                                    @php
                                                        $states = DB::table('listings')->distinct()->pluck('state')->all();
                                                    @endphp

                                                    <select name="state" id="state" class="select2">
                                                        <option value="">{{ __('State') }}</option>

                                                        @foreach($states as $state)
                                                            @if($state)
                                                                <option value="{{ $state }}" 
                                                                    {{ request('state') == $state ? 'selected' : '' }}>
                                                                    {{ Str::ucfirst($state) }}
                                                                </option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <!-- Form Group -->
                                                <div class="form-group">
                                               
                                                    <span  class="homec-filter-group__label">Budget</span>

                                                     <select name="price" id="price" class="select2">
                                                        <option value="">Price range</option>
                                                        <option value="">$0 - $600</option>
                                                        <option value="">$600 - $1000</option>
                                                        <option value="">$1000 - $2000</option>
                                                        <option value="">$2000 - $3000</option>
                                                        <option value="">$4000 - $5000</option>
                                                        <option value="">$5000 - $6000</option>
                                                    </select> 
                                                </div>

                                                <!-- Button -->

                                                <input type="hidden" name="min_price" value="0" id="rent_min_price">
                                                <input type="hidden" name="max_price" value="0" id="rent_max_price">
                                                <button type="submit" class="homec-btn homec-btn__second cus-homec-btn" id="redirectToPageBtn">
                                                    <span class="homec-btn__inside">
                                                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M8.45185 16.8948C10.3289 16.8949 12.1522 16.2686 13.633 15.1152L19.2197 20.7019C19.637 21.105 20.3021 21.0934 20.7051 20.6761C21.0983 20.269 21.0983 19.6236 20.7051 19.2165L15.1184 13.6298C17.9805 9.9456 17.314 4.63881 13.6298 1.77676C9.94555 -1.08529 4.63881 -0.418815 1.77676 3.26541C-1.08529 6.94964 -0.418815 12.2564 3.26541 15.1185C4.74865 16.2707 6.57361 16.8958 8.45185 16.8948ZM3.96301 3.95978C6.44215 1.48059 10.4616 1.48054 12.9408 3.95969C15.42 6.43883 15.4201 10.4583 12.9409 12.9375C10.4618 15.4167 6.44229 15.4167 3.9631 12.9376C3.96305 12.9376 3.96305 12.9376 3.96301 12.9375C1.48386 10.4764 1.46926 6.47159 3.93034 3.99245C3.94121 3.98153 3.95209 3.97065 3.96301 3.95978Z" fill="#111111"/>
                                                        </svg> 
                                                        Search
                                                    </span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="tab-pane fade show active" id="homec-tab2" role="tabpanel">
                                    <h1 class="homec-hero__title homec-hero__title-pos">Ready-to-go properties</h1>
                                    <div class="homec-filters homec-filters__margin">
                                    <form action="/properties" method="get">
                                            <input type="hidden" name="purpose" value="sale">

                                            <div class="homec-filter-group">
                                                <!-- Form Group -->
                                                <div class="form-group">
                                                    <span class="homec-filter-group__label">Property</span>
                                                    <select name="type" class="select2">
                                                     
                                                        <option value="" data-display="">Apartment</option>
                                                        <option value="" data-display="">Building</option>
                                                        <option value="" data-display="">Duplex House</option>
                                                        <option value="" data-display="">Plaza</option>
                                                    </select>
                                                </div>
                                                <!-- Form Group -->
                                             <div class="form-group">
                                                    <span class="homec-filter-group__label">Location</span>                                        
                                                    @php
                                                        $states = DB::table('listings')->distinct()->pluck('state')->all();
                                                    @endphp

                                                    <select name="state" id="" class="select2">
                                                        <option value="">{{ __('State') }}</option>

                                                        @foreach($states as $state)
                                                            @if($state)
                                                                <option value="{{ $state }}" 
                                                                    {{ request('state') == $state ? 'selected' : '' }}>
                                                                    {{ Str::ucfirst($state) }}
                                                                </option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <!-- Form Group -->
                                                <div class="form-group">
                                                    <span  class="homec-filter-group__label">Budget</span>
                                                    <select name="price" class="select2">
                                                        <option value="">Price Range</option>
                                                        <option value="">$0 - $600</option>
                                                        <option value="">$600 - $1000</option>
                                                        <option value="">$1000 - $2000</option>
                                                        <option value="">$2000 - $3000</option>
                                                        <option value="">$4000 - $5000</option>
                                                        <option value="">$5000 - $6000</option>
                                                    </select>
                                                </div>

                                                <!-- Button -->

                                                <input type="hidden" name="min_price" value="0" id="sale_min_price">
                                                <input type="hidden" name="max_price" value="0" id="sale_max_price">

                                                <!-- Button -->
                                                <button type="submit" class="homec-btn homec-btn__second cus-homec-btn">
                                                    <span class="homec-btn__inside">
                                                        <span>
                                                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M8.45185 16.8948C10.3289 16.8949 12.1522 16.2686 13.633 15.1152L19.2197 20.7019C19.637 21.105 20.3021 21.0934 20.7051 20.6761C21.0983 20.269 21.0983 19.6236 20.7051 19.2165L15.1184 13.6298C17.9805 9.9456 17.314 4.63881 13.6298 1.77676C9.94555 -1.08529 4.63881 -0.418815 1.77676 3.26541C-1.08529 6.94964 -0.418815 12.2564 3.26541 15.1185C4.74865 16.2707 6.57361 16.8958 8.45185 16.8948ZM3.96301 3.95978C6.44215 1.48059 10.4616 1.48054 12.9408 3.95969C15.42 6.43883 15.4201 10.4583 12.9409 12.9375C10.4618 15.4167 6.44229 15.4167 3.9631 12.9376C3.96305 12.9376 3.96305 12.9376 3.96301 12.9375C1.48386 10.4764 1.46926 6.47159 3.93034 3.99245C3.94121 3.98153 3.95209 3.97065 3.96301 3.95978Z" fill="#111111"></path>
                                                            </svg>
                                                        </span>
                                                        <a href="/properties"> <span>Search</span></a>
                                                    </span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- End Tab One -->
                                <div class="tab-pane fade" id="homec-tab3" role="tabpanel">
                                    <h3 class="homec-hero__title homec-hero__title-pos">Turn your property into profit with us</h3>
                                    <div class="homec-filters homec-filters__margin">
                                    <form action="/pricing" method="get">
                                            <input type="hidden" name="purpose" value="any">
                                            <div class="homec-filter-group">
                                                <!-- Form Group -->
                                                <div class="form-group">
                                                    <span class="homec-filter-group__label">Property</span>
                                                    <select name="type" class="select2">
                                                       
                                                        <option value="" data-display="">Apartment</option>
                                                        <option value="" data-display="">Building</option>
                                                        <option value="" data-display="">Duplex House</option>
                                                        <option value="" data-display="">Plaza</option>
                                                    </select>
                                                </div>
                                                <!-- Form Group -->
                                                <div class="form-group">
                                                    <span class="homec-filter-group__label">Location</span>
                                                    <select name="location" class="select2">
                                                        <option value="" data-display=""> State</option>
                                                        <option value="Alabama" data-display="Alabama">Alabama</option>
                                                        <option value="Alaska" data-display="Alaska">Alaska</option>
                                                        <option value="Arizona" data-display="Arizona">Arizona</option>
                                                        <option value="Arkansas" data-display="Arkansas">Arkansas</option>
                                                        <option value="California" data-display="California">California</option>
                                                        <option value="Colorado" data-display="Colorado">Colorado</option>
                                                        <option value="Connecticut" data-display="Connecticut">Connecticut</option>
                                                        <option value="Delaware" data-display="Delaware">Delaware</option>
                                                        <option value="Florida" data-display="Florida">Florida</option>
                                                        <option value="Georgia" data-display="Georgia">Georgia</option>
                                                        <option value="Hawaii" data-display="Hawaii">Hawaii</option>
                                                        <option value="Idaho" data-display="Idaho">Idaho</option>
                                                        <option value="Illinois" data-display="Illinois">Illinois</option>
                                                        <option value="Indiana" data-display="Indiana">Indiana</option>
                                                        <option value="Iowa" data-display="Iowa">Iowa</option>
                                                        <option value="Kansas" data-display="Kansas">Kansas</option>
                                                        <option value="Kentucky" data-display="Kentucky">Kentucky</option>
                                                        <option value="Louisiana" data-display="Louisiana">Louisiana</option>
                                                        <option value="Maine" data-display="Maine">Maine</option>
                                                        <option value="Maryland" data-display="Maryland">Maryland</option>
                                                        <option value="Massachusetts" data-display="Massachusetts">Massachusetts</option>
                                                        <option value="Michigan" data-display="Michigan">Michigan</option>
                                                        <option value="Minnesota" data-display="Minnesota">Minnesota</option>
                                                        <option value="Mississippi" data-display="Mississippi">Mississippi</option>
                                                        <option value="Missouri" data-display="Missouri">Missouri</option>
                                                        <option value="Montana" data-display="Montana">Montana</option>
                                                        <option value="Nebraska" data-display="Nebraska">Nebraska</option>
                                                        <option value="Nevada" data-display="Nevada">Nevada</option>
                                                        <option value="New Hampshire" data-display="New Hampshire">New Hampshire</option>
                                                        <option value="New Jersey" data-display="New Jersey">New Jersey</option>
                                                        <option value="New Mexico" data-display="New Mexico">New Mexico</option>
                                                        <option value="New York" data-display="New York">New York</option>
                                                        <option value="North Carolina" data-display="North Carolina">North Carolina</option>
                                                        <option value="North Dakota" data-display="North Dakota">North Dakota</option>
                                                        <option value="Ohio" data-display="Ohio">Ohio</option>
                                                        <option value="Oklahoma" data-display="Oklahoma">Oklahoma</option>
                                                        <option value="Oregon" data-display="Oregon">Oregon</option>
                                                        <option value="Pennsylvania" data-display="Pennsylvania">Pennsylvania</option>
                                                        <option value="Rhode Island" data-display="Rhode Island">Rhode Island</option>
                                                        <option value="South Carolina" data-display="South Carolina">South Carolina</option>
                                                        <option value="South Dakota" data-display="South Dakota">South Dakota</option>
                                                        <option value="Tennessee" data-display="Tennessee">Tennessee</option>
                                                        <option value="Texas" data-display="Texas">Texas</option>
                                                        <option value="Utah" data-display="Utah">Utah</option>
                                                        <option value="Vermont" data-display="Vermont">Vermont</option>
                                                        <option value="Virginia" data-display="Virginia">Virginia</option>
                                                        <option value="Washington" data-display="Washington">Washington</option>
                                                        <option value="West Virginia" data-display="West Virginia">West Virginia</option>
                                                        <option value="Wisconsin" data-display="Wisconsin">Wisconsin</option>
                                                        <option value="Wyoming" data-display="Wyoming">Wyoming</option>
                                                    </select>
                                                </div>

                                                <!-- Form Group -->
                                                <div class="form-group">
                                                    <span  class="homec-filter-group__label">Budget</span>
                                                    <select name="price" class="select2">
                                                       <option value="">Price Range</option>
                                                        <option value="">$0 - $600</option>
                                                        <option value="">$600 - $1,000,000</option>
                                                        <option value="">$1,000,000 - $2,000,000</option>
                                                        <option value="">$2,000,000 - $3,000,000</option>
                                                        <option value="">$3,000,000 - $4,000,000</option>
                                                        <option value="">$4,000,000 - $5,000,000</option>
                                                        <option value="">$5,000,000 - $6,000,000</option>

                                                    </select>
                                                </div>

                                                <!-- Button -->

                                                <input type="hidden" name="min_price" value="0" id="any_min_price">
                                                <input type="hidden" name="max_price" value="0" id="any_max_price">

                                                <!-- Button -->
                                                <button type="submit" class="homec-btn homec-btn__second cus-homec-btn">
                                                    <span class="homec-btn__inside">
                                                        <span>
                                                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M8.45185 16.8948C10.3289 16.8949 12.1522 16.2686 13.633 15.1152L19.2197 20.7019C19.637 21.105 20.3021 21.0934 20.7051 20.6761C21.0983 20.269 21.0983 19.6236 20.7051 19.2165L15.1184 13.6298C17.9805 9.9456 17.314 4.63881 13.6298 1.77676C9.94555 -1.08529 4.63881 -0.418815 1.77676 3.26541C-1.08529 6.94964 -0.418815 12.2564 3.26541 15.1185C4.74865 16.2707 6.57361 16.8958 8.45185 16.8948ZM3.96301 3.95978C6.44215 1.48059 10.4616 1.48054 12.9408 3.95969C15.42 6.43883 15.4201 10.4583 12.9409 12.9375C10.4618 15.4167 6.44229 15.4167 3.9631 12.9376C3.96305 12.9376 3.96305 12.9376 3.96301 12.9375C1.48386 10.4764 1.46926 6.47159 3.93034 3.99245C3.94121 3.98153 3.95209 3.97065 3.96301 3.95978Z" fill="#111111"></path>
                                                            </svg>
                                                        </span>
                                                      <span>Search</span>
                                                    </span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- End Tab One -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

       @include('feature')

            
        </div>
    </div>
</section>
<!-- End homec Hero -->

<!-- About Area -->
<section class="homec-about pd-top-100 pd-btm-130" style="padding-top:100px;">
    <div class="homec-shape">
        <img class="homec-shape-single homec-shape-1" src="{{ asset('frontend/assets/img/anim-shape-1.svg') }}" alt="icon">
        <img class="homec-shape-single homec-shape-2" src="{{ asset('frontend/assets/img/anim-shape-2.svg') }}" alt="icon">
        <img class="homec-shape-single homec-shape-3" src="{{ asset('frontend/assets/img/anim-shape-3.svg') }}" alt="icon">
    </div>
    <div class="container homec-container-medium">
        <div class="row  homec-container-medium__row align-items-center">
            <div class="col-lg-7 col-12 homec-about__column--one mg-top-30" data-aos="fade-right" data-aos-delay="400">
                <!-- Homec Image Group -->
                <div class="homec-image-group">
                    <div class="homec-image-group__single">
                        <img loading="lazy" src="{{ asset('frontend/assets/img/home2-about-us1.webp') }}" alt="Luxurious home with pool for short-term rentals.">
                        <img loading="lazy" src="{{ asset('frontend/assets/img/home2-aboutus-2.webp') }}" alt="Wooden live and work property with outdoor seating.">
                    </div>
                    <!-- <div class="homec-image-group__content">
                        <h4 class="homec-image-group__title">70%</h4>
                        <p class="homec-image-group__text">Over 70% of Avenue clients said they earned extra and commission in last year</p>
                    </div> -->
                </div>
                <!-- End Homec Image Group -->
            </div>
            <div class="col-lg-5 col-12 homec-about__column--two mg-top-30">
                <div class="homec-about-content">
                    <!-- Section Title -->
                    <div class="homec-section__head">
                        <div class="homec-section__shape">
                            <!-- <span class="homec-section__badge homec-section__badge--shape" data-aos="fade-down" data-aos-delay="300">About Prroperties</span> -->
                        </div>
                        <h2 class="homec-section__title" data-aos="fade-in" data-aos-delay="400">Live, Work, Thrive – All in One Place</h2>
                    </div>
                    <div class="homec-about-content__inner mg-top-20" data-aos="fade-in" data-aos-delay="500">
                        <p class="homec-about-content__text">We specialize in providing tailored solutions for both short-term and long-term rentals, as well as commercial office spaces for rent and <a href="/explore">corporate rentals</a>. With our expertise and commitment to excellence, we ensure that your property is managed and maintained to the highest standards, so you can enjoy peace of mind and maximize your returns.</p>
                        <!-- <div class="homec-focus-content homec-border mg-top-20"> -->
                            <!-- <p>Over 20 years’ experience providing top quality house Booking in to the rant and sell for your Amazing Dream & Make you Happy</p> -->
                        <!-- </div> -->
                        <!-- Homec List -->
                        <!-- <ul class="homec-iconic-list list-none mg-top-30"> -->
                            <!-- <li><i class="fa-solid fa-check"></i>Suspe ndisse suscipit sagittis leo.</li> -->
                            <!-- <li><i class="fa-solid fa-check"></i>Entum estibulum dignissim as posuere.</li> -->
                        <!-- </ul> -->
                        <!-- Homec Button -->
                        <div class="mg-top-40">
                            <a href="/properties" class="homec-btn"><span>Search properties</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Area -->

<!-- Properties Listing -->
<section class="homec-properties homec-bg-cover homec-bg-third-color pd-top-90 pd-btm-120 homec-featured-property-bg d-none">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="homec-flex homec-flex__section mg-btm-60">
                    <!-- Section TItle -->
                    <div class="homec-section__head m-0 mg-top-30">
                        <span class="homec-section__badge homec-primary-color homec-section__badge--small m-0"  data-aos="fade-in" data-aos-delay="300">View All Our Flexible spaces</span>
                        <h2 class="homec-section__title"  data-aos="fade-in" data-aos-delay="400">Diverse long & short term<br/> rental opportunities!</h2>
                    </div>
                    <!-- Button -->
                    <div class="homec-section__btn mg-top-30" data-aos="fade-right" data-aos-delay="500">
                        <a href="/properties" class="homec-btn"><span>See Featured  Properties</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="swiper mySwiper homec-slider-property loading">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <!-- Single property-->
                            <a class="linkss" href="/properties"> 
                                <div class="homec-property">
                                    <!-- Property Head-->
                                    <div class="homec-property__head">
                                        <img loading="lazy" src="{{ asset('frontend/assets/img/flexible/onee.jpeg') }}" alt="thumbnail_image">
                                        <!-- Top Sticky -->
                                        <div class="homec-property__hsticky">
                                            <a href="javascript:;" class="" data-property-id="">
                                            </a>
                                            <span class="homec-property__salebadge">Residential</span>
                                        </div>
                                        <!-- End Top Sticky -->
                                    </div>
                                    <!-- Property Body-->
                                    <div class="homec-property__body">
                                        <div class="homec-property__topbar">
                                            <div class="homec-property__price">$795.00<span>/Night</span></div>
                                        </div>
                                        <!-- <h3 class="homec-property__title"><a href="/properties">5551 W 6th St APT 3428</a></h3> -->
                                        <div class="homec-property__text">
                                        <a href="/properties"> <img src="{{ asset('frontend/assets/img/location-icon.svg') }}" alt="address"> </a><p>Los Angeles, CA 90036, USA</p>
                                        </div>
                                        <!-- Property List-->
                                        <ul class="homec-property__list homec-border-top list-none">
                                            <li><img src="{{ asset('frontend/assets/img/icon/room-icon2.svg') }}" alt="total_bedroom">1 Bed</li>
                                            <li><img src="{{ asset('frontend/assets/img/icon/bath-icon2.svg') }}" alt="total_bathroom">1 Bath</li>
                                            <li><img src="{{ asset('frontend/assets/img/icon/size-icon2.svg') }}" alt="total_area">840 sqft</li>
                                        </ul>
                                    </div>
                                </div>
                            </a>
                            <!-- End Single property-->
                        </div>
                    
                        <div class="swiper-slide">
                            <a class="linkss" href="/properties">
                                <!-- Single property-->
                                <div class="homec-property">
                                    <!-- Property Head-->
                                    <div class="homec-property__head">
                                        <img src="{{ asset('frontend/assets/img/flexible/two.webp') }}" alt="thumbnail_image">
                                        <!-- Top Sticky -->
                                        <div class="homec-property__hsticky">
                                            <a href="javascript:;" class="" data-property-id="">
                                            </a>
                                            <span class="homec-property__salebadge">Residential</span>

                                        </div>
                                        <!-- End Top Sticky -->
                                    </div>
                                    <!-- Property Body-->
                                    <div class="homec-property__body">
                                        <div class="homec-property__topbar">
                                            <div class="homec-property__price">$575.00<span>/Night</span></div>
                                        </div>
                                        <!-- <h3 class="homec-property__title"><a href="/properties">348 Hauser Blvd #403</a></h3> -->
                                        <div class="homec-property__text">
                                        <a href="/properties"> <img src="{{ asset('frontend/assets/img/location-icon.svg') }}" alt="address"></a><p>Los Angeles, CA 90036, USA</p>
                                        </div>
                                        <!-- Property List-->
                                        <ul class="homec-property__list homec-border-top list-none">
                                            <li><img src="{{ asset('frontend/assets/img/icon/room-icon2.svg') }}" alt="total_bedroom">2 Bed</li>
                                            <li><img src="{{ asset('frontend/assets/img/icon/bath-icon2.svg') }}" alt="total_bathroom">2 Bath</li>
                                            <li><img src="{{ asset('frontend/assets/img/icon/size-icon2.svg') }}" alt="total_area">1,146 sqft</li>
                                        </ul>
                                    </div>
                                </div>
                            </a>
                            <!-- End Single property-->
                        </div>
                        
                        <div class="swiper-slide">
                            <!-- Single property-->
                            <a class="linkss" href="/properties">
                                <div class="homec-property">
                                    <!-- Property Head-->
                                    <div class="homec-property__head">
                                        <img src="{{ asset('frontend/assets/img/flexible/three.webp') }}" alt="thumbnail_image">
                                        <!-- Top Sticky -->
                                        <div class="homec-property__hsticky">
                                            <a href="javascript:;" class="" data-property-id="">
                                            </a>
                                            <span class="homec-property__salebadge">Vacation Rental</span>

                                        </div>
                                        <!-- End Top Sticky -->
                                    </div>
                                    <!-- Property Body-->
                                    <div class="homec-property__body">
                                        <div class="homec-property__topbar">
                                            <div class="homec-property__price">$495.00<span>/Night</span></div>
                                        </div>
                                        <!-- <h3 class="homec-property__title"><a href="/properties">Fort Lauderdale FL 33312</a></h3> -->
                                        <div class="homec-property__text">
                                        <a href="/properties"> <img src="{{ asset('frontend/assets/img/location-icon.svg') }}" alt="address"> </a><p>Fort Lauderdale FL 33312</p>
                                        </div>
                                        <!-- Property List-->
                                        <ul class="homec-property__list homec-border-top list-none">
                                            <li><img src="{{ asset('frontend/assets/img/icon/room-icon2.svg') }}" alt="total_bedroom">4 Bed</li>
                                            <li><img src="{{ asset('frontend/assets/img/icon/bath-icon2.svg') }}" alt="total_bathroom">2 Bath</li>
                                            <li><img src="{{ asset('frontend/assets/img/icon/size-icon2.svg') }}" alt="total_area">543 sqft</li>
                                        </ul>
                                    </div>
                                </div>
                            </a>
                            <!-- End Single property-->
                        </div>
                    </div>
                </div>
                <!-- Slider Pagination -->
                <div class="swiper-pagination swiper-pagination__property"></div>
            </div>
        </div>
    </div>
</section>
@include('pro-feature-listing')
<!-- End Properties Listing -->




<!-- new section  -->

<!--  -->


<!-- Property Listing -->
<section class="find-property pd-top-120 pd-btm-120 d-none">
    <div class="container homec-listing__container">
        <div class="row">
            <div class="col-12">
                <!-- Section TItle -->
                <div class="homec-section__head text-center mg-btm-60">
                    <span class="homec-section__badge homec-primary-color homec-section__badge--small m-0"  data-aos="fade-in" data-aos-delay="300">Find your space</span>
                    <h2 class="homec-section__title "  data-aos="fade-in" data-aos-delay="400">Explore a neighborhood</h2>
                </div>
                <!-- Homec Search -->
                <div class="homec-search-form mg-top-10" data-aos="fade-up" data-aos-delay="500">
                    
                    <form  id="property-search-form" class="homec-search-form__form homec-search-form__form--city" action="/properties" method="GET">
                        <div class="homec-search-form__group w-100">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0_275_829" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                <path d="M0 2.9405e-05H24V24H0V2.9405e-05Z" fill="white"/>
                                </mask>
                                <g mask="url(#mask0_275_829)">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 24C12.2351 24 12.4546 23.8825 12.585 23.6869C13.1198 22.8847 13.7306 22.0293 14.3771 21.124C14.5713 20.852 14.7687 20.5756 14.9682 20.2947C15.8268 19.086 16.717 17.8062 17.5208 16.4992C19.1133 13.9099 20.4375 11.1064 20.4375 8.43752C20.4375 3.78447 16.653 2.9405e-05 12 2.9405e-05C7.34694 2.9405e-05 3.5625 3.78447 3.5625 8.43752C3.5625 11.1064 4.88667 13.9099 6.47921 16.4992C7.28303 17.8062 8.17317 19.086 9.03176 20.2947C9.23131 20.5756 9.42873 20.852 9.62293 21.124C10.2694 22.0293 10.8802 22.8847 11.415 23.6869C11.5454 23.8825 11.7649 24 12 24ZM7.67704 15.7625C6.10551 13.2073 4.96875 10.6905 4.96875 8.43752C4.96875 4.56111 8.12359 1.40628 12 1.40628C15.8764 1.40628 19.0312 4.56111 19.0312 8.43752C19.0312 10.6905 17.8945 13.2073 16.3229 15.7625C15.5447 17.0278 14.6771 18.2763 13.8218 19.4803C13.6277 19.7535 13.4339 20.0249 13.2418 20.2939C12.8133 20.894 12.3936 21.4818 12 22.0486C11.6064 21.4818 11.1867 20.894 10.7582 20.2939C10.5661 20.0249 10.3723 19.7534 10.1782 19.4803C9.32291 18.2763 8.45524 17.0278 7.67704 15.7625Z" fill="#7E8BA0"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.78125 8.4375C7.78125 10.7642 9.67325 12.6562 12 12.6562C14.3267 12.6562 16.2187 10.7642 16.2187 8.4375C16.2187 6.11076 14.3267 4.21876 12 4.21876C9.67325 4.21876 7.78125 6.11076 7.78125 8.4375ZM12 11.25C10.4499 11.25 9.1875 9.9876 9.1875 8.4375C9.1875 6.88741 10.4499 5.62501 12 5.62501C13.5501 5.62501 14.8125 6.88741 14.8125 8.4375C14.8125 9.9876 13.5501 11.25 12 11.25Z" fill="#7E8BA0"/>
                                </g>
                            </svg>
                            <!-- Form Group -->
<!--@php-->
<!--$states = DB::table('page')->distinct()->pluck('state');-->
<!--@endphp-->
@php
$states = DB::table('listings')->distinct()->pluck('state');
@endphp
<input type="hidden" name="country" value="united states">
 <div class="form-group">
        <select name="state" id="state-select" class="select2">
            <option value="">Select State</option>
            @foreach($states as $state)
                <option value="{{ $state }}" {{ $state == 'Select State' ? 'selected' : '' }}>
                    {{ Str::ucfirst($state) }}
                </option>
            @endforeach
        </select>
    </div>



                        <button type="submit" class="homec-btn">
                            <span class="homec-btn__inside">
                                <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.45185 16.8948C10.3289 16.8949 12.1522 16.2686 13.633 15.1152L19.2197 20.7019C19.637 21.105 20.3021 21.0934 20.7051 20.6761C21.0983 20.269 21.0983 19.6236 20.7051 19.2165L15.1184 13.6298C17.9805 9.9456 17.314 4.63881 13.6298 1.77676C9.94555 -1.08529 4.63881 -0.418815 1.77676 3.26541C-1.08529 6.94964 -0.418815 12.2564 3.26541 15.1185C4.74865 16.2707 6.57361 16.8958 8.45185 16.8948ZM3.96301 3.95978C6.44215 1.48059 10.4616 1.48054 12.9408 3.95969C15.42 6.43883 15.4201 10.4583 12.9409 12.9375C10.4618 15.4167 6.44229 15.4167 3.9631 12.9376C3.96305 12.9376 3.96305 12.9376 3.96301 12.9375C1.48386 10.4764 1.46926 6.47159 3.93034 3.99245C3.94121 3.98153 3.95209 3.97065 3.96301 3.95978Z"></path>
                                </svg>
                             <span>Search</span>
                            </span>
                        </button>
                    </form>
                </div>
                <!-- End Homec Search -->
            </div>
        </div>

        <div class="row">
                
            <div class="col-12" data-aos="fade-up" data-aos-delay="600">
                <!-- Homec Listing -->
                <div class="homec-listing mg-top-40">
                    <!-- Homec Single Listing -->
                    <div class="homec-listing__single">
                        <div class="homec-listing__inner">
                            <a href="#">
                                <img loading="lazy" class="homec-listing__single__big" src="{{ asset('frontend/assets/img/location/1.webp') }}"  alt="home_location">
                                <div class="homec-overlay homec-listing__overlay"></div>
                                <h4 class="homec-listing__title"><span></span>Los Angeles</h4>
                            </a>
                        </div>
                    </div>
                    <!-- End Homec Single Listing -->
                                                                                                                                                    <!-- Homec Single Listing -->
                    <div class="homec-listing__single">
                        <div class="homec-listing__inner">
                            <a href="/properties">
                                <img loading="lazy" class="homec-listing__single__small" src="{{ asset('frontend/assets/img/location/city-02.webp') }}"  alt="home_location">
                                <div class="homec-overlay homec-listing__overlay"></div>
                                <h4 class="homec-listing__title"><span></span>San Francisco</h4>
                            </a>
                        </div>
                        <!-- End Homec Single Listing -->
                        
                        <!-- Homec Single Listing -->
                        <div class="homec-listing__inner">
                            <a href="/properties">
                                <img loading="lazy" class="homec-listing__single__medium" src="{{ asset('frontend/assets/img/location/city-03.webp') }}"  alt="home_location">
                                <div class="homec-overlay homec-listing__overlay"></div>
                                <h4 class="homec-listing__title"><span></span>San Diego</h4>
                            </a>
                        </div>
                    </div>
                    <!-- End Homec Single Listing -->
                    
                    <!-- Homec Single Listing -->
                    <div class="homec-listing__single">
                        <div class="homec-listing__inner">
                            <a href="/properties">
                                <img loading="lazy" class="homec-listing__single__big" src="{{ asset('frontend/assets/img/location/city-04.webp') }}"  alt="home_location">
                                <div class="homec-overlay homec-listing__overlay"></div>
                                <h4 class="homec-listing__title"><span></span>Sacramento</h4>
                            </a>
                        </div>
                    </div>
                    <!-- End Homec Single Listing -->
                    
                    <!-- Homec Single Listing -->
                    <div class="homec-listing__single">
                        <div class="homec-listing__inner">
                            <a href="/properties">
                                <img loading="lazy" class="homec-listing__single__medium" src="{{ asset('frontend/assets/img/location/city-05.webp') }}"  alt="home_location">
                                <div class="homec-overlay homec-listing__overlay"></div>
                                <h4 class="homec-listing__title"><span></span>Miami</h4>
                            </a>
                        </div>
                        <!-- End Homec Single Listing -->
                        
                        <!-- Homec Single Listing -->
                        <div class="homec-listing__inner">
                            <a href="/properties">
                                <img loading="lazy" class="homec-listing__single__small" src="{{ asset('frontend/assets/img/location/3.webp') }}"  alt="home_location">
                                <div class="homec-overlay homec-listing__overlay"></div>
                                <h4 class="homec-listing__title"><span></span>Orlando</h4>
                            </a>
                        </div>
                    </div>
                    <!-- End Homec Single Listing -->
                    
                    <!-- Homec Single Listing -->
                    <div class="homec-listing__single homec-listing__single--last">
                        <div class="homec-listing__inner">
                            <a href="/properties">
                                <img loading="lazy" class="homec-listing__single__small" src="{{ asset('frontend/assets/img/location/city-07.webp') }}"  alt="home_location">
                                <div class="homec-overlay homec-listing__overlay"></div>
                                <h4 class="homec-listing__title"><span></span>Washington</h4>
                            </a>
                        </div>
                        <!-- End Homec Single Listing -->
                        
                        <!-- Homec Single Listing -->
                        <div class="homec-listing__inner">
                            <a href="/properties">
                                <img loading="lazy" class="homec-listing__single__medium" src="{{ asset('frontend/assets/img/location/2.webp') }}"  alt="home_location">
                                <div class="homec-overlay homec-listing__overlay"></div>
                                <h4 class="homec-listing__title"><span></span>Tampa</h4>
                            </a>
                        </div>
                    </div>
                    <!-- End Homec Single Listing -->

                                                        
                </div>
                <!-- End Homec Listing -->
            </div>
        </div>

        <div class="row">
            <div class="col-12  d-flex justify-content-center mg-top-40" data-aos="fade-up" data-aos-delay="700">
                <!-- Section TItle -->
                <a href="/properties" class="homec-btn"><span>Search Property</span></a>
            </div>
        </div>
    </div>
</section>
<!-- End Property Listing -->

<!-- FunFacts -->
<section class="homec-funfacts pd-btm-100">
    <img loading="lazy" src="{{ asset('frontend/assets/img/counter-bg.webp') }}" alt="Stylish bedroom design for long-term rentals">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="homec-funfact homec-border homec-funfact--bg">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-12">
                            <div class="homec-funfact__inner">
                                <div class="homec-funfact__content"  data-aos="fade-up" data-aos-delay="300">
                                    <h2 class="homec-section__title mg-btm-10">Why choose Prroperties?</h2>
                                    <p>Our benefits</p>
                                </div>
                                <!-- Homec List -->
                                <ul class="homec-iconic-list list-none mg-top-30"  data-aos="fade-up" data-aos-delay="400">
                                    <li><i class="fa-solid fa-check"></i>New properties added daily</li>
                                    <li><i class="fa-solid fa-check"></i>Each property undergoes inspection.</li>
                                    <li><i class="fa-solid fa-check"></i>On-Demand maintenance pros</li>
                                    <li><i class="fa-solid fa-check"></i>Exclusive modern amenities</li>
                                    <li><i class="fa-solid fa-check"></i>Round-the-clock tenant support</li>
                                </ul>
                                <!-- Homec Button -->
                                <div class="homec-btn__main mg-top-40"  data-aos="fade-up" data-aos-delay="500">
                                    <a href="/contact" class="homec-btn"><span>Get started</span></a>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-7 col-12">
                            <div class="homec-funfacts">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12"  data-aos="fade-in" data-aos-delay="400">
                                        <!-- FunFacts Single -->
                                        <div class="homec-funfact__single homec-border">
                                            <div class="homec-funfact__icon">
                                                <img src="{{ asset('frontend/assets/img/counter/counter-1.svg') }}" alt="icon">
                                            </div>
                                            <h3 class="homec-funfact__number"><span class="counter">100</span><sup class="plus-funfact">+</sup></h3>
                                            <p class="homec-funfact__text">Daily bookings</p>
                                        </div>
                                        <!-- End FunFacts Single -->
                                    </div>
                                    
                                    <div class="col-lg-6 col-md-6 col-12"  data-aos="fade-in" data-aos-delay="400">
                                        <!-- FunFacts Single -->
                                        <div class="homec-funfact__single homec-border">
                                            <div class="homec-funfact__icon">
                                                <img src="{{ asset('frontend/assets/img/counter/counter-2.svg') }}" alt="icon">
                                            </div>
                                            <h3 class="homec-funfact__number"><span class="counter">1000</span><sup class="plus-funfact">+</sup></h3>
                                            <p class="homec-funfact__text">Trusted pros</p>
                                        </div>
                                        <!-- End FunFacts Single -->
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12"  data-aos="fade-in" data-aos-delay="400">
                                        <!-- FunFacts Single -->
                                        <div class="homec-funfact__single homec-border">
                                            <div class="homec-funfact__icon">
                                                <img width="40" src="{{ asset('frontend/assets/img/counter/support.svg') }}" alt="icon">
                                            </div>
                                            <h3 class="homec-funfact__number"><span class="">24/7</span></h3>
                                            <p class="homec-funfact__text">Support</p>
                                        </div>
                                        <!-- End FunFacts Single -->
                                    </div>
                                        
                                    <div class="col-lg-6 col-md-6 col-12"  data-aos="fade-in" data-aos-delay="400">
                                        <!-- FunFacts Single -->
                                        <div class="homec-funfact__single homec-border">
                                            <div class="homec-funfact__icon">
                                                <img src="{{ asset('frontend/assets/img/counter/counter-4.svg') }}" alt="icon">
                                            </div>
                                            <h3 class="homec-funfact__number"><span class="counter">20</span><sup class="plus-funfact">+</sup></h3>
                                            <p class="homec-funfact__text">Years of experience</p>
                                        </div>
                                        <!-- End FunFacts Single -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End FunFacts Area -->


<!-- Testimonials & Clients -->
<section class="homec-bg-third-color pd-top-120 pd-btm-120 homec-bg-cover homec-bg-testimonial">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Section TItle -->
                <div class="homec-section__head text-center mg-btm-60">
                    <span class="homec-section__badge homec-primary-color homec-section__badge--small m-0"  data-aos="fade-in" data-aos-delay="300">Our shoutout</span>
                    <h2 class="homec-section__title"  data-aos="fade-in" data-aos-delay="400">What Our Customers Say</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <!-- Testimonial Slider -->
                <div class="swiper mySwiper homec-slider-testimonial loading">
                    <div class="swiper-wrapper">
                        
                        <div class="swiper-slide">
                            <!-- Testimonial Single -->
                            <div class="homec-testimonial homec-border">
                                <!-- Author Rating -->
                                <ul class="homec-rating list-none mg-btm-15">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                                <!-- Testimonial Text -->
                                <p class="homec-testimonial__text">Amazing stay with an easy booking process. The beautiful pool house offers an exceptional atmosphere, making it a perfect getaway. Definitely planning to book again for another memorable experience.”</p>
                                <div class="homec-testimonial__bottom mg-top-10">
                                    <!-- Testimonial Author -->
                                    <div class="homec-testimonial__author">
                                        <img src="{{ asset('frontend/assets/img/testimonials/david-richard.jpg') }}"  alt="image">
                                        <div class="homec-testimonial__author--info">
                                            <h5 class="homec-testimonial__author--title">David Richard</h5>
                                            <p class="homec-testimonial__author--position">Tenant</p>
                                        </div>
                                    </div>
                                    <!-- Testimonial Quoute Icon -->
                                    <div class="homec-testimonial__quote">
                                        <svg width="153" height="108" viewBox="0 0 153 108" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g opacity="0.1">
                                            <path d="M31.9633 67.8044C32.2714 71.1357 32.0357 80.1918 23.3603 92.7847C22.704 93.735 22.8231 95.0167 23.638 95.8314C27.175 99.3684 29.3649 101.6 30.9008 103.162C32.9205 105.221 33.8425 106.16 35.1921 107.383C36.0931 108.193 37.4565 108.207 38.3671 107.413C53.4884 94.2555 70.2837 67.0666 67.8534 33.7562C66.4293 14.1969 52.1623 2.42806e-05 33.9312 2.58744e-05C15.2218 2.751e-05 2.24064e-05 15.2194 2.40421e-05 33.9291C2.562e-05 51.978 14.1663 66.7795 31.9633 67.8044ZM33.9312 4.78132C49.5874 4.78132 61.8464 17.1128 63.0859 34.1017C63.0859 34.1017 63.0859 34.1017 63.0859 34.1041C65.8199 71.5677 43.55 95.9014 36.8215 102.345C36.1655 101.698 35.4161 100.937 34.3118 99.8121C32.9812 98.458 31.16 96.6043 28.4053 93.84C38.9368 77.6144 36.9499 66.0535 36.0792 64.3958C35.6659 63.609 34.8184 63.079 33.9312 63.079C17.8575 63.079 4.78133 50.0029 4.78132 33.9291C4.78132 17.8575 17.8575 4.78132 33.9312 4.78132Z"/>
                                            <path d="M116.868 67.8043C117.179 71.1264 116.95 80.1755 108.265 92.7847C107.612 93.735 107.728 95.0166 108.543 95.8314C112.073 99.3614 114.261 101.591 115.795 103.153C117.821 105.217 118.746 106.158 120.095 107.383C120.996 108.193 122.36 108.205 123.27 107.416C138.391 94.2578 155.189 67.0735 152.763 33.7562L152.763 33.7538C151.334 14.1969 137.065 -6.23648e-06 118.834 -4.64267e-06C100.125 -3.00702e-06 84.9028 15.2194 84.9028 33.9291C84.9028 51.9801 99.0693 66.784 116.868 67.8043ZM118.834 4.7813C134.488 4.7813 146.754 17.1127 147.996 34.1041L147.996 34.1017C150.723 71.5746 128.453 95.9038 121.725 102.345C121.066 101.698 120.314 100.933 119.208 99.8049C117.879 98.4508 116.061 96.5995 113.31 93.84C123.842 77.612 121.855 66.0534 120.984 64.3981C120.571 63.6114 119.721 63.079 118.834 63.079C102.76 63.079 89.6841 50.0028 89.6841 33.9291C89.6841 17.8574 102.76 4.7813 118.834 4.7813Z"/>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <!-- End Testimonial Single -->
                        </div>

                        <div class="swiper-slide">
                            <!-- Testimonial Single -->
                            <div class="homec-testimonial homec-border">
                                <!-- Author Rating -->
                                <ul class="homec-rating list-none mg-btm-15">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                                <!-- Testimonial Text -->
                                <p class="homec-testimonial__text">Perfect escape in a cozy Fort Lauderdale home, offering stunning beach views for a tranquil retreat. Seamless booking and check-out process. A must-visit for those seeking a peaceful getaway with breathtaking scenery.”</p>
                                <div class="homec-testimonial__bottom mg-top-10">
                                    <!-- Testimonial Author -->
                                    <div class="homec-testimonial__author">
                                        <img src="{{ asset('frontend/assets/img/testimonials/david-simmons.jpg') }}"  alt="image">
                                        <div class="homec-testimonial__author--info">
                                            <h5 class="homec-testimonial__author--title">John Simmons</h5>
                                            <p class="homec-testimonial__author--position">Landlord</p>
                                        </div>
                                    </div>
                                    <!-- Testimonial Quoute Icon -->
                                    <div class="homec-testimonial__quote">
                                        <svg width="153" height="108" viewBox="0 0 153 108" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g opacity="0.1">
                                            <path d="M31.9633 67.8044C32.2714 71.1357 32.0357 80.1918 23.3603 92.7847C22.704 93.735 22.8231 95.0167 23.638 95.8314C27.175 99.3684 29.3649 101.6 30.9008 103.162C32.9205 105.221 33.8425 106.16 35.1921 107.383C36.0931 108.193 37.4565 108.207 38.3671 107.413C53.4884 94.2555 70.2837 67.0666 67.8534 33.7562C66.4293 14.1969 52.1623 2.42806e-05 33.9312 2.58744e-05C15.2218 2.751e-05 2.24064e-05 15.2194 2.40421e-05 33.9291C2.562e-05 51.978 14.1663 66.7795 31.9633 67.8044ZM33.9312 4.78132C49.5874 4.78132 61.8464 17.1128 63.0859 34.1017C63.0859 34.1017 63.0859 34.1017 63.0859 34.1041C65.8199 71.5677 43.55 95.9014 36.8215 102.345C36.1655 101.698 35.4161 100.937 34.3118 99.8121C32.9812 98.458 31.16 96.6043 28.4053 93.84C38.9368 77.6144 36.9499 66.0535 36.0792 64.3958C35.6659 63.609 34.8184 63.079 33.9312 63.079C17.8575 63.079 4.78133 50.0029 4.78132 33.9291C4.78132 17.8575 17.8575 4.78132 33.9312 4.78132Z"/>
                                            <path d="M116.868 67.8043C117.179 71.1264 116.95 80.1755 108.265 92.7847C107.612 93.735 107.728 95.0166 108.543 95.8314C112.073 99.3614 114.261 101.591 115.795 103.153C117.821 105.217 118.746 106.158 120.095 107.383C120.996 108.193 122.36 108.205 123.27 107.416C138.391 94.2578 155.189 67.0735 152.763 33.7562L152.763 33.7538C151.334 14.1969 137.065 -6.23648e-06 118.834 -4.64267e-06C100.125 -3.00702e-06 84.9028 15.2194 84.9028 33.9291C84.9028 51.9801 99.0693 66.784 116.868 67.8043ZM118.834 4.7813C134.488 4.7813 146.754 17.1127 147.996 34.1041L147.996 34.1017C150.723 71.5746 128.453 95.9038 121.725 102.345C121.066 101.698 120.314 100.933 119.208 99.8049C117.879 98.4508 116.061 96.5995 113.31 93.84C123.842 77.612 121.855 66.0534 120.984 64.3981C120.571 63.6114 119.721 63.079 118.834 63.079C102.76 63.079 89.6841 50.0028 89.6841 33.9291C89.6841 17.8574 102.76 4.7813 118.834 4.7813Z"/>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <!-- End Testimonial Single -->
                        </div>

                    </div>
                </div>
                <!-- End Testimonial Slider -->
            </div>
        </div>

        <div class="row mg-top-50 d-none">
            <div class="col-12">
                <h4 class="homec-medium-title text-center mg-btm-30">Trusted by big brands</h4>
                <!-- Clients Logo Slider -->
                <div class="swiper mySwiper homec-slider-client loading">
                    <div class="swiper-wrapper">
                        
                        <div class="swiper-slide">
                            <div class="homec-cl-logo">
                                <a href="#"><img src="{{ asset('frontend/assets/img/partner/our-partner1.png') }}"  alt="Client Logo"></a>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="homec-cl-logo">
                                <a href="#"><img src="{{ asset('frontend/assets/img/partner/our-partner2.png') }}"  alt="Client Logo"></a>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="homec-cl-logo">
                                <a href="#"><img src="{{ asset('frontend/assets/img/partner/our-partner3.png') }}"  alt="Client Logo"></a>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="homec-cl-logo">
                                <a href="#"><img src="{{ asset('frontend/assets/img/partner/our-partner4.png') }}"  alt="Client Logo"></a>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="homec-cl-logo">
                                <a href="#"><img src="{{ asset('frontend/assets/img/partner/our-partner1.png') }}"  alt="Client Logo"></a>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="homec-cl-logo">
                                <a href="#"><img src="{{ asset('frontend/assets/img/partner/our-partner2.png') }}"  alt="Client Logo"></a>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- End Clients Logo Slider -->
            </div>
        </div>
    </div>
</section>
<!-- End Testimonials & Clients -->


<!-- Blog Area -->
<section id="blog" class="blog-area homec-bg-cover pd-top-50 pd-btm-50 homec-blog-bg">
    <div class="blog-bg-pattern">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                    <div class="homec-section__head text-center mg-btm-30">
                        <span class="homec-section__badge homec-primary-color homec-section__badge--small m-0" data-aos="fade-in" data-aos-delay="300">Stay in the know</span>
                        <h2 class="homec-section__title" data-aos="fade-in" data-aos-delay="400">Our latest news</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                    <!-- Single Blog -->
                    <div class="homec-blog">
                        <div class="homec-blog__head">
                            <div class="homec-overlay homec-blog__overlay"></div>
                            <a href="#"><img loading="lazy" src="{{ asset('frontend/assets/img/blog/listing/blog-1.webp') }}" alt="#"></a>
                            <!-- Blog Content -->
                            <div class="homec-blog__content">
                                <ul class="homec-blog__meta list-none">
                                    <li>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.8182 12.3637H8.36367V13.8182H9.8182V12.3637Z" />
                                            <path d="M9.8182 9.81816H8.36367V11.2727H9.8182V9.81816Z" />
                                            <path d="M7.63637 7.27266H6.18184V8.72719H7.63637V7.27266Z" />
                                            <path d="M7.63637 9.81816H6.18184V11.2727H7.63637V9.81816Z" />
                                            <path d="M11.9999 9.81816H10.5454V11.2727H11.9999V9.81816Z" />
                                            <path d="M14.1818 9.81816H12.7272V11.2727H14.1818V9.81816Z" />
                                            <path d="M14.1818 7.27266H12.7272V8.72719H14.1818V7.27266Z" />
                                            <path d="M11.9999 7.27266H10.5454V8.72719H11.9999V7.27266Z" />
                                            <path d="M9.8182 7.27266H8.36367V8.72719H9.8182V7.27266Z" />
                                            <path d="M3.2727 9.81816H1.81816V11.2727H3.2727V9.81816Z" />
                                            <path d="M3.2727 12.3637H1.81816V13.8182H3.2727V12.3637Z" />
                                            <path d="M14.5455 1.45453H13.0909V0.363625C13.0909 0.162812 12.9281 0 12.7273 0C12.5264 0 12.3637 0.162812 12.3637 0.363625V1.45453H3.63637V0.363625C3.63637 0.162812 3.47356 0 3.27272 0C3.07187 0 2.90909 0.162812 2.90909 0.363625V1.45453H1.45453C0.651219 1.45453 0 2.10578 0 2.90909V14.5455C0 15.3488 0.651219 16 1.45453 16H14.5454C15.3488 16 16 15.3488 16 14.5455V2.90909C16 2.10578 15.3488 1.45453 14.5455 1.45453ZM15.2727 14.5455C15.2727 14.9471 14.9471 15.2727 14.5454 15.2727H1.45453C1.05287 15.2727 0.72725 14.9471 0.72725 14.5455V5.81819H15.2727V14.5455ZM15.2727 5.09091H0.727281V2.90909C0.727281 2.50744 1.05291 2.18181 1.45456 2.18181H2.90909V3.27272C2.90909 3.47356 3.07191 3.63634 3.27272 3.63634C3.47356 3.63634 3.63634 3.47353 3.63634 3.27272V2.18181H12.3636V3.27272C12.3636 3.47356 12.5264 3.63634 12.7273 3.63634C12.9281 3.63634 13.0909 3.47353 13.0909 3.27272V2.18181H14.5454C14.9471 2.18181 15.2727 2.50744 15.2727 2.90909L15.2727 5.09091Z" />
                                            <path d="M3.2727 7.27266H1.81816V8.72719H3.2727V7.27266Z" />
                                            <path d="M7.63637 12.3637H6.18184V13.8182H7.63637V12.3637Z" />
                                            <path d="M5.45453 12.3637H4V13.8182H5.45453V12.3637Z" />
                                            <path d="M5.45453 7.27266H4V8.72719H5.45453V7.27266Z" />
                                            <path d="M5.45453 9.81816H4V11.2727H5.45453V9.81816Z" />
                                        </svg>
                                        May 07, 2023
                                    </li>
                                    <li class="active">
                                        <svg width="15" height="17" viewBox="0 0 15 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.60687 8.64356C8.67386 8.64356 9.59767 8.26087 10.3527 7.50584C11.1075 6.75093 11.4903 5.82724 11.4903 4.76013C11.4903 3.69339 11.1076 2.76958 10.3526 2.01443C9.59755 1.25964 8.67374 0.876953 7.60687 0.876953C6.53976 0.876953 5.61608 1.25964 4.86117 2.01455C4.10626 2.76946 3.72345 3.69327 3.72345 4.76013C3.72345 5.82724 4.10626 6.75105 4.86117 7.50596C5.61633 8.26075 6.54013 8.64356 7.60687 8.64356ZM5.52936 2.68262C6.10861 2.10336 6.78812 1.82179 7.60687 1.82179C8.42551 1.82179 9.10514 2.10336 9.68451 2.68262C10.2638 3.26199 10.5455 3.94162 10.5455 4.76013C10.5455 5.57889 10.2638 6.25839 9.68451 6.83777C9.10514 7.41715 8.42551 7.69872 7.60687 7.69872C6.78837 7.69872 6.10886 7.41702 5.52936 6.83777C4.94998 6.25852 4.66829 5.57889 4.66829 4.76013C4.66829 3.94162 4.94998 3.26199 5.52936 2.68262Z"/>
                                            <path d="M14.4018 13.275C14.3801 12.9609 14.336 12.6182 14.2712 12.2563C14.2057 11.8917 14.1215 11.547 14.0206 11.232C13.9163 10.9064 13.7747 10.5848 13.5994 10.2767C13.4177 9.95684 13.2042 9.67835 12.9646 9.44918C12.714 9.20944 12.4072 9.01668 12.0525 8.87608C11.6989 8.73622 11.3071 8.66536 10.888 8.66536C10.7235 8.66536 10.5643 8.73289 10.2569 8.93303C10.0677 9.05641 9.84639 9.1991 9.59939 9.35692C9.38818 9.4915 9.10206 9.61758 8.74865 9.73174C8.40386 9.84331 8.05377 9.89989 7.70811 9.89989C7.3627 9.89989 7.01261 9.84331 6.66757 9.73174C6.31453 9.61771 6.02829 9.49162 5.81745 9.35705C5.57278 9.2007 5.35136 9.05801 5.15935 8.93291C4.85219 8.73277 4.69301 8.66524 4.52843 8.66524C4.10921 8.66524 3.71755 8.73622 3.36414 8.8762C3.00962 9.01656 2.70271 9.20931 2.4519 9.4493C2.21227 9.6786 1.99873 9.95697 1.81716 10.2767C1.64212 10.5848 1.50041 10.9062 1.3961 11.2321C1.29536 11.5471 1.21109 11.8917 1.14565 12.2563C1.0807 12.6177 1.03679 12.9605 1.01502 13.2754C0.993613 13.5833 0.982788 13.9037 0.982788 14.2275C0.982788 15.0691 1.25033 15.7505 1.77792 16.253C2.29899 16.7488 2.98834 17.0003 3.8269 17.0003H11.5903C12.4286 17.0003 13.118 16.7488 13.6392 16.253C14.1669 15.7509 14.4344 15.0693 14.4344 14.2274C14.4343 13.9025 14.4233 13.5821 14.4018 13.275ZM12.9877 15.5684C12.6434 15.8961 12.1863 16.0554 11.5902 16.0554H3.8269C3.23067 16.0554 2.77357 15.8961 2.42939 15.5686C2.09172 15.2471 1.92763 14.8084 1.92763 14.2275C1.92763 13.9254 1.93759 13.6271 1.95752 13.3407C1.97695 13.0598 2.01669 12.7511 2.07561 12.4232C2.13379 12.0993 2.20784 11.7954 2.29592 11.5202C2.38043 11.2563 2.49569 10.995 2.63863 10.7434C2.77504 10.5035 2.932 10.2977 3.1052 10.1319C3.26721 9.97677 3.4714 9.84983 3.71201 9.75462C3.93454 9.66654 4.18461 9.61832 4.4561 9.61106C4.48919 9.62865 4.54811 9.66223 4.64356 9.72448C4.8378 9.85106 5.06168 9.99547 5.30917 10.1535C5.58816 10.3314 5.94759 10.4921 6.37702 10.6307C6.81604 10.7726 7.2638 10.8447 7.70824 10.8447C8.15267 10.8447 8.60055 10.7726 9.03933 10.6308C9.46912 10.4919 9.82843 10.3314 10.1078 10.1533C10.3611 9.99141 10.5787 9.85118 10.7729 9.72448C10.8684 9.66236 10.9273 9.62865 10.9604 9.61106C11.232 9.61832 11.4821 9.66654 11.7047 9.75462C11.9452 9.84983 12.1494 9.9769 12.3114 10.1319C12.4846 10.2976 12.6416 10.5034 12.778 10.7435C12.921 10.995 13.0364 11.2564 13.1208 11.5201C13.209 11.7956 13.2832 12.0994 13.3412 12.4231C13.4 12.7516 13.4399 13.0604 13.4593 13.3408C13.4794 13.6261 13.4895 13.9245 13.4896 14.2275C13.4895 14.8085 13.3254 15.2471 12.9877 15.5684Z"/>
                                        </svg>
                                        <a href="javascript:;">John Doe</a>
                                    </li>
                                </ul>
                                <h3 class="homec-blog__title"><a href="blog/how-to-choose-the-right-real-estate-agent">How to Choose the Right Real Estate Agent</a></h3>
                                <div class="home-blog__button homec-border-top">
                                    <a href="blog/how-to-choose-the-right-real-estate-agent" class="homec-blog__btn">Read More
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 8L16 12M16 12L12 16M16 12H2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M9 18.2454C10.3696 19.3433 12.1081 20 14 20C18.4183 20 22 16.4183 22 12C22 7.58172 18.4183 4 14 4C12.1081 4 10.3696 4.65672 9 5.75462" stroke-width="1.5" stroke-linecap="round"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog -->
                </div>

                <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                    <!-- Single Blog -->
                    <div class="homec-blog">
                        <div class="homec-blog__head">
                            <div class="homec-overlay homec-blog__overlay"></div>
                            <a href="#"><img loading="lazy" src="{{ asset('frontend/assets/img/blog/listing/blog-2.webp') }}" alt="#"></a>
                            <!-- Blog Content -->
                            <div class="homec-blog__content">
                                <ul class="homec-blog__meta list-none">
                                    <li>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.8182 12.3637H8.36367V13.8182H9.8182V12.3637Z" />
                                            <path d="M9.8182 9.81816H8.36367V11.2727H9.8182V9.81816Z" />
                                            <path d="M7.63637 7.27266H6.18184V8.72719H7.63637V7.27266Z" />
                                            <path d="M7.63637 9.81816H6.18184V11.2727H7.63637V9.81816Z" />
                                            <path d="M11.9999 9.81816H10.5454V11.2727H11.9999V9.81816Z" />
                                            <path d="M14.1818 9.81816H12.7272V11.2727H14.1818V9.81816Z" />
                                            <path d="M14.1818 7.27266H12.7272V8.72719H14.1818V7.27266Z" />
                                            <path d="M11.9999 7.27266H10.5454V8.72719H11.9999V7.27266Z" />
                                            <path d="M9.8182 7.27266H8.36367V8.72719H9.8182V7.27266Z" />
                                            <path d="M3.2727 9.81816H1.81816V11.2727H3.2727V9.81816Z" />
                                            <path d="M3.2727 12.3637H1.81816V13.8182H3.2727V12.3637Z" />
                                            <path d="M14.5455 1.45453H13.0909V0.363625C13.0909 0.162812 12.9281 0 12.7273 0C12.5264 0 12.3637 0.162812 12.3637 0.363625V1.45453H3.63637V0.363625C3.63637 0.162812 3.47356 0 3.27272 0C3.07187 0 2.90909 0.162812 2.90909 0.363625V1.45453H1.45453C0.651219 1.45453 0 2.10578 0 2.90909V14.5455C0 15.3488 0.651219 16 1.45453 16H14.5454C15.3488 16 16 15.3488 16 14.5455V2.90909C16 2.10578 15.3488 1.45453 14.5455 1.45453ZM15.2727 14.5455C15.2727 14.9471 14.9471 15.2727 14.5454 15.2727H1.45453C1.05287 15.2727 0.72725 14.9471 0.72725 14.5455V5.81819H15.2727V14.5455ZM15.2727 5.09091H0.727281V2.90909C0.727281 2.50744 1.05291 2.18181 1.45456 2.18181H2.90909V3.27272C2.90909 3.47356 3.07191 3.63634 3.27272 3.63634C3.47356 3.63634 3.63634 3.47353 3.63634 3.27272V2.18181H12.3636V3.27272C12.3636 3.47356 12.5264 3.63634 12.7273 3.63634C12.9281 3.63634 13.0909 3.47353 13.0909 3.27272V2.18181H14.5454C14.9471 2.18181 15.2727 2.50744 15.2727 2.90909L15.2727 5.09091Z" />
                                            <path d="M3.2727 7.27266H1.81816V8.72719H3.2727V7.27266Z" />
                                            <path d="M7.63637 12.3637H6.18184V13.8182H7.63637V12.3637Z" />
                                            <path d="M5.45453 12.3637H4V13.8182H5.45453V12.3637Z" />
                                            <path d="M5.45453 7.27266H4V8.72719H5.45453V7.27266Z" />
                                            <path d="M5.45453 9.81816H4V11.2727H5.45453V9.81816Z" />
                                        </svg>
                                        May 07, 2023
                                    </li>
                                    <li class="active">
                                        <svg width="15" height="17" viewBox="0 0 15 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.60687 8.64356C8.67386 8.64356 9.59767 8.26087 10.3527 7.50584C11.1075 6.75093 11.4903 5.82724 11.4903 4.76013C11.4903 3.69339 11.1076 2.76958 10.3526 2.01443C9.59755 1.25964 8.67374 0.876953 7.60687 0.876953C6.53976 0.876953 5.61608 1.25964 4.86117 2.01455C4.10626 2.76946 3.72345 3.69327 3.72345 4.76013C3.72345 5.82724 4.10626 6.75105 4.86117 7.50596C5.61633 8.26075 6.54013 8.64356 7.60687 8.64356ZM5.52936 2.68262C6.10861 2.10336 6.78812 1.82179 7.60687 1.82179C8.42551 1.82179 9.10514 2.10336 9.68451 2.68262C10.2638 3.26199 10.5455 3.94162 10.5455 4.76013C10.5455 5.57889 10.2638 6.25839 9.68451 6.83777C9.10514 7.41715 8.42551 7.69872 7.60687 7.69872C6.78837 7.69872 6.10886 7.41702 5.52936 6.83777C4.94998 6.25852 4.66829 5.57889 4.66829 4.76013C4.66829 3.94162 4.94998 3.26199 5.52936 2.68262Z"/>
                                            <path d="M14.4018 13.275C14.3801 12.9609 14.336 12.6182 14.2712 12.2563C14.2057 11.8917 14.1215 11.547 14.0206 11.232C13.9163 10.9064 13.7747 10.5848 13.5994 10.2767C13.4177 9.95684 13.2042 9.67835 12.9646 9.44918C12.714 9.20944 12.4072 9.01668 12.0525 8.87608C11.6989 8.73622 11.3071 8.66536 10.888 8.66536C10.7235 8.66536 10.5643 8.73289 10.2569 8.93303C10.0677 9.05641 9.84639 9.1991 9.59939 9.35692C9.38818 9.4915 9.10206 9.61758 8.74865 9.73174C8.40386 9.84331 8.05377 9.89989 7.70811 9.89989C7.3627 9.89989 7.01261 9.84331 6.66757 9.73174C6.31453 9.61771 6.02829 9.49162 5.81745 9.35705C5.57278 9.2007 5.35136 9.05801 5.15935 8.93291C4.85219 8.73277 4.69301 8.66524 4.52843 8.66524C4.10921 8.66524 3.71755 8.73622 3.36414 8.8762C3.00962 9.01656 2.70271 9.20931 2.4519 9.4493C2.21227 9.6786 1.99873 9.95697 1.81716 10.2767C1.64212 10.5848 1.50041 10.9062 1.3961 11.2321C1.29536 11.5471 1.21109 11.8917 1.14565 12.2563C1.0807 12.6177 1.03679 12.9605 1.01502 13.2754C0.993613 13.5833 0.982788 13.9037 0.982788 14.2275C0.982788 15.0691 1.25033 15.7505 1.77792 16.253C2.29899 16.7488 2.98834 17.0003 3.8269 17.0003H11.5903C12.4286 17.0003 13.118 16.7488 13.6392 16.253C14.1669 15.7509 14.4344 15.0693 14.4344 14.2274C14.4343 13.9025 14.4233 13.5821 14.4018 13.275ZM12.9877 15.5684C12.6434 15.8961 12.1863 16.0554 11.5902 16.0554H3.8269C3.23067 16.0554 2.77357 15.8961 2.42939 15.5686C2.09172 15.2471 1.92763 14.8084 1.92763 14.2275C1.92763 13.9254 1.93759 13.6271 1.95752 13.3407C1.97695 13.0598 2.01669 12.7511 2.07561 12.4232C2.13379 12.0993 2.20784 11.7954 2.29592 11.5202C2.38043 11.2563 2.49569 10.995 2.63863 10.7434C2.77504 10.5035 2.932 10.2977 3.1052 10.1319C3.26721 9.97677 3.4714 9.84983 3.71201 9.75462C3.93454 9.66654 4.18461 9.61832 4.4561 9.61106C4.48919 9.62865 4.54811 9.66223 4.64356 9.72448C4.8378 9.85106 5.06168 9.99547 5.30917 10.1535C5.58816 10.3314 5.94759 10.4921 6.37702 10.6307C6.81604 10.7726 7.2638 10.8447 7.70824 10.8447C8.15267 10.8447 8.60055 10.7726 9.03933 10.6308C9.46912 10.4919 9.82843 10.3314 10.1078 10.1533C10.3611 9.99141 10.5787 9.85118 10.7729 9.72448C10.8684 9.66236 10.9273 9.62865 10.9604 9.61106C11.232 9.61832 11.4821 9.66654 11.7047 9.75462C11.9452 9.84983 12.1494 9.9769 12.3114 10.1319C12.4846 10.2976 12.6416 10.5034 12.778 10.7435C12.921 10.995 13.0364 11.2564 13.1208 11.5201C13.209 11.7956 13.2832 12.0994 13.3412 12.4231C13.4 12.7516 13.4399 13.0604 13.4593 13.3408C13.4794 13.6261 13.4895 13.9245 13.4896 14.2275C13.4895 14.8085 13.3254 15.2471 12.9877 15.5684Z"/>
                                        </svg>
                                        <a href="javascript:;">John Doe</a>
                                    </li>
                                </ul>
                                <h3 class="homec-blog__title"><a href="blog/Why-Location-Is-so-Important-in-Real-Estate">Why Location Is so Important in Real Estate</a></h3>
                                <div class="home-blog__button homec-border-top">
                                    <a href="blog/Why-Location-Is-so-Important-in-Real-Estate" class="homec-blog__btn">Read More
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 8L16 12M16 12L12 16M16 12H2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M9 18.2454C10.3696 19.3433 12.1081 20 14 20C18.4183 20 22 16.4183 22 12C22 7.58172 18.4183 4 14 4C12.1081 4 10.3696 4.65672 9 5.75462" stroke-width="1.5" stroke-linecap="round"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog -->
                </div>
                
                <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                    <!-- Single Blog -->
                    <div class="homec-blog">
                        <div class="homec-blog__head">
                            <div class="homec-overlay homec-blog__overlay"></div>
                            <a href="#"><img loading="lazy" src="{{ asset('frontend/assets/img/blog/listing/blog-4.webp') }}" alt="#"></a>
                            <!-- Blog Content -->
                            <div class="homec-blog__content">
                                <ul class="homec-blog__meta list-none">
                                    <li>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.8182 12.3637H8.36367V13.8182H9.8182V12.3637Z" />
                                            <path d="M9.8182 9.81816H8.36367V11.2727H9.8182V9.81816Z" />
                                            <path d="M7.63637 7.27266H6.18184V8.72719H7.63637V7.27266Z" />
                                            <path d="M7.63637 9.81816H6.18184V11.2727H7.63637V9.81816Z" />
                                            <path d="M11.9999 9.81816H10.5454V11.2727H11.9999V9.81816Z" />
                                            <path d="M14.1818 9.81816H12.7272V11.2727H14.1818V9.81816Z" />
                                            <path d="M14.1818 7.27266H12.7272V8.72719H14.1818V7.27266Z" />
                                            <path d="M11.9999 7.27266H10.5454V8.72719H11.9999V7.27266Z" />
                                            <path d="M9.8182 7.27266H8.36367V8.72719H9.8182V7.27266Z" />
                                            <path d="M3.2727 9.81816H1.81816V11.2727H3.2727V9.81816Z" />
                                            <path d="M3.2727 12.3637H1.81816V13.8182H3.2727V12.3637Z" />
                                            <path d="M14.5455 1.45453H13.0909V0.363625C13.0909 0.162812 12.9281 0 12.7273 0C12.5264 0 12.3637 0.162812 12.3637 0.363625V1.45453H3.63637V0.363625C3.63637 0.162812 3.47356 0 3.27272 0C3.07187 0 2.90909 0.162812 2.90909 0.363625V1.45453H1.45453C0.651219 1.45453 0 2.10578 0 2.90909V14.5455C0 15.3488 0.651219 16 1.45453 16H14.5454C15.3488 16 16 15.3488 16 14.5455V2.90909C16 2.10578 15.3488 1.45453 14.5455 1.45453ZM15.2727 14.5455C15.2727 14.9471 14.9471 15.2727 14.5454 15.2727H1.45453C1.05287 15.2727 0.72725 14.9471 0.72725 14.5455V5.81819H15.2727V14.5455ZM15.2727 5.09091H0.727281V2.90909C0.727281 2.50744 1.05291 2.18181 1.45456 2.18181H2.90909V3.27272C2.90909 3.47356 3.07191 3.63634 3.27272 3.63634C3.47356 3.63634 3.63634 3.47353 3.63634 3.27272V2.18181H12.3636V3.27272C12.3636 3.47356 12.5264 3.63634 12.7273 3.63634C12.9281 3.63634 13.0909 3.47353 13.0909 3.27272V2.18181H14.5454C14.9471 2.18181 15.2727 2.50744 15.2727 2.90909L15.2727 5.09091Z" />
                                            <path d="M3.2727 7.27266H1.81816V8.72719H3.2727V7.27266Z" />
                                            <path d="M7.63637 12.3637H6.18184V13.8182H7.63637V12.3637Z" />
                                            <path d="M5.45453 12.3637H4V13.8182H5.45453V12.3637Z" />
                                            <path d="M5.45453 7.27266H4V8.72719H5.45453V7.27266Z" />
                                            <path d="M5.45453 9.81816H4V11.2727H5.45453V9.81816Z" />
                                        </svg>
                                        May 07, 2023
                                    </li>
                                    <li class="active">
                                        <svg width="15" height="17" viewBox="0 0 15 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.60687 8.64356C8.67386 8.64356 9.59767 8.26087 10.3527 7.50584C11.1075 6.75093 11.4903 5.82724 11.4903 4.76013C11.4903 3.69339 11.1076 2.76958 10.3526 2.01443C9.59755 1.25964 8.67374 0.876953 7.60687 0.876953C6.53976 0.876953 5.61608 1.25964 4.86117 2.01455C4.10626 2.76946 3.72345 3.69327 3.72345 4.76013C3.72345 5.82724 4.10626 6.75105 4.86117 7.50596C5.61633 8.26075 6.54013 8.64356 7.60687 8.64356ZM5.52936 2.68262C6.10861 2.10336 6.78812 1.82179 7.60687 1.82179C8.42551 1.82179 9.10514 2.10336 9.68451 2.68262C10.2638 3.26199 10.5455 3.94162 10.5455 4.76013C10.5455 5.57889 10.2638 6.25839 9.68451 6.83777C9.10514 7.41715 8.42551 7.69872 7.60687 7.69872C6.78837 7.69872 6.10886 7.41702 5.52936 6.83777C4.94998 6.25852 4.66829 5.57889 4.66829 4.76013C4.66829 3.94162 4.94998 3.26199 5.52936 2.68262Z"/>
                                            <path d="M14.4018 13.275C14.3801 12.9609 14.336 12.6182 14.2712 12.2563C14.2057 11.8917 14.1215 11.547 14.0206 11.232C13.9163 10.9064 13.7747 10.5848 13.5994 10.2767C13.4177 9.95684 13.2042 9.67835 12.9646 9.44918C12.714 9.20944 12.4072 9.01668 12.0525 8.87608C11.6989 8.73622 11.3071 8.66536 10.888 8.66536C10.7235 8.66536 10.5643 8.73289 10.2569 8.93303C10.0677 9.05641 9.84639 9.1991 9.59939 9.35692C9.38818 9.4915 9.10206 9.61758 8.74865 9.73174C8.40386 9.84331 8.05377 9.89989 7.70811 9.89989C7.3627 9.89989 7.01261 9.84331 6.66757 9.73174C6.31453 9.61771 6.02829 9.49162 5.81745 9.35705C5.57278 9.2007 5.35136 9.05801 5.15935 8.93291C4.85219 8.73277 4.69301 8.66524 4.52843 8.66524C4.10921 8.66524 3.71755 8.73622 3.36414 8.8762C3.00962 9.01656 2.70271 9.20931 2.4519 9.4493C2.21227 9.6786 1.99873 9.95697 1.81716 10.2767C1.64212 10.5848 1.50041 10.9062 1.3961 11.2321C1.29536 11.5471 1.21109 11.8917 1.14565 12.2563C1.0807 12.6177 1.03679 12.9605 1.01502 13.2754C0.993613 13.5833 0.982788 13.9037 0.982788 14.2275C0.982788 15.0691 1.25033 15.7505 1.77792 16.253C2.29899 16.7488 2.98834 17.0003 3.8269 17.0003H11.5903C12.4286 17.0003 13.118 16.7488 13.6392 16.253C14.1669 15.7509 14.4344 15.0693 14.4344 14.2274C14.4343 13.9025 14.4233 13.5821 14.4018 13.275ZM12.9877 15.5684C12.6434 15.8961 12.1863 16.0554 11.5902 16.0554H3.8269C3.23067 16.0554 2.77357 15.8961 2.42939 15.5686C2.09172 15.2471 1.92763 14.8084 1.92763 14.2275C1.92763 13.9254 1.93759 13.6271 1.95752 13.3407C1.97695 13.0598 2.01669 12.7511 2.07561 12.4232C2.13379 12.0993 2.20784 11.7954 2.29592 11.5202C2.38043 11.2563 2.49569 10.995 2.63863 10.7434C2.77504 10.5035 2.932 10.2977 3.1052 10.1319C3.26721 9.97677 3.4714 9.84983 3.71201 9.75462C3.93454 9.66654 4.18461 9.61832 4.4561 9.61106C4.48919 9.62865 4.54811 9.66223 4.64356 9.72448C4.8378 9.85106 5.06168 9.99547 5.30917 10.1535C5.58816 10.3314 5.94759 10.4921 6.37702 10.6307C6.81604 10.7726 7.2638 10.8447 7.70824 10.8447C8.15267 10.8447 8.60055 10.7726 9.03933 10.6308C9.46912 10.4919 9.82843 10.3314 10.1078 10.1533C10.3611 9.99141 10.5787 9.85118 10.7729 9.72448C10.8684 9.66236 10.9273 9.62865 10.9604 9.61106C11.232 9.61832 11.4821 9.66654 11.7047 9.75462C11.9452 9.84983 12.1494 9.9769 12.3114 10.1319C12.4846 10.2976 12.6416 10.5034 12.778 10.7435C12.921 10.995 13.0364 11.2564 13.1208 11.5201C13.209 11.7956 13.2832 12.0994 13.3412 12.4231C13.4 12.7516 13.4399 13.0604 13.4593 13.3408C13.4794 13.6261 13.4895 13.9245 13.4896 14.2275C13.4895 14.8085 13.3254 15.2471 12.9877 15.5684Z"/>
                                        </svg>
                                        <a href="javascript:;">John Doe</a>
                                    </li>
                                </ul>
                                <h3 class="homec-blog__title"><a href="blog/8-Reasons-Why-Real-Estate-Is-a-Good-Investment">8 Reasons Why Real Estate Is a Good Investment</a></h3>
                                <div class="home-blog__button homec-border-top">
                                    <a href="blog/8-Reasons-Why-Real-Estate-Is-a-Good-Investment" class="homec-blog__btn">Read More
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 8L16 12M16 12L12 16M16 12H2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M9 18.2454C10.3696 19.3433 12.1081 20 14 20C18.4183 20 22 16.4183 22 12C22 7.58172 18.4183 4 14 4C12.1081 4 10.3696 4.65672 9 5.75462" stroke-width="1.5" stroke-linecap="round"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog -->
            </div>

                <div class="mg-top-50 d-flex justify-content-center w-100">
                    <a href="/blog" class="homec-btn"><span>View more</span></a>
                </div>
        </div>
    </div>
</section>
<!-- End Blog Area -->

@endsection
