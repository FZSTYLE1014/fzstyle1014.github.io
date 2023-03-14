<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
	<script src="../dist/js/sweetalert.min.js"></script>
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginCSS/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginCSS/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginCSS/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginCSS/fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginCSS/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginCSS/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginCSS/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginCSS/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginCSS/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginCSS/css/util.css">
	<link rel="stylesheet" type="text/css" href="loginCSS/css/main2.css">
	<!--===============================================================================================-->


	<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "kerjaya");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$nama = mysqli_real_escape_string($link, $_REQUEST['nama']);
$jawatan = mysqli_real_escape_string($link, $_REQUEST['jawatan']);
$bahagian = mysqli_real_escape_string($link, $_REQUEST['bahagian']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$kata_laluan = mysqli_real_escape_string($link, $_REQUEST['kata_laluan']);
?>
</head>

<body style="background-color: #999999;">

	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('loginCSS/images/bg-02.jpg');"></div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form class="login100-form validate-form" action="insert_admin.php" method="post">
					<span class="login100-form-title p-b-59">
						Daftar Admin EAIC </br> E-Kerjaya
					</span>

					<div class="wrap-input100 validate-input" data-validate="Name is required">
						<span class="label-input100">Nama Penuh</span>
						<input class="input100" type="text" name="nama" id="nama" placeholder="Nama Penuh...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Position is required">
						<span class="label-input100">Jawatan</span>
						<input class="input100" type="text" name="jawatan" id="jawatan" placeholder="Jawatan...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Department is required">
						<span class="label-input100">Bahagian</span>
						<input class="input100" type="text" name="bahagian" id="bahagian" placeholder="Bahagian...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" id="email" placeholder="Email...">
						<span class="focus-input100"></span>

					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Kata Laluan</span>
						<input class="input100" type="password" name="kata_laluan" id="kata_laluan"
							placeholder="*************">
						<span class="focus-input100"></span>
					</div>


					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit">
								Daftar
							</button>
						</div>

						<a href="admin.php" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Log Masuk
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

	<?php $sql = "SELECT * FROM admin WHERE email = '".$email."'";

$result = mysqli_query($link,$sql);
    if(mysqli_num_rows($result)>=1)
       { ?>
	<script>
		swal({

				text: "Email Telah wujud",
				icon: "error",
				dangerMode: true,
				closeOnClickOutside: false,
				closeOnEsc: false,
			})
			.then((willDelete) => {
				if (willDelete) {
					window.location = "register_admin.php";
				}
			});
	</script>
	<?php }
     else
        { 
		// Attempt insert query execution
		$sql2 = "INSERT INTO admin (nama, jawatan, bahagian, email, kata_laluan) VALUES ('$nama', '$jawatan', '$bahagian', '$email', 				'$kata_laluan')";
		if(mysqli_query($link, $sql2)){ ?>
	<script>
		swal({

				text: "Admin Berjaya Didaftar",
				icon: "success",
				dangerMode: false,
				closeOnClickOutside: false,
				closeOnEsc: false,
			})
			.then((willDelete) => {
				if (willDelete) {
					window.location = "admin.php";
				}
			});
	</script>
	<?php    
		} else{ ?>
	<script>
		swal({

				text: "Admin Tidak berjaya di daftar",
				icon: "error",
				dangerMode: true,
				closeOnClickOutside: false,
				closeOnEsc: false,
			})
			.then((willDelete) => {
				if (willDelete) {
					window.location = "register_admin.php";
				}
			});
	</script>
	<?php }
 
// Close connection
mysqli_close($link);

		} ?>


</body>

</html>