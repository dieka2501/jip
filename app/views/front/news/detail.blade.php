@extends('front.template')
@section('content')
<div class="wrapper-breadcrumb bg-grey">
	<div class="container">
		<h3>News</h3>
		<ol class="breadcrumb">
		  <li><a href="{{Config::get('app.url')}}public/">Home</a></li>
		  <li><a href="{{Config::get('app.url')}}public/news">News</a></li>
		</ol>
	</div>
</div>
<section id="content">
	<div class="container">
		<div class="col-md-8 col-md-offset-2">
			<h4 class="news-title text-center">{{$news->news_title}}</h4>
			<div id="news-slider" class="owl-carousel">
				@foreach($file as $newsfiles2)
				<div class="item">
					<img class="img-responsive center-block" src="{{Config::get('app.url')}}aset/upload/{{$newsfiles2->file}}">
				</div>
				@endforeach
			</div>
			<br>
			{{$news->news_content}}
		</div>
	</div>
</section>
@stop