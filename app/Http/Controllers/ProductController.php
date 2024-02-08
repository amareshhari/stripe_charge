<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::where('status',1)->get();
        return view('product',compact('products'));
    }

    public function view(Product $product){
        return view('detail',compact('product'));
    }

    public function purchase(Request $request){
        // $stripe = array(
        //     "secret_key"      => env('STRIPE_SECRET'),
        //     "publishable_key" => env('STRIPE_KEY')
        // );
    
        // \Stripe\Stripe::setApiKey($stripe['secret_key']);
        // $stripeToken = Token::create(array(
        //     "card" => array(
        //         "number"    => $request->get('number'),
        //         "exp_month" => $request->get('exp_month'),
        //         "exp_year"  => $request->get('exp_year'),
        //         "cvc"       => $request->get('cvc'),
        //         "name"      => $request->get('name')
        //     )
        // ));
        // Product::charge($request->price, $stripeToken);
        $stripe = new \Stripe\StripeClient('sk_test_51JaD4KSGv3dRRfgE1FCMdzR06ikhFAyuEMakO3AowZ6sCJhsCIbYFlJq7zfAneNjExmEFFQaD1evdGGCg3vva35A0012hx7mTI');
        $stripe->charges->create([
            'amount' => $request->price,
            'currency' => 'inr',
            'source' => 'tok_visa',
        ]);
        return redirect()->route('product.success');
    }

    public function success(){
        return view('success');
    }
}
