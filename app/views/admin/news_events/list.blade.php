@extends('template')
@section('content')
	<header class="page-header">
		<h2>News &amp; Events</h2>
	</header>

	<!-- start: page -->
		<section class="panel">
			<header class="panel-heading">
				<div class="panel-actions">
					<a href="<?php echo Config::get('app.url');?>public/admin/newsevents/add" class="btn btn-default btn-sm"><i class="fa fa-plus"></i> Add data</a>
				</div>
		
				<h2 class="panel-title">Data News &amp; Events</h2>
			</header>
			<div class="panel-body">
				{{$notip}}
				<table class="table table-bordered table-striped mb-none" id="">
					<thead>
						<tr>
							<th>ID</th>
							<th>Title</th>
							<th>Tag</th>
							<th>Type</th>
							<th>Date</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($data as $datas)
						<tr class="gradeX">
							<td>{{$datas->id_ne}}</td>
							<td>{{$datas->ne_title}}</td>
							<td>{{$datas->ne_tag}}</td>
							<td>{{ucfirst($datas->ne_type)}}</td>
							<td>{{date('d-m-Y',strtotime($datas->created_at))}}</td>
							<td><a href='{{Config::get("app.url")}}public/admin/newsevents/edit/{{$datas->id_ne}}' class="btn btn-default btn-xs"><i class=" fa fa-edit"></i> Edit</a>
							<a href='{{Config::get("app.url")}}public/admin/newsevents/delete/{{$datas->id_ne}}' class="btn btn-danger btn-xs" onclick="return confirm('Apakah Anda Yakin?')"><i class=" fa fa-trash"></i> Delete</a>
							</td>
						</tr>
						@endforeach
						<!-- <tr class="gradeC">
							<td><input type="checkbox"></td>
							<td>2</td>
							<td>Sample name</td>
							<td><button class="btn btn-default btn-xs"><i class=" fa fa-edit"></i> Edit</button></td>
						</tr>
						<tr class="gradeA">
							<td><input type="checkbox"></td>
							<td>3</td>
							<td>Sample name</td>
							<td><button class="btn btn-default btn-xs"><i class=" fa fa-edit"></i> Edit</button></td>
						</tr>
						<tr class="gradeA">
							<td><input type="checkbox"></td>
							<td>4</td>
							<td>Sample name</td>
							<td><button class="btn btn-default btn-xs"><i class=" fa fa-edit"></i> Edit</button></td>
						</tr> -->
					</tbody>
				</table>
			</div>
		</section>
		
	<!-- end: page -->
@stop