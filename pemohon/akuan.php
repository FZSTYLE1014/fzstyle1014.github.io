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
    <script>
        $('#simpan').click(function () {
            if (!$('#akuan').is(':checked')) {
                alert('not checked');
                return false;
            }
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
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
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
                        <a class="nav-link active" aria-current="page" href="pengalaman_bekerja.php">Akuan Pemohon</a>
                    </li>
                </ul>
                <div class="text-center">
                    <br />
                    <h2 style="color:FFFFFF"><b>AKUAN PENGGUNA</b></h2>
                </div>


                <form class="col-sm-12 shadow-lg p-3  mb-12 bg-white rounded" enctype="multipart/form-data"
                    action="upsr.php" method="POST">


                    <div class="row">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                <h6>Saya akui bahawa segala maklumat yang diberikan di atas adalah benar dan sekiranya
                                    maklumat itu didapati palsu, permohonan saya akan terbatal dengan serta-merta.</h6>

                            </label><br />

                            <form action="resetprocess.php" method="POST">
                                <center> <button type="submit" id="reset" class="btn btn-danger">Saya setuju<i
                                            class="icon-repeat"></i>
                                        <center>

                                    </button>
                            </form>
                        </div>

                    </div>





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