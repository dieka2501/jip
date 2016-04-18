@extends('template')
@section('content')
	<header class="page-header">
		<h2>Image Gallery</h2>
	</header>

	<!-- start: page -->
		<section class="panel">
			<header class="panel-heading">
				<div class="panel-actions">
					<a href="<?php echo Config::get('app.url');?>public/admin/image/add" class="btn btn-default btn-sm"><i class="fa fa-plus"></i> Add New</a>
				</div>
		
				<h2 class="panel-title">Data Album</h2>
			</header>
			{{$notip}}
			<div class="panel-body">
				<table class="table table-bordered table-striped mb-none" id="datatabl">
					<thead>
						<tr>	
							<th>Album ID</th>
							<th>Album Name</th>
							<th>Tags</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($getgalery as $galery)
						<tr class="gradeX">
							<td>{{$galery->id_image}}</td>
							<td>{{$galery->image_title}}</td>
							<td>{{$galery->image_tag}}</td>
							<td>
								<a href="{{Config::get('app.url')}}public/admin/image/edit/{{$galery->id_image}}" class="btn btn-default btn-xs"><i class=" fa fa-edit"></i> Edit</a>
								<a href="{{Config::get('app.url')}}public/admin/image/delete/{{$galery->id_image}}" onclick="return confirm('Are you sure?')"class="btn btn-default btn-xs"><i class=" fa fa-trash"></i> Delete</a>
							</td>
						</tr>
						@endforeach
						
					</tbody>
				</table>
			</div>
		</section>
		
	<!-- end: page -->
@stop