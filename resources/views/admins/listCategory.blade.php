@extends('layouts.adminLayout')

@section('adminMain')


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
                  <th>IMG</th>
                  <th>Action</th>
                  
              </tr>
          </thead>
          <tbody>
              @foreach ($listCategory as $item)
                  
       
              <tr>
                
                  <td> {{$item->id}}</td>
                  <td>{{$item->category_name}}</td>
                  <td><img src="{{asset($item->category_img)}}" alt="img"></td>
                  
                  <td>
                      
                      <button class="view btn"><a class="a" href="{{url('/admin/update-category/'.$item->id)}}">view</a></button>
                      <button class="delete btn"><a class="a" href="{{url('/admin/delete-category/'.$item->id)}}">Delete</a></button>
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