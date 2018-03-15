<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

use App\Http\Requests\UploadRequest;
use App\Room;
use App\User;
use App\City;
use App\PhotosRoom;

class RoomController extends Controller
{
    public function showall()
    {
      $rooms = Room::latest('created_at')->with('photos')->get();

      return view('showall', compact('rooms'));
    }

    public function index()
    {
      $rooms = Room::latest('created_at')->with('photos')->get();

      return view('welcome', compact('rooms'));
    }


    public function create(UploadRequest $request)
    {

      $this->validate(request(), [
        'street' => 'required',
        'housenumber' => 'required',
        'city_id' => 'required',
        'postcode' => 'required',
        'square_meter' => 'required',
        'price' => 'required',
        'images' => 'required',
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

        foreach ($request->images as $image){
          $filename = $image->store('public');
            PhotosRoom::create([
                'room_id' => $room->id,
                'filename' => Storage::url($filename)
            ]);
        }

        // die(Room::findOrFail($room->id)->with('photo')->get());

      return redirect('/dashboard')
      ->with('success','Nieuwe kamer geplaatst!');;
    }

    public function show($id){

      $room = Room::find($id);

      return view('show', compact('room'));
    }

}
