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
    Route::get('/alluser', 'UserController@all');
    Route::get('/{id}', 'UserController@userById');
});

Route::prefix('ticket')->group(function () {
    Route::get('/allticket', 'TicketController@all');
    Route::get('/{id}', 'TicketController@ticketById');    
    Route::post('/save', 'TicketController@save');
});