<?php
session_start(); 
if(isset($_SESSION["id_user"] )){ 
    
include $_SERVER['DOCUMENT_ROOT'].'/navbar/navbar-auth.php';
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

    <div class="container-fluid">
        <div class="row">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="col-3 px-1 bg-light shadow-lg p-3 mb-5 rounded position-fixed" id="sticky-sidebar">
                <div class="text-center">
                    <a href="maklumat_peribadi.php" class="nav-link">Maklumat Peribadi</a>
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
                        <a class="nav-link active" aria-current="page" href="menaip.php">Kebolehan Menaip / Trengkas</a>
                    </li>
                </ul>

                <div class="text-center">
                    <br />
                    <h2 style="color:FFFFFF"><b>KEBOLEHAN MENAIP/TRENGKAS</b></h2>
                </div>


                <form class="col-sm-12 shadow-lg p-3  mb-12 bg-white rounded" enctype="multipart/form-data"
                    action="menaip.php" method="POST">


                    <div class="row">

                        <div class="col-md-6">
                            <h4 class="text-center">Bertulis</h4>
                            Bahasa Malaysia:
                            <input type="number" placeholder="Dalam psm" class="form-control" name="bm_bertulis">
                            <br>
                            Bahasa Inggeris:
                            <input type="number" class="form-control" placeholder="Dalam psm" name="bi_bertulis">
                            <br>


                        </div>

                        <div class="col-md-6">
                            <h4 class="text-center">Bercetak</h4>
                            Bahasa Malaysia:
                            <input type="number" placeholder="Dalam psm" class="form-control" name="bm_bertulis">
                            <br>
                            Bahasa Inggeris:
                            <input type="number" class="form-control" placeholder="Dalam psm" name="bi_bertulis">
                            <br>

                        </div>
                        <div class="BTN flex-parent jc-center">
                            <button type="button" class="btn btn-info" text-color="white">SIMPAN</button>
                            <a type="button" href="menaip.php" class="btn btn-warning">SETERUSNYA</a>
                        </div>
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