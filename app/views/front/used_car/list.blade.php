@extends('front.template')
@section('content')
<div class="wrapper-breadcrumb bg-grey">
	<div class="container">
		<h3>Used Car</h3>
		<ol class="breadcrumb">
		  <li><a href="{{Config::get('app.url')}}public/">Home</a></li>
		  <li><a href="{{Config::get('app.url')}}public/cars/used">Used Car</a></li>
		</ol>
	</div>
</div>
<section id="featured" class="section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="menu-produk">
					<form method="GET" action="{{Config::get('app.url')}}public/cars/used">
						<input name='cari' class="form-control" value="{{$cari}}"> <button class="btn btn-primary">Search</button>
					</form>
				</div>		
			</div>
		</div>
		<div class="row">
			@foreach($cars as $carss)
            <div class="col-md-3">
            <div class="product">
				<a href="<?php echo Config::get('app.url');?>public/cars/used/detail/{{$carss->id_cars}}"><img src="<?php echo Config::get('app.url');?>aset/upload/{{$carss->cars_image}}" width='859' height="567" class="center-block img-responsive"></a>
				<div class="thumb-content">
					<h3><a href="<?php echo Config::get('app.url');?>public/cars/used//detail/{{$carss->id_cars}}">{{$carss->cars_name}}</a></h3>
					
					<p class="pro-tags"><i class="fa fa-tag"></i> 
						{{$carss->cars_model}}
					</p>
					<a href="<?php echo Config::get('app.url');?>public/cars//used/detail/{{$carss->id_cars}}" class="btn-readmore"><i class="fa fa-angle-right">&nbsp;</i> read more</a>
					<div class="pull-right">
						<!-- <a href="<?php echo Config::get('app.url');?>public/cart/do?idproduct=" class="btn btn-warning btn-xs cart-btn">Add To Cart</a> -->
					</div>
				</div>
			</div>
			</div>
			@endforeach
			
            <div class="clearfix"></div>
		</div>
		<div class="row">
		<div class="col-md-12">
			
			 <nav>
			 	{{$cars->links()}}
			  <!-- <ul class="pagination">
			    <li>
			      <a href="#" aria-label="Previous">
			        <span aria-hidden="true">&laquo;</span>
			      </a>
			    </li>
			    <li><a href="#">1</a></li>
			    <li><a href="#">2</a></li>
			    <li><a href="#">3</a></li>
			    <li><a href="#">4</a></li>
			    <li><a href="#">5</a></li>
			    <li>
			      <a href="#" aria-label="Next">
			        <span aria-hidden="true">&raquo;</span>
			      </a>
			    </li>
			  </ul> -->
			</nav> 
		</div>
		</div>
	</div>
</section>
@stop