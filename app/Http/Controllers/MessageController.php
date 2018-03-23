<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Nahid\Talk\Facades\Talk;
use Auth;
use View;

class MessageController extends Controller
{

    public function __construct()
    {
      $this->middleware('auth');

      $authUserID = Auth::id();
      Talk::setAuthUserId($authUserID);

      View::composer('messages.peoplelist', function($view) {
      $threads = Talk::threads();
      $view->with(compact('threads'));
      });
    }

    public function index()
    {
        $users = User::all();
        return view('messages.index', compact('users'));
    }

    public function chatHistory($id)
    {
    $conversations = Talk::getMessagesByUserId($id, 0, 5);
    $user = '';
    $messages = [];
    if(!$conversations) {
        $user = User::find($id);
    } else {
        $user = $conversations->withUser;
        $messages = $conversations->messages;
    }
    return view('messages.conversations', compact('messages', 'user'));
    }

    public function ajaxSendMessage(Request $request)
    {
      if ($request->ajax()) {
          $rules = [
              'message-data'=>'required',
              '_id'=>'required'
          ];
          $this->validate($request, $rules);
          $body = $request->input('message-data');
          $userId = $request->input('_id');
          if ($message = Talk::sendMessageByUserId($userId, $body)) {
            return $message;
              $html = view('messages.newmessage', compact('message'))->render();
              return response()->json(['status'=>'success', 'html'=>$html], 200);
          }
      }
    }
    public function ajaxDeleteMessage(Request $request, $id)
    {
        if ($request->ajax()) {
            if(Talk::deleteMessage($id)) {
                return response()->json(['status'=>'success'], 200);
            }
            return response()->json(['status'=>'errors', 'msg'=>'something went wrong'], 401);
        }
    }
}
