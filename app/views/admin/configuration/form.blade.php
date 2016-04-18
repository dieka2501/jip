@extends('template')
@section('content')
	<header class="page-header">
		<h2>Table Element</h2>
	</header>

	<!-- start: page -->
		<section class="panel">
			<header class="panel-heading">
				<h2 class="panel-title">Basic</h2>
			</header>
			<form>
			<div class="panel-body">
				<div class="form-group">
				<label for="exampleInputEmail1">Email address</label>
				<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
				</div>
				<div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				</div>
				<div class="form-group">
				<label for="exampleInputFile">File input</label>
				<input type="file" id="exampleInputFile">
				<p class="help-block">Example block-level help text here.</p>
				</div>
				<div class="checkbox">
				<label>
				<input type="checkbox"> Check me out
				</label>
				</div>
			</div>
			<div class="panel-footer">
				<button type="submit" class="btn btn-default">Submit</button>
			</div>
			</form>
		</section>
		
	<!-- end: page -->
@stop