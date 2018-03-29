<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

use App\Http\Requests\UploadRequest;
use App\Room;
use App\User;
use App\City;
use Auth;
use App\PhotosRoom;

class RoomController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth')->except(['index', 'showall', 'show']);
    }

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
        'housenumber' => 'required|digits_between:1,4',
        'city_id' => 'required',
        'postcode' => 'required|regex:/^[1-9][0-9]{3}[\s]?[A-Za-z]{2}$/i',
        'square_meter' => 'required|digits_between:1,2',
        'price' => 'required|digits_between:2,4',
        'images.*' => 'required|image|max:5048',
        'date_available' => 'required|date',
      ]);

      $room = Room::create([
        'street' => request('street'),
        'housenumber' => request('housenumber'),
        'city_id' => request('city_id'),
        'postcode' => request('postcode'),
        'square_meter' => request('square_meter'),
        'price' => request('price'),
        'date_available' => request('date_available'),
        'user_id' => auth()->id(),
      ]);

      if(isset($request->images)){
      foreach ($request->images as $image){
        $filename = $image->store('public');
        PhotosRoom::create([
            'room_id' => $room->id,
            'filename' => Storage::url($filename)
          ]);
        }
      }
      $newestRoom = User::find(auth()->id())->rooms()->latest()->first()->id;

      return redirect('/dashboard')
      ->with('success','Nieuwe kamer geplaatst!
      Klik <a href="/kamer/'.$newestRoom.'">
      <em>hier</em></a> om de kamer te bekijken');;
    }

    public function show($id)
    {
      $room = Room::find($id);

      return view('show', compact('room'));
    }

    public function edit($id)
    {
      $room = Room::find($id);

      $cities = City::get();

      if ($room->user_id == Auth::id()){
        return view('edit', compact('room', 'cities', 'id'));
      } else {
        return redirect('/kamer/'.$id);
      }
    }

    public function update(UploadRequest $request, $id)
      {
        $this->validate(request(), [
          'street' => 'required',
          'housenumber' => 'required|digits_between:1,4',
          'city_id' => 'required',
          'postcode' => 'required|regex:/^[1-9][0-9]{3}[\s]?[A-Za-z]{2}$/i',
          'square_meter' => 'required|digits_between:1,2',
          'price' => 'required|digits_between:2,4',
          'images.*' => 'image|max:5048',
          'date_available' => 'required|date',
        ]);

        Room::find($id)->update([
          'street' => request('street'),
          'housenumber' => request('housenumber'),
          'city_id' => request('city_id'),
          'postcode' => request('postcode'),
          'square_meter' => request('square_meter'),
          'price' => request('price'),
          'date_available' => request('date_available'),
          'user_id' => auth()->id(),
        ]);

        if(isset($request->images)){
        foreach ($request->images as $image){
          $filename = $image->store('public');
          PhotosRoom::create([
              'room_id' => $id,
              'filename' => Storage::url($filename)
            ]);
          }
        }

      return redirect("/kamer/".$id);
    }

}
