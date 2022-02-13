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

    Route::get('/services', [ServicesController::class, 'index'])->name('services');

    Route::prefix('agents')->group(function () {
        Route::get('/', [AgentsController::class, 'index'])->name('agents');
        Route::get('/profile/{id}/{name}', [AgentsController::class, 'profile'])->name('agent.profile');
    });
});

Route::middleware(['web', 'auth', 'admin'])->domain(env('ADMIN_URL'))->group(function() {
    // Route::get('/', [\App\Http\Controllers\AdminController::class, 'index'])->name('admin');
    // Route::get('/countries', [\App\Http\Controllers\Admin\CountriesController::class, 'index'])->name('admin.countries');

    // Route::get('/subscriptions', [\App\Http\Controllers\Admin\SubscriptionsController::class, 'index'])->name('admin.subscriptions');

    // Route::get('/plans', [\App\Http\Controllers\Admin\PlansController::class, 'index'])->name('admin.plans');
    // Route::prefix('plan')->group(function () {
    //     Route::post('/add', [\App\Http\Controllers\Admin\PlansController::class, 'add'])->name('admin.plan.add');
    //     Route::post('/edit/{id}', [\App\Http\Controllers\Admin\PlansController::class, 'edit'])->name('admin.plan.edit');
    // });

});

Route::middleware(['web', 'auth', 'customer'])->domain(env('CUSTOMER_URL'))->group(function() {
    // Route::get('/', [\App\Http\Controllers\Customer\DashboardController::class, 'index'])->name('user');
    // Route::get('/profile', [\App\Http\Controllers\Customer\ProfileController::class, 'index'])->name('user.profile');
});


    

