@extends('admin.template')
@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    {{$big_title}}
    <small>Preview</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Sales</a></li>
    <li class="active">Detail</li>
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
    <div class="box-body">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Order ID</label>
            <input type="text" class="form-control" readonly="readonly" value="{{$order->id_order}}" name='id_order' id='id_order'>
          </div>
          <div class="form-group">
            <label>Nama Pelanggan</label>
            <input type="text" class="form-control" readonly="readonly" value="{{$order->order_first_name}} {{$order->order_last_name}}">
          </div>
          <div class="form-group">
            <label>Email Pelanggan</label>
            <input type="text" class="form-control" readonly="readonly" value="{{$order->order_email}}">
          </div>
          <div class="form-group">
            <label>Alamat Pelanggan</label>
            <textarea class="form-control" readonly="readonly">{{$order->order_address}} {{$order->order_town}} {{$order->order_country}} {{$order->order_zip}}</textarea>
          </div>
          
        </div><!-- /.col -->
        <div class="col-md-6">
          <div class="form-group">
            <label>Telepon</label>
            <input type="text" class="form-control" readonly="readonly">
          </div>
          <div class="form-group">
            <label>Status Order</label>
            {{Form::select('status_order',['Order','Payment','Complete'],$order->order_status,['class'=>'form-control','id'=>'status_order'])}}
            
          </div> 
          <div class="form-group">
            <button class="btn btn-primary" id='btn-status'>Ubah Status Order</button>
          </div> 
        </div><!-- /.col -->
      </div><!-- /.row -->
      <div class="row">
        <div class="col-md-12">
            <table width="100%" class='table table-striped table-hover'>
                <thead>
                    <tr>
                        <th>Nama Produk</th>
                        <th>Jumlah</th>
                        <th>Harga Produk</th>
                        <th>Total Harga</th>
                    </tr>
                </thead>
                <tbody>
                  <?php $grand_total = 0;?>
                  @foreach($detail as $details)
                    <?php 
                        $total        =  $details->detail_qty * $details->product_price;
                        $grand_total += $total; 
                    ?>
                    <tr>
                      <td>{{$details->name_product}}</td>
                      <td>{{number_format($details->detail_qty)}}</td>
                      <td>{{number_format($details->product_price)}}</td>
                      <td>{{number_format($total)}}</td>
                    </tr>
                  @endforeach
                </tbody>
                <tfoot>
                  <tr>
                      <td></td>
                      <td></td>
                      <td>Total Pembelian</td>
                      <td>{{number_format($grand_total)}}</td>
                  </tr>
                </tfoot>
            </table>
        </div>
      </div>
    </div><!-- /.box-body -->
    <div class="box-footer">
      <a  href='{{Config::get("app.url")}}public/admin/sales'class="btn btn-warning">Kembali</a>
    </div>
  </div><!-- /.box -->
<script src="<?php echo Config::get('app.url');?>aset/js/jquery.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $(this).ajaxStart(function(){
                    $('#btn-status').removeClass('btn-primary');
                    $('#btn-status').addClass('btn-warning');
                    $('#btn-status').html('Loading....... ');
            });
        $('#btn-status').click(function(){
            var status  = $('#status_order').val();
            var ids     = $('#id_order').val();
            $.post('{{Config::get("app.url")}}public/admin/sales/edit/status',{
                'status_order':status,
                'id_order':ids
            },function(data){
                if(data.status){
                    $('#btn-status').removeClass('btn-primary');
                    $('#btn-status').removeClass('btn-warning');
                    $('#btn-status').addClass('btn-success');
                    $('#btn-status').html('Status Order Berubah');
                    location.reload();

                }else{
                    $('#btn-status').removeClass('btn-primary');
                    $('#btn-status').removeClass('btn-warning');
                    $('#btn-status').addClass('btn-danger');
                    $('#btn-status').html('Status Gagal Diubah');
                    location.reload();

                }
            });
        });
    })
</script>
</section><!-- /.content -->

@stop