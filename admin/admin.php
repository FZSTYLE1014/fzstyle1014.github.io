DirectoryIndex home.html index.html index.htm index.php
<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon3.png">
	<title>E-KERJAYA EAIC</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginCSS/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginCSS/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginCSS/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginCSS/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginCSS/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginCSS/vendor/select2/select2.min.css">
	<!--===============================================================================================-->

	<link rel="stylesheet" type="text/css" href="loginCSS/css/util.css">
	<link rel="stylesheet" type="text/css" href="loginCSS/css/main.css">
	<!--===============================================================================================-->
</head>

<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('loginCSS/images/img-02.jpg');">
			<div class="wrap-login100 p-t-190 p-b-30">
				<form class="login100-form validate-form" name="admin" method='POST' action="adminprocess.php">
					<div class="login100-form-avatar">
						<img src="loginCSS/images/avatar-03.png" alt="AVATAR">
					</div>

					<span class="login100-form-title p-t-20 p-b-45">
						E-KERJAYA EAIC
					</span>

					<div class="wrap-input100 validate-input m-b-10" data-validate="Email is required">
						<input class="input100" type="text" name="email" id="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate="Password is required">
						<input class="input100" type="password" name="kata_laluan" id="kata_laluan"
							placeholder="Kata Laluan">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>

					<div class="container-login100-form-btn p-t-10">
						<button class="login100-form-btn" type="submit" name="login" id="login">
							Log Masuk
						</button>
					</div>

					<div class="text-center w-full p-t-25 p-b-230">
						<a href="#" class="txt1">
							Forgot Username / Password?
						</a>
					</div>

					<!-- <div class="text-center w-full">
						<a class="txt1" href="register_admin.php">
							Daftar Admin
							<i class="fa fa-long-arrow-right"></i>						
						</a>
					</div> -->
				</form>
			</div>
		</div>
	</div>




	<!--===============================================================================================-->
	<script src="loginCSS/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="loginCSS/vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="loginCSS/js/main.js"></script>


</body>

</html>