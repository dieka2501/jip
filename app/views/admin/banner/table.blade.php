@extends('admin.template')
@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    {{$big_title}}
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb" style="padding-top:0px;margin-top:-5px">
    <li><a class="btn btn-warning" href="{{Config::get('app.url')}}public/admin/banner/create"><i class="fa fa-plus"></i> Create Banner</a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <!-- Main row -->
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">{{$big_title}}</h3>
          <div class="box-tools">
            <div class="input-group" style="width: 150px;">
              <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Search">
              <div class="input-group-btn">
                <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </div>
        </div><!-- /.box-header -->
        {{$notip}}
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tbody><tr>
              <th>ID</th>
              <th>Content</th>
              <th>Link</th>
              <th>Image</th>
              <th>Action</th>
            </tr>
            @foreach($get_data as $datas)
            <tr>
              <td>{{$datas->idbanner}}</td>
              <td>{{str_limit(strip_tags($datas->banner_content),100,'...')}}</td>
              <td><a href="{{$datas->banner_link}}" target="_blank"> {{$datas->banner_link}}</a></td>
              <td><span class="label"><img src="{{Config::get('app.url')}}aset/upload/{{$datas->banner_image}}" width="100" height="100"></span></td>
              <td>
              <a class="btn btn-sm btn-success" href="{{Config::get('app.url')}}public/admin/banner/edit/{{$datas->idbanner}}">Edit</a> 
              <a class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')" href="{{Config::get('app.url')}}public/admin/banner/delete/{{$datas->idbanner}}">Delete</a>
              </td>
            </tr>
            @endforeach
          </tbody></table>
          {{$get_data->links()}}
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div>
  </div>

</section><!-- /.content -->

@stop