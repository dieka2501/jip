@extends('front.template')
@section('content')
<div class="jsi-bg">
<div class="lead">
<div class="container">
Check Out
<ol class="breadcrumb">
  <li><a href="{{config::get('app.url')}}public">Home</a></li>
  <li><a href="{{config::get('app.url')}}public/product">Product</a></li>
  <li class="active">Cart</li>
</ol>
</div>
</div>
</div>
<section class="white-bg section">
	<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12">
            {{Form::open(array('url'=>'cart/update','method'=>'POST'))}}
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Total</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $subtotal = 0; ?>
                    @foreach($cart as $carts)
                    
                    <tr>
                        <td class="col-sm-8 col-md-6">
                        <div class="media list-check">
                            <a class="thumbnail pull-left" href="#"> <img class="media-object" src="<?php echo Config::get('app.url');?>aset/upload/{{$carts->main_image}}" style="width: 72px; height: 72px;"> </a>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#">{{$carts->name_product}}</a></h4>
                                <h5 class="media-heading"> by <a href="#">{{$carts->brand_name}}</a></h5>
                                <?php $instock = $carts->stock_product -$carts->qty;?>
                                <span>Stock: </span><span class="text-success"><strong>{{$instock}}</strong></span>
                            </div>
                        </div></td>
                        <td class="col-sm-1 col-md-1" style="text-align: center">
                        <input type="hidden" name='idproduct[]' class="form-control" id="idproduct" value="{{$carts->product_id}}">
                        <input type="text" name='qtycart[]' class="form-control" id="qtycart" value="{{$carts->qty}}">
                        </td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>Rp. {{number_format($carts->price_product)}}</strong></td>
                        <?php $totalharga = $carts->price_product * $carts->qty;
                             $subtotal += $totalharga; 
                        ?>
                        <td class="col-sm-1 col-md-1 text-center" id="totaleach"><strong>Rp. {{number_format($totalharga)}}</strong></td>
                        <td class="col-sm-1 col-md-1">
                        <a href="{{Config::get('app.url')}}public/cart/delete?id={{$carts->id_cart}}" class="btn btn-danger">
                            <span class="glyphicon glyphicon-remove"></span> Remove
                        </button></td>
                    </tr>
                    @endforeach
                
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Subtotal</h5></td>
                        <td class="text-right"><h5><strong>Rp. {{number_format($subtotal)}}</strong></h5></td>
                    </tr>
                    <!-- <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Estimated shipping</h5></td>
                        <td class="text-right"><h5><strong>$6.94</strong></h5></td>
                    </tr> -->
                    <!-- <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h3>Total</h3></td>
                        <td class="text-right"><h3><strong>$31.53</strong></h3></td>
                    </tr> -->
                    <tr>
                        <td> <button class="btn btn-primary">Update Cart</button>  </td>
                        <td>   </td>
                        <td>   </td>
                        <td>
                        <a href="{{Config::get('app.url')}}public/product" class="btn btn-default">
                            <span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping
                        </button></td>
                        <td>
                        <button type="button" class="btn btn-success">
                            Checkout <span class="glyphicon glyphicon-play"></span>
                        </button></td>
                    </tr>
                </tbody>
            </table>
            {{Form::close()}}
        </div>
    </div>
</div>
</section>
@stop