<?php

use App\Artical;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about','ArticalController@show');
Route::get('/contact','ArticalController@showContact')->middleware('auth');
Route::post('/contact','ArticalController@store');

Route::resource('artical', 'articalsOperation');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::get('/notification','notificationController@create')->middleware('auth');
Route::post('/notification','notificationController@store')->middleware('auth');
Route::get('/notification/show','notificationController@show')->middleware('auth');
