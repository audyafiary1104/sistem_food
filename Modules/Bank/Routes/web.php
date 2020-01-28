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

Route::prefix('bank')->group(function() {
    Route::get('/', 'BankController@index')->name('bank');
    Route::post('/', 'BankController@store')->name('bank_add');
});
