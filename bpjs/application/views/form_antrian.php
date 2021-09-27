<html>

<head>
<style type="text/css">
div.video {
	min-height: 3000px;
	max-height: 900px;
	max-width: 500px;
	margin: 0 auto;
}
</style>
</head>
<body>


<div class="media">
<?php
if($data['ket']=='foto'){?>
<center><img src="<?php echo base_url() ?>assets/media/<?php echo $data['nama'];?>"style="max-height: 3000px; max-width: 500px;"></center>
<?php
}
else{
?>
<center>
<video controls>
<source src="<?php echo base_url() ?>assets/media/<?php echo $data['nama'];?>" type="video/mp4" style="max-height: 300px; max-width: 500px;">
</video></center>
<?php
}echo $this->pagination->create_links();
?>
</div>
<?php

?>
<?php
?>


  <a href="http://localhost/eyemedica/index.php/antrian/view_antrian" class="btn btn-primary" role="button">View Antrian</a>
  
  
        </div>
       


    

</body>
</html>