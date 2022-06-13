@extends('layouts.adminLayout')

@section('adminMain')
<div class="container row justify-content-center ">
<div class="col-sm-7 col-md-7 text-center ">
    <h1>ADD PRODUCT Sub_CATEGORY</h1>
  </div>
   <div class="col-sm-7 col-md-7  text-center">
  
  <form class="form-group" action="{{url('/admin/update-subcategory/'.$updateSubCategory->id)}}" method="POST" enctype="multipart/form-data">
    @csrf


    <div class="form row">
      <label >Category</label>
      <div class="col-12">
        <b class=" btn-danger form-control ">You cannot change the main category</b>
       
      </div>
    </div>



    
    <div class="form-row ">
      <label for="">Name</label>
      <input type="text" name="update_sub_category_name" value="{{$updateSubCategory->name}}" class="form-control" id="exampleInputName2" placeholder="Sub Category Name" required>
    </div>
    
   <br>
    <div class="form-row">
        <input type="submit" value="Send" class="form-control btn btn-primary">

</div>
  </form>
  </div>
</div>
    
@endsection