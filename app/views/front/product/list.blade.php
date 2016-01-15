@extends('front.template')
@section('content')
<div class="jsi-bg">
<div class="lead">
<div class="container">
Our Products
<ol class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="#">Sample</a></li>
  <li class="active">Breadcrumb</li>
</ol>
</div>
</div>
</div>
<section id="featured" class="section">
	<div class="container">
		<div class="row">
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
				// var_dump($cat1);die;
			?>
			<div class="col-md-4">
			<div class="list-group">
			  <a href="{{Config::get('app.url')}}public/product" class="list-group-item">
			    {{$cat1}}
			  </a>
			  <a href="{{Config::get('app.url')}}public/product" class="list-group-item">{{$cat2}}</a>
			  <a href="{{Config::get('app.url')}}public/product" class="list-group-item">{{$cat3}}</a>
			  <a href="{{Config::get('app.url')}}public/product" class="list-group-item">{{$cat4}}</a>
			  <a href="{{Config::get('app.url')}}public/product" class="list-group-item">{{$cat5}}</a>
			</div>
			</div>
		@endfor
			
		<div style="clear:both;"></div>
		</div>
		</div>
		</div>
		<div class="row">
			@foreach($product as $products)
            <div class="col-md-3">
            <div class="product">
				<a href="<?php echo Config::get('app.url');?>public/product/detail/{{$products->id_product}}"><img src="<?php echo Config::get('app.url');?>aset/upload/{{$products->main_image}}" width='859' height="567" class="center-block img-responsive"></a>
				<div class="thumb-content">
					<h3><a href="<?php echo Config::get('app.url');?>public/product/detail/{{$products->id_product}">{{$products->name_product}}</a></h3>
					
					<p><i class="fa fa-tag"></i> 
						@foreach($cp[$products->id_product] as $cps)
							@foreach($cps as $cpss)
								<a href="{{Config::get('app.url')}}public/category/product">{{$cpss->category_name}}</a>,
							@endforeach
							
						@endforeach
					</p>
					<a href="<?php echo Config::get('app.url');?>public/product/detail/{{$products->id_product}}" class="btn-readmore"><i class="fa fa-angle-right">&nbsp;</i> read more</a>
					<div class="pull-right">
						<a href="<?php echo Config::get('app.url');?>public/cart/do?idproduct={{$products->id_product}}" class="btn btn-warning btn-xs cart-btn">Add To Cart</a>
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
			 	{{$product->links()}}
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