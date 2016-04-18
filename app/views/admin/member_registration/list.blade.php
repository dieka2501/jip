@extends('template')
@section('content')
	<header class="page-header">
		<h2>Member Registration</h2>
	</header>

	<!-- start: page -->
		<section class="panel">
			<header class="panel-heading">
				<div class="panel-actions">
					<a href="<?php echo Config::get('app.url');?>public/member_registration/add" class="btn btn-default btn-sm"><i class="fa fa-plus"></i> Add data</a>
				</div>
		
				<h2 class="panel-title">Data Member</h2>
			</header>
			<div class="panel-body">
				<table class="table table-bordered table-striped mb-none" id="datatable-default">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nama Lengkap</th>
							<th>Email</th>
							<th>Nomor Handphone</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<tr class="gradeX">
							<td>1</td>
							<td>Lorem name</td>
							<td>sample@email.com</td>
							<td>0899943453</td>
							<td style="width:150px;">
							<a href="<?php echo Config::get('app.url');?>public/member_registration/add">
								<button class="btn btn-xs btn-default"><i class=" fa fa-eye"></i> View</button>
							</a>
								<button class="btn btn-xs btn-default"><i class=" fa fa-check"></i> Approve</button>
							</td>
						</tr>
						<tr class="gradeC">
							<td>2</td>
							<td>Lorem name</td>
							<td>sample@email.com</td>
							<td>0899943453</td>
							<td style="width:150px;">
							<a href="<?php echo Config::get('app.url');?>public/member_registration/add">
								<button class="btn btn-xs btn-default"><i class=" fa fa-eye"></i> View</button>
							</a>
								<button class="btn btn-xs btn-default"><i class=" fa fa-check"></i> Approve</button>
							</td>
						</tr>
						<tr class="gradeA">
							<td>3</td>
							<td>Lorem name</td>
							<td>sample@email.com</td>
							<td>0899943453</td>
							<td style="width:150px;">
							<a href="<?php echo Config::get('app.url');?>public/member_registration/add">
								<button class="btn btn-xs btn-default"><i class=" fa fa-eye"></i> View</button>
							</a>
								<button class="btn btn-xs btn-default"><i class=" fa fa-check"></i> Approve</button>
							</td>
						</tr>
						<tr class="gradeA">
							<td>4</td>
							<td>Lorem name</td>
							<td>sample@email.com</td>
							<td>0899943453</td>
							<td style="width:150px;">
							<a href="<?php echo Config::get('app.url');?>public/member_registration/add">
								<button class="btn btn-xs btn-default"><i class=" fa fa-eye"></i> View</button>
							</a>
								<button class="btn btn-xs btn-default"><i class=" fa fa-check"></i> Approve</button>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</section>
		
	<!-- end: page -->
@stop