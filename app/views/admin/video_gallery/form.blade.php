@extends('template')
@section('content')
	<header class="page-header">
		<h2>video Gallery</h2>
	</header>

	<!-- start: page -->
		<section class="panel">
			<header class="panel-heading">
				<div class="panel-actions">
					<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
					<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
				</div>
		
				<h2 class="panel-title">Add New Video</h2>
			</header>
			{{Form::open(['url'=>$url,'method'=>'post','files'=>true])}}
			{{$notip}}
			<div class="panel-body">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group" >
							<label>Galery Video Name</label>
							<input type="text" class="form-control" required="required" name='name' value="{{$name}}">
							<input type="hidden" class="form-control"  name='ids' value="{{$id_video}}">
						</div>
						<div class="form-group">
							<label>Thumbnail Video</label>
							<input type="file" class="form-control" name='thumb'>
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
				<div class="row">
					<div class="col-md-6" >
						<div class="form-group" id='divfile'>
							<label>Add Link Video</label>
							<input type="text" class="form-control" name='url_video[]' placeholder="URL Video" >	
						</div>
						<div class="form-group">
							<button type="button" class="btn btn-success" id='clone_file'>Add Link Video</button>
						</div>
						
					</div>
					<div class="col-md-6">
						
					</div>
				</div>
				@if($action == 'edit')
				<div class="row">
					<div class="col-md-12">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>video</th>
									<th>Delete</th>
								</tr>
							</thead>
							<tbody>
								@foreach($video as $videos)
								<tr>
									<td>{{$videos->vf_file}}</td>
									<td><a href="{{Config::get('app.url')}}public/admin/video/file/delete/{{$videos->id_vf}}?id={{$id_video}}" class="btn btn-danger"  onclick="return confirm('Are You Sure?')">Delete</a></td>
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
				<a href="{{Config::get('app.url')}}public/admin/video" class="btn btn-danger">Back</a>
			</div>
			</form>
		</section>
		<script src="{{Config::get('app.url')}}assets/js/jquery.js"></script>
		<script type="text/javascript">
		    $(document).ready(function(){
		        $('#clone_file').click(function(){
		            var form_file = "<div class='form-group'>"+
		                            "<label>Add Link Video</label>"+
		                            "<input type='text' class='form-control' required='required' name='url_video[]' placeholder='URL Video'>"+
		                            
		                            "</div>";
		            // console.log(form_file);
		            // alert(form_file);
		            $('#divfile').append(form_file);
		        });
		    });
		</script>
	<!-- end: page -->
@stop