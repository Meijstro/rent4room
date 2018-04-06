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
use App\Rooms\RoomsRepository;

Route::get('/', 'RoomController@index');

Route::get('/kamers', 'RoomController@showall');

Route::get('/kamer/{id}', 'RoomController@show');

Route::get('/about', function() {
  return view ('about');
});

Route::get('/kamers/kaart', 'RoomController@map');

//registratie, login
Auth::routes();

Route::get('/dashboard', 'HomeController@dashboard')->name('home');

//upgrading account
Route::post('/upgrade', 'CheckoutController@store');

Route::get('/upgrade/ideal', 'IDealController@index');

Route::get('/upgrade/paymentcomplete/{code}', 'IDealController@completePayment');

//messaging
Route::middleware(['auth', 'talk'])->group(function () {
    Route::get('/berichten', 'MessageController@index');
    Route::get('message/{userid}/{roomid?}', 'MessageController@chatHistory')->name('message.read');
    Route::post('/count/{id}', 'MessageController@counter');
    Route::get('/messagetest', 'MessageController@test');
    Route::group(['prefix'=>'ajax', 'as'=>'ajax::'], function() {
       Route::post('message/send', 'MessageController@ajaxSendMessage')->name('message.new');
       Route::delete('message/delete/{id}', 'MessageController@ajaxDeleteMessage')->name('message.delete');
    });
});


//kamer plaatsen/aanpassen
Route::post('/newroom', 'RoomController@create');

Route::get('/kamer/{id}/aanpassen', 'RoomController@edit');

Route::patch('/update/{id}', 'RoomController@update');

Route::delete('/delete/{id}', 'RoomController@destroy');

//Administrator
Route::get('/phpinfo', 'AdminController@phpinfo');

Route::get('/test', 'AdminController@test');

//search form
Route::get('/search', function (RoomsRepository $repository) {
    $rooms = $repository->search((string) request('q'));

    return view('showall', [
    	'rooms' => $rooms,
    ]);
});

Route::get('/{locale}', 'LanguageController@switchLang');
