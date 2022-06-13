@extends('layouts.adminLayout')

@section('adminMain')
<div class="container row justify-content-center ">
<div class="col-sm-7 col-md-7 text-center ">
    <h1>UPDATE PRODUCT CATEGORY</h1>
  </div>
   <div class="col-sm-7 col-md-7  text-center">
  
  <form class="form-group" action="{{url('/admin/update-category/'.$updateCategory->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    
    <div class="form-row ">
      <label for="">Name</label>
      <input type="text" name="update_category_name" value="{{$updateCategory->category_name}}" class="form-control" id="exampleInputName2" placeholder="Category Name" required>
    </div>
    <div class="form-row">
      <label for="exampleInputEmail2">Image</label>
      <input type="file" name="update_category_img" value="{{$updateCategory->category_img}}" class="form-control btn btn-secondary" id="exampleInputEmail2" required>
    </div><br>
    <div class="form-row">
        <input type="submit" value="Update" class="form-control btn btn-primary">

</div>
  </form>
  </div>
</div>
    
@endsection