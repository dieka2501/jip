@extends('front.template')
@section('content')
<div class="jsi-bg">
<div class="lead">
<div class="container">
Pilih Cara Pembayaran
<ol class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="#">Checkout</a></li>
  <li class="active">Choose Payment</li>
</ol>
</div>
</div>
</div>
<section class="white-bg section">
    <div class="container">
    <div class="row">
        <div class="col-sm-8 col-md-8">
        <div class="form-pengiriman">
            <h4>Pilih Opsi Pembayaran</h4>
            <div>

            <!-- Nav tabs -->
            <ul class="nav nav-tabs text-center" role="tablist">
            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Bayar di <br/> Tempat</a></li>
            <li role="presentation"><a href="#" style="cursor: not-allowed">Kartu <br/>Kredit</a></li>
            <li role="presentation"><a href="#" style="cursor: not-allowed">Bank <br/>Transfer</a></li>
            <li role="presentation"><a href="#" style="cursor: not-allowed">BCA <br/>KlikPay</a></li>
            <li role="presentation"><a href="#" style="cursor: not-allowed">Mandiri <br/>Click Pay</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="home">
              <div class="bayar-cod">
              <p>Anda dapat melakukan pembayaran saat Anda menerima pesanan dari kurir kami.</p>
              </div>
              </div>
            </div>
            <button class="btn btn-warning">Konfirmasi Pembayaran</button>
            </div>
        </div>
        </div>
        <div class="col-md-4">
            <div class="form-pengiriman">
                <h4>Alamat pengiriman dan penagihan</h4>
                <div class="box-pengirim">
                <h5>Darana Sukma Vidya</h5>
                <p>Jl. Terusan Kiaracondong, Perum Kiara Sari Asri 5 No.35 Kec Buahbatu, Jawa Barat</p>
                <p>Jawa Barat-Kota Bandung-Buahbatu (Margacinta)</p>
                <p>Nomor Handphone: 8999533433</p>
                <p>Kode Pos: 40286</p>
                </div>
            </div>
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