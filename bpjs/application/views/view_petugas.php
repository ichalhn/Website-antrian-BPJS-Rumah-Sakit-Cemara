<html>
	<head>
		<title>Data Petugas Klinik</title>
	</head>
<body>
	<div class="breadcrumbs">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Data Petugas Klinik</h1>
                    </div>
                </div>
        </div><br><br><br>
		<a href = "<?php echo site_url()."/petugas/formpetugas";?>" class="btn btn-info" role="button">Tambah Data</a><br>
		<table class="table table-bordered">
			<tr>
				<td>ID Petugas Klinik</td>
				<td>User ID Petugas</td>
				<td>Nama Petugas Klinik</td>
				<td>Usia</td>
				<td>Alamat</td>
				<td>Jenis Kelamin</td>		
				<th colspan="2" style="text-align: center">Action</th>
			</tr>
			<?php
				foreach($result as $data){
					?>
						<tr>
							<td><?php echo $data['ID_PetKlinik'];?></td>
							<td><?php echo $data['UserID'];?></td>
							<td><?php echo $data['Nama_PetKlinik'];?></td>
							<td><?php echo $data['Umur'];?></td>
							<td><?php echo $data['Alamat'];?></td>
							<td><?php echo $data['Gender'];?></td>
							<td align="center"><a href="<?php echo base_url()?>index.php/petugas/update/<?php echo $data['ID_PetKlinik'] ?>" class="btn btn-warning">Ubah</a>
							</td>
							<td align="center"><a class="btn btn-danger" data-toggle="modal" data-target="#exampleModal<?php echo $data['ID_PetKlinik']?>">Hapus</a>
								<div class="modal fade" id="exampleModal<?php echo $data['ID_PetKlinik']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      								<div class="modal-dialog" role="document">
        								<div class="modal-content">
        									<div class="modal-body">Are you sure?</div>
        									<div class="modal-footer">
        										<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        										<a class="btn btn-danger" href="<?php echo base_url();?>/index.php/petugas/hapus/<?php echo $data['ID_PetKlinik']?>">Delete</a>
        									</div>
    									</div>
      								</div>
    							</div>
							</td>						
						</tr>
			<?php
				}
			?>
		</table>
	</body>
</html>