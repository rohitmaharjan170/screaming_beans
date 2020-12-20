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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('items','ItemController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('members','MemberController');

Auth::routes();

Route::get('/home', 'ReservationController@index')->name('home');
Route::resource('reserv','ReservationController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
/*Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');*/



