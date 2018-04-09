<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use PayPro;
use Auth;
use \App\User;

class IDealController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index()
  {
    $setCode = User::where('id', Auth::id())
        ->update(['ideal_code' => str_random(10)]);
    $user = User::find(Auth::id());

    $client = new \PayPro\Client(env('PAYPRO_API_KEY'));
    $client->setCommand("create_payment");
    $client->setParams(array(
      "amount" => 1250,
      "pay_method" => "",
      "consumer_name" => $user->name,
      "consumer_email" => $user->email,
      "description" => "Room4Rent: Account Upgrade",
      "cancel_url" => url("/dashboard"),
      "return_url" => url("/upgrade/paymentcomplete/".$user->ideal_code),
      "remarks" => "user_id: ".auth()->id(),
      "test_mode" => true,
    ));

    $response = $client->execute();

    if(isset($response)){
      return redirect($response['return']['payment_url']);
    } else {
      return redirect("/dashboard")
        ->with('alert', 'Something went wrong; we have redirected you back.');
    }

  }

  public function completePayment($code)
  {
    $userCode = User::find(Auth::id())->ideal_code;

    if($code == $userCode){
      User::where('id', Auth::id())
          ->update(['premium' => 1]);

      return redirect("/dashboard")
        ->with('success','Account upgrade voltooid!
        Je kan nu van alle functionaliteit van onze site gebruik maken.');
    } else {
      return redirect("/dashboard")
        ->with('alert', 'Something went wrong; Check your bank account.
        If your payment went through but your account hasn\'t upgraded,
        pleaase contact us.');
    }
  }
}
