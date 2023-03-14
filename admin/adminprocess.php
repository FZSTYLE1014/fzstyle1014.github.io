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
	<link rel="stylesheet" type="text/css" href="loginCSS/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginCSS/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginCSS/vendor/select2/select2.min.css">
	<!--===============================================================================================-->

	<link rel="stylesheet" type="text/css" href="loginCSS/css/util.css">
	<link rel="stylesheet" type="text/css" href="loginCSS/css/main.css">
	<!--===============================================================================================-->

	<?php
  // Report all errors except E_NOTICE
  error_reporting(E_ALL & ~E_NOTICE);
  $link=mysqli_connect("localhost","root","","kerjaya");
  mysqli_select_db($link,"kerjaya")
?>

	<?php
// Inialize session
session_start();

//Retrieve username & password from FORM
$email = $_POST['email'];
$kata_laluan = $_POST['kata_laluan'];

$_SESSION["email"] = $_POST['email'];
$_SESSION["kata_laluan"] = $_POST['kata_laluan'];




// Retrieve username and password from database according to user's input
$sql = mysqli_query($link,"SELECT email, kata_laluan FROM admin WHERE email='$email' AND kata_laluan='$kata_laluan'");
$row = mysqli_fetch_array($sql);
$un = $row['email'];
$pw = $row['kata_laluan']; ?>
</head>

<body>
	<div class="container-login100" style="background-image: url('loginCSS/images/img-02.jpg');">

		<?php 
    if($username = $un AND $password = $pw) 
	{ 
        $_SESSION['MM_Username'] = $_POST['email'];
		$_SESSION['MM_UserGroup'] = $_POST['kata_laluan'];
		header('Location:admin_home2.php'); 
    } 

		else 
		{?>

		<script>
			swal({

					text: "Email atau Kata Laluan Tidak betul",
					icon: "error",
					dangerMode: true,
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
		}
 
    mysqli_close($link);
?>


	</div>

	<!--===============================================================================================-->
	<script src="loginCSS/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="loginCSS/vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="loginCSS/js/main.js"></script>

</body>

</html>