@extends('layouts.adminLayout')

@section('adminMain')

@if(session()->has('update'))
    <div class="alert alert-success   alert-dismissible fade show text-center">
        {{ session()->get('update') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
    </div>
@endif



@if(session()->has('delete'))
    <div class="alert alert-danger   alert-dismissible fade show text-center">
        {{ session()->get('delete') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
    </div>
@endif
<div class="container">
    <div class="row ">
      
       
      
      <div class="col-12">
  
  
        <style>
          table {
      width: 90%;
      text-align: center;
     
      border-spacing: 1px;
      font-family: 'segoe ui';
      margin: auto;
  }
  
  caption {
    font-weight: bolder
  }
  
  table td {
      padding: 10px;
      background-color: #eee;
  }
  
  table th {
      background-color:#3E69DD;
      color: #fff;
      padding: 10px;
  }
  
  img {
      width: 90px;
      height: 90px;
  }
  .a{
      color: #fff
}
.a:hover{
    color: antiquewhite;
}
  
  .view,
  .delete {
      border: none;
      padding: 5px 10px;
      color: white;
      font-weight: bold;
  }
  
  .view {
      background-color: #3E69DD;
  }
  
  .delete {
      background-color: #C40C2C;
  }
  
        </style>
        <table class=" table  table-bordered">
          
          <thead>
              <tr>
                  
                  <th>ID</th>
                  <th>Name</th>
                  <th>SubID</th>
                  <th>Action</th>
                  
              </tr>
          </thead>
          <tbody>
              @foreach ($listSubCategory as $item)
                  
       
              <tr>
                
                  <td> {{$item->id}}</td>
                  <td>{{$item->name}}</td>
                  <td>{{$item->subcat_id}} </td>
                  
                  <td>
                      
                      <button class="view btn"><a class="a" href="{{url('/admin/update-subcategory/'.$item->id)}}">view</a></button>
                      <button class="delete btn"><a class="a" href="{{url('/admin/delete-subcategory/'.$item->id)}}">Delete</a></button>
                  </td>
              </tr>
              @endforeach
  
              
  
              
  
            
  
          </tbody>
         
          <div class= "row justify-content-center">
         
        </div>
  
      </table>
      
      </div>
    </div>
  </div>
    
@endsection