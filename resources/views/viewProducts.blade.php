@extends('layouts.fontLayout')

{{-- start add to cart --}}
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



{{-- start vieProduct section --}}


		@section('fontMain')
		<style>
			html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video {
				margin: 0;
			  padding: 0;
			  border: 0;
		
			  vertical-align: baseline
			}
			
			article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section { display: block }
			
			body { line-height: 1 }
			
			ol, ul { list-style: none }
			
			blockquote, q { quotes: none }
			
			blockquote:before, blockquote:after, q:before, q:after {
			  content: '';
			  content: none
			}
			
			table {
			  border-collapse: collapse;
			  border-spacing: 0
			}
			
			html {
			  box-sizing: border-box;
			  height: 100%;
			}
			
			*, *::before, *::after {
			  box-sizing: inherit;
			  margin: 0;
			  padding: 0;
			}
			
			.containerimg {
			  display: -webkit-box;
			  display: -ms-flexbox;
			  display: flex;
			  -webkit-box-pack: center;
			  -ms-flex-pack: center;
			  justify-content: center;
			}
			
			.thumbnails {
			  display: -webkit-box;
			  display: -ms-flexbox;
			  display: flex;
			  -webkit-box-orient: vertical;
			  -webkit-box-direction: normal;
			  -ms-flex-direction: column;
			  flex-direction: column;
			  line-height: 0;
			}
			
			.thumbnails li {
			  -webkit-box-flex: 1;
			  -ms-flex: auto;
			  flex: auto;
			}
			
			.thumbnails a { display: block; }
			
			.thumbnails img {
				box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
				border: 5px;
			  width: 20vmin;
			  height: 14vmin;
			  -o-object-fit: cover;
			  object-fit: cover;
			  -o-object-position: top;
			  object-position: top;
			}
			
			.slides { overflow: hidden; }
			
			.slides, .slides li {
			  width: 75vmin;
			  height: 60vmin;
			}
			
			.slides img {
				border: 10px;
				box-shadow: rgba(255, 255, 255, 0.2) 0px 0px 0px 1px inset, rgba(0, 0, 0, 0.9) 0px 0px 0px 1px;
				width: 69vmin;
			  height: 59vmin;
			  -o-object-fit: cover;
			  object-fit: cover;
			  -o-object-position: top;
			  object-position: bottom;
			}
			
			.slides li {
			  position: absolute;
			  z-index: 1;
			}
			 @-webkit-keyframes 
			slide {  0% {
			 -webkit-transform: translateY(-100%);
			 transform: translateY(-100%);
			}
			 100% {
			 -webkit-transform: translateY(0%);
			 transform: translateY(0%);
			}
			}
			 @keyframes 
			slide {  0% {
			 -webkit-transform: translateY(-100%);
			 transform: translateY(-100%);
			}
			 100% {
			 -webkit-transform: translateY(0%);
			 transform: translateY(0%);
			}
			}
			
			.slides li:target {
			  z-index: 3;
			  -webkit-animation: slide 1s 1;
			}
			 @-webkit-keyframes 
			hidden {  0% {
			 z-index: 2;
			}
			 100% {
			 z-index: 2;
			}
			}
			 @keyframes 
			hidden {  0% {
			 z-index: 2;
			}
			 100% {
			 z-index: 2;
			}
			}
			
			.slides li:not(:target) { -webkit-animation: hidden 1s 1; }
			</style>




















	

		<!-- SECTION -->
		<div class="section">
			<!-- container -->


			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- Product main img -->




					<div class="col-md-7">
						<div class="containerimg">
							<ul class="slides">
							  <li id="slide1"><img src="{{asset($view_product->img1)}}" alt="" /></li>
							  <li id="slide2"><img src="{{asset($view_product->img2)}}" alt="" /></li>
							  <li id="slide3"><img src="{{asset($view_product->img3)}}" alt="" /></li>
							  <li id="slide4"><img src="{{asset($view_product->img1)}}" alt="" /></li>
							
							</ul>
							<ul class="thumbnails">
							  <li> <a href="#slide1"><img src="{{asset($view_product->img1)}}" /></a> </li>
							  <li> <a href="#slide2"><img src="{{asset($view_product->img2)}}" /></a> </li>
							  <li> <a href="#slide3"><img src="{{asset($view_product->img3)}}" /></a> </li>
							  <li> <a href="#slide4"><img src="{{asset($view_product->img1)}}" /></a> </li>
							  
							</ul>
						</div>
					</div><!-- End .col-md-6 -->

















					<!-- Product details -->
					<div class="col-md-5">
						<div class="product-details">
							<h2 class="product-name">{{$view_product->name}}</h2>
							{{-- <div>
								<div class="product-rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
								</div>
								<a class="review-link" href="#">10 Review(s) | Add your review</a>
							</div> --}}
							<div>
								<h3 class="product-price">{{$view_product->discount_price}}৳ <del class="product-old-price">{{$view_product->price}}	৳</del></h3>
								<span class="product-available">In Stock</span>
							</div>
							<p>{{$view_product->discription}}</p>

							<div class="product-options">
								<label>
									<b>Size</b>

									<input type="text" class="btn" name="" id="" value="{{$view_product->size}}"  readonly>
								</label>
								<label>
									<b>Color</b>
									
										<input type="text" class="btn"  name="" id="" value="{{$view_product->color}}" readonly>
									
								</label>
							</div>

							<div class="add-to-cart">
								<div class="qty-label">
									<form   action="{{url('add/to-cart/'.$view_product->id)}}" method="POST">
										@csrf
									<b>Qty</b>
									<div class="input-number">
										<input type="number" name="productqty" value="1">
										<span class="qty-up">+</span>
										<span class="qty-down">-</span>
									</div>
								</div>
								<hr>
								
								
									<input type="hidden" name="price" id="" value="{{$view_product->discount_price}}">
									<input type="hidden" name="product_name" id="" value="{{$view_product->name}}">
									
									<button type="submit" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</a></button>
								</form>


							</div>

							<ul class="product-btns">
								<li><a href="#"><i class="fa fa-heart-o"></i> add to wishlist</a></li>
								<li><a href="#"><i class="fa fa-exchange"></i> add to compare</a></li>
							</ul>

							<ul class="product-links">
								<li>Category:</li>
								<li><a href="#">{{$view_product->cat->category_name}}</a></li>
								
							</ul>

							<ul class="product-links">
								<li>Share:</li>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-envelope"></i></a></li>
							</ul>

						</div>
					</div>
					<!-- /Product details -->

					<!-- Product tab -->
					<div class="col-md-12">
						<div id="product-tab">
							<!-- product tab nav -->
							<ul class="tab-nav">
								<li class="active"><a data-toggle="tab" href="#tab1">Description</a></li>
								<li><a data-toggle="tab" href="#tab2">Details</a></li>
								<li><a data-toggle="tab" href="#tab3">Reviews (3)</a></li>
							</ul>
							<!-- /product tab nav -->

							<!-- product tab content -->
							<div class="tab-content">
								<!-- tab1  -->
								<div id="tab1" class="tab-pane fade in active">
									<div class="row">
										<div class="col-md-12">
											<p>{{$view_product->discription}}</p>
										</div>
									</div>
								</div>
								<!-- /tab1  -->

								<!-- tab2  -->
								<div id="tab2" class="tab-pane fade in">
									<div class="row">
										<div class="col-md-12">
											<p>{{$view_product->discription}}</p></p>
										</div>
									</div>
								</div>
								<!-- /tab2  -->

								<!-- tab3  -->
								<div id="tab3" class="tab-pane fade in">
									<div class="row">
										<!-- Rating -->
										<div class="col-md-3">
											<div id="rating">
												<div class="rating-avg">
													<span>4.5</span>
													<div class="rating-stars">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
													</div>
												</div>
												<ul class="rating">
													<li>
														<div class="rating-stars">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
														</div>
														<div class="rating-progress">
															<div style="width: 80%;"></div>
														</div>
														<span class="sum">3</span>
													</li>
													<li>
														<div class="rating-stars">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<div class="rating-progress">
															<div style="width: 60%;"></div>
														</div>
														<span class="sum">2</span>
													</li>
													<li>
														<div class="rating-stars">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<div class="rating-progress">
															<div></div>
														</div>
														<span class="sum">0</span>
													</li>
													<li>
														<div class="rating-stars">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<div class="rating-progress">
															<div></div>
														</div>
														<span class="sum">0</span>
													</li>
													<li>
														<div class="rating-stars">
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<div class="rating-progress">
															<div></div>
														</div>
														<span class="sum">0</span>
													</li>
												</ul>
											</div>
										</div>
										<!-- /Rating -->

										<!-- Reviews -->
										<div class="col-md-6">
											<div id="reviews">
												<ul class="reviews">
													<li>
														<div class="review-heading">
															<h5 class="name">John</h5>
															<p class="date">27 DEC 2018, 8:0 PM</p>
															<div class="review-rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star-o empty"></i>
															</div>
														</div>
														<div class="review-body">
															<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
														</div>
													</li>
													<li>
														<div class="review-heading">
															<h5 class="name">John</h5>
															<p class="date">27 DEC 2018, 8:0 PM</p>
															<div class="review-rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star-o empty"></i>
															</div>
														</div>
														<div class="review-body">
															<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
														</div>
													</li>
													<li>
														<div class="review-heading">
															<h5 class="name">John</h5>
															<p class="date">27 DEC 2018, 8:0 PM</p>
															<div class="review-rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star-o empty"></i>
															</div>
														</div>
														<div class="review-body">
															<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
														</div>
													</li>
												</ul>
												<ul class="reviews-pagination">
													<li class="active">1</li>
													<li><a href="#">2</a></li>
													<li><a href="#">3</a></li>
													<li><a href="#">4</a></li>
													<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
												</ul>
											</div>
										</div>
										<!-- /Reviews -->

										<!-- Review Form -->
										<div class="col-md-3">
											<div id="review-form">
												<form class="review-form">
													<input class="input" type="text" placeholder="Your Name">
													<input class="input" type="email" placeholder="Your Email">
													<textarea class="input" placeholder="Your Review"></textarea>
													<div class="input-rating">
														<span>Your Rating: </span>
														<div class="stars">
															<input id="star5" name="rating" value="5" type="radio"><label for="star5"></label>
															<input id="star4" name="rating" value="4" type="radio"><label for="star4"></label>
															<input id="star3" name="rating" value="3" type="radio"><label for="star3"></label>
															<input id="star2" name="rating" value="2" type="radio"><label for="star2"></label>
															<input id="star1" name="rating" value="1" type="radio"><label for="star1"></label>
														</div>
													</div>
													<button class="primary-btn">Submit</button>
												</form>
											</div>
										</div>
										<!-- /Review Form -->
									</div>
								</div>
								<!-- /tab3  -->
							</div>
							<!-- /product tab content  -->
						</div>
					</div>
					<!-- /product tab -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- Section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-12">
						<div class="section-title text-center">
							<h3 class="title">Related Products</h3>
						</div>
					</div>


					
						
					<!-- product -->
					@foreach ($related_product as $item)
						
					
					<div class="col-md-3 col-xs-6">
						<div class="product">
							<div class="product-img">
								<img src="{{asset($item->img1)}}" alt="" width="200" height="150">
								<div class="product-label">
									<span class="sale">-30%</span>
								</div>
							</div>
							<div class="product-body">
								<p class="product-category">{{$item->cat->category_name}}</p>
								<h3 class="product-name"><a href="{{url('/viewProduct/single/'.$item->id)}}">{{$item->name}}</a></h3>
								<h4 class="product-price">${{$item->discount_price}}.00 <del class="product-old-price">${{$item->price}}.00</del></h4>
								<div class="product-rating">
								</div>
								<div class="product-btns">
									<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
									<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
									<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
								</div>
							</div>
								{{--start add to cat button --}}
								<div class="add-to-cart">
									<form action="{{url('add/to-cart/'.$item->id)}}" method="POST">
									@csrf
									<input type="hidden" name="price" id="" value="{{$item->discount_price}}">
									<input type="hidden" name="product_name" id="" value="{{$item->name}}">
									
									<button type="submit" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</a></button>
								</form>
								</div>
								{{--end add to cat button --}}
						</div>
					</div>
					<!-- /product -->

					@endforeach

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /Section -->

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