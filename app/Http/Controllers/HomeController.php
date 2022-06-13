<?php

namespace App\Http\Controllers;

use App\Models\AddToCart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homePage(){
    
        $view_cart_count= AddToCart::where('user_ip',request()->ip())->count('qty');
        $view_cart_data=AddToCart::all()->where('user_ip',request()->ip());
        $total=AddToCart::all()->where('user_ip',request()->ip())->sum(
            function($add){
            return	$add->price* $add->qty;
            });

        $product_category=Category::all();
        $product_fetchData=Product::all();
        return view('home')->with(compact('product_fetchData','product_category','view_cart_count','view_cart_data','total'));
    }





    public function search(Request $request){
        $keyword=$request->search;
        $search_product=Product::query()->where('name','LIKE', "%{$keyword}%")->get();
        $view_cart_count= AddToCart::where('user_ip',request()->ip())->count('qty');
        $view_cart_data=AddToCart::all()->where('user_ip',request()->ip());
        $total=AddToCart::all()->where('user_ip',request()->ip())->sum(
            function($add){
            return	$add->price* $add->qty;

            });
           
        $catgory=Category::all();
       
        return view('searchProduct')->with(compact('search_product','catgory','view_cart_count','view_cart_data','total'));

    }
 
}
