@extends('front.template')
@section('content')
<div class="jsi-bg">
<div class="lead">
<div class="container">

Edit Profile
<ol class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="#">Member</a></li>
  <li class="active">Edit Profile</li>
</ol>
</div>
</div>
</div>
<section id="content">
	<div class="container">
		<div class="col-md-8 col-md-offset-2">
			<div class="row">
			<form method="post">
			<div class="col-md-6">
				<div class="form-group">
					<label style="color:#555">First Name</label>
					<input type="text" class="form-control">
				</div>
				<div class="form-group">
					<label style="color:#555">Password</label>
					<input type="password" class="form-control">
				</div>
				<div class="form-group">
					<label style="color:#555">Company</label>
					<input type="text" class="form-control">
				</div>
				<div class="form-group">
					<label style="color:#555">Town</label>
					<input type="text" class="form-control">
				</div>
				<div class="form-group">
					<label style="color:#555">Country</label>
					<input type="text" class="form-control">
				</div>
				<div class="form-group">
					<label style="color:#555">Date Birth</label>
					<input type="text" class="form-control">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-warning">Submit</button>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label style="color:#555">Last Name</label>
					<input type="text" class="form-control">
				</div>
				<div class="form-group">
					<label style="color:#555">Email</label>
					<input type="text" class="form-control">
				</div>
				<div class="form-group">
					<label style="color:#555">Address</label>
					<input type="text" class="form-control">
				</div>
				<div class="form-group">
					<label style="color:#555">ZIP</label>
					<input type="text" class="form-control">
				</div>
				<div class="form-group">
					<label style="color:#555">Phone</label>
					<input type="text" class="form-control">
				</div>
			</div>
			</form>
			</div>
		</div>
	</div>
</section>
@stop