@extends('front.template')
@section('content')
<div class="jsi-bg">
<div class="lead">
<div class="container">
Check Out
<ol class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="#">Checkout</a></li>
  <li class="active">Billing Address</li>
</ol>
</div>
</div>
</div>
<section class="white-bg section">
  <div class="container">
    {{Form::open(array('url'=>$url,'method'=>'POST'))}}
    <div class="row">
        <div class="col-sm-8 col-md-8">
        <div class="form-pengiriman">
            <h4>Pilih alamat pengiriman</h4>
            <?php if($login == true):?>
            <div class="clearfix address_wrapper">
                    <div class="radio_check">
                        <input type="radio" name='r_address' id="r_address_1" value="1">
                    </div>
                    <label>
                        <div class="address">
                        <p class="ch-head">{{$first_name}} {{$last_name}} </p>
                        <p>{{$address}}, {{$town}}</p>
                        <p>{{$country}}</p>
                        <p>Kode Pos: {{$zip}}</p>
                         <p>Nomor Handphone: {{$phone}}</p>
                        </div>    
                    </label>
            </div>
          <?php endif;?>
            <div class="alert alert-success" role="alert" style="padding:0px 15px;">
            <div class="radio">
              <label>
                <input type="radio" name='r_address' id="r_address_2" value="0" aria-label="..."> Penagihan ke alamat berbeda
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
                        <?php $subtot = 0;?>
                      @foreach($cart as $carts)
                      <tr>
                          <td>{{$carts->name_product}}</td>
                          <td>{{$carts->qty}}</td>
                          <td>Rp. {{number_format($carts->price_product)}}</td>
                      </tr>
                      <?php $subtot += $carts->price_product * $carts->qty;?>
                      @endforeach
                      <tr>
                          <td>Subtotal <br/>Ongkos Kirim</td>
                          <td></td>
                          <td>Rp.{{number_format($subtot)}} <br/> Rp.0</td>
                      </tr>
                  </tbody>
                </table>
                <input type='hidden' name='total_order' value="{{$subtot}}">
            </div>
        </div>
    </div>
    </form>
</div>
</section>
<script type="text/javascript">
    $(document).ready(function(){
        var login = "{{$login}}";
        if(login == 1){
            $('#r_address_1').prop('checked',true);
        }else{
            $('#r_address_2').prop('checked',true);
        }
    });
</script>
@stop