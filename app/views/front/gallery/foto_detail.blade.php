@extends('front')
@section('content')
<!-- CONTENT -->
<div class="container">
    <div class="news-list-wrap">
        <h1>Photo Gallery</h1>
        <div class="row photo-album">
            @foreach($image as $images)
            <div class="col-md-4">
                <a id="zoomin" href="<?php echo Config::get('app.url');?>assets/galery/{{$images->if_name}}">
                    <img src="<?php echo Config::get('app.url');?>assets/galery/{{$images->if_name}}" class="img-responsive" alt="">
                </a>
            </div>
            @endforeach
            <!-- <div class="col-md-4">
                <a id="zoomin" href="<?php echo Config::get('app.url');?>assets/main/img/img-news-big1.jpg">
                    <img src="<?php echo Config::get('app.url');?>assets/main/img/img-news-big1.jpg" class="img-responsive" alt="">
                </a>
            </div>
            <div class="col-md-4">
                <a id="zoomin" href="<?php echo Config::get('app.url');?>assets/main/img/img-news-big1.jpg">
                    <img src="<?php echo Config::get('app.url');?>assets/main/img/img-news-big1.jpg" class="img-responsive" alt="">
                </a>
            </div>
            <div class="col-md-4">
                <a id="zoomin" href="<?php echo Config::get('app.url');?>assets/main/img/img-news-big1.jpg">
                    <img src="<?php echo Config::get('app.url');?>assets/main/img/img-news-big1.jpg" class="img-responsive" alt="">
                </a>
            </div>
            <div class="col-md-4">
                <a id="zoomin" href="<?php echo Config::get('app.url');?>assets/main/img/img-news-big1.jpg">
                    <img src="<?php echo Config::get('app.url');?>assets/main/img/img-news-big1.jpg" class="img-responsive" alt="">
                </a>
            </div> -->
            {{$image->links()}}
        </div>
    </div>
</div>
@stop