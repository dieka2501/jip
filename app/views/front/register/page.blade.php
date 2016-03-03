@extends('front.template')
@section('content')
<div class="jsi-bg">
<div class="lead">
<div class="container">
Register
<ol class="breadcrumb">
  <li><a href="{{Config::get('app.url')}}public">Home</a></li>
  <li><a href="{{Config::get('app.url')}}public/register">Register</a></li>
  <li class="active">Form</li>
</ol>
</div>
</div>
<section id="featured" class="section" style="background:transparent">
    <div class="container">
        <div class="col-sm-6 col-md-8 col-md-offset-2">
            <h1 class="text-center login-title">Create new account!</h1>
            <div class="account-wall">
                <img class="profile-img" src="{{Config::get('app.url')}}aset/main/img/logo.png"
                    alt="">
                <div>{{$notip}}</div>
                <form class="form-signin" method="POST" action="{{Config::get('app.url')}}public/register">
                    <input type="text" class="form-control" name='email' placeholder="Email" required autofocus value='{{$email}}'>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="password" class="form-control" name='password' placeholder="Password" required >
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="password" class="form-control" name='repassword' placeholder="Ulangi Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" class="form-control" name='first_name' placeholder="First Name" required value='{{$first_name}}'>
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="text" class="form-control" name='last_name' placeholder="Last Name" required value='{{$last_name}}'>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" class="form-control" name='company' placeholder="Company" value='{{$company}}'>
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="text" class="form-control" name='address' placeholder="Address" value='{{$address}}'>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" class="form-control" name='town' placeholder="Town" value='{{$town}}'>
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="text" class="form-control" name='zip' placeholder="Zip Code" value='{{$zip}}'>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" class="form-control" name='country' placeholder="Country" value='{{$country}}' >
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="text" class="form-control" name='phone' placeholder="Phone Number" value='{{$phone}}'>
                        </div>
                    </div>
                    <button class="btn btn-lg btn-warning btn-block" type="submit">Register</button>
                </form>
            </div>
            <a href="{{Config::get('app.url')}}public/login" class="text-center new-account">Sign in to your acoount!</a>
        </div>
    </div>
</section>
</div>
@stop