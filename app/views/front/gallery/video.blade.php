@extends('front')
@section('content')
<div class="container">
    <div class="news-list-wrap">
        <h1>Video Galery</h1>
        <div id="event-list">
        <div class="row">
        @foreach($video as $videos)
            <div class="col-md-4" style="margin-bottom: 30px;">
                
  
                
                <a href="<?php echo Config::get('app.url');?>public/video/detail/{{$videos->id_video}}">
                    <img src="<?php echo Config::get('app.url');?>assets/galery/{{$videos->video_thumbnail}}" class="img-responsive" alt="">
                </a>
                <h3><a href="<?php echo Config::get('app.url');?>public/video/detail/{{$videos->id_video}}">{{$videos->video_description}}</a></h3>
                <small><i class="icon-calender icons"></i> &nbsp; {{date('d F Y',strtotime($videos->created_at))}}</small>
            </div>
        @endforeach
            <!-- <div class="col-md-4" style="margin-bottom: 30px;">
                <a href="public/video/detail">
                    <img src="assets/main/img/video.png" class="img-responsive" alt="">
                </a>
                <h3><a href="public/video/detail">Video Title Here</a></h3>
                <small><i class="icon-calender icons"></i> &nbsp; 23 Sept, 2015</small>
            </div>

            <div class="col-md-4" style="margin-bottom: 30px;">
                <a href="public/video/detail">
                    <img src="assets/main/img/video.png" class="img-responsive" alt="">
                </a>
                <h3><a href="public/video/detail">Video Title Here</a></h3>
                <small><i class="icon-calender icons"></i> &nbsp; 23 Sept, 2015</small>
            </div>

            <div class="col-md-4" style="margin-bottom: 30px;">
                <a class="fancybox-media" href="https://www.youtube.com/embed/q1vXakhJ1uQ">
                    <img src="assets/main/img/video.png" class="img-responsive" alt="">
                </a>
                <h3><a class="fancybox-media" href="https://www.youtube.com/embed/q1vXakhJ1uQ">Video Title Here</a></h3>
                <small><i class="icon-calender icons"></i> &nbsp; 23 Sept, 2015</small>
            </div>

            <div class="col-md-4" style="margin-bottom: 30px;">
                <a class="fancybox-media" href="https://www.youtube.com/embed/q1vXakhJ1uQ">
                    <img src="assets/main/img/video.png" class="img-responsive" alt="">
                </a>
                <h3><a class="fancybox-media" href="https://www.youtube.com/embed/q1vXakhJ1uQ">Video Title Here</a></h3>
                <small><i class="icon-calender icons"></i> &nbsp; 23 Sept, 2015</small>
            </div> -->
        </div>
         <div class="row clearfix">
             <div class="col-md-12">
                 {{$video->links()}}
             </div>
         </div>   
            <!-- <div class="row clearfix">
                <div class="col-md-4">
                    <div class="embed-youtube"><iframe width="100%" height="225" src="https://www.youtube.com/embed/q1vXakhJ1uQ" frameborder="0" allowfullscreen></iframe></div>
                    <h3><a href="#">Video Title Here</a></h3>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                    <small><i class="icon-calender icons"></i> &nbsp; 23 Sept, 2015</small>
                </div>
                <div class="col-md-4">
                    <div class="embed-youtube"><iframe width="100%" height="225" src="https://www.youtube.com/embed/q1vXakhJ1uQ" frameborder="0" allowfullscreen></iframe></div>
                    <h3><a href="#">Video Title Here</a></h3>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                    <small><i class="icon-calender icons"></i> &nbsp; 23 Sept, 2015</small>
                </div>
                <div class="col-md-4">
                    <div class="embed-youtube"><iframe width="100%" height="225" src="https://www.youtube.com/embed/q1vXakhJ1uQ" frameborder="0" allowfullscreen></iframe></div>
                    <h3><a href="#">Video Title Here</a></h3>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                    <small><i class="icon-calender icons"></i> &nbsp; 23 Sept, 2015</small>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="row clearfix">
                <div class="col-md-4">
                    <div class="embed-youtube"><iframe width="100%" height="225" src="https://www.youtube.com/embed/q1vXakhJ1uQ" frameborder="0" allowfullscreen></iframe></div>
                    <h3><a href="#">Video Title Here</a></h3>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                    <small><i class="icon-calender icons"></i> &nbsp; 23 Sept, 2015</small>
                </div>
                <div class="col-md-4">
                    <div class="embed-youtube"><iframe width="100%" height="225" src="https://www.youtube.com/embed/q1vXakhJ1uQ" frameborder="0" allowfullscreen></iframe></div>
                    <h3><a href="#">Video Title Here</a></h3>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                    <small><i class="icon-calender icons"></i> &nbsp; 23 Sept, 2015</small>
                </div>
                <div class="col-md-4">
                    <div class="embed-youtube"><iframe width="100%" height="225" src="https://www.youtube.com/embed/q1vXakhJ1uQ" frameborder="0" allowfullscreen></iframe></div>
                    <h3><a href="#">Video Title Here</a></h3>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                    <small><i class="icon-calender icons"></i> &nbsp; 23 Sept, 2015</small>
                </div>
                <div class="clearfix"></div>
            </div> -->
        </div>
    </div>
</div>
@stop