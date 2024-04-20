<!--<div class="preloader">-->
<!--    <div class="preloader-inner">-->
<!--        <div class="preloader-icon">-->
<!--            <span></span>-->
<!--            <span></span>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!-- End Preloader -->

<!-- Mobile Menu Modal -->
<div class="modal offcanvas-modal fade" id="offcanvas-modal">
    <div class="modal-dialog offcanvas-dialog">
        <div class="modal-content">
            <div class="modal-header offcanvas-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- offcanvas-logo-start -->
                <div class="offcanvas-logo">
                <div class="homec-header__logo">
                    <a href="/"><img src="{{ asset('frontend/assets/img/mob-logo.png') }}" alt="Prroperties company logo with skyscraper silhouette"></a>
                </div>
            </div>
            <!-- offcanvas-logo-end -->
            <!-- offcanvas-menu start -->
            <nav id="offcanvas-menu" class="offcanvas-menu">
                <!-- Main Menu -->
                <ul class="nav-menu menu navigation list-none">
                    <li class="menu-item-has-children"><a href="javascript:;">Company</a>
                        <ul class="sub-menu">
                            <li><a href="/about">About</a></li>
                            <li><a href="/career">Careers</a></li>
                            <li><a href="/blog">Blog</a></li>
                            <li><a href="https://www.johnvekser.org/" target="_blank">Impact</a></li>
                            <li><a href="/faq">FAQ</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="#">Services</a>
                        <ul class="sub-menu">
                            <li><a href="/management">Management</a></li>
                            <li><a href="/maintenance">Maintenance</a></li>
                            <li><a href="/software">Software</a></li>
                            <li><a href="/development">Develop & Renovate</a></li>
                            <li><a href="/relocation">Relocation</a></li>
                            <li><a href="/investment">Investment</a></li>
                        </ul>
                    </li>
                    <li><a href="/landlord">Landlords</a></li>
                    <li><a href="/tenants">Tenants</a></li>
                    <li><a href="/pricing">Pricing</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
                <!-- End Main Menu -->
            </nav>
            <!-- offcanvas-menu end -->
        </div>
    </div>
</div>
<!-- End Mobile Menu Modal -->

<!-- Header -->
<header id="active-sticky" class="homec-header">
    <!-- Topbar -->

    <div class="homec-header__top {{ request()->is('/') ? 'dnone' : 'dnone' }} ">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="homec-topbar-flex">
                        <!-- Contact -->
                        <ul class="homec-header__list">
                            <li>
                                <a href="mailto:Suppport@prroperties.com">
                                    <img src="{{ asset('frontend/assets/img/email-icon.svg') }}" alt="email">
                                    <span>Suppport@prroperties.com</span>
                                </a>
                            </li>
                            <li class="d-none-tab">
                                <a href="tel:+1 415 212 5211
">
                                    <img src="{{ asset('frontend/assets/img/phone-icon.svg') }}" alt="phone">
                                    <span>+1 415 212 5211
</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <img src="{{ asset('frontend/assets/img/locations-icon.svg') }}" alt="address">
                                    <span>555 West 5th Street. Los Angeles Ca. 90013</span>
                                </a>
                            </li>
                        </ul>
                        <!-- End Contact -->
                        <!-- Social -->
                        <ul class="homec-social homec-social__topbar">
                            <li><a href=" https://www.facebook.com/Prroperties"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://twitter.com/Prroperties"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/Prroperties/"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/prroperties/"><i class="fab fa-linkedin-in"></i></a></li>
                           




                        </ul>
                        <!-- End Social -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Topbar -->

    <!--<div class="homec-header__middle  home-bg-trans">-->
    <div class="homec-header__middle home-bg-trans 
    {{ (request()->is('/') || request()->is('management') || request()->is('landlord') || request()->is('tenants') || request()->is('maintenance') || request()->is('software') || request()->is('development') || request()->is('relocation')|| request()->is('investment')  ) ? '' : 'black' }}
">
        <style>
            .black{
                background:black;
            }
            .dnone{
                display:none;
            }
        </style>

        <div class="align-items-center">
            <div class="col-12">
                <div class="homec-header__inside">
                    <div class="homec-header__group">
                        <div class="homec-header__logo">
                            <a href="/"><img src="{{ asset('frontend/assets/img/logo.png') }}" alt="Prroperties company logo with skyscraper silhouette"></a>
                        </div>
                        <div class="homec-header__menu">
                            <div class="navbar">
                                <div class="nav-item">
                                    <!-- Main Menu -->
                                    <ul class="nav-menu menu navigation list-none">

                                        <!-- <li><a href="#">Home</a></li>
                                         -->
                                        <li class="menu-item-has-children"><a href="javascript:;">Company</a>
                                            <ul class="sub-menu">
                                                <li><a href="/about">About</a></li>
                                                <li><a href="/career">Careers</a></li>
                                                <li><a href="/blog">Blog</a></li>
                                                <li><a href="https://www.johnvekser.org/" target="_blank">Impact</a></li>
                                                <li><a href="/faq">FAQ</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="#">Services</a>
                                            <ul class="sub-menu">
                                                <li><a href="/management">Management</a></li>
                                                <li><a href="/maintenance">Maintenance</a></li>
                                                <li><a href="/software">Software</a></li>
                                                <li><a href="/development">Develop & Renovate</a></li>
                                                <li><a href="/relocation">Relocation</a></li>
                                                <li><a href="/investment">Investment</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="/landlord">Landlords</a></li>
                                        <li><a href="/tenants">Tenants</a></li>
                                        <li><a href="/pricing">Pricing</a></li>
                                        <li><a href="/contact">Contact</a></li>
                                    </ul>
                                    <!-- End Main Menu -->
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!--search box for vipu -->
                    <button type="button" class="offcanvas-toggler" data-bs-toggle="modal" data-bs-target="#offcanvas-modal"><span class="line"></span><span class="line"></span><span class="line"></span>
                    </button>
                    <div class="homec-header__button">
                        <a href="/properties" class="homec-header__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="32" viewBox="0 0 512 512">
                                <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/>
                            </svg>
                        </a>
                        <div id="search">
                            <button type="button" class="close">×</button>
                            <form>
                            <input type="search" value="" placeholder="Search Prroperties">
                            <!-- <button type="submit" class="btn btn-primary">Search</button> -->
                            <button type="submit" class="homec-btn homec-btn__second cus-homec-btn serch-btn">
                                <span class="homec-btn__inside">
                                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.45185 16.8948C10.3289 16.8949 12.1522 16.2686 13.633 15.1152L19.2197 20.7019C19.637 21.105 20.3021 21.0934 20.7051 20.6761C21.0983 20.269 21.0983 19.6236 20.7051 19.2165L15.1184 13.6298C17.9805 9.9456 17.314 4.63881 13.6298 1.77676C9.94555 -1.08529 4.63881 -0.418815 1.77676 3.26541C-1.08529 6.94964 -0.418815 12.2564 3.26541 15.1185C4.74865 16.2707 6.57361 16.8958 8.45185 16.8948ZM3.96301 3.95978C6.44215 1.48059 10.4616 1.48054 12.9408 3.95969C15.42 6.43883 15.4201 10.4583 12.9409 12.9375C10.4618 15.4167 6.44229 15.4167 3.9631 12.9376C3.96305 12.9376 3.96305 12.9376 3.96301 12.9375C1.48386 10.4764 1.46926 6.47159 3.93034 3.99245C3.94121 3.98153 3.95209 3.97065 3.96301 3.95978Z" fill="#111111"/>
                                    </svg>Search
                                </span>
                            </button>
                            </form>
                        </div>
                        <!--end serarch box vipul-->
                        <div class="dropdown cust-dropdown-toggle">
                            <a href="" class="homec-header__icon dropdown-toggle" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg width="28" height="32" viewBox="0 0 28 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.9659 16.2014C18.423 16.2014 22.0666 12.5579 22.0666 8.1007C22.0666 3.64352 18.423 0 13.9659 0C9.50869 0 5.86523 3.64352 5.86523 8.1007C5.86523 12.5579 9.50876 16.2014 13.9659 16.2014Z"></path>
                                    <path d="M27.8681 22.6752C27.6558 22.1446 27.3729 21.6494 27.0545 21.1895C25.4273 18.784 22.9158 17.1922 20.0858 16.8031C19.7321 16.7677 19.343 16.8384 19.06 17.0507C17.5743 18.1473 15.8056 18.7133 13.9661 18.7133C12.1266 18.7133 10.3579 18.1473 8.87219 17.0507C8.58917 16.8384 8.20005 16.7323 7.84634 16.8031C5.0164 17.1922 2.46948 18.784 0.877655 21.1895C0.55929 21.6494 0.276269 22.18 0.0640708 22.6752C-0.0420283 22.8875 -0.00668454 23.1351 0.0994145 23.3474C0.382436 23.8426 0.736144 24.3379 1.05451 24.7623C1.54973 25.4345 2.08036 26.0358 2.68174 26.6018C3.17696 27.097 3.74294 27.5569 4.30898 28.0167C7.10351 30.1039 10.4641 31.2004 13.9307 31.2004C17.3974 31.2004 20.758 30.1038 23.5525 28.0167C24.1185 27.5923 24.6845 27.097 25.1798 26.6018C25.7457 26.0358 26.3117 25.4344 26.807 24.7623C27.1607 24.3025 27.4791 23.8426 27.7621 23.3474C27.9389 23.1351 27.9742 22.8874 27.8681 22.6752Z"></path>
                                </svg>
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="{{ route('login') }}">Tenant</a></li>
                                <li><a class="dropdown-item" href="{{ route('login') }}">Landlord</a></li>
                            </ul>
                        </div>
                        <a href="/pricing" class="homec-btn"><span>List Property</span> </a>                                                                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End Header -->
