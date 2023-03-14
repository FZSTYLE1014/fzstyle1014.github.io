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
            <a class="nav-link active" aria-current="page" href="kemahiran.php">Sijil Kemahiran</a>
          </li>

        </ul>
        <div class="text-center">
          <br />
          <h2 style="color:FFFFFF"><b>SIJIL KEMAHIRAN</b></h2>
        </div>


        <form class="col-sm-12 shadow-lg p-3  mb-12 bg-white rounded" enctype="multipart/form-data" action="upsr.php"
          method="POST">


          <div class="row">
            <div class="col-md-6">
              Nama Institusi:
              <select name="nama_institusi" id="nama_institusi" class="form-control">
                <option value="" selected disabled>--Sila Pilih--</option>
                <option value="ADVANCED TOURISM INTERNATIONAL COLLEGE (ATIC), GEORGETOWN, PULAU PINANG">ADVANCED TOURISM
                  INTERNATIONAL COLLEGE (ATIC), GEORGETOWN, PULAU PINANG</option>
                <option value="AIMST UNIVERSITY, SG PETANI">AIMST UNIVERSITY, SG PETANI</option>
                <option value="AKADEMI DIGITAL ANIMASI DAN MEDIA (ADAM)">AKADEMI DIGITAL ANIMASI DAN MEDIA (ADAM)
                </option>
                <option value="AKADEMI KEJURURAWATAN TUNG SHIN">AKADEMI KEJURURAWATAN TUNG SHIN</option>
                <option value="AKADEMI KEWARTAWANAN DAN KOMUNIKASI HANXING">AKADEMI KEWARTAWANAN DAN KOMUNIKASI HANXING
                </option>
                <option value="AKADEMI LAUT MALAYSIA (ALAM)">AKADEMI LAUT MALAYSIA (ALAM)</option>
                <option value="AKADEMI MARITIM SARAWAK">AKADEMI MARITIM SARAWAK</option>
                <option value="AKADEMI SENI BUDAYA DAN WARISAN KEBANGSAAN (ASWARA)">AKADEMI SENI BUDAYA DAN WARISAN
                  KEBANGSAAN (ASWARA)</option>
                <option value="AKADEMI SENI DAN MUZIK YAMAHA">AKADEMI SENI DAN MUZIK YAMAHA</option>
                <option value="AKADEMI SENI LUKIS DASEIN">AKADEMI SENI LUKIS DASEIN</option>
                <option value="AKADEMI YES">AKADEMI YES</option>
                <option value="AKADEMI INFOTECH MARA">AKADEMI INFOTECH MARA</option>
                <option value="AKADMEI SENI KEBANGSAAN">AKADMEI SENI KEBANGSAAN </option>
                <option value="ALLIANZE UNIVERSITY COLLEGE OF MEDICAL SCIENCES">ALLIANZE UNIVERSITY COLLEGE OF MEDICAL
                  SCIENCES </option>
                <option value="ALPHA COLLEGE OF TECHNOLOGY">ALPHA COLLEGE OF TECHNOLOGY</option>
                <option value="AMC THE SCHOOL OF BUSINESS">AMC THE SCHOOL OF BUSINESS</option>
                <option value="ASIA e UNIVERSITY, JALAN SULTAN SULAIMAN, KUALA LUMPUR">ASIA e UNIVERSITY, JALAN SULTAN
                  SULAIMAN, KUALA LUMPUR</option>
                <option value="ASIA METROPOLITAN UNIVERSITY/ KOLEJ UNIV, SAINS KESIHATAN MASTERSKILL">ASIA METROPOLITAN
                  UNIVERSITY/ KOLEJ UNIV, SAINS KESIHATAN MASTERSKILL</option>
                <option value="ASIA PACIFIC FLIGHT TRAINING ACADEMY, KOTA BHARU, KELANTAN">ASIA PACIFIC FLIGHT TRAINING
                  ACADEMY, KOTA BHARU, KELANTAN</option>
                <option value="ASIA PACIFIC INSTITUTE OF INFORMATION TECCHNOLOGY">ASIA PACIFIC INSTITUTE OF INFORMATION
                  TECHNOLOGY</option>
                <option value="ASIA PACIFIC UNIVERSITY OF TECHNOLOGY AND INNOVATION (ASIA PACIFIC UNIT)">ASIA PACIFIC
                  UNIVERSITY OF TECHNOLOGY AND INNOVATION (ASIA PACIFIC UNIT)</option>
                <option value="ASIA SCHOOL OF BUSINESS">ASIA SCHOOL OF BUSINESS</option>
                <option value="BINARY BUSINESS SCHOOL">BINARY BUSINESS SCHOOL</option>
                <option value="BINARY UNIVERSITY OF MANAGEMENT AND ENTREPRENEURSHIP">BINARY UNIVERSITY OF MANAGEMENT AND
                  ENTREPRENEURSHIP</option>
                <option value="BUKIT MERAH LAKETOWN INSTITUTE OF ALLIED HEALTH SCIENCE/LAKE VIEW COLLEGE">BUKIT MERAH
                  LAKETOWN INSTITUTE OF ALLIED HEALTH SCIENCE/LAKE VIEW COLLEGE</option>
                <option value="CITY UNIVERSITY COLLEGE OF SCIENCE AND TECHNOLOGY/UNITY INTERNATIONAL COLLEGE">CITY
                  UNIVERSITY COLLEGE OF SCIENCE AND TECHNOLOGY/UNITY INTERNATIONAL COLLEGE</option>
                <option value="CLARA INTERNATIONAL AESTHETHIC COLLEGE">CLARA INTERNATIONAL AESTHETHIC COLLEGE</option>
                <option value="CONSISTS COLLEGE AMPANG">CONSISTS COLLEGE AMPANG</option>
                <option value="CURTIN UNIVERSITY, SARAWAK">CURTIN UNIVERSITY, SARAWAK</option>
                <option value="DARUL QURAN JABATAN KEMAJUAN ISLAM MALAYSIA">DARUL QURAN JABATAN KEMAJUAN ISLAM MALAYSIA
                </option>
                <option value="DRB-HITCOM UNIVERSITY OF AUTOMOTIVE MALAYSI">DRB-HITCOM UNIVERSITY OF AUTOMOTIVE MALAYSIA
                </option>
                <option value="EQUATOR ACADEMY OF AR">EQUATOR ACADEMY OF ART</option>
                <option value="FIRST CITY UNIVERSITY COLLEGE/KOLEJ ANTARABANGSA KBU">FIRST CITY UNIVERSITY COLLEGE/KOLEJ
                  ANTARABANGSA KBU</option>
                <option value="HERIOT-WATT UNIVERSITY MALAYSIA">HERIOT-WATT UNIVERSITY MALAYSIA</option>
                <option value="HOSPITAL UNIVERSITI KEBANGSAAN MALAYSIA">HOSPITAL UNIVERSITI KEBANGSAAN MALAYSIA</option>
                <option value="INPENS INTERNATIONAL COLLEGE">INPENS INTERNATIONAL COLLEGE</option>
                <option value="INST.HOSPITALITI YPJ, JOHOR BAHRU">INST.HOSPITALITI YPJ, JOHOR BAHRU</option>
                <option value="INSTITUSI PENGAJIAN ISLAM, SERDANG SELANGOR">INSTITUSI PENGAJIAN ISLAM, SERDANG SELANGOR
                </option>
                <option value="INSTITUSI PENGURUSAN DAN TEKNOLOGI UTARA">INSTITUSI PENGURUSAN DAN TEKNOLOGI UTARA
                </option>
                <option value="INSTITUSI PERUBATAN, SAINS DAN TEKNOLOGI ASIA">INSTITUSI PERUBATAN, SAINS DAN TEKNOLOGI
                  ASIA</option>
                <option value="INSTITUSI SAINS KESIHATAN DAN KEJURURAWATAN MAHKOTA">INSTITUSI SAINS KESIHATAN DAN
                  KEJURURAWATAN MAHKOTA</option>
                <option value="INSTITUSI TEKNOLOGI SEPANG">INSTITUSI TEKNOLOGI SEPANG</option>
                <option value="INSTITUSI TEKNOLOGI TUN ABDUL RAZAK">INSTITUSI TEKNOLOGI TUN ABDUL RAZAK</option>
                <option value="INSTITUT BAKERI MALAYSIA">INSTITUT BAKERI MALAYSIA</option>
                <option value="INSTITUT BINA USAHAWAN">INSTITUT BINA USAHAWAN</option>
                <option value="INSTITUT CECE">INSTITUT CECE</option>
                <option value="INSTITUT DAKWAH ISLAMIAH PERKIM (IDIP)">INSTITUT DAKWAH ISLAMIAH PERKIM (IDIP)</option>
                <option value="INSTITUT EU">INSTITUT EU</option>
                <option value="INSTITUT FIRST ROBOTICS INDUSTRIAL SCIENCE (FRIS)">INSTITUT FIRST ROBOTICS INDUSTRIAL
                  SCIENCE (FRIS)</option>
                <option value="INSTITUT FMM">INSTITUT FMM</option>
                <option value="INSTITUT GOON">INSTITUT GOON</option>
                <option value="INSTITUT HASANI KEDAH">INSTITUT HASANI KEDAH</option>
                <option value="INSTITUT HASANI, KEDAH, MALAYSIA">INSTITUT HASANI, KEDAH, MALAYSIA</option>
                <option value="INSTITUT INFORMASI MULTIMEDIA">INSTITUT INFORMASI MULTIMEDIA</option>
                <option value="INSTITUT INFORMASI MULTIMEDIA MENTAKAB, PAHANG">INSTITUT INFORMASI MULTIMEDIA MENTAKAB,
                  PAHANG</option>
                <option value="INSTITUT INFORMASI TEKNOLOGI COSMOSPECT">INSTITUT INFORMASI TEKNOLOGI COSMOSPECT</option>
                <option value="INSTITUT JATI">INSTITUT JATI</option>
                <option value="INSTITUT KEMAHIRAN BELIA NEGARA (IKBN)">INSTITUT KEMAHIRAN BELIA NEGARA (IKBN)</option>
                <option value="INSTITUT KEMAHIRAN ISLAM MALAYSIA SWK.">INSTITUT KEMAHIRAN ISLAM MALAYSIA SWK.</option>
                <option value="INSTITUT KEMAHIRAN MARA">INSTITUT KEMAHIRAN MARA</option>
                <option value="INSTITUT KEMAHIRAN TINGGI BELIA NEGARA">INSTITUT KEMAHIRAN TINGGI BELIA NEGARA </option>
                <option value="INSTITUT KEMAHIRAN TINGGI PERDA (PERDA-TECH), SEBERANG PERAI SELATAN, PULAU PINANG">
                  INSTITUT KEMAHIRAN TINGGI PERDA (PERDA-TECH), SEBERANG PERAI SELATAN, PULAU PINANG</option>
                <option value="INSTITUT KOJADI">INSTITUT KOJADI</option>
                <option value="INSTITUT KOMPAS">INSTITUT KOMPAS</option>
                <option value="INSTITUT KOTA MELAKA">INSTITUT KOTA MELAKA</option>
                <option value="INSTITUT KRAF NEGARA">INSTITUT KRAF NEGARA</option>
                <option value="INSTITUT LATIHAN FTMS-ICL, KUALA LUMPUR">INSTITUT LATIHAN FTMS-ICL, KUALA LUMPUR</option>
                <option value="INSTITUT LATIHAN KESIHATAN ANGKATAN TENTERA (INSAN)">INSTITUT LATIHAN KESIHATAN ANGKATAN
                  TENTERA (INSAN)</option>
                <option value="INSTITUT LATIHAN PERTUHANAN, JAB, PERHUTANAN SEMENANJUNG MALAYSIA">INSTITUT LATIHAN
                  PERTUHANAN, JAB, PERHUTANAN SEMENANJUNG MALAYSIA</option>
                <option value="INSTITUT LATIHAN PERINDUSTRIAN">INSTITUT LATIHAN PERINDUSTRIAN</option>
                <option value="INSTITUT MAKANAN MALAYSIA (FIM), SELANGOR">INSTITUT MAKANAN MALAYSIA (FIM), SELANGOR
                </option>
                <option value="INSTITUT MEDIA INTEGRATIF MALAYSIA">INSTITUT MEDIA INTEGRATIF MALAYSIA</option>
                <option value="INSTITUT METHODIST PILLEY">INSTITUT METHODIST PILLEY</option>
                <option value="INSTITUT OMEGA">INSTITUT OMEGA </option>
                <option value="INSTITUT PELABURAN PNB">INSTITUT PELABURAN PNB</option>
                <option value="INSTITUT PENDIDIKAN GURU KPM">INSTITUT PENDIDIKAN GURU KPM</option>
                <option value="INSTITUT PENGAJIAN GLOBAL, BANDAR BARU NILAI">INSTITUT PENGAJIAN GLOBAL, BANDAR BARU
                  NILAI</option>
                <option value="INSTITUT PENGAJIAN ISLAM DAN DAKWAH SABAH">INSTITUT PENGAJIAN ISLAM DAN DAKWAH SABAH
                </option>
                <option value="INSTITUT PENGAJIAN TAHFIZ AL-QURAN PUSAT ISLAM">INSTITUT PENGAJIAN TAHFIZ AL-QURAN PUSAT
                  ISLAM</option>
                <option value="INSTITUT PENGAJIAN TINGGI ISLAM JOHOR (MARSAH)">INSTITUT PENGAJIAN TINGGI ISLAM JOHOR
                  (MARSAH)</option>
                <option value="INSTITUT PENGAJIAN TINGGI ISLAM PERLIS">INSTITUT PENGAJIAN TINGGI ISLAM PERLIS</option>
                <option value="INSTITUT PENGURUSAN GLOBAL">INSTITUT PENGURUSAN GLOBAL</option>
                <option value="INSTITUT PENGURUSAN MALAYSIA">INSTITUT PENGURUSAN MALAYSIA</option>
                <option value="INSTITUT PENGURUSAN MAXCEL">INSTITUT PENGURUSAN MAXCEL</option>
                <option value="INSTITUT PENILAIAN NEGARA (INSPEN)">INSTITUT PENILAIAN NEGARA (INSPEN)</option>
                <option value="INSTITUT PERDAGANGAN SISTEMATIK">INSTITUT PERDAGANGAN SISTEMATIK</option>
                <option value="INSTITUT PERKEMBANGAN AWAL KANAK KANAK">INSTITUT PERKEMBANGAN AWAL KANAK KANAK</option>
                <option value="INSTITUT PERNIAGAAN PAAC">INSTITUT PERNIAGAAN PAAC</option>
                <option value="INSTITUT PERTANIAN MALAYSIA">INSTITUT PERTANIAN MALAYSIA</option>
                <option value="INSTITUT PROFESSIONAL BAITULMAL">INSTITUT PROFESSIONAL BAITULMAL</option>
                <option value="INSTITUT PROFESSIONAL/SC COLLEGE">INSTITUT PROFESSIONAL/SC COLLEGE</option>
                <option value="INSTITUT SAE">INSTITUT SAE</option>
                <option value="INSTITUT SAINS DAN PENGURUSAN">INSTITUT SAINS DAN PENGURUSAN</option>
                <option value="INSTITUT SAINS DAN TEKNOLOGI DARUL TAKZIM (INSTEDT)">INSTITUT SAINS DAN TEKNOLOGI DARUL
                  TAKZIM (INSTEDT)</option>
                <option value="INSTITUT SAINS KESIHATAN DSH">INSTITUT SAINS KESIHATAN DSH</option>
                <option value="INSTITUT SENI LUKIS MALAYSIA, KUALA LUMPUR">INSTITUT SENI LUKIS MALAYSIA, KUALA LUMPUR
                </option>
                <option value="INSTITUT SENI PIA">INSTITUT SENI PIA</option>
                <option value="INSTITUT SENI SABAH">INSTITUT SENI SABAH</option>
                <option value="INSTITUT SINARAN">INSTITUT SINARAN</option>
                <option value="INSTITUT SYSTEMATIC KLANG, SELANGOR">INSTITUT SYSTEMATIC KLANG, SELANGOR</option>
                <option value="INSTITUT TEKNIKAL JEPUN-MALAYSIA (JMTI)">INSTITUT TEKNIKAL JEPUN-MALAYSIA (JMTI)</option>
                <option value="INSTITUT TEKNIKAL MANITISSA, KUALA LUMPUR">INSTITUT TEKNIKAL MANITISSA, KUALA LUMPUR
                </option>
                <option value="INSTITUT TEKNOLOGI A.N.S">INSTITUT TEKNOLOGI A.N.S</option>
                <option value="INSTITUT TEKNOLOGI AUDIO OCEAN">INSTITUT TEKNOLOGI AUDIO OCEAN</option>
                <option value="INSTITUT TEKNOLOGI DAN PENGURUSAN LEBUH VICTORIA (ITPLV)">INSTITUT TEKNOLOGI DAN
                  PENGURUSAN LEBUH VICTORIA (ITPLV)</option>
                <option value="INSTITUT TEKNOLOGI IBNU SINA, SETAPAK">INSTITUT TEKNOLOGI IBNU SINA, SETAPAK</option>
                <option value="INSTITUT TEKNOLOGI IMPERIA">INSTITUT TEKNOLOGI IMPERIA</option>
                <option value="INSTITUT TEKNOLOGI KREATIF LIMKOKWING CAWANGAN SARAWAK">INSTITUT TEKNOLOGI KREATIF
                  LIMKOKWING CAWANGAN SARAWAK</option>
                <option value="INSTITUT TEKNOLOGI MAKLUMAT COSMOPOINT">INSTITUT TEKNOLOGI MAKLUMAT COSMOPOINT</option>
                <option value="INSTITUT TEKNOLOGI MAKLUMAT NUSANTARA (NIIT KUCHING), SARAWAK">INSTITUT TEKNOLOGI
                  MAKLUMAT NUSANTARA (NIIT KUCHING), SARAWAK</option>
                <option value="INSTITUT TEKNOLOGI PERAK, IPOH">INSTITUT TEKNOLOGI PERAK, IPOH</option>
                <option value="INSTITUT TEKNOLOGI PERINDUSTRIAN, YPJ">INSTITUT TEKNOLOGI PERINDUSTRIAN, YPJ</option>
                <option value="INSTITUT TEKNOLOGI PERTAMA, MANTIN">INSTITUT TEKNOLOGI PERTAMA, MANTIN</option>
                <option value="INSTITUT TEKNOLOGI RIAM">INSTITUT TEKNOLOGI RIAM</option>
                <option value="INSTITUT TEKNOLOGI SEDAMAI, SARAWAK">INSTITUT TEKNOLOGI SEDAMAI, SARAWAK</option>
                <option value="INSTITUT TECHNOLOGY CYBERNETICS">INSTITUT TECHNOLOGY CYBERNETICS</option>
                <option value="INSTITUT TERJEMAHAN NEGARA">INSTITUT TERJEMAHAN NEGARA</option>
                <option value="INSTITUT VETERINAR/HAIWAN MALAYSIA">INSTITUT VETERINAR/HAIWAN MALAYSIA</option>
                <option value="INSTITUTE INTERNATIONAL MANAGEMENT AND TECHNOLOGY (IIMAT)">INSTITUTE INTERNATIONAL
                  MANAGEMENT AND TECHNOLOGY (IIMAT)</option>
                <option value="INSTITUTE OF TECHNOLOGY CYBERTEK">INSTITUTE OF TECHNOLOGY CYBERTEK</option>
                <option value="INTEC EDUCATION COLLEGE">INTEC EDUCATION COLLEGE </option>
                <option value="INTERNATIONAL CENTER FOR EDUCATION IN ISLAMIC FINANCE (INCEIF)">INTERNATIONAL CENTER FOR
                  EDUCATION IN ISLAMIC FINANCE (INCEIF) </option>
                <option value="INTERNATIONAL COLLEGE OF HEALTH SCIENCES (ICHS), SERI KEMBANGAN, SELANGOR">INTERNATIONAL
                  COLLEGE OF HEALTH SCIENCES (ICHS), SERI KEMBANGAN, SELANGOR </option>
                <option value="INTERNATIONAL COLLEGE OF MUSIC (ICOM)">INTERNATIONAL COLLEGE OF MUSIC (ICOM)</option>
                <option value="INTERNATIONAL INSTITUTE OF SCIENCE MANTIN">INTERNATIONAL INSTITUTE OF SCIENCE MANTIN
                </option>
                <option value="INTERNATIONAL MEDICAL UNIVERSITY, MALAYSIA">INTERNATIONAL MEDICAL UNIVERSITY, MALAYSIA
                </option>
                <option value="INTERNATIONAL UNIVERSITY COLLEGE OF ARTS AND SCIENCE (I-UCAS)">INTERNATIONAL UNIVERSITY
                  COLLEGE OF ARTS AND SCIENCE (I-UCAS)</option>
                <option value="INTERNATIONAL UNIVERSITY OF MALAYA-WALES (IUMW)">INTERNATIONAL UNIVERSITY OF MALAYA-WALES
                  (IUMW)</option>
                <option value="JABATAN LAUT SEMENANJUNG MALAYSIA">JABATAN LAUT SEMENANJUNG MALAYSIA</option>
                <option value="JABATAN PEMBANGUNAN KEMAHIRAN">JABATAN PEMBANGUNAN KEMAHIRAN</option>
                <option value="JABATAN PEMBANGUNAN SUMBER MANUSIA, SABAH">JABATAN PEMBANGUNAN SUMBER MANUSIA, SABAH
                </option>
                <option value="KEMAYAN ADVANCE TERTIARY COLLEGE">KEMAYAN ADVANCE TERTIARY COLLEGE</option>
                <option value="KINABALU COMMERCIAL COLLEGE">KINABALU COMMERCIAL COLLEGE</option>
                <option value="KOLEJ ISLAM TEK A'BANGSA G'TOWN, P.PINANG">KOLEJ ISLAM TEK A'BANGSA G'TOWN, P.PINANG
                </option>
                <option value="KOLEJ KEJURURAWATAN DAN SAINS KESIHATAN SIME DARBY">KOLEJ KEJURURAWATAN DAN SAINS
                  KESIHATAN SIME DARBY </option>
                <option value="KOLEJ ALC">KOLEJ ALC </option>
                <option value="KOLEJ ALFA">KOLEJ ALFA</option>
                <option value="KOLEJ AMAN BATU PAHAT">KOLEJ AMAN BATU PAHAT</option>
                <option value="KOLEJ ANTARABANGSA ALMACREST">KOLEJ ANTARABANGSA ALMACREST</option>
                <option value="KOLEJ ANTARABANGSA AUTOMOTIF">KOLEJ ANTARABANGSA AUTOMOTIF</option>
                <option value="KOLEJ ANTARABANGSA CYBERJAYA">KOLEJ ANTARABANGSA CYBERJAYA</option>
                <option value="KOLEJ ANTARABANGSA CYBERLYNX">KOLEJ ANTARABANGSA CYBERLYNX</option>
                <option value="KOLEJ ANTARABANGSA DUNIA MELAYU DUNIA ISLAM (KADMDI)">KOLEJ ANTARABANGSA DUNIA MELAYU
                  DUNIA ISLAM (KADMDI)</option>
                <option value="KOLEJ ANTARABANGSA EXCEL">KOLEJ ANTARABANGSA EXCEL</option>
                <option value="KOLEJ ANTARABANGSA FAJAR">KOLEJ ANTARABANGSA FAJAR</option>
                <option value="KOLEJ ANTARABANGSA FAME">KOLEJ ANTARABANGSA FAME</option>
                <option value="KOLEJ ANTARABANGSA FLAMINGO">KOLEJ ANTARABANGSA FLAMINGO</option>
                <option value="KOLEJ ANTARABANGSA GENTING INTI">KOLEJ ANTARABANGSA GENTING INTI</option>
                <option value="KOLEJ ANTARABANGSA GEOMATIKA">KOLEJ ANTARABANGSA GEOMATIKA</option>
                <option value="KOLEJ ANTARABANGSA GREENCITY">KOLEJ ANTARABANGSA GREENCITY</option>
                <option value="KOLEJ ANTARABANGSA HOSPITALITI DAN PELANCONGAN LEGEND">KOLEJ ANTARABANGSA HOSPITALITI DAN
                  PELANCONGAN LEGEND</option>
                <option value="KOLEJ ANTARABANGSA IMPIANA">KOLEJ ANTARABANGSA IMPIANA</option>
                <option value="KOLEJ ANTARABANGSA INOVATIF, PETALING JAYA, SELANGOR">KOLEJ ANTARABANGSA INOVATIF,
                  PETALING JAYA, SELANGOR</option>
                <option value="KOLEJ ANTARABANGSA INTI SUBANG">KOLEJ ANTARABANGSA INTI SUBANG</option>
                <option value="KOLEJ ANTARABANGSA KEJURURAWATAN DAN SAINS KESIHATAN KPJ">KOLEJ ANTARABANGSA
                  KEJURURAWATAN DAN SAINS KESIHATAN KPJ</option>
                <option value="KOLEJ ANTARABANGSA KEJURURAWATAN DAN SAINS KESIHATAN KPJ NILAI, NEGERI SEMBILAN">KOLEJ
                  ANTARABANGSA KEJURURAWATAN DAN SAINS KESIHATAN KPJ NILAI, NEGERI SEMBILAN</option>
                <option value="OLEJ ANTARABANGSA KEMAJUAN PELANCONGAN">KOLEJ ANTARABANGSA KEMAJUAN PELANCONGAN</option>
                <option value="KOLEJ ANTARABANGSA KFCH, PUCHONG, SELANGOR">KOLEJ ANTARABANGSA KFCH, PUCHONG, SELANGOR
                </option>
                <option value="KOLEJ ANTARABANGSA KIRKBY">KOLEJ ANTARABANGSA KIRKBY</option>
                <option value="KOLEJ ANTARABANGSA LANGKAWI, KEDAH">KOLEJ ANTARABANGSA LANGKAWI, KEDAH</option>
                <option value="KOLEJ ANTARABANGSA MALVERN, JALAN TUN H.S LEE, KUALA LUMPUR">KOLEJ ANTARABANGSA MALVERN,
                  JALAN TUN H.S LEE, KUALA LUMPUR</option>
                <option value="KOLEJ ANTARABANGSA METRO PRIMA/MAHSA PRIMA">KOLEJ ANTARABANGSA METRO PRIMA/MAHSA PRIMA
                </option>
                <option value="KOLEJ ANTARABANGSA NIGHTINGALE">KOLEJ ANTARABANGSA NIGHTINGALE</option>
                <option value="KOLEJ ANTARABANGSA OREN">KOLEJ ANTARABANGSA OREN</option>
                <option value="KOLEJ ANTARABANGSA PELANCONGAN ASIA (ATI), KOTA KINABALU">KOLEJ ANTARABANGSA PELANCONGAN
                  ASIA (ATI), KOTA KINABALU</option>
                <option value="KOLEJ ANTARABANGSA PENGURUSAN HOTEL YTL">KOLEJ ANTARABANGSA PENGURUSAN HOTEL YTL</option>
                <option value="KOLEJ ANTARABANGSA PERNIAGAAN DAN PENGURUSAN/KOLEJ ANTARABANGSA FAZLEY">KOLEJ
                  ANTARABANGSA PERNIAGAAN DAN PENGURUSAN/KOLEJ ANTARABANGSA FAZLEY</option>
                <option value="KOLEJ ANTARABANGSA PUTRA"> KOLEJ ANTARABANGSA PUTRA</option>
                <option value="KOLEJ ANTARABANGSA PUTRA INTELEK"> KOLEJ ANTARABANGSA PUTRA INTELEK</option>
                <option value="KOLEJ ANTARABANGSA SAINS DAN TEKNOLOGI MELAKA (MiCoST)">KOLEJ ANTARABANGSA SAINS DAN
                  TEKNOLOGI MELAKA (MiCoST)</option>
                <option value="KOLEJ ANTARABANGSA SAINS KESIHATAN ASEANA, KOTA KINABALU, SABAH">KOLEJ ANTARABANGSA SAINS
                  KESIHATAN ASEANA, KOTA KINABALU, SABAH</option>
                <option value="KOLEJ ANTARABANGSA SEAFIELD">KOLEJ ANTARABANGSA SEAFIELD </option>
                <option value="KOLEJ ANTARABANGSA SEDAYA SARAWAK">KOLEJ ANTARABANGSA SEDAYA SARAWAK</option>
                <option value="KOLEJ ANTARABANGSA STRADFORD">KOLEJ ANTARABANGSA STRADFORD</option>
                <option value="KOLEJ ANTARABANGSA TAJ, PERAK">KOLEJ ANTARABANGSA TAJ, PERAK</option>
                <option value="KOLEJ ANTARABANGSA TEKNOLOGI DAN PROFESSIONAL">KOLEJ ANTARABANGSA TEKNOLOGI DAN
                  PROFESSIONAL</option>
                <option value="KOLEJ ANTARABANGSA TEKNOLOGI DAN PROFESSIONAL, PERLIS">KOLEJ ANTARABANGSA TEKNOLOGI DAN
                  PROFESSIONAL, PERLIS</option>
                <option value="KOLEJ ANTARABANGSA TEKNOLOGI INOVASI MUTIARA">KOLEJ ANTARABANGSA TEKNOLOGI INOVASI
                  MUTIARA</option>
                <option value="KOLEJ ANTARABANGSA TEKNOLOGI LANJUTAN SARAWAK (iCATS) CAWANGAN MIRI">KOLEJ ANTARABANGSA
                  TEKNOLOGI LANJUTAN SARAWAK (iCATS) CAWANGAN MIRI</option>
                <option
                  value="KOLEJ ANTARABANGSA TEKNOLOGI LANJUTAN SARAWAK/INT. COLLEGE OF ADV. AND TECH. SARAWAK (ICATS)">
                  KOLEJ ANTARABANGSA TEKNOLOGI LANJUTAN SARAWAK/INT. COLLEGE OF ADV. AND TECH. SARAWAK (ICATS)</option>
                <option value="KOLEJ ANTARABANGSA TEKNOLOGI SPEKTRUM">KOLEJ ANTARABANGSA TEKNOLOGI SPEKTRUM</option>
                <option value="KOLEJ ANTARABANGSA TERBUKA">KOLEJ ANTARABANGSA TERBUKA</option>
                <option value="KOLEJ ANTARABANGSA TRAVEX">KOLEJ ANTARABANGSA TRAVEX</option>
                <option value="KOLEJ ANTARABANGSA UNIFIELD">KOLEJ ANTARABANGSA UNIFIELD</option>
                <option value="KOLEJ ANTARABANGSA VICTORIA/KOLEJ JENEVA">KOLEJ ANTARABANGSA VICTORIA/KOLEJ JENEVA
                </option>
                <option value="KOLEJ ANTARABANGSA WESTMINISTER">KOLEJ ANTARABANGSA WESTMINISTER</option>
                <option value="KOLEJ ANTARABANGSA WINDFIELD">KOLEJ ANTARABANGSA WINDFIELD</option>
                <option value="KOLEJ ANTARABANGSA YAYASAN MELAKA">KOLEJ ANTARABANGSA YAYASAN MELAKA</option>
                <option value="KOLEJ ANTARABANGSA ASA, RAWANG">KOLEJ ANTARABANGSA ASA, RAWANG </option>
                <option value="KOLEJ ASIA METROPOLITAN KOTA KINABALU">KOLEJ ASIA METROPOLITAN KOTA KINABALU</option>
                <option value="KOLEJ ASIA METROPOLITAN KUCHING">KOLEJ ASIA METROPOLITAN KUCHING</option>
                <option value="KOLEJ ASTIN">KOLEJ ASTIN</option>
                <option value="KOLEJ BANDAR">KOLEJ BANDAR</option>
                <option value="KOLEJ BANDAR UTAMA, PETALING JAYA">KOLEJ BANDAR UTAMA, PETALING JAYA</option>
                <option value="KOLEJ BERSATU SARAWAK">KOLEJ BERSATU SARAWAK</option>
                <option value="KOLEJ BERSEPADU SAINS KESIHATAN NASIONAL">KOLEJ BERSEPADU SAINS KESIHATAN NASIONAL
                </option>
                <option value="KOLEJ BINARY, KUALA LUMPUR">KOLEJ BINARY, KUALA LUMPUR</option>
                <option value="KOLEJ BOSTONWEB, JALAN SULTAN ISMAIL, KUALA LUMPUR">KOLEJ BOSTONWEB, JALAN SULTAN ISMAIL,
                  KUALA LUMPUR</option>
                <option value="KOLEJ BRICKFIELDS ASIA">KOLEJ BRICKFIELDS ASIA</option>
                <option value="KOLEJ CHERMAI JAYA, KUCHING SARAWAK">KOLEJ CHERMAI JAYA, KUCHING SARAWAK</option>
                <option value="KOLEJ DAMANSARA UTAMA">KOLEJ DAMANSARA UTAMA</option>
                <option value="KOLEJ DAR AL-HIKMAH, KAJANG, SELANGOR">KOLEJ DAR AL-HIKMAH, KAJANG, SELANGOR</option>
                <option value="KOLEJ DESPARK">KOLEJ DESPARK </option>
                <option value="KOLEJ DIKA">KOLEJ DIKA </option>
                <option value="KOLEJ DISTED">KOLEJ DISTED</option>
                <option value="KOLEJ DISTED - STANDFORD">KOLEJ DISTED - STANDFORD</option>
                <option value="KOLEJ EASTERN">KOLEJ EASTERN</option>
                <option value="KOLEJ ERICAN">KOLEJ ERICAN</option>
                <option value="KOLEJ FELCRA">KOLEJ FELCRA </option>
                <option value="KOLEJ GEMILANG">KOLEJ GEMILANG</option>
                <option value="KOLEJ GLOBAL MASTERSKILL">KOLEJ GLOBAL MASTERSKILL</option>
                <option value="KOLEJ HAFIZ">KOLEJ HAFIZ</option>
                <option value="KOLEJ I-SYSTEMS">KOLEJ I-SYSTEMS</option>
                <option value="KOLEJ IACT (PENGIKLANAN, KOMUNIKASI DAN TEKNOLOGI ANTARABANGSA)">KOLEJ IACT (PENGIKLANAN,
                  KOMUNIKASI DAN TEKNOLOGI ANTARABANGSA)</option>
                <option value="KOLEJ IBS, MIRI, SARAWAK">KOLEJ IBS, MIRI, SARAWAK</option>
                <option value="KOLEJ IBUKOTA KINABALU">KOLEJ IBUKOTA KINABALU</option>
                <option value="KOLEJ ICAN">KOLEJ ICAN</option>
                <option value="KOLEJ ICOOP">KOLEJ ICOOP</option>
                <option value="KOLEJ IJN">KOLEJ IJN</option>
                <option value="KOLEJ IKIP">KOLEJ IKIP </option>
                <option value="KOLEJ IMPERIA (KOLEJ HOSPITALITI IMPERIA)">KOLEJ IMPERIA (KOLEJ HOSPITALITI IMPERIA)
                </option>
                <option value="KOLEJ INFORMASI TEKNOLOGI COSMOSPECT">KOLEJ INFORMASI TEKNOLOGI COSMOSPECT</option>
                <option value="KOLEJ INFORMATICS, MALAYSIA">KOLEJ INFORMATICS, MALAYSIA</option>
                <option value="KOLEJ INTEGRASI KEJURURAWATAN DAN KESIHATAN BERSEKUTU">KOLEJ INTEGRASI KEJURURAWATAN DAN
                  KESIHATAN BERSEKUTU</option>
                <option value="KOLEJ INTERNATIONAL CRESCENDO">KOLEJ INTERNATIONAL CRESCENDO</option>
                <option value="KOLEJ INTI ANTARABANGSA KUALA LUMPUR">KOLEJ INTI ANTARABANGSA KUALA LUMPUR</option>
                <option value="KOLEJ INTI ANTARABANGSA PULAU PINANG">KOLEJ INTI ANTARABANGSA PULAU PINANG</option>
                <option value="KOLEJ INTI CAWANGAN SARAWAK, KUCHING">KOLEJ INTI CAWANGAN SARAWAK, KUCHING</option>
                <option value="KOLEJ INTI MALAYSIA">KOLEJ INTI MALAYSIA</option>
                <option value="KOLEJ INTI NILAI">KOLEJ INTI NILAI</option>
                <option value="KOLEJ INTI SABAH">KOLEJ INTI SABAH </option>
                <option value="KOLEJ INTI, BANDAR BARU, SARAWAK">KOLEJ INTI, BANDAR BARU, SARAWAK</option>
                <option value="KOLEJ INTI, SUBANG JAYA">KOLEJ INTI, SUBANG JAYA </option>
                <option value="KOLEJ ISLAM">KOLEJ ISLAM </option>
                <option value="KOLEJ ISLAM ANTARABANGSA SULTAN ISMAIL PETRA (KIAS)">KOLEJ ISLAM ANTARABANGSA SULTAN
                  ISMAIL PETRA (KIAS)</option>
                <option value="KOLEJ ISLAM ANTARABANGSA, KUALA LUMPUR">KOLEJ ISLAM ANTARABANGSA, KUALA LUMPUR</option>
                <option value="KOLEJ ISLAM JOHOR">KOLEJ ISLAM JOHOR </option>
                <option value="KOLEJ ISLAM SAINS DAN TEKNOLOGI CAWANGAN TERENGGANU, TERENGGANU">KOLEJ ISLAM SAINS DAN
                  TEKNOLOGI CAWANGAN TERENGGANU, TERENGGANU</option>
                <option value="KOLEJ ISLAM SAINS DAN TEKNOLOGI, BACHOK">KOLEJ ISLAM SAINS DAN TEKNOLOGI, BACHOK</option>
                <option value="KOLEJ ISLAM TEKNOLOGI ANTARABANGSA (KITAB) PULAU PINANG">KOLEJ ISLAM TEKNOLOGI
                  ANTARABANGSA (KITAB) PULAU PINANG</option>
                <option value="KOLEJ ISLAM, MELAKA">KOLEJ ISLAM, MELAKA</option>
                <option value="KOLEJ ITA, SIBU, SARAWAK">KOLEJ ITA, SIBU, SARAWAK</option>
                <option value="KOLEJ ITJ, KUALA LUMPUR">KOLEJ ITJ, KUALA LUMPUR</option>
                <option value="KOLEJ JAMIAH ISLAMIAH PUTRA (KOLEJ JAIPUTRA) / KOLEJ UNITI KOTA BHARU">KOLEJ JAMIAH
                  ISLAMIAH PUTRA (KOLEJ JAIPUTRA) / KOLEJ UNITI KOTA BHARU</option>
                <option value="KOLEJ JAMIAH ISLAMIAH SUTAN ISMAIL PETRA">KOLEJ JAMIAH ISLAMIAH SUTAN ISMAIL PETRA
                </option>
                <option value="KOLEJ JESSELTON">KOLEJ JESSELTON</option>
                <option value="Kolej Jururawat Masyarakat Batu Pahat">Kolej Jururawat Masyarakat Batu Pahat</option>
                <option value="KOLEJ JURURAWAT MASYARAKAT PORT DICKSON">KOLEJ JURURAWAT MASYARAKAT PORT DICKSON</option>
                <option value="KOLEJ JURURAWAT MASYARAKAT SERIAN, SARAWAK">KOLEJ JURURAWAT MASYARAKAT SERIAN, SARAWAK
                </option>
                <option value="KOLEJ KAMUNTING">KOLEJ KAMUNTING</option>
                <option value="KOLEJ KARISMA, SEREMBAN">KOLEJ KARISMA, SEREMBAN</option>
                <option value="KOLEJ KBU INTERAUTIOL">KOLEJ KBU INTERAUTIOL</option>
                <option value="KOLEJ KDU PETALING JAY">KOLEJ KDU PETALING JAYA</option>
                <option value="KOLEJ KEJURURAWATAN DAN KESIHATAN MASTERSKILL">KOLEJ KEJURURAWATAN DAN KESIHATAN
                  MASTERSKILL</option>
                <option value="KOLEJ KEJURURAWATAN DAN SAINS KESIHATAN BERJAYA">KOLEJ KEJURURAWATAN DAN SAINS KESIHATAN
                  BERJAYA</option>
                <option value="KOLEJ KEJURURAWATAN DAN SAINS KESIHATAN NILAM, MELAKA">KOLEJ KEJURURAWATAN DAN SAINS
                  KESIHATAN NILAM, MELAKA</option>
                <option value="KOLEJ KEJURURAWATAN DAN SAINS KESIHATAN PERAK">KOLEJ KEJURURAWATAN DAN SAINS KESIHATAN
                  PERAK</option>
                <option value="KOLEJ KEJURURAWATAN DAN SAINS KESIHATAN SERI MANJUNG">KOLEJ KEJURURAWATAN DAN SAINS
                  KESIHATAN SERI MANJUNG</option>
                <option value="KOLEJ KEJURURAWATAN HOSP ADVENTIST PP">KOLEJ KEJURURAWATAN HOSP ADVENTIST PP</option>
                <option value="KOLEJ KEJURURAWATAN HOSP LAM WAH EE, PP">KOLEJ KEJURURAWATAN HOSP LAM WAH EE, PP</option>
                <option value="KOLEJ KEJURURAWATAN KKM">KOLEJ KEJURURAWATAN KKM</option>
                <option value="KOLEJ KEJURURAWATAN PANTAI / KOLEJ PERUBATAN ANTARABANGSA">KOLEJ KEJURURAWATAN PANTAI /
                  KOLEJ PERUBATAN ANTARABANGSA</option>
                <option value="KOLEJ KEJURURAWATAN PUTERI">KOLEJ KEJURURAWATAN PUTERI</option>
                <option value="KOLEJ KEJURURAWATAN TUN TAN CHENG LOCK">KOLEJ KEJURURAWATAN TUN TAN CHENG LOCK</option>
                <option value="KOLEJ KEJURUTERAAN DAN SAINS KESIHATAN, NILAM">KOLEJ KEJURUTERAAN DAN SAINS KESIHATAN,
                  NILAM</option>
                <option value="KOLEJ KEMAHIRAN MINDA ISBAUK">KOLEJ KEMAHIRAN MINDA ISBAUK</option>
                <option value="KOLEJ KEMAHIRAN TINGGI MARA">KOLEJ KEMAHIRAN TINGGI MARA</option>
                <option value="KOLEJ KEMENTERIAN KESIHATAN MALAYSIA">KOLEJ KEMENTERIAN KESIHATAN MALAYSIA</option>
                <option value="KOLEJ KEMUNTING">KOLEJ KEMUNTING</option>
                <option value="KOLEJ KERIS, IPOH">KOLEJ KERIS, IPOH</option>
                <option value="KOLEJ KESIHATAN AWAM KUCHING, SARAWAK">KOLEJ KESIHATAN AWAM KUCHING, SARAWAK</option>
                <option value="KOLEJ KETENGAH">KOLEJ KETENGAH</option>
                <option value="KOLEJ KIARA, KOTA KINABALU, SABAH">KOLEJ KIARA, KOTA KINABALU, SABAH</option>
                <option value="KOLEJ KOMUNITI, MALAYSIA">KOLEJ KOMUNITI, MALAYSIA</option>
                <option value="KOLEJ LAGENDA">KOLEJ LAGENDA</option>
                <option value="KOLEJ LAILA TAIB">KOLEJ LAILA TAIB</option>
                <option value="KOLEJ LIFE">KOLEJ LIFE</option>
                <option value="KOLEJ LINCOLN/KOLEJ UNIVERSITI LINCOLN">KOLEJ LINCOLN/KOLEJ UNIVERSITI LINCOLN</option>
                <option value="KOLEJ MANTISSA">KOLEJ MANTISSA</option>
                <option value="KOLEJ MARA BANTING">KOLEJ MARA BANTING</option>
                <option value="KOLEJ MASA, PUCHONG, SELANGOR">KOLEJ MASA, PUCHONG, SELANGOR</option>
                <option value="KOLEJ MASTERSKILL">KOLEJ MASTERSKILL</option>
                <option value="KOLEJ MAXWELL, IPOH, PERAK">KOLEJ MAXWELL, IPOH, PERAK</option>
                <option value="KOLEJ MCS">KOLEJ MCS</option>
                <option value="KOLEJ MDIS MALAYSIA">KOLEJ MDIS MALAYSIA</option>
                <option value="KOLEJ MEGATECH">KOLEJ MEGATECH</option>
                <option value="KOLEJ METROPOINT">KOLEJ METROPOINT</option>
                <option value="KOLEJ METROPOLITAN">KOLEJ METROPOLITAN</option>
                <option value="KOLEJ MONT ROYALE">KOLEJ MONT ROYALE</option>
                <option value="KOLEJ MULTIMEDIAKOLEJ MULTIMEDIA">KOLEJ MULTIMEDIA</option>
                <option value="KOLEJ MULTIMEDIA IN-HOUSE (IHM), JALAN RAJA CHULAN, KUALA LUMPUR">KOLEJ MULTIMEDIA
                  IN-HOUSE (IHM), JALAN RAJA CHULAN, KUALA LUMPUR</option>
                <option value="KOLEJ MUTIARA">KOLEJ MUTIARA</option>
                <option value="KOLEJ NEGERI KAMPUS CHEDANG">KOLEJ NEGERI KAMPUS CHEDANG</option>
                <option value="KOLEJ NEWTON, KUALA LUMPUR">KOLEJ NEWTON, KUALA LUMPUR</option>
                <option value="KOLEJ NILAI, BANDAR BARU NILAI, NILAI">KOLEJ NILAI, BANDAR BARU NILAI, NILAI</option>
                <option value="KOLEJ NIRWANA">KOLEJ NIRWANA</option>
                <option value="KOLEJ OASIS">KOLEJ OASIS</option>
                <option value="KOLEJ OLYMPIA">KOLEJ OLYMPIA</option>
                <option value="KOLEJ OPTIMA">KOLEJ OPTIMA</option>
                <option value="KOLEJ OTOMOTIF TOC, PETALING JAYA<">KOLEJ OTOMOTIF TOC, PETALING JAYA</option>
                <option value="KOLEJ PACIFIC KUANTAN, PAHANG">KOLEJ PACIFIC KUANTAN, PAHANG</option>
                <option value="KOLEJ PEMBANTU PERUBATAN ALOR SETAR">KOLEJ PEMBANTU PERUBATAN ALOR SETAR</option>
                <option value="KOLEJ PEMBANTU PERUBATAN SEREMBAN">KOLEJ PEMBANTU PERUBATAN SEREMBAN</option>
                <option value="KOLEJ PEMBANTU PERUBATAN, HOSPITAL BAHAGIA, ULU KINTA">KOLEJ PEMBANTU PERUBATAN, HOSPITAL
                  BAHAGIA, ULU KINTA</option>
                <option value="KOLEJ PENDIDIKAN PERDANA">KOLEJ PENDIDIKAN PERDANA</option>
                <option
                  value="KOLEJ PENDIDIKAN PERDANA (KOPEDA) & PUSAT LUAR KOPEDA (KUCHING, SARAWAK DAN KOTA KINABALU, SABAH)">
                  KOLEJ PENDIDIKAN PERDANA (KOPEDA) & PUSAT LUAR KOPEDA (KUCHING, SARAWAK DAN KOTA KINABALU, SABAH)
                </option>
                <option value="KOLEJ PENERBANGAN ADMAL">KOLEJ PENERBANGAN ADMAL</option>
                <option value="KOLEJ PENGAJIAN ISLAM JOHOR (MARSAH)">KOLEJ PENGAJIAN ISLAM JOHOR (MARSAH)</option>
                <option value="KOLEJ PENGAJIAN SISWAZAH SEGi">KOLEJ PENGAJIAN SISWAZAH SEGi</option>
                <option value="KOLEJ PENGAJIAN TINGGI ATC JALAN PETALING, KUALA LUMPUR">KOLEJ PENGAJIAN TINGGI ATC JALAN
                  PETALING, KUALA LUMPUR</option>
                <option value="KOLEJ PENGAJIAN TINGGI RAFFLES">KOLEJ PENGAJIAN TINGGI RAFFLES</option>
                <option value="KOLEJ PENGURUSAN DAN SAINS MELAKA">KOLEJ PENGURUSAN DAN SAINS MELAKA</option>
                <option value="KOLEJ PENGURUSAN PENERBANGAN">KOLEJ PENGURUSAN PENERBANGAN</option>
                <option value="KOLEJ PENGURUSAN PERNIAGAAN KOTARAYA">KOLEJ PENGURUSAN PERNIAGAAN KOTARAYA</option>
                <option value="KOLEJ PERGIGIAN ANTARABANGSA PULAU PINANG">KOLEJ PERGIGIAN ANTARABANGSA PULAU PINANG
                </option>
                <option value="KOLEJ PERKEMBANGAN AWAL KANAK-KANAK">KOLEJ PERKEMBANGAN AWAL KANAK-KANAK</option>
                <option value="KOLEJ PERTANIAN MALAYSIA">KOLEJ PERTANIAN MALAYSIA</option>
                <option value="KOLEJ PERUBATAN DIRAJA PERAK, IPOH PERAK">KOLEJ PERUBATAN DIRAJA PERAK, IPOH PERAK
                </option>
                <option value="KOLEJ PERUBATAN PULAU PINANG">KOLEJ PERUBATAN PULAU PINANG</option>
                <option value="KOLEJ POINT, PETALING JAYA">KOLEJ POINT, PETALING JAYA</option>
                <option value="KOLEJ POLY-TECH MARA/ KOLEJ YAYASAN PELAJARAN MARA">KOLEJ POLY-TECH MARA/ KOLEJ YAYASAN
                  PELAJARAN MARA</option>
                <option value="KOLEJ PREMIER">KOLEJ PREMIER</option>
                <option value="KOLEJ PRESIDEN">KOLEJ PRESIDEN</option>
                <option value="KOLEJ PRIME BUKIT MERTAJAM, PULAU PINANG">KOLEJ PRIME BUKIT MERTAJAM, PULAU PINANG
                </option>
                <option value="KOLEJ PROFESIONAL MARA">KOLEJ PROFESIONAL MARA</option>
                <option value="KOLEJ PROFESSIONAL DAN PENGURUSAN KLIA">KOLEJ PROFESSIONAL DAN PENGURUSAN KLIA</option>
                <option value="KOLEJ PSDC KUANTAN PAHANG">KOLEJ PSDC KUANTAN PAHANG</option>
                <option value="KOLEJ PUTRA INTELEK">KOLEJ PUTRA INTELEK</option>
                <option value="KOLEJ QUEENS">KOLEJ QUEENS</option>
                <option value="KOLEJ REACH, BANDAR MANJALARA, KUALA LUMPUR">KOLEJ REACH, BANDAR MANJALARA, KUALA LUMPUR
                </option>
                <option value="KOLEJ REGENT (KOLEJ CYBER PUTRA)">KOLEJ REGENT (KOLEJ CYBER PUTRA)</option>
                <option value="KOLEJ RELIANCE">KOLEJ RELIANCE</option>
                <option value="KOLEJ RENAISSANCE">KOLEJ RENAISSANCE</option>
                <option value="KOLEJ RESTU">KOLEJ RESTU</option>
                <option value="KOLEJ SAINS BERSEKUTU SUNGAI BULOH, SELANGOR">KOLEJ SAINS BERSEKUTU SUNGAI BULOH,
                  SELANGOR</option>
                <option value="KOLEJ SAINS GEOSPATIAL DAN TEKNOLOGI">KOLEJ SAINS GEOSPATIAL DAN TEKNOLOGI</option>
                <option value="KOLEJ SAINS KESIHATAN BERSEKUTU (KSKB)">KOLEJ SAINS KESIHATAN BERSEKUTU (KSKB)</option>
                <option value="KOLEJ SAINS KESIHATAN BERSEKUTU (KSKB), KUCHING, SARAWAK">KOLEJ SAINS KESIHATAN BERSEKUTU
                  (KSKB), KUCHING, SARAWAK</option>
                <option value="KOLEJ SAINS PERUBATAN ANTARABANGSA PUSRAWI (PICOMS)">KOLEJ SAINS PERUBATAN ANTARABANGSA
                  PUSRAWI (PICOMS)</option>
                <option value="KOLEJ SAITO, PETALING JAYA">KOLEJ SAITO, PETALING JAYA</option>
                <option value="KOLEJ SATT, KUCHING, SARAWAK">KOLEJ SATT, KUCHING, SARAWAK</option>
                <option value="KOLEJ SEDAMAI">KOLEJ SEDAMAI</option>
                <option value="KOLEJ SELATAN, SKUDAI JOHOR">KOLEJ SELATAN, SKUDAI JOHOR</option>
                <option value="KOLEJ SENI DAN TEKNOLOGI HELP/ UNIVERSITI HELP/ AKADEMI HELP">KOLEJ SENI DAN TEKNOLOGI
                  HELP/ UNIVERSITI HELP/ AKADEMI HELP</option>
                <option value="KOLEJ SENTRAL">KOLEJ SENTRAL</option>
                <option value="KOLEJ SIDMA">KOLEJ SIDMA</option>
                <option value="KOLEJ SINAR / NEWBRIDGE COLLEGE">KOLEJ SINAR / NEWBRIDGE COLLEGE</option>
                <option value="KOLEJ SMART, KUALA LUMPUR">KOLEJ SMART, KUALA LUMPUR</option>
                <option value="KOLEJ SPACE">KOLEJ SPACE</option>
                <option value="KOLEJ SRI">KOLEJ SRI</option>
                <option value="KOLEJ SRI AYU">KOLEJ SRI AYU</option>
                <option value="KOLEJ STAMFORD">KOLEJ STAMFORD</option>
                <option value="KOLEJ SUNWAY">KOLEJ SUNWAY</option>
                <option value="KOLEJ SURYA">KOLEJ SURYA</option>
                <option value="KOLEJ SYSTEMATIK, PETALING JAYA">KOLEJ SYSTEMATIK, PETALING JAYA</option>
                <option value="KOLEJ TAFE SEREMBAN">KOLEJ TAFE SEREMBAN</option>
                <option value="KOLEJ TECHNOLOGY PARK MALAYSIA">KOLEJ TECHNOLOGY PARK MALAYSIA</option>
                <option value="KOLEJ TEKNIKAL YAYASAN SABAH">KOLEJ TEKNIKAL YAYASAN SABAH</option>
                <option value="KOLEJ TEKNOLOGI A.N.S">KOLEJ TEKNOLOGI A.N.S</option>
                <option value="KOLEJ TEKNOLOGI ANTARABANGSA COSMOPOINT">KOLEJ TEKNOLOGI ANTARABANGSA COSMOPOINT</option>
                <option value="KOLEJ TEKNOLOGI ANTARABANGSA CYBERNETICS">KOLEJ TEKNOLOGI ANTARABANGSA CYBERNETICS
                </option>
                <option value="KOLEJ TEKNOLOGI CYBERNETICS">KOLEJ TEKNOLOGI CYBERNETICS</option>
                <option value="KOLEJ TEKNOLOGI DAN INOVASI KRIM, KUALA TERENGGANU">KOLEJ TEKNOLOGI DAN INOVASI KRIM,
                  KUALA TERENGGANU</option>
                <option value="KOLEJ TEKNOLOGI DAN PENGURUSAN BOSTONWEB">KOLEJ TEKNOLOGI DAN PENGURUSAN BOSTONWEB
                </option>
                <option value="KOLEJ TEKNOLOGI DARUL NAIM">KOLEJ TEKNOLOGI DARUL NAIM</option>
                <option value="KOLEJ TEKNOLOGI ISLAM MELAKA">KOLEJ TEKNOLOGI ISLAM MELAKA</option>
                <option value="KOLEJ TEKNOLOGI MEA, KAJANG SELANGOR">KOLEJ TEKNOLOGI MEA, KAJANG SELANGOR</option>
                <option value="KOLEJ TEKNOLOGI MULIA">KOLEJ TEKNOLOGI MULIA</option>
                <option value="KOLEJ TEKNOLOGI PULAU, BALIK PULAU, P.P.">KOLEJ TEKNOLOGI PULAU, BALIK PULAU, P.P.
                </option>
                <option value="KOLEJ TEKNOLOGI SARAWAK">KOLEJ TEKNOLOGI SARAWAK</option>
                <option value="KOLEJ TEKNOLOGI SEGi">KOLEJ TEKNOLOGI SEGi</option>
                <option value="KOLEJ TEKNOLOGI SENTRAL PULAU PINANG">KOLEJ TEKNOLOGI SENTRAL PULAU PINANG</option>
                <option value="KOLEJ TEKNOLOGI TIMUR">KOLEJ TEKNOLOGI TIMUR</option>
                <option value="KOLEJ TEKNOLOGI YPC - ITWEB">KOLEJ TEKNOLOGI YPC - ITWEB</option>
                <option value="KOLEJ TESDEC">KOLEJ TESDEC</option>
                <option value="KOLEJ TUNKU ABDUL RAHMAN (KTAR)">KOLEJ TUNKU ABDUL RAHMAN (KTAR)</option>
                <option value="KOLEJ UGAMA SULTAN ZAINAL ABIDIN (KUSZA) KT/UNIVERSITI SULTAN ZAINAL ABIDIN (UniSZA)">
                  KOLEJ UGAMA SULTAN ZAINAL ABIDIN (KUSZA) KT/UNIVERSITI SULTAN ZAINAL ABIDIN (UniSZA)</option>
                <option value="KOLEJ UNIKOP">KOLEJ UNIKOP</option>
                <option value="KOLEJ UNITI">KOLEJ UNITI</option>
                <option value="KOLEJ UNIVERSITI AGROSAINS MALAYSIA (KOLEJ RISDA)">KOLEJ UNIVERSITI AGROSAINS MALAYSIA
                  (KOLEJ RISDA)</option>
                <option value="KOLEJ UNIVERSITI ANTARABANGSA KEJURURAWATAN DAN SAINS KESIHATAN KPJ (KPJIUC)">KOLEJ
                  UNIVERSITI ANTARABANGSA KEJURURAWATAN DAN SAINS KESIHATAN KPJ (KPJIUC)</option>
                <option value="KOLEJ UNIVERSITI BERJAYA, KUALA LUMPUR">KOLEJ UNIVERSITI BERJAYA, KUALA LUMPUR</option>
                <option value="KOLEJ UNIVERSITI BESTARI">KOLEJ UNIVERSITI BESTARI></option>
                <option value="KOLEJ UNIVERSITI BORNEO UTARA (KUBU)">KOLEJ UNIVERSITI BORNEO UTARA (KUBU)</option>
                <option value="KOLEJ UNIVERSITI ISLAM ANTARABANGSA SELANGOR">KOLEJ UNIVERSITI ISLAM ANTARABANGSA
                  SELANGOR</option>
                <option value="KOLEJ UNIVERSITI ISLAM MELAKA (KUIM)">KOLEJ UNIVERSITI ISLAM MELAKA (KUIM)</option>
                <option value="KOLEJ UNIVERSITI ISLAM PAHANG SULTAN AHMAD SHAH">KOLEJ UNIVERSITI ISLAM PAHANG SULTAN
                  AHMAD SHAH</option>
                <option value="KOLEJ UNIVERSITI ISLAM PERLIS">KOLEJ UNIVERSITI ISLAM PERLIS</option>
                <option value="KOLEJ UNIVERSITI ISLAM SULTAN AZLAN SHAH (KUISAS), KUALA KANGSAR">KOLEJ UNIVERSITI ISLAM
                  SULTAN AZLAN SHAH (KUISAS), KUALA KANGSAR</option>
                <option value="KOLEJ UNIVERSITI KDU">KOLEJ UNIVERSITI KDU</option>
                <option value="KOLEJ UNIVERSITI KEJURUTERAAN & TEKNOLOGI M'SIA">KOLEJ UNIVERSITI KEJURUTERAAN &
                  TEKNOLOGI M'SIA</option>
                <option value="KOLEJ UNIVERSITI KOMUNIKASI HAN CHIANG, PULAU PINANG">KOLEJ UNIVERSITI KOMUNIKASI HAN
                  CHIANG, PULAU PINANG</option>
                <option value="KOLEJ UNIVERSITI LINTON">KOLEJ UNIVERSITI LINTON</option>
                <option value="KOLEJ UNIVERSITI METROPOLITAN, K.L">KOLEJ UNIVERSITI METROPOLITAN, K.L</option>
                <option value="KOLEJ UNIVERSITI NEW ERA, KAJANG">KOLEJ UNIVERSITI NEW ERA, KAJANG</option>
                <option value="KOLEJ UNIVERSITI NILAI">KOLEJ UNIVERSITI NILAI</option>
                <option value="KOLEJ UNIVERSITI SAINS PERUBATAN CYBERJAYA">KOLEJ UNIVERSITI SAINS PERUBATAN CYBERJAYA
                </option>
                <option value="KOLEJ UNIVERSITI SELATA">KOLEJ UNIVERSITI SELATAN</option>
                <option value="KOLEJ UNIVERSITI TATI">KOLEJ UNIVERSITI TATI</option>
                <option value="KOLEJ UNIVERSITI TEKNOLOGI ANTARABANGSA TWINTECH, DAMANSARA">KOLEJ UNIVERSITI TEKNOLOGI
                  ANTARABANGSA TWINTECH, DAMANSARA</option>
                <option value="KOLEJ UNIVERSITI TEKNOLOGI SARAWAK, SARAWAK">KOLEJ UNIVERSITI TEKNOLOGI SARAWAK, SARAWAK
                </option>
                <option value="KOLEJ UNIVERSITI VERITAS">KOLEJ UNIVERSITI VERITAS</option>
                <option value="KOLEJ UNIVERSITI WIDAD">KOLEJ UNIVERSITI WIDAD</option>
                <option value="KOLEJ UNIVERSITI YAYASAN PAHANG">KOLEJ UNIVERSITI YAYASAN PAHANG</option>
                <option value="KOLEJ VETA">KOLEJ VETA</option>
                <option value="KOLEJ VISION">KOLEJ VISION</option>
                <option value="KOLEJ VOKASIONAL MALAYSIA">KOLEJ VOKASIONAL MALAYSIA</option>
                <option value="KOLEJ WIDAD">KOLEJ WIDAD</option>
                <option value="KOLEJ WIM">KOLEJ WIM</option>
                <option value="KOLEJ WIT, PELABUHAN KLANG, SELANGOR">KOLEJ WIT, PELABUHAN KLANG, SELANGOR</option>
                <option value="KOLEJ YAYASAN MELAKA">KOLEJ YAYASAN MELAKA</option>
                <option value="KOLEJ YAYASAN PELAJARAN JOHOR">KOLEJ YAYASAN PELAJARAN JOHOR</option>
                <option value="KOLEJ YAYASAN SAL ITMATICS, PULAU PINANG">KOLEJ YAYASAN SAL ITMATICS, PULAU PINANG
                </option>
                <option value="KOLEJ YAYASAN TERENGGANU">KOLEJ YAYASAN TERENGGANU</option>
                <option value="KOLEJ YAYASAN UEM">KOLEJ YAYASAN UEM</option>
                <option value="KUALA LUMPUR INFRASTRUCTURE UNIVERSITY COLLEGE (KLIUC)/KOLEJ IKRAM, KAJANG">KUALA LUMPUR
                  INFRASTRUCTURE UNIVERSITY COLLEGE (KLIUC)/KOLEJ IKRAM, KAJANG</option>
                <option value="L & G TWINTECH INSTITUTE OF TECHNOLOGY">L & G TWINTECH INSTITUTE OF TECHNOLOGY</option>
                <option value="LIMKOKWING EXECUTIVE LEADERSHIP COLLEGE">LIMKOKWING EXECUTIVE LEADERSHIP COLLEGE</option>
                <option value="MAHKOTA MEDICAL CENTRE MELAKA">MAHKOTA MEDICAL CENTRE MELAKA</option>
                <option value="MAIZURU NATIONAL COLLEGE OF TECHNOLOGY, JAPAN">MAIZURU NATIONAL COLLEGE OF TECHNOLOGY,
                  JAPAN</option>
                <option value="MAJLIS LATIHAN VOKASIONAL KEBANGSAAN MALAYSIA">MAJLIS LATIHAN VOKASIONAL KEBANGSAAN
                  MALAYSIA</option>
                <option value="MAKTAB KOPERASI MALAYSIA">MAKTAB KOPERASI MALAYSIA</option>
                <option value="MAKTAB PERGURUAN MALAYSIA">MAKTAB PERGURUAN MALAYSIA</option>
                <option value="MALAYSIA ALLIED HEALTH SCIENCES ACADEMY (MAHSA)">MALAYSIA ALLIED HEALTH SCIENCES ACADEMY
                  (MAHSA)</option>
                <option value="MALAYSIAN COLLEGE OF HOSPITALITY AND MANAGEMENT/ KFCH INTERNATIONAL COLLEGE, JOHOR">
                  MALAYSIAN COLLEGE OF HOSPITALITY AND MANAGEMENT/ KFCH INTERNATIONAL COLLEGE, JOHOR</option>
                <option value="MANAGEMENT AND SCIENCE UNIVERSITY (MSU)">MANAGEMENT AND SCIENCE UNIVERSITY (MSU)</option>
                <option value="MARA-JAPAN INDUSTRIAL INSTITUTE (MJII)">MARA-JAPAN INDUSTRIAL INSTITUTE (MJII)</option>
                <option value="MASTERSKILL(M) SDN BHD KUALA LUMPUR">MASTERSKILL(M) SDN BHD KUALA LUMPUR</option>
                <option value="MELAKA - MANIPAL MEDICAL COLLEGE, MALAYSIA">MELAKA - MANIPAL MEDICAL COLLEGE, MALAYSIA
                </option>
                <option value="MURNI NURSING COLLEGE/KOLEJ KEJURURAWATAN MURNI">MURNI NURSING COLLEGE/KOLEJ
                  KEJURURAWATAN MURNI</option>
                <option value="NETHERLANDS MARITIME INSTITUTE OF TECHNOLOGY (NMIT)">NETHERLANDS MARITIME INSTITUTE OF
                  TECHNOLOGY (NMIT)</option>
                <option value="NEWCASTLE UNIVERSITY MEDICINE MALAYSIA (NUMED)">NEWCASTLE UNIVERSITY MEDICINE MALAYSIA
                  (NUMED)</option>
                <option value="NILAI INTERNATIONAL COLLEGE">NILAI INTERNATIONAL COLLEGE</option>
                <option value="ORMAH MEDICAL SPECIALIST CENTRE, SWK">NORMAH MEDICAL SPECIALIST CENTRE, SWK</option>
                <option value="PENANG INTERNATIONAL DENTAL COLLEGE, MALAYSIA">PENANG INTERNATIONAL DENTAL COLLEGE,
                  MALAYSIA</option>
                <option value="PENANG MEDICAL COLLEGE, MALAYSIA">PENANG MEDICAL COLLEGE, MALAYSIA</option>
                <option value="PERDANA UNIVERSITY">PERDANA UNIVERSITY</option>
                <option value="PJ COLLEGE OF ART AND DESIGN">PJ COLLEGE OF ART AND DESIGN</option>
                <option value="POLITEKNIK MALAYSIA">POLITEKNIK MALAYSIA</option>
                <option value="POLITEKNIK METRO BETONG">POLITEKNIK METRO BETONG</option>
                <option value="POLITEKNIK METRO JOHOR BAHRU">POLITEKNIK METRO JOHOR BAHRU</option>
                <option value="POLITEKNIK METRO TASEK GELUGOR">POLITEKNIK METRO TASEK GELUGOR</option>
                <option value="PUSAT LATIHAN PENGAJAR DAN KEMAHIRAN LANJUTAN (CIAST)">PUSAT LATIHAN PENGAJAR DAN
                  KEMAHIRAN LANJUTAN (CIAST)</option>
                <option value="PUSAT LATIHAN TEKNOLOGI TINGGI (ADTEC)">PUSAT LATIHAN TEKNOLOGI TINGGI (ADTEC)</option>
                <option value="PUSAT PEMBANGUNAN KEMAHIRAN NEGERI TERENGGANU (TESDEC">PUSAT PEMBANGUNAN KEMAHIRAN NEGERI
                  TERENGGANU (TESDEC)</option>
                <option value="PUSAT PEMBANGUNAN KEMAHIRAN PAHANG">PUSAT PEMBANGUNAN KEMAHIRAN PAHANG</option>
                <option value="PUSAT PEMBANGUNAN KEMAHIRAN PULAU PINANG">PUSAT PEMBANGUNAN KEMAHIRAN PULAU PINANG
                </option>
                <option value="PUSAT PEMBANGUNAN KEMAHIRAN SARAWAK">PUSAT PEMBANGUNAN KEMAHIRAN SARAWAK</option>
                <option value="PUSAT PERUBATAN UNIVERSITI MALAYA (PPUM)">PUSAT PERUBATAN UNIVERSITI MALAYA (PPUM)
                </option>
                <option value="PUSAT RAWATAN ISLAM KL (PUSRAWI)">PUSAT RAWATAN ISLAM KL (PUSRAWI)</option>
                <option value="PUSAT TEKNOLOGI DAN PENGURUSAN LANJUTAN (PTPL)">PUSAT TEKNOLOGI DAN PENGURUSAN LANJUTAN
                  (PTPL)</option>
                <option value="PUTRA BUSINESS SCHOOL">PUTRA BUSINESS SCHOOL</option>
                <option value="QUEST INTERNATIONAL UNIVERSITY PERAK (QIUP)">QUEST INTERNATIONAL UNIVERSITY PERAK (QIUP)
                </option>
                <option value="RAFFLES UNIVERSITY ISKANDAR (RUI)">RAFFLES UNIVERSITY ISKANDAR (RUI)</option>
                <option value="RANACO EDUCATION AND TRAINING INSTITUTE">RANACO EDUCATION AND TRAINING INSTITUTE</option>
                <option value="REGENT SCHOOL OF ECONOMICS">REGENT SCHOOL OF ECONOMICS</option>
                <option value="SEGI UNIVERSITY & COLLEGES">SEGI UNIVERSITY & COLLEGES</option>
                <option value="SEKOLAH KEJURURAWATAN HOSPITAL FATIMAH, IPOH">SEKOLAH KEJURURAWATAN HOSPITAL FATIMAH,
                  IPOH</option>
                <option value="SUNWAY UNIVERSITY">SUNWAY UNIVERSITY</option>
                <option value="SWINBURNE UNIVERSITY OF TECHNOLOGY SARAWAK">SWINBURNE UNIVERSITY OF TECHNOLOGY SARAWAK
                </option>
                <option value="TAYLOR'S COLLEGE">TAYLOR'S COLLEGE</option>
                <option value="TERENGGANU ADVANCED TECHNICAL INSTITUTE">TERENGGANU ADVANCED TECHNICAL INSTITUTE</option>
                <option value="THE CHARTERED INSTITUTE OF LOGISTIC & TRANSPORT MALAYSIA">THE CHARTERED INSTITUTE OF
                  LOGISTIC & TRANSPORT MALAYSIA</option>
                <option value="THE ONE ACADEMY OF COMMUNICATION DESIGN">THE ONE ACADEMY OF COMMUNICATION DESIGN</option>
                <option value="THE UNIVERSITY OF NOTTINGHAM, MALAYSIA CAMPUS">THE UNIVERSITY OF NOTTINGHAM, MALAYSIA
                  CAMPUS</option>
                <option value="TUAS POLYTECH CHERAS KUALA LUMPUR">TUAS POLYTECH CHERAS KUALA LUMPUR</option>
                <option value="UCSI UNIVERSITY">UCSI UNIVERSITY</option>
                <option value="UNITAR INTERNATIONAL UNIVERSITY">UNITAR INTERNATIONAL UNIVERSITY</option>
                <option value="UNIVERSITI TEKNOLOGI PETRONAS">UNIVERSITI TEKNOLOGI PETRONAS</option>
                <option value="UNIVERSITI ANTARABANGSA AL-MADINAH (MEDIU)">UNIVERSITI ANTARABANGSA AL-MADINAH (MEDIU)
                </option>
                <option value="UNIVERSITI ANTARABANGSA INTI">UNIVERSITI ANTARABANGSA INTI</option>
                <option value="UNIVERSITI ANTARABANGSA MANIPAL, NEGERI SEMBILAN">UNIVERSITI ANTARABANGSA MANIPAL, NEGERI
                  SEMBILAN</option>
                <option value="UNIVERSITI DARUL IMAN MALAYSIA">UNIVERSITI DARUL IMAN MALAYSIA</option>
                <option value="UNIVERSITI INFRASTRUKTUR KUALA LUMPUR (IUKL)">UNIVERSITI INFRASTRUKTUR KUALA LUMPUR
                  (IUKL)</option>
                <option value="UNIVERSITI ISLAM ANTARABANGSA">UNIVERSITI ISLAM ANTARABANGSA</option>
                <option value="UNIVERSITI ISLAM ANTARABANGSA SULTAN ABDUL HALIM MU'ADZAM SHAH (UniSHAMS)">UNIVERSITI
                  ISLAM ANTARABANGSA SULTAN ABDUL HALIM MU'ADZAM SHAH (UniSHAMS)</option>
                <option value="UNIVERSITI KEBANGSAAN MALAYSIA">UNIVERSITI KEBANGSAAN MALAYSIA</option>
                <option value="UNIVERSITI KUALA LUMPUR">UNIVERSITI KUALA LUMPUR</option>
                <option value="UNIVERSITI KUALA LUMPUR - INSTITUTE OF MEDICAL SCIENCE TECHNOLOGY (UniKL - MESTECH)">
                  UNIVERSITI KUALA LUMPUR - INSTITUTE OF MEDICAL SCIENCE TECHNOLOGY (UniKL - MESTECH)</option>
                <option value="UNIVERSITI KUALA LUMPUR - MALAYSIAN INSTITUTE OF INDUSTRIAL TECHNOLOGY (UniKL-MITEC)">
                  UNIVERSITI KUALA LUMPUR - MALAYSIAN INSTITUTE OF INDUSTRIAL TECHNOLOGY (UniKL-MITEC)</option>
                <option value="UNIVERSITI KUALA LUMPUR - MALAYSIAN SPANISH INSTITUTE (UNIKL-MSI), KEDAH">UNIVERSITI
                  KUALA LUMPUR - MALAYSIAN SPANISH INSTITUTE (UNIKL-MSI), KEDAH</option>
                <option value="UNIVERSITI KUALA LUMPUR BRITISH MALAYSIAN INSTITUTE (UniKL BMI)">UNIVERSITI KUALA LUMPUR
                  BRITISH MALAYSIAN INSTITUTE (UniKL BMI)</option>
                <option value="UNIVERSITI KUALA LUMPUR MALAYSIAN INSTITUTE OF INFORMATION TECHNOLOGY (UNIKL MIIT)">
                  UNIVERSITI KUALA LUMPUR MALAYSIAN INSTITUTE OF INFORMATION TECHNOLOGY (UNIKL MIIT)</option>
                <option value="UNIVERSITI KUALA LUMPUR-INSTITUTE OF PRODUCT DESIGN AND MANUFACTURING (UNiKL-IPROM)">
                  UNIVERSITI KUALA LUMPUR-INSTITUTE OF PRODUCT DESIGN AND MANUFACTURING (UNiKL-IPROM)</option>
                <option value="UNIVERSITI KUALA LUMPUR-KAMPUS KOTA (UNIKL BUSINESS SCHOOL)">UNIVERSITI KUALA
                  LUMPUR-KAMPUS KOTA (UNIKL BUSINESS SCHOOL)</option>
                <option value="UNIVERSITI KUALA LUMPUR-MALAYSIA INST. OF MARINE ENGINEERING TECHNOLOGY (UniKL-MIMET)">
                  UNIVERSITI KUALA LUMPUR-MALAYSIA INST. OF MARINE ENGINEERING TECHNOLOGY (UniKL-MIMET)</option>
                <option value="UNIVERSITI KUALA LUMPUR-MALAYSIA INSTITUTE OF AVIATION TECHNOLOGY (UniKL MIAT)">
                  UNIVERSITI KUALA LUMPUR-MALAYSIA INSTITUTE OF AVIATION TECHNOLOGY (UniKL MIAT)</option>
                <option value="UNIVERSITI KUALA LUMPUR-MALAYSIAN FRANCE INSTITUTE (MFI)">UNIVERSITI KUALA
                  LUMPUR-MALAYSIAN FRANCE INSTITUTE (MFI)</option>
                <option
                  value="UNIVERSITI KUALA LUMPUR-MALAYSIAN INSTITUTE OF CHEMICAL AND BIOENGINEERING TECHNOLOGY (UniKL MICET)">
                  UNIVERSITI KUALA LUMPUR-MALAYSIAN INSTITUTE OF CHEMICAL AND BIOENGINEERING TECHNOLOGY (UniKL MICET)
                </option>
                <option value="UNIVERSITI KUALA LUMPUR-ROYAL COLLEGE OF MEDICINE PERAK (UNIKL-RCMP)">UNIVERSITI KUALA
                  LUMPUR-ROYAL COLLEGE OF MEDICINE PERAK (UNIKL-RCMP)</option>
                <option value="UNIVERSITI MALAYA">UNIVERSITI MALAYA</option>
                <option value="UNIVERSITI MALAYSIA KELANTAN (UMK)">UNIVERSITI MALAYSIA KELANTAN (UMK)</option>
                <option value="UNIVERSITI MALAYSIA PAHANG">UNIVERSITI MALAYSIA PAHANG</option>
                <option value="UNIVERSITI MALAYSIA PERLIS">UNIVERSITI MALAYSIA PERLIS</option>
                <option value="UNIVERSITI MALAYSIA SABAH">UNIVERSITI MALAYSIA SABAH</option>
                <option value="UNIVERSITI MALAYSIA SAINS KOMPUTER DAN KEJURUTERAAN">UNIVERSITI MALAYSIA SAINS KOMPUTER
                  DAN KEJURUTERAAN</option>
                <option value="UNIVERSITI MALAYSIA SARAWAK">UNIVERSITI MALAYSIA SARAWAK</option>
                <option value="UNIVERSITI MALAYSIA TERENGGANU">UNIVERSITI MALAYSIA TERENGGANU</option>
                <option value="UNIVERSITI MONASH, SUNWAY, MALAYSIA">UNIVERSITI MONASH, SUNWAY, MALAYSIA</option>
                <option value="UNIVERSITI MULTIMEDIA">UNIVERSITI MULTIMEDIA</option>
                <option value="UNIVERSITI PENDIDIKAN SULTAN IDRIS">UNIVERSITI PENDIDIKAN SULTAN IDRIS</option>
                <option value="UNIVERSITI PERTAHANAN NASIONAL MALAYSIA">UNIVERSITI PERTAHANAN NASIONAL MALAYSIA</option>
                <option value="UNIVERSITI PERTANIAN MALAYSI">UNIVERSITI PERTANIAN MALAYSIA</option>
                <option value="UNIVERSITI PERUBATAN ANTARABANGSA">UNIVERSITI PERUBATAN ANTARABANGSA</option>
                <option value="UNIVERSITI PUTRA MALAYSIA">UNIVERSITI PUTRA MALAYSIA</option>
                <option value="UNIVERSITI SAINS DAN TEKNOLOGI MALAYSIA (MUST), KELANA JAYA">UNIVERSITI SAINS DAN
                  TEKNOLOGI MALAYSIA (MUST), KELANA JAYA</option>
                <option value="UNIVERSITI SAINS ISLAM MALAYSIA">UNIVERSITI SAINS ISLAM MALAYSIA</option>
                <option value="UNIVERSITI SAINS MALAYSIA">UNIVERSITI SAINS MALAYSIA</option>
                <option value="UNIVERSITI SELANGOR (UNISEL)">UNIVERSITI SELANGOR (UNISEL)</option>
                <option value="UNIVERSITI SULTAN AZLAN SHAH (USAS)">UNIVERSITI SULTAN AZLAN SHAH (USAS)</option>
                <option value="UNIVERSITI TAYLORS">UNIVERSITI TAYLORS</option>
                <option value="UNIVERSITI TEKNIKAL MALAYSIA MELAKA">UNIVERSITI TEKNIKAL MALAYSIA MELAKA</option>
                <option value="UNIVERSITI TEKNOLOGI KREATIF LIMKOKWING">UNIVERSITI TEKNOLOGI KREATIF LIMKOKWING</option>
                <option value="UNIVERSITI TEKNOLOGI MALAYSI">UNIVERSITI TEKNOLOGI MALAYSIA</option>
                <option value="UNIVERSITI TEKNOLOGI MARA">UNIVERSITI TEKNOLOGI MARA</option>
                <option value="UNIVERSITI TELEKO">UNIVERSITI TELEKOM</option>
                <option value="UNIVERSITI TENAGA NASIONAL">UNIVERSITI TENAGA NASIONAL</option>
                <option value="UNIVERSITI TERBUKA MALAYSIA">UNIVERSITI TERBUKA MALAYSIA</option>
                <option value="UNIVERSITI TERBUKA WAWASAN">UNIVERSITI TERBUKA WAWASAN</option>
                <option value="UNIVERSITI TUN ABDUL RAZAK">UNIVERSITI TUN ABDUL RAZAK</option>
                <option value="UNIVERSITI TUN HUSSEIN ONN MALAYSIA">UNIVERSITI TUN HUSSEIN ONN MALAYSIA</option>
                <option value="UNIVERSITI TUNKU ABDUL RAHMAN (UTAR)">UNIVERSITI TUNKU ABDUL RAHMAN (UTAR)</option>
                <option value="UNIVERSITI UTARA MALAYSIA">UNIVERSITI UTARA MALAYSIA</option>
                <option value="UNIVERSITY COLLEGE SABAH FOUNDATIO">UNIVERSITY COLLEGE SABAH FOUNDATION</option>
                <option value="UNIVERSITY MALAYSIA OF COMPUTER SCIENCE AND ENGINEERIN">UNIVERSITY MALAYSIA OF COMPUTER
                  SCIENCE AND ENGINEERING</option>
                <option value="UNIVERSITY OF READING MALAYSIA">UNIVERSITY OF READING MALAYSIA</option>
                <option value="UNIVERSITY OF SOUTHAMPTON MALAYSIA CAMPUS (USMC)">UNIVERSITY OF SOUTHAMPTON MALAYSIA
                  CAMPUS (USMC)</option>
                <option value="YAYASAN PELAJARAN TINGGI ISLAM NILAM PURI">YAYASAN PELAJARAN TINGGI ISLAM NILAM PURI
                </option>
                <option value="A SUIT UNIVERSITY, MESIR">A SUIT UNIVERSITY, MESIR</option>
                <option value="A.B. SHETTY MEMORIAL INSTITUTE OF DENTAL SCIENCE, MANGALORE, KARNATAKA">A.B. SHETTY
                  MEMORIAL INSTITUTE OF DENTAL SCIENCE, MANGALORE, KARNATAKA</option>
                <option value="ABILENE CHRISTIAN UNIVERSITY,TEXAS, USA">ABILENE CHRISTIAN UNIVERSITY,TEXAS, USA</option>
                <option value="ABO AKADEMI FAC. OF CHEMIS.& TEC.FINLAND">ABO AKADEMI FAC. OF CHEMIS.& TEC.FINLAND
                </option>
                <option value="ACADEMY OF NEW CHURH, BARYN ATHYN,PA.US">ACADEMY OF NEW CHURH, BARYN ATHYN,PA.USA
                </option>
                <option value="ACADIA UNIVERSITY WOLFVILLE N.S., CANADA">ACADIA UNIVERSITY WOLFVILLE N.S., CANADA
                </option>
                <option value="ADAMS STATE COL. ALASMOSA COLORADO,USA">ADAMS STATE COL. ALASMOSA COLORADO,USA</option>
                <option value="ADELPHI INI. GARDEN CITY NEW YORK USA">ADELPHI INI. GARDEN CITY NEW YORK USA</option>
                <option value="AGNES SCOTT COLLEGE DECATUR GEORGIA,USA">AGNES SCOTT COLLEGE DECATUR GEORGIA,USA</option>
                <option value="AHMADU BOLLO UNIVERSITY, NIGERIA">AHMADU BOLLO UNIVERSITY, NIGERIA</option>
                <option value="AIN-SHAMS UNVERSITY MESIR">AIN-SHAMS UNVERSITY MESIR</option>
                <option value="AKADEMI SENI RUPA YOGYAKARTA,INDONESIA">AKADEMI SENI RUPA YOGYAKARTA,INDONESIA</option>
                <option value="AKADEMI TEK. KULIT YOGJAKARTA,INDONESIAKOLEJ MC">AKADEMI TEK. KULIT
                  YOGJAKARTA,INDONESIAKOLEJ MCS</option>
                <option value="AKASHI NATIONAL COLLEGE OF TECHNOLOGY">AKASHI NATIONAL COLLEGE OF TECHNOLOGY</option>
                <option value="AKITA NATIONAL COLLAGE OF TECH. , JAPAN">AKITA NATIONAL COLLAGE OF TECH. , JAPAN</option>
                <option value="AKITA UNIVERSITY, JEPUN">AKITA UNIVERSITY, JEPUN</option>
                <option value="AL-AL BAYT UNIVERSITY MAFRAQ, JORDAN">AL-AL BAYT UNIVERSITY MAFRAQ, JORDAN</option>
                <option value="AL-AZHAR UNIVERSITY, MESI">AL-AZHAR UNIVERSITY, MESIR</option>
                <option value="AL-BALQA APPLIED UNIVERSITY, JORDAN">AL-BALQA APPLIED UNIVERSITY, JORDAN</option>
                <option value="AL-MUSTANSIRIYAH UNIVERSITY,BAGHDAD,IRAQ">AL-MUSTANSIRIYAH UNIVERSITY,BAGHDAD,IRAQ
                </option>
                <option value="ALABAMA AGRI.COL. &MECH. UNI. NORMAL,USA">ALABAMA AGRI.COL. &MECH. UNI. NORMAL,USA
                </option>
                <option value="ALABAMA POLYTECHNIC,AUBURN,ALABAMA,USA">ALABAMA POLYTECHNIC,AUBURN,ALABAMA,USA</option>
                <option value="ALABAMA STATE UNIVERSITY MONTGOMERY,USA">ALABAMA STATE UNIVERSITY MONTGOMERY,USA</option>
                <option value="ALBANY STATE COLLEGE GEORGIA, USA">ALBANY STATE COLLEGE GEORGIA, USA</option>
                <option value="ALBERTUS MAGNUS COL. N.HAVEN CONN.,USA">ALBERTUS MAGNUS COL. N.HAVEN CONN.,USA</option>
                <option value="ALBION COLLEGE, MICHIGAN, US">ALBION COLLEGE, MICHIGAN, USA</option>
                <option value="ALBRGHT COL. READING, PENNYLVANIA, USA">ALBRGHT COL. READING, PENNYLVANIA, USA</option>
                <option value="ALCON AGRI.& MECH C.LORMAN MISSISSIPPI USA">ALCON AGRI.& MECH C.LORMAN MISSISSIPPI USA
                </option>
                <option value="ALCORN STATE UNI.,LORMAN MISSISSIPPI,USA">ALCORN STATE UNI.,LORMAN MISSISSIPPI,USA
                </option>
                <option value="ALDERSON BROADDUS C.PHILIPPI.W.VIRG.,USA">ALDERSON BROADDUS C.PHILIPPI.W.VIRG.,USA
                </option>
                <option value="ALFRED UNIVERSITY NEW YORK USA">ALFRED UNIVERSITY NEW YORK USA.</option>
                <option value="ALL INDIA INST.OF MEDIC SC.NEW DELHI,INDIA">ALL INDIA INST.OF MEDIC SC.NEW DELHI,INDIA
                </option>
                <option value="ALLAHABAD UNIVERSITY, INDIA">ALLAHABAD UNIVERSITY, INDIA</option>
                <option value="ALLECHENY C. MEADVILLE, PENNSYLVANIA USA">ALLECHENY C. MEADVILLE, PENNSYLVANIA USA
                </option>
                <option value="ALLENTOWN C.OF ST.FRAN DE SALE CEN VALLE">ALLENTOWN C.OF ST.FRAN DE SALE CEN VALLE
                </option>
                <option value="ALLIANCE COL. CAMB, SPRING, PA., USA">ALLIANCE COL. CAMB, SPRING, PA., USA</option>
                <option value="ALMA COLLEGE, MICHIGAN, USA">ALMA COLLEGE, MICHIGAN, USA</option>
                <option value="ALVERNIA COL. READING, PENNSYLVANIA,USA">ALVERNIA COL. READING, PENNSYLVANIA,USA</option>
                <option value="ALVERNO COLLEGE, MILWAUKEE,WISCONSIN,USA">ALVERNO COLLEGE, MILWAUKEE,WISCONSIN,USA
                </option>
                <option value="AMERICAN INTER.COL.,SPRINGFIELD,MASS.USA">AMERICAN INTER.COL.,SPRINGFIELD,MASS.USA
                </option>
                <option value="AMERICAN UNIVERSITY OF THE CARIBBEAN">AMERICAN UNIVERSITY OF THE CARIBBEAN</option>
                <option value="AMERICAN UNIVERSITY WASHINGTON DC, USA">AMERICAN UNIVERSITY WASHINGTON DC, USA</option>
                <option value="AMHERST COLLEGE MASSACHUSETTS, USA">AMHERST COLLEGE MASSACHUSETTS, USA</option>
                <option value="ANAN NATIONAL COLLEGE OF TECHNOLOGY">ANAN NATIONAL COLLEGE OF TECHNOLOGY</option>
                <option value="ANDERSON COLLEGE INDIANA USA">ANDERSON COLLEGE INDIANA USA</option>
                <option value="KOLEJ MCSANDHARA PRADESH AGRI. UNIVERSITY,INDIAKOLEJ MCS">KOLEJ MCSANDHARA PRADESH AGRI.
                  UNIVERSITY,INDIAKOLEJ MCS</option>
                <option value="ANDRIAN COLLEGE, MICHIGAN, USA">ANDRIAN COLLEGE, MICHIGAN, USA</option>
                <option value="ANGELO STATE UNI. SAN ANGELO, TEXAS, USA">ANGELO STATE UNI. SAN ANGELO, TEXAS, USA
                </option>
                <option value="ANGLIA POLYTECHNIC, UNIVERSITY, U.K">ANGLIA POLYTECHNIC, UNIVERSITY, U.K</option>
                <option value="ANNA MARIA COLLEGE, PAXTON MASSACHUSETTS">ANNA MARIA COLLEGE, PAXTON MASSACHUSETTS
                </option>
                <option value="ANNHURST COL. WOODTOCK,CONNECTICUT,USA">ANNHURST COL. WOODTOCK,CONNECTICUT,USA</option>
                <option value="ANTIOCH COLLEGE YELLOW SPRING,OHIO,USA">ANTIOCH COLLEGE YELLOW SPRING,OHIO,USA</option>
                <option value="APPALACHIAN STATE U.BOONE,N.CAROLINA,USA">APPALACHIAN STATE U.BOONE,N.CAROLINA,USA
                </option>
                <option value="AQUINAS COL. GRAND RAPIDS MICHIGAN, USA">AQUINAS COL. GRAND RAPIDS MICHIGAN, USA</option>
                <option value="AQUINAS INST OF THEOLOGY DUBUQUE IOWA US">AQUINAS INST OF THEOLOGY DUBUQUE IOWA US
                </option>
                <option value="ARCHITECTURALASSOCIATION SCH.LONDON,U.K">ARCHITECTURALASSOCIATION SCH.LONDON,U.K</option>
                <option value="ARCHIVES NATOINALES, PARIS FRANCE">ARCHIVES NATOINALES, PARIS FRANCE</option>
                <option value="ARIAKE NATIONAL COLLEGE OF TECHNOLOGY">ARIAKE NATIONAL COLLEGE OF TECHNOLOGY</option>
                <option value="ARIZONA STATE UNIVERSITY,TEMPE, USA">ARIZONA STATE UNIVERSITY,TEMPE, USA</option>
                <option value="ARKANSAS AGR.MECH&NORMAL C.PINE BLUFF,US">ARKANSAS AGR.MECH&NORMAL C.PINE BLUFF,US
                </option>
                <option value="ARKANSAS COLLEGE, BATESVILLE, USA">ARKANSAS COLLEGE, BATESVILLE, USA</option>
                <option value="ARKANSAS STATE UNIVERSITY, USA">ARKANSAS STATE UNIVERSITY, USA</option>
                <option value="ARKANSAS TECH. UNI. RUSSELLVILLE, USA">ARKANSAS TECH. UNI. RUSSELLVILLE, USA</option>
                <option value="ARMSTRONG COL. BERKELEY CALIFORNIA, USA">ARMSTRONG COL. BERKELEY CALIFORNIA, USA</option>
                <option value="ARMSTRONG STATE COL.SAVANNAH GEORGIA,USA">ARMSTRONG STATE COL.SAVANNAH GEORGIA,USA
                </option>
                <option value="ARMSTRONG UNI.,BERKELEY,CALIFORNIA,USA">ARMSTRONG UNI.,BERKELEY,CALIFORNIA,USA</option>
                <option value="ART CENTRE COL. OF DESIGN PASADENA, USA">ART CENTRE COL. OF DESIGN PASADENA, USA</option>
                <option value="ASAHIKAWA NATIONAL COLLEGE OF TECHNOLOGY">ASAHIKAWA NATIONAL COLLEGE OF TECHNOLOGY
                </option>
                <option value="ASBURY COLLEGE WILMORE, KENTUCKY, USA">ASBURY COLLEGE WILMORE, KENTUCKY, USA</option>
                <option value="ASHLAND COLLEGE, ASHLAND, OHIO, USA">ASHLAND COLLEGE, ASHLAND, OHIO, USA</option>
                <option value="ASIAN INST. OF MANAGEMENT,PHILIPPINES">ASIAN INST. OF MANAGEMENT,PHILIPPINES</option>
                <option value="ASIAN INSTITUTE OF TECHNOLOGY,THAILAND">ASIAN INSTITUTE OF TECHNOLOGY,THAILAND</option>
                <option value="ASSUMPITION WORCHESTER MASS., USA">ASSUMPITION WORCHESTER MASS., USA</option>
                <option value="ATHENS COLLEGE,ALABAMA,USA">ATHENS COLLEGE,ALABAMA,USA</option>
                <option value="ATHNAEUM OF OHIO, NORWOOD, US">ATHNAEUM OF OHIO, NORWOOD, USA</option>
                <option value="ATLANTA COLLEGE OF ART GEORGIA,USA">ATLANTA COLLEGE OF ART GEORGIA,USA</option>
                <option value="ATLANTA UNIVERSITY, GEORGIA, USA">ATLANTA UNIVERSITY, GEORGIA, USA</option>
                <option value="ATLANTIC CHRISTIAN C.WILSON,N.CAROLINA">ATLANTIC CHRISTIAN C.WILSON,N.CAROLINA</option>
                <option value="ATLANTIC UNION C SOUTH LANCASTER MASS US">ATLANTIC UNION C SOUTH LANCASTER MASS US
                </option>
                <option value="AUBURN UNI. AT MONTGOMERY,ALABAMA,USA">AUBURN UNI. AT MONTGOMERY,ALABAMA,USA</option>
                <option value="AUBURN UNIVERSITY ALABAMA, USA">AUBURN UNIVERSITY ALABAMA, USA</option>
                <option value="AUCKLAND UNIV. OF TECHNOLOGY,NEW ZEALAND">AUCKLAND UNIV. OF TECHNOLOGY,NEW ZEALAND
                </option>
                <option value="AUGUSTA COLLEGE GEORGIA, USA">AUGUSTA COLLEGE GEORGIA, USA</option>
                <option value="AUGUSTANA COL. SIOUX FALLS,S.DAKOTA, USA">AUGUSTANA COL. SIOUX FALLS,S.DAKOTA, USA
                </option>
                <option value="AUGUSTANQA COL. ROCK ISLAND ILLINOIS,USA">AUGUSTANQA COL. ROCK ISLAND ILLINOIS,USA
                </option>
                <option value="AURBURG COL. MINEAPOLIS MINESSOTO, USA">AURBURG COL. MINEAPOLIS MINESSOTO, USA</option>
                <option value="AURORA COLLEGE ILLINOIS,USA">AURORA COLLEGE ILLINOIS,USA</option>
                <option value="AUSTIN COLLEGE, SHERMAN, TEXAS, USA">AUSTIN COLLEGE, SHERMAN, TEXAS, USA</option>
                <option value="AUSTIN PEAY ST.U.CLARKVILLE,TENNESSEE US">AUSTIN PEAY ST.U.CLARKVILLE,TENNESSEE US
                </option>
                <option value="AUSTRALIAN NATIONAL UNIVERSITY,AUSTRALIA">AUSTRALIAN NATIONAL UNIVERSITY,AUSTRALIA
                </option>
                <option value="AVERETT COLLEGE, DANVILLE, VIRGINIA, USA">AVERETT COLLEGE, DANVILLE, VIRGINIA, USA
                </option>
                <option value="AZUSA PACIFIC COLLEGE CALIFORNIA,USA">AZUSA PACIFIC COLLEGE CALIFORNIA,USA</option>
                <option value="B. MALAYSIA UNIVERSITI">B. MALAYSIA UNIVERSITI</option>
                <option value="BAGHDAD UNIVERSITY IRAQ">BAGHDAD UNIVERSITY IRAQ</option>
                <option value="BAHAUDDIN ZAKARIYA UNIVERSITY PAKISTAN">BAHAUDDIN ZAKARIYA UNIVERSITY PAKISTAN</option>
                <option value="BAKER UNI. BALDWIN CITY KANSAS USA">BAKER UNI. BALDWIN CITY KANSAS USA</option>
                <option value="BALDWIN-WALLACE COLLEGE,BEREA,OHIO,USA">BALDWIN-WALLACE COLLEGE,BEREA,OHIO,USA</option>
                <option value="KOLEJ MCSBALL STATE UNI. MUNCIE INDIANA,USAKOLEJ MCS">KOLEJ MCSBALL STATE UNI. MUNCIE
                  INDIANA,USAKOLEJ MCS</option>
                <option value="BANGALORE UNIVERSITY, BANGALORE, INDIA">BANGALORE UNIVERSITY, BANGALORE, INDIA</option>
                <option value="BANGLADESH AGRICULTURAL UNIVERSITY">BANGLADESH AGRICULTURAL UNIVERSITY</option>
                <option value="BANGLADESH UNIVERSITY BANGLADESH">BANGLADESH UNIVERSITY BANGLADESH</option>
                <option value="BAPTIST COL. AT CHARLESTON, S.CAROLINA">BAPTIST COL. AT CHARLESTON, S.CAROLINA </option>
                <option value="BAQAI MEDICAL COLLEGE">BAQAI MEDICAL COLLEGE</option>
                <option value="BARAT COLLEGE LAKE FOREST ILLINOIS,USA">BARAT COLLEGE LAKE FOREST ILLINOIS,USA</option>
                <option value="BARBER-SCOTIA COLLEGE,CONCORD,N.CAROLINA">BARBER-SCOTIA COLLEGE,CONCORD,N.CAROLINA
                </option>
                <option value="BARD C ANNADALE ON HUDSON NEW YORK USA">BARD C ANNADALE ON HUDSON NEW YORK USA</option>
                <option value="BARLETT SCHOOL OF ARCHITECTURE, U.K.">BARLETT SCHOOL OF ARCHITECTURE, U.K.</option>
                <option value="BARRONGTON COLLEGE RHODE ISLAND, USA">BARRONGTON COLLEGE RHODE ISLAND, USA</option>
                <option value="BARRY COLLEGE, MAIMI, FLORIDA,USA">BARRY COLLEGE, MAIMI, FLORIDA,USA</option>
                <option value="BARYN MAWR COLLEGE PENNNSYLVANIA, USA">BARYN MAWR COLLEGE PENNNSYLVANIA, USA</option>
                <option value="BATES COLLEGE LEWISTON, MAINE, USA">BATES COLLEGE LEWISTON, MAINE, USA</option>
                <option value="BATH ACADEMY OF ART, UNITED KINGDOM">BATH ACADEMY OF ART, UNITED KINGDOM</option>
                <option value="BATHANIEL HAWTHONE COL. ANTRIM N.H., USA">BATHANIEL HAWTHONE COL. ANTRIM N.H., USA
                </option>
                <option value="BAVARAS HINDU UNIVERSITY, INDIA">BAVARAS HINDU UNIVERSITY, INDIA</option>
                <option value="BAYLOR UNI. COL.OF MED.HOUSTON,TEXAS,USA">BAYLOR UNI. COL.OF MED.HOUSTON,TEXAS,USA
                </option>
                <option value="BAYLOR UNIVERSITY WACO,TEXAS, USA">BAYLOR UNIVERSITY WACO,TEXAS, USA</option>
                <option value="BEAVER COLLEGE GLENSIDE,PENNSYLVANIA,USA">BEAVER COLLEGE GLENSIDE,PENNSYLVANIA,USA
                </option>
                <option value="BEIJING FOREIGN STUDIES UNIVERSITY">BEIJING FOREIGN STUDIES UNIVERSITY</option>
                <option value="BELHAVEN COL. JACKSON MISSISIPPI, USA">BELHAVEN COL. JACKSON MISSISIPPI, USA</option>
                <option value="BELLAMINE COL. LOUIVILLE,KENTUCKY, USA">BELLAMINE COL. LOUIVILLE,KENTUCKY, USA</option>
                <option value="BELLEVUE COLLEGE,BELLEVUE,NEBRASKA,USA">BELLEVUE COLLEGE,BELLEVUE,NEBRASKA,USA</option>
                <option value="BELMON COLLEGE,NASHVILLE TENNESSEE, USA">BELMON COLLEGE,NASHVILLE TENNESSEE, USA</option>
                <option value="BELMONT ABBEY COLLEGE,NORTH CAROLINA,USA">BELMONT ABBEY COLLEGE,NORTH CAROLINA,USA
                </option>
                <option value="BELOIT COLLEGE,WISCONSIN,USA">BELOIT COLLEGE,WISCONSIN,USA</option>
                <option value="BEMIDJI STATE UNIVERSITY MINNESOTO, USA">BEMIDJI STATE UNIVERSITY MINNESOTO, USA</option>
                <option value="BENDIGO COL. OF ADV. EDUCATION,AUSTRALIA">BENDIGO COL. OF ADV. EDUCATION,AUSTRALIA
                </option>
                <option value="BENEDICT COL. COLUMBIA,S. CAROLINA,USA">BENEDICT COL. COLUMBIA,S. CAROLINA,USA</option>
                <option value="BENEDICTINE COLLEGE ATCHISON KANSAN USA">BENEDICTINE COLLEGE ATCHISON KANSAN USA</option>
                <option value="BENGAL VETERINARY COLLEGE,INDIA">BENGAL VETERINARY COLLEGE,INDIA</option>
                <option value="BENNETT COL. GREENSBORO N. CAROLINA,USA">BENNETT COL. GREENSBORO N. CAROLINA,USA</option>
                <option value="BENNINGTON COLLEGE, VERMONT, USA">BENNINGTON COLLEGE, VERMONT, USA</option>
                <option value="BENTLEY COL. WALTHAM MASSACHUSETTS, USA">BENTLEY COL. WALTHAM MASSACHUSETTS, USA</option>
                <option value="BEREA COLLEGE, KENTUCKY, USA">BEREA COLLEGE, KENTUCKY, USA</option>
                <option value="BERKLEE COL. OF MUSIC BOSTON, MASS., USA">BERKLEE COL. OF MUSIC BOSTON, MASS., USA
                </option>
                <option value="BERRY COLLEGE MOUNT BERRY GEORGIA,USA">BERRY COLLEGE MOUNT BERRY GEORGIA,USA</option>
                <option value="BETHANY BIBLE SANTA CRUC CALIFORNIA,USA">BETHANY BIBLE SANTA CRUC CALIFORNIA,USA</option>
                <option value="BETHANY COLLEGE LINDSBORG KANSAS, USA">BETHANY COLLEGE LINDSBORG KANSAS, USA</option>
                <option value="BETHANY COLLEGE, WEST VIRGINIA, USA">BETHANY COLLEGE, WEST VIRGINIA, USA</option>
                <option value="BETHANY NAZARENE COLLEGE,OKLAHOMA,U.S.A.">BETHANY NAZARENE COLLEGE,OKLAHOMA,U.S.A.
                </option>
                <option value="BETHEL COLLEGE MCKENZIE, TENNESSEE,USA">BETHEL COLLEGE MCKENZIE, TENNESSEE,USA</option>
                <option value="BETHEL COLLEGE MISHAWAKA INDIANA USA">BETHEL COLLEGE MISHAWAKA INDIANA USA</option>
                <option value="BETHEL COLLEGE NORTH NEWTON, KANSAS, USA">BETHEL COLLEGE NORTH NEWTON, KANSAS, USA
                </option>
                <option value="BETHEL COLLEGE SAINT PAUL, MINNESOTA USA">BETHEL COLLEGE SAINT PAUL, MINNESOTA USA
                </option>
                <option value="BETHUNE-COOKMAN C.DAYTONA BEACH,FLORIDA">BETHUNE-COOKMAN C.DAYTONA BEACH,FLORIDA</option>
                <option value="BHOPAL UNI. GANDHI MEDICAL COLLEGE,INDIA">BHOPAL UNI. GANDHI MEDICAL COLLEGE,INDIA
                </option>
                <option value="BIDHAN CHANDRA KRISHI VISNA VIDYALAYA,IN">BIDHAN CHANDRA KRISHI VISNA VIDYALAYA,IN
                </option>
                <option value="BIHAR VET. COL. MAGADH UNIVERSITY,INDIA">BIHAR VET. COL. MAGADH UNIVERSITY,INDIA</option>
                <option value="BIOLA COLLEGE LA MIRADA CALIFORNIA, USA">BIOLA COLLEGE LA MIRADA CALIFORNIA, USA</option>
                <option value="BIRMINGHAM POLYTECHNIC, UK">BIRMINGHAM POLYTECHNIC, UK</option>
                <option value="BIRMINGHAM SCHOOL OF MUSIC, U.K.">BIRMINGHAM SCHOOL OF MUSIC, U.K.</option>
                <option value="BIRMINGHAM-SOUTHERN COLLEGE,ALABAMA,USA">BIRMINGHAM-SOUTHERN COLLEGE,ALABAMA,USA</option>
                <option value="BISCAYNE COLLEGE MIAMI, FLORIDA, USA">BISCAYNE COLLEGE MIAMI, FLORIDA, USA</option>
                <option value="BISHOP COLLEGE DALLAS, TEXAS, USA">BISHOP COLLEGE DALLAS, TEXAS, USA</option>
                <option value="BISHOP'S UNIVERSITY QUEBEC, CANADA">BISHOP'S UNIVERSITY QUEBEC, CANADA</option>
                <option value="BLACKBURN COL. CARLINVILLE ILLINOIS, USA">BLACKBURN COL. CARLINVILLE ILLINOIS, USA
                </option>
                <option value="BLACKBURN COLLEGE OF TECHNOLOGY, UK">BLACKBURN COLLEGE OF TECHNOLOGY, UK</option>
                <option value="BLACKS HILLS ST. C. SPEARFISH S.DAKOTA">BLACKS HILLS ST. C. SPEARFISH S.DAKOTA</option>
                <option value="BLOOMFIELD COLLEGE BLOOMFIELD NEW JERSEY">BLOOMFIELD COLLEGE BLOOMFIELD NEW JERSEY
                </option>
                <option value="BLOOMSBURG STATE COL.,PENNSYLVANIA, USA">BLOOMSBURG STATE COL.,PENNSYLVANIA, USA</option>
                <option value="BLUE FIELD STATE COLLEGE,WEST VIRG.,USA">BLUE FIELD STATE COLLEGE,WEST VIRG.,USA</option>
                <option value="BLUE MOUNTAIN COLLEGE MISSISSIPPI, USA">BLUE MOUNTAIN COLLEGE MISSISSIPPI, USA</option>
                <option value="BLUFFTON COLLEGE, BLUFFTON, OHIO, USA">BLUFFTON COLLEGE, BLUFFTON, OHIO, USA</option>
                <option value="BOBSON COLLEGE BOBSON PARK, MASS., USA">BOBSON COLLEGE BOBSON PARK, MASS., USA</option>
                <option value="BOISE STATE UNIVERSITY IDAHO,USA">BOISE STATE UNIVERSITY IDAHO,USA</option>
                <option value="BOLTON INSTITUTE OF HIGHER EDUCATION U.K">BOLTON INSTITUTE OF HIGHER EDUCATION U.K
                </option>
                <option value="BOLTON INSTITUTE OT TEC. U.K.">BOLTON INSTITUTE OT TEC. U.K.</option>
                <option value="BOMBAY VET.C(MAHA.PHULE KRISHI VIDYA.AGR">BOMBAY VET.C(MAHA.PHULE KRISHI VIDYA.AGR
                </option>
                <option value="BOMBAY VET.C.(KONKAN KRISHI VIDYA.DAPOLI">BOMBAY VET.C.(KONKAN KRISHI VIDYA.DAPOLI
                </option>
                <option value="BOMBAY VETERINARY COLLEGE,INDIA">BOMBAY VETERINARY COLLEGE,INDIA</option>
                <option value="BOND UNI. 4229 GOLG COAST OLD, AUSTRALIA">BOND UNI. 4229 GOLG COAST OLD, AUSTRALIA
                </option>
                <option value="BOND UNIVERSITY, AUSTRALIA">BOND UNIVERSITY, AUSTRALIA</option>
                <option value="BORROMEO SEMINARY OF OHIO, WICKLIFFE,USA">BORROMEO SEMINARY OF OHIO, WICKLIFFE,USA
                </option>
                <option value="BOSTON ARCHITECTURAL CENTER, MASS., USA">BOSTON ARCHITECTURAL CENTER, MASS., USA</option>
                <option value="BOSTON COLLEGE CHESTNUT HILL, MASS., USA">BOSTON COLLEGE CHESTNUT HILL, MASS., USA
                </option>
                <option value="BOSTON CONSEVATORY MUSIC BOSTON,MASS US">BOSTON CONSEVATORY MUSIC BOSTON,MASS US</option>
                <option value="BOSTON STATE COLLEGE BOSTON MASS., USA<">BOSTON STATE COLLEGE BOSTON MASS., USA</option>
                <option value="BOSTON UNIVERSITY BOSTON, MASS., USA">BOSTON UNIVERSITY BOSTON, MASS., USA</option>
                <option value="BOWDOIN COLLEGE BRUNSWICK,MAINE, USA">BOWDOIN COLLEGE BRUNSWICK,MAINE, USA</option>
                <option value="BOWIE STATE COLLEGE MARYLAND, USA">BOWIE STATE COLLEGE MARYLAND, USA</option>
                <option value="BOWLING GREEN STATE UNIVERSITY,OHIO, USA">BOWLING GREEN STATE UNIVERSITY,OHIO, USA
                </option>
                <option value="BRADLEY UNIVERSITY PEORIA ILLINOIS USA">BRADLEY UNIVERSITY PEORIA ILLINOIS USA</option>
                <option value="BRADON UNIVERSITY MANITOBA, CANADA">BRADON UNIVERSITY MANITOBA, CANADA</option>
                <option value="BRANDEIS UNIVERSITY WALTHAM, MASS., USA">BRANDEIS UNIVERSITY WALTHAM, MASS., USA</option>
                <option value="BRENAU COLLEGE GAINESVILLE GEORGIA USA">BRENAU COLLEGE GAINESVILLE GEORGIA USA</option>
                <option value="BRESCIA COL., OWENSBORO, KENTUCKY, USA">BRESCIA COL., OWENSBORO, KENTUCKY, USA</option>
                <option value="BRIACLIFF COL. BRIARCLIFF MANOR N.Y.,USA">BRIACLIFF COL. BRIARCLIFF MANOR N.Y.,USA
                </option>
                <option value="BRIAR CLIFF COLLEGE SIOUX CITY IOWA,USA">BRIAR CLIFF COLLEGE SIOUX CITY IOWA,USA</option>
                <option value="BRIDGEWATER COLLEGE, VIRGINIA, USA">BRIDGEWATER COLLEGE, VIRGINIA, USA</option>
                <option value="BRIDGEWATER STATE COLLEGE, MASS., USA">BRIDGEWATER STATE COLLEGE, MASS., USA</option>
                <option value="BRIGDEPORT ENGINEERING INST. CONN.,USA">BRIGDEPORT ENGINEERING INST. CONN.,USA</option>
                <option value="RIGHAM YOUNG U-HAWAI CAMPUS LATE,USA">BRIGHAM YOUNG U-HAWAI CAMPUS LATE,USA</option>
                <option value="BRIGHAM YOUNG UNI. PROVO, UTAH, USA">BRIGHAM YOUNG UNI. PROVO, UTAH, USA</option>
                <option value="BRIGHTON COLLEGE OF TEC. U.K.">BRIGHTON COLLEGE OF TEC. U.K.</option>
                <option value="BRIGHTON POLYTECHNIC, UNITED KINGDOM">BRIGHTON POLYTECHNIC, UNITED KINGDOM</option>
                <option value="BRISTOL POLYTECHNIC, UNITED KINGDOM">BRISTOL POLYTECHNIC, UNITED KINGDOM</option>
                <option value="BRIT.DIS.SOC.CER.COL.OF ARTS&GRAF,BIRMIN">BRIT.DIS.SOC.CER.COL.OF ARTS&GRAF,BIRMIN
                </option>
                <option value="BRITISH COLUMBIA INST.OF TECHNOLOGY,CAN">BRITISH COLUMBIA INST.OF TECHNOLOGY,CAN</option>
                <option value="BROCK UNI. CATHERINES,ONTARIO, CANADA">BROCK UNI. CATHERINES,ONTARIO, CANADA</option>
                <option value="BROOKS INSTITUTE BERBARA CALIFORNIA,USA">BROOKS INSTITUTE BERBARA CALIFORNIA,USA</option>
                <option value="BROWN UNI. PROVIDENCE, RHODE ISLAND,USA">BROWN UNI. PROVIDENCE, RHODE ISLAND,USA</option>
                <option value="BRUNEL UNIVERSITY, UNITED KINGDOM">BRUNEL UNIVERSITY, UNITED KINGDOM</option>
                <option value="BRYANT COL.BSN ADMIN.SMITHFIELD,R.I.,USA">BRYANT COL.BSN ADMIN.SMITHFIELD,R.I.,USA
                </option>
                <option value="BUCKINGHAMSHIRE COLLEGE OF HR.EDUC.,UK.">BUCKINGHAMSHIRE COLLEGE OF HR.EDUC.,UK.</option>
                <option value="BUCKNELL UNI. LEWISBURG,PENNSYLVANIA,USA">BUCKNELL UNI. LEWISBURG,PENNSYLVANIA,USA
                </option>
                <option value="BUENA VISTA COLLEGE STORM LAKE IOWA,USA">BUENA VISTA COLLEGE STORM LAKE IOWA,USA</option>
                <option value="BUNKYO UNIVERSITY, JAPAN">BUNKYO UNIVERSITY, JAPAN</option>
                <option value="BURMA MEDICAL INST. (I) RANGOON BURMA">BURMA MEDICAL INST. (I) RANGOON BURMA</option>
                <option value="BUTLER UNIVERSITY INDIANAPOLIS INDIANA">BUTLER UNIVERSITY INDIANAPOLIS INDIANA</option>
                <option value="BYRAN COLLEGE, DAYTON, TENNESSEE, USA">BYRAN COLLEGE, DAYTON, TENNESSEE, USA</option>
                <option value="BYRANT COL. PROVIDENCE,RHODE ISLAND, USA">BYRANT COL. PROVIDENCE,RHODE ISLAND, USA
                </option>
                <option value="C. OF MOUNT S.VINCENT,RIVERDALE N.Y.,USA">C. OF MOUNT S.VINCENT,RIVERDALE N.Y.,USA
                </option>
                <option value="C. OF OUR LADY OF ELMS CHICOPEE,MASS USA">C. OF OUR LADY OF ELMS CHICOPEE,MASS USA
                </option>
                <option value="C. OF ST.CATHERINE ST PAUL MINNESOTA,USA">C. OF ST.CATHERINE ST PAUL MINNESOTA,USA
                </option>
                <option value="C.OF ARTS & SC.AT.PLATTSBURGH,N.YORK,USA">C.OF ARTS & SC.AT.PLATTSBURGH,N.YORK,USA
                </option>
                <option value="C.OF NOTRE DAME OF MARYLAND,BALTIMORE US">C.OF NOTRE DAME OF MARYLAND,BALTIMORE US
                </option>
                <option value="C.OF PHYSICIANS & SURGEONS,BOMBAY,INDIA">C.OF PHYSICIANS & SURGEONS,BOMBAY,INDIA</option>
                <option value="C.OF ST.BENEDICT,ST.JOSEPH MINNESOTA USA">C.OF ST.BENEDICT,ST.JOSEPH MINNESOTA USA
                </option>
                <option value="C.OF ST.SCHOLASTICA DULUTH MINNESOTA USA">C.OF ST.SCHOLASTICA DULUTH MINNESOTA USA
                </option>
                <option value="C.OF THE CZARKS,CLARKSVILLE,ARKANSAS,USA">C.OF THE CZARKS,CLARKSVILLE,ARKANSAS,USA
                </option>
                <option value="C.OF VET.SC.& ANI.HUSB.LAHORE,PAKISTAN">C.OF VET.SC.& ANI.HUSB.LAHORE,PAKISTAN</option>
                <option value="CABRINI COLLEGE RADNOR, PENNSYLVANIA USA">CABRINI COLLEGE RADNOR, PENNSYLVANIA USA
                </option>
                <option value="CALCUTTA U.BENGAL ENG.C.SIBPUR HOWRAH,IN">CALCUTTA U.BENGAL ENG.C.SIBPUR HOWRAH,IN
                </option>
                <option value="CALDWELL COLLEGE CALDWELL NEW JERSEY USA">CALDWELL COLLEGE CALDWELL NEW JERSEY USA
                </option>
                <option value="CALICUT UNIVERSITY, INDIA">CALICUT UNIVERSITY, INDIA</option>
                <option value="CALIF. POLYTECHNIC UNI. SAN LUIS OBISPO">CALIF. POLYTECHNIC UNI. SAN LUIS OBISPO</option>
                <option value="CALIFORNIA BAPITIST COL. RIVERSIDE, USA">CALIFORNIA BAPITIST COL. RIVERSIDE, USA</option>
                <option value="CALIFORNIA COF ART & CRAFTS OAKLAND USA">CALIFORNIA COF ART & CRAFTS OAKLAND USA</option>
                <option value="CALIFORNIA COLLEGE PODIATRIC MEDIC,S.F">CALIFORNIA COLLEGE PODIATRIC MEDIC,S.F</option>
                <option value="CALIFORNIA INST. OF ARTS VALENCIA, USA">CALIFORNIA INST. OF ARTS VALENCIA, USA</option>
                <option value="CALIFORNIA INST. OF TEC. PASADENA, USA">CALIFORNIA INST. OF TEC. PASADENA, USA</option>
                <option value="CALIFORNIA LUTHERAN C THOUSAND OAKS USA">CALIFORNIA LUTHERAN C THOUSAND OAKS USA</option>
                <option value="CALIFORNIA MARITIME ACADEMY VALEJO USA">CALIFORNIA MARITIME ACADEMY VALEJO USA</option>
                <option value="CALIFORNIA ST C.STANISLAUS TURLOCK USA">CALIFORNIA ST C.STANISLAUS TURLOCK USA</option>
                <option value="CALIFORNIA ST UNIVERSITY-LOS ANGELES USA">CALIFORNIA ST UNIVERSITY-LOS ANGELES USA
                </option>
                <option value="CALIFORNIA ST. POLYTECHNIC U.POMANA. USA">CALIFORNIA ST. POLYTECHNIC U.POMANA. USA
                </option>
                <option value="CALIFORNIA ST. UNIVERSITY NORTHRIDGE,USA">CALIFORNIA ST. UNIVERSITY NORTHRIDGE,USA
                </option>
                <option value="CALIFORNIA ST. UNIVERSITY-LONG BEACH USA">CALIFORNIA ST. UNIVERSITY-LONG BEACH USA
                </option>
                <option value="CALIFORNIA ST.COLLEGE-SAN BERNADING,USA">CALIFORNIA ST.COLLEGE-SAN BERNADING,USA</option>
                <option value="CALIFORNIA ST.UNI.DOMINGUEZ HILLS,CARSON">CALIFORNIA ST.UNI.DOMINGUEZ HILLS,CARSON
                </option>
                <option value="CALIFORNIA ST.UNIVERSITYT SACRAMENTO,USA">CALIFORNIA ST.UNIVERSITYT SACRAMENTO,USA
                </option>
                <option value="CALIFORNIA STATE COLLEGE BEKERSFIELD,USA">CALIFORNIA STATE COLLEGE BEKERSFIELD,USA
                </option>
                <option value="CALIFORNIA STATE COLLEGE-DOMINGUEZ HILL">CALIFORNIA STATE COLLEGE-DOMINGUEZ HILL</option>
                <option value="CALIFORNIA STATE UNI. FULLERTON, SA">CALIFORNIA STATE UNI. FULLERTON, SA</option>
                <option value="CALIFORNIA STATE UNIVERISTY FRESNO USA">CALIFORNIA STATE UNIVERISTY FRESNO USA</option>
                <option value="CALIFORNIA STATE UNIVERSITY CHICO, USA">CALIFORNIA STATE UNIVERSITY CHICO, USA</option>
                <option value="CALIFORNIA STATE UNIVERSITY HAYWARD, USA">CALIFORNIA STATE UNIVERSITY HAYWARD, USA
                </option>
                <option value="CALIFORNIA UNIVERSITY OF PENNSYLVANIA">CALIFORNIA UNIVERSITY OF PENNSYLVANIA</option>
                <option value="CALUMET COLLEGE CHICAGO INDIANA,USA">CALUMET COLLEGE CHICAGO INDIANA,USA</option>
                <option value="CALVIN COLLEGE GRAND RAPIDS MICHIGAN,USA">CALVIN COLLEGE GRAND RAPIDS MICHIGAN,USA
                </option>
                <option value="CAMBERWEEL SCHOOL OF ART & CRAFTS, U.K.">CAMBERWEEL SCHOOL OF ART & CRAFTS, U.K.</option>
                <option value="CAMBORNE SCHOOL OF MINES CORNWALL U.K.">CAMBORNE SCHOOL OF MINES CORNWALL U.K.</option>
                <option value="CAMERON UNIVERSITY,LAWTON,OKLAHOMA,U.S.A">CAMERON UNIVERSITY,LAWTON,OKLAHOMA,U.S.A
                </option>
                <option value="CAMPBELL UNI.,BLUES CREEK,N.CAROLINA,USA">CAMPBELL UNI.,BLUES CREEK,N.CAROLINA,USA
                </option>
                <option value="CAMPBELLSVILLE COLLEGE,KENTUCKY, USA">CAMPBELLSVILLE COLLEGE,KENTUCKY, USA</option>
                <option value="CANBERRA C. OF ADV. EDUCATION, AUSTRALIA">CANBERRA C. OF ADV. EDUCATION, AUSTRALIA
                </option>
                <option value="CANISIUS COLLEGE BUFFALO NEW YORK,USA">CANISIUS COLLEGE BUFFALO NEW YORK,USA</option>
                <option value="CANNON COLLEGE, ERIE VERMONT, USA">CANNON COLLEGE, ERIE VERMONT, USA</option>
                <option
                  value="CANTERBURY CHRIST CHURCH COLLEGE OF HIGHER EDUCATION/CANTERBURY CHRIST CHURCH UNIVERSITY">
                  CANTERBURY CHRIST CHURCH COLLEGE OF HIGHER EDUCATION/CANTERBURY CHRIST CHURCH UNIVERSITY</option>
                <option value="CANTERBURY COLLEGE OF ART, U.K.">CANTERBURY COLLEGE OF ART, U.K.</option>
                <option value="CAPITAL UNIVERSITY COLUMBUS, OHIO, USA">CAPITAL UNIVERSITY COLUMBUS, OHIO, USA</option>
                <option value="CAPRICORNIA INST. OF ADV. EDUCATION AUS.">CAPRICORNIA INST. OF ADV. EDUCATION AUS.
                </option>
                <option value="CARDIFF COLLEGE OF FOOD TEC.U.K.">CARDIFF COLLEGE OF FOOD TEC.U.K.</option>
                <option value="CARDIFF UNIVERSITY">CARDIFF UNIVERSITY</option>
                <option value="CARDINAL STRITCH C.MILWAUKEE,WILKCON,USA">CARDINAL STRITCH C.MILWAUKEE,WILKCON,USA
                </option>
                <option value="CARLETON COLLEGE NORHFIELD MINNESOTO USA">CARLETON COLLEGE NORHFIELD MINNESOTO USA
                </option>
                <option value="CARLOW COL. PITTSBURG, PENNYSLVANIA,USA">CARLOW COL. PITTSBURG, PENNYSLVANIA,USA</option>
                <option value="CARMARTHENSHIRE COLLEGE TECH & ARTS, UK">CARMARTHENSHIRE COLLEGE TECH & ARTS, UK</option>
                <option value="CARNEGIE-MELLON UNI.,PITTSBURG, PA.,USA">CARNEGIE-MELLON UNI.,PITTSBURG, PA.,USA</option>
                <option value="CARROLL COLLEGE HELENA MONTANA,USA">CARROLL COLLEGE HELENA MONTANA,USA</option>
                <option value="CARSON-NEWMAN C. JEFERSON CITY, TENNESSE">CARSON-NEWMAN C. JEFERSON CITY, TENNESSE
                </option>
                <option value="CARTHAGE COLLEGE,KENOSHA,WINCONSIN, USA">CARTHAGE COLLEGE,KENOSHA,WINCONSIN, USA</option>
                <option value="CASE WESTERN RESERVE U.CLEVELAND,OHIO,US">CASE WESTERN RESERVE U.CLEVELAND,OHIO,US
                </option>
                <option value="CASTLETON STATE COLLEGE, VERMONT, USA">CASTLETON STATE COLLEGE, VERMONT, USA</option>
                <option value="CATAWBA COLLEGE,SALISBURY,NORTH CALORINA">CATAWBA COLLEGE,SALISBURY,NORTH CALORINA
                </option>
                <option value="CATHOLIC U.OF AMERICAN WASHINGTON DC,USA">CATHOLIC U.OF AMERICAN WASHINGTON DC,USA
                </option>
                <option value="CATHOLIC UNIVERSITY OF LEUVEN, BELGIUM">CATHOLIC UNIVERSITY OF LEUVEN, BELGIUM</option>
                <option value="CEBU DOCTORS COLL. OF MEDICINE, FILIPINA">CEBU DOCTORS COLL. OF MEDICINE, FILIPINA
                </option>
                <option value="CEDAR CREST COL. ALLENTOWN,PENNSYLVANIA">CEDAR CREST COL. ALLENTOWN,PENNSYLVANIA</option>
                <option value="CEDARVILLE COLLEGE, CEDARVILLE, OHIO,USA">CEDARVILLE COLLEGE, CEDARVILLE, OHIO,USA
                </option>
                <option value="CENT MICHIGAN U.,MOUNT PLEASANT,MICH,USA">CENT MICHIGAN U.,MOUNT PLEASANT,MICH,USA
                </option>
                <option value="CENTENARY C.OF LOUISIANA,SHREVOPORT,USA">CENTENARY C.OF LOUISIANA,SHREVOPORT,USA</option>
                <option value="CENTRAL CONN. ST. COL. NEW BRITAIN,USA">CENTRAL CONN. ST. COL. NEW BRITAIN,USA</option>
                <option value="CENTRAL INSTITUTE OF TEC.WELLINGTON,N.Z.">CENTRAL INSTITUTE OF TEC.WELLINGTON,N.Z.
                </option>
                <option value="CENTRAL LONDON POLYTECHNIC, U.K.">CENTRAL LONDON POLYTECHNIC, U.K.</option>
                <option value="CENTRAL METHODIST C FAYETTE MISSOURI USA">CENTRAL METHODIST C FAYETTE MISSOURI USA
                </option>
                <option value="CENTRAL MICHIGAN UNI.,MOUNT PLEASANT,MIC">CENTRAL MICHIGAN UNI.,MOUNT PLEASANT,MIC
                </option>
                <option value="CENTRAL MISSOURI ST. UNI.WARRENSBURG,USA">CENTRAL MISSOURI ST. UNI.WARRENSBURG,USA
                </option>
                <option value="CENTRAL QUEENSLAND UNIV, AUSTRALIA ">CENTRAL QUEENSLAND UNIV, AUSTRALIA</option>
                <option value="CENTRAL SCHOOL OF ART & DESIGN U.K.">CENTRAL SCHOOL OF ART & DESIGN U.K.</option>
                <option value="CENTRAL STATE U.,EDMOND,OKLAHOMA,U.S.A.">CENTRAL STATE U.,EDMOND,OKLAHOMA,U.S.A./a>
                </option>
                <option value="CENTRAL STATE UNI. WILBERFORCE,OHIO, USA">CENTRAL STATE UNI. WILBERFORCE,OHIO, USA
                </option>
                <option value="CENTRAL UNIVERSITY OF IOWA, PELLA, USA">CENTRAL UNIVERSITY OF IOWA, PELLA, USA</option>
                <option value="CENTRAL WASHINGTON STATE C.ELLENSBURG US">CENTRAL WASHINGTON STATE C.ELLENSBURG US
                </option>
                <option value="CENTRE COLLEGE OF KENTUCKY,DANVILLE, USA">CENTRE COLLEGE OF KENTUCKY,DANVILLE, USA
                </option>
                <option value="CHADRON STATE COLLEGE,NEBRASKA,USA">CHADRON STATE COLLEGE,NEBRASKA,USA</option>
                <option value="CHALMERS TEKNISKA HOGSKULA GOTEBORG SWE">CHALMERS TEKNISKA HOGSKULA GOTEBORG SWE</option>
                <option value="CHAPMAN COLLEGE ORANGE CALIFORNIA, USA">CHAPMAN COLLEGE ORANGE CALIFORNIA, USA</option>
                <option value="CHARLES STURT UNI, NEW SOUTH WALES, AUST">CHARLES STURT UNI, NEW SOUTH WALES, AUST
                </option>
                <option value="CHARLES UNIVERSITY IN PRAGUE, FIRST FACULTY OF MEDICINE, REPUBLIC OF CZECH">CHARLES
                  UNIVERSITY IN PRAGUE, FIRST FACULTY OF MEDICINE, REPUBLIC OF CZECH</option>
                <option value="CHARLES UNIVERSITY, FACULTY OF MEDICINE IN HRADEC KRALOVE">CHARLES UNIVERSITY, FACULTY OF
                  MEDICINE IN HRADEC KRALOVE</option>
                <option value="CHATHAM COL. PITTSBURG,PENNSYLVANIA, USA">CHATHAM COL. PITTSBURG,PENNSYLVANIA, USA
                </option>
                <option value="CHELMER INST.OF HIGHER EDUCATION,U.K.">CHELMER INST.OF HIGHER EDUCATION,U.K.</option>
                <option value="CHELSEA C. OF AERONAU.& AUTOMOBIL ENGIN">CHELSEA C. OF AERONAU.& AUTOMOBIL ENGIN,
                </option>
                <option value="CHELSEA COLLEGE, UNITED KINGDOM">CHELSEA COLLEGE, UNITED KINGDOM</option>
                <option value="CHELSEA SCHOOL OF ART,UNITED KINGDOM">CHELSEA SCHOOL OF ART,UNITED KINGDOM</option>
                <option value="CHENNAI MEDICAL COLLEGE, INDIA">CHENNAI MEDICAL COLLEGE, INDIA</option>
                <option value="CHESTNUT HILL COL.,PHILADELPHIA,PA., USA">CHESTNUT HILL COL.,PHILADELPHIA,PA., USA
                </option>
                <option value="CHEYNEY STATE COLLEGE PENNSYLVANIA, USA">CHEYNEY STATE COLLEGE PENNSYLVANIA, USA</option>
                <option value="CHIBA UNIVERSITY, JAPAN">CHIBA UNIVERSITY, JAPAN</option>
                <option value="CHICAGO MEDICAL COLLEGE CHICAGO ILLINOIS">CHICAGO MEDICAL COLLEGE CHICAGO ILLINOIS
                </option>
                <option value="CHICAGO STATE UNIVERSITY ILLINOIS,US">CHICAGO STATE UNIVERSITY ILLINOIS,US</option>
                <option value="CHILSHOM ISTITUTE OF TECH. AUSTRALIA">CHILSHOM ISTITUTE OF TECH. AUSTRALIA</option>
                <option value="CHINA MEDICAL COLLEGE, TAIWAN">CHINA MEDICAL COLLEGE, TAIWAN</option>
                <option value="CHQAMINADE COLLEGE OF HONOLULU HAWAI,USA">CHQAMINADE COLLEGE OF HONOLULU HAWAI,USA
                </option>
                <option value="CHRISTIAN BROTHERS C. MEMPHIS, TENN. USA">CHRISTIAN BROTHERS C. MEMPHIS, TENN. USA
                </option>
                <option value="CHRISTOPHER NEWPORT COLLEGE,VIRGINIA,USA">CHRISTOPHER NEWPORT COLLEGE,VIRGINIA,USA
                </option>
                <option value="CHULALONGKORN UNIVERSITY THAILAND">CHULALONGKORN UNIVERSITY THAILAND</option>
                <option value="CHUNG SHAN MEDICAL&DENTAL COLL, TAICHUNG">CHUNG SHAN MEDICAL&DENTAL COLL, TAICHUNG
                </option>
                <option value="CITY OF BIRMINGHAM POLYTECHI, U.K.">CITY OF BIRMINGHAM POLYTECHI, U.K.</option>
                <option value="CITY OF LIVERPOOL COLLEGE OF BUILDING,UK">CITY OF LIVERPOOL COLLEGE OF BUILDING,UK
                </option>
                <option value="CITY OF LONDON POLYTECHNIC, U.K.">CITY OF LONDON POLYTECHNIC, U.K.</option>
                <option value="CITY U.OF N.Y MEDGAR EVERS C.BROOKLYN US">CITY U.OF N.Y MEDGAR EVERS C.BROOKLYN US
                </option>
                <option value="CITY U.OF N.Y.JOHN JAY C.OF CRIM,JUST,US">CITY U.OF N.Y.JOHN JAY C.OF CRIM,JUST,US
                </option>
                <option value="CITY UNI. OF N.Y. YORK COL., JAMAICA,USA">CITY UNI. OF N.Y. YORK COL., JAMAICA,USA
                </option>
                <option value="CITY UNI. OF N.Y.,STATEN ISLAND,N.Y.,USA">CITY UNI. OF N.Y.,STATEN ISLAND,N.Y.,USA
                </option>
                <option value="CITY UNI. OF N.YORK COL. AT BUFFALO,USA">CITY UNI. OF N.YORK COL. AT BUFFALO,USA</option>
                <option value="CITY UNI. OF N.YORK HUNTER COLLEGE, USA">CITY UNI. OF N.YORK HUNTER COLLEGE, USA</option>
                <option value="CITY UNI. OF N.YORK, LEHMAN COLLEGE, USA">CITY UNI. OF N.YORK, LEHMAN COLLEGE, USA
                </option>
                <option value="CITY UNI. OF NEW BENARD BARUCH COL.,USA">CITY UNI. OF NEW BENARD BARUCH COL.,USA</option>
                <option value="CITY UNI.OF N.Y QUEENS COL.,FLUSHING,USA">CITY UNI.OF N.Y QUEENS COL.,FLUSHING,USA
                </option>
                <option value="CITY UNIVERSITY BELLEVUE WASHINGTON,USA">CITY UNIVERSITY BELLEVUE WASHINGTON,USA</option>
                <option value="CITY UNIVERSITY OF HONG KONG, HONG KONG">CITY UNIVERSITY OF HONG KONG, HONG KONG</option>
                <option value="CITY UNIVERSITY OF NEW YORK USA">CITY UNIVERSITY OF NEW YORK USA</option>
                <option value="CITY UNIVERSITY UNITED KINGDOM">CITY UNIVERSITY UNITED KINGDOM</option>
                <option value="CLAFLIN COL. ORANGEBURG,S. CAROLINA,USA">CLAFLIN COL. ORANGEBURG,S. CAROLINA,USA</option>
                <option value="CLAREMONT MEN'COLLEGE CALIFORNIA, USA">CLAREMONT MEN'COLLEGE CALIFORNIA, USA</option>
                <option value="CLARION STATE COLLEGE, PENNSYLVANIA, USA">CLARION STATE COLLEGE, PENNSYLVANIA, USA
                </option>
                <option value="CLARK COLLEGE ATLANTA GEORGIA, USA">CLARK COLLEGE ATLANTA GEORGIA, USA</option>
                <option value="CLARK UNIVERSITY WORCESTER, MASS., USA">CLARK UNIVERSITY WORCESTER, MASS., USA</option>
                <option value="CLARKE COLLEGE, DUBUQUE,IOWA, USA">CLARKE COLLEGE, DUBUQUE,IOWA, USA</option>
                <option value="CLEMSON UNIVERSITY, SOUTH CAROLINA USA.">CLEMSON UNIVERSITY, SOUTH CAROLINA USA.</option>
                <option value="CLEVELAND ART INSTITUTE, OHIO, USA">CLEVELAND ART INSTITUTE, OHIO, USA</option>
                <option value="CLEVELAND STATE UNIVERSITY, OHIO, USA">CLEVELAND STATE UNIVERSITY, OHIO, USA</option>
                <option value="COE COLLEGE CEDAR RADIDS IOWA, USA">COE COLLEGE CEDAR RADIDS IOWA, USA</option>
                <option value="COGSWELL COLLEGE SAN FRANCISCO CALIF USA">COGSWELL COLLEGE SAN FRANCISCO CALIF USA/a>
                </option>
                <option value="COKER COL. HARTSVILLE,SOUTH CAROLINA,USA">COKER COL. HARTSVILLE,SOUTH CAROLINA,USA
                </option>
                <option value="COL. OF CHARLESTON, SOUTH CAROLINA, USA">COL. OF CHARLESTON, SOUTH CAROLINA, USA</option>
                <option value="COL. OF ELIZABETH CONVENT STATION J.,USA">COL. OF ELIZABETH CONVENT STATION J.,USA
                </option>
                <option value="COL. OF MT.STATE JOSEPH-ON-THE-OHIO,US">COL. OF MT.STATE JOSEPH-ON-THE-OHIO,USA</option>
                <option value="COL. OF ST. FRANCIS JOLIET ILLINOIS,USA">COL. OF ST. FRANCIS JOLIET ILLINOIS,USA</option>
                <option value="COL. OF ST.TERESA WINONA MINNESOTA, USA">COL. OF ST.TERESA WINONA MINNESOTA, USA</option>
                <option value="COL.MISERICORDIA,DALLAS,PENNSYLVANIA,USA">COL.MISERICORDIA,DALLAS,PENNSYLVANIA,USA
                </option>
                <option value="COL.OF WILLIAM&MARY WILLIAMSBURG,VIRG.US">COL.OF WILLIAM&MARY WILLIAMSBURG,VIRG.US
                </option>
                <option value="COLBY COLELGE WATERVILLE,MAINE, USA">COLBY COLELGE WATERVILLE,MAINE, USA</option>
                <option value="COLGATE UNIVERSITY.HAMILTON,NEW YORK,USA">COLGATE UNIVERSITY.HAMILTON,NEW YORK,USA
                </option>
                <option value="COLLEGE OF ARTS & SC.AT OSWEGON,N.Y.,US">COLLEGE OF ARTS & SC.AT OSWEGON,N.Y.,USA
                </option>
                <option value="COLLEGE OF DENTAL SCIENCES, DAVENGERE, INDIA">COLLEGE OF DENTAL SCIENCES, DAVENGERE,
                  INDIA</option>
                <option value="COLLEGE OF DENTAL SURGERY MANIPAL, INDIA">COLLEGE OF DENTAL SURGERY MANIPAL, INDIA
                </option>
                <option value="COLLEGE OF GREAT FALLS MONTANA,USA">COLLEGE OF GREAT FALLS MONTANA,USA</option>
                <option value="COLLEGE OF IDAHO CALWELL,USA">COLLEGE OF IDAHO CALWELL,USA</option>
                <option value="COLLEGE OF INSURANCE, NEW YORK, USA">COLLEGE OF INSURANCE, NEW YORK, USA</option>
                <option value="COLLEGE OF LIBRARIANSHIP WALES, U.K.">COLLEGE OF LIBRARIANSHIP WALES, U.K.</option>
                <option value="COLLEGE OF NEW ROCHELLE,NEW YORK,USA">COLLEGE OF NEW ROCHELLE,NEW YORK,USA</option>
                <option value="COLLEGE OF NOTRE DAME BELMONT CALIF.,USA">COLLEGE OF NOTRE DAME BELMONT CALIF.,USA
                </option>
                <option value="COLLEGE OF SANTA FE FE NEW MIXICO USA">COLLEGE OF SANTA FE FE NEW MIXICO USA</option>
                <option value="COLLEGE OF ST. MARY OMAHA,NEBRASKA,USA">COLLEGE OF ST. MARY OMAHA,NEBRASKA,USA</option>
                <option value="COLLEGE OF ST.ROSE,ALBANY,NEW YORK,USA">COLLEGE OF ST.ROSE,ALBANY,NEW YORK,USA</option>
                <option value="COLLEGE OF ST.THOMAS.ST.PAUL MINNESOTA">COLLEGE OF ST.THOMAS.ST.PAUL MINNESOTA</option>
                <option value="COLLEGE OF STEUBENCILLE, OHIO, USA">COLLEGE OF STEUBENCILLE, OHIO, USA</option>
                <option value="COLLEGE OF WOOSTER , WOOSTER, OHIO,USA">COLLEGE OF WOOSTER , WOOSTER, OHIO,USA</option>
                <option value="COLOMBIA STATE UNIVERSITY,METAIRIE, USA">COLOMBIA STATE UNIVERSITY,METAIRIE, USA</option>
                <option value="COLOMBUS COLLEGE COLOMBUS GEORGIA USA">COLOMBUS COLLEGE COLOMBUS GEORGIA USA</option>
                <option value="COLORADO COLLEGE COLARADO SORINGS,USA">COLORADO COLLEGE COLARADO SORINGS,USA</option>
                <option value="COLORADO SCHOOL OF MINES,GOLDEN,USA">COLORADO SCHOOL OF MINES,GOLDEN,USA</option>
                <option value="COLORADO STATE UNIVERSITY, FORT COLLINS">COLORADO STATE UNIVERSITY, FORT COLLINS</option>
                <option value="COLORADO WOMEN'S COLLEGE,DENVER,USA">COLORADO WOMEN'S COLLEGE,DENVER,USA</option>
                <option value="COLUMBIA COLLEGE, SOUTH CAROLINA,USA">COLUMBIA COLLEGE, SOUTH CAROLINA,USA</option>
                <option value="COLUMBIA UNI. BARNARD COL.,NEW YORK,USA">COLUMBIA UNI. BARNARD COL.,NEW YORK,USA</option>
                <option value="COLUMBIA UNI. TEACHERS COL.,NEW YORK,USA">COLUMBIA UNI. TEACHERS COL.,NEW YORK,USA
                </option>
                <option value="COLUMBIA UNION C.TAKOMA PARK,MARYLAND US">COLUMBIA UNION C.TAKOMA PARK,MARYLAND US
                </option>
                <option value="COLUMBIA UNIVERSITY, NEW YORK, US">COLUMBIA UNIVERSITY, NEW YORK, USA</option>
                <option value="CONCODIA COLLEGE MOORHEAD MINNESOTA,USA">CONCODIA COLLEGE MOORHEAD MINNESOTA,USA</option>
                <option value="CONCORD COLLEGE,ATHENS,WEST VIRGINIA,USA">CONCORD COLLEGE,ATHENS,WEST VIRGINIA,USA
                </option>
                <option value="CONCORDIA COLLEGE ST.PAUL MINNESOTA USA">CONCORDIA COLLEGE ST.PAUL MINNESOTA USA</option>
                <option value="CONCORDIA TEACH C.RIVER FOREST ILL.,USA">CONCORDIA TEACH C.RIVER FOREST ILL.,USA</option>
                <option value="CONCORDIA TEACH'S C.SEWARD,NEBRASKA,USA">CONCORDIA TEACH'S C.SEWARD,NEBRASKA,USA</option>
                <option value="CONCORDIA UNIVERSITY,MONTREAL,CANADA">CONCORDIA UNIVERSITY,MONTREAL,CANADA</option>
                <option value="CONNECTICUT COLLEGE, NEW LONDON, USA">CONNECTICUT COLLEGE, NEW LONDON, USA</option>
                <option value="CONVENTRY POLYTECHNIC, UNITED KINGDOM">CONVENTRY POLYTECHNIC, UNITED KINGDOM</option>
                <option value="CONVENTRY TECHNICAL COLLEGE, U.K.">CONVENTRY TECHNICAL COLLEGE, U.K.</option>
                <option value="CONVERSE C. SPARATANBURG, S.CAROLINA USA">CONVERSE C. SPARATANBURG, S.CAROLINA USA
                </option>
                <option value="COOPER UNION UNIVERSITY,NEW YORK, USA">COOPER UNION UNIVERSITY,NEW YORK, USA</option>
                <option value="COPPIN STATE COL. BALTIMORE,MARYLAND,USA">COPPIN STATE COL. BALTIMORE,MARYLAND,USA
                </option>
                <option value="CORNELL COLLEGE MOUNT VERNON IOWA, USA">CORNELL COLLEGE MOUNT VERNON IOWA, USA</option>
                <option value="CORNELL U. N.Y. ST. SCH.OF IND.& LAB,USA">CORNELL U. N.Y. ST. SCH.OF IND.& LAB,USA
                </option>
                <option value="CORNELL UNI. N.Y STATE COL.OF AGRI.,USA">CORNELL UNI. N.Y STATE COL.OF AGRI.,USA</option>
                <option value="CORNELL UNI. N.Y. ST. COL.OF HUN ECOL,US">CORNELL UNI. N.Y. ST. COL.OF HUN ECOL,US
                </option>
                <option value="CORNELL UNIVERSITY,ITHACA,NEW YORK,USA">CORNELL UNIVERSITY,ITHACA,NEW YORK,USA</option>
                <option value="COVENANT C TENNESSE C TENNESSE GEORGI">COVENANT C TENNESSE C TENNESSE GEORGIA</option>
                <option value="COVENTRY UNIVERSITY">COVENTRY UNIVERSITY</option>
                <option value="CRANFIELD INSTITUTE OF TECHNOLOGY, U.K.">CRANFIELD INSTITUTE OF TECHNOLOGY, U.K.</option>
                <option value="CREIGHTON UNIVERSITY OMAHA,NEBRASKA,USA">CREIGHTON UNIVERSITY OMAHA,NEBRASKA,USA</option>
                <option value="CREWE AND ALSAGER COLLEGE, UK.">CREWE AND ALSAGER COLLEGE, UK.</option>
                <option value="CRIMEA STATE MEDICAL UNIVERSITY">CRIMEA STATE MEDICAL UNIVERSITY</option>
                <option value="KOLEJ MCSCUMBERLAND C.WILLIANSBURG,KENTUCKY, USAKOLEJ MCS">KOLEJ MCSCUMBERLAND
                  C.WILLIANSBURG,KENTUCKY, USAKOLEJ MCS</option>
                <option value="CURRY COLLEGE, MILTON, MASSACHUSETTS,USA">CURRY COLLEGE, MILTON, MASSACHUSETTS,USA
                </option>
                <option value="CURTIN UNI. OF TECHNOLOGY (PERTH) AUSTR.">CURTIN UNI. OF TECHNOLOGY (PERTH) AUSTR.
                </option>
                <option value="D'YOUVILLE COLLEGE,BUFFALO,NEW YORK,USA">D'YOUVILLE COLLEGE,BUFFALO,NEW YORK,USA</option>
                <option value="DAEMEN COLLEGE,AMHERST,NEW YORK, USA">DAEMEN COLLEGE,AMHERST,NEW YORK, USA</option>
                <option value="DAITO BUNKA UNIVERSITY, JAPAN">DAITO BUNKA UNIVERSITY, JAPAN</option>
                <option value="DAKOTA STATE COL. MADISON, S.DAKOTA, USA">DAKOTA STATE COL. MADISON, S.DAKOTA, USA
                </option>
                <option value="DAKOTA WESLEYAN UNI. MITCHELL, S.DAKOTA">DAKOTA WESLEYAN UNI. MITCHELL, S.DAKOTA</option>
                <option value="DALHOUSIE UNIVERSITY,CANADA">DALHOUSIE UNIVERSITY,CANADA</option>
                <option value="DALLAS BAPTIST COLLEGE, TEXAS, USA">DALLAS BAPTIST COLLEGE, TEXAS, USA</option>
                <option value="DANA COLLEGE BLAIR,NEBRASKA,USAKOLEJ MCS">DANA COLLEGE BLAIR,NEBRASKA,USAKOLEJ MCS
                </option>
                <option value="DANISH TECHNICAL UNIVERSITY, DENMARK">DANISH TECHNICAL UNIVERSITY, DENMARK</option>
                <option value="DANMARKS INGENIORAKADEMI AALBORG">DANMARKS INGENIORAKADEMI AALBORG</option>
                <option value="DANMARKS INGENIORAKADEMI KOBENHAVN,DENM">DANMARKS INGENIORAKADEMI KOBENHAVN,DENM</option>
                <option value="DARBANGA MEDICAL COLLEGE, INDIA">DARBANGA MEDICAL COLLEGE, INDIA</option>
                <option value="DARLING DOWNS INST.OF ADV.EDUC.AUSTRALIAS">DARLING DOWNS INST.OF ADV.EDUC.AUSTRALIAS
                </option>
                <option value="DARTMOUTH COL. HANOVER NEW HAMSHIRE,USA">DARTMOUTH COL. HANOVER NEW HAMSHIRE,USA</option>
                <option value="DAVAO MEDICAL SCHOOL FOUNDATION (DMSF), PHILIPPINES">DAVAO MEDICAL SCHOOL FOUNDATION
                  (DMSF), PHILIPPINES</option>
                <option value="DAVID LIPSCOMB C.,NASHVILLE TENNES,USA">DAVID LIPSCOMB C.,NASHVILLE TENNES,USA</option>
                <option value="DAVIDSON COLLEGE,NORTH CAROLINA,USA">DAVIDSON COLLEGE,NORTH CAROLINA,USA</option>
                <option value="DAVIS AND ELKINS COL. WEST VIRGINIA,USA">DAVIS AND ELKINS COL. WEST VIRGINIA,USA</option>
                <option value="DBERLIN COLLEGE,OBERLIN,OHIO,USA">DBERLIN COLLEGE,OBERLIN,OHIO,USA</option>
                <option value="DE LOURENCO MARQUES (MOZAMBIQUE)PORTUGAL">DE LOURENCO MARQUES (MOZAMBIQUE)PORTUGAL
                </option>
                <option value="DE MONTFORT UNIVERSITY">DE MONTFORT UNIVERSITY</option>
                <option value="DE MONTMORENCY C.OF DEN.LAHORE,PAKISTAN">DE MONTMORENCY C.OF DEN.LAHORE,PAKISTAN</option>
                <option value="DEAKIN UNIVERSITY MELBOURNE, AUSTRALIA">DEAKIN UNIVERSITY MELBOURNE, AUSTRALIA</option>
                <option value="DEAKIN UNIVERSITY VICTORIA, AUSTRALIA">DEAKIN UNIVERSITY VICTORIA, AUSTRALIA</option>
                <option value="DEAKIN UNIVERSITY, GEELONG, AUSTRALIA">DEAKIN UNIVERSITY, GEELONG, AUSTRALIA</option>
                <option value="DEFIANCE COLLEGE, DEFIANCE, OHIO, USA">DEFIANCE COLLEGE, DEFIANCE, OHIO, USA</option>
                <option value="DELAWARE STATE COLLEGE, DOVER, USA">DELAWARE STATE COLLEGE, DOVER, USA</option>
                <option value="DELAWARE VALLEY COL.OF SC.& AGRI.PA.,USA">DELAWARE VALLEY COL.OF SC.& AGRI.PA.,USA
                </option>
                <option value="DELTA ST. UNI. CLEVELAND,MISSI., USA">DELTA ST. UNI. CLEVELAND,MISSI., USA</option>
                <option value="DENISON UNIVERSITY GRANVILLE, OHIO,USA">DENISON UNIVERSITY GRANVILLE, OHIO,USA</option>
                <option value="DENMARK TECHINICAL UNIVERSITY, DENMARK">DENMARK TECHINICAL UNIVERSITY, DENMARK</option>
                <option value="DENMARKS TEKNISKE HOJSKOLE KOBENHAVN">DENMARKS TEKNISKE HOJSKOLE KOBENHAVN</option>
                <option value="DEPART.OF TECHNICAL&FURTHER EDU. NEW.S.W">DEPART.OF TECHNICAL&FURTHER EDU. NEW.S.W
                </option>
                <option value="DEPAUL UNIVERSITY CHICAGO ILLINOIS,USA">DEPAUL UNIVERSITY CHICAGO ILLINOIS,USA</option>
                <option value="DEPAUW UNI. GREENCASTLE INDIANA,USA">DEPAUW UNI. GREENCASTLE INDIANA,USA</option>
                <option value="DERBY AND DISTRICT C. OF TEC. U.K.">DERBY AND DISTRICT C. OF TEC. U.K.</option>
                <option value="DETROIT INST. OF TECHNOLOGY MICH., USA">DETROIT INST. OF TECHNOLOGY MICH., USA</option>
                <option value="DICKINSON STATE COL.,DICKINSON,N.D.,USA">DICKINSON STATE COL.,DICKINSON,N.D.,USA</option>
                <option value="DICKSON COL. CARLISLE,PENNSYLVANIA, USA">DICKSON COL. CARLISLE,PENNSYLVANIA, USA</option>
                <option value="DILLARD UNI. NEW ORLEANS, LOUISIANA, USA">DILLARD UNI. NEW ORLEANS, LOUISIANA, USA
                </option>
                <option value="DIVINE WORD COLLEGE EPEORTH IOWA, USA">DIVINE WORD COLLEGE EPEORTH IOWA, USA</option>
                <option value="DOANE COLLEGE CRETE,NEBRASKA,USA">DOANE COLLEGE CRETE,NEBRASKA,USA</option>
                <option value="DOMINICAN COL. OF SAN RAFAEL CALIF, USA">DOMINICAN COL. OF SAN RAFAEL CALIF, USA</option>
                <option value="DON BOSCO COLLEGE NEWTON NEW JERSEY USA">DON BOSCO COLLEGE NEWTON NEW JERSEY USA</option>
                <option value="DONGYANG TECHMCAL COLLAGE, SEOUL KOREA">DONGYANG TECHMCAL COLLAGE, SEOUL KOREA</option>
                <option value="DORDT COLLEGE SIOUX CENTRE IOWA, USA">DORDT COLLEGE SIOUX CENTRE IOWA, USA</option>
                <option value="DORSET INSTITUT OF HIGHER EDUCATION">DORSET INSTITUT OF HIGHER EDUCATION</option>
                <option value="DOWLING COLLEGE,OAKDALE,NEW YORK, USA">DOWLING COLLEGE,OAKDALE,NEW YORK, USA</option>
                <option value="DR. M.G.R MEDICAL UNIVERSITY, INDIA">DR. M.G.R MEDICAL UNIVERSITY, INDIA</option>
                <option value="DR.BR.AMBEDKAR MEDICAL COLEGE BANGLORE">DR.BR.AMBEDKAR MEDICAL COLEGE BANGLORE</option>
                <option value="DRAKE UNIVERSITY DES MOINES IOWA USA">DRAKE UNIVERSITY DES MOINES IOWA USA</option>
                <option value="KOLEJ MCSDREGON INST.OF TECH. KLAMATH FALLS,U.S.A">KOLEJ MCSDREGON INST.OF TECH. KLAMATH
                  FALLS,U.S.A</option>
                <option value="DREW UNIVERSITY MADISON NEW JERSEY USA">DREW UNIVERSITY MADISON NEW JERSEY USA</option>
                <option value="DREXEL U. PHILADELPHIA, PENNSYLVANIA,USA">DREXEL U. PHILADELPHIA, PENNSYLVANIA,USA
                </option>
                <option value="DREXEL U. PHILADELPHIA, PENNSYLVANIA,USA">DREXEL U. PHILADELPHIA, PENNSYLVANIA,USA
                </option>
                <option value="DUBLIN CITY UNIVERSITY">DUBLIN CITY UNIVERSITY</option>
                <option value="DUBLIN COLLEGE OF TEC. U.K.">DUBLIN COLLEGE OF TEC. U.K.</option>
                <option value="DUKE UNIVERSITY,DURHAM,NORTH CAROLINA,US">DUKE UNIVERSITY,DURHAM,NORTH CAROLINA,US
                </option>
                <option value="DUNDEE COLLEGE OF TECHNOLOGY, U.K.S">DUNDEE COLLEGE OF TECHNOLOGY, U.K.S</option>
                <option value="UQUENSE UNI.PITTSBURG,PENNSYLVANIA,USA">DUQUENSE UNI.PITTSBURG,PENNSYLVANIA,USA</option>
                <option value="DURHAM COLLEGE, OSHAWA, ONTARIO KANADA">DURHAM COLLEGE, OSHAWA, ONTARIO KANADA</option>
                <option value="EALING C. OF HIGHER EDUCATION, U.K.">EALING C. OF HIGHER EDUCATION, U.K.</option>
                <option value="EALING TECHNICAL COLLEGE, UNITED KINGDOM">EALING TECHNICAL COLLEGE, UNITED KINGDOM
                </option>
                <option value="EAMAPO COLLEGE OF NEW JERSEY MAHWAH NJ">EAMAPO COLLEGE OF NEW JERSEY MAHWAH NJ</option>
                <option value="EARLHAM COLLEGE RICHMOND INDIANA,USA">EARLHAM COLLEGE RICHMOND INDIANA,USA</option>
                <option value="EAST CAROLINA U.GREENVILLE,N.CAROLINA,US">EAST CAROLINA U.GREENVILLE,N.CAROLINA,US
                </option>
                <option value="EAST CENTRAL OKLAHOMA STATE U.ADA,U.S.A">EAST CENTRAL OKLAHOMA STATE U.ADA,U.S.A</option>
                <option value="EAST HAM TEC. COLLEGE LONDON. U.K">EAST HAM TEC. COLLEGE LONDON. U.K.</option>
                <option value="EAST PAKISTAN AGRI.U.MYMENSINGH PAKISTANS">EAST PAKISTAN AGRI.U.MYMENSINGH PAKISTANS
                </option>
                <option value="EAST PAKISTAN C.OF.VET.SC.& ANI.HUSB.PAK">EAST PAKISTAN C.OF.VET.SC.& ANI.HUSB.PAK
                </option>
                <option value="EAST STROUDSBURG STATE C.PENNSYLVANIA US">EAST STROUDSBURG STATE C.PENNSYLVANIA US
                </option>
                <option value="EAST TENNES. STATE UNI.JOHNSON CITY, USA">EAST TENNES. STATE UNI.JOHNSON CITY, USA
                </option>
                <option value="EAST TEXAS BAPTIST COL.MARSHALL,TEXAS">EAST TEXAS BAPTIST COL.MARSHALL,TEXAS</option>
                <option value="EAST TEXAS STATE UNI.COMMERCE,TEXAS,USA">EAST TEXAS STATE UNI.COMMERCE,TEXAS,USA</option>
                <option value="EASTERN BAPTIST TGC.SEM.PHILADILPHIA,PA">EASTERN BAPTIST TGC.SEM.PHILADILPHIA,PA</option>
                <option value="EASTERN COL. ST.DAVIDS, PENNSYLVANIA,USA">EASTERN COL. ST.DAVIDS, PENNSYLVANIA,USA
                </option>
                <option value="EASTERN CONN. STATE C WILLIAMANTIA, USA">EASTERN CONN. STATE C WILLIAMANTIA, USA</option>
                <option value="EASTERN DREGON ST. COLLEGE,LA GRANDE,USA">EASTERN DREGON ST. COLLEGE,LA GRANDE,USA
                </option>
                <option value="EASTERN ILLINOIS UNI. CHARLESTON,USA">EASTERN ILLINOIS UNI. CHARLESTON,USA</option>
                <option value="EASTERN KENTUCKY UNI., RICHMOND, USA">EASTERN KENTUCKY UNI., RICHMOND, USA</option>
                <option value="EASTERN MENNONITE C.HARRISONBURG,VERG.US">EASTERN MENNONITE C.HARRISONBURG,VERG.US
                </option>
                <option value="EASTERN MICH. UNI.,YPSILANTI, MICH., USA">EASTERN MICH. UNI.,YPSILANTI, MICH., USA
                </option>
                <option value="EASTERN MONTANA COLLEGE BILLINGS,USA">EASTERN MONTANA COLLEGE BILLINGS,USA</option>
                <option value="EASTERN N.MEXICO U PORTALES N.MEXICO,USA">EASTERN N.MEXICO U PORTALES N.MEXICO,USA
                </option>
                <option value="EASTERN NAZARENE CWOLLASRON, MASS., USA">EASTERN NAZARENE CWOLLASRON, MASS., USA</option>
                <option value="EASTERN PAKISTAN VET.C.U.OF.DACCA,PAKIS">EASTERN PAKISTAN VET.C.U.OF.DACCA,PAKIS</option>
                <option value="EASTERN WASHINGTON STATE C. CHENEY, USA">EASTERN WASHINGTON STATE C. CHENEY, USA</option>
                <option value="EASTERN WASHINGTON UNIVERSITY AT CHENEY">EASTERN WASHINGTON UNIVERSITY AT CHENEY</option>
                <option value="EC.APPLI.ARTILL.GENIE ECCLE ROYALE MILITS">EC.APPLI.ARTILL.GENIE ECCLE ROYALE MILITS
                </option>
                <option value="ECKERD COLLEGE ST PETERSBURG FLORIDA USA">ECKERD COLLEGE ST PETERSBURG FLORIDA USA
                </option>
                <option value="ECOLE D'ARCHITECTURE LANGUEDOC-ROUSSILLO">ECOLE D'ARCHITECTURE LANGUEDOC-ROUSSILLO
                </option>
                <option value="ECOLE NATIONALE D'INGNÉNIEURS DE METZ">ECOLE NATIONALE D'INGNÉNIEURS DE METZ</option>
                <option value="ECOLE NATIONALE SUPÉRIEURE DES ARTS ET MÉTIERS (ENSAM)">ECOLE NATIONALE SUPÉRIEURE DES
                  ARTS ET MÉTIERS (ENSAM)</option>
                <option value="ECOLE NATIONALE SUPERIEURE DES INDUSTRIES CHIMIQUES (ENSIC)">ECOLE NATIONALE SUPERIEURE
                  DES INDUSTRIES CHIMIQUES (ENSIC)</option>
                <option value="ECOLE POLYTECHIQUE LAUSANNA SWITZERLAND">ECOLE POLYTECHIQUE LAUSANNA SWITZERLAND</option>
                <option value="ECOLE POLYTECHNIQUE,CANADA">ECOLE POLYTECHNIQUE,CANADA</option>
                <option value="EDGECLIFF COLLEGE, CINCINNATI,OHIO,USA">EDGECLIFF COLLEGE, CINCINNATI,OHIO,USA</option>
                <option value="EDGEWOOD COLLEGE,MADISON,WISCONSIN,USA">EDGEWOOD COLLEGE,MADISON,WISCONSIN,USA</option>
                <option value="EDINBORO STATE COL. PENNSYLVANIA, USA">EDINBORO STATE COL. PENNSYLVANIA, USA</option>
                <option value="EDINBURGH COLLEGE OF DOMESTIC SCIENCE,UK">EDINBURGH COLLEGE OF DOMESTIC SCIENCE,UK
                </option>
                <option value="EDITH COWAN UNIVERSITY PERTH,WESTERN,AUS">EDITH COWAN UNIVERSITY PERTH,WESTERN,AUS
                </option>
                <option value="EIDGENDSSICHE TEC.HOCHSCHULE ZURICH,SWIT">EIDGENDSSICHE TEC.HOCHSCHULE ZURICH,SWIT
                </option>
                <option value="ELIZABETH CITY STATE UNI. N.CAROLINA,USA">ELIZABETH CITY STATE UNI. N.CAROLINA,USA
                </option>
                <option value="ELIZABETH TOWN COL., PENNSYLVANIA, USA">ELIZABETH TOWN COL., PENNSYLVANIA, USA</option>
                <option value="ELMHURST COLLEGE ILLINOIS,USA">ELMHURST COLLEGE ILLINOIS,USA</option>
                <option value="ELMIRA COLLEGE,ELMIRA,NEW YORK, USA">ELMIRA COLLEGE,ELMIRA,NEW YORK, USA</option>
                <option value="ELON COLLEGE,ELON,NORTH CAROLINA,USA">ELON COLLEGE,ELON,NORTH CAROLINA,USA</option>
                <option value="EMBRY RIDDLE AERONAUT UNI. DAYTONA BEACH">EMBRY RIDDLE AERONAUT UNI. DAYTONA BEACH
                </option>
                <option value="EMERSON COL. BOSTON MASSACHUSETTS, US">EMERSON COL. BOSTON MASSACHUSETTS, USA</option>
                <option value="EMILY MC PHERSON COL.MELBOURNE,AUSTRALIA">EMILY MC PHERSON COL.MELBOURNE,AUSTRALIA
                </option>
                <option value="EMMANUEL COL. BOSTON MASSACHUSETTS, USA">EMMANUEL COL. BOSTON MASSACHUSETTS, USA</option>
                <option value="EMORY UNIVERSITY ATLANTA GEORGIA, USA">EMORY UNIVERSITY ATLANTA GEORGIA, USA</option>
                <option value="EMORYAND HENDRY COLLEGE, VIRGINIA, USA">EMORYAND HENDRY COLLEGE, VIRGINIA, USA</option>
                <option value="EMPORIA STATE UNIVERSITY, USA">EMPORIA STATE UNIVERSITY, USA</option>
                <option value="ENFIELD COLLEGE OF TEC. U.K.">ENFIELD COLLEGE OF TEC. U.K.</option>
                <option value="ENGEN.FABRIS DIP.PAR LA ACADE MILITAR">ENGEN.FABRIS DIP.PAR LA ACADE MILITAR</option>
                <option value="ENGEN.HIDROGRAFOS DIP.PER LEMINIS.DE MAR">ENGEN.HIDROGRAFOS DIP.PER LEMINIS.DE MAR
                </option>
                <option value="ENTHNIKON METSOVIEN POLYTECHNION,GREECE">ENTHNIKON METSOVIEN POLYTECHNION,GREECE</option>
                <option value="ERSKINE COLLEGE,DUE WEST,S. CAROLINA,USA">ERSKINE COLLEGE,DUE WEST,S. CAROLINA,USA
                </option>
                <option value="ESC. TEC. SUP. DE. MINAS MADRID,SPAIN">ESC. TEC. SUP. DE. MINAS MADRID,SPAIN</option>
                <option value="ESC.TEC.DE.INGEN.DE.COMIN.CANELS,SPA">ESC.TEC.DE.INGEN.DE.COMIN.CANELS,SPAIN</option>
                <option value="ESC.TEC.SUP.DE INGEN.DE MINAS OVIEDA,SPA">ESC.TEC.SUP.DE INGEN.DE MINAS OVIEDA,SPA
                </option>
                <option value="ESC.TEC.SUP.DE INGEN.INDUS,BARCELONA,SP">ESC.TEC.SUP.DE INGEN.INDUS,BARCELONA,SPA
                </option>
                <option value="ESC.TEC.SUP.DE INGEN.INDUS.BILBAO SPAI">ESC.TEC.SUP.DE INGEN.INDUS.BILBAO SPAIN</option>
                <option value="ESC.TEC.SUP.DE INGEN.INDUS.MADRID,SPAIN">ESC.TEC.SUP.DE INGEN.INDUS.MADRID,SPAIN</option>
                <option value="ESC.TEC.SUP.DE INGEN.INDUS.SAN SEBASTIAN">ESC.TEC.SUP.DE INGEN.INDUS.SAN SEBASTIAN
                </option>
                <option value="ESC.TEC.SUP.DE INGEN.INDUS.SEVILLA SPAIN">ESC.TEC.SUP.DE INGEN.INDUS.SEVILLA SPAIN
                </option>
                <option value="ESC.TEC.SUP.DE INGEN.INDUS.TARRASA,SPAIN">ESC.TEC.SUP.DE INGEN.INDUS.TARRASA,SPAIN
                </option>
                <option value="ESC.TEC.SUP.DE INGEN.INDUS.VALENICA,SPA">ESC.TEC.SUP.DE INGEN.INDUS.VALENICA,SPA</option>
                <option value="ESC.TEC.SUP.DE INGEN.NAVELES MADRID SPA">ESC.TEC.SUP.DE INGEN.NAVELES MADRID SPA</option>
                <option value="ESC.TEC.SUP.DE. INGEN.DE TELEC.MADRID SP">ESC.TEC.SUP.DE. INGEN.DE TELEC.MADRID SP
                </option>
                <option value="ESC.TEC.SUP.DE. MONTES MADRID SPAIN">ESC.TEC.SUP.DE. MONTES MADRID SPAIN</option>
                <option value="ESC.TEC.SUP.DE.INGEN.AERONAU.MADRID,SPA">ESC.TEC.SUP.DE.INGEN.AERONAU.MADRID,SPA.
                </option>
                <option value="ESC.TEC.SUP.DE.INGEN.AGRONOM.COROOBA.SPA">ESC.TEC.SUP.DE.INGEN.AGRONOM.COROOBA.SPA
                </option>
                <option value="ESC.TEC.SUP.DE.INGEN.AGRONOM.MADRID,SPA">ESC.TEC.SUP.DE.INGEN.AGRONOM.MADRID,SPA</option>
                <option value="ESC.TEC.SUP.DE.INGEN.AGRONOM.VALENCIA,SP">ESC.TEC.SUP.DE.INGEN.AGRONOM.VALENCIA,SP
                </option>
                <option value="ESC.TEC.SUP.DE.INGEN.DE. COMIN.CPUE,MADR">ESC.TEC.SUP.DE.INGEN.DE. COMIN.CPUE,MADR
                </option>
                <option value="ESC.TEC.SUP.DE.INGEN.ELEC.DEL ICAI MADRI">ESC.TEC.SUP.DE.INGEN.ELEC.DEL ICAI MADRI
                </option>
                <option value="EST.TEC.DE.INGEN.DE.COMIN.CANA.Y.PUE.VAL">EST.TEC.DE.INGEN.DE.COMIN.CANA.Y.PUE.VAL
                </option>
                <option value="EUREKA COLLEGE ILLINOIS, USA">EUREKA COLLEGE ILLINOIS, USA</option>
                <option value="EVANGEL COL. SPRINGFIELD MISSOURI,USA">EVANGEL COL. SPRINGFIELD MISSOURI,USA</option>
                <option value="EVERGREEN STATE COLLEGE, OLYMPIAWASH,USA">EVERGREEN STATE COLLEGE, OLYMPIAWASH,USA
                </option>
                <option value="EXETER COLLEGE OF ART, UNITED KINGDOM">EXETER COLLEGE OF ART, UNITED KINGDOM</option>
                <option value="FACHHOCHSCHULE AUGSBURG">FACHHOCHSCHULE AUGSBURG</option>
                <option value="FACHHOCHSCHULE BINGEN, GERMANY">FACHHOCHSCHULE BINGEN, GERMANY</option>
                <option value="FACHHOCHSCHULE COBURG">FACHHOCHSCHULE COBURG</option>
                <option value="FACHHOCHSCHULE FFUR TECHNIK UND WIRTSCHAFT REUTLINGEN">FACHHOCHSCHULE FFUR TECHNIK UND
                  WIRTSCHAFT REUTLINGEN</option>
                <option value="FACHHOCHSCHULE FURTWANGEN">FACHHOCHSCHULE FURTWANGEN</option>
                <option value="FACHHOCHSCHULE HAMBURG, GERMANY">FACHHOCHSCHULE HAMBURG, GERMANY</option>
                <option value="FACHHOCHSCHULE KAISERSLAUTERN">FACHHOCHSCHULE KAISERSLAUTERN</option>
                <option value="FACHHOCHSCHULE KOLN, GERMANY">FACHHOCHSCHULE KOLN, GERMANY</option>
                <option value="FACHHOCHSCHULE KONSTANZ, GERMANY">FACHHOCHSCHULE KONSTANZ, GERMANY</option>
                <option value="FACHHOCHSCHULE LANDSHUT">FACHHOCHSCHULE LANDSHUT</option>
                <option value="FACHHOCHSCHULE LUEBECK">FACHHOCHSCHULE LUEBECK</option>
                <option value="FACHHOCHSCHULE MUNSTER UNIVERSITY OF APPLIED SCIENCE, JERMAN">FACHHOCHSCHULE MUNSTER
                  UNIVERSITY OF APPLIED SCIENCE, JERMAN</option>
                <option value="FACHHOCHSCHULE NIEDERRHEIN, KREFELD">FACHHOCHSCHULE NIEDERRHEIN, KREFELD</option>
                <option value="FACHHOCHSCHULE OFFENBURG, JERMAN">FACHHOCHSCHULE OFFENBURG, JERMAN</option>
                <option value="FACHHOCHSCHULE ULM, GERMANY">FACHHOCHSCHULE ULM, GERMANY</option>
                <option value="FACHHOCHSCHULE WIESBADEN">FACHHOCHSCHULE WIESBADEN</option>
                <option value="FACHHOCHSHULE FUR TECHNIK MANNHEIM">FACHHOCHSHULE FUR TECHNIK MANNHEIM</option>
                <option value="FACHHOCSCHULE FUR TECHNIK ESSLINGEN">FACHHOCSCHULE FUR TECHNIK ESSLINGEN</option>
                <option value="FACOLTA DI INGEGNERIA DI BARI, ITALY">FACOLTA DI INGEGNERIA DI BARI, ITALY</option>
                <option value="FACOLTA DI INGEGNERIA DI BOLOGNA, ITALY">FACOLTA DI INGEGNERIA DI BOLOGNA, ITALY</option>
                <option value="FACOLTA DI INGEGNERIA DI CAGLIARI, ITALY">FACOLTA DI INGEGNERIA DI CAGLIARI, ITALY
                </option>
                <option value="FACOLTA DI INGEGNERIA DI GENOVA, ITALY">FACOLTA DI INGEGNERIA DI GENOVA, ITALY</option>
                <option value="FACOLTA DI INGEGNERIA DI NAPOLI, ITALY">FACOLTA DI INGEGNERIA DI NAPOLI, ITALY</option>
                <option value="FACOLTA DI INGEGNERIA DI PADOVA, ITALY">FACOLTA DI INGEGNERIA DI PADOVA, ITALY</option>
                <option value="FACOLTA DI INGEGNERIA DI PALERMO, ITALY">FACOLTA DI INGEGNERIA DI PALERMO, ITALY</option>
                <option value="FACOLTA DI INGEGNERIA DI PISA, ITALY">FACOLTA DI INGEGNERIA DI PISA, ITALY</option>
                <option value="FACOLTA DI INGEGNERIA DI ROMA, ITALY">FACOLTA DI INGEGNERIA DI ROMA, ITALY</option>
                <option value="FACOLTA DI INGEGNERIA DI TRIESTE, ITALY">FACOLTA DI INGEGNERIA DI TRIESTE, ITALY</option>
                <option value="FACULDADE DE ENGINENHARIA DE PARTO PORTU">FACULDADE DE ENGINENHARIA DE PARTO PORTU
                </option>
                <option value="FACULTE POLYTECHNIC DE MOUS, BELGIUM MCS">FACULTE POLYTECHNIC DE MOUS, BELGIUM MCS
                </option>
                <option value="FAILEIGH DICKINSON UNI. MADISON N.J.,USA">FAILEIGH DICKINSON UNI. MADISON N.J.,USA
                </option>
                <option value="FAIRFIELD UNIVERSITY, CONNECTICUT, USA">FAIRFIELD UNIVERSITY, CONNECTICUT, USA</option>
                <option value="FAIRLEIGH DICKINSON U.RUTHERFORD N.J.USA">FAIRLEIGH DICKINSON U.RUTHERFORD N.J.USA
                </option>
                <option value="FAIRLEIGH DICKINSON UNI.TEANECK N.J.,USA">FAIRLEIGH DICKINSON UNI.TEANECK N.J.,USA
                </option>
                <option value="FAIRMONT STATE COLLEGE,WEST VIRGINIA,USA">FAIRMONT STATE COLLEGE,WEST VIRGINIA,USA
                </option>
                <option value="FAKULTAT FUR BAUINGENIEURWESEN UND.AUST.">FAKULTAT FUR BAUINGENIEURWESEN UND.AUST.
                </option>
                <option value="FALMOUTH SCHOOL OF ART, UNITED KINGDOM">FALMOUTH SCHOOL OF ART, UNITED KINGDOM</option>
                <option value="FATIMA JINNAH MED.COLL FOR WOMEN, LAHORE">FATIMA JINNAH MED.COLL FOR WOMEN, LAHORE
                </option>
                <option value="FAYETTEVILLE STATE UNI. N. CAROLINA,USA">FAYETTEVILLE STATE UNI. N. CAROLINA,USA</option>
                <option value="FEDERAL CITY COLLEGE WASHINGTON DC,USA">FEDERAL CITY COLLEGE WASHINGTON DC,USA</option>
                <option value="FERRIS STATE COL. BIG RAPIDS MICH., USA">FERRIS STATE COL. BIG RAPIDS MICH., USA</option>
                <option value="FERRUM COLLEGE, VIRGINIA,USA">FERRUM COLLEGE, VIRGINIA,USA</option>
                <option value="FINDLAY COLLEGE, FINDLAY, OHIO, USA">FINDLAY COLLEGE, FINDLAY, OHIO, USA</option>
                <option value="FISK UNIVERSITY NASHVILLE, TENNESSEE,USA">FISK UNIVERSITY NASHVILLE, TENNESSEE,USA
                </option>
                <option value="FITCHBURG STATE COLLEGE, MASS., USA">FITCHBURG STATE COLLEGE, MASS., USA</option>
                <option value="FLAGLER COL. ST. AUGUSTINE FLORIDA,USACS">FLAGLER COL. ST. AUGUSTINE FLORIDA,USACS
                </option>
                <option value="FLINDERS UNIVERSITY OF SOUTH AUSTRALIA">FLINDERS UNIVERSITY OF SOUTH AUSTRALIA</option>
                <option value="FLORIDA AFRIC & MECHA UNI.TALLAHASEE,USA">FLORIDA AFRIC & MECHA UNI.TALLAHASEE,USA
                </option>
                <option value="FLORIDA ATLANTIC UNI. BOCA ROTON, USA">FLORIDA ATLANTIC UNI. BOCA ROTON, USA</option>
                <option value="FLORIDA INST.OF TECHNOLOGY MELBOUTNE,USA">FLORIDA INST.OF TECHNOLOGY MELBOUTNE,USA
                </option>
                <option value="FLORIDA INTERNATIONAL UNI. MIAMI, USA">FLORIDA INTERNATIONAL UNI. MIAMI, USA</option>
                <option value="FLORIDA MEMORIAL COLLEGE MIAMI,USA">FLORIDA MEMORIAL COLLEGE MIAMI,USA</option>
                <option value="FLORIDA SOUTHERN COLLEGE LAKELAND,USA">FLORIDA SOUTHERN COLLEGE LAKELAND,USA</option>
                <option value="FLORIDA STATE UNIVERSITY TALLAHASSEE,USA">FLORIDA STATE UNIVERSITY TALLAHASSEE,USA
                </option>
                <option value="FLORIDA TECNOLOGICAL UNI. ORLANDO, USA">FLORIDA TECNOLOGICAL UNI. ORLANDO, USA</option>
                <option value="FONTBONNE COL. ST. LOUIS MISSOURI,USA">FONTBONNE COL. ST. LOUIS MISSOURI,USA</option>
                <option value="FORDHAM UNIVERSITY,BRONX,NEW YORK, USA">FORDHAM UNIVERSITY,BRONX,NEW YORK, USA</option>
                <option value="FORT HAYS KANSAS STATE COLLEGE, USA">FORT HAYS KANSAS STATE COLLEGE, USA</option>
                <option value="FORT LEWIS COLLEGE DURANGE COLORADO,USA">FORT LEWIS COLLEGE DURANGE COLORADO,USA</option>
                <option value="FORT VALLEY STATE COLLEGE GEORGIA,US">FORT VALLEY STATE COLLEGE GEORGIA,USA</option>
                <option value="FORT WRIGHT COLL.,SPOKANE WASHINGTON USA">FORT WRIGHT COLL.,SPOKANE WASHINGTON USA
                </option>
                <option value="FORTSCRAY INST. OF TECHNOLOGY AUSTRALIA">FORTSCRAY INST. OF TECHNOLOGY AUSTRALIA</option>
                <option value="FRACE COLLEGE WINONA LAKE INDIANA USA">FRACE COLLEGE WINONA LAKE INDIANA USA</option>
                <option value="FRAMINGHAM STATE COLLEGE, MASS,. USA">FRAMINGHAM STATE COLLEGE, MASS,. USA</option>
                <option value="FRANCIS MARION C.PROLENCE,S.CAROLINA,USA">FRANCIS MARION C.PROLENCE,S.CAROLINA,USA
                </option>
                <option value="FRANKLIN AND MARSHALL C. LANCESTER,PA US">FRANKLIN AND MARSHALL C. LANCESTER,PA US
                </option>
                <option value="FRANKLIN COLLEGE COLUMBAS, OHIO, USA">FRANKLIN COLLEGE COLUMBAS, OHIO, USA</option>
                <option value="FRANKLIN COLLEGE OF INDIANA USA">FRANKLIN COLLEGE OF INDIANA USA</option>
                <option value="FRANKLIN PIERCE C.RINDGE N.HAMPSHIRE,USA">FRANKLIN PIERCE C.RINDGE N.HAMPSHIRE,USA
                </option>
                <option value="FREDERIKBERG TECHNICAL COLLEGE, DENMARK">FREDERIKBERG TECHNICAL COLLEGE, DENMARK</option>
                <option value="FREED-HARDMAN COL.,HENDERSON, TENN., USA">FREED-HARDMAN COL.,HENDERSON, TENN., USA
                </option>
                <option value="FRESNO PACIFIC COLLEGE CALIFORNIA,USA">FRESNO PACIFIC COLLEGE CALIFORNIA,USA</option>
                <option value="FRIEDRICH-ALEX. U.ERLANGEN-NUNBERG,W.G.">FRIEDRICH-ALEX. U.ERLANGEN-NUNBERG,W.G.</option>
                <option value="FRIENDS UNIVERSITY KANSAS WICHITA, USA">FRIENDS UNIVERSITY KANSAS WICHITA, USA</option>
                <option value="FROSTBURG STATE COLLEGE, MARYLAND, USA">FROSTBURG STATE COLLEGE, MARYLAND, USA</option>
                <option value="FUDAN UNIVERSITY, SHANGHAI, CHINA">FUDAN UNIVERSITY, SHANGHAI, CHINA</option>
                <option value="FUKUSHIMA NATIONAL COLLEGE OF TECHNOLOGY">FUKUSHIMA NATIONAL COLLEGE OF TECHNOLOGY
                </option>
                <option value="FUKUSHIMA UNIVERSITY">FUKUSHIMA UNIVERSITY</option>
                <option value="FURMAN UNI. GRENVILLE,S. CAROLINA, USA">FURMAN UNI. GRENVILLE,S. CAROLINA, USA</option>
                <option value="GALLADET C.OF THE DEAF WASHINGTON DC,USA">GALLADET C.OF THE DEAF WASHINGTON DC,USA
                </option>
                <option value="GANNON UNIVERSITY, ERIE,PENNSYLVANIA,USA">GANNON UNIVERSITY, ERIE,PENNSYLVANIA,USA
                </option>
                <option value="GARDNER-WEBB COLLEGE,BOILING SPRINGS,NC.">GARDNER-WEBB COLLEGE,BOILING SPRINGS,NC.
                </option>
                <option value="GAUHATI UNIVERSITY, INDIA">GAUHATI UNIVERSITY, INDIA</option>
                <option value="GAULFIELD INS. OF TECHNOLOGY,AUSTRALIA">GAULFIELD INS. OF TECHNOLOGY,AUSTRALIA</option>
                <option value="GENERAL MOTOR INST. FLINT, MICH., USA">GENERAL MOTOR INST. FLINT, MICH., USA</option>
                <option value="GENERALE UNIVERSITY, CANADA">GENERALE UNIVERSITY, CANADA</option>
                <option value="GENEVA C. BEAVER FALLS, PENNSYLVANIA,USA">GENEVA C. BEAVER FALLS, PENNSYLVANIA,USA
                </option>
                <option value="GEORGE FOX COLLEGE,NEWBERG,DREGON,U.S.A.">GEORGE FOX COLLEGE,NEWBERG,DREGON,U.S.A.
                </option>
                <option value="GEORGE MASON UNIVERSITY FAIRFAX,VIRG.USA">GEORGE MASON UNIVERSITY FAIRFAX,VIRG.USA
                </option>
                <option value="GEORGE PEABOY C.,FOR TEACHERS NASHC.,USA">GEORGE PEABOY C.,FOR TEACHERS NASHC.,USA
                </option>
                <option value="GEORGE WASHINGTON UNIVERSITY COLUMBIA">GEORGE WASHINGTON UNIVERSITY COLUMBIA</option>
                <option value="GEORGE WASHINGTON, UNIVERSITY, WASH. D.C">GEORGE WASHINGTON, UNIVERSITY, WASH. D.C
                </option>
                <option value="GEORGE WILLIAMS COL. DOWNERS GROVE ILL.">GEORGE WILLIAMS COL. DOWNERS GROVE ILL.</option>
                <option value="GEORGETOWN COLLEGE, KENTUCKY, USA">GEORGETOWN COLLEGE, KENTUCKY, USA</option>
                <option value="GEORGETOWN Y WASHINGTON D.C, USA">GEORGETOWN Y WASHINGTON D.C, USA</option>
                <option value="GEORGIA COLLEGE MILLEGEVILLE, USA">GEORGIA COLLEGE MILLEGEVILLE, USA</option>
                <option value="GEORGIA INST OF TEC ATLANTA GEORGIA USA">GEORGIA INST OF TEC ATLANTA GEORGIA USA</option>
                <option value="GEORGIA SOUTHERN COLLEGE STATESBORO USA">GEORGIA SOUTHERN COLLEGE STATESBORO USA</option>
                <option value="GEORGIA SOUTHWESTERN COL. AMERICUS, USA">GEORGIA SOUTHWESTERN COL. AMERICUS, USA</option>
                <option value="GEORGIA STATE UNIVERSITY ATLANTA,USA">GEORGIA STATE UNIVERSITY ATLANTA,USA</option>
                <option value="GEORGIAN COURT COLLEGE LAKEWOOD N.J.,USA">GEORGIAN COURT COLLEGE LAKEWOOD N.J.,USA
                </option>
                <option value="GERMAN MALAYSIAN INSTITUTE">GERMAN MALAYSIAN INSTITUTE</option>
                <option value="GESAMTHOCHSCHULE KASSEL, WEST GERMANY">GESAMTHOCHSCHULE KASSEL, WEST GERMANY</option>
                <option value="GETTYSBURG COLLEGE, PENNSYLVANIA, USA">GETTYSBURG COLLEGE, PENNSYLVANIA, USA</option>
                <option value="GIFU UNIVERSITY, JEPUN">GIFU UNIVERSITY, JEPUN></option>
                <option value="GIPPSLAND INST. OF ADV. EDUC., AUSTRALIA">GIPPSLAND INST. OF ADV. EDUC., AUSTRALIA
                </option>
                <option value="GLAMORGAN POLITECHNIC, UNITED KINGDOM">GLAMORGAN POLITECHNIC, UNITED KINGDOM</option>
                <option value="GLASGOW CALEDCIAN UNIVERSITY">GLASGOW CALEDCIAN UNIVERSITY</option>
                <option value="GLASGOW CALEDONIAN UNIVERSITY, UK">GLASGOW CALEDONIAN UNIVERSITY, UK</option>
                <option value="GLASGOW COLLEGE OF BUILDING, U.K.">GLASGOW COLLEGE OF BUILDING, U.K.</option>
                <option value="GLASGOW COLLEGE OF DOMESTIC SCIENCE,U.K.">GLASGOW COLLEGE OF DOMESTIC SCIENCE,U.K.
                </option>
                <option value="GLASGOW COLLEGE OF TECHNOLOGY, U.K.<">GLASGOW COLLEGE OF TECHNOLOGY, U.K.</option>
                <option value="GLASGOW SCHOOL OF ART,UNITED KINGDOMS">GLASGOW SCHOOL OF ART,UNITED KINGDOMS</option>
                <option value="GLASSBORO ST. COLLEGE GLASSBORO N.J.,USA">GLASSBORO ST. COLLEGE GLASSBORO N.J.,USA
                </option>
                <option value="GLENVILLE STATE COL.,WEST VIRGINIA,USA">GLENVILLE STATE COL.,WEST VIRGINIA,USA</option>
                <option value="GLOUCESTERSHIRE COLLEGE OF ART&DESIGN,UK">GLOUCESTERSHIRE COLLEGE OF ART&DESIGN,UK
                </option>
                <option value="GLOUCESTERSHIRE INST.HR.EDUC.PITTVILLE">GLOUCESTERSHIRE INST.HR.EDUC.PITTVILLE</option>
                <option value="GLYNDWR UNIVERSITY">GLYNDWR UNIVERSITY</option>
                <option value="GODDARD COLLEGE, FLAINFIELD, VERMONT,USA">GODDARD COLLEGE, FLAINFIELD, VERMONT,USA
                </option>
                <option value="GOLDEN GATE COLLEGE SAN FRANCISCO,CALIF.">GOLDEN GATE COLLEGE SAN FRANCISCO,CALIF.
                </option>
                <option value="GOLDEN GATE UNI. S.FRANCICSO, CALIF.,USAS">GOLDEN GATE UNI. S.FRANCICSO, CALIF.,USAS
                </option>
                <option value="GOLDSMITH COLLEGE SCHOOL OF ART,U.K.">GOLDSMITH COLLEGE SCHOOL OF ART,U.K.</option>
                <option value="GONZAGA U. SPOKANE, WASHINGTON, USA">GONZAGA U. SPOKANE, WASHINGTON, USA</option>
                <option value="GORDON COLLEGEWENHAM, MASSACHUSETTS, USA">GORDON COLLEGEWENHAM, MASSACHUSETTS, USA
                </option>
                <option value="GOSHEN COLLEGE INDIANA,USA">GOSHEN COLLEGE INDIANA,USA</option>
                <option value="GOUCHER COLLEGE TOWSON, MARYLAND, USA">GOUCHER COLLEGE TOWSON, MARYLAND, USA</option>
                <option value="GOVERNORS ST. UNI.PARK FOREST SUTTH ILL.">GOVERNORS ST. UNI.PARK FOREST SUTTH ILL.
                </option>
                <option value="GOVIND BALLABH PANT U.OF AGRI,&TEC.INDIA">GOVIND BALLABH PANT U.OF AGRI,&TEC.INDIA
                </option>
                <option value="GRACELAND COLLEGE LAMONI IOWA, USA">GRACELAND COLLEGE LAMONI IOWA, USA</option>
                <option value="GRAFFITH UNVERSITY, AUSTRALIA">GRAFFITH UNVERSITY, AUSTRALIA</option>
                <option value="GRAMBLING STATE UNI. LOUISIANA, USA">GRAMBLING STATE UNI. LOUISIANA, USA</option>
                <option value="GRANBROOK ACA.OF ART BLOOMFIELD HILLS,US">GRANBROOK ACA.OF ART BLOOMFIELD HILLS,US
                </option>
                <option value="GRAND CANYON COL. PHOENIX,ARIZONA,USA">GRAND CANYON COL. PHOENIX,ARIZONA,USA</option>
                <option value="GRAND VALLEY ST. COL. ALLENDALE MICH,USA">GRAND VALLEY ST. COL. ALLENDALE MICH,USA
                </option>
                <option value="GRAND VIEW COLLEGE MONIES IOWA USA MCS">GRAND VIEW COLLEGE MONIES IOWA USA MCS</option>
                <option value="GRATZ COLLEGE PHILADELPHIA, PA., USA">GRATZ COLLEGE PHILADELPHIA, PA., USA</option>
                <option value="GRAY'S INN, UNITED KINGDOM">GRAY'S INN, UNITED KINGDOM</option>
                <option value="GREENSBORO GOLLEGE,NORTH CAROLINA,USA">GREENSBORO GOLLEGE,NORTH CAROLINA,USA</option>
                <option value="GREEVILLE COLLEGE ILLINOIS, USA">GREEVILLE COLLEGE ILLINOIS, USA</option>
                <option value="GRIFFITH UNIVERSITY, AUSTRALIA">GRIFFITH UNIVERSITY, AUSTRALIA</option>
                <option value="GRINNELL COLLEGE IOWA, USA">GRINNELL COLLEGE IOWA, USA</option>
                <option value="GROVE CITY COLLEGE, PENNSYLVANIA, USA">GROVE CITY COLLEGE, PENNSYLVANIA, USA</option>
                <option value="GUILDHALL SCHOOL OF MUSIC,UNITED KINGDOM">GUILDHALL SCHOOL OF MUSIC,UNITED KINGDOM
                </option>
                <option value="GUILFORD COLLEGE,GREENSBORO,N.CAROLINA">GUILFORD COLLEGE,GREENSBORO,N.CAROLINA</option>
                <option value="GUJARAT UNIVERSITY, INDIAS">GUJARAT UNIVERSITY, INDIAS</option>
                <option value="GUMMA NATIONAL COLLEGE OF TECHNOLOGY">GUMMA NATIONAL COLLEGE OF TECHNOLOGY</option>
                <option value="GUSTAVUS ADOLPHUS C ST PETER MINNESOTA">GUSTAVUS ADOLPHUS C ST PETER MINNESOTA</option>
                <option value="GWENT COLLEGE OF HIGHER EDUCATION,U.K.">GWENT COLLEGE OF HIGHER EDUCATION,U.K.</option>
                <option value="GWYNEDD-MERY COL.,GWYNEDD VALLEY,PA.,USA">GWYNEDD-MERY COL.,GWYNEDD VALLEY,PA.,USA
                </option>
                <option value="HAKODATE NATIONAL COLLEGE OF TECH. JAPAN">HAKODATE NATIONAL COLLEGE OF TECH. JAPAN
                </option>
                <option value="HAMILTON COLLEGE, CLINTON, NEW YORK, USA">HAMILTON COLLEGE, CLINTON, NEW YORK, USA
                </option>
                <option value="HAMLINE UNI. ST. PAUL MINNESOTA , USA">HAMLINE UNI. ST. PAUL MINNESOTA , USA</option>
                <option value="HAMMERSMITH C.OF ART&BUILDING LONDON,UK">HAMMERSMITH C.OF ART&BUILDING LONDON,UK</option>
                <option value="HAMPDEN-SYDNEY COLLEGE, VIRGINIA, USA">HAMPDEN-SYDNEY COLLEGE, VIRGINIA, USA</option>
                <option value="HAMPTON INSTITUTE, VIRGINIA,USA">HAMPTON INSTITUTE, VIRGINIA,USA</option>
                <option value="HAMSHIRE COLLEGE, AMHERST, MASS., USA">HAMSHIRE COLLEGE, AMHERST, MASS., USA</option>
                <option value="HANOVER COLLEGE INDIANA,USA">HANOVER COLLEGE INDIANA,USA</option>
                <option value="HANYANG UNIVERSITI SEOUL,KOREA">HANYANG UNIVERSITI SEOUL,KOREA</option>
                <option value="ARDIN-SIMMONS UNI. ABILENE, TEXAS,USA">HARDIN-SIMMONS UNI. ABILENE, TEXAS,USA</option>
                <option value="HARDING COLLEGE,SEARCY,ARKANSAS, USA">HARDING COLLEGE,SEARCY,ARKANSAS, USA</option>
                <option value="HARRIS STOVE C.M ST. LOUIS MISSOURI, USA">HARRIS STOVE C.M ST. LOUIS MISSOURI, USA
                </option>
                <option value="HARTWICK COLLEGE,ONEONTA, NEW YORK, USA">HARTWICK COLLEGE,ONEONTA, NEW YORK, USA</option>
                <option value="HARVARD S.OF DENTAL MED.BOSTON MASS.USA">HARVARD S.OF DENTAL MED.BOSTON MASS.USA</option>
                <option value="HARVARD UNIVERSITY CAMBRIDGE, MASS., USA">HARVARD UNIVERSITY CAMBRIDGE, MASS., USA
                </option>
                <option value="HARVARD UNIVERSITY WASHINGTON DC., USA">HARVARD UNIVERSITY WASHINGTON DC., USA</option>
                <option value="HARVER MUDD COLLEGE CLAREMONT CALIFORNIA">HARVER MUDD COLLEGE CLAREMONT CALIFORNIA
                </option>
                <option value="HASTINGS COLLEGE,HASTINGS,NEBRASKA,USA">HASTINGS COLLEGE,HASTINGS,NEBRASKA,USA</option>
                <option value="HATFIELD POLYTECHNIC, UNITED KINGDOM">HATFIELD POLYTECHNIC, UNITED KINGDOM</option>
                <option value="HAVERFORD COLLEGE, PENNSYLVANIA, USA">HAVERFORD COLLEGE, PENNSYLVANIA, USA</option>
                <option value="HAWAI LOA COLLEGE KANEOHE,USA">HAWAI LOA COLLEGE KANEOHE,USA</option>
                <option value="HAWAI PACIFIC COLLEGE HONOLULU,USA">HAWAI PACIFIC COLLEGE HONOLULU,USA</option>
                <option value="HAWAII PACIFIC UNVERSITY, HONOLULU,HAWAI">HAWAII PACIFIC UNVERSITY, HONOLULU,HAWAI
                </option>
                <option value="HAWAII UNIVERSITY HONOLULU, HAWAII, USA">HAWAII UNIVERSITY HONOLULU, HAWAII, USA</option>
                <option value="HEBREW COLLEGE, BROOKLINE, MASS., USA">HEBREW COLLEGE, BROOKLINE, MASS., USA</option>
                <option value="HEBREW UNION C JEWISH INST RELI LA CALIF">HEBREW UNION C JEWISH INST RELI LA CALIF
                </option>
                <option value="HEBREW UNION COL., CINCINNATI, OHIO,USA">HEBREW UNION COL., CINCINNATI, OHIO,USA</option>
                <option value="HEIDELBERG COLLEGE, TIFFIN, OHIO, USA">HEIDELBERG COLLEGE, TIFFIN, OHIO, USA</option>
                <option value="HEILBRONN, GERMANY">HEILBRONN, GERMANY</option>
                <option value="HELSINKI UNI. OF TECHNOLOGY, FINLAND">HELSINKI UNI. OF TECHNOLOGY, FINLAND</option>
                <option value="HENDERSON STATE U.ARKADELPHIA,ARKANSAS,U">HENDERSON STATE U.ARKADELPHIA,ARKANSAS,U
                </option>
                <option value="HENDON COLLEGE OF TECHNOLOGY,U.K.">HENDON COLLEGE OF TECHNOLOGY,U.K.</option>
                <option value="HENDRIX COLLEGE,CONWAY,ARKANSAS, USA">HENDRIX COLLEGE,CONWAY,ARKANSAS, USA</option>
                <option value="HERIOT-WATT U.EDINBURGH SCOTLAND,U.K.">HERIOT-WATT U.EDINBURGH SCOTLAND,U.K.</option>
                <option value="HIGH POINT COLLEGE,NORTH CAROLINA,USA">HIGH POINT COLLEGE,NORTH CAROLINA,USA</option>
                <option value="HILLSDALE COLLEGE MICHIGAN, USA">HILLSDALE COLLEGE MICHIGAN, USA</option>
                <option value="HIRAM COLLEGE, HIRAM, OHIO, USA">HIRAM COLLEGE, HIRAM, OHIO, USA</option>
                <option value="HIROSHIMA UNIVERSITI, JAPAN">HIROSHIMA UNIVERSITI, JAPAN</option>
                <option value="HITOTSUBASHI UNIVERSITY, JEPUN">HITOTSUBASHI UNIVERSITY, JEPUN</option>
                <option value="HOBART-WILLIAM SMITH COL.GENEVA,N.Y.,USA">HOBART-WILLIAM SMITH COL.GENEVA,N.Y.,USA
                </option>
                <option value="HOCHSCHULE AALEN, GERMANY">HOCHSCHULE AALEN, GERMANY</option>
                <option value="HOCHSCHULE ALBSTADT - SIGMARINGEN">HOCHSCHULE ALBSTADT - SIGMARINGEN</option>
                <option value="HOCHSCHULE FLENSBURG, JERMAN">HOCHSCHULE FLENSBURG, JERMAN</option>
                <option value="HOCHSCHULE KARLSRUHE TECHNIK UND WIRTSCHAFT">HOCHSCHULE KARLSRUHE TECHNIK UND WIRTSCHAFT
                </option>
                <option value="HOCHSCHULE MANNHEIM">HOCHSCHULE MANNHEIM</option>
                <option value="HOCHSCHULE MITTWEIDA UNIVERSITY OF APPLIED SCIENCES, GERMANY">HOCHSCHULE MITTWEIDA
                  UNIVERSITY OF APPLIED SCIENCES, GERMANY</option>
                <option value="HOCHSCHULE OSNABRUECK, GERMANY">HOCHSCHULE OSNABRUECK, GERMANY</option>
                <option value="HOCHSCHULE RAVENSBURG - WEINGARTEN">HOCHSCHULE RAVENSBURG - WEINGARTEN</option>
                <option value="HOFSTRA UNI. HEMSTEAD,L. ISLAND N.Y.,USA">HOFSTRA UNI. HEMSTEAD,L. ISLAND N.Y.,USA
                </option>
                <option value="HOLY FAMILY C MISSION SAN JOSE CALIF USA>HOLY FAMILY C MISSION SAN JOSE CALIF USA">HOLY
                  FAMILY C MISSION SAN JOSE CALIF USA>HOLY FAMILY C MISSION SAN JOSE CALIF USA</option>
                <option value="HOLY FAMILY COL. PHILADELPHIA,PENNS.,USA">HOLY FAMILY COL. PHILADELPHIA,PENNS.,USA
                </option>
                <option value="HOLY NAMES COLLEGE OAKLAND AND CALIF USA">HOLY NAMES COLLEGE OAKLAND AND CALIF USA
                </option>
                <option value="HOOD COLLEGE, FREDERICK, MARYLAND, USA">HOOD COLLEGE, FREDERICK, MARYLAND, USA</option>
                <option value="HOPE COLLEGE HOLLAND MICHIGAN, USA">HOPE COLLEGE HOLLAND MICHIGAN, USA</option>
                <option value="">HOSHSHULE FUR BODENKULTUR WIEN,AUSTRIA</option>
                <option value="HOSHSHULE FUR BODENKULTUR WIEN,AUSTRIA">HOUGHTON COLLEGE,HOUGHTON,NEW YORK, USA</option>
                <option value="HOUSTON BAPTIST COLLEGE, TEXAS, USA">HOUSTON BAPTIST COLLEGE, TEXAS, USA</option>
                <option value="HOUSTON-TILLOTSON COL. AUSTIN, TEXAS,USA">HOUSTON-TILLOTSON COL. AUSTIN, TEXAS,USA
                </option>
                <option value="HOWARD PAYNE COLLEGE BROWNWOOD,TEXAS,USA">HOWARD PAYNE COLLEGE BROWNWOOD,TEXAS,USA
                </option>
                <option value="HUDDERSFIELD COL. OF TECHNOLOGY, U.K.">HUDDERSFIELD COL. OF TECHNOLOGY, U.K.</option>
                <option value="HULL COLLEGE OF HIGHER EDUCATION,U.K.">HULL COLLEGE OF HIGHER EDUCATION,U.K.</option>
                <option value="HUMBERSIDE COL. OF HIGHER EDN.HULL,UK">HUMBERSIDE COL. OF HIGHER EDN.HULL,UK</option>
                <option value="HUMBOLDT ST. UNI. ARCATA CALIFORNIA, USA">HUMBOLDT ST. UNI. ARCATA CALIFORNIA, USA
                </option>
                <option value="HUNTINGTON COLLEGE INDIANA,USA">HUNTINGTON COLLEGE INDIANA,USA</option>
                <option value="HURON COLLEGE, SOUTH DAKOTA, USA">HURON COLLEGE, SOUTH DAKOTA, USA</option>
                <option value="HUSSON COLLEGE, BANGOR, MAINE, USA">HUSSON COLLEGE, BANGOR, MAINE, USA</option>
                <option value="HUTINGDON COLLEGE,MONTGOMERY,ALABAMA,USA">HUTINGDON COLLEGE,MONTGOMERY,ALABAMA,USA
                </option>
                <option value="I.Q. DE SA.PA.ING.IND.SEC,QUT,BCL,SPN.">I.Q. DE SA.PA.ING.IND.SEC,QUT,BCL,SPN.</option>
                <option value="IAIN ALAUDDIN MAKASAR,INDONESIA">IAIN ALAUDDIN MAKASAR,INDONESIA</option>
                <option value="IAIN ANTASARI BANDJARMASIN,INDONESIA">IAIN ANTASARI BANDJARMASIN,INDONESIA</option>
                <option value="IAIN AR RANIRY BANDA ACEH,INDONESIA">IAIN AR RANIRY BANDA ACEH,INDONESIA</option>
                <option value="IAIN IMAN BONJOL PADANG,INDONESIA">IAIN IMAN BONJOL PADANG,INDONESIA</option>
                <option value="IAIN RADEN FATAH PALEMBANG,INDONESIA">IAIN RADEN FATAH PALEMBANG,INDONESIA</option>
                <option value="IAIN RADEN INTAN TG KARANG,INDONESIA">IAIN RADEN INTAN TG KARANG,INDONESIA</option>
                <option value="IAIN SJARIF HIDAJATULLAH DJAKARTA,INDO.">IAIN SJARIF HIDAJATULLAH DJAKARTA,INDO.</option>
                <option value="IAIN SUL.SJARIF QOSIM PEKAN BARU RIAU,IN">IAIN SUL.SJARIF QOSIM PEKAN BARU RIAU,IN
                </option>
                <option value="IAIN SULTHAN THAHA SAIFUDDIN JAMBI,INDO">IAIN SULTHAN THAHA SAIFUDDIN JAMBI,INDO</option>
                <option value="IAIN SUMATERA UTARA, INDONESIA">IAIN SUMATERA UTARA, INDONESIA</option>
                <option value="IAIN SUNAN AMPEL SURABAYA,INDONESIA">IAIN SUNAN AMPEL SURABAYA,INDONESIA</option>
                <option value="IAIN SUNAN GUNUNG DJATI BANDUNG,INDONESIA">IAIN SUNAN GUNUNG DJATI BANDUNG,INDONESIA
                </option>
                <option value="IAIN SUNAN KAJIDJAGA YOGJAKARTA,INDO.">IAIN SUNAN KAJIDJAGA YOGJAKARTA,INDO.</option>
                <option value="IAIN WALI SONGO SEMARANG,INDONESIA">IAIN WALI SONGO SEMARANG,INDONESIA</option>
                <option value="IBARAKI NATIONAL COLLEGE OF TECHNOLOGY">IBARAKI NATIONAL COLLEGE OF TECHNOLOGY</option>
                <option value="IBARAKI UNIVERSITY, JEPUN">IBARAKI UNIVERSITY, JEPUN</option>
                <option value="ICHINOSEKI NATIONAL COLLAGE OF TECH.">ICHINOSEKI NATIONAL COLLAGE OF TECH.</option>
                <option value="IDAHO STATE UNIVERSITY POCATELLO,USA">IDAHO STATE UNIVERSITY POCATELLO,USA</option>
                <option value="IHE DELFT INSTITUTE FOR WATER EDUCATION">IHE DELFT INSTITUTE FOR WATER EDUCATION</option>
                <option value="IKIP BANDUNG,INDONESIA">IKIP BANDUNG,INDONESIA</option>
                <option value="IKIP DJAKARTA,INDONESIA">IKIP DJAKARTA,INDONESIA</option>
                <option value="IKIP MAKASAR,INDONESIA">IKIP MAKASAR,INDONESIA</option>
                <option value="IKIP MALANG,INDONESIA">IKIP MALANG,INDONESIA</option>
                <option value="IKIP MALANG,INDONESIA">IKIP MALANG,INDONESIA</option>
                <option value="IKIP MEDAN,INDONESIA">IKIP MEDAN,INDONESIA</option>
                <option value="IKIP MENADO,INDONESIA">IKIP MENADO,INDONESIA</option>
                <option value="IKIP PADANG,INDONESIA">IKIP PADANG,INDONESIA</option>
                <option value="IKIP SEMARANG/ UNIVERSITAS SEMARANG,INDONESI">IKIP SEMARANG/ UNIVERSITAS
                  SEMARANG,INDONESIA</option>
                <option value="IKIP SURABAYA,INDONESIA">IKIP SURABAYA,INDONESIA</option>
                <option value="IKIP YOGJAKARTA,INDONESIA">IKIP YOGJAKARTA,INDONESIA</option>
                <option value="ILLINOIS BENEDICTINE COLLEGE LISLE USA">ILLINOIS BENEDICTINE COLLEGE LISLE USA</option>
                <option value="ILLINOIS COL. OF POTOMETRY,CHICAGO,USA">ILLINOIS COL. OF POTOMETRY,CHICAGO,USA</option>
                <option value="ILLINOIS COLLEGE JACKSONVILLE, USA">ILLINOIS COLLEGE JACKSONVILLE, USA</option>
                <option value="ILLINOIS INST.OF TECHNOLOGY CHICAGO,USA">ILLINOIS INST.OF TECHNOLOGY CHICAGO,USA</option>
                <option value="ILLINOIS STATE UNIVERSITY, NORMAL USA">ILLINOIS STATE UNIVERSITY, NORMAL USA</option>
                <option value="ILLINOIS WESLEYAN UNI. BLOOMINGTON USA">ILLINOIS WESLEYAN UNI. BLOOMINGTON USA</option>
                <option value="IMMACCULATA COLLEGE, PENNSYLVANIA,USA">IMMACCULATA COLLEGE, PENNSYLVANIA,USA</option>
                <option value="IMMACULATE HEART C LOS ANGELES CALIF,USA">IMMACULATE HEART C LOS ANGELES CALIF,USA
                </option>
                <option value="IMPERIAL COLLEGE OF SC.&TECHNOLOGY,U.K.">IMPERIAL COLLEGE OF SC.&TECHNOLOGY,U.K.</option>
                <option value="IMPERIAL INSTITUTE, UNITED KINGDOM">IMPERIAL INSTITUTE, UNITED KINGDOM</option>
                <option value="INCARNATE WORD C. SAN ANTONIO TEXAS, USA">INCARNATE WORD C. SAN ANTONIO TEXAS, USA
                </option>
                <option value="INDIAN FOREST COLLEGE OF DEHRA DUN,INDIA">INDIAN FOREST COLLEGE OF DEHRA DUN,INDIA
                </option>
                <option value="INDIAN INST. OF SCIENCE BANGALORE INDIA">INDIAN INST. OF SCIENCE BANGALORE INDIA</option>
                <option value="INDIAN INST. OF TEC. KHARAGPUR,INDIA">INDIAN INST. OF TEC. KHARAGPUR,INDIA</option>
                <option value="INDIAN INST. OF TEC. MADRAS,INDIA">INDIAN INST. OF TEC. MADRAS,INDIA</option>
                <option value="INDIAN INSTITUTE OF TEC. DELHI,INDIA">INDIAN INSTITUTE OF TEC. DELHI,INDIA</option>
                <option value="INDIAN INSTITUTE OF TEC. KANPUR,INDIA">INDIAN INSTITUTE OF TEC. KANPUR,INDIA</option>
                <option value="INDIAN INSTITUTE OF TEC.BOMBAY,INDIA">INDIAN INSTITUTE OF TEC.BOMBAY,INDIA</option>
                <option value="INDIANA CENTRAL UNI. INDIAPOLIS,USA">INDIANA CENTRAL UNI. INDIAPOLIS,USA</option>
                <option value="INDIANA INST. OF TECH. PORT WAYNE,USA">INDIANA INST. OF TECH. PORT WAYNE,USA</option>
                <option value="INDIANA STATE UNI. EVANVILLA,USA">INDIANA STATE UNI. EVANVILLA,USA</option>
                <option value="INDIANA STATE UNI. TERRE HAUTE, USA">INDIANA STATE UNI. TERRE HAUTE, USA</option>
                <option value="INDIANA U SOUTHEAST JEFFERSONVILLE USA">INDIANA U SOUTHEAST JEFFERSONVILLE USA</option>
                <option value="INDIANA UNI. BLOOMINGTON,USA">INDIANA UNI. BLOOMINGTON,USA</option>
                <option value="INDIANA UNIVERSITY KOKOMA, USA">INDIANA UNIVERSITY KOKOMA, USA</option>
                <option value="INDIANA UNIVERSITY NORTHWEST, USA">INDIANA UNIVERSITY NORTHWEST, USA</option>
                <option value="INDIANA UNIVERSITY OF PENNSYLVANIA, USA">INDIANA UNIVERSITY OF PENNSYLVANIA, USA</option>
                <option value="INDIANA UNIVERSITY PORT WAYNE,USA">INDIANA UNIVERSITY PORT WAYNE,USA</option>
                <option value="INDIANA UNIVERSITY PURDUE U.INDIANAPOLIS">INDIANA UNIVERSITY PURDUE U.INDIANAPOLIS
                </option>
                <option value="INDIANA UNIVERSITY SOUTH BEND, USA">INDIANA UNIVERSITY SOUTH BEND, USA</option>
                <option value="INDIANAN STATE UNIV. INDIANA, USA">INDIANAN STATE UNIV. INDIANA, USA</option>
                <option value="INHA UNIVERSITY">INHA UNIVERSITY</option>
                <option value="INNER TEMPLE, UNITED KINGDOM">INNER TEMPLE, UNITED KINGDOM</option>
                <option value="INS. MED.SC.& RESEARCH BARATHIAR UNIV">INS. MED.SC.& RESEARCH BARATHIAR UNIV</option>
                <option value="INS. OF INTER. RELATIONS' STUDIES,FRANCE">INS. OF INTER. RELATIONS' STUDIES,FRANCE
                </option>
                <option value="INS. UNIVERSITAIRE DE NANCY 2,NANCY,FRAN">INS. UNIVERSITAIRE DE NANCY 2,NANCY,FRAN
                </option>
                <option value="INST. AGRO.DE U.CATHOLIQUE DE LOUVAIN">INST. AGRO.DE U.CATHOLIQUE DE LOUVAIN</option>
                <option value="INST. OF NORTH DAKOTA,GRAND FORKS, USA">INST. OF NORTH DAKOTA,GRAND FORKS, USA</option>
                <option value="INST. OF TOURISM & HOT. MGT.SALZBURY,AUS">INST. OF TOURISM & HOT. MGT.SALZBURY,AUS
                </option>
                <option value="INST. SUPERIOR DE AGRONOMIA LISBOA PORTU">INST. SUPERIOR DE AGRONOMIA LISBOA PORTU
                </option>
                <option value="INST. SUPERIOR TECNICO LISBOA PORTUGAL">INST. SUPERIOR TECNICO LISBOA PORTUGAL</option>
                <option value="INST.AGRONOMIQUE DE GEMBLOUX, BELGIUM">INST.AGRONOMIQUE DE GEMBLOUX, BELGIUM</option>
                <option value="INST.FOR ARCH.STUDIES NAT. ARCH.OF INDIA">INST.FOR ARCH.STUDIES NAT. ARCH.OF INDIA
                </option>
                <option value="INST.OF ELECTRONIC&RADIO ENGIN.LONDON,UK">INST.OF ELECTRONIC&RADIO ENGIN.LONDON,UK
                </option>
                <option value="INSTITUT AGAMA ISLAM NEGERI SUMATERA UTARA, MEDANKOLEJ MCS">INSTITUT AGAMA ISLAM NEGERI
                  SUMATERA UTARA, MEDANKOLEJ MCS</option>
                <option
                  value="INSTITUT AGAMA ISLAM NEGERI SYARIF HIDAYATULLAH (UNIVERSITAS ISLAM NEGERI SYARIF HIDAYATULLAH)">
                  INSTITUT AGAMA ISLAM NEGERI SYARIF HIDAYATULLAH (UNIVERSITAS ISLAM NEGERI SYARIF HIDAYATULLAH)
                </option>
                <option value="INSTITUT PERTANIAN BOGOR,INDONESIA">INSTITUT PERTANIAN BOGOR,INDONESIA</option>
                <option value="INSTITUT POLYTECHNIQUE DE GRENOBLE">INSTITUT POLYTECHNIQUE DE GRENOBLE</option>
                <option value="INSTITUT SUPÉRIEUR DES SCIENCES ET TECHNIQUES, UNIVERSITY OF PICARDIE, SAINT-QUENTIN">
                  INSTITUT SUPÉRIEUR DES SCIENCES ET TECHNIQUES, UNIVERSITY OF PICARDIE, SAINT-QUENTIN</option>
                <option value="INSTITUT TADBIRAN AWAM NEGARA (INTAN)">INSTITUT TADBIRAN AWAM NEGARA (INTAN)</option>
                <option value="INSTITUT TEKNOLOGI BANDUNG, INDONESIA">INSTITUT TEKNOLOGI BANDUNG, INDONESIA</option>
                <option value="INSTITUT UNIVERSITAIRE DE TECHNOLOGIE (IUT) TOULON-VAR, FRANCE">INSTITUT UNIVERSITAIRE DE
                  TECHNOLOGIE (IUT) TOULON-VAR, FRANCE</option>
                <option value="INSTITUTE HONOLULU,USA">INSTITUTE HONOLULU,USA</option>
                <option value="INSTITUTE OF ACTUARY, UNITED KINGDOM">INSTITUTE OF ACTUARY, UNITED KINGDOM</option>
                <option value="INSTITUTE OF MARKETING, UNITED KINGDOM">INSTITUTE OF MARKETING, UNITED KINGDOM</option>
                <option value="INTER.CNT.FOR STUDY OF THE PRESE&RES.IT.">INTER.CNT.FOR STUDY OF THE PRESE&RES.IT.
                </option>
                <option value="INTERNATIONAL UNIVERSITY OF JAPAN">INTERNATIONAL UNIVERSITY OF JAPAN</option>
                <option value="IONA COLLEGE,NEW ROCHELLE,NEW YORK,USA">IONA COLLEGE,NEW ROCHELLE,NEW YORK,USA</option>
                <option value="IOWA STATE UNIVERSITY AMES, USA">IOWA STATE UNIVERSITY AMES, USA</option>
                <option value="IOWA STATE UNIVERSITY IOWA, U.S.A">IOWA STATE UNIVERSITY IOWA, U.S.A</option>
                <option value="IOWA WESLEYAN COLLEGE MOUNT PLEASANT USA">IOWA WESLEYAN COLLEGE MOUNT PLEASANT USA
                </option>
                <option value="ISHIKAWA NATIONAL COLLEGE OF TECH. JAPAN">ISHIKAWA NATIONAL COLLEGE OF TECH. JAPAN
                </option>
                <option value="ISLE OF ELY COLLEGE,UNITED KINGDOM">ISLE OF ELY COLLEGE,UNITED KINGDOM</option>
                <option value="ITHACA COLLEGE,ITHACA,NEW YORK,USA">ITHACA COLLEGE,ITHACA,NEW YORK,USA</option>
                <option value="IUT AIX EN PROVENCE">IUT AIX EN PROVENCE</option>
                <option value="J. F. KENNEDY UNI. ORINDA CALIFORNIA,USA">J. F. KENNEDY UNI. ORINDA CALIFORNIA,USA
                </option>
                <option value="JACKSON STATE UNIVERSITY MISSISSIPPI,USA">JACKSON STATE UNIVERSITY MISSISSIPPI,USA
                </option>
                <option value="JACKSONVILLE STATE UNI. ALABAMA,USA">JACKSONVILLE STATE UNI. ALABAMA,USA</option>
                <option value="JACKSONVILLE UNIVERSITY FLORIDA, USA">JACKSONVILLE UNIVERSITY FLORIDA, USA</option>
                <option value="JAGIELLONIAN UNIVERSITY MEDICAL COLLEGE">JAGIELLONIAN UNIVERSITY MEDICAL COLLEGE</option>
                <option value="JAMES COOK UNI. OF NORTH QUEENSLAND,AUS.">JAMES COOK UNI. OF NORTH QUEENSLAND,AUS.
                </option>
                <option value="JAMES MADISON UNI. HARRISONBURG,VIRG,USA">JAMES MADISON UNI. HARRISONBURG,VIRG,USA
                </option>
                <option value="AMESTOWN COLLEGE,JAMESTOWN,N.D., USA">AMESTOWN COLLEGE,JAMESTOWN,N.D., USA</option>
                <option value="JAMMU AND KASHMIR UNIVERSITY, INDIA">JAMMU AND KASHMIR UNIVERSITY, INDIA</option>
                <option value="JARVIS CHRISTIAN COL. HAWKINS, TEXAS,USA">JARVIS CHRISTIAN COL. HAWKINS, TEXAS,USA
                </option>
                <option value="JAWAHARLAL NEHRU MED. COLL.,BELGAUM IND.">JAWAHARLAL NEHRU MED. COLL.,BELGAUM IND.
                </option>
                <option value="JEFFERSON MEDICAL C. OF PHILADELPHIA,USA">JEFFERSON MEDICAL C. OF PHILADELPHIA,USA
                </option>
                <option value="JERSEY CITY STATE COLLEGE NEW JERSEY,USA">JERSEY CITY STATE COLLEGE NEW JERSEY,USA
                </option>
                <option value="JEWISH THE SEMINARY OF AMERICA,N.Y.,USA">JEWISH THE SEMINARY OF AMERICA,N.Y.,USA</option>
                <option value="JINAN UNI. MEDICAL COLLAGE GUANZHOU">JINAN UNI. MEDICAL COLLAGE GUANZHOU</option>
                <option value="JIWAJI UNIVERSITY GWALIOR,INDIA">JIWAJI UNIVERSITY GWALIOR,INDIA</option>
                <option value="JOHN BROWN U.SILOAM SPRINGS,ARKANSAS,USA">JOHN BROWN U.SILOAM SPRINGS,ARKANSAS,USA
                </option>
                <option value="JOHN CAROLL UNIVERSITY,CLEVELND OHIO,USA">JOHN CAROLL UNIVERSITY,CLEVELND OHIO,USA
                </option>
                <option value="JOHN HOPKINS UNI. BALTIMORE,MARYLAND,USA">JOHN HOPKINS UNI. BALTIMORE,MARYLAND,USA
                </option>
                <option value="JOHNSON & WALES UNIVERSITY, USA">JOHNSON & WALES UNIVERSITY, USA</option>
                <option value="JOHNSON C.SMITH U.CHARLOTTE,N.CAROLINA">JOHNSON C.SMITH U.CHARLOTTE,N.CAROLINA</option>
                <option value="JOHNSON STATE COLLEGE, VERMONT,USA">JOHNSON STATE COLLEGE, VERMONT,USA</option>
                <option value="JORDAN UNIV. OF SCIENCE AND TECHNOLOGY">JORDAN UNIV. OF SCIENCE AND TECHNOLOGY</option>
                <option value="JSS MEDICAL COLLEGE, MYSORE">JSS MEDICAL COLLEGE, MYSORE</option>
                <option value="JUDSON COLLEGE ELGIN ILLINOIS,USA">JUDSON COLLEGE ELGIN ILLINOIS,USA</option>
                <option value="JUDSON COLLEGE,MARION,ALABAMA,USA">JUDSON COLLEGE,MARION,ALABAMA,USA</option>
                <option value="JUNIATA COL. HUTINGTON, PENNSYLVANIA,USA">JUNIATA COL. HUTINGTON, PENNSYLVANIA,USA
                </option>
                <option value="K.S.HEDGE MEDICAL ACADEMY, MANGALORE, KARNATAKA">K.S.HEDGE MEDICAL ACADEMY, MANGALORE,
                  KARNATAKA</option>
                <option value="KAGAWA UNIVERSITY, JEPUN">KAGAWA UNIVERSITY, JEPUN</option>
                <option value="KALAMAZOO COLLEGE MICHIGAN, USA">KALAMAZOO COLLEGE MICHIGAN, USA</option>
                <option value="KANAZAWA UNIVERSITY, JEPUN">KANAZAWA UNIVERSITY, JEPUN</option>
                <option value="KANPUR UNIVERSITY, INDIA">KANPUR UNIVERSITY, INDIA</option>
                <option value="KANSAS NEWMAN COLLEGE WICHITA, USA">KANSAS NEWMAN COLLEGE WICHITA, USA</option>
                <option value="KANSAS STATE COLLEGE AT PITTSBURG, USA">KANSAS STATE COLLEGE AT PITTSBURG, USA</option>
                <option value="KANSAS STATE UNIVERSITY,MANHATTAN, USA">KANSAS STATE UNIVERSITY,MANHATTAN, USA</option>
                <option value="KANSAS WESLEYAN UNIVERSITY, SALINA, USA">KANSAS WESLEYAN UNIVERSITY, SALINA, USA</option>
                <option value="KARNATAK UNIVERSITY, INDIAKASTURBA MEDICAL COLLEGE INDIA">KARNATAK UNIVERSITY,
                  INDIAKASTURBA MEDICAL COLLEGE INDIA</option>
                <option value="KASTURBA MEDICAL COLLEGE INDIA">KASTURBA MEDICAL COLLEGE INDIA</option>
                <option value="KEAN COLLEGE OF NEW JERSEY UNION N J USA">KEAN COLLEGE OF NEW JERSEY UNION N J USA
                </option>
                <option value="KEARNEY ST.COLLEGE,KEARNEY,NEBRASKA,USA">KEARNEY ST.COLLEGE,KEARNEY,NEBRASKA,USA</option>
                <option value="KEENE ST. COL. KEENE NEW HAMPSHIRE, USA">KEENE ST. COL. KEENE NEW HAMPSHIRE, USA</option>
                <option value="KEENE ST. COL. KEENE NEW HAMPSHIRE, USA">KEENE ST. COL. KEENE NEW HAMPSHIRE, USA</option>
                <option value="KEIO UNIVERSITY TOKYO, JAPAN">KEIO UNIVERSITY TOKYO, JAPAN</option>
                <option value="KENNESAW STATE UNIVERSITY, GEORGIA ,USA">KENNESAW STATE UNIVERSITY, GEORGIA ,USA</option>
                <option value="KENT STATE UNIVERSITY, KNET, OHIO, USA">KENT STATE UNIVERSITY, KNET, OHIO, USA</option>
                <option value="KENTUCKY STATE UNIVERSITY FRANKFORT, USA">KENTUCKY STATE UNIVERSITY FRANKFORT, USA
                </option>
                <option value="KENTUCKY WESLEYAN COLLEGE OWENSBORO, USA">KENTUCKY WESLEYAN COLLEGE OWENSBORO, USA
                </option>
                <option value="KENYON COLLEGE,GAMBIER,OHIO, USA">KENYON COLLEGE,GAMBIER,OHIO, USA</option>
                <option value="KERALA AGRI. UNIVERSITY MANNUTHY,INDIA">KERALA AGRI. UNIVERSITY MANNUTHY,INDIA</option>
                <option value="KERALA VET.COL. ESEARCH INST.,INDIA">KERALA VET.COL. ESEARCH INST.,INDIA</option>
                <option value="KEUKA COLLEGE,KEUKA PARK,NEW YORK,USA">KEUKA COLLEGE,KEUKA PARK,NEW YORK,USA</option>
                <option value="KINDDERMINSTER C.OF HR.EDUC.U.K.">KINDDERMINSTER C.OF HR.EDUC.U.K.</option>
                <option value="KING COLLEGE BRISTOL, TENNESSEE, USA">KING COLLEGE BRISTOL, TENNESSEE, USA</option>
                <option value="KING'S COL. WILKES-BARRE PENN., US">KING'S COL. WILKES-BARRE PENN., USA</option>
                <option value="KING'S INN, DUBLIN">KING'S INN, DUBLIN</option>
                <option value="KINGS COL.,BRIARCLIFF MANOR,N.YORK,USA">KINGS COL.,BRIARCLIFF MANOR,N.YORK,USA</option>
                <option value="KINGS COLLEGE LONDON">KINGS COLLEGE LONDON</option>
                <option value="KINGSTON POLYTECHNIC, UNITED KINGDOM">KINGSTON POLYTECHNIC, UNITED KINGDOM</option>
                <option value="KINGSTON UNIVERSITY">KINGSTON UNIVERSITY</option>
                <option value="KINKI UNIVERSITY, OSAKA, JAPAN">KINKI UNIVERSITY, OSAKA, JAPAN</option>
                <option value="KISARAZU NARIONAL COLLAGE OF RECHNOLOGY">KISARAZU NARIONAL COLLAGE OF RECHNOLOGY</option>
                <option value="KITAKYUSHU NATIONAL COLLEGE OF TECHNOLOGY, JAPAN">KITAKYUSHU NATIONAL COLLEGE OF
                  TECHNOLOGY, JAPAN</option>
                <option value="KITAMI INSTITUTE OF TECHNOLOGY, JEPUN">KITAMI INSTITUTE OF TECHNOLOGY, JEPUN</option>
                <option value="KLE SOCIETY'S INSTITUTE OF DENTAL SCIENCES INDIA">KLE SOCIETY'S INSTITUTE OF DENTAL
                  SCIENCES INDIA</option>
                <option value="KNIGHTBRIDGE UNIVERSITY, UNITED KINGDOM">KNIGHTBRIDGE UNIVERSITY, UNITED KINGDOM</option>
                <option value="KNOX COLLEGE GALESBURG ILLINOIS, USA">KNOX COLLEGE GALESBURG ILLINOIS, USA</option>
                <option value="KNOXVILLE COLLEGE, TENNESSEE, USA">KNOXVILLE COLLEGE, TENNESSEE, USA</option>
                <option value="KOBE UNIVERSITY, JEPUN">KOBE UNIVERSITY, JEPUN</option>
                <option value="KOCHI UNIVERSITY , JEPUN">KOCHI UNIVERSITY , JEPUN</option>
                <option value="KOGASHIMA UNIVERSITY, JEPUN">KOGASHIMA UNIVERSITY, JEPUN</option>
                <option value="KOLEJ ANTARABANGSA TIMUR BARAT">KOLEJ ANTARABANGSA TIMUR BARAT</option>
                <option value="KOLEJ SHARIAH & KOLEJ PENDIDIKAN, MESIR">KOLEJ SHARIAH & KOLEJ PENDIDIKAN, MESIR</option>
                <option value="KONKUK UNIVERSITY, KOREA">KONKUK UNIVERSITY, KOREA</option>
                <option value="KONKUK UNIVERSITY,SEOUL,KOREA SELATAN">KONKUK UNIVERSITY,SEOUL,KOREA SELATAN</option>
                <option value="KOREA UNIVERSITY">KOREA UNIVERSITY</option>
                <option value="KRISHNA INSTITUTE OF MEDICAL SCIENCE, KARAD">KRISHNA INSTITUTE OF MEDICAL SCIENCE, KARAD
                </option>
                <option value="KULLIYAH AL-DIRASST AL-ISLAMIAH, IRAQ">KULLIYAH AL-DIRASST AL-ISLAMIAH, IRAQ</option>
                <option value="KUMAMOTO UNIVERSITY">KUMAMOTO UNIVERSITY</option>
                <option value="KUNGL.TEKNISKA HOGAKOLAN STOCKHOLM,SWEDE">KUNGL.TEKNISKA HOGAKOLAN STOCKHOLM,SWEDE
                </option>
                <option value="KURE NATIONAL COLLEGE OF TECHNOLOGY">KURE NATIONAL COLLEGE OF TECHNOLOGY</option>
                <option value="KURSK STATE MEDICAL UNIVERSITY">KURSK STATE MEDICAL UNIVERSITY</option>
                <option value="KUSHIRO NATIONAL COLLAGE OF TECHNOLOGY">KUSHIRO NATIONAL COLLAGE OF TECHNOLOGY</option>
                <option value="KUTZTOWN STATE COL., PENNSYLVANIA, USA">KUTZTOWN STATE COL., PENNSYLVANIA, USA</option>
                <option value="KYONGGI OPEN UNIVERSITY,SEOUL,KOREA">KYONGGI OPEN UNIVERSITY,SEOUL,KOREA</option>
                <option value="KYOTO INSTITUTE OF TECHNOLOGYKYOTO INSTITUTE OF TECHNOLOGY">KYOTO INSTITUTE OF
                  TECHNOLOGY></option>
                <option value="KYUSHU INSTITUT OF TECHNOLOGY, JAPAN">KYUSHU INSTITUT OF TECHNOLOGY, JAPAN</option>
                <option value="L. SUPERIOR ST. COL.SAULT ST.,MARIE MICH">L. SUPERIOR ST. COL.SAULT ST.,MARIE MICH
                </option>
                <option value="L.N. MITHILA UNIVERSITY, INDIA">L.N. MITHILA UNIVERSITY, INDIA</option>
                <option value="LA GRANGE COLLEGE GRANGE GEORGIA,USA">LA GRANGE COLLEGE GRANGE GEORGIA,USA</option>
                <option value="LA ROCHE COL. PITTSBURG,PENNSYLVANIA,USA">LA ROCHE COL. PITTSBURG,PENNSYLVANIA,USA
                </option>
                <option value="LA SALLE COLLEGE PHILADELPHIA, PENN.,USA">LA SALLE COLLEGE PHILADELPHIA, PENN.,USA
                </option>
                <option value="LA SIERRA UNIVERSITY, USA">LA SIERRA UNIVERSITY, USA</option>
                <option value="LA TROBE UNIVERSITY, AUSTRALIA">LA TROBE UNIVERSITY, AUSTRALIA</option>
                <option value="LA VERNE COLLEGE CALIFORNIA, USA">LA VERNE COLLEGE CALIFORNIA, USA</option>
                <option value="LADY HARDING MEDICAL COLLEGE, NEW DELHI">LADY HARDING MEDICAL COLLEGE, NEW DELHI</option>
                <option value="LADYCLIFF COL., HIGHLAND FALLS,N.Y.,USA">LADYCLIFF COL., HIGHLAND FALLS,N.Y.,USA</option>
                <option value="LAFAYETTE COL., EASTON,PENNSYLVANIA, USA">LAFAYETTE COL., EASTON,PENNSYLVANIA, USA
                </option>
                <option value="LAKE ERIE COLLEGE, PAINESVILLE,OHIO,USA">LAKE ERIE COLLEGE, PAINESVILLE,OHIO,USA</option>
                <option value="KOLAKE FOREST COLLEGE ILLINOIS, USA">KOLAKE FOREST COLLEGE ILLINOIS, USA</option>
                <option value="LAKEHEAD UNI. THUNDER BAY,ONTARIO,CANADA">LAKEHEAD UNI. THUNDER BAY,ONTARIO,CANADA
                </option>
                <option value="LAKELAND COLLEGE,SHEBOYGAN,WISCONSIN,USA">LAKELAND COLLEGE,SHEBOYGAN,WISCONSIN,USA
                </option>
                <option value="LAMAR UNIVERSITY BEAUMONT, TEXAS, USA">LAMAR UNIVERSITY BEAUMONT, TEXAS, USA</option>
                <option value="LAMBUTH COLLEGE, JACKSON, TENNESSEE,USA">LAMBUTH COLLEGE, JACKSON, TENNESSEE,USA</option>
                <option value="LANCESTER POLYTECHNIC,UNITED KINGDOM">LANCESTER POLYTECHNIC,UNITED KINGDOM</option>
                <option value="LANDBOUWHOGESCHOOL WAGENINGEN, NETHERLA">LANDBOUWHOGESCHOOL WAGENINGEN, NETHERLAN
                </option>
                <option value="LANDER COL.,GAFFNEY, SOUTH CAROLINA, USA">LANDER COL.,GAFFNEY, SOUTH CAROLINA, USA
                </option>
                <option value="LANE COLLEGE, JACKSON, TENNESSEE, USA">LANE COLLEGE, JACKSON, TENNESSEE, USA</option>
                <option value="LANGSTON UNIVERSITY,OKLAHOMA, U.S.A.">LANGSTON UNIVERSITY,OKLAHOMA, U.S.A.</option>
                <option value="LAPPEENRANNAN TEKNILLINEN KORKEAKOULU,FI">LAPPEENRANNAN TEKNILLINEN KORKEAKOULU,FI
                </option>
                <option value="LAREDO STATE UNIVERSITY, TEXAS, USA">LAREDO STATE UNIVERSITY, TEXAS, USA</option>
                <option value="LAVAL UNIVERSITY, CANADA">LAVAL UNIVERSITY, CANADA</option>
                <option value="LAWRENCE INST OF TEC SOUTHFIELD MICH USA">LAWRENCE INST OF TEC SOUTHFIELD MICH USA
                </option>
                <option value="LAWRENCE UNI., APPLETON, WISCONSIN,USA">LAWRENCE UNI., APPLETON, WISCONSIN,USA</option>
                <option value="LE MOYNE COLLEGE,SYRACUSE,NEW YORK,USA">LE MOYNE COLLEGE,SYRACUSE,NEW YORK,USA</option>
                <option value="LE MOYNE OWEN COLLEGE, MEMPHIS,TENN.,USA">LE MOYNE OWEN COLLEGE, MEMPHIS,TENN.,USA
                </option>
                <option value="LE TOURNEAU COLLEGE, LONGVIEW, TEXAS,USA">LE TOURNEAU COLLEGE, LONGVIEW, TEXAS,USA
                </option>
                <option value="LEBANON VALLEY COL.,ANNVILLE, PENN.,USA">LEBANON VALLEY COL.,ANNVILLE, PENN.,USA</option>
                <option value="LEE COLLEGE, CLEVELAND, TENNESSEE, USA">LEE COLLEGE, CLEVELAND, TENNESSEE, USA</option>
                <option value="LEEDS COLLEGE OF TECHNOLOGY,U.K.">LEEDS COLLEGE OF TECHNOLOGY,U.K.</option>
                <option value="LEEDS METROPOLITAN UNIVERSITY">LEEDS METROPOLITAN UNIVERSITY</option>
                <option value="LEEDS POLYTECHNIC,UNITED KINGDOM">LEEDS POLYTECHNIC,UNITED KINGDOM</option>
                <option value="LEHIGH UNI., BETHLEHEM, PENNSYLVANIA,USA">LEHIGH UNI., BETHLEHEM, PENNSYLVANIA,USA
                </option>
                <option value="LEICESTER POLYTECHNIC,UNITED KINGDOM">LEICESTER POLYTECHNIC,UNITED KINGDOM</option>
                <option value="LENOIR-RHYNE COLLEGE HICKORY,N.CAROLINA">LENOIR-RHYNE COLLEGE HICKORY,N.CAROLINA</option>
                <option value="LESLEY COLLEGE CAMBRIDGE, MASS., USA">LESLEY COLLEGE CAMBRIDGE, MASS., USA</option>
                <option value="LEWIS AND CLARK C.PORTLAND,CREGON,U.S.A.">LEWIS AND CLARK C.PORTLAND,CREGON,U.S.A.
                </option>
                <option value="LEWIS UNIVERSITY,LOCKFORT ILLINOIS,USA">LEWIS UNIVERSITY,LOCKFORT ILLINOIS,USA</option>
                <option value="LEWIS-CLARK STATE COL.LEWISTON IDAHO,USA">LEWIS-CLARK STATE COL.LEWISTON IDAHO,USA
                </option>
                <option value="LIAQUAT MEDICAL COLLEGE,JAMSHORO,SINDH">LIAQUAT MEDICAL COLLEGE,JAMSHORO,SINDH</option>
                <option value="LIMSTON COL.,GAFFNEY, SOUTH CAROLINA,USA">LIMSTON COL.,GAFFNEY, SOUTH CAROLINA,USA
                </option>
                <option value="LINCOLN COL. JEFFERSON CITY,MISSOURI,USA">LINCOLN COL. JEFFERSON CITY,MISSOURI,USA
                </option>
                <option value="LINCOLN MEMORIAL UNI.HARROGATE,TENNES.">LINCOLN MEMORIAL UNI.HARROGATE,TENNES.</option>
                <option value="LINCOLN UNIVERSITY NEW ZEALAND">LINCOLN UNIVERSITY NEW ZEALAND</option>
                <option value="LINCOLN UNIVERSITY OF CANTERBURY, N.Z">LINCOLN UNIVERSITY OF CANTERBURY, N.Z</option>
                <option value="LINCOLN UNIVERSITY, PENNSYLVANIA, USA">LINCOLN UNIVERSITY, PENNSYLVANIA, USA</option>
                <option value="LINCOLN'S INN, UNITED KINGDOM">LINCOLN'S INN, UNITED KINGDOM</option>
                <option value="LINFIELD COLLEGE MCMINNVILLE,DREGON,USA.">LINFIELD COLLEGE MCMINNVILLE,DREGON,USA.
                </option>
                <option value="LINKOPINGS HOGSKOLA, SWEDEN">LINKOPINGS HOGSKOLA, SWEDEN</option>
                <option value="LIVERPOOL JOHN MOORES UNIVERSITY">LIVERPOOL JOHN MOORES UNIVERSITY</option>
                <option value="LIVERPOOL POLYTECHNIC,UNITED KINGDOM">LIVERPOOL POLYTECHNIC,UNITED KINGDOM</option>
                <option value="LIVINGSTON C.SALISBURY,N. CAROLINA,USA">LIVINGSTON C.SALISBURY,N. CAROLINA,USA</option>
                <option value="LIVINGSTONE UNIVERSITY ALABAMA, USA">LIVINGSTONE UNIVERSITY ALABAMA, USA</option>
                <option value="LOCK HAVEN STATE, PENNSYLVANIA,USA">LOCK HAVEN STATE, PENNSYLVANIA,USA</option>
                <option value="LOMA LINDA UNI. SCH OF MED CALIF., USA">LOMA LINDA UNI. SCH OF MED CALIF., USA</option>
                <option value="LOMA LINDA UNIVERSITY CALIFORNIA, USA">LOMA LINDA UNIVERSITY CALIFORNIA, USA</option>
                <option value="LONDON BRIXTON SCHOOL OF BUILDING,U.K.">LONDON BRIXTON SCHOOL OF BUILDING,U.K.</option>
                <option value="LONDON COLLEGE OF PRINTING, U.K.">LONDON COLLEGE OF PRINTING, U.K.</option>
                <option value="LONDON FILM ACADEMY">LONDON FILM ACADEMY</option>
                <option value="LONDON GUILHALL UNIVERSITY">LONDON GUILHALL UNIVERSITY</option>
                <option value="LONDON SCH. OF ECONOMIC & POLITICAL SCIE">LONDON SCH. OF ECONOMIC & POLITICAL SCIE
                </option>
                <option value="LONDON SCHOOL OF ECO. & POLITICAL SC.">LONDON SCHOOL OF ECO. & POLITICAL SC.</option>
                <option value="LONDON SCHOOL OF OCCUPATIONAL THERAPY,UK">LONDON SCHOOL OF OCCUPATIONAL THERAPY,UK
                </option>
                <option value="LONE MOUTAIN COL. SAN FRANCISCO, USA">LONE MOUTAIN COL. SAN FRANCISCO, USA</option>
                <option value="LONG ISLAND U.,BROOKLYN C.OF PHARM.,USA">LONG ISLAND U.,BROOKLYN C.OF PHARM.,USA</option>
                <option value="LONG ISLAND U.BROOKLYN,NEW YORK,USA">LONG ISLAND U.BROOKLYN,NEW YORK,USA</option>
                <option value="LONG ISLAND U.CW POST,GREENVALE,N.YORK">LONG ISLAND U.CW POST,GREENVALE,N.YORK</option>
                <option value="LONG ISLAND U.SOUTHAMPTON,NEW YORK,USA">LONG ISLAND U.SOUTHAMPTON,NEW YORK,USA</option>
                <option value="LONGWOOD COLLEGE,FARMVILLE,VIRGINIA,USA">KLONGWOOD COLLEGE,FARMVILLE,VIRGINIA,USA
                </option>
                <option value="LORAS COLLEGE BUBUQUE IOWA USA">LORAS COLLEGE BUBUQUE IOWA USA</option>
                <option value="LORETTO HEIGHTS COLLEGE,DENVER,COLORADO">LORETTO HEIGHTS COLLEGE,DENVER,COLORADO</option>
                <option value="LOS ANGELES BAPTIST C. NEWHALL CALIF,USA">LOS ANGELES BAPTIST C. NEWHALL CALIF,USA
                </option>
                <option value="LOUGHBOROUGH COLLEGE OF ART, U.K.">LOUGHBOROUGH COLLEGE OF ART, U.K.</option>
                <option value="LOUHBOROUGH UNI.OF TEC,U.K.">LOUHBOROUGH UNI.OF TEC,U.K.</option>
                <option value="LOUISIANA COLLEGE, PINEVILLE, USA">LOUISIANA COLLEGE, PINEVILLE, USA</option>
                <option value="LOUISIANA STATE UNI. BATON ROUGE, USA">LOUISIANA STATE UNI. BATON ROUGE, USA</option>
                <option value="LOUISIANA TECH. UNIVERSITY, RUSTON, USA">LOUISIANA TECH. UNIVERSITY, RUSTON, USA</option>
                <option value="LOWELL TECH. INST. MASSACHUSETTS, USA">LOWELL TECH. INST. MASSACHUSETTS, USA</option>
                <option value="LOYOLA COLLEGE, BALTIMORE, MARYLAND, USA">LOYOLA COLLEGE, BALTIMORE, MARYLAND, USA
                </option>
                <option value="LOYOLA MARYMOUNT UNI. L.A. CALIF, USA">LOYOLA MARYMOUNT UNI. L.A. CALIF, USA</option>
                <option value="LOYOLA UNI. NEW ORLEANS,LOUISIANA, USA">LOYOLA UNI. NEW ORLEANS,LOUISIANA, USA</option>
                <option value="LOYOLA UNIVERSITY CHICAGO ILLINOIS,USA">LOYOLA UNIVERSITY CHICAGO ILLINOIS,USA</option>
                <option value="LUBBOCK CHRISTIAN, TEXAS, USA">LUBBOCK CHRISTIAN, TEXAS, USA</option>
                <option value="LUTHER COLLEGE DECORAH IOWA, USA">LUTHER COLLEGE DECORAH IOWA, USA</option>
                <option value="LYNCHBURG COLLEGE, VIRGINIA, USA">LYNCHBURG COLLEGE, VIRGINIA, USA</option>
                <option value="LYNDON STATE COL.LYNDONVILLE,VERMONT,USA">LYNDON STATE COL.LYNDONVILLE,VERMONT,USA
                </option>
                <option value="M.S RAMAIAH MED. COLLEGE,BANGALORE INDIA">M.S RAMAIAH MED. COLLEGE,BANGALORE INDIA
                </option>
                <option value="MAAHAD QIRAAT AL AZHAR CHOUBRA CAIRO">MAAHAD QIRAAT AL AZHAR CHOUBRA CAIRO</option>
                <option value="MAAHAD QIRAAT AL-AZHAR, MESIR">MAAHAD QIRAAT AL-AZHAR, MESIR</option>
                <option value="MACALESTER COLLEGE ST.PAUL MINNESOTA USA">MACALESTER COLLEGE ST.PAUL MINNESOTA USA
                </option>
                <option value="MACMURRY COL. JACKSONVILLE ILLINOIS,USA">MACMURRY COL. JACKSONVILLE ILLINOIS,USA</option>
                <option value="MACQUARIE UNIVERSITY, AUSTRALIA">MACQUARIE UNIVERSITY, AUSTRALIA</option>
                <option value="MADONNA COLLEGE LIVONIA MICHIGAN, USA">MADONNA COLLEGE LIVONIA MICHIGAN, USA</option>
                <option value="MADRAS VET. COLLEGE, INDIA">MADRAS VET. COLLEGE, INDIA</option>
                <option value="MAHATMA GANDHI MEMORIAL MED. COLL.INDORE">MAHATMA GANDHI MEMORIAL MED. COLL.INDORE
                </option>
                <option value="MAIDSTONE COLLEGE OF ART, UNITED KINGDOM">MAIDSTONE COLLEGE OF ART, UNITED KINGDOM
                </option>
                <option value="MAINE MARITIME ACAMEMY, USA">MAINE MARITIME ACAMEMY, USA</option>
                <option value="MAITRISE, PERANCIS">MAITRISE, PERANCIS</option>
                <option value="MALONE COLLEGE, MARIETTA, OHIO, USA">MALONE COLLEGE, MARIETTA, OHIO, USA</option>
                <option value="MANCHESTER COL. N.MANCHESTER INDIANA USA">MANCHESTER COL. N.MANCHESTER INDIANA USA
                </option>
                <option value="MANCHESTER METROPOLITAN UNIVERSITY">MANCHESTER METROPOLITAN UNIVERSITY</option>
                <option value="MANCHESTER POLYTECHNIC,UNITED KINGDOM">MANCHESTER POLYTECHNIC,UNITED KINGDOM</option>
                <option value="MANHATTAN COLLEGE,BRONX,NEW YORK,USA">MANHATTAN COLLEGE,BRONX,NEW YORK,USA</option>
                <option value="MANHATTAN COLLEGE,RIVERDALE,KANSAS, USA">MANHATTAN COLLEGE,RIVERDALE,KANSAS, USA</option>
                <option value="MANHATTAN SCHOOL OF MUSIC,NEW YORK,USA">MANHATTAN SCHOOL OF MUSIC,NEW YORK,USA</option>
                <option value="MANHATTANVILLE C.,PURSHASE,NEW YORK,USA">MANHATTANVILLE C.,PURSHASE,NEW YORK,USA</option>
                <option value="MANIPAL ACADEMY OF HIE MANIPAL CARNATAKA">MANIPAL ACADEMY OF HIE MANIPAL CARNATAKA
                </option>
                <option value="MANKOTA STATE UNIVERSITY MINNESOTA, USA">MANKOTA STATE UNIVERSITY MINNESOTA, USA</option>
                <option value="MANSFIELD STATE COL. PENNSYLVANIA, USA">MANSFIELD STATE COL. PENNSYLVANIA, USA</option>
                <option value="MARIAM COLLEGE INDIANA, USA">MARIAM COLLEGE INDIANA, USA</option>
                <option value="MARIAN COL. OF FOND DU LAC,WISCONS.,USA">MARIAN COL. OF FOND DU LAC,WISCONS.,USA</option>
                <option value="MARIAN COLLEGE INDIANAPOLIS INDIANA USA">MARIAN COLLEGE INDIANAPOLIS INDIANA USA</option>
                <option value="MARIETTA COLLEGE, MARRIETTA, OHIO, USA">MARIETTA COLLEGE, MARRIETTA, OHIO, USA</option>
                <option value="MARIST COLLEGE,POUGHEEPSIE,NEW YORK,USA">MARIST COLLEGE,POUGHEEPSIE,NEW YORK,USA</option>
                <option value="MARLBORO COLLEGE, VERMONT, USA">MARLBORO COLLEGE, VERMONT, USA</option>
                <option value="MARQUETTE UNI.,MILWAUKEE, WISCONSIN, USA">MARQUETTE UNI.,MILWAUKEE, WISCONSIN, USA
                </option>
                <option value="MARS HILL COLLEGE,NORTH CAROLINA,USA">MARS HILL COLLEGE,NORTH CAROLINA,USA</option>
                <option value="MARSHALL UNI.HUNTINGTON,WEST VIRG.,USA">MARSHALL UNI.HUNTINGTON,WEST VIRG.,USA</option>
                <option value="MARY BALDWIN COLLEGE,STAUNTON,VIRG.,USA">MARY BALDWIN COLLEGE,STAUNTON,VIRG.,USA</option>
                <option value="MARY COLLEGE,BISMARCK,N.D., USA">MARY COLLEGE,BISMARCK,N.D., USA</option>
                <option value="MARY HARDIN-BAYLOR COL. BELTON TEXAS,USA">MARY HARDIN-BAYLOR COL. BELTON TEXAS,USA
                </option>
                <option value="MARY IMMACULATE SEMINARY NORT., PA,USA">MARY IMMACULATE SEMINARY NORT., PA,USA</option>
                <option value="MARY WASHINGTON C.FREDERICKSBURG VIRG.US">MARY WASHINGTON C.FREDERICKSBURG VIRG.US
                </option>
                <option value="MARYCREST COLLEGE DAVENDORT IOWA USA">MARYCREST COLLEGE DAVENDORT IOWA USA</option>
                <option value="MARYGROVE COLLEGE DETROIT MICHIGAN,USA">MARYGROVE COLLEGE DETROIT MICHIGAN,USA</option>
                <option value="MARYLAND INST. COL. OFART, BALTIMORE,USA">MARYLAND INST. COL. OFART, BALTIMORE,USA
                </option>
                <option value="MARYMOUNT COLLEGE SALINA,KANSAS, USA">MARYMOUNT COLLEGE SALINA,KANSAS, USA</option>
                <option value="MARYMOUNT COLLEGE,TARRYTOWN,NEW YORK,USA">MARYMOUNT COLLEGE,TARRYTOWN,NEW YORK,USA
                </option>
                <option value="MARYMOUNT MANHATTAN COLLEGE,NEW YORK,USA">MARYMOUNT MANHATTAN COLLEGE,NEW YORK,USA
                </option>
                <option value="MARYVILLE COLLEGE, TENNESSEE, USA">MARYVILLE COLLEGE, TENNESSEE, USA</option>
                <option value="MARYWOOD COL. SCRATON, PENNSYLVANIA, USA">MARYWOOD COL. SCRATON, PENNSYLVANIA, USA
                </option>
                <option value="MASSACHUSETTS COL.OF PHARMACY BOSTON,USA">MASSACHUSETTS COL.OF PHARMACY BOSTON,USA
                </option>
                <option value="MASSACHUSETTS COLLEGE OF ART,BOSTON, USA">MASSACHUSETTS COLLEGE OF ART,BOSTON, USA
                </option>
                <option value="MASSACHUSETTS INST. OF TEC.CAMBRIDGE,USA">MASSACHUSETTS INST. OF TEC.CAMBRIDGE,USA
                </option>
                <option value="MASSACHUSETTS MARITIME ACA BUZZARDS BAY">MASSACHUSETTS MARITIME ACA BUZZARDS BAY</option>
                <option value="MASSEY UNIVERSITY, NEW ZEALAND">MASSEY UNIVERSITY, NEW ZEALAND</option>
                <option value="MATSUE NATIONAL COLLAGE OF TECH.,SHIMANE">MATSUE NATIONAL COLLAGE OF TECH.,SHIMANE
                </option>
                <option value="MAULANA AZAD MEDICAL COLLEGE, NEW DELHI">MAULANA AZAD MEDICAL COLLEGE, NEW DELHI</option>
                <option value="MAYVILLE STATE COL.,MAYVILLE,N.D., USA">MAYVILLE STATE COL.,MAYVILLE,N.D., USA</option>
                <option value="MC MURRY COLLEGE ABILENE, TEXAS, USA">MC MURRY COLLEGE ABILENE, TEXAS, USA</option>
                <option value="MCGILL UNIVERSITY,MONTREAL,CANADA">MCGILL UNIVERSITY,MONTREAL,CANADA</option>
                <option value="MCKENDREE COLLEGE LEBANON ILLINOIS,USA">MCKENDREE COLLEGE LEBANON ILLINOIS,USA</option>
                <option value="MCMASTER UNIVERSITY, CANADA">MCMASTER UNIVERSITY, CANADA</option>
                <option value="MCNEESE ST. UNI.,LAKE CHARLES,LOUISIANA">MCNEESE ST. UNI.,LAKE CHARLES,LOUISIANA</option>
                <option value="MCPHERSON COLLEGE, KANSAS, USA">MCPHERSON COLLEGE, KANSAS, USA</option>
                <option value="MEDAILLE COLLEGE,BUFFALO,NEW YORK,USA">MEDAILLE COLLEGE,BUFFALO,NEW YORK,USA</option>
                <option value="MEDICAL COLLEGE OF ALABAMA BIRMINGHAM,US">MEDICAL COLLEGE OF ALABAMA BIRMINGHAM,US
                </option>
                <option value="MEDICAL COLLEGE OF GEORGIA AUGUSTA,USA">MEDICAL COLLEGE OF GEORGIA AUGUSTA,USA</option>
                <option value="MEDICAL COLLEGE OF VIRGINIA, USA">MEDICAL COLLEGE OF VIRGINIA, USA</option>
                <option value="MEDICAL INSTITUTE (II) MINGALADON,BURMA">MEDICAL INSTITUTE (II) MINGALADON,BURMA</option>
                <option value="MEDICAL INSTITUTE (III) MANDALAY,BURMA">MEDICAL INSTITUTE (III) MANDALAY,BURMA</option>
                <option value="MEDICAL SCHOOL IN PERADENIYA,SRI LANKA">MEDICAL SCHOOL IN PERADENIYA,SRI LANKA</option>
                <option value="MEDICAL SCHOOL OF COLOMBO,SRI LANKA">MEDICAL SCHOOL OF COLOMBO,SRI LANKA</option>
                <option value="MEDICAL UNI.OF S.CAROLINA,CHARLESTON,USA">MEDICAL UNI.OF S.CAROLINA,CHARLESTON,USA
                </option>
                <option value="MEDICAL UNIVERSITY OF LODZ, POLAND">MEDICAL UNIVERSITY OF LODZ, POLAND</option>
                <option value="MEDICAL UNIVERSITY OF WARSAW">MEDICAL UNIVERSITY OF WARSAW</option>
                <option value="MEENAKSHI AMMAL DENTAL COLLEGE">MEENAKSHI AMMAL DENTAL COLLEGE</option>
                <option value="MEENAKSHI AMMAL DENTAL COLLEGE & HOSPITAL">MEENAKSHI AMMAL DENTAL COLLEGE & HOSPITAL
                </option>
                <option value="MEHARRY MEDICAL C. NASHVILLE,TENNES.,USA">MEHARRY MEDICAL C. NASHVILLE,TENNES.,USA
                </option>
                <option value="MEIJI UNIVERSITY, TOKYO, JEPUN">MEIJI UNIVERSITY, TOKYO, JEPUN</option>
                <option value="MEMORIAL UNIVERSITY NEWFOUNDLAND,CANADA">MEMORIAL UNIVERSITY NEWFOUNDLAND,CANADA</option>
                <option value="MEMPHIS ACADEMY OF ART, TENNESSEE, USA">MEMPHIS ACADEMY OF ART, TENNESSEE, USA</option>
                <option value="MEMPHIS STATE UNIVERSITY, TENNESSEE, USA">MEMPHIS STATE UNIVERSITY, TENNESSEE, USA
                </option>
                <option value="MENLO PARK COLLEGE CALIFORNIA,USA">MENLO PARK COLLEGE CALIFORNIA,USA</option>
                <option value="MERCER U SOUTHERN SCH OF PHAR.ATLANTA,US">MERCER U SOUTHERN SCH OF PHAR.ATLANTA,US
                </option>
                <option value="MERCER UNIVERSITY MACON GEORGIA, USA">MERCER UNIVERSITY MACON GEORGIA, USA</option>
                <option value="MERCY COLLEGE OF DETROIT MICHIGAN, USA">MERCY COLLEGE OF DETROIT MICHIGAN, USA</option>
                <option value="MERCY COLLEGE,DOBBS FERRY,NEW YORK,USA">MERCY COLLEGE,DOBBS FERRY,NEW YORK,USA</option>
                <option value="MERCYHURST COL., ERIE PENNSYLVANIA, USA">MERCYHURST COL., ERIE PENNSYLVANIA, USA</option>
                <option value="MEREDITH COLLEGE RALEIGH,N.CAROLINA,USA">MEREDITH COLLEGE RALEIGH,N.CAROLINA,USA</option>
                <option value="MERRIMACK COL. NORTH ANDOVER, MASS., USA">MERRIMACK COL. NORTH ANDOVER, MASS., USA
                </option>
                <option value="MESA COLLEGE,GRAND JUNCTION,COLORADO,USA">MESA COLLEGE,GRAND JUNCTION,COLORADO,USA
                </option>
                <option value="MESSIAH COL., GRANTHAM, PENNSYLVANIA,USA">MESSIAH COL., GRANTHAM, PENNSYLVANIA,USA
                </option>
                <option value="METHODIST COL. FAYETTEVILLE, N.CARO.,USA">METHODIST COL. FAYETTEVILLE, N.CARO.,USA
                </option>
                <option value="METROPOLITAN ST. UNI. ST.PAUL MINN.,USA">METROPOLITAN ST. UNI. ST.PAUL MINN.,USA</option>
                <option value="METROPOLITAN ST.COL.,DENVER,COLORADO USA">METROPOLITAN ST.COL.,DENVER,COLORADO USA
                </option>
                <option value="MIAMI UNIVERSITY,OXFORD, OHIO, USA">MIAMI UNIVERSITY,OXFORD, OHIO, USA</option>
                <option value="MICH. TECHNOLOGICAL UNI. HOUGHTON, USA">MICH. TECHNOLOGICAL UNI. HOUGHTON, USA</option>
                <option value="MICHIGAN STATE UNI. EAST LANSING,USA">KMICHIGAN STATE UNI. EAST LANSING,USA</option>
                <option value="MID-AMERICAN NAZARENE C.,OLATHE,KANSAS">MID-AMERICAN NAZARENE C.,OLATHE,KANSAS</option>
                <option value="MID-KENT COLLEGE OF HIGHER & FURTHER EDU">MID-KENT COLLEGE OF HIGHER & FURTHER EDU
                </option>
                <option value="MID. EASTTECH. UNI. ANKARA, TURKEY">MID. EASTTECH. UNI. ANKARA, TURKEY</option>
                <option value="MIDDLE TEMPLE, UNITED KINGDOM">MIDDLE TEMPLE, UNITED KINGDOM</option>
                <option value="MIDDLE TENNESSEE STATE U.MURFEESBORO USA">MIDDLE TENNESSEE STATE U.MURFEESBORO USA
                </option>
                <option value="MIDDLEBOROUGH CANSTANTINE C.OF TEC.,U.K.">MIDDLEBOROUGH CANSTANTINE C.OF TEC.,U.K.
                </option>
                <option value="MIDDLEBURY COLLEGE, VERMONT, USA">MIDDLEBURY COLLEGE, VERMONT, USA</option>
                <option value="MIDDLESEX POLYTECHNIC,UNITED KINGDOM">MIDDLESEX POLYTECHNIC,UNITED KINGDOM</option>
                <option value="MIDDLESEX UNIVERSITY">MIDDLESEX UNIVERSITY</option>
                <option value="MIDLAND LUTHERAN,C.FREMONT,NEBRASKA,USA">MIDLAND LUTHERAN,C.FREMONT,NEBRASKA,USA</option>
                <option value="MIDWESTERN ST.U.WICHITA FALLS,TEXAS,USA">MIDWESTERN ST.U.WICHITA FALLS,TEXAS,USA</option>
                <option value="MIE UNIVERSITY, JEPUN">MIE UNIVERSITY, JEPUN</option>
                <option value="MILES COLLEGE, BERMINGHAM,ALABAMA,USA">MILES COLLEGE, BERMINGHAM,ALABAMA,USA</option>
                <option value="MILIGAN COLLEGE, TENNESEE, USA">MILIGAN COLLEGE, TENNESEE, USA</option>
                <option value="MILIKIN UNIVERSITY DECATUR ILLINOIS,USA">MILIKIN UNIVERSITY DECATUR ILLINOIS,USA</option>
                <option value="MILLERSVILLE STATE COL.,PENNSYLVANIA,USA">MILLERSVILLE STATE COL.,PENNSYLVANIA,USA
                </option>
                <option value="MILLS COLLEGE, OAKLAND, CALIFORNIA, USA">MILLS COLLEGE, OAKLAND, CALIFORNIA, USA</option>
                <option value="MILLSAPS COLLEGE JACKSON MISSISSIPI USA">MILLSAPS COLLEGE JACKSON MISSISSIPI USA</option>
                <option value="MILTON COLLEGE, WISCONSIN, USA">MILTON COLLEGE, WISCONSIN, USA</option>
                <option value="MILWAUKEE SCH. OF ORF ENGIN.WISCONSIN,US">MILWAUKEE SCH. OF ORF ENGIN.WISCONSIN,US
                </option>
                <option value="MINNEAPOLIS COL.OF ART & DES. MINN.,USA">MINNEAPOLIS COL.OF ART & DES. MINN.,USA</option>
                <option value="MINNESOTA UNI.,TWIN MINNESOTA, USA">MINNESOTA UNI.,TWIN MINNESOTA, USA</option>
                <option value="MINOT STATE COLLEGE,N.D., USA">MINOT STATE COLLEGE,N.D., USA</option>
                <option value="MISISSIPPI STATE UNIVERSITY U.S.A.">MISISSIPPI STATE UNIVERSITY U.S.A.</option>
                <option value="MISSISSIPPI COLLEGE CLINTON, USA.">MISSISSIPPI COLLEGE CLINTON, USA.</option>
                <option value="MISSISSIPPI STATE C FOR WOMEN COLUMBUS">MISSISSIPPI STATE C FOR WOMEN COLUMBUS</option>
                <option value="MISSISSIPPI STATE UNIVERSITY">MISSISSIPPI STATE UNIVERSITY</option>
                <option value="MISSISSIPPI VALEY STATE U.ITTA BENA,USA">MISSISSIPPI VALEY STATE U.ITTA BENA,USA</option>
                <option value="MISSOURI SOUTHERN STATE COL. JOPLIN,USA">MISSOURI SOUTHERN STATE COL. JOPLIN,USA</option>
                <option value="MISSOURI WESTERN COLLEGE ST. JOSEPH,USA">MISSOURI WESTERN COLLEGE ST. JOSEPH,USA</option>
                <option value="MIYAGI NATIONAL COLL.OF TECHNOLOGY JEPUN">MIYAGI NATIONAL COLL.OF TECHNOLOGY JEPUN
                </option>
                <option value="MIYAKONOJO NATIONAL COLL. OF TECH. JAPAN">MIYAKONOJO NATIONAL COLL. OF TECH. JAPAN
                </option>
                <option value="MOBILE COLLEGE, ALABAMA, USA">MOBILE COLLEGE, ALABAMA, USA</option>
                <option value="MOLLOY COL.,ROCLVILLE CENTRE,N.Y.,USA">MOLLOY COL.,ROCLVILLE CENTRE,N.Y.,USA</option>
                <option value="MONASH UNIVERSITY, AUSTRALIA">MONASH UNIVERSITY, AUSTRALIA</option>
                <option value="MONMOUTH COL. WEST LONG BRANCH N.J.,USA">MONMOUTH COL. WEST LONG BRANCH N.J.,USA</option>
                <option value="MONMOUTH COLLEGE ILLINOIS, USA">MONMOUTH COLLEGE ILLINOIS, USA</option>
                <option value="MONTANA C. OF MINERAL SC.& TEC,BUTTE,USA">MONTANA C. OF MINERAL SC.& TEC,BUTTE,USA
                </option>
                <option value="MONTANA STATE UNI. BOZEMAN,MONTANA,USA">MONTANA STATE UNI. BOZEMAN,MONTANA,USA</option>
                <option value="MONTCLAIR ST.C. UPPER MONOCLAIR N.J.,USA">MONTCLAIR ST.C. UPPER MONOCLAIR N.J.,USA
                </option>
                <option value="MONTEREY INST.FOR FOREIGN STUDIES CALIF.">MONTEREY INST.FOR FOREIGN STUDIES CALIF.
                </option>
                <option value="MOORE COL. OF ART PHILADELPHIA, PA.,USA">MOORE COL. OF ART PHILADELPHIA, PA.,USA</option>
                <option value="MOORIS HARVEY C.CHARLESTON,WEST VIRG.USA">MOORIS HARVEY C.CHARLESTON,WEST VIRG.USA
                </option>
                <option value="MORAVIAN COL. ALLENTOWN,PENNSYLVANIA,USA">MORAVIAN COL. ALLENTOWN,PENNSYLVANIA,USA
                </option>
                <option value="MOREHEAD STATE UNIVERSITY,KENTUCKY, USA">MOREHEAD STATE UNIVERSITY,KENTUCKY, USA</option>
                <option value="MOREHOUSE COLLEGE ATLANTA GEORGIA,USA">MOREHOUSE COLLEGE ATLANTA GEORGIA,USA</option>
                <option value="MORGAN STATE COL. BALTIMORE,MARYLAND,USA">MORGAN STATE COL. BALTIMORE,MARYLAND,USA
                </option>
                <option value="MORNINGSIDE COLLEGE SIOUX CITY IOWA USA">MORNINGSIDE COLLEGE SIOUX CITY IOWA USA</option>
                <option value="MORRIS BROWN COLLEGE ATLANTA GEORGIA USA">MORRIS BROWN COLLEGE ATLANTA GEORGIA USA
                </option>
                <option value="MOSCOW AVIATION INSTITUTE, RUSSIA">MOSCOW AVIATION INSTITUTE, RUSSIA</option>
                <option value="MOTANISTISCHE HOLHSCHULE LOEBEN,AUSTRIA">MOTANISTISCHE HOLHSCHULE LOEBEN,AUSTRIA</option>
                <option value="MOUNT ANGEL SEM. ST.BENEDICT,OREGON,USA">MOUNT ANGEL SEM. ST.BENEDICT,OREGON,USA</option>
                <option value="MOUNT MARTY COL. YANKTON, S.DAKOTA, USA">MOUNT MARTY COL. YANKTON, S.DAKOTA, USA</option>
                <option value="MOUNT MARY COLL.,MILWAUKEE,WILCONSIN,USA">MOUNT MARY COLL.,MILWAUKEE,WILCONSIN,USA
                </option>
                <option value="MOUNT MERCY COLLEGE CEDAR RADIDS IOWA">MOUNT MERCY COLLEGE CEDAR RADIDS IOWA</option>
                <option value="MOUNT ST MARY C.HOOKSETT N.HAMPSHIRE USA">KMOUNT ST MARY C.HOOKSETT N.HAMPSHIRE USA
                </option>
                <option value="MOUNT ST.MARY COLLEGE,NEWBURGH,N.YORK">MOUNT ST.MARY COLLEGE,NEWBURGH,N.YORK</option>
                <option value="MOUNT ST.MARY'S C.,LOS ANGELES,CALIF.USA">MOUNT ST.MARY'S C.,LOS ANGELES,CALIF.USA
                </option>
                <option value="MOUNT UNION COLLEGE ALLIANCE, OHIO,USA">MOUNT UNION COLLEGE ALLIANCE, OHIO,USA</option>
                <option value="MOUNT VERNON COL. WASHINGTON D.C.,USA">MOUNT VERNON COL. WASHINGTON D.C.,USA</option>
                <option value="MOUNTST.MARY'S C.EMMITSBURG,MARYLAND,USA">MOUNTST.MARY'S C.EMMITSBURG,MARYLAND,USA
                </option>
                <option value="MS UNIVERSITY OF BARODA, INDIA">MS UNIVERSITY OF BARODA, INDIA</option>
                <option value="MT. HOLYOKE COL. SOUTH HADLEY, MASS.,USA">MT. HOLYOKE COL. SOUTH HADLEY, MASS.,USA
                </option>
                <option value="MUHLENDERG C. ALLENTOWN,PENNSYLVANIA,USA">MUHLENDERG C. ALLENTOWN,PENNSYLVANIA,USA
                </option>
                <option value="MUNDELEIN COLLEGE CHICAGO ILLINOIS,USA">MUNDELEIN COLLEGE CHICAGO ILLINOIS,USA</option>
                <option value="MUNICH UNIVERSITY OF APPLIED SCIENCES">MUNICH UNIVERSITY OF APPLIED SCIENCES</option>
                <option value="MURORAN INSTITUTE OF TECHNOLOGY, JEPUN">MURORAN INSTITUTE OF TECHNOLOGY, JEPUN</option>
                <option value="MURRY STATE UNIVERSITY, KENTUCKY, USA">MURRY STATE UNIVERSITY, KENTUCKY, USA</option>
                <option value="MUSASHI INSTITUTE OF TECHNOLOGY, JAPAN">MUSASHI INSTITUTE OF TECHNOLOGY, JAPAN</option>
                <option value="MUSKINGUM COLLEGE NEW CONCORD,OHIO,USA">MUSKINGUM COLLEGE NEW CONCORD,OHIO,USA</option>
                <option value="MUTAH UNIVERSITI JORDAN">MUTAH UNIVERSITI JORDAN</option>
                <option value="MYMENSINGH MEDICAL COLLEGE BANGLADESH">MYMENSINGH MEDICAL COLLEGE BANGLADESH</option>
                <option value="N ORLEANS BAPTIST THEO.SEM.LOUISIANA,USA">N ORLEANS BAPTIST THEO.SEM.LOUISIANA,USA
                </option>
                <option value="N. ADAMS STATE COL. N. ADAMS MASS., USA">N. ADAMS STATE COL. N. ADAMS MASS., USA</option>
                <option value="N. CENTRAL COL. NAPERVILLE ILLINOIS, USA">N. CENTRAL COL. NAPERVILLE ILLINOIS, USA
                </option>
                <option value="N. ENG. CONSER OF MUSIC BOSTON MASS.,USA">N. ENG. CONSER OF MUSIC BOSTON MASS.,USA
                </option>
                <option value="N.CAROLINA AGRI.& TEC.STATE U.GREENSBORO">KN.CAROLINA AGRI.& TEC.STATE U.GREENSBORO
                </option>
                <option value="N.CAROLINA CENTRAL ART ST. U.GREENSBORO">N.CAROLINA CENTRAL ART ST. U.GREENSBORO</option>
                <option value="N.CAROLINA WESLEYAN COLLEGE,ROCKY MOUNT">N.CAROLINA WESLEYAN COLLEGE,ROCKY MOUNT</option>
                <option value="N.E WALES, INS. OF HIGH EDU, WALES UK">N.E WALES, INS. OF HIGH EDU, WALES UK</option>
                <option value="N.MEX. HIGHLANDS UNI. L.VEGAS N.MEX.,USA">N.MEX. HIGHLANDS UNI. L.VEGAS N.MEX.,USA
                </option>
                <option value="N.MEX. INST.OF MINING 7 TEC. SOCORRO,USA">N.MEX. INST.OF MINING 7 TEC. SOCORRO,USA
                </option>
                <option value="N.MEX. ST. UNI. LAS CRUCES N.MEX., USA">N.MEX. ST. UNI. LAS CRUCES N.MEX., USA</option>
                <option value="NAGANO NATIONAL TECHNICAL COLLEGE NAGANO">NAGANO NATIONAL TECHNICAL COLLEGE NAGANO
                </option>
                <option value="NAGAOKA NATIONAL COLLEGE OF TECHNOLOGY">NAGAOKA NATIONAL COLLEGE OF TECHNOLOGY</option>
                <option value="NAGAOKA UNIVERSITY OF TECHNOLOGY, JAPAN">NAGAOKA UNIVERSITY OF TECHNOLOGY, JAPAN</option>
                <option value="NAGASAKI UNIVERSITY">NAGASAKI UNIVERSITY</option>
                <option value="NAGOYA INSTITUTE OF TECHNOLOGY, JAPAN">NAGOYA INSTITUTE OF TECHNOLOGY, JAPAN</option>
                <option value="NAGOYA UNIVERSITY, JEPUN">NAGOYA UNIVERSITY, JEPUN</option>
                <option value="NANYANG TECHNOLOGICAL UNI. OF SINGAPORE">NANYANG TECHNOLOGICAL UNI. OF SINGAPORE</option>
                <option value="NAPIER UNIVERSITY">NAPIER UNIVERSITY</option>
                <option value="NARA NATIONAL COLLEGE OF TECHNOLOGY">NARA NATIONAL COLLEGE OF TECHNOLOGY</option>
                <option value="NASSON COLLEGE, SPRINGVALE, MAINE, USA">NASSON COLLEGE, SPRINGVALE, MAINE, USA</option>
                <option value="NAT. COL. OF EDUC. EVASTON ILLINOIS, USA">NAT. COL. OF EDUC. EVASTON ILLINOIS, USA
                </option>
                <option value="NAT. LIB.OF NEW ENGLAND,WELLINGTON N.Z.">NAT. LIB.OF NEW ENGLAND,WELLINGTON N.Z.</option>
                <option value="NATIONAL CHENG KUNG UNIVERSITY - MEDICAL COLLEGE">NATIONAL CHENG KUNG UNIVERSITY -
                  MEDICAL COLLEGE</option>
                <option value="NATIONAL COMPUTER CENTER, UNITED KINGDOM">NATIONAL COMPUTER CENTER, UNITED KINGDOM
                </option>
                <option value="NATIONAL DEFENSE MEDICAL CENTER, TAIWAN">NATIONAL DEFENSE MEDICAL CENTER, TAIWAN</option>
                <option value="NATIONAL TAIWAN UNIVERSITY">NATIONAL TAIWAN UNIVERSITY</option>
                <option value="NATIONAL TECHNICAL UNI. ATHENS, GREECE">NATIONAL TECHNICAL UNI. ATHENS, GREECE</option>
                <option value="NATIONAL UNI. SANDIEGO,CALIFORNIA,USA">NATIONAL UNI. SANDIEGO,CALIFORNIA,USA</option>
                <option value="NATIONAL UNIVERSITY OF IRELAND">NATIONAL UNIVERSITY OF IRELAND</option>
                <option value="NATIONAL YANG MING UNI. TAIPEI, TAIWAN">NATIONAL YANG MING UNI. TAIPEI, TAIWAN</option>
                <option value="NAVAL POST GRADUATE SCH. MONTERGY CALIF.">NAVAL POST GRADUATE SCH. MONTERGY CALIF.
                </option>
                <option value="NAZARETH COLLEGE OF ROCHESTER,N.YORK,USA">NAZARETH COLLEGE OF ROCHESTER,N.YORK,USA
                </option>
                <option value="NAZARTH COLLEGE MICHIGAN, USA">NAZARTH COLLEGE MICHIGAN, USA</option>
                <option value="NEBRASKA WESLEYAN U.LINCOLN,NEBRASKA,USA">NEBRASKA WESLEYAN U.LINCOLN,NEBRASKA,USA
                </option>
                <option value="NELSON POLYTECHNIC NEW ZEALAND">NELSON POLYTECHNIC NEW ZEALAND</option>
                <option value="NEW COL. OF CALIFORNIA SAN FRANCISCO,USA">NEW COL. OF CALIFORNIA SAN FRANCISCO,USA
                </option>
                <option value="NEW ENGLAND COLLEGE HENNIKER N.H., USA">NEW ENGLAND COLLEGE HENNIKER N.H., USA</option>
                <option value="NEW HAMPSHIRE COL. MANCHESTER N.H., USA">NEW HAMPSHIRE COL. MANCHESTER N.H., USA</option>
                <option value="NEW JERSEY COLLEGE OF MEDICINE N J USA">NEW JERSEY COLLEGE OF MEDICINE N J USA</option>
                <option value="NEW JERSEY INST OF TEC NEWARK USA">NEW JERSEY INST OF TEC NEWARK USA</option>
                <option value="NEW SCHOOL FOR SOCIAL RESEARCH,N.Y.,USA">NEW SCHOOL FOR SOCIAL RESEARCH,N.Y.,USA</option>
                <option value="NEW SOUTH WALES INST.OF TEC. SDYNEY AUST">NEW SOUTH WALES INST.OF TEC. SDYNEY AUST
                </option>
                <option value="NEW UNIVERSITY OF UISTER,UNITED KINGDOM">NEW UNIVERSITY OF UISTER,UNITED KINGDOM</option>
                <option value="NEW YORK INST.OF TEC.OLD WESTBURY,N.YORK">NEW YORK INST.OF TEC.OLD WESTBURY,N.YORK
                </option>
                <option value="NEW YORK UNIVERSITY,NEW YORK,USA">NEW YORK UNIVERSITY,NEW YORK,USA</option>
                <option value="NEWARK C OF ENGINEERING NEWARK N J USA">NEWARK C OF ENGINEERING NEWARK N J USA</option>
                <option value="NEWARK TECHNICAL COLLEGE,U.K.">NEWARK TECHNICAL COLLEGE,U.K.</option>
                <option value="NEWBERY COLLEGE,SOUTH CAROLINA, USA">NEWBERY COLLEGE,SOUTH CAROLINA, USA</option>
                <option value="NEWCASTLE UPON TYNE POLLYTECHNIC,U.K.">NEWCASTLE UPON TYNE POLLYTECHNIC,U.K.</option>
                <option value="NIAGARA UNIVERSITY,NIAGARA,NEW YORK,USA">NIAGARA UNIVERSITY,NIAGARA,NEW YORK,USA</option>
                <option value="NICHOLS COLLEGE DUIDLEY MASS., USA">NICHOLS COLLEGE DUIDLEY MASS., USA</option>
                <option value="NIHAMA TEKNIKAL KOLEJ KEBANGSAAN JEPUN">NIHAMA TEKNIKAL KOLEJ KEBANGSAAN JEPUN</option>
                <option value="NIIHAMA TECHNICAL COLLEGE/ NIIHAMA NATIONAL COLLEGE OF TECHNOLOGY">NIIHAMA TECHNICAL
                  COLLEGE/ NIIHAMA NATIONAL COLLEGE OF TECHNOLOGY</option>
                <option value="NISHTAR MEDICAL COLLEGE, MULTAN,PAKISTAN">NISHTAR MEDICAL COLLEGE, MULTAN,PAKISTAN
                </option>
                <option value="NIZHNY NOVGOROD STATE MEDICAL ACADEMY">NIZHNY NOVGOROD STATE MEDICAL ACADEMY</option>
                <option value="NOBA UNI. FORT LAUDERDALE FLORIDA,USA">NOBA UNI. FORT LAUDERDALE FLORIDA,USA</option>
                <option value="NOCHOLLS STATE U.THIBODAUX,LOUISIANA,USA">NOCHOLLS STATE U.THIBODAUX,LOUISIANA,USA
                </option>
                <option value="NORGES TECHNESKE HOGSKOLE, NORWAY">NORGES TECHNESKE HOGSKOLE, NORWAY</option>
                <option value="NORRFOLK STATE COLLEGE, VIRGINIA,USA">NORRFOLK STATE COLLEGE, VIRGINIA,USA</option>
                <option value="NORTH CAROLINA CENTRAL U. DURHAM, USA.">NORTH CAROLINA CENTRAL U. DURHAM, USA.</option>
                <option value="NORTH CAROLINA STATE U.RALEIG, U.S.A">NORTH CAROLINA STATE U.RALEIG, U.S.A</option>
                <option value="NORTH DAKOTA STATE UNI. FARGO,N.D., USA">NORTH DAKOTA STATE UNI. FARGO,N.D., USA</option>
                <option value="NORTH EAST WALES INS. OF HIGHER EDU,WREX">NORTH EAST WALES INS. OF HIGHER EDU,WREX
                </option>
                <option value="NORTH GEORGIA COL. DAHLONEGA GEORGIA,USA">NORTH GEORGIA COL. DAHLONEGA GEORGIA,USA
                </option>
                <option value="NORTH STAFFORDSHIRE POLYTECHNIC, U.K.">NORTH STAFFORDSHIRE POLYTECHNIC, U.K.</option>
                <option value="NORTH TEXAS STATE UNI. DENTON,TEXAS, USA">NORTH TEXAS STATE UNI. DENTON,TEXAS, USA
                </option>
                <option value="NORTH-EAST LONDON POLYTECHNIC,U.K.">NORTH-EAST LONDON POLYTECHNIC,U.K.</option>
                <option value="NORTHEAST LOUISIANA UNI. MONROE, USA">NORTHEAST LOUISIANA UNI. MONROE, USA</option>
                <option value="NORTHEAST MISSOURI ST. UNI. MARYVILLE,US">NORTHEAST MISSOURI ST. UNI. MARYVILLE,US
                </option>
                <option value="NORTHEAST MISSOURI ST.UNI. KIRKSVILLE US">NORTHEAST MISSOURI ST.UNI. KIRKSVILLE US
                </option>
                <option value="NORTHEASTERN ILLINOIS UNI. CHICAGO,USA">NORTHEASTERN ILLINOIS UNI. CHICAGO,USA</option>
                <option value="NORTHEASTERN OKLAHOMA STATE U.TAHLEQUAH">NORTHEASTERN OKLAHOMA STATE U.TAHLEQUAH</option>
                <option value="NORTHEASTERN UNI., BOSTON, MASS., USA">NORTHEASTERN UNI., BOSTON, MASS., USA</option>
                <option value="NORTHERN ARIZONA UNIVERSITY,ARIZONA, USA">NORTHERN ARIZONA UNIVERSITY,ARIZONA, USA
                </option>
                <option value="NORTHERN ILLINOIS UNIVERSITY DEKALB USA">NORTHERN ILLINOIS UNIVERSITY DEKALB USA</option>
                <option value="NORTHERN MICHIGAN UNI.,MARQUETTE, USA">NORTHERN MICHIGAN UNI.,MARQUETTE, USA</option>
                <option value="NORTHERN MONTANA COL.,HAVRE,MONTANA,USA">NORTHERN MONTANA COL.,HAVRE,MONTANA,USA</option>
                <option value="NORTHERN STATE COL.ABERDEEN S.DAKOTA,USA">NORTHERN STATE COL.ABERDEEN S.DAKOTA,USA
                </option>
                <option value="NORTHROP UNI.INGLEWOOD CALIFORNIA,USA">NORTHROP UNI.INGLEWOOD CALIFORNIA,USA</option>
                <option value="NORTHWEST CHRISTIAN C.AUGENE,OREGON,USA.">NORTHWEST CHRISTIAN C.AUGENE,OREGON,USA.
                </option>
                <option value="NORTHWEST MISSOURI STATE UNIV. MARYVILLE">NORTHWEST MISSOURI STATE UNIV. MARYVILLE
                </option>
                <option value="NORTHWESTERN COL. ORANGECITY IOWA, USA">NORTHWESTERN COL. ORANGECITY IOWA, USA</option>
                <option value="NORTHWESTERN OKLAHOMA STATE UNI.ALVA,USA">NORTHWESTERN OKLAHOMA STATE UNI.ALVA,USA
                </option>
                <option value="NORTHWESTERN ST. UNI. NATCHITOCHES LOUIS">NORTHWESTERN ST. UNI. NATCHITOCHES LOUIS
                </option>
                <option value="NORTHWESTERN UNI. BOSTON, MASS., USA">NORTHWESTERN UNI. BOSTON, MASS., USA</option>
                <option value="NORTHWESTERN UNI. EVANSTON ILLINOIS, USA">NORTHWESTERN UNI. EVANSTON ILLINOIS, USA
                </option>
                <option value="NORTHWOOD INST. MIDLAND, MICHIGAN, USA">NORTHWOOD INST. MIDLAND, MICHIGAN, USA</option>
                <option value="NORTHWOOD UNIVERSITY MICHIGAN USA">NORTHWOOD UNIVERSITY MICHIGAN USA</option>
                <option value="NORTHWOOD UNIVERSITY OF FLORIDA,USA">NORTHWOOD UNIVERSITY OF FLORIDA,USA</option>
                <option value="NORTHWOOD UNIVERSITY TEXAS, USA">NORTHWOOD UNIVERSITY TEXAS, USA</option>
                <option value="NORTLAND COLLEGE ,ASHLAND,WISCONSIN,USA">NORTLAND COLLEGE ,ASHLAND,WISCONSIN,USA</option>
                <option value="NORTWERS NAZARENE COL. NAMPA IDAHO,USA">NORTWERS NAZARENE COL. NAMPA IDAHO,USA</option>
                <option value="NORWICH CITY COLLEGE, UNITED KINGDOM">NORWICH CITY COLLEGE, UNITED KINGDOM</option>
                <option value="NORWICH SCHOOL OF ART, UNITED KINGDOM">NORWICH SCHOOL OF ART, UNITED KINGDOM</option>
                <option value="NORWICH UNIVERSITY, NORTHFIELD,VERM.,USA">NORWICH UNIVERSITY, NORTHFIELD,VERM.,USA
                </option>
                <option value="NOTRE DAME COLLEGE CLEVELAND,OHIO,USA">NOTRE DAME COLLEGE CLEVELAND,OHIO,USA</option>
                <option value="NOTRE DAME COLLEGE MANCHESTER N.H., USA">NOTRE DAME COLLEGE MANCHESTER N.H., USA</option>
                <option value="NOTTINGHAM POLYTECHNIC UNITED KINGDOM">NOTTINGHAM POLYTECHNIC UNITED KINGDOM</option>
                <option value="NUMAZU COLLAGE OF TECHNOLOGY, JAPAN">NUMAZU COLLAGE OF TECHNOLOGY, JAPAN</option>
                <option value="NYACK COLLEGE,NYACK NEW YORK, USA">NYACK COLLEGE,NYACK NEW YORK, USA</option>
                <option value="O.OF ANIMAL HUSB.LAHORE U.OF THE PUNJAB">O.OF ANIMAL HUSB.LAHORE U.OF THE PUNJAB</option>
                <option value="OAKLAND UNIVERSITY ORCHESTER, MICH., USA">OAKLAND UNIVERSITY ORCHESTER, MICH., USA
                </option>
                <option value="OAKWOOD COLLEGE, HUNISVILLE,ALABAMA,USA">OAKWOOD COLLEGE, HUNISVILLE,ALABAMA,USA</option>
                <option value="OBLATE COLLEGE WASHINGTON D.C.,USA">OBLATE COLLEGE WASHINGTON D.C.,USA</option>
                <option value="OCCIDENTAL COL. L.A., CALIFORNIA,USA">OCCIDENTAL COL. L.A., CALIFORNIA,USA</option>
                <option value="OGLETHORPE UNI. ATLANTA GEORGIA,USA">OGLETHORPE UNI. ATLANTA GEORGIA,USA</option>
                <option value="OHIO DOMINICAN COLLEGE,COLUMBUS,OHIO,USA">OHIO DOMINICAN COLLEGE,COLUMBUS,OHIO,USA
                </option>
                <option value="OHIO NORTHERN UNIVERSITY,ADA,OHIO,USA">OHIO NORTHERN UNIVERSITY,ADA,OHIO,USA</option>
                <option value="OHIO STATE UNIVERSITY,COLUMBUS, USA">OHIO STATE UNIVERSITY,COLUMBUS, USA</option>
                <option value="OHIO UNIVERSITY,ATHENS, USA">OHIO UNIVERSITY,ATHENS, USA</option>
                <option value="OHIO WESLEYAN UNIVERSITY,DERAWARE, USA">OHIO WESLEYAN UNIVERSITY,DERAWARE, USA</option>
                <option value="OITA NATIONAL COLLEGE OF TECHNOLOGY">OITA NATIONAL COLLEGE OF TECHNOLOGY</option>
                <option value="OKAYAMA UNIVERSITY">OKAYAMA UNIVERSITY</option>
                <option value="OKAYAMA UNIVERSITY OF SCIENCE">OKAYAMA UNIVERSITY OF SCIENCE</option>
                <option value="OKLAHOMA BAPTIST UNIVERSITY,SHAWNEE,USA">OKLAHOMA BAPTIST UNIVERSITY,SHAWNEE,USA</option>
                <option value="OKLAHOMA CHRISTIAN C.OKLAHOMA CITY,USA">OKLAHOMA CHRISTIAN C.OKLAHOMA CITY,USA</option>
                <option value="OKLAHOMA CITY UNIVERSITY, U.S.A.">OKLAHOMA CITY UNIVERSITY, U.S.A.</option>
                <option value="OKLAHOMA PANHANDLE STATE U.GOODWELL,USA">OKLAHOMA PANHANDLE STATE U.GOODWELL,USA</option>
                <option value="OKLAHOMA STATE UNIVERSITY,STILLWATER,USA">OKLAHOMA STATE UNIVERSITY,STILLWATER,USA
                </option>
                <option value="OLD DOMINION UNI. NORFOLK, VIRGINIA,USA">OLD DOMINION UNI. NORFOLK, VIRGINIA,USA</option>
                <option value="OLIVET COLLEGE OLIVET MICHIGAN, USA">OLIVET COLLEGE OLIVET MICHIGAN, USA</option>
                <option value="OLIVET NAZARENE C KANKEKEE ILLINOIS USA">OLIVET NAZARENE C KANKEKEE ILLINOIS USA</option>
                <option value="ORAL ROBERTS UNI. TULSA,OKLAHOMA, USA">ORAL ROBERTS UNI. TULSA,OKLAHOMA, USA</option>
                <option value="OREGON COLLEGE OF EDUC.MONMOUTH, U.S.A.">OREGON COLLEGE OF EDUC.MONMOUTH, U.S.A.</option>
                <option value="OREGON STATE UNIVERSITY,CORVALLIS,U.S.A.">OREGON STATE UNIVERSITY,CORVALLIS,U.S.A.
                </option>
                <option value="ORISSA C.OF VET.SC.& ANI.HUSB.UTKAL U.IN">ORISSA C.OF VET.SC.& ANI.HUSB.UTKAL U.IN
                </option>
                <option value="OSAKA UNIVERSITY">OSAKA UNIVERSITY</option>
                <option value="OSMANIA UNIVERSITY OF INDIA">OSMANIA UNIVERSITY OF INDIA</option>
                <option value="OTAGO POLYTECHNIC, NEW ZEALAND">OTAGO POLYTECHNIC, NEW ZEALAND</option>
                <option value="OTARU UNIVERSITY OF COMMERCE, JEPUN">KOTARU UNIVERSITY OF COMMERCE, JEPUN</option>
                <option value="OTIS ART INST. OF LA CUNNTY CALIF. USA">OTIS ART INST. OF LA CUNNTY CALIF. USA</option>
                <option value="OTTAWA UNIVERSITY, CANADA">OTTAWA UNIVERSITY, CANADA</option>
                <option value="OTTAWA UNIVERSITY, OTTAWA KANSAS, US">OTTAWA UNIVERSITY, OTTAWA KANSAS, US</option>
                <option value="OTTERBEIN COLLEGE,WESTERVILLE,OHIO,USA">KOLEJ MCS</option>
                <option value="">OTTERBEIN COLLEGE,WESTERVILLE,OHIO,USA</option>
                <option value="OUACHITA BAPTISH U.ARKADELPHIA,ARK. USA">OUACHITA BAPTISH U.ARKADELPHIA,ARK. USA</option>
                <option value="OULUN YLIOPISTO FACULTY OF TEC, FINLAND">OULUN YLIOPISTO FACULTY OF TEC, FINLAND</option>
                <option value="OUR LADY OF HOLY CROSS C N ORLEANS LOUIS">OUR LADY OF HOLY CROSS C N ORLEANS LOUIS
                </option>
                <option value="OUR LADY OF THE LAKE U.SAN ANT.TEXAS,USA">OUR LADY OF THE LAKE U.SAN ANT.TEXAS,USA
                </option>
                <option value="OXFORD BROOKES UNIVERSITY">OXFORD BROOKES UNIVERSITY</option>
                <option value="OXFORD POLYTECHNIC, UNITED KINGDOM">OXFORD POLYTECHNIC, UNITED KINGDOM</option>
                <option value="OYAMA NATIONAL COLLAGE TECH. JAPAN">OYAMA NATIONAL COLLAGE TECH. JAPAN</option>
                <option value="PACE COLLEGE, NEW YORK, USA">PACE COLLEGE, NEW YORK, USA</option>
                <option value="PACE UNIVERSITY,PLEASANTVILLE,N.YORK,USA">PACE UNIVERSITY,PLEASANTVILLE,N.YORK,USA
                </option>
                <option value="PACIFIC CHIRSTIAN C LONG BEACH CALIF,USA">PACIFIC CHIRSTIAN C LONG BEACH CALIF,USA
                </option>
                <option value="PACIFIC DAKS COLLEGE PASADENA CALIF,USA">PACIFIC DAKS COLLEGE PASADENA CALIF,USA</option>
                <option value="PACIFIC LUTHERAN U.,TACOMA, WASH, USA">PACIFIC LUTHERAN U.,TACOMA, WASH, USA</option>
                <option value="PACIFIC STATES UNI.LOS ANGELES, CALIFOR.">PACIFIC STATES UNI.LOS ANGELES, CALIFOR.
                </option>
                <option value="PACIFIC U. FOREST GROVE, OREGON, U.S.A.">PACIFIC U. FOREST GROVE, OREGON, U.S.A.</option>
                <option value="PACIFIC UNION COLLEGE ANGWIN CALIF., USA">PACIFIC UNION COLLEGE ANGWIN CALIF., USA
                </option>
                <option value="PAINE COLLEGE AUGUSTA GEORGIA,USA">PAINE COLLEGE AUGUSTA GEORGIA,USA</option>
                <option value="PAISLEY COLLEGE OF TECHNOLOGY, U.K.">PAISLEY COLLEGE OF TECHNOLOGY, U.K.</option>
                <option value="PAKISTAN LIAQUAT MED.C.HYDERABAD,PAKIS">PAKISTAN LIAQUAT MED.C.HYDERABAD,PAKIS</option>
                <option value="PALACKY UNIVERISTY, FACULTY OF MEDICINE, OLOMOUC">PALACKY UNIVERISTY, FACULTY OF
                  MEDICINE, OLOMOUC</option>
                <option value="PALM BEACH ATL. UNI. ST PALM BEACH FLOR.">PALM BEACH ATL. UNI. ST PALM BEACH FLOR.
                </option>
                <option value="PAN AMERICAN UNI. EDINBURG, TEXAS, USA">PAN AMERICAN UNI. EDINBURG, TEXAS, USA</option>
                <option value="PANJAB UNIVERSITY, INDIA">PANJAB UNIVERSITY, INDIA</option>
                <option value="PARK C.OF AERONAUT TECH.CAHOKIA ILL.,USA">PARK C.OF AERONAUT TECH.CAHOKIA ILL.,USA
                </option>
                <option value="PASADENA COLLEGE CALIFORNIA, USA">PASADENA COLLEGE CALIFORNIA, USA</option>
                <option value="PEABODY INST. OF BALTIMORE, MARYLAND,USA">PEABODY INST. OF BALTIMORE, MARYLAND,USA
                </option>
                <option value="PEKING UNIVERSITY, CHINA">PEKING UNIVERSITY, CHINA</option>
                <option value="PEMBROKE STATE U.,NORTH CAROLINA, U.S.A">PEMBROKE STATE U.,NORTH CAROLINA, U.S.A</option>
                <option value="PEMBROKESHIRE COLL.HAVERFORDWEST SA611SZ">PEMBROKESHIRE COLL.HAVERFORDWEST SA611SZ
                </option>
                <option value="PEMBROKESHIRE COLLEGE, WALES, UK">PEMBROKESHIRE COLLEGE, WALES, UK</option>
                <option value="PEND.& LAT. AHLI PELAYARAN JAKARTA INDO.">PEND.& LAT. AHLI PELAYARAN JAKARTA INDO.
                </option>
                <option value="PENN. STATE UNI. CAPITOL MIDDLETOWN,USA">PENN. STATE UNI. CAPITOL MIDDLETOWN,USA</option>
                <option value="PENNSYLVANIA C.OF OPTOMETNY PHILADELPHIA">PENNSYLVANIA C.OF OPTOMETNY PHILADELPHIA
                </option>
                <option value="PENNSYLVANIA ST.UNI.,UNIVERSITY PARK,USA">PENNSYLVANIA ST.UNI.,UNIVERSITY PARK,USA
                </option>
                <option value="PENNSYLVANIA STATE UNI. BEHREND COL.,USA">PENNSYLVANIA STATE UNI. BEHREND COL.,USA
                </option>
                <option value="PEPERDINE UNI. L.A. CALIFORNIA, USA">PEPERDINE UNI. L.A. CALIFORNIA, USA</option>
                <option value="PEPPERDINE UNI. MALIBU CALIFORNIA,USA">PEPPERDINE UNI. MALIBU CALIFORNIA,USA</option>
                <option value="PERU STATE COLLEGE,PERU,NEBRASKA,USA">PERU STATE COLLEGE,PERU,NEBRASKA,USA</option>
                <option value="PESHAWAR UNI,AYUB MEDICAL COLL.ABBOTABAD">PESHAWAR UNI,AYUB MEDICAL COLL.ABBOTABAD
                </option>
                <option value="PFEIFFER COLLEGE,MISENHEIMER,N.CAROLINA">PFEIFFER COLLEGE,MISENHEIMER,N.CAROLINA</option>
                <option value="PHILADELPHIA C.OF TEXT & SC,PHILADEL.USA">PHILADELPHIA C.OF TEXT & SC,PHILADEL.USA
                </option>
                <option value="PHILADELPHIA COL. OF BIBLE, PENN., USA">PHILADELPHIA COL. OF BIBLE, PENN., USA</option>
                <option value="PHILADELPHIA COL., OF ART, PENN.,USA">PHILADELPHIA COL., OF ART, PENN.,USA</option>
                <option value="PHILADELPHIA COL.OF PHAR.& SC.,PENN.,USA">PHILADELPHIA COL.OF PHAR.& SC.,PENN.,USA
                </option>
                <option value="PHILADELPHIA MUSICAL ACADEMY, PA., USA">PHILADELPHIA MUSICAL ACADEMY, PA., USA</option>
                <option value="PHILADELPHIA UNIVERSITY, AMMAN, JORDAN">PHILADELPHIA UNIVERSITY, AMMAN, JORDAN</option>
                <option value="PHILANDER SMITH C.LITTLE ROCK,ARK. USA">PHILANDER SMITH C.LITTLE ROCK,ARK. USA</option>
                <option value="PHILLIPS UNIVERSITY,ENID,OKLAHOMA,U.S.A.">PHILLIPS UNIVERSITY,ENID,OKLAHOMA,U.S.A.
                </option>
                <option value="PIEDMONT COLLEGE DEMOREST GEORGIA,USA">PIEDMONT COLLEGE DEMOREST GEORGIA,USA</option>
                <option value="PIKEVILLE COLLEGE KENTUCKY, USA">PIKEVILLE COLLEGE KENTUCKY, USA</option>
                <option value="PITTSBURG STATE UNIVERSITY, KANSAS, U.S.">PITTSBURG STATE UNIVERSITY, KANSAS, U.S.
                </option>
                <option value="PITZER COLLEGE CLAREMONT CALIFORNIA,USA">PITZER COLLEGE CLAREMONT CALIFORNIA,USA</option>
                <option value="PLYMOUTH COLLEGE OF FUTHER EDUCATION,UK">PLYMOUTH COLLEGE OF FUTHER EDUCATION,UK</option>
                <option value="PLYMOUTH POLYTECHNIC, UNITED KINGDOM">PLYMOUTH POLYTECHNIC, UNITED KINGDOM</option>
                <option value="PLYMOUTH STATE COLLEGE PLYMOUTH N.H.,USA">PLYMOUTH STATE COLLEGE PLYMOUTH N.H.,USA
                </option>
                <option value="POINT LOMA COLLEGE SAN DIEGO CALIF., USA">POINT LOMA COLLEGE SAN DIEGO CALIF., USA
                </option>
                <option value="POINT PARK C. PITTSBURG,PENNSYLVANIA,USA">POINT PARK C. PITTSBURG,PENNSYLVANIA,USA
                </option>
                <option value="POLITECHNICO DI MILANO, ITALY">POLITECHNICO DI MILANO, ITALY</option>
                <option value="POLITECHNICO DI TORINO, ITALY">POLITECHNICO DI TORINO, ITALY</option>
                <option value="POLY.SCH.PANEPISTIMIOU THESSALONILIS,GRE">POLY.SCH.PANEPISTIMIOU THESSALONILIS,GRE
                </option>
                <option value="POLYTEC. INST.OF NEW YORK,BROOKLYN,USA">POLYTEC. INST.OF NEW YORK,BROOKLYN,USA</option>
                <option value="POLYTECHNIC OF THE SOUTH BANK,U.K.">POLYTECHNIC OF THE SOUTH BANK,U.K.</option>
                <option value="POLYTECHNIC OF WALES, UNITED KINGDOM">POLYTECHNIC OF WALES, UNITED KINGDOM</option>
                <option value="POLYTECHNIC UNIVERSTIY, KANAGAWA, JAPAN">POLYTECHNIC UNIVERSTIY, KANAGAWA, JAPAN</option>
                <option value="POMONA COLLEGE CLAREMONT CALIFORNIA, USA">POMONA COLLEGE CLAREMONT CALIFORNIA, USA
                </option>
                <option value="PONDICHERRY UNI-THANJAVUR MED.COLL.INDIA">PONDICHERRY UNI-THANJAVUR MED.COLL.INDIA
                </option>
                <option value="PORTLAND STATE UNIVERSITY, OREGON, U.S.A">PORTLAND STATE UNIVERSITY, OREGON, U.S.A
                </option>
                <option value="PORTSMOUTH POLYTECHNIC,UNITED KINGDOM">PORTSMOUTH POLYTECHNIC,UNITED KINGDOM</option>
                <option value="PRAIRIE VIEW AGRI. & MECH. UNI.TEXAS,USA">PRAIRIE VIEW AGRI. & MECH. UNI.TEXAS,USA
                </option>
                <option value="PRATT INSTITUTE,BROOKLYN,NEW YORK,USA">PRATT INSTITUTE,BROOKLYN,NEW YORK,USA</option>
                <option value="PRESBYTERIAN COL.,CLINTON,S.CAROLINA,USA">PRESBYTERIAN COL.,CLINTON,S.CAROLINA,USA
                </option>
                <option value="PRESBYTERIAN SCH.OF CHRISTIAN ED.RICHMON">PRESBYTERIAN SCH.OF CHRISTIAN ED.RICHMON
                </option>
                <option value="PRESTON POLYTECHNIC, UNITED KINGDOM">PRESTON POLYTECHNIC, UNITED KINGDOM</option>
                <option value="PRINCE OF WALES COLLEGE LONDON, U.K.">PRINCE OF WALES COLLEGE LONDON, U.K.</option>
                <option value="PRINCETON TECHNOLOGICAL SEMINARY USA">PRINCETON TECHNOLOGICAL SEMINARY USA</option>
                <option value="PRINCETON UNIVERSITY NEW JERSEY USA">PRINCETON UNIVERSITY NEW JERSEY USA</option>
                <option value="PRINCIPIA COLLEGE ELSAH ILLINOIS USA">PRINCIPIA COLLEGE ELSAH ILLINOIS USA</option>
                <option value="PROVIDENCE COLLEGE RHODE ISLAND, USA">PROVIDENCE COLLEGE RHODE ISLAND, USA</option>
                <option value="PUNJAB MEDICAL COLL. FAISALABAD PAKISTAN">PUNJAB MEDICAL COLL. FAISALABAD PAKISTAN
                </option>
                <option value="PUNJAB UNIVERSITY, PAKISTAN">PUNJAB UNIVERSITY, PAKISTAN</option>
                <option value="PURDUE UNIV, WEST LAFAYETTE,INDIANA, USA">PURDUE UNIV, WEST LAFAYETTE,INDIANA, USA
                </option>
                <option value="PURDUE UNIVERSITY FAYEYETIE INDIANA USA">PURDUE UNIVERSITY FAYEYETIE INDIANA USA</option>
                <option value="PURDUE UNIVERSITY HAMMOND INDIANA USA">PURDUE UNIVERSITY HAMMOND INDIANA USA</option>
                <option value="QOINCY COLLEGE ILLINOIS,USA">QOINCY COLLEGE ILLINOIS,USA</option>
                <option value="QUEEN MARGARET COLL.EDINBURGH,SCOTLAND">QUEEN MARGARET COLL.EDINBURGH,SCOTLAND</option>
                <option value="QUEEN MARY AND WESTFIELD COLLEGE (UNIVERSITY OF LONDON)">QUEEN MARY AND WESTFIELD COLLEGE
                  (UNIVERSITY OF LONDON)</option>
                <option value="QUEEN'S UNIVERSITY OF BELFAST,U.K.">QUEEN'S UNIVERSITY OF BELFAST,U.K.</option>
                <option value="QUEEN'S UNIVERSITY, CANADA">QUEEN'S UNIVERSITY, CANADA</option>
                <option value="QUEENS COLLEGE,CHARLETTE,N.CAROLINA,USA">QUEENS COLLEGE,CHARLETTE,N.CAROLINA,USA</option>
                <option value="QUEENS ELIZABETH COLLEGE,LONDON,U.K.">QUEENS ELIZABETH COLLEGE,LONDON,U.K.</option>
                <option value="QUEENSLAND INS.OF TEC,BRISBANE AUSTRALIA">QUEENSLAND INS.OF TEC,BRISBANE AUSTRALIA
                </option>
                <option value="QUEENSLAND UNIVERSITY OF TECHNOLOGY,AUST">QUEENSLAND UNIVERSITY OF TECHNOLOGY,AUST
                </option>
                <option value="QUINNIPIAC COL. HAMDEN CONNECTICUT,USA">QUINNIPIAC COL. HAMDEN CONNECTICUT,USA</option>
                <option value="RADFORD COLLEGE, VIRGINIA,USA">RADFORD COLLEGE, VIRGINIA,USA</option>
                <option value="RAJAH MUTHIAH MED. COLL&HOS. ANNAMALAI">RAJAH MUTHIAH MED. COLL&HOS. ANNAMALAI</option>
                <option value="RAJENDRA AGRI. UNIVERSITY, BIHAR, INDIA">RAJENDRA AGRI. UNIVERSITY, BIHAR, INDIA</option>
                <option value="RAJIV GANDHI UNIVERSITY OF HEALTH SCIENC">RAJIV GANDHI UNIVERSITY OF HEALTH SCIENC
                </option>
                <option value="RANDOLF-MACON COLLEGE,ASHLAND,VIRG.,USA">RANDOLF-MACON COLLEGE,ASHLAND,VIRG.,USA</option>
                <option value="RANDOLF-MACON WOMANS'S C. LYNCHBURG,VIR">RANDOLF-MACON WOMANS'S C. LYNCHBURG,VIR</option>
                <option value="RAVENSBOURNE COLLEGE OF ART, U.K.">RAVENSBOURNE COLLEGE OF ART, U.K.</option>
                <option value="RAVINDRA NATH TAGORE MED. COLL.,UDAIPUR">RAVINDRA NATH TAGORE MED. COLL.,UDAIPUR</option>
                <option value="RAWALPINDI MEDICAL,COLLEGE,PAKISTAN">RAWALPINDI MEDICAL,COLLEGE,PAKISTAN</option>
                <option value="REDBRIDGE TECHNICAL COLLEGE, U.K.">REDBRIDGE TECHNICAL COLLEGE, U.K.</option>
                <option value="REED COLLEGE PORTLAND, OREGON, U.S.A.">REED COLLEGE PORTLAND, OREGON, U.S.A.</option>
                <option value="REGIONAL COLLEGE OF ART,HULL, U.K.">REGIONAL COLLEGE OF ART,HULL, U.K.</option>
                <option value="REGIS COLLEGE,DENVER,COLORADO, USA">REGIS COLLEGE,DENVER,COLORADO, USA</option>
                <option value="REGIWS COLLEGE WESTON MASSACHUSETTS, USA">REGIWS COLLEGE WESTON MASSACHUSETTS, USA
                </option>
                <option value="REITAKU UNIVERSITY, JEPUN">REITAKU UNIVERSITY, JEPUN</option>
                <option value="RENNSSELAER POLYTECHNIC INST.TROY, N.Y.">RENNSSELAER POLYTECHNIC INST.TROY, N.Y.</option>
                <option value="RENSSELAER POLYTECHNIC INST.HARTFORD,USA">RENSSELAER POLYTECHNIC INST.HARTFORD,USA
                </option>
                <option value="RHEINISCH-WESFALISCH TEC.HOSHSCHULE,AACH">RHEINISCH-WESFALISCH TEC.HOSHSCHULE,AACH
                </option>
                <option value="RHODE ISLAND COLLEGE PROVIDENCE, USA">RHODE ISLAND COLLEGE PROVIDENCE, USA</option>
                <option value="RHODE ISLAND SC.OF DESIGN PROVIDENCE,USA">RHODE ISLAND SC.OF DESIGN PROVIDENCE,USA
                </option>
                <option value="RICE UNIVERSITY, HOUSTON, TEXAS, USA">RICE UNIVERSITY, HOUSTON, TEXAS, USA</option>
                <option value="RICKER COLLEGE, HOULTON, MAINE, USA">RICKER COLLEGE, HOULTON, MAINE, USA</option>
                <option value="RIDER COLLEGE LAWRENCEVILLE N.J., USA">RIDER COLLEGE LAWRENCEVILLE N.J., USA</option>
                <option value="RIJKSLANDBOUW INS.ANNEXE A U.DE GAND.BEL">RIJKSLANDBOUW INS.ANNEXE A U.DE GAND.BEL
                </option>
                <option value="RIO GRANDE COLLEGE,OHIO, USA">RIO GRANDE COLLEGE,OHIO, USA</option>
                <option value="RIPON COLLEGE, WISCONSIN, USA">RIPON COLLEGE, WISCONSIN, USA</option>
                <option value="RITSUMEIKAN UNIVERSITY, JAPAN">RITSUMEIKAN UNIVERSITY, JAPAN</option>
                <option value="RIVIER COLLEGE NASHUA NEW HAMPSHIRE, USA">RIVIER COLLEGE NASHUA NEW HAMPSHIRE, USA
                </option>
                <option value="RMIT UNIVERSITY MELBOURNE, AUSTRALIA">RMIT UNIVERSITY MELBOURNE, AUSTRALIA</option>
                <option value="ROANOKE COLLEGE, SALEM, VIRGINIA, USA">ROANOKE COLLEGE, SALEM, VIRGINIA, USA</option>
                <option value="ROBERT GORDON UNIVERSITY">ROBERT GORDON UNIVERSITY</option>
                <option value="ROBERT GORDON'S INST.OF TEC.ABERDEEN,UK">ROBERT GORDON'S INST.OF TEC.ABERDEEN,UK</option>
                <option value="ROBERT MORRIS COL. CORAOPOLIS,PENN., USA">ROBERT MORRIS COL. CORAOPOLIS,PENN., USA
                </option>
                <option value="ROBERTS WESLEYAN COL.,ROCHESTER,N.Y.,USA">ROBERTS WESLEYAN COL.,ROCHESTER,N.Y.,USA
                </option>
                <option value="ROCHESTER INST. OF TECHNOLOGY,N.Y.,USA">ROCHESTER INST. OF TECHNOLOGY,N.Y.,USA</option>
                <option value="ROCKFORD COLLEGE ILLINOIS,USA">ROCKFORD COLLEGE ILLINOIS,USA</option>
                <option value="ROGER WILLIAM COL. BRISTOL, R.ISLAND,USA">ROGER WILLIAM COL. BRISTOL, R.ISLAND,USA
                </option>
                <option value="ROLLINS COLLEGE,WINTER PARK,FLORIDA,USA">ROLLINS COLLEGE,WINTER PARK,FLORIDA,USA</option>
                <option value="ROSARY COL. RIVER FOREST ILLINOIS,USA">ROSARY COL. RIVER FOREST ILLINOIS,USA</option>
                <option value="ROSE HULMAN INST OF TECH TERRE HAUTE IND">ROSE HULMAN INST OF TECH TERRE HAUTE IND
                </option>
                <option value="ROSEMONT COLLEGE, PENNSYLVANIA, USA">ROSEMONT COLLEGE, PENNSYLVANIA, USA</option>
                <option value="ROSSEVELT UNI. CHICAGO ILLINOIS,USA">ROSSEVELT UNI. CHICAGO ILLINOIS,USA</option>
                <option value="ROYAL ACADEMY OF MUSIC,UNITED KINGDOM">ROYAL ACADEMY OF MUSIC,UNITED KINGDOM MCS</option>
                <option value="ROYAL AGRICULTURE COLLEGE,UNITED KINGDOM">ROYAL AGRICULTURE COLLEGE,UNITED KINGDOM
                </option>
                <option value="ROYAL COLLEGE OF (OBS AND GYNAECOLOGIST)">ROYAL COLLEGE OF (OBS AND GYNAECOLOGIST)
                </option>
                <option value="ROYAL COLLEGE OF MUSIC,UNITED KINGDOM">ROYAL COLLEGE OF MUSIC,UNITED KINGDOM</option>
                <option value="ROYAL COLLEGE OF PHYSICIANS OF IRELAND">ROYAL COLLEGE OF PHYSICIANS OF IRELAND</option>
                <option value="ROYAL COLLEGE OF PHYSICIANS U.K">ROYAL COLLEGE OF PHYSICIANS U.K</option>
                <option value="ROYAL COLLEGE OF SURGEONS IN IRELAND">ROYAL COLLEGE OF SURGEONS IN IRELAND</option>
                <option value="ROYAL COLLEGE OF VETERINARY SURGEONS,UK">ROYAL COLLEGE OF VETERINARY SURGEONS,UK</option>
                <option value="ROYAL MELBOURNE INS.OF TEC.VICTORIA,AUST">ROYAL MELBOURNE INS.OF TEC.VICTORIA,AUST
                </option>
                <option value="ROYAL MILITARY COL., DUNTROON, AUSTRALIA">ROYAL MILITARY COL., DUNTROON, AUSTRALIA
                </option>
                <option value="ROYAL NAVAL ENGINEERING INSTITUTE,U.K.">ROYAL NAVAL ENGINEERING INSTITUTE,U.K.</option>
                <option value="ROYAL NORTHERN SCH.OF MUSIC MANCHESTER,U">ROYAL NORTHERN SCH.OF MUSIC MANCHESTER,U
                </option>
                <option value="ROYAL PERTH COLLEGE, AUSTRALIA">ROYAL PERTH COLLEGE, AUSTRALIA</option>
                <option value="ROYAL SCOTTISH ACADEMY OF MUSIC, U.K.">ROYAL SCOTTISH ACADEMY OF MUSIC, U.K.</option>
                <option value="RUHR-UNI. BOCHUM, WEST GERMANY">RUHR-UNI. BOCHUM, WEST GERMANY</option>
                <option value="RUSSELL SAGE COLLEGE, TROY,NEW YORK,USA">RUSSELL SAGE COLLEGE, TROY,NEW YORK,USA</option>
                <option value="RUSSIAN STATE MEDICAL UNIVERSITY">RUSSIAN STATE MEDICAL UNIVERSITY</option>
                <option value="RUST COL. HOLLY SPRING MISSISSIPPI,USA">RUST COL. HOLLY SPRING MISSISSIPPI,USA</option>
                <option value="RUTGERS UNI. CAMDEN NEW JERSEY,USA">RUTGERS UNI. CAMDEN NEW JERSEY,USA</option>
                <option value="RUTGERS UNI. NEW BRUNSWICK N.JERSEY,USA">RUTGERS UNI. NEW BRUNSWICK N.JERSEY,USA</option>
                <option value="RUTGERS UNI. NEWARK NEW JERSEY, USARUTGERS UNI. NEWARK NEW JERSEY, USA">RUTGERS UNI.
                  NEWARK NEW JERSEY, USA</option>
                <option value="S. CALIFORNIA INST. OF ARCHITECTURE,USA">S. CALIFORNIA INST. OF ARCHITECTURE,USA</option>
                <option value="S. CAROLINA STATE COL. ORANGEBURG,USA">S. CAROLINA STATE COL. ORANGEBURG,USA</option>
                <option value="S.DAKOTA SCH.OF MINES & TEC RAPID CITY">S.DAKOTA SCH.OF MINES & TEC RAPID CITY</option>
                <option value="S.E. MISSOURI ST. UNI. CAPE GIRADEAU,USA">S.E. MISSOURI ST. UNI. CAPE GIRADEAU,USA
                </option>
                <option value="S.FRANCISCO CONSERVATORY OF MUSIC,CALIF.">S.FRANCISCO CONSERVATORY OF MUSIC,CALIF.
                </option>
                <option value="S.W. MISSOURI STATE UNI. SRINGFIELD,USA">S.W. MISSOURI STATE UNI. SRINGFIELD,USA</option>
                <option value="SACRED HEART COLLEGE,BELMONT,N.CAROLINA">SACRED HEART COLLEGE,BELMONT,N.CAROLINA</option>
                <option value="SACRED HEART SEMINARY DETROIT,MICH., USA">SACRED HEART SEMINARY DETROIT,MICH., USA
                </option>
                <option value="SACRED HEART UNI. BRIDGEPORT CONNEC.,USA">SACRED HEART UNI. BRIDGEPORT CONNEC.,USA
                </option>
                <option value="SADDAM UNIVERSITY, BANGHDAD, IRAQ">SADDAM UNIVERSITY, BANGHDAD, IRAQ</option>
                <option value="SAGINAW VALLEY COLLEGE, MICHIGAN, USA">SAGINAW VALLEY COLLEGE, MICHIGAN, USA</option>
                <option value="SAINT LOUIS UNIVERSITY MISSOURI, USA">SAINT LOUIS UNIVERSITY MISSOURI, USA</option>
                <option value="SAINT MARY'S UNIVERSITY OF MINNESOTAJ">SAINT MARY'S UNIVERSITY OF MINNESOTAJ</option>
                <option value="SAINT MARY'S UNIVERSITY, CANADA">SAINT MARY'S UNIVERSITY, CANADA</option>
                <option value="SAITAMA UNIVERSITY, JEPUN">SAITAMA UNIVERSITY, JEPUN</option>
                <option value="SALEM COL. WINSTON, NORTH CAROLINA,USA">SALEM COL. WINSTON, NORTH CAROLINA,USA</option>
                <option value="SALEM STATE COLLEGE MASSACHUSETTS, USA">SALEM STATE COLLEGE MASSACHUSETTS, USA</option>
                <option value="SALFORD ROYAL C. OF ADV. TECHNOLOGY,U.K.">SALFORD ROYAL C. OF ADV. TECHNOLOGY,U.K.
                </option>
                <option value="SALISBURY STATE COLLEGE,MARYLAND, USA">SALISBURY STATE COLLEGE,MARYLAND, USA</option>
                <option value="SALVE REGINA THE NEW PORT COL. R.I.,USA">SALVE REGINA THE NEW PORT COL. R.I.,USA</option>
                <option value="SAM HOUSTON STATE U. HUNTSVILLE TEX.,USA">SAM HOUSTON STATE U. HUNTSVILLE TEX.,USA
                </option>
                <option value="SAMFORD UNI. BIRMINGHAM,ALABAMA, USA">SAMFORD UNI. BIRMINGHAM,ALABAMA, USA</option>
                <option value="SAN DIEGO STATE UNI. CALIFORNIA, USA">SAN DIEGO STATE UNI. CALIFORNIA, USA</option>
                <option value="SAN FRANCISCO ART INST. CALIFORNIA,USA">SAN FRANCISCO ART INST. CALIFORNIA,USA</option>
                <option value="SAN FRANCISCO STATE UNI. CALIFORNIA,USA">SAN FRANCISCO STATE UNI. CALIFORNIA,USA</option>
                <option value="SAN JOSE STATE UNI. CALIFORNIA,USA">SAN JOSE STATE UNI. CALIFORNIA,USA</option>
                <option value="SANGAMON STATE U.SPR INGFIELD ILLINOIS">SANGAMON STATE U.SPR INGFIELD ILLINOIS</option>
                <option value="SARAH LAWRENCE COL.,BRONXVILLE,N.Y.,USA">SARAH LAWRENCE COL.,BRONXVILLE,N.Y.,USA</option>
                <option value="SASEBO NATIONAL COLLEGE OF TECHNOLOGY, JEPUN">SASEBO NATIONAL COLLEGE OF TECHNOLOGY,
                  JEPUN</option>
                <option value="SAURASHTRA UNIVERSITY, RAJKOT INDIA">SAURASHTRA UNIVERSITY, RAJKOT INDIA</option>
                <option value="SAVANNAH STATE COL. SAVANNAH GEORGIA,USA">SAVANNAH STATE COL. SAVANNAH GEORGIA,USA
                </option>
                <option value="SAVEETHA DENTAL COLLEGE. DR. M.G.R TAMIL NADU UNIVERSITY">SAVEETHA DENTAL COLLEGE. DR.
                  M.G.R TAMIL NADU UNIVERSITY</option>
                <option value="SCARRITT COL., NASHCILLE, TENNESSEE,USA">SCARRITT COL., NASHCILLE, TENNESSEE,USA</option>
                <option value="SCH. ART INST. OF CHICAGO ILLINOIS,USA">SCH. ART INST. OF CHICAGO ILLINOIS,USA</option>
                <option value="SCH. OF OCC.THERAPY U.OF MELBOURNE,AUST.">SCH. OF OCC.THERAPY U.OF MELBOURNE,AUST.
                </option>
                <option value="SCH.OF OCCUPATIONAL THERAPY AUCKLAND,N.Z">SCH.OF OCCUPATIONAL THERAPY AUCKLAND,N.Z
                </option>
                <option value="SCH.OF PHY.MANCHESTER ROYAL INFORMARY,UK">SCH.OF PHY.MANCHESTER ROYAL INFORMARY,UK
                </option>
                <option value="SCHOOL OF MEDICINE, FUDAN UNI., SHANGHAI">SCHOOL OF MEDICINE, FUDAN UNI., SHANGHAI
                </option>
                <option value="SCRIPPS COLLEGE CLAREMONT CALIFORNIA,USA">SCRIPPS COLLEGE CLAREMONT CALIFORNIA,USA
                </option>
                <option value="SEATTLE PACIFIC UNIV.WASHINGTON, USA">SEATTLE PACIFIC UNIV.WASHINGTON, USA</option>
                <option value="SEATTLE UNIV.,WASHINGTON, USA">SEATTLE UNIV.,WASHINGTON, USA</option>
                <option value="SECHENOV I.M. MOSCOW MED. ACEDAMY, RUSIA">SECHENOV I.M. MOSCOW MED. ACEDAMY, RUSIA
                </option>
                <option value="SEK FARMASI UNI GADJAH MADA INDONESIA">SEK FARMASI UNI GADJAH MADA INDONESIA</option>
                <option value="SEM OF ST.VINCENT DE PAUL BOYTON BEACH">SEM OF ST.VINCENT DE PAUL BOYTON BEACH</option>
                <option value="SEMINARY OF ST.LIUS X. ERIANGER,KENT,USA">SEMINARY OF ST.LIUS X. ERIANGER,KENT,USA
                </option>
                <option value="SEOUL NATIONAL UNIVERSITY,KOREA">SEOUL NATIONAL UNIVERSITY,KOREA</option>
                <option value="SETON HALL UNI. SOUTH ORANGE N.J., USA">SETON HALL UNI. SOUTH ORANGE N.J., USA</option>
                <option value="SETON HILL COL. GREENSBURG, PENN., USA">SETON HILL COL. GREENSBURG, PENN., USA</option>
                <option value="SHANGHAI MEDICAL UNIVERSITY , CHINA">SHANGHAI MEDICAL UNIVERSITY , CHINA</option>
                <option value="SHAW UNI. RALEIGH, NORTH CAROLINA, USA">SHAW UNI. RALEIGH, NORTH CAROLINA, USA</option>
                <option value="SHEFFIELD HALLAM UNIVERSITY">SHEFFIELD HALLAM UNIVERSITY</option>
                <option value="SHELFIELD POLYTECHNIC, UNITED KINGDOM">SHELFIELD POLYTECHNIC, UNITED KINGDOM</option>
                <option value="SHEPHERD D C.SHEPHERDSTOWN,WEST VIRG,USA">SHEPHERD D C.SHEPHERDSTOWN,WEST VIRG,USA
                </option>
                <option value="SHIBAURA INST. OF TECHNOLOGI, JAPAN">SHIBAURA INST. OF TECHNOLOGI, JAPAN</option>
                <option value="SHIGA UNIVERSITY, JAPAN">SHIGA UNIVERSITY, JAPAN</option>
                <option value="SHIMER COL. MOUNT CARROLL ILLLINOIS,USA">SHIMER COL. MOUNT CARROLL ILLLINOIS,USA</option>
                <option value="SHINSHU UNIVERSITY, NAGANO, JAPAN">SHINSHU UNIVERSITY, NAGANO, JAPAN</option>
                <option value="SHIPPENBURG STATE COL. PENNSYLVANIA, USA">SHIPPENBURG STATE COL. PENNSYLVANIA, USA
                </option>
                <option value="SHIZUOKA UNIVERSITY, JEPUN">SHIZUOKA UNIVERSITY, JEPUN</option>
                <option value="SHORTER COLLEGE ROME GEORGIA,USA">SHORTER COLLEGE ROME GEORGIA,USA</option>
                <option value="SIENA COLLEGE LONDONVILLE,NEW YORK, USA">SIENA COLLEGE LONDONVILLE,NEW YORK, USA</option>
                <option value="SIENA HEIGHTS COLLEGE, MICHIGAN, USA">SIENA HEIGHTS COLLEGE, MICHIGAN, USA</option>
                <option value="SIMMONS COLLEGE BOSTON MASS., USA">SIMMONS COLLEGE BOSTON MASS., USA</option>
                <option value="SIMON FRASER UNIVERSITY, CANADA">SIMON FRASER UNIVERSITY, CANADA</option>
                <option value="SIMPS0N COLLEGE INDIANA IOWA USA">SIMPS0N COLLEGE INDIANA IOWA USA</option>
                <option value="SIMPSON COLLEGE SAN FRANCISCO CALIF.,USA">SIMPSON COLLEGE SAN FRANCISCO CALIF.,USA
                </option>
                <option value="SINGAPORE INSTITUTE OF MATERIAL MANAGEMENT (SIMM)">SINGAPORE INSTITUTE OF MATERIAL
                  MANAGEMENT (SIMM)</option>
                <option value="SINGH MEDICAL COLLEGE">SINGH MEDICAL COLLEGE</option>
                <option value="SIOUX FALLS COLLEGE, SOUTH DAKOTA, USA">SIOUX FALLS COLLEGE, SOUTH DAKOTA, USA</option>
                <option value="SIR GEORGE WILLIAM'S UNIVERSITY CANADA">SIR GEORGE WILLIAM'S UNIVERSITY CANADA</option>
                <option value="SKIDMORE COL.,SARATOGA SPRINGS,N.Y.,USA">SKIDMORE COL.,SARATOGA SPRINGS,N.Y.,USA</option>
                <option value="SLIPPERY ROCK ST. COL.,PENNSYLVANIA,USA">SLIPPERY ROCK ST. COL.,PENNSYLVANIA,USA</option>
                <option value="SMITH COLLEGE NORTHAMPTON MASS., USA">SMITH COLLEGE NORTHAMPTON MASS., USA</option>
                <option value="SONOMA ST. COLLEGE ROHNERT PARK CALIF.">SONOMA ST. COLLEGE ROHNERT PARK CALIF.</option>
                <option value="SONOMA STATE UNIVERSITY, CALIFORNIA">SONOMA STATE UNIVERSITY, CALIFORNIA</option>
                <option value="SOUTH AUST. INST. OF TEC. ADELAIDE,AUST.">SOUTH AUST. INST. OF TEC. ADELAIDE,AUST.
                </option>
                <option value="SOUTH BANK UNIVERSITY">SOUTH BANK UNIVERSITY</option>
                <option value="SOUTH DAKOTA STATE UNI. BROOKINGS, USA">SOUTH DAKOTA STATE UNI. BROOKINGS, USA</option>
                <option value="SOUTH GLAMORGAN INST,OF HIGHER EDUC.,UK.">SOUTH GLAMORGAN INST,OF HIGHER EDUC.,UK.
                </option>
                <option value="SOUTH WEST LONDON COLLEGE,UNITED KINGDOM">SOUTH WEST LONDON COLLEGE,UNITED KINGDOM
                </option>
                <option value="SOUTHAMPTON SOLENT UNIVERSITY, UNITED KINGDOM">SOUTHAMPTON SOLENT UNIVERSITY, UNITED
                  KINGDOM</option>
                <option value="SOUTHEASTERN MASS. UNI. N.DARMOUTH,USA">SOUTHEASTERN MASS. UNI. N.DARMOUTH,USA</option>
                <option value="SOUTHEASTERN LOUISIANA UNI. HAMMOND, USA">SOUTHEASTERN LOUISIANA UNI. HAMMOND, USA
                </option>
                <option value="SOUTHEASTERN OKLAHOMA ST. UNI.DURANT,USA">SOUTHEASTERN OKLAHOMA ST. UNI.DURANT,USA
                </option>
                <option value="SOUTHEASTERN ST. C.DURANT,OKLAHOMA,U.S.A">SOUTHEASTERN ST. C.DURANT,OKLAHOMA,U.S.A
                </option>
                <option value="SOUTHEASTERN UNIVERSITY, USA.">SOUTHEASTERN UNIVERSITY, USA.</option>
                <option value="SOUTHERN ARKANSAS U.MAGNOLIA,ARK. USA">SOUTHERN ARKANSAS U.MAGNOLIA,ARK. USA</option>
                <option value="SOUTHERN BENEDICTINE C.ST.BERNARD,ALA.US">SOUTHERN BENEDICTINE C.ST.BERNARD,ALA.US
                </option>
                <option value="SOUTHERN C.OF OPTOMETRY,MEMPHIS.TENN,USA">SOUTHERN C.OF OPTOMETRY,MEMPHIS.TENN,USA
                </option>
                <option value="SOUTHERN CALIFORNIA CALIFORNIA C OF OPT">SOUTHERN CALIFORNIA CALIFORNIA C OF OPT</option>
                <option value="SOUTHERN CALIFORNIA COLLEGE,COSTA MESA">SOUTHERN CALIFORNIA COLLEGE,COSTA MESA</option>
                <option value="SOUTHERN CONN. STATE COL. NEW HAVEN,USA">SOUTHERN CONN. STATE COL. NEW HAVEN,USA</option>
                <option value="SOUTHERN CROSS UNIVERSITY, AUSTRALIA">SOUTHERN CROSS UNIVERSITY, AUSTRALIA</option>
                <option value="SOUTHERN ILLINOIS UNI. CARBONDALE,USA">SOUTHERN ILLINOIS UNI. CARBONDALE,USA</option>
                <option value="SOUTHERN ILLINOIS UNI. EDWARDSVILLE,USA">SOUTHERN ILLINOIS UNI. EDWARDSVILLE,USA</option>
                <option value="SOUTHERN METHODIST UNI.DALLAS, TEXAS,USA">SOUTHERN METHODIST UNI.DALLAS, TEXAS,USA
                </option>
                <option value="SOUTHERN MISSIONARY C.COLLEGEDALE,TEN US">SOUTHERN MISSIONARY C.COLLEGEDALE,TEN US
                </option>
                <option value="SOUTHERN NEW HAMPSHIRE UNIVERSITY">SOUTHERN NEW HAMPSHIRE UNIVERSITY</option>
                <option value="SOUTHERN OREGON STATE COL. ASHLAND,USA">SOUTHERN OREGON STATE COL. ASHLAND,USA</option>
                <option value="SOUTHERN TECHNICAL INST MARIETTA GEORGIA">SOUTHERN TECHNICAL INST MARIETTA GEORGIA
                </option>
                <option value="SOUTHERN U, & AGRIC.&MECHC.B.ROUGE LOUIS">SOUTHERN U, & AGRIC.&MECHC.B.ROUGE LOUIS
                </option>
                <option value="SOUTHERN UNI. BATON ROUGE, LOUISIANA,USA">SOUTHERN UNI. BATON ROUGE, LOUISIANA,USA
                </option>
                <option value="SOUTHERN UNI.IN N. ORLEANS,LOUISIANA,USA">SOUTHERN UNI.IN N. ORLEANS,LOUISIANA,USA
                </option>
                <option value="SOUTHERN UTAH STATE COL. CEDAR CITY, USA">SOUTHERN UTAH STATE COL. CEDAR CITY, USA
                </option>
                <option value="SOUTHWEST STATE UNI. MARSHALL MINN.,USA">SOUTHWEST STATE UNI. MARSHALL MINN.,USA</option>
                <option value="SOUTHWEST TEXAS STATE UNI. TEXAS, USA">SOUTHWEST TEXAS STATE UNI. TEXAS, USA</option>
                <option value="SOUTHWEST UNI. GEORGETOWN, TEXAS, USA">SOUTHWEST UNI. GEORGETOWN, TEXAS, USA</option>
                <option value="SOUTHWEST UNION COL., KEENE, TEXAS, USA">SOUTHWEST UNION COL., KEENE, TEXAS, USA</option>
                <option value="SOUTHWESTERN AT MEMPHIS, TENNESSEE, USA">SOUTHWESTERN AT MEMPHIS, TENNESSEE, USA</option>
                <option value="SOUTHWESTERN COL.,WINFIELD,KAKSAN, USA">SOUTHWESTERN COL.,WINFIELD,KAKSAN, USA</option>
                <option value="SOUTHWESTERN ST. C.WEATHFORD,OKLAHOMA,US">SOUTHWESTERN ST. C.WEATHFORD,OKLAHOMA,US
                </option>
                <option value="SOUTHWESTERN UNIVERSITY PHINMA, FILIPINA">SOUTHWESTERN UNIVERSITY PHINMA, FILIPINA
                </option>
                <option value="SPALDING COL. LOUISVILLE, KENTUCKY, USA">SPALDING COL. LOUISVILLE, KENTUCKY, USA</option>
                <option value="SPELMAN COLLEGE ATLANTA GEORGIA, USA">SPELMAN COLLEGE ATLANTA GEORGIA, USA</option>
                <option value="SPERTUS COLLEGE DEERFIELD ILLINOIS,USA">SPERTUS COLLEGE DEERFIELD ILLINOIS,USA</option>
                <option value="SPICER MEMORIAL COLLEGE, PUNE, INDIA">SPICER MEMORIAL COLLEGE, PUNE, INDIA</option>
                <option value="SPRING ARBOR COLLEGE, MICHIGAN, USA">SPRING ARBOR COLLEGE, MICHIGAN, USA</option>
                <option value="SPRING GARDEN COLLEGE PHILADELPHIA, USA">SPRING GARDEN COLLEGE PHILADELPHIA, USA</option>
                <option value="SPRING HILL COLLEGE, MOBILE,ALABAMA,USA">SPRING HILL COLLEGE, MOBILE,ALABAMA,USA</option>
                <option value="SPRINGFIELD COLLEGE MASSACHUSETTS, USA">SPRINGFIELD COLLEGE MASSACHUSETTS, USA</option>
                <option value="SREE BALAJI DENTAL COLLEGE & HOSPITAL, INDIA">SREE BALAJI DENTAL COLLEGE & HOSPITAL,
                  INDIA</option>
                <option value="SREE SIDHARTA DENTAL COLLEGE & HOSPITAL, TUMKUR">SREE SIDHARTA DENTAL COLLEGE & HOSPITAL,
                  TUMKUR</option>
                <option value="SRI DEVARAJ URS MEDICAL COLLEGE, INDIA">SRI DEVARAJ URS MEDICAL COLLEGE, INDIA</option>
                <option value="SRI RAMACHANDRAN MEDICAL COLLEGE, INDIA">SRI RAMACHANDRAN MEDICAL COLLEGE, INDIA</option>
                <option value="SRI VENKATESWARA UNIVERSITY, INDIA">SRI VENKATESWARA UNIVERSITY, INDIA</option>
                <option value="ST HYACINTH C. & SEMINARY GRANBY MASS US">ST HYACINTH C. & SEMINARY GRANBY MASS US
                </option>
                <option value="ST MARY'S UNIVERSITY, LONDON, UNITED KINGDOM">ST MARY'S UNIVERSITY, LONDON, UNITED
                  KINGDOM</option>
                <option value="ST. ALBERT'S COL. OAKLAND CALIFORNIA,USA">ST. ALBERT'S COL. OAKLAND CALIFORNIA,USA
                </option>
                <option value="ST. CLEMENTS UNIVERSITY, UNITED KINGDOM">ST. CLEMENTS UNIVERSITY, UNITED KINGDOM</option>
                <option value="ST. CLOUD ST. UNI. MINNESOTA, USA">ST. CLOUD ST. UNI. MINNESOTA, USA</option>
                <option value="ST. DAVID'S UNI. COLLEGE. LAMPETER,U.K.">ST. DAVID'S UNI. COLLEGE. LAMPETER,U.K.</option>
                <option value="ST. FIDELIS COL. HERMAN,PENNSYLVANIA,USA">ST. FIDELIS COL. HERMAN,PENNSYLVANIA,USA
                </option>
                <option value="ST. FRANCIS CLORETTO, PENNSYLVANIA,USA .">ST. FRANCIS CLORETTO, PENNSYLVANIA,USA .
                </option>
                <option value="ST. FRANCIS COL. FORT WAYNE INDIANA, USA">ST. FRANCIS COL. FORT WAYNE INDIANA, USAS
                </option>
                <option value="ST. FRANCIS DE SALES C.MILWAUKEE WIS.USA">ST. FRANCIS DE SALES C.MILWAUKEE WIS.USA
                </option>
                <option value="ST. FRANCIS XAVIER UNIVERSITY, CANADA">ST. FRANCIS XAVIER UNIVERSITY, CANADA</option>
                <option value="ST. HELEN COLLEGE HUYTON, LIVERPOOL, U.K">ST. HELEN COLLEGE HUYTON, LIVERPOOL, U.K
                </option>
                <option value="ST. JOHN COLLEGE,ANNAPOLIS, MARYLAND,USA">ST. JOHN COLLEGE,ANNAPOLIS, MARYLAND,USA
                </option>
                <option value="ST. JOHN'S SEMINARY BRIGHTON MASS., USA">ST. JOHN'S SEMINARY BRIGHTON MASS., USA</option>
                <option value="ST. JOSEPH'S COL. PHILADELPHIA,PENN.,USA">ST. JOSEPH'S COL. PHILADELPHIA,PENN.,USA
                </option>
                <option value="ST. JOSEPH,S C RENSSELAER INDIANA, USA">ST. JOSEPH,S C RENSSELAER INDIANA, USA</option>
                <option value="ST. LAWRENCE UNIVERSITY,CANTON,N.Y.,USA">ST. LAWRENCE UNIVERSITY,CANTON,N.Y.,USA</option>
                <option value="ST. LOUIS UNIVERSITY">ST. LOUIS UNIVERSITY</option>
                <option value="ST. MARTINS COLLEGE, UNITED KINGDOM">ST. MARTINS COLLEGE, UNITED KINGDOM</option>
                <option value="ST. MARY OF WOODS COLLEGE INDIANA, USA">ST. MARY OF WOODS COLLEGE INDIANA, USA</option>
                <option value="ST. MARY'S COLLEGE OF CALIF,MORAGA,USA">ST. MARY'S COLLEGE OF CALIF,MORAGA,USA</option>
                <option value="ST. MARY'S COLLEGE WINONA MINNESOTA, USA">ST. MARY'S COLLEGE WINONA MINNESOTA, USA
                </option>
                <option value="ST. MARY'S DOMICANC.,NORLEANS, LOUIS,USA">ST. MARY'S DOMICANC.,NORLEANS, LOUIS,USA
                </option>
                <option value="ST. MARY'S UNI. BALTIMORE, MARYLAND, USA">ST. MARY'S UNI. BALTIMORE, MARYLAND, USA
                </option>
                <option value="ST. MARY,S COL. NOTRE DAME INDIANA, USA">ST. MARY,S COL. NOTRE DAME INDIANA, USA</option>
                <option value="ST. MEINRAD COLLEGE INDIANA, USA">ST. MEINRAD COLLEGE INDIANA, USA</option>
                <option value="ST. PAUL SEMINARY MINNESOTA, USA">ST. PAUL SEMINARY MINNESOTA, USA</option>
                <option value="ST. PETERSBURG MARINE TECHNICAL UNIVERSITY (SMTU)">ST. PETERSBURG MARINE TECHNICAL
                  UNIVERSITY (SMTU)</option>
                <option value="ST. U.OF N.Y.EMPIRE ST.C.SARATOGA SPRING">ST. U.OF N.Y.EMPIRE ST.C.SARATOGA SPRING
                </option>
                <option value="ST. UNI.OF N.Y.,COLLEGE AT FREDONIA,USA">ST. UNI.OF N.Y.,COLLEGE AT FREDONIA,USA</option>
                <option value="ST. XAVIAR COLLEGE ILLINOIS,USA">ST. XAVIAR COLLEGE ILLINOIS,USA</option>
                <option value="ST.ANDREW'S PRESBYSTERIAN C.LAURINBURG">ST.ANDREW'S PRESBYSTERIAN C.LAURINBURG</option>
                <option value="ST.ANSELM'S COLLEGE MANCHESTER N.H.,USA">ST.ANSELM'S COLLEGE MANCHESTER N.H.,USA</option>
                <option value="ST.AUGUSTINE'S COLLEGE,RALEIGH, N.C.,USA">ST.AUGUSTINE'S COLLEGE,RALEIGH, N.C.,USA
                </option>
                <option value="ST.BONAVENTURA UNIVERSITY, NEW YORK,USA">ST.BONAVENTURA UNIVERSITY, NEW YORK,USA</option>
                <option value="ST.FRANCIS COLLEGE, BIDDEFORD, MAINE,USA">ST.FRANCIS COLLEGE, BIDDEFORD, MAINE,USA
                </option>
                <option value="ST.FRANCIS COLLEGE,BROOKLYN,NEW YORK,USA">ST.FRANCIS COLLEGE,BROOKLYN,NEW YORK,USA
                </option>
                <option value="ST.JOHN FISHER C.,ROCHESTER,NEW YORK,USA">ST.JOHN FISHER C.,ROCHESTER,NEW YORK,USA
                </option>
                <option value="ST.JOHN'S COLLEGE CAMARILLO CALIF,USA">ST.JOHN'S COLLEGE CAMARILLO CALIF,USA</option>
                <option value="ST.JOHN'S U.,COLLEGE VILLE MINNESOTA USA">ST.JOHN'S U.,COLLEGE VILLE MINNESOTA USA
                </option>
                <option value="ST.JOHN'S UNIVERSITY,JAMAICA,N.YORK,USA">ST.JOHN'S UNIVERSITY,JAMAICA,N.YORK,USA</option>
                <option value="ST.JOSEPH C. WEST HARTFORD CONN.,USA">ST.JOSEPH C. WEST HARTFORD CONN.,USA</option>
                <option value="ST.JOSEPH SEM.C.ST.BENEDICT,LOUISIANA,US">ST.JOSEPH SEM.C.ST.BENEDICT,LOUISIANA,US
                </option>
                <option value="ST.JOSEPH'S C. NORTH WINDHAM,MAINE,USA">ST.JOSEPH'S C. NORTH WINDHAM,MAINE,USA</option>
                <option value="ST.JOSEPH'S COLLEGE,BROOKLYN, N.YORK,USA">ST.JOSEPH'S COLLEGE,BROOKLYN, N.YORK,USAS
                </option>
                <option value="ST.JOSEPH'S SEMINARY YONKERS,N.YORK,USA">ST.JOSEPH'S SEMINARY YONKERS,N.YORK,USA</option>
                <option value="ST.MARTIN'S COLL.OLYMPIA,WASHINGTON, USA">ST.MARTIN'S COLL.OLYMPIA,WASHINGTON, USA
                </option>
                <option value="ST.MARTIN'S SCHOOL OF ART,UNITED KINGDOM">ST.MARTIN'S SCHOOL OF ART,UNITED KINGDOM
                </option>
                <option value="ST.MARY OF THE PLAINS C.,D.CITY,KANSAS">ST.MARY OF THE PLAINS C.,D.CITY,KANSAS</option>
                <option value="ST.MARY'S C.OF CATERING&DOM.SC.DUBLIN,UK">ST.MARY'S C.OF CATERING&DOM.SC.DUBLIN,UK
                </option>
                <option value="ST.MARY'SC.OF MARYLAND,ST.MARY'S CITY,US">ST.MARY'SC.OF MARYLAND,ST.MARY'S CITY,US
                </option>
                <option value="ST.NORBERT COL. WEST DE PERE,WISCON.,USA">ST.NORBERT COL. WEST DE PERE,WISCON.,USA
                </option>
                <option value="ST.OF N.Y. C.OF ENVIR.SC.& FOR.SYRAC,USA">ST.OF N.Y. C.OF ENVIR.SC.& FOR.SYRAC,USA
                </option>
                <option value="ST.OLAF COLLEGE NORTHFIELD MINNESOTA USA">ST.OLAF COLLEGE NORTHFIELD MINNESOTA USA
                </option>
                <option value="ST.PATRICKS'S C. MOUNTAIN VIEW,CALIF.USA">ST.PATRICKS'S C. MOUNTAIN VIEW,CALIF.USA
                </option>
                <option value="ST.PAUL'S COLLEGE LAWRENCEVILLE VIR.,USA">ST.PAUL'S COLLEGE LAWRENCEVILLE VIR.,USA
                </option>
                <option value="ST.PETER'S C.JERSEY CITY N J USA">ST.PETER'S C.JERSEY CITY N J USA</option>
                <option value="ST.THOMAS AQUINAS C.SPARKHILL,N.YORK,USA">ST.THOMAS AQUINAS C.SPARKHILL,N.YORK,USA
                </option>
                <option value="ST.THOMAS SEMINARY C.DENVER,COLORADO USA">ST.THOMAS SEMINARY C.DENVER,COLORADO USA
                </option>
                <option value="ST.U.OF N.Y.DOWNSTATE MED.CNT.BROOKLYN">ST.U.OF N.Y.DOWNSTATE MED.CNT.BROOKLYN</option>
                <option value="ST.U.OF N.Y.UPSTATE MED.CNT.SYRACUSE,USA">ST.U.OF N.Y.UPSTATE MED.CNT.SYRACUSE,USA
                </option>
                <option value="ST.UNI.OF N.Y.,COL.OF ART&SC.GENESEO,USA">ST.UNI.OF N.Y.,COL.OF ART&SC.GENESEO,USA
                </option>
                <option value="ST.VINCENT COL. LATROBE,PENNSYLVANIA,USA">ST.VINCENT COL. LATROBE,PENNSYLVANIA,USA
                </option>
                <option value="STAFFORDSHIRE UNIVERSITY">STAFFORDSHIRE UNIVERSITY</option>
                <option value="STANFORD UNIVERSITY, CALIFORNIA,USA">STANFORD UNIVERSITY, CALIFORNIA,USA</option>
                <option value="STATE ALPHANSUS CUFFIELD, CONN., USA">STATE ALPHANSUS CUFFIELD, CONN., USA</option>
                <option value="STATE AMBROSE COLLEGE DAVENDORT IOWA,USA">STATE AMBROSE COLLEGE DAVENDORT IOWA,USA
                </option>
                <option value="STATE COLLEGE OF ARKANSAS,CONWAY, USA">STATE COLLEGE OF ARKANSAS,CONWAY, USA</option>
                <option value="STATE EDWARD'S UNI. AUSTIN, TEXAS, USA">STATE EDWARD'S UNI. AUSTIN, TEXAS, USA</option>
                <option value="STATE JOHN COLLEGE OF CLEVELAND, USA">STATE JOHN COLLEGE OF CLEVELAND, USA</option>
                <option value="STATE LED COLLEGE FLORIDA, USA">STATE LED COLLEGE FLORIDA, USA</option>
                <option value="STATE MARY COL.,LEAVENWORTH, KANSAS, USA">STATE MARY COL.,LEAVENWORTH, KANSAS, USA
                </option>
                <option value="STATE MARY UNI. SAN ANTONIO, TEXAS, USA">STATE MARY UNI. SAN ANTONIO, TEXAS, USA</option>
                <option value="STATE MEDICAL FACULTY OF WEST BENGAL,IND">STATE MEDICAL FACULTY OF WEST BENGAL,IND
                </option>
                <option value="STATE MICHAEL'S COL.WINOOSKI,VERMONT,USA">STATE MICHAEL'S COL.WINOOSKI,VERMONT,USA
                </option>
                <option value="STATE U.OF N.YORK C.AT OLD WESTBURY,USA">STATE U.OF N.YORK C.AT OLD WESTBURY,USA</option>
                <option value="STATE U.OF N.YORK C.AT PURCHASE, USA">STATE U.OF N.YORK C.AT PURCHASE, USA</option>
                <option value="STATE U.OF N.YORK,COLLEGE AT ONEONTA,USA">STATE U.OF N.YORK,COLLEGE AT ONEONTA,USA
                </option>
                <option value="STATE U.OF N.YORK,COLLEGE AT POSTDAM,USA">STATE U.OF N.YORK,COLLEGE AT POSTDAM,USA
                </option>
                <option value="STATE U.OF NEW YORK, STONY BROOK, USA">STATE U.OF NEW YORK, STONY BROOK, USA</option>
                <option value="STATE U.OF NEW YORK,MARITIME COLLEGE,USA">STATE U.OF NEW YORK,MARITIME COLLEGE,USA
                </option>
                <option value="STATE UNI. OF N.Y. COL. AT CORTLAND,USA">STATE UNI. OF N.Y. COL. AT CORTLAND,USA</option>
                <option value="STATE UNI. OF N.YORK,C.AT BINGHAMTON,USA">STATE UNI. OF N.YORK,C.AT BINGHAMTON,USA
                </option>
                <option value="STATE UNI. OF NEW YORK, AT BUFFALO,USA">STATE UNI. OF NEW YORK, AT BUFFALO,USA</option>
                <option value="STATE UNI.OF N.Y.,COLLEGE AT N.PALTZ,USA">STATE UNI.OF N.Y.,COLLEGE AT N.PALTZ,USA
                </option>
                <option value="STATE UNI.OF N.YORK,C.AT ALBANY,N.Y.,USA">STATE UNI.OF N.YORK,C.AT ALBANY,N.Y.,USA
                </option>
                <option value="STATE UNIVERSITY OF NEW YORK, USA">STATE UNIVERSITY OF NEW YORK, USA</option>
                <option value="STEPHEN F. AUSTIN STATE UNI. TEXAS, USA">STEPHEN F. AUSTIN STATE UNI. TEXAS, USA</option>
                <option value="STERLING COLLEGE, KANSAS, USA">STERLING COLLEGE, KANSAS, USA</option>
                <option value="STETSOJN UNI. DELANF FLORIDA,USA">STETSOJN UNI. DELANF FLORIDA,USA</option>
                <option value="STEVENS INST OF TECHNLOGI HOBOKEN USA">STEVENS INST OF TECHNLOGI HOBOKEN USA</option>
                <option value="STILLMAN COLLEGE, TUSCALOOSA,ALABAMA,USA">STILLMAN COLLEGE, TUSCALOOSA,ALABAMA,USA
                </option>
                <option value="STOCKPORT COLLEGE OF TEC.,UNITED KINGDOM">STOCKPORT COLLEGE OF TEC.,UNITED KINGDOM
                </option>
                <option value="STOCKTON STATE COLLEGE POMONA N JERSEY">STOCKTON STATE COLLEGE POMONA N JERSEY</option>
                <option value="STONEHILL COL. NORTH EASTON, MASS., USA">STONEHILL COL. NORTH EASTON, MASS., USA</option>
                <option value="STOUBRIDGE COLLEGE OF ART,UNITED KINGDOM">STOUBRIDGE COLLEGE OF ART,UNITED KINGDOM
                </option>
                <option value="STRATFORD UNIVERSITY">STRATFORD UNIVERSITY</option>
                <option value="SUFFOLK UNI. BOSTON, MASS., USA">SUFFOLK UNI. BOSTON, MASS., USA</option>
                <option value="SUL ROSS STATE UNI. ALPINE, TEXAS, USA">SUL ROSS STATE UNI. ALPINE, TEXAS, USA</option>
                <option value="SULPICIAN SEM.OF THE N.W.KENMORE,WASH,US">SULPICIAN SEM.OF THE N.W.KENMORE,WASH,US
                </option>
                <option value="SUN YAT-SEN UNI. OF MEDICAL, GUANGZHOU">SUN YAT-SEN UNI. OF MEDICAL, GUANGZHOU</option>
                <option value="SUNDERLAND POLYTECHNIC,UNITED KINGDOM">SUNDERLAND POLYTECHNIC,UNITED KINGDOM</option>
                <option value="SUSQUEHANA UNI. SELLINGSGROVE,PENN.,USA">SUSQUEHANA UNI. SELLINGSGROVE,PENN.,USA</option>
                <option value="SUZUKA NATIONAL COLLAGE OF TEC., JAPAN">SUZUKA NATIONAL COLLAGE OF TEC., JAPAN</option>
                <option value="SWANSEA INSTITUSI OF HIGHER EDUCATION,UK">SWANSEA INSTITUSI OF HIGHER EDUCATION,UK
                </option>
                <option value="SWARTHMORE COLLEGE PENNSYLVANIA,USA">SWARTHMORE COLLEGE PENNSYLVANIA,USA</option>
                <option value="SWEET BRIAR COLLEGE, VIRGINIA, USA">SWEET BRIAR COLLEGE, VIRGINIA, USA</option>
                <option value="SWINBURNE COLLEGE OF TECHNOLOGY,AUST.">SWINBURNE COLLEGE OF TECHNOLOGY,AUST.</option>
                <option value="SWINDON COLLEGE, UNITED KINGDOM">SWINDON COLLEGE, UNITED KINGDOM</option>
                <option value="SYLHET M.A.G OSMANI MEDICAL COLLEGE">SYLHET M.A.G OSMANI MEDICAL COLLEGE</option>
                <option value="SYRACUSE UNIVERSITY,SYRACUSE,N.YORK,USA">SYRACUSE UNIVERSITY,SYRACUSE,N.YORK,USA</option>
                <option value="TABOR COLLEGE,HILLSBORO, KANSAS, USA">TABOR COLLEGE,HILLSBORO, KANSAS, USA</option>
                <option value="TAIPEI MEDICAL COLLEGE, TAIWAN">TAIPEI MEDICAL COLLEGE, TAIWAN</option>
                <option value="TAKAMATSU TECHNICAL COLLEGE">TAKAMATSU TECHNICAL COLLEGE</option>
                <option value="TAKUMA NATIONAL COLLEGE OF TECHNOLOGY">TAKUMA NATIONAL COLLEGE OF TECHNOLOGY</option>
                <option value="TAKUSHOKU UNIVERSITY, TOKYO, JAPAN">TAKUSHOKU UNIVERSITY, TOKYO, JAPAN</option>
                <option value="TAKUSHOKU UNIVERSITY, TOKYO, JAPAN">TAKUSHOKU UNIVERSITY, TOKYO, JAPAN</option>
                <option value="TALLADEGA COLLEGE,ALABAMA, USA">TALLADEGA COLLEGE,ALABAMA, USA</option>
                <option value="TAMIL NADU AGRI.U.(MADRAS VET.C.),INDIA">TAMIL NADU AGRI.U.(MADRAS VET.C.),INDIA</option>
                <option value="TAMPEREEN TEKNILLINEN KORKEAKOULU,FINLAN">TAMPEREEN TEKNILLINEN KORKEAKOULU,FINLAN
                </option>
                <option value="TARLETON STATE U.STEPHENVILLE,TEXAS,USA">TARLETON STATE U.STEPHENVILLE,TEXAS,USA</option>
                <option value="TASMANIAN C.OF ADV.EDUC.HOBART,AUSTRALIA">TASMANIAN C.OF ADV.EDUC.HOBART,AUSTRALIA
                </option>
                <option value="TAYLOR UNIVERSITY UPLAND INDIANA, USA">TAYLOR UNIVERSITY UPLAND INDIANA, USA</option>
                <option value="TEC.U.CAROLO-WILHELMINAZU BRAUNSCHWEING.">TEC.U.CAROLO-WILHELMINAZU BRAUNSCHWEING.
                </option>
                <option value="TECHISCHE HOCHSCHULE GRAZ, AUSTRIA">TECHISCHE HOCHSCHULE GRAZ, AUSTRIA</option>
                <option value="TECHISCHE UNIVERSITAT CLAUSTHAL W.GERMAN">TECHISCHE UNIVERSITAT CLAUSTHAL W.GERMAN
                </option>
                <option value="TECHNICAL COLLEGE NOVA SCOTIA, CANADA">TECHNICAL COLLEGE NOVA SCOTIA, CANADA</option>
                <option value="TECHNICAL UNIV OF NOVA SCOTIA, CANADA">TECHNICAL UNIV OF NOVA SCOTIA, CANADA</option>
                <option value="TECHNICAL UNIVERSITY OF NORWAY">TECHNICAL UNIVERSITY OF NORWAY</option>
                <option value="TECHNISCHE HOCHSCHULE MUNCHEN, W GERMANY">TECHNISCHE HOCHSCHULE MUNCHEN, W GERMANY
                </option>
                <option value="TECHNISCHE HOCHSHCULE WIEN, AUSTRIA">TECHNISCHE HOCHSHCULE WIEN, AUSTRIA</option>
                <option value="TECHNISCHE HOGESCHOOL DELFT CE,NETHERLAN">TECHNISCHE HOGESCHOOL DELFT CE,NETHERLAN
                </option>
                <option value="TECHNISCHE HOGESCHOOL EINDHOVEN NETHERLA">TECHNISCHE HOGESCHOOL EINDHOVEN NETHERLA
                </option>
                <option value="TECHNISCHE HOGESCHOOL TWENTE,NETHERLAND">TECHNISCHE HOGESCHOOL TWENTE,NETHERLAND</option>
                <option value="TECHNISCHE HOSHSCHULE DARMASTADT, W.G.">TECHNISCHE HOSHSCHULE DARMASTADT, W.G.</option>
                <option value="TECHNISCHE UNIVERSITAT BERLIN,W.GERMANY">TECHNISCHE UNIVERSITAT BERLIN,W.GERMANY</option>
                <option value="TECHNISCHE UNIVERSITAT HANNOVER,W.GERMAN">TECHNISCHE UNIVERSITAT HANNOVER,W.GERMAN
                </option>
                <option value="TECHNOLOGICAL UNI. OF BELFT, HOLLAND">TECHNOLOGICAL UNI. OF BELFT, HOLLAND</option>
                <option value="TEESIDE POLYTECHNIC, UNITED KINGDOM">TEESIDE POLYTECHNIC, UNITED KINGDOM</option>
                <option value="TEIKYO University, Japan">TEIKYO UNIVERSITY, JAPAN</option>
                <option value="TEKNISKA HOGSKOLAN LUND, SWEDEN">TEKNISKA HOGSKOLAN LUND, SWEDEN</option>
                <option value="TEMPLE UNIVERSITY PHILADELPHIA, USA">TEMPLE UNIVERSITY PHILADELPHIA, USA</option>
                <option value="TENNESSEE STATE UNIV. NASHVILLE, USA">TENNESSEE STATE UNIV. NASHVILLE, USA</option>
                <option value="TENNESSEE TECHNOLOGY U.OOKVILLE, USA.">TENNESSEE TECHNOLOGY U.OOKVILLE, USA.</option>
                <option value="TENNESSEE WESLEYAN C.NASHVILLE, TENN.USA">TENNESSEE WESLEYAN C.NASHVILLE, TENN.USA
                </option>
                <option value="TEXAS AGRI. & MECH UNI. COL. STATION,USA">TEXAS AGRI. & MECH UNI. COL. STATION,USA
                </option>
                <option value="TEXAS ARTS & IND. UNI. CORPAS CHRIS.,USA">TEXAS ARTS & IND. UNI. CORPAS CHRIS.,USA
                </option>
                <option value="TEXAS ARTS & IND. UNI. KINSVILLE, USA">TEXAS ARTS & IND. UNI. KINSVILLE, USA</option>
                <option value="TEXAS CHRISTIAN UNIV. FORTH WORTH, USA">TEXAS CHRISTIAN UNIV. FORTH WORTH, USA</option>
                <option value="TEXAS COLLEGE, TYLER, USA">TEXAS COLLEGE, TYLER, USA</option>
                <option value="TEXAS EASTERN UNIVERSITY TYLER,TEXAS,USA">TEXAS EASTERN UNIVERSITY TYLER,TEXAS,USA
                </option>
                <option value="TEXAS LUTHERAN COLLEGE, SEGUIN, USA">TEXAS LUTHERAN COLLEGE, SEGUIN, USA</option>
                <option value="TEXAS SOUTHERN UNIVERSITY, HOUSTON, USA">TEXAS SOUTHERN UNIVERSITY, HOUSTON, USA</option>
                <option value="TEXAS TECH UNIVERSITY">TEXAS TECH UNIVERSITY</option>
                <option value="TEXAS TECH. UNIVERSITY LUBBOOK, USA">TEXAS TECH. UNIVERSITY LUBBOOK, USA</option>
                <option value="TEXAS WESLEYAN COLLEGE, FORTH WORTH, USA">TEXAS WESLEYAN COLLEGE, FORTH WORTH, USA
                </option>
                <option value="TEXAS WOMANS UNIVERSITY, DENTON, USA">TEXAS WOMANS UNIVERSITY, DENTON, USA</option>
                <option value="THAMES POLYTECHNIC, UNITED KINGDOM">THAMES POLYTECHNIC, UNITED KINGDOM</option>
                <option value="THAMES VALLEY UNIVERSITY, UNITED KINGDOM">THAMES VALLEY UNIVERSITY, UNITED KINGDOM
                </option>
                <option value="THAMES YALLEG UNIVERSITY, U.K">THAMES YALLEG UNIVERSITY, U.K</option>
                <option value="THE CITADEL C. CHARLESTON,S.CAROLINA,USA">THE CITADEL C. CHARLESTON,S.CAROLINA,USA
                </option>
                <option value="THE EDINBURGH COLL.OF ART HERIOT-WATT UK">THE EDINBURGH COLL.OF ART HERIOT-WATT UK
                </option>
                <option value="THE ENGINEERING COLLAGE IN COPENHAGEN">THE ENGINEERING COLLAGE IN COPENHAGEN</option>
                <option value="THE JULLIARD SCHOOL,NEW YOR,USA">THE JULLIARD SCHOOL,NEW YOR,USA</option>
                <option value="THE LINDENWOOD C.ST.CHERLES MISSOURI,USA">THE LINDENWOOD C.ST.CHERLES MISSOURI,USA
                </option>
                <option value="THE NATIONAL UNIVERSITY OF SINGAPORE">THE NATIONAL UNIVERSITY OF SINGAPORE</option>
                <option value="THE NORTH E. WALES INSTITUTE, U.K.">THE NORTH E. WALES INSTITUTE, U.K.</option>
                <option value="THE NOTTINGHAM TRENT UNIVERSITI, UK">THE NOTTINGHAM TRENT UNIVERSITI, UK</option>
                <option value="THE POLY.UNI.OF SHOKUGYOU NOURYOKO JAPAN">THE POLY.UNI.OF SHOKUGYOU NOURYOKO JAPAN
                </option>
                <option value="THE POLYTECHNIC HUDDERFIELD, U.K.">THE POLYTECHNIC HUDDERFIELD, U.K.</option>
                <option value="THE POLYTECHNIC OF NORTH LONDON, U.K.">THE POLYTECHNIC OF NORTH LONDON, U.K.</option>
                <option value="THE POLYTECHNIC OF WOLVERHAMPTON,U.K.">THE POLYTECHNIC OF WOLVERHAMPTON,U.K.</option>
                <option value="THE QUEEN'S UNIVERSITY OF BELFAST">THE QUEEN'S UNIVERSITY OF BELFAST</option>
                <option value="THE ROYAL UNIVERSITY OF MALTA">THE ROYAL UNIVERSITY OF MALTA</option>
                <option value="THE SOLIHULL COLLEGE ENGLAND, U. KINGDOM">THE SOLIHULL COLLEGE ENGLAND, U. KINGDOM
                </option>
                <option value="THE TAMIL NADU DR. M.G.R MEDICAL UNIV.">THE TAMIL NADU DR. M.G.R MEDICAL UNIV.</option>
                <option value="THE TECHNISCHE HOCHSCHULE NURNBERG GEORG SIMON OHM, GERMANY">THE TECHNISCHE HOCHSCHULE
                  NURNBERG GEORG SIMON OHM, GERMANY</option>
                <option value="THE UNIVERSITY OF AUCKLAND">THE UNIVERSITY OF AUCKLAND</option>
                <option value="THE UNIVERSITY OF IOWA, IOWA, USA">THE UNIVERSITY OF IOWA, IOWA, USA</option>
                <option value="THE UNIVERSITY OF JORDAN, AMMAN, JORDAN">THE UNIVERSITY OF JORDAN, AMMAN, JORDAN</option>
                <option value="THE UNIVERSITY OF LANCASTER, UK">THE UNIVERSITY OF LANCASTER, UK</option>
                <option value="THE UNIVERSITY OF MEMPHIS, TENNESSE, USA">THE UNIVERSITY OF MEMPHIS, TENNESSE, USA
                </option>
                <option value="THE UNIVERSITY OF NEWCASTLE">THE UNIVERSITY OF NEWCASTLE</option>
                <option value="THE UNIVERSITY OF TEXAS OF THE PERM. BAS">THE UNIVERSITY OF TEXAS OF THE PERM. BAS
                </option>
                <option value="THE UNVIERSITY OF FINDLAY, OHIO, USA">THE UNVIERSITY OF FINDLAY, OHIO, USA</option>
                <option value="THIEL COL. GREENVILLE, PENNSYLVANIA, USA">THIEL COL. GREENVILLE, PENNSYLVANIA, USA
                </option>
                <option value="THOMAS A EDISON COLLEGE PRINCETON NJ USA">THOMAS A EDISON COLLEGE PRINCETON NJ USA
                </option>
                <option value="THOMAS COLLEGE WATERVILLE, MAINE, USA">THOMAS COLLEGE WATERVILLE, MAINE, USA</option>
                <option value="THOMAS JEFFERSON UNI. PHILADELPHIA, USA">THOMAS JEFFERSON UNI. PHILADELPHIA, USA</option>
                <option value="THOMAS MORE C.,FORT ITCHEL,KENTUCKY, USA">THOMAS MORE C.,FORT ITCHEL,KENTUCKY, USA
                </option>
                <option value="TIFT COLLEGE FORSYTH GEORGIA,USA">TIFT COLLEGE FORSYTH GEORGIA,USA</option>
                <option value="TOBA NATIONAL COLLEGE OF MARITIME TECH.">TOBA NATIONAL COLLEGE OF MARITIME TECH.</option>
                <option value="TOKAI UNIVERSITY, JAPAN.">TOKAI UNIVERSITY, JAPAN.</option>
                <option value="TOKUYAMA NATIONAL COLLEGE OF TECNOLOGY">TOKUYAMA NATIONAL COLLEGE OF TECNOLOGY</option>
                <option value="TOKYO DENKI UNIVERSITY, JAPAN">TOKYO DENKI UNIVERSITY, JAPAN</option>
                <option value="TOKYO INSTITUTE OF TECHNOLOGY , JAPAN">TOKYO INSTITUTE OF TECHNOLOGY , JAPAN</option>
                <option value="TOKYO MEDICAL AND DENTAL UNIV., JAPAN">TOKYO MEDICAL AND DENTAL UNIV., JAPAN</option>
                <option value="TOKYO NATIONAL COLLAGE OF TECHNOLOGY">TOKYO NATIONAL COLLAGE OF TECHNOLOGY</option>
                <option value="TOKYO UNIVERSITY OF FOREIGN STUDIES, JEPUN">TOKYO UNIVERSITY OF FOREIGN STUDIES, JEPUN
                </option>
                <option value="TOKYO UNIVERSITY OF SCIENCE">TOKYO UNIVERSITY OF SCIENCE</option>
                <option value="TOMAKOMAL NAT. COL OF TECHNOLOGY, JAPAN">TOMAKOMAL NAT. COL OF TECHNOLOGY, JAPAN</option>
                <option value="TOTTORI UNIVERSITY, JAPAN">TOTTORI UNIVERSITY, JAPAN</option>
                <option value="TOUGALOO COLLEGE MISSISSIPPI, USA">TOUGALOO COLLEGE MISSISSIPPI, USA</option>
                <option value="TOURO COLLEGE,SHEMECTADY,NEW YORK,USA">TOURO COLLEGE,SHEMECTADY,NEW YORK,USA</option>
                <option value="TOWSON STATE COLLEGE BALTIMORE,MARYLAND">TOWSON STATE COLLEGE BALTIMORE,MARYLAND</option>
                <option value="TOYAMA NATIONAL COLLEGE OF TECHNOLOGY">TOYAMA NATIONAL COLLEGE OF TECHNOLOGY</option>
                <option value="TOYAMA UNIVERSITY, JEPUN">TOYAMA UNIVERSITY, JEPUN</option>
                <option value="TOYOHASHI UNIVERSITI OF TECHNOLOGY,JAPAN">TOYOHASHI UNIVERSITI OF TECHNOLOGY,JAPAN
                </option>
                <option value="TOYOTA COLLEGE OF TECHNOLOGY, JAPAN">TOYOTA COLLEGE OF TECHNOLOGY, JAPAN</option>
                <option value="TRANSLYVANIA UNI.,LEXINGTON,KENTUCKY,USA">TRANSLYVANIA UNI.,LEXINGTON,KENTUCKY,USA
                </option>
                <option value="TRENT POLYTECHNIC NOTTINGHAM,U.K.">TRENT POLYTECHNIC NOTTINGHAM,U.K.</option>
                <option value="TRENT UNIVERSITY ONTARIO, CANADA">TRENT UNIVERSITY ONTARIO, CANADA</option>
                <option value="TREVECCA NAZARENE C.NASHVILLE, TENN. USA">TREVECCA NAZARENE C.NASHVILLE, TENN. USA
                </option>
                <option value="TRI-STATE COLLEGE ANGOLA INDIANA, USA">TRI-STATE COLLEGE ANGOLA INDIANA, USA</option>
                <option value="TRINITY COL. HARTFORD CONNECTICUT, USA">TRINITY COL. HARTFORD CONNECTICUT, USA</option>
                <option value="TRINITY COLLEGE OF MUSIC,UNITED KINGDOM">TRINITY COLLEGE OF MUSIC,UNITED KINGDOM</option>
                <option value="TRINITY COLLEGE WASHINGTON D.C., USA">TRINITY COLLEGE WASHINGTON D.C., USA</option>
                <option value="TRINITY UNIVERSITY,SAN ANTONIO,TEXAS,USA">TRINITY UNIVERSITY,SAN ANTONIO,TEXAS,USA
                </option>
                <option value="TRITY COLLEGE, BURLINGTON, VERMONT, USA">TRITY COLLEGE, BURLINGTON, VERMONT, USA</option>
                <option value="TROY STATE UNIVERSITY, ALABAMA USA">TROY STATE UNIVERSITY, ALABAMA USA</option>
                <option value="TSURUOKA NATIONAL COLLEGE OF TECHNOLOGY">TSURUOKA NATIONAL COLLEGE OF TECHNOLOGY</option>
                <option value="TSUYAMA NATIONAL COLLAGE OF TECH., JAPAN">TSUYAMA NATIONAL COLLAGE OF TECH., JAPAN
                </option>
                <option value="TUFTS UNIVERSITY, MEDFORD, MASS., USA">TUFTS UNIVERSITY, MEDFORD, MASS., USA</option>
                <option value="TULANE UNI. OF LOUISIANA N. ORLEANS, USA">TULANE UNI. OF LOUISIANA N. ORLEANS, USA
                </option>
                <option value="TUSCULUM COLLEGE GREENVILLE, TENN.,USA">TUSCULUM COLLEGE GREENVILLE, TENN.,USA</option>
                <option value="TUSKEGEE INSTITUTE,ALABAMA, USA">TUSKEGEE INSTITUTE,ALABAMA, USA</option>
                <option value="TWICKENHAM COLLEGE OF TECHNOLOGY,U.K.">TWICKENHAM COLLEGE OF TECHNOLOGY,U.K.</option>
                <option value="U'SITY OF POITIERS SCHOOL OF TECHNOLOGY">U'SITY OF POITIERS SCHOOL OF TECHNOLOGY</option>
                <option value="U. OF PESHWAR KYBER MEDICAL COLLEGE,PAK">U. OF PESHWAR KYBER MEDICAL COLLEGE,PAK</option>
                <option value="U.C. OF SOUTH WALES & MONMOUTHSHIRE,U.K.">U.C. OF SOUTH WALES & MONMOUTHSHIRE,U.K.
                </option>
                <option value="U.DE NEUCHATEL INGENIEUR-CHIMISTE,SWITZ.">U.DE NEUCHATEL INGENIEUR-CHIMISTE,SWITZ.
                </option>
                <option value="U.DE. NEUCHATEL INGENIEUR-HORLOGER,SWITZ">U.DE. NEUCHATEL INGENIEUR-HORLOGER,SWITZ
                </option>
                <option value="U.HOHENHEIM (LANDW.HOCHSCHULE)W.GERMANY">U.HOHENHEIM (LANDW.HOCHSCHULE)W.GERMANY</option>
                <option value="U.OF DUNDEE DUNCAN OF JORDANSTONE C.,U.K">U.OF DUNDEE DUNCAN OF JORDANSTONE C.,U.K
                </option>
                <option value="U.OF ILLINOIS CHICAGO CIRCLE U.S.A.">U.OF ILLINOIS CHICAGO CIRCLE U.S.A.</option>
                <option value="U.OF KARACHI DOW MEDICAL C.KARACHI,PAKIS">U.OF KARACHI DOW MEDICAL C.KARACHI,PAKIS
                </option>
                <option value="U.OF MARYAND EASTERN SHORE, PRINCESS ANN">U.OF MARYAND EASTERN SHORE, PRINCESS ANN
                </option>
                <option value="U.OF NATAL,KING GEORGE AVENUE,DURBAN,UK">U.OF NATAL,KING GEORGE AVENUE,DURBAN,UK</option>
                <option value="U.OF SC. & ARTS OF OKLAHOMA,CHICKASHA,US">U.OF SC. & ARTS OF OKLAHOMA,CHICKASHA,US
                </option>
                <option value="U.OF SOUTHWESTERN LOUISIANA,LAFAYETTE US">U.OF SOUTHWESTERN LOUISIANA,LAFAYETTE US
                </option>
                <option value="U.OF VIRGINIA, CLINCH CALLEY C. WISE,USA">U.OF VIRGINIA, CLINCH CALLEY C. WISE,USA
                </option>
                <option value="U.S. INTER UNI. SAN DIEGO CALIFORNIA,USA">U.S. INTER UNI. SAN DIEGO CALIFORNIA,USA
                </option>
                <option value="UBE NATIONAL COLLEGE OF TECHNOLOGY, JEPUN">UBE NATIONAL COLLEGE OF TECHNOLOGY, JEPUN
                </option>
                <option value="ULSTER C.THE NORTHERN IRELAND POLYTEC.UK">ULSTER C.THE NORTHERN IRELAND POLYTEC.UK
                </option>
                <option value="UMIST&THE VICTORIA UNI. OF MANCHESTER UK">UMIST&THE VICTORIA UNI. OF MANCHESTER UK
                </option>
                <option value="UMM AL - MAKKAH, ARAB SAUDI">UMM AL - MAKKAH, ARAB SAUDI</option>
                <option value="UNI AIRLANGGA SOERABAYA,INDONESIA">UNI AIRLANGGA SOERABAYA,INDONESIA</option>
                <option value="UNI ANDALAS PADANG,INDONESIA">UNI ANDALAS PADANG,INDONESIA</option>
                <option value="UNI BRAWIJAYA MALANG,INDONESIA">UNI BRAWIJAYA MALANG,INDONESIA</option>
                <option value="UNI GADJAH MADA,INDONESIA">UNI GADJAH MADA,INDONESIA</option>
                <option value="UNI HASANUDDIN,INDONESIA">UNI HASANUDDIN,INDONESIA</option>
                <option value="UNI INDONESIA,INDONESIA">UNI INDONESIA,INDONESIA</option>
                <option value="UNI ISLAM SUMATERA UTARA, INDONESIA">UNI ISLAM SUMATERA UTARA, INDONESIA</option>
                <option value="UNI OF AGRICULTURE AND TECHNOLOGI, TOKYO">UNI OF AGRICULTURE AND TECHNOLOGI, TOKYO
                </option>
                <option value="UNI OF APPLIED SC. COPENHAGEN DELLERUP">UNI OF APPLIED SC. COPENHAGEN DELLERUP</option>
                <option value="UNI OF TECH. AND BUSSINES AALEN, GERMANY">UNI OF TECH. AND BUSSINES AALEN, GERMANY
                </option>
                <option value="UNI PADJAJARAN BANDUNG,INDONESIA">UNI PADJAJARAN BANDUNG,INDONESIA</option>
                <option value="UNI SRIVIJAYA,INDONESIA">UNI SRIVIJAYA,INDONESIA</option>
                <option value="UNI SUMATRA UTARA,MEDAN,INDONESIA">UNI SUMATRA UTARA,MEDAN,INDONESIA</option>
                <option value="UNI UDAYANA,INDONESIA">UNI UDAYANA,INDONESIA</option>
                <option value="UNI. COLLEGE OF NORTH WALES,BANGOR, U.K.">UNI. COLLEGE OF NORTH WALES,BANGOR, U.K.
                </option>
                <option value="UNI. COLLEGE OF SWANSEA, UNITED KINGDOM">UNI. COLLEGE OF SWANSEA, UNITED KINGDOM</option>
                <option value="UNI. COLLEGE OF WALES,ALBERYSTWYTH,UK">UNI. COLLEGE OF WALES,ALBERYSTWYTH,UK</option>
                <option value="UNI. DE GENEGE INGENIEUR-CHIMISTE,SWIT.">UNI. DE GENEGE INGENIEUR-CHIMISTE,SWIT.</option>
                <option value="UNI. DE TECHNOLOGIE DE BORDEAUX, FRANCE">UNI. DE TECHNOLOGIE DE BORDEAUX, FRANCE</option>
                <option value="UNI. JOSEPH FOURIER , GRENOBLE 1, FRANCE">UNI. JOSEPH FOURIER , GRENOBLE 1, FRANCE
                </option>
                <option value="UNI. MED. DENTAL SCH. OF GUYS ST THOMAS">UNI. MED. DENTAL SCH. OF GUYS ST THOMAS</option>
                <option value="UNI. OF AGR.FAISALABAD (LYALL),PAKISTAN">UNI. OF AGR.FAISALABAD (LYALL),PAKISTAN</option>
                <option value="UNI. OF ALEXANDRIA,(ISKANDARIAH),MESIR">UNI. OF ALEXANDRIA,(ISKANDARIAH),MESIR</option>
                <option value="UNI. OF APPLIED SCIENCES ROSENHEIM, GERMANY">UNI. OF APPLIED SCIENCES ROSENHEIM, GERMANY
                </option>
                <option value="UNI. OF ASTON,BIRMINGHAM, UNITED KINGDOM">UNI. OF ASTON,BIRMINGHAM, UNITED KINGDOM
                </option>
                <option value="UNI. OF BRIDGEPORT,CONNECTICUT, USA">UNI. OF BRIDGEPORT,CONNECTICUT, USA</option>
                <option value="UNI. OF CENTRAL ENGLAND IN BIRMINGHAM">UNI. OF CENTRAL ENGLAND IN BIRMINGHAM</option>
                <option value="UNI. OF COLORADO AT COLORADO SPRING, USA">UNI. OF COLORADO AT COLORADO SPRING, USA
                </option>
                <option value="UNI. OF DACCA, DACCA DEN.COL. BANGLADESH">UNI. OF DACCA, DACCA DEN.COL. BANGLADESH
                </option>
                <option value="UNI. OF DACCA,DACCA MED. COL. BANGLADESH">UNI. OF DACCA,DACCA MED. COL. BANGLADESH
                </option>
                <option value="UNI. OF HARTFORD,W HARTFORD CONNEC.,USA">UNI. OF HARTFORD,W HARTFORD CONNEC.,USA</option>
                <option value="UNI. OF KARACHI (SINDH MEDICAL COLLAGE)">UNI. OF KARACHI (SINDH MEDICAL COLLAGE)</option>
                <option value="UNI. OF LAURENTIENNE SUDBURY, CANADA">UNI. OF LAURENTIENNE SUDBURY, CANADA</option>
                <option value="UNI. OF LINCOLNSHIRE & HUMBERSIDE, U.K">UNI. OF LINCOLNSHIRE & HUMBERSIDE, U.K</option>
                <option value="UNI. OF MADRID HIGHER TEC. SCHOOL,SPAIN">UNI. OF MADRID HIGHER TEC. SCHOOL,SPAIN</option>
                <option value="UNI. OF MAINE AT PORTLAND GORHAM, USA">UNI. OF MAINE AT PORTLAND GORHAM, USA</option>
                <option value="UNI. OF MANCHESTER INS. SC. & TECH, UK">UNI. OF MANCHESTER INS. SC. & TECH, UK</option>
                <option value="UNI. OF MARYLAND UNI. COL. PARK, USA">UNI. OF MARYLAND UNI. COL. PARK, USA</option>
                <option value="UNI. OF MIAMI CORAL GABLES FLORIDA,USA">UNI. OF MIAMI CORAL GABLES FLORIDA,USA</option>
                <option value="UNI. OF MINESSOTA MINNEAPOLIS, USA">UNI. OF MINESSOTA MINNEAPOLIS, USA</option>
                <option value="UNI. OF MONTANA,MISSOULA,MONTANA, USA">UNI. OF MONTANA,MISSOULA,MONTANA, USA</option>
                <option value="UNI. OF NEBRASKA OMAHA NEBRASKA, USA">UNI. OF NEBRASKA OMAHA NEBRASKA, USA</option>
                <option value="UNI. OF NEVADA LAS VEGAS NEVADA, USA">UNI. OF NEVADA LAS VEGAS NEVADA, USA</option>
                <option value="UNI. OF NEW HAVEN W. HAVEN CONNEC.,USA">UNI. OF NEW HAVEN W. HAVEN CONNEC.,USA</option>
                <option value="UNI. OF NEW YORK BROOKLYN COLLEGE, USA">UNI. OF NEW YORK BROOKLYN COLLEGE, USA</option>
                <option value="UNI. OF NORTH CAROLINA ASHEVILLE, USA">UNI. OF NORTH CAROLINA ASHEVILLE, USA</option>
                <option value="UNI. OF NORTH CAROLINA AT GREENSBORO,USA">UNI. OF NORTH CAROLINA AT GREENSBORO,USA
                </option>
                <option value="UNI. OF NORTH CAROLINA WILMINGTON, USA">UNI. OF NORTH CAROLINA WILMINGTON, USA</option>
                <option value="UNI. OF NORTH CAROLINA, CHAPEL HILL,USA">UNI. OF NORTH CAROLINA, CHAPEL HILL,USA</option>
                <option value="UNI. OF NORTH FLORIDA JACKSONVILLE, USA">UNI. OF NORTH FLORIDA JACKSONVILLE, USA</option>
                <option value="UNI. OF NORTHERN COLORADO GREELEY, USA">UNI. OF NORTHERN COLORADO GREELEY, USA</option>
                <option value="UNI. OF NORTHERN IOWA CEDAR FALLS,USA">UNI. OF NORTHERN IOWA CEDAR FALLS,USA</option>
                <option value="UNI. OF PITTSBURG JOHNTOWN, PENN., USA">UNI. OF PITTSBURG JOHNTOWN, PENN., USA</option>
                <option value="UNI. OF PUERTO RICO, RIO PIEDRAS, USA">UNI. OF PUERTO RICO, RIO PIEDRAS, USA</option>
                <option value="UNI. OF RHODE ISLAND KINGSTON, USA">UNI. OF RHODE ISLAND KINGSTON, USA</option>
                <option value="UNI. OF S. MISSISSIPPI HATTIESBURG, USA">UNI. OF S. MISSISSIPPI HATTIESBURG, USA</option>
                <option value="UNI. OF SINDH, JAMSHORO SINDH, PAKSITAN">UNI. OF SINDH, JAMSHORO SINDH, PAKSITAN</option>
                <option value="UNI. OF SOUTH CAROLINA AT CONWAY, USA">UNI. OF SOUTH CAROLINA AT CONWAY, USA</option>
                <option value="UNI. OF SOUTH CAROLINA SPARTANSBURG, USA">UNI. OF SOUTH CAROLINA SPARTANSBURG, USA
                </option>
                <option value="UNI. OF SOUTH DAKOTA VERMILLION, USA">UNI. OF SOUTH DAKOTA VERMILLION, USA</option>
                <option value="UNI. OF SOUTH FLORIDA TAMPQA FLORIDA,USA">UNI. OF SOUTH FLORIDA TAMPQA FLORIDA,USA
                </option>
                <option value="UNI. OF SOUTHERN CALIFORNIA,L.A., USA">UNI. OF SOUTHERN CALIFORNIA,L.A., USA</option>
                <option value="UNI. OF SOUTHERN COLORADO,PEUBLO, USA">UNI. OF SOUTHERN COLORADO,PEUBLO, USA</option>
                <option value="UNI. OF TENNESSEE AT CHATTNOOGA, USA">UNI. OF TENNESSEE AT CHATTNOOGA, USA</option>
                <option value="UNI. OF TENNESSEE AT KNOXVILLE, USA">UNI. OF TENNESSEE AT KNOXVILLE, USA</option>
                <option value="UNI. OF TEXAS HELATH SC. SAN ANTONIO,USA">UNI. OF TEXAS HELATH SC. SAN ANTONIO,USA
                </option>
                <option value="UNI. OF THE PACIFIC STOCKTON CALIF.,USA">UNI. OF THE PACIFIC STOCKTON CALIF.,USA</option>
                <option value="UNI. OF THE SOUTH, SEWANEE, TENN.,USA">UNI. OF THE SOUTH, SEWANEE, TENN.,USA</option>
                <option value="UNI. OF THE WEST OF ENGLAND,BRISTOL, UK">UNI. OF THE WEST OF ENGLAND,BRISTOL, UK</option>
                <option value="UNI. OF WESTERN AUSTRALIA,AUSTRALIA">UNI. OF WESTERN AUSTRALIA,AUSTRALIA</option>
                <option value="UNI. OF WISCONSIN STOUT,MENO,ONIE,USA">UNI. OF WISCONSIN STOUT,MENO,ONIE,USA</option>
                <option value="UNI. OF WISCONSIN-PARKSIDE KEN.,USA">UNI. OF WISCONSIN-PARKSIDE KEN.,USA</option>
                <option value="UNI. OF WYOMING LARAMIE WYOMING, USA">UNI. OF WYOMING LARAMIE WYOMING, USA</option>
                <option value="UNI. PROFISSIONALISE DE CALAIS, FRANCE">UNI. PROFISSIONALISE DE CALAIS, FRANCE</option>
                <option value="UNI.OF CALIFORNIA-SAN DIEGO LA JOLLA,USA">UNI.OF CALIFORNIA-SAN DIEGO LA JOLLA,USA
                </option>
                <option value="UNI.OF CENTRAL OF CENTRAL ARK.CONWAY,USA">UNI.OF CENTRAL OF CENTRAL ARK.CONWAY,USA
                </option>
                <option value="UNI.OF CEYLON (PERADENIYA), SRI LANKA">UNI.OF CEYLON (PERADENIYA), SRI LANKA</option>
                <option value="UNI.OF KING ABD.AZIZ JEDDAH,SAUDI ARABIA">UNI.OF KING ABD.AZIZ JEDDAH,SAUDI ARABIA
                </option>
                <option value="UNI.OF TEXAS MEDICAL BRANCH,GALVESTON,US">UNI.OF TEXAS MEDICAL BRANCH,GALVESTON,US
                </option>
                <option value="UNIIVERSITI OF DUBLIN TINITY COLLEGE IRELAND">UNIIVERSITI OF DUBLIN TINITY COLLEGE
                  IRELAND</option>
                <option value="UNION COLLEGE,BARBOURVILLE,KENTUCKY,USA">UNION COLLEGE,BARBOURVILLE,KENTUCKY,USA</option>
                <option value="UNION COLLEGE,LINCOLN,NEBRASKA,USA">UNION COLLEGE,LINCOLN,NEBRASKA,USA</option>
                <option value="UNION UNIVERSITY JACKSON, TENNESSEE,USA">UNION UNIVERSITY JACKSON, TENNESSEE,USA</option>
                <option value="UNITED STATE COAST GUARD ACAD.NEW LONDON">UNITED STATE COAST GUARD ACAD.NEW LONDON
                </option>
                <option value="UNITED STATES AIR FORCE ACADEMY, USA">UNITED STATES AIR FORCE ACADEMY, USA</option>
                <option value="UNITED STATES INTERNATIONAL UNIV. USA">UNITED STATES INTERNATIONAL UNIV. USA</option>
                <option value="UNIV. MUHAMMAD AL-KHAMIS, RASAT, MOROCCO">UNIV. MUHAMMAD AL-KHAMIS, RASAT, MOROCCO
                </option>
                <option value="UNIV. OF PENNSYLVANIA, PHILADELPHIA, USA">UNIV. OF PENNSYLVANIA, PHILADELPHIA, USA
                </option>
                <option value="UNIV. OF PUGET SOUND,TACOMA,WASH,USA">UNIV. OF PUGET SOUND,TACOMA,WASH,USA</option>
                <option value="UNIV. OF SOUTH AUSTRALIA, AUSTRALIA">UNIV. OF SOUTH AUSTRALIA, AUSTRALIA</option>
                <option value="UNIV. OF SOUTHERN QUEENSLAND, AUSTRALIA">UNIV. OF SOUTHERN QUEENSLAND, AUSTRALIA</option>
                <option value="UNIV. OF TECHNOLOGY, SYDNEY, AUSTRALIA">UNIV. OF TECHNOLOGY, SYDNEY, AUSTRALIA</option>
                <option value="UNIV. OF THE WEST INDIES, ST. AUGUSTINE">UNIV. OF THE WEST INDIES, ST. AUGUSTINE</option>
                <option value="UNIVERSIDADE DE LUANDA (ANGOLA) POTRUGAL">UNIVERSIDADE DE LUANDA (ANGOLA) POTRUGAL
                </option>
                <option value="UNIVERSITAS DIPONEGORO , INDONESIA">UNIVERSITAS DIPONEGORO , INDONESIA</option>
                <option value="UNIVERSITAS INDONESIA">UNIVERSITAS INDONESIA</option>
                <option value="UNIVERSITAS ISLAM NEGERI RADEN INTAN LAMPUNG, INDONESIA">UNIVERSITAS ISLAM NEGERI RADEN
                  INTAN LAMPUNG, INDONESIA</option>
                <option
                  value="UNIVERSITAS ISLAM NEGERI SULTAN SYARIF KASIM RIAU/INST. AGAMA ISLAM NEGERI SULTHAN KASIM">
                  UNIVERSITAS ISLAM NEGERI SULTAN SYARIF KASIM RIAU/INST. AGAMA ISLAM NEGERI SULTHAN KASIM</option>
                <option value="UNIVERSITAS KRISTEN KRIDA WACANA(UKRIDA)">UNIVERSITAS KRISTEN KRIDA WACANA(UKRIDA)
                </option>
                <option value="UNIVERSITAS NEGERI MALANG, INDONESIA">UNIVERSITAS NEGERI MALANG, INDONESIA</option>
                <option value="UNIVERSITAS NEGERI MEDAN , INDONESIA">UNIVERSITAS NEGERI MEDAN , INDONESIA</option>
                <option value="UNIVERSITAS NEGERI PADANG SUMATERA BARAT">UNIVERSITAS NEGERI PADANG SUMATERA BARAT
                </option>
                <option value="UNIVERSITAS NEGERI SURABAYA, INDONESIA">UNIVERSITAS NEGERI SURABAYA, INDONESIA</option>
                <option value="UNIVERSITAS PENDIDIKAN INDONESIA,BANDUNG">UNIVERSITAS PENDIDIKAN INDONESIA,BANDUNG
                </option>
                <option value="UNIVERSITAS PROF. DR. MOESTOPO, JAKARTA">UNIVERSITAS PROF. DR. MOESTOPO, JAKARTA</option>
                <option value="UNIVERSITAS SRIWIJAYA, PALEMBANG">UNIVERSITAS SRIWIJAYA, PALEMBANG</option>
                <option value="UNIVERSITAS TRISAKTI, JAKARTA, INDONESIA">UNIVERSITAS TRISAKTI, JAKARTA, INDONESIA
                </option>
                <option value="UNIVERSITAT DORTMUND, WEST GERMANY">UNIVERSITAT DORTMUND, WEST GERMANY</option>
                <option value="UNIVERSITAT DUISBURG ESSEN, JERMAN">UNIVERSITAT DUISBURG ESSEN, JERMAN</option>
                <option value="UNIVERSITAT KARLSRUHE (TH) WEST GERMANY">UNIVERSITAT KARLSRUHE (TH) WEST GERMANY</option>
                <option value="UNIVERSITAT STUTTGART (TH), WEST GERMANY">UNIVERSITAT STUTTGART (TH), WEST GERMANY
                </option>
                <option value="UNIVERSITAT TRIER-KALSERSLAUTERN, W.G.">UNIVERSITAT TRIER-KALSERSLAUTERN, W.G.</option>
                <option value="UNIVERSITE D' ANGERS, FRANCE">UNIVERSITE D' ANGERS, FRANCE</option>
                <option value="UNIVERSITE D'AIX-MARSEILLE, PERANCIS">UNIVERSITE D'AIX-MARSEILLE, PERANCIS</option>
                <option value="UNIVERSITE D'ARTOIS, FRANCE">UNIVERSITE D'ARTOIS, FRANCE</option>
                <option value="UNIVERSITE DE BETHURE, FRANCE">UNIVERSITE DE BETHURE, FRANCE</option>
                <option value="UNIVERSITE DE NANCY 2, NANCY, FRANCE">UNIVERSITE DE NANCY 2, NANCY, FRANCE</option>
                <option value="UNIVERSITE DE SHERBROOKE, CANADA">UNIVERSITE DE SHERBROOKE, CANADA</option>
                <option value="UNIVERSITE DE TECHNOLOGIE DE BELFORT-MONTBELIARD (UTBM), FRANCE">UNIVERSITE DE
                  TECHNOLOGIE DE BELFORT-MONTBELIARD (UTBM), FRANCE</option>
                <option value="UNIVERSITE DU HAVRE, PERANCIS">UNIVERSITE DU HAVRE, PERANCIS</option>
                <option value="UNIVERSITE HENRI POINCARE,NANCY, FRANCE">UNIVERSITE HENRI POINCARE,NANCY, FRANCE</option>
                <option value="UNIVERSITI AL-KARAOUINE/ QURAWIYYIEN, MOROCCO">UNIVERSITI AL-KARAOUINE/ QURAWIYYIEN,
                  MOROCCO</option>
                <option value="UNIVERSITI BEUTH HOCHSCHULE FUR TECHNIK BERLIN">UNIVERSITI BEUTH HOCHSCHULE FUR TECHNIK
                  BERLIN</option>
                <option value="UNIVERSITI BRUNEI DARUSSALAM">UNIVERSITI BRUNEI DARUSSALAM</option>
                <option value="UNIVERSITI DHARWAD , INDIA">UNIVERSITI DHARWAD , INDIA</option>
                <option value="UNIVERSITI FACHHOCHSHULE AACHEN">UNIVERSITI FACHHOCHSHULE AACHEN</option>
                <option value="UNIVERSITI HIROSAKI, JEPUN">UNIVERSITI HIROSAKI, JEPUN</option>
                <option value="UNIVERSITI ILMU AL-QURAN (11Q) JAKARTA">UNIVERSITI ILMU AL-QURAN (11Q) JAKARTA</option>
                <option value="UNIVERSITI ISLAM IMAN MOHAMAD BIN SAUD, RIYADH">UNIVERSITI ISLAM IMAN MOHAMAD BIN SAUD,
                  RIYADH</option>
                <option value="UNIVERSITI ISLAM MADINAH, ARAB SAUDI">UNIVERSITI ISLAM MADINAH, ARAB SAUDI</option>
                <option value="UNIVERSITI KAGOSHIMA, JAPAN">UNIVERSITI KAGOSHIMA, JAPAN</option>
                <option value="UNIVERSITI LALANG KUNING, RIAU,INDONESIA">UNIVERSITI LALANG KUNING, RIAU,INDONESIA
                </option>
                <option value="UNIVERSITI MEDAN AREA,REPUBLIK INDONESIA">UNIVERSITI MEDAN AREA,REPUBLIK INDONESIA
                </option>
                <option value="UNIVERSITI OF HULL, UNITED KINGDOM">UNIVERSITI OF HULL, UNITED KINGDOM</option>
                <option value="UNIVERSITI OF IWATE, JEPUN">UNIVERSITI OF IWATE, JEPUN</option>
                <option value="UNIVERSITI OF LONDON, UNITED KINGDOM">UNIVERSITI OF LONDON, UNITED KINGDOM</option>
                <option value="UNIVERSITI TEKNOLOGI CURTIN, SARAWAK">UNIVERSITI TEKNOLOGI CURTIN, SARAWAK</option>
                <option value="UNIVERSITI TOHOKU, SENDAI, JEPUN">UNIVERSITI TOHOKU, SENDAI, JEPUN</option>
                <option value="UNIVERSITI WAKAYAMA, JEPUN">UNIVERSITI WAKAYAMA, JEPUN</option>
                <option value="UNIVERSITY ASAHIKAWA , JEPUN">UNIVERSITY ASAHIKAWA , JEPUNUNIVERSITY ASAHIKAWA , JEPUN
                </option>
                <option value="UNIVERSITY CADI AYYAD, MOROCCO">UNIVERSITY CADI AYYAD, MOROCCO</option>
                <option value="UNIVERSITY COLLEGE DUBLIN IRELAND">UNIVERSITY COLLEGE DUBLIN IRELAND</option>
                <option value="UNIVERSITY COLLEGE LONDON,UNITED KINGDOM">UNIVERSITY COLLEGE LONDON,UNITED KINGDOM
                </option>
                <option value="UNIVERSITY COLLEGE OF CORK, IRELAND">UNIVERSITY COLLEGE OF CORK, IRELAND</option>
                <option value="UNIVERSITY COLLEGE OF GALWAY IRELAND">UNIVERSITY COLLEGE OF GALWAY IRELAND</option>
                <option value="UNIVERSITY DE BRUXELLES, BELGIUM">UNIVERSITY DE BRUXELLES, BELGIUM</option>
                <option value="UNIVERSITY DE GAND, BELGIUM">UNIVERSITY DE GAND, BELGIUM</option>
                <option value="UNIVERSITY DE LIEGE, BELGIUM">UNIVERSITY DE LIEGE, BELGIUM</option>
                <option value="UNIVERSITY DE LISBOA, PORTUGAL">UNIVERSITY DE LISBOA, PORTUGAL</option>
                <option value="UNIVERSITY DE LOUVAIN, BELGIUM">UNIVERSITY DE LOUVAIN, BELGIUM</option>
                <option value="UNIVERSITY DU LITTORAL DUNKERQUE, FRANCE">UNIVERSITY DU LITTORAL DUNKERQUE, FRANCE
                </option>
                <option value="UNIVERSITY DU MAINE, FRANCE">UNIVERSITY DU MAINE, FRANCE</option>
                <option value="UNIVERSITY EHIME, JEPUN">UNIVERSITY EHIME, JEPUN</option>
                <option value="UNIVERSITY EL-HASSAN SANI/UNIVERSITY HASSAN II">UNIVERSITY EL-HASSAN SANI/UNIVERSITY
                  HASSAN II</option>
                <option value="UNIVERSITY ELECTRO-COMMUNICATION, JAPAN">UNIVERSITY ELECTRO-COMMUNICATION, JAPAN</option>
                <option value="UNIVERSITY GUNMA, JEPUN">UNIVERSITY GUNMA, JEPUN</option>
                <option value="UNIVERSITY IBNU TOFAIL, KENITRA, MOROCCO">UNIVERSITY IBNU TOFAIL, KENITRA, MOROCCO
                </option>
                <option value="UNIVERSITY INNSBRUCK, AUSTRIA">UNIVERSITY INNSBRUCK, AUSTRIA</option>
                <option value="UNIVERSITY KUWAIT, KUWAIT">UNIVERSITY KUWAIT, KUWAIT</option>
                <option value="UNIVERSITY KYUSHU, JEPUN">UNIVERSITY KYUSHU, JEPUN</option>
                <option value="UNIVERSITY MISSOURI COLUMBIA, USA">UNIVERSITY MISSOURI COLUMBIA, USA</option>
                <option value="UNIVERSITY MUHAMMAD ABDILLAH/SIDI MUHAMMED BIN ABDELLAH UNIVERSITY">UNIVERSITY MUHAMMAD
                  ABDILLAH/SIDI MUHAMMED BIN ABDELLAH UNIVERSITY</option>
                <option value="UNIVERSITY NORTHERN TERRITORY, DARWIN">UNIVERSITY NORTHERN TERRITORY, DARWIN</option>
                <option value="UNIVERSITY OCHANOMIZU , TOKYO, JAPAN">UNIVERSITY OCHANOMIZU , TOKYO, JAPAN</option>
                <option value="UNIVERSITY OF FUKUI, JAPAN">UNIVERSITY OF FUKUI, JAPAN</option>
                <option value="UNIVERSITY OF ABERDEEN, UNITED KINGDOM">UNIVERSITY OF ABERDEEN, UNITED KINGDOM</option>
                <option value="UNIVERSITY OF ABERTAY DUNDEE, SCOTLAND">UNIVERSITY OF ABERTAY DUNDEE, SCOTLAND</option>
                <option value="UNIVERSITY OF ADDIS ABABA, ETHIOPIA">UNIVERSITY OF ADDIS ABABA, ETHIOPIA</option>
                <option value="UNIVERSITY OF ADELAIDE, AUSTRALIA">UNIVERSITY OF ADELAIDE, AUSTRALIA</option>
                <option value="UNIVERSITY OF AGRA, INDIA">UNIVERSITY OF AGRA, INDIA</option>
                <option value="UNIVERSITY OF AGRA. SC. BANGALORE, INDIA">UNIVERSITY OF AGRA. SC. BANGALORE, INDIA
                </option>
                <option value="UNIVERSITY OF AGRI. SCIENCE MYSORE,INDIA">UNIVERSITY OF AGRI. SCIENCE MYSORE,INDIA
                </option>
                <option value="UNIVERSITY OF AKRON, AKRON, OHIO, USA">UNIVERSITY OF AKRON, AKRON, OHIO, USA</option>
                <option value="UNIVERSITY OF ALABAMA, USA">UNIVERSITY OF ALABAMA, USA</option>
                <option value="UNIVERSITY OF ALABAMA,BIRMINGHAM, USA">UNIVERSITY OF ALABAMA,BIRMINGHAM, USA</option>
                <option value="UNIVERSITY OF ALABAMA,HUNTSVILLE, USA">UNIVERSITY OF ALABAMA,HUNTSVILLE, USA</option>
                <option value="UNIVERSITY OF ALASKA, FAIRBANKS, USA">UNIVERSITY OF ALASKA, FAIRBANKS, USA</option>
                <option value="UNIVERSITY OF ALASKA, USA">UNIVERSITY OF ALASKA, USA</option>
                <option value="UNIVERSITY OF ALBERTA, CANADA">UNIVERSITY OF ALBERTA, CANADA</option>
                <option value="UNIVERSITY OF ALBOQUERQUE NEW MEXICO,USA">UNIVERSITY OF ALBOQUERQUE NEW MEXICO,USA
                </option>
                <option value="UNIVERSITY OF ANDHRA, INDIA">UNIVERSITY OF ANDHRA, INDIA</option>
                <option value="UNIVERSITY OF ANKARA, TURKEY">UNIVERSITY OF ANKARA, TURKEY</option>
                <option value="UNIVERSITY OF ARIZONA, TUCSON, USA">UNIVERSITY OF ARIZONA, TUCSON, USA</option>
                <option value="UNIVERSITY OF ARKANSAS, MONTECELLO, USA">UNIVERSITY OF ARKANSAS, MONTECELLO, USA</option>
                <option value="UNIVERSITY OF ARKANSAS,FAYETTEVILLE, USA">UNIVERSITY OF ARKANSAS,FAYETTEVILLE, USA
                </option>
                <option value="UNIVERSITY OF ARKANSAS,LITTLE ROCK, USA">UNIVERSITY OF ARKANSAS,LITTLE ROCK, USA</option>
                <option value="UNIVERSITY OF ARKANSAS,PINE BLUFF,USA">UNIVERSITY OF ARKANSAS,PINE BLUFF,USA</option>
                <option value="UNIVERSITY OF ASSIAT, MESIR">UNIVERSITY OF ASSIAT, MESIR</option>
                <option value="UNIVERSITY OF BALARAT, AUSTRALIA">UNIVERSITY OF BALARAT, AUSTRALIA</option>
                <option value="UNIVERSITY OF BALLARAT, AUSTRALIA">UNIVERSITY OF BALLARAT, AUSTRALIA</option>
                <option value="UNIVERSITY OF BALTIMORE, MARYLAND, USA">UNIVERSITY OF BALTIMORE, MARYLAND, USA</option>
                <option value="UNIVERSITY OF BANGALORE, INDIA">UNIVERSITY OF BANGALORE, INDIA</option>
                <option value="UNIVERSITY OF BASRAH, IRAQ">UNIVERSITY OF BASRAH, IRAQ</option>
                <option value="UNIVERSITY OF BATH, UNITED KINGDOM">UNIVERSITY OF BATH, UNITED KINGDOM</option>
                <option value="UNIVERSITY OF BEDFORDSHIRE">UNIVERSITY OF BEDFORDSHIRE</option>
                <option value="UNIVERSITY OF BELFAST, UNITED KINGDOM">UNIVERSITY OF BELFAST, UNITED KINGDOM</option>
                <option value="UNIVERSITY OF BIHAR, INDIA">UNIVERSITY OF BIHAR, INDIA</option>
                <option value="UNIVERSITY OF BIRMINGHAM,UNITED KINGDOM">UNIVERSITY OF BIRMINGHAM,UNITED KINGDOM</option>
                <option value="UNIVERSITY OF BOMBAY, INDIA">UNIVERSITY OF BOMBAY, INDIA</option>
                <option value="UNIVERSITY OF BOURNEMOUTH, UK">UNIVERSITY OF BOURNEMOUTH, UK</option>
                <option value="UNIVERSITY OF BRADFORD, UNITED KINGDOM">UNIVERSITY OF BRADFORD, UNITED KINGDOM</option>
                <option value="UNIVERSITY OF BRIGHTON">UNIVERSITY OF BRIGHTON</option>
                <option value="UNIVERSITY OF BRISTOL, UNITED KINGDOM">UNIVERSITY OF BRISTOL, UNITED KINGDOM</option>
                <option value="UNIVERSITY OF BRITISH COLUMBIA, CANADA">UNIVERSITY OF BRITISH COLUMBIA, CANADA</option>
                <option value="UNIVERSITY OF BUCKINGHAM, U.K.">UNIVERSITY OF BUCKINGHAM, U.K.</option>
                <option value="UNIVERSITY OF CAIRO, MESIR">UNIVERSITY OF CAIRO, MESIR</option>
                <option value="UNIVERSITY OF CALCUTTA, INDIA">UNIVERSITY OF CALCUTTA, INDIA</option>
                <option value="UNIVERSITY OF CALGARY, CANADA">UNIVERSITY OF CALGARY, CANADA</option>
                <option value="UNIVERSITY OF CALIFORNIA-BERKELEY,USA">UNIVERSITY OF CALIFORNIA-BERKELEY,USA</option>
                <option value="UNIVERSITY OF CALIFORNIA-DAVIA,USA">UNIVERSITY OF CALIFORNIA-DAVIA,USA</option>
                <option value="UNIVERSITY OF CALIFORNIA-IRVINE,USA">UNIVERSITY OF CALIFORNIA-IRVINE,USA</option>
                <option value="UNIVERSITY OF CALIFORNIA-LOS ANGELES,USA">UNIVERSITY OF CALIFORNIA-LOS ANGELES,USA
                </option>
                <option value="UNIVERSITY OF CALIFORNIA-RIVERSIDE,USA">UNIVERSITY OF CALIFORNIA-RIVERSIDE,USA</option>
                <option value="UNIVERSITY OF CALIFORNIA-SAN FRANCISCO">UNIVERSITY OF CALIFORNIA-SAN FRANCISCO</option>
                <option value="UNIVERSITY OF CALIFORNIA-SANTA BARBARA">UNIVERSITY OF CALIFORNIA-SANTA BARBARA</option>
                <option value="UNIVERSITY OF CALIFORNIA-SANTA CRUZ,USA">UNIVERSITY OF CALIFORNIA-SANTA CRUZ,USA</option>
                <option value="UNIVERSITY OF CAMBRIDGE, UNITED KINGDOM">UNIVERSITY OF CAMBRIDGE, UNITED KINGDOM</option>
                <option value="UNIVERSITY OF CANBERRA, AUSTRALIA">UNIVERSITY OF CANBERRA, AUSTRALIA</option>
                <option value="UNIVERSITY OF CARLETON, CANADA">UNIVERSITY OF CARLETON, CANADA</option>
                <option value="UNIVERSITY OF CENTRAL ARKANSAS, USA">UNIVERSITY OF CENTRAL ARKANSAS, USA</option>
                <option value="UNIVERSITY OF CENTRAL LANCASHIRE">UNIVERSITY OF CENTRAL LANCASHIRE</option>
                <option value="UNIVERSITY OF CEYLON (SRI LANKA)">UNIVERSITY OF CEYLON (SRI LANKA)</option>
                <option value="UNIVERSITY OF CHESTER, UNITED KINGDOM">UNIVERSITY OF CHESTER, UNITED KINGDOM</option>
                <option value="UNIVERSITY OF CHICAGO ILLINOIS,USA">UNIVERSITY OF CHICAGO ILLINOIS,USA</option>
                <option value="UNIVERSITY OF CHITTAGONG, BANGLADESH">UNIVERSITY OF CHITTAGONG, BANGLADESH</option>
                <option value="UNIVERSITY OF CINCINNATI, OHIO, USA">UNIVERSITY OF CINCINNATI, OHIO, USA</option>
                <option value="UNIVERSITY OF COLORADO AT BOULDER, USA">UNIVERSITY OF COLORADO AT BOULDER, USA</option>
                <option value="UNIVERSITY OF COLORADO AT DENVER, USA">UNIVERSITY OF COLORADO AT DENVER, USA</option>
                <option value="UNIVERSITY OF CONNECTICUT STORRS, USA">UNIVERSITY OF CONNECTICUT STORRS, USA</option>
                <option value="UNIVERSITY OF DALLAS, IRVING, TEXAS, USA">UNIVERSITY OF DALLAS, IRVING, TEXAS, USA
                </option>
                <option value="UNIVERSITY OF DAMASCUS, SYRIA">UNIVERSITY OF DAMASCUS, SYRIA</option>
                <option value="UNIVERSITY OF DAMASCUS, SYRIA">UNIVERSITY OF DAMASCUS, SYRIA</option>
                <option value="UNIVERSITY OF DAYTON, DAYTON, OHIO, USA">UNIVERSITY OF DAYTON, DAYTON, OHIO, USA</option>
                <option value="UNIVERSITY OF DELAWARE, NEWARK, USA">UNIVERSITY OF DELAWARE, NEWARK, USA</option>
                <option value="UNIVERSITY OF DELHI, INDIA">UNIVERSITY OF DELHI, INDIA</option>
                <option value="UNIVERSITY OF DENVER, COLORADO, USA">UNIVERSITY OF DENVER, COLORADO, USA</option>
                <option value="UNIVERSITY OF DERBY, UNITED KINGDOM">UNIVERSITY OF DERBY, UNITED KINGDOM</option>
                <option value="UNIVERSITY OF DETROIT, MICHIGAN, USA">UNIVERSITY OF DETROIT, MICHIGAN, USA</option>
                <option value="UNIVERSITY OF DIBRUGARH, INDIA">UNIVERSITY OF DIBRUGARH, INDIA</option>
                <option value="UNIVERSITY OF DUBUQUE IOWA, USA">UNIVERSITY OF DUBUQUE IOWA, USA</option>
                <option value="UNIVERSITY OF DUNDEE, UNITED KINGDOM">UNIVERSITY OF DUNDEE, UNITED KINGDOM</option>
                <option value="UNIVERSITY OF DURHAM, UNITED KINGDOM">UNIVERSITY OF DURHAM, UNITED KINGDOM</option>
                <option value="UNIVERSITY OF EAST AFRICA, KENYA">UNIVERSITY OF EAST AFRICA, KENYA</option>
                <option value="UNIVERSITY OF EAST ANGLIA,UNITED KINGDOM">UNIVERSITY OF EAST ANGLIA,UNITED KINGDOM
                </option>
                <option value="UNIVERSITY OF EAST LONDON">UNIVERSITY OF EAST LONDON</option>
                <option value="UNIVERSITY OF EDINBURGH, UNITED KINGDOM">UNIVERSITY OF EDINBURGH, UNITED KINGDOM</option>
                <option value="UNIVERSITY OF ESSEX, UNITED KINGDOM">UNIVERSITY OF ESSEX, UNITED KINGDOM</option>
                <option value="UNIVERSITY OF EVANSVILLE INDIANA, USA">UNIVERSITY OF EVANSVILLE INDIANA, USA</option>
                <option value="UNIVERSITY OF EXETER, UNITED KINGDOM">UNIVERSITY OF EXETER, UNITED KINGDOM</option>
                <option value="UNIVERSITY OF FLORIDA GAINESVILLE,USA">UNIVERSITY OF FLORIDA GAINESVILLE,USA</option>
                <option value="UNIVERSITY OF FRANCHE-COMTÉ">UNIVERSITY OF FRANCHE-COMTÉ</option>
                <option value="UNIVERSITY OF GALGARY, CANADA">UNIVERSITY OF GALGARY, CANADA</option>
                <option value="UNIVERSITY OF GEORGIA ATHENS GEORGIA,USA">UNIVERSITY OF GEORGIA ATHENS GEORGIA,USA
                </option>
                <option value="UNIVERSITY OF GHENT, BELGIUM">UNIVERSITY OF GHENT, BELGIUM</option>
                <option value="UNIVERSITY OF GLAMORGAN">UNIVERSITY OF GLAMORGAN</option>
                <option value="UNIVERSITY OF GLASGOW, UNITED KINGDOM">UNIVERSITY OF GLASGOW, UNITED KINGDOM</option>
                <option value="UNIVERSITY OF GREENWICH">UNIVERSITY OF GREENWICH</option>
                <option value="UNIVERSITY OF GRENOBLES ALPES 1, PERANCIS">UNIVERSITY OF GRENOBLES ALPES 1, PERANCIS
                </option>
                <option value="UNIVERSITY OF GUELPH, CANADA">UNIVERSITY OF GUELPH, CANADA</option>
                <option value="UNIVERSITY OF HACETTEPE, TURKEY">UNIVERSITY OF HACETTEPE, TURKEY</option>
                <option value="UNIVERSITY OF HAWAI AT MANOA HONLULU USA">UNIVERSITY OF HAWAI AT MANOA HONLULU USA
                </option>
                <option value="UNIVERSITY OF HERDFORDSHIRE, U.KINGDOM">UNIVERSITY OF HERDFORDSHIRE, U.KINGDOM</option>
                <option value="UNIVERSITY OF HERTFORDSHIRE">UNIVERSITY OF HERTFORDSHIRE</option>
                <option value="UNIVERSITY OF HOKKAIDO, JEPUN">UNIVERSITY OF HOKKAIDO, JEPUN</option>
                <option value="UNIVERSITY OF HONG KONG,HONG KONG">UNIVERSITY OF HONG KONG,HONG KONG</option>
                <option value="UNIVERSITY OF HOUSTON, TEXAS, USA">UNIVERSITY OF HOUSTON, TEXAS, USA</option>
                <option value="UNIVERSITY OF HUDDERSFIELD">UNIVERSITY OF HUDDERSFIELD</option>
                <option value="UNIVERSITY OF HUMBERSIDE, UK">UNIVERSITY OF HUMBERSIDE, UK</option>
                <option value="UNIVERSITY OF HUMBERSIDE, UNITED KINGDOM">UNIVERSITY OF HUMBERSIDE, UNITED KINGDOM
                </option>
                <option value="UNIVERSITY OF IDAHO MOSOW,USA">UNIVERSITY OF IDAHO MOSOW,USA</option>
                <option value="UNIVERSITY OF ILLINOIS URBANA,USA">UNIVERSITY OF ILLINOIS URBANA,USA</option>
                <option value="UNIVERSITY OF INDORE, INDIA">UNIVERSITY OF INDORE, INDIA</option>
                <option value="UNIVERSITY OF ISTANBUL, TURKEY">UNIVERSITY OF ISTANBUL, TURKEY</option>
                <option value="UNIVERSITY OF JERASH, JORDAN">UNIVERSITY OF JERASH, JORDAN</option>
                <option value="UNIVERSITY OF JUDAISM, LOS ANGELES,USA">UNIVERSITY OF JUDAISM, LOS ANGELES,USA</option>
                <option value="UNIVERSITY OF KANSAS, LAWRENCE, USA">UNIVERSITY OF KANSAS, LAWRENCE, USA</option>
                <option value="UNIVERSITY OF KARACHI, PAKISTAN">UNIVERSITY OF KARACHI, PAKISTAN</option>
                <option value="UNIVERSITY OF KARNATAK, INDIA">UNIVERSITY OF KARNATAK, INDIA</option>
                <option value="UNIVERSITY OF KEELE, UNITED KINGDOM">UNIVERSITY OF KEELE, UNITED KINGDOM</option>
                <option value="UNIVERSITY OF KENT, UNITED KINGDOM">UNIVERSITY OF KENT, UNITED KINGDOM</option>
                <option value="UNIVERSITY OF KENTUCKY, LEXINGTON, USA">UNIVERSITY OF KENTUCKY, LEXINGTON, USA</option>
                <option value="UNIVERSITY OF KERALA, INDIA">UNIVERSITY OF KERALA, INDIA</option>
                <option value="UNIVERSITY OF KYORIN, JAPAN">UNIVERSITY OF KYORIN, JAPAN</option>
                <option value="UNIVERSITY OF KYOTO, JEPUN">UNIVERSITY OF KYOTO, JEPUN</option>
                <option value="UNIVERSITY OF LAGOS, NIGERIA">UNIVERSITY OF LAGOS, NIGERIA</option>
                <option value="UNIVERSITY OF LANCESTER, UNITED KINGDOM">UNIVERSITY OF LANCESTER, UNITED KINGDOM</option>
                <option value="UNIVERSITY OF LEEDS, UNITED KINGDOM">KOLEJ UNIVERSITY OF LEEDS, UNITED KINGDOM</option>
                <option value="UNIVERSITY OF LEICESTER, UNITED KINGDOM">UNIVERSITY OF LEICESTER, UNITED KINGDOM</option>
                <option value="UNIVERSITY OF LIBYA, LIBYA">UNIVERSITY OF LIBYA, LIBYA</option>
                <option value="UNIVERSITY OF LIVERPOOL, UNITED KINGDOM">UNIVERSITY OF LIVERPOOL, UNITED KINGDOM</option>
                <option value="UNIVERSITY OF LOUISVILLE, KENTUCKY, USA">UNIVERSITY OF LOUISVILLE, KENTUCKY, USA</option>
                <option value="UNIVERSITY OF LOWELL, MASS., USA">UNIVERSITY OF LOWELL, MASS., USA</option>
                <option value="UNIVERSITY OF LUCKNOW, INDIA">UNIVERSITY OF LUCKNOW, INDIA</option>
                <option value="UNIVERSITY OF LUTON, UNITED KINGDOM">UNIVERSITY OF LUTON, UNITED KINGDOM</option>
                <option value="UNIVERSITY OF MADRAS, INDIA">UNIVERSITY OF MADRAS, INDIA</option>
                <option value="UNIVERSITY OF MADURAI, INDIA">UNIVERSITY OF MADURAI, INDIA</option>
                <option value="UNIVERSITY OF MAINE AT FARMINGTON, USA">UNIVERSITY OF MAINE AT FARMINGTON, USA</option>
                <option value="UNIVERSITY OF MAINE AT FORT KENT, USA">UNIVERSITY OF MAINE AT FORT KENT, USA</option>
                <option value="UNIVERSITY OF MAINE AT MACHIAS, USA">UNIVERSITY OF MAINE AT MACHIAS, USA</option>
                <option value="UNIVERSITY OF MAINE AT ORONO, USA">UNIVERSITY OF MAINE AT ORONO, USA</option>
                <option value="UNIVERSITY OF MAINE AT PRESQUE ISLE, USA">UNIVERSITY OF MAINE AT PRESQUE ISLE, USA
                </option>
                <option value="UNIVERSITY OF MANCHESTER, UNITED KINGDOM">UNIVERSITY OF MANCHESTER, UNITED KINGDOM
                </option>
                <option value="UNIVERSITY OF MANDALAY, BURMA">UNIVERSITY OF MANDALAY, BURMA</option>
                <option value="UNIVERSITY OF MANITOBA,WINNIPEG, CANADA">UNIVERSITY OF MANITOBA,WINNIPEG, CANADA</option>
                <option value="UNIVERSITY OF MANSOURA, MESIR">UNIVERSITY OF MANSOURA, MESIR</option>
                <option value="UNIVERSITY OF MARYLAND COLLEGE PARK, USA">UNIVERSITY OF MARYLAND COLLEGE PARK, USA
                </option>
                <option value="UNIVERSITY OF MARYLAND, GERMANY">UNIVERSITY OF MARYLAND, GERMANY</option>
                <option value="UNIVERSITY OF MARYLWAND, BALTIMORE, USA">UNIVERSITY OF MARYLWAND, BALTIMORE, USA</option>
                <option value="UNIVERSITY OF MASS., AMHERST, USA">UNIVERSITY OF MASS., AMHERST, USA</option>
                <option value="UNIVERSITY OF MASSACHUSETTS, BOSTON, USA">UNIVERSITY OF MASSACHUSETTS, BOSTON, USA
                </option>
                <option value="UNIVERSITY OF MEDINA,SAUDI ARABIA">UNIVERSITY OF MEDINA,SAUDI ARABIA</option>
                <option value="UNIVERSITY OF MELBOURNE, AUSTRALIA">UNIVERSITY OF MELBOURNE, AUSTRALIA</option>
                <option value="UNIVERSITY OF MICHIGAN, FLINT, USA">UNIVERSITY OF MICHIGAN, FLINT, USA</option>
                <option value="UNIVERSITY OF MICHIGAN,ANN ARBOR, USA">UNIVERSITY OF MICHIGAN,ANN ARBOR, USA</option>
                <option value="UNIVERSITY OF MICHIGAN,DEARBORN, USA">UNIVERSITY OF MICHIGAN,DEARBORN, USA</option>
                <option value="UNIVERSITY OF MINNESOTA AT DULUTH, USA">UNIVERSITY OF MINNESOTA AT DULUTH, USA</option>
                <option value="UNIVERSITY OF MINNESOTA AT MORRIS, USA">UNIVERSITY OF MINNESOTA AT MORRIS, USA</option>
                <option value="UNIVERSITY OF MINNESOTA, USA">UNIVERSITY OF MINNESOTA, USA</option>
                <option value="UNIVERSITY OF MISSISSIPPI MISS., USA">UNIVERSITY OF MISSISSIPPI MISS., USA</option>
                <option value="UNIVERSITY OF MISSOURI KANSAS CITY, USA">UNIVERSITY OF MISSOURI KANSAS CITY, USA</option>
                <option value="UNIVERSITY OF MISSOURI ROLLA, USA">UNIVERSITY OF MISSOURI ROLLA, USA</option>
                <option value="UNIVERSITY OF MISSOURI ST. LOUIS, USA">UNIVERSITY OF MISSOURI ST. LOUIS, USA</option>
                <option value="UNIVERSITY OF MIYAZAKI, JEPUN">UNIVERSITY OF MIYAZAKI, JEPUN</option>
                <option value="UNIVERSITY OF MONTEVALLO,ALABAMA, USA">UNIVERSITY OF MONTEVALLO,ALABAMA, USA</option>
                <option value="UNIVERSITY OF MONTREAL, CANADA">UNIVERSITY OF MONTREAL, CANADA</option>
                <option value="UNIVERSITY OF MUMBAI, INDIA">UNIVERSITY OF MUMBAI, INDIA</option>
                <option value="UNIVERSITY OF MURDOCH, AUSTRALIA">UNIVERSITY OF MURDOCH, AUSTRALIA</option>
                <option value="UNIVERSITY OF MYSORE/MANGALORE, INDIA">UNIVERSITY OF MYSORE/MANGALORE, INDIA</option>
                <option value="UNIVERSITY OF N. ALABAMA,FLORENCE, USA">UNIVERSITY OF N. ALABAMA,FLORENCE, USA</option>
                <option value="UNIVERSITY OF N.CAROLINA, CHARLOTTE,USA">UNIVERSITY OF N.CAROLINA, CHARLOTTE,USA</option>
                <option value="UNIVERSITY OF NAGPUR, INDIA">UNIVERSITY OF NAGPUR, INDIA</option>
                <option value="UNIVERSITY OF NEBRASKA LINCOLN, USA">UNIVERSITY OF NEBRASKA LINCOLN, USA</option>
                <option value="UNIVERSITY OF NEVADA RENO NEVADA, USA">UNIVERSITY OF NEVADA RENO NEVADA, USA</option>
                <option value="UNIVERSITY OF NEW BRUNSWICK, CANADA">UNIVERSITY OF NEW BRUNSWICK, CANADA</option>
                <option value="UNIVERSITY OF NEW CASTLE, AUSTRALIA">UNIVERSITY OF NEW CASTLE, AUSTRALIA</option>
                <option value="UNIVERSITY OF NEW ENGLAND, AUSTRALIA">UNIVERSITY OF NEW ENGLAND, AUSTRALIA</option>
                <option value="UNIVERSITY OF NEW HAMPSHIRE DURHAM,USA">UNIVERSITY OF NEW HAMPSHIRE DURHAM,USA</option>
                <option value="UNIVERSITY OF NEW MEXICO ALBUQERWUE,USA">UNIVERSITY OF NEW MEXICO ALBUQERWUE,USA</option>
                <option value="UNIVERSITY OF NEW ORLEANS, LOUISIANA,USA">UNIVERSITY OF NEW ORLEANS, LOUISIANA,USA
                </option>
                <option value="UNIVERSITY OF NEW SOUTH WALES,AUSTRALIA">UNIVERSITY OF NEW SOUTH WALES,AUSTRALIA</option>
                <option value="UNIVERSITY OF NEW ZEALAND,NEW ZEALAND">UNIVERSITY OF NEW ZEALAND,NEW ZEALAND</option>
                <option value="UNIVERSITY OF NEWCASTLE UPON TYNE, U.K.">UNIVERSITY OF NEWCASTLE UPON TYNE, U.K.</option>
                <option value="UNIVERSITY OF NICE-SOPHIA ANTIPOLIS">UNIVERSITY OF NICE-SOPHIA ANTIPOLIS</option>
                <option value="UNIVERSITY OF NIIGATA, JEPUN">UNIVERSITY OF NIIGATA, JEPUN</option>
                <option value="UNIVERSITY OF NORTH LONDON">UNIVERSITY OF NORTH LONDON</option>
                <option value="UNIVERSITY OF NORTHAMPTON, UNITED KINGDOM">UNIVERSITY OF NORTHAMPTON, UNITED KINGDOM
                </option>
                <option value="UNIVERSITY OF NORTHUMBRIA AT NEWCASTLE">UNIVERSITY OF NORTHUMBRIA AT NEWCASTLE</option>
                <option value="UNIVERSITY OF NOTRE DAME INDIANA, USA">UNIVERSITY OF NOTRE DAME INDIANA, USA</option>
                <option value="UNIVERSITY OF NOTTINGHAM, UNITED KINGDOM">KOLEJ MCSUNIVERSITY OF NOTTINGHAM, UNITED
                  KINGDOM</option>
                <option value="UNIVERSITY OF NOVA SCOTIA, CANADA">UNIVERSITY OF NOVA SCOTIA, CANADA</option>
                <option value="UNIVERSITY OF OITA, JEPUN">UNIVERSITY OF OITA, JEPUN</option>
                <option value="UNIVERSITY OF OKLAHOMA, NORMAN, U.S.A.">UNIVERSITY OF OKLAHOMA, NORMAN, U.S.A.</option>
                <option value="UNIVERSITY OF OREGON, EUGENE, USA">UNIVERSITY OF OREGON, EUGENE, USA</option>
                <option value="UNIVERSITY OF OTAGO, NEW ZEALAND">UNIVERSITY OF OTAGO, NEW ZEALAND</option>
                <option value="UNIVERSITY OF OXFORD, UNITED KINGDOM">UNIVERSITY OF OXFORD, UNITED KINGDOM</option>
                <option value="UNIVERSITY OF PAISLEY">UNIVERSITY OF PAISLEY</option>
                <option value="UNIVERSITY OF PAPUA NEW GUINEA">UNIVERSITY OF PAPUA NEW GUINEA</option>
                <option value="UNIVERSITY OF PARIS (SORBONE), FRANCE">UNIVERSITY OF PARIS (SORBONE), FRANCE</option>
                <option value="UNIVERSITY OF PATNA, INDIA">UNIVERSITY OF PATNA, INDIA</option>
                <option value="UNIVERSITY OF PHILIPPINES, LOS BANOS">UNIVERSITY OF PHILIPPINES, LOS BANOS</option>
                <option value="UNIVERSITY OF PITTSBURG,PENNSYLVANIA,USA">UNIVERSITY OF PITTSBURG,PENNSYLVANIA,USA
                </option>
                <option value="UNIVERSITY OF PLYMOUTH">UNIVERSITY OF PLYMOUTH</option>
                <option value="UNIVERSITY OF POONA, INDIA">UNIVERSITY OF POONA, INDIA</option>
                <option value="UNIVERSITY OF PORTLAND, OREGON, USA">UNIVERSITY OF PORTLAND, OREGON, USA</option>
                <option value="UNIVERSITY OF PORTSMOUTH">UNIVERSITY OF PORTSMOUTH</option>
                <option value="UNIVERSITY OF PUNJAB, INDIA">UNIVERSITY OF PUNJAB, INDIA</option>
                <option value="UNIVERSITY OF QUEENSLAND, AUSTRALIA">UNIVERSITY OF QUEENSLAND, AUSTRALIA</option>
                <option value="UNIVERSITY OF RACHI, INDIA">UNIVERSITY OF RACHI, INDIA</option>
                <option value="UNIVERSITY OF RAJASTHAN, INDIA">UNIVERSITY OF RAJASTHAN, INDIA</option>
                <option value="UNIVERSITY OF RANGOON, BURMA">UNIVERSITY OF RANGOON, BURMA</option>
                <option value="UNIVERSITY OF READING,UNITED KINGDOM">UNIVERSITY OF READING,UNITED KINGDOM</option>
                <option value="UNIVERSITY OF REDLANDS CALIFORNIA,USA">UNIVERSITY OF REDLANDS CALIFORNIA,USA</option>
                <option value="UNIVERSITY OF RICHMOND, VIRGINIA, USA">UNIVERSITY OF RICHMOND, VIRGINIA, USA</option>
                <option value="UNIVERSITY OF RIYADG, SAUDI ARABIA">UNIVERSITY OF RIYADG, SAUDI ARABIA</option>
                <option value="UNIVERSITY OF ROCHESTER,NEW YORK,USA">UNIVERSITY OF ROCHESTER,NEW YORK,USA</option>
                <option value="UNIVERSITY OF ROME, ITALY">UNIVERSITY OF ROME, ITALY</option>
                <option value="UNIVERSITY OF ROORKEE, INDIA">UNIVERSITY OF ROORKEE, INDIA</option>
                <option value="UNIVERSITY OF ROUEN (UNIVERSITAIRE DE TECHNOLOGIE DE ROUEN)">UNIVERSITY OF ROUEN
                  (UNIVERSITAIRE DE TECHNOLOGIE DE ROUEN)</option>
                <option value="UNIVERSITY OF RYUKYUS, OKINAWA, JEPUN">UNIVERSITY OF RYUKYUS, OKINAWA, JEPUN</option>
                <option value="UNIVERSITY OF S. CAROLINA, COLUMBIA,USA">UNIVERSITY OF S. CAROLINA, COLUMBIA,USA</option>
                <option value="UNIVERSITY OF S.DAKOTA-SPRINGFIELD, USA">UNIVERSITY OF S.DAKOTA-SPRINGFIELD, USA</option>
                <option value="UNIVERSITY OF SALFORD, UNITED KINGDOM">UNIVERSITY OF SALFORD, UNITED KINGDOM</option>
                <option value="UNIVERSITY OF SAN DIEGO,CALIFORNIA,USA">UNIVERSITY OF SAN DIEGO,CALIFORNIA,USA</option>
                <option value="UNIVERSITY OF SAN FRANCISCO,CALIFORNIA">UNIVERSITY OF SAN FRANCISCO,CALIFORNIA</option>
                <option value="UNIVERSITY OF SANTA CLARA,CALIFORNIA,USA">UNIVERSITY OF SANTA CLARA,CALIFORNIA,USA
                </option>
                <option value="UNIVERSITY OF SASKATCHEEWAN, CANADA">UNIVERSITY OF SASKATCHEEWAN, CANADA</option>
                <option value="UNIVERSITY OF SCIENCE TEC. KUMASI,GHANA">UNIVERSITY OF SCIENCE TEC. KUMASI,GHANA</option>
                <option value="UNIVERSITY OF SCRANTON, PENNSYLVANIA,USA">UNIVERSITY OF SCRANTON, PENNSYLVANIA,USA
                </option>
                <option value="UNIVERSITY OF SHEFFIELD, UNITED KINGDOM">UNIVERSITY OF SHEFFIELD, UNITED KINGDOM</option>
                <option value="UNIVERSITY OF SOUTH ALABAMA,MOBILE, USA">UNIVERSITY OF SOUTH ALABAMA,MOBILE, USA</option>
                <option value="UNIVERSITY OF SOUTH WALES, UK">UNIVERSITY OF SOUTH WALES, UK</option>
                <option value="UNIVERSITY OF SOUTHAMPTON, UNITED KINGDOM">UNIVERSITY OF SOUTHAMPTON, UNITED KINGDOM
                </option>
                <option value="UNIVERSITY OF ST.ANDREWS, UNITED KINGDOM">UNIVERSITY OF ST.ANDREWS, UNITED KINGDOM
                </option>
                <option value="UNIVERSITY OF STIRLING, UNITED KINGDOM">UNIVERSITY OF STIRLING, UNITED KINGDOM</option>
                <option value="UNIVERSITY OF STRASBOURG, PERANCIS">UNIVERSITY OF STRASBOURG, PERANCIS</option>
                <option value="UNIVERSITY OF STRATHCLYDE, GLASGOW,U.K.">UNIVERSITY OF STRATHCLYDE, GLASGOW,U.K.</option>
                <option value="UNIVERSITY OF SUBD, PAKISTAN">UNIVERSITY OF SUBD, PAKISTAN</option>
                <option value="UNIVERSITY OF SUNDERLAND">UNIVERSITY OF SUNDERLAND</option>
                <option value="UNIVERSITY OF SURREY, UNITED KINGDOM">UNIVERSITY OF SURREY, UNITED KINGDOM</option>
                <option value="UNIVERSITY OF SUSSEX, UNITED KINGDOM">UNIVERSITY OF SUSSEX, UNITED KINGDOM</option>
                <option value="UNIVERSITY OF SYDNEY, AUSTRALIA">UNIVERSITY OF SYDNEY, AUSTRALIA</option>
                <option value="UNIVERSITY OF TAMPA. FLORIDA, USA">UNIVERSITY OF TAMPA. FLORIDA, USA</option>
                <option value="UNIVERSITY OF TANTA, MESIR">UNIVERSITY OF TANTA, MESIR</option>
                <option value="UNIVERSITY OF TASMANIA, AUSTRALIA">UNIVERSITY OF TASMANIA, AUSTRALIA</option>
                <option value="University of Technology of Compiègne, France">University of Technology of Compiègne,
                  France</option>
                <option value="UNIVERSITY OF TEESIDE">UNIVERSITY OF TEESIDE</option>
                <option value="UNIVERSITY OF TEHRAN, IRAN">UNIVERSITY OF TEHRAN, IRAN</option>
                <option value="UNIVERSITY OF TENNESSEE AT MARTIN, USA">UNIVERSITY OF TENNESSEE AT MARTIN, USA</option>
                <option value="UNIVERSITY OF TENNESSEE AT NASHVILLE,USA">UNIVERSITY OF TENNESSEE AT NASHVILLE,USA
                </option>
                <option value="UNIVERSITY OF TENNESSEE, MEMPHIS, USA">UNIVERSITY OF TENNESSEE, MEMPHIS, USA</option>
                <option value="UNIVERSITY OF TEXAS AT ARLINGTON, USA">UNIVERSITY OF TEXAS AT ARLINGTON, USA</option>
                <option value="UNIVERSITY OF TEXAS AT AUSTIN, USA">UNIVERSITY OF TEXAS AT AUSTIN, USA</option>
                <option value="UNIVERSITY OF TEXAS AT EL PASO, USA">UNIVERSITY OF TEXAS AT EL PASO, USA</option>
                <option value="UNIVERSITY OF THE DISTRICT OF COLUMBIA">UNIVERSITY OF THE DISTRICT OF COLUMBIA</option>
                <option value="UNIVERSITY OF THE WEST INDIES, MALTA">UNIVERSITY OF THE WEST INDIES, MALTA</option>
                <option value="UNIVERSITY OF THOMAS, HOUSTON, TEXAS,USA">UNIVERSITY OF THOMAS, HOUSTON, TEXAS,USA
                </option>
                <option value="UNIVERSITY OF TOKUSHIMA, JEPUN">UNIVERSITY OF TOKUSHIMA, JEPUN</option>
                <option value="UNIVERSITY OF TOKYO, JEPUN">UNIVERSITY OF TOKYO, JEPUN</option>
                <option value="UNIVERSITY OF TOLEDO,OHIO, USA">UNIVERSITY OF TOLEDO,OHIO, USA</option>
                <option value="UNIVERSITY OF TORONTO, CANADA">UNIVERSITY OF TORONTO, CANADA</option>
                <option value="UNIVERSITY OF TORRORI, JAPAN">UNIVERSITY OF TORRORI, JAPAN</option>
                <option value="UNIVERSITY OF TOUKAI, JAPAN">UNIVERSITY OF TOUKAI, JAPAN</option>
                <option value="UNIVERSITY OF TOULOUSE, FRANCE">UNIVERSITY OF TOULOUSE, FRANCE</option>
                <option value="UNIVERSITY OF TSUKUBA, JEPUN">UNIVERSITY OF TSUKUBA, JEPUN</option>
                <option value="UNIVERSITY OF TULSA, OKLAHOMA, USA">UNIVERSITY OF TULSA, OKLAHOMA, USA</option>
                <option value="UNIVERSITY OF UDAIPUR, RAJASTHAN, INDIA">UNIVERSITY OF UDAIPUR, RAJASTHAN, INDIA</option>
                <option value="UNIVERSITY OF UOWA IOWA CITY USA">UNIVERSITY OF UOWA IOWA CITY USA</option>
                <option value="UNIVERSITY OF UTAH, SALT LAKE CITY,USA">UNIVERSITY OF UTAH, SALT LAKE CITY,USA</option>
                <option value="UNIVERSITY OF UTKAL,ORISSA STATE, INDIA">UNIVERSITY OF UTKAL,ORISSA STATE, INDIA</option>
                <option value="UNIVERSITY OF VERMONT, BURLINGTON, USA">UNIVERSITY OF VERMONT, BURLINGTON, USA</option>
                <option value="UNIVERSITY OF VICTORIA, AUSTRALIA">UNIVERSITY OF VICTORIA, AUSTRALIA</option>
                <option value="UNIVERSITY OF VICTORIA, CANADA">UNIVERSITY OF VICTORIA, CANADA</option>
                <option value="UNIVERSITY OF VICTORIA, NEW ZEALAND">UNIVERSITY OF VICTORIA, NEW ZEALAND</option>
                <option value="UNIVERSITY OF WAIKATO, NEW ZEALAND">UNIVERSITY OF WAIKATO, NEW ZEALAND</option>
                <option value="UNIVERSITY OF WALES (CARDIFF),U.K.">UNIVERSITY OF WALES (CARDIFF),U.K.</option>
                <option value="UNIVERSITY OF WALES BANGOR, UK">UNIVERSITY OF WALES BANGOR, UK</option>
                <option value="UNIVERSITY OF WALES COLLEGE NEWPORT, U.K">UNIVERSITY OF WALES COLLEGE NEWPORT, U.K
                </option>
                <option value="UNIVERSITY OF WALES COLLEGE OF MEDICINE">UNIVERSITY OF WALES COLLEGE OF MEDICINE</option>
                <option value="UNIVERSITY OF WALES, ABERYSTWYTH, UK">UNIVERSITY OF WALES, ABERYSTWYTH, UK</option>
                <option value="UNIVERSITY OF WALES,INST.OF SC.&TEC.U.K.">UNIVERSITY OF WALES,INST.OF SC.&TEC.U.K.
                </option>
                <option value="UNIVERSITY OF WARWICK, UNITED KINGDOM">UNIVERSITY OF WARWICK, UNITED KINGDOM</option>
                <option value="UNIVERSITY OF WASHINGTON, SEATTLE, USA">KUNIVERSITY OF WASHINGTON, SEATTLE, USA</option>
                <option value="UNIVERSITY OF WATERLOD, CANADA">UNIVERSITY OF WATERLOD, CANADA</option>
                <option value="UNIVERSITY OF WEST FLORIDA PENSACOLA USA">UNIVERSITY OF WEST FLORIDA PENSACOLA USA
                </option>
                <option value="UNIVERSITY OF WESTERN ONTARIO, CANADA">UNIVERSITY OF WESTERN ONTARIO, CANADA</option>
                <option value="UNIVERSITY OF WESTERN PERTH">UNIVERSITY OF WESTERN PERTH</option>
                <option value="UNIVERSITY OF WESTERN SYDNEY AUSTRALIA">UNIVERSITY OF WESTERN SYDNEY AUSTRALIA</option>
                <option value="UNIVERSITY OF WESTMINSTER">UNIVERSITY OF WESTMINSTER</option>
                <option value="UNIVERSITY OF WINDSOR, CANADA">KUNIVERSITY OF WINDSOR, CANADA</option>
                <option value="UNIVERSITY OF WISCONSIN, GREEN BAY,USA">UNIVERSITY OF WISCONSIN, GREEN BAY,USA</option>
                <option value="UNIVERSITY OF WISCONSIN, LA CROSSE,USA">UNIVERSITY OF WISCONSIN, LA CROSSE,USA</option>
                <option value="UNIVERSITY OF WISCONSIN, MILWAUKEE,USA">UNIVERSITY OF WISCONSIN, MILWAUKEE,USA</option>
                <option value="UNIVERSITY OF WISCONSIN, OSHKOSH, USA">UNIVERSITY OF WISCONSIN, OSHKOSH, USA</option>
                <option value="UNIVERSITY OF WISCONSIN, STEVE POINT,USA">UNIVERSITY OF WISCONSIN, STEVE POINT,USA
                </option>
                <option value="UNIVERSITY OF WISCONSIN, SUPERIOR, USA">UNIVERSITY OF WISCONSIN, SUPERIOR, USA</option>
                <option value="UNIVERSITY OF WISCONSIN, WHITEWATER, USA">UNIVERSITY OF WISCONSIN, WHITEWATER, USA
                </option>
                <option value="UNIVERSITY OF WISCONSIN,EAU CLAIRE, USA">UNIVERSITY OF WISCONSIN,EAU CLAIRE, USA</option>
                <option value="UNIVERSITY OF WISCONSIN,MADISON, USA">UNIVERSITY OF WISCONSIN,MADISON, USA</option>
                <option value="UNIVERSITY OF WISCONSIN,PLATTEVILLE,USA">UNIVERSITY OF WISCONSIN,PLATTEVILLE,USA</option>
                <option value="UNIVERSITY OF WISCONSIN,RIVER FALLS,USA">UNIVERSITY OF WISCONSIN,RIVER FALLS,USA</option>
                <option value="UNIVERSITY OF WOLLONGONG, AUSTRALIA">UNIVERSITY OF WOLLONGONG, AUSTRALIA</option>
                <option value="UNIVERSITY OF WOLVERHAMPTON">UNIVERSITY OF WOLVERHAMPTON</option>
                <option value="UNIVERSITY OF YORK,UNITED KINGDOM">UNIVERSITY OF YORK,UNITED KINGDOM</option>
                <option value="UNIVERSITY OF ZAGAZIG, MESIR">UNIVERSITY OF ZAGAZIG, MESIR</option>
                <option value="UNIVERSITY OFCANTERBURY, NEW ZEALAND">UNIVERSITY OFCANTERBURY, NEW ZEALAND</option>
                <option value="UNIVERSITY SAGA, JEPUN">UNIVERSITY SAGA, JEPUN</option>
                <option value="UNIVERSITY TIDAK DIIKTIRAF">UNIVERSITY TIDAK DIIKTIRAF</option>
                <option value="UNIVERSITY VIRGINIA, CHARLOTTESVILLE,USA">UNIVERSITY VIRGINIA, CHARLOTTESVILLE,USA
                </option>
                <option value="UNIVERSITY WALES SWANSEA U.K">UNIVERSITY WALES SWANSEA U.K</option>
                <option value="UNIVERSITY YAMAGUCHI,JAPAN.">UNIVERSITY YAMAGUCHI,JAPAN</option>
                <option value="UNIVERSTIY OF LOUISIANA AT LAFAYETTE USA">UNIVERSTIY OF LOUISIANA AT LAFAYETTE USA
                </option>
                <option value="UNIVESITAS NEGERI YOGYAKARTA, INDONESIA">UNIVESITAS NEGERI YOGYAKARTA, INDONESIA</option>
                <option value="UNIVESITI AL- HASYIMIAH, ZERQA, JORDAN">UNIVESITI AL- HASYIMIAH, ZERQA, JORDAN</option>
                <option value="UNIVESITI FTMS DE MONFORT, MALAYSIA">UNIVESITI FTMS DE MONFORT, MALAYSIA</option>
                <option value="UPPER IOWA UNIVERSITY FAYETTE IOWA USA">UPPER IOWA UNIVERSITY FAYETTE IOWA USA</option>
                <option value="UPPSALA UNIVERSITET, SWEDEN">UPPSALA UNIVERSITET, SWEDEN</option>
                <option value="UPSALA COLLEGE EAST IRANGE N JERSEY USA">UPSALA COLLEGE EAST IRANGE N JERSEY USA</option>
                <option value="URBANA UNIVERSITY, OHIO, USA">URBANA UNIVERSITY, OHIO, USA</option>
                <option value="URSINUS COLLEGE COLLEGEVILLE, PENN.,USA">URSINUS COLLEGE COLLEGEVILLE, PENN.,USA</option>
                <option value="URSULINE COLLEGE,CLEVELAND,OHIO,USA">URSULINE COLLEGE,CLEVELAND,OHIO,USA
                <option value="UTAH STATE AGRICULTURAL COLLEGE, USA">UTAH STATE AGRICULTURAL COLLEGE, USA</option>
                <option value="UTAH STATE UNIVERSITY, LOGAN, USA">UTAH STATE UNIVERSITY, LOGAN, USA</option>
                <option value="UTSUNOMIYA UNIVERSITY, JEPUN">UTSUNOMIYA UNIVERSITY, JEPUN</option>
                <option value="UTTAR PRADESH AGRI. UNI. PANTNAGAR,INDIA">UTTAR PRADESH AGRI. UNI. PANTNAGAR,INDIA
                </option>
                <option value="VALDOSTA STATE COLLEGE GEORGIA,USA">VALDOSTA STATE COLLEGE GEORGIA,USA</option>
                <option value="VALLEY CITY STATE C.,VALLEY CITY,N.D,USA">VALLEY CITY STATE C.,VALLEY CITY,N.D,USA
                </option>
                <option value="VALPARAISO UNIVERSITY INDIANA, USA">VALPARAISO UNIVERSITY INDIANA, USA</option>
                <option value="VANDERBILT U.NASHVILLE,TENNESSEE, USA">VANDERBILT U.NASHVILLE,TENNESSEE, USA</option>
                <option value="VASSAR COLLEGE,POUGHKEEPSIE,N.YORK,USA">VASSAR COLLEGE,POUGHKEEPSIE,N.YORK,USA</option>
                <option value="VICTORIA UNIV. OF TECHNOLOGY, MELBOURNE">VICTORIA UNIV. OF TECHNOLOGY, MELBOURNE</option>
                <option value="VICTORIA UNIVERSITY OF MANCHESTER">VICTORIA UNIVERSITY OF MANCHESTER</option>
                <option value="VICTORIA UNIVERSITY OF WELLINGTON,N.Z.">VICTORIA UNIVERSITY OF WELLINGTON,N.Z.</option>
                <option value="VICTORIAN C. OF PHARMACY, MELBOURNE AUST">VICTORIAN C. OF PHARMACY, MELBOURNE AUST
                </option>
                <option value="VIENNA TECHNICAL UNIVERSITY, AUSTRIA">VIENNA TECHNICAL UNIVERSITY, AUSTRIA</option>
                <option value="VIKRAM UNIVERSITY UJJAIN, INDIA">VIKRAM UNIVERSITY UJJAIN, INDIA</option>
                <option value="VILLA MARIA C., ERIE, PENNSYLVANIA USA.">VILLA MARIA C., ERIE, PENNSYLVANIA USA.</option>
                <option value="VILLANOVA UNIVERSITY,PENNSYLVANIA, USA">VILLANOVA UNIVERSITY,PENNSYLVANIA, USA</option>
                <option value="VINAYAKA MISSIONS SANKARACHARAYAR DENTAL COLLEGE, M.G.R TAMIL NAIDU UNIVERSITY">VINAYAKA
                  MISSIONS SANKARACHARAYAR DENTAL COLLEGE, M.G.R TAMIL NAIDU UNIVERSITY</option>
                <option value="VINAYAKA MISSIONS UNIVERSITY, AARUPADAI VEEDU MEDICAL COLLEGE, PONDICHERRY">VINAYAKA
                  MISSIONS UNIVERSITY, AARUPADAI VEEDU MEDICAL COLLEGE, PONDICHERRY</option>
                <option
                  value="VINAYAKA MISSIONS UNIVERSITY, VINAYAKA MISSIONS KIRUPANANDA VARIYAR MED. COL. & HOSP. SALEM">
                  VINAYAKA MISSIONS UNIVERSITY, VINAYAKA MISSIONS KIRUPANANDA VARIYAR MED. COL. & HOSP. SALEM</option>
                <option value="VIRGINIA COMMONWEALTH UNI. RICHMOND,USA">VIRGINIA COMMONWEALTH UNI. RICHMOND,USA</option>
                <option value="VIRGINIA MILITARY INST. LEXINGTON, USA">VIRGINIA MILITARY INST. LEXINGTON, USA</option>
                <option value="VIRGINIA POLY.INST.&STATE U. BLACKSB.USA">VIRGINIA POLY.INST.&STATE U. BLACKSB.USA
                </option>
                <option value="VIRGINIA STATE U. PETERSBURG USA">VIRGINIA STATE U. PETERSBURG USA</option>
                <option value="VIRGINIA UNION UNIVERSITY, RICHMOND, USA">VIRGINIA UNION UNIVERSITY, RICHMOND, USA
                </option>
                <option value="VIRGINIA WESLEYAN COLLEGE, NORFOLK, USA">VIRGINIA WESLEYAN COLLEGE, NORFOLK, USA</option>
                <option value="VIRGINIASTATE COLLEGE, PETERSBURG,USA">VIRGINIASTATE COLLEGE, PETERSBURG,USA</option>
                <option value="VITERBO COLLEGE LA CROSSE, WISCONSIN,USA">VITERBO COLLEGE LA CROSSE, WISCONSIN,USA
                </option>
                <option value="VOLGOGRAD STATE MEDICAL ACADEMY">VOLGOGRAD STATE MEDICAL ACADEMY</option>
                <option value="VOORHEES COL. DENMARK,SOUTH CAROLINA,USA">VOORHEES COL. DENMARK,SOUTH CAROLINA,USA
                </option>
                <option value="W. STATE COL. OF COLORADO GUNNISON, USA">W. STATE COL. OF COLORADO GUNNISON, USA</option>
                <option value="W.CAROLINA UNI.CULLOWHEE,N.CAROLINA,USA">W.CAROLINA UNI.CULLOWHEE,N.CAROLINA,USA</option>
                <option value="WABASH COL. CRAWFORDSVILLE INDIANA, USA">WABASH COL. CRAWFORDSVILLE INDIANA, USA</option>
                <option value="WAGNER COLLEGE,STATEN ISLAND,N.YORK,USA">WAGNER COLLEGE,STATEN ISLAND,N.YORK,USA</option>
                <option value="WAKAYAMA NATIONAL COLLEGE OF TECHNOLOGY">WAKAYAMA NATIONAL COLLEGE OF TECHNOLOGY</option>
                <option value="WAKAYAMA NATIONAL COLLEGE OF TECHNOLOGY">WAKAYAMA NATIONAL COLLEGE OF TECHNOLOGY</option>
                <option value="WAKE FOREST UNI. WINSTON-SALEM,N.C.,USA">WAKE FOREST UNI. WINSTON-SALEM,N.C.,USA</option>
                <option value="WALLA WALLA COLL.,COLL.PLACE,WASH,USA">WALLA WALLA COLL.,COLL.PLACE,WASH,USA</option>
                <option value="WALSH C.OF ACC. & BUSS,ADMIN. TROY, MICH">WALSH C.OF ACC. & BUSS,ADMIN. TROY, MICH
                </option>
                <option value="WALSH COLLEGE, CANTON, OHIO, USA">WALSH COLLEGE, CANTON, OHIO, USA</option>
                <option value="WANGANUI REGIONAL COMMUNITY POLYTECHNIC">WANGANUI REGIONAL COMMUNITY POLYTECHNICCS
                </option>
                <option value="WARNER PACIFIC COL. PORTLAND, OREGON,USA">WARNER PACIFIC COL. PORTLAND,
                  OREGON,USA/option>
                <option value="WARREN WILSON COLLEGE,SWANNANDA,N.O.,USA">WARREN WILSON COLLEGE,SWANNANDA,N.O.,USA
                </option>
                <option value="WARSAW UNIVERSITY OF LIFE SCIENCES, POLAND">WARSAW UNIVERSITY OF LIFE SCIENCES, POLAND
                </option>
                <option value="WARTBURG LOLLEGE WAVERLY IOWA USA">WARTBURG LOLLEGE WAVERLY IOWA USA</option>
                <option value="WARWICKSHIRE COL. ROYAL LEAMINGTON SPA">WARWICKSHIRE COL. ROYAL LEAMINGTON SPA</option>
                <option value="WASEDA UNIVERSITY TOKYO, JAPAN">WASEDA UNIVERSITY TOKYO, JAPAN</option>
                <option value="WASGINGTON & LEE UNIVERSITY LEXINGTON,US">WASGINGTON & LEE UNIVERSITY LEXINGTON,US
                </option>
                <option value="WASHBURN UNI. OF TOPEKA, KANSAS, USA">WASHBURN UNI. OF TOPEKA, KANSAS, USA</option>
                <option value="WASHINGTON & JEFFERSON COLLEGE PENN.,USA">WASHINGTON & JEFFERSON COLLEGE PENN.,USA
                </option>
                <option value="WASHINGTON COL. CHESTERTOWN,MARYLAND,USA">WASHINGTON COL. CHESTERTOWN,MARYLAND,USA
                </option>
                <option value="WASHINGTON ST. LOUIS MISSOURI, USA">WASHINGTON ST. LOUIS MISSOURI, USA</option>
                <option value="WASHINGTON STATE UNIVERSITY,PULLMAN USA">WASHINGTON STATE UNIVERSITY,PULLMAN USA</option>
                <option value="WATROFD COLLEGE OF TECHNICAL,HERTS,UK.">WATROFD COLLEGE OF TECHNICAL,HERTS,UK.</option>
                <option value="WAYLAND BAPTIST C. PLAINVIEW, TEXAS, USA">WAYLAND BAPTIST C. PLAINVIEW, TEXAS, USA
                </option>
                <option value="WAYNE COLLEGE WAYNE NEBRASKA, USA">WAYNE COLLEGE WAYNE NEBRASKA, USA</option>
                <option value="WAYNE STATE UNI. DETROIT MICH., USA">WAYNE STATE UNI. DETROIT MICH., USA</option>
                <option value="WAYNSBURG COLLEGE, WAYNESBURG,PA.,USA">WAYNSBURG COLLEGE, WAYNESBURG,PA.,USA</option>
                <option value="WEBB INST.OF NAV.ARCHI.GLEN COVE,N.YORK">WEBB INST.OF NAV.ARCHI.GLEN COVE,N.YORKS
                </option>
                <option value="WEBER STATE COLLEGE, OGDEN, UTAH, USA">WEBER STATE COLLEGE, OGDEN, UTAH, USA</option>
                <option value="WELLESLEY COLLEGE, MASSACHUSETTS, USA">WELLESLEY COLLEGE, MASSACHUSETTS, USA</option>
                <option value="WELLS COLLEGE,AURORA, NEW YORK, USA">WELLS COLLEGE,AURORA, NEW YORK, USA</option>
                <option value="WENTWORTH INST. OF TEC.,BOSTON,MASS.,USA">WENTWORTH INST. OF TEC.,BOSTON,MASS.,USA
                </option>
                <option value="WESFIELD STATE COLLEGE, MASS., USA">WESFIELD STATE COLLEGE, MASS., USA</option>
                <option value="WESLEYAN COLLEGE MACON GEORGIA,USA">WESLEYAN COLLEGE MACON GEORGIA,USA</option>
                <option value="WESLEYAN UNI. MIDDLETOWN CONNEC., USA">WESLEYAN UNI. MIDDLETOWN CONNEC., USA</option>
                <option value="WEST CHESTER STATE COL. PENNSYLVANIA,USA">WEST CHESTER STATE COL. PENNSYLVANIA,USA
                </option>
                <option value="WEST COAST UNI.,L.ANGELES CALIFORNIA,USA">WEST COAST UNI.,L.ANGELES CALIFORNIA,USA
                </option>
                <option value="WEST GEORGIA COL. CARROLLTON GEORGIA,USA">WEST GEORGIA COL. CARROLLTON GEORGIA,USA
                </option>
                <option value="WEST LIBERTY STATE COL. WEST VIRGIN.,USA">WEST LIBERTY STATE COL. WEST VIRGIN.,USA
                </option>
                <option value="WEST MINISTER CHOIR C PRINCETON N J USA">WEST MINISTER CHOIR C PRINCETON N J USA</option>
                <option value="WEST PAKISTAN AGRI.U.LYALLPUR,PAKISTAN">WEST PAKISTAN AGRI.U.LYALLPUR,PAKISTAN</option>
                <option value="WEST SURREY COLLEGE OF ART&DESIGN,U.K.">WEST SURREY COLLEGE OF ART&DESIGN,U.K.</option>
                <option value="WEST TEXAS STATE UNI. CANYON, TEXAS,USA">WEST TEXAS STATE UNI. CANYON, TEXAS,USA</option>
                <option value="WEST VIRG. COL.OF GRADUATE STUD. INST,US">WEST VIRG. COL.OF GRADUATE STUD. INST,US
                </option>
                <option value="WEST VIRGINIA OF TEC. MONTOGOMERY, USA">WEST VIRGINIA OF TEC. MONTOGOMERY, USA</option>
                <option value="WEST VIRGINIA STATE COL. INSTITUTE, USA">WEST VIRGINIA STATE COL. INSTITUTE, USA</option>
                <option value="WEST VIRGINIA UNI., MORGANTOWN, USA">WEST VIRGINIA UNI., MORGANTOWN, USA</option>
                <option value="WEST VIRGINIA WESLEYAN C.BUCKHANNON, USA">WEST VIRGINIA WESLEYAN C.BUCKHANNON, USA
                </option>
                <option value="WESTBROOK COLLEGE PORTLAND,MAINE, USA">WESTBROOK COLLEGE PORTLAND,MAINE, USA</option>
                <option value="WESTERN AUST. INST. OF TEC. PERTH,AUST.">WESTERN AUST. INST. OF TEC. PERTH,AUST.</option>
                <option value="WESTERN AUSTRALIAN COLL. OF ADVANCED EDU">WESTERN AUSTRALIAN COLL. OF ADVANCED EDU
                </option>
                <option value="WESTERN BAPTIST COL. SALEM,OREGON,USA">WESTERN BAPTIST COL. SALEM,OREGON,USA</option>
                <option value="WESTERN CONNEC. STATE COL. DANBURY, USA">WESTERN CONNEC. STATE COL. DANBURY, USA</option>
                <option value="WESTERN ILLINOIS UNI. MACOMB,USA">WESTERN ILLINOIS UNI. MACOMB,USA</option>
                <option value="WESTERN KENTUCKY UNI. BOWLING GREEN, USA">WESTERN KENTUCKY UNI. BOWLING GREEN, USA
                </option>
                <option value="WESTERN MARYLAND COL., WESTMINISTER, USA">WESTERN MARYLAND COL., WESTMINISTER, USA
                </option>
                <option value="WESTERN MICH. UNI. KALAMAZOO, MICH., USA">WESTERN MICH. UNI. KALAMAZOO, MICH., USA
                </option>
                <option value="WESTERN MONTANA COL. DILLON,MONTANA,USA">WESTERN MONTANA COL. DILLON,MONTANA,USA</option>
                <option value="WESTERN N. ENG. COL., SPRINGFIELD, USA">WESTERN N. ENG. COL., SPRINGFIELD, USA</option>
                <option value="WESTERN NEW MEXICO U SILVER CITY USA">WESTERN NEW MEXICO U SILVER CITY USA</option>
                <option value="WESTERN WASHINGTON STATE U.BELLIGHAM, US">WESTERN WASHINGTON STATE U.BELLIGHAM, US
                </option>
                <option value="WESTMAR COLLEGE LE MARS IOWA USA">WESTMAR COLLEGE LE MARS IOWA USA</option>
                <option value="WESTMINISTER COL.,NEW WILMINGTON,PA.,USA">WESTMINISTER COL.,NEW WILMINGTON,PA.,USA
                </option>
                <option value="WESTMINTER COL. SALT LAKE CITY, UTAH,USA">WESTMINTER COL. SALT LAKE CITY, UTAH,USA
                </option>
                <option value="WESTMONT COL.,SANTA BARBARA,CALIF.,USA">KOLEJ MCSWESTMONT COL.,SANTA BARBARA,CALIF.,USA
                </option>
                <option value="WHEATON COLLEGE ILLINOIS,USA">WHEATON COLLEGE ILLINOIS,USA</option>
                <option value="WHEATON COLLEGE, NORTON, MASS., USA">WHEATON COLLEGE, NORTON, MASS., USA</option>
                <option value="WHEELING COLLEGE, WEST VIRGINIA,USA">WHEELING COLLEGE, WEST VIRGINIA,USA</option>
                <option value="WHEELOCK COLLEGE, BOSTON, MASS., USA">WHEELOCK COLLEGE, BOSTON, MASS., USA</option>
                <option value="WHITMAN COLL.,WALLA WALLA,WASHING.USA">WHITMAN COLL.,WALLA WALLA,WASHING.USA</option>
                <option value="WHITTIER COLLEGE,CALIFORNIA, USA">WHITTIER COLLEGE,CALIFORNIA, USA</option>
                <option value="WHITWORTH COLLEGE, SPOKANE,WASHING.,USA">WHITWORTH COLLEGE, SPOKANE,WASHING.,USA</option>
                <option value="WICHITA STATE UNIVERSITY, KANSAN, USA">WICHITA STATE UNIVERSITY, KANSAN, USA</option>
                <option value="WIDENER COL. CHESTER, PENNSYLVANIA, USA">WIDENER COL. CHESTER, PENNSYLVANIA, USA</option>
                <option value="WILBERFORCE UNIVERSITY, OHIO, USA">KWILBERFORCE UNIVERSITY, OHIO, USA</option>
                <option value="WILEY COLLEGE MARSHALL, TEXAS, USA">WILEY COLLEGE MARSHALL, TEXAS, USA</option>
                <option value="WILFRID LAURIER U.WATERLOO,ONTARIO,CAN.">WILFRID LAURIER U.WATERLOO,ONTARIO,CAN.</option>
                <option value="WILIAM PATERSON COLLEGE WAYNE NJ USA">WILIAM PATERSON COLLEGE WAYNE NJ USA</option>
                <option value="WILIAMETTE UNIVERSITY SALEM, OREGON, USA">WILIAMETTE UNIVERSITY SALEM, OREGON, USA
                </option>
                <option value="WILKES COL.WILKES BARRG,PENNSYLVANIA,USA">WILKES COL.WILKES BARRG,PENNSYLVANIA,USA
                </option>
                <option value="WILLESDEN COLLEGE OF TECHNOLOGY,U.K.">WILLESDEN COLLEGE OF TECHNOLOGY,U.K.</option>
                <option value="WILLIAM CAREY COL. HATTIESBURG MISS.,USA">WILLIAM CAREY COL. HATTIESBURG MISS.,USA
                </option>
                <option value="WILLIAM COLLEGE WILLIAMSTOWN MASS., USA">WILLIAM COLLEGE WILLIAMSTOWN MASS., USA</option>
                <option value="WILLIAM PENN COL. OSKALOOSA IOWA, USA">WILLIAM PENN COL. OSKALOOSA IOWA, USA</option>
                <option value="WILLIAM WOODS COL. FULTON MISSOURI, USA">WILLIAM WOODS COL. FULTON MISSOURI, USA</option>
                <option value="WILLMINGTON COL. NEW CASTLE DELAWARE,USA">WILLMINGTON COL. NEW CASTLE DELAWARE,USA
                </option>
                <option value="WILMINGTON COLLEGE, OHIO, USA">WILMINGTON COLLEGE, OHIO, USA</option>
                <option value="WILSON COL.CHAMBERSBURG,PENNSYLVANIA,USA">WILSON COL.CHAMBERSBURG,PENNSYLVANIA,USA
                </option>
                <option value="WIMBLEDON SCHOOL OF ART, UNITED KINGDOM">WIMBLEDON SCHOOL OF ART, UNITED KINGDOM</option>
                <option value="WINCHESTER SCHOOL OF ART, UNITED KINGDOM">WINCHESTER SCHOOL OF ART, UNITED KINGDOM
                </option>
                <option value="WINDHAM COLLEGE, PUTNEY, VERMONT, USA">WINDHAM COLLEGE, PUTNEY, VERMONT, USA</option>
                <option value="WINGAN AND LEIGH COLLEGE, UNITED KINGDOM">WINGAN AND LEIGH COLLEGE, UNITED KINGDOM
                </option>
                <option value="WINONA STATE UNIVERSITY MINNESOTA, USA">WINONA STATE UNIVERSITY MINNESOTA, USA</option>
                <option value="WINTHROP COL. ROCK HILL, S.CAROLINA, USA">WINTHROP COL. ROCK HILL, S.CAROLINA, USA
                </option>
                <option value="WISTON-SALEM STATE UNI., N. CAROLINA,USA">WISTON-SALEM STATE UNI., N. CAROLINA,USA
                </option>
                <option value="WITTERNBERG UNI. SPRINGFIELD,OHIO,USA">WITTERNBERG UNI. SPRINGFIELD,OHIO,USA</option>
                <option value="WOFFORD COL. SPARATANBURG,S.CAROLINA,USA">WOFFORD COL. SPARATANBURG,S.CAROLINA,USA
                </option>
                <option value="WOLVERHAMPTON COLLEGE OF TECHNOLOGY,UK">WOLVERHAMPTON COLLEGE OF TECHNOLOGY,UK</option>
                <option value="WOMAN'S MED.COL. OF PENNSYLVANIA,PHIL.">WOMAN'S MED.COL. OF PENNSYLVANIA,PHIL.</option>
                <option value="WOOBURY COLLEGE,L.A. CALIFORNIA,USA">WOOBURY COLLEGE,L.A. CALIFORNIA,USA</option>
                <option value="WOODSTOK COLLEGE, NEW YORK, USA">WOODSTOK COLLEGE, NEW YORK, USA</option>
                <option value="WORCESTER POLYTECHNIC INST., MASS.,USA">WORCESTER POLYTECHNIC INST., MASS.,USA</option>
                <option value="WORCESTER STATE COLLEGE WORCESTER, USA">WORCESTER STATE COLLEGE WORCESTER, USA</option>
                <option value="WRIGHT STATE UNI.WESTERN OHIO CELINA,USA">WRIGHT STATE UNI.WESTERN OHIO CELINA,USA
                </option>
                <option value="WRIGHT STATE UNIVERSITY,DAYTON,OHIO,USA">WRIGHT STATE UNIVERSITY,DAYTON,OHIO,USA</option>
                <option value="WYE COLLEGE, UNITED KINGDOM">WYE COLLEGE, UNITED KINGDOM</option>
                <option value="XAVIER UNI. OF LOUISIANA NEW ORLEANS,USA">XAVIER UNI. OF LOUISIANA NEW ORLEANS,USA
                </option>
                <option value="XAVIER UNIVERSITY, CINCINNATI,OHIO,USA">XAVIER UNIVERSITY, CINCINNATI,OHIO,USA</option>
                <option value="YALE UNI. NEW HAVEN CONNECTICUT,USA">YALE UNI. NEW HAVEN CONNECTICUT,USA</option>
                <option value="YALE UNI. SCH. OF MED. NEW HAVEN CONNEC.">YALE UNI. SCH. OF MED. NEW HAVEN CONNEC.
                </option>
                <option value="YAMAGATA UNIVERSITY, JAPAN">YAMAGATA UNIVERSITY, JAPAN</option>
                <option value="YAMANASHI UNIVERSITY, JAPAN">YAMANASHI UNIVERSITY, JAPAN</option>
                <option value="YANKTON COLLEGE, SOUTH DAKOTA, USA">YANKTON COLLEGE, SOUTH DAKOTA, USA</option>
                <option value="YARMOUK UNIVERSITY, JORDAN">YARMOUK UNIVERSITY, JORDAN</option>
                <option value="YATSUSHIRO NAT. C.OF.TECH. KUMAMOTO JAP.">YATSUSHIRO NAT. C.OF.TECH. KUMAMOTO JAP.
                </option>
                <option value="YENEPOYA DENTAL COLLEGE, MANGALORE">YENEPOYA DENTAL COLLEGE, MANGALORE</option>
                <option value="YENEPOYA MEDICAL COLLEGE, MANGALORE, KARNATAKA">YENEPOYA MEDICAL COLLEGE, MANGALORE,
                  KARNATAKA</option>
                <option value="YESHIVA UNIVERSITY,NEWYORK, USA">YESHIVA UNIVERSITY,NEWYORK, USA</option>
                <option value="YOKOHAMA NATIONAL UNIVERSITY, JEPUN">YOKOHAMA NATIONAL UNIVERSITY, JEPUN</option>
                <option value="YOMIURI TOKYO INST OF ENGINEERING, TOKY0">YOMIURI TOKYO INST OF ENGINEERING, TOKY0
                </option>
                <option value="YONAGO NATIONAL COLLAGE OF TECH. , JAPAN">YONAGO NATIONAL COLLAGE OF TECH. , JAPAN
                </option>
                <option value="YONSEI UNIVERSITY, SEOUL, SOUTH KOREA">YONSEI UNIVERSITY, SEOUL, SOUTH KOREA</option>
                <option value="YORK COL. OF PENN. CTRY, CLUB RD YORK">YORK COL. OF PENN. CTRY, CLUB RD YORK</option>
                <option value="YORK ST JOHN UNIVERSITY, UNITED KINGDOM">YORK ST JOHN UNIVERSITY, UNITED KINGDOM</option>
                <option value="YORK UNIVERSITY NEW YORK,ONTARIO, CANADA">YORK UNIVERSITY NEW YORK,ONTARIO, CANADA
                </option>
                <option value="YORK UNIVERSITY TORONTO, CANADA">YORK UNIVERSITY TORONTO, CANADA</option>
                <option value="YOUNGSTOWN STATE UNIVERSITY, OHIO, USA">YOUNGSTOWN STATE UNIVERSITY, OHIO, USA</option>
                <option value="YUGE NATINOAL COLLAGE OF MARITIME TECH.">YUGE NATINOAL COLLAGE OF MARITIME TECH.</option>
                <option value="YUGE NATIONAL COLLEGE OF TECHNOLOGY">YUGE NATIONAL COLLEGE OF TECHNOLOGY</option>
                <option value="ZURICH U. OF TECHINICAL SC., SWITZERLAND">ZURICH U. OF TECHINICAL SC., SWITZERLAND
                </option>
              </select><br>

              No. Ahli / Sijil:
              <input type="number" class="form-control" style="text-transform: uppercase" id="no_sijil">
              <br />
            </div>
            <div class="col-md-6">


              Kemahiran / Sijil Peroleh:
              <select name="kemahiran" id="kemahiran" class="form-control">
                <option value="" selected disabled>--Sila Pilih--</option>
                <option value="2 ND CLS ENG (MOTOSHIP) CERTIFICATE OF COMPETENCY">2 ND CLS ENG (MOTOSHIP) CERTIFICATE OF
                  COMPETENCY</option>
                <option value="2 ND CLS FOREIGN GOING CERT OF COMPETENCE UK">2 ND CLS FOREIGN GOING CERT OF COMPETENCE
                  UK</option>
                <option value="2 ND CLS M/FOREIGN GOING SHIP CERT OF COMPETENCE">2 ND CLS M/FOREIGN GOING SHIP CERT OF
                  COMPETENCE</option>
                <option value="2 ND CLS PT A & B CERT OF COMPETENCE IN MARINE">2 ND CLS PT A & B CERT OF COMPETENCE IN
                  MARINE</option>
                <option value="2 ND MATE CLS I STEAMSHIP CERT OF COMPETENCE">2 ND MATE CLS I STEAMSHIP CERT OF
                  COMPETENCE</option>
                <option value="2ND CLS CERT OF COMPETENCE IN MARINE ENGINEERING">2ND CLS CERT OF COMPETENCE IN MARINE
                  ENGINEERING</option>
                <option value="2ND CLS M/FOREIGN GOING SHIP CERT. OF COMP. CLASS3">2ND CLS M/FOREIGN GOING SHIP CERT. OF
                  COMP. CLASS3</option>
                <option value="AHLI ASSOCIATION OF CHARTERED CERTIFIED ACCOUNTANTS UK">AHLI ASSOCIATION OF CHARTERED
                  CERTIFIED ACCOUNTANTS UK</option>
                <option value="AHLI AUSTRALIAN SOCIETY OF CERTIFIED PRACTISING ACCOUNTANTS">AHLI AUSTRALIAN SOCIETY OF
                  CERTIFIED PRACTISING ACCOUNTANTS</option>
                <option value="AHLI CANADIAN INSTITUTE OF CHARTERED ACCOUNTANTS">AHLI CANADIAN INSTITUTE OF CHARTERED
                  ACCOUNTANTS</option>
                <option value="AHLI INST OF CHARTERED ACCNT IN ENGLAND & WALES UK">AHLI INST OF CHARTERED ACCNT IN
                  ENGLAND & WALES UK</option>
                <option value="AHLI INST OF CHARTERED ACCOUNTANTS IN AUSTRALIA">AHLI INST OF CHARTERED ACCOUNTANTS IN
                  AUSTRALIA</option>
                <option value="AHLI INST OF MECH ELECT CIVIL MARINE ENG M'SIA">AHLI INST OF MECH ELECT CIVIL MARINE ENG
                  M'SIA</option>
                <option value="AHLI INSTITUTE OF CHARTERED ACCNT IN IRELAND UK">AHLI INSTITUTE OF CHARTERED ACCNT IN
                  IRELAND UK</option>
                <option value="AHLI INSTITUTE OF CHARTERED ACCNT IN SCOTLAND UK">AHLI INSTITUTE OF CHARTERED ACCNT IN
                  SCOTLAND UK</option>
                <option value="AHLI INSTITUTE OF COSTS MANAGEMENT ACCOUNTS UK">AHLI INSTITUTE OF COSTS MANAGEMENT
                  ACCOUNTS UK</option>
                <option value="AHLI INSTITUTE OF SURVEYORS MALAYSIA (G.P.S.V)">AHLI INSTITUTE OF SURVEYORS MALAYSIA
                  (G.P.S.V)</option>
                <option value="AHLI INSTITUTION OF SURVEYORS MALAYSIA">AHLI INSTITUTION OF SURVEYORS MALAYSIA</option>
                <option value="AHLI LEMBAGA ARKITEK MALAYSIA">AHLI LEMBAGA ARKITEK MALAYSIA</option>
                <option value="AHLI LEMBAGA FARMASI MALAYSIA">AHLI LEMBAGA FARMASI MALAYSIA</option>
                <option value="AHLI LEMBAGA JURUTERA MALAYSIA">AHLI LEMBAGA JURUTERA MALAYSIA</option>
                <option value="AHLI MALAYSIA INSTITUTE OF ACCOUNTANTS">AHLI MALAYSIA INSTITUTE OF ACCOUNTANTS</option>
                <option value="AHLI MALAYSIAN ASSN OF CERTIFIED PUB ACCOUNTANTS">AHLI MALAYSIAN ASSN OF CERTIFIED PUB
                  ACCOUNTANTS</option>
                <option value="AHLI MUTLAK INSTITUTE OF ENGINEERS MALAYSIA">AHLI MUTLAK INSTITUTE OF ENGINEERS MALAYSIA
                </option>
                <option value="AHLI NEW ZEALAND SOCIETY OF ACCOUNTANTS">AHLI NEW ZEALAND SOCIETY OF ACCOUNTANTS</option>
                <option value="AHLI PAKISTAN INSTITUTE OF CHARTERED ACCOUNTANTS">AHLI PAKISTAN INSTITUTE OF CHARTERED
                  ACCOUNTANTS</option>
                <option value="AHLI PAKISTAN INSTITUTE OF INDUSTRIAL ACCOUNTANTS">AHLI PAKISTAN INSTITUTE OF INDUSTRIAL
                  ACCOUNTANTS</option>
                <option value="AHLI ROYAL INSTITUTE NAVAL ARCHITECTS UK">AHLI ROYAL INSTITUTE NAVAL ARCHITECTS UK
                </option>
                <option value="AHLI ROYAL INSTITUTION OF SURVEYORS MALAYSIA">AHLI ROYAL INSTITUTION OF SURVEYORS
                  MALAYSIA</option>
                <option value="AIRLINE TRANSPORT PILOT LICENCE">AIRLINE TRANSPORT PILOT LICENCE</option>
                <option value="ANAK DIPLOMAT MALAYSIA">ANAK DIPLOMAT MALAYSIA</option>
                <option value="ASS/S INSTITUTE OF STATISTICIAN LONDON">ASS/S INSTITUTE OF STATISTICIAN LONDON</option>
                <option value="ASS/S OF CHARTERED INSURANCE INSTITUTE UK">ASS/S OF CHARTERED INSURANCE INSTITUTE UK
                </option>
                <option value="ASSOC DIP IN ARCHI QUEENSLAND INST OF TECH AUST">ASSOC DIP IN ARCHI QUEENSLAND INST OF
                  TECH AUST</option>
                <option value="ASSOC DIP LIB ROYAL MELBOURNE INST TECH AUSTRALIA">ASSOC DIP LIB ROYAL MELBOURNE INST
                  TECH AUSTRALIA</option>
                <option value="ASSOC DIP Q.S. MELBOURNE INST TECHNOLOGY AUSTRALIA">ASSOC DIP Q.S. MELBOURNE INST
                  TECHNOLOGY AUSTRALIA</option>
                <option value="ASSOC LIBRARY ASSN CITY OF BERMINGHAM POLY UK">ASSOC LIBRARY ASSN CITY OF BERMINGHAM POLY
                  UK</option>
                <option value="ASSOC LIBRARY STUDIES W AUSTRALIA INST TECHNOLOGY">ASSOC LIBRARY STUDIES W AUSTRALIA INST
                  TECHNOLOGY</option>
                <option value="ASSOC MEM OF THE CHARTERED INST OF TRANSPORT UK">ASSOC MEM OF THE CHARTERED INST OF
                  TRANSPORT UK</option>
                <option value="ASSOC MEM ROYAL INST OF CHARTERED SURVEYORS UK">ASSOC MEM ROYAL INST OF CHARTERED
                  SURVEYORS UK</option>
                <option value="ASSOC MEMBERS AUST INSTITUTE OF QUANTITY SURVEYORS">ASSOC MEMBERS AUST INSTITUTE OF
                  QUANTITY SURVEYORS</option>
                <option value="ASSOC MEMBERS INST OF QUANTITY SURVEYORS LONDON">ASSOC MEMBERS INST OF QUANTITY SURVEYORS
                  LONDON</option>
                <option value="ASSOCIATE LIB ASSN NEW CASTLE UPON TYNE POLY UK">ASSOCIATE LIB ASSN NEW CASTLE UPON TYNE
                  POLY UK</option>
                <option value="ASSOCIATE LIB ASSN ROBERT GORDON'S INST TECH UK">ASSOCIATE LIB ASSN ROBERT GORDON'S INST
                  TECH UK</option>
                <option value="ASSOCIATE LIBRARY ASSN BRIGHTON POLYTECHNIC UK">ASSOCIATE LIBRARY ASSN BRIGHTON
                  POLYTECHNIC UK</option>
                <option value="ASSOCIATE LIBRARY ASSN EALING TECHNICAL COLLEGE UK">ASSOCIATE LIBRARY ASSN EALING
                  TECHNICAL COLLEGE UK</option>
                <option value="ASSOCIATE LIBRARY ASSN MANCHESTER POLY UK">ASSOCIATE LIBRARY ASSN MANCHESTER POLY UK
                </option>
                <option value="ASSOCIATE LIBRARY ASSN POLY OF NORTH LONDON UK">ASSOCIATE LIBRARY ASSN POLY OF NORTH
                  LONDON UK</option>
                <option value="ASSOCIATE MEMBER OF CPA AUSTRALIA">ASSOCIATE MEMBER OF CPA AUSTRALIA</option>
                <option value="ASSOCIATE MEMBERS INST OF PUBLIC RELATION M'SIA">ASSOCIATE MEMBERS INST OF PUBLIC
                  RELATION M'SIA</option>
                <option value="ASSOCIATE MEMBERS OF INST OF COOP AUDITORS, M'SIA">ASSOCIATE MEMBERS OF INST OF COOP
                  AUDITORS, M'SIA</option>
                <option value="ASSOCIATE OF THE LIBRARY ASSOCIATION UK">ASSOCIATE OF THE LIBRARY ASSOCIATION UK</option>
                <option value="ASSOCIATE/S INSTITUTE OF CREDIT MANAGEMENT UK">ASSOCIATE/S INSTITUTE OF CREDIT MANAGEMENT
                  UK</option>
                <option value="ASSOCIATESHIP INSTITUTE OF ACTUARIES OF AUSTRALIA">ASSOCIATESHIP INSTITUTE OF ACTUARIES
                  OF AUSTRALIA</option>
                <option value="ASSOCIATESHIP INSTITUTE OF ACTUARY UK">ASSOCIATESHIP INSTITUTE OF ACTUARY UK</option>
                <option value="ASSOCIATION OF BUSINESS EXECUTIVES (ABE)">ASSOCIATION OF BUSINESS EXECUTIVES (ABE)
                </option>
                <option value="ASST OF INST OF CHRTD SEC & ADMINISTRATOR UK">ASST OF INST OF CHRTD SEC & ADMINISTRATOR
                  UK</option>
                <option value="B SCIENCE DIPLOMA IN Q.S. LEEDS POLYTECHNIC">B SCIENCE DIPLOMA IN Q.S. LEEDS POLYTECHNIC
                </option>
                <option value="BAHASA CINA SPM/STPM - TAMBAHAN">BAHASA CINA SPM/STPM - TAMBAHAN</option>
                <option value="BAHASA MELAYU S.A.P. SINGAPORE">BAHASA MELAYU S.A.P. SINGAPORE</option>
                <option value="BARRISTER AT LAW GRAY'S INN UK">BARRISTER AT LAW GRAY'S INN UK</option>
                <option value="BARRISTER AT LAW INNER TEMPLE UK">BARRISTER AT LAW INNER TEMPLE UK</option>
                <option value="BARRISTER AT LAW KINGS INNS UK">BARRISTER AT LAW KINGS INNS UK</option>
                <option value="BARRISTER AT LAW LINCOLN'S INN UK">BARRISTER AT LAW LINCOLN'S INN UK</option>
                <option value="BARRISTER AT LAW MIDDLE TEMPLE UK">BARRISTER AT LAW MIDDLE TEMPLE UK</option>
                <option value="BERBAKAT/KEBOLEHAN DI BDG SENIFOTO & KAMERA FOTO">BERBAKAT/KEBOLEHAN DI BDG SENIFOTO &
                  KAMERA FOTO</option>
                <option value="BERBAKAT/KEBOLEHAN DI BDG SENIFOTO & SENI LUKIS">BERBAKAT/KEBOLEHAN DI BDG SENIFOTO &
                  SENI LUKIS</option>
                <option value="BERDAFTAR DENGAN LEMBAGA BIDAN MALAYSIA">BERDAFTAR DENGAN LEMBAGA BIDAN MALAYSIA</option>
                <option
                  value="BERDAFTAR DENGAN LEMBAGA PEM PERUBATAN MALAYSIABERDAFTAR DENGAN LEMBAGA PEM PERUBATAN MALAYSIA">
                  BERDAFTAR DENGAN LEMBAGA PEM PERUBATAN MALAYSIA</option>
                <option value="BERDAFTAR DENGAN LEMBAGA TEKNOLOGIS MALAYSIA">BERDAFTAR DENGAN LEMBAGA TEKNOLOGIS
                  MALAYSIABERDAFTAR DENGAN MAJLIS PERUBATAN MALAYSIA</option>
                <option value="BERDAFTAR DENGAN MAJLIS PERUBATAN MALAYSIA">BERDAFTAR DENGAN MAJLIS PERUBATAN
                  MALAYSIABERDAFTAR DENGAN MALAYSIA NURSING BOARD</option>
                <option value="BERDAFTAR DENGAN MALAYSIA NURSING BOARD">BERDAFTAR DENGAN MALAYSIA NURSING BOARD</option>
                <option
                  value="BERDAFTAR DENGAN NURSING BOARD FEDERAL OF MALAYABERDAFTAR DENGAN NURSING BOARD FEDERAL OF MALAYA">
                  BERDAFTAR DENGAN NURSING BOARD FEDERAL OF MALAYA</option>
                <option value="BERDAFTAR SEMENTARA DGN MAJLIS PERGIGIAN MALAYSIA">BERDAFTAR SEMENTARA DGN MAJLIS
                  PERGIGIAN MALAYSIA</option>
                <option
                  value="BERDAFTAR SEMENTARA DGN MAJLIS PERUBATAN MALAYSIABERDAFTAR SEMENTARA DGN MAJLIS PERUBATAN MALAYSIA">
                  BERDAFTAR SEMENTARA DGN MAJLIS PERUBATAN MALAYSIA</option>
                <option value="BERKEBOLEHAN MENGAMBIL TRENGKAS">BERKEBOLEHAN MENGAMBIL TRENGKAS</option>
                <option value="BERKEBOLEHAN MENGENDALIKAN KOMPUTERBERKEBOLEHAN MENGENDALIKAN KOMPUTER">BERKEBOLEHAN
                  MENGENDALIKAN KOMPUTER</option>
                <option value="BERRDAFTAR DENGAN MAJLIS PERGIGIAN MALAYSIABERRDAFTAR DENGAN MAJLIS PERGIGIAN MALAYSIA">
                  BERRDAFTAR DENGAN MAJLIS PERGIGIAN MALAYSIA</option>
                <option value="BHG I & II INSTITUTE OF CIVIL ENGINEERSBHG I & II INSTITUTE OF CIVIL ENGINEERS">BHG I &
                  II INSTITUTE OF CIVIL ENGINEERS</option>
                <option value="CERT OF COMPETENCE AS MASTER OF A HOME TRADESHIP">CERT OF COMPETENCE AS MASTER OF A HOME
                  TRADESHIP</option>
                <option value="CERT OF COMPETENCE AS MATE OF A HOME TRADESHIP">CERT OF COMPETENCE AS MATE OF A HOME
                  TRADESHIP</option>
                <option value="CERT OF COMPETENCE AS MATE OF A LOCAL TRADESHIP">CERT OF COMPETENCE AS MATE OF A LOCAL
                  TRADESHIP</option>
                <option value="CERT OF COMPETENCY AS MARINE ENG. OFF.CLASS 3(MOTO">CERT OF COMPETENCY AS MARINE ENG.
                  OFF.CLASS 3(MOTO</option>
                <option value="CERT OF COMPETENCY AS MASTER OF A LOCAL TRADESHIP">CERT OF COMPETENCY AS MASTER OF A
                  LOCAL TRADESHIP</option>
                <option value="CERT. OF COMPETENCY AS MARINE ENGINEER OFF.CLASS 2">CERT. OF COMPETENCY AS MARINE
                  ENGINEER OFF.CLASS 2</option>
                <option value="CERTIFICATE IN EDUCATION (FURTHER EDUC) CNAA UK">CERTIFICATE IN EDUCATION (FURTHER EDUC)
                  CNAA UK</option>
                <option value="CERTIFICATE IN PHOTOLITHOGRAPHY">CERTIFICATE IN PHOTOLITHOGRAPHY</option>
                <option value="ERTIFICATE OF COMPETENCY AS DECK OFFICER CLASS 3">ERTIFICATE OF COMPETENCY AS DECK
                  OFFICER CLASS 3</option>
                <option value="CERTIFICATE OF COMPETENCY AS HELMSMAN">CERTIFICATE OF COMPETENCY AS HELMSMAN</option>
                <option value="CERTIFICATE OF LAND SURVEYORS MALAYSIA">CERTIFICATE OF LAND SURVEYORS MALAYSIA</option>
                <option value="CHARTERED INSTITUTE OF TRANSPORT">CHARTERED INSTITUTE OF TRANSPORT</option>
                <option value="CHARTERED ISLAMIC FINANCE PROFESSIONAL (CIFP)">CHARTERED ISLAMIC FINANCE PROFESSIONAL
                  (CIFP)</option>
                <option value="CHARTERED OF INSTITUTE OF MARKETING,UNITED KINGDOM">CHARTERED OF INSTITUTE OF
                  MARKETING,UNITED KINGDOM</option>
                <option value="CHIEF ENGINEER OFFICER BETWEEN 750 & 3000KW NCTV">CHIEF ENGINEER OFFICER BETWEEN 750 &
                  3000KW NCTV</option>
                <option value="CHIEF ENGINEER OFFICER OF 3000 KW OR MORE NCTV">CHIEF ENGINEER OFFICER OF 3000 KW OR MORE
                  NCTV</option>
                <option value="CHIEF ENGINEER OFFICER OF 3000 KW OR MORE UNLIMITED TRADE VOYAGES">CHIEF ENGINEER OFFICER
                  OF 3000 KW OR MORE UNLIMITED TRADE VOYAGES</option>
                <option value="CHIEF MATE OF 3000 GT OR MORE NCTV">CHIEF MATE OF 3000 GT OR MORE NCTV</option>
                <option value="CHIEF MATE OF 3000 GT OR MORE UNLIMITED TRADE VOYAGES">CHIEF MATE OF 3000 GT OR MORE
                  UNLIMITED TRADE VOYAGES</option>
                <option value="CHIEF MATE OF BETWEEN 500 & 3000 GT NCTV">CHIEF MATE OF BETWEEN 500 & 3000 GT NCTV
                </option>
                <option value="CHRISTIAN MEDICAL COLLEGE LUDHIANA PUNJAB INDIA">CHRISTIAN MEDICAL COLLEGE LUDHIANA
                  PUNJAB INDIA</option>
                <option value="CORPORATE MEM ROYAL INSTITUTE OF BRITISH ARCHI UK">CORPORATE MEM ROYAL INSTITUTE OF
                  BRITISH ARCHI UK</option>
                <option value="CORPT MEM ROYAL INST OF CHARTERED SURVEYORS AUST">CORPT MEM ROYAL INST OF CHARTERED
                  SURVEYORS AUST</option>
                <option value="CORPT MEMBERS ROYAL INST OF CHRTD SURV (L.S.D) UK">CORPT MEMBERS ROYAL INST OF CHRTD SURV
                  (L.S.D) UK</option>
                <option value="D.O.T SCH OF OCCUPATIONAL THERAPY UNI OF MELBOURNE">D.O.T SCH OF OCCUPATIONAL THERAPY UNI
                  OF MELBOURNE</option>
                <option value="D.O.T. CENTER INST OF TECHNOLOGY WELLINGTON NZ">D.O.T. CENTER INST OF TECHNOLOGY
                  WELLINGTON NZ</option>
                <option value="D.O.T. LONDON SCHOOL OF OCCUPATIONAL THERAPY UK">D.O.T. LONDON SCHOOL OF OCCUPATIONAL
                  THERAPY UK</option>
                <option value="D.O.T. OCCUPATIONAL THERAPY BOMBAY, INDIA">D.O.T. OCCUPATIONAL THERAPY BOMBAY, INDIA
                </option>
                <option value="D.O.T. ROYAL PERTH COLLEGE AUSTRALIA">D.O.T. ROYAL PERTH COLLEGE AUSTRALIA</option>
                <option value="D.O.T. SCHOOL OF OCCUPATIONAL THERAPY AUCKLAND NZ">D.O.T. SCHOOL OF OCCUPATIONAL THERAPY
                  AUCKLAND NZ</option>
                <option value="DAFTAR JADUAL 2 BHG 2 AKTA VET 1974 (AKTA 147)">DAFTAR JADUAL 2 BHG 2 AKTA VET 1974 (AKTA
                  147)</option>
                <option value="DAFTAR PENUH JADUAL II BAHAGIAN I AKTA DOKTOR V">DAFTAR PENUH JADUAL II BAHAGIAN I AKTA
                  DOKTOR V</option>
                <option value="DECK OFFICER CLASS 1 (MASTER MARINER)">DECK OFFICER CLASS 1 (MASTER MARINER)</option>
                <option value="DEGREE IN BLD ECON Q.S. BR'XTON SCHOOL">DEGREE IN BLD ECON Q.S. BR'XTON SCHOOL</option>
                <option value="DEGREE IN BLD TECH H'WATT TECHNOLOGY UNIVERSITY">DEGREE IN BLD TECH H'WATT TECHNOLOGY
                  UNIVERSITY</option>
                <option value="DEGREE IN Q.S. NOTT'HAM REG COLLEGE TECHNOLOGY">DEGREE IN Q.S. NOTT'HAM REG COLLEGE
                  TECHNOLOGY</option>
                <option value="DEGREE IN QUANTITY SURVEYING BRINGTON COLLEGE">DEGREE IN QUANTITY SURVEYING BRINGTON
                  COLLEGE</option>
                <option value="DIP BLD ECON WILLESDEN COLLEGE OF TECHNOLOGY UK">DIP BLD ECON WILLESDEN COLLEGE OF
                  TECHNOLOGY UK</option>
                <option value="DIP IN APP PARASIT & ENTO INST FOR MED RESEARCH">DIP IN APP PARASIT & ENTO INST FOR MED
                  RESEARCH</option>
                <option value="DIP IN BLD ECON DUBLIN COLLEGE OF TECHNOLOGY UK">DIP IN BLD ECON DUBLIN COLLEGE OF
                  TECHNOLOGY UK</option>
                <option value="DIP IN Q.S. GLASGOW COLLEGE BUILDING PAINTING UK">DIP IN Q.S. GLASGOW COLLEGE BUILDING
                  PAINTING UK</option>
                <option value="DIP IN QS HERRIOT SMITH COLLEGE OF ART BUILDING UK">DIP IN QS HERRIOT SMITH COLLEGE OF
                  ART BUILDING UK</option>
                <option value="DIP OF F'SHIP ROY COL OF PHYS & SURG OF GLASGOW">DIP OF F'SHIP ROY COL OF PHYS & SURG OF
                  GLASGOW</option>
                <option value="DIP SCHOOL OF OCCUPATIONAL THERAPY UNI OF N DELHI">DIP SCHOOL OF OCCUPATIONAL THERAPY UNI
                  OF N DELHI</option>
                <option value="DIPLOMA ASSOCIATED BOARD ROYAL SCHOOLS OF MUSIC (ABRSM)">DIPLOMA ASSOCIATED BOARD ROYAL
                  SCHOOLS OF MUSIC (ABRSM)</option>
                <option value="DIPLOMA GUILDHALL SCHOOL OF MUSIC UKDIPLOMA GUILDHALL SCHOOL OF MUSIC UK">DIPLOMA
                  GUILDHALL SCHOOL OF MUSIC UK</option>
                <option value="DIPLOMA IN BLD EC & MEAS UNIVERSITY OF ASTON">DIPLOMA IN BLD EC & MEAS UNIVERSITY OF
                  ASTON</option>
                <option value="DIPLOMA IN BLD EC B'MOUTH COLLEGE OF TECHNOLOGY">DIPLOMA IN BLD EC B'MOUTH COLLEGE OF
                  TECHNOLOGY</option>
                <option value="DIPLOMA IN BLD ECON PORTSMOUTH POLYTECHNIC UK">DIPLOMA IN BLD ECON PORTSMOUTH POLYTECHNIC
                  UK</option>
                <option value="DIPLOMA IN MARINE ENGINEERING">DIPLOMA IN MARINE ENGINEERING</option>
                <option value="DIPLOMA IN MARKETING OF THE INST OF MARKETING UK">DIPLOMA IN MARKETING OF THE INST OF
                  MARKETING UK</option>
                <option value="DIPLOMA IN PUBLIC RELATION OF CAMBRIDGE LTD LONDON">DIPLOMA IN PUBLIC RELATION OF
                  CAMBRIDGE LTD LONDON</option>
                <option value="DIPLOMA IN Q.S. LIVERPOOL POLYTECHNIC UK">DIPLOMA IN Q.S. LIVERPOOL POLYTECHNIC UK
                </option>
                <option value="DIPLOMA INSPEKTOR KESIHATAN">DIPLOMA INSPEKTOR KESIHATANDIPLOMA INSPEKTOR KESIHATAN
                </option>
                <option value="DIPLOMA OF COLLEGE OF RADIOGRAPHERS UK">DIPLOMA OF COLLEGE OF RADIOGRAPHERS UK</option>
                <option value="DIPLOMA OF PHYSIOTHERAPY">DIPLOMA OF PHYSIOTHERAPY</option>
                <option value="DIPLOMA PEMBANTU FARMASI">DIPLOMA PEMBANTU PERUBATAN</option>
                <option value="DIPLOMA PEMBANTU PERUBATAN">DIPLOMA PEMBANTU PERUBATAN</option>
                <option value="DIPLOMA PENDIDIKAN">DIPLOMA PENDIDIKAN</option>
                <option value="DIPLOMA PERCETAKAN LONDON">DIPLOMA PERCETAKAN LONDON</option>
                <option value="DIPLOMA PERGURUAN">DIPLOMA PERGURUAN</option>
                <option value="DIPLOMA PERGURUAN (PENDIDIKAN ISLAM)">DIPLOMA PERGURUAN (PENDIDIKAN ISLAM)</option>
                <option value="DIPLOMA PERGURUAN (TASL)">DIPLOMA PERGURUAN (TASL)</option>
                <option value="DIPLOMA PUBLIC HEALTH INSPECTOR'S MALAYSIA">DIPLOMA PUBLIC HEALTH INSPECTOR'S MALAYSIA
                </option>
                <option value="DIPLOMA ROYAL ACADEMY OF MUSIC UK">DIPLOMA ROYAL ACADEMY OF MUSIC UK</option>
                <option value="DIPLOMA ROYAL SOCIETY OF HEALTH UK">DIPLOMA ROYAL SOCIETY OF HEALTH UK</option>
                <option value="DIPLOMA SAINS PERPUSTAKAAN UK">DIPLOMA SAINS PERPUSTAKAAN UK</option>
                <option value="DIPLOMA SPEECH THERAPY (DIIKTIRAF KERAJAAN)">DIPLOMA SPEECH THERAPY (DIIKTIRAF KERAJAAN)
                </option>
                <option value="DIPLOMA TEKNOLOGI MAKMAL PERUBATAN">DIPLOMA TEKNOLOGI MAKMAL PERUBATAN</option>
                <option value="ENGINEER OFFICER OF LESS THAN 750 KW ON DOMESTIC AND NEAR COASTAL VOYAGES">ENGINEER
                  OFFICER OF LESS THAN 750 KW ON DOMESTIC AND NEAR COASTAL VOYAGES</option>
                <option value="F'SHIP DIP IN ARCHI ROYAL M'BOURNE INST OF TECH">F'SHIP DIP IN ARCHI ROYAL M'BOURNE INST
                  OF TECH</option>
                <option value="F'SHIP ROYAL COL OF PHYSICIAN & SURG OF GLASGOW">F'SHIP ROYAL COL OF PHYSICIAN & SURG OF
                  GLASGOW</option>
                <option value="FELLOW OF INST OF MUNICIPAL TREASURER & ACCN UK">FELLOW OF INST OF MUNICIPAL TREASURER &
                  ACCN UK</option>
                <option value="FELLOW OF THE ROYAL COLLEGE OF SURG IN IRELAND">FELLOW OF THE ROYAL COLLEGE OF SURG IN
                  IRELAND</option>
                <option value="FELLOWSHIP FACULTY OF ACTUARIES, SCOTLAND">FELLOWSHIP FACULTY OF ACTUARIES, SCOTLAND
                </option>
                <option value="FELLOWSHIP INSTITUTE OF ACTUARIES OF AUSTRALIA">FELLOWSHIP INSTITUTE OF ACTUARIES OF
                  AUSTRALIA</option>
                <option value="FELLOWSHIP INSTITUTE OF ACTUARY UK">FELLOWSHIP INSTITUTE OF ACTUARY UK</option>
                <option value="FELLOWSHIP MALAYSIAN INSTITUTE OF CHEMISTRY">FELLOWSHIP MALAYSIAN INSTITUTE OF CHEMISTRY
                </option>
                <option value="FELLOWSHIP OF THE ROYAL COLLEGE OF SURG EDINBURGH">FELLOWSHIP OF THE ROYAL COLLEGE OF
                  SURG EDINBURGH</option>
                <option value="FIRST MATE FOREIGN GOING CERT OF COMPETENCE UK">FIRST MATE FOREIGN GOING CERT OF
                  COMPETENCE UK</option>
                <option value="GENERAL NURSING COUNCIL FOR ENGLAND & WALES">GENERAL NURSING COUNCIL FOR ENGLAND & WALES
                </option>
                <option value="GRAD ASSOC MEMBERS INS OF PURCHASING & SUPPLY UK">GRAD ASSOC MEMBERS INS OF PURCHASING &
                  SUPPLY UK</option>
                <option value="GRAD CHARTERED INSTITUTE SEC & ADMINISTRATION UK">GRAD CHARTERED INSTITUTE SEC &
                  ADMINISTRATION UK</option>
                <option value="GRADS MEM OF THE INST OF ELECT & RADIO ENGINEERING">GRADS MEM OF THE INST OF ELECT &
                  RADIO ENGINEERING</option>
                <option value="GRADUATE MEMBERS INSTITUTION OF ENGINEERING M'SIA">GRADUATE MEMBERS INSTITUTION OF
                  ENGINEERING M'SIA</option>
                <option value="I ST CLS CERT OF COMPETENCE IN MARINE ENGINEERING">I ST CLS CERT OF COMPETENCE IN MARINE
                  ENGINEERING</option>
                <option value="I ST CLS M/FOREIGN GOING SHIP CERT OF COMPETENCE">I ST CLS M/FOREIGN GOING SHIP CERT OF
                  COMPETENCE</option>
                <option value="I ST CLS MASTER MARINER CERTIFICATE OF COMPETENCE">I ST CLS MASTER MARINER CERTIFICATE OF
                  COMPETENCE</option>
                <option value="I ST CLS MASTER STEAMSHIP CERT OF COMPETENCE">I ST CLS MASTER STEAMSHIP CERT OF
                  COMPETENCE</option>
                <option value="INST OF SURV M/ASSOC ROYAL OF CHARTERED SURVEYOR">INST OF SURV M/ASSOC ROYAL OF CHARTERED
                  SURVEYOR</option>
                <option value="INSTITUT ARKITEK LANDSKAP MALAYSIA">INSTITUT ARKITEK LANDSKAP MALAYSIA</option>
                <option value="INSTITUTE OF CIVIL ENGINEERS UK">INSTITUTE OF CIVIL ENGINEERS UK</option>
                <option value="JURUTEKNIK OPERASI LARIK TAHAP 3 (MLVK)">JURUTEKNIK OPERASI LARIK TAHAP 3 (MLVK)</option>
                <option value="JURUTERA ENJIN PEMBAKARAN DALAM (GRED DUA)">JURUTERA ENJIN PEMBAKARAN DALAM (GRED DUA)
                </option>
                <option value="JURUTERA STIM (GRED DUA)">JURUTERA STIM (GRED DUA)</option>
                <option value="KTG 'C' CAPT TRANS AIRCRAFT & INSTR RATING">KTG 'C' CAPT TRANS AIRCRAFT & INSTR RATING
                </option>
                <option value="KURSUS LAT PENGAJAR KETUKANGAN JAB TENAGA RAKYAT">KURSUS LAT PENGAJAR KETUKANGAN JAB
                  TENAGA RAKYAT</option>
                <option value="L'TER OF PROFICIENCY AS MATE OF LOCAL TRADESHIP">L'TER OF PROFICIENCY AS MATE OF LOCAL
                  TRADESHIP</option>
                <option value="LATIHAN FORMAL DALAM BIDANG SENI FOTO">LATIHAN FORMAL DALAM BIDANG SENI FOTO</option>
                <option value="LATIHAN TEKNIK MENGAJAR (CIAST)">LATIHAN TEKNIK MENGAJAR (CIAST)</option>
                <option value="LAYAK BERDAFTAR SEMENTARA DENGAN MAJLIS PERUBATAN MALAYSIA">LAYAK BERDAFTAR SEMENTARA
                  DENGAN MAJLIS PERUBATAN MALAYSIA</option>
                <option value="LESEN BERKANUN JURUUKUR TANAH AUSTRALIA">LESEN BERKANUN JURUUKUR TANAH AUSTRALIA</option>
                <option value="LESEN BERKANUN JURUUKUR TANAH CANADA">LESEN BERKANUN JURUUKUR TANAH CANADA</option>
                <option value="LESEN BERKANUN JURUUKUR TANAH NEW ZEALAND">LESEN BERKANUN JURUUKUR TANAH NEW ZEALAND
                </option>
                <option value="LESEN JURUTERA PENYENGGARA KAPALTERBANG">LESEN JURUTERA PENYENGGARA KAPALTERBANG</option>
                <option value="LESEN JURUTERBANG PERDAGANGAN & INSTR RATING">LESEN JURUTERBANG PERDAGANGAN & INSTR
                  RATING</option>
                <option value="LICENTIATE APOTHECARIES HALL OF DUBLIN IRELAND">LICENTIATE APOTHECARIES HALL OF DUBLIN
                  IRELAND</option>
                <option value="LICENTIATE DENTAL SURGERY QUEENS UNI BELFAST">LICENTIATE DENTAL SURGERY QUEENS UNI
                  BELFAST</option>
                <option value="LICENTIATE DENTAL SURGERY UNIVERSITY OF BIRMINGHAM">LICENTIATE DENTAL SURGERY UNIVERSITY
                  OF BIRMINGHAM</option>
                <option value="LICENTIATE DENTAL SURGERY UNIVERSITY OF BRISTOL">LICENTIATE DENTAL SURGERY UNIVERSITY OF
                  BRISTOL</option>
                <option value="LICENTIATE DENTAL SURGERY UNIVERSITY OF DURHAM">LICENTIATE DENTAL SURGERY UNIVERSITY OF
                  DURHAM</option>
                <option value="LICENTIATE DENTAL SURGERY UNIVERSITY OF LEEDS">LICENTIATE DENTAL SURGERY UNIVERSITY OF
                  LEEDS</option>
                <option value="LICENTIATE DENTAL SURGERY UNIVERSITY OF LIVERPOOL">LICENTIATE DENTAL SURGERY UNIVERSITY
                  OF LIVERPOOL</option>
                <option value="LICENTIATE DENTAL SURGERY UNIVERSITY OF MANCHESTER">LICENTIATE DENTAL SURGERY UNIVERSITY
                  OF MANCHESTER</option>
                <option value="LICENTIATE DENTAL SURGERY UNIVERSITY OF MANCHESTER">LICENTIATE DENTAL SURGERY UNIVERSITY
                  OF MANCHESTER</option>
                <option value="LICENTIATE DENTAL SURGERY UNIVERSITY OF SHEFFIELD">LICENTIATE DENTAL SURGERY UNIVERSITY
                  OF SHEFFIELD</option>
                <option value="LICENTIATE DENTAL SURGERY UNIVERSITY OF ST ANDREW">LICENTIATE DENTAL SURGERY UNIVERSITY
                  OF ST ANDREW</option>
                <option value="LICENTIATE MEDICAL BOARD NEW FOUNDLAND">LICENTIATE MEDICAL BOARD NEW FOUNDLAND</option>
                <option value="LICENTIATE MEDICAL BOARD NOVA SCOTIA">LICENTIATE MEDICAL BOARD NOVA SCOTIA</option>
                <option value="LICENTIATE MEDICAL COUNCIL PRINCE EDWARD ISLAND">LICENTIATE MEDICAL COUNCIL PRINCE EDWARD
                  ISLAND</option>
                <option value="LICENTIATE OF THE CHARTERED INST OF SEC & ADMIN UK">LICENTIATE OF THE CHARTERED INST OF
                  SEC & ADMIN UK</option>
                <option value="LICENTIATE OF THE CHARTERED INST SECRETARIES UK">LICENTIATE OF THE CHARTERED INST
                  SECRETARIES UK</option>
                <option value="LICENTIATE OF THE CORPORATION OF SECRETARIES UK">LICENTIATE OF THE CORPORATION OF
                  SECRETARIES UK</option>
                <option value="LICENTIATE ROYAL COLLEGE OF PHYSICIAN EDINBURGH UK">LICENTIATE ROYAL COLLEGE OF PHYSICIAN
                  EDINBURGH UK</option>
                <option value="LICENTIATE ROYAL COLLEGE OF PHYSICIAN LONDON UK">LICENTIATE ROYAL COLLEGE OF PHYSICIAN
                  LONDON UK</option>
                <option value="LICENTIATE ROYAL COLLEGE OF SURGEON EDINBURGH UK">LICENTIATE ROYAL COLLEGE OF SURGEON
                  EDINBURGH UK</option>
                <option value="LICENTIATE VET SC (E.P.A.U.) M'SIGN, EAST PAKISTAN">LICENTIATE VET SC (E.P.A.U.) M'SIGN,
                  EAST PAKISTAN</option>
                <option value="LICENTIATESHIP MALAYSIAN INSTITUTE OF CHEMISTRY">LICENTIATESHIP MALAYSIAN INSTITUTE OF
                  CHEMISTRY</option>
                <option value="LICT DENTAL SURG ROY COL OF PHYSI & SURG GLASGOW">LICT DENTAL SURG ROY COL OF PHYSI &
                  SURG GLASGOW</option>
                <option value="LICT DENTAL SURG ROYAL COLLEGE OF SURG EDINBURGH">LICT DENTAL SURG ROYAL COLLEGE OF SURG
                  EDINBURGH</option>
                <option value="LICT DENTAL SURG ROYAL COLLEGE OF SURG ENGLAND">LICT DENTAL SURG ROYAL COLLEGE OF SURG
                  ENGLAND</option>
                <option value="LICT DENTAL SURG ROYAL FAC OF PHYSI & SURG GLASGOW">LICT DENTAL SURG ROYAL FAC OF PHYSI &
                  SURG GLASGOW</option>
                <option value="LICT DENTAL SURG THE ROYAL COL OF SURGEON IRELAND">LICT DENTAL SURG THE ROYAL COL OF
                  SURGEON IRELAND</option>
                <option value="LICT DENTAL SURG UNIVERSITY OF DUBLIN, IRELAND">LICT DENTAL SURG UNIVERSITY OF DUBLIN,
                  IRELAND</option>
                <option value="LICT DENTAL SURG UNIVERSITY OF VICTORIA, AUSTRALIA">LICT DENTAL SURG UNIVERSITY OF
                  VICTORIA, AUSTRALIA</option>
                <option value="LICT DENTAL SURGERY KING EDWARD VII COL OF MEDICAL">LICT DENTAL SURGERY KING EDWARD VII
                  COL OF MEDICAL</option>
                <option value="LICT IN MED & CBS OF ROYAL COL PHYSICIAN IRELAND">LICT IN MED & CBS OF ROYAL COL
                  PHYSICIAN IRELAND</option>
                <option value="LICT IN MEDICAL & BC OF SURG UNI DUBLIN IRELAND">LICT IN MEDICAL & BC OF SURG UNI DUBLIN
                  IRELAND</option>
                <option value="LICT IN MEDICAL & SURG SOC OF APOTHECARIES LONDON">LICT IN MEDICAL & SURG SOC OF
                  APOTHECARIES LONDON</option>
                <option value="LICT IN MEDICAL & SURGERY K EDWARD VII COL OF MED">LICT IN MEDICAL & SURGERY K EDWARD VII
                  COL OF MED</option>
                <option value="LICT IN MIDWIFERY ROYAL COL OF PHYSICIAN IRELAND">LICT IN MIDWIFERY ROYAL COL OF
                  PHYSICIAN IRELAND</option>
                <option value="LICT IN MIDWIFERY ROYAL COLLEGE OF SURGERY IRELAND">LICT IN MIDWIFERY ROYAL COLLEGE OF
                  SURGERY IRELAND</option>
                <option value="LICT IN VETERINAR SCIENCE UNI DACCA BANGLADESH">LICT IN VETERINAR SCIENCE UNI DACCA
                  BANGLADESH</option>
                <option value="LICT ROYAL COL OF PHYSICIAN & SURGERY GLASGOW UK">LICT ROYAL COL OF PHYSICIAN & SURGERY
                  GLASGOW UK</option>
                <option value="LICT VET SC (C.U.S. & A.H.) M'SIGH, EAST PAKISTAN">LICT VET SC (C.U.S. & A.H.) M'SIGH,
                  EAST PAKISTAN</option>
                <option value="LUL BHG I & II PEP GRAD COUN ENGINEERING INST UK">LUL BHG I & II PEP GRAD COUN
                  ENGINEERING INST UK</option>
                <option value="LUL BHG I & II PEP GRADS COUN OF ENGINEERING M'SIA">LUL BHG I & II PEP GRADS COUN OF
                  ENGINEERING M'SIA</option>
                <option value="LUL PEP IKTISAS BHG I & II LEMBAGA JURUUKUR M'SIA">LUL PEP IKTISAS BHG I & II LEMBAGA
                  JURUUKUR M'SIA</option>
                <option value="LULUS ASSOCIATION OF CERTIFIED ACCOUNTANTS UK">LULUS ASSOCIATION OF CERTIFIED ACCOUNTANTS
                  UK</option>
                <option value="LULUS AUSTRALIAN SOCIETY OF ACCOUNTANTS">LULUS AUSTRALIAN SOCIETY OF ACCOUNTANTS</option>
                <option value="LULUS BAHAGIAN II C.E.I. UK">LULUS BAHAGIAN II C.E.I. UK</option>
                <option value="LULUS BAHAGIAN II E.E.I. (ACAD) ACADEMY">LULUS BAHAGIAN II E.E.I. (ACAD) ACADEMY</option>
                <option value="LULUS BHG I & II LEMBAGA ARKITEK MALAYSIA">LULUS BHG I & II LEMBAGA ARKITEK MALAYSIA
                </option>
                <option value="LULUS BHG II ROYAL INST OF BRITISH ARCHITECT UK">LULUS BHG II ROYAL INST OF BRITISH
                  ARCHITECT UK</option>
                <option value="LULUS CANADIAN INSTITUTE OF CHARTERED ACCOUNTANTS">LULUS CANADIAN INSTITUTE OF CHARTERED
                  ACCOUNTANTS</option>
                <option value="LULUS CERT OF COMPETENCY LEM JURUUKUR TANAH M'SIA">LULUS CERT OF COMPETENCY LEM JURUUKUR
                  TANAH M'SIA</option>
                <option value="LULUS CHARTERED INST OF PUBLIC FINANCE & ACCNT UK">LULUS CHARTERED INST OF PUBLIC FINANCE
                  & ACCNT UK</option>
                <option value="LULUS INST OF CHARTERED ACCNT IN ENG & WALES UK">LULUS INST OF CHARTERED ACCNT IN ENG &
                  WALES UK</option>
                <option value="LULUS INST OF CHARTERED ACCOUNTANTS IN ENGLAND UK">LULUS INST OF CHARTERED ACCOUNTANTS IN
                  ENGLAND UK</option>
                <option value="LULUS INST OF COST & MANAGEMENT ACCOUNTANTS UK">LULUS INST OF COST & MANAGEMENT
                  ACCOUNTANTS UK</option>
                <option value="LULUS INSTITUTE OF CHARTERED ACCNT IN AUSTRALIA">LULUS INSTITUTE OF CHARTERED ACCNT IN
                  AUSTRALIA</option>
                <option value="LULUS INSTITUTE OF CHARTERED ACCNT IN SCOTLAND UK">LULUS INSTITUTE OF CHARTERED ACCNT IN
                  SCOTLAND UK</option>
                <option value="LULUS MALAYSIAN INSTITUTE OF ACCOUNTANTS">LULUS MALAYSIAN INSTITUTE OF ACCOUNTANTS
                </option>
                <option value="LULUS NEW ZEALAND SOCIETY OF ACCOUNTANTS">LULUS NEW ZEALAND SOCIETY OF ACCOUNTANTS
                </option>
                <option value="LULUS PAKISTAN INSTITUTE OF CHARTERED ACCOUNTANTS">LULUS PAKISTAN INSTITUTE OF CHARTERED
                  ACCOUNTANTS</option>
                <option value="LULUS PAKISTAN INSTITUTE OF INDUSTRIAL ACCOUNTANTS">LULUS PAKISTAN INSTITUTE OF
                  INDUSTRIAL ACCOUNTANTS</option>
                <option value="LULUS PEP IKH BHG I, II & III LEM PEN P'SIR M'SIA">LULUS PEP IKH BHG I, II & III LEM PEN
                  P'SIR M'SIA</option>
                <option value="LULUS PEP P'MATAN I SKIM P'MATAN RENJER HUTAN">LULUS PEP P'MATAN I SKIM P'MATAN RENJER
                  HUTAN</option>
                <option value="LULUS PEP ROYAL INST OF CHARTERED SURV (L.S.D) UK">LULUS PEP ROYAL INST OF CHARTERED SURV
                  (L.S.D) UK</option>
                <option value="LULUS PEP. ASSOCIATION OF INTERNATIONAL ACCNT UK">LULUS PEP. ASSOCIATION OF INTERNATIONAL
                  ACCNT UK</option>
                <option value="LULUS PEPERIKSAAN AKHIR BAR (BAR FINAL) M'SIA">LULUS PEPERIKSAAN AKHIR BAR (BAR FINAL)
                  M'SIA</option>
                <option value="LULUS PEPERIKSAAN AKHIR BAR (BAR FINAL) UK">LULUS PEPERIKSAAN AKHIR BAR (BAR FINAL) UK
                </option>
                <option value="LULUS PEPERIKSAAN KHAS SIJIL AMALAN GUAMAN UNIVERSITI MALAYA">LULUS PEPERIKSAAN KHAS
                  SIJIL AMALAN GUAMAN UNIVERSITI MALAYA</option>
                <option value="LULUS SEMUA PEP CHARTERED INST OF TRANSPORT UK">LULUS SEMUA PEP CHARTERED INST OF
                  TRANSPORT UK</option>
                <option value="LULUS SIJIL AMALAN GUAMAN DARI ITM">LULUS SIJIL AMALAN GUAMAN DARI ITM</option>
                <option value="LULUS UJIAN KHAS BAHASA MALAYSIA JURURAWAT KONTRAK">LULUS UJIAN KHAS BAHASA MALAYSIA
                  JURURAWAT KONTRAK</option>
                <option value="LULUS UJIAN KHAS YG DITETAPKAN KEMENT. KESIHATAN">LULUS UJIAN KHAS YG DITETAPKAN KEMENT.
                  KESIHATAN</option>
                <option value="MALAYSIAN ASSOCIATION OF CERTIFIED PUBLIC ACCNT">MALAYSIAN ASSOCIATION OF CERTIFIED
                  PUBLIC ACCNT</option>
                <option value="MARINE ENGINEER OFFICER CLASS 1 (MOTOR)">MARINE ENGINEER OFFICER CLASS 1 (MOTOR)</option>
                <option value="MARINE ENGINEER OFFICER CLASS 4 (MOTOR)">MARINE ENGINEER OFFICER CLASS 4 (MOTOR)</option>
                <option value="MASTER OF 3000 GT OR MORE NCTV">MASTER OF 3000 GT OR MORE NCTV</option>
                <option value="MASTER OF 3000 GT OR MORE UNLIMITED TRADE VOYAGES">MASTER OF 3000 GT OR MORE UNLIMITED
                  TRADE VOYAGES</option>
                <option value="MASTER OF BETWEEN 500 & 3000 GT NCTV">MASTER OF BETWEEN 500 & 3000 GT NCTV</option>
                <option value="MASTER OF FOREIGN GOING UK">MASTER OF FOREIGN GOING UK</option>
                <option value="MASTER OF FOREIGN SHIP CERTIFICATE OF COMPETENCE">MASTER OF FOREIGN SHIP CERTIFICATE OF
                  COMPETENCE</option>
                <option value="MASTER ON SHIPS OF LESS THAN 500 GT ON DOMESTIC TRADE VOYAGES">MASTER ON SHIPS OF LESS
                  THAN 500 GT ON DOMESTIC TRADE VOYAGES</option>
                <option value="MATE ON SHIPS OF LESS THAN 500 GT ON DOMESTIC TRADE VOYAGES">MATE ON SHIPS OF LESS THAN
                  500 GT ON DOMESTIC TRADE VOYAGES</option>
                <option value="MEM CHARTERED INST OF MANAGEMENT ACCOUNTANTS UK">MEM CHARTERED INST OF MANAGEMENT
                  ACCOUNTANTS UK</option>
                <option value="MEM THE CHARTERED INST OF SEC & ADMINISTRATION UK">MEM THE CHARTERED INST OF SEC &
                  ADMINISTRATION UK</option>
                <option value="MEMBERS CHARTERED SOCIETY OF PHYSIOTHERAPY UK">MEMBERS CHARTERED SOCIETY OF PHYSIOTHERAPY
                  UK</option>
                <option value="MEMBERS CHARTERED SOCIETY OF SPEECH THERAPIST UK">MEMBERS CHARTERED SOCIETY OF SPEECH
                  THERAPIST UK</option>
                <option value="MEMBERS COLLEGE OF PHYSICIAN & SURGEONS ALBERTA">MEMBERS COLLEGE OF PHYSICIAN & SURGEONS
                  ALBERTA</option>
                <option value="MEMBERS COLLEGE OF PHYSICIAN & SURGEONS MANITOBA">MEMBERS COLLEGE OF PHYSICIAN & SURGEONS
                  MANITOBA</option>
                <option value="MEMBERS COLLEGE PHYSICIAN & SURGEONS SASKETCHEWAN">MEMBERS COLLEGE PHYSICIAN & SURGEONS
                  SASKETCHEWAN</option>
                <option value="MEMBERS INSTITUTE OF PUBLIC RELATION UK">MEMBERS INSTITUTE OF PUBLIC RELATION UK</option>
                <option value="MEMBERS INSTITUTE OF PURCHASING & SUPPLY UK">MEMBERS INSTITUTE OF PURCHASING & SUPPLY UK
                </option>
                <option value="MEMBERS OF WEST BENGAL MEDICAL COUNCIL">MEMBERS OF WEST BENGAL MEDICAL COUNCIL</option>
                <option value="MEMBERS ROYAL COLLEGE OF SURGEON ENGLAND UK">MEMBERS ROYAL COLLEGE OF SURGEON ENGLAND UK
                </option>
                <option value="MEMBERS THE ASSOCIATION OF INTERNATIONAL ACCNT UK">MEMBERS THE ASSOCIATION OF
                  INTERNATIONAL ACCNT UK</option>
                <option value="MEMBERSHIP CHARTERED INSTITUTE OF TRANSPORT UK">MEMBERSHIP CHARTERED INSTITUTE OF
                  TRANSPORT UK</option>
                <option value="MEMBERSHIP INSTITUTE OF STATISTICIAN LONDON">MEMBERSHIP INSTITUTE OF STATISTICIAN LONDON
                </option>
                <option value="MEMBERSHIP MALAYSIAN INSTITUTE OF CHEMISTRY">MEMBERSHIP MALAYSIAN INSTITUTE OF CHEMISTRY
                </option>
                <option value="MIDWIFERY TUTUR'S DIPLOMA">MIDWIFERY TUTUR'S DIPLOMA</option>
                <option value="MLVK TAHAP 3 JURUTEKNIK KOMPUTER (SISTEM KOMPUTER)">MLVK TAHAP 3 JURUTEKNIK KOMPUTER
                  (SISTEM KOMPUTER)</option>
                <option value="MLVK TAHAP 3 MEKATRONIK">MLVK TAHAP 3 MEKATRONIK</option>
                <option value="MLVK TAHAP 3 PELUKIS PELAN SENIBINA">MLVK TAHAP 3 PELUKIS PELAN SENIBINA</option>
                <option value="MLVK TAHAP 3 PENTADBIRAN SISTEM MAKLUMAT">MLVK TAHAP 3 PENTADBIRAN SISTEM MAKLUMAT
                </option>
                <option value="MLVK TAHAP 3-PENYELIA KRAF TENUN (SONGKET & DASTAR">MLVK TAHAP 3-PENYELIA KRAF TENUN
                  (SONGKET & DASTAR</option>
                <option value="OFF. IN CHARGE OF A NAVI. WATCH OF 500GT OR MORE">OFF. IN CHARGE OF A NAVI. WATCH OF
                  500GT OR MORE</option>
                <option value="OFF. IN CHARGE OF A NAVI. WATCH OF 750 KW OR MORE">OFF. IN CHARGE OF A NAVI. WATCH OF 750
                  KW OR MORE</option>
                <option
                  value="OFFICER IN CHARGE OF AN ENGINEERING WATCH OF 750 KW OR MORE ON NEAR COASTAL TRADE VOYAGES">
                  OFFICER IN CHARGE OF AN ENGINEERING WATCH OF 750 KW OR MORE ON NEAR COASTAL TRADE VOYAGES</option>
                <option value="OFFICER IN CHARGE OF AN ENGINEERING WATCH OF 750 KW OR MORE ON UNLIMITED TRADE VOYAGES">
                  OFFICER IN CHARGE OF AN ENGINEERING WATCH OF 750 KW OR MORE ON UNLIMITED TRADE VOYAGES</option>
                <option value="OFFICER INCHARGE OF NAVIGATIONAL WATCH LESS THAN 500 GT NEAR COASTAL TRADE VOYAGES">
                  OFFICER INCHARGE OF NAVIGATIONAL WATCH LESS THAN 500 GT NEAR COASTAL TRADE VOYAGES</option>
                <option value="ORDINARY NAUTICAL DIPLOMA IN NAUTICAL SCIENCE">ORDINARY NAUTICAL DIPLOMA IN NAUTICAL
                  SCIENCE</option>
                <option value="P'MAN 7TH BDG PENYG 'AIR FRAME' ENGINE, ELEKTRIK">P'MAN 7TH BDG PENYG 'AIR FRAME' ENGINE,
                  ELEKTRIK</option>
                <option value="PENG DLM BIDANG FILEM & PENERBITAN RANCANGAN RADIO">PENG DLM BIDANG FILEM & PENERBITAN
                  RANCANGAN RADIO</option>
                <option value="PENGALAMAN 'AEROFIREMAN DRIVER CLASS I'">PENGALAMAN 'AEROFIREMAN DRIVER CLASS I'</option>
                <option value="PENGALAMAN DALAM BIDANG BELIA DAN SUKAN">PENGALAMAN DALAM BIDANG BELIA DAN SUKAN</option>
                <option value="PENGALAMAN DALAM BIDANG FILEM DAN TELEVISYEN">PENGALAMAN DALAM BIDANG FILEM DAN
                  TELEVISYEN</option>
                <option value="PENGALAMAN DALAM BIDANG FILEM/PENERBITAN RADIO/TV">PENGALAMAN DALAM BIDANG
                  FILEM/PENERBITAN RADIO/TV</option>
                <option value="PENGALAMAN DALAM BIDANG KEBUDAYAAN">PENGALAMAN DALAM BIDANG KEBUDAYAAN</option>
                <option value="PENGALAMAN DALAM BIDANG PENERBITAN FILEM">PENGALAMAN DALAM BIDANG PENERBITAN FILEM
                </option>
                <option value="PENGALAMAN DALAM BIDANG PENERBITAN RADIO">PENGALAMAN DALAM BIDANG PENERBITAN RADIO
                </option>
                <option value="PENGALAMAN DALAM BIDANG PENERBITAN TV">PENGALAMAN DALAM BIDANG PENERBITAN TV</option>
                <option value="PENGALAMAN DALAM BIDANG PENYENGGARAAN AIRFRAM">PENGALAMAN DALAM BIDANG PENYENGGARAAN
                  AIRFRAM</option>
                <option value="PENGALAMAN DALAM BIDANG PENYENGGARAAN ENJIN">PENGALAMAN DALAM BIDANG PENYENGGARAAN ENJIN
                </option>
                <option value="PENGALAMAN DALAM BIDANG PENYENGGARAAN LETRIK">PENGALAMAN DALAM BIDANG PENYENGGARAAN
                  LETRIK</option>
                <option value="PENGALAMAN DALAM BIDANG PERHUBUNGAN /PENYELIDIKAN">PENGALAMAN DALAM BIDANG PERHUBUNGAN
                  /PENYELIDIKAN</option>
                <option value="PENGALAMAN DALAM BIDANG SENIREKA/SENILUKIS">PENGALAMAN DALAM BIDANG SENIREKA/SENILUKIS
                </option>
                <option value="PENGALAMAN DALAM KEGIATAN BELIA/SUKAN">PENGALAMAN DALAM KEGIATAN BELIA/SUKAN</option>
                <option value="PENGALAMAN DALAM KERJA SIASATAN & SELIDIK/P'KUASA">PENGALAMAN DALAM KERJA SIASATAN &
                  SELIDIK/P'KUASA</option>
                <option value="PENGALAMAN DALAM MEKANIK KERETA, JABATAN KERAJAAN">PENGALAMAN DALAM MEKANIK KERETA,
                  JABATAN KERAJAAN</option>
                <option value="PENGALAMAN DALAM MEKANIK KERETA, SWASTA">PENGALAMAN DALAM MEKANIK KERETA, SWASTA</option>
                <option value="PENGALAMAN DALAM PENYELENGGARAAN WORKSHOP JENTERA">PENGALAMAN DALAM PENYELENGGARAAN
                  WORKSHOP JENTERA</option>
                <option value="PENGALAMAN DALAM PERUSAHAAN KETUKANGAN BERKAITAN">PENGALAMAN DALAM PERUSAHAAN KETUKANGAN
                  BERKAITAN</option>
                <option value="PENGALAMAN DALAM SENI LUKIS/SENI REKA">PENGALAMAN DALAM SENI LUKIS/SENI REKA</option>
                <option value="PENGALAMAN DALAM SIGNAL/RADIO H.F. & MENAIP">PENGALAMAN DALAM SIGNAL/RADIO H.F. & MENAIP
                </option>
                <option value="PENGALAMAN LATIHAN JASMANI">PENGALAMAN LATIHAN JASMANI</option>
                <option value="PENGALAMAN MEMENUHI SYARAT COS 15 TAHUN">PENGALAMAN MEMENUHI SYARAT COS 15 TAHUN</option>
                <option value="PENGUASAAN BAHASA CINA">PENGUASAAN BAHASA CINA</option>
                <option value="PEP IKHTISAS BHG I & II INST OF CIVIL ENGINEERING">PEP IKHTISAS BHG I & II INST OF CIVIL
                  ENGINEERING</option>
                <option value="PERSATUAN ASIAN ACADEMIC SOCIETY FOR VOCATIONAL EDUCATION AND TRAINING (AASVET)">
                  PERSATUAN ASIAN ACADEMIC SOCIETY FOR VOCATIONAL EDUCATION AND TRAINING (AASVET)</option>
                <option value="PERSATUAN PENDIDIKAN TEKNIK DAN VOKASIONAL MALAYSIA (PPTVM)">PERSATUAN PENDIDIKAN TEKNIK
                  DAN VOKASIONAL MALAYSIA (PPTVM)</option>
                <option value="PROF ASSOC ROYAL INST OF CHARTERED SURVEYORS UK">PROF ASSOC ROYAL INST OF CHARTERED
                  SURVEYORS UK</option>
                <option value="PROF ASSOCIATE ROYAL I.C.S. (LONDON (G.P.S.V)">PROF ASSOCIATE ROYAL I.C.S. (LONDON
                  (G.P.S.V)</option>
                <option value="RADIO COMMUNICATION OPERATOR CERTIFICATE">RADIO COMMUNICATION OPERATOR CERTIFICATE
                </option>
                <option value="SARJANA MUDA PERGURUAN">SARJANA MUDA PERGURUAN</option>
                <option value="SCI OF PHYSIOTHERAPHY UNI MANCHESTER INFIRMARY ENG">SCI OF PHYSIOTHERAPHY UNI MANCHESTER
                  INFIRMARY ENG</option>
                <option value="SCIENCE OF PHYSIOTHERAPHY UNI OF OTAGO DUREDIAN NZ">SCIENCE OF PHYSIOTHERAPHY UNI OF
                  OTAGO DUREDIAN NZ</option>
                <option value="SCIENCE OF PHYSIOTHERAPHY UNI QUEENSLAND AUSTRALIA">SCIENCE OF PHYSIOTHERAPHY UNI
                  QUEENSLAND AUSTRALIA</option>
                <option value="SECOND ENGINEER OFFICER OF 3000 KW OR MORE NCTV">SECOND ENGINEER OFFICER OF 3000 KW OR
                  MORE NCTV</option>
                <option value="SECOND ENGINEER OFFICER OF 3000 KW OR MORE UNLIMITED TRADE VOYAGE">SECOND ENGINEER
                  OFFICER OF 3000 KW OR MORE UNLIMITED TRADE VOYAGE</option>
                <option value="SECOND ENGINEER OFFICER OF BETWEEN 750 & 3000 KW ON NCTV">SECOND ENGINEER OFFICER OF
                  BETWEEN 750 & 3000 KW ON NCTV</option>
                <option value="SIJ B(B1,B2,B3,B4 SIS ATAS/BAWAH TANAH) JEMAAH">SIJ B(B1,B2,B3,B4 SIS ATAS/BAWAH TANAH)
                  JEMAAH</option>
                <option value="SIJ KE'GAN ELETRIK & ELETRONIK PERTENGAHAN (MLVK)">SIJ KE'GAN ELETRIK & ELETRONIK
                  PERTENGAHAN (MLVK)</option>
                <option value="SIJ KECEKAPAN INJIN PEMANDU - OPER LOGI LOKOMOTIF">SIJ KECEKAPAN INJIN PEMANDU - OPER
                  LOGI LOKOMOTIF</option>
                <option value="SIJ KECEKAPAN P'JAGA JEN ELEK THAD - CHARGEMAN NIL">SIJ KECEKAPAN P'JAGA JEN ELEK THAD -
                  CHARGEMAN NIL</option>
                <option value="SIJ MLVK THP 3 J'TEKNIK TEK E'TRONIK RADIO & VIDEO">SIJ MLVK THP 3 J'TEKNIK TEK E'TRONIK
                  RADIO & VIDEO</option>
                <option value="SIJ MLVK(TING) J'TEKNIK FABRIKASI & MEMASANG STRUK">SIJ MLVK(TING) J'TEKNIK FABRIKASI &
                  MEMASANG STRUK</option>
                <option value="SIJ MLVK(TING) J'TEKNIK KIMP ARKA LOGAM BERPERISAI">SIJ MLVK(TING) J'TEKNIK KIMP ARKA
                  LOGAM BERPERISAI</option>
                <option value="SIJ PKT TINGGI MLVK (KEJ ELEK-KUASA)-JURUELEKTRIK">SIJ PKT TINGGI MLVK (KEJ
                  ELEK-KUASA)-JURUELEKTRIK</option>
                <option value="SIJ PKT TINGGI MLVK (KEJ MEK) - PEMESIN AM (LARIK)">SIJ PKT TINGGI MLVK (KEJ MEK) -
                  PEMESIN AM (LARIK)</option>
                <option value="SIJ PKT TINGGI MLVK (KEJ MEK) - PENYADUR ELEKTRIK">SIJ PKT TINGGI MLVK (KEJ MEK) -
                  PENYADUR ELEKTRIK</option>
                <option value="SIJ PKT TINGGI MLVK (KEJ MEK) - TUKANG KIMPAL">SIJ PKT TINGGI MLVK (KEJ MEK) - TUKANG
                  KIMPAL</option>
                <option value="SIJ PKT TINGGI MLVK (KEJ MEK)-PEMESIN AM (KIMPALAN">SIJ PKT TINGGI MLVK (KEJ MEK)-PEMESIN
                  AM (KIMPALAN</option>
                <option value="SIJ PKT TINGGI MLVK - DANDANAN RAMBUT">SIJ PKT TINGGI MLVK - DANDANAN RAMBUT</option>
                <option value="SIJ PKT TINGGI MLVK - JURUSOLEK">SIJ PKT TINGGI MLVK - JURUSOLEK</option>
                <option value="SIJ PKT TINGGI MLVK - TUKANG JAHIT & PEM. PAKAIAN">SIJ PKT TINGGI MLVK - TUKANG JAHIT &
                  PEM. PAKAIAN</option>
                <option value="SIJ SKIM THP 2 - BUILDING DECORATIVE PAINTER">SIJ SKIM THP 2 - BUILDING DECORATIVE
                  PAINTER</option>
                <option value="SIJ SKM TAHAP 2 - SERVIS DAN PENYELENGGARAAN KENDERAAN PERDAGANGAN">SIJ SKM TAHAP 2 -
                  SERVIS DAN PENYELENGGARAAN KENDERAAN PERDAGANGAN</option>
                <option value="SIJ SKM TAHAP 3 - SERVIS DAN PENYELENGGARAAN KENDERAAN PERDAGANGAN">SIJ SKM TAHAP 3 -
                  SERVIS DAN PENYELENGGARAAN KENDERAAN PERDAGANGAN</option>
                <option value="SIJ SKM THP 1 - ATENDAN LANSKAP (LANDSCAPE ATTENDANT)">SIJ SKM THP 1 - ATENDAN LANSKAP
                  (LANDSCAPE ATTENDANT)</option>
                <option value="SIJ SKM THP 1 - KERANI">SIJ SKM THP 1 - KERANI</option>
                <option value="SIJ SKM THP 1 - MANDUR">SIJ SKM THP 1 - MANDUR</option>
                <option value="SIJ SKM THP 1 - MEKANIK INDUSTRI">SIJ SKM THP 1 - MEKANIK INDUSTRI</option>
                <option value="SIJ SKM THP 1 - OPERATOR PENGELUARAN PEMPROSESAN MAKANAN">SIJ SKM THP 1 - OPERATOR
                  PENGELUARAN PEMPROSESAN MAKANAN</option>
                <option value="SIJ SKM THP 1 - SETIAUSAHA PEJABAT">SIJ SKM THP 1 - SETIAUSAHA PEJABAT</option>
                <option value="SIJ SKM THP 2 - AIR CRAFT INTERIOR MAINTENANCE TECHNICHIAN">SIJ SKM THP 2 - AIR CRAFT
                  INTERIOR MAINTENANCE TECHNICHIAN</option>
                <option value="SIJ SKM THP 2 - APPAREL FINISHING SENIOR OPERATOR">SIJ SKM THP 2 - APPAREL FINISHING
                  SENIOR OPERATOR</option>
                <option value="SIJ SKM THP 2 - APPLIKATOR PERLINDUNGAN KEBAKARAN (PASIF)">SIJ SKM THP 2 - APPLIKATOR
                  PERLINDUNGAN KEBAKARAN (PASIF)</option>
                <option value="SIJ SKM THP 2 - ARMED SECURITY OFFICER">SIJ SKM THP 2 - ARMED SECURITY OFFICER</option>
                <option value="SIJ SKM THP 2 - ARTIS MUDA REKABENTUK PINTU DAN TINGKAP">SIJ SKM THP 2 - ARTIS MUDA
                  REKABENTUK PINTU DAN TINGKAP</option>
                <option value="SIJ SKM THP 2 - ARTIS MULTIMEDIA - ANIMATOR">SIJ SKM THP 2 - ARTIS MULTIMEDIA - ANIMATOR
                </option>
                <option value="SIJ SKM THP 2 - ARTIS MULTIMEDIA - AUDIO">SIJ SKM THP 2 - ARTIS MULTIMEDIA - AUDIO
                </option>
                <option value="SIJ SKM THP 2 - ARTIS MULTIMEDIA - PENGARANGAN">SIJ SKM THP 2 - ARTIS MULTIMEDIA -
                  PENGARANGAN</option>
                <option value="SIJ SKM THP 2 - ARTIS MULTIMEDIA - VIDEO">SIJ SKM THP 2 - ARTIS MULTIMEDIA - VIDEO
                </option>
                <option value="SIJ SKM THP 2 - ARTIS MULTIMEDIA - VISUAL">SIJ SKM THP 2 - ARTIS MULTIMEDIA - VISUAL
                </option>
                <option value="SIJ SKM THP 2 - ASSISTANT SEMICONDUCTOR TECHNICIAN">SIJ SKM THP 2 - ASSISTANT
                  SEMICONDUCTOR TECHNICIAN</option>
                <option value="SIJ SKM THP 2 - AUTOMOTIF - SERVIS SELEPAS JUALAN">SIJ SKM THP 2 - AUTOMOTIF - SERVIS
                  SELEPAS JUALAN</option>
                <option value="SIJ SKM THP 2 - AUTOMOTIF ? SERVIS SELEPAS JUALAN">SIJ SKM THP 2 - AUTOMOTIF ? SERVIS
                  SELEPAS JUALAN</option>
                <option value="SIJ SKM THP 2 - COMPUTER NUMERICAL CONTROL (CNC) MACHINIST">SIJ SKM THP 2 - COMPUTER
                  NUMERICAL CONTROL (CNC) MACHINIST</option>
                <option value="SIJ SKM THP 2 - CONCIERGE COORDINATOR">SIJ SKM THP 2 - CONCIERGE COORDINATOR</option>
                <option value="SIJ SKM THP 2 - CONTEMPORARY MUSICIAN">SIJ SKM THP 2 - CONTEMPORARY MUSICIAN</option>
                <option value="SIJ SKM THP 2 - CORRUGATED FLEXOGRAPHIC SENIOR">SIJ SKM THP 2 - CORRUGATED FLEXOGRAPHIC
                  SENIOR</option>
                <option value="SIJ SKM THP 2 - DANDANAN RAMBUT">SIJ SKM THP 2 - DANDANAN RAMBUT</option>
                <option value="SIJ SKM THP 2 - DESKTOP PUBLISHING">SIJ SKM THP 2 - DESKTOP PUBLISHING</option>
                <option value="SIJ SKM THP 2 - DETECTIVES">SIJ SKM THP 2 - DETECTIVES</option>
                <option value="SIJ SKM THP 2 - DISTRIBUTION TECHNICIAN">SIJ SKM THP 2 - DISTRIBUTION TECHNICIAN</option>
                <option value="SIJ SKM THP 2 - DUBBING MIXER - POST PRODUCTION">SIJ SKM THP 2 - DUBBING MIXER - POST
                  PRODUCTION</option>
                <option value="SIJ SKM THP 2 - ELECTRONIC AUDIO VISUAL TECHNICIAN">SIJ SKM THP 2 - ELECTRONIC AUDIO
                  VISUAL TECHNICIAN</option>
                <option value="SIJ SKM THP 2 - FABRIKATOR & PEMASANG STRUKTUR KELULI">SIJ SKM THP 2 - FABRIKATOR &
                  PEMASANG STRUKTUR KELULI</option>
                <option value="SIJ SKM THP 2 - FABRIKATOR KANAN (WELDING) MOTOSIKAL">SIJ SKM THP 2 - FABRIKATOR KANAN
                  (WELDING) MOTOSIKAL</option>
                <option value="SIJ SKM THP 2 - FLEXOPRINT (CORRUGATED) PRODUCTION">SIJ SKM THP 2 - FLEXOPRINT
                  (CORRUGATED) PRODUCTION</option>
                <option value="SIJ SKM THP 2 - GENERAL BIOTECHNOLOGY LABORATORY TECHNICIAN">SIJ SKM THP 2 - GENERAL
                  BIOTECHNOLOGY LABORATORY TECHNICIAN</option>
                <option value="SIJ SKM THP 2 - HYGIENE OPERATION">SIJ SKM THP 2 - HYGIENE OPERATION</option>
                <option value="SIJ SKM THP 2 - INDUSTRIAL INSTRUMENTATION & CONTROL TECHNICIAN">SIJ SKM THP 2 -
                  INDUSTRIAL INSTRUMENTATION & CONTROL TECHNICIAN</option>
                <option value="SIJ SKM THP 2 - INTERIOR WOOD WORK SENIOR CARPENTER">SIJ SKM THP 2 - INTERIOR WOOD WORK
                  SENIOR CARPENTER</option>
                <option value="SIJ SKM THP 2 - JUKERJA PAIP">SIJ SKM THP 2 - JUKERJA PAIP</option>
                <option value="SIJ SKM THP 2 - JURKIMPAL ARKA TUNGSTEN GAS (KELULI KARBON & KELULI TAHAN KARAT)">SIJ SKM
                  THP 2 - JURKIMPAL ARKA TUNGSTEN GAS (KELULI KARBON & KELULI TAHAN KARAT)</option>
                <option value="SIJ SKM THP 2 - JURU UKIR KAYU KANAN">SIJ SKM THP 2 - JURU UKIR KAYU KANAN</option>
                <option value="SIJ SKM THP 2 - JURU URUT (MASSEUR)">SIJ SKM THP 2 - JURU URUT (MASSEUR)</option>
                <option value="SIJ SKM THP 2 - JURUAUDIOGRAF INDUSTRI - BINAAN BERKIMPALAN">SIJ SKM THP 2 -
                  JURUAUDIOGRAF INDUSTRI - BINAAN BERKIMPALAN</option>
                <option value="SIJ SKM THP 2 - JURUBATIK LUKIS KANAN (SENIOR HAND DRAWN BATIK ARTIST)">SIJ SKM THP 2 -
                  JURUBATIK LUKIS KANAN (SENIOR HAND DRAWN BATIK ARTIST)</option>
                <option value="SIJ SKM THP 2 - JURUBATIK SKRIP KANAN">SIJ SKM THP 2 - JURUBATIK SKRIP KANAN</option>
                <option value="SIJ SKM THP 2 - JURUBATIK TERAP KANAN">SIJ SKM THP 2 - JURUBATIK TERAP KANAN</option>
                <option value="SIJ SKM THP 2 - JURUBENTUK KEPINGAN LOGAM">SIJ SKM THP 2 - JURUBENTUK KEPINGAN LOGAM
                </option>
                <option value="SIJ SKM THP 2 - JURUBINA BANGUNAN">SIJ SKM THP 2 - JURUBINA BANGUNAN</option>
                <option value="SIJ SKM THP 2 - JURUBINA BANGUNAN BERASASKAN KAYU">SIJ SKM THP 2 - JURUBINA BANGUNAN
                  BERASASKAN KAYU</option>
                <option value="SIJ SKM THP 2 - JURUCETAK LITHOGRAPHIC KANAN">SIJ SKM THP 2 - JURUCETAK LITHOGRAPHIC
                  KANAN</option>
                <option value="SIJ SKM THP 2 - JURUELEKTRIK MARIN">SIJ SKM THP 2 - JURUELEKTRIK MARIN</option>
                <option value="SIJ SKM THP 2 - JURUESTETIK">SIJ SKM THP 2 - JURUESTETIK</option>
                <option value="SIJ SKM THP 2 - JURUFOUNDRI KANAN">SIJ SKM THP 2 - JURUFOUNDRI KANAN</option>
                <option value="SIJ SKM THP 2 - JURUGEGAS GAS KELAS II">SIJ SKM THP 2 - JURUGEGAS GAS KELAS II</option>
                <option value="SIJ SKM THP 2 - JURUKIMPAL ARKA LOGAM BERPERISAI (KELULI KARBON & KELULI TAHAN KARAT)">
                  SIJ SKM THP 2 - JURUKIMPAL ARKA LOGAM BERPERISAI (KELULI KARBON & KELULI TAHAN KARAT)</option>
                <option value="SIJ SKM THP 2 - JURUKIMPAL GAS">SIJ SKM THP 2 - JURUKIMPAL GAS</option>
                <option
                  value="SIJ SKM THP 2 - JURUKIMPAL KIMPALAN ARKA LOGAM GAS (KELULI KARBON, KELULI TAHAN KARAT & ALUMINIUM)">
                  SIJ SKM THP 2 - JURUKIMPAL KIMPALAN ARKA LOGAM GAS (KELULI KARBON, KELULI TAHAN KARAT & ALUMINIUM)
                </option>
                <option value="SIJ SKM THP 2 - JURUKIMPAL LOGAM TANPA FERUS">SIJ SKM THP 2 - JURUKIMPAL LOGAM TANPA
                  FERUS</option>
                <option value="SIJ SKM THP 2 - JURUKRAF BARANG KEMAS KANAN">SIJ SKM THP 2 - JURUKRAF BARANG KEMAS KANAN
                </option>
                <option value="SIJ SKM THP 2 - JURUKRAF BARANGAN KASAR LOGAM KANAN">SIJ SKM THP 2 - JURUKRAF BARANGAN
                  KASAR LOGAM KANAN</option>
                <option value="SIJ SKM THP 2 - JURUKRAF BARANGAN KASAR LOGAM KANAN">SIJ SKM THP 2 - JURUKRAF BARANGAN
                  KASAR LOGAM KANAN</option>
                <option value="SIJ SKM THP 2 - JURUPERANCAH (PREFABRICATED)">SIJ SKM THP 2 - JURUPERANCAH
                  (PREFABRICATED)</option>
                <option value="SIJ SKM THP 2 - JURUPERANCAH (TUBULAR)">SIJ SKM THP 2 - JURUPERANCAH (TUBULAR)</option>
                <option value="SIJ SKM THP 2 - JURUTEKNIK (PENGSUISAN 3G)">SIJ SKM THP 2 - JURUTEKNIK (PENGSUISAN 3G)
                </option>
                <option value="SIJ SKM THP 2 - JURUTEKNIK ALATAN KEPERSISAN ELEKTRIKAL">SIJ SKM THP 2 - JURUTEKNIK
                  ALATAN KEPERSISAN ELEKTRIKAL</option>
                <option value="SIJ SKM THP 2 - JURUTEKNIK ALATAN KEPERSISAN MEKANIKAL">SIJ SKM THP 2 - JURUTEKNIK ALATAN
                  KEPERSISAN MEKANIKAL</option>
                <option value="SIJ SKM THP 2 - JURUTEKNIK ANTARA MUKA">SIJ SKM THP 2 - JURUTEKNIK ANTARA MUKA</option>
                <option value="SIJ SKM THP 2 - JURUTEKNIK AUTOMASI">SIJ SKM THP 2 - JURUTEKNIK AUTOMASI</option>
                <option value="SIJ SKM THP 2 - JURUTEKNIK AUTOMOTIF SERVIS TAYAR">SIJ SKM THP 2 - JURUTEKNIK AUTOMOTIF
                  SERVIS TAYAR</option>
                <option value="SIJ SKM THP 2 - JURUTEKNIK BUFFER STORAGE">SIJ SKM THP 2 - JURUTEKNIK BUFFER STORAGE
                </option>
                <option value="SIJ SKM THP 2 - JURUTEKNIK ELEKTRIK">SIJ SKM THP 2 - JURUTEKNIK ELEKTRIK</option>
                <option value="SIJ SKM THP 2 - JURUTEKNIK ELEKTRONIK INDUSTRI - PERALATAN">SIJ SKM THP 2 - JURUTEKNIK
                  ELEKTRONIK INDUSTRI - PERALATAN</option>
                <option value="SIJ SKM THP 2 - JURUTEKNIK EMBEDDED SYSTEM (REKABENTUK)">SIJ SKM THP 2 - JURUTEKNIK
                  EMBEDDED SYSTEM (REKABENTUK)</option>
                <option value="SIJ SKM THP 2 - JURUTEKNIK FREKUENSI RADIO TANPA WAYAR">SIJ SKM THP 2 - JURUTEKNIK
                  FREKUENSI RADIO TANPA WAYAR</option>
                <option value="SIJ SKM THP 2 - JURUTEKNIK INSTRUMENTASI AGIHAN AIR">SIJ SKM THP 2 - JURUTEKNIK
                  INSTRUMENTASI AGIHAN AIR</option>
                <option
                  value="SIJ SKM THP 2 - JURUTEKNIK INTERFERENCE/ELECTROMAGNETIC COMPATIBILITY (EMI/EMC) (REKABENTUK)">
                  SIJ SKM THP 2 - JURUTEKNIK INTERFERENCE/ELECTROMAGNETIC COMPATIBILITY (EMI/EMC) (REKABENTUK)</option>
                <option value="SIJ SKM THP 2 - JURUTEKNIK JAM">SIJ SKM THP 2 - JURUTEKNIK JAM</option>
                <option value="SIJ SKM THP 2 - JURUTEKNIK JAMINAN KUALITI">SIJ SKM THP 2 - JURUTEKNIK JAMINAN KUALITI
                </option>
                <option value="SIJ SKM THP 2 - JURUTEKNIK KANAN PRA- CETAK">SIJ SKM THP 2 - JURUTEKNIK KANAN PRA- CETAK
                </option>
                <option value="SIJ SKM THP 2 - JURUTEKNIK KENDERAAN MOTOR">SIJ SKM THP 2 - JURUTEKNIK KENDERAAN MOTOR
                </option>
                <option value="SIJ SKM THP 2 - JURUTEKNIK KESELAMATAN (REKABENTUK)">SIJ SKM THP 2 - JURUTEKNIK
                  KESELAMATAN (REKABENTUK)</option>
                <option value="SIJ SKM THP 2 - JURUTEKNIK MAKMAL ANALITIKAL">SIJ SKM THP 2 - JURUTEKNIK MAKMAL
                  ANALITIKAL</option>
                <option value="SIJ SKM THP 2 - JURUTEKNIK MAKMAL BIOTEKNOLOGI UMUM">SIJ SKM THP 2 - JURUTEKNIK MAKMAL
                  BIOTEKNOLOGI UMUM</option>
                <option value="SIJ SKM THP 2 - JURUTEKNIK MAKMAL BIOTEKNOLOGI UMUM">SIJ SKM THP 2 - JURUTEKNIK MAKMAL
                  BIOTEKNOLOGI UMUM</option>
                <option value="SIJ SKM THP 2 - JURUTEKNIK MOTOSIKAL KANAN">SIJ SKM THP 2 - JURUTEKNIK MOTOSIKAL KANAN
                </option>
                <option value="SIJ SKM THP 2 - JURUTEKNIK OPERASI KAWALAN PROSES">SIJ SKM THP 2 - JURUTEKNIK OPERASI
                  KAWALAN PROSES</option>
                <option value="SIJ SKM THP 2 - JURUTEKNIK PAPARAN ELEKTRONIK OPTIKAL (REKABENTUK)">SIJ SKM THP 2 -
                  JURUTEKNIK PAPARAN ELEKTRONIK OPTIKAL (REKABENTUK)</option>
                <option value="SIJ SKM THP 2 - JURUTEKNIK PEMPROSESAN ISYARAT DIGITAL (REKABENTUK)">SIJ SKM THP 2 -
                  JURUTEKNIK PEMPROSESAN ISYARAT DIGITAL (REKABENTUK)</option>
                <option value="SIJ SKM THP 2 - JURUTEKNIK PENYAMANAN UDARA AUTOMOTIF">SIJ SKM THP 2 - JURUTEKNIK
                  PENYAMANAN UDARA AUTOMOTIF</option>
                <option value="SIJ SKM THP 2 - JURUTEKNIK PENYENGGARAN DALAMAN PESAWAT">SIJ SKM THP 2 - JURUTEKNIK
                  PENYENGGARAN DALAMAN PESAWAT</option>
                <option value="SIJ SKM THP 2 - JURUTEKNIK PERCETAKAN (ELEKTRIK/ELEKTRONIK)">SIJ SKM THP 2 - JURUTEKNIK
                  PERCETAKAN (ELEKTRIK/ELEKTRONIK)</option>
                <option value="SIJ SKM THP 2 - JURUTEKNIK PERCETAKAN (MEKANIKAL)">SIJ SKM THP 2 - JURUTEKNIK PERCETAKAN
                  (MEKANIKAL)</option>
                <option value="SIJ SKM THP 2 - JURUTEKNIK PERTANIAN RENDAH (BUAH-BUAHAN)">SIJ SKM THP 2 - JURUTEKNIK
                  PERTANIAN RENDAH (BUAH-BUAHAN)</option>
                <option value="SIJ SKM THP 2 - JURUTEKNIK PERTANIAN RENDAH (SAYUR-SAYURAN)">SIJ SKM THP 2 - JURUTEKNIK
                  PERTANIAN RENDAH (SAYUR-SAYURAN)</option>
                <option value="SIJ SKM THP 2 - JURUTEKNIK PERTANIAN RENDAH (TANAMAN HIASAN)">SIJ SKM THP 2 - JURUTEKNIK
                  PERTANIAN RENDAH (TANAMAN HIASAN)</option>
                <option value="SIJ SKM THP 2 - JURUTEKNIK PERUBATAN KECEMASAN ASAS">SIJ SKM THP 2 - JURUTEKNIK PERUBATAN
                  KECEMASAN ASAS</option>
                <option value="SIJ SKM THP 2 - JURUTEKNIK PESAWAT - KELENGKAPAN BANTUAN DARAT (AVIONIK)">SIJ SKM THP 2 -
                  JURUTEKNIK PESAWAT - KELENGKAPAN BANTUAN DARAT (AVIONIK)</option>
                <option value="SIJ SKM THP 2 - JURUTEKNIK RANGKAIAN (REKABENTUK)">SIJ SKM THP 2 - JURUTEKNIK RANGKAIAN
                  (REKABENTUK)</option>
                <option value="SIJ SKM THP 2 - JURUTEKNIK RANGKAIAN AKSES RADIO">SIJ SKM THP 2 - JURUTEKNIK RANGKAIAN
                  AKSES RADIO</option>
                <option value="SIJ SKM THP 2 - JURUTEKNIK REKABENTUK ELEKTRONIK PENGGUNA">SIJ SKM THP 2 - JURUTEKNIK
                  REKABENTUK ELEKTRONIK PENGGUNA</option>
                <option value="SIJ SKM THP 2 - JURUTEKNIK REKABENTUK PRODUK INDUSTRI">SIJ SKM THP 2 - JURUTEKNIK
                  REKABENTUK PRODUK INDUSTRI</option>
                <option value="SIJ SKM THP 2 - JURUTEKNIK RENDAH AKUAKULTUR">SIJ SKM THP 2 - JURUTEKNIK RENDAH
                  AKUAKULTUR</option>
                <option value="SIJ SKM THP 2 - JURUTEKNIK RENDAH PERIKANAN">SIJ SKM THP 2 - JURUTEKNIK RENDAH PERIKANAN
                </option>
                <option value="SIJ SKM THP 2 - JURUTEKNIK SERIMALA MARIN">SIJ SKM THP 2 - JURUTEKNIK SERIMALA MARIN
                </option>
                <option value="SIJ SKM THP 2 - JURUTEKNIK TANAMAN">SIJ SKM THP 2 - JURUTEKNIK TANAMAN</option>
                <option value="SIJ SKM THP 2 - JURUTENIK KANAN PRA-CETAK">SIJ SKM THP 2 - JURUTENIK KANAN PRA-CETAK
                </option>
                <option value="SIJ SKM THP 2 - JURUTENUN KANAN - KRAF PUA">SIJ SKM THP 2 - JURUTENUN KANAN - KRAF PUA
                </option>
                <option value="SIJ SKM THP 2 - JURUTENUN KANAN - TENUN TAPESTRI">SIJ SKM THP 2 - JURUTENUN KANAN - TENUN
                  TAPESTRI</option>
                <option value="SIJ SKM THP 2 - KAPTAN MAKANAN & MINUMAN (F & B CAPTAIN)">SIJ SKM THP 2 - KAPTAN MAKANAN
                  & MINUMAN (F & B CAPTAIN)</option>
                <option value="SIJ SKM THP 2 - KAWALAN KUALITI INDUSTRI">SIJ SKM THP 2 - KAWALAN KUALITI INDUSTRI
                </option>
                <option value="SIJ SKM THP 2 - KERANI AKAUN (ACCOUNT CLERK)">SIJ SKM THP 2 - KERANI AKAUN (ACCOUNT
                  CLERK)</option>
                <option value="SIJ SKM THP 2 - KERANI AUDIT">SIJ SKM THP 2 - KERANI AUDIT</option>
                <option value="SIJ SKM THP 2 - KONDUKTOR LADANG">SIJ SKM THP 2 - KONDUKTOR LADANG</option>
                <option value="SIJ SKM THP 2 - KOORDINATOR LANSKAP (LANDSCAPE COORDINATOR)">SIJ SKM THP 2 - KOORDINATOR
                  LANSKAP (LANDSCAPE COORDINATOR)</option>
                <option value="SIJ SKM THP 2 - LIGHTING ASSISTANT">SIJ SKM THP 2 - LIGHTING ASSISTANT</option>
                <option value="SIJ SKM THP 2 - MARINE ELECTRONIC TECHNICIAN">SIJ SKM THP 2 - MARINE ELECTRONIC
                  TECHNICIAN</option>
                <option value="SIJ SKM THP 2 - MEKANIK INDUSTRI">SIJ SKM THP 2 - MEKANIK INDUSTRI</option>
                <option value="SIJ SKM THP 2 - MEKANIK JENTERA PERTANIAN">SIJ SKM THP 2 - MEKANIK JENTERA PERTANIAN
                </option>
                <option value="SIJ SKM THP 2 - MEKANIK KELENGKAPAN TOLAK TANAH">SIJ SKM THP 2 - MEKANIK KELENGKAPAN
                  TOLAK TANAH</option>
                <option value="SIJ SKM THP 2 - MEKANIK KENDERAAN MOTOR">SIJ SKM THP 2 - MEKANIK KENDERAAN MOTOR</option>
                <option value="SIJ SKM THP 2 - MEKANIK MARIN (MEKANIKAL)">SIJ SKM THP 2 - MEKANIK MARIN (MEKANIKAL)
                </option>
                <option value="SIJ SKM THP 2 - MEKANIK PENYEJUKBEKUAN DAN PENYAMANAN UDARA - DOMESTIK">SIJ SKM THP 2 -
                  MEKANIK PENYEJUKBEKUAN DAN PENYAMANAN UDARA - DOMESTIK</option>
                <option value="SIJ SKM THP 2 - MEKANIK PENYEJUKBEKUAN DAN PENYAMANAN UDARA - DOMESTIK">SIJ SKM THP 2 -
                  MEKANIK PENYEJUKBEKUAN DAN PENYAMANAN UDARA - DOMESTIK</option>
                <option value="SIJ SKM THP 2 - MEKANIK PESAWAT KELENGKAPAN BANTUAN DARAT (AVIONIK)">SIJ SKM THP 2 -
                  MEKANIK PESAWAT KELENGKAPAN BANTUAN DARAT (AVIONIK)</option>
                <option value="SIJ SKM THP 2 - MEKANIK PESAWAT KELENGKAPAN BANTUAN DARAT (MEKANIKAL)">SIJ SKM THP 2 -
                  MEKANIK PESAWAT KELENGKAPAN BANTUAN DARAT (MEKANIKAL)</option>
                <option value="SIJ SKM THP 2 - MEKANIK RADAR (SENGGARAAN)">SIJ SKM THP 2 - MEKANIK RADAR (SENGGARAAN)
                </option>
                <option value="SIJ SKM THP 2 - MOTORCYCLE PAINTING SENIOR OPERATOR">SIJ SKM THP 2 - MOTORCYCLE PAINTING
                  SENIOR OPERATOR</option>
                <option value="SIJ SKM THP 2 - MUSICIAN (RHYTHM SECTION)">SIJ SKM THP 2 - MUSICIAN (RHYTHM SECTION)
                </option>
                <option value="SIJ SKM THP 2 - OPERASI FABRIKASI PAIP">SIJ SKM THP 2 - OPERASI FABRIKASI PAIP</option>
                <option value="SIJ SKM THP 2 - OPERASI KAWALAN KUMBAHAN">SIJ SKM THP 2 - OPERASI KAWALAN KUMBAHAN
                </option>
                <option value="SIJ SKM THP 2 - OPERASI MAKMAL KIMIA">SIJ SKM THP 2 - OPERASI MAKMAL KIMIA</option>
                <option value="SIJ SKM THP 2 - OPERASI MAKMAL MOLEKULAR BIOLOGI">SIJ SKM THP 2 - OPERASI MAKMAL
                  MOLEKULAR BIOLOGI</option>
                <option value="SIJ SKM THP 2 - OPERASI MAKMAL PEMERIKSAAN DOKUMEN">SIJ SKM THP 2 - OPERASI MAKMAL
                  PEMERIKSAAN DOKUMEN</option>
                <option value="SIJ SKM THP 2 - OPERASI PEMBUATAN PERABOT">SIJ SKM THP 2 - OPERASI PEMBUATAN PERABOT
                </option>
                <option value="SIJ SKM THP 2 - OPERASI PEMESINAN">SIJ SKM THP 2 - OPERASI PEMESINAN</option>
                <option value="SIJ SKM THP 2 - OPERASI PENGAGIHAN AIR">SIJ SKM THP 2 - OPERASI PENGAGIHAN AIR</option>
                <option value="SIJ SKM THP 2 - OPERASI PENYELENGGARAAN TAMAN">SIJ SKM THP 2 - OPERASI PENYELENGGARAAN
                  TAMAN</option>
                <option value="SIJ SKM THP 2 - OPERASI PERKHIDMATAN SEKURITI">SIJ SKM THP 2 - OPERASI PERKHIDMATAN
                  SEKURITI</option>
                <option value="SIJ SKM THP 2 - OPERASI SERVIS MAKANAN DAN MINUMAN">SIJ SKM THP 2 - OPERASI SERVIS
                  MAKANAN DAN MINUMAN</option>
                <option value="SIJ SKM THP 2 - OPERASI SUNTIKAN ACUAN PLASTIK">SIJ SKM THP 2 - OPERASI SUNTIKAN ACUAN
                  PLASTIK</option>
                <option value="SIJ SKM THP 2 - OPERATOR KANAN MESIN JAHITAN INDUSTRI">SIJ SKM THP 2 - OPERATOR KANAN
                  MESIN JAHITAN INDUSTRI</option>
                <option value="SIJ SKM THP 2 - OPERATOR KANAN PEMASANGAN BADAN AUTOMOBIL">SIJ SKM THP 2 - OPERATOR KANAN
                  PEMASANGAN BADAN AUTOMOBIL</option>
                <option value="SIJ SKM THP 2 - OPERATOR KANAN PEMASANGAN ENJIN MOTOSIKAL">SIJ SKM THP 2 - OPERATOR KANAN
                  PEMASANGAN ENJIN MOTOSIKAL</option>
                <option value="SIJ SKM THP 2 - OPERATOR KANAN PENGELUARAN SERAMIK TERMAJU">SIJ SKM THP 2 - OPERATOR
                  KANAN PENGELUARAN SERAMIK TERMAJU</option>
                <option value="SIJ SKM THP 2 - OPERATOR KANAN PERAPIAN BADAN KENDERAAN PENUMPANG">SIJ SKM THP 2 -
                  OPERATOR KANAN PERAPIAN BADAN KENDERAAN PENUMPANG</option>
                <option value="SIJ SKM THP 2 - OPERATOR KIMPALAN ARKA TERBENAM (KELULI KARBON)">SIJ SKM THP 2 - OPERATOR
                  KIMPALAN ARKA TERBENAM (KELULI KARBON)</option>
                <option value="SIJ SKM THP 2 - OPERATOR KOMPOSIT SENIOR">SIJ SKM THP 2 - OPERATOR KOMPOSIT SENIOR
                </option>
                <option value="SIJ SKM THP 2 - OPERATOR MENGECAT MOTOSIKAL KANAN">SIJ SKM THP 2 - OPERATOR MENGECAT
                  MOTOSIKAL KANAN</option>
                <option value="SIJ SKM THP 2 - OPERATOR PENGELUARAN KANAN (PEMBUATAN KELULI)">SIJ SKM THP 2 - OPERATOR
                  PENGELUARAN KANAN (PEMBUATAN KELULI)</option>
                <option value="SIJ SKM THP 2 - OPERATOR PENGELUARAN KANAN PEMPROSESAN MAKANAN">SIJ SKM THP 2 - OPERATOR
                  PENGELUARAN KANAN PEMPROSESAN MAKANAN</option>
                <option value="SIJ SKM THP 2 - OPERATOR PENYADURAN MOTOSIKAL KANAN">SIJ SKM THP 2 - OPERATOR PENYADURAN
                  MOTOSIKAL KANAN</option>
                <option value="SIJ SKM THP 2 - OPERATOR PERCETAKAN DIGITAL (NIP)">SIJ SKM THP 2 - OPERATOR PERCETAKAN
                  DIGITAL (NIP)</option>
                <option value="SIJ SKM THP 2 - OPERATOR PERHUBUNGAN (ELEKTRONIK)">SIJ SKM THP 2 - OPERATOR PERHUBUNGAN
                  (ELEKTRONIK)</option>
                <option value="SIJ SKM THP 2 - OPERATOR TERMINAL (FRONT END LOADER & REACH STACKER)">SIJ SKM THP 2 -
                  OPERATOR TERMINAL (FRONT END LOADER & REACH STACKER)</option>
                <option value="SIJ SKM THP 2 - PEGAWAI KESELAMATAN UNIT ANJING (K9)">SIJ SKM THP 2 - PEGAWAI KESELAMATAN
                  UNIT ANJING (K9)</option>
                <option value="SIJ SKM THP 2 - PELUKIS PELAN KEJURUTERAAN AWAM DAN STRUKTUR">SIJ SKM THP 2 - PELUKIS
                  PELAN KEJURUTERAAN AWAM DAN STRUKTUR</option>
                <option value="SIJ SKM THP 2 - PELUKIS PELAN KEJURUTERAAN MEKANIKAL">SIJ SKM THP 2 - PELUKIS PELAN
                  KEJURUTERAAN MEKANIKAL</option>
                <option value="SIJ SKM THP 2 - PELUKIS PELAN SENIBINA">SIJ SKM THP 2 - PELUKIS PELAN SENIBINA</option>
                <option value="SIJ SKM THP 2 - PEMASANG AKSESORI KANAN AUTOMATIF">SIJ SKM THP 2 - PEMASANG AKSESORI
                  KANAN AUTOMATIF</option>
                <option value="SIJ SKM THP 2 - PEMASANG BADAN MOTOSIKAL KANAN">SIJ SKM THP 2 - PEMASANG BADAN MOTOSIKAL
                  KANAN</option>
                <option value="SIJ SKM THP 2 - PEMASANG ENJIN AUTOMOBIL">SIJ SKM THP 2 - PEMASANG ENJIN AUTOMOBIL
                </option>
                <option value="SIJ SKM THP 2 - PEMASANG KANAN SILING HIASAN">SIJ SKM THP 2 - PEMASANG KANAN SILING
                  HIASAN</option>
                <option value="SIJ SKM THP 2 - PEMASANG KEKUDA BUMBUNG (KAYU)">SIJ SKM THP 2 - PEMASANG KEKUDA BUMBUNG
                  (KAYU)</option>
                <option value="SIJ SKM THP 2 - PEMASANG KEKUDA BUMBUNG (LIGHT GAUGE STEEL)">SIJ SKM THP 2 - PEMASANG
                  KEKUDA BUMBUNG (LIGHT GAUGE STEEL)</option>
                <option value="SIJ SKM THP 2 - PEMASANG KERANGKA BADAN">SIJ SKM THP 2 - PEMASANG KERANGKA BADAN</option>
                <option value="SIJ SKM THP 2 - PEMASANG PERLINDUNGAN KEBAKARAN (ELEKTRIK)">SIJ SKM THP 2 - PEMASANG
                  PERLINDUNGAN KEBAKARAN (ELEKTRIK)</option>
                <option value="SIJ SKM THP 2 - PEMASANG PERLINDUNGAN KEBAKARAN (MEKANIKAL)">SIJ SKM THP 2 - PEMASANG
                  PERLINDUNGAN KEBAKARAN (MEKANIKAL)</option>
                <option value="SIJ SKM THP 2 - PEMASANG SISTEM PERKABELAN BERSTRUKTUR">SIJ SKM THP 2 - PEMASANG SISTEM
                  PERKABELAN BERSTRUKTUR</option>
                <option value="SIJ SKM THP 2 - PEMASANGAN DAN PENGUBAHSUAIAN AKSESORI KERETA">SIJ SKM THP 2 - PEMASANGAN
                  DAN PENGUBAHSUAIAN AKSESORI KERETA</option>
                <option value="SIJ SKM THP 2 - PEMASANGAN DAN PENYELENGGARAAN ELEKTRIK ? SATU FASA">SIJ SKM THP 2 -
                  PEMASANGAN DAN PENYELENGGARAAN ELEKTRIK ? SATU FASA</option>
                <option value="SIJ SKM THP 2 - PEMASANGAN DAN TROUBLESHOOTING PERALATAN ELEKTRONIK">SIJ SKM THP 2 -
                  PEMASANGAN DAN TROUBLESHOOTING PERALATAN ELEKTRONIK</option>
                <option value="SIJ SKM THP 2 - PEMASANGAN SISTEM GAS ASLI KENDERAAN">SIJ SKM THP 2 - PEMASANGAN SISTEM
                  GAS ASLI KENDERAAN</option>
                <option value="SIJ SKM THP 2 - PEMASANGAN, PENGUJIAN DAN PENYELENGGARAAN LIF DAN ESKALATOR">SIJ SKM THP
                  2 - PEMASANGAN, PENGUJIAN DAN PENYELENGGARAAN LIF DAN ESKALATOR</option>
                <option value="SIJ SKM THP 2 - PEMBAIK TRIM & FINAL LINE">SIJ SKM THP 2 - PEMBAIK TRIM & FINAL LINE
                </option>
                <option value="SIJ SKM THP 2 - PEMBANGUNAN APLIKASI - PENGATURCARA">SIJ SKM THP 2 - PEMBANGUNAN APLIKASI
                  - PENGATURCARA</option>
                <option value="SIJ SKM THP 2 - PEMBANTU JURUTEKNIK PENYENGGARAAN INDUSTRI BERAT">SIJ SKM THP 2 -
                  PEMBANTU JURUTEKNIK PENYENGGARAAN INDUSTRI BERAT</option>
                <option value="SIJ SKM THP 2 - PEMBANTU JURUTEKNIK RANGKAIAN KOMPUTER">SIJ SKM THP 2 - PEMBANTU
                  JURUTEKNIK RANGKAIAN KOMPUTER</option>
                <option value="SIJ SKM THP 2 - PEMBANTU JURUTEKNIK SISTEM KOMPUTER">SIJ SKM THP 2 - PEMBANTU JURUTEKNIK
                  SISTEM KOMPUTER</option>
                <option value="SIJ SKM THP 2 - PEMBANTU JURUTEKNIK TELEKOMUNIKASI PEMASANGAN">SIJ SKM THP 2 - PEMBANTU
                  JURUTEKNIK TELEKOMUNIKASI PEMASANGAN</option>
                <option value="SIJ SKM THP 2 - PEMBANTU JURUTEKNIK TELEKOMUNIKASI PENYENGGARAAN">SIJ SKM THP 2 -
                  PEMBANTU JURUTEKNIK TELEKOMUNIKASI PENYENGGARAAN</option>
                <option value="SIJ SKM THP 2 - PEMBANTU KAUNTER HADAPAN">SIJ SKM THP 2 - PEMBANTU KAUNTER HADAPAN
                </option>
                <option value="SIJ SKM THP 2 - PEMBANTU NAKHODA PUKAT JERUT">SIJ SKM THP 2 - PEMBANTU NAKHODA PUKAT
                  JERUT</option>
                <option value="SIJ SKM THP 2 - PEMBANTU NAKHODA TEKNOLOGI PERIKANAN TANGKAPAN">SIJ SKM THP 2 - PEMBANTU
                  NAKHODA TEKNOLOGI PERIKANAN TANGKAPAN</option>
                <option value="SIJ SKM THP 2 - PEMBANTU PENGATURCARA BIOINFORMATIK">SIJ SKM THP 2 - PEMBANTU
                  PENGATURCARA BIOINFORMATIK</option>
                <option value="SIJ SKM THP 2 - PEMBANTU PENTADBIRAN (ADMIN. ASSISTANT)">SIJ SKM THP 2 - PEMBANTU
                  PENTADBIRAN (ADMIN. ASSISTANT)</option>
                <option value="SIJ SKM THP 2 - PEMBANTU PENYELENGGARAN PERLINDUNGAN KEBAKARAN">SIJ SKM THP 2 - PEMBANTU
                  PENYELENGGARAN PERLINDUNGAN KEBAKARAN</option>
                <option value="SIJ SKM THP 2 - PEMBANTU PENYELIA PENGELUARAN SERAMIK (PLASTIC FORMING)">SIJ SKM THP 2 -
                  PEMBANTU PENYELIA PENGELUARAN SERAMIK (PLASTIC FORMING)</option>
                <option value="SIJ SKM THP 2 - PEMBANTU PENYELIA PENGELUARAN SERAMIK (POWDER PRESS)">SIJ SKM THP 2 -
                  PEMBANTU PENYELIA PENGELUARAN SERAMIK (POWDER PRESS)</option>
                <option value="SIJ SKM THP 2 - PEMBANTU PENYELIA PENGELUARAN SERAMIK (SLIP CASTING)">SIJ SKM THP 2 -
                  PEMBANTU PENYELIA PENGELUARAN SERAMIK (SLIP CASTING)</option>
                <option value="SIJ SKM THP 2 - PEMBANTU PERCUKAIAN">SIJ SKM THP 2 - PEMBANTU PERCUKAIAN</option>
                <option value="SIJ SKM THP 2 - PEMBANTU RENDAH VETERINAR">SIJ SKM THP 2 - PEMBANTU RENDAH VETERINAR
                </option>
                <option value="SIJ SKM THP 2 - PEMBANTU TADBIR SISTEM MAKLUMAT">SIJ SKM THP 2 - PEMBANTU TADBIR SISTEM
                  MAKLUMAT</option>
                <option value="SIJ SKM THP 2 - PEMBUAT ACUAN DAN REKAAN PEWTER">SIJ SKM THP 2 - PEMBUAT ACUAN DAN REKAAN
                  PEWTER</option>
                <option value="SIJ SKM THP 2 - PEMBUAT ALAS KANAN">SIJ SKM THP 2 - PEMBUAT ALAS KANAN</option>
                <option value="SIJ SKM THP 2 - PEMBUAT KANAN LOGAM HIASAN">SIJ SKM THP 2 - PEMBUAT KANAN LOGAM HIASAN
                </option>
                <option value="SIJ SKM THP 2 - PEMBUAT KANAN PINTU DAN TINGKAP">SIJ SKM THP 2 - PEMBUAT KANAN PINTU DAN
                  TINGKAP</option>
                <option value="SIJ SKM THP 2 - PEMBUAT PERABOT KANAN">SIJ SKM THP 2 - PEMBUAT PERABOT KANAN</option>
                <option value="SIJ SKM THP 2 - PEMBUAT PERKAKASAN - ACUAN SUNTIKAN PLASTIK">SIJ SKM THP 2 - PEMBUAT
                  PERKAKASAN - ACUAN SUNTIKAN PLASTIK</option>
                <option value="SIJ SKM THP 2 - PEMBUATAN KOMPOSIT">SIJ SKM THP 2 - PEMBUATAN KOMPOSIT</option>
                <option value="SIJ SKM THP 2 - PEMBUATAN PAKAIAN WANITA">SIJ SKM THP 2 - PEMBUATAN PAKAIAN WANITA
                </option>
                <option value="SIJ SKM THP 2 - PEMBUATAN PASTRI">SIJ SKM THP 2 - PEMBUATAN PASTRI</option>
                <option value="SIJ SKM THP 2 - PEMBUATAN ROTI">SIJ SKM THP 2 - PEMBUATAN ROTI</option>
                <option value="SIJ SKM THP 2 - PEMERIKSA AKHIR MOTOSIKAL">SIJ SKM THP 2 - PEMERIKSA AKHIR MOTOSIKAL
                </option>
                <option value="SIJ SKM THP 2 - PEMERIKSA KIMPALAN">SIJ SKM THP 2 - PEMERIKSA KIMPALAN</option>
                <option value="SIJ SKM THP 2 - PEMERIKSAAN KIMPALAN">SIJ SKM THP 2 - PEMERIKSAAN KIMPALAN</option>
                <option
                  value="SIJ SKM THP 2 - PEMERIKSAAN RADIOGRAF ? BINAAN BERKIMPALAN (MINYAK DAN GAS)SIJ SKM THP 2 - PEMERIKSAAN RADIOGRAF ? BINAAN BERKIMPALAN (MINYAK DAN GAS)">
                  SIJ SKM THP 2 - PEMERIKSAAN RADIOGRAF ? BINAAN BERKIMPALAN (MINYAK DAN GAS)</option>
                <option
                  value="SIJ SKM THP 2 - PEMERIKSAAN ULTRASONIK ? BINAAN BERKIMPALAN (PENGUKURAN KETEBALAN DAN PELAMINAAN) MI">
                  SIJ SKM THP 2 - PEMERIKSAAN ULTRASONIK ? BINAAN BERKIMPALAN (PENGUKURAN KETEBALAN DAN PELAMINAAN) MI
                </option>
                <option value="SIJ SKM THP 2 - PEMESIN AM (OPERASI CANAI)">SIJ SKM THP 2 - PEMESIN AM (OPERASI CANAI)
                </option>
                <option value="SIJ SKM THP 2 - PEMESIN AM (OPERASI KISAR)">SIJ SKM THP 2 - PEMESIN AM (OPERASI KISAR)
                </option>
                <option value="SIJ SKM THP 2 - PEMESIN AM (OPERASI LARIK)">SIJ SKM THP 2 - PEMESIN AM (OPERASI LARIK)
                </option>
                <option value="SIJ SKM THP 2 - PEMPROSESAN PRODUK PERIKANAN">SIJ SKM THP 2 - PEMPROSESAN PRODUK
                  PERIKANAN</option>
                <option value="SIJ SKM THP 2 - PEMUZIK TRADISIONAL MELAYU">SIJ SKM THP 2 - PEMUZIK TRADISIONAL MELAYU
                </option>
                <option value="SIJ SKM THP 2 - PENDANDAN RAMBUT">SIJ SKM THP 2 - PENDANDAN RAMBUT</option>
                <option value="SIJ SKM THP 2 - PENENUN KANAN SONGKET & DASTER">SIJ SKM THP 2 - PENENUN KANAN SONGKET &
                  DASTER</option>
                <option value="SIJ SKM THP 2 - PENENUN KANAN TAPESTRI">SIJ SKM THP 2 - PENENUN KANAN TAPESTRI</option>
                <option value="SIJ SKM THP 2 - PENENUN PUA KANAN">SIJ SKM THP 2 - PENENUN PUA KANAN</option>
                <option value="SIJ SKM THP 2 - PENGELUARAN FOUNDRI">SIJ SKM THP 2 - PENGELUARAN FOUNDRI</option>
                <option value="SIJ SKM THP 2 - PENGELUARAN POST-PRESS">SIJ SKM THP 2 - PENGELUARAN POST-PRESS</option>
                <option value="SIJ SKM THP 2 - PENGEMAS BADAN AUTOMOBIL">SIJ SKM THP 2 - PENGEMAS BADAN AUTOMOBIL
                </option>
                <option value="SIJ SKM THP 2 - PENGETUKAN PANEL KENDERAAN">SIJ SKM THP 2 - PENGETUKAN PANEL KENDERAAN
                </option>
                <option value="SIJ SKM THP 2 - PENGUJI ARUS PUSAR">SIJ SKM THP 2 - PENGUJI ARUS PUSAR</option>
                <option value="SIJ SKM THP 2 - PENGUJI PENEMBUS CECAIR - BINAAN BERKIMPALAN">SIJ SKM THP 2 - PENGUJI
                  PENEMBUS CECAIR - BINAAN BERKIMPALAN</option>
                <option value="SIJ SKM THP 2 - PENGUJI ULTRASONIK - BINAAN BERKIMPALAN">SIJ SKM THP 2 - PENGUJI
                  ULTRASONIK - BINAAN BERKIMPALAN</option>
                <option value="SIJ SKM THP 2 - PENGUJI ZARAH MAGNET - BINAAN BERKIMPALAN">SIJ SKM THP 2 - PENGUJI ZARAH
                  MAGNET - BINAAN BERKIMPALAN</option>
                <option value="SIJ SKM THP 2 - PENGUJIAN ARUS PUSAR ? (MINYAK DAN GAS)">SIJ SKM THP 2 - PENGUJIAN ARUS
                  PUSAR ? (MINYAK DAN GAS)</option>
                <option value="SIJ SKM THP 2 - PENGUJIAN PARTIKEL MAGNETIK ? PEMBINAAN TERKIMPAL (MINYAK DAN GAS)">SIJ
                  SKM THP 2 - PENGUJIAN PARTIKEL MAGNETIK ? PEMBINAAN TERKIMPAL (MINYAK DAN GAS)</option>
                <option value="SIJ SKM THP 2 - PENGUKIRAN KAYU ASAS">SIJ SKM THP 2 - PENGUKIRAN KAYU ASAS</option>
                <option value="SIJ SKM THP 2 - PENGURUSAN PEJABAT">SIJ SKM THP 2 - PENGURUSAN PEJABAT</option>
                <option value="SIJ SKM THP 2 - PENOLONG JURUTEKNIK FIBER OPTIK TELEKOMUNIKASI">SIJ SKM THP 2 - PENOLONG
                  JURUTEKNIK FIBER OPTIK TELEKOMUNIKASI</option>
                <option value="SIJ SKM THP 2 - PENTADBIRAN PENILAIAN HARTANAH">SIJ SKM THP 2 - PENTADBIRAN PENILAIAN
                  HARTANAH</option>
                <option value="SIJ SKM THP 2 - PENTAFSIR RADIOGRAF - BINAAN BERKIMPALAN">SIJ SKM THP 2 - PENTAFSIR
                  RADIOGRAF - BINAAN BERKIMPALAN</option>
                <option value="SIJ SKM THP 2 - PENTAFSIR RADIOGRAF - TUANGAN DAN TEMPAAN">SIJ SKM THP 2 - PENTAFSIR
                  RADIOGRAF - TUANGAN DAN TEMPAAN</option>
                <option value="SIJ SKM THP 2 - PENYADUR ELETRIK">SIJ SKM THP 2 - PENYADUR ELETRIK</option>
                <option value="SIJ SKM THP 2 - PENYEDIA MAKANAN">SIJ SKM THP 2 - PENYEDIA MAKANAN</option>
                <option value="SIJ SKM THP 2 - PENYEDIA PASTRI (PASTRY COOK)">SIJ SKM THP 2 - PENYEDIA PASTRI (PASTRY
                  COOK)</option>
                <option value="SIJ SKM THP 2 - PENYEDIA ROTI (BAKER)">SIJ SKM THP 2 - PENYEDIA ROTI (BAKER)</option>
                <option value="SIJ SKM THP 2 - PENYEDIAAN DAN PEMBUATAN MAKANAN">SIJ SKM THP 2 - PENYEDIAAN DAN
                  PEMBUATAN MAKANAN</option>
                <option value="SIJ SKM THP 2 - PENYELARAS OPERASI PELANCONGAN DALAM NEGERI">SIJ SKM THP 2 - PENYELARAS
                  OPERASI PELANCONGAN DALAM NEGERI</option>
                <option value="SIJ SKM THP 2 - PENYELENGGARA DANDANG JURUGEGAS II">SIJ SKM THP 2 - PENYELENGGARA DANDANG
                  JURUGEGAS II</option>
                <option value="SIJ SKM THP 2 - PENYELIAAN OPERASI TIUPAN ACUAN PLASTIK DAN PENYELENGGARAAN">SIJ SKM THP
                  2 - PENYELIAAN OPERASI TIUPAN ACUAN PLASTIK DAN PENYELENGGARAAN</option>
                <option value="SIJ SKM THP 2 - PENYEMBUR CAT AUTOMOBIL">SIJ SKM THP 2 - PENYEMBUR CAT AUTOMOBIL</option>
                <option value="SIJ SKM THP 2 - PENYEMBUR CAT KANAN AUTOMOTIF">SIJ SKM THP 2 - PENYEMBUR CAT KANAN
                  AUTOMOTIF</option>
                <option value="SIJ SKM THP 2 - PENYEMBURAN CAT AUTOMOTIF">SIJ SKM THP 2 - PENYEMBURAN CAT AUTOMOTIF
                </option>
                <option
                  value="SIJ SKM THP 2 - PERALATAN PENYAMANAN UDARA HEATING VENTILATION AIR CONDITIONING (HVAC) ? SATU FASA (">
                </option>
                <option
                  value="SIJ SKM THP 2 - PERALATAN PENYAMANAN UDARA HEATING VENTILATION AIR CONDITIONING (HVAC) ? SATU FASA (">
                  SIJ SKM THP 2 - PERALATAN PENYAMANAN UDARA HEATING VENTILATION AIR CONDITIONING (HVAC) ? SATU FASA (
                </option>
                <option
                  value="SIJ SKM THP 2 - PERALATAN PENYAMANAN UDARA HEATING VENTILATION AIR CONDITIONING (HVAC) ? TIGA FASA (">
                  SIJ SKM THP 2 - PERALATAN PENYAMANAN UDARA HEATING VENTILATION AIR CONDITIONING (HVAC) ? TIGA FASA (
                </option>
                <option value="SIJ SKM THP 2 - PEREKA GRAFIK">SIJ SKM THP 2 - PEREKA GRAFIK</option>
                <option value="SIJ SKM THP 2 - PERKHIDMATAN ESTETIK">SIJ SKM THP 2 - PERKHIDMATAN ESTETIK</option>
                <option value="SIJ SKM THP 2 - PERKHIDMATAN OPERASI RAWATAN AIR">SIJ SKM THP 2 - PERKHIDMATAN OPERASI
                  RAWATAN AIR</option>
                <option value="SIJ SKM THP 2 - PERKHIDMATAN SOKONGAN KEJURUTERAAN AUTOMASI INDUSTRI">SIJ SKM THP 2 -
                  PERKHIDMATAN SOKONGAN KEJURUTERAAN AUTOMASI INDUSTRI</option>
                <option value="SIJ SKM THP 2 - PERKHIDMATAN SOKONGAN SUMBER MANUSIA">SIJ SKM THP 2 - PERKHIDMATAN
                  SOKONGAN SUMBER MANUSIA</option>
                <option value="SIJ SKM THP 2 - PERSEMBAHAN MUZIK TRADISIONAL">SIJ SKM THP 2 - PERSEMBAHAN MUZIK
                  TRADISIONAL</option>
                <option value="SIJ SKM THP 2 - PERSEMBAHAN RITMA BERKUMPULAN">SIJ SKM THP 2 - PERSEMBAHAN RITMA
                  BERKUMPULAN</option>
                <option value="SIJ SKM THP 2 - PERSEMBAHAN TARIAN TRADISIONAL">SIJ SKM THP 2 - PERSEMBAHAN TARIAN
                  TRADISIONAL</option>
                <option value="SIJ SKM THP 2 - PHOTOGRAPHER">SIJ SKM THP 2 - PHOTOGRAPHER</option>
                <option value="SIJ SKM THP 2 - PLASTIC BLOW MOULDING PRODUCTION TECHNICIAN (THERMOPLASTIC)">SIJ SKM THP
                  2 - PLASTIC BLOW MOULDING PRODUCTION TECHNICIAN (THERMOPLASTIC)</option>
                <option value="SIJ SKM THP 2 - PLASTIC COMPRESSION MOULDING PRODUCTION">SIJ SKM THP 2 - PLASTIC
                  COMPRESSION MOULDING PRODUCTION</option>
                <option value="SIJ SKM THP 2 - PLASTIC EXTRUSION PRODUCTION TECHNICIAN">SIJ SKM THP 2 - PLASTIC
                  EXTRUSION PRODUCTION TECHNICIAN</option>
                <option value="SIJ SKM THP 2 - PLASTIC INJECTION MOULDING PRODUCTION">SIJ SKM THP 2 - PLASTIC INJECTION
                  MOULDING PRODUCTION</option>
                <option value="SIJ SKM THP 2 - PLASTIC INJECTION MOULDING TECHNICIAN (THERMOSET)">SIJ SKM THP 2 -
                  PLASTIC INJECTION MOULDING TECHNICIAN (THERMOSET)</option>
                <option value="SIJ SKM THP 2 - PLASTIC ROTATIONAL MOULDING PRODUCTION TECHNICIAN">SIJ SKM THP 2 -
                  PLASTIC ROTATIONAL MOULDING PRODUCTION TECHNICIAN</option>
                <option value="SIJ SKM THP 2 - PORT SECURITY ASSISTANT">SIJ SKM THP 2 - PORT SECURITY ASSISTANT</option>
                <option value="SIJ SKM THP 2 - PRODUKSI AUDIO">SIJ SKM THP 2 - PRODUKSI AUDIO</option>
                <option value="SIJ SKM THP 2 - REFLEXOLOGIST">SIJ SKM THP 2 - REFLEXOLOGIST</option>
                <option value="SIJ SKM THP 2 - ROOF TRUSS INSTALLER (LIGHT GAUGE STEEL)">SIJ SKM THP 2 - ROOF TRUSS
                  INSTALLER (LIGHT GAUGE STEEL)</option>
                <option value="SIJ SKM THP 2 - ROOF TRUSS INSTALLER (TIMBER)">SIJ SKM THP 2 - ROOF TRUSS INSTALLER
                  (TIMBER)</option>
                <option value="SIJ SKM THP 2 - SECURITY OFFICER">SIJ SKM THP 2 - SECURITY OFFICER</option>
                <option value="SIJ SKM THP 2 - SENI SOLEKAN">SIJ SKM THP 2 - SENI SOLEKAN</option>
                <option value="SIJ SKM THP 2 - SENIOR CHAMBERMAID">SIJ SKM THP 2 - SENIOR CHAMBERMAID</option>
                <option value="SIJ SKM THP 2 - SENIOR FIBERGLASS HULL AND SUPERSTRUCTURE BUILDER">SIJ SKM THP 2 - SENIOR
                  FIBERGLASS HULL AND SUPERSTRUCTURE BUILDER</option>
                <option value="SIJ SKM THP 2 - SENIOR SPA THERAPIST">SIJ SKM THP 2 - SENIOR SPA THERAPIST</option>
                <option value="SIJ SKM THP 2 - SENIOR TAILOR">SIJ SKM THP 2 - SENIOR TAILOR</option>
                <option value="SIJ SKM THP 2 - SERVIS DAN PENYELENGGARAAN MESIN PERCETAKAN">SIJ SKM THP 2 - SERVIS DAN
                  PENYELENGGARAAN MESIN PERCETAKAN</option>
                <option value="SIJ SKM THP 2 - SERVIS DAN PENYELENGGARAAN MOTOSIKAL">SIJ SKM THP 2 - SERVIS DAN
                  PENYELENGGARAAN MOTOSIKAL</option>
                <option value="SIJ SKM THP 2 - SERVIS TAYAR KENDERAAN BERAT">SIJ SKM THP 2 - SERVIS TAYAR KENDERAAN
                  BERAT</option>
                <option value="SIJ SKM THP 2 - SERVIS TAYAR KENDERAAN RINGAN">SIJ SKM THP 2 - SERVIS TAYAR KENDERAAN
                  RINGAN</option>
                <option value="SIJ SKM THP 2 - SETIAUSAHA">SIJ SKM THP 2 - SETIAUSAHA</option>
                <option value="SIJ SKM THP 2 - SOUND TECHNICIAN - PRODUCTION">SIJ SKM THP 2 - SOUND TECHNICIAN -
                  PRODUCTION</option>
                <option value="SIJ SKM THP 2 - TOOLMAKER - METAL STAMPING DIE">SIJ SKM THP 2 - TOOLMAKER - METAL
                  STAMPING DIE</option>
                <option value="SIJ SKM THP 2 - TUKANG KAYU KANAN- KERJA KAYU DALAMAN">SIJ SKM THP 2 - TUKANG KAYU KANAN-
                  KERJA KAYU DALAMAN</option>
                <option value="SIJ SKM THP 2 - TUKANG PAIP DAN KUMBAHAN">SIJ SKM THP 2 - TUKANG PAIP DAN KUMBAHAN
                </option>
                <option value="SIJ SKM THP 2 - VIDEO/PRODUKSI FILEM (PENGGAMBARAN)">SIJ SKM THP 2 - VIDEO/PRODUKSI FILEM
                  (PENGGAMBARAN)</option>
                <option value="SIJ SKM THP 3 - (TINGGI) PENYEJUKBEKUAN & PENYAMAN UDARA">SIJ SKM THP 3 - (TINGGI)
                  PENYEJUKBEKUAN & PENYAMAN UDARA</option>
                <option value="SIJ SKM THP 3 - AERONAUTICAL GROUND LIGHTING MAINTENANCE">SIJ SKM THP 3 - AERONAUTICAL
                  GROUND LIGHTING MAINTENANCE</option>
                <option value="SIJ SKM THP 3 - AIR/MIXED-GAS SURFACE-SUPPLIED DIVING">SIJ SKM THP 3 - AIR/MIXED-GAS
                  SURFACE-SUPPLIED DIVING</option>
                <option value="SIJ SKM THP 3 - AIRPORT LANDSIDE, TERMINAL & AIRSIDE OPERATIONS">SIJ SKM THP 3 - AIRPORT
                  LANDSIDE, TERMINAL & AIRSIDE OPERATIONS</option>
                <option value="SIJ SKM THP 3 - AMALAN KEBAJIKAN SOSIAL">SIJ SKM THP 3 - AMALAN KEBAJIKAN SOSIAL</option>
                <option value="SIJ SKM THP 3 - APPAREL FINISHING SUPERVISOR">SIJ SKM THP 3 - APPAREL FINISHING
                  SUPERVISOR</option>
                <option value="SIJ SKM THP 3 - AUTOMOTIF - SERVIS SELEPAS JUALAN">SIJ SKM THP 3 - AUTOMOTIF - SERVIS
                  SELEPAS JUALAN</option>
                <option value="SIJ SKM THP 3 - BINA BANGUNAN">SIJ SKM THP 3 - BINA BANGUNAN</option>
                <option value="SIJ SKM THP 3 - BODYGUARD (CLOSE PROTECTION OFFICER)">SIJ SKM THP 3 - BODYGUARD (CLOSE
                  PROTECTION OFFICER)</option>
                <option value="SIJ SKM THP 3 - CENTRAL MONITORING STATION OPERATION">SIJ SKM THP 3 - CENTRAL MONITORING
                  STATION OPERATION</option>
                <option value="SIJ SKM THP 3 - CHILDREN CAREGIVER PRACTICE">SIJ SKM THP 3 - CHILDREN CAREGIVER PRACTICE
                </option>
                <option value="SIJ SKM THP 3 - CHILDREN WITH SPECIAL NEEDS CARE AND EDUCATION PRACTICE">SIJ SKM THP 3 -
                  CHILDREN WITH SPECIAL NEEDS CARE AND EDUCATION PRACTICE</option>
                <option value="SIJ SKM THP 3 - COMPUTER NUMERICAL CONTROL (CNC) MACHINING TECHNICIAN">SIJ SKM THP 3 -
                  COMPUTER NUMERICAL CONTROL (CNC) MACHINING TECHNICIAN</option>
                <option value="SIJ SKM THP 3 - CONCIERGE SUPERVISOR">SIJ SKM THP 3 - CONCIERGE SUPERVISOR</option>
                <option value="SIJ SKM THP 3 - CONTROL DESIGN SENIOR TECHNICIAN">SIJ SKM THP 3 - CONTROL DESIGN SENIOR
                  TECHNICIAN</option>
                <option value="SIJ SKM THP 3 - CORRUGATED FLEXOGRAPHIC SUPERVISOR">SIJ SKM THP 3 - CORRUGATED
                  FLEXOGRAPHIC SUPERVISOR</option>
                <option value="SIJ SKM THP 3 - DANDANAN RAMBUT">SIJ SKM THP 3 - DANDANAN RAMBUT</option>
                <option value="SIJ SKM THP 3 - DIGITAL PRINTING SUPERVISOR (DIRECT IMAGING)">SIJ SKM THP 3 - DIGITAL
                  PRINTING SUPERVISOR (DIRECT IMAGING)</option>
                <option value="SIJ SKM THP 3 - DISTRIBUTION SENIOR TECHNICIAN">SIJ SKM THP 3 - DISTRIBUTION SENIOR
                  TECHNICIAN</option>
                <option value="SIJ SKM THP 3 - EKSEKUTIF PERLINDUNGAN KEBAKARAN">SIJ SKM THP 3 - EKSEKUTIF PERLINDUNGAN
                  KEBAKARAN</option>
                <option value="SIJ SKM THP 3 - EKSEKUTIF REKAAN GRAFIK">SIJ SKM THP 3 - EKSEKUTIF REKAAN GRAFIK</option>
                <option value="SIJ SKM THP 3 - ELECTRONIC AUDIO VISUAL SENIOR TECHNICIAN">SIJ SKM THP 3 - ELECTRONIC
                  AUDIO VISUAL SENIOR TECHNICIAN</option>
                <option value="SIJ SKM THP 3 - FIBERGLASS HULL AND SUPERSTRUCTURE BUILDER SUPERVISOR">SIJ SKM THP 3 -
                  FIBERGLASS HULL AND SUPERSTRUCTURE BUILDER SUPERVISOR</option>
                <option value="SIJ SKM THP 3 - FIRE RESCUE AND HAZARD MANAGEMENT (OIL, GAS & PETROCHEMICAL)">SIJ SKM THP
                  3 - FIRE RESCUE AND HAZARD MANAGEMENT (OIL, GAS & PETROCHEMICAL)</option>
                <option value="SIJ SKM THP 3 - FLEXOPRINT (CORRUGATED) PRODUCTION">SIJ SKM THP 3 - FLEXOPRINT
                  (CORRUGATED) PRODUCTION</option>
                <option value="SIJ SKM THP 3 - FOTOGRAFI">SIJ SKM THP 3 - FOTOGRAFI</option>
                <option value="SIJ SKM THP 3 - GEOMATICS AND LAND SURVEYING">SIJ SKM THP 3 - GEOMATICS AND LAND
                  SURVEYING</option>
                <option value="SIJ SKM THP 3 - HOUSEKEEPING">SIJ SKM THP 3 - HOUSEKEEPING</option>
                <option value="SIJ SKM THP 3 - INTERIOR WOOD WORK SENIOR CARPENTER SUPERVISOR">SIJ SKM THP 3 - INTERIOR
                  WOOD WORK SENIOR CARPENTER SUPERVISOR</option>
                <option value="SIJ SKM THP 3 - INVESTIGATION DETECTIVES">SIJ SKM THP 3 - INVESTIGATION DETECTIVES
                </option>
                <option value="SIJ SKM THP 3 - JAMINAN KUALITI INDUSTRI (PEMBUATAN)">SIJ SKM THP 3 - JAMINAN KUALITI
                  INDUSTRI (PEMBUATAN)</option>
                <option value="SIJ SKM THP 3 - JURUAUDIOGRAF INDUSTRI - BINAAN BERKIMPALAN">SIJ SKM THP 3 -
                  JURUAUDIOGRAF INDUSTRI - BINAAN BERKIMPALAN</option>
                <option value="SIJ SKM THP 3 - JURUGEGAS GAS KELAS I">SIJ SKM THP 3 - JURUGEGAS GAS KELAS I</option>
                <option value="SIJ SKM THP 3 - JURUMESIN KAYU">SIJ SKM THP 3 - JURUMESIN KAYU</option>
                <option value="SIJ SKM THP 3 - JURURELEKTRIK KANAN MARIN">SIJ SKM THP 3 - JURURELEKTRIK KANAN MARIN
                </option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK AKUAKULTUR (IKAN)">SIJ SKM THP 3 - JURUTEKNIK AKUAKULTUR
                  (IKAN)</option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK AKUAKULTUR (MARIN)">SIJ SKM THP 3 - JURUTEKNIK AKUAKULTUR
                  (MARIN)</option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK AKUAKULTUR (MOLUSKA)">SIJ SKM THP 3 - JURUTEKNIK AKUAKULTUR
                  (MOLUSKA)</option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK AUTOMASI SENIOR">SIJ SKM THP 3 - JURUTEKNIK AUTOMASI SENIOR
                </option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK BINAAN BANGUNAN BERASASKAN KAYU">SIJ SKM THP 3 - JURUTEKNIK
                  BINAAN BANGUNAN BERASASKAN KAYU</option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK ELEKTRIK KANAN">SIJ SKM THP 3 - JURUTEKNIK ELEKTRIK KANAN
                </option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK FABRIKASI & MEMASANG STRUKTUR KELULI">SIJ SKM THP 3 -
                  JURUTEKNIK FABRIKASI & MEMASANG STRUKTUR KELULI</option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK FIBER OPTIK TELEKOMUNIKASI">SIJ SKM THP 3 - JURUTEKNIK FIBER
                  OPTIK TELEKOMUNIKASI</option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK FOUNDRI (LEBUR)">SIJ SKM THP 3 - JURUTEKNIK FOUNDRI (LEBUR)
                </option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK FOUNDRI (PEMBUAT ACUAN & TERAS)">SIJ SKM THP 3 - JURUTEKNIK
                  FOUNDRI (PEMBUAT ACUAN & TERAS)</option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK FOUNDRI (PEMBUATAN CORAK)">SIJ SKM THP 3 - JURUTEKNIK FOUNDRI
                  (PEMBUATAN CORAK)</option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK FOUNDRI (TUANGAN ACUAN)">SIJ SKM THP 3 - JURUTEKNIK FOUNDRI
                  (TUANGAN ACUAN)</option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK GEOSPATIAL">SIJ SKM THP 3 - JURUTEKNIK GEOSPATIAL</option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK GULUNGAN (PEMBUATAN KELULI)">SIJ SKM THP 3 - JURUTEKNIK
                  GULUNGAN (PEMBUATAN KELULI)</option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK INDUSTRI">SIJ SKM THP 3 - JURUTEKNIK INDUSTRI</option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK JENTERA PERTANIAN">SIJ SKM THP 3 - JURUTEKNIK JENTERA
                  PERTANIAN</option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK KANAN (PENGSUISAN 3G)">SIJ SKM THP 3 - JURUTEKNIK KANAN
                  (PENGSUISAN 3G)</option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK KANAN ALATAN KEPERSISAN ELEKTRIKAL">SIJ SKM THP 3 - JURUTEKNIK
                  KANAN ALATAN KEPERSISAN ELEKTRIKAL</option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK KANAN ALATAN KEPERSISAN MEKANIKAL">SIJ SKM THP 3 - JURUTEKNIK
                  KANAN ALATAN KEPERSISAN MEKANIKAL</option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK KANAN ANTARA MUKA">SIJ SKM THP 3 - JURUTEKNIK KANAN ANTARA
                  MUKA</option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK KANAN BUFFER STORAGE">SIJ SKM THP 3 - JURUTEKNIK KANAN BUFFER
                  STORAGE</option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK KANAN ELEKTRONIK INDUSTRI - PERALATAN">SIJ SKM THP 3 -
                  JURUTEKNIK KANAN ELEKTRONIK INDUSTRI - PERALATAN</option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK KANAN EMBEDDED SYSTEM (REKABENTUK)">SIJ SKM THP 3 - JURUTEKNIK
                  KANAN EMBEDDED SYSTEM (REKABENTUK)</option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK KANAN FREKUENSI RADIO TANPA WAYAR">SIJ SKM THP 3 - JURUTEKNIK
                  KANAN FREKUENSI RADIO TANPA WAYAR</option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK KANAN INSTRUMENTASI AGIHAN AIR">SIJ SKM THP 3 - JURUTEKNIK
                  KANAN INSTRUMENTASI AGIHAN AIR</option>
                <option
                  value="SIJ SKM THP 3 - JURUTEKNIK KANAN INTERFERENCE/ELECTROMAGNETIC COMPATIBILITY (EMI/EMC) (REKABENTUK)">
                  SIJ SKM THP 3 - JURUTEKNIK KANAN INTERFERENCE/ELECTROMAGNETIC COMPATIBILITY (EMI/EMC) (REKABENTUK)
                </option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK KANAN JAMINAN KUALITI">SIJ SKM THP 3 - JURUTEKNIK KANAN
                  JAMINAN KUALITI</option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK KANAN KENDERAAN">SIJ SKM THP 3 - JURUTEKNIK KANAN KENDERAAN
                </option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK KANAN KENDERAAN MOTOR">SIJ SKM THP 3 - JURUTEKNIK KANAN
                  KENDERAAN MOTOR</option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK KANAN KESELAMATAN (REKABENTUK)">SIJ SKM THP 3 - JURUTEKNIK
                  KANAN KESELAMATAN (REKABENTUK)</option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK KANAN MAKMAL ANALITIKAL">SIJ SKM THP 3 - JURUTEKNIK KANAN
                  MAKMAL ANALITIKAL</option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK KANAN MAKMAL BIOTEKNOLOGI UMUM">SIJ SKM THP 3 - JURUTEKNIK
                  KANAN MAKMAL BIOTEKNOLOGI UMUM</option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK KANAN MAKMAL BIOTEKNOLOGI UMUM">SIJ SKM THP 3 - JURUTEKNIK
                  KANAN MAKMAL BIOTEKNOLOGI UMUM</option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK KANAN PAPARAN ELEKTRONIK OPTIKAL (REKABENTUK)">SIJ SKM THP 3 -
                  JURUTEKNIK KANAN PAPARAN ELEKTRONIK OPTIKAL (REKABENTUK)</option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK KANAN PEMPROSESAN ISYARAT DIGITAL (REKABENTUK)">SIJ SKM THP 3
                  - JURUTEKNIK KANAN PEMPROSESAN ISYARAT DIGITAL (REKABENTUK)</option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK KANAN PENYENGGARAN DALAMAN PESAWAT">SIJ SKM THP 3 - JURUTEKNIK
                  KANAN PENYENGGARAN DALAMAN PESAWAT</option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK KANAN RANGKAIAN (REKABENTUK)">SIJ SKM THP 3 - JURUTEKNIK KANAN
                  RANGKAIAN (REKABENTUK)</option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK KANAN RANGKAIAN AKSES RADIO">SIJ SKM THP 3 - JURUTEKNIK KANAN
                  RANGKAIAN AKSES RADIO</option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK KANAN REKABENTUK PRODUK INDUSTRI">SIJ SKM THP 3 - JURUTEKNIK
                  KANAN REKABENTUK PRODUK INDUSTRI</option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK KANAN SERIMALA MARIN">SIJ SKM THP 3 - JURUTEKNIK KANAN
                  SERIMALA MARIN</option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK KANAN TEKNOLOGI SENSOR">SIJ SKM THP 3 - JURUTEKNIK KANAN
                  TEKNOLOGI SENSOR</option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK KELENGKAPAN TOLAK TANAH">SIJ SKM THP 3 - JURUTEKNIK
                  KELENGKAPAN TOLAK TANAH</option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK KENDERAAN MOTOR">SIJ SKM THP 3 - JURUTEKNIK KENDERAAN MOTOR
                </option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK KEPINGAN LOGAM">SIJ SKM THP 3 - JURUTEKNIK KEPINGAN LOGAM
                </option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK KERJA PAIP">SIJ SKM THP 3 - JURUTEKNIK KERJA PAIP</option>
                <option
                  value="SIJ SKM THP 3 - JURUTEKNIK KIMPAL ARKA TUNGSTEN GAS & ARKA LOGAM (KELULI KARBON & KELULI THN KARAT)">
                  SIJ SKM THP 3 - JURUTEKNIK KIMPAL ARKA TUNGSTEN GAS & ARKA LOGAM (KELULI KARBON & KELULI THN KARAT)
                </option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK KIMPALAN ARKA BERTERASKAN FLUKS (KELULI KARBON)">SIJ SKM THP 3
                  - JURUTEKNIK KIMPALAN ARKA BERTERASKAN FLUKS (KELULI KARBON)</option>
                <option
                  value="SIJ SKM THP 3 - JURUTEKNIK KIMPALAN ARKA LOGAM BERPERISAI (KELULI KARBON & KELULI TAHAN KARAT)">
                  SIJ SKM THP 3 - JURUTEKNIK KIMPALAN ARKA LOGAM BERPERISAI (KELULI KARBON & KELULI TAHAN KARAT)
                </option>
                <option
                  value="SIJ SKM THP 3 - JURUTEKNIK KIMPALAN ARKA LOGAM GAS(KELULI KARBON, KELULI TAHAN KARAT & ALUMINIUM)">
                  SIJ SKM THP 3 - JURUTEKNIK KIMPALAN ARKA LOGAM GAS(KELULI KARBON, KELULI TAHAN KARAT & ALUMINIUM)
                </option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK KIMPALAN ARKA TERBENAM (KELULI KARBON)">SIJ SKM THP 3 -
                  JURUTEKNIK KIMPALAN ARKA TERBENAM (KELULI KARBON)</option>
                <option
                  value="SIJ SKM THP 3 - JURUTEKNIK KIMPALAN ARKA TUNGSTEN GAS(KELULI KARBON & KELULI THN KARAT & ALUMINIUM)">
                  SIJ SKM THP 3 - JURUTEKNIK KIMPALAN ARKA TUNGSTEN GAS(KELULI KARBON & KELULI THN KARAT & ALUMINIUM)
                </option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK KIMPALAN GAS">SIJ SKM THP 3 - JURUTEKNIK KIMPALAN GAS</option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK KIMPALAN LOGAM TANPA FERUS">SIJ SKM THP 3 - JURUTEKNIK
                  KIMPALAN LOGAM TANPA FERUS</option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK KOMPOSIT">SIJ SKM THP 3 - JURUTEKNIK KOMPOSIT</option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK LEBUR (PEMBUATAN KELULI)">SIJ SKM THP 3 - JURUTEKNIK LEBUR
                  (PEMBUATAN KELULI)</option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK MARIN (MEKANIKAL)">SIJ SKM THP 3 - JURUTEKNIK MARIN
                  (MEKANIKAL)</option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK PENGENDALIAN BAHAN (PEMBUATAN KELULI)">SIJ SKM THP 3 -
                  JURUTEKNIK PENGENDALIAN BAHAN (PEMBUATAN KELULI)</option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK PENYEJUKBEKUAN DAN PENYAMANAN UDARA - DOMESTIK">SIJ SKM THP 3
                  - JURUTEKNIK PENYEJUKBEKUAN DAN PENYAMANAN UDARA - DOMESTIK</option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK PENYEJUKBEKUAN DAN PENYAMANAN UDARA - KOMERSIL">SIJ SKM THP 3
                  - JURUTEKNIK PENYEJUKBEKUAN DAN PENYAMANAN UDARA - KOMERSIL</option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK PENYEMBURAN CAT AUTOMOTIF">SIJ SKM THP 3 - JURUTEKNIK
                  PENYEMBURAN CAT AUTOMOTIF</option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK PENYENGGARAAN INDUSTRI BERAT">SIJ SKM THP 3 - JURUTEKNIK
                  PENYENGGARAAN INDUSTRI BERAT</option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK PERALATAN SOKONGAN DARAT PESAWAT">SIJ SKM THP 3 - JURUTEKNIK
                  PERALATAN SOKONGAN DARAT PESAWAT</option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK PERCETAKAN (MEKANIKAL)">SIJ SKM THP 3 - JURUTEKNIK PERCETAKAN
                  (MEKANIKAL)</option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK PERIKANAN">SIJ SKM THP 3 - JURUTEKNIK PERIKANAN</option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK PERTANIAN">SIJ SKM THP 3 - JURUTEKNIK PERTANIAN</option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK PERUBATAN KECEMASAN PERTENGAHAN">SIJ SKM THP 3 - JURUTEKNIK
                  PERUBATAN KECEMASAN PERTENGAHAN</option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK PESAWAT - KELENGKAPAN BANTUAN DARAT (MEKANIKAL)">SIJ SKM THP 3
                  - JURUTEKNIK PESAWAT - KELENGKAPAN BANTUAN DARAT (MEKANIKAL)</option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK RANGKAIAN KOMPUTER">SIJ SKM THP 3 - JURUTEKNIK RANGKAIAN
                  KOMPUTER</option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK REKABENTUK PINTU DAN TINGKAP">SIJ SKM THP 3 - JURUTEKNIK
                  REKABENTUK PINTU DAN TINGKAP</option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK SISTEM KOMPUTER">SIJ SKM THP 3 - JURUTEKNIK SISTEM KOMPUTER
                </option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK SISTEM PERKABELAN BERSTRUKTUR">SIJ SKM THP 3 - JURUTEKNIK
                  SISTEM PERKABELAN BERSTRUKTUR</option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK TELEKOMINUKASI - OPERASI PENGSUISAN">SIJ SKM THP 3 -
                  JURUTEKNIK TELEKOMINUKASI - OPERASI PENGSUISAN</option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK TELEKOMUNIKASI PEMASANGAN">SIJ SKM THP 3 - JURUTEKNIK
                  TELEKOMUNIKASI PEMASANGAN</option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK TELEKOMUNIKASI TANPA WAYAR">SIJ SKM THP 3 - JURUTEKNIK
                  TELEKOMUNIKASI TANPA WAYAR</option>
                <option value="SIJ SKM THP 3 - JURUTEKNIK TUANGAN (PEMBUATAN KELULI)">SIJ SKM THP 3 - JURUTEKNIK TUANGAN
                  (PEMBUATAN KELULI)</option>
                <option value="SIJ SKM THP 3 - JURUTERAPI ESTETIK (AESTHETIS THERAPIST)">SIJ SKM THP 3 - JURUTERAPI
                  ESTETIK (AESTHETIS THERAPIST)</option>
                <option value="SIJ SKM THP 3 - KETUA SEKSYEN PENYEDIA MAKANAN (CHEF DE PARTIE)">SIJ SKM THP 3 - KETUA
                  SEKSYEN PENYEDIA MAKANAN (CHEF DE PARTIE)</option>
                <option value="SIJ SKM THP 3 - KETUA SEKSYEN PENYEDIA PASTRI (CHEF DE PARTIE-PASTRY)">SIJ SKM THP 3 -
                  KETUA SEKSYEN PENYEDIA PASTRI (CHEF DE PARTIE-PASTRY)</option>
                <option value="SIJ SKM THP 3 - KETUA SEKSYEN PENYEDIA ROTI (CHIEF BAKER)">SIJ SKM THP 3 - KETUA SEKSYEN
                  PENYEDIA ROTI (CHIEF BAKER)</option>
                <option value="SIJ SKM THP 3 - KHIDMAT KOMUNITI">SIJ SKM THP 3 - KHIDMAT KOMUNITI</option>
                <option value="SIJ SKM THP 3 - KONDUKTOR LADANG KANAN">SIJ SKM THP 3 - KONDUKTOR LADANG KANAN</option>
                <option value="SIJ SKM THP 3 - KOORDINASI ACARA SUKAN">SIJ SKM THP 3 - KOORDINASI ACARA SUKAN</option>
                <option value="SIJ SKM THP 3 - KOORDINASI MUZIK TRADISIONAL">SIJ SKM THP 3 - KOORDINASI MUZIK
                  TRADISIONAL</option>
                <option value="SIJ SKM THP 3 - KOORDINASI TARIAN TRADISIONAL">SIJ SKM THP 3 - KOORDINASI TARIAN
                  TRADISIONAL</option>
                <option value="SIJ SKM THP 3 - LATIHAN SENI BELA DIRI">SIJ SKM THP 3 - LATIHAN SENI BELA DIRI</option>
                <option value="SIJ SKM THP 3 - LIGHTING TECHNICIAN">SIJ SKM THP 3 - LIGHTING TECHNICIAN</option>
                <option value="SIJ SKM THP 3 - MARINE ELECTRONIC SENIOR TECHNICIAN">SIJ SKM THP 3 - MARINE ELECTRONIC
                  SENIOR TECHNICIAN</option>
                <option value="SIJ SKM THP 3 - MEKANIK KENDERAAN MOTOR"></option>
                <option value="SIJ SKM THP 3 - MEKANIK PESAWAT (AVIONIK) KAPAL TERBANG">SIJ SKM THP 3 - MEKANIK PESAWAT
                  (AVIONIK) KAPAL TERBANG</option>
                <option value="SIJ SKM THP 3 - MEKANIK PESAWAT (AVIONIK) ROTORKRAF">SIJ SKM THP 3 - MEKANIK PESAWAT
                  (AVIONIK) ROTORKRAF</option>
                <option value="SIJ SKM THP 3 - MEKANIK PESAWAT (MEKANIKAL) - HELIKOPTER TURBIN">SIJ SKM THP 3 - MEKANIK
                  PESAWAT (MEKANIKAL) - HELIKOPTER TURBIN</option>
                <option value="SIJ SKM THP 3 - MEKANIK PESAWAT (MEKANIKAL) - KAPAL TERBANG 1 OMBOH">SIJ SKM THP 3 -
                  MEKANIK PESAWAT (MEKANIKAL) - KAPAL TERBANG 1 OMBOH</option>
                <option value="SIJ SKM THP 3 - MEKANIK PESAWAT (MEKANIKAL) - KAPAL TERBANG 1 TURBIN"></option>
                <option value="SIJ SKM THP 3 - MEKANIK PESAWAT (MEKANIKAL) - KAPAL TERBANG II TURBIN">SIJ SKM THP 3 -
                  MEKANIK PESAWAT (MEKANIKAL) - KAPAL TERBANG II TURBIN</option>
                <option value="SIJ SKM THP 3 - MEKANIK PESAWAT : PEMBAIKAN STRUKTUR LOGAM">SIJ SKM THP 3 - MEKANIK
                  PESAWAT : PEMBAIKAN STRUKTUR LOGAM</option>
                <option value="SIJ SKM THP 3 - MOTORCYCLE PAINTING SUPERVISOR">SIJ SKM THP 3 - MOTORCYCLE PAINTING
                  SUPERVISOR</option>
                <option value="SIJ SKM THP 3 - NAKHODA PUKAT JERUT">SIJ SKM THP 3 - NAKHODA PUKAT JERUT</option>
                <option value="SIJ SKM THP 3 - NAKHODA TEKNOLOGI PERIKANAN TANGKAPAN PERSISIR">SIJ SKM THP 3 - NAKHODA
                  TEKNOLOGI PERIKANAN TANGKAPAN PERSISIR</option>
                <option value="SIJ SKM THP 3 - NYANYIAN">SIJ SKM THP 3 - NYANYIAN</option>
                <option value="SIJ SKM THP 3 - OPERASI DAN PENYELENGGARAAN INSTRUMENTASI PERINDUSTRIAN DAN KAWALAN">SIJ
                  SKM THP 3 - OPERASI DAN PENYELENGGARAAN INSTRUMENTASI PERINDUSTRIAN DAN KAWALAN</option>
                <option value="SIJ SKM THP 3 - OPERASI FABRIKASI PAIP (MINYAK, GAS DAN PETROKIMIA)">SIJ SKM THP 3 -
                  OPERASI FABRIKASI PAIP (MINYAK, GAS DAN PETROKIMIA)</option>
                <option value="SIJ SKM THP 3 - OPERASI JUALAN DAN PEMASARAN">SIJ SKM THP 3 - OPERASI JUALAN DAN
                  PEMASARAN</option>
                <option value="SIJ SKM THP 3 - OPERASI KENDERAAN PENGANGKUTAN BARANGAN">SIJ SKM THP 3 - OPERASI
                  KENDERAAN PENGANGKUTAN BARANGAN</option>
                <option value="SIJ SKM THP 3 - OPERASI KENDERAAN PERKHIDMATAN AWAM (BAS)">SIJ SKM THP 3 - OPERASI
                  KENDERAAN PERKHIDMATAN AWAM (BAS)</option>
                <option value="SIJ SKM THP 3 - OPERASI KENDERAAN PERKHIDMATAN AWAM (TEKSI)">SIJ SKM THP 3 - OPERASI
                  KENDERAAN PERKHIDMATAN AWAM (TEKSI)</option>
                <option value="SIJ SKM THP 3 - OPERASI KHIDMAT TETAMU">SIJ SKM THP 3 - OPERASI KHIDMAT TETAMU</option>
                <option value="SIJ SKM THP 3 - OPERASI LATIHAN VOKASIONAL">SIJ SKM THP 3 - OPERASI LATIHAN VOKASIONAL
                </option>
                <option value="SIJ SKM THP 3 - OPERASI MAKMAL KIMIA">SIJ SKM THP 3 - OPERASI MAKMAL KIMIA</option>
                <option value="SIJ SKM THP 3 - OPERASI MAKMAL MOLEKULAR BIOLOGI">SIJ SKM THP 3 - OPERASI MAKMAL
                  MOLEKULAR BIOLOGI</option>
                <option value="SIJ SKM THP 3 - OPERASI MAKMAL PEMERIKSAAN DOKUMEN">SIJ SKM THP 3 - OPERASI MAKMAL
                  PEMERIKSAAN DOKUMEN</option>
                <option value="SIJ SKM THP 3 - OPERASI PEMBUATAN ALAS">SIJ SKM THP 3 - OPERASI PEMBUATAN ALAS</option>
                <option value="SIJ SKM THP 3 - OPERASI PEMBUATAN KELULI">SIJ SKM THP 3 - OPERASI PEMBUATAN KELULI
                </option>
                <option value="SIJ SKM THP 3 - OPERASI PEMBUATAN PERABOT">SIJ SKM THP 3 - OPERASI PEMBUATAN PERABOT
                </option>
                <option value="SIJ SKM THP 3 - OPERASI PEMESINAN">SIJ SKM THP 3 - OPERASI PEMESINAN</option>
                <option value="SIJ SKM THP 3 - OPERASI PENGELUARAN BATIK">SIJ SKM THP 3 - OPERASI PENGELUARAN BATIK
                </option>
                <option value="SIJ SKM THP 3 - OPERASI PENGELUARAN PLASTIK">SIJ SKM THP 3 - OPERASI PENGELUARAN PLASTIK
                </option>
                <option value="SIJ SKM THP 3 - OPERASI PENGEMASAN">SIJ SKM THP 3 - OPERASI PENGEMASAN</option>
                <option value="SIJ SKM THP 3 - OPERASI PENGEMASAN DAN PENGECATAN AUTOMOTIF">SIJ SKM THP 3 - OPERASI
                  PENGEMASAN DAN PENGECATAN AUTOMOTIF</option>
                <option value="SIJ SKM THP 3 - OPERASI PENYELAMATAN LAPANGAN TERBANG & PEMADAMAN API">SIJ SKM THP 3 -
                  OPERASI PENYELAMATAN LAPANGAN TERBANG & PEMADAMAN API</option>
                <option value="SIJ SKM THP 3 - OPERASI PENYELAMATAN LAPANGAN TERBANG DAN PEMADAMAN API">SIJ SKM THP 3 -
                  OPERASI PENYELAMATAN LAPANGAN TERBANG DAN PEMADAMAN API</option>
                <option value="SIJ SKM THP 3 - OPERASI PENYELENGGARAAN INDUSTRI">SIJ SKM THP 3 - OPERASI PENYELENGGARAAN
                  INDUSTRI</option>
                <option value="SIJ SKM THP 3 - OPERASI PENYELENGGARAN PESAWAT (TIDAK DIPERSIJILKAN)">SIJ SKM THP 3 -
                  OPERASI PENYELENGGARAN PESAWAT (TIDAK DIPERSIJILKAN)</option>
                <option value="SIJ SKM THP 3 - OPERASI PERDAGANGAN RUNCIT">SIJ SKM THP 3 - OPERASI PERDAGANGAN RUNCIT
                </option>
                <option value="SIJ SKM THP 3 - OPERASI PUSAT JAGAAN ORANG TUA">SIJ SKM THP 3 - OPERASI PUSAT JAGAAN
                  ORANG TUA</option>
                <option value="SIJ SKM THP 3 - OPERASI PUSAT JAGANA (ORANG KURANG UPAYA)">SIJ SKM THP 3 - OPERASI PUSAT
                  JAGANA (ORANG KURANG UPAYA)</option>
                <option value="SIJ SKM THP 3 - OPERASI SELAM SKUBA">SIJ SKM THP 3 - OPERASI SELAM SKUBA</option>
                <option value="SIJ SKM THP 3 - OPERASI SERVIS MAKANAN DAN MINUMAN">SIJ SKM THP 3 - OPERASI SERVIS
                  MAKANAN DAN MINUMAN</option>
                <option value="SIJ SKM THP 3 - OPERASI SISTEM INFORMASI TRAFIK KAPAL (PELABUHAN)">SIJ SKM THP 3 -
                  OPERASI SISTEM INFORMASI TRAFIK KAPAL (PELABUHAN)</option>
                <option value="SIJ SKM THP 3 - OPERASI SISTEM KOMPUTER">SIJ SKM THP 3 - OPERASI SISTEM KOMPUTER</option>
                <option value="SIJ SKM THP 3 - OPERASI TEKNOLOGI PERIKANAN TANGKAPAN">SIJ SKM THP 3 - OPERASI TEKNOLOGI
                  PERIKANAN TANGKAPAN</option>
                <option value="SIJ SKM THP 3 - OPERATOR TERMINAL KANAN (KREN JAMBATAN)">SIJ SKM THP 3 - OPERATOR
                  TERMINAL KANAN (KREN JAMBATAN)</option>
                <option value="SIJ SKM THP 3 - OPERATOR TERMINAL KANAN (RUBBER TYRED GANTRY CRANE)">SIJ SKM THP 3 -
                  OPERATOR TERMINAL KANAN (RUBBER TYRED GANTRY CRANE)</option>
                <option value="SIJ SKM THP 3 - PEGAWAI LATIHAN VOKASIONAL">SIJ SKM THP 3 - PEGAWAI LATIHAN VOKASIONAL
                </option>
                <option value="SIJ SKM THP 3 - PELUKIS PELAN KANAN KEJURUTERAAN AWAM DAN STRUKTUR">SIJ SKM THP 3 -
                  PELUKIS PELAN KANAN KEJURUTERAAN AWAM DAN STRUKTUR</option>
                <option value="SIJ SKM THP 3 - PELUKIS PELAN KANAN KEJURUTERAAN MEKANIKAL - MINYAK DAN GAS">SIJ SKM THP
                  3 - PELUKIS PELAN KANAN KEJURUTERAAN MEKANIKAL - MINYAK DAN GAS</option>
                <option value="SIJ SKM THP 3 - PELUKIS PELAN KANAN SENIBINA">SIJ SKM THP 3 - PELUKIS PELAN KANAN
                  SENIBINA</option>
                <option value="SIJ SKM THP 3 - PELUKISAN PELAN MEKANIKAL">SIJ SKM THP 3 - PELUKISAN PELAN MEKANIKAL
                </option>
                <option value="SIJ SKM THP 3 - PEMANDU PELANCONG">SIJ SKM THP 3 - PEMANDU PELANCONG</option>
                <option value="SIJ SKM THP 3 - PEMASANGAN DAN PENYELENGGARAAN ELEKTRIK ? TIGA FASA">SIJ SKM THP 3 -
                  PEMASANGAN DAN PENYELENGGARAAN ELEKTRIK ? TIGA FASA</option>
                <option value="SIJ SKM THP 3 - PEMASANGAN DAN PENYELENGGARAAN ELEKTRIK ? TIGA FASA">SIJ SKM THP 3 -
                  PEMASANGAN DAN PENYELENGGARAAN ELEKTRIK ? TIGA FASA</option>
                <option value="SIJ SKM THP 3 - PEMASANGAN DAN PENYELENGGARAAN INFRASTRUKTUR PENGHANTARAN">SIJ SKM THP 3
                  - PEMASANGAN DAN PENYELENGGARAAN INFRASTRUKTUR PENGHANTARAN</option>
                <option value="SIJ SKM THP 3 - PEMASANGAN DAN PENYELENGGARAAN RADAR">SIJ SKM THP 3 - PEMASANGAN DAN
                  PENYELENGGARAAN RADAR</option>
                <option value="SIJ SKM THP 3 - PEMASANGAN DAN PENYELENGGARAAN RADIO TANPA WAYAR">SIJ SKM THP 3 -
                  PEMASANGAN DAN PENYELENGGARAAN RADIO TANPA WAYAR</option>
                <option value="SIJ SKM THP 3 - PEMASANGAN DAN PENYELENGGARAAN SISTEM GAS ASLI KENDERAAN">SIJ SKM THP 3 -
                  PEMASANGAN DAN PENYELENGGARAAN SISTEM GAS ASLI KENDERAAN</option>
                <option value="SIJ SKM THP 3 - PEMASANGAN ENJIN AUTOMOTIF">SIJ SKM THP 3 - PEMASANGAN ENJIN AUTOMOTIF
                </option>
                <option value="SIJ SKM THP 3 - PEMBAIKAN STRUKTUR PESAWAT-KEPINGAN LOGAM">SIJ SKM THP 3 - PEMBAIKAN
                  STRUKTUR PESAWAT-KEPINGAN LOGAM</option>
                <option value="SIJ SKM THP 3 - PEMBAIKAN STRUKTUR PESAWAT-KOMPOSIT">SIJ SKM THP 3 - PEMBAIKAN STRUKTUR
                  PESAWAT-KOMPOSIT</option>
                <option value="SIJ SKM THP 3 - PEMBANGUNAN APLIKASI - PENGATURCARA UTAMA">SIJ SKM THP 3 - PEMBANGUNAN
                  APLIKASI - PENGATURCARA UTAMA</option>
                <option value="SIJ SKM THP 3 - PEMBANGUNAN PRODUK INDUSTRI">SIJ SKM THP 3 - PEMBANGUNAN PRODUK INDUSTRI
                </option>
                <option value="SIJ SKM THP 3 - PEMBANTU AUDIT">SIJ SKM THP 3 - PEMBANTU AUDIT</option>
                <option value="SIJ SKM THP 3 - PEMBANTU PERCUKAIAN">SIJ SKM THP 3 - PEMBANTU PERCUKAIAN</option>
                <option value="SIJ SKM THP 3 - PEMBANTU UKUR TANAH (KEJURUTERAAN)">SIJ SKM THP 3 - PEMBANTU UKUR TANAH
                  (KEJURUTERAAN)</option>
                <option value="SIJ SKM THP 3 - PEMBANTU VETERINAR">SIJ SKM THP 3 - PEMBANTU VETERINAR</option>
                <option value="SIJ SKM THP 3 - PEMBUAT PERKAKASAN KANAN - ACUAN SUNTIKAN PLASTIK">SIJ SKM THP 3 -
                  PEMBUAT PERKAKASAN KANAN - ACUAN SUNTIKAN PLASTIK</option>
                <option value="SIJ SKM THP 3 - PEMBUATAN ACUAN DAN DAI">SIJ SKM THP 3 - PEMBUATAN ACUAN DAN DAI</option>
                <option value="SIJ SKM THP 3 - PEMBUATAN PAKAIAN WANITA">SIJ SKM THP 3 - PEMBUATAN PAKAIAN WANITA
                </option>
                <option value="SIJ SKM THP 3 - PEMBUATAN PASTRI">SIJ SKM THP 3 - PEMBUATAN PASTRI</option>
                <option value="SIJ SKM THP 3 - PEMBUATAN PENYADURAN ELEKTRIK">SIJ SKM THP 3 - PEMBUATAN PENYADURAN
                  ELEKTRIK</option>
                <option value="SIJ SKM THP 3 - PEMBUATAN ROTI">SIJ SKM THP 3 - PEMBUATAN ROTI</option>
                <option value="SIJ SKM THP 3 - PEMBUATAN SUPERSTRUKTUR DAN SERIMALA GENTIAN KACA">SIJ SKM THP 3 -
                  PEMBUATAN SUPERSTRUKTUR DAN SERIMALA GENTIAN KACA</option>
                <option value="SIJ SKM THP 3 - PEMERIKSA KIMPALAN KANAN">SIJ SKM THP 3 - PEMERIKSA KIMPALAN KANAN
                </option>
                <option value="SIJ SKM THP 3 - PEMERIKSAAN RADIOGRAF ? BINAAN BERKIMPALAN (MINYAK DAN GAS)">SIJ SKM THP
                  3 - PEMERIKSAAN RADIOGRAF ? BINAAN BERKIMPALAN (MINYAK DAN GAS)</option>
                <option
                  value="SIJ SKM THP 3 - PEMERIKSAAN ULTRASONIK ? BINAAN BERKIMPALAN (PENGUKURAN KETEBALAN DAN PELAMINAAN) MI">
                  SIJ SKM THP 3 - PEMERIKSAAN ULTRASONIK ? BINAAN BERKIMPALAN (PENGUKURAN KETEBALAN DAN PELAMINAAN) MI
                </option>
                <option value="SIJ SKM THP 3 - PEMESIN (OPERASI CANAI)">SIJ SKM THP 3 - PEMESIN (OPERASI CANAI)</option>
                <option value="SIJ SKM THP 3 - PEMESIN (OPERASI KISAR)">SIJ SKM THP 3 - PEMESIN (OPERASI KISAR)</option>
                <option value="SIJ SKM THP 3 - PEMESIN (OPERASI LARIK)">SIJ SKM THP 3 - PEMESIN (OPERASI LARIK)</option>
                <option value="SIJ SKM THP 3 - PEMESIN KANAN">SIJ SKM THP 3 - PEMESIN KANAN</option>
                <option value="SIJ SKM THP 3 - PEMPROSESAN DAN KAWALAN KUALITI PRODUK PERIKANAN">SIJ SKM THP 3 -
                  PEMPROSESAN DAN KAWALAN KUALITI PRODUK PERIKANAN</option>
                <option value="SIJ SKM THP 3 - PEMPROSESAN DATA SUMBER MANUSIA">SIJ SKM THP 3 - PEMPROSESAN DATA SUMBER
                  MANUSIA</option>
                <option value="SIJ SKM THP 3 - PENATAAN CAHAYA FILEM DAN TELEVISYEN">SIJ SKM THP 3 - PENATAAN CAHAYA
                  FILEM DAN TELEVISYEN</option>
                <option value="SIJ SKM THP 3 - PENDANDAN RAMBUT KANAN">SIJ SKM THP 3 - PENDANDAN RAMBUT KANAN</option>
                <option value="SIJ SKM THP 3 - PENDIDIKAN DAN PENJAGAAN AWAL KANAK-KANAK">SIJ SKM THP 3 - PENDIDIKAN DAN
                  PENJAGAAN AWAL KANAK-KANAK</option>
                <option value="SIJ SKM THP 3 - PENGATURCARA BIOINFORMATIK">SIJ SKM THP 3 - PENGATURCARA BIOINFORMATIK
                </option>
                <option value="SIJ SKM THP 3 - PENGAWASAN KESELAMATAN PELABUHAN">SIJ SKM THP 3 - PENGAWASAN KESELAMATAN
                  PELABUHAN</option>
                <option value="SIJ SKM THP 3 - PENGELUARAN KRAF SERAMIK">SIJ SKM THP 3 - PENGELUARAN KRAF SERAMIK
                </option>
                <option value="SIJ SKM THP 3 - PENGELUARAN KRAF SERAMIK">SIJ SKM THP 3 - PENGELUARAN KRAF SERAMIK
                </option>
                <option value="SIJ SKM THP 3 - PENGELUARAN LITOGRAFI OFSET">SIJ SKM THP 3 - PENGELUARAN LITOGRAFI OFSET
                </option>
                <option value="SIJ SKM THP 3 - PENGELUARAN PEMASANGAN SEMIKONDUKTOR">SIJ SKM THP 3 - PENGELUARAN
                  PEMASANGAN SEMIKONDUKTOR</option>
                <option value="SIJ SKM THP 3 - PENGELUARAN POST-PRESS">SIJ SKM THP 3 - PENGELUARAN POST-PRESS</option>
                <option value="SIJ SKM THP 3 - PENGENDALIAN HUSBANDRI GAJAH">SIJ SKM THP 3 - PENGENDALIAN HUSBANDRI
                  GAJAH</option>
                <option value="SIJ SKM THP 3 - PENGENDALIAN KONFLIK GAJAH">SIJ SKM THP 3 - PENGENDALIAN KONFLIK GAJAH
                </option>
                <option value="SIJ SKM THP 3 - PENGETUKAN PANEL KENDERAAN">SIJ SKM THP 3 - PENGETUKAN PANEL KENDERAAN
                </option>
                <option value="SIJ SKM THP 3 - PENGUJI ARUS PUSAR">SIJ SKM THP 3 - PENGUJI ARUS PUSAR</option>
                <option value="SIJ SKM THP 3 - PENGUJI PENEMBUS CECAIR BINAAN BERKIMPALAN">SIJ SKM THP 3 - PENGUJI
                  PENEMBUS CECAIR BINAAN BERKIMPALAN</option>
                <option value="SIJ SKM THP 3 - PENGUJI ULTRASONIK - BINAAN BERKIMPALAN">SIJ SKM THP 3 - PENGUJI
                  ULTRASONIK - BINAAN BERKIMPALAN</option>
                <option value="SIJ SKM THP 3 - PENGUJI ULTRASONIK - BINAAN BERKIMPALAN">SIJ SKM THP 3 - PENGUJI
                  ULTRASONIK - BINAAN BERKIMPALAN</option>
                <option value="SIJ SKM THP 3 - PENGUJIAN PARTIKEL MAGNETIK ? PEMBINAAN TERKIMPAL (MINYAK DAN GAS)">SIJ
                  SKM THP 3 - PENGUJIAN PARTIKEL MAGNETIK ? PEMBINAAN TERKIMPAL (MINYAK DAN GAS)</option>
                <option value="SIJ SKM THP 3 - PENGUJIAN ZARAH MAGNET - BINAAN BERKIMPALAN">SIJ SKM THP 3 - PENGUJIAN
                  ZARAH MAGNET - BINAAN BERKIMPALAN</option>
                <option value="SIJ SKM THP 3 - PENGUKIRAN KAYU">SIJ SKM THP 3 - PENGUKIRAN KAYU</option>
                <option value="SIJ SKM THP 3 - PENGUKURAN DATA AUDIT TENAGA">SIJ SKM THP 3 - PENGUKURAN DATA AUDIT
                  TENAGA</option>
                <option value="SIJ SKM THP 3 - PENTADBIR ELEKTRONIK (E-ADMINISTRATOR)">SIJ SKM THP 3 - PENTADBIR
                  ELEKTRONIK (E-ADMINISTRATOR)</option>
                <option value="SIJ SKM THP 3 - PENTADBIRAN PENILAIAN HARTANAH ? TEKNIKAL">SIJ SKM THP 3 - PENTADBIRAN
                  PENILAIAN HARTANAH ? TEKNIKAL</option>
                <option value="SIJ SKM THP 3 - PENYEDIAAN DAN PEMBUATAN MAKANAN">SIJ SKM THP 3 - PENYEDIAAN DAN
                  PEMBUATAN MAKANAN</option>
                <option value="SIJ SKM THP 3 - PENYELENGGARAAN DAN PEMBAIKPULIHAN JENTERA PERTANIAN">SIJ SKM THP 3 -
                  PENYELENGGARAAN DAN PEMBAIKPULIHAN JENTERA PERTANIAN</option>
                <option value="SIJ SKM THP 3 - PENYELENGGARAAN JENTERA TOLAK TANAH">SIJ SKM THP 3 - PENYELENGGARAAN
                  JENTERA TOLAK TANAH</option>
                <option value="SIJ SKM THP 3 - PENYELENGGARAAN MARIN MEKANIKAL">SIJ SKM THP 3 - PENYELENGGARAAN MARIN
                  MEKANIKAL</option>
                <option value="SIJ SKM THP 3 - PENYELENGGARAAN MESIN PERCETAKAN MEKANIKAL">SIJ SKM THP 3 -
                  PENYELENGGARAAN MESIN PERCETAKAN MEKANIKAL</option>
                <option value="SIJ SKM THP 3 - PENYELENGGARAAN SELAM SKUBA">SIJ SKM THP 3 - PENYELENGGARAAN SELAM SKUBA
                </option>
                <option value="SIJ SKM THP 3 - PENYELENGGARAN ELEKTRIK KAPAL">SIJ SKM THP 3 - PENYELENGGARAN ELEKTRIK
                  KAPAL</option>
                <option value="SIJ SKM THP 3 - PENYELENGGARAN ELEKTRONIK KAPAL">SIJ SKM THP 3 - PENYELENGGARAN
                  ELEKTRONIK KAPAL</option>
                <option value="SIJ SKM THP 3 - PENYELIA AKAUN (ACCOUNT SUPERVISOR)">SIJ SKM THP 3 - PENYELIA AKAUN
                  (ACCOUNT SUPERVISOR)</option>
                <option value="SIJ SKM THP 3 - PENYELIA AKHIR MOTOSIKAL">SIJ SKM THP 3 - PENYELIA AKHIR MOTOSIKAL
                </option>
                <option value="SIJ SKM THP 3 - PENYELIA AKSESORI AUTOMATIF">SIJ SKM THP 3 - PENYELIA AKSESORI AUTOMATIF
                </option>
                <option value="SIJ SKM THP 3 - PENYELIA BARANGAN KEMAS">SIJ SKM THP 3 - PENYELIA BARANGAN KEMAS</option>
                <option value="SIJ SKM THP 3 - PENYELIA BATIK LUKIS (HAND DRAWN BATIK ARTIST SUPERVISOR)">SIJ SKM THP 3
                  - PENYELIA BATIK LUKIS (HAND DRAWN BATIK ARTIST SUPERVISOR)</option>
                <option value="SIJ SKM THP 3 - PENYELIA BATIK SKRIN">SIJ SKM THP 3 - PENYELIA BATIK SKRIN</option>
                <option value="SIJ SKM THP 3 - PENYELIA BATIK TERAP">SIJ SKM THP 3 - PENYELIA BATIK TERAP</option>
                <option value="SIJ SKM THP 3 - PENYELIA BINAAN BANGUNAN">SIJ SKM THP 3 - PENYELIA BINAAN BANGUNAN
                </option>
                <option value="SIJ SKM THP 3 - PENYELIA DESA">SIJ SKM THP 3 - PENYELIA DESA</option>
                <option value="SIJ SKM THP 3 - PENYELIA FABRIKASI (STRUKTUR)">SIJ SKM THP 3 - PENYELIA FABRIKASI
                  (STRUKTUR)</option>
                <option value="SIJ SKM THP 3 - PENYELIA FABRIKATOR (WELDING) MOTOSIKAL">SIJ SKM THP 3 - PENYELIA
                  FABRIKATOR (WELDING) MOTOSIKAL</option>
                <option value="SIJ SKM THP 3 - PENYELIA JAHITAN INDUSTRI">SIJ SKM THP 3 - PENYELIA JAHITAN INDUSTRI
                </option>
                <option value="SIJ SKM THP 3 - PENYELIA KAUNTER HADAPAN (FRONT OFFICE SUPERVISOR)">SIJ SKM THP 3 -
                  PENYELIA KAUNTER HADAPAN (FRONT OFFICE SUPERVISOR)</option>
                <option value="SIJ SKM THP 3 - PENYELIA KEKUDA BUMBUNG">SIJ SKM THP 3 - PENYELIA KEKUDA BUMBUNG</option>
                <option value="SIJ SKM THP 3 - PENYELIA KERANGKA BADAN">SIJ SKM THP 3 - PENYELIA KERANGKA BADAN</option>
                <option value="SIJ SKM THP 3 - PENYELIA KERANGKA BADAN">SIJ SKM THP 3 - PENYELIA KERANGKA BADAN</option>
                <option value="SIJ SKM THP 3 - PENYELIA KESELAMATAN UNIT ANJING (K9)">SIJ SKM THP 3 - PENYELIA
                  KESELAMATAN UNIT ANJING (K9)</option>
                <option value="SIJ SKM THP 3 - PENYELIA LANSKAP (LANDSCAPE SUPERVISOR)">SIJ SKM THP 3 - PENYELIA LANSKAP
                  (LANDSCAPE SUPERVISOR)</option>
                <option value="SIJ SKM THP 3 - PENYELIA MAKANAN & MINUMAN (F & B SUPERVISOR)">SIJ SKM THP 3 - PENYELIA
                  MAKANAN & MINUMAN (F & B SUPERVISOR)</option>
                <option value="SIJ SKM THP 3 - PENYELIA MENGECAT MOTOSIKAL">SIJ SKM THP 3 - PENYELIA MENGECAT MOTOSIKAL
                </option>
                <option value="SIJ SKM THP 3 - PENYELIA MENYADURAN MOTOSIKAL">SIJ SKM THP 3 - PENYELIA MENYADURAN
                  MOTOSIKAL</option>
                <option value="SIJ SKM THP 3 - PENYELIA OPERASI KAWALAN PROSES">SIJ SKM THP 3 - PENYELIA OPERASI KAWALAN
                  PROSES</option>
                <option value="SIJ SKM THP 3 - PENYELIA PAIP DAN KUMBAHAN">SIJ SKM THP 3 - PENYELIA PAIP DAN KUMBAHAN
                </option>
                <option value="SIJ SKM THP 3 - PENYELIA PEMASANGAN AKHIR MOTOSIKAL">SIJ SKM THP 3 - PENYELIA PEMASANGAN
                  AKHIR MOTOSIKAL</option>
                <option value="SIJ SKM THP 3 - PENYELIA PEMASANGAN AUTOMOBIL">SIJ SKM THP 3 - PENYELIA PEMASANGAN
                  AUTOMOBIL</option>
                <option value="SIJ SKM THP 3 - PENYELIA PEMASANGAN BADAN MOTOSIKAL">SIJ SKM THP 3 - PENYELIA PEMASANGAN
                  BADAN MOTOSIKAL</option>
                <option value="SIJ SKM THP 3 - PENYELIA PEMASANGAN ENJIN MOTOSIKAL">SIJ SKM THP 3 - PENYELIA PEMASANGAN
                  ENJIN MOTOSIKAL</option>
                <option value="SIJ SKM THP 3 - PENYELIA PEMASANGAN SILING HIASAN">SIJ SKM THP 3 - PENYELIA PEMASANGAN
                  SILING HIASAN</option>
                <option value="SIJ SKM THP 3 - PENYELIA PEMASARAN - PENGEDARAN MAKANAN">SIJ SKM THP 3 - PENYELIA
                  PEMASARAN - PENGEDARAN MAKANAN</option>
                <option value="SIJ SKM THP 3 - PENYELIA PEMBANTU KECEMASAN">SIJ SKM THP 3 - PENYELIA PEMBANTU KECEMASAN
                </option>
                <option value="SIJ SKM THP 3 - PENYELIA PEMBANTU TADBIR SISTEM MAKLUMAT">SIJ SKM THP 3 - PENYELIA
                  PEMBANTU TADBIR SISTEM MAKLUMAT</option>
                <option value="SIJ SKM THP 3 - PENYELIA PEMBUAT PERABOT">SIJ SKM THP 3 - PENYELIA PEMBUAT PERABOT
                </option>
                <option value="SIJ SKM THP 3 - PENYELIA PEMBUATAN LOGAM HIASAN">SIJ SKM THP 3 - PENYELIA PEMBUATAN LOGAM
                  HIASAN</option>
                <option value="SIJ SKM THP 3 - PENYELIA PEMBUATAN PINTU DAN TINGKAP">SIJ SKM THP 3 - PENYELIA PEMBUATAN
                  PINTU DAN TINGKAP</option>
                <option value="SIJ SKM THP 3 - PENYELIA PENGELUARAN PEMPROSESAN MAKANAN">SIJ SKM THP 3 - PENYELIA
                  PENGELUARAN PEMPROSESAN MAKANAN</option>
                <option value="SIJ SKM THP 3 - PENYELIA PENGELUARAN SERAMIK (PLASTIC FORMING)">SIJ SKM THP 3 - PENYELIA
                  PENGELUARAN SERAMIK (PLASTIC FORMING)</option>
                <option value="SIJ SKM THP 3 - PENYELIA PENGELUARAN SERAMIK (POWDER PRESS)">SIJ SKM THP 3 - PENYELIA
                  PENGELUARAN SERAMIK (POWDER PRESS)</option>
                <option value="SIJ SKM THP 3 - PENYELIA PENGELUARAN SERAMIK (SLIP CASTING)">SIJ SKM THP 3 - PENYELIA
                  PENGELUARAN SERAMIK (SLIP CASTING)</option>
                <option value="SIJ SKM THP 3 - PENYELIA PENGELUARAN SERAMIK TERMAJU">SIJ SKM THP 3 - PENYELIA
                  PENGELUARAN SERAMIK TERMAJU</option>
                <option value="SIJ SKM THP 3 - PENYELIA PENYELENGGARAAN PERLINDUNGAN KEBAKARAN">SIJ SKM THP 3 - PENYELIA
                  PENYELENGGARAAN PERLINDUNGAN KEBAKARAN</option>
                <option value="SIJ SKM THP 3 - PENYELIA PERANCAH (PREFABRICATED)">SIJ SKM THP 3 - PENYELIA PERANCAH
                  (PREFABRICATED)</option>
                <option value="SIJ SKM THP 3 - PENYELIA PERANCAH (TUBULAR)">SIJ SKM THP 3 - PENYELIA PERANCAH (TUBULAR)
                </option>
                <option value="SIJ SKM THP 3 - PENYELIA PERAPIAN BADAN KENDERAAN PENUMPANG">SIJ SKM THP 3 - PENYELIA
                  PERAPIAN BADAN KENDERAAN PENUMPANG</option>
                <option value="SIJ SKM THP 3 - PENYELIA PERCETAKAN (ELEKTRIK/ELEKTRONIK)">SIJ SKM THP 3 - PENYELIA
                  PERCETAKAN (ELEKTRIK/ELEKTRONIK)</option>
                <option value="SIJ SKM THP 3 - PENYELIA PERCETAKAN DIGITAL (NIP)">SIJ SKM THP 3 - PENYELIA PERCETAKAN
                  DIGITAL (NIP)</option>
                <option value="SIJ SKM THP 3 - PENYELIA PERLINDUNGAN KEBAKARAN (PASIF)">SIJ SKM THP 3 - PENYELIA
                  PERLINDUNGAN KEBAKARAN (PASIF)</option>
                <option value="SIJ SKM THP 3 - PENYELIA PRA-CETAK">SIJ SKM THP 3 - PENYELIA PRA-CETAK</option>
                <option value="SIJ SKM THP 3 - PENYELIA SELAMAN TEPU">SIJ SKM THP 3 - PENYELIA SELAMAN TEPU</option>
                <option value="SIJ SKM THP 3 - PENYELIA SERVIS TAYAR">SIJ SKM THP 3 - PENYELIA SERVIS TAYAR</option>
                <option value="SIJ SKM THP 3 - PENYELIA SONGKAT DAN DASTER">SIJ SKM THP 3 - PENYELIA SONGKAT DAN DASTER
                </option>
                <option value="SIJ SKM THP 3 - PENYELIA TANAMAN">SIJ SKM THP 3 - PENYELIA TANAMAN</option>
                <option value="SIJ SKM THP 3 - PENYELIA TENUNAN PUA">SIJ SKM THP 3 - PENYELIA TENUNAN PUA</option>
                <option value="SIJ SKM THP 3 - PENYELIA TENUNAN TAPESTRI">SIJ SKM THP 3 - PENYELIA TENUNAN TAPESTRI
                </option>
                <option value="SIJ SKM THP 3 - PENYELIA TUKANG KAYU KANAN-KERJA KAYU DALAMA">SIJ SKM THP 3 - PENYELIA
                  TUKANG KAYU KANAN-KERJA KAYU DALAMA</option>
                <option value="SIJ SKM THP 3 - PENYELIA UKIRAN BARANGAN KASAR LOGAM">SIJ SKM THP 3 - PENYELIA UKIRAN
                  BARANGAN KASAR LOGAM</option>
                <option value="SIJ SKM THP 3 - PENYELIA UKIRAN KAYU">SIJ SKM THP 3 - PENYELIA UKIRAN KAYU</option>
                <option value="SIJ SKM THP 3 - PENYELIAAN DAN OPERASI PENANAMAN KELAPA SAWIT">SIJ SKM THP 3 - PENYELIAAN
                  DAN OPERASI PENANAMAN KELAPA SAWIT</option>
                <option value="SIJ SKM THP 3 - PENYELIAAN HYGIENE">SIJ SKM THP 3 - PENYELIAAN HYGIENE</option>
                <option value="SIJ SKM THP 3 - PENYELIAAN KAWALAN KUMBAHAN">SIJ SKM THP 3 - PENYELIAAN KAWALAN KUMBAHAN
                </option>
                <option value="SIJ SKM THP 3 - PENYELIAAN KEJURUTERAAN AUTOMASI INDUSTRI">SIJ SKM THP 3 - PENYELIAAN
                  KEJURUTERAAN AUTOMASI INDUSTRI</option>
                <option value="SIJ SKM THP 3 - PENYELIAAN KESELAMATAN AKUATIK DAN PENYELAMATAN">SIJ SKM THP 3 -
                  PENYELIAAN KESELAMATAN AKUATIK DAN PENYELAMATAN</option>
                <option value="SIJ SKM THP 3 - PENYELIAAN OPERASI PENGANGKUTAN DARAT">SIJ SKM THP 3 - PENYELIAAN OPERASI
                  PENGANGKUTAN DARAT</option>
                <option value="SIJ SKM THP 3 - PENYELIAAN OPERASI RAWATAN AIR">SIJ SKM THP 3 - PENYELIAAN OPERASI
                  RAWATAN AIR</option>
                <option value="SIJ SKM THP 3 - PENYELIAAN OPERASI SUNTIKAN ACUAN PLASTIK">SIJ SKM THP 3 - PENYELIAAN
                  OPERASI SUNTIKAN ACUAN PLASTIK</option>
                <option
                  value="SIJ SKM THP 3 - PENYELIAAN PEMASANGAN DAN PENYELENGGARAAN HEATING VENTILATION AIR CONDITIONING (HVAC">
                  SIJ SKM THP 3 - PENYELIAAN PEMASANGAN DAN PENYELENGGARAAN HEATING VENTILATION AIR CONDITIONING (HVAC
                </option>
                <option value="SIJ SKM THP 3 - PENYELIAAN PEMASANGAN LIF DAN ESKALATOR">SIJ SKM THP 3 - PENYELIAAN
                  PEMASANGAN LIF DAN ESKALATOR</option>
                <option value="SIJ SKM THP 3 - PENYELIAAN PENGAGIHAN AIR">SIJ SKM THP 3 - PENYELIAAN PENGAGIHAN AIR
                </option>
                <option value="SIJ SKM THP 3 - PENYELIAAN PENGELUARAN FOUNDRI">SIJ SKM THP 3 - PENYELIAAN PENGELUARAN
                  FOUNDRI</option>
                <option value="SIJ SKM THP 3 - PENYELIAAN PENGUJIAN DAN PENYELENGGARAAN LIF DAN ESKALATOR">SIJ SKM THP 3
                  - PENYELIAAN PENGUJIAN DAN PENYELENGGARAAN LIF DAN ESKALATOR</option>
                <option value="SIJ SKM THP 3 - PENYELIAAN PENGURUSAN PEJABAT">SIJ SKM THP 3 - PENYELIAAN PENGURUSAN
                  PEJABAT</option>
                <option value="SIJ SKM THP 3 - PENYELIAAN PENYELENGGARAAN TAMAN">SIJ SKM THP 3 - PENYELIAAN
                  PENYELENGGARAAN TAMAN</option>
                <option value="SIJ SKM THP 3 - PENYELIAAN PERKHIDMATAN SEKURITI">SIJ SKM THP 3 - PENYELIAAN PERKHIDMATAN
                  SEKURITI</option>
                <option value="SIJ SKM THP 3 - PENYEMBURAN CAT AUTOMOTIF">SIJ SKM THP 3 - PENYEMBURAN CAT AUTOMOTIF
                </option>
                <option value="SIJ SKM THP 3 - PERAKAUNAN">SIJ SKM THP 3 - PERAKAUNAN</option>
                <option value="SIJ SKM THP 3 - PEREKA PEWTER">SIJ SKM THP 3 - PEREKA PEWTER</option>
                <option value="SIJ SKM THP 3 - PEREKABENTUK MULTIMEDIA - ANIMASI & VISUAL">SIJ SKM THP 3 - PEREKABENTUK
                  MULTIMEDIA - ANIMASI & VISUAL</option>
                <option value="SIJ SKM THP 3 - PEREKABENTUK MULTIMEDIA - AUDIO">SIJ SKM THP 3 - PEREKABENTUK MULTIMEDIA
                  - AUDIO</option>
                <option value="SIJ SKM THP 3 - PEREKABENTUK MULTIMEDIA - PENGARANGAN">SIJ SKM THP 3 - PEREKABENTUK
                  MULTIMEDIA - PENGARANGAN</option>
                <option value="SIJ SKM THP 3 - PEREKABENTUK MULTIMEDIA - VIDEO">SIJ SKM THP 3 - PEREKABENTUK MULTIMEDIA
                  - VIDEO</option>
                <option value="SIJ SKM THP 3 - PERKHIDMATAN OPERASI DAN PENYELENGGARAAN DANDANG">SIJ SKM THP 3 -
                  PERKHIDMATAN OPERASI DAN PENYELENGGARAAN DANDANG</option>
                <option value="SIJ SKM THP 3 - PERKHIDMATAN RANGKAIAN KOMPUTER">SIJ SKM THP 3 - PERKHIDMATAN RANGKAIAN
                  KOMPUTER</option>
                <option value="SIJ SKM THP 3 - PERKHIDMATAN SOKONGAN HAYAT DASAR LAUT">SIJ SKM THP 3 - PERKHIDMATAN
                  SOKONGAN HAYAT DASAR LAUT</option>
                <option value="SIJ SKM THP 3 - PERKHIDMATAN SOKONGAN PENERBITAN">SIJ SKM THP 3 - PERKHIDMATAN SOKONGAN
                  PENERBITAN</option>
                <option value="SIJ SKM THP 3 - PERKHIDMATAN SOKONGAN PERUNDINGAN SUMBER MANUSIA">SIJ SKM THP 3 -
                  PERKHIDMATAN SOKONGAN PERUNDINGAN SUMBER MANUSIA</option>
                <option value="SIJ SKM THP 3 - PERKHIDMATAN SOKONGAN SUMBER MANUSIA">SIJ SKM THP 3 - PERKHIDMATAN
                  SOKONGAN SUMBER MANUSIA</option>
                <option value="SIJ SKM THP 3 - PERSEMBAHAN INSTRUMEN BERTALI">SIJ SKM THP 3 - PERSEMBAHAN INSTRUMEN
                  BERTALI</option>
                <option value="SIJ SKM THP 3 - PERSEMBAHAN MUZIK TRADISIONAL (UTAMA)">SIJ SKM THP 3 - PERSEMBAHAN MUZIK
                  TRADISIONAL (UTAMA)</option>
                <option value="SIJ SKM THP 3 - PERSEMBAHAN RITMA BERKUMPULAN (UTAMA)">SIJ SKM THP 3 - PERSEMBAHAN RITMA
                  BERKUMPULAN (UTAMA)</option>
                <option value="SIJ SKM THP 3 - PERSONEL PERHUBUNGAN (ELEKTRONIK)">SIJ SKM THP 3 - PERSONEL PERHUBUNGAN
                  (ELEKTRONIK)</option>
                <option value="SIJ SKM THP 3 - PLASTIC BLOW MOULDING PRODUCTION SENIOR TECHNICIAN (THERMOPLASTIC)">SIJ
                  SKM THP 3 - PLASTIC BLOW MOULDING PRODUCTION SENIOR TECHNICIAN (THERMOPLASTIC)</option>
                <option value="SIJ SKM THP 3 - PLASTIC COMPRESSION MOULDING PRODUCTION SENIOR TECHNICIAN (THERMOSET)">
                  SIJ SKM THP 3 - PLASTIC COMPRESSION MOULDING PRODUCTION SENIOR TECHNICIAN (THERMOSET)</option>
                <option value="SIJ SKM THP 3 - PLASTIC EXTRUTION PRODUCTION SENIOR TECHNICIAN (THERMOPLASTIC)">SIJ SKM
                  THP 3 - PLASTIC EXTRUTION PRODUCTION SENIOR TECHNICIAN (THERMOPLASTIC)</option>
                <option value="SIJ SKM THP 3 - PLASTIC INJECTION MOULDING PRODUCTION SENIOR TECHNICIAN (THERMOPLASTIC)">
                  SIJ SKM THP 3 - PLASTIC INJECTION MOULDING PRODUCTION SENIOR TECHNICIAN (THERMOPLASTIC)</option>
                <option value="SIJ SKM THP 3 - PLASTIC INJECTION MOULDING SENIOR TECHNICIAN (THERMOSET)">SIJ SKM THP 3 -
                  PLASTIC INJECTION MOULDING SENIOR TECHNICIAN (THERMOSET)</option>
                <option value="SIJ SKM THP 3 - PLASTIC ROTATIONAL MOULDING PRODUCTION SENIOR TECHNICIAN">SIJ SKM THP 3 -
                  PLASTIC ROTATIONAL MOULDING PRODUCTION SENIOR TECHNICIAN</option>
                <option value="SIJ SKM THP 3 - PORT SECURITY SUPERVISOR">SIJ SKM THP 3 - PORT SECURITY SUPERVISOR
                </option>
                <option value="SIJ SKM THP 3 - PRINCIPAL MUSICIAN (RHYTHM SECTION)">SIJ SKM THP 3 - PRINCIPAL MUSICIAN
                  (RHYTHM SECTION)</option>
                <option value="SIJ SKM THP 3 - PRINSIPAL PEMUZIK TRADISIONAL MELAYU">SIJ SKM THP 3 - PRINSIPAL PEMUZIK
                  TRADISIONAL MELAYU</option>
                <option value="SIJ SKM THP 3 - PRODUKSI AUDIO">SIJ SKM THP 3 - PRODUKSI AUDIO</option>
                <option value="SIJ SKM THP 3 - PROGRAM LOGIC SENIOR TECHNICIAN">SIJ SKM THP 3 - PROGRAM LOGIC SENIOR
                  TECHNICIAN</option>
                <option value="SIJ SKM THP 3 - PROSES KIMPALAN ARKA BERTERAS LOGAM">SIJ SKM THP 3 - PROSES KIMPALAN ARKA
                  BERTERAS LOGAM</option>
                <option value="SIJ SKM THP 3 - PROSES KIMPALAN ARKA GAS TUNGSTEN">SIJ SKM THP 3 - PROSES KIMPALAN ARKA
                  GAS TUNGSTEN</option>
                <option value="SIJ SKM THP 3 - PROSES KIMPALAN ARKA KEPINGAN LOGAM">SIJ SKM THP 3 - PROSES KIMPALAN ARKA
                  KEPINGAN LOGAM</option>
                <option value="SIJ SKM THP 3 - PROSES KIMPALAN GAS LOGAM">SIJ SKM THP 3 - PROSES KIMPALAN GAS LOGAM
                </option>
                <option value="SIJ SKM THP 3 - PUA WEAVING SEPERVISOR">SIJ SKM THP 3 - PUA WEAVING SEPERVISOR</option>
                <option value="SIJ SKM THP 3 - REFLEKSOLOGI KAKI, TANGAN DAN TELINGA">SIJ SKM THP 3 - REFLEKSOLOGI KAKI,
                  TANGAN DAN TELINGA</option>
                <option value="SIJ SKM THP 3 - REKAAN GRAFIK">SIJ SKM THP 3 - REKAAN GRAFIK</option>
                <option value="SIJ SKM THP 3 - REKABENTUK GRAFIK (DIGITAL)">SIJ SKM THP 3 - REKABENTUK GRAFIK (DIGITAL)
                </option>
                <option value="SIJ SKM THP 3 - ROFF TRUSS SUPERVISOR">SIJ SKM THP 3 - ROFF TRUSS SUPERVISOR</option>
                <option value="SIJ SKM THP 3 - SECURITY SUPERVISOR">SIJ SKM THP 3 - SECURITY SUPERVISOR</option>
                <option value="SIJ SKM THP 3 - SEMICONDUCTOR TECHNICIAN">SIJ SKM THP 3 - SEMICONDUCTOR TECHNICIAN
                </option>
                <option value="SIJ SKM THP 3 - SENI SOLEKAN">SIJ SKM THP 3 - SENI SOLEKAN</option>
                <option value="SIJ SKM THP 3 - SENIOR AIR CRAFT INTERIOR MAINTENANCE TECHNICIAN">SIJ SKM THP 3 - SENIOR
                  AIR CRAFT INTERIOR MAINTENANCE TECHNICIAN</option>
                <option value="SIJ SKM THP 3 - SENIOR CONTEMPORARY MUSICIAN">SIJ SKM THP 3 - SENIOR CONTEMPORARY
                  MUSICIAN</option>
                <option value="SIJ SKM THP 3 - SENIOR GENERAL BIOTECHNOLOGY LABORATORY TECHNICIAN">SIJ SKM THP 3 -
                  SENIOR GENERAL BIOTECHNOLOGY LABORATORY TECHNICIAN</option>
                <option value="SIJ SKM THP 3 - SENIOR PHOTOGRAPHER">SIJ SKM THP 3 - SENIOR PHOTOGRAPHER</option>
                <option value="SIJ SKM THP 3 - SENIOR TOOLMAKER - METAL STAMPING DIE">SIJ SKM THP 3 - SENIOR TOOLMAKER -
                  METAL STAMPING DIE</option>
                <option value="SIJ SKM THP 3 - SERVIS DAN PENYELENGGARAAN MOTOSIKAL">SIJ SKM THP 3 - SERVIS DAN
                  PENYELENGGARAAN MOTOSIKAL</option>
                <option value="SIJ SKM THP 3 - SERVIS PENYAMANAN UDARA AUTOMOTIF">SIJ SKM THP 3 - SERVIS PENYAMANAN
                  UDARA AUTOMOTIF</option>
                <option value="SIJ SKM THP 3 - SETIAUSAHA KORPORAT EKSEKUTIF">SIJ SKM THP 3 - SETIAUSAHA KORPORAT
                  EKSEKUTIF</option>
                <option value="SIJ SKM THP 3 - SOUND EDITOR - POST PRODUCTION">SIJ SKM THP 3 - SOUND EDITOR - POST
                  PRODUCTION</option>
                <option value="SIJ SKM THP 3 - SOUND SUPERVISOR">SIJ SKM THP 3 - SOUND SUPERVISOR</option>
                <option value="SIJ SKM THP 3 - SPA SUPERVISOR">SIJ SKM THP 3 - SPA SUPERVISOR</option>
                <option value="SIJ SKM THP 3 - TAILOR SUPERVISOR">SIJ SKM THP 3 - TAILOR SUPERVISOR</option>
                <option value="SIJ SKM THP 3 - TAPESTRY WEAVING SUPERVISOR">SIJ SKM THP 3 - TAPESTRY WEAVING SUPERVISOR
                </option>
                <option value="SIJ SKM THP 3 - TERAPI SPA">SIJ SKM THP 3 - TERAPI SPA</option>
                <option value="SIJ SKM THP 3 - TRIM DAN FINAL AUTOMOTIF">SIJ SKM THP 3 - TRIM DAN FINAL AUTOMOTIF
                </option>
                <option
                  value="SIJ SKM THP 3 - TROUBLESHOOTING, PEMBAIKPULIHAN DAN PENYELENGGARAAN PERALATAN ELEKTRONIK">SIJ
                  SKM THP 3 - TROUBLESHOOTING, PEMBAIKPULIHAN DAN PENYELENGGARAAN PERALATAN ELEKTRONIK</option>
                <option value="SIJ SKM THP 3 - TUKANG JAM">SIJ SKM THP 3 - TUKANG JAM</option>
                <option value="SIJ SKM THP 3 - URUT TERAPI">SIJ SKM THP 3 - URUT TERAPI</option>
                <option value="SIJ SKM THP 3 - VIDEO/PRODUKSI FILEM (PENGGAMBARAN)">SIJ SKM THP 3 - VIDEO/PRODUKSI FILEM
                  (PENGGAMBARAN)</option>
                <option value="SIJ SKM THP 4 - EKSEKUTIF SISTEM MAKLUMAT">SIJ SKM THP 4 - EKSEKUTIF SISTEM MAKLUMAT
                </option>
                <option value="SIJ SKM THP 4 - PERKHIDMATAN PENYEDIAAN DAN PEMBUATAN MAKANAN">SIJ SKM THP 4 -
                  PERKHIDMATAN PENYEDIAAN DAN PEMBUATAN MAKANAN</option>
                <option value="SIJ THP 3 MLVK P'LENGGARA MEKNIKAL J'TEKNIK INDUST">SIJ THP 3 MLVK P'LENGGARA MEKNIKAL
                  J'TEKNIK INDUST</option>
                <option value="SIJ VOKASIONAL MSIA - AGROINDUSTRI TANAMAN">SIJ VOKASIONAL MSIA - AGROINDUSTRI TANAMAN
                </option>
                <option value="SIJ VOKASIONAL MSIA - AGROINDUSTRI TERNAKAN POLTRI">SIJ VOKASIONAL MSIA - AGROINDUSTRI
                  TERNAKAN POLTRI</option>
                <option value="SIJ VOKASIONAL MSIA - AGROINDUSTRI TERNAKAN RUMINAN">SIJ VOKASIONAL MSIA - AGROINDUSTRI
                  TERNAKAN RUMINAN</option>
                <option value="SIJ VOKASIONAL MSIA - AKUAKULTUR">SIJ VOKASIONAL MSIA - AKUAKULTUR</option>
                <option value="SIJ VOKASIONAL MSIA - AMALAN BENGKEL MESIN">SIJ VOKASIONAL MSIA - AMALAN BENGKEL MESIN
                </option>
                <option value="SIJ VOKASIONAL MSIA - BAKERI DAN PASTRI">SIJ VOKASIONAL MSIA - BAKERI DAN PASTRI</option>
                <option value="SIJ VOKASIONAL MSIA - BIOTEKNOLOGI">SIJ VOKASIONAL MSIA - BIOTEKNOLOGI</option>
                <option value="SIJ VOKASIONAL MSIA - FLORIKULTUR">SIJ VOKASIONAL MSIA - FLORIKULTUR</option>
                <option value="SIJ VOKASIONAL MSIA - HERBA">SIJ VOKASIONAL MSIA - HERBA</option>
                <option value="SIJ VOKASIONAL MSIA - HORTIKULTUR HIASAN">SIJ VOKASIONAL MSIA - HORTIKULTUR HIASAN
                </option>
                <option value="SIJ VOKASIONAL MSIA - HOSPITALITI DAN PELANCONGAN">SIJ VOKASIONAL MSIA - HOSPITALITI DAN
                  PELANCONGAN</option>
                <option value="SIJ VOKASIONAL MSIA - KESETIAUSAHAAN PENTADBIRAN">SIJ VOKASIONAL MSIA - KESETIAUSAHAAN
                  PENTADBIRAN</option>
                <option value="SIJ VOKASIONAL MSIA - KOSMETOLOGI">SIJ VOKASIONAL MSIA - KOSMETOLOGI</option>
                <option value="SIJ VOKASIONAL MSIA - LANDSKAP">SIJ VOKASIONAL MSIA - LANDSKAP</option>
                <option value="SIJ VOKASIONAL MSIA - MEKANISASI AGRO">SIJ VOKASIONAL MSIA - MEKANISASI AGRO</option>
                <option value="SIJ VOKASIONAL MSIA - MULTIMEDIA KREATIF (ANIMASI)">SIJ VOKASIONAL MSIA - MULTIMEDIA
                  KREATIF (ANIMASI)</option>
                <option value="SIJ VOKASIONAL MSIA - PEMASARAN">SIJ VOKASIONAL MSIA - PEMASARAN</option>
                <option value="SIJ VOKASIONAL MSIA - PEMESINAN INDUSTRI">SIJ VOKASIONAL MSIA - PEMESINAN INDUSTRI
                </option>
                <option value="SIJ VOKASIONAL MSIA - PEMPROSESAN HASIL PERTANIAN">SIJ VOKASIONAL MSIA - PEMPROSESAN
                  HASIL PERTANIAN</option>
                <option value="SIJ VOKASIONAL MSIA - PENGAJIAN AWAL KANAK-KANAK">SIJ VOKASIONAL MSIA - PENGAJIAN AWAL
                  KANAK-KANAK</option>
                <option value="SIJ VOKASIONAL MSIA - PENGURUSAN PERNIAGAAN">SIJ VOKASIONAL MSIA - PENGURUSAN PERNIAGAAN
                </option>
                <option value="SIJ VOKASIONAL MSIA - PENYELENGGARAAN PESAWAT">SIJ VOKASIONAL MSIA - PENYELENGGARAAN
                  PESAWAT</option>
                <option value="SIJ VOKASIONAL MSIA - PERAKAUNAN">SIJ VOKASIONAL MSIA - PERAKAUNAN</option>
                <option value="SIJ VOKASIONAL MSIA - PERBANKAN">SIJ VOKASIONAL MSIA - PERBANKAN</option>
                <option value="SIJ VOKASIONAL MSIA - PERIKANAN TANGKAPAN">SIJ VOKASIONAL MSIA - PERIKANAN TANGKAPAN
                </option>
                <option value="SIJ VOKASIONAL MSIA - REKABENTUK GRAFIK INDUSTRI">SIJ VOKASIONAL MSIA - REKABENTUK GRAFIK
                  INDUSTRI</option>
                <option value="SIJ VOKASIONAL MSIA - SENI KULINARI">SIJ VOKASIONAL MSIA - SENI KULINARI</option>
                <option value="SIJ VOKASIONAL MSIA - SISTEM PENGURUSAN PENGKALAN DATA DAN APLIKASI WEB">SIJ VOKASIONAL
                  MSIA - SISTEM PENGURUSAN PENGKALAN DATA DAN APLIKASI WEB</option>
                <option value="SIJ VOKASIONAL MSIA - TEKNOLOGI AUTOMOTIF">SIJ VOKASIONAL MSIA - TEKNOLOGI AUTOMOTIF
                </option>
                <option value="SIJ VOKASIONAL MSIA - TEKNOLOGI ELEKTRIK">SIJ VOKASIONAL MSIA - TEKNOLOGI ELEKTRIK
                </option>
                <option value="SIJ VOKASIONAL MSIA - TEKNOLOGI ELEKTRONIK">SIJ VOKASIONAL MSIA - TEKNOLOGI ELEKTRONIK
                </option>
                <option value="SIJ VOKASIONAL MSIA - TEKNOLOGI ENJIN MARIN">SIJ VOKASIONAL MSIA - TEKNOLOGI ENJIN MARIN
                </option>
                <option value="SIJ VOKASIONAL MSIA - TEKNOLOGI FOUNDRI">SIJ VOKASIONAL MSIA - TEKNOLOGI FOUNDRI</option>
                <option value="SIJ VOKASIONAL MSIA - TEKNOLOGI KIMPALAN">SIJ VOKASIONAL MSIA - TEKNOLOGI KIMPALAN
                </option>
                <option value="SIJ VOKASIONAL MSIA - TEKNOLOGI PEMBINAAN">SIJ VOKASIONAL MSIA - TEKNOLOGI PEMBINAAN
                </option>
                <option value="SIJ VOKASIONAL MSIA - TEKNOLOGI PEMBUATAN">SIJ VOKASIONAL MSIA - TEKNOLOGI PEMBUATAN
                </option>
                <option value="SIJ VOKASIONAL MSIA - TEKNOLOGI PEMBUATAN BOT">SIJ VOKASIONAL MSIA - TEKNOLOGI PEMBUATAN
                  BOT</option>
                <option value="SIJ VOKASIONAL MSIA - TEKNOLOGI PEMPROSESAN KAYU DAN KEMASAN">SIJ VOKASIONAL MSIA -
                  TEKNOLOGI PEMPROSESAN KAYU DAN KEMASAN</option>
                <option value="SIJ VOKASIONAL MSIA - TEKNOLOGI PENGURUSAN PENTAS">SIJ VOKASIONAL MSIA - TEKNOLOGI
                  PENGURUSAN PENTAS</option>
                <option value="SIJ VOKASIONAL MSIA - TEKNOLOGI PENYEJUKAN DAN PENYAMANAN UDARA">SIJ VOKASIONAL MSIA -
                  TEKNOLOGI PENYEJUKAN DAN PENYAMANAN UDARA</option>
                <option value="SIJ VOKASIONAL MSIA - TEKNOLOGI PENYEJUKBEKUAN DAN PENYAMANAN UDARA">SIJ VOKASIONAL MSIA
                  - TEKNOLOGI PENYEJUKBEKUAN DAN PENYAMANAN UDARA</option>
                <option value="SIJ VOKASIONAL MSIA - TEKNOLOGI SISTEM KOMPUTER DAN RANGKAIAN">SIJ VOKASIONAL MSIA -
                  TEKNOLOGI SISTEM KOMPUTER DAN RANGKAIAN</option>
                <option value="SIJ. LATIHAN TEKNISYEN ELEKTRIK(RADIO DAN KAWALAN)">SIJ. LATIHAN TEKNISYEN ELEKTRIK(RADIO
                  DAN KAWALAN)</option>
                <option value="SIJ. MLVK THP 3 J'TEKNIK TEK. ELEKTRONIK INDUSTRI">SIJ. MLVK THP 3 J'TEKNIK TEK.
                  ELEKTRONIK INDUSTRI</option>
                <option value="SIJ. MLVK THP 3(TINGGI)BINAAN BANGU. BERASAS KAYU">SIJ. MLVK THP 3(TINGGI)BINAAN BANGU.
                  BERASAS KAYU</option>
                <option value="SIJ. PKT MLVK- JURUELEKTRIK (DOMESTIK & INDUSTRI)">SIJ. PKT MLVK- JURUELEKTRIK (DOMESTIK
                  & INDUSTRI)</option>
                <option
                  value="SIJ.KEKOMPETENAN KATEGORI BO-2/BO-1/BO/B1/B4(SISTEM VOLTAN MELEBIHI VOLTAN RENDAH)SURUHANJAYA TENAGA">
                  SIJ.KEKOMPETENAN KATEGORI BO-2/BO-1/BO/B1/B4(SISTEM VOLTAN MELEBIHI VOLTAN RENDAH)SURUHANJAYA TENAGA
                </option>
                <option value="SIJ.LAT.TEKNISYEN E'TRIK RADIO(PERHBGN & E'TRONIK)">SIJ.LAT.TEKNISYEN E'TRIK
                  RADIO(PERHBGN & E'TRONIK)</option>
                <option value="SIJIL AMALAN GUAMAN LEMBAGA KELAYAKAN PROFESION UNDANG-UNDANG MALAYSIA">SIJIL AMALAN
                  GUAMAN LEMBAGA KELAYAKAN PROFESION UNDANG-UNDANG MALAYSIA</option>
                <option value="SIJIL AO (SISTEM PEPASANGAN KILANG-KILANG)-JEMAAH PEMERIKSA ELEKTRIK">SIJIL AO (SISTEM
                  PEPASANGAN KILANG-KILANG)-JEMAAH PEMERIKSA ELEKTRIK</option>
                <option value="SIJIL ASAS BOMBA">SIJIL ASAS BOMBA</option>
                <option value="SIJIL ASSOCIATED BOARD ROYAL SCHOOLS OF MUSIC (ABRSM)">SIJIL ASSOCIATED BOARD ROYAL
                  SCHOOLS OF MUSIC (ABRSM)</option>
                <option value="SIJIL BERTARAF DIPLOMA JURURAWAT PERGIGIAN">SIJIL BERTARAF DIPLOMA JURURAWAT PERGIGIAN
                </option>
                <option value="SIJIL BERTARAF DIPLOMA JURUTEKNIK PERGIGIAN">SIJIL BERTARAF DIPLOMA JURUTEKNIK PERGIGIAN
                </option>
                <option value="SIJIL BERTARAF DIPLOMA PEMBANTU FARMASI">SIJIL BERTARAF DIPLOMA PEMBANTU FARMASI</option>
                <option value="SIJIL BERTRF DIPLOMA JURUTEKNOLOGI MAKMAL PERUBATAN">SIJIL BERTRF DIPLOMA JURUTEKNOLOGI
                  MAKMAL PERUBATAN</option>
                <option value="SIJIL EKSEKUTIF PRAKTIF KERJA SOSIAL">SIJIL EKSEKUTIF PRAKTIF KERJA SOSIAL</option>
                <option value="SIJIL ELECTROENCEPATHOLOGRAPHY TECH">SIJIL ELECTROENCEPATHOLOGRAPHY TECH</option>
                <option value="SIJIL ENROLLED ASSISTANT NURSE">SIJIL ENROLLED ASSISTANT NURSE</option>
                <option value="SIJIL FISHING SKIPPER">SIJIL FISHING SKIPPER</option>
                <option value="SIJIL HIDROGRAFI KETEGORI A">SIJIL HIDROGRAFI KETEGORI A</option>
                <option value="SIJIL INSTITUT PERTANIAN MALAYSIA">SIJIL INSTITUT PERTANIAN MALAYSIA</option>
                <option value="SIJIL IV THANAWI / SIJIL TINGGI AGAMA">SIJIL IV THANAWI / SIJIL TINGGI AGAMA</option>
                <option value="SIJIL JURU X_RAY BERTARAF DIPLOMA">SIJIL JURU X_RAY BERTARAF DIPLOMA</option>
                <option value="SIJIL JURUPULIH PERUBATAN (ANGGOTA) BERTARAF DIP.">SIJIL JURUPULIH PERUBATAN (ANGGOTA)
                  BERTARAF DIP.</option>
                <option value="SIJIL JURUPULIH PERUBATAN(CARA KERJA) BERTARAF DIP">SIJIL JURUPULIH PERUBATAN(CARA KERJA)
                  BERTARAF DIP</option>
                <option value="SIJIL JURURAWAT BERTARAF DIPLOMA">SIJIL JURURAWAT BERTARAF DIPLOMA</option>
                <option value="SIJIL JURURAWAT DESA">SIJIL JURURAWAT DESA</option>
                <option value="SIJIL JURUTEKNIK FOTOLITO">SIJIL JURUTEKNIK FOTOLITO</option>
                <option value="SIJIL KECEKAPAN DARI MALAYAN LAND SURVEY BOARD">SIJIL KECEKAPAN DARI MALAYAN LAND SURVEY
                  BOARD</option>
                <option value="SIJIL KECEKAPAN MENAIP PEP SIJIL PERDAGANGAN M'SIA">SIJIL KECEKAPAN MENAIP PEP SIJIL
                  PERDAGANGAN M'SIA</option>
                <option value="SIJIL KECEKAPAN PERANTISAN LLPPKK/MLVK">SIJIL KECEKAPAN PERANTISAN LLPPKK/MLVK</option>
                <option value="SIJIL KEKOMPETENAN KATEGORI A4-2/A4-1/A4 (SISTEM VOLTAN RENDAH) - SURUHANJAYA TENAGA">
                  SIJIL KEKOMPETENAN KATEGORI A4-2/A4-1/A4 (SISTEM VOLTAN RENDAH) - SURUHANJAYA TENAGA</option>
                <option value="SIJIL KEKOMPETENAN KATEGORI AO/A1 (SISTEM VOLTAN RENDAH) - SURUHANJAYA TENAGA">SIJIL
                  KEKOMPETENAN KATEGORI AO/A1 (SISTEM VOLTAN RENDAH) - SURUHANJAYA TENAGA</option>
                <option value="SIJIL KEKOMPETENAN PENDAWAI FASA TIGA - SURUHANJAYA TENAGA">SIJIL KEKOMPETENAN PENDAWAI
                  FASA TIGA - SURUHANJAYA TENAGA</option>
                <option value="SIJIL KEKOMPETENAN PENDAWAI FASA TUNGGAL - SURUHANJAYA TENAGA">SIJIL KEKOMPETENAN
                  PENDAWAI FASA TUNGGAL - SURUHANJAYA TENAGA</option>
                <option value="SIJIL KELAYAKAN INSPEKTOR KESIHATAN">SIJIL KELAYAKAN INSPEKTOR KESIHATAN</option>
                <option value="SIJIL KELAYAKAN JURURAWAT">SIJIL KELAYAKAN JURURAWAT</option>
                <option value="SIJIL KELAYAKAN JURURAWAT PERGIGIAN">SIJIL KELAYAKAN JURURAWAT PERGIGIAN</option>
                <option value="SIJIL KELAYAKAN PERGIGIAN">SIJIL KELAYAKAN PERGIGIAN</option>
                <option value="SIJIL KEMAHIRAN JAHITAN (PERTAK, DUSUN TUA)">SIJIL KEMAHIRAN JAHITAN (PERTAK, DUSUN TUA)
                </option>
                <option value="SIJIL KEMAHIRAN KRAFTANGAN (PERTAK,DUSUN TUA)">SIJIL KEMAHIRAN KRAFTANGAN (PERTAK,DUSUN
                  TUA)</option>
                <option value="SIJIL KEMAHIRAN SENI FOTO (PERTAK,DUSUN TUA)">SIJIL KEMAHIRAN SENI FOTO (PERTAK,DUSUN
                  TUA)</option>
                <option value="SIJIL KEMAHIRAN SENI SOLEK (PERTAK,DUSUN TUA)">SIJIL KEMAHIRAN SENI SOLEK (PERTAK,DUSUN
                  TUA)</option>
                <option value="SIJIL KETUKANGAN">SIJIL KETUKANGAN</option>
                <option value="SIJIL KETUKANGAN AUTOMOTIF PERTENGAHAN MLVK">SIJIL KETUKANGAN AUTOMOTIF PERTENGAHAN MLVK
                </option>
                <option value="SIJIL KETUKANGAN PERHUBUNGAN RAYA">SIJIL KETUKANGAN PERHUBUNGAN RAYA</option>
                <option value="SIJIL KURSUS GERAKAN PENERBANGAN DI ICAO">SIJIL KURSUS GERAKAN PENERBANGAN DI ICAO
                </option>
                <option value="SIJIL KURSUS KADET PENOLONG PENGUASA PENJARA">SIJIL KURSUS KADET PENOLONG PENGUASA
                  PENJARA</option>
                <option value="SIJIL KURSUS PERGURUAN LEPAS DIPLOMA">SIJIL KURSUS PERGURUAN LEPAS DIPLOMA</option>
                <option value="SIJIL LATIHAN KEMAHIRAN JABATAN TENAGA RAKYAT">SIJIL LATIHAN KEMAHIRAN JABATAN TENAGA
                  RAKYAT</option>
                <option value="SIJIL LATIHAN MEMBALAK">SIJIL LATIHAN MEMBALAK</option>
                <option value="SIJIL LATIHAN TEKNISYEN ELEKTRIK SENJATA">SIJIL LATIHAN TEKNISYEN ELEKTRIK SENJATA
                </option>
                <option value="SIJIL LATIHAN TEKNISYEN MARIN KUASAGERAK">SIJIL LATIHAN TEKNISYEN MARIN KUASAGERAK
                </option>
                <option value="SIJIL LCC (INTERMEDIATE BOOK-KEEPING) UK">SIJIL LCC (INTERMEDIATE BOOK-KEEPING) UK
                </option>
                <option value="SIJIL LULUS PEPERIKSAAN PEGAWAI KESELAMATAN DAN KESIHATAN">SIJIL LULUS PEPERIKSAAN
                  PEGAWAI KESELAMATAN DAN KESIHATAN</option>
                <option value="SIJIL MAJLIS VETERINAR MALAYSIA">SIJIL MAJLIS VETERINAR MALAYSIA</option>
                <option value="SIJIL MARINE TECH PROPULSION DPD AUSTRALIA">SIJIL MARINE TECH PROPULSION DPD AUSTRALIA
                </option>
                <option value="SIJIL MATE OF LOCAL TRADESHIP">SIJIL MATE OF LOCAL TRADESHIP</option>
                <option value="SIJIL MENAIP SWASTA">SIJIL MENAIP SWASTA</option>
                <option value="SIJIL MLVK PERINGKAT ASAS (JURUMESIN) CETAK LI">SIJIL MLVK PERINGKAT ASAS (JURUMESIN)
                  CETAK LI</option>
                <option value="SIJIL MLVK TAHAP 3 - JURUELEKTRIK">SIJIL MLVK TAHAP 3 - JURUELEKTRIK</option>
                <option value="SIJIL MLVK TAHAP 3 - JURUTEKNIK PEMESINAN KISAR">SIJIL MLVK TAHAP 3 - JURUTEKNIK
                  PEMESINAN KISAR</option>
                <option value="SIJIL P'HUTANAN DRP INST LATIHAN P'HUTANAN M'SIA">SIJIL P'HUTANAN DRP INST LATIHAN
                  P'HUTANAN M'SIA</option>
                <option value="SIJIL PEMBANTU FARMASI">SIJIL PEMBANTU FARMASI</option>
                <option value="SIJIL PEMBANTU KESIHATAN AWAM">SIJIL PEMBANTU KESIHATAN AWAM</option>
                <option value="SIJIL PEMBANTU PEMBEDAHAN PERGIGIAN">SIJIL PEMBANTU PEMBEDAHAN PERGIGIAN</option>
                <option value="SIJIL PEMBANTU PERUBATAN BERTARAF DIPLOMA">SIJIL PEMBANTU PERUBATAN BERTARAF DIPLOMA
                </option>
                <option value="SIJIL PENGURUSAN HUTAN">SIJIL PENGURUSAN HUTAN</option>
                <option value="SIJIL PENILAIAN HARTA TANAH DARI INSPEN">SIJIL PENILAIAN HARTA TANAH DARI INSPEN</option>
                <option value="SIJIL PENTERJEMAH UNIVERSITI MALAYSIA">SIJIL PENTERJEMAH UNIVERSITI MALAYSIA</option>
                <option value="SIJIL PERBIDANAN BAHAGIAN I">SIJIL PERBIDANAN BAHAGIAN I</option>
                <option value="SIJIL PERBIDANAN BAHAGIAN II">SIJIL PERBIDANAN BAHAGIAN II</option>
                <option value="SIJIL PERDAGANGAN MALAYSIA">SIJIL PERDAGANGAN MALAYSIA</option>
                <option value="SIJIL PERDAGANGAN MALAYSIA PERINGKAT TINGGI (SIMPAN KIRA)">SIJIL PERDAGANGAN MALAYSIA
                  PERINGKAT TINGGI (SIMPAN KIRA)</option>
                <option value="SIJIL PERDAGANGAN MALAYSIA PERTENGAHAN (SIMPAN KIRA)">SIJIL PERDAGANGAN MALAYSIA
                  PERTENGAHAN (SIMPAN KIRA)</option>
                <option value="SIJIL PERDAGANGAN MALAYSIA TINGGI (HIGHER ACCOUNTING)">SIJIL PERDAGANGAN MALAYSIA TINGGI
                  (HIGHER ACCOUNTING)</option>
                <option value="SIJIL PERGN MAKTAB PERGN BAHASA LEMBAH PANTAI KL">SIJIL PERGN MAKTAB PERGN BAHASA LEMBAH
                  PANTAI KL</option>
                <option value="SIJIL PERGN MAKTAB PERGN ILMU KHAS JLN CHERAS KL">SIJIL PERGN MAKTAB PERGN ILMU KHAS JLN
                  CHERAS KL</option>
                <option value="SIJIL PERGN MAKTAB PERGN ISLAM JLN UNIVERSITI PJ">SIJIL PERGN MAKTAB PERGN ISLAM JLN
                  UNIVERSITI PJ</option>
                <option value="SIJIL PERGN MAKTAB PERGN K. BHARU PENGKALAN CHEPA">SIJIL PERGN MAKTAB PERGN K. BHARU
                  PENGKALAN CHEPA</option>
                <option value="SIJIL PERGN MAKTAB PERGN MOHD KHALID JB JOHOR">SIJIL PERGN MAKTAB PERGN MOHD KHALID JB
                  JOHOR</option>
                <option value="SIJIL PERGN MAKTAB PERGN PEREMPUAN MELAYU MELAKA">SIJIL PERGN MAKTAB PERGN PEREMPUAN
                  MELAYU MELAKA</option>
                <option value="SIJIL PERGN MAKTAB PERGN RAJA MELEWAR SEREMBAN NS">SIJIL PERGN MAKTAB PERGN RAJA MELEWAR
                  SEREMBAN NS</option>
                <option value="SIJIL PERGN MAKTAB PERGN RAJANG BINATANG SARAWAK">SIJIL PERGN MAKTAB PERGN RAJANG
                  BINATANG SARAWAK</option>
                <option value="SIJIL PERGN MAKTAB PERGN SRI KOTA JLN KUANTAN KL">SIJIL PERGN MAKTAB PERGN SRI KOTA JLN
                  KUANTAN KL</option>
                <option value="SIJIL PERGN MTB PERGN P'SKTUAN BUKIT COOMBE P.P.">SIJIL PERGN MTB PERGN P'SKTUAN BUKIT
                  COOMBE P.P.</option>
                <option value="SIJIL PERGURUAN">SIJIL PERGURUAN</option>
                <option value="SIJIL PERGURUAN MAKTAB IPOH BARU PERAK">SIJIL PERGURUAN MAKTAB IPOH BARU PERAK</option>
                <option value="SIJIL PERGURUAN MAKTAB PERGN GAYA K.KINABALU SABAH">SIJIL PERGURUAN MAKTAB PERGN GAYA
                  K.KINABALU SABAH</option>
                <option value="SIJIL PERGURUAN MAKTAB PERGN TEKNIK JLN CHERAS KL">SIJIL PERGURUAN MAKTAB PERGN TEKNIK
                  JLN CHERAS KL</option>
                <option value="SIJIL PERGURUAN MAKTAB PERGURUAN KENT TUARAN SABAH">SIJIL PERGURUAN MAKTAB PERGURUAN KENT
                  TUARAN SABAH</option>
                <option value="SIJIL PERGURUAN MAKTAB PERGURUAN KINTA PERAK">SIJIL PERGURUAN MAKTAB PERGURUAN KINTA
                  PERAK</option>
                <option value="SIJIL PERGURUAN MAKTAB PERGURUAN KUANTAN PAHANG">SIJIL PERGURUAN MAKTAB PERGURUAN KUANTAN
                  PAHANG</option>
                <option value="SIJIL PERGURUAN MAKTAB PERGURUAN LEMBAH PANTAI KL">SIJIL PERGURUAN MAKTAB PERGURUAN
                  LEMBAH PANTAI KL</option>
                <option value="SIJIL PERGURUAN MAKTAB PERGURUAN PKPP K.TERENGGANU">SIJIL PERGURUAN MAKTAB PERGURUAN PKPP
                  K.TERENGGANU</option>
                <option value="SIJIL PERGURUAN MAKTAB PERGURUAN SANDAKAN SABAH">SIJIL PERGURUAN MAKTAB PERGURUAN
                  SANDAKAN SABAH</option>
                <option value="SIJIL PERGURUAN MAKTAB PERGURUAN SG PETANI KEDAH">SIJIL PERGURUAN MAKTAB PERGURUAN SG
                  PETANI KEDAH</option>
                <option value="SIJIL PERGURUAN MAKTAB PERGURUAN SIBU SARAWAK">SIJIL PERGURUAN MAKTAB PERGURUAN SIBU
                  SARAWAK</option>
                <option value="SIJIL PERGURUAN MAKTAB PERGURUAN SRI PINANG PP">SIJIL PERGURUAN MAKTAB PERGURUAN SRI
                  PINANG PP</option>
                <option value="SIJIL PERGURUAN MAKTAB SULTAN IDRIS TG MALIM PERAK">SIJIL PERGURUAN MAKTAB SULTAN IDRIS
                  TG MALIM PERAK</option>
                <option value="SIJIL PERGURUAN MAKTAB TEMENGGONG IBRAHIM JOHOR">SIJIL PERGURUAN MAKTAB TEMENGGONG
                  IBRAHIM JOHOR</option>
                <option value="SIJIL PERGURUAN MTB PERGN BT LINTANG KUCHING SRK">SIJIL PERGURUAN MTB PERGN BT LINTANG
                  KUCHING SRK</option>
                <option value="SIJIL PERHUTANAN PENGAWAS HUTAN">SIJIL PERHUTANAN PENGAWAS HUTAN</option>
                <option value="SIJIL PERHUTANAN RENJER HUTAN">SIJIL PERHUTANAN RENJER HUTAN</option>
                <option value="SIJIL PERINGKAT ASAS LLPPKK/MLVK">SIJIL PERINGKAT ASAS LLPPKK/MLVK</option>
                <option value="SIJIL PERINGKAT I SEKOLAH PERHUTANAN MALAYSIA">SIJIL PERINGKAT I SEKOLAH PERHUTANAN
                  MALAYSIA</option>
                <option value="SIJIL PERINGKAT II SEKOLAH PERHUTANAN MALAYSIA">SIJIL PERINGKAT II SEKOLAH PERHUTANAN
                  MALAYSIA</option>
                <option value="SIJIL PERINGKAT III SEKOLAH PERHUTANAN MALAYSIA">SIJIL PERINGKAT III SEKOLAH PERHUTANAN
                  MALAYSIA</option>
                <option value="SIJIL PERINGKAT PERTENGAHAN MLVK - TAHAP 2">SIJIL PERINGKAT PERTENGAHAN MLVK - TAHAP 2
                </option>
                <option value="SIJIL PERINGKAT TINGGI MLVK (KEJ MEK) - MEKANIK AM">SIJIL PERINGKAT TINGGI MLVK (KEJ MEK)
                  - MEKANIK AM</option>
                <option value="SIJIL PERINGKAT TINGGI MLVK MEKANIK AM - JURUGEGAS">SIJIL PERINGKAT TINGGI MLVK MEKANIK
                  AM - JURUGEGAS</option>
                <option value="SIJIL PERINGKAT TINGGI MLVK(KIMPALAN ARKA)">SIJIL PERINGKAT TINGGI MLVK(KIMPALAN ARKA)
                </option>
                <option value="SIJIL PERTENGAHAN & SIJIL MENGAJAR">SIJIL PERTENGAHAN & SIJIL MENGAJAR</option>
                <option value="SIJIL PKT TINGGI MLVK (KEJ AWAM)-PEMBUAT PERABOT">SIJIL PKT TINGGI MLVK (KEJ
                  AWAM)-PEMBUAT PERABOT</option>
                <option value="SIJIL PKT TINGGI MLVK (KEJ AWAM)-PEMESIN KAYU">SIJIL PKT TINGGI MLVK (KEJ AWAM)-PEMESIN
                  KAYU</option>
                <option value="SIJIL PKT TINGGI MLVK (KEJ AWAM)-PENERAP BATA">SIJIL PKT TINGGI MLVK (KEJ AWAM)-PENERAP
                  BATA</option>
                <option value="SIJIL PKT TINGGI MLVK (KEJ AWAM)-TUKANG KAYU DA">SIJIL PKT TINGGI MLVK (KEJ AWAM)-TUKANG
                  KAYU DA</option>
                <option value="SIJIL PKT TINGGI MLVK (KEJ AWAM)-TUKANG PAIP">SIJIL PKT TINGGI MLVK (KEJ AWAM)-TUKANG
                  PAIP</option>
                <option value="SIJIL PKT TINGGI MLVK (KEJ ELEK-KUASA)-MEK PE">SIJIL PKT TINGGI MLVK (KEJ ELEK-KUASA)-MEK
                  PE</option>
                <option value="SIJIL PKT TINGGI MLVK (KEJ ELEK-KUASA)-MEK PY">SIJIL PKT TINGGI MLVK (KEJ ELEK-KUASA)-MEK
                  PY</option>
                <option value="SIJIL PKT TINGGI MLVK (KEJ ELEK-KUASA)MEK PY">SIJIL PKT TINGGI MLVK (KEJ ELEK-KUASA)MEK
                  PY</option>
                <option value="SIJIL PKT TINGGI MLVK (KEJ ELEK-KUASA/ELEK)">SIJIL PKT TINGGI MLVK (KEJ ELEK-KUASA/ELEK)
                </option>
                <option value="SIJIL PKT TINGGI MLVK (KEJ MEK) - PEMBUAT ACUAN">SIJIL PKT TINGGI MLVK (KEJ MEK) -
                  PEMBUAT ACUAN</option>
                <option value="SIJIL PKT TINGGI MLVK (KEJ MEK) - TUKANG ACU LOGAM">SIJIL PKT TINGGI MLVK (KEJ MEK) -
                  TUKANG ACU LOGAM</option>
                <option value="SIJIL PKT TINGGI MLVK (KEJ MEK) - TUKANG KIMPAL">SIJIL PKT TINGGI MLVK (KEJ MEK) - TUKANG
                  KIMPAL</option>
                <option value="SIJIL PKT TINGGI MLVK (KEJ MEK) -FABRIKATOR & PE">SIJIL PKT TINGGI MLVK (KEJ MEK)
                  -FABRIKATOR & PE</option>
                <option value="SIJIL PKT TINGGI MLVK (KEJ MEK) -PENGUJI PENEMBUK">SIJIL PKT TINGGI MLVK (KEJ MEK)
                  -PENGUJI PENEMBUK</option>
                <option value="SIJIL PKT TINGGI MLVK (KEJ MEK)-JURURADIOGRAF I">SIJIL PKT TINGGI MLVK (KEJ
                  MEK)-JURURADIOGRAF I</option>
                <option value="SIJIL PKT TINGGI MLVK (KEJ MEK)-PEMESIN AM (CANAI)">SIJIL PKT TINGGI MLVK (KEJ
                  MEK)-PEMESIN AM (CANAI)</option>
                <option value="SIJIL PKT TINGGI MLVK (KEJ MEK)-PENGUJI ULTRASOUND">SIJIL PKT TINGGI MLVK (KEJ
                  MEK)-PENGUJI ULTRASOUND</option>
                <option value="SIJIL PKT TINGGI MLVK (KEJ MEK)-PENYELENGGARA K">SIJIL PKT TINGGI MLVK (KEJ
                  MEK)-PENYELENGGARA K</option>
                <option value="SIJIL PKT TINGGI MLVK MEKANIK RADIO & TELEVISYEN">SIJIL PKT TINGGI MLVK MEKANIK RADIO &
                  TELEVISYEN</option>
                <option value="SIJIL RADIOGRAFI KEMENTERIAN KESIHATAN">SIJIL RADIOGRAFI KEMENTERIAN KESIHATAN</option>
                <option value="SIJIL ROYAL SOCIETY OF HEALTH MALAYSIA">SIJIL ROYAL SOCIETY OF HEALTH MALAYSIA</option>
                <option value="SIJIL SARJANA KENDERAAN BERJENTERA">SIJIL SARJANA KENDERAAN BERJENTERA</option>
                <option value="SIJIL SKIM THP 1 - BUILDING DECORATIVE PAINTER">SIJIL SKIM THP 1 - BUILDING DECORATIVE
                  PAINTER</option>
                <option value="SIJIL SKM TAHAP 1 - PENYELIA LADANG RUMINAN">SIJIL SKM TAHAP 1 - PENYELIA LADANG RUMINAN
                </option>
                <option value="SIJIL SKM TAHAP 2 - MEKANIK KENDERAAN PERDAGANGAN">SIJIL SKM TAHAP 2 - MEKANIK KENDERAAN
                  PERDAGANGAN</option>
                <option value="SIJIL SKM TAHAP 2 - PEMBANTU LADANG RUMINAN">SIJIL SKM TAHAP 2 - PEMBANTU LADANG RUMINAN
                </option>
                <option value="SIJIL SKM TAHAP 3 - JURUTEKNIK KENDERAAN PERDAGANGAN">SIJIL SKM TAHAP 3 - JURUTEKNIK
                  KENDERAAN PERDAGANGAN</option>
                <option value="SIJIL SKM TAHAP 3 - PENYELIA LADANG RUMINAN">SIJIL SKM TAHAP 3 - PENYELIA LADANG RUMINAN
                </option>
                <option value="SIJIL SKM THP 2 - PEMASANGAN DAN PENYELENGGARAAN SISTEM PEMANTAUAN MARITIM">SIJIL SKM THP
                  2 - PEMASANGAN DAN PENYELENGGARAAN SISTEM PEMANTAUAN MARITIM</option>
                <option value="SIJIL SKM THP 3 - PENYELIAAN PEMASANGAN DAN PENYELENGGARAAN SISTEM PEMANTAUAN MARITIM">
                  SIJIL SKM THP 3 - PENYELIAAN PEMASANGAN DAN PENYELENGGARAAN SISTEM PEMANTAUAN MARITIM</option>
                <option value="SIJIL SKM, KOLEJ PERTANIAN MALAYSIA - BIDANG RUMINAN">SIJIL SKM, KOLEJ PERTANIAN MALAYSIA
                  - BIDANG RUMINAN</option>
                <option value="SIJIL TEKNOLOGI ELEKTRIK (PENDAWAIAN ELEKTRIK SATU FASA-PW2)">SIJIL TEKNOLOGI ELEKTRIK
                  (PENDAWAIAN ELEKTRIK SATU FASA-PW2)</option>
                <option value="SIJIL TINGGI MLVK & SIJIL MENGAJAR">SIJIL TINGGI MLVK & SIJIL MENGAJAR</option>
                <option value="SIJIL TRENGKAS MALAYSIA PERINGKAT MENENGAH">SIJIL TRENGKAS MALAYSIA PERINGKAT MENENGAH
                </option>
                <option value="SIJIL TRENGKAS MALAYSIA PERINGKAT TINGGI">SIJIL TRENGKAS MALAYSIA PERINGKAT TINGGI
                </option>
                <option value="SIJIL UJIAN MENAIP PRKT TENGAH SIJIL PRDGN M'SIA">SIJIL UJIAN MENAIP PRKT TENGAH SIJIL
                  PRDGN M'SIA</option>
                <option value="SIJIL UJIAN MENAIP PRKT TINGGI SIJIL PRDGN M'SIA">SIJIL UJIAN MENAIP PRKT TINGGI SIJIL
                  PRDGN M'SIA</option>
                <option value="SIJIL VETERINAR DARIPADA INSTITUT VETERINAR KLUANG, JABATAN PERKHIDMATAN VETERINAR">SIJIL
                  VETERINAR DARIPADA INSTITUT VETERINAR KLUANG, JABATAN PERKHIDMATAN VETERINAR</option>
                <option value="SIJIL WIREMAN">SIJIL WIREMAN</option>
                <option value="SIJIL/PENGALAMAN MENGENDALIKAN LATIHAN KAWAD">SIJIL/PENGALAMAN MENGENDALIKAN LATIHAN
                  KAWAD</option>
                <option value="SKM THP 1 - MEKANIK KENDERAAN PERDAGANGAN">SKM THP 1 - MEKANIK KENDERAAN PERDAGANGAN
                </option>
                <option value="SMA STRF,4 T'WI LBA,K/L UT,K/L UB,1 K LAIN">SMA STRF,4 T'WI LBA,K/L UT,K/L UB,1 K LAIN
                </option>
                <option value="SOCIETY OF ACTUARIES USA">SOCIETY OF ACTUARIES USA</option>
                <option value="SOLICITORS REGULATION AUTHORITY (SOLICITOR OF THE SENIOR COURTS OF ENGLAND AND WALES)">
                  SOLICITORS REGULATION AUTHORITY (SOLICITOR OF THE SENIOR COURTS OF ENGLAND AND WALES)</option>
                <option value="STA STRF 4 T'WI LUL B. ARAB KEP P.A.I SPM">STA STRF 4 T'WI LUL B. ARAB KEP P.A.I SPM
                </option>
                <option value="SYAH. TAHFIZ AL-QURAN MAHAD TAHFIZ JPM">SYAH. TAHFIZ AL-QURAN MAHAD TAHFIZ JPM</option>
                <option value="TEACHER'S DIPLOMA OF COLLEGE OF RADIOGRAPHERS UK">TEACHER'S DIPLOMA OF COLLEGE OF
                  RADIOGRAPHERS UK</option>
                <option value="TEACHING DIP OF CHARTERED COLLEGE OF PHYSIOTHERAPY">TEACHING DIP OF CHARTERED COLLEGE OF
                  PHYSIOTHERAPY</option>
                <option value="TEACHING DIPLOMA OF OCCUPATIONAL THERAPY">TEACHING DIPLOMA OF OCCUPATIONAL THERAPY
                </option>
                <option value="TEKNOLOGI KEJURUTERAAN MARIN - IKM">TEKNOLOGI KEJURUTERAAN MARIN - IKM</option>
                <option value="TELEPHONE OPERATORS/RECEPTIONIST COURSE MALAYSIA">TELEPHONE OPERATORS/RECEPTIONIST COURSE
                  MALAYSIA</option>
                <option value="THE LAW SOCIETY SOLICITOR OF THE SUPREME COURT OF JUDICATURE ENGLAND">THE LAW SOCIETY
                  SOLICITOR OF THE SUPREME COURT OF JUDICATURE ENGLAND</option>
                <option value="VELLORE CHRISTIAN MEDICAL COLLEGE SOUTH INDIA">VELLORE CHRISTIAN MEDICAL COLLEGE SOUTH
                  INDIA</option>
              </select>
              <br />
              Tarikh Sijil Dikeluarkan:
              <input type="date" id="tarikh_sijil" class="form-control" />
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
                        <th>Nama Institusi</th>
                        <th>No Ahli</th>
                        <th>Kemahiran</th>
                        <th>Tarikh Sijil</th>
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

                  $("#nama_institusi").val($(cols[1]).text());
                  $("#no_sijil").val($(cols[2]).text());
                  $("#kemahiran").val($(cols[3]).text());
                  $("#tarikh_sijil").val($(cols[4]).text());

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
                    "<td>" + $("#nama_institusi").val() + "</td>" +
                    "<td>" + $("#no_sijil").val() + "</td>" +
                    "<td>" + $("#kemahiran").val() + "</td>" +
                    "<td>" + $("#tarikh_sijil").val() + "</td>" +
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
                  $("#nama_institusi").val("");
                  $("#no_sijil").val("");
                  $("#kemahiran").val("");
                  $("#tarikh_sijil").val("");
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