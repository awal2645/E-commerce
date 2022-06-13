<?php

namespace App\Http\Controllers;

use App\Models\AddToCart;
use Illuminate\Http\Request;

use function Symfony\Component\VarDumper\Dumper\esc;

class AddToCartController extends Controller
{

public function addToCart(Request $request,$product_id){

$cheak=addToCart::where('product_id',$product_id)->first();
if($cheak){
    AddToCart::where('product_id',$product_id)->increment('qty',$request->productqty );
    return redirect()->route('homePage');
}else{
    $addTOCart_data= new AddToCart;
    $addTOCart_data->product_id=$product_id;
    $addTOCart_data->qty=$request->productqty;
    $addTOCart_data->product_name=$request->product_name;
    $addTOCart_data->price=$request->price ;
    $addTOCart_data->user_ip=request()->ip();
    $addTOCart_data->save();
    return redirect()->route('checkoutPage');

  }
}


}
