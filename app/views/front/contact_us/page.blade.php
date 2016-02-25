@extends('front.template')
@section('content')
<div class="jsi-bg">
<div class="lead">
<div class="container">
Contact Us
<ol class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="#">Contact Us</a></li>
  <li class="active">Page</li>
</ol>
</div>
</div>
</div>
<div class="overlays" onClick="style.pointerEvents='none'"></div>
<iframe frameborder="0" scrolling="yes" scrollwheel="no" marginheight="0" marginwidth="0"width="100%" height="443" src="https://maps.google.com/maps?hl=en&q=Jakarta&ie=UTF8&t=roadmap&z=11&iwloc=B&output=embed"><div></div><div></div></iframe>

<div class="contact-infos">
<div class="container">
<div class="col-md-12">
    <h3 class="title-normal text-center">Contact Form</h3>
    <div class="info-kontak text-center">
        <p><i class="fa fa-map-marker"></i> BizSpeak Center, 3021 Horizon Circle Tukwila, WA 98188 <i class="fa fa-phone" style="margin-left:20px;"></i>(+62) 123-456-789 <i class="fa fa-envelope" style="margin-left:20px;"></i>mail@lorem.com</p>
        <img src="<?php echo Config::get('app.url');?>aset/main/img/contact-info.png">
    </div>
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
            <button class="btn btn-warning" type="submit">Send Message</button> 
        </div>
    </form>
</div>
</div>
</div>
@stop