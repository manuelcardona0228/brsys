<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('barbers', 'Api\BarberController');
Route::get('/turn/barber/{id}', 'Api\TurnController@getTurns');
Route::apiResource('barbershops', 'Api\BarbershopController');
Route::apiResource('customers', 'Api\CustomerController');
Route::apiResource('headquarters', 'Api\HeadquarterController');
Route::apiResource('profiles', 'Api\ProfileController');
Route::apiResource('services', 'Api\ServiceController');
Route::apiResource('turns', 'Api\TurnController');
Route::apiResource('login', 'Api\LoginController');
