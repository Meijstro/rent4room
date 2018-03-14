<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\User;
use App\City;

class RoomController extends Controller
{
    public function index()
    {
      $rooms = Room::latest('created_at')->get();

      return view('welcome', compact('rooms'));
    }

    public function create(Request $request)
    {

      $this->validate(request(), [
        'street' => 'required',
        'housenumber' => 'required',
        'city_id' => 'required',
        'postcode' => 'required',
        'square_meter' => 'required',
        'price' => 'required',
      ]);

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

    public function upload(){

        request()->validate([
          'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          ]);

        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $imageName);

        return redirect('/dashboard')
          ->with('success','Foto succesvol ge-upload.')
          ->with('image',$imageName);
    }
}
