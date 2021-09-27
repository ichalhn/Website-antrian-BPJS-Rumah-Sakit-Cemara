<html>
	<head>
		<title>Data Surat Rujukan</title>
	</head>
<body>
	<div class="breadcrumbs">
                <div class="page-header float-left">
                    <div class="page-title">
                        <center><h1>Daftar Surat Rujukan</center></h1>
                    </div>
                </div>
        </div><br><br><br>
		<?php if($this->session->userdata('jabatan')=="Petugas Klinik"):?>
		<a href = "<?php echo site_url()."/surat/formsurat";?>" class="btn btn-info" role="button">Tambah Data</a><br>
		<?php endif ?>
		<table class="table table-bordered">
			<tr>
				<td>Nomor Surat Rujukan</td>
				<td>Tanggal</td>
				<td>Nama Dokter Klinik</td>
				<td>Nomor BPJS</td>
				<td>Nama Petugas Klinik</td>
				<td>Nama Petugas Rumah Sakit</td>
				<td>Diagnosa</td>		
				<th colspan="4" style="text-align: center">Action</th>
					
			</tr>
				
			
			<?php
				foreach($result as $data){
					?>
						<tr>
							<td><?php echo $data['ID_SuratRujukan'];?></td>
							<td><?php echo $data['Tanggal'];?></td>
							<td><?php echo $data['Nama_DokKlinik'];?></td>
							<td><?php echo $data['No_KartuBPJS'];?></td>
							<td><?php echo $data['Nama_PetKlinik'];?></td>
							<td><?php echo $data['Nama_PetRS'];?></td>
							<td><?php echo $data['Diagnosa'];?></td>
							<?php if($this->session->userdata('jabatan')=="Petugas Klinik"):?>
							<td align="center"><a href="<?php echo base_url()?>index.php/surat/update/<?php echo $data['ID_SuratRujukan'] ?>" class="btn btn-info">Ubah</a>
							</td>
							<?php endif ?>
                           <td align="center"><a href="<?php echo base_url()?>index.php/surat/viewsurat/<?php echo $data['ID_SuratRujukan'] ?>" class="btn btn-warning">Lihat Surat</a>
							</td>
							<?php if($this->session->userdata('jabatan')=="Dokter"):?>
							<td align="center"><a href="<?php echo base_url()?>index.php/surat<?php echo $data['ID_SuratRujukan'] ?>" class="btn btn-success">Validasi</a>
							</td>	
							<td align="center"><a href="<?php echo base_url()?>index.php/surat<?php echo $data['ID_SuratRujukan'] ?>" class="btn btn-danger">Tolak</a>
							</td>	
<?php endif ?>							
						</tr>
			<?php
				}
			?>
		</table>
	</body>
</html>