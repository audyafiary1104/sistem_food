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

Route::prefix('salary')->group(function() {
    Route::get('/', 'SalaryController@index')->name('salary');
    Route::post('/store', 'SalaryController@store')->name('store');
    Route::get('/delete/{id}', 'SalaryController@destroy')->name('destory');
});
