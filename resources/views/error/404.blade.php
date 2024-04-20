@extends('saas.frontend.layouts.app')

@section('content')
<!-- Error Page -->
<section class="homec-error section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="homec-error-inner">
                    <!-- Eror Content Image -->
                    <div class="homec-error-inner__img">
                        <img src="{{ asset('frontend/assets/img/error-page.png') }}" alt="#">
                    </div>
                    <h1 class="homec-error-inner__title">Oops! Page Not Found</h1>
                    <div class="homec-error-inner__button">
                        <a href="/" class="homec-btn"><span>Back to Home Page</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Error Page -->
@endsection