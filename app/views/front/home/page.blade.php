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
      		<a href="#" class="btn-white">Find Out More</a>
      </div>
      </div>
    </div>
    <div class="item">
      <img src="<?php echo Config::get('app.url');?>aset/main/img/banner-2.jpg" class="img-responsive center-block" alt="Jeep Station Indonesia">
      <div class="container">
      	<div class="carousel-caption">
      	<h1>Explore Our Products</h1>
      	<p>The most complete spareparts for your Jeep Lover.</p>
      	<a href="#" class="btn-white">Find Out More</a>
      </div>
      </div>
    </div>
    <div class="item">
      <img src="<?php echo Config::get('app.url');?>aset/main/img/banner-3.jpg" class="img-responsive center-block" alt="Jeep Station Indonesia">
      <div class="container">
      	<div class="carousel-caption">
      	<h1>Jeep Renegade</h1>
      	<p>The most complete spareparts for your Jeep Lover.</p>
      	<a href="#" class="btn-white">Find Out More</a>
      	</div>
      </div>
    </div>
    <div class="item">
      <img src="<?php echo Config::get('app.url');?>aset/main/img/banner-1.jpg" class="img-responsive center-block" alt="Jeep Station Indonesia">
      <div class="container">
      	<div class="carousel-caption">
      	<h1>Explore Our Products</h1>
      	<p>The most complete spareparts for your Jeep Lover.</p>
      	<a href="#" class="btn-white">Find Out More</a>
      </div>
      </div>
    </div>
    <div class="item">
      <img src="<?php echo Config::get('app.url');?>aset/main/img/banner-3.jpg" class="img-responsive center-block" alt="Jeep Station Indonesia">
      <div class="container">
      <div class="carousel-caption">
      	<h1>Jeep Renegade</h1>
      	<p>The most complete spareparts for your Jeep Lover.</p>
      	<a href="#" class="btn-white">Find Out More</a>
      </div>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
</div>
</section>
<section id="partner">
	<div class="container">
		<div class="row">
			<div class="col-md-3 partners"><a href="#"><img src="<?php echo Config::get('app.url');?>aset/main/img/logo.png" alt="Jeep Station Indonesia"></a></div>
			<div class="col-md-3 partners"><a href="#"><img src="<?php echo Config::get('app.url');?>aset/main/img/logo.png" alt="Jeep Station Indonesia"></a></div>
			<div class="col-md-3 partners"><a href="#"><img src="<?php echo Config::get('app.url');?>aset/main/img/logo.png" alt="Jeep Station Indonesia"></a></div>
			<div class="col-md-3 partners"><a href="#"><img src="<?php echo Config::get('app.url');?>aset/main/img/logo.png" alt="Jeep Station Indonesia"></a></div>
		</div>
		<div class="clearfix"></div>
	</div>
</section>
<div id="news-info" class="section">
	<h1 class="heading-title">featured products</h1>
	<div class="container">
		<div class="row">
			<div class="col-md-3 news">
				<a href="#"><img src="<?php echo Config::get('app.url');?>aset/main/img/img-news-1.jpg" class="center-block img-responsive"></a>
				<h3><a href="#">Special Vehicle</a></h3>
                <p>Renowned globally for rugged capability and iconic design</p>
				<a href="#" class="btn-readmore"><i class="fa fa-angle-right">&nbsp;</i> read more</a>
			</div>
            <div class="col-md-3 news">
				<a href="#"><img src="<?php echo Config::get('app.url');?>aset/main/img/img-news-1.jpg" class="center-block img-responsive"></a>
				<h3><a href="#">Special Vehicle</a></h3>
                <p>Renowned globally for rugged capability and iconic design</p>
				<a href="#" class="btn-readmore"><i class="fa fa-angle-right">&nbsp;</i> read more</a>
			</div>
            <div class="col-md-3 news">
				<a href="#"><img src="<?php echo Config::get('app.url');?>aset/main/img/img-news-1.jpg" class="center-block img-responsive"></a>
				<h3><a href="#">Special Vehicle</a></h3>
                <p>Renowned globally for rugged capability and iconic design</p>
				<a href="#" class="btn-readmore"><i class="fa fa-angle-right">&nbsp;</i> read more</a>
			</div>
            <div class="col-md-3 news">
				<a href="#"><img src="<?php echo Config::get('app.url');?>aset/main/img/img-news-1.jpg" class="center-block img-responsive"></a>
				<h3><a href="#">Special Vehicle</a></h3>
                <p>Renowned globally for rugged capability and iconic design</p>
				<a href="#" class="btn-readmore"><i class="fa fa-angle-right">&nbsp;</i> read more</a>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<section id="featured" class="section">
	<a href="news.php"><h1 class="heading-title">news &amp; events</h1>
	<div class="container">
		<div class="row">
			<div class="col-md-6 news">
				<a href="<?php echo Config::get('app.url');?>public/news_detail"><img src="<?php echo Config::get('app.url');?>aset/main/img/JSI-Baksos.jpg" class="center-block img-responsive"></a>
				<h3><a href="<?php echo Config::get('app.url');?>public/news_detail">Libur Panjang, Komunitas JSI Baksos Korban Longsor Pangalengan</a></h3>
				<p>MerahPutih Nasional - Peduli terhadap kondisi musibah ledakan gas yang menyebabkan longsor di Pangalengan, Jawa Barat, mendorong Jeep Station Indonesia (JSI) yang dipimpin oleh JHL AUTO </p>
				<a href="<?php echo Config::get('app.url');?>public/news_detail" class="btn-readmore"><i class="fa fa-angle-right">&nbsp;</i> read more</a>
			</div>
			<div class="col-md-6 news">
				<a href="<?php echo Config::get('app.url');?>public/news_detail"><img src="<?php echo Config::get('app.url');?>aset/main/img/img-news-big2.jpg" class="center-block img-responsive"></a>
				<h3><a href="<?php echo Config::get('app.url');?>public/news_detail">SILHOUETTE IN THE SAND</a></h3>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </p>
				<a href="<?php echo Config::get('app.url');?>public/news_detail" class="btn-readmore"><i class="fa fa-angle-right">&nbsp;</i> read more</a>
			</div>
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
				<a href="#" class="btn-white">see all products</a>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</section>
<section id="brands" class="section">
	<h1 class="heading-title">Our Brands</h1>
	<div class="container">
		<div id="owl-brands" class="owl-carousel owl-theme">
			<div class="item client"><a href="#"><img src="<?php echo Config::get('app.url');?>aset/main/img/brands-1.png" alt="Jeep Station Indonesia"></a></div>
			<div class="item client"><a href="#"><img src="<?php echo Config::get('app.url');?>aset/main/img/brands-2.png" alt="Jeep Station Indonesia"></a></div>
			<div class="item client"><a href="#"><img src="<?php echo Config::get('app.url');?>aset/main/img/brands-3.png" alt="Jeep Station Indonesia"></a></div>
			<div class="item client"><a href="#"><img src="<?php echo Config::get('app.url');?>aset/main/img/brands-4.png" alt="Jeep Station Indonesia"></a></div>
			<div class="item client"><a href="#"><img src="<?php echo Config::get('app.url');?>aset/main/img/brands-5.png" alt="Jeep Station Indonesia"></a></div>
			<div class="item client"><a href="#"><img src="<?php echo Config::get('app.url');?>aset/main/img/brands-1.png" alt="Jeep Station Indonesia"></a></div>
			<div class="item client"><a href="#"><img src="<?php echo Config::get('app.url');?>aset/main/img/brands-2.png" alt="Jeep Station Indonesia"></a></div>
			<div class="item client"><a href="#"><img src="<?php echo Config::get('app.url');?>aset/main/img/brands-3.png" alt="Jeep Station Indonesia"></a></div>
			<div class="item client"><a href="#"><img src="<?php echo Config::get('app.url');?>aset/main/img/brands-4.png" alt="Jeep Station Indonesia"></a></div>
			<div class="item client"><a href="#"><img src="<?php echo Config::get('app.url');?>aset/main/img/brands-5.png" alt="Jeep Station Indonesia"></a></div>
		</div>
	</div>
</section>
@stop