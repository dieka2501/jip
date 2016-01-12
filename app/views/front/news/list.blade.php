@extends('main.template')
@section('content')
<div class="jsi-bg">
<div class="lead">
<div class="container">
News &amp; Events
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
			<div class="col-md-6 news">
				<a href="<?php echo Config::get('app.url');?>public/news_detail"><img src="<?php echo Config::get('app.url');?>aset/main/img/jsi-baksos.jpg" class="center-block img-responsive"></a>
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
            <div class="col-md-12"><hr /></div>
			<div class="news">
				<div class="col-md-3"><a href="<?php echo Config::get('app.url');?>public/news_detail"><img src="<?php echo Config::get('app.url');?>aset/main/img/img-news-big2.jpg" class="center-block img-responsive"></a></div>
				<div class="col-md-8">
                    <h3><a href="<?php echo Config::get('app.url');?>public/news_detail">SILHOUETTE IN THE SAND</a></h3>
    				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </p>
    				<a href="<?php echo Config::get('app.url');?>public/news_detail" class="btn-readmore"><i class="fa fa-angle-right">&nbsp;</i> read more</a>
                </div>
                <div class="clearfix"></div>
			</div>
            <div class="news">
				<div class="col-md-3"><a href="<?php echo Config::get('app.url');?>public/news_detail"><img src="<?php echo Config::get('app.url');?>aset/main/img/img-news-big1.jpg" class="center-block img-responsive"></a></div>
				<div class="col-md-8">
                    <h3><a href="<?php echo Config::get('app.url');?>public/news_detail">SILHOUETTE IN THE SAND</a></h3>
    				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </p>
    				<a href="<?php echo Config::get('app.url');?>public/news_detail" class="btn-readmore"><i class="fa fa-angle-right">&nbsp;</i> read more</a>
                </div>
                <div class="clearfix"></div>
			</div>
            <div class="news">
				<div class="col-md-3"><a href="news-detail.php"><img src="<?php echo Config::get('app.url');?>aset/main/img/img-news-big2.jpg" class="center-block img-responsive"></a></div>
				<div class="col-md-8">
                    <h3><a href="news-detail.php">SILHOUETTE IN THE SAND</a></h3>
    				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </p>
    				<a href="news-detail.php" class="btn-readmore"><i class="fa fa-angle-right">&nbsp;</i> read more</a>
                </div>
                <div class="clearfix"></div>
			</div>
            <div class="news">
				<div class="col-md-3"><a href="<?php echo Config::get('app.url');?>public/news_detail"><img src="<?php echo Config::get('app.url');?>aset/main/img/img-news-big1.jpg" class="center-block img-responsive"></a></div>
				<div class="col-md-8">
                    <h3><a href="<?php echo Config::get('app.url');?>public/news_detail">SILHOUETTE IN THE SAND</a></h3>
    				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </p>
    				<a href="<?php echo Config::get('app.url');?>public/news_detail" class="btn-readmore"><i class="fa fa-angle-right">&nbsp;</i> read more</a>
                </div>
                <div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</section>
@stop