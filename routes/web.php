<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CommonController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserEmailVerifyController;
use App\Http\Controllers\VersionUpdateController;
use App\Models\Language;
use Carbon\Carbon;
use Illuminate\Support\Facades\App;

//yash

use App\Http\Controllers\ChargeController;
use App\Http\Controllers\BankAccountController;


// emailverfication
Route::get('/verify_email/{email}', function ($email) {
    // Assume 'users' table and 'email_verify' column for simplicity

    // Validate and sanitize the email input
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Update the database to set email_verify = 1 for the given email
        DB::table('users')
            ->where('email', $email)
            ->update(['email_verfiy' => 1]);

        // Redirect to a success page or some other URL
        return redirect()->to('https://prroperties.com/plan?email='.$email);
    } else {
        // Handle the error scenario
        return response()->json(['error' => 'Invalid email format'], 400);
    }
})->name('verify-email');

use App\Http\Controllers\ImageController;
//image upload of ads
Route::post('/upload-image', 'App\Http\Controllers\ImageController@store')->name('image.upload');


// Akash
use App\Http\Controllers\Saas\LandlordForm;
Route::post('/landlord_form', 'App\Http\Controllers\Saas\LandlordForm@store')->name('landlord-form');



// use Illuminate\Support\Facades\Artisan;
// use Illuminate\Support\Facades\Response;

// Route::get('/create-symlink', function () {
//     // Ensure the symlink does not already exist and create it
//     $target = storage_path('app/public');
//     $link = public_path('storage');
//     if (!file_exists($link)) {
//         symlink($target, $link);
//         return Response::make('Symlink created', 200);
//     }

//     return Response::make('Symlink already exists', 400);
});

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//  $redirectUrls = [
//     "/tag/futuretrends/",
// "/property/luxury-family-home-2/",
// "/invoice/invoice-152/",
// "/why-we-love-real-estate/",
// "/invoice/invoice-72/",
// "/invoice/invoice-137/",
// "/invoice/invoice-158/",
// "/feature/barbeque/",
// "/product/life-coaching-session/",
// "/invoice/invoice-71/",
// "/invoice/invoice-34/",
// "/tag/propertymanagement/",
// "/invoice/invoice-63/",
// "/2023/",
// "/invoice/invoice-38/",
// "/feature/wifi/",
// "/2023/06/",
// "/invoice/invoice-25/",
// "/privacy/",
// "/feature/gym/",
// "/invoice/invoice-111/",
// "/invoice/invoice-98/",
// "/grid-full-width/",
// "/invoice/invoice-5/",
// "/partner/envato-3/",
// "/tag/smartbuildings/",
// "/invoice/invoice-165/",
// "/invoice/invoice-78/",
// "/invoice/invoice-52/",
// "/invoice/invoice-36/",
// "/partner/envato-6/",
// "/area/brickel/",
// "/invoice/invoice-69/",
// "/invoice/invoice-46/",
// "/listings-elementor-sidebar/",
// "/login-register/",
// "/tag/realestate/",
// "/property/darby-ave/",
// "/author/prroperties/",
// "/list-layout-full-width/",
// "/invoice/invoice-102/",
// "/invoice/invoice-112/",
// "/invoice/invoice-23/",
// "/invoice/invoice-120/",
// "/invoice/invoice-64/",
// "/invoice/invoice-91/",
// "/invoice/invoice-35/",
// "/invoice/invoice-110/",
// "/invoice/invoice-135/",
// "/invoice/invoice-8/",
// "/the-future-of-property-management-embracing-technology-and-innovation/",
// "/category/business/",
// "/2016/01/",
// "/with-half-map/",
// "/invoice/invoice-15/",
// "/invoice/invoice-57/",
// "/invoice/invoice-96/",
// "/invoice/invoice-60/",
// "/invoice/invoice-167/",
// "/invoice/invoice-142/",
// "/invoice/invoice-2/",
// "/agency/all-american-real-estate/",
// "/feature/dryer/",
// "/area/brooklyn/",
// "/area/coconut-grove/",
// "/invoice/invoice-58/",
// "/invoice/invoice-150/",
// "/invoice/invoice-22/",
// "/terms-and-conditions/",
// "/invoice/invoice-149/",
// "/invoice/invoice-99/",
// "/invoice/invoice-88/",
// "/invoice/invoice-106/",
// "/invoice/invoice-59/",
// "/invoice/invoice-145/",
// "/product/monthly-membership/",
// "/invoice/invoice-41/",
// "/invoice/invoice-26/",
// "/invoice/invoice-68/",
// "/skills-that-you-can-learn-in-the-real-estate-market/",
// "/category/construction/",
// "/invoice/invoice-103/",
// "/invoice/invoice-151/",
// "/2016/",
// "/invoice/invoice-31/",
// "/invoice/invoice-18/",
// "/partner/envato/",
// "/invoice/invoice-40/",
// "/feature/outdoor-shower/",
// "/invoice/invoice-141/",
// "/invoice/invoice-116/",
// "/your-dream-property-awaits-instantly-qualify-and-match-with-prroperties/",
// "/2016/03/the-ultimate-cheat-sheet-on-real-estate/",
// "/feature/laundry/",
// "/invoice/invoice-93/",
// "/state/florida/",
// "/invoice/invoice-9/",
// "/state/new-york/",
// "/property-management-terms/",
// "/grid-full-width-4-cols/",
// "/invoice/invoice-105/",
// "/city/california/",
// "/tag/houzez/",
// "/invoice/invoice-47/",
// "/tag/apartment/",
// "/invoice/invoice-128/",
// "/invoice/invoice-51/",
// "/invoice/invoice-13/",
// "/construction/",
// "/031/",
// "/account/login",
// "/invoice/invoice-86/",
// "/project-advisor-terms-and-conditions/",
// "/invoice/invoice-144/",
// "/invoice/invoice-85/",
// "/invoice/invoice-55/",
// "/area/wynwood/",
// "/pages/press-media",
// "/invoice/invoice-73/",
// "/invoice/invoice-12/",
// "/construction-service-provider-terms/",
// "/home-default/",
// "/wpm@0.0.290@9b91aff1w4418c6afpfb9312f0m353e3d83/web-pixel-shopify-custom-pixel@0533/sandbox/pages/investment",
// "/invoice/invoice-139/",
// "/property/",
// "/home-with-caption-form/",
// "/invoice/invoice-24/",
// "/invoice/invoice-45/",
// "/invoice/invoice-50/",
// "/invoice/invoice-83/",
// "/invoice/invoice-90/",
// "/invoice/invoice-48/",
// "/invoice/invoice-161/",
// "/tag/house-for-families/page/2/",
// "/invoice/invoice-27/",
// "/invoice/invoice-131/",
// "/agent/vincent-fuller/",
// "/invoice/invoice-132/",
// "/14-common-misconceptions-about-business-development/",
// "/area/andersonville/",
// "/invoice/invoice-140/",
// "/pages/maintenance",
// "/pages/property-management",
// "/2016/03/skills-that-you-can-learn-in-the-real-estate-market/",
// "/invoice/invoice-126/",
// "/area/northeast-los-angeles/",
// "/invoice/invoice-159/",
// "/feature/swimming-pool/",
// "/property/family-home-for-sale/",
// "/invoice/invoice-62/",
// "/invoice/invoice-14/",
// "/invoice/invoice-114/",
// "/invoice/invoice-124/",
// "/invoice/invoice-61/",
// "/invoice/invoice-166/",
// "/invoice/invoice-134/",
// "/invoice/invoice-28/",
// "/15-best-blogs-to-follow-about-real-estate/",
// "/wpm@0.0.244@0efe444cwaace0ba9p2f14d49em4ffa2433/sandbox/pages/contact-us",
// "/invoice/invoice-92/",
// "/invoice/invoice-32/",
// "/blogs/news/",
// "/pages/construction-service-provider-terms",
// "/invoice/invoice-53/",
// "/wpm@0.0.275@e4335517w5ed8d260p080a7602mf88703fc/web-pixel-shopify-custom-pixel@0525/sandbox/products/514-n-california-ave-beaumont-ca-92223",
// "/invoice/invoice-115/",
// "/testimonials/testimonial-1/",
// "/pages/booking-products",
// "/property/office-in-downtown/",
// "/testimonials/testimonial-2/",
// "/invoice/invoice-80/",
// "/invoice/invoice-29/",
// "/2016/01/understand-the-real-estate-market/",
// "/understand-the-real-estate-market/",
// "/property/family-home/",
// "/favorite-properties/",
// "/invoice/invoice-76/",
// "/invoice/invoice-156/",
// "/invoice/invoice-97/",
// "/invoice/invoice-95/",
// "/wpm@0.0.291@27ebbe9cwc6551374p82226fa4m8497296f/web-pixel-shopify-custom-pixel@0533/sandbox/pages/pricing",
// "/invoice/invoice-122/",
// "/invoice/invoice-4/",
// "/invoice/invoice-125/",
// "/cash-flow-101-how-to-start-making-money-as-a-landlord-in-2023/",
// "/invoice/invoice-17/",
// "/create-listing/",
// "/frequently-asked-questions/",
// "/book-now-terms/",
// "/property/contemporary-apartment-3/",
// "/blogs/news/9-ways-a-property-management-company-makes-your-life-easier",
// "/10-quick-tips-about-business-development/",
// "/invoice/invoice-39/",
// "/inquiry-form/",
// "/invoice/invoice-154/",
// "/home-revolution-slider/",
// "/home-side-search/",
// "/with-tabs/page/2/",
// "/invoice/invoice-155/",
// "/with-tabs/page/3/",
// "/with-tabs/?tab=for-sale",
// "/with-tabs/?tab=for-rent",
// "/with-tabs/",
// "/home-with-map/",
// "/agents-2/",
// "/invoice/invoice-37/",
// "/partner/envato-5/",
// "/partner/envato-4/",
// "/invoice/invoice-67/",
// "/compare-properties/?ids",
// "/partner/envato-2/",
// "/compare-properties/",
// "/office-membership-terms/",
// "/apartments-in-new-york/?tab=for-sale",
// "/apartments-in-new-york/?tab=for-rent",
// "/invoice/invoice-138/",
// "/apartments-in-new-york/",
// "/construction-customer-software-terms/",
// "/terms-and-conditions-2/",
// "/pages/junk-removal",
// "/invoice/invoice-87/",
// "/agencies/",
// "/tenant/",
// "/business-solutions/",
// "/grid-default/page/2/",
// "/property/retail-space/",
// "/grid-default/",
// "/area/brookside/",
// "/invoice/invoice-16/",
// "/win-win-partnerships-collaborating-with-prroperties-as-a-landlord/",
// "/invoice/invoice-130/",
// "/pages/office-membership-terms",
// "/with-featured-on-top/page/6/",
// "/author/unused571/",
// "/with-featured-on-top/",
// "/grid-full-width-2-cols/page/2/",
// "/grid-full-width-2-cols/",
// "/with-list-layout/",
// "/pages/real-estate",
// "/invoice/invoice-75/",
// "/pages/investor",
// "/invoice/invoice-3/",
// "/invoice/invoice-119/",
// "/favorite-properties/?ids",
// "/property-type/virtual-office/",
// "/property-type/apartment/",
// "/invoice/invoice-33/",
// "/home-overlay-advanced-search/",
// "/category/real-estate/",
// "/invoice/invoice-121/",
// "/home-image-banner/",
// "/invoice/invoice-7/",
// "/agent/yash/",
// "/invoice/invoice-6/",
// "/invoice/invoice-107/",
// "/home-splash/",
// "/with-header-map/",
// "/invoice/invoice-54/",
// "/invoice/invoice-56/",
// "/learn-the-truth-about-real-estate-industry/",
// "/listings-with-elementor/page/2/?tab=for-sale&tax=property_status",
// "/listings-with-elementor/?tab=for-sale&tax=property_status",
// "/listings-with-elementor/?tab=for-rent&tax=property_status",
// "/listings-with-elementor/",
// "/invoice/invoice-70/",
// "/invoice/invoice-153/",
// "/agency/",
// "/area/hyde-park/",
// "/feature/microwave/",
// "/city/lisbon/",
// "/tag/home-decor/",
// "/property/luxury-family-home-3/",
// "/home-with-video/",
// "/membership-info/",
// "/select-your-package/",
// "/invoice/invoice-127/",
// "/tag/luxury/",
// "/property-type/work/",
// "/pages/investMENT",
// "/10-quick-tips-about-real-estate/",
// "/typography/",
// "/invoice/invoice-157/",
// "/collections/residential",
// "/collections/residential/residential-properties?page=3",
// "/invoice/invoice-104/",
// "/invoice/invoice-82/",
// "/invoice/invoice-148/",
// "/pages/construction-customer-software-terms",
// "/insights/",
// "/board/",
// "/prroperties/",
// "/invoice/invoice-81/",
// "/agency/modern-house-real-estate/",
// "/invoice/invoice-123/",
// "/account",
// "/invoice/invoice-168/",
// "/pages/broker",
// "/area/midtown/",
// "/prroperties-title-home-sweet-home-11-surprising-ways-to-personalize-your-rental-and-make-it-your-own/",
// "/with-parallax/",
// "/agency/country-house-real-estate/",
// "/tag/real-estate/page/2/",
// "/tag/real-estate/",
// "/invoice/invoice-43/",
// "/pages/investment",
// "/invoice/invoice-118/",
// "/018/",
// "/pages/about",
// "/invoice/invoice/",
// "/invoice/invoice-77/",
// "/property-type/studio/",
// "/pages/software",
// "/invoice/invoice-108/",
// "/invoice/invoice-133/",
// "/invoice/invoice-136/",
// "/collections/all/products/commercial-parking",
// "/listings-elementor-sidebar/page/3/?tab=for-rent&tax=property_status",
// "/pages/construction",
// "/listings-elementor-sidebar/?tab=for-rent&tax=property_status",
// "/invoice/invoice-30/",
// "/my-profile/",
// "/feature/lawn/page/6/",
// "/feature/lawn/page/3/",
// "/feature/lawn/page/2/",
// "/the-history-of-real-estate/",
// "/invoice/invoice-160/",
// "/pages/relocation",
// "/pages/landlords",
// "/feature/refrigerator/page/2/",
// "/pages/tenant",
// "/invoice/invoice-143/",
// "/property/page/2/",
// "/invoice/invoice-66/",
// "/agency/modern-house-real-estate-2/",
// "/thank-you/",
// "/10-things-your-competitors-can-teach-you-about-real-estate/",
// "/packages/",
// "/property/amazing-villa-bay-front/?utm_source=rss&utm_medium=rss&utm_campaign=amazing-villa-bay-front",
// "/invoices/",
// "/state/illinois/",
// "/blog/page/2/",
// "/the-ultimate-cheat-sheet-on-real-estate/",
// "/real-estate-industry-and-competitors/",
// "/agency/modern-house-real-estate/page/3/",
// "/agency/modern-house-real-estate/page/2/",
// "/wpm@0.0.291@27ebbe9cwc6551374p82226fa4m8497296f/web-pixel-shopify-custom-pixel@0533/sandbox/pages/business-solutions",
// "/pages/business-solutions",
// "/agent/michelle-ramirez/",
// "/with-content-top/page/2/",
// "/with-content-bottom/page/2/",
// "/agent/tempuser_2267417735/",
// "/label/open-house/",
// "/feature/window-coverings/",
// "/feature/tv-cable/",
// "/invoice/invoice-170/",
// "/state/california/",
// "/area/manhattan/",
// "/invoice/invoice-42/",
// "/area/beverly/",
// "/area/central-city/",
// "/feature/washer/",
// "/feature/refrigerator/",
// "/agent/brittany-watkins/",
// "/feature/air-conditioning/",
// "/agent/samuel-palmer/",
// "/with-content-bottom/",
// "/with-content-top/",
// "/agency/luxury-house-real-estate/",
// "/feature/lawn/",
// "/tag/house-for-families/",
// "/tag/business-development/",
// "/2016/01/real-estate-industry-and-competitors/",
// "/2016/03/10-things-your-competitors-can-teach-you-about-real-estate/",
// "/property-type/villa/",
// "/property/contemporary-studio-2/",
// "/2016/03/",
// "/feature/sauna/page/2/",
// "/property/luxury-villa-with-pool/",
// "/2016/03/why-we-love-real-estate/",
// "/2016/03/the-history-of-real-estate/",
// "/property/luxury-home-for-sale/",
// "/property/villa-with-pool/",
// "/property/design-place-apartment/",
// "/property/villa-for-sale/",
// "/property/comfortable-apartment-bay-view/",
// "/property/modern-apartment-2/",
// "/property/luxury-apartment-ocean-view-2/",
// "/property/gorgeous-studio-bay-front/?utm_source=rss&utm_medium=rss&utm_campaign=gorgeous-studio-bay-front",
// "/property/small-shop/",
// "/property/gorgeous-studio-bay-front/",
// "/property/relaxing-studio-ocean-view/?utm_source=rss&utm_medium=rss&utm_campaign=relaxing-studio-ocean-view",
// "/property/guaranteed-modern-home/",
// "/property/luxury-apartment-bay-view/",
// "/property/luxury-apartment-ocean-view-3/",
// "/property-type/residential/",
// "/blogs/news/8-property-management-strategies-to-grow-your-portfolio",
// "/pages/renewable",
// "/2016/03/10-quick-tips-about-business-development/",
// "/2016/03/10-quick-tips-about-real-estate/",
// "/2016/03/14-common-misconceptions-about-business-development/",
// "/property/gorgeous-in-green-house/",
// "/property-type/shop/",
// "/property-type/commercial/",
// "/property/renovated-studio/",
// "/status/for-rent/page/3/",
// "/property/commercial-central-shop/",
// "/property/modern-apartment-on-the-bay/",
// "/property/confortable-and-ample-apartment/",
// "/pages/ambassador",
// "/pages/distributors",
// "/pages/investors-property-management",
// "/collections/best-selling-collection/products/514-n-california-ave-beaumont-ca-92223",
// "/collections/pages/property-management",
// "/pages/partners",
// "/cart",
// "/pages/homebuilding",
// "/property/villa-with-pool-for-sale/",
// "/property/amazing-oceanfront-apartment/",
// "/property/complex-building-ocean-front/",
// "/property/relaxing-apartment-bay-view/",
// "/grid-full-width-4-cols/page/5/",
// "/pages/avada-sitemap-articles",
// "/property/confortable-apartment/",
// "/2016/03/15-best-blogs-to-follow-about-real-estate/",
// "/feature/washer/page/3/",
// "/pages/pricing",
// "/2016/03/learn-the-truth-about-real-estate-industry/",
// "/property/luxury-family-home/",
// "/products/pages/property-management",
// "/property/modern-office-space/",
// "/property/apartment-for-rent-in-downtown/",
// "/a/pf_preview",
// "/property/luxury-apartment-ocean-view/",
// "/products/pages/investMENT",
// "/blogs/news.atom",
// "/property/ample-renovated-office/",
// "/property/amazing-family-home/",
// "/property/comfortable-family-home/",
// "/property/ample-apartment/",
// "/property/gorgeous-villa-bay-view/",
// "/property/penthouse-apartment/",
// "/2023/05/",
// "/property/ample-penthouse/",
// "/city/new-york/",
// "/city/chicago/",
// "/property/gorgeous-villa/",
// "/pages/live",
// "/property/luxury-villa-with-oceanview/",
// "/pages/book-now-services-terms",
// "/city/los-angeles/",
// "/property/villa-with-ocean-and-bay-view/",
// "/feature/gym/page/3/",
// "/property/relaxing-studio-ocean-view/",
// "/property/luxury-family-home-4/",
// "/property/modern-day-apartment/",
// "/pages/construction-1",
// "/pages/careers",
// "/pages/terms-conditions",
// "/property/amazing-villa-bay-front/",
// "/feature/sauna/page/3/",
// "/feature/gym/page/5/",
// "/feature/barbeque/page/3/",
// "/feature/barbeque/page/2/",
// "/property/amazing-home-for-family/",
// "/property/ample-studio-at-last-floor/",
// ];
// foreach ($redirectUrls as $url) {
//     Route::redirect($url, '/contact', 301);
// }

//  Route::redirect('/tag/futuretrends', '/contact', 301);


Route::post('/owner/bank-account/store', [BankAccountController::class, 'store'])->name('owner.bankAccount.store');
Route::get('/owner/bank-account', [BankAccountController::class, 'showBankAccountForm'])->name('owner.bankAccount.form');




// Other route definitions...

Route::post('/payment/charge', [ChargeController::class, 'handleCharge'])->name('payment.charge');

// routes/web.php



// routes/web.php

Route::post('/submit-form', 'App\Http\Controllers\ContactController@store');


// new aded for the partner portal 
use App\Http\Controllers\PartnerController;

// Partner Portal Signup
Route::get('/partner/signup', [PartnerController::class, 'showSignupForm'])->name('partner.signup');
Route::post('/partner/signup', [PartnerController::class, 'signup'])->name('partner.signup.store');

// Partner Portal Login
Route::get('/partner/login', [PartnerController::class, 'showLoginForm'])->name('partner.login');
Route::post('/partner/login', [PartnerController::class, 'login'])->name('partner.login.store');

// Partner Dashboard (protected route)
Route::middleware(['auth', 'partner'])->group(function () {
    Route::get('/partner/dashboard', [PartnerController::class, 'dashboard'])->name('partner.dashboard');
});





//partner portal end 




Route::get('/', function () {
    if (str_contains(request()->getHost(), 'www.')) {
        return redirect()->to(str_replace('www.', '', request()->fullUrl()), 301);
    }

});


Auth::routes(['register' => false]);

Route::get('/local/{ln}', function ($ln) {
    $language = Language::where('code', $ln)->first();
    if (!$language) {
        $language = Language::where('default', 1)->first();
        if ($language) {
            $ln = $language->code;
        }
    }

    session(['local' => $ln]);
    Carbon::setLocale($ln);
    App::setLocale(session()->get('local'));
    return redirect()->back();
})->name('local');

Route::group(['middleware' => ['version.update', 'addon.update', 'isFrontend']], function () {
    Route::get('/', [CommonController::class, 'index'])->name('frontend');
});

Route::group(['middleware' => ['auth', 'version.update']], function () {
    Route::get('/logout', [LoginController::class, 'logout']);
    Route::group(['middleware' => ['addon.update']], function () {
        Route::get('profile', [ProfileController::class, 'myProfile'])->name('profile');
        Route::post('profile', [ProfileController::class, 'profileUpdate'])->name('profile.update');
        Route::get('change-password', [ProfileController::class, 'changePassword'])->name('change-password');
        Route::post('change-password', [ProfileController::class, 'changePasswordUpdate'])->name('change-password.update');
        Route::post('delete-my-account', [ProfileController::class, 'deleteMyAccount'])->name('delete-my-account');

        Route::get('notification-status/{id}', [NotificationController::class, 'status'])->name('notification.status');
    });
});


Route::get('/sitemap.xml', function () {
    if (!Storage::disk('local')->exists('sitemap.xml')) {
        abort(404);
    }

    $content = Storage::disk('local')->get('sitemap.xml');
    return Response::make($content, 200, [
        'Content-Type' => 'application/xml'
    ]);
});

Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
    Route::get('email/verified/{token}', [UserEmailVerifyController::class, 'emailVerified'])->name('email.verified');
    Route::get('email/verify/{token}', [UserEmailVerifyController::class, 'emailVerify'])->name('email.verify');
    Route::post('email/verify/resend/{token}', [UserEmailVerifyController::class, 'emailVerifyResend'])->name('email.verify.resend');
});

Route::group(['prefix' => 'payment'], function () {
    Route::post('/', [PaymentController::class, 'checkout'])->name('payment.checkout');
    Route::match(array('GET', 'POST'), 'verify', [PaymentController::class, 'verify'])->name('payment.verify');
    

});

Route::get('version-update', [VersionUpdateController::class, 'versionUpdate'])->name('version-update');
Route::post('process-update', [VersionUpdateController::class, 'processUpdate'])->name('process-update');
Route::get('version-check', [VersionUpdateController::class, 'versionCheck'])->name('versionCheck');
