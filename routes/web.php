<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubPagesController;
use App\Http\Controllers\LandpagesController;
use App\Http\Controllers\PaymentGatewayController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\GitaPaymentGateway;
use App\Http\Controllers\Icvkregistration;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ChatbotController;

Route::post('/chatbot/message', [ChatbotController::class, 'handleMessage']);




Route::controller(BlogController::class)->group(function () {
     Route::get('/blogs', 'index')->name('blogs');
     Route::get('/blog/radha-ashtami', 'radhaAshtami')->name('blog.ashtami');
     Route::get('/blog/fault-finding', 'faultFinding')->name("fault-finding");
     Route::get('/blog/how-to-follow-ekadashi', 'followEkadashi')->name("blog.ekadashi");
     Route::get('/blog/janmashtami-decoration', 'janmashtamiDecoration')->name('blog.janmashtami-decoration');
     Route::get('/blog/radha-rani-names', 'radhaRaniNames')->name('blog.radharani-names');
     Route::get('/blog/abhiram-thakura', 'abhiramThakura')->name('blog.abhiram-thakura');
     Route::get('/blog/amalaki-ekadashi', 'amalakiEkadashi')->name('blog.amalaki-ekadashi');
     Route::get('/blog/apara-ekadashi', 'aparaEkadashi')->name('blog.apara-ekadashi');
     Route::get('/blog/lord-varahadeva', 'lordVamanadeva')->name('blog.lord-varahadeva');
     Route::get('/blog/radha-kunda', 'radhaKunda')->name('blog.radha-kunda');
     Route::get('/blog/bhaimi-ekadashi', 'bhaimiEkadashi')->name('blog.bhaimi-ekadashi');
     Route::get('/blog/carry-lord', 'carryLord')->name('blog.carry-lord');
     Route::get('/blog/carry-lord-in-heart', 'carryLoardinHeart')->name('blog.carry-lord-in-heart');
});




Route::controller(SubPagesController::class)->group(function () {

     Route::get('/', 'home')->name("home");
     Route::get('/our-centers', 'centers')->name("our-centers");
     Route::get('/list', 'list')->name("list");
     Route::get('/house-kirtan', 'kirtan')->name("kirtan");
     Route::get('/programs', 'programs')->name("programs");
     Route::get('/contact', 'contact')->name("contact");
     Route::get('/privacy-policy', 'privacy')->name("privacy-policy");
     Route::get('/refund-policy', 'refund')->name("refund-policy");
     Route::get('/terms-and-conditions', 'terms')->name("terms-and-conditions");
     Route::get('/be-a-monk', 'monk')->name("be-a-monk");
     Route::get('/gita-for-youth', 'gita')->name("gita-for-youth");
     Route::get('/volunteer', 'volunteer')->name("volunteer");
     Route::get('/folk', 'folk')->name("folk");
     Route::get('/our-mission', 'mission')->name("our-mission");
     Route::get('/our-objective', 'objective')->name("objective");
     Route::get('/governance', 'governance')->name("governance");
     Route::get('/srila-prabhupada', 'prabhupada')->name("srila-prabhupada");
     Route::get('/narasimha-havan-seva', 'narasimha')->name("narasimha-havan-seva");
     Route::get('/donation', 'donation')->name("donation");
     Route::get('/mid-day-meal', 'middaymeal')->name("mid-day-meal");
     Route::get('/deepotsava', 'deepotsava')->name("deepotsava");
     Route::get('/srila-prabhupada-life-story', 'srilaPrabhupada')->name("srila-prabhupada-life-story");
     Route::get('/krishna-life-story', 'krishnaLife')->name("krishna-life-story");
     Route::get('/chaitanya-mahaprabhu', 'chaitanya')->name("chaitanya-mahaprabhu");
     Route::get('/bhagavad-gita', 'bhagavadGita')->name("bhagavad-gita");
     Route::get('/krishna-consciousness', 'krishnaConsciousness')->name("krishna-consciousness");
     Route::get('/gallery', 'galleryImages')->name("gallery-images");
     Route::get('/gita-life-course', 'gitaLifeCourse')->name("gita-life-course");
     Route::get('/secrets-of-life', 'secretsOfLife')->name("secrets-of-life");
     Route::get('/gita-advance-course', 'gitaAdvanceCourse')->name("gita-advance-course");
     Route::get('/gita-shloka-course', 'gitaShlokaCourse')->name("gita-shloka-course");
     Route::get('/spiritual-retreat', 'spiritualRetreat')->name("spiritual-retreat");
     Route::get('/gita-daan', 'gitaDaan')->name("gita-daan");
});


Route::controller(Icvkregistration::class)->group(function () {
     Route::get('/icvk-indian-culture-and-values-for-kids', 'icvkProgramm')->name("icvk-programm");
     Route::get('/icvk-registration', 'icvkRegistration')->name('icvk.registration');
     Route::post('/post-icvk-registration', 'icvkRegistrationPost')->name('post.icvk.registration');
     Route::get('/icvk-payment-status', 'icvkRegistrationPaymentStatus')->name('icvk.payment.status');
     Route::get('/icvk-payment-success', 'icvkRegistrationPaymentSuccess')->name('icvk.payment.success');
     Route::get('/icvk-registration-failure', 'icvkRegistrationPaymentfailure');
});

Route::controller(RegistrationController::class)->group(function () {

     Route::post('/monk-registration', 'monReg')->name("monk-registration");
     Route::post('/volunteer-registration', 'volunteer')->name("volunteer-registration");
     Route::post('/enquiry', 'contact')->name("enquiry");
});


Route::controller(LandpagesController::class)->group(function () {

     Route::get('/annadaan-seva', 'annadaan')->name("annadaan-seva");

     Route::get('/checkout/{id}', 'checkout')
          ->whereIn('id', [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20])
          ->name('checkout');  // <-- ADD THIS
});


Route::controller(PaymentGatewayController::class)->group(function () {

     Route::post('/payment-gateway', 'pay')->name("payment-gateway");
     Route::get('/payment-status', 'payStatus')->name("payment-status");
     Route::post('/gita-registration-payment', 'gitaYouthPayment')->name("gita-registration-payment");
});

Route::controller(GitaPaymentGateway::class)->group(function () {



     Route::post('/gita-registration-payment', 'gitaYouthPayment')->name("gita-registration-payment");
     Route::get('/gita-payment-status', 'payStatus')->name("gita-payment-status");
});





Route::get('/payment-success/{payID}/{name}/{mobile}/{amount}', function ($payID, $name, $mobile, $amount) {
     return view("paymentsuccess", ["payID" => $payID, "name" => $name, 'mobile' => $mobile, "amount" => $amount]);
})->name("payment-success");
Route::get('/payment-details', [PaymentGatewayController::class, 'getPaymentDetails']);



// Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blogs.show');
Route::get('/search', [BlogController::class, 'search'])->name('blogs.search');


use App\Http\Controllers\ContactController;

Route::post('/enquiry', [ContactController::class, 'enquiry'])->name('enquiry');
Route::post('/quick-enquiry', [ContactController::class, 'quickEnquiry'])->name('quick.enquiry');
Route::get('/contacts', [ContactController::class, 'index']);


Route::redirect('/hello-world', '/', 301);
Route::redirect('/contact-us', '/', 301);
Route::redirect('/cancellation-refund-policy', '/', 301);
Route::redirect('/about-2', '/', 301);
Route::redirect('/srila-prabhupada', '/', 301);
