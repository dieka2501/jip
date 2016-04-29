@extends('front.template')
@section('content')
<div class="wrapper-breadcrumb bg-grey">
	<div class="container">
		<h3>News</h3>
		<ol class="breadcrumb">
		  <li><a href="{{Config::get('app.url')}}public">Home</a></li>
		  <li><a href="{{Config::get('app.url')}}public/news">News</a></li>
		  <li class="active">List</li>
		</ol>
	</div>
</div>
<?php
$ppage = $page-1;
$j = ($ppage*5) ;
$k = ($ppage*5)+1;
$l = ($ppage*5)+2;
$m = ($ppage*5)+3;
$n = ($ppage*5)+4;
$o = ($ppage*5)+5;
?>
<section id="featured" class="section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="menu-produk">
					<form method="GET" action="{{Config::get('app.url')}}public/news">
						<input name='cari' class="form-control" value="{{$cari}}"> <button class="btn btn-primary">Search</button>
					</form>
				</div>		
			</div>
		</div>
		<div class="row">
		@if(count($news) > 0)
			@if(isset($news[$j]))
			<div class="col-md-6 news">
				<?php 
            		 // var_dump($news[0]);die;
           			$filenews1  = (isset($newsfile[$news[$j]->id_news]))? $newsfile[$news[$j]->id_news]: "news.jpg"; 
        		?>
				<a href="<?php echo Config::get('app.url');?>public/news/detail/{{$news[$j]->id_news}}"><img src="<?php echo Config::get('app.url');?>aset/upload/{{$filenews1}}" class="center-block img-responsive"></a>
				<h3><a href="<?php echo Config::get('app.url');?>public/news/detail/{{$news[$j]->id_news}}">{{$news[$j]->news_title}}</a></h3>
				<p><?php echo str_limit(strip_tags($news[$j]->news_content),200,'.... <br><a href="'.Config::get('app.url').'public/news/detail/'.$news[$j]->id_news.'" class="btn-readmore"><i class="fa fa-angle-right">&nbsp;</i> read more</a>')?> </p>
			</div>
			@endif
			@if(isset($news[$k]))
			<div class="col-md-6 news">
				<?php 
            		 // var_dump($news[0]);die;
           			$filenews2  = (isset($newsfile[$news[$k]->id_news]))? $newsfile[$news[$k]->id_news]: "news.jpg"; 
        		?>
				<a href="<?php echo Config::get('app.url');?>public/news/detail/{{$news[$k]->id_news}}"><img src="<?php echo Config::get('app.url');?>aset/upload/{{$filenews2}}" class="center-block img-responsive"></a>
				
					<h3><a href="<?php echo Config::get('app.url');?>public/news/detail/{{$news[$k]->id_news}}">{{$news[$k]->news_title}}</a></h3>
					<p><?php echo str_limit(strip_tags($news[$k]->news_content),200,'.... <br><a href="'.Config::get('app.url').'public/news/detail/'.$news[$k]->id_news.'" class="btn-readmore"><i class="fa fa-angle-right">&nbsp;</i> read more</a>')?> </p>
				
			</div>
            @endif
            <div class="clearfix"></div>
            <div class="col-md-12"><hr /></div>
            @if(isset($news[$l]))
			<div class="news">
				<?php 
            		 // var_dump($news[0]);die;
           			$filenews3  = (isset($newsfile[$news[$l]->id_news]))? $newsfile[$news[$l]->id_news]: "news.jpg"; 
        		?>
				<div class="col-md-3"><a href="<?php echo Config::get('app.url');?>public/news/detail/{{$news[$l]->id_news}}"><img src="<?php echo Config::get('app.url');?>aset/upload/{{$filenews3}}" class="center-block img-responsive"></a></div>
				<div class="col-md-8">
					<h3><a href="<?php echo Config::get('app.url');?>public/news/detail/{{$news[$l]->id_news}}">{{$news[$l]->news_title}}</a></h3>
					<p><?php echo str_limit(strip_tags($news[$l]->news_content),200,'.... <br><a href="'.Config::get('app.url').'public/news/detail/'.$news[$l]->id_news.'" class="btn-readmore"><i class="fa fa-angle-right">&nbsp;</i> read more</a>')?> </p>
				</div>
                <div class="clearfix"></div>
			</div>
			@endif
			@if(isset($news[$m]))
			<div class="news">
				<?php 
            		 // var_dump($news[0]);die;
           			$filenews4  = (isset($newsfile[$news[$m]->id_news]))? $newsfile[$news[$m]->id_news]: "news.jpg"; 
        		?>
				<div class="col-md-3"><a href="<?php echo Config::get('app.url');?>public/news/detail/{{$news[$m]->id_news}}"><img src="<?php echo Config::get('app.url');?>aset/upload/{{$filenews4}}" class="center-block img-responsive"></a></div>
				<div class="col-md-8">
					<h3><a href="<?php echo Config::get('app.url');?>public/news/detail/{{$news[$m]->id_news}}">{{$news[$m]->news_title}}</a></h3>
					<p><?php echo str_limit(strip_tags($news[$m]->news_content),200,'.... <br><a href="'.Config::get('app.url').'public/news/detail/'.$news[$m]->id_news.'" class="btn-readmore"><i class="fa fa-angle-right">&nbsp;</i> read more</a>')?> </p>
				</div>
                <div class="clearfix"></div>
			</div>
			@endif
            @if(isset($news[$n]))
			<div class="news">
				<?php 
            		 // var_dump($news[0]);die;
           			$filenews5  = (isset($newsfile[$news[$n]->id_news]))? $newsfile[$news[$n]->id_news]: "news.jpg"; 
        		?>
				<div class="col-md-3"><a href="<?php echo Config::get('app.url');?>public/news/detail/{{$news[$n]->id_news}}"><img src="<?php echo Config::get('app.url');?>aset/upload/{{$filenews5}}" class="center-block img-responsive"></a></div>
				<div class="col-md-8">
					<h3><a href="<?php echo Config::get('app.url');?>public/news/detail/{{$news[$n]->id_news}}">{{$news[$n]->news_title}}</a></h3>
					<p><?php echo str_limit(strip_tags($news[$n]->news_content),200,'.... <br><a href="'.Config::get('app.url').'public/news/detail/'.$news[$n]->id_news.'" class="btn-readmore"><i class="fa fa-angle-right">&nbsp;</i> read more</a>')?> </p>
				</div>
                <div class="clearfix"></div>
			</div>
			@endif

            @if(isset($news[$o]))
			<div class="news">
				<?php 
            		 // var_dump($news[0]);die;
           			$filenews6  = (isset($newsfile[$news[$o]->id_news]))? $newsfile[$news[$o]->id_news]: "news.jpg"; 
        		?>
				<div class="col-md-3"><a href="<?php echo Config::get('app.url');?>public/news/detail/{{$news[$o]->id_news}}"><img src="<?php echo Config::get('app.url');?>aset/upload/{{$filenews6}}" class="center-block img-responsive"></a></div>
				<div class="col-md-8">
					<h3><a href="<?php echo Config::get('app.url');?>public/news/detail/{{$news[$o]->id_news}}">{{$news[$o]->news_title}}</a></h3>
					<p><?php echo str_limit(strip_tags($news[$o]->news_content),200,'.... <br><a href="'.Config::get('app.url').'public/news/detail/'.$news[$o]->id_news.'" class="btn-readmore"><i class="fa fa-angle-right">&nbsp;</i> read more</a>')?> </p>
				</div>
                <div class="clearfix"></div>
			</div>
			@endif
			@else
				<div class="col-md-6 news">Tidak ada berita hari ini..</div>	
			@endif
			<div class="clearfix"></div>
			<div>{{$news->appends(['cari'=>$cari])->links()}}</div>
		</div>
	</div>
</section>
@stop