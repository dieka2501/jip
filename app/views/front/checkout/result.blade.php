@extends('front.template')
@section('content')
<div class="container">
	<section id="brands" class="section">
		<h1 class="heading-title">Pemesanan barang berhasil, nomor order anda: {{$noorder}} </h1>
		<div class="row">
			<div class="col-md-6">
				<p>Nama Lengkap</p>
				<b>{{$order->order_first_name}} {{$order->order_last_name}}</b>
				<p>Email</p>
				<b>{{$order->order_email}}</b>
				<p>Telepon</p>
				<b>{{$order->order_phone}}</b>
				<p>Tanggal Pembelian</p>
				<b>{{$order->created_at}}</b>
			</div>
			<div class="col-md-6">
				<p>Alamat Kirim</p>
				<b>
					<p>{{$order->order_address}} </p>
					<p>{{$order->order_town}}</p>
					<p>{{$order->order_country}}</p>
					<p>{{$order->order_zip}}</p>
				</b>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<table>
					<thead>
						<tr>
							<th>Nama Produk</th>
							<th>QTY</th>
							<th>Harga Satuan</th>
							<th>Total</th>
						</tr>
					</thead>
					<tbody>
					@foreach($detail as $details)
						<?php 
							$total = $details->detail_qty * $details->product_price;
						?>	
						<tr>
							<td>{{$details->name_product}}</td>
							<td>{{$details->detail_qty}}</td>
							<td>{{$details->product_price}}</td>
							<td>{{$total}}</td>
						</tr>
					@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</section>
</div>


@stop