<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<title>Login</title>
	<link rel="stylesheet" href="style.css" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
	</script>

</head>

<body>

	<?php include 'navbar-user.php';

    require('db/db_connection.php');
    //require('session.php');
    
    // When form submitted, insert values into the database.
    if($_SERVER["REQUEST_METHOD"] == "POST"){  
        $no_kad_pengenalan_baru = trim($_POST["no_kad_pengenalan_baru"]);
        $password = trim($_POST["password"]);
		$nama_penuh = trim($_POST["nama_penuh"]);
        $query = "SELECT `no_kad_pengenalan_baru`, `password` FROM `user` WHERE 'no_kad_pengenalan_baru' = '$no_kad_pengenalan_baru' && 'password' = '$password';";
		
		
        if (mysqli_query($conn, $query)) { 
            session_start();
                            
			// Store data in session variables
			//$_SESSION["loggedin"] = true;
			$_SESSION["no_kad_pengenalan_baru"] = $no_kad_pengenalan_baru;
			$_SESSION["nama_penuh"] = $nama_penuh;
			// $_SESSION["username"] = $username;                            
			
			// Redirect user to welcome page
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
						background-image: url('assets/EAIC1.jpg');
						height: 100px;

					}
				</style>


				<div class="shadow-lg p-3 mb-5 bg-white rounded">

					<div class="text-center">
						<h4>E-Kerjaya Daftar</h4>
					</div>
					<br />
					<form action="login.php" method="POST">

						<input type="number" class="form-control" placeholder="Nombor Kad Pengenalan"
							name="no_kad_pengenalan_baru" autofill="off" />
						<br>

						<input type="password" class="form-control" id="test1" placeholder="Kata Laluan" name="password"
							autofill="off" />

						<input id="test2" type="checkbox" />Show password
						<br>
						<br>
						<div class="col-md-12 text-center">
							<button class="btn btn-block btn-success" name="submit">
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
</body>

</html>