<?php

use App\Http\Controllers\CourierController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('/example-courier', [CourierController ::class, 'SendCourierRequest']);
Route::post('/request-courier', [CourierController ::class, 'SendCourierRequest'])->name('courier-api.request');
Route::post('/new-rider-registration', [CourierController::class, 'newCourierRegistration'])->name('courier.new-registration-api');
Route::post('/pricing', [CourierController::class, 'pricing'])->name('courier.pricing');
