<?php
session_start();
if (isset($_SESSION["id_user"])) {

  $session = $_SESSION["id_user"];
  include $_SERVER['DOCUMENT_ROOT'].'/navbar/navbar-auth.php';
  include $_SERVER['DOCUMENT_ROOT'].'/db/db_connection.php';
  $query2 = "SELECT * FROM `maklumat_keluarga` WHERE id_user = $session ";
  $result2 = mysqli_query($conn, $query2);

  $row2 = mysqli_fetch_array($result2);
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data through POST
    $id_user = $session;
    $nama_keluarga = $_POST['nama_keluarga'];
    $warganegara = $_POST['warganegara_keluarga'];
    $hubungan = $_POST['hubungan_keluarga'];
    $pekerjaan = $_POST['pekerjaan_keluarga'];
    $no_bimbit = $_POST['telefon_bimbit'];
    $no_pejabat = $_POST['telefon_pejabat'];
    $no_rumah = $_POST['telefon_rumah'];


    // Execute SQL query
    $sql = "INSERT INTO maklumat_keluarga (id_user, nama_penuh, warganegara, hubungan, pekerjaan, no_bimbit, no_pejabat, no_rumah)
VALUES ('$id_user', '$nama_penuh', '$warganegara', '$hubungan', '$pekerjaan', '$no_bimbit', '$no_pejabat', '$no_rumah')";

    if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
  }

  foreach ($_POST['nama_penuh'] as $key => $value) {
    $nama_penuh = $_POST['nama_penuh'][$key];
    $hubungan = $_POST['hubungan'][$key];
    $pekerjaan = $_POST['pekerjaan'][$key];
    $warganegara = $_POST['warganegara'][$key];
    $no_bimbit = $_POST['no_bimbit'][$key];
    $no_pejabat = $_POST['no_pejabat'][$key];
    $no_rumah = $_POST['no_rumah'][$key];
    $id_user = $session;

    // Insert the row data into the database
    $sql = "INSERT INTO `maklumat_keluarga`(`id_user`, `nama_penuh`, `warganegara`, `hubungan`, `pekerjaan`, `no_bimbit`, `no_pejabat`, `no_rumah`) VALUES ('$id_user', '$nama_penuh', '$warganegara', '$hubungan', '$pekerjaan', '$no_bimbit', '$no_pejabat', '$no_rumah')";

    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }

?>

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

  <div class="container-fluid">
    <div class="row">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="col-3 px-1 bg-light shadow-lg p-3 mb-5 rounded position-fixed" id="sticky-sidebar">
        <div class="text-center">
          <a href="maklumat_keluarga.php" class="nav-link">UPSR</a>
          <img src="/assets/e.png" width="150" height="80" />
        </div>
        <?php
          include $_SERVER['DOCUMENT_ROOT'].'/side-bar.php';
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
              color: blueviolet;
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
            <a class="nav-link " href="maklumat_peribadi.php">Maklumat Peribadi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" text-color="FFFFFF" href="maklumat_pasangan.php">Maklumat Pasangan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="maklumat_keluarga.php">Maklumat
              Keluarga</a>
          </li>
        </ul>
        <div class="text-center">
          <br />
          <h2 style="color:FFFFFF"><b>MAKLUMAT KELUARGA</b></h2>
        </div>


        <form class="col-sm-12 shadow-lg p-3  mb-12 bg-white rounded" enctype="multipart/form-data"
          action="maklumat_keluarga.php" method="POST">


          <div class="row">
            <div class="col-md-6">
              Nama Penuh:
              <input type="text" name="nama_keluarga" text-transform="uppercase" id="nama_keluarga"
                class="form-control">
              <br>

              Hubungan:
              <select name="hubungan_keluarga" class="form-control select-faculty" id="add_type">
                <option value="" selected disabled>---</option>
                <option value="Ibu">Ibu</option>
                <option value="Bapa">Bapa</option>
                <option value="Anak">Anak</option>
                <option value="Adik">Adik</option>
                <option value="Kakak">Kakak</option>
                <option value="Abang">Abang</option>
              </select>
              <br>
              Pekerjaan:
              <input type="text" text-transform="uppercase" name="pekerjaan_keluarga" id="pekerjaan_keluarga"
                class="form-control" />

            </div>
            <div class="col-md-6">
              Warganegara:
              <input type="text" text-transform="uppercase" name="warganegara_keluarga" id="warganegara_keluarga"
                class="form-control" />
              <br>
              Nombor Telefon (B):
              <input type="number" id="telefon_bimbit" name="telefon_bimbit" class="form-control" />
              Nombor Telefon (R):
              <input type="number" id="telefon_rumah" name="telefon_rumah" class="form-control" />
              Nombor Telefon (P):
              <input type="number" id="telefon_pejabat" name="telefon_pejabat" class="form-control" />
              <br /><br />
            </div>
            <div class="col text-center">
              <button type="submit" id="updateButton" class="btn btn-primary"
                onclick="event.preventDefault(); productUpdate();">
                + tambah
              </button><br />
            </div>
        </form>



        <div id="content" class="p-4 p-md-5"></div>
        <div class="col-sm-12">

          <form action="maklumat_keluarga.php" method="post">

            <div class="container">
              <div class="row">
                <div class="col-sm-12">
                  <table id="productTable" class="table table-bordered table-condensed table-striped text-center">
                    <thead>
                      <tr>
                        <th>Kemaskini</th>
                        <th>Nama Penuh</th>
                        <th>Hubungan</th>
                        <th>Pekerjaan</th>
                        <th>Warganegara</th>
                        <th>No Telefon (B)</th>
                        <th>No Telefon (R)</th>
                        <th>No Telefon (P)</th>
                        <th>Hapus</th>
                      </tr>
                    </thead>
                    <tbody></tbody>
                  </table>
                </div>
              </div>
              <div class="BTN flex-parent jc-center">
                <button type="button" class="btn btn-info" text-color="white">SIMPAN</button>
                <a type="button" href="menaip.php" class="btn btn-warning">SETERUSNYA</a>
              </div>
              <script>
                // Current product being edited
                var editRow = null;

                $(document).ready(function () {
                  console.log('naim')


                });

                function deleteMaklumataKeluarga(gaga) {

                  console.log(gaga)
                  console.log('asdasdasdasdas')
                  let dataID = $(this).attr("data-id");
                  console.log(dataID)
                }

                function productDisplay(ctl) {
                  editRow = $(ctl).parents("tr");
                  var cols = editRow.children("td");

                  $("#nama_keluarga").val($(cols[1]).text());
                  $("#hubungan_keluarga").val($(cols[2]).text());
                  $("#pekerjaan_keluarga").val($(cols[3]).text());
                  $("#warganegara_keluarga").val($(cols[4]).text());
                  $("#telefon_bimbit").val($(cols[5]).text());
                  $("#telefon_rumah").val($(cols[6]).text());
                  $("#telefon_pejabat").val($(cols[7]).text());

                  console.log(cols)


                  // Change Update Button Text
                  $("#updateButton").text("Kemaskini");
                }

                function productUpdate() {

                  let maklumatKeluarga = [];

                  let namaKeluarga = $('#nama_keluarga').val();
                  let hubunganKeluarga = $('#hubungan_keluarga').val();

                  let maklumatKeluargaArr = {
                    namaKeluarga: namaKeluarga,
                    hubunganKeluarga: hubunganKeluarga
                  }

                  maklumatKeluarga.push(maklumatKeluargaArr)

                  let displayTable = '';

                  maklumatKeluarga.forEach(element => {

                    let namaKeluarga = element.namaKeluarga;
                    let hubunganKeluarga = element.hubunganKeluarga;
                    let randomNum = Math.floor(Math.random() * 100);

                    displayTable = `
                    <tr data-id='${randomNum}'>
                      <td>
                        <button type='button' 
                          onclick='productDisplay(this);' 
                          class='btn btn-default'>
                            <i class='fa fa-pencil-square-o'></i>
                        </button>
                      </td>
                      <td>${namaKeluarga}</td>
                      <td>${hubunganKeluarga}</td>
                      <td> </td>
                      <td> </td>
                      <td> </td>
                      <td> </td>
                      <td> </td>
                      <td>
                        <button type='button'
                          onclick='productDelete(this);'
                          id='deleteMaklumataKeluarga'
                          class='btn btn-default'
                        >
                            <i class='fa fa-trash'></i>
                        </button>
                      </td>
                    </tr>
                    `;

                    $('#productTable tbody').append(displayTable);

                  });



                  if ($("#updateButton").text() == "Kemaskini") {
                    // productUpdateInTable();
                  } else {
                    // productAddToTable();
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
                    "<td>" + $("#nama_keluarga").val() + "</td>" +
                    "<td>" + $("#hubungan_keluarga").val() + "</td>" +
                    "<td>" + $("#pekerjaan_keluarga").val() + "</td>" +
                    "<td>" + $("#warganegara_keluarga").val() + "</td>" +
                    "<td>" + $("#telefon_bimbit").val() + "</td>" +
                    "<td>" + $("#telefon_rumah").val() + "</td>" +
                    "<td>" + $("#telefon_pejabat").val() + "</td>" +
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
                  $("#nama_keluarga").val("");
                  $("#hubungan_keluarga").val("");
                  $("#pekerjaan").val("");
                  $("#warganegara_keluarga").val("");
                  $("#telefon_keluarga").val("");
                }
              </script>
              <?php
            }

              ?>
              </tbody>
              </table>
            </div>
        </div>
      </div>
    </div>



</body>

</html>