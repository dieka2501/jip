@extends('template')
@section('content')
	<header class="page-header">
		<h2>Form Member</h2>
	</header>

	<!-- start: page -->
		<section class="panel">
			<header class="panel-heading">
				<div class="panel-actions">
					<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
					<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
				</div>
		
				<h2 class="panel-title">Member</h2>
			</header>
			<form>
			<div class="panel-body">
				<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Form ID</label>
						<input type="text" class="form-control">
					</div>
					<div class="form-group">
						<label>Nama Lengkap</label>
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
						<label>Nomor SIM</label>
						<input type="text" class="form-control">
					</div>
					<div class="form-group">
						<label>Golongan Darah</label>
						<select class="form-control">
							<option>A</option>
							<option>AB</option>
							<option>B</option>
						</select>
					</div>
					<div class="form-group">
						<label>Provinsi/Daerah</label>
						<select class="form-control">
							<option>Jawa Barat</option>
						</select>
					</div>
					<div class="form-group">
						<label>Kota</label>
						<input type="text" class="form-control">
					</div>
					<div class="form-group">
						<label>Kode Pos</label>
						<input type="text" class="form-control">
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<textarea class="form-control"></textarea>
					</div>
					<div class="form-group">
						<label>Telepon</label>
						<input type="text" class="form-control">
					</div>
					<div class="form-group">
						<label>Nomor Polisi</label>
						<input type="text" class="form-control">
					</div>
					<div class="form-group">
						<label>Nomor Rangka</label>
						<input type="text" class="form-control">
					</div>
					<div class="form-group">
						<label>Nomor Mesin</label>
						<input type="text" class="form-control">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Periode Member</label>
						<select class="form-control">
							<option>1 Tahun</option>
						</select>
					</div>
					<div class="form-group">
						<label>Nama Panggilan</label>
						<input type="text" class="form-control">
					</div>
					<div class="form-group">
						<label>Tempat Tanggal Lahir</label>
						<div class="row">
						<div class="col-md-6">
						<input type="text" class="form-control">
						</div>
						<div class="col-md-6">
						<input type="text" class="form-control">
						</div>
						</div>
					</div>
					<div class="form-group">
						<label>Nomor Handphone</label>
						<input type="text" class="form-control">
					</div>
					<div class="form-group">
						<label>Jenis SIM</label>
						<select class="form-control">
							<option>SIM A</option>
						</select>
					</div>
					<div class="form-group">
						<label>Jenis Kelamin</label>
						<select class="form-control">
							<option>Male</option>
						</select>
					</div>
					<div class="form-group">
						<label>Nama Kantor</label>
						<input type="text" class="form-control">
					</div>
					<div class="form-group">
						<label>Bidang Usaha</label>
						<input type="text" class="form-control">
					</div>
					<div class="form-group">
						<label>Jabatan</label>
						<input type="text" class="form-control">
					</div>
					<div class="form-group">
						<label>Alamat Kantor</label>
						<textarea class="form-control"></textarea>
					</div>
					<div class="form-group">
						<label>Telepon</label>
						<input type="text" class="form-control">
					</div>
					<div class="form-group">
						<label>Jenis Kendaraan</label>
						<input type="text" class="form-control">
					</div>
					<div class="form-group">
						<label>Warna</label>
						<input type="text" class="form-control">
					</div>
					<div class="form-group">
						<label>Tahun Kendaraan</label>
						<input type="text" class="form-control">
					</div>
				</div>
				</div>
			</div>
			<div class="panel-footer">
				<button type="submit" class="btn btn-default">Approve</button>
				<button type="submit" class="btn btn-default">Reject</button>
				<button type="submit" class="btn btn-default">cancel</button>
			</div>
			</form>
		</section>
		
	<!-- end: page -->
@stop