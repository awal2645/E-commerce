<?php

namespace App\Http\Controllers;

use App\Models\AddToCart;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkoutPage(){


        $view_cart_count= AddToCart::where('user_ip',request()->ip())->count('qty');
        $view_cart_data=AddToCart::all()->where('user_ip',request()->ip());
        $total=AddToCart::all()->where('user_ip',request()->ip())->sum(
            function($add){
            return	$add->price* $add->qty;

            });
           


        $cart_data= AddToCart::where('user_ip',request()->ip())->get();
        $cart_data=$cart_data->all();
        return view("checkout")->with(compact('cart_data','view_cart_count','view_cart_data','total'));
    }


   
}
