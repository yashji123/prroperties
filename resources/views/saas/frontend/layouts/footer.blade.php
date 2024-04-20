 <!-- Footer Start -->
<div id="toast-container"></div>
<style>

#toast-container {
    position: fixed;
    top: 20px;
    right: 20px;
    z-index: 999999;
}

.toast {
    display: none;
    position: relative;
    margin-bottom: 20px;
    padding: 10px 20px;
    border-radius: 5px;
    background-color: green; /* Changed from #333 to green */
    color: white; /* Ensure text color is white */
    opacity: 1;
    cursor: pointer;
    transition: opacity 1.3s ease-in-out;
}

</style>
@if(!\Request::is('/') && !\Request::is('properties'))
<section class="homec-bg-cover pd-top-15 mg-btm-30">
   <div class="homec-shape">
      <div class="homec-shape-single homec-shape-11"><img src="https://quomodothemes.website/homeco/frontend/img/anim-shape-10.svg" alt="#"></div>
      <div class="homec-shape-single homec-shape-13"><img src="https://quomodothemes.website/homeco/frontend/img/anim-shape-10.svg" alt="#"></div>
   </div>
   <div class="container">
      <div class="row">
         <div class="col-12">
            <div class="download-app__middle homec-bg-primary-color">
               <div class="download-app__content">
                  <div class="homec-section__head section-white mg-btm-30">
                     <h2 class="homec-section__title mg-top-30">Join our hosting community and start earning today</h2>
                     <p class="sec-head__text">Renting your space has never been so easy! Robust technology and support team to manage your properties seamlessly.</p>
                     <div class="mg-top-30">
                        <a href="/hosts" class="homec-btn homec-btn-service"><span>Start hosting</span></a>
                    </div>
                  </div>
               </div>
               <div class="download-app__img">
                  <img src="{{ asset('frontend/assets/img/mobile-app-bg.png') }}" alt="mobile_app">
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="homec-bg-cover pd-top-15 mg-btm-50">
    <div class="container">
        <div class="refern-earn-wrap-box">
            <div class="refern-earn-wrap-icon"><img src="{{ asset('frontend/assets/img/refer.svg') }}" alt=""></div>
            <div class="refern-earn-wrap-txt">
                <h2 class="homec-section__title mg-btm-10">Refer & earn</h2>
                <p class="sec-head__text">Receive $500 once your referral activates the first listing. No limitations! Refer to as many posts as you’d like and make money!</p>
                <div class="mg-top-30">
                    <a href="https://prroperties.com/partner/signup" class="homec-btn"><span>Get started</span></a>
                </div>
            </div>
        </div>
    </div>
</section>
@endif

 <footer class="footer-area p-relative">
    <div class="homec-shape">
        <div class="homec-shape-single homec-shape-10"><img loading="lazy" src="{{ asset('frontend/assets/img/footer-bg.svg') }}" alt="#"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Subscribe Form -->
                <div class="homec-form mg-top-50">
                    <div class="homec-form__content">
                        <!-- <span class="homec-form__label">For Rent house offer</span> -->
                        <!-- <h3 class="homec-form__title">Join Homeco  Community</h3> -->
                        <h3 class="homec-form__title">Join Prroperties Community</h3>
                    </div>
                   <form action="/subscribe" method="post" class="homec-form__form" id="subscriptionForm">
    @csrf
    <input type="email" placeholder="Your Email" name="email" id="emailInput" required>
    <button type="submit" class="homec-btn"><span id="subscribe_btn_text">Subscribe Now</span></button>
</form>
<div id="toast-container"></div> <!-- Make sure you have this element to display toasts -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('subscriptionForm');
    const emailInput = document.getElementById('emailInput');

    form.addEventListener('submit', function(event) {
        if(emailInput.value === '') {
            event.preventDefault(); // Prevent form submission
            showToast('Please enter your email to subscribe.'); // Show error toast
            return false;
        }
        // Add here any additional validation as needed
    });

    // Assuming the showToast function is defined as before
    function showToast(message) {
        const container = document.getElementById('toast-container');
        const toast = document.createElement('div');
        toast.classList.add('toast');
        toast.textContent = message;
        container.appendChild(toast);
        toast.style.display = 'block';

        setTimeout(function() {
            toast.style.opacity = '0';
            setTimeout(function() {
                container.removeChild(toast);
            }, 300); // Wait for the opacity transition before removing the element
        }, 5000);

        toast.addEventListener('click', function() {
            container.removeChild(toast);
        });
    }

    @if(session('success'))
        showToast("{{ session('success') }}");
    @endif
});
</script>


                </div>
                <!-- End Subscribe Form -->
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="footer-top-inner pd-top-10 pd-btm-30">
                    <div class="row">
                        <div class="col-lg-4 col-md-3 col-12">
                            <!-- Footer Widget -->
                            <div class="footer-about-widget">
                                <div class="footer-logo homec-header__logo">
                                    <a class="logo" href="#"><img src="{{ asset('frontend/assets/img/logo.png') }}" alt="logo"></a>
                                </div>
                                <p class="footer-about-text"></p>
                                <!-- Social -->
                                <ul class="homec-social homec-social__v2">
                                    <li><a href="https://www.facebook.com/Prroperties"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://twitter.com/Prroperties"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="https://www.instagram.com/Prroperties/"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="https://www.linkedin.com/company/prroperties/"><i class="fab fa-linkedin-in"></i></a></li>                
                                </ul>
                                <!-- End Social -->
                            </div>
                            <!-- End Footer Widget -->
                        </div>
                        <div class="col-lg-8 col-md-9">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-12">
                                    <!-- Footer Widget -->
                                    <div class="single-widget footer-useful-links">
                                        <h3 class="widget-title">Company</h3>
                                        <ul class="f-useful-links-inner list-none">
                                            <!-- <li><a href="/">Home</a></li> -->
                                            <li><a href="/about">About</a></li>
                                            <li><a href="/career" >Careers</a></li>
                                            <li><a href="/blog">Blog</a></li>
                                            <li><a href="https://www.johnvekser.org/" target="_blank">Impact</a></li>
                                            <li><a href="/faq">FAQ</a></li>
                                            <li><a href="/contact">Contact</a></li>
                                        </ul>
                                    </div>
                                     <div class="single-widget footer-useful-links">
                                        <h3 class="widget-title">Explore</h3>
                                        <ul class="f-useful-links-inner list-none">
                                            <li><a href="/co-rent">Co-rent</a></li>
                                            <li><a href="/prroperties-for-corporate">Prroperties for Corporate</a></li>
                                        </ul>
                                    </div>
                                    <!-- End Footer Widget -->
                                </div>
                                <div class="col-lg-4 col-md-4 col-12">
                                    <!-- Footer Widget -->
                                    <div class="single-widget footer-need-helps">
                                        <h3 class="widget-title">Services</h3>
                                        <ul class="f-need-helps-inner list-none">
                                            <!-- <li><a href="http://localhost:8888/Prroperties-new/user/dashboard">Dashboard</a></li>
                                            <li><a href="http://localhost:8888/Prroperties-new/user/wishlist">Wishlist</a></li> -->
                                            <li><a href="/maintenance">Maintenance</a></li>
                                            <li><a href="/construction-design">Construction &  Design</a></li>
                                            <li><a href="/relocation">Relocation</a></li>
                                            <li><a href="/invest">Invest with us</a></li>
                                            <!-- <li><a href="/management">Management</a></li>
                                            <li><a href="/software">Software</a></li> -->
                                        </ul>
                                    </div>
                                    <!-- End Footer Widget -->
                                    <div class="single-widget footer-need-helps">
                                        <h3 class="widget-title">Landlord</h3>
                                        <ul class="f-need-helps-inner list-none">
                                            <li><a href="/hosts">Host</a></li>
                                            <li><a href="/management">Management</a></li>
                                            <li><a href="/software">Software</a></li>
                                            <li><a href="/pricing">Pricing</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-12">
                                    <!-- Footer Widget -->
                                    <div class="single-widget footer-need-helps">
                                        <h3 class="widget-title">Resources </h3>
                                        <ul class="f-need-helps-inner list-none">
                                            <!-- <li><a href="http://localhost:8888/Prroperties-new/user/dashboard">Dashboard</a></li>
                                            <li><a href="http://localhost:8888/Prroperties-new/user/wishlist">Wishlist</a></li> -->
                                        
                                            <li><a href="/investment_term">Investor Terms of Service</a></li>
                                            <li><a href="/Terms_of_Service">Prroperties Terms of Service</a></li>
                                            <li><a href="/Service_Provider_Terms">Company Service Provider Terms</a></li>
                                             <li><a href="/Prroperties_Maintenance">Prroperties Maintenance</a></li>
                                            <li><a href="/Tenancy_Agreement">Residential Agreement With Subletting</a></li>
                                           
                                            <!--<li><a href="/contact">Portugal</a></li>-->
                                        </ul>
                                    </div>
                                    <div class="single-widget footer-need-helps">
                                        <h3 class="widget-title">Location </h3>
                                        <ul class="f-need-helps-inner list-none">
                                            <li><a href="/properties">California</a></li>
                                            <li><a href="/properties">Florida</a></li>
                                          

                                            
                                        </ul>
                                    </div>
                                    <!-- End Footer Widget -->
                                <!--</div>-->
                                <!--<div class="col-lg-4 col-md-4 col-12">-->
                                    <!-- Footer Widget -->
<!--                                    <div class="single-widget footer-contact">-->
<!--                                        <h3 class="widget-title">Contact Us</h3>-->
<!--                                        <div class="f-contact__form-top">-->
<!--                                            <ul class="f-contact-list list-none">-->
<!--                                                <li><img src="{{ asset('frontend/assets/img/footer-phone.png') }}" alt="phone"><a href="tel:+1 415 212 5211">+1 415 212 5211</a></li>-->
<!--                                                <li><img src="{{ asset('frontend/assets/img/footer-message.png') }}" alt="email"><a href="mailto:Support@prroperties.com">Suppport@prroperties.com</a></li>-->
<!--                                                <li><img src="{{ asset('frontend/assets/img/footer-location.png') }}" alt="address"><p>555 West 5th Street.-->
<!--Los Angeles Ca. 90013</p></li>-->
<!--                                            </ul>-->
<!--                                        </div>-->
<!--                                    </div>-->
                                    <!-- End Footer Widget -->
                                <!--</div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



    
    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <!-- Copyright Text -->
                    <p class="copyright-text">Copyright 2023, Prroperties. All Rights Reserved.</p>
                </div>
                <div class="col-lg-6 col-12">
                    <!-- Footer Page List -->
                    <ul class="footer-pages list-none">
                        <li><a href="/privacy-policy">Privacy Policy</a></li>
                        <li><a href="/terms-conditions">Terms &amp; Conditions</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Copyright -->
</footer>
 <!-- Footer End -->
