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

//registratie, login
Auth::routes();

Route::get('/dashboard', 'HomeController@dashboard')->name('home');

//messaging



Route::middleware(['auth', 'talk'])->group(function () {
    Route::get('/berichten', 'MessageController@index');
    Route::get('message/{id}', 'MessageController@chatHistory')->name('message.read');
    Route::post('/count/{id}', 'MessageController@counter');
    Route::get('/messagetest', 'MessageController@test');
    Route::group(['prefix'=>'ajax', 'as'=>'ajax::'], function() {
       Route::post('message/send', 'MessageController@ajaxSendMessage')->name('message.new');
       Route::delete('message/delete/{id}', 'MessageController@ajaxDeleteMessage')->name('message.delete');
    });
});


//kamer plaatsen
Route::post('/newroom', 'RoomController@create');

//Administrator, testing
Route::get('/phpinfo', 'AdminController@phpinfo');

Route::get('/test', 'AdminController@test');

Route::get('/search', function (RoomsRepository $repository) {
    $rooms = $repository->search((string) request('q'));

    return view('showall', [
    	'rooms' => $rooms,
    ]);
});
