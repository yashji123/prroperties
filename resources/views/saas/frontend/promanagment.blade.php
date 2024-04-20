@extends('layouts.app')
@push('title')
    {{ __('Sign Up') }} -
@endpush
@section('content')
<section class="prop-flow-wrap">

        <div class="header-wrap">
            <div class="prop-logo"><img src="{{ asset('assets/images/login-logo.png') }}" alt="" class="img-fluid"></div>
            <div class="rt-cta">
                <div class="plan-btn">
                    <a href="#" class="home-btn"><span>Questions?</span></a>
                </div>

                <div class="plan-btn">
                    <a href="#" class="home-btn"><span>Save & exit</span></a>
                </div>
            </div>
        </div>

        <form class="middle-wrap" id="landlord_form" method="POST" action="{{ route('payment.charge') }}" enctype="multipart/form-data">
            @csrf
            <div class="steps">
                <!-- start steps -->
                <div class="step1" data-bind="fadeVisible: step() == 1, css: {current : step() == 1}, hasfocus: step() == 1">
                    <div class="tell-us-step">
                        <div class="container">
                            <div class="row align-item-center">
                                <div class="col-md-6">
                                    <div class="mid-space">
                                        <h1 class="main-head">Tell us about your place</h1>
                                        <p class="main-text">In this step, we'll ask you which type of property you have and if guests will book the entire place or just a room. Then let us know the location and how many guests can stay.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <img src="{{ asset('assets/images/tell-us.png') }}" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="step2" data-bind="fadeVisible: step() == 2, css: {current : step() == 2}, hasfocus: step() == 2">
                    <div class="gmap-step center-wrap">
                        <h2>Where's your place located?</h2>
                        <p>Your address is only shared with guests after they’ve made a reservation.</p>
                        <div class="input-controls">
                            <svg xmlns="http://www.w3.org/2000/svg" class="controlsvg" viewBox="0 0 16 16" aria-hidden="true" role="presentation" focusable="false" style="display: block; height: 24px; width: 24px; fill: #000000;"><path d="M8 .5C4.96.5 2.5 3 2.5 6s1.83 6.08 5.5 9.25C11.67 12.08 13.5 9 13.5 6A5.5 5.5 0 0 0 8 .5zM8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"></path></svg>
                            <input id="pac-input" class="controls" type="text" placeholder="Enter your address">
                            <div id="map"></div>
                        </div>
                    </div>
                </div>

                <div class="step3" data-bind="fadeVisible: step() == 3, css: {current : step() == 3}, hasfocus: step() == 3">
                    <div class="gmap-form-step center-wrap">
                        <h2>Confirm your address</h2>
                        <p>Your address is only shared with guests after they’ve made a reservation.</p>
                        <div class="form-control mg-btm-30">
                            <input type="text" name="country" id="country" placeholder="Country" value="">
                        </div>
                        <div class="form-control">
                            <input type="text" name="flat_house" id="flat_house" placeholder="Flat, house, etc." value="">
                        </div>
                        <div class="form-control">
                            <input type="text" name="street_address" id="street_address" placeholder="Street address" value="">
                        </div>
                        <div class="form-control">
                            <input type="text" name="nearby_landmark" id="nearby_landmark" placeholder="Nearby landmark" value="">
                        </div>
                        <div class="form-control">
                            <input type="text" name="district" id="district" placeholder="District/locality " value="">
                        </div>
                        <div class="form-control">
                            <input type="text" name="city" id="city" placeholder="City / town" value="">
                        </div>
                        <div class="form-control">
                            <input type="text" name="state" id="state" placeholder="State/union territory" value="">
                        </div>
                        <div class="form-control">
                            <input type="text" name="pin_code" id="pin_code" placeholder="PIN code" value="">
                        </div>
                    </div>
                </div>

                <div class="step4" data-bind="fadeVisible: step() == 4, css: {current : step() == 4}, hasfocus: step() == 4">
                    <div class="vac-occu-step center-wrap">
                        <h2>Select the appropriate status?</h2> 

                        <div class="questions">
                            <div class="form__group">
                                <label class="form__label" for="vacant">

                                <!-- tabindex="0" -->
                                <input class="form__input" type="radio" name="loanType" id="vacant" value="vacant">
                                <!-- <button type="button"> -->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="40" viewBox="0 0 50 50">
                                    <image x="4" y="4" width="43" height="44" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACsAAAAsCAYAAAD8WEF4AAAFaklEQVRYhWKgMmBmYGCIZ2BgeMzAwHCJgYHBkWrmMzAwAAAAAP//oiZmYmBgiGVgYPjIwMDwH4rvMDAwOFDFEgYGBgAAAAD//6ImjmNgYPiE5FAYvsvAwGBPsUUMDAwAAAAA//+iFo5mYGB4j+RAUDJ4h8S/RbGDGRgYAAAAAP//ogaOZGBgeIvksHsMDAzuDAwMyWhJ4iYDA4MN2RYyMDAAAAAA//+iFEcwMDC8QnLQQ6hDYSADLWlcZ2BgsCLLUgYGBgAAAAD//6IEh6E59AmaQ5Ed/B1J3RUGBgYzki1mYGAAAAAA//8iFwczMDC8QHLAcwYGBi88hmUxMDD8QlIPKtbMSbKcgYEBAAAA//8iBwcwMDA8Q7IYFLr4HAoCjAwMDJkMDAz/kPRdZGBgMCXaAQwMDAAAAAD//yIV+0FzOsxCUAngT6QhoAojH61YO8vAwGBAlG4GBgYAAAAA//8iBYMc9QjJog8kOBQGWBkYGIrQHHyaKAczMDAAAAAA//8iFvtAczrMgi/Q5ACKXlIBGwMDQykWB+vjNYiBgQEAAAD//yIGY3NoILR6JRewMzAwFJMUwgwMDAAAAAD//8KHQaEGKopAhTyyQ0MpdCgMcDAwMFQyMDD8RjL/FM4QZmBgAAAAAP//woVBDvVkYGB4gObQEDKjHhcAhXAFAwPDD4IOZmBgAAAAAP//woaxhSgo14OqVVoAUBquZWBg+IZk31EGBgZdFMsYGBgAAAAA///ChkEORQ5RUL0fRSOHwgALAwNDPZqDjzMwMOjBVTAwMAAAAAD//0LHbtAmHUzDa2jTjx4A5OAmNAcfgYcwAwMDAAAA//9Cxi7QxjJyiCbSyaEwAKo4QA5GTsMgB2sxMDAwAAAAAP//gmEnBgaGG2gOTaOzQ2EAVHG0obUlDjAwMGgCAAAA//8CSYIaxaC2JnLNlDpADoUBUKZrZ2Bg+At3FwPDfgAAAAD//wJJnEcrnkAtpMEAuBgYGLrhbmNg+A8AAAD//wIJgtqhIA4oYWdTuRylFHDDHczA8B8AAAD//wIlaFBjGBSi0xkYGObBfDBIAKh2AxVh7xgYGG4CAAAA//+CuYlnEDkQG2BiYGDgAgAAAP//wibBx8DA0MjAwLBngDp4oAoIVFyBMjmoZIAABgYGAAAAAP//woZBDWxYObeSgYFBjI4OVWFgYDiMNECiA5dhYGAAAAAA///C1nrihTYwQECcgYGBkz7uBANQhgLZDwL80JYZBDAwMAAAAAD//8LmWFA/CQZg5Ry9AMg+EIaxEW5hYGAAAAAA//+iRruUPoCBgQEAAAD//xo6jmVgYAAAAAD//xo6jmVgYAAAAAD//xo6jmVgYAAAAAD//xo6jmVgYAAAAAD//xo6jmVgYAAAAAD//yLkWHq3E+CtKyhANKoYGBgAAAAA//8ixrH0dDBu+xgYGAAAAAD//8Lm2K/Q6hYEJJFqM3oAEQYGBnmoRaBhUlCrCwIYGBgAAAAA///C5ljQCCFo8A0EVBkYGIzo6FhQP1AUygb1Xt7AZRgYGAAAAAD//8KGQW2B+UhRAuqb0cPBoAEU5MHpMmgHEgIYGBgAAAAA///C1StwZmBgWMjAwCAN5d9nYGCYxMDAsB1qIDUAyEEg+xWgQ1JJ0IYTCIDGvUBNRVDLCwIYGBgAAAAA///C5VhQOxLUxelASrOgtAwamQF1f6jV9QGZA+prgdIqqJMIAqCoBw0BbEXJbAwMDAAAAAD//8KHQY4EzQeAervoc1u0wqAYBI2io0Q/GDAwMAAAAAD//yIUQiBNoGHIdGjSgLU1qQlAbgCN/GxgYGCYizTGhgoYGBgAAAAA//8DAEKKGIXLHQd+AAAAAElFTkSuQmCC"/>
                                </svg>


                                <span class="form__label-name">Vacant</span>
                                <svg class="form__label-check" viewBox="0 0 512 512" title="check-circle">
                                    <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z" />
                                </svg>
                                </label>
                                <!-- </button> -->

                                <label class="form__label" for="occupied">
                                <!-- tabindex="0" -->
                                <input class="form__input" type="radio" name="loanType" id="occupied" value="occupied">

                                <!-- <button> -->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="40" viewBox="0 0 50 50">
                                    <image id="rented" x="2" y="2" width="46" height="46" xlink:href="data:img/png;base64,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"/>
                                </svg>

                                <span class="form__label-name">Occupied</span>
                                <svg class="form__label-check" viewBox="0 0 512 512" width="100" title="check-circle">
                                    <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z" />
                                </svg>
                                <!-- </button> -->
                                </label>
                            </div>
                        </div>

                        <h2 class="mg-top-40">Select the rental accommodation type offered?</h2> 
                        <div class="questions">
                            <div class="form__group">
                                <label class="form__label" for="str">

                                <!-- tabindex="0" -->
                                <input class="form__input" type="radio" name="str" id="str" value="STR">
                                <!-- <button type="button"> -->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="40" viewBox="0 0 50 50">
                                    <image id="str" width="50" height="50" xlink:href="data:img/png;base64,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"/>
                                </svg>


                                <span class="form__label-name">STR</span>
                                <svg class="form__label-check" viewBox="0 0 512 512" title="check-circle">
                                    <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z" />
                                </svg>
                                </label>
                                <!-- </button> -->

                                <label class="form__label" for="ltr">

                                <!-- tabindex="0" -->
                                <input class="form__input" type="radio" name="str" id="ltr" value="LTR">
                                <!-- <button type="button"> -->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="40" viewBox="0 0 50 50">
                                    <image id="ltr" width="50" height="50" xlink:href="data:img/png;base64,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"/>
                                </svg>


                                <span class="form__label-name">LTR</span>
                                <svg class="form__label-check" viewBox="0 0 512 512" title="check-circle">
                                    <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z" />
                                </svg>
                                </label>
                                <!-- </button> -->

                                <label class="form__label" for="communal">
                                <!-- tabindex="0" -->
                                <input class="form__input" type="radio" name="str" id="communal" value="Communal">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="40" viewBox="0 0 50 50">
                                    <image id="communal" width="50" height="50" xlink:href="data:img/png;base64,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"/>
                                </svg>

                                <!-- <button> -->
                                

                                <span class="form__label-name">Communal</span>
                                <svg class="form__label-check" viewBox="0 0 512 512" width="100" title="check-circle">
                                    <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z" />
                                </svg>
                                <!-- </button> -->
                                </label>
                            </div>
                        </div>

                        <div class="head-vac-wrap mg-top-20 br-top-gray br-btm-gray padd-top-10 padd-btm-10">
                            <h4 class="">No of Doors</h4>
                            <span id="number-of-doors-display" class="plan-duration">
                            <div class="door-number">
                                <span class="minus">-</span>
                                <input type="number" value="1" id="doors" name="doors" min="0">
                                <span class="plus">+</span>
                            </div>
                            </span>
                        </div>

                        <div class="br-btm-gray padd-btm-10">
                            <div class="form-control mg-top-20">
                                <input type="number" name="monthlyRevenue" placeholder="Please enter rental value?" value="" id="monthlyRevenue" min="0">
                            </div>
                        </div>

                        <div class="form-check mg-top-20 padd-btm-10 br-btm-gray">
                            <input class="form-check-input" type="checkbox" value="" id="includeMaintenance" name="includeMaintenance">
                            <label class="form-check-label" for="includeMaintenance">
                            Include Maintenance Services</a>
                            </label>
                        </div>
                        
                        <input type="hidden" name="email_id" value="<?php if(isset($_GET['email'])){ echo $_GET['email']; }else{ echo '-'; } ?>">
                    </div>
                </div>

                <div class="step5" data-bind="fadeVisible: step() == 5, css: {current : step() == 5}, hasfocus: step() == 5">
                    <div class="ammen-util-step center-wrap">
                        <h2>Tell guests what your place has to offer</h2>
                        <p>You can add more amenities after you publish your listing.</p>
                        <div class="questions">
                            <div class="form__group cust__form__group">
                                <label class="form__label" for="wifi">

                                <!-- tabindex="0" -->
                                <input class="form__input" type="checkbox" name="utilities[]" id="wifi" value="Wifi">
                                <!-- <button type="button"> -->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="40" viewBox="0 0 50 50">
                                    <image id="wifi_1_" data-name="wifi (1)" x="3" y="10" width="44" height="32" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAgCAYAAABpRpp6AAAEmElEQVRYhZzNoQ3AIBgF4Q9dSVLVFVDsvwCGKZogqKun5l+AXnLizHvJfy7UsESfyDhiduHFg4EbPWyYW/f4AAAA//8iFaszMDCUMTAwHGBgYPgDdRC5GOSR3QwMDDkMDAyyRDmEgYEBAAAA//8iFkczMDBsI8FxvxkYGH6Q4CmQutUMDAw+eB3EwMAAAAAA//+E0rEJgDAABdFXZAghjfZW4nBu4ELOYO8EBgRXsAoEIZ0E64PPh7u/JN6jC8YGv6raAwknbjzICDWPiAE9JszoGps7VmwfggIAAP//woXNoNGOLTSuMDAwNDIwMJgzMDAwkRhTMMDGwMDgyMDA0MXAwHAXhz2bGBgYVFB0MTAwAAAAAP//woZBhmAzYBEDA4M1mQ4kBNwYGBg2YLETFEvlcM0MDAwAAAAA//9CxqBoO41F0woGBgZtGjkUHVgyMDDsxOKGzQwMDLwMDAwMAAAAAP//gmFbBgaG92iKrjMwMHjTyaHoAJR3QEUgsnvuMTAwaAAAAAD//wJJ+mLx0cQBcigy4GFgYFiJ4i4Gho8AAAAA//8ClRIgBjJIYmBgmE+i4UoMDAyG0BAA5X5Q9LFDi7aPDAwMrxgYGC5DS5NHJJoNKqVApQYDAwMDAwAAAP//AuHDSAU5KGkQC2C5/BKJlcdJBgaGZgYGBlMS7AoH62Vg+A8AAAD//wJxQGWlPwm1DUjzcQprORjew8DA4EmkvfoMDAyBAAAAAP//IqUtASrsexkYGOxwyN9gYGC4Bq04QG2Hr9CkIQItgUDtDVDlgQ2ASoFCaJmMGzAwMAAAAAD//yIWt+IIoR0MDAzJDAwMWkQapMfAwJCLlAyR8S8GBoYCvLoZGBgAAAAA//8ihEHJBeQodMNXQVtplABQHtiOxeyFOA1lYGAAAAAA///Ch0G5/QKWahlUK1EThGEpc0GtOD4MSxgYGAAAAAD//8KHQY0PqvicCAAqc9FruNkY+hgYGAAAAAD//8LXeAE1uGGghYGBIZ6GDgYVqe4MDAwLkMReYqhiYGAAAAAA///CV0qwMjAwpECrbFB7ghgAKhVALSxxaJR+gJYaoGr1G5FmgCouUN6ZhSHDwMAAAAAA//+iFo6BNgfR2yMwDOoKgarZIIosZGBgAAAAAP//ohSDGim3SawszpBQWaACBgYGAAAAAP//IheD0v46HA4CpUdQm+EIAwPDVWj5ik3dNJItZ2BgAAAAAP//IgeDesWgUEJ3AChXuzAwMAiiGQpKz6C+GnrLC4RB5TAX0Y5gYGAAAAAA//8iB9eiWboV1k4lAoC6XqA+ILJ+UCYjDjAwMAAAAAD//yIHg2oomGVtZBoyD6r/H7RRQxxgYGAAAAAA//8iFxtAHU4JcCa2kwkHDAwMAAAAAP//omTkBx8IZWBgUIWO8IDSKXUAAwMDAAAA//+iBZ6AlkazqGYJAwMDAAAA//+iNpbDUYSR3JDBChgYGAAAAAD//yJ3IAQX4MQhAarmKQcMDAwAAAAA//+iBd5HswqCgYEBAAAA//+iRaYDhSaorFaGdlA7qWYyAwMDAAAA//8DAKPFPN8Ci54TAAAAAElFTkSuQmCC"/>
                                </svg>


                                <span class="form__label-name">Wifi</span>
                                <svg class="form__label-check" viewBox="0 0 512 512" title="check-circle">
                                    <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z" />
                                </svg>
                                </label>
                                <!-- </button> -->

                                <label class="form__label" for="tv">

                                <!-- tabindex="0" -->
                                <input class="form__input" type="checkbox" name="utilities[]" id="tv" value="TV">
                                <!-- <button type="button"> -->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="40" viewBox="0 0 50 50">
                                    <image id="tv" x="3" y="5" width="44" height="40" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAoCAYAAACFFRgXAAAE/klEQVRYhczFMQkAIBAAwDOAER7BBNawfwbhwcEKLobwliuYqDhI7PcPAg0dA+sCAAD//2zQsQqDYBSD0QO1VMSpa6e+/3spumqhaIvyQxwEh0DucMOXFODtguyPDiOGFOhTptwTZnzxwS9+ye+a3CO7im6o8UCToVo88Y5eAS3+fqLCDgAA//+COfguAwNDCVSRNgMDgw5UkzjUEnoDUEA9YWBguATFdxgYGEoZGBhsAQAAAP//dJIxCsAwDANvDRla6JS39ZN9WBtol5ItHGiNwVh4kk/2ausBroUrDTfgAHZgCxV1zV5a6hKSkhGGtO0/SZiCr/cBb5JyduBOemPh4wSYAAAA//+COZgNTxCCLAT5FoQHEnAzMDAwAAAAAP//YhokmYsYIMnAwMAAAAAA//+ChfBQAPMYGBguAwAAAP//AjFAme78kHAyAwMDAAAA//8aSkmCgYGBgQEAAAD//xpKDu5gYGA4BQAAAP//AjGGSpI4wcDA8B8AAAD//xpKIfyKgYGBAQAAAP//GlppmIGBAQAAAP//GloOZmBgAAAAAP//GloOZmBgAAAAAP//GloOZmBgAAAAAP//GloOZmBgAAAAAP//GloOZmBgAAAAAP//GloOZmBgAAAAAP//GloOZmBgAAAAAP//GloOZmBgAAAAAP//GloOZmBgAAAAAP//GloOZmBgAAAAAP//GloOZmBgAAAAAP//GloOZmBgAAAAAP//GloOZmBgAAAAAP//hNixCQAgEAPArGDj/kOKtRzExkYhCI9YWHn5mQ7X4U8/MVp4COKbIf8s71Gfvt15H8JfW6kiu9zHedRXytgF88VMYePcu1aSHAAAAP//wubgmQwMDO4MDAxy0LEFUgBoBAiEQUMDIAByOMjT5HR2QaNNoAEUUOfiCni4ioHhDwAAAP//wmYQaAwLFIJnGBgYHjMwMDyEjgyBhq5AoQEa+AD5FjQYAgoJ0GAItuEuXAA0PAWKEdgwFcguEJaCjjwpQEedQAFmA8UQwMDwAQAAAP//gkXbYO4igZKeIbiLxMDwBwAAAP//XNjBCcAgEETRqSAnhdwtwv5LSENBHqwgCqIoCrvzT393mEK6hzh7Vat67LZSU3h+kzz1oY5hD8fjYPgvREhCadBQGMYrLSUxmsyZFQZSdeedYW9+SeYCAAD//4INBj5lYGCYAx0EBCUJkKXEApDBIMeAohgEbkHTMMhs0LgcKFBAo5Wg6AeNXOIbFkMHoOGxc9ABFH8GBgYdAAAAAP//Ahn6AZrbYQCUm68yMDA8gGoA+fg+1PewATzQwB4oHYNyPwyAQvMa1NOEAMgToLEyUIyAYgmEQTEGGgsGYRloGtaExiYEMDD8BgAAAP//AjlYBaoA5ihco4eEAMjBtxkYGNTJ1I8LgGIElDRVGBgY3gMAAAD//6KmwSAH38QiXs/AwHCQzKINFTAwMAAAAAD//6ImxuXgk9B8gpzsyAMMDAwAAAAA//+iZtUMchSoNEAHoMIfBEDpnzLAwMAAAAAA//+iJJpAxRkoo4AKelCBD/K8FgMDw1xoaQACoOLSDcquZmBguIGUV0AVEWmAgYEBAAAA//8iF4PmQ2CTLuTifpItZ2BgAAAAAP//IjeEQSG1Glr0gapuEA0KMVCRByplYIU+bNYIVISBKh9QUQWKEVC7AFS+kgYYGBgAAAAA//8DAFULx+RpA9nYAAAAAElFTkSuQmCC"/>
                                </svg>

                                <span class="form__label-name">TV</span>
                                <svg class="form__label-check" viewBox="0 0 512 512" title="check-circle">
                                    <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z" />
                                </svg>
                                </label>
                                <!-- </button> -->

                                <label class="form__label" for="kitchen">
                                <!-- tabindex="0" -->
                                <input class="form__input" type="checkbox" name="utilities[]" id="kitchen" value="Kitchen">

                                <!-- <button> -->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="40" viewBox="0 0 50 50">
                                    <image id="kitchen-set" width="50" height="50" xlink:href="data:img/png;base64,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"/>
                                </svg>


                                <span class="form__label-name">Kitchen</span>
                                <svg class="form__label-check" viewBox="0 0 512 512" width="100" title="check-circle">
                                    <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z" />
                                </svg>
                                <!-- </button> -->
                                </label>

                                <label class="form__label" for="washing_machine">

                                <!-- tabindex="0" -->
                                <input class="form__input" type="checkbox" name="utilities[]" id="washing_machine" value="Washing machine">
                                <!-- <button type="button"> -->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="40" viewBox="0 0 50 50">
                                    <image id="washing-machine" x="4" width="42" height="50" xlink:href="data:img/png;base64,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"/>
                                </svg>


                                <span class="form__label-name">Washing machine</span>
                                <svg class="form__label-check" viewBox="0 0 512 512" title="check-circle">
                                    <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z" />
                                </svg>
                                </label>
                                <!-- </button> -->

                                <label class="form__label" for="free_parking_on_premises">

                                <!-- tabindex="0" -->
                                <input class="form__input" type="checkbox" name="utilities[]" id="free_parking_on_premises" value="Free parking on premises">
                                <!-- <button type="button"> -->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="40" viewBox="0 0 50 50">
                                    <image id="free_parking" data-name="free parking" x="1" y="1" width="48" height="48" xlink:href="data:img/png;base64,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"/>
                                </svg>

                                <span class="form__label-name">Free parking on premises</span>
                                <svg class="form__label-check" viewBox="0 0 512 512" title="check-circle">
                                    <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z" />
                                </svg>
                                </label>
                                <!-- </button> -->

                                <label class="form__label" for="paid_parking_on_premises">
                                <!-- tabindex="0" -->
                                <input class="form__input" type="checkbox" name="utilities[]" id="paid_parking_on_premises" value="Paid parking on premises">

                                <!-- <button> -->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="40" viewBox="0 0 50 50">
                                    <image id="paid_parking" data-name="paid parking" x="13" width="24" height="50" xlink:href="data:img/png;base64,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"/>
                                </svg>


                                <span class="form__label-name">Paid parking on premises</span>
                                <svg class="form__label-check" viewBox="0 0 512 512" width="100" title="check-circle">
                                    <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z" />
                                </svg>
                                <!-- </button> -->
                                </label>

                                <label class="form__label" for="air_conditioning">

                                <!-- tabindex="0" -->
                                <input class="form__input" type="checkbox" name="utilities[]" id="air_conditioning" value="Air conditioning">
                                <!-- <button type="button"> -->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="40" viewBox="0 0 50 50">
                                    <image id="air-conditioner_1_" data-name="air-conditioner (1)" x="3" width="44" height="50" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAyCAYAAAAnWDnqAAAJJElEQVRogWKgAfBlYGD4D8WJVDWfgYEBAAAA//+iNhaCOvQaAwPDcShbgWqWMDAwAAAAAP//ojaWgDpSGcoHsU2pZgkDAwMAAAD//2KighldUIdtYmBgkIeyRRgYGESh8twMDAwzoOKzKLKJgYEBAAAA//+iFJciORaWbv8xMDAYMTAwCEPZP6DiW6F0N9mWMjAwAAAAAP//ohTvgjoCBOSQHG2IlJ5B2BaqBsS+RbalDAwMAAAAAP//ohRbQB1xGMo3Y2BgeMXAwKDFwMDAC2WHQuXWQNU6k20pAwMDAAAA//+iBo6EOmQDlM/MwMDACGWzQumpUDWFFFnIwMAAAAAA//+iFk6DOmgZFgN7oHK1FFvGwMAAAAAA///ChVUZGBguMDAwvGVgYIgiUk8V1GEgB8IALFOCQpgY4M7AwPCcgYHhLtbikIGBAQAAAP//woZB0fmCgYHhIwMDw02ohSpE6gWVACD1agwMDDxQ9hIi9cIy6VMGBoZHDAwM3xkYGPhRVDAwMAAAAAD//4LhDGhZqQflI1er6KGGD/AhlQqwMlmfSL3lSCWOCRJbkYGBYRo4thgYGAAAAAD//wLhXqTiBxYir6FVKwiAfPuZSEu1oWY4QUPnCbRMJgY8ZGBg+ANVCHLDF6QKB4IZGJYAAAAA//+ChSCo4AeBJjQF7NA0DGKLE2GrDlRtEpGOhAEWqL5OBgYGUO2L7IbJUEUTGBgY/gMAAAD//wIxTkMZsUgGLISKaUL5IDY8SohwMKmttGCkKp0Lyt4MTWIg4AcWY2C4DwAAAP//AnE4kKrWYwwMDOpQRTIMDAxsUDYoqkCZgRAAeRA5SYAyrzER+o4ipVkQkIXSoMYUrDY9xMDAIA4AAAD//0LWNAUpGuajGQjL/XOhoYALgBwJUmeJVFWDqmlcABSasDyEbmczkntWgEUYGBgAAAAA//8CYVBttBMq8ZuBgeEqAwNDHRYbQGIwAyqwyPszMDBcgsqDcjmsmHrAwMAQg0V9JpJ5E7HIg0quy0iNp2MMDAx8AAAAAP//AklUQgW80TToMjAw5EFrL1j6BjUVd0DVg9oJ9tBQhXkYZHgHNJmBQCNUHUjuFLTJCSo1biOJSSF5eDk0r6BXGqA2yn8GBoZpAAAAAP//AnFAoQXi+EBD4gBaLoVhUCsLFM0gYACtBZHlc3DHPNjDyGpBecIRKgfKWCdw2HmSgYEhmYGBwRrMZ2CYBgAAAP//AmlAThIgDKphdjMwMBRDC31QjZXAwMDwF0vNBQoNUGg5IImBWmmu0GoWOb2DSpAb0BiAAVBSgNkLik2QXRoMDAzZDAwMW6C1LcLxDAz8AAAAAP//Qg4FUFTBQhAbAFXZIMtgBoAMRQdZWEKpBos6WAsPhGdCMx8uAEoykJKGgYEBAAAA//8iBytBy0j01hksE4HaxgHQJAZT14KkbjqSOlhTgDjAwMAAAAAA//+iBMMKdxAQgPJh1TkyWAuVg8XeHCgfVLuRBhgYGAAAAAD//yIXg3rFIEvzoXxQCQPi22AxEFYep0P5oB4IiG9OsuUMDAwAAAAA//8it9cMCx1QRkTm/8KiFiaGSw/xgIGBAQAAAP//ogSDQmkVlA0qX0H87VgMhCUBUKcABCahVcPEAwYGBgAAAAD//yIHgyoKWMYBFT0wAOoCgcRAhT+o4AdVyaB2LEgM1EyEgcVI1S2s0iAOMDAwAAAAAP//QsZiDAwMnAR0gioHWHHUjkUeVLOhF2ugNgo6gHWdiOnrgeoJSNOWgYEBAAAA//+C4aVIBtyHNkTCoC02EPCAttZA8geh7QQQAJWn6MUTaCwtDtrEBFUCMAAKTZBeWI0ISsProGaCOggg+0AAlLxA1TQoVmBdNBDeysDAwAYAAAD//0IONVCh3wDtYWCrJr8ilQKgGuwimnwInlAC1XzIakF2wPqJoCYpLDDQ8UtoZRUN5jMwdAIAAAD//0KORvTaBDRIApIDtUORxxNgaRCEQSEhDe1hg/igrlUZ0ngEqLoF9YBhjgSFPqgaB3kelgdgYxigNgMotkBjdaBGFTIAxc5/BgaGBQAAAAD//wJxQHU/LLRADW5QgxlbjwHU7UHutsAa9zAAqulAXXSQPKhxBKtMQNEN8gQ6QG7vYuvNgGpLUDIA9QtBau4yMDBIAgAAAP//QlYAK25AeCOaZtiYA6hpiZwu0QEoc4DUgXrNsFDB1wkF5RFQaQFSB2rIIwPkDgWkCcDAwAAAAAD//4JhUIjBfAFKbyCAXGLAGveEAKh7BVJrhTRWDBsIxAdgSQoGYI0hUDKFdQoWMzAwcAAAAAD//wIJggp7kEA1kgZQQn+P1GYFpS3QcBQhAOuEIjsY1L8jBGDtZVDbGOTYT9AKBwYgBQMDw1kAAAAA//+ChR4sCYDavcg5FTTOQAog18Gg2IQFGmgwEdkNRVA1/QwMDP8BAAAA//8CMeahKQClU1BxAupPgQCoTCUmWkEANpCC7GBYLBECz6CdBxAAlc+gzAqq+hFuY2DYCgAAAP//ghkCyrGgXoYLlA+SBBUzMDZKrxUPgPWaQY4EZSgQGzTORgyADeKAAPJQFag/Byq5JjIwMDAAAAAA///Chb9B+3CwMQGQJmIArH8ICmnYOBts5IYQgJUqoK4QCIPYgiiaGBgYAAAAAP//woVBjRdQJYDc5iUEUqDqFyEphI1nEDs2DOoEg9T/hDYHUAEDAwMAAAD//yKEYbUQIRAItWgfFoWwmhE0zkAZYGBgAAAAAP//ogYGpXuQg0BddVwA1sgBtQnIBwwMDAAAAAD//6IUg1ppIIdch/JBGQxUuoBo0KALiA2bhNlPSdcIDBgYGAAAAAD//6IUw+beQAA02gMrfkDVMSjDwPiw3gaIDRoKIw8wMDAAAAAA//+idCb0HJQGFeqwMhTmSFD6h3kGVOLASgvQGBl5gIGBAQAAAP//ohSDHAUbSwaNk4FGe0Czn6CKA9SDAYmDxnZh4xOgGpX8QGJgYAAAAAD//6IWhjU1QQ17kMNA8xuw0AY1NZHVkA8YGBgAAAAA//+iVlcb1pWHhR6oKHsHZcOSCrYhANIAAwMDAAAA//+iBQY1/mHpGFvDnXzAwMAAAAAA//8DAJbHFHZN2BowAAAAAElFTkSuQmCC"/>
                                </svg>


                                <span class="form__label-name">Air conditioning</span>
                                <svg class="form__label-check" viewBox="0 0 512 512" title="check-circle">
                                    <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z" />
                                </svg>
                                </label>
                                <!-- </button> -->

                                <label class="form__label" for="dedicated_workspace">

                                <!-- tabindex="0" -->
                                <input class="form__input" type="checkbox" name="utilities[]" id="dedicated_workspace" value="Dedicated workspace">
                                <!-- <button type="button"> -->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="40" viewBox="0 0 50 50">
                                    <image id="dedicated_workspace" data-name="dedicated workspace" y="6" width="50" height="38" xlink:href="data:img/png;base64,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"/>
                                </svg>


                                <span class="form__label-name">Dedicated workspace</span>
                                <svg class="form__label-check" viewBox="0 0 512 512" title="check-circle">
                                    <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z" />
                                </svg>
                                </label>
                                <!-- </button> -->
                            </div>
                        </div>

                        <h4 class="mg-top-30">Do you have any standout amenities?</h4>
                        <div class="questions">
                            <div class="form__group cust__form__group">
                                <label class="form__label" for="pool">

                                <!-- tabindex="0" -->
                                <input class="form__input" type="checkbox" name="amenities[]" id="pool" value="Pool">
                                <!-- <button type="button"> -->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="40" viewBox="0 0 50 50">
                                    <image id="swimming-pool" x="1" width="48" height="50" xlink:href="data:img/png;base64,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"/>
                                </svg>


                                <span class="form__label-name">Pool</span>
                                <svg class="form__label-check" viewBox="0 0 512 512" title="check-circle">
                                    <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z" />
                                </svg>
                                </label>
                                <!-- </button> -->

                                <label class="form__label" for="hot_tub">

                                <!-- tabindex="0" -->
                                <input class="form__input" type="checkbox" name="amenities[]" id="hot_tub" value="Hot tub">
                                <!-- <button type="button"> -->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="40" viewBox="0 0 50 50">
                                    <image id="hot_tub" data-name="hot tub" width="50" height="50" xlink:href="data:img/png;base64,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"/>
                                </svg>


                                <span class="form__label-name">Hot tub</span>
                                <svg class="form__label-check" viewBox="0 0 512 512" title="check-circle">
                                    <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z" />
                                </svg>
                                </label>
                                <!-- </button> -->

                                <label class="form__label" for="patio">
                                <!-- tabindex="0" -->
                                <input class="form__input" type="checkbox" name="amenities[]" id="patio" value="Patio">

                                <!-- <button> -->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="40" viewBox="0 0 50 50">
                                    <image id="patio" width="50" height="50" xlink:href="data:img/png;base64,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"/>
                                </svg>

                                <span class="form__label-name">Patio</span>
                                <svg class="form__label-check" viewBox="0 0 512 512" width="100" title="check-circle">
                                    <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z" />
                                </svg>
                                <!-- </button> -->
                                </label>

                                <label class="form__label" for="bbq_grill">

                                <!-- tabindex="0" -->
                                <input class="form__input" type="checkbox" name="amenities[]" id="bbq_grill" value="BBQ grill">
                                <!-- <button type="button"> -->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="40" viewBox="0 0 50 50">
                                    <image id="bbq_grill" data-name="bbq grill" x="8" width="34" height="50" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACIAAAAyCAYAAAA5kQlZAAAHPElEQVRYhWIgE0gwMDA0MDAwXGdgYPiPhO8wMDD0MjAwKJBkLgMDAwAAAP//IgfXIln8iYGBYRMDA8NkBgaGNQwMDG+R5PqINpyBgQEAAAD//yKEHRkYGCKQFB2BWrKWgYFBA4dmeQYGhvlQdRcZGBi4CFrEwMAAAAAA///Ch+ORfDeNgYFhB5SdQKR+H6h6UPQJ4VXJwMAAAAAA///ChdOghvQgGQjCXiSaYwrV14RXFQMDAwAAAP//woZToZoXQvnToXxfMsxaANXrjVcVAwMDAAAA//9Cxx5QjaAcAQIHoHyQOKlgF9FRycDAAAAAAP//QseVUM1G0FwAYvuTYc5uqN5EolQzMDAAAAAA///ChkHZEZYmSA5SBgaG7VC9KUTrYGBgAAAAAP//wob3Qg0CJVJSwR6o3mSSNDIwMAAAAAD//0LHsDRBTsLcAtULynGkAQYGBgAAAAD//0LG7VCDwsgwBRaKUWS5gIGBAQAAAP//gmFQgQMyaAMZemG5A5YmeJDkWBgYGPiQ+CA5VgwTGBgYAAAAAP//gmFQRQUyjJdER8DSBKgUBoEyBgaGrwwMDNxQ/gOoQ0HAEloXOWGYwsDAAAAAAP//guEv0JqTFABLE8i5A8R/BWWbQPlxUP45KJ8RwxIGBgYAAAAA//9iYmBg4IT6AJTtiAWgNAHK2kkMDAxzkDSBHPGbgYEBZO4bqJgulD4BpZUwLGFgYAAAAAD//wJhaahLQdU7MQAWEplYFMtA5Vqh/IlQviySQ29j6GJgYAAAAAD//wIlps9QNjHpA5QmnKElJqgewQVADSeY+SDADqVFGRgY2DA0MTAwAAAAAP//guF/DAwMJwk4Aj13YANBDAwMR6EWgsA2BgaG1UiOAKUTzHqLgYEBAAAA//+CYVi9ggvAygmyKjCCgIGBAQAAAP//gmFNqEVtWDRhyx0gACoTZjIwMNxnYGC4C8U3GRgYLkNzIIh/lYGB4Qa0KQECHAwMDGegjaVCuEkMDAwAAAAA//9CxrDKypWBgcEN2qjZjFZOIIN5ULlnDAwMT6E0LgxSCwICUIeC0iWiUmVgYAAAAAD//0LGoGwM8gFyqxyEbXE4/CxSmUEOAJkdDdbIwMAAAAAA//+CpWoQ+M7AwPCNgYHhHTRnZEFzRwgDA0M2AwMDM5JaUOIGtVlAYBmB9AWzB1S2gMAvBgYGcSi7EVzOMDD0AQAAAP//QtcAMvAWlA1yBHroIOOHULX41ODCf6Hp5COYz8BwHgAAAP//QncIrKl4D0pvpCDoiQUrGBgY/gMAAAD//0JWLAfNCc0U1MTkgFUMDAz/AQAAAP//AjH0GRgYHmEJxlg6OeQ+AwPDFwAAAAD//wLVhK8ZGBhEoE3DH1BHTGFgYPjJwMBgSAeH/GdgYNgOAAAA//8CpWZQTgEBKWgiAgFQ4wVUyIEqLxAbVD8QyhmkAFAAgOwFJQcGBgaGXgAAAAD//wIRyjjKD3rh6wwMDAwAAAAA//9CxvzQkg9Eg2riPKR+L8wXMDXkYuRm42Go+doMDAwMAAAAAP//IoRBjR6QYlDBQ00AKhZA5oIKTQYGBgYGAAAAAP//IgaD0glIE6jlBWo8gdIOqPIiBYBCwpiBgWEqUpQj6i8GBgYAAAAA//8iFoPGSUC1KHq6AZWsf3CkJ9AgDraSF9QdBaVLBGBgYAAAAAD//8LakMUDcqCjQ4uh7VxQQwiU2K6hNYpBFrpDC0hQzavCwMBgx8DA4MDAwHAQw3wGBgYAAAAA//8iFc9CysawVjqs64AOQE0J5CyPu/PGwMAAAAAA//8iFSNnN1AzAJRucAGQA5GHOEDsfVgVMzAwAAAAAP//IgXDWuj5SAaDWun4AKiGfgJVAIoS7IUiAwMDAAAA//9Cbo8QArDRAVDzEBYdoHZFLo5OEyzB6kD5ndB0AkovqJ05BgYGAAAAAP//IgXD2q4gABp2IKXkBfWdYI4DdUtRAQMDAwAAAP//IgWD0sNpKBuUS15CQwKEQa0vdAwSB4UcqDUHCg0QALXOQG1WVMDAwAAAAAD//yI2akCVE0gtaJQRBECFGqiPAmougipFbHEPcgjI8aCKFDRWWw5tEoJokENBDoQABgYGAAAAAP//IhbDRgtAANRkILVC/ABNT9VQPiidIAADAwMAAAD//yI2REA9NliFlQ6lQa170BAEvkIRZimoOfgCSXwuAwODPZzHwMAAAAAA//8iFoMKJ1j9AjIQlBtIAaDoAekDDYmBPAJyIGwcl4GBgYEBAAAA//8iBoPSAUhjDJIvZ5CgHzaADGp4wQBs5BICGBgYAAAAAP//gvU18AFQzw8ElkDTBwiAJgWIBaBBIBBQRNKAOjbPwMAAAAAA//8iBgcghQJobAPEJsYDMADqmIG6nSB9XVBPgNgVcBUMDAwAAAAA//8iFoOyLaxjFEiGftDUCWjECJaLUCcJGBgYAAAAAP//AwC8gpdu2rxojgAAAABJRU5ErkJggg=="/>
                                </svg>


                                <span class="form__label-name">BBQ grill</span>
                                <svg class="form__label-check" viewBox="0 0 512 512" title="check-circle">
                                    <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z" />
                                </svg>
                                </label>
                                <!-- </button> -->

                                <label class="form__label" for="outdoor_dining_area">

                                <!-- tabindex="0" -->
                                <input class="form__input" type="checkbox" name="amenities[]" id="outdoor_dining_area" value="Outdoor dining area">
                                <!-- <button type="button"> -->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="40" viewBox="0 0 50 50">
                                    <image id="out_door_dining_area" data-name="out door dining area" width="50" height="50" xlink:href="data:img/png;base64,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"/>
                                </svg>


                                <span class="form__label-name">Outdoor dining area</span>
                                <svg class="form__label-check" viewBox="0 0 512 512" title="check-circle">
                                    <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z" />
                                </svg>
                                </label>
                                <!-- </button> -->

                                <label class="form__label" for="firepit">
                                <!-- tabindex="0" -->
                                <input class="form__input" type="checkbox" name="amenities[]" id="firepit" value="Firepit">

                                <!-- <button> -->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="40" viewBox="0 0 50 50">
                                    <image id="fire_pit" data-name="fire pit" x="2" width="46" height="50" xlink:href="data:img/png;base64,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"/>
                                </svg>


                                <span class="form__label-name">Firepit</span>
                                <svg class="form__label-check" viewBox="0 0 512 512" width="100" title="check-circle">
                                    <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z" />
                                </svg>
                                <!-- </button> -->
                                </label>

                                <label class="form__label" for="pool_table">

                                <!-- tabindex="0" -->
                                <input class="form__input" type="checkbox" name="pool_table" id="pool_table" value="Pool table">
                                <!-- <button type="button"> -->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="40" viewBox="0 0 50 50">
                                    <image id="pool_table" data-name="pool table" x="3" width="44" height="50" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAyCAYAAAAnWDnqAAAIMklEQVRogWJkgAAhBgaGagYGBhUofyAAyC2/GBgYNjMwMCzE6gAGBgYAAAAA///EzkEJACAQAMFBvApGsYgx7GuIK6H4NoD/hdmKhoWCxP40fN3AQMd8ChwAAAD//wLhmwwMDJfo7jzcQAvq+CQMJQwMDAAAAAD//6zSIQqAYBiD4Sd5jR8Ek2DxQl7Q49iMBk8g2OSDFfu/uIUXttUMFc5pecOKIRM9ODHG66UbL6bwi3Vhx5FbNCw/ID4AAAD//wIliQ8MDAyfoUliPgMDwzMGBoZ3UINEGBgYJKGO/go1mFLwj4GBwQBqyBWomSAxXQYGBicGBgYHaNIUx7CIgYEBAAAA//8CORgE2KEhCPI1SCPIwSDAx8DA8B4aEtQEnQwMDPYMDAwWSIYuY2Bg0IeyORgYGH4jyYE8uJGBgeEJAAAA//8ChSpy0gD5VAZJISiJgNQwU9nB1xkYGMzRxDgZGBi+41A/mYGB4Q8DA8MPAAAAAP//gjkY5mgQuAWlQel2IgMDQwMDA8NfKjt4AdRx+5HEQMkS5GhsAFTsrmNgYFgEAAAA//+CJQkQAJWBIA+sgkaJK7Q8bKSyY2EAlPRApRMovR5kYGCwZGBgOIlD7WUGBoYYBgaG1wAAAAD//0JPEiBHy0LTsg80SdAK3GVgYOBmYGCYBs3cXNBSCRf4z8DAwAgAAAD//0IOYVChDUrDVnjSEj4AKuxBxeMiEpMQKMmBACg2QaGODWiAY56B4SYAAAD//0JOw7DyEJR2SQVN0OjsgRaTOmSYwQuNWWwAJM7HwMAgAgAAAP//QnYwDJBa1oLKzVpoCAszMDAcZ2Bg2EmGg/EBSJJlYPgPAAAA///C5mBSASgJgYqc01CN0xkYGKRo4OB/DAwMDAAAAAD//6KGg0EOBBXymxgYGFKhxQ+oxqQmgDiYgeE/AAAA//+ihoNBNSEosyhD0zKo7MbacKEAQBzMwPAfAAAA//9CLiUoAaAiClRC0ApAHMzA8B8AAAD//6JGCNMDQBzMwMAAAAAA//8aWg5mYPgPAAAA//8aWg5mYPgPAAAA//8aSg7+z8DA8B8AAAD//xpaIczAwAAAAAD//xpaDmZg+A8AAAD//6Kmg0E1XgoDAwO1ikpkAHEwA8N/AAAAAP//opaDWxgYGI5C6bdIfTZqAZCD/zIwMPwHAAAA//+ihoNBHUfQIAyohSbBwMBwhIGBYRcNHPyfgYGBAQAAAP//ooaDQS00UKiCuucgMJvKQwIgAHLnPwYGhv8AAAAA//+i1MGgsYN6qKNBHUVQtwrU+OFnYGBoo5JjQQCShhkY/gMAAAD//6LEwYLQUAW1I8IZGBiyoEkB1OOIYmBgqGRgYJhDVQczMPwHAAAA//+iJEeD+nygPqA/lA/qVoFGbmD9QNDYxg5oyUEdBzMwMAAAAAD//6IkhEEjnaBQBnVtQMAL2i8EJQ8Q8IDSoM4lNcA/BgaG/wAAAAD//yI3hEF9twzoQOJjBgaG89CRHFC3/SEDA8MpBgYGRwYGhovQ9rINUo+EHADJdAwM/wEAAAD//yInhD0ZGBiKoYOGoN7sMWi/DhTioKEm0EAeyLGgRj2oPAbx90ItJReAksQPBgaGXwAAAAD//yLHEDnogCEodEEA1D3/xMDAcA/KnwcdOAQN9IFAFzTZgNMgmQBUBjMxMDAwAwAAAP//AnFAUaYGTX8fCXTRQY4FjYuBDABVFi7QwQ8QvxUasm+g/ElQPqiMBvFB3Sd8AFQcgnrcILAUWnPCAGhk6BsDA8NzAAAAAP//IsXBoPGtL1CDE2HNPWgxFo/EB8nHwapSBgaG7UjyoDE1XACfg0HF5wIGBoZpAAAAAP//IiXTlUJ9GQTlg3I/qNIAOQ4EQJ5djST/ADrYB0rzIABKQiAHgTIrKD2SAkAV0W4GBoZ/AAAAAP//IiUNg0boRaHjYSAASg4gPqzY8oa21EDjZCAAKqdB5itA+QFQmpyRUNC4hyADA4MgAAAA//8iJYQXMzAw+EGTxX1oJloDTVJPoYPioKgETQeAijZQqCyBZkYQBg0DgByNPFBNLIBUHAwM/wEAAAD//0J2MKxFdBuPKaHQYU9QqIFyP6imi4Q6BjQeARrjXc/AwKDJwMAwEzQ8ysDAsIKBgcEI6mFQMsEFQElKEY/8PwYGBgYAAAAA//9CdjDI5yBHb4Gmt7nQCgEdgEINGSxH44OqZ2SwFYpxAVAGBjVRQUkMVBpgA5AQZmBgBAAAAP//gqVh2NwcqFkISiugmukcAwNDBxnRRywA2QNKWlOgMQQaRMdXVv9jYGBgAAAAAP//Qg5hUBoEORxUxYIKflCXB1S0gKajQIZSG4CKKlAS4oHaC0oyhjgsAc2xfGBgYGADAAAA//9CHx8GAdj0LajKBRVboHYuNaa7kEEIdDpNHcleUG2Iq7gDeUqDgYFBFQAAAP//Qp+UAWFYFQsCoEYOrEKgJgBlQvT5DHyTMqCYbmRgYMgFAAAA//+CJQmQz0CZDpSOQCH7EupI0DgvyBMnoFFCjS4VqEwFZTBQzboHqYMJ6q3AWnSg0gd5qg1UnMozMDD8BgAAAP//AjlYAJp+QZrqoPNnsD4ZaAYUVLVSe+oWVJ2DpgFATQJYRgONKYMaTiAASh6gZIDsybsMDAwMAAAAAP//AuHnDAwM+6joGEoBqPYExW4hhkEMDAwAAAAA//8CRQfIl6AW2COoLwZq+QEIgGLaFtoQAi1DQAUMDAwAAAAA//+C5X7QXDKouYh1QpqOAJQsQeMa2Mt/BgYGAAAAAP//AwCVYFFgTXqRhgAAAABJRU5ErkJggg=="/>
                                </svg>


                                <span class="form__label-name">Pool table</span>
                                <svg class="form__label-check" viewBox="0 0 512 512" title="check-circle">
                                    <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z" />
                                </svg>
                                </label>
                                <!-- </button> -->

                                <label class="form__label" for="indoor_fireplace">

                                <!-- tabindex="0" -->
                                <input class="form__input" type="checkbox" name="amenities[]" id="indoor_fireplace" value="Indoor fireplace">
                                <!-- <button type="button"> -->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="40" viewBox="0 0 50 50">
                                    <image id="inside_fireplace" data-name="inside fireplace" width="50" height="50" xlink:href="data:img/png;base64,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"/>
                                </svg>


                                <span class="form__label-name">Indoor fireplace</span>
                                <svg class="form__label-check" viewBox="0 0 512 512" title="check-circle">
                                    <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z" />
                                </svg>
                                </label>
                                <!-- </button> -->

                                <label class="form__label" for="piano">

                                <!-- tabindex="0" -->
                                <input class="form__input" type="checkbox" name="amenities[]" id="piano" value="Piano">
                                <!-- <button type="button"> -->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="40" viewBox="0 0 50 50">
                                    <image id="piano" y="3" width="50" height="44" xlink:href="data:img/png;base64,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"/>
                                </svg>


                                <span class="form__label-name">Piano</span>
                                <svg class="form__label-check" viewBox="0 0 512 512" title="check-circle">
                                    <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z" />
                                </svg>
                                </label>
                                <!-- </button> -->

                                <label class="form__label" for="exercise_equipment">

                                <!-- tabindex="0" -->
                                <input class="form__input" type="checkbox" name="amenities[]" id="exercise_equipment" value="Exercise equipment">
                                <!-- <button type="button"> -->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="40" viewBox="0 0 50 50">
                                    <image id="exercise_equipment" data-name="exercise equipment" width="50" height="50" xlink:href="data:img/png;base64,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"/>
                                </svg>


                                <span class="form__label-name">Exercise equipment</span>
                                <svg class="form__label-check" viewBox="0 0 512 512" title="check-circle">
                                    <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z" />
                                </svg>
                                </label>
                                <!-- </button> -->

                                <label class="form__label d-none" for="lake_access">
                                <!-- tabindex="0" -->
                                <input class="form__input" type="checkbox" name="amenities[]" id="lake_access" value="Lake access">

                                <!-- <button> -->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="40" viewBox="0 0 50 50">
                                    <image id="beach_access" data-name="beach access" width="50" height="50" xlink:href="data:img/png;base64,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"/>
                                </svg>


                                <span class="form__label-name">Lake access</span>
                                <svg class="form__label-check" viewBox="0 0 512 512" width="100" title="check-circle">
                                    <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z" />
                                </svg>
                                <!-- </button> -->
                                </label>

                                <label class="form__label" for="beach_access">
                                <!-- tabindex="0" -->
                                <input class="form__input" type="checkbox" name="amenities[]" id="beach_access" value="Beach access">

                                <!-- <button> -->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="40" viewBox="0 0 50 50">
                                    <image id="beach_access" data-name="beach access" width="50" height="50" xlink:href="data:img/png;base64,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"/>
                                </svg>


                                <span class="form__label-name">Beach access</span>
                                <svg class="form__label-check" viewBox="0 0 512 512" width="100" title="check-circle">
                                    <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z" />
                                </svg>
                                <!-- </button> -->
                                </label>

                                <label class="form__label d-none" for="ski_in_out">
                                <!-- tabindex="0" -->
                                <input class="form__input" type="checkbox" name="amenities[]" id="ski_in_out" value="Ski-in/out">

                                <!-- <button> -->
                                <div class="utili-icon">
                                    <img src="{{ asset('assets/images/amenities/paid-parking.png') }}" alt="" class="img-fluid">
                                </div>

                                <span class="form__label-name">Ski-in/out</span>
                                <svg class="form__label-check" viewBox="0 0 512 512" width="100" title="check-circle">
                                    <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z" />
                                </svg>
                                <!-- </button> -->
                                </label>

                                <label class="form__label" for="outdoor_shower">
                                <!-- tabindex="0" -->
                                <input class="form__input" type="checkbox" name="amenities[]" id="outdoor_shower" value="Outdoor shower">

                                <!-- <button> -->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="40" viewBox="0 0 50 50">
                                    <image id="outdoor_shower" data-name="outdoor shower" x="3" width="44" height="50" xlink:href="data:img/png;base64,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"/>
                                </svg>


                                <span class="form__label-name">Outdoor shower</span>
                                <svg class="form__label-check" viewBox="0 0 512 512" width="100" title="check-circle">
                                    <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z" />
                                </svg>
                                <!-- </button> -->
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="step6" data-bind="fadeVisible: step() == 6, css: {current : step() == 6}, hasfocus: step() == 6">
                    <div class="image-upload-step center-wrap">
                        <h2 class="mg-btm-30">Upload Multiple Images</h2>
                        <div id="imageInputsContainer" class="image-upload-wrap">
                            <!-- Add initial four image inputs -->
                            @php $a = 0; @endphp
                            @for ($i = 0; $i < 4; $i++)
                                <div class="image-upload-block">
                                    <input type="file" class="img-upld-btn" id="imageInput{{ $i }}" name="imageInput[]" onchange="previewAndUploadImage(this, imagePreviews{{ $i }})">
                                    <div id="imagePreview{{ $i }}" class="image-preview"></div>
                                    <input type="hidden" name="imageInputs[]" id="imagePreviews{{ $i }}" value="">
                                </div>
                                @php $a++; @endphp
                            @endfor
                        </div>
                        <div class="d-flex justify-content-center">
                            <button class="add-img" onclick="addImageInput({{ $a }})">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" aria-hidden="true" role="presentation" focusable="false" style="display: block; fill: none; height: 16px; width: 16px; stroke: currentcolor; stroke-width: 4; overflow: visible;"><path d="M2 16h28M16 2v28"></path></svg>
                            Add More Images</button>
                        </div>
                    </div>
                </div>

                <div class="step7" data-bind="fadeVisible: step() == 7, css: {current : step() == 7}, hasfocus: step() == 7">
                    <div class="pay-info-step center-wrap">
                        <h2 class="mg-btm-30">Payment details</h2>
                        <!-- <p>Your address is only shared with guests after they’ve made a reservation.</p> -->
                        <div class="d-flex">
                            <div class="form-control mg-rgt-25">
                                <input type="text" name="pay_first_name" placeholder="First name" value="">
                            </div>
                            <div class="form-control">
                                <input type="text" name="pay_last_name" placeholder="Last name" value="">
                            </div>
                        </div>
                        <div class="form-control">
                            <input type="text" name="email" placeholder="Email" value="">
                        </div>
                        <div class="form-control">
                            <input type="text" name="phone" placeholder="Mobile" value="">
                        </div>
                        <input type="hidden" name="amount" id="payment-amount">
                        <input type="hidden" name="card_number" value="16545165">
                        
                        <!--<div class="d-flex">-->
                            <!--<div class="form-control mg-rgt-25">-->
                            <!--    <input class="card-width" type="text" name="card_number" placeholder="Card number" value="">-->
                            <!--</div>-->
                            <!--<div class="form-control mg-rgt-25 mmyy-width">-->
                            <!--    <input class="" type="text" name="" placeholder="MM / YY" value="">-->
                            <!--</div>-->
                            <!--<div class="form-control cvv-width">-->
                            <!--    <input class="" type="text" name="" placeholder="CVV" value="">-->
                            <!--</div>-->
                            <div id="card-element"></div>
                            <div id="card-errors" role="alert"></div>
                        <!--</div>-->
                        
                        <div class="form-check inp-bor">
                            <input class="form-check-input" type="checkbox" value="" id="">
                            <label class="form-check-label" for="">Securely save my information for 1-click checkout</a>
                            </label>
                            <label><div class="sublabel">Pay faster on Clevertone powered by Algorip and everywhere Link is accepted.</div></label>
                        </div>
                        <div id="card-errors" role="alert"></div>

                        <div class="form-check mg-top-20">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                                I agree to the <a href="/terms-conditions" style="text-decoration: underline;">terms and conditions.</a>
                            </label>
                        </div>
                    </div>
                </div>


                <div class="step8" data-bind="fadeVisible: step() == 8, css: {current : step() == 8}, hasfocus: step() == 8">
                    <div class="center-wrap">
                        <h2>Yay! It’s time to publish.</h2>
                        <p>Here's what we'll show to guests. Before you publish, make sure to review the details.</p>                    
                        <div id="paymentDetails" class="payment-summry-step">

                        </div>
                    </div>
                </div>
                <!-- end steps -->

                <div class="bottom-wrap">
                    <!-- progresss start -->
                    <div class="progresss">
                        <div class="input-bar"></div>
                        <div class="progress-barr"></div>
                    </div>
                    <!-- progresss end -->

                    <!-- progresss CTA start -->
                    <div class="steps-navigation">
                        <div class="step-prev-btn">
                            <button class="prev" data-bind="visible: step() > 1, click: prev">previous</button>
                        </div>
                        <div class="step-next-btn">
                            <button class="next" data-bind="visible: step() < 8, click: next">next</button>
                        </div>
                        <button id="done" data-bind="visible: step() == 8, click: next" onclick="landlordForm(event)">pay</button>
                    </div>
                    <!-- progresss CTA end -->
                </div>

            </div>
        </form>

</section>

<!-- gmap api -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/knockout/3.4.2/knockout-debug.js'></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxIW59jj0o7f2MxlCtRW0MSwfFibhXAlM&libraries=places&callback=initAutocomplete" async defer></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
// Map
let map;

function initAutocomplete() {
    map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: -33.8688, lng: 151.2195},
        zoom: 13,
        mapTypeId: 'roadmap',
        mapTypeControl: false
    });

    var input = document.getElementById('pac-input');
    var searchBox = new google.maps.places.SearchBox(input);
    map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

    map.addListener('bounds_changed', function() {
        searchBox.setBounds(map.getBounds());
    });

    var markers = [];

    searchBox.addListener('places_changed', function() {
        var places = searchBox.getPlaces();

        if (places.length == 0) {
            return;
        }

        markers.forEach(function(marker) {
            marker.setMap(null);
        });
        markers = [];

        var bounds = new google.maps.LatLngBounds();
        places.forEach(function(place) {
            if (!place.geometry) {
                console.log("Returned place contains no geometry");
                return;
            }

            // Extract the country, state, city, and district from the selected place
            let country = '';
            let state = '';
            let city = '';
            let district = '';
            for (const component of place.address_components) {
                const componentType = component.types[0];
                switch (componentType) {
                    case 'country':
                        country = component.long_name;
                        break;
                    case 'administrative_area_level_1':
                        state = component.long_name;
                        break;
                    case 'locality':
                    case 'postal_town':
                        city = component.long_name;
                        break;
                    case 'administrative_area_level_2': // District
                        district = component.long_name;
                        break;
                }
            }

            // Display the location details
            document.getElementById('country').value = country;
            document.getElementById('state').value = state;
            document.getElementById('city').value = city;
            document.getElementById('district').value = district;

            var icon = {
                url: place.icon,
                size: new google.maps.Size(71, 71),
                origin: new google.maps.Point(0, 0),
                anchor: new google.maps.Point(17, 34),
                scaledSize: new google.maps.Size(25, 25)
            };

            markers.push(new google.maps.Marker({
                map: map,
                icon: icon,
                title: place.name,
                position: place.geometry.location
            }));

            if (place.geometry.viewport) {
                bounds.union(place.geometry.viewport);
            } else {
                bounds.extend(place.geometry.location);
            }
        });
        map.fitBounds(bounds);
    });
}
</script>
<script>
// Calculate Payment
function calculatePayment(doors, monthlyRevenue, propertyType, includeMaintenance, propertyStatus) {
    let totalFee = 0;
    const setupFeePercentage = 50; // 50% one-time setup fee

    if (propertyStatus === 'vacant') {
        return {
            softwareFee: 0,
            managementFee: 0,
            managementPercentage: 0,
            setupFee: 0,
            setupFeePercentage: 0,
            maintenanceFee: 0,
            total: 250
        };
    }

    let managementFee = 0;
    let managementPercentage = 0;
    let setupFee = 0;
    let maintenanceFee = 0;

    if (monthlyRevenue > 0) {
        if (propertyType === 'LTR') {
            managementPercentage = 5; // 5%
            managementFee = monthlyRevenue * (managementPercentage / 100);
        } else if (propertyType === 'STR') {
            managementPercentage = 15; // 15%
            managementFee = monthlyRevenue * (managementPercentage / 100);
        }
        setupFee = monthlyRevenue * (setupFeePercentage / 100);

        if (includeMaintenance) {
            maintenanceFee = monthlyRevenue * 0.15; // 15%
        }

        totalFee += managementFee + maintenanceFee;
    }

    totalFee += setupFee;

    return {
        softwareFee: 0,
        managementFee,
        managementPercentage,
        setupFee,
        setupFeePercentage,
        maintenanceFee,
        total: Math.max(totalFee, 250)
    };
}

function calculateAndDisplayPayment() {
    const doors = parseInt(document.getElementById('doors').value, 10);
    const monthlyRevenue = parseFloat(document.getElementById('monthlyRevenue').value);
    const propertyType = document.querySelector('[name="str"]:checked').value;
    const propertyStatus = document.querySelector('[name="loanType"]:checked').value;
    const includeMaintenance = document.getElementById('includeMaintenance').checked;

    const fees = calculatePayment(doors, monthlyRevenue, propertyType, includeMaintenance, propertyStatus);
    console.log(fees);
    document.getElementById('paymentDetails').innerHTML = `
        <div class="left_div">
            <img class="img-fluid" src="images/`+imagePreviews0.value+`">
        </div>
        <div class="right_div">
            <div class="total-amt-step">Total Payment: $` + fees.total.toFixed(2) + `</div><input type="hidden" name="total_amount" value="`+ fees.total.toFixed(2) +`">
            <p>Software Fee: $`+fees.softwareFee.toFixed(2)+`</p>
            <p>Management Fee: $`+fees.managementFee.toFixed(2)+` (${fees.managementPercentage}%)</p>
            <p>Setup Fee (One-time `+fees.setupFeePercentage+`%): $`+fees.setupFee.toFixed(2)+`</p>
            <p>Maintenance Fee (15%): $`+fees.maintenanceFee.toFixed(2)+`</p>
        </div>
    `;
    document.getElementById('payment-amount').value = fees.total.toFixed(2);
}
</script>
<script>
    // Entire Form Submit 
    function landlordForm(e){
        e.target.setAttribute('onclick', '');
        var formData = new FormData(landlord_form);
        $.ajax({
            type: 'POST',
            url: "{{ route('landlord-form') }}",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
               console.log(data);
               submitLandlordForm();
            },
            error: function (error) {
                console.log(error);
            }
        });
    }
</script>

<script>
    function addImageInput(a) {
        var container = document.getElementById('imageInputsContainer');
        var newInputBlock = document.createElement('div');
        newInputBlock.className = 'image-upload-block';
        newInputBlock.innerHTML = `
            <input type="file" class="img-upld-btn" id="imageInput`+a+`" name="imageInput[]" onchange="previewAndUploadImage(this, imagePreviews`+a+`)">
            <div id="imagePreview`+a+`" class="image-preview"></div>
            <input type="hidden" name="imageInputs[]" id="imagePreviews`+a+`" value="">
        `;
        container.appendChild(newInputBlock);
    }

    function previewAndUploadImage(input, img) {
        var file = input.files[0];
        if (file) {
            var reader = new FileReader();
            reader.onload = function(e) {
                var previewContainer = input.nextElementSibling;
                previewContainer.innerHTML = `
                    <img src="${e.target.result}" alt="Image Preview" style="width: 300px; height: auto;">
                    <button class="img-remove" onclick="removePreview(this)"></button>
                `;
                uploadImage(file, img); // Ensure this line is uncommented to upload after preview
                input.classList.add('d-none');
            };
            reader.readAsDataURL(file);
        }
    }
    function removePreview(button) {
        var previewContainer = button.parentNode;
        var inputBlock = previewContainer.parentNode;
        var input = inputBlock.querySelector('input[type="file"]');
        input.value = ''; // Clear the input in case the user wants to upload a file again
        previewContainer.innerHTML = ''; // Clear the preview container
    }

    function uploadImage(file, img) {
        var formData = new FormData();
        formData.append('image', file);
        formData.append('_token', '{{ csrf_token() }}');

        $.ajax({
            url: "{{ route('image.upload') }}",
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                console.log('Success:', response);
                img.value = response.imageName;
            },
            error: function (xhr, status, error) {
                console.error('Error:', error);
                alert('Failed to upload image.');
            }
        });
    }
</script>
<script src="https://js.stripe.com/v3/"></script>
<script>
    // Stripe payment
    var stripe = Stripe('{{ env('STRIPE_KEY') }}');
    var elements = stripe.elements();
    var card = elements.create('card');
    card.mount('#card-element');

    card.addEventListener('change', function(event) {
        var displayError = document.getElementById('card-errors');
        if (event.error) {
            displayError.textContent = event.error.message;
        } else {
            displayError.textContent = '';
        }
    });

    var form = document.getElementById('landlord_form');
    function submitLandlordForm(){
        stripe.createToken(card).then(function(result) {
            if (result.error) {
                var errorElement = document.getElementById('card-errors');
                errorElement.textContent = result.error.message;
            } else {
                var tokenInput = document.createElement('input');
                tokenInput.setAttribute('type', 'hidden');
                tokenInput.setAttribute('name', 'stripeToken');
                tokenInput.setAttribute('value', result.token.id);
                form.appendChild(tokenInput);
                form.submit();
            }
        });
    }
</script>

<script>
    var vm = {
  name : ko.observable(""),
  email : ko.observable(""),
  phone : ko.observable(""),
  subject : ko.observable(""),
	step : ko.observable(1),
	prev : function(){
		var step = vm.step()-1;
	 	if(step >= 1){
	 		vm.step(step);
	 		$('.progress-barr').animate({
	 			width: step * 12.5 + '%'
	 		});
	 	}
	},
	next : function(){
		var step = vm.step()+1;
        if(step <= 8){
	 		vm.step(step);
	 		$('.progress-barr').animate({
	 			width: step * 12.5 + '%'
	 		});
	 	}
    	if(step == 8){
    	    calculateAndDisplayPayment();
    	}
	}
}

ko.bindingHandlers.fadeVisible = {
    init: function(element, valueAccessor) {
        // Initially set the element to be instantly visible/hidden depending on the value
        var value = valueAccessor();
        $(element).toggle(ko.unwrap(value)); // Use "unwrapObservable" so we can handle values that may or may not be observable
    },
    update: function(element, valueAccessor) {
        // Whenever the value subsequently changes, slowly fade the element in or out
        var value = valueAccessor();
        ko.unwrap(value) ? $(element).fadeIn() : $(element).hide();
    }
};


ko.applyBindings(vm);
</script>
<script>
$(document).ready(function() {
    $('.minus').click(function () {
        var $input = $(this).parent().find('input');
        var count = parseInt($input.val()) - 1;
        count = count < 1 ? 1 : count;
        $input.val(count);
        $input.change();
        return false;
    });
    $('.plus').click(function () {
        var $input = $(this).parent().find('input');
        $input.val(parseInt($input.val()) + 1);
        $input.change();
        return false;
    });
});
</script>
@endsection