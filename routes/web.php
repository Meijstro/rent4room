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
//kamers bekijken
Route::get('/', 'RoomController@index');

Route::get('/kamers', 'RoomController@showall');

Route::get('/kamer/{id}', 'RoomController@show');

Route::get('/about', function() {
  return view ('about');
});

//registratie, login
Auth::routes();

Route::get('/dashboard', 'HomeController@dashboard')->name('home');

//kamer plaatsen
Route::post('/newroom', 'RoomController@create');

//Administrator, testing
Route::get('/phpinfo', 'AdminController@phpinfo');

Route::get('/test', 'AdminController@test');
