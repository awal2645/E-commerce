@extends('layouts.adminLayout')

@section('adminMain')
<!-- form user info -->

    <div class="card card-outline-secondary">
        <div class="card-header">
          <h3 class="mb-0"> Update Product Information</h3>
        </div>

        <div class="card-body">
          <form autocomplete="off" class="form" role="form" action="{{url('/admin/update-product/'.$update_product->id)}}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="form-group row">
              <label class="col-lg-3 col-form-label form-control-label"> Name</label>
              <div class="col-lg-9">
                <input class="form-control" type="text" name="update_name" value="{{$update_product->name}}" fixed required>
              </div>
            </div>
            
         
            <div class="form-group row">
              <label class="col-lg-3 col-form-label form-control-label">Price</label>
              <div class="col-lg-9">
                <input class="form-control" type="text"  name="update_price" value="{{$update_product->price}}" required>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-lg-3 col-form-label form-control-label">Discount Price</label>
              <div class="col-lg-9">
                <input class="form-control" type="text" name="update_discount_price" value="{{$update_product->discount_price}}" required>
              </div>

            </div>
            <div class="form-group row">
              <label class="col-lg-3 col-form-label form-control-label">Color</label>
              <div class="col-lg-9">
                <input class="form-control" type="text" name="update_color" value="{{$update_product->color}}" required>
              </div>
            </div>


            <div class="form-group row">
              <label class="col-lg-3 col-form-label form-control-label">Size</label>
              <div class="col-lg-9">
                <input class="form-control" type="text" name="update_size" value="{{$update_product->name}}" required>
              </div>
            </div>


           
            







        


            <div class="form-group row">
              <label class="col-lg-3 col-form-label form-control-label" >Discription</label>
              <div class="col-lg-9">
                <textarea class="form-control" this.internals_.ariaValueText = "";
                name="update_discription" value=""  id="" cols="30" rows="4" required>{{$update_product->discription}}</textarea>
                
              </div>
            </div>
            <div class="form-group row">
              <label class="col-lg-3 col-form-label form-control-label"></label>
              <div class="col-lg-9">
                <input class="btn btn-secondary" type="reset" value="Reset"> 
                 <input class="btn btn-primary" type="submit" value="Save Changes">
              </div>
            </div>
          </form>
        </div>
      </div><!-- /form user info -->
  
@endsection