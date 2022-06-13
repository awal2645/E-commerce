<?php

namespace App\Http\Controllers;

use App\Models\AddToCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViewcartController extends Controller
{
    public function viewCartPage(){
        $view_cart_count= AddToCart::where('user_ip',request()->ip())->count('qty');
        $view_cart_data=AddToCart::all()->where('user_ip',request()->ip());
        $total=AddToCart::all()->where('user_ip',request()->ip())->sum(
            function($add){
            return	$add->price* $add->qty;

            });
           
       
            $view_cart=AddToCart::where('user_ip',request()->ip())->get();
            $view_cart_data=$view_cart->all();
            return view( 'viewcart')->with(compact('view_cart_data','view_cart_count','view_cart_data','total',));
      
       
    }
   
    public function viewCartDelete($id){
        
        $viewCartDelete_data=AddToCart::find($id);
        $viewCartDelete_data->delete();
        return redirect()->back();
    }

  
}
