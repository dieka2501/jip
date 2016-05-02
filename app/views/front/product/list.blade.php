@extends('front.template')
@section('content')
<div class="wrapper-breadcrumb bg-grey">
	<div class="container">
		<h3>Our Products</h3>
		<ol class="breadcrumb">
		  <li><a href="{{Config::get('app.url')}}public">Home</a></li>
		  <li><a href="{{Config::get('app.url')}}public/product">Product</a></li>
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
		<!-- <div class="row">
		<div class="col-md-12">
		<div class="menu-produk">
			@for($i = 0;$i < $cacah_cat; $i++)
			<?php 
				$j = ($i*5);
				$k = ($i*5)+1;
				$l = ($i*5)+2;
				$m = ($i*5)+3;
				$n = ($i*5)+4;
				$cat1 = (isset($cat_all[$j]->category_name))? $cat_all[$j]->category_name : "";
				$cat2 = (isset($cat_all[$k]->category_name))? $cat_all[$k]->category_name : "";
				$cat3 = (isset($cat_all[$l]->category_name))? $cat_all[$l]->category_name : "";
				$cat4 = (isset($cat_all[$m]->category_name))? $cat_all[$m]->category_name : "";
				$cat5 = (isset($cat_all[$n]->category_name))? $cat_all[$n]->category_name : "";

				$nocat1 = (isset($cat_all[$j]->id_category))? $cat_all[$j]->id_category : "";
				$nocat2 = (isset($cat_all[$k]->id_category))? $cat_all[$k]->id_category : "";
				$nocat3 = (isset($cat_all[$l]->id_category))? $cat_all[$l]->id_category : "";
				$nocat4 = (isset($cat_all[$m]->id_category))? $cat_all[$m]->id_category : "";
				$nocat5 = (isset($cat_all[$n]->id_category))? $cat_all[$n]->id_category : "";
			?>
			<div class="col-md-3">
			<div class="list-group">
				  <a href="{{Config::get('app.url')}}public/product/category/{{$nocat1}}" class="list-group-item">
			    {{$cat1}}
			  </a>
			  <a href="{{Config::get('app.url')}}public/product/category/{{$nocat2}}" class="list-group-item">{{$cat2}}</a>
			  <a href="{{Config::get('app.url')}}public/product/category/{{$nocat3}}" class="list-group-item">{{$cat3}}</a>
			  <a href="{{Config::get('app.url')}}public/product/category/{{$nocat4}}" class="list-group-item">{{$cat4}}</a>
			  <a href="{{Config::get('app.url')}}public/product/category/{{$nocat5}}" class="list-group-item">{{$cat5}}</a>
			</div>
			</div>
		@endfor
			
		<div style="clear:both;"></div>
		</div>
		</div>
		</div> -->
		<div class="row clearfix">
			@foreach($product as $products)
            <div class="col-md-3">
            <div class="product">
				<div class="img-crop-product">
					<a href="<?php echo Config::get('app.url');?>public/product/detail/{{$products->id_product}}" class="img-container">
						<img src="<?php echo Config::get('app.url');?>aset/upload/{{$products->main_image}}" class="center-block img-responsive">
					</a>
				</div>
				<div class="thumb-content">
					<h3><a href="<?php echo Config::get('app.url');?>public/product/detail/{{$products->id_product}}">{{$products->name_product}}</a></h3>
					
					<p class="pro-tags"><i class="fa fa-tag"></i> 
						@foreach($cp[$products->id_product] as $cps)
							@foreach($cps as $cpss)
								<a href="{{Config::get('app.url')}}public/product/category/{{$cpss->id_category}}">{{$cpss->category_name}}</a>,
							@endforeach
							
						@endforeach
					</p>
					<div class="pull-right">
						<a href="<?php echo Config::get('app.url');?>public/cart/do?idproduct={{$products->id_product}}" class="btn btn-warning btn-xs cart-btn">Add To Cart</a>
					</div>
				</div>
			</div>
			</div>
			@endforeach
		</div>
		<div class="row clearfix">
		<div class="col-md-12">
			
			 <nav>
			 	{{$product->appends(['cari'=>$cari])->links()}}
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