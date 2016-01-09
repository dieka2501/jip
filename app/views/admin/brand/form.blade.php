@extends('admin.template')
@section('content')

<!-- Content Header (Page header) -->
<p>{{$notip}}</p>
<section class="content-header">
  <h1>
    {{$name_page}}
    <small>Preview</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Forms</a></li>
    <li class="active">{{$name_page}}</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

  <!-- SELECT2 EXAMPLE -->
  <div class="box box-default">
    <div class="box-header with-border">
      <h3 class="box-title">Add Data</h3>
      <div class="box-tools pull-right">
        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
      </div>
    </div><!-- /.box-header -->
    {{Form::open(array('url'=>$url,'files'=>true))}}
    <div class="box-body">
      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <label>Brand Name</label>
            {{Form::text('name',$name,array('class'=>'form-control','placeholder'=>'Input Brand Name Here','required'=>'required'))}}
            {{Form::hidden('ids',$ids,array('class'=>'form-control','placeholder'=>'Input News Title Here'))}}
          </div><!-- /.form-group -->
        </div><!-- /.col -->
        <div class="col-md-4">
        <div class="form-group">
          <label>Image</label>
          {{Form::file('image',array('class'=>'form-control'))}}
        </div><!-- /.form-group -->
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label>Status Brand</label>
              {{Form::select('status',array(1=>'Publish',0=>'Unpublish'),$status,array('class'=>'form-control'))}}
          </div><!-- /.form-group -->
        </div><!-- /.col -->
      </div><!-- /.row -->
      <div class="row">
      <div class="col-md-12">
      <div class="form-group">
        <label>Description Brand</label>
          <textarea name="content" class="form-control" rows="20">{{$content}}</textarea>
      </div><!-- /.form-group -->
      </div>
      </div>
    </div><!-- /.box-body -->
    <div class="box-footer">
      <a href="{{Config::get('app.url')}}public/admin/brand" class="btn btn-warning">Back</a>
      <button type="submit" class="btn btn-success">Submit</button>
    </div>
  </div><!-- /.box -->
  {{Form::close()}}
</section><!-- /.content -->
<script src="<?php echo Config::get('app.url');?>aset/js/jquery.js" type="text/javascript"></script>
<script type="text/javascript" src="{{Config::get('app.url')}}aset/tinymce/jquery.tinymce.min.js"></script>
<script type="text/javascript" src="{{Config::get('app.url')}}aset/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="{{Config::get('app.url')}}aset/tinymce/plugin.min.js"></script> 
<script type="text/javascript">
  tinymce.init({
    selector: "textarea",
    menubar:false,
    plugins: "insertdatetime",
    plugins: "link code responsivefilemanager fullscreen",
    toolbar: [
        "undo redo | styleselect | bold italic | link | fullscreen | alignleft | aligncenter |  alignright | insertdatetime | link | removeformat | cut copy paste bullist numlist outdent indent code  responsivefilemanager"
    ],
    image_advtab: true ,
    insertdatetime_formats: ["%Y.%m.%d", "%H:%M"],
    external_filemanager_path:"/filemanager/",
    filemanager_title:"Responsive Filemanager",
    external_plugins: { "filemanager" : "/filemanager/plugin.min.js"},
    filemanager_title:"Filemanager" ,
    filemanager_access_key:"adem2o" ,
 });
</script> 
@stop