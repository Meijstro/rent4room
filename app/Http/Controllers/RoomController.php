<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\User;

class RoomController extends Controller
{
    public function show(){

      $rooms = Room::all();

      return view('layouts.room', compact('rooms'));
    }

    public function index()
    {
      $rooms = Room::all();

      return view('welcome', compact('rooms'));
    }
}
