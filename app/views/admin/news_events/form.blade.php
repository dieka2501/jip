@extends('admin.template')
@section('content')
<?php //var_dump(Session::all())?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    {{$big_title}}
    <small>Preview</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">News & Events</a></li>
    <li class="active">{{$big_title}}/li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

  <!-- SELECT2 EXAMPLE -->
  <div class="box box-default">
    <div class="box-header with-border">
      <h3 class="box-title">{{$big_title}}</h3>
      <div class="box-tools pull-right">
        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
      </div>
    </div><!-- /.box-header -->
    {{Form::open(array('url'=>$url,'method'=>'POST','files'=>true))}}
    <div class="box-body">
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label>Nama News / Events</label>
            <input type="text" class="form-control" id='title' name='title'>
          </div><!-- /.form-group -->
          <div class="form-group">
            <label>Type</label>
            <select class="form-control" name='type' id='type'>
              <option value='news'>News</option>
              <option value='event'>Events</option>
            </select>
          </div><!-- /.form-group -->
          <div class="form-group" id='divfile'>
            <label>Image</label>
            <input type="file" class="form-control" name='image[]' >
          </div><!-- /.form-group -->
          <div class="form-group">
            <button class="btn btn-primary" id='clone_file' type="button">Add File</button>
        </div>
          <div class="form-group">
            <label>Content</label>
            <textarea class="textarea form-control" name='content'></textarea>
          </div><!-- /.form-group -->
          <div class="form-group">
            <label>Status</label>
            <select class="form-control" name='status' id='status'>
              <option value='1'>Publish</option>
              <option value='0'>Unpublish</option>
            </select>
          </div>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.box-body -->
    <div class="box-footer">
      <button style="submit" class="btn btn-success">Submit</button>
    </div>
  </div><!-- /.box -->
{{Form::close()}}
</section><!-- /.content -->
<script src="<?php echo Config::get('app.url');?>aset/js/jquery.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#clone_file').click(function(){
            var form_file = "<div class='form-group'>"+
                            "<label>Image</label>"+
                            "<input type='file' class='form-control' name='image[]' >"+
                            "</div>";
            // console.log(form_file);
            // alert(form_file);
            $('#divfile').append(form_file);
        });
    });
</script>
@stop