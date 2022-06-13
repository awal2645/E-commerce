@extends('layouts.adminLayout')

@section('adminMain')
<!-- form user info -->

    <div class="card card-outline-secondary">
        <div class="card-header">
          <h3 class="mb-0">Product Information</h3>
        </div>

        <div class="card-body">
          <form autocomplete="off" class="form" role="form" action="{{route('addProduct')}}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="form-group row">
              <label class="col-lg-3 col-form-label form-control-label"> Name</label>
              <div class="col-lg-9">
                <input class="form-control" type="text" name="name" value=""  required>
              </div>
            </div>
         
            <div class="form-group row">
              <label class="col-lg-3 col-form-label form-control-label">Price</label>
              <div class="col-lg-9">
                <input class="form-control" type="text"  name="price" value="" required>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-lg-3 col-form-label form-control-label">Discount Price</label>
              <div class="col-lg-9">
                <input class="form-control" type="text" name="discount_price" value="" required>
              </div>

            </div>
            <div class="form-group row">
              <label class="col-lg-3 col-form-label form-control-label">Color</label>
              <div class="col-lg-9">
                <input class="form-control" type="text" name="color" value="" required>
              </div>
            </div>


            <div class="form-group row">
              <label class="col-lg-3 col-form-label form-control-label">Size</label>
              <div class="col-lg-9">
                <input class="form-control" type="text" name="size" value="" required>
              </div>
            </div>


            <div class="form-group row">
              <label class="col-lg-3 col-form-label form-control-label">Category</label>
              <div class="col-lg-9">
                <select class="form-control" name="subcat_id" id="user_time_zone" size="0">
                  @foreach ($category as $item)
                      
                 
                  <option value="{{$item->id}}">
                    {{$item->category_name}}
                  </option>
                  @endforeach
                </select>
              </div>
            </div>
            







            <div class="form-group row">
              <label class="col-lg-3 col-form-label form-control-label">Image</label>
              <div class="col-lg-3">
                <input class="form-control btn btn-secondary" type="file" name="img1" value="" required> 
                                        
              </div>
              <div class="col-lg-3">
                <input class="form-control btn btn-secondary" type="file" name="img2" value="" required> 
                                        
              </div>
              <div class="col-lg-3">
                <input class="form-control btn btn-secondary" type="file" name="img3" value="" required> 
                                        
              </div>
            </div>


            <div class="form-group row">
              <label class="col-lg-3 col-form-label form-control-label" >Discription</label>
              <div class="col-lg-9">
                <textarea class="form-control"  name="discription" value="" id="" cols="30" rows="4" required></textarea>
                
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