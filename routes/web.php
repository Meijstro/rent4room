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
//homepage
Route::get('/', 'RoomController@index');

//registratie, login
Auth::routes();

Route::get('/dashboard', 'HomeController@dashboard')->name('home');

//kamer plaatsen
Route::post('/newroom', 'RoomController@create');

Route::post('/newroom/foto', 'RoomController@upload');

//Administrator, testing
Route::get('/phpinfo', 'AdminController@phpinfo');

Route::get('/test', 'AdminController@test');
