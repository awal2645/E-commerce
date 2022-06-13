<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
    public function addCategoryPage()
    {
        return view('admins.addCategory');
    }




    public function listCategoryPage()
    {
        $listCategory=Category::all();
        return view('admins.listCategory')->with(compact('listCategory'));
    }




    public function updateCategoryPage($id=null)
    {
        $updateCategory=Category::find($id);
        return view('admins.updateCategory')->with(compact('updateCategory'));
    }





  
    public function addCategory(Request $request)
    {
        $category_data=new Category;
        $category_data->category_name=$request->category_name;
  
        if($request->hasfile('category_img')){
            $img_file=$request->file('category_img');
            $img_extension=$img_file->getClientOriginalExtension();
            $img_name=time().'.'.$img_extension;
            $img_file->move('category/img',$img_name);
            $category_data->category_img='category/img/'.$img_name;
        }
        $category_data->save();
        return redirect()->back();
    }

   

    

    public function updateCategory(Request $request ,$id)
    {
        $updateCategory_data=Category::find($id);
        $updateCategory_data->category_name=$request->update_category_name;
        if($request->hasfile('update_category_img')){
            $img_file=$request->file('update_category_img');
            $img_extension=$img_file->getClientOriginalExtension();
            $img_name=time().'.'.$img_extension;
            $img_file->move('category/img',$img_name);
            $updateCategory_data->category_img='category/img/'.$img_name;

        }
        $updateCategory_data->save();
        return redirect()->route('listCategoryPage');
    }

    

    public function deleteCategory($id)
    {
        $deleteCategory_data=Category::find($id);
        $deleteCategory_data->delete();
        return redirect()->route('listCategoryPage');
    }
}
