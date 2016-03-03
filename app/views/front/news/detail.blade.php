@extends('front.template')
@section('content')
<div class="jsi-bg">
<div class="lead text-center">{{$news->news_title}}</div>
</div>
<section id="content">
	<div class="container">
		<div class="col-md-8 col-md-offset-2">
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