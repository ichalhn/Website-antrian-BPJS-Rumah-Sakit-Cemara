<html>
<head>
	<title>Surat Rujukan</title>
</head>
<body>
	<div class="breadcrumbs">
                <div class="page-header float-center">
                    <div class="page-title">
                       <center> <h1>Input Surat Rujukan </center></h1>
                    </div>
                </div>
        </div><br>
	<?php
			$pt = $this->db->from('surat_rujukan')->where('ID_SuratRujukan',$this->uri->segment(3))->get()->row();
		?>
		<form action="<?php echo base_url();?>index.php/surat/update/<?php echo $this->uri->segment(3);?>" method="POST">
		<div class="form-group">
				<input type="text" name="ID_SuratRujukan" value="<?php echo $this->uri->segment(3);?>" class="form-control" readonly>
			</div>
		<div class="form-group">
			  <label>Tanggal</label>
			  <input type = "text" class = "form-control"  value = "<?php echo date('y-m-d');?>" readonly>
			</div>
		<div class="form-group">
			  <label>Nama Dokter Klinik</label>
			  <select name = "ID_DokKlinik" class = "form-control">
			    <option value="#" disabled selected>Pilih Nama Dokter Klinik</option>
				<?php
				$dokter_klinik = $this->db->get('dokter_klinik')->result_array();
					foreach($dokter_klinik as $data){
						echo "<option value = ".$data['ID_DokKlinik'].">".$data['Nama_DokKlinik']."</option>";
					}
				?>
			  </select>
			  <?php echo form_error('ID_DokKlinik'); ?>
			</div>
		<div class="form-group">
				 <input type="text" name="No_KartuBPJS" value="<?php echo $pt->No_KartuBPJS;?>" class="form-control" readonly>
				 </div>
		<div class="form-group">
			  <label>Nama Petugas Klinik</label>
			  <select name = "ID_PetKlinik" class = "form-control">
			    <option value="#" disabled selected>Pilih Nama Petugas Klinik</option>
				<?php
				$petugas_klinik = $this->db->get('petugas_klinik')->result_array();
					foreach($petugas_klinik as $data2){
						echo "<option value = ".$data2['ID_PetKlinik'].">".$data2['Nama_PetKlinik']."</option>";
					}
				?>
			  </select>
			  <?php echo form_error('ID_PetKlinik'); ?>
			</div>
			<div class="form-group">
			  <label>Nama Petugas Rumah Sakit</label>
			  <select name = "ID_PetRS" class = "form-control">
			    <option value="#" disabled selected>Pilih Nama Petugas Rumah Sakit</option>
				<?php
				$petugas_rs = $this->db->get('petugas_rs')->result_array();
					foreach($petugas_rs as $data3){
						echo "<option value = ".$data3['ID_PetRS'].">".$data3['Nama_PetRS']."</option>";
					}
				?>
			  </select>
			  <?php echo form_error('ID_PetRS'); ?>
			</div>
		<div class="form-group">
			<input type = "text" name="Diagnosa" class = "form-control" placeholder="Diagnosa Penyakit">
			<?php echo form_error('Diagnosa'); ?>
		</div>
		<center><input type="submit" class="btn btn-success" value='Simpan' name='btn'>
		<a href="<?php echo base_url() ?>index.php/surat/lihatsurat" class='btn btn-info'>kembali</a></center>
		<?php //echo validation_errors();?>
	</form>
</body>
</html>