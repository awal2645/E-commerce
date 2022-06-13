<?php

namespace App\Http\Controllers;

use App\Models\AddProduct;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addProductPage()
    {
        $category=Category::all();
        return view('admins.addProduct')->with(compact('category'));
    }
    public function listProductPage(){
        $product=Product::all();
        return view('admins.listProduct')->with(compact('product'));
    }
    public function updateProductPage($id=null){
        $update_product=Product::find($id);
        return view('admins.updateProduct')->with(compact('update_product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addProduct(Request $request)
    {
        $product_data=new Product;
        $product_data->name=$request->name;
        $product_data->price=$request->price;
        $product_data->discount_price=$request->discount_price;
        $product_data->color=$request->color;
        $product_data->size=$request->size;
        $product_data->subcat_id=$request->subcat_id;
        $product_data->discription=$request->discription;
        if($request->hasfile('img1')){
            $img_file=$request->file('img1');
            $extansion=$img_file->getClientOriginalExtension();
            $img_name=time().'1.'.$extansion;
            $img_file->move('products/imgs/',$img_name);
            $product_data->img1='products/imgs/'.$img_name;
            
        }
        if($request->hasfile('img2')){
            $img_file=$request->file('img2');
            $extansion=$img_file->getClientOriginalExtension();
            $img_name=time().'2.'.$extansion;
            $img_file->move('products/imgs/',$img_name);
            $product_data->img2='products/imgs/'.$img_name;
            
        }
        if($request->hasfile('img3')){
            $img_file=$request->file('img3');
            $extansion=$img_file->getClientOriginalExtension();
            $img_name=time().'3.'.$extansion;
            $img_file->move('products/imgs/',$img_name);
            $product_data->img3='products/imgs/'.$img_name;
            
        }
        $product_data->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AddProduct  $addProduct
     * @return \Illuminate\Http\Response
     */
    public function updateAddProduct( Request $request ,$id)
    {
        $update_product_data=Product::find($id);
        $update_product_data->name=$request->update_name;
        $update_product_data->price=$request->update_price;
        $update_product_data->discount_price=$request->update_discount_price;
        $update_product_data->color=$request->update_color;
        $update_product_data->size=$request->update_size;
        $update_product_data->discription=$request->update_discription;
        $update_product_data->update();
        return redirect()->route('listProductPage');
        

    }

  

  
    public function deleteProduct( $id)

    {
        $delete_product_data=Product::find($id);
        $delete_product_data->delete();
        return redirect()->back();    
    }
}
