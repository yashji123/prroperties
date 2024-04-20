 <!-- Footer Start -->
 <footer class="footer-area p-relative">
    <div class="homec-shape">
        <div class="homec-shape-single homec-shape-10"><img loading="lazy" src="{{ asset('frontend/assets/img/footer-bg.svg') }}" alt="#"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Subscribe Form -->
                <div class="homec-form mg-top-100">
                    <div class="homec-form__content">
                        <span class="homec-form__label">For Rent house offer</span>
                        <!-- <h3 class="homec-form__title">Join Homeco  Community</h3> -->
                        <h3 class="homec-form__title">Join Prroperties Community</h3>
                    </div>
                    <form  action="https://formcarry.com/s/hiYaiRHqOn" method="post"  class="homec-form__form">
    <input type="hidden" name="_token" value="MkFJ99BasPU4MIX9ClctUcVcnqT5Nxvoq9yE9v6W">
    <input type="email" placeholder="Your Email" name="email">
    <button  type="submit" class="homec-btn"><span id="subscribe_btn_text">Subscribe Now</span></button>
</form>

<script>
    document.getElementById('subscriberForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevents the default form submission action

        var email = this.elements['email'].value;

        if(email) {
            // Alert for successful subscription
            alert('Thank you for subscribing with the email: ' + email);
        } else {
            // Alert if the email field is empty
            alert('Please enter your email to subscribe.');
        }
    });
</script>
                </div>
                <!-- End Subscribe Form -->
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="footer-top-inner pd-top-30 pd-btm-100">
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
                                             <li><a href="/contact">Contact</a></li>
                                             <li><a href="/faq">FAQ</a></li>

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
                                            <li><a href="/management">Management</a></li>
                                            <li><a href="/maintenance">Maintenance</a></li>
                                            <li><a href="/software">Software</a></li>
                                            <li><a href="/development">Development</a></li>
                                            <li><a href="/relocation">Relocation</a></li>
                                            <li><a href="/investment">Investment</a></li>
                                        </ul>
                                    </div>
                                    <!-- End Footer Widget -->
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
