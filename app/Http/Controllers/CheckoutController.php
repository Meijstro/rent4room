<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Charge;
use App\User;
use Auth;

class CheckoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
      $this->createStripeCharge($request);

      $user = User::where('id', Auth::id())
          ->update(['premium' => 1]);

      return redirect()->back()->with('success', 'Payment completed successfully.');
    }

    public function createStripeCharge($request)
    {
      Stripe::setApiKey(env('STRIPE_SECRET_KEY'));

      try {
        $customer = Customer::create([
            'email' => $request->get('stripeEmail'),
            'source'  => $request->get('stripeToken')
        ]);

        $charge = Charge::create([
            'customer' => $customer->id,
            'amount' => 1250,
            'currency' => "eur"
        ]);
      } catch (\Stripe\Error\Base $e) {
          return redirect()->back()->withError($e)->send();
        }
    }
}
