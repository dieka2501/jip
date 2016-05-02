@extends('front.template')
@section('content')
<div class="wrapper-breadcrumb bg-grey">
	<div class="container">
		<h3>Brand New Car</h3>
		<ol class="breadcrumb">
		  <li><a href="{{Config::get('app.url')}}public/">Home</a></li>
		  <li><a href="{{Config::get('app.url')}}public/cars/new">New Car</a></li>
		  <li class="active">List</li>
		</ol>
	</div>
</div>
<section id="featured" class="section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="menu-produk" style="padding:10px!important;">
					<!-- <form method="GET" action="{{Config::get('app.url')}}public/cars/new">
						<input name='cari' class="form-control" value="{{$cari}}"> <button class="btn btn-primary">Search</button>
					</form> -->
					<form method="GET" action="{{Config::get('app.url')}}public/cars/used">
			        <div class="input-group">
			            <input type="text" class="form-control" placeholder="Search" name="cari" value="{{$cari}}">
			            <div class="input-group-btn">
			                <button class="btn btn-warning" type="submit" style="padding: 6px 20px;"><i class="glyphicon glyphicon-search"></i></button>
			            </div>
			        </div>
			        </form>
				</div>		
			</div>
		</div>
		<div class="row">
			@foreach($cars as $carss)
            <div class="col-md-3">
            <div class="product">
				<a href="<?php echo Config::get('app.url');?>public/cars/new/detail/{{$carss->id_cars}}"><img src="<?php echo Config::get('app.url');?>aset/upload/{{$carss->cars_image}}" class="center-block img-responsive"></a>
				<div class="thumb-content">
					<h3><a href="<?php echo Config::get('app.url');?>public/cars/new/detail/{{$carss->id_cars}}">{{$carss->cars_name}}</a></h3>
					
					<p class="pro-tags"><i class="fa fa-tag"></i> 
						{{$carss->cars_model}}
					</p>
					<a href="<?php echo Config::get('app.url');?>public/cars/new/detail/{{$carss->id_cars}}" class="btn-readmore"><i class="fa fa-angle-right">&nbsp;</i> read more</a>
				</div>
			</div>
			</div>
			@endforeach
			
            <div class="clearfix"></div>
		</div>
		<div class="row">
		<div class="col-md-12">
			
			 <nav>
			 	{{$cars->appends(['cari'=>$cari])->links()}}
			</nav> 
		</div>
		</div>
	</div>
</section>
@stop