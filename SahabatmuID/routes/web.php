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

Route::get('/', function () {
    return view('main');
});

// Food
Route::get('/food', 'FoodController@index');

//Destination
Route::get('/destination', 'DestinationController@index');

//Transportation
Route::get('/transportation', 'TransportationController@index');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
