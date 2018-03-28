<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Room;
use Nahid\Talk\Facades\Talk;
use Auth;
use View;

class AdminController extends Controller
{
    public function phpinfo()
    {
      return view('auth.phpinfo');
    }

    public function test()
    {
      $room = Room::find(3);
      dd($room->user_id);
      $user = User::where('id', Auth::id())
          ->update(['premium' => 1]);
    }
}
