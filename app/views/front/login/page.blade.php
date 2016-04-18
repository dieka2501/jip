@extends('front.template')
@section('content')
<div class="jsi-bg">
<div class="lead">
<div class="container">
Login
<ol class="breadcrumb">
  <li><a href="{{Config::get('app.url')}}public">Home</a></li>
  <li><a href="{{Config::get('app.url')}}public/login">Login</a></li>
  <li class="active">Form</li>
</ol>
</div>
</div>
<section id="featured" class="section" style="background:transparent">
	<div class="container">
		<div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Sign in to continue!</h1>
            <div>{{$notip}}</div>
            <div class="account-wall">
                <img class="profile-img" src="<?php echo Config::get('app.url');?>aset/main/img/logo.png"
                    alt="">
                <form class="form-signin" method="POST" action="{{Config::get('app.url')}}public/login">
                <input type="text" class="form-control" placeholder="Email" required name='email' autofocus>
                <input type="password" class="form-control" placeholder="Password" name='password' required>
                <button class="btn btn-lg btn-warning btn-block" type="submit">Sign in</button>
                <a href="#" class="pull-right need-help">Forgot Password!</a><span class="clearfix"></span>
                </form>
            </div>
            <a href="{{Config::get('app.url')}}public/register" class="text-center new-account">Create an account </a>
        </div>
	</div>
</section>
</div>
@stop