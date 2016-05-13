@extends('admin.template')
@section('content')
<?php //var_dump(Session::all())?>
<!-- Content Header (Page header) -->
<section class="content-header clearfix">
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
            <input type="text" class="form-control" id='title' name='title' value='{{$title}}'>
            <input type="hidden" class="form-control" id='ids' name='ids' value='{{$ids}}'>
          </div><!-- /.form-group -->
          <div class="form-group">
            <label>Type</label>
            {{Form::select('type',array('news'=>'News','events'=>'Events'),$type,array('class'=>'form-control'))}}
            <!-- <select class="form-control" name='type' id='type'>
              <option value='news'>News</option>
              <option value='event'>Events</option>
            </select> -->
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
            <textarea class="textarea form-control" name='content'>{{$content}}</textarea>
          </div><!-- /.form-group -->
          <div class="form-group">
            <label>Status</label>
            {{Form::select('status',array(1=>'Publish',0=>'Unpublish'),$status,array('class'=>'form-control'))}}
            <!-- <select class="form-control" name='status' id='status'>
              <option value='1'>Publish</option>
              <option value='0'>Unpublish</option>
            </select> -->
          </div>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.box-body -->
    <div class="box-footer">
      <button style="submit" class="btn btn-success">Submit</button>
      <a href="{{Config::get('app.url')}}public/admin/news" class="btn btn-danger">Back</a>
    </div>
  </div><!-- /.box -->
  @if($action == 'edit')
    <div class="box-body">
        <table class='table'>
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
            @if(count($get_file) > 0)
              @foreach($get_file as $files)
                <tr>
                  <td><img src="{{Config::get('app.url')}}aset/upload/{{$files->file}}" width="50px" height="50px"></td>
                  <td class="text-left" align="left"><a href="{{Config::get('app.url')}}public/admin/news/file/delete/{{$files->id_news_file}}?id={{$ids}}" class="btn btn-danger text-left" onclick="return confirm('Apakah Anda Yakin?')">Delete</a></td>
                </tr>
              @endforeach 
            @endif
            </tbody>
        </table>
    </div>
    @endif
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