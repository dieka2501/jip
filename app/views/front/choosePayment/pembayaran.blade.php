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
          <form action="{{$url}}" method="POST">
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
            <div>
                <input type='hidden' name="first_name" value="{{$order_first_name}}">
                <input type='hidden' name="last_name" value="{{$order_last_name}}">
                <input type='hidden' name="company" value="{{$order_company}}">
                <input type='hidden' name="address" value="{{$order_address}}">
                <input type='hidden' name="town" value="{{$order_town}}">
                <input type='hidden' name="zip" value="{{$order_zip}}">
                <input type='hidden' name="state" value="{{$order_country}}">
                <input type='hidden' name="email" value="{{$order_email}}">
                <input type='hidden' name="total_order" value="{{$order_total}}">
                <input type='hidden' name="phone_number" value="{{$order_phone}}">
            </div>
            <button class="btn btn-warning" type="submit">Pilih Pembayaran</button>
            </div>
          </form> 
        </div>
        </div>
        <div class="col-md-4">
            <div class="form-pengiriman">
                <h4>Alamat pengiriman dan penagihan</h4>
                <div class="box-pengirim">
                <h5>{{$order_first_name}} {{$order_last_name}}</h5>
                <p>{{$order_address}}</p>
                <p>{{$order_town}} {{$order_country}}</p>
                <p>Nomor Handphone: {{$order_phone}}</p>
                <p>Kode Pos: {{$order_zip}}</p>
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
                    <?php 
                      $sub = 0;
                    ?>
                    @foreach($cart as $carts)
                      <tr>
                          <td>{{$carts->name_product}}</td>
                          <td>{{$carts->qty}}</td>
                          <td>Rp.{{number_format($carts->price_product)}}</td>
                      </tr>
                      <?php 
                        $total = $carts->qty * $carts->price_product;
                        $sub    +=$total;
                      ?>
                    @endforeach
                      <tr>
                          <td>Subtotal <br/>Ongkos Kirim</td>
                          <td></td>
                          <td>Rp.{{number_format($sub)}} <br/> Rp.0</td>
                      </tr>
                  </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</section>
@stop