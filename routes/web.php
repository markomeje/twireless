<?php

use Illuminate\Support\Facades\Route;

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

Route::middleware(['web'])->domain(env('APP_URL'))->group(function() {
    Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/about', [\App\Http\Controllers\AboutController::class, 'index'])->name('about');

    Route::get('/logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('logout');
    Route::post('/auth', [\App\Http\Controllers\LoginController::class, 'auth'])->name('auth.login');
    
    Route::group(['prefix' => 'login', 'middleware' => 'guest'], function () {
        Route::get('/', [\App\Http\Controllers\LoginController::class, 'index'])->name('login');
        Route::post('/auth', [\App\Http\Controllers\LoginController::class, 'auth'])->name('auth.login');
    });

    Route::group(['prefix' => 'signup', 'middleware' => 'guest'], function () {
        Route::get('/', [\App\Http\Controllers\SignupController::class, 'index'])->name('signup');
        Route::post('/process', [\App\Http\Controllers\SignupController::class, 'signup'])->name('signup.process');
        Route::get('/success', [\App\Http\Controllers\SignupController::class, 'success'])->name('signup.success');
    });

    Route::group(['prefix' => 'verify'], function () {
        Route::get('/phone/{reference}', [\App\Http\Controllers\VerifyController::class, 'phone'])->name('phone.verify');
        Route::post('/otp/{reference}', [\App\Http\Controllers\VerifyController::class, 'otpverify'])->name('otp.verify');
        Route::post('/resendotp/{reference}', [\App\Http\Controllers\VerifyController::class, 'resendotp'])->name('resend.otp');
        Route::get('/email/{token}', [\App\Http\Controllers\VerifyController::class, 'email'])->name('verify.email');
        Route::post('/resendtoken/{token}', [\App\Http\Controllers\VerifyController::class, 'resendtoken'])->name('token.resend');
        Route::get('/resent', [\App\Http\Controllers\VerifyController::class, 'resent'])->name('token.resent');
    });

    Route::prefix('contact')->group(function () {
        Route::get('/', [\App\Http\Controllers\ContactController::class, 'index'])->name('contact');
        Route::post('/send', [\App\Http\Controllers\ContactController::class, 'send'])->name('contact.send');
        Route::get('/thanks', [\App\Http\Controllers\ContactController::class, 'thanks'])->name('contact.thanks');
    });

    Route::get('/services', [\App\Http\Controllers\ServicesController::class, 'index'])->name('services');
    Route::get('/pricing', [\App\Http\Controllers\PricingController::class, 'index'])->name('pricing');

    Route::prefix('agents')->group(function () {
        Route::get('/', [AgentsController::class, 'index'])->name('agents');
        Route::get('/profile/{id}/{name}', [AgentsController::class, 'profile'])->name('agent.profile');
    });
});

Route::middleware(['web', 'auth', 'admin'])->domain(env('ADMIN_URL'))->group(function() {
    Route::get('/', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');

    Route::post('/sms/send', [\App\Http\Controllers\Admin\SmsController::class, 'send'])->name('admin.sms.send');

    Route::prefix('customers')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\CustomersController::class, 'index'])->name('admin.customers');
        Route::post('/add', [\App\Http\Controllers\Admin\CustomersController::class, 'add'])->name('admin.customer.add');
        Route::get('/profile/{id}', [\App\Http\Controllers\Admin\CustomersController::class, 'profile'])->name('admin.customer.profile');
    });

    Route::prefix('bundles')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\BundlesController::class, 'index'])->name('admin.bundles');
        Route::post('/add', [\App\Http\Controllers\Admin\BundlesController::class, 'add'])->name('admin.bundle.add');
        Route::get('/edit/{id}', [\App\Http\Controllers\Admin\BundlesController::class, 'edit'])->name('admin.bundle.edit');
    });

    Route::prefix('packages')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\PackagesController::class, 'index'])->name('admin.packages');
        Route::post('/add', [\App\Http\Controllers\Admin\PackagesController::class, 'add'])->name('admin.package.add');
        Route::post('/edit/{id}', [\App\Http\Controllers\Admin\PackagesController::class, 'edit'])->name('admin.package.edit');
    });

    Route::prefix('sectors')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\SectorsController::class, 'index'])->name('admin.sectors');
        Route::post('/add', [\App\Http\Controllers\Admin\SectorsController::class, 'add'])->name('admin.sector.add');
        Route::get('/edit/{id}', [\App\Http\Controllers\Admin\SectorsController::class, 'edit'])->name('admin.sector.edit');

        Route::get('/sector/{id}', [\App\Http\Controllers\Admin\SectorsController::class, 'sector'])->name('admin.sector');
    });

    Route::prefix('subscriptions')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\SubscriptionsController::class, 'index'])->name('admin.subscriptions');
        Route::get('/subscription/{id}', [\App\Http\Controllers\Admin\SubscriptionsController::class, 'subscription'])->name('admin.subscription');

        Route::get('/search', [\App\Http\Controllers\Admin\SubscriptionsController::class, 'search'])->name('admin.subscriptions.search');
        
        Route::post('/add', [\App\Http\Controllers\Admin\SubscriptionsController::class, 'add'])->name('admin.subscription.add');
        Route::post('/edit/{id}', [\App\Http\Controllers\Admin\SubscriptionsController::class, 'edit'])->name('admin.subscription.edit');

        Route::post('/activate/{id}', [\App\Http\Controllers\Admin\SubscriptionsController::class, 'activate'])->name('admin.subscription.activate');

        Route::post('/extend/{id}', [\App\Http\Controllers\Admin\SubscriptionsController::class, 'extend'])->name('admin.subscription.extend');
    });

    Route::get('/plans', [\App\Http\Controllers\Admin\PlansController::class, 'index'])->name('admin.plans');

    Route::prefix('payments')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\PaymentsController::class, 'index'])->name('admin.payments');
        Route::post('/add', [\App\Http\Controllers\Admin\PaymentsController::class, 'add'])->name('admin.payment.add');
    });

    Route::prefix('notifications')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\NotificationsController::class, 'index'])->name('admin.notifications');
        Route::post('/send/{customer_id}', [\App\Http\Controllers\Admin\NotificationsController::class, 'send'])->name('admin.notification.send');
    });
});

Route::middleware(['web', 'auth', 'customer'])->domain(env('CUSTOMER_URL'))->group(function() {
    Route::get('/', [\App\Http\Controllers\Customer\DashboardController::class, 'index'])->name('customer.dashboard');
    // Route::get('/profile', [\App\Http\Controllers\Customer\ProfileController::class, 'index'])->name('user.profile');
});


    

