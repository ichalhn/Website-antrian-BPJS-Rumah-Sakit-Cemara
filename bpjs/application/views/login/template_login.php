<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url();?>/assets/images/favicon.png">
    <title>Rumah Sakit Cemara</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>/lite/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="<?php echo base_url();?>/lite/css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>

	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
		<?php echo $this->session->flashdata('notif');  ?>
			<div class="panel panel-default fade-in">
				<div class="panel-heading">
					Form Login
				</div>
				<div class="panel-body">
					<form method="POST" action="<?php echo site_url('login/cek_login')?>">
				
						<div class="form-group">
						 	<label>Username</label>
						 	<input type="text" name="username" class="form-control">
							<?php echo form_error('username'); ?>
						</div>
						<div class="form-group">
						 	<label>Password</label>
						 	<input type="password" name="password" class="form-control" value="">
							<?php echo form_error('password'); ?>
						</div>
						
						<button class="btn btn-primary col-md-12">Masuk</button>
						<?php
					
						if(is_null($error)){
							//var_dump($error);
						}
						else
							echo "<div class='alert alert-danger'>".$error."</div>";
						
					?>
					</form>
					</div>
				
			</div>
		</div>
		<div class="col-md-4"></div>
	</div>
	
</body>

</html>
 <script src="<?php echo base_url();?>/assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url();?>/assets/plugins/bootstrap/js/tether.min.js"></script>
    <script src="<?php echo base_url();?>/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url();?>/lite/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url();?>/lite/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url();?>/lite/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="<?php echo base_url();?>/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url();?>/lite/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url();?>/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>