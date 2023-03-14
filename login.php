<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<title>Login</title>
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
	<script>
		$(document).ready(function () {
			$('#loginForm').submit(function (event) {
				event.preventDefault(); // prevent from submitting form

				var no_kad_pengenalan_input = $('#no_kad_pengenalan_baru');
				var password_input = $('#password');

				var no_kad_pengenalan_value = no_kad_pengenalan_input.val();
				var password_value = password_input.val();

				var errors = []; //initialize an errors array

				//check validations
				if (no_kad_pengenalan_value == "") {
					errors.push("Sila masukkan nombor kad pengenalan!");
				}
				if (password_value == "") {
					errors.push("Sila masukkan kata laluan!");
				}

				//if error array length is greater than zero, show the error messages
				if (errors.length > 0) {
					if ($('#feedbackMessage')
						.length) { // if feedback div exists remove and reappend fresh one.
						$('#feedbackMessage').remove();
					}
					//append new div with feedback messages
					$('<div id="feedbackMessage"></div>')
						.addClass('alert alert-danger')
						.appendTo('#loginForm');

					$.each(errors, function (key, value) {
						$('#feedbackMessage').append($('<li>').text(value));
					});

					return false;
				}

				// if passed all checks, go ahead and submit the form
				$(this).unbind('submit').submit();

			});
		});
	</script>

</head>

<body>

	<?php include  $_SERVER['DOCUMENT_ROOT'].'\navbar/navbar-user.php';

	require('db/db_connection.php');
	//require('session.php');

	// When form submitted, insert values into the database.
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$errors = array(); //initialize an errors' array
		//check if required fields were submitted or not
		if(empty($_POST['no_kad_pengenalan_baru'])){
		  $errors[] = 'Sila masukkan nombor kad pengenalan!';
		}
		if(empty($_POST['password'])){
		  $errors[] = 'Sila masukkan kata laluan!';
		}
		
		//If there were errors, print them out
		if(!empty($errors)){
			echo "<div class='alert alert-danger'>";
			foreach($errors as $error){
				echo '<li>'.$error.'</li>';
			}
			echo "</div>";
		}
		
		$no_kad_pengenalan_baru = trim($_POST["no_kad_pengenalan_baru"]);
		$password = trim($_POST["password"]);
		$password = md5($password);
		$query = "SELECT * FROM `user` WHERE `no_kad_pengenalan_baru` = '$no_kad_pengenalan_baru' && `password` = '$password';";

		if ($result = mysqli_query($conn, $query)) {
			// if (mysqli_query($conn, $query)) {
			echo "done";
			session_start();
			$row = mysqli_fetch_array($result);
			echo $row["password"];
			$_SESSION["id_user"] = $row["id_user"];
			$_SESSION["nama_penuh"] = $row["nama_penuh"];
			header("location: home.php");
		} else {
			echo "Error: " . $query . "<br>" . mysqli_error($conn);
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

						height: 100px;
					}

					#error,
					#error1,
					#error2 {
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
						<h5> <br />Log Masuk Pengguna</h5>
					</div>
					<br />
					<script>
						function validateForm() {
							var no_kad_pengenalan = document.getElementsByName("no_kad_pengenalan_baru")[0].value;
							var password = document.getElementsByName("password")[0].value;
							var error = document.getElementById("error");

							// Check if fields are empty
							if (no_kad_pengenalan == "" || password == "") {
								error.innerHTML = "<p>Please fill out all fields.</p>";
								return false;
							}

							error.innerHTML = ""; // clear previous error messages
							error1.innerHTML = "";
							error2.innerHTML = "";
							if (no_kad_pengenalan.length != 12) {
								error1.innerHTML += "<p>No. kad pengenalan baru is not valid.</p>";
								return false;
							}

							if (password.length < 8 || password.length > 20) {
								error2.innerHTML += "<p>Password must be between 8 to 20 characters.</p>";
								return false;
							}

							return true; // return true if validation passed
						}
					</script>
					<div id="error"></div> <!-- error message section -->
					<form action="login.php" method="POST">
						<p>No Kad pengenalan</p>
						<input type="number" class="form-control" placeholder="Nombor Kad Pengenalan"
							name="no_kad_pengenalan_baru" pattern="[0-9]{12}" required />
						<br>
						<div id="error1"></div>

						<p>Kata Laluan</p>
						<input type="password" class="form-control" id="test1" placeholder="Kata Laluan" name="password"
							required minlength="6" maxlength="20" />
						<div id="error2"></div>
						<br>
						<input id="test2" type="checkbox" />Show password
						<br>
						<br>

						<div class="col-md-12 text-center">
							<button class="btn btn-block btn-success" name="submit" onclick="return validateForm();">
								<span class="fa fa-send"></span> Log Masuk
							</button>
						</div>
						<br />
					</form>





					<div class="col-md-12 text-center">
						<a href="register.php" class="">Daftar Pengguna</a>
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
</body>

</html>