@extends('layouts.app')
@push('title')
    {{ __('Sign Up') }} -
@endpush
@section('content')


    <div id="headless-wrapper" class="cust-signup-bg">
        <section class="container sign-up-page-wrap-row p-0">

                <div class="sign-logo">
                    <img src="{{ asset('assets/images/sign-logo.png') }}" alt="" class="dis-resp">
                </div>

                <div class="cust-signup">
                    <div class="lt-wrap">
                        <div class="sign-logo">
                            <img src="{{ asset('assets/images/sign-logo.png') }}" alt="" class="dis-desk">
                        </div>
                        <div class="lt-wrap-text">
                            <h2>The most powerful tool for real estate at your fingertips</h2>
                            <h3>Maximize your rental income and streamline property<br/> management with Prroperties </h3>
                            <h5>From tenant relations to maintenance coordination, Prroperties empowers you to effortlessly oversee all aspects of property management. We guarantee:</h5>
                            <ul>
                                <li><span class="sign-icons"><img src="{{ asset('assets/images/landlords/occupancy.png') }}" alt="" class=""></span>
                                <div class="sign-text"><b>Complete occupancy: </b> We’ll ensure your residential and commercial spaces are always rented.</div> </li>
                                <li><span class="sign-icons"><img src="{{ asset('assets/images/landlords/automated-rent.png') }}" alt="" class=""></span>
                                <div class="sign-text"><b>Automated rent collection: </b> Save time and avoid late fees by allowing tenants to pay rent through our comprehensive platform with just a single click.</div> </li>
                                <li><span class="sign-icons"><img src="{{ asset('assets/images/landlords/report.png') }}" alt="" class=""></span>
                                <div class="sign-text"><b>Customized reports: </b> Our platform comprises everything you need. You’ll have access to reports, cash flows, and more.</div> </li>
                                <li><span class="sign-icons"><img src="{{ asset('assets/images/landlords/24-hours-support.png') }}" alt="" class=""></span>
                                <div class="sign-text"><b>24/7 Live support team:</b> Get continuous assistance from our expert team. </div> </li>
                            </ul>

                            <h5 class="mg-top-20">Thousands of customers using it</h5>

                            <div class="secure-imgs d-none">
                                <img src="../assets/images/secure.png" alt="" class="img-fluid">
                                <img src="../assets/images/password-protected.png" alt="" class="img-fluid">
                            </div>

                            <!-- <h5>Always 100% secure and password protected.</h5> -->

                            <div class="vect-img">
                                <img src="{{ asset('assets/images/dash.png') }}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>

                    <div class="rt-wrap">
                        <div class="form-signin">
                            <div class="card bg-white clearfix">
                                <form action="{{ route('owner.register.store') }}" method="post">
                                    @csrf
                                    <!-- <div class="mb-25 sign-up-top-logo">
                                        <a href="{{ route('frontend') }}">
                                            <span class="logo-lg">
                                                <img src="{{ getSettingImage('app_logo') }}">
                                            </span>
                                        </a>
                                    </div> -->
                                    <div class="card-header text-center">
                                        <h1 class="form-signin-heading">List your space with us</h1>
                                    </div>
                                    <div class="card-body p30">
                                        <div class="row mb-15">
                                            <div class="col-md-6">
                                                <!-- <label
                                                    class="label-text-title color-heading font-medium mb-2">{{ __('First Name') }}</label> -->
                                                <input type="text" name="first_name" value="{{ old('first_name') }}"
                                                    class="form-control" placeholder="{{ __('First Name') }}">
                                                @error('first_name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <!-- <label
                                                    class="label-text-title color-heading font-medium mb-2">{{ __('Last Name') }}</label> -->
                                                <input type="text" name="last_name" value="{{ old('last_name') }}"
                                                    class="form-control" placeholder="{{ __('Last Name') }}">
                                                @error('last_name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-15">
                                            <div class="col-md-12">
                                                <!-- <label
                                                    class="label-text-title color-heading font-medium mb-2">{{ __('Email') }}</label> -->
                                                <input type="text" name="email" value="{{ session('email', old('email')) }}"
                                                    class="form-control" placeholder="{{ __('Email') }}">
                                                @error('email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-15">
                                            <div class="col-md-12">
                                                <!-- <label
                                                    class="label-text-title color-heading font-medium mb-2">{{ __('Contact Number') }}</label> -->
                                                <input type="text" name="contact_number" value="{{ session('phone', old('contact_number')) }}"
                                                    class="form-control" placeholder="{{ __('Contact Number') }}">
                                                @error('contact_number')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-12 mb-15">
                                                <!-- <label
                                                    class="label-text-title color-heading font-medium mb-2">{{ __('Password') }}</label> -->
                                                <div class="form-group mb-0 position-relative">
                                                    <input class="form-control" name="password" placeholder="Password"  type="password">
                                                </div>
                                                @error('password')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-md-12 mb-15">
                                                <!-- <label
                                                    class="label-text-title color-heading font-medium mb-2">{{ __('Confirm Password') }}</label> -->
                                                <div class="form-group mb-0 position-relative">
                                                    <input class="form-control" name="password_confirmation" placeholder="Retype password" type="password">
                                                </div>
                                            </div>
                                            
                                        </div>

                                        @if (getOption('GOOGLE_RECAPTCHA_MAIL_STATUS', 0) == ACTIVE)
                                            <div class="row mb-15">
                                                <div class="col-md-12">
                                                    <div class="g-recaptcha"
                                                        data-sitekey="{{ getOption('GOOGLE_RECAPTCHA_KEY') }}">
                                                    </div>
                                                    @if ($errors->has('g-recaptcha-response'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            @endif
                                            <div class="row mb-15">
                                                <div class="col-md-12">
                                                    <button type="submit"
                                                        class="theme-btn theme-button1 theme-button3 font-15 fw-bold w-100"
                                                        title="{{ __('Sign Up') }}">{{ __('Sign Up') }}</button>
                                                </div>
                                            </div>

                                            <p class="signin_link text-center">{{ __('Already have an account?') }} <a href="{{ route('login') }}"
                                                        class="secondary-color font-medium">{{ __('Sign In') }}</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="brand-wrap dis-desk">
                            <h3 class="">Featured in</h3>
                            <ul>
                                <li><img src="{{ asset('assets/images/featured/crunch.png') }}" alt="" class="img-fluid"></li>
                                <li><img src="{{ asset('assets/images/featured/clutch.png') }}" alt="" class="img-fluid"></li>
                                <li><img src="{{ asset('assets/images/featured/forbes.png') }}" alt="" class="img-fluid"></li>
                                <li><img src="{{ asset('assets/images/featured/inc.png') }}" alt="" class="img-fluid"></li>
                            </ul>
                        </div>
                        <div class="login-footer d-none">
                            <ul class="footer-pages list-inline">
                                <li class="list-inline-item"><a href="/privacy-policy">Privacy Policy</a></li>
                                <li class="list-inline-item"><a href="/terms-conditions">Terms &amp; Conditions</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 d-none">
                    <div class="sign-up-left-content position-relative text-center">
                    <!-- <div class="homec-overlay1"></div> -->
                        <!-- <div class="sign-up-bottom-img mb-25">
                            <img src="{{ getSettingImage('sign_in_image') }}" alt="{{ getOption('app_name') }}"
                                class="img-fluid">
                        </div>
                        <h1 class="text-white">{{ __(getOption('sign_in_text_title')) }}</h1>
                        <p class="mt-25 w-75 mx-auto">{{ __(getOption('sign_in_text_subtitle')) }}</p> -->
                    </div>
                </div>

        </section>
    </div>
    @if(session('success'))
<script>
    window.onload = function() {
        Swal.fire({
            title: 'Success!',
            text: '{{ session("success") }}',
            icon: 'success',
            confirmButtonText: 'OK'
        });
    };
</script>
@endif

@push('script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src='{{ asset('assets/libs/recaptcha/api.js') }}'></script>
@endpush
