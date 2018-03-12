<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\User;

class RoomController extends Controller
{
    public function show(){
      return view('rooms');
    }
}
