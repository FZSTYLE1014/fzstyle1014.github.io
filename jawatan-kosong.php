<?php include 'db/db_connection.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>eKerjaya</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

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
</head>

<body>
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <!-- <h1 class="logo mr-auto"><a href="\eaic_kerjaya\index.php">eKerjaya EAIC</a></h1> -->
      <img src="assets\e.png" width="100" height="50" />
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="login.php">Log Masuk</a></li>
          <li><a href="register.php">Pendaftaran Baru</a></li>
        </ul>
      </nav>

    </div>
  </header>

  <section id="hero">

    <?php 
  	$today = date("Y-m-d");
	$query = "SELECT * FROM `jawatan_kosong`";  
	$result = mysqli_query($conn, $query);  
	?>
    <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)">
      <div class="carousel-container">
        <div class="container">
          <img src="assets\e.png" />
          <h2 class="animated fadeInDown">Iklan Jawatan <span>Kosong</span></h2>
          <p>Suruhanjaya Integriti Agensi Penguatkuasaan merupakan sebuah agensi Badan Berkanun Persekutuan yang
            menerima aduan salah laku daripada orang ramai terhadap Pegawai Penguat kuasa atau terhadap sesuatu Agensi
            Penguatkuasaan. Suruhanjaya mempelawa warganegara Malaysia yang berintegriti dan berkelayakan bagi mengikut
            segera kekosongan jawatan di EAIC.</p>
        </div>

      </div>
    </div>
    </div>
    </div>
    </div>
  </section>
  <section id="testimonials" class="testimonials section-bg">
    <div class="container-fluid">
      <div class="section-title">
        <h3>Senarai Jawatan Kosong <span>EAIC</span>
      </div>
      <div class="row justify-content-center">
        <div class="col-xl-10">

          <div class="row">
            <?php 
  	$today = date("Y-m-d");
	$query = "SELECT * FROM `jawatan_kosong`";  
	$result = mysqli_query($conn, $query);  
	?>
            <?php 
              if ($result->num_rows > 0) {
              
              
              while($row = mysqli_fetch_array($result)) 
    { ?>
            <div class="col-lg-6">
              <div class="testimonial-item">
                <h3>Jawatan: <?php echo $row['nama_jawatan']; ?></h3>
                <h3>Taraf Jawatan: <?php echo $row['taraf_jawatan']; ?> </h3>
                <h3>Kelayakan: <?php echo $row['kelayakan_jawatan']; ?></h3>
                <h3>Tarikh Tutup: <?php echo date("d M Y", strtotime($row['tarikh_tutup'])) ?></h3>
              </div>
            </div>
            <?php } 
} else {
  echo "0 results";
}
$conn->close();?>

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
</body>

</html>





<!-- <div class="card">
  <div class="card-body text-centre">
  <img src="Web/Systems/Apps/Pemaju/assets/images/items/ThesisQGuideline.png'" class="img-fluid" alt="ThesisQ Guildelines">
  </div>
</div> -->