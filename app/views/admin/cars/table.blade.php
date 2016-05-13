@extends('admin.template')
@section('content')

<!-- Content Header (Page header) -->
<section class="content-header clearfix">
  <h1>
    List Data
    <small>Cars</small>
  </h1>
  <ol class="breadcrumb" style="padding-top:0px;margin-top:-5px">
    <li><a class="btn btn-warning" href="{{Config::get('app.url')}}public/admin/cars/create"><i class="fa fa-plus"></i> Add Data</a></li>
  </ol>
</section>
{{$notip}}
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
              <th class="text-center">Nama Mobil</th>
              <th class="text-center">Price</th>  
              <th class="text-center">Status</th>
              <th class="text-center">Color</th>
              <th class="text-center">Action</th>
            </tr>
            <?php $i = 0;?>
              @foreach($list as $datas)
              <?php 
                
                if(Input::has('page')){
                  $page = Input::get('page') - 1;
                }else{
                  $page = 0;
                }
                $jj   = 20*$page + $i;
                $i++;
                $stat = ($datas->cars_category == 0)? 'Mobil Baru':'Mobil Bekas';
              ?>
            <tr>
              <td width="5%">{{$i}}</td>
              <td>{{$datas->cars_name}}</td>
              <td>{{number_format($datas->cars_price)}}</td>
              <td width="30%">{{$stat}}</td>
              <td class="status">{{$datas->cars_color}}</td>
              <td>
              <a class="btn btn-sm btn-success" href="<?php echo Config::get('app.url');?>public/admin/cars/edit/{{$datas->id_cars}}">Edit</a> 
              <a class="btn btn-sm btn-danger" onclick="return confirm('Are You Sure?')" href="<?php echo Config::get('app.url');?>public/admin/cars/delete/{{$datas->id_cars}}">Delete</a>
              </td>
            </tr>
            @endforeach 
            <!-- <tr>
              <td>219</td>
              <td>Alexander Pierce</td>
              <td>11-7-2014</td>
              <td><span class="label label-warning">Pending</span></td>
              <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
              <td>
              <a class="btn btn-sm btn-success" href="#">Edit</a> 
              <a class="btn btn-sm btn-danger" href="">Delete</a>
              </td>
            </tr> -->
          </tbody></table>
          {{$list->links()}}
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div>
  </div>

</section><!-- /.content -->

@stop