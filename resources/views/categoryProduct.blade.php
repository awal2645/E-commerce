@extends('layouts.fontLayout')
	








{{-- start add to section  --}}
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




{{-- start category section --}}
@section('fontMain')


		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- ASIDE -->
					<div id="aside" class="col-md-3">
						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Categories</h3>
							<div class="checkbox-filter">
								@foreach ($catgory as $catgory)
								<div class="input-checkbox">
									<input type="checkbox" id="category">
									<label for="category">
									<a href="{{url('/category-product-page/'.$catgory->id)}}">	<b>{{$catgory->category_name}}</b></a>
									</label>
								</div>
								@endforeach
				
							</div>
						</div>
						<!-- /aside Widget -->

						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Price</h3>
							<div class="price-filter">
								<div id="price-slider"></div>
								<div class="input-number price-min">
									<input id="price-min" type="number">
									<span class="qty-up">+</span>
									<span class="qty-down">-</span>
								</div>
								<span>-</span>
								<div class="input-number price-max">
									<input id="price-max" type="number">
									<span class="qty-up">+</span>
									<span class="qty-down">-</span>
								</div>
							</div>
						</div>
						<!-- /aside Widget -->

						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Brand</h3>
							<div class="checkbox-filter">
								<div class="input-checkbox">
									<input type="checkbox" id="brand-1">
									<label for="brand-1">
										<span></span>
										SAMSUNG
										<small>(578)</small>
									</label>
								</div>
								<div class="input-checkbox">
									<input type="checkbox" id="brand-2">
									<label for="brand-2">
										<span></span>
										LG
										<small>(125)</small>
									</label>
								</div>
								<div class="input-checkbox">
									<input type="checkbox" id="brand-3">
									<label for="brand-3">
										<span></span>
										SONY
										<small>(755)</small>
									</label>
								</div>
								<div class="input-checkbox">
									<input type="checkbox" id="brand-4">
									<label for="brand-4">
										<span></span>
										SAMSUNG
										<small>(578)</small>
									</label>
								</div>
								<div class="input-checkbox">
									<input type="checkbox" id="brand-5">
									<label for="brand-5">
										<span></span>
										LG
										<small>(125)</small>
									</label>
								</div>
								<div class="input-checkbox">
									<input type="checkbox" id="brand-6">
									<label for="brand-6">
										<span></span>
										SONY
										<small>(755)</small>
									</label>
								</div>
							</div>
						</div>
						<!-- /aside Widget -->

						<!-- aside Widget -->
						
						<!-- /aside Widget -->
					</div>
					<!-- /ASIDE -->

					<!-- STORE -->
					<div id="store" class="col-md-9">
						<!-- store top filter -->
						<div class="store-filter clearfix">
							<div class="store-sort">
								<label>
									Sort By:
									<select class="input-select">
										<option value="0">Popular</option>
										<option value="1">Position</option>
									</select>
								</label>

								<label>
									Show:
									<select class="input-select">
										<option value="0">20</option>
										<option value="1">50</option>
									</select>
								</label>
							</div>
							<ul class="store-grid">
								<li class="active"><i class="fa fa-th"></i></li>
								<li><a href="#"><i class="fa fa-th-list"></i></a></li>
							</ul>
						</div>
						<!-- /store top filter -->

						<!-- store products -->
						<div class="row">
						





							@foreach ($cat_related_product as $product_item)
											
										
							<!-- product -->
							


						
							<!-- product -->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="{{asset($product_item->img1)}}" alt="" width="200" height="150">
									</div>
									<div class="product-body">
										<p class="product-category">{{$product_item->cat->category_name}}</p>
										<h3 class="product-name"><a href="{{url('/viewProduct/single/'.$product_item->id)}}"> {{$product_item->name}}</a></h3>
										<h4 class="product-price">${{$product_item->discount_price}} <del class="product-old-price">${{$product_item->price}}</del></h4>
										<div class="product-rating">
										</div>
										<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
										<a class="btn btn-warning"  href="{{url('/viewProduct/single/'.$product_item->id)}}"><i class="fa fa-eye"></i> view</a>
										</div>
									</div>



									{{--start add to cat button --}}
									<div class="add-to-cart">
										<form action="{{url('add/to-cart/'.$product_item->id)}}" method="POST">
										@csrf
										<input type="hidden" name="price" id="" value="{{$product_item->discount_price}}">
										<input type="hidden" name="product_name" id="" value="{{$product_item->name}}">
										
										<button type="submit" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</a></button>
									</form>
									</div>
									{{--end add to cat button --}}



									
								</div>
							</div>
							<!-- /product -->

							<div class="clearfix visible-sm visible-xs"></div>
							@endforeach
							
						</div>
						<!-- /store products -->

						<!-- store bottom filter -->
						<div class="store-filter clearfix">
							<span class="store-qty">Showing 20-100 products</span>
							<ul class="store-pagination">
								<li class="active">1</li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
							</ul>
						</div>
						<!-- /store bottom filter -->
					</div>
					<!-- /STORE -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

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