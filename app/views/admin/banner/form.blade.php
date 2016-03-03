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
    <li><a href="#">Banner</a></li>
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
            <label>Content Banner</label>
            <textarea class="form-control" name='content'>{{$content}}</textarea>
          </div><!-- /.form-group -->
          <div class="form-group">
            <label>Link Banner</label>
            <input type="text" class="form-control" id='link' name='link' value='{{$link}}'>
            <input type="hidden" class="form-control" id='ids' name='ids' value='{{$ids}}'>
          </div><!-- /.form-group -->
          <div class="form-group" id='divfile'>
            <label>Image</label>
            <input type="file" class="form-control" name='image' >
          </div><!-- /.form-group -->
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.box-body -->
    <div class="box-footer">
      <button style="submit" class="btn btn-success">Submit</button>
      <a href="{{Config::get('app.url')}}public/admin/banner" class="btn btn-danger">Back</a>
    </div>
  </div><!-- /.box -->
  
{{Form::close()}}
</section><!-- /.content -->
<script src="<?php echo Config::get('app.url');?>aset/js/jquery.js" type="text/javascript"></script>

@stop