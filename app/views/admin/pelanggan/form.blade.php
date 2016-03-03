@extends('admin.template')
@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Add Data
    <small>Preview</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Forms</a></li>
    <li class="active">Add Data</li>
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
    <div class="box-body">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Nama Depan</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label>Konfirmasi Password</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label>Alamat Utama Provinsi / Daerah</label>
            <select class="form-control">
              <option>Jawa Barat</option>
              <option>2</option>
            </select>
          </div>
          <div class="form-group">
            <label>Kode Pos</label>
            <input type="text" class="form-control">
          </div>
        </div><!-- /.col -->
        <div class="col-md-6">
          <div class="form-group">
            <label>Nama Belakang</label>
            <input type="text" class="form-control">
          </div><!-- /.form-group -->
          <div class="form-group">
            <label>Telepon</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label>Mobile</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label>Aktif</label>
            <select class="form-control">
              <option>Ya</option>
              <option>Tidak</option>
            </select>
          </div>
          <div class="form-group">
            <label>Kota</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label>Alamat Lengkap</label>
            <input type="text" class="form-control">
          </div>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.box-body -->
    <div class="box-footer">
      <button style="submit" class="btn btn-success">Submit</button>
    </div>
  </div><!-- /.box -->

</section><!-- /.content -->

@stop