  <?php
  session_start(); 
  if(isset($_SESSION["id_user"] )){ 
      
  include 'navbar\navbar-auth.php';
  include $_SERVER['DOCUMENT_ROOT'].'/db/db_connection.php';?>

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
    <script>
      $('#btn1').on('click', function (e) {
        $('#btn1').each(function () {
          $(this).addClass('active');
        })

      });
    </script>
    <title>Home</title>
  </head>

  <body>
    <?php
      //require('session.php');
      
      // When form submitted, insert values into the database.
      if($_SERVER["REQUEST_METHOD"] == "POST"){

          $nama_penuh = trim($_POST["nama_penuh"]);
          $no_kad_pengenalan_baru = trim($_POST["no_kad_pengenalan_baru"]);
          $tarikh_lahir = trim($_POST["tarikh_lahir"]);
          $email = trim($_POST["email"]);
          $password = trim($_POST["password"]);

          $password = md5($password);
          $query    = "INSERT INTO `user` (`nama_penuh`, `no_kad_pengenalan_baru`, `tarikh_lahir`,`email`, `password`) VALUES ('$nama_penuh','$no_kad_pengenalan_baru','$tarikh_lahir','$email','$password');";

          if (mysqli_query($conn, $query)) {
              
              echo '<script>alert("New record created successfully")</script>';
            } else {
            //  echo "Error: " . $query . "<br>" . mysqli_error($conn);
        echo '<script>alert("Sila masukkan maklumat yang diperlukan")</script>';
            }
            
            mysqli_close($conn);
      } ?>
    <div class="container-fluid">
      <div class="row">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="col-3 px-1 bg-light shadow-lg p-3 mb-5 rounded position-fixed" id="sticky-sidebar">
          <div class="text-center">
            <a href="upsr.php" class="nav-link">UPSR</a>
            <img src="/assets/e.png" width="150" height="80" />
          </div>
          <?php 
            include 'side-bar.php';
              ?>
        </div>

        <div class="col-9 offset-3" id="main" style="background-color:3ACFBE">
          <br />
          <ul class="nav nav-tabs">
            <style>
              a:link {
                color: green;
                background-color: transparent;
                text-decoration: none;
              }

              a:visited {
                color: black;
                background-color: transparent;
                text-decoration: none;
              }

              a:hover {
                color: #FBB117;
                background-color: transparent;
                text-decoration: underline;
              }

              a:active {
                color: yellow;
                background-color: transparent;
                text-decoration: underline;
              }
            </style>

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="pengalaman_bekerja.php">Pengalaman Bekerja</a>
            </li>
          </ul>
          <div class="text-center">
            <br />
            <h2 style="color:FFFFFF"><b>PENGALAMAN BEKERJA</b></h2>
          </div>


          <form class="col-sm-12 shadow-lg p-3  mb-12 bg-white rounded" enctype="multipart/form-data" action="upsr.php"
            method="POST">


            <div class="row">
              <div class="col-md-6">
                Nama Majikan:
                <input type="text" style="text-uppercase" id="nama_majikan" class="form-control" />
                <br>

                Alamat Majikan:
                <textarea rows="6" cols="50" style="text-uppercase" id="alamat_majikan" class="form-control"></textarea>
                <br>

                Jawatan:
                <input type="text" style="text-uppercase" id="jawatan" class="form-control" />


              </div>

              <div class="col-md-6">
                Senarai Tugasan:
                <textarea rows="4" cols="50" style="text-uppercase" id="tugas" class="form-control"></textarea>
                <br>
                Tarikh Mula Kerja:
                <input type="date" id="mula_kerja" class="form-control" />
                <br />

                Tarikh Tamat Kerja:
                <input type="date" id="tamat_kerja" class="form-control" />
                <br />

                Gaji Pokok Sebulan (RM):
                <input type="number" id="gaji_pokok" class="form-control" /><br />

              </div>

              <div class="col text-center">
                <button type="button" id="updateButton" class="btn btn-primary" onclick="productUpdate();">
                  +
                </button>
              </div>
          </form>

          <div id="content" class="p-4 p-md-5"></div>
          <div class="col-sm-12">

            <form action="kelab_persatuan.php" method="post">

              <div class="container">
                <div class="row">
                  <div class="col-sm-12">
                    <table id="productTable" class="table table-bordered table-condensed table-striped text-center">
                      <thead>
                        <tr>
                          <th>Kemaskini</th>
                          <th>Nama Majikan</th>
                          <th>Jawatan</th>
                          <th>Tarikh Mula</th>
                          <th>Tarikh Tamat</th>
                          <th>Hapus</th>
                        </tr>
                      </thead>
                    </table>
                  </div>
                </div>
                <div class="BTN flex-parent jc-center">
                  <button type="button" class="btn btn-info" style="text-color:white">SIMPAN</button>
                  <a type="button" href="menaip.php" class="btn btn-warning">SETERUSNYA</a>
                </div>
                <script>
                  // Current product being edited
                  var editRow = null;

                  function productDisplay(ctl) {
                    editRow = $(ctl).parents("tr");
                    var cols = editRow.children("td");

                    $("#nama_majikan").val($(cols[1]).text());
                    $("#alamat_majikan").val($(cols[2]).text());
                    $("#jawatan").val($(cols[3]).text());
                    $("#tugas").val($(cols[4]).text());
                    $("#mula_kerja").val($(cols[5]).text());
                    $("#tamat_kerja").val($(cols[6]).text());
                    $("#gaji_pokok").val($(cols[7]).text());

                    // Change Update Button Text
                    $("#updateButton").text("Kemaskini");
                  }

                  function productUpdate() {
                    if ($("#updateButton").text() == "Kemaskini") {
                      productUpdateInTable();
                    } else {
                      productAddToTable();
                    }

                    // Clear form fields
                    formClear();

                    // Focus to product name field
                    $("#productname").focus();
                  }

                  // Add product to <table>
                  function productAddToTable() {
                    // First check if a <tbody> tag exists, add one if not
                    if ($("#productTable tbody").length == 0) {
                      $("#productTable").append("<tbody></tbody>");
                    }

                    // Append product to table
                    $("#productTable tbody").append(
                      productBuildTableRow());
                  }

                  // Update product in <table>
                  function productUpdateInTable() {
                    // Add changed product to table
                    $(editRow).after(productBuildTableRow());

                    // Remove original product
                    $(editRow).remove();

                    // Clear form fields
                    formClear();

                    // Change Update Button Text
                    $("#updateButton").text("Add");
                  }

                  // Build a <table> row of Product data
                  function productBuildTableRow() {
                    var ret =
                      "<tr>" +
                      "<td>" +
                      "<button type='button' " +
                      "onclick='productDisplay(this);' " +
                      "class='btn btn-default'>" +
                      "<i class='fa fa-pencil-square-o'></i>" +
                      "</button>" +
                      "</td>" +
                      "<td>" + $("#nama_majikan").val() + "</td>" +
                      "<td>" + $("#jawatan").val() + "</td>" +
                      "<td>" + $("#mula_kerja").val() + "</td>" +
                      "<td>" + $("#tamat_kerja").val() + "</td>" +
                      "<td>" +
                      "<button type='button' " +
                      "onclick='productDelete(this);' " +
                      "class='btn btn-default'>" +
                      "<i class='fa fa-trash'></i>" +
                      "</button>" +
                      "</td>" +
                      "</tr>"

                    return ret;
                  }

                  // Delete product from <table>
                  function productDelete(ctl) {
                    $(ctl).parents("tr").remove();
                  }

                  // Clear form fields
                  function formClear() {
                    $("#nama_majikan").val("");
                    $("#alamat_majikan").val("");
                    $("#jawatan").val("");
                    $("#tugas").val("");
                    $("#mula_kerja").val("");
                    $("#tamat_kerja").val("");
                    $("#gaji_pokok").val("");
                  }
                </script>
                <?php
  }
  $conn->close();
  ?>
                </tbody>
                </table>
              </div>
          </div>
        </div>
      </div>



  </body>

  </html>