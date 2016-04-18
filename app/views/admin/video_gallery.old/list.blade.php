@extends('template')
@section('content')
	<header class="page-header">
		<h2>Video Gallery</h2>
	</header>

	<!-- start: page -->
		<section class="panel">
			<header class="panel-heading">
				<div class="panel-actions">
					<a href="<?php echo Config::get('app.url');?>public/video_gallery/add" class="btn btn-default btn-sm"><i class="fa fa-plus"></i> Add data</a>
					<a href="#" class="btn btn-default btn-sm"><i class="fa fa-trash"></i> Delete</a>
				</div>
		
				<h2 class="panel-title">Data Video</h2>
			</header>
			<div class="panel-body">
				<table class="table table-bordered table-striped mb-none" id="datatable-default">
					<thead>
						<tr>
							<th><input type="checkbox"></th>
							<th>Video Gallery ID</th>
							<th>Video Gallery Name</th>
							<th>Tags</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<tr class="gradeX">
							<td><input type="checkbox"></td>
							<td>1</td>
							<td>Sample name</td>
							<td>Agility, Series</td>
							<td><button class="btn btn-default btn-xs"><i class=" fa fa-edit"></i> Edit</button></td>
						</tr>
						<tr class="gradeC">
							<td><input type="checkbox"></td>
							<td>2</td>
							<td>Sample name</td>
							<td>Agility, Series</td>
							<td><button class="btn btn-default btn-xs"><i class=" fa fa-edit"></i> Edit</button></td>
						</tr>
						<tr class="gradeA">
							<td><input type="checkbox"></td>
							<td>3</td>
							<td>Sample name</td>
							<td>Agility, Series</td>
							<td><button class="btn btn-default btn-xs"><i class=" fa fa-edit"></i> Edit</button></td>
						</tr>
						<tr class="gradeA">
							<td><input type="checkbox"></td>
							<td>4</td>
							<td>Sample name</td>
							<td>Agility, Series</td>
							<td><button class="btn btn-default btn-xs"><i class=" fa fa-edit"></i> Edit</button></td>
						</tr>
					</tbody>
				</table>
			</div>
		</section>
		
	<!-- end: page -->
@stop