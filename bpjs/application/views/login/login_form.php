<!DOCTYPE html>
<html>
<head>

<!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="shortcut icon" href="<?php echo base_url ('asset/images/favicon.png');?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url ('asset/css/reset.css');?>" />
<link rel="stylesheet" type="text/css" href="<?pho echo base_url ('asset/css/login.css');?>" />

<title> Login </title>
</head>

<body>
<div id="login_box">
		<h1> Login RSUD Soreang </h1>
	<form>
<!--		<?php
			$attributes = array('name' => 'login_form', 'id' => 'login_form');
			echo form_open ('login', $attributes);
		?>
		
		<!--pesan start-->
		<?php if (! empty ($pesan)) : ?>
			<p id="massage">
				<?php echo $pesan; ?>
			</p>
		<?php endif ?>
		<!-- pesan end-->
		
		<p>
		<label for ="username"> Username:</label>
		<input type="text" name ="username"
		size="20" class="form field"
		value ="<?php echo set_value ('username');?>">
		</p>
		
		<?php echo form_error ('username' , '
		<p class="field_error">', '</p>');?>
		
		<p>
		<label for="password"> Password:</label>
		<input type="password" name="password"
		size ="20" class="form_field"
		value="<?php echo set_value ('password');?>">
		</p>
		
		<?php echo form_error ('password' , '
		<p class="field_error">', '</p>');?>
		
		<p>
		<input type="submit" name="submit" id="submit"
		value="OK"/>
		</p>
		</form>
</div>
</body>
	<!-- MAIN WRAPPER -->
	<div class="cp-wrapper margin-top-wrapper">

		<!-- SECTION UPDATES -->
		<section class="content-wrapper">
			<div class="container">

				<div class="row">
					<div class="col-md-4 col-md-offset-4">

						<!-- AUTH WRAPPER -->
						<div class="auth-wrapper">

							

							<h3>Account / Login</h3>

							<form class="form-horizontal" role="form" method="POST" action="https://www.codepolitan.com/users/login/action">
								<input type="hidden" name="_token" value="N4CNSMelxYwvgWC6HZJ9N7nKplkqRaQsrc7fz88O">
								
								
																
								<fieldset>
									
									<div class="form-field">
										<label for="identity">Username/Email</label>
										<input name="identity" type="text" class="form-control" />
									</div>

									<div class="form-field">
										<label for="pwd">Password</label>
										<input name="password" id="password" type="password" class="form-control">
									</div>

									<div class="form-button">
										<input type="submit" value="Sign In" class="btn btn-cp btn-block btn-lg" />
									</div>


									<div class="form-auth-socmed">
										<div>or connect with :</div>

										<div class="auth-socmed-icon">
											<a href="https://www.codepolitan.com/users/facebook">	
												<span class="fa fa-facebook-square"></span>
											</a>
											<a href="https://www.codepolitan.com/users/github">	
												<span class="fa fa-github-square"></span>
											</a>
										</div>
									</div>

									<div class="text-center">
										<div>Forgot password?&nbsp;<a href="https://www.codepolitan.com/users/forgot-password">Click here to reset</a></div>
										<div>New User?&nbsp;<a href="https://www.codepolitan.com/users/register">Click here to register</a></div>
									</div>
								</fieldset>
							</form>

						</div>
						<!-- END: AUTH WRAPPER -->
</html>
		
		
		
	
	
	
	
	
		
