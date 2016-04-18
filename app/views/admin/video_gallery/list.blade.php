@extends('template')
@section('content')
	<header class="page-header">
		<h2>Video Gallery</h2>
	</header>

	<!-- start: page -->
		<section class="panel">
			<header class="panel-heading">
				<div class="panel-actions">
					<a href="<?php echo Config::get('app.url');?>public/admin/video/add" class="btn btn-default btn-sm"><i class="fa fa-plus"></i> Add New</a>
				</div>
		
				<h2 class="panel-title">Data Galery Video</h2>
			</header>
			{{$notip}}
			<div class="panel-body">
				<table class="table table-bordered table-striped mb-none" id="datatabl">
					<thead>
						<tr>	
							<th>ID</th>
							<th>Video Name</th>
							<th>Tags</th>
							<th>Thumb</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($getgalery as $galery)
						<tr class="gradeX">
							<td>{{$galery->id_video}}</td>
							<td>{{$galery->video_title}}</td>
							<td>{{$galery->video_tag}}</td>
							<td><img src="{{Config::get('app.url')}}assets/galery/{{$galery->video_thumbnail}}" width="100" height="100"></td>
							<td>
								<a href="{{Config::get('app.url')}}public/admin/video/edit/{{$galery->id_video}}" class="btn btn-default btn-xs"><i class=" fa fa-edit"></i> Edit</a>
								<a href="{{Config::get('app.url')}}public/admin/video/delete/{{$galery->id_video}}" onclick="return confirm('Are you sure?')"class="btn btn-default btn-xs"><i class=" fa fa-trash"></i> Delete</a>
							</td>
						</tr>
						@endforeach
						
					</tbody>
				</table>
			</div>
		</section>
		
	<!-- end: page -->
@stop