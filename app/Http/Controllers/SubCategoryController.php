<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function subCategoryPage()
    {
        $category=Category::all();
        return view('admins.addSubCategory')->with(compact('category'));
    }

 
    public function addSubCategory(Request $request)
    {
        $subCategory_data= new SubCategory;
        $subCategory_data->name=$request->sub_category_name;
        $subCategory_data->subcat_id=$request->cat_id;
        $subCategory_data->save();
        return redirect()->back()->with('add', 'Data Updated Successful.!');

    }

    
    public function listSubCategoryPage()
    {
        $listSubCategory=SubCategory::all();
        return view('admins.listSubCategory')->with(compact('listSubCategory'));
    }

 
    public function updateSubCategoryPage($id=null)
    {
        $updateSubCategory=SubCategory::find($id);
    
        return view('admins.updateSubCategory')->with(compact('updateSubCategory'));
    }

    public function updateSubCategory(Request $request ,$id)
    {
        $update_subcategory_data=SubCategory::find($id);
        $update_subcategory_data->name=$request->update_sub_category_name;
        $update_subcategory_data->update();
        return redirect()->route('listSubCategoryPage')->with('update', 'Data Updated Successful.!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function deleteSubCategory($id)
    {
        $delete_subcategory=SubCategory::find($id);
        $delete_subcategory->delete();
        return redirect()->back()->with('delete', 'Delete Data.!');
    }
}
