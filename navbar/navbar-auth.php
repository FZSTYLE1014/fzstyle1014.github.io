<header class="fixed-top">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="btn btn-block btn-success" href="home.php">
              <span class="fa fa-home"></span> Halaman Utama
            </a>
            <!-- <a class="nav-link active" href="/eaic-job/home.php" class="fa fa-home"></a> -->
          </li>
          <li class="nav-item">
            <a class="btn btn-block btn-success" href="status.php">
              <span class="fa fa-newspaper-o"></span> Semakan Status
            </a>
          </li>
          <li class="nav-item">
            <a class="btn btn-block btn-success" href="hubungi.php">
              <span class="fa fa-phone"></span> Hubungi Kami
            </a>
          </li>
          <div class="position-relative position-absolute top-0 end-0"></div>
          <form class="d-flex position-relative position-absolute top-20 end-0">
            <li class="nav-item">
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1"
                aria-disabled="true"><?php echo "Akaun pengguna: " .$_SESSION['nama_penuh'] ?></a>
            </li>

            <a class="nav-link active btn btn-outline-danger text-white" aria-current="page"
              href="logout.php"> Log Keluar</a>
            </li>
          </form>
      </div>

      </ul>
    </div>
    </div>
  </nav>

</header>