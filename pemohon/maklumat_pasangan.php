<?php
session_start();
if (isset($_SESSION['id_user'])) {
    $session = $_SESSION["id_user"];
    include $_SERVER['DOCUMENT_ROOT'].'/db/db_connection.php';
    $query2 = "SELECT * FROM `maklumat_pasangan` WHERE id_user = $session ";
    $result2 = mysqli_query($conn, $query2);

    $row2 = mysqli_fetch_array($result2);

    include $_SERVER['DOCUMENT_ROOT'].'\navbar\navbar-auth.php'; ?>



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

        document.getElementById("my-Form").addEventListener("submit", function () {
            location.reload();
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
                    include $_SERVER['DOCUMENT_ROOT'].'\side-bar.php';
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
                        <a class="nav-link active" aria-current="page" href="maklumat_pasangan.php">Maklumat
                            Pasangan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="maklumat_keluarga.php">Maklumat Keluarga</a>
                    </li>
                </ul>
                <div class="text-center" style="background-color:3ACFBE">
                    <br />
                    <h2 style="color:FFFFFF"><b>MAKLUMAT PASANGAN</b></h2>
                </div>


                <form class="col-sm-12 shadow-lg p-3  mb-12 bg-white rounded" enctype="multipart/form-data"
                    action="maklumat_pasangan.php" method="POST">


                    <div class="row">
                        <div class="col-md-6">
                            Nama Penuh Pasangan:
                            <input type="text" class="form-control" style="text-transform: uppercase"
                                name="nama_pasangan" value="<?php echo $row2['nama_pasangan']; ?>">
                            <br>
                            Bilangan Anak:
                            <input type="number" class="form-control" style="text-transform: uppercase" name="bil_anak"
                                value="<?php echo $row2['bil_anak']; ?>">
                            <br>
                            Jenis Pekerjaan:
                            <select name="jenis_pekerjaan" class="form-control select-faculty" id="add_type">
                                <option value="" selected disabled>---</option>
                                <option value="Kerajaan"
                                    <?php if ($row2['jenis_pekerjaan'] == 'Kerajaan') echo 'selected'; ?>>Kerajaan
                                </option>
                                <option value="Badan Berkanun"
                                    <?php if ($row2['jenis_pekerjaan'] == 'Badan Berkanun') echo 'selected'; ?>>Badan
                                    Berkanun</option>
                                <option value="Swasta"
                                    <?php if ($row2['jenis_pekerjaan'] == 'Swasta') echo 'selected'; ?>>Swasta</option>
                                <option value="lain-lain"
                                    <?php if ($row2['jenis_pekerjaan'] == 'lain-lain') echo 'selected'; ?>>Lain-Lain
                                </option>
                            </select>
                            <br>
                            Nama Pekerjaan:
                            <input type="text" class="form-control" style="text-transform: uppercase"
                                name="nama_pekerjaan" value="<?php echo $row2['nama_pekerjaan']; ?>">
                            <br>
                            Nama Majikan:
                            <input type="text" class="form-control" style="text-transform: uppercase"
                                name="nama_majikan" value="<?php echo $row2['nama_majikan']; ?>">
                            <br>
                        </div>

                        <div class="col-md-6">
                            Alamat Majikan:
                            <textarea class="form-control" name="alamat_majikan" id="alamat_majikan"
                                rows="5"><?php echo $row2['alamat_majikan']; ?></textarea>
                            <br>
                            Negeri Majikan:
                            <select id="negeri_majikan" class="form-control select-faculty" name="negeri_majikan">
                                <option value="" <?php echo empty($row2["negeri_majikan"]) ? "selected" : ""; ?>
                                    disabled>---</option>
                                <option value="Johor" <?php if ($row2['negeri_majikan'] == "Johor") {
                                                                echo "selected";
                                                            } ?>>Johor</option>
                                <option value="Kedah" <?php if ($row2['negeri_majikan'] == "Kedah") {
                                                                echo "selected";
                                                            } ?>>Kedah</option>
                                <option value="Kelantan" <?php if ($row2['negeri_majikan'] == "Kelantan") {
                                                                    echo "selected";
                                                                } ?>>Kelantan</option>
                                <option value="Melaka" <?php if ($row2['negeri_majikan'] == "Melaka") {
                                                                echo "selected";
                                                            } ?>>Melaka</option>
                                <option value="Negeri Sembilan" <?php if ($row2['negeri_majikan'] == "Negeri Sembilan") {
                                                                        echo "selected";
                                                                    } ?>>Negeri Sembilan</option>
                                <option value="Pahang" <?php if ($row2['negeri_majikan'] == "Pahang") {
                                                                echo "selected";
                                                            } ?>>Pahang</option>
                                <option value="Perak" <?php if ($row2['negeri_majikan'] == "Perak") {
                                                                echo "selected";
                                                            } ?>>Perak</option>
                                <option value="Perlis" <?php if ($row2['negeri_majikan'] == "Perlis") {
                                                                echo "selected";
                                                            } ?>>Perlis</option>
                                <option value="Pulau Pinang" <?php if ($row2['negeri_majikan'] == "Pulau Pinang") {
                                                                        echo "selected";
                                                                    } ?>>Pulau Pinang</option>
                                <option value="Sabah" <?php if ($row2['negeri_majikan'] == "Sabah") {
                                                                echo "selected";
                                                            } ?>>Sabah</option>
                                <option value="Sarawak" <?php if ($row2['negeri_majikan'] == "Sarawak") {
                                                                echo "selected";
                                                            } ?>>Sarawak</option>
                                <option value="Selangor" <?php if ($row2['negeri_majikan'] == "Selangor") {
                                                                    echo "selected";
                                                                } ?>>Selangor</option>
                                <option value="Terengganu" <?php if ($row2['negeri_majikan'] == "Terengganu") {
                                                                    echo "selected";
                                                                } ?>>Terengganu</option>
                                <option value="Wilayah Persekutuan Kuala Lumpur" <?php if ($row2['negeri_majikan'] == "Wilayah Persekutuan Kuala Lumpur") {
                                                                                            echo "selected";
                                                                                        } ?>>Wilayah Persekutuan Kuala
                                    Lumpur</option>
                                <option value="Wilayah Persekutuan Labuan" <?php if ($row2['negeri_majikan'] == "Wilayah Persekutuan Labuan") {
                                                                                    echo "selected";
                                                                                } ?>>Wilayah Persekutuan Labuan
                                </option>
                                <option value="Wilayah Persekutuan Putrajaya" <?php if ($row2['negeri_majikan'] == "Wilayah Persekutuan Putrajaya") {
                                                                                        echo "selected";
                                                                                    } ?>>Wilayah Persekutuan Putrajaya
                                </option>
                            </select>
                            <br>
                            Nombor Telefon Bimbit:
                            <input type="number" class="form-control" style="text-transform: uppercase" name="no_bimbit"
                                value="<?php echo $row2['no_bimbit']; ?>">
                            <br>
                            Nombor Pejabat:
                            <input type="number" class="form-control" style="text-transform: uppercase"
                                name="no_pejabat" value="<?php echo $row2['no_pejabat']; ?>">
                            <br>
                            Nombor Rumah:
                            <input type="number" class="form-control" style="text-transform: uppercase" name="no_rumah"
                                value="<?php echo $row2['no_rumah']; ?>">
                            <br>
                        </div>

                        <div class="BTN flex-parent jc-center">
                            <small class="form-text text-muted">SILA SIMPAN SEBELUM TERUSKAN!!</small><br>
                            <button type="submit" class="btn btn-info" text-color="white">SIMPAN</button>
                            <a type="button" href="maklumat_keluarga.php" class="btn btn-warning">SETERUSNYA</a>
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
            if ($_SERVER["REQUEST_METHOD"] == "POST") {


                $nama_pasangan = trim($_POST["nama_pasangan"]);
                $bil_anak = trim($_POST["bil_anak"]);
                $jenis_pekerjaan = trim($_POST["jenis_pekerjaan"]);
                $nama_pekerjaan = trim($_POST["nama_pekerjaan"]);
                $nama_majikan = trim($_POST["nama_majikan"]);
                $alamat_majikan = trim($_POST["alamat_majikan"]);
                $negeri_majikan = trim($_POST["negeri_majikan"]);
                $no_bimbit = trim($_POST["no_bimbit"]);
                $no_rumah = trim($_POST["no_rumah"]);
                $no_pejabat = trim($_POST["no_pejabat"]);




                $query = "INSERT INTO `maklumat_pasangan` (`id_user`, `nama_pasangan`, `bil_anak`, `jenis_pekerjaan`, `nama_pekerjaan`, `nama_majikan`, `alamat_majikan`, `negeri_majikan`, `no_bimbit`, `no_rumah`, `no_pejabat`)
                VALUES ('$session', '$nama_pasangan', '$bil_anak', '$jenis_pekerjaan', '$nama_pekerjaan', '$nama_majikan', '$alamat_majikan', '$negeri_majikan', '$no_bimbit', '$no_rumah', '$no_pejabat')
                ON DUPLICATE KEY UPDATE
                `nama_pasangan`='$nama_pasangan',
                `bil_anak`='$bil_anak',
                `jenis_pekerjaan`='$jenis_pekerjaan',
                `nama_pekerjaan`='$nama_pekerjaan',
                `nama_majikan`='$nama_majikan',
                `alamat_majikan`='$alamat_majikan',
                `negeri_majikan`='$negeri_majikan',
                `no_bimbit`='$no_bimbit',
                `no_rumah`='$no_rumah',
                `no_pejabat`='$no_pejabat';
                ";
                $result = mysqli_query($conn, $query);
                /*if ($result) {
                    echo '<script>alert("New record created successfully")</script>';
                } else {
                    echo '<script>alert("Sila masukkan maklumat yang diperlukan")</script>';
                }


                /*$query    = "INSERT INTO `maklumat_peribadi` (`nama_penuh`, `no_KP_baru`, `tarikh_lahir`,`email`) VALUES ('$nama_penuh','$no_KP_baru','$tarikh_lahir','$email') ON DUPLICATE KEY UPDATE nama_penuh = $nama_penuh, no_KP_baru = $no_KP_baru, tarikh_lahir = $tarikh_lahir, email = $email;";

                if (mysqli_query($conn, $query)) {

                    echo '<script>alert("New record created successfully")</script>';
                } else {
                    //  echo "Error: " . $query . "<br>" . mysqli_error($conn);
                    echo '<script>alert("Sila masukkan maklumat yang diperlukan")</script>';
                }*/
                /* gambar = '$gambar_pemohon'*/
                header('Location: maklumat_pasangan.php');
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