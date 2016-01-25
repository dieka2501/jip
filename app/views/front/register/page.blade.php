@extends('front.template')
@section('content')
<div class="jsi-bg">
<div class="lead">
<div class="container">
Register
<ol class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="#">Register</a></li>
  <li class="active">Form</li>
</ol>
</div>
</div>
<section id="featured" class="section" style="background:transparent">
    <div class="container">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Create new account!</h1>
            <div class="account-wall">
                <img class="profile-img" src="{{Config::get('app.url')}}aset/main/img/logo.png"
                    alt="">
                <form class="form-signin">
                <input type="text" class="form-control" name='email' placeholder="Email" required autofocus>
                <input type="password" class="form-control" name='password' placeholder="Password" required>
                <input type="password" class="form-control" name='repassword' placeholder="Ulangi Password" required>
                <input type="text" class="form-control" name='first_name' placeholder="First Name" required>
                <input type="text" class="form-control" name='last_name' placeholder="Last Name" required>
                <input type="text" class="form-control" name='company' placeholder="Company" >
                <input type="text" class="form-control" name='address' placeholder="Address" >
                <input type="text" class="form-control" name='town' placeholder="Town" >
                <input type="text" class="form-control" name='zip' placeholder="Zip Code" >
                <input type="text" class="form-control" name='country' placeholder="Country" >
                <input type="text" class="form-control" name='phone' placeholder="Phone Number" >
                <button class="btn btn-lg btn-warning btn-block" type="submit">Sign in</button>
                </form>
            </div>
            <a href="#" class="text-center new-account">Sign in to your acoount!</a>
        </div>
    </div>
</section>
</div>
@stop