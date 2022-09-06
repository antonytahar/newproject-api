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
Route::prefix('user')->group(function () {
    Route::get('/allUsers', 'UserController@index');
    Route::get('/{id}', 'UserController@userById');
});

Route::prefix('ticket')->group(function () {
    Route::get('/allticket', 'TicketController@all');
    Route::get('/{id}', 'TicketController@ticketById');    
    Route::post('/save', 'TicketController@save');
});

Route::prefix('city')->group(function () {
    Route::get('/allCities', 'CityController@index');
    Route::get('/{id}', 'CityController@show'); 
    Route::post('/save', 'CityController@save');
    Route::post('/create', 'CityController@create');
    Route::post('/{id}', 'CityController@destroy');
});

Route::prefix('country')->group(function () {
    Route::get('/allCountries', 'CountryController@index');
    Route::get('/{id}', 'CountryController@show'); 
    Route::post('/save', 'CountryController@save');
    Route::post('/create', 'CountryController@create');
    Route::post('/{id}', 'CountryController@destroy');
});

Route::prefix('pointing')->group(function () {
    Route::get('/allPointings', 'PointingController@index');
    Route::get('/{id}', 'PointingController@show'); 
    // Route::post('/save', 'PointingController@save');
    Route::post('/create', 'PointingController@create');
    Route::put('/validatePointing', 'PointingController@validatePointing');
    Route::post('/{id}', 'PointingController@destroy');
});

Route::prefix('user')->group(function () {
    Route::get('/allUsers', 'UserController@index');
    Route::get('/{id}', 'UserController@show'); 
    // Route::post('/save', 'UserController@save');
    // Route::post('/create', 'UserController@create');
    // Route::post('/{id}', 'UserController@destroy');
});

