@extends('template')
@section('content')
	<header class="page-header">
		<h2>Image Gallery</h2>
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
			{{Form::open(['url'=>$url,'method'=>'post','files'=>true])}}
			{{$notip}}
			<div class="panel-body">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group" id='divfile' >
							<label>Galery Name</label>
							<input type="text" class="form-control" required="required" name='name' value="{{$name}}">
							<input type="hidden" class="form-control"  name='ids' value="{{$id_image}}">
						</div>
						<div class="form-group">
							<label>Add Image</label>
							<input type='file' class='form-control' name='image[]' >
						</div>
						<div class="form-group">
				            <button class="btn btn-success" id='clone_file' type="button">Add File</button>
				        </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Tags</label>
							<input type="text" class="form-control" name='tags' value="{{$tags}}">
						</div>
						<div class="form-group">
							<label>Description</label>
							<textarea class="form-control" name='description'>{{$description}}</textarea>
						</div>
					</div>
				</div>
				@if($action == 'edit')
				<div class="row">
					<div class="col-md-12">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Image</th>
									<th>Delete</th>
								</tr>
							</thead>
							<tbody>
								@foreach($image as $images)
								<tr>
									<td><img src="{{Config::get('app.url')}}assets/galery/{{$images->if_name}}" width="100" height="100"></td>
									<td><a href="{{Config::get('app.url')}}public/admin/image/file/delete/{{$images->id_if}}?id={{$id_image}}" class="btn btn-danger"  onclick="return confirm('Are You Sure?')">Delete</a></td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
				@endif
			</div>
			<div class="panel-footer">
				<button type="submit" class="btn btn-default">Submit</button>
				<a href="{{Config::get('app.url')}}public/admin/image" class="btn btn-danger">Back</a>
			</div>
			</form>
		</section>
		<script src="{{Config::get('app.url')}}assets/js/jquery.js"></script>
		<script type="text/javascript">
		    $(document).ready(function(){
		        $('#clone_file').click(function(){
		            var form_file = "<div class='form-group'>"+
		                            "<label>Add Image</label>"+
		                            "<input type='file' class='form-control' name='image[]' >"+
		                            "</div>";
		            // console.log(form_file);
		            // alert(form_file);
		            $('#divfile').append(form_file);
		        });
		    });
		</script>
	<!-- end: page -->
@stop