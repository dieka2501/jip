@extends('front.template')
@section('content')
<div class="jsi-bg">
<div class="lead">
<div class="container">
Check Out
<ol class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="#">Sample</a></li>
  <li class="active">Breadcrumb</li>
</ol>
</div>
</div>
</div>
<section class="white-bg section">
  <div class="container">
    <div class="row">
        <div class="col-sm-8 col-md-8">
        <div class="form-pengiriman">
            <h4>Pilih alamat pengiriman</h4>
            <div class="clearfix address_wrapper">
                    <div class="radio_check">
                        <input type="radio">
                    </div>
                    <label>
                        <div class="address">
                        <p class="ch-head">Darana Sukma Vidya </p>
                        <p>Jl. Terusan Kiaracondong, Perum Kiara Sari Asri 5 No.35 Kec Buahbatu, Jawa Barat</p>
                        <p>Jawa Barat - Kota Bandung - Buahbatu (Margacinta)</p>
                        <p>Nomor Handphone: 8999533433</p>
                        <p>Kode Pos: 40286</p>
                        </div>    
                    </label>
            </div>
            <div class="alert alert-success" role="alert" style="padding:0px 15px;">
            <div class="radio">
              <label>
                <input type="radio" value="option1" aria-label="..."> Penagihan ke alamat berbeda
              </label>
            </div>
            </div>
            <form class="form-billing-address">
                <div class="row field-row">
                    <div class="col-xs-6">
                        <input class="required form-control  " placeholder="first name*" name="first_name" value="">
                    </div>
                    <div class="col-xs-6">
                        <input class="required form-control" placeholder="last name*" name="last_name" value="">
                    </div>
                </div>


                <div class="row field-row ">
                    <div class="col-xs-12">
                        <input class="form-control" placeholder="company name (optional)" name="company" value="">
                    </div>
                </div>

                <div class="row field-row ">
                    <div class="col-xs-12">
                        <input class="required form-control" placeholder="street address*" name="address" value="">

                    </div>
                </div>

                <div class="row field-row ">
                    <div class="col-xs-12">
                        <input class="required form-control col-xs-12" placeholder="town*" name="town" value="">

                    </div>
                </div>

                <div class="row field-row ">
                    <div class="col-xs-2">
                        <input class="required form-control " placeholder="postcode/zip*" name="zip" value="">
                    </div>
                    <div class="col-xs-10">
                        <input class="form-control" placeholder="state/country" name="state" value="">
                    </div>
                </div>
                <div class="row field-row ">
                    <div class="col-xs-6">
                        <input class="required form-control" placeholder="email address*" name="email" value="">
                    </div>
                    <div class="col-xs-6">
                        <input class="form-control" placeholder="phone number" name="phone_number" value="">
                    </div>
                </div>

                <button type="submit" class="btn btn-warning">Lanjutkan</button>
            </form>
        </div>
        </div>
        <div class="col-md-4">
            <div class="form-pengiriman">
                <h4>Detail Order</h4>
                <table class="table table-striped">
                  <thead>
                      <tr>
                        <th>Product</th>
                        <th>QTY</th>
                        <th>Price</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>Lenovo Tab 2 A7-10 WiFi Only - 8 GB - Hitam</td>
                          <td>1</td>
                          <td>Rp.2000.000</td>
                      </tr>
                      <tr>
                          <td>Subtotal <br/>Ongkos Kirim</td>
                          <td></td>
                          <td>Rp.2000.000 <br/> Rp.7000</td>
                      </tr>
                  </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</section>
@stop