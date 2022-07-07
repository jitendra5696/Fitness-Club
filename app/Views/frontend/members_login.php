<!DOCTYPE html>
<html lang="en">
<head>
	<title>Fitness Club</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
	<link rel="shortcut icon" href="<?= base_url('assets/backend'); ?>/images/favicone-1.png"  sizes="32x32"/>

	<!-- Font Awesome -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

	<!-- Flaticon Font -->
	<link href="<?= base_url('assets/frontend'); ?>/lib/flaticon/font/flaticon.css" rel="stylesheet">

	<!-- Customized Bootstrap Stylesheet -->
	<link href="<?= base_url('assets/frontend'); ?>/css/style.min.css" rel="stylesheet">
<!--===============================================================================================-->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/frontend/login'); ?>/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/frontend/login'); ?>/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/frontend/login'); ?>/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/frontend/login'); ?>/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/frontend/login'); ?>/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/frontend/login'); ?>/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/frontend/login'); ?>/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/frontend/login'); ?>/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/frontend/login'); ?>/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/frontend/login'); ?>/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<!-- Navbar Start -->
	<div class="container-fluid p-0 nav-bar">
			<nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
					<a href="<?= base_url('home/index'); ?>" class="navbar-brand">
							<h1 class="m-0 display-4 font-weight-bold text-uppercase text-white">Fitness Club</h1>
							<span class="m-0 font-weight-bold text-uppercase text-white text-center">home / login</span>
					</a>
					<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
							<span class="navbar-toggler-icon"></span>
					</button>
			</nav>
	</div>
	<!-- Navbar End -->
	<div class="limiter">
		<div class="container-login100" style="background-image: url('<?= base_url('assets/frontend/login'); ?>/images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form method="post" action="<?= base_url('home/login'); ?>">
					<span class="login100-form-title p-b-49 font-weight-bold text-uppercase">
						members Login
					</span>
					<div class="">
						<?php if(!empty(session()->getTempdata('wrong'))){ ?>
							<div class="alert alert-info text-center text-danger font-weight-bold"><?= session()->getTempdata('wrong');  ?></div>
						<?php } ?>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Username is reauired">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Type your username" value="<?= set_value('username');  ?>">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>
					<div class="text-danger"><?php if(isset($form_error) && $form_error->hasError('username')){ echo $form_error->getError('username');} ?></div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="pass" placeholder="Type your password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					<div class="text-danger"><?php if(isset($form_error) && $form_error->hasError('pass')){ echo $form_error->getError('pass');} ?></div>
					<div class="container-login100-form-btn mt-4">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit">
								Login
							</button>
						</div>
					</div>

					<div class="txt1 text-center p-t-54 p-b-20">
						<span>
							Or Sign Up Using
						</span>
					</div>

					<div class="flex-c-m">
						<a href="https://www.facebook.com/login/?privacy_mutation_token=eyJ0eXBlIjowLCJjcmVhdGlvbl90aW1lIjoxNjU0NjA4MzUzLCJjYWxsc2l0ZV9pZCI6MjY5NTQ4NDUzMDcyMDk1MX0%3D" class="login100-social-item bg1">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="" class="login100-social-item bg2">
							<i class="fa fa-twitter"></i>
						</a>

						<a href="https://mail.google.com/mail/u/0/#inbox" class="login100-social-item bg3">
							<i class="fa fa-google"></i>
						</a>
					</div>
				</form>
				<h3 class="text-uppercase text-dark text-center mt-4">or</h3>
				<a href="<?= base_url('home/membership'); ?>">
				<div class="container-login100-form-btn mt-5">
					<div class="wrap-login100-form-btn">
						<div class="login100-form-bgbtn"></div>
						<button class="login100-form-btn">
							New Members
						</button>
					</div>
				</div>
			</a>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="<?= base_url('assets/frontend/login'); ?>/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets/frontend/login'); ?>/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets/frontend/login'); ?>/vendor/bootstrap/js/popper.js"></script>
	<script src="<?= base_url('assets/frontend/login'); ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets/frontend/login'); ?>/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets/frontend/login'); ?>/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?= base_url('assets/frontend/login'); ?>/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets/frontend/login'); ?>/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->


</body>
</html>
