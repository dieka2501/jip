@extends('front.template')
@section('content')
<div class="jsi-bg">
<div class="lead">
<div class="container">
News
<ol class="breadcrumb">
  <li><a href="{{Config::get('app.url')}}public/">Home</a></li>
  <li><a href="{{Config::get('app.url')}}public/product">News</a></li>
</ol>
</div>
</div>
</div>
<section id="content">
	<div class="container">
		<div class="col-md-8 col-md-offset-2">
			<div class="text-center" style="color: #444444; font-size: 21px; font-family: 'Raleway-Light', sans-serif;margin-bottom:30px;font-weight:600;">{{$news->news_title}}</div>
			<?php 
				$imgnews = (isset($file[0])) ? $file[0]->file :"news.jpg";
			?>
			<img src="<?php echo Config::get('app.url');?>aset/upload/{{$imgnews}}" class="img-responsive center-block">
			<br>
			<br>
				{{$news->news_content}}
		</div>
	</div>
</section>
@stop