<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController as Home;
use App\Http\Controllers\OrderController as Order;
use App\Http\Controllers\StudentController as Student;
use App\Http\Controllers\PageController as Pages;
use App\Http\Controllers\BlogController as Blog;
use App\Http\Controllers\AuthController as Auth;
use App\Http\Controllers\PaymentController as Payment;
use App\Http\Controllers\AdminController as Admin;
use App\Livewire\Admin\Login;
use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\Orders;
use Livewire\Livewire;
use App\Http\Controllers\ServicesController as Services;
use App\Http\Controllers\ErrorController as Error;
use App\Http\Controllers\OrderRatingController as OrderRating;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them wil l
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/dashboard", function(){
    return view("dashboard");
 });
 

Route::get('/', [Home::class, 'index'])->name('home');


Route::post('/subscribe_form', [Home::class, 'subscriptionData'])->name('subscriptionData');

Route::get('/dateformat', [Home::class, 'dateformat'])->name('dateformat');
Route::post('/contact_form', [Home::class, 'contanctSave'])->name('contanct_save');
Route::get('/pages/{sku}', [Pages::class, 'index'])->name('pages.index');


Route::get('/faq', [Pages::class, 'faq'])->name('faq');
Route::get('/why_us', [Pages::class, 'why_us'])->name('why_us');
Route::get('/refer_friend', [Pages::class, 'refer_friend'])->name('refer_friend');
Route::post('/refer_a_friend', [Pages::class, 'refer_a_friend'])->name('refer_a_friend');
Route::get('/contact-us', [Pages::class, 'contact_us'])->name('contact-us');
Route::get('/about-us', [Pages::class, 'about_us'])->name('about-us');
Route::get('/services', [Pages::class, 'services'])->name('Services');


Route::get('/terms-and-conditions', [Pages::class, 'terms_condtion'])->name('terms-and-conditions');
Route::get('/privacy-policy', [Pages::class, 'privacy_policy'])->name('privacy-policy');
Route::get('/refund-policy', [Pages::class, 'refund_policy'])->name('refund-policy');
Route::get('/cookies-policy', [Pages::class, 'cookies_policy'])->name('cookies-policy');



Route::get('/blog', [Blog::class, 'index'])->name('blog');
Route::get('/blog1', [Blog::class, 'index'])->name('blog1');
Route::get('/blog/{blog}', [Blog::class, 'view'])->name('blog.view');


Route::get('/login', [Auth::class, 'loginPage'])->name('login.page');
Route::get('/signup', [Auth::class, 'signupPage'])->name('signup.page');

Route::get('/refer/{referral_code}', [Auth::class, 'signupPage'])->name('signup.referral_code');

Route::get('/reset-password', [Auth::class, 'resetPasswordPage'])->name('reset.password.page');
Route::get('/404', [Error::class, 'notFound'])->name('not.found.page');
Route::post('/signup', [Student::class, 'create'])->name('signup');
Route::post('/login', [Auth::class, 'login'])->name('login');
Route::get('/order', [Order::class, 'index'])->name('order');
Route::post('/price', [Order::class, 'checkprice'])->name('price');

Route::post('/validate-coupon-code', [Order::class, 'validateCouponCode'])->name('validateCouponCode');
Route::post('/neworder/auth/check', [Order::class, 'orderValidate'])->name('orderValidate');
Route::post('/neworder', [Order::class, 'create'])->name('neworder');
Route::post('/process-attachment', [Order::class, 'processAttachment'])->name('process-attachment');
Route::middleware('auth')->group(function () {
    Route::get('/payment', [Payment::class, 'index']);
    Route::any('/pay', [Payment::class, 'pay'])->name('pay');
    Route::get('/payment-validation', [Payment::class, 'paymentValidation'])->name('payment-validation');
    Route::post('/paymentsave', [Payment::class, 'payment']);
    Route::get('/transactions', [Order::class, 'transactions'])->name('order.transactions');
    Route::any('/vieworder/{oid}', [Order::class, 'vieworder'])->name('order.vieworder');
    Route::get('/refer_friend_individual', [Order::class, 'refer_friend'])->name('order.refer_friend');
    Route::get('/statements', [Order::class, 'statements'])->name('order.statements');
    //Route::post('/neworder', [Order::class, 'create'])->name('neworder');
    //Route::post('/process-attachment', [Order::class, 'processAttachment'])->name('process-attachment');
    Route::get('/profile', [Student::class, 'profile'])->name('student.profile'); 
    Route::post('/update-profile', [Student::class, 'updateProfile'])->name('student.update.profile');
    Route::get('/changepass', [Student::class, 'changepass'])->name('student.changepass');
    Route::post('/update-password', [Student::class, 'updatePassword'])->name('student.update.password');
    Route::get('/logout', [Auth::class, 'logout'])->name('logout');
});

Route::get('/admin', Login::class)->name('admin')->middleware('student.admin.notAuthorized');
Route::prefix('admin')->middleware('student.admin.authorized')->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/orders', Orders::class)->name('orders');
    Route::get('/student-order-data', [Admin::class, 'studentOrderData'])->name('student-order-data');
});
Livewire::setScriptRoute(function ($handle) {
    return Route::get('/student/livewire/livewire.js', $handle);
});
Livewire::setUpdateRoute(function ($handle) {
    return Route::any('/student/livewire/update', $handle);
});



Route::get('/tutors', [App\Http\Controllers\ExpertDetailsController::class, 'tutorsList'])->name('Tutors.List');
Route::get('/offers', [App\Http\Controllers\OffersController::class, 'index'])->name('Offers.Index');

Route::get('/tutor/{id}', [App\Http\Controllers\ExpertDetailsController::class, 'index'])->name('Expert.Details');

Route::get('/offers/ajaxlist', [App\Http\Controllers\OffersController::class, 'ajaxList'])->name('Offers.ajaxList');
Route::get('/offers/details/{id}', [App\Http\Controllers\OffersController::class, 'details'])->name('Offers.details');
Route::post('/save-ratings', [OrderRating::class, 'saveRatings'])->name('save.ratings');









Route::get('/{slug}', [Services::class, 'servicesIndex'])->name('Services.Index');





