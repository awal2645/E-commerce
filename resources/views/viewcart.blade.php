@extends('layouts.fontLayout')




@section('addToCart')
	

	

<div class="dropdown" style="cursor: pointer">
	<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
		<i class="fa fa-shopping-cart"></i>
	
		<span>Your Cart</span>
		
		<div class="qty">{{$view_cart_count}} </div>
	</a>
	<div class="cart-dropdown">
		<div class="cart-list">
			<div class="product-widget  ">
			
				<div class="product-body "   >
					@foreach ($view_cart_data as $item)
					<h3 class="product-name"><a href="#"> {{$item->product_name}}</a></h3>
					<h4 class="product-price"><span class="qty">{{$item->qty}}x</span>{{$item->price}}</h4>
					@endforeach
				</div>
						
	
		
				</div>
			
	
		
			
			
		</div>
		<div class="cart-summary">
			<small> {{$view_cart_count}} Item(s) selected</small>
			<h5> {{$total}} Taka</h5>
		</div>
		
		<div class="cart-btns">
			<a href="{{route('viewCartPage')}}">View Cart</a>
			<a href="{{route('checkoutPage')}}">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
		</div>
	</div>
</div>
@endsection

@section('fontMain')

<style>


.mr-2{
  margin-right: 20px;
}

.divTable{
    justify-content: center
	display: table;
	width: 100%;
}
.rowTable {
	display: table-row;
 
    
}
.rownav{
    background-color:#D10024; 
    color:#EEE;

} 
.divTableHeading {
	display: table-header-group;
}
.divTableCol, .divTableHead {
    
	border-bottom: 1px solid #eee;
	display: table-cell;
	padding: 3px 10px;
}
.divTableHeading {
	background-color: #EEE;
	display: table-header-group;
	font-weight: bold;
}
.divTableFoot {
	background-color: #EEE;
	display: table-footer-group;
	font-weight: bold;
}
.divTableBody {
	display: table-row-group;
}



</style>


<div class="container" style="width: 65%;margin-top:20px">
    <div class="divTable div-hover ">
        
            <div class="rowTable rownav  pb-2" >
                <div class="divTableCol"> <b>Product</b> </div>
               
                <div class="divTableCol"> <b>Quantity</b></div>
                <div class="divTableCol"> <b>Price</b> </div>
                <div class="divTableCol"> <b>Total</b> </div>
                <div class="divTableCol">  <b>Actions</b> </div>
            </div>
        
        
      
          
      {{-- @php
      $total=App\Models\AddToCart::all()->where('user_ip',request()->ip())->sum(
      function($add){
          return $add->price * $add->qty;
        });

      $gtytotal=App\Models\AddToCart::all()->where('user_ip',request()->ip())->where('product_id',$item->product_id)->sum(
      function($add){
          return $add->price * $add->qty;
        });
      @endphp --}}
      @foreach ($view_cart_data as $item)
            <div class="rowTable ">
                <div class="divTableCol">
                    <div class="media">
                       
                        <div class="media-body">
                            

                            <h4 class="media-heading"><a href="{{url('/viewProduct/single/'.$item->product_id)}}">{{$item->product_name}}</a></h4>
                            
                        </div>
                    </div>
                </div>
               
                <div class="divTableCol">


                    
                    <input type="" readonly class="form-control" id="exampleInputEmail1" name="upqty" value="{{$item->qty}}" />
                    
                </div>
                <div class="divTableCol"><strong>{{$item->price}}</strong></div>
                <div class="divTableCol"><strong> 
                <?php 
                $count=$item->qty;
                $price=$item->price;
                echo $count*$price;
                
                ?> </strong></div>
                    
                <div class="divTableCol">
                   
                
                   <a href="{{url('/view-cart/delete/'.$item->id)}}" class="btn btn-danger">  <span class="fa fa-remove"></span> Remove</a>
               
                </div>
           
            </div>
    
            @endforeach

           
        
            <div class="rowTable">
                <div class="divTableCol"></div>
                <div class="divTableCol"></div>
                <div class="divTableCol"></div>
                <div class="divTableCol"><h5> Total</h5></div>
                <div class="divTableCol">
                    <h5><strong>	৳  {{$total}}.00</strong></h5>
                   
                </div>
            </div>
            <div class="rowTable">
                <div class="divTableCol"></div>
                <div class="divTableCol"></div>
                <div class="divTableCol"></div>
                <div class="divTableCol"><h3>Grand Total</h3></div>
                <div class="divTableCol">
                    <h3><strong>	৳ {{$total}}.00</strong></h3>
                </div>
            </div>
            <div class="rowTable">
                <div class="divTableCol"></div>
                <div class="divTableCol"></div>
                <div class="divTableCol"></div>
                <div class="divTableCol">
                    <a class="btn btn-default col-6" href="{{route('shopPage')}}">Again Shop</a>  
                </div>
               
            



            </div>        
    </div>
</div>

		<!-- NEWSLETTER -->
		<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="newsletter">
							<p>Sign Up for the <strong>NEWSLETTER</strong></p>
							<form>
								<input class="input" type="email" placeholder="Enter Your Email">
								<button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribe</button>
							</form>
							<ul class="newsletter-follow">
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-instagram"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-pinterest"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /NEWSLETTER -->
    
@endsection