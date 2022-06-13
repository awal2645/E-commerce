@extends('layouts.adminLayout')

@section('adminMain')


@if(session()->has('add'))
    <div class="alert alert-success alert-dismissible fade show text-center">
        {{ session()->get('add') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
<div class="container row justify-content-center ">
<div class="col-sm-7 col-md-7 text-center ">
    <h1>ADD PRODUCT Sub_CATEGORY</h1>
  </div>
   <div class="col-sm-7 col-md-7  text-center">
  
  <form class="form-group" action="{{route('addSubCategory')}}" method="POST" enctype="multipart/form-data">
    @csrf


    <div class="form row">
      <label >Category</label>
      <div class="col-12">
        <select class="form-control  " name="cat_id" id="user_time_zone" size="0">
          @foreach ($category as $item)
              
         
          <option value="{{$item->id}}">
            {{$item->category_name}}
          </option>
          @endforeach
        </select>
      </div>
    </div>



    
    <div class="form-row ">
      <label for="">Name</label>
      <input type="text" name="sub_category_name" class="form-control" id="exampleInputName2" placeholder="Sub Category Name" required>
    </div>
  
   <br>
    <div class="form-row">
        <input type="submit" value="Send" class="form-control btn btn-primary">

</div>
  </form>
  </div>
</div>
    
@endsection