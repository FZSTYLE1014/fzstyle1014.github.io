<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>Registration</title>
  <!-- <link rel="stylesheet" href="style.css"/> -->
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
  </script>
  <link href="assets/css/style.css" rel="stylesheet">
  <script>
    $(document).ready(function () {
      $(':checkbox').change(function () {
        if ($(this).is(':checked')) {
          $(this).prev('input').attr('type', 'text');
        } else {
          $(this).prev('input').attr('type', 'password');
        }
      });
    });
  </script>
</head>

<body>
  <?php include 'navbar/navbar-user.php';?>
  <?php

    require('db/db_connection.php');
    //require('session.php');
    
    // When form submitted, insert values into the database.
    // if($_SERVER["REQUEST_METHOD"] == "POST"){
    //   $username = trim($_POST["username"]);
    //   $password = trim($_POST["password"]);
    //     $pattern = '/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/';

    // if (empty($_POST["username"])) {
    //   echo '<script>alert("Username")</script>';
    // }
    // elseif (empty($_POST["password"])) {
    //   echo '<script>alert("Password")</script>';
    // }

		// elseif (!(preg_match($pattern, $password)) && ($password < 8)) {
    //   echo "Password must include one uppercase letter, one lowercase letter, one number, and one special character such as $ or %.";
    // }
		
    //     else {
                
    //             $password = md5($password);
    //             $query    = "INSERT INTO `login` (`username`, `password`) VALUES ('$username','$password');";
    //               if (mysqli_query($conn, $query)) {
                        
    //                 echo '<script>alert("New record created successfully")</script>';
    //                 } else {
    //                 //  echo "Error: " . $query . "<br>" . mysqli_error($conn);
    //                 echo '<script>alert("Sila masukkan maklumat yang diperlukan")</script>';
    //                 }
    //           }
		
          
    //     mysqli_close($conn);
    // }
    //     if (isset($_REQUEST['user'])) {
    // } else {
?>
  <div class="container">
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4" style="margin-top: 100px;">
        <style>
          body {
            /* background-image: url('assets/user.png');
				height: 80px;	
				 */
          }
        </style>


        <div class="shadow-lg p-3 mb-5 bg-white rounded">

          <div class="text-center">
            <img src="assets\logo.png" width="140" height="70" />
            <img src="assets\e.png" width="120" height="60" />
            <h5><br />Daftar Akaun Pengguna</h5>
          </div>
          <br />
          <form action="test.php" method="POST">
            <input type="text" class="form-control" placeholder="Nama Penuh" name="username" autofill="off" />
            <br>


            <input type="password" class="form-control" id="test1" placeholder="Kata Laluan" name="password"
              autofill="off" />

            <input id="test2" type="checkbox" />Show password
            <br>
            <br>
            <div class="col-md-12 text-center">
              <button class="btn btn-block btn-success" name="submit">
                <span class="fa fa-send"></span> Daftar Akaun
              </button>
            </div>
            <br />
          </form>
          <div class="col-md-12 text-center">
            <a href="login.php" class="">Log Masuk Pengguna</a>
          </div>
          <br />
        </div>
      </div>
    </div>
  </div>
  <?php
    //}
    $username = "aiaia";
    echo ($username);
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