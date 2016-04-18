@extends('front')
@section('content')
<!--CONTENT-->
<div class="container">
    <div class="news-list-wrap news-content">
        <h1>Photo Gallery</h1>
        <div id="news-list">
        <div class="row clearfix">
                    @foreach($galery as $galeries)
                    <div class="col-md-4 news-item">
                        <img src="<?php echo Config::get('app.url');?>/assets/galery/{{$galeries->image_cover}}" class="img-responsive" alt="">
                        <h3><a href="<?php echo Config::get('app.url');?>public/galery/detail/{{$galeries->id_image}}">{{$galeries->image_title}}</a></h3>
                        <p><?php str_limit(strip_tags($galeries->image_description),200,'.... <br><a href="'.Config::get('app.url').'public/galery/detail/'.$galeries->id_image.'" class="btn-readmore"><i class="fa fa-angle-right">&nbsp;</i> read more</a>')?></p>
                        <small><i class="icon-calender icons"></i> &nbsp; {{date('d F Y',strtotime($galeries->created_at))}}</small>
                    </div>
                    @endforeach
        
                    <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
            {{$galery->links()}}
        </div>
    </div>
</div>
@stop