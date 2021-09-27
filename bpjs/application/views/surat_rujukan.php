<html>
<head>
<style>
p.double {border-style: double; border-width : 4px; padding : 30px; margin : 30px; text-indent : 150 px; text-align:left;
width : 500px; height : 2000 px;}
</style>
</head>
<body><center>
<p class="double">
Surat Rujukan<br><br><br>
		Nomor Surat Rujukan	: <?php echo $result->ID_SuratRujukan ?><br><br>
		Tanggal				: <?php echo date('d-m-Y') ?><br><br>
		Nama Dokter Klinik	: <?php echo $result->ID_DokKlinik ?><br><br>
		Nomor BPJS 			: <?php echo $result->No_KartuBPJS ?><br><br>
		Nama Petugas Klinik : <?php echo $result->ID_PetKlinik ?><br><br>
		Nama Petugas Rumah Sakit : <?php echo $result->ID_PetRS ?><br><br>
		Diagnosa			: <?php echo $result->Diagnosa ?><br><br><br></p></center>
<center><a href="<?php echo base_url() ?>index.php/surat/lihatsurat" class='btn btn-info'>Kembali</a></center>
</center>

</body>
</html>