@extends('admin.template')
@section('content')

<!-- Content Header (Page header) -->
<p>{{$notip}}</p>
<section class="content-header clearfix">
  <h1>
    List Data
    <small>Message</small>
  </h1>
  
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
              <th class="text-center">Email</th>  
              <th class="text-center">Subject</th>
              <th class="text-center">Date</th>
              <th class="text-center">Reply</th>
              <th class="text-center">Action</th>
            </tr>
              <?php $i = 0;?>
                @foreach($get_data as $datas)
                <?php 
                  
                  if(Input::has('page')){
                    $page = Input::get('page') - 1;
                  }else{
                    $page = 0;
                  }
                  $jj   = 20*$page + $i;
                  $i++;
                  $isreply = ($datas->contact_reply == '')? 'No':'Yes';
                ?>
            <tr>
              <td width="5%">{{$jj}}</td>
              <td>{{$datas->contact_name}}</td>
              <td>{{$datas->contact_email}}</td>
              <td width="30%">{{$datas->contact_subject}}</td>
              <td>{{$datas->created_at}}</td>
              <td>{{$isreply}}</td>
              <td>
              <a class="btn btn-sm btn-success" href="<?php echo Config::get('app.url');?>public/admin/message/reply/{{$datas->id_contact}}">Reply</a> 
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
        </div><!-- /.box-body -->
        <div>{{$get_data->links()}}</div>
      </div><!-- /.box -->
    </div>
  </div>

</section><!-- /.content -->

@stop