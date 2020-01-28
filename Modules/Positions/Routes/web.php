<?php

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

Route::prefix('positions')->group(function() {
    Route::get('/', 'PositionsController@index')->name('positions');
    Route::post('/add_positions', 'PositionsController@store')->name('add_positions');
});
