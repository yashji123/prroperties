<?php

use App\Http\Controllers\PaymentSubscriptionController;
use App\Http\Controllers\Saas\Admin\ContactMessageController;
use App\Http\Controllers\Saas\OwnerAuthController;
use App\Http\Controllers\Saas\SubscriptionController as SaasSubscriptionController;
use App\Http\Controllers\Saas\Admin\CorePagesController;
use App\Http\Controllers\Saas\Admin\FaqController;
use App\Http\Controllers\Saas\Admin\FeatureController;
use App\Http\Controllers\Saas\Admin\GatewayController;
use App\Http\Controllers\Saas\Admin\HomeSettingController;
use App\Http\Controllers\Saas\Admin\HowItWorkController;
use App\Http\Controllers\Saas\Admin\PackageController;
use App\Http\Controllers\Saas\Admin\PolicyController;
use App\Http\Controllers\Saas\Admin\SubscriptionController;
use App\Http\Controllers\Saas\Admin\TestimonialController;
use App\Http\Controllers\Saas\FrontendController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SubscriberController;



//image controller
Route::post('/upload-image', 'App\Http\Controllers\ImageController@store')->name('image.upload');


Route::post('/subscribe', [SubscriberController::class, 'store']);


Route::group(['middleware' => ['version.update', 'addon.update', 'isFrontend']], function () {
    // register owner
    Route::get('owner-register', [OwnerAuthController::class, 'owner_register_form'])->name('owner.register.form');
    Route::post('owner-register', [OwnerAuthController::class, 'owner_register_store'])->name('owner.register.store');


    // policy
    Route::get('terms-conditions', [FrontendController::class, 'termsConditions'])->name('terms-conditions');
    Route::get('privacy-policy', [FrontendController::class, 'privacyPolicy'])->name('privacy-policy');
    Route::get('cookie-policy', [FrontendController::class, 'cookiePolicy'])->name('cookie-policy');
    Route::get('about', [FrontendController::class, 'about'])->name('about');
    Route::get('contact', [FrontendController::class, 'contact'])->name('contact');
    
Route::prefix('blog')->group(function () {
    Route::get('/', [FrontendController::class, 'blog'])->name('blog');
    Route::get('how-to-choose-the-right-real-estate-agent', [FrontendController::class, 'blogd'])->name('blogd');
    Route::get('Why-Location-Is-so-Important-in-Real-Estate', [FrontendController::class, 'blogg'])->name('blogg');
    Route::get('8-Reasons-Why-Real-Estate-Is-a-Good-Investment', [FrontendController::class, 'blogh'])->name('blogh');
    Route::get('The-Pros-and-Cons-of-Buying-a-Fixer-Upper', [FrontendController::class, 'blogj'])->name('blogj');
    Route::get('The-10-Best-Neighbourhoods-Live-in-Los-Angeles', [FrontendController::class, 'blogk'])->name('blogk');
    Route::get('Staging-a-house-15-home-staging-tips-from-real-estate-experts', [FrontendController::class, 'blogl'])->name('blogl');
    Route::get('6-Things-to-consider-before-renting-a-flat', [FrontendController::class, 'blogm'])->name('blogm');
});


//plan selection 
Route::get('plan', [FrontendController::class, 'plan'])->name('plan');
//software
Route::get('softwareplan', [FrontendController::class, 'softwareplan'])->name('softwareplan');
//promanamagment
Route::get('promanagment', [FrontendController::class, 'promanagment'])->name('promanagment');

   // Landlord
Route::get('hosts', [FrontendController::class, 'landlord'])->name('landlord');

//partner
Route::get('partner', [FrontendController::class, 'partner'])->name('partner');

// Tenants
Route::get('explore', [FrontendController::class, 'tenants'])->name('tenants');

// Thank you
    Route::get('thank-you', [FrontendController::class, 'thankyou'])->name('thank-you');

//PAYMENTS & COLLECTIONS
 Route::get('payments-and-collections', [FrontendController::class, 'paymentscollections'])->name('payments-&-collections');

//prroperties for corporate
Route::get('prroperties-for-corporate', [FrontendController::class, 'prropertiescorporate'])->name('prroperties-for-corporate');
//PRROPERTIES VS. VACATION RENTALS PAGE

Route::get('prroperties-vs-vacation-rentals', [FrontendController::class, 'prropertiesvacation'])->name('prroperties-vs-vacation-rental');

//MARKETING & RENTALS
Route::get('marketing-and-rentals', [FrontendController::class, 'marketingrentals'])->name('marketing-&-rentals');

//CO-RENT
Route::get('co-rent', [FrontendController::class, 'corent'])->name('co-rent');

//partner
Route::get('partners', [FrontendController::class, 'partners'])->name('partners');

// Faq
Route::get('faq', [FrontendController::class, 'faq'])->name('faq');

// T&C
Route::get('terms', [FrontendController::class, 'terms'])->name('terms');

Route::get('management', [FrontendController::class, 'management'])->name('management');
Route::get('maintenance', [FrontendController::class, 'maintenance'])->name('maintenance');
Route::get('software', [FrontendController::class, 'software'])->name('software');

Route::get('construction-design', [FrontendController::class, 'development'])->name('development');



Route::get('relocation', [FrontendController::class, 'relocation'])->name('relocation');
Route::get('invest', [FrontendController::class, 'investment'])->name('investment');
Route::get('career', [FrontendController::class, 'career'])->name('career');


Route::get('investment_term', [FrontendController::class, 'investment_term'])->name('investment_term');


Route::get('Terms_of_Service', [FrontendController::class, 'Terms_of_Service'])->name('Terms_of_Service');
Route::get('Tenancy_Agreement', [FrontendController::class, 'Tenancy_Agreement'])->name('Tenancy_Agreement');

Route::get('Construction', [FrontendController::class, 'Construction'])->name('Construction');

Route::get('Advisor_services', [FrontendController::class, 'Advisor_services'])->name('Advisor_services');

Route::get('Service_Provider_Terms', [FrontendController::class, 'Service_Provider_Terms'])->name('Service_Provider_Terms');

Route::get('pricing', [FrontendController::class, 'pricing'])->name('pricing');
Route::get('payment', [FrontendController::class, 'payment'])->name('payment');

Route::get('Prroperties_Maintenance', [FrontendController::class, 'Prroperties_Maintenance'])->name('Prroperties_Maintenance');








 
});

Route::group(['prefix' => 'payment'], function () {
    Route::post('/subscription', [PaymentSubscriptionController::class, 'checkout'])->name('payment.subscription.checkout');
    Route::match(array('GET', 'POST'), 'subscription/verify', [PaymentSubscriptionController::class, 'verify'])->name('payment.subscription.verify');
});

// admin
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth', 'admin']], function () {

    Route::group(['prefix' => 'packages', 'as' => 'packages.'], function () {
        Route::get('/', [PackageController::class, 'index'])->name('index');
        Route::get('get-info', [PackageController::class, 'getInfo'])->name('get.info'); // ajax
        Route::post('store', [PackageController::class, 'store'])->name('store');
        Route::get('destroy/{id}', [PackageController::class, 'destroy'])->name('destroy');
        Route::get('owner', [PackageController::class, 'ownerPackage'])->name('owner');
        Route::post('assign', [PackageController::class, 'assignPackage'])->name('assign');
        Route::get('partner', [PackageController::class, 'partner'])->name('partner');
    });

    Route::group(['prefix' => 'message', 'as' => 'message.'], function () {
        Route::get('/', [ContactMessageController::class, 'index'])->name('index');
        Route::get('get-info', [ContactMessageController::class, 'getInfo'])->name('get.info'); // ajax
        Route::post('reply', [ContactMessageController::class, 'reply'])->name('reply');
    });

    Route::group(['prefix' => 'subscriptions', 'as' => 'subscriptions.'], function () {
        Route::get('orders', [SubscriptionController::class, 'orders'])->name('orders');
        Route::get('orders/get-info', [SubscriptionController::class, 'orderGetInfo'])->name('orders.get.info'); // ajax
        Route::post('orders/payment-status-change', [SubscriptionController::class, 'orderPaymentStatusChange'])->name('order.payment.status.change');
        Route::get('orders-payment-status', [SubscriptionController::class, 'ordersStatus'])->name('orders.payment.status'); // ajax
    });

    Route::group(['prefix' => 'setting', 'as' => 'setting.'], function () {

        Route::get('terms-conditions', [PolicyController::class, 'termsConditions'])->name('terms-conditions');
        Route::get('privacy-policy', [PolicyController::class, 'privacyPolicy'])->name('privacy-policy');
        Route::get('cookie-policy', [PolicyController::class, 'cookiePolicy'])->name('cookie-policy');

        Route::group(['prefix' => 'gateway', 'as' => 'gateway.'], function () {
            Route::get('/', [GatewayController::class, 'index'])->name('index');
            Route::post('store', [GatewayController::class, 'store'])->name('store');
            Route::get('get-info', [GatewayController::class, 'getInfo'])->name('get.info');
            Route::get('delete/{gateway}', [GatewayController::class, 'delete'])->name('delete');
        });
    });

    Route::group(['prefix' => 'home-setting', 'as' => 'home-setting.'], function () {
        Route::get('section', [HomeSettingController::class, 'section'])->name('section');
    });

    Route::group(['prefix' => 'feature', 'as' => 'feature.'], function () {
        Route::get('/', [FeatureController::class, 'index'])->name('index');
        Route::post('store', [FeatureController::class, 'store'])->name('store');
        Route::get('get-info', [FeatureController::class, 'getInfo'])->name('get.info');
        Route::delete('destroy/{id}', [FeatureController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => 'how-it-work', 'as' => 'how-it-work.'], function () {
        Route::get('/', [HowItWorkController::class, 'index'])->name('index');
        Route::post('store', [HowItWorkController::class, 'store'])->name('store');
        Route::get('get-info', [HowItWorkController::class, 'getInfo'])->name('get.info');
        Route::delete('destroy/{id}', [HowItWorkController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => 'core-page', 'as' => 'core-page.'], function () {
        Route::get('/', [CorePagesController::class, 'index'])->name('index');
        Route::post('store', [CorePagesController::class, 'store'])->name('store');
        Route::get('get-info', [CorePagesController::class, 'getInfo'])->name('get.info');
        Route::delete('destroy/{id}', [CorePagesController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => 'testimonials', 'as' => 'testimonials.'], function () {
        Route::get('/', [TestimonialController::class, 'index'])->name('index');
        Route::post('store', [TestimonialController::class, 'store'])->name('store');
        Route::get('get-info', [TestimonialController::class, 'getInfo'])->name('get.info');
        Route::delete('destroy/{id}', [TestimonialController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => 'faq', 'as' => 'faq.'], function () {
        Route::get('/', [FaqController::class, 'index'])->name('index');
        Route::post('store', [FaqController::class, 'store'])->name('store');
        Route::get('get-info', [FaqController::class, 'getInfo'])->name('get.info');
        Route::delete('destroy/{id}', [FaqController::class, 'destroy'])->name('destroy');
    });
});

// owner
Route::group(['prefix' => 'owner', 'as' => 'owner.', 'middleware' => ['auth', 'owner']], function () {
    Route::group(['prefix' => 'subscription', 'as' => 'subscription.'], function () {
        Route::get('/', [SaasSubscriptionController::class, 'index'])->name('index');
        Route::post('order', [SaasSubscriptionController::class, 'order'])->name('order');
        Route::get('get-plan', [SaasSubscriptionController::class, 'getPlan'])->name('get_plan');
        Route::get('get-currency-by-gateway', [SaasSubscriptionController::class, 'getCurrencyByGateway'])->name('get.currency');
        Route::post('cancel', [SaasSubscriptionController::class, 'cancel'])->name('cancel');
    });
});
