@extends('front.template')
@section('content')
<section id="slideshow">
<div id="carousel-slideshow" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-slideshow" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-slideshow" data-slide-to="1"></li>
    <li data-target="#carousel-slideshow" data-slide-to="2"></li>
    <li data-target="#carousel-slideshow" data-slide-to="3"></li>
    <li data-target="#carousel-slideshow" data-slide-to="4"></li>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?php echo Config::get('app.url');?>aset/main/img/banner-1.jpg" class="img-responsive center-block" alt="Jeep Station Indonesia">
      <div class="container">
      	<div class="carousel-caption">
      		<h1>Explore Our Products</h1>
      		<p>The most complete spareparts for your Jeep Lover.</p>
      		<a href="{{Config::get('app.url')}}public/product" class="btn-white">Find Out More</a>
      </div>
      </div>
    </div>
    <div class="item">
      <img src="<?php echo Config::get('app.url');?>aset/main/img/banner-2.jpg" class="img-responsive center-block" alt="Jeep Station Indonesia">
      <div class="container">
      	<div class="carousel-caption">
      	<h1>Explore Our Products</h1>
      	<p>The most complete spareparts for your Jeep Lover.</p>
      	<a href="{{Config::get('app.url')}}public/product" class="btn-white">Find Out More</a>
      </div>
      </div>
    </div>
    <div class="item">
      <img src="<?php echo Config::get('app.url');?>aset/main/img/banner-3.jpg" class="img-responsive center-block" alt="Jeep Station Indonesia">
      <div class="container">
      	<div class="carousel-caption">
      	<h1>Jeep Renegade</h1>
      	<p>The most complete spareparts for your Jeep Lover.</p>
      	<a href="{{Config::get('app.url')}}public/product" class="btn-white">Find Out More</a>
      	</div>
      </div>
    </div>
    <div class="item">
      <img src="<?php echo Config::get('app.url');?>aset/main/img/banner-1.jpg" class="img-responsive center-block" alt="Jeep Station Indonesia">
      <div class="container">
      	<div class="carousel-caption">
      	<h1>Explore Our Products</h1>
      	<p>The most complete spareparts for your Jeep Lover.</p>
      	<a href="{{Config::get('app.url')}}public/product" class="btn-white">Find Out More</a>
      </div>
      </div>
    </div>
    <div class="item">
      <img src="<?php echo Config::get('app.url');?>aset/main/img/banner-3.jpg" class="img-responsive center-block" alt="Jeep Station Indonesia">
      <div class="container">
      <div class="carousel-caption">
      	<h1>Jeep Renegade</h1>
      	<p>The most complete spareparts for your Jeep Lover.</p>
      	<a href="{{Config::get('app.url')}}public/product" class="btn-white">Find Out More</a>
      </div>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
</div>
</section>

<div id="news-info" class="section">
	<h1 class="heading-title">featured products</h1>
	<div class="container">
		<div class="row">
      @foreach($product as $products)
			<div class="col-md-3 news">
				<a href="#"><img src="<?php echo Config::get('app.url');?>aset/upload/{{$products->main_image}}" class="featured-prod center-block img-responsive" width='500' height='500'></a>
				<h3><a href="#">{{$products->name_product}}</a></h3>
                <p>{{str_limit(strip_tags($products->description_product))}}</p>
				<a href="{{Config::get('app.url')}}public/product" class="btn-readmore"><i class="fa fa-angle-right">&nbsp;</i> read more</a>
			</div>
      @endforeach
        <!-- <div class="col-md-3 news">
				<a href="#"><img src="aset/main/img/img-news-1.jpg" class="center-block img-responsive"></a>
				<h3><a href="#">Special Vehicle</a></h3>
                <p>Renowned globally for rugged capability and iconic design</p>
				<a href="#" class="btn-readmore"><i class="fa fa-angle-right">&nbsp;</i> read more</a>
			</div>
            <div class="col-md-3 news">
				<a href="#"><img src="aset/main/img/img-news-1.jpg" class="center-block img-responsive"></a>
				<h3><a href="#">Special Vehicle</a></h3>
                <p>Renowned globally for rugged capability and iconic design</p>
				<a href="#" class="btn-readmore"><i class="fa fa-angle-right">&nbsp;</i> read more</a>
			</div>
            <div class="col-md-3 news">
				<a href="#"><img src="aset/main/img/img-news-1.jpg" class="center-block img-responsive"></a>
				<h3><a href="#">Special Vehicle</a></h3>
                <p>Renowned globally for rugged capability and iconic design</p>
				<a href="#" class="btn-readmore"><i class="fa fa-angle-right">&nbsp;</i> read more</a>
			</div> -->
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<section id="featured" class="section">
	<a href="{{Config::get('app.url')}}public/news"><h1 class="heading-title">news &amp; events</h1></a>
	<div class="container">
		<div class="row">
      @if(count($news)>0)

			<div class="col-md-6 news">
        @if(isset($news[0]))
        <?php 
            // var_dump($newsfile[$news[0]->id_news]);
           $filenews1  = (isset($newsfile[$news[0]->id_news]))? $newsfile[$news[0]->id_news]->file: ""; 
        ?>
				<a href="<?php echo Config::get('app.url');?>public/news/detail/{{$news[0]->id_news}}"><img src="<?php echo Config::get('app.url');?>aset/upload/{{$filenews1}}" class="center-block img-responsive"></a>
				<h3><a href="<?php echo Config::get('app.url');?>public/news/detail/{{$news[0]->id_news}}">{{$news[0]->news_title}}</a></h3>
				<p><?php echo str_limit(strip_tags($news[0]->news_content),200,'.... <br><a href="'.Config::get('app.url').'public/news/detail/'.$news[0]->id_news.'" class="btn-readmore"><i class="fa fa-angle-right">&nbsp;</i> read more</a>')?> </p>
			   @endif	
			</div>
			<div class="col-md-6 news">
      @if(isset($news[1]))
				<?php 
            // var_dump($newsfile[$news[0]->id_news]);
           $filenews2  = (isset($newsfile[$news[1]->id_news]))? $newsfile[$news[1]->id_news]->file: ""; 
        ?>
        <a href="<?php echo Config::get('app.url');?>public/news/detail/{{$news[1]->id_news}}"><img src="<?php echo Config::get('app.url');?>aset/upload/{{$filenews2}}" class="center-block img-responsive"></a>
        <h3><a href="<?php echo Config::get('app.url');?>public/news/detail/{{$news[1]->id_news}}">{{$news[1]->news_title}}</a></h3>

        <p><?php echo str_limit(strip_tags($news[1]->news_content),200,'.... <br><a href="'.Config::get('app.url').'public/news/detail/'.$news[1]->id_news.'" class="btn-readmore"><i class="fa fa-angle-right">&nbsp;</i> read more</a>')?> </p>
       @endif 
			</div>
      @else
        <div class="col-md-6 news">
            Belum Ada Berita
        </div>
      @endif
			<div class="clearfix"></div>
		</div>
	</div>
</section>
<section id="spareparts">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<h1>FIND YOUR SPAREPARTS</h1>
				<p>Find our products by brands or by categories</p>
				<a href="{{Config::get('app.url')}}public/product" class="btn-white">see all products</a>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</section>
<section id="brands" class="section">
	<h1 class="heading-title">Our Brands</h1>
	<div class="container">
		<div id="owl-brands" class="owl-carousel owl-theme">
			@foreach($brand as $brands)
			<div class="item client"><a href="#"><img src="<?php echo Config::get('app.url');?>aset/upload/{{$brands->brand_image}}" alt="{{$brands->brand_name}}" width='175' height='176'></a></div>
			@endforeach()
		</div>
	</div>
</section>
@stop