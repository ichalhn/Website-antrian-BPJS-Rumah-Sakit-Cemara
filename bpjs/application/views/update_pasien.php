<!DOCTYPE html>
<html>
<head>
	<title>Data Pasien</title>
</head>
<body>
	<div class="breadcrumbs">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Ubah Data Pasien</h1>
                    </div>
                </div>
        </div><br>
		<?php
			$pt = $this->db->from('pasien')->where('No_KartuBPJS',$this->uri->segment(3))->get()->row();
		?>
		<form action="<?php echo base_url();?>index.php/pasien/update/<?php echo $this->uri->segment(3);?>" method="POST">
			<div class="form-group">
				<input type="text" name="No_KartuBPJS" value="<?php echo $this->uri->segment(3);?>" class="form-control" readonly>
			</div>
			<div class="form-group">
				 <input type="text" name="UserID" value="<?php echo $pt->UserID;?>" class="form-control" readonly>
			</div>
			<div class="form-group">
				 <input type="text" name="No_NIK" class="form-control" placeholder="Nomor NIK">
			</div>
			<div class="form-group">
				 <input type="text" name="Nama_Pasien" class="form-control" placeholder="Nama Pasien">
			</div>
			<div class="form-group">
				 <input type="text" name="Umur" class="form-control" placeholder="Usia">
			</div>
			<div class="form-group">
				<textarea rows="4" placeholder="Alamat" class="form-control" name="Alamat"></textarea> 
			</div>
			<div class="form-group">
				<select name="Gender" class="form-control">
					<option value="">Pilih Jenis Kelamin</option>
					<option value="Laki-laki">Laki-laki</option>
					<option value="Perempuan">Perempuan</option>
				</select>
			</div>
			<?php
			echo validation_errors();
			$this->db->select('*');
			$this->db->from('pasien');
			$this->db->where('No_KartuBPJS',$this->uri->segment(3));
			$query=$this->db->get();
			$data=$query->result_array();
			//foreach ($data as $row) {
				# code...
				?>
			<input type="submit" name="btn" value="Simpan" class="btn btn-success">
			<a href="<?php echo base_url() ?>index.php/pasien/lihatpasien" class='btn btn-info'>kembali</a>
		</form>
</body>
</html>