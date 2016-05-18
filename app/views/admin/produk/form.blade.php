@extends('admin.template')
@section('content')

<!-- Content Header (Page header) -->
<p>{{$notip}}</p>
<section class="content-header clearfix">
  <h1>
    {{$page_name}}
    <small>Product</small>
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
  {{Form::open(array('url'=>$url,'files'=>true))}}
    <div class="box-header with-border">
      <h3 class="box-title">{{$page_name}}</h3>
      <div class="box-tools pull-right">
        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
      </div>
    </div><!-- /.box-header -->
    
    <div class="box-body">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Nama Produk</label>
              {{Form::text('nama_produk',$nama_produk,array('class'=>'form-control','placeholder'=>'Nama Produk','required'=>'required'))}}
              {{Form::hidden('ids',$ids,array('class'=>'form-control','placeholder'=>'Input News Title Here'))}}
          </div>
          <div class="form-group">
            <label>Harga Produk</label>
            {{Form::text('harga_produk',$harga_produk,array('class'=>'form-control','placeholder'=>'Harga Produk','required'=>'required'))}}
          </div>
          <div class="form-group">
            <label>Model Produk</label>
            {{Form::text('model_produk',$model_produk,array('class'=>'form-control','placeholder'=>'Model Produk'))}}
          </div>
          <div class="form-group">
            <label>Brand Produk</label>
            {{Form::select('brand',$arr_brand,$brand_produk,array('class'=>'form-control','required'=>'required'))}}
          </div>
          <div class="form-group">
            <label>Stock</label>
            {{Form::text('stock_produk',$stock_produk,array('class'=>'form-control','placeholder'=>'Stock Produk'))}}
          </div>
          <div class="form-group">
            <label>Status Produk</label>
            {{Form::select('status_product',array(1=>'Publish',0=>'Unpublish'),$status_product,array('class'=>'form-control'))}}
          </div>
        </div><!-- /.col -->
        <div class="col-md-6">
          <div class="form-group">
            <label>Kategori Produk</label>
            {{Form::select('kategori[]',$arr_kategori,$kategori,array('class'=>'form-control kat-height','multiple','required'=>'required'))}}
          </div><!-- /.form-group -->
          <!-- <div class="form-group">
            <label>Main Image</label>
            <input type="file" class="form-control" name='main_image'>
          </div> -->
          <!-- <div class="form-group">
            <label>Image 2</label>
            <input type="file" class="form-control" name='image2'>
          </div> -->
          <!-- <div class="form-group">
            <label>Image 3</label>
            <input type="file" class="form-control" name='image3'>
          </div> -->
          <!-- <div class="form-group">
            <label>Image 4</label>
            <input type="file" class="form-control" name='image4'>
          </div> -->
        </div><!-- /.col -->
      </div><!-- /.row -->
      <div class="row"> 
          <div class="col-md-12">
              <div class="form-group" id='divfile'>
                  <label>Image</label>
                  <input type="file" class="form-control" name='image[]' >
                </div><!-- /.form-group -->
                <div class="form-group">
                  <button class="btn btn-primary" id='clone_file' type="button">Add File</button>
              </div>
          </div>
      </div>
      <div class="row">
      <div class="col-md-12">
      <div class="form-group">
        <label>Deskripsi</label>
        <textarea class="form-control" id="description_product " name="description_product"> {{$description_product}}</textarea>
      </div>
      </div>
      </div>
    </div><!-- /.box-body -->
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
             @foreach($pf as $pfs)
              <tr>
                <td><img src="{{Config::get('app.url')}}aset/upload/{{$pfs->image_url}}" width="50px" height="50px"></td>
                <td class="text-left" align="left"><a href="{{Config::get('app.url')}}public/admin/product/file/delete/{{$pfs->id_pi}}?id={{$ids}}" class="btn btn-danger text-left" onclick="return confirm('Apakah Anda Yakin?')">Delete</a></td>
              </tr>
            @endforeach 
            </tbody>
        </table>
    </div>
    @endif
    <div class="box-footer">
      <a href="{{Config::get('app.url')}}public/admin/product" class="btn btn-warning">Back</a>
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
    plugins: "link fullscreen",
    toolbar: [
        "undo | redo | styleselect | bold | italic | link | fullscreen | alignleft | aligncenter |  alignright | insertdatetime | link | removeformat | cut | copy | paste | bullist | numlist | outdent | indent |"
    ],
    insertdatetime_formats: ["%Y.%m.%d", "%H:%M"],
    // setup : function(ed) {
    //     ed.onInit.add(function(ed) {
    //         ed.execCommand("fontName", false, "Arial");
    //         ed.execCommand("fontSize", false, "12px");
    //     });
    // }
    
 });
</script> 
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