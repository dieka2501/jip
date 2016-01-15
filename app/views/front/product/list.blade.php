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
			<div class="col-md-4">
			<div class="list-group">
			  <a href="#" class="list-group-item">
			    Cras justo odio
			  </a>
			  <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
			  <a href="#" class="list-group-item">Morbi leo risus</a>
			  <a href="#" class="list-group-item">Porta ac consectetur ac</a>
			  <a href="#" class="list-group-item">Vestibulum at eros</a>
			</div>
			</div>
			<div class="col-md-4">
			<div class="list-group">
			  <a href="#" class="list-group-item">
			    Cras justo odio
			  </a>
			  <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
			  <a href="#" class="list-group-item">Morbi leo risus</a>
			  <a href="#" class="list-group-item">Porta ac consectetur ac</a>
			  <a href="#" class="list-group-item">Vestibulum at eros</a>
			</div>
			</div>
			<div class="col-md-4">
			<div class="list-group">
			  <a href="#" class="list-group-item">
			    Cras justo odio
			  </a>
			  <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
			  <a href="#" class="list-group-item">Morbi leo risus</a>
			  <a href="#" class="list-group-item">Porta ac consectetur ac</a>
			  <a href="#" class="list-group-item">Vestibulum at eros</a>
			</div>
			</div>
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
						<a href="<?php echo Config::get('app.url');?>public/cart/add/" class="btn btn-warning btn-xs cart-btn">Add To Cart</a>
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