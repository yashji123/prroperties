@extends('layouts.app')
@push('title')
    {{ __('Sign Up') }} -
@endpush
@section('content')
<script src="https://js.stripe.com/v3/"></script>
<section id="paymentModal">
    <div class="modal-dialog-plan">
        <div class="modal-content-plan">
            <div class="panel-heading">
                
            </div>

            <div class="payment-wrap">

            <!-- Form left part start  -->
                <div class="col-md-6 price-form">
                    <h4>Select number of doors</h4>
                    <div class="price-container align-item-end">
                        <span id="price-per-door-display" class="price basic-price ">$1.50</span>
                        <span class="plan-duration">/ Per door</span>
                    </div>

                    <div class="amt-wrp-box">
                        <div class="price-container d-flex justify-content-space mg-btm-30">
                            <span class="basic-price ">No of Doors</span>
                            <span id="number-of-doors-display" class="plan-duration">
                            <div class="door-number">
                                <span class="minus">-</span>
                                <input type="text" value="1"/>
                                <span class="plus">+</span>
                            </div>
                            </span>
                        </div>

                        <div class="price-container d-flex justify-content-space mg-btm-10 d-none">
                            <span class="basic-price ">No of Doors Total</span>
                            <span  class="plan-duration total-price-display">$150</span>
                        </div>

                        <div class="total-wrap">
                            <div class="total-box pd-top-10 pd-btm-10 total-box-bor d-none">
                                <div class="total-head">Subtotal</div>
                                <div class="total-price total-price-display">$150.00</div>
                            </div>
                            <div class="total-box total-box-bor pd-btm-10 pd-top-25">
                                <div class="total-head">Total amount</div>
                                <div class="total-price "><span id="display-amount">$150.00</span></div>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- Form left part end  -->

                <!-- Form right part start  -->
                <div class="col-md-6 price-form">
                    <h2 class="mg-btm-20">Payment details</h2>
                    <div class="inlineimage"> 
                        <img class="img-responsive images" src="https://cdn0.iconfinder.com/data/icons/credit-card-debit-card-payment-PNG/128/Mastercard-Curved.png"> 
                        <img class="img-responsive images" src="https://cdn0.iconfinder.com/data/icons/credit-card-debit-card-payment-PNG/128/Discover-Curved.png"> 
                        <img class="img-responsive images" src="https://cdn0.iconfinder.com/data/icons/credit-card-debit-card-payment-PNG/128/Paypal-Curved.png"> 
                        <img class="img-responsive images" src="https://cdn0.iconfinder.com/data/icons/credit-card-debit-card-payment-PNG/128/American-Express-Curved.png"> </div>
                        <form id="payment-form" action="{{ route('payment.charge') }}" method="post" onsubmit="return handleSubmit()">
                        @csrf
                        <input type="hidden" name="plan_name" id="plan-name" value="ads software">
                        <input type="name" name="name" placeholder="Name" value="" required>
                        <input type="email" name="email" placeholder="Email" value="<?php if(isset($_GET['email'])){ echo $_GET['email']; } ?>" required>
                        <input type="tel" name="phone" placeholder="Phone number" required>

                      
                        <input type="hidden" name="amount" id="payment-amount">
                        <!--<label for="amount">Amount to be charged:</label>-->
                        <!--<span id="display-amount">$0</span>-->
                        <div id="card-element"></div>
                        
                        <div class="form-check inp-bor">
                            <input class="form-check-input" type="checkbox" value="" id="">
                            <label class="form-check-label" for="">Securely save my information for 1-click checkout</a>
                            </label>
                            <label><div class="sublabel">Pay faster on Clevertone powered by Algorip and everywhere Link is accepted.</div></label>
                        </div>
                        <div id="card-errors" role="alert"></div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                                I agree to the <a href="/terms-conditions" style="text-decoration: underline;">terms and conditions.</a>
                            </label>
                        </div>
                    
                        <button type="submit">Pay</button>
                    </form>
                </div>
                <!-- Form right part end  -->

            </div>

        </div>
    </div>
</section>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script>
    $(document).ready(function() {
        const pricePerDoor = 1.50; // Price per door per month
        const defaultPlanName = "ads software"; // Default plan name

        function updatePricing() {
            var numberOfDoors = parseInt($('#number-of-doors-display input').val());
            var totalPrice = numberOfDoors * pricePerDoor;

            // Update the display to show the total price in dollars
            $('.total-price-display').text('$' + totalPrice.toFixed(2));
            $('#display-amount').text('$' + totalPrice.toFixed(2));

            // Send the total price in dollars to the server
            $('#payment-amount').val(totalPrice.toFixed(2));
            $('#plan-name').val(defaultPlanName);  // Update the plan name if needed
        }

        // Initialize default values and UI elements
        $('#plan-name').val(defaultPlanName); // Set the default plan name on load
        updatePricing(); // Calculate initial pricing based on defaults

        // Event handlers for user interactions
        $('.minus, .plus').click(function () {
            var $input = $(this).parent().find('input');
            var count = parseInt($input.val());
            count = $(this).hasClass('minus') ? Math.max(count - 1, 1) : count + 1;
            $input.val(count);
            updatePricing();
        });

        $('#number-of-doors-display input').change(updatePricing);
    });

    // Stripe submission handler
    var stripe = Stripe('{{ env('STRIPE_KEY') }}');
    var elements = stripe.elements();
    var card = elements.create('card');
    card.mount('#card-element');

    card.on('change', function(event) {
        var displayError = document.getElementById('card-errors');
        if (event.error) {
            displayError.textContent = event.error.message;
        } else {
            displayError.textContent = '';
        }
    });

    var form = document.getElementById('payment-form');
    form.addEventListener('submit', function(event) {
        event.preventDefault();

        stripe.createToken(card).then(function(result) {
            if (result.error) {
                var errorElement = document.getElementById('card-errors');
                errorElement.textContent = result.error.message;
            } else {
                // Create a hidden input to store the Stripe Token
                var tokenInput = document.createElement('input');
                tokenInput.setAttribute('type', 'hidden');
                tokenInput.setAttribute('name', 'stripeToken');
                tokenInput.setAttribute('value', result.token.id);
                form.appendChild(tokenInput);

                // Now submit the form
                form.submit();
            }
        });
    });
</script>






@endsection
