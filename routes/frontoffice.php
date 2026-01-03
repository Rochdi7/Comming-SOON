<?php

use Illuminate\Support\Facades\Route;

Route::name('front.')->group(function () {

    Route::view('/', 'frontoffice.pages.index')->name('index');

    Route::view('/index', 'frontoffice.pages.index')->name('index.alias');
    Route::view('/index-2', 'frontoffice.pages.index-2')->name('index-2');
    Route::view('/index-3', 'frontoffice.pages.index-3')->name('index-3');
    Route::view('/index-4', 'frontoffice.pages.index-4')->name('index-4');

    Route::view('/about-us', 'frontoffice.pages.about-us')->name('about-us');
    Route::view('/add-listing', 'frontoffice.pages.add-listing')->name('add-listing');
    Route::view('/blog-details', 'frontoffice.pages.blog-details')->name('blog-details');
    Route::view('/blog-grid', 'frontoffice.pages.blog-grid')->name('blog-grid');
    Route::view('/blog-list', 'frontoffice.pages.blog-list')->name('blog-list');

    // ...same idea for the rest:
    Route::view('/booking', 'frontoffice.pages.booking')->name('booking');
    Route::view('/booking-payment', 'frontoffice.pages.booking-payment')->name('booking-payment');
});

Route::get('admin/index_admin', [CustomAuthController::class, 'dashboard']); 
Route::get('admin/signin', [CustomAuthController::class, 'index'])->name('admin/signin');
Route::post('admin/custom-login', [CustomAuthController::class, 'customLogin'])->name('signin.custom'); 
Route::get('admin/signup', [CustomAuthController::class, 'registration'])->name('admin/signup');
Route::post('admin/custom-register', [CustomAuthController::class, 'customRegistration'])->name('signup.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('index', function () {
    return view('index');
})->name('index');

Route::get('index-2', function () {
    return view('index-2');
})->name('index-2');

Route::get('index-3', function () {
    return view('index-3');
})->name('index-3');

Route::get('index-4', function () {
    return view('index-4');
})->name('index-4');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/add-listing', function () {
    return view('add-listing');
})->name('add-listing');

Route::get('/blog-details', function () {
    return view('blog-details');
})->name('blog-details');

Route::get('/blog-grid', function () {
    return view('blog-grid');
})->name('blog-grid');

Route::get('/blog-list', function () {
    return view('blog-list');
})->name('blog-list');

Route::get('/booking-payment', function () {
    return view('booking-payment');
})->name('booking-payment');

Route::get('/booking', function () {
    return view('booking');
})->name('booking');

Route::get('/coming-soon', function () {
    return view('coming-soon');
})->name('coming-soon');

Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');

Route::get('/error-404', function () {
    return view('error-404');
})->name('error-404');

Route::get('/error-500', function () {
    return view('error-500');
})->name('error-500');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/forgot-password', function () {
    return view('forgot-password');
})->name('forgot-password');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');
