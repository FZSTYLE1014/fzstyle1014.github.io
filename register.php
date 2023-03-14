<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<title>Registration</title>
	<link rel="stylesheet" href="style.css" />
	<link
		href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
		rel="stylesheet">
	<link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon3.png">
	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
	<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
	<link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
	<link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
	<link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="assets/css/style.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
	</script>
</head>

<body>
	<script>
		$(document).ready(function () {
			$('#test2').change(function () {
				if ($(this).is(':checked')) {
					$('#test1').attr('type', 'text');
				} else {
					$('#test1').attr('type', 'password');
				}
			});
		});
	</script>
	<?php include 'navbar/navbar-user.php'; ?>
	<?php

	require('db/db_connection.php');
	//require('session.php');

	// When form submitted, insert values into the database.
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$gambar = "profile\default-pic.png";
		//$binary_data = file_get_contents($gambar);
		//$encoded_data = base64_encode($binary_data);
		$nama_penuh = trim($_POST["nama_penuh"]);

		$no_kad_pengenalan_baru = trim($_POST["no_kad_pengenalan_baru"]);
		// Extract birth date from IC number
		$year = substr($no_kad_pengenalan_baru, 0, 2);
		$month = substr($no_kad_pengenalan_baru, 2, 2);
		$day = substr($no_kad_pengenalan_baru, 4, 2);
		$birth_date = $year . "-" . $month . "-" . $day; // Format: YYYY-MM-DD

		// Calculate age based on birth date
		$birth_date_timestamp = strtotime($birth_date);
		$current_date_timestamp = time();
		$age = date("Y", $current_date_timestamp) - date("Y", $birth_date_timestamp);

		$tarikh_lahir = $birth_date;
		$umur = $age;
		$email = trim($_POST["email"]);
		$password = trim($_POST["password"]);
		$uppercase = preg_match('@[A-Z]@', $password);
		$lowercase = preg_match('@[a-z]@', $password);
		$number    = preg_match('@[0-9]@', $password);
		$specialChars = preg_match('@[^a-zA-Z0-9]@', $password);
		$no_kad_pengenalan_baru = mysqli_real_escape_string($conn, $no_kad_pengenalan_baru);

		$query_check = "SELECT * FROM `user` WHERE `no_kad_pengenalan_baru` = '$no_kad_pengenalan_baru'";
		$result_check = mysqli_query($conn, $query_check);
		

		
		if (mysqli_num_rows($result_check) > 0) {
		  // no_kad_pengenalan_baru already exists in the database, show error message
		  echo '<script>alert("Nombor Kad Pengenalan ini telah digunakan untuk pendaftaran, Sila log masuk.")</script>';
		}else{
		
		if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 6) {
			echo '<script>alert("Kata laluan hendaklah mempunyai sekurangnya 6 aksara dengan gabungan satu huruf besar, angka dan simbol.")</script>';
		} else {
			$password = md5($password);

			$query1 = "INSERT INTO `user` (`nama_penuh`, `no_kad_pengenalan_baru`, `tarikh_lahir`,`email`, `password`) 
						VALUES ('$nama_penuh','$no_kad_pengenalan_baru','$tarikh_lahir','$email','$password')";

			$result1 = mysqli_query($conn, $query1);

			if ($result1) {

				$user_id = mysqli_insert_id($conn);

				$query2 = "INSERT INTO `maklumat_peribadi` (`id_user`,`nama_penuh`, `no_KP_baru`, `tarikh_lahir`,`umur`,`email`,`gambar`) 
				VALUES ('$user_id', '$nama_penuh','$no_kad_pengenalan_baru','$tarikh_lahir','$age','$email','$gambar') ";
				
				$result2 = mysqli_query($conn, $query2);
				echo '<script>alert("New record created successfully")</script>';
			} else {
				//  echo "Error: " . $query . "<br>" . mysqli_error($conn);
				echo '<script>alert("Sila masukkan maklumat yang diperlukan")</script>';
			}
		}
	}


		mysqli_close($conn);
	}
	if (isset($_REQUEST['user'])) {
	} else {
	?>
	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4" style="margin-top: 100px;">
				<style>
					body {
						background-image: url('assets/user.png');
						height: 80px;

					}
					#error-message,
					#error1-message,
					#error2-message,
					#error3-message {
						color: red;
						font-size: 14px;
						margin-top: 5px;
						margin-left: 2px;
					}
				</style>


				<div class="shadow-lg p-3 mb-5 bg-white rounded">

					<div class="text-center">
						<img src="assets\logo.png" width="140" height="70" />
						<img src="assets\e.png" width="120" height="60" />
						<h5><br />Daftar Akaun Pengguna</h5>
					</div>

					<br />
					<form id="register" action="register.php" method="POST">
						<label> Nama Penuh:</label>
						<input type="text" class="form-control" placeholder="(Seperti Kad Pengenalan)" name="nama_penuh"
							autofill="off" required />
						<!-- Error message container -->
						<div id="error-message"></div>
						<br>
						<label> Kad Pengenalan: <small>(Tanpa Sengkang)</small></label>
						<input type="number" class="form-control" placeholder="99010110****"
							name="no_kad_pengenalan_baru" autofill="off" required />
						<!-- Error message container -->
						<div id="error1-message"></div>
						<br>
						<!--<label> Tarikh Lahir:</label>
					  <input type="date" class="form-control" placeholder="tarikh lahir" name="tarikh_lahir"
						autofill="off" />
					  <br>-->
						<label> E-Mail:</label>
						<input type="email" class="form-control" placeholder="user@gmail.com" name="email"
							autofill="off" required />
							<!-- Error message container -->
						<div id="error2-message"></div>
						<br>
						
						<label> Kata Laluan:</label>
						<input type="password" class="form-control" id="test1" placeholder="P@ssW0rD" name="password"
							autofill="off" minlength="6" required />
						<!-- Error message container -->
						<div id="error3-message"></div>
						<br>

						<input id="test2" type="checkbox" /> Show password
						<br>
						<br>
						<div class="col-md-12 text-center">
							<button class="btn btn-block btn-success" type="submit" name="submit"
								onclick="validateForm()">
								<span class="fa fa-send"></span> Daftar Akaun
							</button>
						</div>
						<br />
					</form>
<script>

					function validateForm() {
					  const form = document.getElementById("register");
					  const nama_penuh = form.querySelector('input[name="nama_penuh"]');
					  const no_kad_pengenalan_baru = form.querySelector('input[name="no_kad_pengenalan_baru"]');
					  const email = form.querySelector('input[name="email"]');
					  const password = form.querySelector('input[name="password"]');
					  
					  // clear previous error messages
					  const errorIds = ['error-message', 'error1-message', 'error2-message', 'error3-message']; // add all error message IDs here
					  errorIds.forEach((id) => {
						const errorMsg = document.getElementById(id);
						if (errorMsg) {
						  errorMsg.innerHTML = '';
						}
					  });
					  ;
					  
					  if (nama_penuh.value.trim() === "") {
						document.getElementById("error-message").innerHTML = "Sila isi nama penuh anda.";
						nama_penuh.focus();
						return false;
					  }
					
					  if (no_kad_pengenalan_baru.value.length !== 12) {
						document.getElementById("error1-message").innerHTML = "Sila masukkan kad pengenalan yang sah.";
						no_kad_pengenalan_baru.focus();
						return false;
					  }
					
					  if (!email.checkValidity()) {
						document.getElementById("error2-message").innerHTML = "Sila masukkan alamat e-mel yang sah.";
						email.focus();
						return false;
					  }
					  
					  const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{6,}$/;
					  if (!passwordRegex.test(password.value)) {
						document.getElementById("error3-message").innerHTML =
						  "Kata laluan mesti mengandungi sekurang-kurangnya 6 aksara, satu huruf besar, satu huruf kecil, satu nombor dan satu karakter istimewa (@$!%*?&).";
						password.focus();
						return false;
					  }
					  
					  return true;
					}
					</script>




					<div class="col-md-12 text-center">
						<a href="login.php" class="">Log Masuk Pengguna</a>
					</div>
					<br />
				</div>
			</div>
		</div>
	</div>

	<?php
	}
	?>
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
	<script src="assets/vendor/php-email-form/validate.js"></script>
	<script src="assets/vendor/venobox/venobox.min.js"></script>
	<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
	<script src="assets/vendor/counterup/counterup.min.js"></script>
	<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
	<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
	<script src="assets/js/main.js"></script>


	<style>
		.form-control::placeholder {
			font-size: 12px;
			line-height: normal;
			color: #999;
		}
	</style>
</body>

</html>