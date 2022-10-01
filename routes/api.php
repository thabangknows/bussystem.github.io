<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', 'App\Http\Controllers\RegisterController@register');
Route::post('login', 'App\Http\Controllers\LoginController@login');

//place new booking route
Route::post('addbooking', 'App\Http\Controllers\BookingController@addbooking');

//get user bookings route
Route::get('getbookings', 'App\Http\Controllers\BookingController@getbookings');

//update user bookings route
Route::put('updatebooking/{id}', 'App\Http\Controllers\BookingController@updatebooking');

//user bookings route PDF
Route::get('exportbooking', 'App\Http\Controllers\BookingController@exportbooking');

//schedule route
Route::post('addschedule', 'App\Http\Controllers\ScheduleController@addschedule');
Route::get('getschedule', 'App\Http\Controllers\ScheduleController@getschedule');
Route::delete('deleteschedule/{id}', 'App\Http\Controllers\ScheduleController@deleteschedule');

//get users route
Route::get('getusers', 'App\Http\Controllers\UserController@getusers');

//update mail route
Route::put('updatemail/{data}', 'App\Http\Controllers\RegisterController@updatemail');

Route::get('printschedule/{id}', 'App\Http\Controllers\ScheduleController@printschedule');