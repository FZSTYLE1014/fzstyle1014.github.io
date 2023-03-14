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
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="./Scripts/jquery-1.11.0.min.js"></script>
  <script src="./Scripts/bootstrap.min.js"></script>
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
          <a href="maklumat_peribadi.php" class="nav-link">Maklumat Peribadi</a>
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
            <a class="nav-link active" aria-current="page" href="kelab.php">Kelab / Persatuan</a>
          </li>
        </ul>

        <div class="text-center">
          <br />
          <h2 style="color:FFFFFF"><b>KELAB / PERSATUAN</b></h2>
        </div>


        <form class="col-sm-12 shadow-lg p-3  mb-12 bg-white rounded" enctype="multipart/form-data"
          action="maklumat_peribadi.php" method="POST">


          <div class="row">
            <div class="col-md-6">
              Nama Kelab / Persatuan:
              <input type="text" class="form-control" style="text-transform: uppercase" name="nama_kelab"
                id="nama_kelab">
              <br>
              Jawatan:
              <select name="jawatan_kelab" id="jawatan_kelab" class="form-control">
                <option value="" selected disabled>--Sila Pilih--</option>
                <option value="PRESIDEN/PENGERUSI/KETUA">PRESIDEN/PENGERUSI/KETUA</a></option>
                <option value="TIMBALAN PRESIDEN/PENGERUSI/KETUA">TIMBALAN PRESIDEN/PENGERUSI/KETUA</a></option>
                <option value="SETIAUSAHA">SETIAUSAHA</a></option>
                <option value="BENDAHARI">BENDAHARI</a></option>
                <option value="AHLI JAWATANKUASA">AHLI JAWATANKUASA</option>
                <option value="AHLI">AHLI</option>
              </select>
              <br>
            </div>

            <div class="col-md-6">
              Tahun:
              <select name="tahun_kelab" id="tahun_kelab" class="form-control">
                <option value="" selected disabled>--Sila Pilih--</option>
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
            <div class="col text-center">
              <button type="button" id="updateButton" class="btn btn-primary" onclick="productUpdate();">+
              </button>
            </div>

        </form>
        <!-- <div class="mb-8">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
</form>
        </div>
    </div>
</div> -->
        <div id="content" class="p-4 p-md-5"></div>
        <div class="col-sm-12">
          <br>
          <form action="kelab_persatuan.php" method="post">

            <div class="container">
              <div class="row">
                <div class="col-sm-12">
                  <table id="productTable" class="table table-bordered table-condensed table-striped">
                    <thead>
                      <tr>
                        <th>Kemaskini</th>
                        <th>Nama Kelab/Persatuan</th>
                        <th>Jawatan</th>
                        <th>Tahun</th>
                        <th>Hapus</th>
                      </tr>
                    </thead>
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

                function productDisplay(ctl) {
                  editRow = $(ctl).parents("tr");
                  var cols = editRow.children("td");

                  $("#nama_kelab").val($(cols[1]).text());
                  $("#jawatan_kelab").val($(cols[2]).text());
                  $("#tahun_kelab").val($(cols[3]).text());

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
                    "<td>" + $("#nama_kelab").val() + "</td>" +
                    "<td>" + $("#jawatan_kelab").val() + "</td>" +
                    "<td>" + $("#tahun_kelab").val() + "</td>" +
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
                  $("#nama_kelab").val("");
                  $("#jawatan_kelab").val("");
                  $("#tahun_kelab").val("");
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