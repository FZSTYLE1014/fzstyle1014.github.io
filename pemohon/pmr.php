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
              color: black;
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
            <a class="nav-link" href="upsr.php">UPSR</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="pmr.php">PMR/SRP/PT3</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="spm.php">SPM</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="stpm.php">STPM</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pengajian_tinggi.php">Pengajian Tinggi</a>
          </li>
        </ul>
        <div class="text-center">
          <br />
          <h2 style="color:FFFFFF"><b>KEPUTUSAN PMR</b></h2>
        </div>


        <form class="col-sm-12 shadow-lg p-3  mb-12 bg-white rounded" enctype="multipart/form-data" action="upsr.php"
          method="POST">


          <div class="row">
            <div class="col-md-6">
              Tahun:
              <select name="tahun_pmr" id="tahun_pmr" class="form-control" style="width: 250px;">
                <option value="" selected disabled>Sila Pilih</option>
                <option value="2019">2019</option>
                <option value="2018">2018</option>
                <option value="2017">2017</option>
                <option value="2016">2016</option>
                <option value="2015">2015</option>
                <option value="2014">2014</option>
                <option value="2013">2013</option>
                <option value="2012">2012</option>
                <option value="2011">2011</option>
                <option value="2010">2010</option>
                <option value="2009">2009</option>
                <option value="2008">2008</option>
                <option value="2007">2007</option>
                <option value="2006">2006</option>
                <option value="2005">2005</option>
                <option value="2004">2004</option>
                <option value="2003">2003</option>
                <option value="2002">2002</option>
                <option value="2001">2001</option>
                <option value="2000">2000</option>
                <option value="1999">1999</option>
                <option value="1998">1998</option>
                <option value="1997">1997</option>
                <option value="1996">1996</option>
                <option value="1995">1995</option>
                <option value="1994">1994</option>
                <option value="1993">1993</option>
                <option value="1992">1992</option>
                <option value="1991">1991</option>
                <option value="1990">1990</option>
                <option value="1989">1989</option>
                <option value="1988">1988</option>
                <option value="1987">1987</option>
                <option value="1986">1986</option>
                <option value="1985">1985</option>
                <option value="1984">1984</option>
                <option value="1983">1983</option>
                <option value="1982">1982</option>
                <option value="1981">1981</option>
                <option value="1980">1980</option>
                <option value="1979">1979</option>
                <option value="1978">1978</option>
                <option value="1977">1977</option>
                <option value="1976">1976</option>
                <option value="1975">1975</option>
                <option value="1974">1974</option>
                <option value="1973">1973</option>
                <option value="1972">1972</option>
                <option value="1971">1971</option>
              </select>
              <br>


            </div>

            <div class="col-md-6">

              <br>

            </div>
            <div class="col-md-6">
              Mata Pelajaran:

              <select name="matapelajaran_pmr" id="subjek_pmr" class="form-control">
                <option value="" selected disabled>--Sila Pilih--</option>
                <option value="BAHASA MELAYU/BAHASA MALAYSIA">BAHASA MELAYU/BAHASA MALAYSIA</option>
                <option value="BAHASA ARAB">BAHASA ARAB </option>
                <option value="BAHASA CINA ">BAHASA CINA </option>
                <option value="BAHASA IBAN">BAHASA IBAN</option>
                <option value="BAHASA INGGERIS">BAHASA INGGERIS </option>
                <option value="BAHASA PERANCIS">BAHASA PERANCIS </option>
                <option value="BAHASA PUNJABI ">BAHASA PUNJABI </option>
                <option value="BAHASA TAMIL">BAHASA TAMIL</option>
                <option value="BAHASA TELEGU">BAHASA TELEGU</option>
                <option value="GEOGRAFI">GEOGRAFI</option>
                <option value="ILMU HISAB/ILMU. HISAB MODEN/MATEMATIK">ILMU HISAB/ILMU. HISAB MODEN/MATEMATIK</option>
                <option value="KEMAHIRAN HIDUP BERSEPADU PIL. 1/2/3/4">KEMAHIRAN HIDUP BERSEPADU PIL. 1/2/3/4</option>
                <option value="KEMAHIRAN HIDUP PILIHAN A/B/C/D">KEMAHIRAN HIDUP PILIHAN A/B/C/D</option>
                <option value="KH. BERSEPADU - EKONOMI RUMAH TANGGA <">KH. BERSEPADU (EKONOMI RUMAH TANGGA) </option>
                <option value="KH BERSEPADU-KEMAHIRAN TEKNIKAL">KH BERSEPADU
                  (KEMAHIRAN TEKNIKAL)</option>
                <option value="KH BERSEPADU-PERDAGANGAN & KEUSAHAWANAN ">KH BERSEPADU (PERDAGANGAN & KEUSAHAWANAN)
                </option>
                <option value="KH BERSEPADU PERTA">KH BERSEPADU (PERTANIAN)</option>
                <option value="LUKISAN/LUKISAN TEKNIKAL">LUKISAN/LUKISAN TEKNIKAL</option>
                <option value="MUZIK">MUZIK</option>
                <option value="PELAJARAN PERDAGANGAN">PELAJARAN PERDAGANGAN</option>
                <option value="PENDIDIKAN ISLAM/PENG. AGAMA ISLAM">PENDIDIKAN ISLAM/PENG. AGAMA ISLAM</option>
                <option value="RELIGIOUS KNOWLEDGE (CHRISTIAN)">RELIGIOUS KNOWLEDGE (CHRISTIAN)</option>
                <option value="SAINS/ILMU SAINS/SAINS PADUAN">SAINS/ILMU SAINS/SAINS PADUAN</option>
                <option value="SAINS PERTANIAN">SAINS PERTANIAN</option>
                <option value="SAINS RUMAH TANGGA">SAINS RUMAH TANGGA</option>
                <option value="SEJARAH">SEJARAH</option>
                <option value="SENI PERUSAHAAN">SENI PERUSAHAAN</option>
              </select><br />
            </div>
            <div class="col-md-6">
              Gred:
              <select name="gred_pmr" id="gred_pmr" class="form-control" style="width: 250px;">
                <option value="" selected disabled>--Sila Pilih--</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
                <option value="F">F</option>
                <option value="TIDAK HADIR">TIDAK HADIR</option>
              </select>

              <br />
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
                        <th>Tahun Menduduki PMR / PT3 / SRP</th>
                        <th>Matapelajaran</th>
                        <th>Gred</th>
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

                  $("#tahun_pmr").val($(cols[1]).text());
                  $("#subjek_pmr").val($(cols[2]).text());
                  $("#gred_pmr").val($(cols[3]).text());

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
                    "<td>" + $("#tahun_pmr").val() + "</td>" +
                    "<td>" + $("#subjek_pmr").val() + "</td>" +
                    "<td>" + $("#gred_pmr").val() + "</td>" +
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
                  $("#tahun_pmr").val("");
                  $("#subjek_pmr").val("");
                  $("#gred_pmr").val("");
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