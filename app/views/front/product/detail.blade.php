@extends('front.template')
@section('content')
<div class="jsi-bg">
<div class="lead">
<div class="container">
Detail Products
<ol class="breadcrumb">
  <li><a href="{{Config::get('app.url')}}public/">Home</a></li>
  <li><a href="{{Config::get('app.url')}}public/product">Product</a></li>
  <li class="active">Product Detail</li>
</ol>
</div>
</div>
<section class="white-bg section">
	<!-- sample -->
	<div class="container">
	<div class="row">
	    <div class="content-wrapper">	
			<div class="item-container">	
				<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div id="sync1" class="owl-carousel">
						  <div class="item"><img src="<?php echo Config::get('app.url');?>aset/upload/{{$product->main_image}}"> </div>
						  <div class="item"><img src="<?php echo Config::get('app.url');?>aset/upload/{{$product->image2}}"></div>
						  <div class="item"><img src="<?php echo Config::get('app.url');?>aset/upload/{{$product->image3}}"></div>
						  <div class="item"><img src="<?php echo Config::get('app.url');?>aset/upload/{{$product->image4}}"></div>
						  
						</div>
					</div>
						
					<div class="col-md-6 desc-product">
						<div class="product-title">{{strtoupper($product->name_product)}}</div>
						<div class="product-desc">{{str_limit($product->description_product,100,"....")}}</div>
						<hr>
						@if($product->price_product == 0)
						<div class="product-price">Call For price</div>
						@else
						<div class="product-price">Rp. {{number_format($product->price_product)}}</div>
						@endif
						<div class="product-stock">
							<?php echo ($product->stock_product > 0)? "In Stock":"Out Of Stock"?>
						</div>
						<hr>
						<div class="btn-group cart" style="margin-bottom:10px;">
							<a href="<?php echo Config::get('app.url');?>public/cart/do?idproduct={{$product->id_product}}" class="btn btn-warning cart-btn">Add To Cart</a>

						</div>
						<div class="btn-group wishlist" style="margin-bottom:10px;">
							<button type="button" class="btn">
								<i class="fa fa-check"></i> Add to wishlist 
							</button>
						</div>
						<hr/>
						<div id="sync2" class="owl-carousel">
						@if($product->main_image != "")
						  <div class="item"><img src="<?php echo Config::get('app.url');?>aset/upload/{{$product->main_image}}"></div>
						@endif
						@if($product->image2 != "")
						  <div class="item"><img src="<?php echo Config::get('app.url');?>aset/upload/{{$product->image2}}"></div>
						@endif
						@if($product->image3 != "")
						  <div class="item"><img src="<?php echo Config::get('app.url');?>aset/upload/{{$product->image3}}"></div>
						@endif
						@if($product->image4 != "")
						  <div class="item"><img src="<?php echo Config::get('app.url');?>aset/upload/{{$product->image4}}"></div>
						@endif
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12" style="margin-top:10px;">
							<ul id="myTab" class="nav nav-tabs nav_tabs">
								<li class="active"><a href="#service-one" data-toggle="tab">DESCRIPTION</a></li>
								<!-- <li><a href="#service-two" data-toggle="tab">PRODUCT INFO</a></li>
								<li><a href="#service-three" data-toggle="tab">REVIEWS</a></li> -->
							</ul>
						<div id="myTabContent" class="tab-content">
							<div class="tab-pane fade in active" id="service-one">
							 
								<section class="product-info">
									{{$product->description_product}}
								</section>
											  
							</div>
							<!-- <div class="tab-pane fade" id="service-two">
								<section class="container">
										
								</section>
							</div>
							<div class="tab-pane fade" id="service-three">
														
							</div> -->
						</div>
					</div>
				</div>
				</div> 
			</div>
		</div>
	</div>
	</div>
<!-- ens -->
</section>
</div>
@stop