<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.css')?>">
	<title></title>
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
					<form method="POST" action="<?php echo site_url('RBAC/Authentication/login')?>">
						<div class="form-group">
						 	<label>Username</label>
						 	<input type="text" name="username" class="form-control">
						</div>
						<div class="form-group">
						 	<label>Password</label>
						 	<input type="password" name="password" class="form-control" value="">
						</div>
						<button class="btn btn-primary col-md-12">Masuk</button>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-4"></div>
	</div>
</body>
</html>
<script type="text/javascript" src="<?php echo base_url('assets/vendor/jquery/jquery.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js')?>"></script>