<html>
<head>
	<title>Data Pasien</title>
</head>
<body>
	<div class="breadcrumbs">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Tambah Data Pasien</h1>
                    </div>
                </div>
        </div><br>
	<form method = "POST" action = "<?php echo site_url('pasien/simpan_pasien');?>">
		<div class="form-group">
			<input type = "text" name="No_KartuBPJS" class = "form-control" placeholder="Nomor BPJS">
		</div>
		<div class="form-group">
			<input type = "text" name="UserID" class = "form-control" placeholder="User ID Pasien">
		</div>
		<div class="form-group">
			<input type = "text" name="No_NIK" class = "form-control" placeholder="Nomor NIK">
		</div>
		<div class="form-group">
			<input type = "text" name="Nama_Pasien" class = "form-control" placeholder="Nama Pasien">
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
		<a href="<?php echo base_url() ?>index.php/pasien/lihatpasien" class='btn btn-info'>kembali</a>
		<?php echo validation_errors();?>
	</form>
</body>
</html>