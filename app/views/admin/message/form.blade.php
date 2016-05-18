@extends('admin.template')
@section('content')

<!-- Content Header (Page header) -->
<p>{{$notip}}</p>
<section class="content-header clearfix">
  <h1>
    {{$page_name}}
    <small>Preview</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Forms</a></li>
    <li class="active">{{$page_name}}</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

  <!-- SELECT2 EXAMPLE -->
  <div class="box box-default">
    <div class="box-header with-border">
      <h3 class="box-title">{{$page_name}}</h3>
      <div class="box-tools pull-right">
        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
      </div>
    </div><!-- /.box-header -->
    {{Form::open(array('url'=>$url,'files'=>true))}}
     
    <div class="box-body">
      <div class="row">
        <div class="col-md-6">
            <strong>From</strong> :  {{$data->contact_name}}

        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
            <strong>Email</strong> :  {{$data->contact_email}}
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
            <strong>Subject</strong> :  {{$data->contact_subject}}
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
            {{$data->contact_message}}
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label>Reply Message</label>
            <textarea name="reply" class="form-control" rows="7">{{$reply}}</textarea>
            {{Form::hidden('ids',$ids,array('class'=>'form-control','placeholder'=>'Input News Title Here'))}}
          </div><!-- /.form-group -->
        </div><!-- /.col -->
      </div>
    </div><!-- /.box-body -->
    <div class="box-footer">
      <a href="{{Config::get('app.url')}}public/admin/message" class="btn btn-warning">Back</a>
      <button style="submit" class="btn btn-success">Submit</button>
    </div>
    {{Form::close()}}
  </div><!-- /.box -->

</section><!-- /.content -->
<script src="<?php echo Config::get('app.url');?>aset/js/jquery.js" type="text/javascript"></script>
<script type="text/javascript" src="{{Config::get('app.url')}}aset/tinymce/jquery.tinymce.min.js"></script>
<script type="text/javascript" src="{{Config::get('app.url')}}aset/tinymce/tinymce.min.js"></script>
<!-- <script type="text/javascript" src="{{Config::get('app.url')}}aset/tinymce/plugin.min.js"></script>  -->
<script type="text/javascript">
  tinymce.init({
    selector: "textarea",
    menubar:false,
    plugins: "insertdatetime",
    plugins: "link code fullscreen",
    toolbar: [
        "undo redo | styleselect | bold italic | link | fullscreen | alignleft | aligncenter |  alignright | insertdatetime | link | removeformat | cut copy paste bullist numlist outdent indent code"
    ],
    image_advtab: true ,
    insertdatetime_formats: ["%Y.%m.%d", "%H:%M"],
 });
</script> 
@stop