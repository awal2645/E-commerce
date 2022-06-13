<?php

namespace App\Http\Controllers;

use App\Models\AddToCart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ViewProductController extends Controller
{
  
    public function  viewProduct($id=null){

        
        $view_cart_count= AddToCart::where('user_ip',request()->ip())->count('qty');
        $view_cart_data=AddToCart::all()->where('user_ip',request()->ip());
        $total=AddToCart::all()->where('user_ip',request()->ip())->sum(
            function($add){
            return	$add->price* $add->qty;

            });






           
        $category=Category::all();
        $view_product=Product::find($id);
        $cat_id=$view_product->subcat_id;
        $related_product=Product::where('subcat_id',$cat_id)->limit(4)->get();
        return view('viewProducts')->with(compact('view_product','category','related_product','view_cart_count','view_cart_data','total'));
    }
}
