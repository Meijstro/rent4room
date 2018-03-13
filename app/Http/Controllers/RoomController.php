<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\User;

class RoomController extends Controller
{
    public function index()
    {
      $rooms = Room::latest('created_at')->get();

      return view('welcome', compact('rooms'));
    }

    public function create()
    {
      $room = Room::create([
        'street' => request('street'),
        'housenumber' => request('housenumber'),
        'city_id' => request('city_id'),
        'postcode' => request('postcode'),
        'square_meter' => request('square_meter'),
        'price' => request('price'),
        'user_id' => auth()->id(),
      ]);
      return redirect('/dashboard')
      ->with('success','Nieuwe kamer geplaatst!');;
    }

    public function test(){

    }
}
