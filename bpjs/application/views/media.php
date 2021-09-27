<html>
<head>
<style>
p.double {border-style: double; border-width : 4px; padding : 30px; margin : 30px; text-indent : 50 px;
width : 550px; height : 450 px;}
</style>
</head>
<body>
<center> <p class="double"> Nomor Antrian Anda di EYEMEDICA :
<br>
<?php echo $no ?><br><br>
Tanggal Pelayanan <?php echo date('d-m-Y') ?><br><br><br>
Harap datang maksimal 15 menit sebelum waktu giliran anda
<br></p>
<a href="<?php echo base_url() ?>index.php/media/prints" class='btn btn-info'>Cetak Antrian</a>
<a href="<?php echo base_url() ?>index.php/media/tambah_antrian" class='btn btn-warning'>Next Antrian</a>
</center>
</body>
</html>