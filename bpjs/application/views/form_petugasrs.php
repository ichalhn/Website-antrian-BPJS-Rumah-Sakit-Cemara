<html>
<head>
	<title>Data Petugas Rumah Sakit</title>
</head>
<body>
	<div class="breadcrumbs">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Tambah Data Petugas Rumah Sakit</h1>
                    </div>
                </div>
        </div><br>
	<form method = "POST" action = "<?php echo site_url('petugasrs/simpan_petugasrs');?>">
		<div class="form-group">
			<input type = "text" name="ID_PetRS" class = "form-control" placeholder="ID Petugas Rumah Sakit">
		</div>
		<div class="form-group">
			<input type = "text" name="UserID" class = "form-control" placeholder="User ID Petugas">
		</div>
		<div class="form-group">
			<input type = "text" name="Nama_PetRS" class = "form-control" placeholder="Nama Petugas Rumah Sakit">
		</div>
		<div class="form-group">
			<input type = "text" name="Umur" class = "form-control" placeholder="Usia">
		</div>
		<div class="form-group">
			<textarea rows="4" cols="56" name="Alamat" class = "form-control" placeholder="Alamat"></textarea>
		</div>
		<div class="form-group">
			<select name="Gender" class="form-control">
				<option value="" selected="">Pilih Jenis Kelamin</option>
				<option value="L">Laki-laki</option>
				<option value="P">Perempuan</option>
			</select>
		</div>
		<button type="submit" class="btn btn-success">Simpan</button>
		<a href="<?php echo base_url() ?>index.php/petugasrs/lihatpetugasrs" class='btn btn-info'>kembali</a>
		<?php echo validation_errors();?>
	</form>
</body>
</html>