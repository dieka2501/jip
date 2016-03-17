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
<p>{{$notip}}</p>
<section id="content">
	<div class="container">
		<div class="col-md-8 col-md-offset-2">
			<div class="row">
			<form method="POST" action="{{Config::get('app.url')}}public/member/save">
			<div class="col-md-6">
				<div class="form-group">
					<label style="color:#555">First Name</label>
					<input type="text" class="form-control" name='customer_first_name' value="{{$customer_first_name}}">
					{{Form::hidden('ids',$ids)}}
				</div>
				<div class="form-group">
					<label style="color:#555">Password</label>
					<input type="password" class="form-control" name='password' value="">
				</div>
				<div class="form-group">
					<label style="color:#555">Company</label>
					<input type="text" class="form-control" name='customer_company' value="{{$customer_company}}">
				</div>
				<div class="form-group">
					<label style="color:#555">Town</label>
					<input type="text" class="form-control" name='customer_town' value="{{$customer_town}}">
				</div>
				<div class="form-group">
					<label style="color:#555">Country</label>
					<input type="text" class="form-control" name='customer_company' value="{{$customer_company}}">
				</div>
				<div class="form-group">
					<label style="color:#555">Date Birth</label>
					<input type="text" class="form-control" name='customer_datebirth' value="{{$customer_datebirth}}" id='date'>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-warning">Save</button>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label style="color:#555">Last Name</label>
					<input type="text" class="form-control" name='customer_last_name' value="{{$customer_last_name}}"> 
				</div>
				<div class="form-group">
					<label style="color:#555">Email</label>
					<input type="text" class="form-control" name='customer_email' value="{{$customer_email}}">
				</div>
				<div class="form-group">
					<label style="color:#555">Address</label>
					<input type="text" class="form-control" name='customer_address' value="{{$customer_address}}">
				</div>
				<div class="form-group">
					<label style="color:#555">ZIP</label>
					<input type="text" class="form-control" name='customer_zip' value="{{$customer_zip}}">
				</div>
				<div class="form-group">
					<label style="color:#555">Phone</label>
					<input type="text" class="form-control" name='customer_phone' value="{{$customer_phone}}">
				</div>
			</div>
			</form>
			<table class="table">
					<thead>
						<tr>First Name</tr>
						<tr>Last Name</tr>
						<tr>Phone</tr>
						<tr>Date</tr>
						<tr>Total Order</tr>
					</thead>
					<tbody>
						@foreach($order as $orders)
						<tr>
							<td>{{$orders->order_first_name}}</td>
							<td>{{$orders->order_last_name}}</td>
							<td>{{$orders->order_phone}}</td>
							<td>{{date('d F Y',strtotime($orders->created_at))}}</td>
							<td>{{number_format($orders->order_total)}}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			<div class="row">
			<div class="col-md-8">
				
			</div>
		</div>
		</div>

	</div>
</section>
<script src="<?php echo Config::get('app.url');?>aset/main/js/jquery-1.11.2.min.js"></script>
<script src="<?php echo Config::get('app.url');?>aset/main/js/jquery-ui-1.10.3.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#date').datepicker({
			dateFormat : 'yy-mm-dd'
		});
	});
</script>
@stop