<?php
session_start(); 
if(isset($_SESSION["id_user"] )){ 
    
include 'navbar/navbar-auth.php';
include 'db/db_connection.php';?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
  </script>

  <title>Home</title>

</head>

<body>
  <div class="text-center">
    <br /><br />
    <img src="assets/e.png" class="rounded mx-auto d-block" />
    <h2>Selamat datang, <?= $_SESSION["nama_penuh"]?></h2>
    <div class="card">
      <div class="card-body">


      </div>
    </div>

    <!-- <div class="col-md-4"></div> -->
  </div>

  <?php
$sql = "SELECT * FROM `jawatan_kosong`";
$result = $conn->query($sql);

?>
  <div class="container">
    <?php 
// echo "Selamat datang. Akaun pengguna: " .$_SESSION['nama_penuh'];
}

else{
    header('Location:login.php');
}
?>
    <div class="row">
      <div class="col-md-4"></div>
      <div class="card-body p-3 mb-5 ">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Jawatan</th>
              <th scope="col">Taraf</th>
              <th scope="col">Kelayakan</th>
              <th scope="col">Tarikh Tutup</th>
            </tr>
          </thead>
          <tbody>
            <?php 
if ($result->num_rows > 0) {
  $no=1;
    while($row = mysqli_fetch_array($result)) {

    ?>
            <tr>
              <th scope="row"><?= $no++ ?></th>
              <td><?= $row['nama_jawatan'] ?></td>
              <td><?= $row['taraf_jawatan'] ?></td>
              <td><?= $row['kelayakan_jawatan'] ?></td>
              <td><?= $row['tarikh_tutup'] ?></td>
            </tr>
            <?php 
  }
} else {
  echo "0 results";
}
$conn->close();
?>
          </tbody>
        </table>
        <div class="col-md-12 text-center">
          <a class="btn btn-block btn-success" href="pemohon\maklumat_peribadi.php" name="submit">
            <span class="fa fa-send"></span> DAFTAR SEKARANG!
          </a>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>



</body>

</html>