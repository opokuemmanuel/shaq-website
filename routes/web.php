<?php

use App\Http\Controllers\CareerController;
use App\Http\Controllers\CourierController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



Route::get('/', function () {
    return view('home');
});

Route::get('testimonies', function () {
    return view('testimonies');
});

Route::get('partners', function () {
    return view('partners');
});

Route::get('Partner-Rider', function () {
    return view('rider');
});

Route::get('about-shaq', function () {
    return view('about-shaq');
});

// Route::get('careers', function () {return view('careers');});

Route::get('team-shaq', function () {
    return view('team-shaq');
});

Route::get('Team', function () {
    return view('Team');
});

Route::get('team-shaq', function () {
    return view('team-shaq');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('support', function () {
    return view('support');
});

Route::get('privacy', function () {
    return view('privacy');
});

Route::get('index', function () {
    return view('index');
});

Route::get('about', function () {
    return view('about');
});
Route::get('order', function () {
    return view('order');
});
//request courier
Route::post('/request-courier', [CourierController::class, 'requestCourier'])->name('courier.request');
Route::get('/verify-phone/{phone}', [CourierController::class, 'verifyPhone'])->name('courier.verify-phone');
Route::get('/verify-code/{code}', [CourierController::class, 'verifyCode'])->name('courier.verify-code');
Route::get('/pricing', [CourierController::class, 'pricing'])->name('courier.pricing');
Route::post('/new-rider-registration', [CourierController::class, 'newCourierRegistration'])->name('courier.new-registration');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');


Route::get('/careers', [CareerController::class, 'index']);
Route::get('/create-career', [CareerController::class, 'create']);
Route::get('/all-positions', [CareerController::class, 'allPositions']);
Route::post('/store-career', [CareerController::class, 'store'])->name('career.store');
Route::post('/apply', [CareerController::class, 'apply'])->name('apply');
Route::get('/edit-career/{career:slug}', [CareerController::class, 'edit'])->name('edit-career');
Route::put('/update-career/{career}', [CareerController::class, 'update'])->name('update-career');