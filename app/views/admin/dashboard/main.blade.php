@extends('template')
@section('content')
	<header class="page-header">
		<h2>Dashboard</h2>
	</header>

	<!-- start: page -->
	<section class="panel">
			<header class="panel-heading">
				<div class="panel-actions">
					<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
					<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
				</div>
		
				<h2 class="panel-title">Basic</h2>
			</header>
			<div class="panel-body">
				<table class="table table-bordered table-striped mb-none">
					<thead>
						<tr>
							<th>Rendering engine</th>
							<th>Browser</th>
							<th>Platform(s)</th>
							<th class="hidden-phone">Engine version</th>
							<th class="hidden-phone">CSS grade</th>
						</tr>
					</thead>
					<tbody>
						<tr class="gradeX">
							<td>Trident</td>
							<td>Internet
								Explorer 4.0
							</td>
							<td>Win 95+</td>
							<td class="center hidden-phone">4</td>
							<td class="center hidden-phone">X</td>
						</tr>
						<tr class="gradeC">
							<td>Trident</td>
							<td>Internet
								Explorer 5.0
							</td>
							<td>Win 95+</td>
							<td class="center hidden-phone">5</td>
							<td class="center hidden-phone">C</td>
						</tr>
						<tr class="gradeA">
							<td>Trident</td>
							<td>Internet
								Explorer 5.5
							</td>
							<td>Win 95+</td>
							<td class="center hidden-phone">5.5</td>
							<td class="center hidden-phone">A</td>
						</tr>
						<tr class="gradeA">
							<td>Trident</td>
							<td>Internet
								Explorer 6
							</td>
							<td>Win 98+</td>
							<td class="center hidden-phone">6</td>
							<td class="center hidden-phone">A</td>
						</tr>
					</tbody>
				</table>
			</div>
		</section>
	<!-- end: page -->
@stop