@extends('front.template')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 text-left">
			<form class="form-inline">
				<div class="form-group">
					<label>Search Order ID</label>
					<input name='order_id' id='order_id' class="form-control" placeholder='Order Id'>
					<button class="btn btn-default" id='btn-order' type="button">Cari</button>
				</div>			
			</form>
			<form>
				<div class="form-group">
					<label>Order ID</label>
					<input name='order_id_pembelian' id='order_id_pembelian' class="form-control" readonly="readonly">
				</div>
				<div class="form-group">
					<label>Nama Pembeli</label>
					<input name='nama' id='nama' class="form-control" readonly="readonly">
				</div>
				<div class="form-group">
					<label>Total Pembelian</label>
					<input name='total_pembelian' id='total_pembelian' class="form-control" readonly="readonly">
				</div>
				<div class="form-group">
					<label>Total Pembayaran *</label>
					<input name='total_pembayaran' id='total_pembayaran' class="form-control">
				</div>
				<div class="form-group">
					<label>Atas Nama Pembayaran *</label>
					<input name='nama_pembayaran' id='nama_pembayaran' class="form-control">
				</div>
				<div class="form-group">
					<label>Bukti Pembayaran</label>
					<input type='file' name='bukti_pembayaran' id='bukti_pembayaran' class="form-control">
				</div>
				<div class="form-group">
					<label>Catatan Pembayaran</label>
					<textarea name="catatan_pembayaran" id='catatan_pembayaran' class="form-control"></textarea>
				</div>
				<button type="button" class="btn btn-primary" id='btn-bayar'>Simpan Pembayaran</button>
			</form>

		</div>
	</div>
</div>
<script type="text/javascript" src="<?php echo Config::get('app.url');?>aset/js/jquery.js"></script>
<script type="text/javascript">
	$(document).ready(function(){

		$('#btn-order').click(function(){
			var id_order = $('#order_id').val();
			$.post('{{Config::get("app.url")}}public/payment/search/orderid',{
				'id_order':id_order
			},function(data,textStatus,jqXHR){
				console.log(data);
				if(data.status){
					$('#order_id_pembelian').val(data.data.id_order);
					$('#nama').val(data.data.order_first_name+' '+data.data.order_last_name);
					$('#total_pembelian').val(data.data.order_total);
				}else{
					$('#order_id_pembelian').val(data.alert);
				}
			});
		});
	});
</script>
@stop