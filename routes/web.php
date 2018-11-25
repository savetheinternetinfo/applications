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

Route::domain('applications.savetheinternet.info')->group(function () {
    Auth::routes();
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/application/{id}')->name('appDetails');
});

Route::domain('jobs.savetheinternet.info')->group(function () {
    Route::post('/send', 'JobsController@send')->name('sendApplikation');
});

