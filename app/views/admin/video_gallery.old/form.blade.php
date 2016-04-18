@extends('template')
@section('content')
	<header class="page-header">
		<h2>Vide Gallery</h2>
	</header>

	<!-- start: page -->
		<section class="panel">
			<header class="panel-heading">
				<div class="panel-actions">
					<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
					<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
				</div>
		
				<h2 class="panel-title">Add New</h2>
			</header>
			<form>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>ID Video Gallery</label>
							<input type="text" class="form-control">
						</div>
						<div class="form-group">
							<label>Nama Video Gallery</label>
							<input type="text" class="form-control">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Tags</label>
							<input type="text" class="form-control">
						</div>						
					</div>
				</div>
				<br/>
				<button class="btn btn-default btn-sm"><i class="fa fa-plus"></i> Add Row</button>
				<div style="clear:both;margin-bottom: 20px;"></div>
				<table class="table table-bordered table-striped mb-none">
					<thead>
						<tr>
							<th><input type="checkbox"></th>
							<th>URL</th>
							<th>Preview</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<tr class="gradeX">
							<td><input type="checkbox"></td>
							<td><input type="text" class="form-control input-sm"></td>
							<td>Sample name</td>
							<td><button class="btn btn-default btn-xs"><i class=" fa fa-edit"></i> Edit</button></td>
						</tr>
						<tr class="gradeC">
							<td><input type="checkbox"></td>
							<td><input type="text" class="form-control input-sm"></td>
							<td>Sample name</td>
							<td><button class="btn btn-default btn-xs"><i class=" fa fa-edit"></i> Edit</button></td>
						</tr>
						<tr class="gradeA">
							<td><input type="checkbox"></td>
							<td><input type="text" class="form-control input-sm"></td>
							<td>Sample name</td>
							<td><button class="btn btn-default btn-xs"><i class=" fa fa-edit"></i> Edit</button></td>
						</tr>
						<tr class="gradeA">
							<td><input type="checkbox"></td>
							<td><input type="text" class="form-control input-sm"></td>
							<td>Sample name</td>
							<td><button class="btn btn-default btn-xs"><i class=" fa fa-edit"></i> Edit</button></td>
						</tr>
					</tbody>
				</table>

			</div>
			<div class="panel-footer">
				<button type="submit" class="btn btn-default">Submit</button>
			</div>
			</form>
		</section>
		
	<!-- end: page -->
@stop