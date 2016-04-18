@extends('front.template')
@section('content')
<div class="wrapper-breadcrumb bg-grey">
    <div class="container">
        <h3>Contact Us</h3>
        <ol class="breadcrumb">
          <li><a href="{{Config::get('app.url')}}public">Home</a></li>
          <li><a href="{{Config::get('app.url')}}public/contact">Contact</a></li>
          <li class="active">Page</li>
        </ol>
    </div>
</div>
<div class="overlays" onClick="style.pointerEvents='none'"></div>
 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.1420753048806!2d106.62599931442861!3d-6.245000562887557!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fc7544635c3b%3A0x80b62054b89211e7!2sBursa+Mobil+Emerald!5e0!3m2!1sid!2sid!4v1457585358322" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

<div class="contact-infos">
<div class="container">
<div class="col-md-12">
    <h3 class="title-normal text-center">Contact Form</h3>
    <div class="info-kontak text-center">
        <p><i class="fa fa-map-marker"></i>Jl. Boulevard Gading Serpong M5 No. 6 Unit C1 & F2 <i class="fa fa-phone" style="margin-left:20px;"></i>(+62)821-6333-3313 <i class="fa fa-envelope" style="margin-left:20px;"></i>henwil7676@gmail.com</p>
        <!-- <img src="<?php echo Config::get('app.url');?>aset/main/img/contact-info.png"> -->
    </div>
    <div id="notip"></div>
    <form id="contact-form" class="form-baru" action="#" method="post" role="form">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                <input class="form-control" name="name" id="name" placeholder="Name" type="text" required="">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input class="form-control" name="email" id="email" placeholder="Email" type="email" required="">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input class="form-control" name="subject" id="subject" placeholder="Subject" required="">
                </div>
            </div>
        </div>
        <div class="form-group">
            <textarea class="form-control" name="message" id="message" placeholder="Message" rows="10" required=""></textarea>
        </div>
        <div class="text-right"><br>
            <button class="btn btn-warning" type="button" id='btn-send'>Send Message</button> 
        </div>
    </form>
</div>
</div>
</div>
<script src="<?php echo Config::get('app.url');?>aset/js/jquery.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#btn-send').click(function(){
            var name    = $('#name').val();
            var email   = $('#email').val();
            var subject = $('#subject').val();
            var message = $('#message').val();
            $.post('{{Config::get("app.url")}}public/contact/post',{
                'email':email,
                'name':name,
                'subject':subject,
                'message':message
            },function(data){
                if(data.status){
                    var html = "<div class='alert alert-success'>"+data.alert+"</div>";
                    $('#notip').html(html);
                    $('#name').val('');
                    $('#email').val('');
                    $('#subject').val('');
                    $('#message').val('');
                }else{
                    var html = "<div class='alert alert-success'>"+data.alert+"</div>";
                    $('#notip').html(html).fadeOut(3000);
                }
                
            });

        })
        $(this).ajaxStart(function(){
            $('#btn-send').html('Loading.....');
        }).ajaxStop(function(){
            $('#btn-send').html('Send Message');
        });
    });
</script>
@stop