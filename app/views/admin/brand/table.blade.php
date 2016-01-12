@extends('admin.template')
@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    List Data
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb" style="padding-top:0px;margin-top:-5px">
    <li><a class="btn btn-warning" href="{{Config::get('app.url')}}public/admin/brand/create"><i class="fa fa-plus"></i> Add Data</a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <!-- Main row -->
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">List Data</h3>
          <div class="box-tools">
            <div class="input-group" style="width: 150px;">
              <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Search">
              <div class="input-group-btn">
                <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </div>
        </div><!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tbody><tr>
              <th class="text-center">No</th>
              <th class="text-center">Name</th>
              <th class="text-center">Description</th>  
              <th class="text-center">Image</th>
              <th class="text-center">Status</th>
              <th class="text-center">Action</th>
            </tr>
            <?php $i = 0;?>
                @foreach($data as $datas)
                <?php 
                  
                  if(Input::has('page')){
                    $page = Input::get('page') - 1;
                  }else{
                    $page = 0;
                  }
                  $jj   = 20*$page + $i;
                  $i++;
                  $stat = ($datas->brand_status == 1)? 'Active':'Inactive';
                ?>
            <tr>
              <td width="5%">{{$i}}</td>
              <td>{{$datas->brand_name}}</td>
              <td>{{$datas->brand_description}}</td>
              <td width="30%"><img src="{{Config::get('app.url')}}aset/upload/{{$datas->brand_image}}" width="100" height="100"></td>
              <td class="status">{{$stat}}</td>
              <td>
              <a class="btn btn-sm btn-success" href="<?php echo Config::get('app.url');?>public/admin/brand/edit/{{$datas->id_brand}}">Edit</a> 
              <a class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')" href="<?php echo Config::get('app.url');?>public/admin/brand/delete/{{$datas->id_brand}}">Delete</a>
              </td>
            </tr>
            @endforeach
           
            <!-- <tr>
              <td>175</td>
              <td>Mike Doe</td>
              <td>11-7-2014</td>
              <td><span class="label label-danger">Denied</span></td>
              <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
              <td>
              <a class="btn btn-sm btn-success" href="#">Edit</a> 
              <a class="btn btn-sm btn-danger" href="">Delete</a>
              </td>
            </tr> -->
          </tbody></table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div>
  </div>

</section><!-- /.content -->

@stop