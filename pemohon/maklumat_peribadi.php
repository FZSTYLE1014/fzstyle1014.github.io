<?php
session_start();
if (isset($_SESSION["id_user"])) {
    $session = $_SESSION["id_user"];
    include $_SERVER['DOCUMENT_ROOT'].'/db/db_connection.php';
    $query2 = "SELECT * FROM `maklumat_peribadi` WHERE id_user = $session ";
    $result2 = mysqli_query($conn, $query2);

    $row2 = mysqli_fetch_array($result2);

    $encoded_text = $row2["gambar"];
    $decoded_text = base64_decode($encoded_text);
    /*
    if (!$decoded_text) {
        echo "Error: Image could not be decoded.";
        exit;
    }

    $file_type = getimagesizefromstring($decoded_text);

*/
    // Output the BLOB data as the appropriate file type
    /*switch ($file_type[2]) {
        case IMAGETYPE_JPEG:
            header("Content-type: image/jpeg");
            break;
        case IMAGETYPE_PNG:
            header("Content-type: image/png");
            break;
        case IMAGETYPE_GIF:
            header("Content-type: image/gif");
            break;
        default:
            // If the file type is not recognized, output an error message
            echo "Error: Unsupported image type.";
            exit;
    }*/
    include $_SERVER['DOCUMENT_ROOT'].'/navbar/navbar-auth.php';

    //include 'C:\xampp\htdocs\eaic-job\pemohon\avatar.php';

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

        function setBillingAddress() {
            if ($("#homepostalcheck").is(":checked")) {
                $('#alamat_tetap').val($('#alamat_surat').val());
                $('#alamat_tetap').attr('disabled', 'disabled');
            } else {
                $('#alamat_tetap').removeAttr('disabled');
            }
        }

        $('#homepostalcheck').click(function () {
            setBillingAddress();
        })

        function showHideOther() {
            var selectBox = document.getElementById("agama");
            var otherInput = document.getElementById("otherInput");
            if (selectBox.value === "lain-lain") {
                otherInput.style.display = "block";
            } else {
                otherInput.style.display = "none";
            }
        }
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
                        <a class="nav-link active" aria-current="page" href="maklumat_peribadi.php">Maklumat
                            Peribadi</a>
                    </li>
                    <li class="nav-item" id="maklumat_pasangan" style="display:none">
                        <a class="nav-link" text-color="FFFFFF" href="maklumat_pasangan.php">Maklumat Pasangan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="maklumat_keluarga.php">Maklumat Keluarga</a>
                    </li>
                </ul>
                <div class="text-center" style="background-color:3ACFBE">
                    <br />
                    <h2 style="color:FFFFFF"><b>MAKLUMAT PERIBADI</b></h2>
                </div>
                <?php
                    $query1 = "SELECT * FROM `user` WHERE id_user = $session ";
                    $result = mysqli_query($conn, $query1);


                    $row1 = mysqli_fetch_array($result);





                    ?>

                <form id="my-form" class="col-sm-12 shadow-lg p-3  mb-12 bg-white rounded" enctype="multipart/form-data"
                    action="maklumat_peribadi.php" method="POST">
                    <div class="row">
                        <div class="uploadGambar">
                            <p style="text-align: left;">
                                <img src="<?php echo $row2["gambar"]; ?>" alt="User"
                                    style="width:150px; height:170px; padding: 10px;" id="profile-img-tag">
                            </p>
                            <br>
                            <p style="text-align: left; font-size: 10px;">File must be in png (.png ) format.</p>
                            <p style="text-align: left; font-size: 10px;">File size must not exceed 20KB.</p>


                            <div style="text-align: left;">
                                <input type="file" id="profile-img" name="gambar_pemohon" onchange="readURL(this)">
                            </div>
                        </div>

                        <script>
                            function readURL(input) {
                                if (input.files && input.files[0]) {
                                    let reader = new FileReader();

                                    reader.onload = function (e) {
                                        document.querySelector('#profile-img-tag').setAttribute('src', e.target
                                            .result);

                                        let file = input.files[0];
                                        let formData = new FormData();
                                        formData.append('file', file);

                                        fetch('upload.php', {
                                                method: 'POST',
                                                body: formData
                                            })
                                            .then(response => {
                                                if (!response.ok) {
                                                    throw new Error('Network response was not ok');
                                                }
                                                console.log('File moved successfully.');
                                            })
                                            .catch(error => {
                                                console.error('An error occurred while moving the file:',
                                                error);
                                            });
                                    }
                                    reader.readAsDataURL(input.files[0]);
                                }
                            }
                        </script>

                        <br>

                        <br>
                        <div class="col-md-6"><br><br>
                            Jawatan Yang Dipilih:<br />
                            <select name="jawatan" class="form-control select-faculty" id="jawatan">
                                <option value="">--- Select ---</option>
                                <?php // Database connection
                                    
                                    if ($r_set = $conn->query("SELECT * from `jawatan_kosong`")) {
                                        while ($row = $r_set->fetch_assoc()) {
                                            $selected = '';
                                            if ($row['id_jawatan'] == $row2['jawatan_pemohon']) {
                                                $selected = 'selected';
                                            }
                                            echo "<option value=\"$row[id_jawatan]\" $selected>$row[nama_jawatan]</option>";
                                        }
                                        echo "</select>";

                                        // Debugging code - print out the value of $row2['jawatan_pemohon']
                                        //echo "Selected job title ID: " . $row2['jawatan_pemohon'];
                                    } else {
                                        echo $conn->error;
                                    }
                                    ?>


                                <br />
                                Nama Penuh:
                                <input type="text" class="form-control" style="text-transform: uppercase"
                                    name="nama_penuh" value="<?php echo $row2["nama_penuh"];  ?>">
                                <br>
                                No Kad Pengenalan Baru:
                                <input type="number" length="12" class="form-control" style="text-transform: uppercase"
                                    name="no_KP_baru" value="<?php echo $row2["no_KP_baru"]; ?>" readonly>
                                <br>
                                Nombor Kad Pengenalan Lama:
                                <input type="number" class="form-control" style="text-transform: uppercase"
                                    name="no_KP_lama" value="<?php echo $row2["no_KP_lama"];  ?>">
                                <br>
                                Jantina:
                                <select name="jantina" class="form-control select-faculty" id="jantina">
                                    <option value="" <?php echo empty($row2["jantina"]) ? "selected" : ""; ?> disabled>
                                        ---</option>
                                    <option value="perempuan"
                                        <?php echo $row2["jantina"] == "perempuan" ? "selected" : ""; ?>>Perempuan
                                    </option>
                                    <option value="lelaki"
                                        <?php echo $row2["jantina"] == "lelaki" ? "selected" : ""; ?>>Lelaki</option>
                                </select>
                                <!--<select name="jantina" class="form-control select-faculty" id="add_type" value="<?php //echo $row1["jantina"]; 
                                                                                                                        ?>">
                                    <option value="" selected disabled>---</option>
                                    <option value="perempuan">Perempuan</option>
                                    <option value="lelaki">Lelaki</option>
                                </select>-->
                                <br>
                                Umur:
                                <!-- <textarea name="description" class="form-control" rows="5" ></textarea> -->
                                <input type="number" class="form-control" style="text-transform: uppercase" name="umur"
                                    value="<?php echo $row2["umur"];  ?>">
                                <br>
                                Tarikh Lahir:
                                <input type="date" class="form-control" name="tarikh_lahir"
                                    value="<?php echo $row2["tarikh_lahir"];  ?>">
                                <br>
                                Tempat Lahir:
                                <input type="text" class="form-control" name="tempat_lahir"
                                    value="<?php echo $row2["tempat_lahir"];  ?>">
                                <br>
                                Alamat Surat Menyurat:
                                <textarea class="form-control" name="alamat_surat" id="alamat_surat"
                                    rows="5"><?php echo htmlspecialchars($row2["alamat1_surat"]); ?></textarea>
                                <br>
                                Poskod:
                                <input type="number" class="form-control" name="poskod_surat" id="poskod_surat"
                                    value="<?php echo $row2["poskod_surat"]; ?>">
                                <br>
                                <input type="checkbox" name="same_as_mailing" id="same_as_mailing">
                                Alamat Tetap Sama Seperti Alamat Surat Menyurat
                                <br>
                                <script>
                                    /*  const checkbox = document.getElementById('same_as_mailing');
                                        const alamatSurat = document.getElementById('alamat_surat');
                                        const poskodSurat = document.getElementById('poskod_surat');
                                        const alamatTetap = document.getElementById('alamat_tetap');
                                        const poskodTetap = document.getElementById('poskod_tetap');

                                        checkbox.addEventListener('change', () => {
                                            if (checkbox.checked) {
                                                alamatTetap.value = alamatSurat.value;
                                                poskodTetap.value = poskodSurat.value;
                                            } else {
                                                alamatTetap.value = '';
                                                poskodTetap.value = '';
                                            }
                                        });*/


                                    document.addEventListener("DOMContentLoaded", function () {
                                        const checkbox = document.getElementById('same_as_mailing');
                                        const alamatSurat = document.getElementById('alamat_surat');
                                        const poskodSurat = document.getElementById('poskod_surat');
                                        const alamatTetap = document.getElementById('alamat_tetap');
                                        const poskodTetap = document.getElementById('poskod_tetap');

                                        console.log("checkbox:", checkbox);
                                        console.log("alamatSurat:", alamatSurat);
                                        console.log("poskodSurat:", poskodSurat);
                                        console.log("alamatTetap:", alamatTetap);
                                        console.log("poskodTetap:", poskodTetap);

                                        checkbox.addEventListener('change', () => {
                                            if (checkbox.checked) {
                                                console.log(
                                                    "Copying mailing address to permanent address..."
                                                    );
                                                alamatTetap.value = alamatSurat.value;
                                                poskodTetap.value = poskodSurat.value;
                                            } else {
                                                console.log("Resetting permanent address...");
                                                alamatTetap.value = '';
                                                poskodTetap.value = '';
                                            }
                                        });
                                    });
                                </script>
                                <br>
                                Alamat Tetap:
                                <textarea class="form-control" name="alamat_tetap" id="alamat_tetap"
                                    rows="5"><?php echo htmlspecialchars($row2["alamat1_tetap"]); ?></textarea>
                                <br>
                                Poskod:
                                <input type="number" class="form-control" name="poskod_tetap" id="poskod_tetap"
                                    value="<?php echo $row2["poskod_tetap"]; ?>">





                        </div>

                        <div class="col-md-6"><br><br>
                            Nombor Telefon Bimbit:
                            <input type="number" class="form-control" style="text-transform: uppercase"
                                name="no_telefon" value="<?php echo $row2["no_telefon"];  ?>">
                            <br>
                            Nombor Pejabat:
                            <input type="number" class="form-control" style="text-transform: uppercase"
                                name="no_pejabat" value="<?php echo $row2["no_pejabat"];  ?>">
                            <br>
                            Nombor Rumah:
                            <input type="text" class="form-control" style="text-transform: uppercase" name="no_rumah"
                                value="<?php echo $row2["no_rumah"];  ?>">
                            <br>
                            Emel:
                            <input type="email" class="form-control" name="email" value="<?php echo $row2["email"];  ?>"
                                readonly>
                            <br>
                            Taraf Perkahwinan:
                            <select name="taraf_perkahwinan" class="form-control select-faculty" id="taraf_perkahwinan">
                                <option value="" <?php echo empty($row2["taraf_perkahwinan"]) ? "selected" : ""; ?>
                                    disabled>---</option>
                                <option value="Bujang"
                                    <?php echo $row2["taraf_perkahwinan"] == "Bujang" ? "selected" : ""; ?>>Bujang
                                </option>
                                <option value="Berkahwin"
                                    <?php echo $row2["taraf_perkahwinan"] == "Berkahwin" ? "selected" : ""; ?>>Berkahwin
                                </option>
                                <option value="Janda"
                                    <?php echo $row2["taraf_perkahwinan"] == "Janda" ? "selected" : ""; ?>>Janda
                                </option>
                                <option value="Duda"
                                    <?php echo $row2["taraf_perkahwinan"] == "Duda" ? "selected" : ""; ?>>Duda</option>
                            </select>
                            <script>
                                document.addEventListener("DOMContentLoaded", function () {
                                    var dropdown = document.getElementById("taraf_perkahwinan");
                                    var maklumatPasanganLink = document.getElementById("maklumat_pasangan");
                                    var nextButton = document.querySelector('a[href="maklumat_pasangan.php"]');

                                    function updateMaklumatPasanganLinkDisplay() {
                                        if (dropdown.value === "Berkahwin") {
                                            maklumatPasanganLink.style.display = "block";
                                            nextButton.setAttribute("href", "maklumat_pasangan.php");
                                        } else {
                                            maklumatPasanganLink.style.display = "none";
                                            nextButton.setAttribute("href", "maklumat_keluarga.php");
                                        }
                                    }

                                    dropdown.addEventListener("change", function () {
                                        updateMaklumatPasanganLinkDisplay();
                                    });

                                    updateMaklumatPasanganLinkDisplay();
                                });
                            </script>




                            <br>
                            Warganegara:
                            <select name="warganegara" class="form-control select-faculty" id="warganegara">
                                <option value="" <?php echo empty($row2["warganegara"]) ? "selected" : "disabled"; ?>>
                                    ---</option>
                                <option value="ya" <?php echo $row2["warganegara"] == "ya" ? "selected" : ""; ?>>Ya
                                </option>
                                <option value="tidak" <?php echo $row2["warganegara"] == "tidak" ? "selected" : ""; ?>>
                                    Tidak</option>
                            </select>


                            <br>
                            Agama:
                            <select name="agama" class="form-control select-faculty" id="agama"
                                onchange="showHideOther('agama', 'add_agama')">
                                <option value="" <?php echo empty($row2["agama"]) ? "selected" : ""; ?> disabled>---
                                </option>
                                <option value="Islam" <?php echo $row2["agama"] == "Islam" ? "selected" : ""; ?>>Islam
                                </option>
                                <option value="Budha" <?php echo $row2["agama"] == "Budha" ? "selected" : ""; ?>>Budha
                                </option>
                                <option value="Kristian" <?php echo $row2["agama"] == "Kristian" ? "selected" : ""; ?>>
                                    Kristian</option>
                                <option value="Hindu" <?php echo $row2["agama"] == "Hindu" ? "selected" : ""; ?>>Hindu
                                </option>
                                <option value="lain-lain"
                                    <?php echo $row2["agama"] == "lain-lain" ? "selected" : ""; ?>>lain-lain</option>
                            </select>
                            <div id="add_agama" style="display:none;">
                                <br>
                                Sila Nyatakan Agama:
                                <input type="text" name="agama_lain_lain" class="form-control" id="agama_lain_lain"
                                    value="<?php echo $row2["add_agama"]; ?>">
                            </div>
                            <br>
                            Keturunan:
                            <select name="keturunan" class="form-control select-faculty" id="keturunan"
                                onchange="showHideOther('keturunan', 'add_keturunan')">
                                <option value="" <?php echo empty($row2["keturunan"]) ? "selected" : ""; ?> disabled>---
                                </option>
                                <option value="Melayu" <?php echo $row2["keturunan"] == "Melayu" ? "selected" : ""; ?>>
                                    Melayu</option>
                                <option value="Cina" <?php echo $row2["keturunan"] == "Cina" ? "selected" : ""; ?>>Cina
                                </option>
                                <option value="India" <?php echo $row2["keturunan"] == "India" ? "selected" : ""; ?>>
                                    India</option>
                                <option value="lain-lain"
                                    <?php echo $row2["keturunan"] == "lain-lain" ? "selected" : ""; ?>>Lain-Lain
                                </option>
                            </select>
                            <div id="add_keturunan" style="display:none;">
                                <br>
                                Sila Nyatakan Keturunan:
                                <input type="text" name="keturunan_lain_lain" class="form-control"
                                    id="keturunan_lain_lain" value="<?php echo $row2["add_keturunan"]; ?>">
                            </div>
                            Kecacatan:
                            <select name="kecacatan" class="form-control select-faculty" id="kecacatan">
                                <option value="" <?php echo empty($row2["kecacatan"]) ? "selected" : ""; ?> disabled>---
                                </option>
                                <option value="Ya" <?php echo $row2["kecacatan"] === "Ya" ? "selected" : ""; ?>>Ya
                                </option>
                                <option value="Tidak" <?php echo $row2["kecacatan"] === "Tidak" ? "selected" : ""; ?>>
                                    Tidak</option>
                            </select>

                            <br>
                            <div id="jenis_kecacatan_div" style="display:none;">
                                Jenis Kecacatan:<br>
                                <small class="form-text text-muted">Sila nyatakan kecacatan atau penyakit yang
                                    dihidap</small>
                                <input type="text" class="form-control" style="text-transform: uppercase"
                                    name="jenis_kecacatan">
                            </div><br>
                            <script>
                                var agamaSelect = document.getElementById("agama");
                                var addAgamaInput = document.getElementById("add_agama");
                                var keturunanSelect = document.getElementById("keturunan");
                                var addKeturunanInput = document.getElementById("add_keturunan");
                                var kecacatanSelect = document.getElementById("kecacatan");
                                var jenisKecacatanDiv = document.getElementById("jenis_kecacatan_div");

                                // check selected options on page load and show/hide input fields accordingly
                                if (agamaSelect.value === "lain-lain") {
                                    addAgamaInput.style.display = "block";
                                }
                                if (keturunanSelect.value === "lain-lain") {
                                    addKeturunanInput.style.display = "block";
                                }
                                if (kecacatanSelect.value === "Ya") {
                                    jenisKecacatanDiv.style.display = "block";
                                }


                                // show/hide "Silakan Nyatakan Agama" input field based on agama selection
                                agamaSelect.addEventListener("change", function () {
                                    if (agamaSelect.value === "lain-lain") {
                                        addAgamaInput.style.display = "block";
                                    } else {
                                        addAgamaInput.style.display = "none";
                                    }
                                });

                                // show/hide "Silakan Nyatakan Keturunan" input field based on keturunan selection
                                keturunanSelect.addEventListener("change", function () {
                                    if (keturunanSelect.value === "lain-lain") {
                                        addKeturunanInput.style.display = "block";
                                    } else {
                                        addKeturunanInput.style.display = "none";
                                    }
                                });

                                // show/hide "Jenis Kecacatan" input field based on kecacatan selection
                                kecacatanSelect.addEventListener("change", function () {
                                    if (kecacatanSelect.value === "Ya") {
                                        jenisKecacatanDiv.style.display = "block";
                                    } else {
                                        jenisKecacatanDiv.style.display = "none";
                                    }
                                });

                                // show/hide "Silakan Nyatakan Agama" input field if user types in "agama_lain_lain" input
                                document.getElementById("agama_lain_lain").addEventListener("input", function () {
                                    if (this.value != "") {
                                        addAgamaInput.style.display = "block";
                                    } else {
                                        addAgamaInput.style.display = "none";
                                    }
                                });

                                // show/hide "Silakan Nyatakan Keturunan" input field if user types in "keturunan_lain_lain" input
                                document.getElementById("keturunan_lain_lain").addEventListener("input", function () {
                                    if (this.value != "") {
                                        addKeturunanInput.style.display = "block";
                                    } else {
                                        addKeturunanInput.style.display = "none";
                                    }
                                });

                                // show/hide "Jenis Kecacatan" input field if user types in "jenis_kecacatan" input
                                document.getElementById("jenis_kecacatan").addEventListener("input", function () {
                                    if (this.value != "") {
                                        addKeturunanInput.style.display = "block";
                                    } else {
                                        addKeturunanInput.style.display = "none";
                                    }
                                });
                            </script>



                            <br>
                            Lesen Kenderaan:
                            <br>
                            <!--<div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="lesenkenderaan" id="a" value="A">
                                    <label class="form-check-label" for="a">A</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="lesenkenderaan" id="a1" value="A1">
                                    <label class="form-check-label" for="a1">A1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="lesenkenderaan" id="b2" value="B2">
                                    <label class="form-check-label" for="b2">B2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="lesenkenderaan" id="b1" value="B1">
                                    <label class="form-check-label" for="b1">B1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="lesenkenderaan" id="b" value="B">
                                    <label class="form-check-label" for="b">B</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="lesenkenderaan" id="d" value="D">
                                    <label class="form-check-label" for="d">D</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="lesenkenderaan" id="c" value="C">
                                    <label class="form-check-label" for="c">C</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="lesenkenderaan" id="e" value="E">
                                    <label class="form-check-label" for="e">E</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="lesenkenderaan" id="e1" value="E1">
                                    <label class="form-check-label" for="e1">E1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="lesenkenderaan" id="e2" value="E2">
                                    <label class="form-check-label" for="e2">E2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="lesenkenderaan" id="f" value="F">
                                    <label class="form-check-label" for="f">F</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="lesenkenderaan" id="g" value="G">
                                    <label class="form-check-label" for="e1">G</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="lesenkenderaan" id="h" value="H">
                                    <label class="form-check-label" for="h">H</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="lesenkenderaan" id="i" value="I">
                                    <label class="form-check-label" for="i">I</label>
                                </div>-->
                            <?php
                                // Assume $row2["lesen_kelas"] contains comma-separated values, e.g. "A,B,E"

                                // Define an array of possible values for the checkboxes
                                $checkbox_values = array("A", "A1", "B2", "B1", "B", "D", "DA", "C", "E", "E1", "E2", "F", "G", "H", "I");

                                // Split the "lesen_kelas" value into an array of selected values
                                $selected_values = explode(",", $row2["lesen_kelas"]);

                                // Generate the checkboxes with pre-selected values
                                foreach ($checkbox_values as $value) {
                                    $checked = in_array($value, $selected_values) ? "checked" : ""; // Check if this value is selected
                                    echo '<div class="form-check form-check-inline">';
                                    echo '<input class="form-check-input" type="checkbox" name="lesenkenderaan[]" id="' . $value . '" value="' . $value . '" ' . $checked . '>';
                                    echo '<label class="form-check-label" for="' . $value . '">' . $value . '</label>';
                                    echo '</div>';
                                }
                                ?>

                            <br><br>Lesen Khas:<br>
                            <small class="form-text text-muted">Sila senaraikan lesen khas jika ada</small>
                            <input type="text" class="form-control" style="text-transform: uppercase" name="lesen_khas"
                                value="<?php echo $row2["lesen_khas"]; ?>">
                            <br>




                            Berat:<br>
                            <small class="form-text text-muted">Ukuran dalam KG</small>
                            <input type="number" length="12" class="form-control" style="text-transform: uppercase"
                                name="berat" value="<?php echo $row2["berat"]; ?>">
                            <br>
                            Tinggi:<br>
                            <small class="form-text text-muted">Ukuran dalam cm</small>
                            <input type="number" length="12" class="form-control" style="text-transform: uppercase"
                                name="tinggi" value="<?php echo $row2["tinggi"]; ?>">
                            <br>


                        </div>
                        <div class="BTN flex-parent jc-center">
                            <small class="form-text text-muted">SILA SIMPAN SEBELUM TERUSKAN!!</small><br>
                            <button type="submit" class="btn btn-info" text-color="white">SIMPAN</button>
                            <a type="button" href="maklumat_pasangan.php" class="btn btn-warning"
                                style="margin-left: 10px;">SETERUSNYA</a>
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
            if ($_SERVER["REQUEST_METHOD"] == "POST") {


                $nama_penuh = trim($_POST["nama_penuh"]);
                $no_KP_baru = trim($_POST["no_KP_baru"]);
                $no_KP_lama = trim($_POST["no_KP_lama"]);
                $jantina = trim($_POST["jantina"]);
                $umur = trim($_POST["umur"]);
                $tarikh_lahir = trim($_POST["tarikh_lahir"]);
                $tempat_lahir = trim($_POST["tempat_lahir"]);
                $alamat_surat = trim($_POST["alamat_surat"]);
                $poskod_surat = trim($_POST["poskod_surat"]);
                $alamat_tetap = trim($_POST["alamat_tetap"]);
                $poskod_tetap = trim($_POST["poskod_tetap"]);
                $no_tel = trim($_POST["no_pejabat"]);
                $no_hp = trim($_POST["no_telefon"]);
                $no_rumah = trim($_POST["no_rumah"]);
                $email = trim($_POST["email"]);
                $tarafPerkahwinan = trim($_POST['taraf_perkahwinan']);
                $warganegara = trim($_POST['warganegara']);
                $agama = trim($_POST['agama']);
                $add_agama = trim($_POST['agama_lain_lain']);
                $keturunan = trim($_POST['keturunan']);
                $add_keturunan = trim($_POST['keturunan_lain_lain']);

                if (is_array($_POST["lesenkenderaan"])) {
                    $lesenkenderaan = implode(",", $_POST["lesenkenderaan"]);
                } else {
                    $lesenkenderaan = '';
                }
                $lesen_khas = trim($_POST['lesen_khas']);
                $kecacatan = trim($_POST['kecacatan']);
                $jenis_kecacatan = trim($_POST['jenis_kecacatan']);
                $berat = trim($_POST['berat']);
                $tinggi = trim($_POST['tinggi']);
                $jawatan = trim($_POST["jawatan"]);
                $gambar_pemohon = trim($_FILES["gambar_pemohon"]["name"]);



                $query = "UPDATE maklumat_peribadi
                SET 
                    jawatan_pemohon = '$jawatan',
                    nama_penuh = '$nama_penuh',
                    no_KP_lama = '$no_KP_lama',
                    jantina = '$jantina',
                    umur = '$umur',
                    tarikh_lahir = '$tarikh_lahir',
                    tempat_lahir = '$tempat_lahir',
                    alamat1_surat = '$alamat_surat',
                    poskod_surat = '$poskod_surat',
                    alamat1_tetap = '$alamat_tetap',
                    poskod_tetap = '$poskod_tetap',
                    no_telefon = '$no_hp',
                    no_rumah = '$no_rumah',
                    no_pejabat = '$no_tel',
                    email = '$email',
                    taraf_perkahwinan = '$tarafPerkahwinan',
                    warganegara = '$warganegara',
                    agama = '$agama',
                    add_agama = '$add_agama',
                    keturunan = '$keturunan',
                    add_keturunan = '$add_keturunan',
                    lesen_kelas = '$lesenkenderaan',
                    lesen_khas = '$lesen_khas',
                    kecacatan = '$kecacatan',
                    jenis_cacat='$jenis_kecacatan',
                    berat = '$berat',
                    tinggi = '$tinggi'
                    WHERE id_user = $session";
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
                mysqli_close($conn);
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