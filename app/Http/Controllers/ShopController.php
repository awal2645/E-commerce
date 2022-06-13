<?php

namespace App\Http\Controllers;

use App\Models\AddToCart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function shopPage(){

        $view_cart_count= AddToCart::where('user_ip',request()->ip())->count('qty');
        $view_cart_data=AddToCart::all()->where('user_ip',request()->ip());
        $total=AddToCart::all()->where('user_ip',request()->ip())->sum(
            function($add){
            return	$add->price* $add->qty;

            });
           
        $catgory=Category::all();
        $view_product_all= Product::all();
        return view('shop')->with(compact('view_product_all','catgory','view_cart_count','view_cart_data','total'));
    }
}
