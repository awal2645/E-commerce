<?php

namespace App\Http\Controllers;

use App\Models\AddToCart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryProductController extends Controller
{
    public function categoryProductPage($id=null)
    { 
        $view_cart_count= AddToCart::where('user_ip',request()->ip())->count('qty');
        $view_cart_data=AddToCart::all()->where('user_ip',request()->ip());
        $total=AddToCart::all()->where('user_ip',request()->ip())->sum(
            function($add){
            return	$add->price* $add->qty;

            });
           
        $catgory=Category::all();
        $cat_related_product=Product::where('subcat_id',$id)->get();
        return view('categoryProduct')->with(compact('cat_related_product','catgory','view_cart_count','view_cart_data','total'));
    }
}
