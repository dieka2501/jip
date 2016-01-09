@extends('main.template')
@section('content')
<div class="jsi-bg">
<div class="lead">
<div class="container">
Register
<ol class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="#">Sample</a></li>
  <li class="active">Breadcrumb</li>
</ol>
</div>
</div>
<section id="featured" class="section" style="background:transparent">
    <div class="container">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Create new account!</h1>
            <div class="account-wall">
                <img class="profile-img" src="aset/img/logo.png"
                    alt="">
                <form class="form-signin">
                <input type="text" class="form-control" placeholder="Email" required autofocus>
                <input type="text" class="form-control" placeholder="Username" required>
                <input type="password" class="form-control" placeholder="Password" required>
                <button class="btn btn-lg btn-warning btn-block" type="submit">Sign in</button>
                </form>
            </div>
            <a href="#" class="text-center new-account">Sign in to your acoount!</a>
        </div>
    </div>
</section>
</div>
@stop