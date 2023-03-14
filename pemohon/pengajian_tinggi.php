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
            <a class="nav-link" href="pmr.php">PMR/SRP/PT3</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="spm.php">SPM</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="stpm.php">STPM</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="pengajian_tinggi.php">Pengajian Tinggi</a>
          </li>
        </ul>
        <div class="text-center">
          <br />
          <h2 style="color:FFFFFF"><b>PENGAJIAN TINGGI</b></h2>
        </div>


        <form class="col-sm-12 shadow-lg p-3  mb-12 bg-white rounded" enctype="multipart/form-data"
          action="maklumat_peribadi.php" method="POST">


          <div class="row">
            <div class="col-md-6">
              Nama IPTA / IPTS:
              <select name="nama_ipta_ipts" id="nama_ipt" class="form-control">
                <option value="" disabled selected>--Sila Pilih--</option>
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
              </select> <br />
              Peringkat:
              <select name="  peringkat_ipta_ipts" id="peringkat_ipt" class="form-control">
                <option value="" disabled selected>--Sila Pilih--</option>
                <option value="DIPLOMA (TIADA CGPA)">DIPLOMA (TIADA CGPA)</option>
                <option value="DIPLOMA DENGAN CGPA 2.00 - 2.24">DIPLOMA DENGAN CGPA 2.00 - 2.24</option>
                <option value="DIPLOMA DENGAN CGPA 2.25 - 2.49">DIPLOMA DENGAN CGPA 2.25 - 2.49</option>
                <option value="DIPLOMA DENGAN CGPA 2.50 - 2.74">DIPLOMA DENGAN CGPA 2.50 - 2.74</option>
                <option value="DIPLOMA DENGAN CGPA 2.75 - 2.99">DIPLOMA DENGAN CGPA 2.75 - 2.99</option>
                <option value="DIPLOMA DENGAN CGPA 3.00 - 3.24">DIPLOMA DENGAN CGPA 3.00 - 3.24</option>
                <option value="DIPLOMA DENGAN CGPA 3.25 - 3.49">DIPLOMA DENGAN CGPA 3.25 - 3.49</option>
                <option value="DIPLOMA DENGAN CGPA 3.50 - 3.74">DIPLOMA DENGAN CGPA 3.50 - 3.74</option>
                <option value="DIPLOMA DENGAN CGPA 3.75 - 4.00">DIPLOMA DENGAN CGPA 3.75 - 4.00</option>
                <option value="DIPLOMA EKSEKUTIF DENGAN CGPA">DIPLOMA EKSEKUTIF DENGAN CGPA</option>
                <option value="DIPLOMA EKSEKUTIF TANPA CGPA">DIPLOMA EKSEKUTIF TANPA CGPA</option>
                <option value="DIPLOMA KEMAHIRAN MALAYSIA (DKM)">DIPLOMA KEMAHIRAN MALAYSIA (DKM)</option>
                <option value="DIPLOMA LANJUTAN">DIPLOMA LANJUTAN</option>
                <option value="DIPLOMA LANJUTAN KEMAHIRAN MALAYSIA (DLKM)">DIPLOMA LANJUTAN KEMAHIRAN MALAYSIA (DLKM)
                </option>
                <option value="DIPLOMA LEPASAN IJAZAH">DIPLOMA LEPASAN IJAZAH</option>
                <option value="DIPLOMA VOKASIONAL MALAYSIA">DIPLOMA VOKASIONAL MALAYSIA</option>
                <option value="DOKTORET/DOKTOR FALSAFAH">DOKTORET/DOKTOR FALSAFAH</option>
                <option value="HIGHER NATIONAL DIPLOMA (HND)">HIGHER NATIONAL DIPLOMA (HND)</option>
                <option value="IJAZAH SARJANA (MASTERS)">IJAZAH SARJANA (MASTERS)</option>
                <option value="SARJANA MUDA (AM)">SARJANA MUDA (AM)</option>
                <option value="SARJANA MUDA DLM BDG PROFESSIONAL">SARJANA MUDA DLM BDG PROFESSIONAL</option>
                <option value="SARJANA MUDA KEP. DGN. CGPA 2.00 - 2.24">SARJANA MUDA KEP. DGN. CGPA 2.00 - 2.24</option>
                <option value="SARJANA MUDA KEP. DGN. CGPA 2.25 - 2.49">SARJANA MUDA KEP. DGN. CGPA 2.25 - 2.49</option>
                <option value="SARJANA MUDA KEP. DGN. CGPA 2.50 - 2.74">SARJANA MUDA KEP. DGN. CGPA 2.50 - 2.74</option>
                <option value="SARJANA MUDA KEP. DGN. CGPA 2.75 - 2.99">SARJANA MUDA KEP. DGN. CGPA 2.75 - 2.99</option>
                <option value="SARJANA MUDA KEP. DGN. CGPA 3.00 - 3.24">SARJANA MUDA KEP. DGN. CGPA 3.00 - 3.24</option>
                <option value="SARJANA MUDA KEP. DGN. CGPA 3.25 - 3.49">SARJANA MUDA KEP. DGN. CGPA 3.25 - 3.49</option>
                <option value="SARJANA MUDA KEP. DGN. CGPA 3.50 - 3.74">SARJANA MUDA KEP. DGN. CGPA 3.50 - 3.74</option>
                <option value="SARJANA MUDA KEP. DGN. CGPA 3.75 - 4.00">SARJANA MUDA KEP. DGN. CGPA 3.75 - 4.00</option>
                <option value="SARJANA MUDA KEP. KELAS 2 (RENDAH/BAWAH)">SARJANA MUDA KEP. KELAS 2 (RENDAH/BAWAH)
                </option>
                <option value="SARJANA MUDA KEP. KELAS 2 (TINGGI/ATAS)">SARJANA MUDA KEP. KELAS 2 (TINGGI/ATAS)</option>
                <option value="SARJANA MUDA KEPUJIAN KELAS 1">DIPLOMA SARJANA MUDA KEPUJIAN KELAS 1</option>
                <option value="SARJANA MUDA KEPUJIAN KELAS 2">SARJANA MUDA KEPUJIAN KELAS 2</option>
                <option value="SARJANA MUDA KEPUJIAN KELAS 3">SARJANA MUDA KEPUJIAN KELAS 3</option>
                <option value="SIJIL DARI INSTITUSI AWAM">SIJIL DARI INSTITUSI AWAM</option>
                <option value="SIJIL DARI INSTITUSI SWASTA YANG DIIKTIRAF OLEH KERAJAAN">SIJIL DARI INSTITUSI SWASTA
                  YANG DIIKTIRAF OLEH KERAJAAN</option>
                <option value="SIJIL DENGAN CGPA">SIJIL DENGAN CGPA</option>
                <option value="SIJIL LANJUTAN DENGAN CGPA">SIJIL LANJUTAN DENGAN CGPA</option>
                <option value="SIJIL LANJUTAN TANPA CGPA">SIJIL LANJUTAN TANPA CGPA</option>
                <option value="SIJIL TANPA CGPA">SIJIL TANPA CGPA</option>
              </select>
              <br>
              Bidang /Kursus:
              <select name="bidang_kursus_ipta_ipts" id="bidang_ipt" class="form-control">
                <option value="">--Silih Pilih--</option>
                <option value="ACCOUNT & FINANCIAL MANAGEMENT & ECONOMICS">ACCOUNT & FINANCIAL MANAGEMENT & ECONOMICS
                </option>
                <option value="ACCOUNTING AND BUSINESS">ACCOUNTING AND BUSINESS</option>
                <option value="ACCOUNTING AND MANAGEMENT CONTROL">ACCOUNTING AND MANAGEMENT CONTROL</option>
                <option value="ACTUARIAL MATHEMATICS AND STATISTICS">ACTUARIAL MATHEMATICS AND STATISTICS</option>
                <option value="ADVERTISING">ADVERTISING</option>
                <option value="AEROSPACE ENGINEERING">AEROSPACE ENGINEERING</option>
                <option value="AGRO BUSINESS/ PERNIAGAAN TANI">AGRO BUSINESS/ PERNIAGAAN TANI</option>
                <option value="AGROBIOLOGI DAN SUMBER BIOLOGI">AGROBIOLOGI DAN SUMBER BIOLOGI</option>
                <option value="AGROINDUSTRI TERNAKAN POLTRI">AGROINDUSTRI TERNAKAN POLTRI</option>
                <option value="AGROTEKNOLOGI">AGROTEKNOLOGI</option>
                <option value="DAGROTEKNOLOGI (AKUAKULTUR)">DAGROTEKNOLOGI (AKUAKULTUR)</option>
                <option value="AGROTEKNOLOGI (TEKNOLOGI LEPAS TUAI)">AGROTEKNOLOGI (TEKNOLOGI LEPAS TUAI)</option>
                <option value="AIRCRAFT ENGINEERING TECHNOLOGY IN MECHANICAL">AIRCRAFT ENGINEERING TECHNOLOGY IN
                  MECHANICAL</option>
                <option value="AKUAKULTUR">AKUAKULTUR</option>
                <option value="AL-DAKWAH WAL QIADAH">AKUAKULTURAL-DAKWAH WAL QIADAH</option>
                <option value="AL-QURAN DAN AL-SUNNAH DENGAN KOMUNIKASI">AL-QURAN DAN AL-SUNNAH DENGAN KOMUNIKASI
                </option>
                <option value="AL-SYARIAH">AL-SYARIAH</option>
                <option value="ALAM SEKITAR INDUSTRI">ALAM SEKITAR INDUSTRI</option>
                <option value="AMALAN KEHAKIMAN DAN GUAMAN SYARIE">AMALAN KEHAKIMAN DAN GUAMAN SYARIE</option>
                <option value="ANALISA EKONOMI DAN KEWANGAN">ANALISA EKONOMI DAN KEWANGAN</option>
                <option value="ANALISA SISTEM">ANALISA SISTEM</option>
                <option value="ANALISIS DAN PENYELIDIKAN SOSIAL">ANALISIS DAN PENYELIDIKAN SOSIAL</option>
                <option value="ANALISIS EKONOMI DAN DASAR AWAM">ANALISIS EKONOMI DAN DASAR AWAM</option>
                <option value="ANALISIS PELABURAN">ANALISIS PELABURAN</option>
                <option value="ANATOMY (SAINS MENGENAI ANGGOTA/TUBUH)">ANATOMY (SAINS MENGENAI ANGGOTA/TUBUH)</option>
                <option value="ANTHROPOLOGI">ANTHROPOLOGI</option>
                <option value="ANTHROPOLOGI & SOSIOLOGI">ANTHROPOLOGI & SOSIOLOGI</option>
                <option value="APLIKASI MULTIMEDIA">APLIKASI MULTIMEDIA</option>
                <option value="APPLIED STATISTICS AND COMPUTING">APPLIED STATISTICS AND COMPUTING</option>
                <option value="AQIDAH DAN DAKWAH">AQIDAH DAN DAKWAH</option>
                <option value="AQIDAH DAN FALSAFAH">AQIDAH DAN FALSAFAH</option>
                <option value="ARCHITECTURAL COMPUTER AIDED DESIGN">ARCHITECTURAL COMPUTER AIDED DESIGN</option>
                <option value="ASIA TENGGARA DAN SEJARAH">ASIA TENGGARA DAN SEJARAH</option>
                <option value="ASIAN STUDIES">ASIAN STUDIES</option>
                <option value="ASSISTED REPRODUCTION TECHNOLOGY">ASSISTED REPRODUCTION TECHNOLOGY</option>
                <option value="ASTROFIZIK / ASTROPHYSICS">ASTROFIZIK / ASTROPHYSICS</option>
                <option value="ASTRONOMI">ASTRONOMI</option>
                <option value="AUDIOLOGI">AUDIOLOGI</option>
                <option value="AUTOMATION SYSTEM">AUTOMATION SYSTEM</option>
                <option value="AUTOMOTIF">AUTOMOTIF</option>
                <option value="AUTOMOTIVE PART MANAGEMENT">AUTOMOTIVE PART MANAGEMENT</option>
                <option value="AVIATION MAINTENANCE TECHNOLOGY">AVIATION MAINTENANCE TECHNOLOGY</option>
                <option value="BAHASA ARAB">BAHASA ARAB</option>
                <option value="BAHASA ARAB (TERJEMAHAN)">BAHASA ARAB (TERJEMAHAN)</option>
                <option value="BAHASA ARAB DAN KOMUNIKASI">BAHASA ARAB DAN KOMUNIKASI</option>
                <option value="BAHASA ARAB DAN PERADABAN">BAHASA ARAB DAN PERADABAN</option>
                <option value="BAHASA ARAB DENGAN PENDIDIKAN">BAHASA ARAB DENGAN PENDIDIKAN</option>
                <option value="BAHASA ARAB SEBAGAI BAHASA KEDUA">BAHASA ARAB SEBAGAI BAHASA KEDUA</option>
                <option value="BAHASA ASING">BAHASA ASING</option>
                <option value="BAHASA CINA">BAHASA CINA</option>
                <option value="BAHASA CINA DAN EKONOMI">BAHASA CINA DAN EKONOMI</option>
                <option value="BAHASA CINA DENGAN PENDIDIKAN">BAHASA CINA DENGAN PENDIDIKAN</option>
                <option value="BAHASA DAN KESUSASTERAAN">BAHASA DAN KESUSASTERAAN</option>
                <option value="BAHASA DAN KESUSASTERAAN ARAB">BAHASA DAN KESUSASTERAAN ARAB</option>
                <option value="BAHASA DAN LINGUISTIK">BAHASA DAN LINGUISTIK</option>
                <option value="BAHASA DAN LINGUISTIK (BAHASA ARAB)">BAHASA DAN LINGUISTIK (BAHASA ARAB)</option>
                <option value="BAHASA DAN LINGUISTIK (BAHASA ITALI)">BAHASA DAN LINGUISTIK (BAHASA ITALI)</option>
                <option value="BAHASA DAN LINGUISTIK (BAHASA TAMIL)">BAHASA DAN LINGUISTIK (BAHASA TAMIL)</option>
                <option value="BAHASA DAN LINGUISTIK MELAYU">BAHASA DAN LINGUISTIK MELAYU</option>
                <option value="BAHASA DAN SASTERA INDONESIA">BAHASA DAN SASTERA INDONESIA</option>
                <option value="BAHASA IBAN">BAHASA IBAN</option>
                <option value="BAHASA INGGERIS">BAHASA INGGERIS</option>
                <option value="BAHASA INGGERIS DAN KESUSASTERAAN">BAHASA INGGERIS DAN KESUSASTERAAN</option>
                <option value="BAHASA INGGERIS DAN MATEMATIK">BAHASA INGGERIS DAN MATEMATIK</option>
                <option value="BAHASA INGGERIS UNTUK KOMUNIKASI PROFESIONAL">BAHASA INGGERIS UNTUK KOMUNIKASI
                  PROFESIONAL</option>
                <option value="BAHASA INGGGERIS KOMUNIKASI">BAHASA INGGGERIS KOMUNIKASI</option>
                <option value="BAHASA JEPUN">BAHASA JEPUN</option>
                <option value="BAHASA JEPUN SEBAGAI BAHASA KEDUA">BAHASA JEPUN SEBAGAI BAHASA KEDUA</option>
                <option value="BAHASA JERMAN">BAHASA JERMAN</option>
                <option value="BAHASA MALAYSIA DAN MATEMATIK">BAHASA MALAYSIA DAN MATEMATIK</option>
                <option value="BAHASA MALAYSIA/BAHASA MELAYU">BAHASA MALAYSIA/BAHASA MELAYU</option>
                <option value="BAHASA MELAYU">BAHASA MELAYU</option>
                <option value="BAHASA MELAYU DAN KEWARTAWANAN">BAHASA MELAYU DAN KEWARTAWANAN</option>
                <option value="BAHASA MELAYU DAN SAINS PEMBANGUNAN MANUSIA">BAHASA MELAYU DAN SAINS PEMBANGUNAN MANUSIA
                </option>
                <option value="BAHASA MELAYU DAN TEKNOLOGI MAKLUMAT">BAHASA MELAYU DAN TEKNOLOGI MAKLUMAT</option>
                <option value="BAHASA PERANCIS">BAHASA PERANCIS</option>
                <option value="BAHASA SEPANYOL">BAHASA SEPANYOL</option>
                <option value="BAHASA TAMIL">BAHASA TAMIL</option>
                <option value="BAKERI">BAKERI</option>
                <option value="BAKERI DAN KONFEKSIONARI">BAKERI DAN KONFEKSIONARI</option>
                <option value="BANGUNAN">BANGUNAN</option>
                <option value="BEAUTICIAN AND HEALTH">BEAUTICIAN AND HEALTH</option>
                <option value="BELIA DALAM KERJA PEMBANGUNAN">BELIA DALAM KERJA PEMBANGUNAN</option>
                <option value="BIMBINGAN">BIMBINGAN</option>
                <option value="BIMBINGAN DAN KAUNSELING">BIMBINGAN DAN KAUNSELING</option>
                <option value="BIOCHEMISTRY & MOLECULAR BIOLOGY">BIOCHEMISTRY & MOLECULAR BIOLOGY</option>
                <option value="BIOCHEMISTRY AND BIOTECHNOLOGY">BIOCHEMISTRY AND BIOTECHNOLOGY</option>
                <option value="BIOINFORMATIK">BIOINFORMATIK</option>
                <option value="BIOKIMIA (BIOCHEMISTRY)">BIOKIMIA (BIOCHEMISTRY)</option>
                <option value="BIOKIMIA DAN BIOLOGI">BIOKIMIA DAN BIOLOGI</option>
                <option value="BIOKIMIA DAN MIKROBIOLOGI">BIOKIMIA DAN MIKROBIOLOGI</option>
                <option value="BIOKIMIA KLINIK">BIOKIMIA KLINIK</option>
                <option value="BIOKIMIA PERUBATAN">BIOKIMIA PERUBATAN</option>
                <option value="BIOKIMIA TUMBUHAN">BIOKIMIA TUMBUHAN</option>
                <option value="BIOLOGI">BIOLOGI</option>
                <option value="BIOLOGI - MIKROBIOLOGI">BIOLOGI - MIKROBIOLOGI</option>
                <option value="BIOLOGI AKUATIK">BIOLOGI AKUATIK</option>
                <option value="BIOLOGI DAN MATEMATIK">BIOLOGI DAN MATEMATIK</option>
                <option value="BIOLOGI DAN MOLEKUL">BIOLOGI DAN MOLEKUL</option>
                <option value="BIOLOGI DENGAN PENDIDIKAN">BIOLOGI DENGAN PENDIDIKAN</option>
                <option value="BIOLOGI GUNAAN">BIOLOGI GUNAAN</option>
                <option value="BIOLOGI GUNAAN (ENTOMOLOGI GUNAAN)">BIOLOGI GUNAAN (ENTOMOLOGI GUNAAN)</option>
                <option value="BIOLOGI INDUSTRI">ABIOLOGI INDUSTRI</option>
                <option value="BIOLOGI MOLEKUL ( BIOKIMIA)">BIOLOGI MOLEKUL ( BIOKIMIA)</option>
                <option value="BIOLOGI MOLEKUL (BIOTEKNOLOGI TUMBUHAN)">BIOLOGI MOLEKUL (BIOTEKNOLOGI TUMBUHAN)</option>
                <option value="BIOLOGI MOLEKUL (MIKROBIOLOGI)">BIOLOGI MOLEKUL (MIKROBIOLOGI)</option>
                <option value="BIOLOGI MOLEKUL (ZOOLOGI)">BIOLOGI MOLEKUL (ZOOLOGI)</option>
                <option value="BIOLOGI MOLEKUL(BIOTEKNOLOGI DGN P'URUS)">BIOLOGI MOLEKUL(BIOTEKNOLOGI DGN P'URUS)
                </option>
                <option value="BIOLOGI MOLEKUL(GENETIK)">BIOLOGI MOLEKUL(GENETIK)</option>
                <option value="BIOLOGI MOLIKUL DAN BIOTEKNOLOGI">BIOLOGI MOLIKUL DAN BIOTEKNOLOGI</option>
                <option value="BIOLOGI PEMULIHARAAN">BIOLOGI PEMULIHARAAN</option>
                <option value="BIOLOGI PEMULIHARAAN & EKOLOGI (ZOOLOGI)">BIOLOGI PEMULIHARAAN & EKOLOGI (ZOOLOGI)
                </option>
                <option value="BIOLOGI PEMULIHARAAN (BOTANI)">BIOLOGI PEMULIHARAAN (BOTANI)</option>
                <option value="BIOLOGI PEMULIHARAAN (GENETIK)">BIOLOGI PEMULIHARAAN (GENETIK)</option>
                <option value="BIOLOGI PEMULIHARAAN DAN EKOLOGI">BIOLOGI PEMULIHARAAN DAN EKOLOGI</option>
                <option value="BIOLOGI PEMULIHARAAN DAN EKOLOGI(GENETIK">BIOLOGI PEMULIHARAAN DAN EKOLOGI(GENETIK
                </option>
                <option value="BIOLOGI PERSEKITARAN">BIOLOGI PERSEKITARAN</option>
                <option value="BIOLOGI SEL DAN MOLEKUL (BIOKIMIA)">BIOLOGI SEL DAN MOLEKUL (BIOKIMIA)</option>
                <option value="BIOLOGI SUMBER">BIOLOGI SUMBER</option>
                <option value="BIOLOGI TUMBUHAN">BIOLOGI TUMBUHAN</option>
                <option value="BIOLOGI/KAJIHAYAT">BIOLOGI/KAJIHAYAT</option>
                <option value="BIOLOGICAL ENGINEERING">BIOLOGICAL ENGINEERING</option>
                <option value="BIOLOGY AND POLITICAL SCIENCE">BIOLOGY AND POLITICAL SCIENCE</option>
                <option value="BIOMEDICAL SCIENCE">BIOMEDICAL SCIENCE</option>
                <option value="BIOSYSTEM ENGINEERING">BIOSYSTEM ENGINEERING</option>
                <option value="BIOTEKNOLOGI">BIOTEKNOLOGI</option>
                <option value="BIOTEKNOLOGI DAN MIKROBIOLOGI">BIOTEKNOLOGI DAN MIKROBIOLOGI</option>
                <option value="BIOTEKNOLOGI DENGAN PENGURUSAN">BIOTEKNOLOGI DENGAN PENGURUSAN</option>
                <option value="BIOTEKNOLOGI INDUSTRI">BIOTEKNOLOGI INDUSTRI</option>
                <option value="BIOTEKNOLOGI MAKANAN">BIOTEKNOLOGI MAKANAN</option>
                <option value="BIOTEKNOLOGI PERTANIAN">BIOTEKNOLOGI PERTANIAN</option>
                <option value="BIOTEKNOLOGI SUMBER">BIOTEKNOLOGI SUMBER</option>
                <option value="BIOTEKNOLOGI TUMBUHAN">BIOTEKNOLOGI TUMBUHAN</option>
                <option value="BOTANI">BOTANI</option>
                <option value="BROADCASTING (RADIO & TV)">BROADCASTING (RADIO & TV)</option>
                <option value="BUILDING MANAGEMENT">BUILDING MANAGEMENT</option>
                <option value="BUILDING TECHNOLOGY">BUILDING TECHNOLOGY</option>
                <option value="BUILT ENVIROMENT (ARCHITECTURE)">BUILT ENVIROMENT (ARCHITECTURE)</option>
                <option value="BUSINESS & E-COMMERCE">BUSINESS & E-COMMERCE</option>
                <option value="BUSINESS ADMIN & MANAGEMENT AND TOURISM">BUSINESS ADMIN & MANAGEMENT AND TOURISM</option>
                <option value="BUSINESS ADMINISTRATION (BANKING AND FINANCE)">BUSINESS ADMINISTRATION (BANKING AND
                  FINANCE)</option>
                <option value="BUSINESS ADMINISTRATION (HONS) MANAGEMENT WITH MULTIMEDIA">BUSINESS ADMINISTRATION (HONS)
                  MANAGEMENT WITH MULTIMEDIA</option>
                <option value="BUSINESS ADMINISTRATION AND COMMERCE">BUSINESS ADMINISTRATION AND COMMERCE</option>
                <option value="BUSINESS AND FINANCE">BUSINESS AND FINANCE</option>
                <option value="BUSINESS COMPUTING">BUSINESS COMPUTING</option>
                <option value="BUSINESS ENGINEERING MANAGEMENT">BUSINESS ENGINEERING MANAGEMENT</option>
                <option value="BUSINESS INFORMATION MANAGEMENT">BUSINESS INFORMATION MANAGEMENT</option>
                <option value="BUSINESS SYSTEMS">BUSINESS SYSTEMS</option>
                <option value="BUSSINESS INFORMATION TECHNOLOGY">BUSSINESS INFORMATION TECHNOLOGY</option>
                <option value="CARTOGRAPHY AND TOURISM">CARTOGRAPHY AND TOURISM</option>
                <option value="CELLULAR & MOLECULAR PATHOLOGY">CELLULAR & MOLECULAR PATHOLOGY</option>
                <option value="CERTIFIED ACCOUNTING TECHNICIAN (CAT)">CERTIFIED ACCOUNTING TECHNICIAN (CAT)</option>
                <option value="CHEF TRAINING/LATIHAN CHEF/SENI KULINARI">CHEF TRAINING/LATIHAN CHEF/SENI KULINARI
                </option>
                <option value="CHEMICAL AND BIOPROCESS ENGINEERING">CHEMICAL AND BIOPROCESS ENGINEERING</option>
                <option value="CHEMICAL ENGINEERING TECH (BIOPROCESS)">CHEMICAL ENGINEERING TECH (BIOPROCESS)</option>
                <option value="CHEMICAL ENGINEERING TECHNOLOGY (FOOD)">CHEMICAL ENGINEERING TECHNOLOGY (FOOD)</option>
                <option value="CHEMICAL ENGINEERING TECHNOLOGY(PROCESS)">CHEMICAL ENGINEERING TECHNOLOGY(PROCESS)
                </option>
                <option value="CHEMISTRY AND MICROBIOLOGY">CHEMISTRY AND MICROBIOLOGY</option>
                <option value="CHEMISTRY AND PSYCHOLOGY">CHEMISTRY AND PSYCHOLOGY</option>
                <option value="CHINESE STUDIES">CHINESE STUDIES</option>
                <option value="COMBINED STUDIES">COMBINED STUDIES</option>
                <option value="COMMERCE">COMMERCE</option>
                <option value="COMMUNITY AND REGIONAL">COMMUNITY AND REGIONAL</option>
                <option value="COMPUTER FLUID DYNAMICS & STRUCTURE MECHANISM">COMPUTER FLUID DYNAMICS & STRUCTURE
                  MECHANISM</option>
                <option value="COMPUTERISED ACCOUNTANCY">COMPUTERISED ACCOUNTANCY</option>
                <option value="COMPUTING FOR BUSINESS">COMPUTING FOR BUSINESS</option>
                <option value="CONSUMER ECONOMICS AND FAMILY MANAGEMENT">CONSUMER ECONOMICS AND FAMILY MANAGEMENT
                </option>
                <option value="CREATIVE NEW MEDIA">CREATIVE NEW MEDIA</option>
                <option value="CYBER SECURITY / KESELAMATAN SIBER">CYBER SECURITY / KESELAMATAN SIBER</option>
                <option value="DAKWAH DAN PEMBANGUNAN INSAN">DAKWAH DAN PEMBANGUNAN INSAN</option>
                <option value="DAKWAH DAN PEMBANGUNAN SUMBER MANUSIA">DAKWAH DAN PEMBANGUNAN SUMBER MANUSIA</option>
                <option value="DAKWAH DAN PENGURUSAN">DAKWAH DAN PENGURUSAN</option>
                <option value="DANDANAN RAMBUT">DANDANAN RAMBUT</option>
                <option value="DENTAL MEDICINE AND SURGERY">DENTAL MEDICINE AND SURGERY</option>
                <option value="DERMATOLOGY (KULIT)">DERMATOLOGY (KULIT)</option>
                <option value="DIETETICS">DIETETICS</option>
                <option value="DIGITAL ENGINEERING">DIGITAL ENGINEERING</option>
                <option value="DIGITAL VIDEO">DIGITAL VIDEO</option>
                <option value="DIPLOMA PERGURUAN (TASL)">DIPLOMA PERGURUAN (TASL)</option>
                <option value="DIPLOMASI DAN PERNIAGAAN ANTARABANGSA">DIPLOMASI DAN PERNIAGAAN ANTARABANGSA</option>
                <option value="DIPLOMASI DAN UNDANG-UNDANG ANTARABANGSA">DIPLOMASI DAN UNDANG-UNDANG ANTARABANGSA
                </option>
                <option value="E-BUSINESS TECHNOLOGY MANAGEMENT">E-BUSINESS TECHNOLOGY MANAGEMENT</option>
                <option value="E-DAGANG">E-DAGANG</option>
                <option value="E-DAGANG KOMPUTER">E-DAGANG KOMPUTER</option>
                <option value="E-KESETIAUSAHAAN">E-KESETIAUSAHAAN</option>
                <option value="E-PERNIAGAAN">E-PERNIAGAAN</option>
                <option value="ECONOMICS AND BUSINESS">ECONOMICS AND BUSINESS</option>
                <option value="EKOLOGI">EKOLOGI</option>
                <option value="EKOLOGI DAN BIODIVERSITI">EKOLOGI DAN BIODIVERSITI</option>
                <option value="EKOLOGI DAN PENGURUSAN ALAM SEKITAR">EKOLOGI DAN PENGURUSAN ALAM SEKITAR</option>
                <option value="EKONOMI">EKONOMI</option>
                <option value="EKONOMI (EKONOMETRI)">EKONOMI (EKONOMETRI)</option>
                <option value="EKONOMI (PENGURUSAN PERNIAGAAN)">EKONOMI (PENGURUSAN PERNIAGAAN)</option>
                <option value="EKONOMI (STATISTIK)">EKONOMI (STATISTIK)</option>
                <option value="EKONOMI (SUMBER ALAM)">EKONOMI (SUMBER ALAM)</option>
                <option value="EKONOMI ANALISA">EKONOMI ANALISA</option>
                <option value="EKONOMI ANTARABANGSA">EKONOMI ANTARABANGSA</option>
                <option value="EKONOMI BANGUNAN DAN PENGURUSAN">EKONOMI BANGUNAN DAN PENGURUSAN</option>
                <option value="EKONOMI DAN GEOGRAFI">EKONOMI DAN GEOGRAFI</option>
                <option value="EKONOMI DAN KEWANGAN">EKONOMI DAN KEWANGAN</option>
                <option value="EKONOMI DAN PEMASARAN">EKONOMI DAN PEMASARAN</option>
                <option value="EKONOMI DAN PENGAJIAN SOSIAL">EKONOMI DAN PENGAJIAN SOSIAL</option>
                <option value="EKONOMI DAN PENGURUSAN">EKONOMI DAN PENGURUSAN</option>
                <option value="EKONOMI DAN PENTADBIRAN">EKONOMI DAN PENTADBIRAN</option>
                <option value="EKONOMI DAN PERNIAGAAN ANTARABANGSA">EKONOMI DAN PERNIAGAAN ANTARABANGSA</option>
                <option value="EKONOMI DAN POLITIK">AKUAKULTUREKONOMI DAN POLITIK</option>
                <option value="EKONOMI DAN SEJARAH">EKONOMI DAN SEJARAH</option>
                <option value="EKONOMI DASAR AWAM">EKONOMI DASAR AWAM</option>
                <option value="EKONOMI DENGAN KOMUNIKASI">EKONOMI DENGAN KOMUNIKASI</option>
                <option value="EKONOMI DENGAN PERAKAUNAN">EKONOMI DENGAN PERAKAUNAN</option>
                <option value="EKONOMI GUNAAN">EKONOMI GUNAAN</option>
                <option value="EKONOMI INDUSTRI">EKONOMI INDUSTRI</option>
                <option value="EKONOMI INDUSTRI DAN ORGANISASI">EKONOMI INDUSTRI DAN ORGANISASI</option>
                <option value="EKONOMI ISLAM">EKONOMI ISLAM</option>
                <option value="EKONOMI KEWANGAN">EKONOMI KEWANGAN</option>
                <option value="EKONOMI PEMBANGUNAN">EKONOMI PEMBANGUNAN</option>
                <option value="EKONOMI PEMBANGUNAN & PERANCANGAN">EKONOMI PEMBANGUNAN & PERANCANGAN</option>
                <option value="EKONOMI PERKHIDMATAN">EKONOMI PERKHIDMATAN</option>
                <option value="EKONOMI PERTANIAN">EKONOMI PERTANIAN</option>
                <option value="EKONOMI PERTANIAN & SUMBER ALAM">EKONOMI PERTANIAN & SUMBER ALAM</option>
                <option value="EKONOMI SUMBER">EKONOMI SUMBER</option>
                <option value="EKONOMI SUMBER DAN ALAM SEKITAR">EKONOMI SUMBER DAN ALAM SEKITAR</option>
                <option value="EKONOMI SUMBER MANUSIA">EKONOMI SUMBER MANUSIA</option>
                <option value="EKONOMI(KEWANGAN & PERDAGANGAN A'BANGSA)">EKONOMI(KEWANGAN & PERDAGANGAN A'BANGSA)
                </option>
                <option value="ELECTRICAL EQUIPMENT & INSTALLATION TECH">ELECTRICAL EQUIPMENT & INSTALLATION TECH
                </option>
                <option value="ELECTRICAL POWER AND AUTOMATION ENGINEERING">ELECTRICAL POWER AND AUTOMATION ENGINEERING
                </option>
                <option value="ELECTRONIC COMMERCE">ELECTRONIC COMMERCE</option>
                <option value="ELECTRONIC ENGINEERING (TELECOMMUNICATION ELECTRONICS)">ELECTRONIC ENGINEERING
                  (TELECOMMUNICATION ELECTRONICS)</option>
                <option value="ELECTRONIC SYSTEM & INFORMATION ENGINEERING">ELECTRONIC SYSTEM & INFORMATION ENGINEERING
                </option>
                <option value="ELECTRONICS (ROBOTICS AND AUTOMATION)">ELECTRONICS (ROBOTICS AND AUTOMATION)</option>
                <option value="ELEKTRIK DAN ELEKTRONIK">ELEKTRIK DAN ELEKTRONIK</option>
                <option value="ELEKTRONIK INDUSTRI">ELEKTRONIK INDUSTRI</option>
                <option value="EMBRIOLOGI">EMBRIOLOGI</option>
                <option value="ENFORCEMENT AND COMPLIANCE">ENFORCEMENT AND COMPLIANCE</option>
                <option value="ENGINEERING (AUTOMOTIVE ENGINEERING)">ENGINEERING (AUTOMOTIVE ENGINEERING)</option>
                <option value="ENGINEERING (ELECTRICAL ENGINEERING AND INFORMATION TECHNOLOGY)">AENGINEERING (ELECTRICAL
                  ENGINEERING AND INFORMATION TECHNOLOGY)</option>
                <option value="ENGINEERING (PHOTONIC ENGINEERING)">ENGINEERING (PHOTONIC ENGINEERING)</option>
                <option value="ENGINEERING - FABRICATION AND WERDING">ENGINEERING - FABRICATION AND WERDING</option>
                <option value="ENGINEERING IN ENERGY, BUILDINGS AND ENVIRONMENT">ENGINEERING IN ENERGY, BUILDINGS AND
                  ENVIRONMENT</option>
                <option value="ENGINEERING IN MANUFACTURING SYSTEM WITH MANAGEMENT">ENGINEERING IN MANUFACTURING SYSTEM
                  WITH MANAGEMENT</option>
                <option value="ENGINEERING TECHNOLOGY IN MACHINE BUILDING & MAINTENANCE">ENGINEERING TECHNOLOGY IN
                  MACHINE BUILDING & MAINTENANCE</option>
                <option value="ENGINEERING TECHNOLOGY IN MOULD MANUFACTURING">ENGINEERING TECHNOLOGY IN MOULD
                  MANUFACTURING</option>
                <option value="ENGINEERING TECHNOLOGY IN PRODUCTION ENGINEERING">ENGINEERING TECHNOLOGY IN PRODUCTION
                  ENGINEERING</option>
                <option value="ENGLISH COMMUNICATION">ENGLISH COMMUNICATION</option>
                <option value="ENTOMOLOGI">ENTOMOLOGI</option>
                <option value="ENTOMOLOGI MOLEKULAR">ENTOMOLOGI MOLEKULAR</option>
                <option value="ENVIRONMENTAL TECHNOLOGY/TEKNOLOGI PERSEKITARAN">ENVIRONMENTAL TECHNOLOGY/TEKNOLOGI
                  PERSEKITARAN</option>
                <option value="FALSAFAH">FALSAFAH</option>
                <option value="FARMASI">FARMASI</option>
                <option value="FESYEN DAN PAKAIAN">FESYEN DAN PAKAIAN</option>
                <option value="FILEM DAN ANIMASI">FILEM DAN ANIMASI</option>
                <option value="FINANCIAL ENGINEERING">FINANCIAL ENGINEERING</option>
                <option value="FIQH DAN FATWA">FIQH DAN FATWA</option>
                <option value="FIQH DAN PENGAJIAN ISLAM">FIQH DAN PENGAJIAN ISLAM</option>
                <option value="FIQH DAN USUL AL_FIQH">FIQH DAN USUL AL_FIQH</option>
                <option value="FISIOTERAPI">FISIOTERAPI</option>
                <option value="FIZIK">FIZIK</option>
                <option value="FIZIK (FIBER OPTICS TELECOMMUNICATIONS)">FIZIK (FIBER OPTICS TELECOMMUNICATIONS)</option>
                <option value="FIZIK BAHAN">FIZIK BAHAN</option>
                <option value="FIZIK DENGAN ELEKTRONIK">FIZIK DENGAN ELEKTRONIK</option>
                <option value="FIZIK GUNAAN">FIZIK GUNAAN</option>
                <option value="FIZIK INDUSTRI">FIZIK INDUSTRI</option>
                <option value="FIZIK KESIHATAN">FIZIK KESIHATAN</option>
                <option value="FIZIK KOMPUTERAN DAN ELEKTRONIK">FIZIK KOMPUTERAN DAN ELEKTRONIK</option>
                <option value="FIZIK MATEMATIK">FIZIK MATEMATIK</option>
                <option value="FIZIK TEORITIS">FIZIK TEORITIS/option>
                <option value="FOOD MANUFACTURE, MANAGEMENT & MARKETING">FOOD MANUFACTURE, MANAGEMENT & MARKETING
                </option>
                <option value="FORENSIC SCIENCE">FORENSIC SCIENCE</option>
                <option value="FORENSIK KOMPUTER">FORENSIK KOMPUTER</option>
                <option value="FORENSIK PERUBATAN">FORENSIK PERUBATAN</option>
                <option value="FOTOGRAFI DAN PENGIMEJAN KREATIF">FOTOGRAFI DAN PENGIMEJAN KREATIF</option>
                <option value="FOTOGRAMMETRI & KARTOGRAFI">FOTOGRAMMETRI & KARTOGRAFI</option>
                <option value="FOTOMEDIA KREATIF">FOTOMEDIA KREATIF</option>
                <option value="FOUNDATION IN MANAGEMENT">FOUNDATION IN MANAGEMENT</option>
                <option value="FUNDAMENTAL STUDIES IN ISLAMIC STUDIES (AL-QURAN AND HADITH)">FUNDAMENTAL STUDIES IN
                  ISLAMIC STUDIES (AL-QURAN AND HADITH)</option>
                <option value="GENERAL STUDIES">GENERAL STUDIES</option>
                <option value="GENETICS">GENETICS</option>
                <option value="GENETICS (IMMUNOLOGY)">GENETICS (IMMUNOLOGY)</option>
                <option value="GEOFIZIK">GEOFIZIK</option>
                <option value="GEOGRAFI">GEOGRAFI</option>
                <option value="GEOGRAFI DAN ANTROPOLOGI DAN SOSIOLOGI">GEOGRAFI DAN ANTROPOLOGI DAN SOSIOLOGI</option>
                <option value="GEOGRAFI DAN KEPENDUDUKAN">GEOGRAFI DAN KEPENDUDUKAN</option>
                <option value="GEOGRAFI DAN LINGUISTIK">GEOGRAFI DAN LINGUISTIK</option>
                <option value="GEOGRAFI DAN PENGAJIAN MELAYU">GEOGRAFI DAN PENGAJIAN MELAYU</option>
                <option value="GEOGRAFI DAN PENGURUSAN PERNIAGAAN">GEOGRAFI DAN PENGURUSAN PERNIAGAAN</option>
                <option value="GEOGRAFI DAN PERANCANGAN BANDAR">GEOGRAFI DAN PERANCANGAN BANDAR</option>
                <option value="GEOGRAFI DAN PERANCANGAN PENGURUSAN PEMBANGUNAN">GEOGRAFI DAN PERANCANGAN PENGURUSAN
                  PEMBANGUNAN</option>
                <option value="GEOGRAFI DAN PERANCANGAN WILAYAH">GEOGRAFI DAN PERANCANGAN WILAYAH</option>
                <option value="GEOGRAFI DAN PERBANDARAN">GEOGRAFI DAN PERBANDARAN</option>
                <option value="GEOGRAFI DAN SEJARAH">GEOGRAFI DAN SEJARAH</option>
                <option value="GEOINFORMATIK">GEOINFORMATIK</option>
                <option value="GEOLOGI">GEOLOGI</option>
                <option value="GEOLOGI DAN EKONOMI">GEOLOGI DAN EKONOMI</option>
                <option value="GEOLOGI GUNAAN (APPLIED GEOLOGI)">GEOLOGI GUNAAN (APPLIED GEOLOGI)</option>
                <option value="GEOLOGY AND GEOGRAPHY">GEOLOGY AND GEOGRAPHY</option>
                <option value="GEOMATIK (SUMBER ALAM)">GEOMATIK (SUMBER ALAM)</option>
                <option value="GERONTOLOGI">GERONTOLOGI</option>
                <option value="GRAFIK KOMUNIKASI">GRAFIK KOMUNIKASI</option>
                <option value="GRAPHIC DESIGN">GRAPHIC DESIGN</option>
                <option
                  value="GRP DIPLOMA LEVEL 3 LONDON CHAMBER OF COMMERCE & INDUSTRY EXAMINATIONS BOARD (LCCIEB) - ACCOUNTING">
                  GRP DIPLOMA LEVEL 3 LONDON CHAMBER OF COMMERCE & INDUSTRY EXAMINATIONS BOARD (LCCIEB) - ACCOUNTING
                </option>
                <option
                  value="GRP DIPLOMA LVL 3 LONDON CHAMBER OF COMMERCE & INDUSTRY INT'L QUALIFICATIONS - BUSINESS STUDIES">
                  GRP DIPLOMA LVL 3 LONDON CHAMBER OF COMMERCE & INDUSTRY INT'L QUALIFICATIONS - BUSINESS STUDIES
                </option>
                <option value="HADIS">HADIS</option>
                <option value="HARTA INTELEK">HARTA INTELEK</option>
                <option value="HEALTH CARE DEVELOPMENT AND EDUCATION">HEALTH CARE DEVELOPMENT AND EDUCATION</option>
                <option value="HEALTH INFORMATICS">HEALTH INFORMATICS</option>
                <option value="HEALTH PRACTICE DEVELOPMENT">HEALTH PRACTICE DEVELOPMENT</option>
                <option value="HEALTH SCIENCE">HEALTH SCIENCE</option>
                <option value="HEALTH STUDIES">HEALTH STUDIES</option>
                <option value="HEALTH STUDIES (MEDICAL ASSISTANT)">HEALTH STUDIES (MEDICAL ASSISTANT)</option>
                <option value="HEALTHCARE">HEALTHCARE</option>
                <option value="HORTIKULTUR AND LANDSKAP">HORTIKULTUR AND LANDSKAP</option>
                <option value="HOTEL DAN KATERING">HOTEL DAN KATERING</option>
                <option value="HUBUNGAN ANTARABANGSA">HUBUNGAN ANTARABANGSA</option>
                <option value="HUBUNGAN ANTARABANGSA DAN SEJARAH">HUBUNGAN ANTARABANGSA DAN SEJARAH</option>
                <option value="HUKUM SAHSIAH KELUARGA(AHWAL AL-SYAKSHIYAH)">HUKUM SAHSIAH KELUARGA(AHWAL AL-SYAKSHIYAH)
                </option>
                <option value="ILMU WAHYU">ILMU WAHYU</option>
                <option value="ILMU WAHYU DAN WARISAN ISLAM">ILMU WAHYU DAN WARISAN ISLAM</option>
                <option value="ILMU WAHYU DAN WARISAN ISLAM (PENGAJIAN QURAN DAN SUNNAH)">ILMU WAHYU DAN WARISAN ISLAM
                  (PENGAJIAN QURAN DAN SUNNAH)</option>
                <option value="IMFORMATION ENGINEERING">IMFORMATION ENGINEERING</option>
                <option value="INDUSTRI LOGISTIK">INDUSTRI LOGISTIK</option>
                <option value="INDUSTRI MULTIMEDIA">INDUSTRI MULTIMEDIA</option>
                <option value="INDUSTRI PSIKOLOGI">INDUSTRI PSIKOLOGI</option>
                <option value="INDUSTRIAL AUTOMATION (COMPUTER INTEGRATED SYSTEM)">INDUSTRIAL AUTOMATION (COMPUTER
                  INTEGRATED SYSTEM)</option>
                <option value="INDUSTRIAL AUTOMATION (IT)">INDUSTRIAL AUTOMATION (IT)</option>
                <option value="INDUSTRIAL AUTOMATION (MECHATRONICS)">INDUSTRIAL AUTOMATION (MECHATRONICS)</option>
                <option value="INDUSTRIAL AUTOMATION AND ROBOTICS">INDUSTRIAL AUTOMATION AND ROBOTICS</option>
                <option value="INDUSTRIAL AUTOMATION ENGINEERING (ELECTONIC AND INSTRUMENTATION)">INDUSTRIAL AUTOMATION
                  ENGINEERING (ELECTONIC AND INSTRUMENTATION)</option>
                <option value="INDUSTRIAL DESIGN ENGINEERING">INDUSTRIAL DESIGN ENGINEERING</option>
                <option value="INDUSTRIAL ELECTRONICS (ELECTRONICS & INFORMATION TECHNOLOGY)">INDUSTRIAL ELECTRONICS
                  (ELECTRONICS & INFORMATION TECHNOLOGY)</option>
                <option value="INDUSTRIAL ELECTRONICS (MECHATRONICS)">INDUSTRIAL ELECTRONICS (MECHATRONICS)</option>
                <option value="INDUSTRIAL MANAGEMENT AND JAPANESE LANGUAGE">INDUSTRIAL MANAGEMENT AND JAPANESE LANGUAGE
                </option>
                <option value="INFORMATION ASSURANCE">INFORMATION ASSURANCE</option>
                <option value="INFORMATION TECHNOLOGY (SECURITY TECHNOLOGY)">INFORMATION TECHNOLOGY (SECURITY
                  TECHNOLOGY)</option>
                <option value="INFORMATION TECHONOLOGY AND COMMUNICATION">INFORMATION TECHONOLOGY AND COMMUNICATION
                </option>
                <option value="INSURANS">INSURANS</option>
                <option value="INTEGRATED IN RISK MANAGEMENT SYSTEM">INTEGRATED IN RISK MANAGEMENT SYSTEM</option>
                <option value="INTEGRATED LOGISTICS MANAGEMENT">INTEGRATED LOGISTICS MANAGEMENT</option>
                <option value="INTERNATIONAL HOSPITALITY&TOURISM MANAGE">INTERNATIONAL HOSPITALITY&TOURISM MANAGE
                </option>
                <option value="INTERNATIONAL POLITICS">INTERNATIONAL POLITICS</option>
                <option value="INVESTMENT MANAGEMENT">INVESTMENT MANAGEMENT</option>
                <option value="ISLAMIC EARLY CHILDHOOD EDUCATION">ISLAMIC EARLY CHILDHOOD EDUCATION</option>
                <option value="JOURNALISM & BROADCASTING (KEWAR & PENYIARAN)">JOURNALISM & BROADCASTING (KEWAR &
                  PENYIARAN)</option>
                <option value="JURISPRUDENS">JURISPRUDENS</option>
                <option value="JURUBAHASA ISYARAT">JURUBAHASA ISYARAT</option>
                <option value="JURUSAN BIMBINGAN & PENYULUH MASYARAKAT">JURUSAN BIMBINGAN & PENYULUH MASYARAKAT</option>
                <option value="KAJIAN ALAM SEKITAR">KAJIAN ALAM SEKITAR</option>
                <option value="KAJIAN ANTARABANGSA">KAJIAN ANTARABANGSA</option>
                <option value="KAJIAN KHIDMAT SOSIAL">KAJIAN KHIDMAT SOSIAL</option>
                <option value="KAJIAN/PENGAJIAN SOSIAL">KAJIAN/PENGAJIAN SOSIAL</option>
                <option value="KAJIHAIWAN (ZOOLOGY/ANIMAL SCIENCE)">KAJIHAIWAN (ZOOLOGY/ANIMAL SCIENCE)</option>
                <option value="KAJIHAYAT GUNAAN (APPLIED BIOLOGY)">KAJIHAYAT GUNAAN (APPLIED BIOLOGY)</option>
                <option value="KAUNSELING">KAUNSELING</option>
                <option value="KAUNSELING (MASTER IN COUNSELLING)">KAUNSELING (MASTER IN COUNSELLING)</option>
                <option value="KAUNSELING (PENYALAHGUNAAN DADAH)">KAUNSELING (PENYALAHGUNAAN DADAH)</option>
                <option value="KAUNSELING GENETIK">KAUNSELING GENETIK</option>
                <option value="KAUNSELING ISLAMI">KAUNSELING ISLAMI</option>
                <option value="KAWALAN DAN INSTRUMENTASI">KAWALAN DAN INSTRUMENTASI</option>
                <option value="KECANTIKAN DAN DANDANAN RAMBUT/HAIR DESIGN">KECANTIKAN DAN DANDANAN RAMBUT/HAIR DESIGN
                </option>
                <option value="KEJURULATIHAN BINA INSAN NEGARA">KEJURULATIHAN BINA INSAN NEGARA</option>
                <option value="KEJURUTERAAN TEKNOLOGI INSTRUMENTASI">KEJURUTERAAN TEKNOLOGI INSTRUMENTASI</option>
                <option value="KEJURUTERAAN (ELEKTRIK DAN ELEKTRONIK)">KEJURUTERAAN (ELEKTRIK DAN ELEKTRONIK)</option>
                <option value="KEJURUTERAAN (GEOMATIK)">KEJURUTERAAN (GEOMATIK)</option>
                <option value="KEJURUTERAAN (KEJURUTERAAN FOTONIK)">KEJURUTERAAN (KEJURUTERAAN FOTONIK)</option>
                <option value="KEJURUTERAAN (KEJURUTERAAN MEKANIKAL)">KEJURUTERAAN (KEJURUTERAAN MEKANIKAL)</option>
                <option value="KEJURUTERAAN (KEJURUTERAAN RANGKAIAN KOMPUTER)">KEJURUTERAAN (KEJURUTERAAN RANGKAIAN
                  KOMPUTER)</option>
                <option value="KEJURUTERAAN (KEJURUTERAAN REKABENTUK PRODUK)">KEJURUTERAAN (KEJURUTERAAN REKABENTUK
                  PRODUK)</option>
                <option value="KEJURUTERAAN (KEJURUTERAAN SISTEM ELEKTRIK)">KEJURUTERAAN (KEJURUTERAAN SISTEM ELEKTRIK)
                </option>
                <option value="KEJURUTERAAN (KIMIA - GAS)">KEJURUTERAAN (KIMIA - GAS)</option>
                <option value="KEJURUTERAAN (MEKANIK)">KEJURUTERAAN (MEKANIK)</option>
                <option value="KEJURUTERAAN (MEKANIKAL / SISTEM)">KEJURUTERAAN (MEKANIKAL / SISTEM)</option>
                <option value="KEJURUTERAAN (PERLOMBONGAN)">KEJURUTERAAN (PERLOMBONGAN)</option>
                <option value="KEJURUTERAAN (PROSES DAN MAKANAN)">KEJURUTERAAN (PROSES DAN MAKANAN)</option>
                <option value="KEJURUTERAAN (REKABENTUK & PEMBUATAN TERBANTU KOMPUTER)">KEJURUTERAAN (REKABENTUK &
                  PEMBUATAN TERBANTU KOMPUTER)</option>
                <option value="KEJURUTERAAN (SISTEM KOMPUTER DAN KOMUNIKASI)">KEJURUTERAAN (SISTEM KOMPUTER DAN
                  KOMUNIKASI)</option>
                <option value="KEJURUTERAAN (SISTEM RANGKAIAN)">KEJURUTERAAN (SISTEM RANGKAIAN)</option>
                <option value="KEJURUTERAAN ALAM SEKITAR">KEJURUTERAAN ALAM SEKITAR</option>
                <option value="KEJURUTERAAN ANGIN">KEJURUTERAAN ANGIN</option>
                <option value="KEJURUTERAAN ARKITEK LAUT (NAVAL ARCHITECT)">KEJURUTERAAN ARKITEK LAUT (NAVAL ARCHITECT)
                </option>
                <option value="KEJURUTERAAN AUTOMASI INDUSTRI (ELEKTRIK)">KEJURUTERAAN AUTOMASI INDUSTRI (ELEKTRIK)
                </option>
                <option value="KEJURUTERAAN AWAM">KEJURUTERAAN AWAM</option>
                <option value="KEJURUTERAAN AWAM (ALAM SEKITAR)">KEJURUTERAAN AWAM (ALAM SEKITAR)</option>
                <option value="KEJURUTERAAN AWAM (KAJIAIR)">KEJURUTERAAN AWAM (KAJIAIR)</option>
                <option value="KEJURUTERAAN AWAM (KERJARAYA & KAJIAIR)">KEJURUTERAAN AWAM (KERJARAYA & KAJIAIR)</option>
                <option value="KEJURUTERAAN AWAM (LEBUHRAYA)">KEJURUTERAAN AWAM (LEBUHRAYA)</option>
                <option value="KEJURUTERAAN AWAM (PEMBINAAN)">KEJURUTERAAN AWAM (PEMBINAAN)</option>
                <option value="KEJURUTERAAN AWAM (PENGURUSAN PEMBINAAN)">KEJURUTERAAN AWAM (PENGURUSAN PEMBINAAN)
                </option>
                <option value="KEJURUTERAAN AWAM - SENIBINA">KEJURUTERAAN AWAM - SENIBINA</option>
                <option value="KEJURUTERAAN AWAM DAN PERSEKITARAN">KEJURUTERAAN AWAM DAN PERSEKITARAN</option>
                <option value="KEJURUTERAAN AWAM DAN STRUKTUR">KEJURUTERAAN AWAM DAN STRUKTUR</option>
                <option value="KEJURUTERAAN AWAM SERTA PENDIDIKAN">KEJURUTERAAN AWAM SERTA PENDIDIKAN</option>
                <option value="KEJURUTERAAN AWAM(KAJIUKUR KEJURUTERAAN)">KEJURUTERAAN AWAM(KAJIUKUR KEJURUTERAAN)
                </option>
                <option value="KEJURUTERAAN AWAM(PERKHIDMATAN BANGUNAN)">KEJURUTERAAN AWAM(PERKHIDMATAN BANGUNAN)
                </option>
                <option value="KEJURUTERAAN BAHAN / MATERIAL">KEJURUTERAAN BAHAN / MATERIAL</option>
                <option value="KEJURUTERAAN BAHAN DAN PEMBUATAN">KEJURUTERAAN BAHAN DAN PEMBUATAN</option>
                <option value="KEJURUTERAAN BAHAN DAN SUMBER MINERAL">KEJURUTERAAN BAHAN DAN SUMBER MINERAL</option>
                <option value="KEJURUTERAAN BANGUNAN">KEJURUTERAAN BANGUNAN</option>
                <option value="KEJURUTERAAN BIOKIMIA">KEJURUTERAAN BIOKIMIA</option>
                <option value="KEJURUTERAAN BIOKIMIA-BIOTEKNOLOGI">KEJURUTERAAN BIOKIMIA-BIOTEKNOLOGI</option>
                <option value="KEJURUTERAAN BIOLOGI DAN PERTANIAN">KEJURUTERAAN BIOLOGI DAN PERTANIAN</option>
                <option value="KEJURUTERAAN BIOPERUBATAN">KEJURUTERAAN BIOPERUBATAN</option>
                <option value="KEJURUTERAAN BIOPROSES">KEJURUTERAAN BIOPROSES</option>
                <option value="KEJURUTERAAN CAD/ENGINEERING (COMPUTER AIDED DESIGN AND MANUFACTURE)">KEJURUTERAAN
                  CAD/ENGINEERING (COMPUTER AIDED DESIGN AND MANUFACTURE)</option>
                <option value="KEJURUTERAAN DAN SAINS BANGUNAN">KEJURUTERAAN DAN SAINS BANGUNAN</option>
                <option value="KEJURUTERAAN EKOLOGI">KEJURUTERAAN EKOLOGI</option>
                <option value="KEJURUTERAAN ELEKTRIK">KEJURUTERAAN ELEKTRIK</option>
                <option value="KEJURUTERAAN ELEKTRIK & ELEKTRONIK (KAWAL, ROBOTIK & P'AUTO)">KEJURUTERAAN ELEKTRIK &
                  ELEKTRONIK (KAWAL, ROBOTIK & P'AUTO)</option>
                <option value="KEJURUTERAAN ELEKTRIK & ELEKTRONIK (MIKROELEKTRONIK)">KEJURUTERAAN ELEKTRIK & ELEKTRONIK
                  (MIKROELEKTRONIK)</option>
                <option value="KEJURUTERAAN ELEKTRIK & ELEKTRONIK (PERALATAN)">KEJURUTERAAN ELEKTRIK & ELEKTRONIK
                  (PERALATAN)</option>
                <option value="KEJURUTERAAN ELEKTRIK & ELEKTRONIK TELEKOMUNIKASI">KEJURUTERAAN ELEKTRIK & ELEKTRONIK
                  TELEKOMUNIKASI</option>
                <option value="KEJURUTERAAN ELEKTRIK (ELEKTRONIK INDUSTRI)">KEJURUTERAAN ELEKTRIK (ELEKTRONIK INDUSTRI)
                </option>
                <option value="KEJURUTERAAN ELEKTRIK (ELEKTRONIK KUASA DAN PEMACU)">KEJURUTERAAN ELEKTRIK (ELEKTRONIK
                  KUASA DAN PEMACU)</option>
                <option value="KEJURUTERAAN ELEKTRIK (ELEKTRONIK)">KEJURUTERAAN ELEKTRIK (ELEKTRONIK)</option>
                <option value="KEJURUTERAAN ELEKTRIK (INSTRUMENTASI)">KEJURUTERAAN ELEKTRIK (INSTRUMENTASI)</option>
                <option value="KEJURUTERAAN ELEKTRIK (KAWALAN, INSTRUMENTASI DAN AUTOMASI)">KEJURUTERAAN ELEKTRIK
                  (KAWALAN, INSTRUMENTASI DAN AUTOMASI)</option>
                <option value="KEJURUTERAAN ELEKTRIK DAN TELEKOMUNIKASI">KEJURUTERAAN ELEKTRIK DAN TELEKOMUNIKASI
                </option>
                <option value="KEJURUTERAAN ELEKTRIK KOMPUTER">KEJURUTERAAN ELEKTRIK KOMPUTER</option>
                <option value="KEJURUTERAAN ELEKTRIK KUASA">KEJURUTERAAN ELEKTRIK KUASA</option>
                <option value="KEJURUTERAAN ELEKTRIK PERHUBUNGAN">KEJURUTERAAN ELEKTRIK PERHUBUNGAN</option>
                <option value="KEJURUTERAAN ELEKTRIK SERTA PENDIDIKAN">KEJURUTERAAN ELEKTRIK SERTA PENDIDIKAN</option>
                <option value="KEJURUTERAAN ELEKTRIK(ELEKTRIK & TEKNOLOGI KOMPUTER)">KEJURUTERAAN ELEKTRIK(ELEKTRIK &
                  TEKNOLOGI KOMPUTER)</option>
                <option value="KEJURUTERAAN ELEKTRIK(ELEKTRONIK KUASA &KAWALAN)">KEJURUTERAAN ELEKTRIK(ELEKTRONIK KUASA
                  &KAWALAN)</option>
                <option value="KEJURUTERAAN ELEKTRIK(JANGKAWAS PERUSAHAAN & KAWALAN)">KEJURUTERAAN ELEKTRIK(JANGKAWAS
                  PERUSAHAAN & KAWALAN)</option>
                <option value="KEJURUTERAAN ELEKTRIK(KAWALAN DAN INSTRUMENTASI)">KEJURUTERAAN ELEKTRIK(KAWALAN DAN
                  INSTRUMENTASI)</option>
                <option value="KEJURUTERAAN ELEKTRIK(PETROLEUM)">KEJURUTERAAN ELEKTRIK(PETROLEUM)</option>
                <option value="KEJURUTERAAN ELEKTRIK, ELEKTRONIK DAN KAWALAN">KEJURUTERAAN ELEKTRIK, ELEKTRONIK DAN
                  KAWALAN</option>
                <option value="KEJURUTERAAN ELEKTRIK, ELEKTRONIK DAN SISTEM">KEJURUTERAAN ELEKTRIK, ELEKTRONIK DAN
                  SISTEM</option>
                <option value="KEJURUTERAAN ELEKTROMEKANIKAL">KEJURUTERAAN ELEKTROMEKANIKAL</option>
                <option value="KEJURUTERAAN ELEKTRONIK">KEJURUTERAAN ELEKTRONIK</option>
                <option value="KEJURUTERAAN ELEKTRONIK (ELEKTRONIK INDUSTRI)">KEJURUTERAAN ELEKTRONIK (ELEKTRONIK
                  INDUSTRI)</option>
                <option value="KEJURUTERAAN ELEKTRONIK (KAWALAN)">KEJURUTERAAN ELEKTRONIK (KAWALAN)</option>
                <option value="KEJURUTERAAN ELEKTRONIK (KOMPUTER)">KEJURUTERAAN ELEKTRONIK (KOMPUTER)</option>
                <option value="KEJURUTERAAN ELEKTRONIK (KOMUNIKASI)">KEJURUTERAAN ELEKTRONIK (KOMUNIKASI)</option>
                <option value="KEJURUTERAAN ELEKTRONIK (OPTOELEKTRONIK)">KEJURUTERAAN ELEKTRONIK (OPTOELEKTRONIK)
                </option>
                <option value="KEJURUTERAAN ELEKTRONIK (PETROLEUM)">KEJURUTERAAN ELEKTRONIK (PETROLEUM)</option>
                <option value="KEJURUTERAAN ELEKTRONIK (SISTEM TERBENAM)">KEJURUTERAAN ELEKTRONIK (SISTEM TERBENAM)
                </option>
                <option value="KEJURUTERAAN ELEKTRONIK (TRANSMISI DATA DAN RANGKAIAN)">KEJURUTERAAN ELEKTRONIK
                  (TRANSMISI DATA DAN RANGKAIAN)</option>
                <option value="KEJURUTERAAN ELEKTRONIK BIOPERUBATAN">KEJURUTERAAN ELEKTRONIK BIOPERUBATAN</option>
                <option value="KEJURUTERAAN ELEKTRONIK DAN ELEKTRIK (KOMPUTER)">KEJURUTERAAN ELEKTRONIK DAN ELEKTRIK
                  (KOMPUTER)</option>
                <option value="KEJURUTERAAN ELEKTRONIK DAN KOMPUTER">KEJURUTERAAN ELEKTRONIK DAN KOMPUTER</option>
                <option value="KEJURUTERAAN ELEKTRONIK PENGKHUSUSAN DALAM TEKNOLOGI NANO">KEJURUTERAAN ELEKTRONIK
                  PENGKHUSUSAN DALAM TEKNOLOGI NANO</option>
                <option value="KEJURUTERAAN ELEKTRONIK PERHUBUNGAN">KEJURUTERAAN ELEKTRONIK PERHUBUNGAN</option>
                <option value="KEJURUTERAAN ELEKTRONIK PERUBATAN">KEJURUTERAAN ELEKTRONIK PERUBATAN</option>
                <option value="KEJURUTERAAN ELEKTRONIK(MICROWAVE & KOMUNIKASI)">KEJURUTERAAN ELEKTRONIK(MICROWAVE &
                  KOMUNIKASI)</option>
                <option value="KEJURUTERAAN ELEKTRONIK(MULTIMEDIA)">KEJURUTERAAN ELEKTRONIK(MULTIMEDIA)</option>
                <option value="KEJURUTERAAN ELEKTRONIK-KOMPUTER DAN MAKLUMAT">KEJURUTERAAN ELEKTRONIK-KOMPUTER DAN
                  MAKLUMAT</option>
                <option value="KEJURUTERAAN ELETRONIK (INSTRUMENTASI)">KEJURUTERAAN ELETRONIK (INSTRUMENTASI)</option>
                <option value="KEJURUTERAAN ELETRONIK (KOMUNIKASI WAYARLES)">KEJURUTERAAN ELETRONIK (KOMUNIKASI
                  WAYARLES)</option>
                <option value="KEJURUTERAAN GALIAN & PEMEROSESAN BAHAN">KEJURUTERAAN GALIAN & PEMEROSESAN BAHAN</option>
                <option value="KEJURUTERAAN GALIAN/LOGAM">KEJURUTERAAN GALIAN/LOGAM</option>
                <option value="KEJURUTERAAN GEOFIZIK">KEJURUTERAAN GEOFIZIK</option>
                <option value="KEJURUTERAAN GEOLOGI">KEJURUTERAAN GEOLOGI</option>
                <option value="KEJURUTERAAN GEOTEKNIKAL">KEJURUTERAAN GEOTEKNIKAL</option>
                <option value="KEJURUTERAAN INTERNET">KEJURUTERAAN INTERNET</option>
                <option value="KEJURUTERAAN JENTERA (AUTOMATIF DAN DIESEL)">KEJURUTERAAN JENTERA (AUTOMATIF DAN DIESEL)
                </option>
                <option value="KEJURUTERAAN JENTERA (KAJITERBANG)">KEJURUTERAAN JENTERA (KAJITERBANG)</option>
                <option value="KEJURUTERAAN JENTERA (LOGI)">KEJURUTERAAN JENTERA (LOGI)</option>
                <option value="KEJURUTERAAN JENTERA (PENGELUARAN)">KEJURUTERAAN JENTERA (PENGELUARAN)</option>
                <option value="KEJURUTERAAN JENTERA (PENYAMAN UDARA & PENYEJUKAN)">KEJURUTERAAN JENTERA (PENYAMAN UDARA
                  & PENYEJUKAN)</option>
                <option value="KEJURUTERAAN JENTERA (TEKNOLOGI MARIN)">KEJURUTERAAN JENTERA (TEKNOLOGI MARIN)</option>
                <option value="KEJURUTERAAN JENTERA/MEKANIKAL">KEJURUTERAAN JENTERA/MEKANIKAL</option>
                <option value="KEJURUTERAAN JENTERA/MEKANIKAL (AM)">KEJURUTERAAN JENTERA/MEKANIKAL (AM)</option>
                <option value="KEJURUTERAAN KAWALAN (CONTROL ENGINEERING )">KEJURUTERAAN KAWALAN (CONTROL ENGINEERING )
                </option>
                <option value="KEJURUTERAAN KECEMASAN DAN KESELAMATAN">KEJURUTERAAN KECEMASAN DAN KESELAMATAN</option>
                <option value="KEJURUTERAAN KIMIA">KEJURUTERAAN KIMIA</option>
                <option value="KEJURUTERAAN KIMIA (LOJI PROSES)">KEJURUTERAAN KIMIA (LOJI PROSES)</option>
                <option value="KEJURUTERAAN KIMIA (POLIMER)">KEJURUTERAAN KIMIA (POLIMER)</option>
                <option value="KEJURUTERAAN KIMIA (TEKNOLOGI GAS)">KEJURUTERAAN KIMIA (TEKNOLOGI GAS)</option>
                <option value="KEJURUTERAAN KIMIA BIOTEKNOLOGI">KEJURUTERAAN KIMIA BIOTEKNOLOGI</option>
                <option value="KEJURUTERAAN KIMIA DAN ALAM SEKITAR">KEJURUTERAAN KIMIA DAN ALAM SEKITAR</option>
                <option value="KEJURUTERAAN KIMIA DAN PROSES">KEJURUTERAAN KIMIA DAN PROSES</option>
                <option value="KEJURUTERAAN KIMIA- BIOPROSES">KEJURUTERAAN KIMIA- BIOPROSES</option>
                <option value="KEJURUTERAAN KOMPUTER">KEJURUTERAAN KOMPUTER</option>
                <option value="KEJURUTERAAN KOMPUTER DAN MAKLUMAT">KEJURUTERAAN KOMPUTER DAN MAKLUMAT</option>
                <option value="KEJURUTERAAN LAUT (MARINE ENGINEERING)">KEJURUTERAAN LAUT (MARINE ENGINEERING)</option>
                <option value="KEJURUTERAAN LEPAS PANTAI/OFFSHORE ENGINEERING">KEJURUTERAAN LEPAS PANTAI/OFFSHORE
                  ENGINEERINGR</option>
                <option value="KEJURUTERAAN MEKANIK">KEJURUTERAAN MEKANIK
                <option>
                <option value="KEJURUTERAAN MEKANIK DAN BAHAN">KEJURUTERAAN MEKANIK DAN BAHAN</option>
                <option value="KEJURUTERAAN MEKANIKAL">KEJURUTERAAN MEKANIKAL</option>
                <option value="KEJURUTERAAN MEKANIKAL (AERONAUTIK)">KEJURUTERAAN MEKANIKAL (AERONAUTIK)R</option>
                <option value="KEJURUTERAAN MEKANIKAL (AUTOMASI)">KEJURUTERAAN MEKANIKAL (AUTOMASI)</option>
                <option value="KEJURUTERAAN MEKANIKAL (AUTOMOTIF DAN DISEL)">KEJURUTERAAN MEKANIKAL (AUTOMOTIF DAN
                  DISEL)</option>
                <option value="KEJURUTERAAN MEKANIKAL (AUTOMOTIF)">KEJURUTERAAN MEKANIKAL (AUTOMOTIF)</option>
                <option value="KEJURUTERAAN MEKANIKAL (BAHAN)">KEJURUTERAAN MEKANIKAL (BAHAN)</option>
                <option value="KEJURUTERAAN MEKANIKAL (LOJI)">KEJURUTERAAN MEKANIKAL (LOJI)</option>
                <option value="KEJURUTERAAN MEKANIKAL (PEMBUATAN)">KEJURUTERAAN MEKANIKAL (PEMBUATAN)</option>
                <option value="KEJURUTERAAN MEKANIKAL (PEMBUNGKUSAN)">KEJURUTERAAN MEKANIKAL (PEMBUNGKUSAN)</option>
                <option value="KEJURUTERAAN MEKANIKAL (PEMESINAN)">KEJURUTERAAN MEKANIKAL (PEMESINAN)</option>
                <option value="KEJURUTERAAN MEKANIKAL (PENGELUARAN)">KEJURUTERAAN MEKANIKAL (PENGELUARAN)</option>
                <option value="KEJURUTERAAN MEKANIKAL (PENYAMAN UDARA DAN PENYEJUK-BEKUAN)">KEJURUTERAAN MEKANIKAL
                  (PENYAMAN UDARA DAN PENYEJUK-BEKUAN)</option>
                <option value="KEJURUTERAAN MEKANIKAL (PERKILANGAN)">KEJURUTERAAN MEKANIKAL (PERKILANGAN)</option>
                <option value="KEJURUTERAAN MEKANIKAL (PERTANIAN)">KEJURUTERAAN MEKANIKAL (PERTANIAN)</option>
                <option value="KEJURUTERAAN MEKANIKAL (PETROLEUM)">KEJURUTERAAN MEKANIKAL (PETROLEUM)</option>
                <option value="KEJURUTERAAN MEKANIKAL (REKABENTUK INOVASI)">KEJURUTERAAN MEKANIKAL (REKABENTUK INOVASI)
                </option>
                <option value="KEJURUTERAAN MEKANIKAL (REKABENTUK PRODUK)">KEJURUTERAAN MEKANIKAL (REKABENTUK PRODUK)
                </option>
                <option value="KEJURUTERAAN MEKANIKAL (REKABENTUK)">KEJURUTERAAN MEKANIKAL (REKABENTUK)</option>
                <option value="KEJURUTERAAN MEKANIKAL (STRUKTUR DAN BAHAN)">KEJURUTERAAN MEKANIKAL (STRUKTUR DAN BAHAN)
                </option>
                <option value="KEJURUTERAAN MEKANIKAL (TERMAL-BENDALIR)">KEJURUTERAAN MEKANIKAL (TERMAL-BENDALIR)
                </option>
                <option value="KEJURUTERAAN MEKANIKAL - INDUSTRI">KEJURUTERAAN MEKANIKAL - INDUSTRI</option>
                <option value="KEJURUTERAAN MEKANIKAL DGN KEMAHIRAN SERTA PENDIDIKAN">KEJURUTERAAN MEKANIKAL DGN
                  KEMAHIRAN SERTA PENDIDIKAN</option>
                <option value="KEJURUTERAAN MEKANIKAL LUKISAN DAN REKABENTUK">KEJURUTERAAN MEKANIKAL LUKISAN DAN
                  REKABENTUK</option>
                <option value="KEJURUTERAAN MEKANIKAL SERTA PENDIDIKAN">KEJURUTERAAN MEKANIKAL SERTA PENDIDIKAN</option>
                <option value="KEJURUTERAAN MEKANIKAL(KAWALAN TRAFIK UDARA)">KEJURUTERAAN MEKANIKAL(KAWALAN TRAFIK
                  UDARA)</option>
                <option value="KEJURUTERAAN MEKANIKAL(PEMBUATAN DAN FOUNDRI)">KEJURUTERAAN MEKANIKAL(PEMBUATAN DAN
                  FOUNDRI)</option>
                <option value="KEJURUTERAAN MEKANIKAL(PLASTIK)">V</option>
                <option value="KEJURUTERAAN MEKANIKAL(TEKSTIL)">KEJURUTERAAN MEKANIKAL(TEKSTIL)</option>
                <option value="KEJURUTERAAN MEKANIKAL, ELEKTRONIK DAN ELEKTRIK">KEJURUTERAAN MEKANIKAL, ELEKTRONIK DAN
                  ELEKTRIK</option>
                <option value="KEJURUTERAAN MEKATRONIK">KEJURUTERAAN MEKATRONIK</option>
                <option value="KEJURUTERAAN METALURGI">KEJURUTERAAN METALURGI</option>
                <option value="KEJURUTERAAN MIKROELEKTRONIK">KEJURUTERAAN MIKROELEKTRONIK</option>
                <option value="KEJURUTERAAN MIKROKOMPUTER">KEJURUTERAAN MIKROKOMPUTER</option>
                <option value="KEJURUTERAAN MINYAK DAN GAS">KEJURUTERAAN MINYAK DAN GAS</option>
                <option value="KEJURUTERAAN NUKLEAR">KEJURUTERAAN NUKLEAR</option>
                <option value="KEJURUTERAAN PEMBUATAN">KEJURUTERAAN PEMBUATAN</option>
                <option value="KEJURUTERAAN PEMBUATAN (ROBOTIK & AUTOMASI)">KEJURUTERAAN PEMBUATAN (ROBOTIK & AUTOMASI)
                </option>
                <option value="KEJURUTERAAN PENERBANGAN AERONAUTIK">KEJURUTERAAN PENERBANGAN AERONAUTIK</option>
                <option value="KEJURUTERAAN PENGANGKUTAN REL/ RAILWAY ENGINEERING">KEJURUTERAAN PENGANGKUTAN REL/
                  RAILWAY ENGINEERING</option>
                <option value="KEJURUTERAAN PENGELUARAN">KEJURUTERAAN PENGELUARAN</option>
                <option value="KEJURUTERAAN PENYELENGGARAAN HELIKOPTER">KEJURUTERAAN PENYELENGGARAAN HELIKOPTER</option>
                <option value="KEJURUTERAAN PENYELENGGARAAN PESAWAT TERBANG">KEJURUTERAAN PENYELENGGARAAN PESAWAT
                  TERBANG</option>
                <option value="KEJURUTERAAN PERHUBUNGAN">KEJURUTERAAN PERHUBUNGAN</option>
                <option value="KEJURUTERAAN PERISIAN">KEJURUTERAAN PERISIAN</option>
                <option value="KEJURUTERAAN PERISIAN (PERISIAN PENDIDIKAN)">KEJURUTERAAN PERISIAN (PERISIAN PENDIDIKAN)
                </option>
                <option value="KEJURUTERAAN PERKAPALAN">KEJURUTERAAN PERKAPALAN</option>
                <option value="KEJURUTERAAN PERKHIDMATAN BANGUNAN">KEJURUTERAAN PERKHIDMATAN BANGUNAN</option>
                <option value="KEJURUTERAAN PERTANIAN">KEJURUTERAAN PERTANIAN</option>
                <option value="KEJURUTERAAN PERTANIAN & BIOSISTEM">KEJURUTERAAN PERTANIAN & BIOSISTEM</option>
                <option value="KEJURUTERAAN PERUSAHAAN/INDUSTRI">KEJURUTERAAN PERUSAHAAN/INDUSTRI</option>
                <option value="KEJURUTERAAN PETROLEUM/GAS ASLI">KEJURUTERAAN PETROLEUM/GAS ASLI</option>
                <option value="KEJURUTERAAN POLIMER">KEJURUTERAAN POLIMER</option>
                <option value="KEJURUTERAAN PROSES (PETROKIMIA)">KEJURUTERAAN PROSES (PETROKIMIA)</option>
                <option value="KEJURUTERAAN RANGKA (STRUKTUR)">KEJURUTERAAN RANGKA (STRUKTUR)</option>
                <option value="KEJURUTERAAN REKABENTUK DAN PEMBUATAN AUTOMOTIF">KEJURUTERAAN REKABENTUK DAN PEMBUATAN
                  AUTOMOTIF</option>
                <option value="KEJURUTERAAN SEL FUEL">KEJURUTERAAN SEL FUEL</option>
                <option value="KEJURUTERAAN SENIBINA">KEJURUTERAAN SENIBINA</option>
                <option value="KEJURUTERAAN SERAMIK">KEJURUTERAAN SERAMIK</option>
                <option value="KEJURUTERAAN SISTEM ELEKTRONIK">KEJURUTERAAN SISTEM ELEKTRONIK</option>
                <option value="KEJURUTERAAN SISTEM PEMBUATAN(MANUFACTURING SYSTEM ENGINEER)">KEJURUTERAAN SISTEM
                  PEMBUATAN(MANUFACTURING SYSTEM ENGINEER)</option>
                <option value="KEJURUTERAAN SISTEM SIMULASI DAN KAWALAN">KEJURUTERAAN SISTEM SIMULASI DAN KAWALAN
                </option>
                <option value="KEJURUTERAAN STRUKTUR DAN SUMBER AIR">KEJURUTERAAN STRUKTUR DAN SUMBER AIR</option>
                <option value="KEJURUTERAAN SUMBER MINERAL">KEJURUTERAAN SUMBER MINERAL</option>
                <option value="KEJURUTERAAN TEKNOLOGI">KEJURUTERAAN TEKNOLOGI</option>
                <option value="KEJURUTERAAN TEKNOLOGI (KELESTARIAN TENAGA DAN PENGAGIHAN KUASA)">KEJURUTERAAN TEKNOLOGI
                  (KELESTARIAN TENAGA DAN PENGAGIHAN KUASA)</option>
                <option value="KEJURUTERAAN TEKNOLOGI (MULTIMEDIA)">KEJURUTERAAN TEKNOLOGI (MULTIMEDIA)</option>
                <option value="KEJURUTERAAN TEKNOLOGI MAKLUMAT">KEJURUTERAAN TEKNOLOGI MAKLUMAT</option>
                <option value="KEJURUTERAAN TEKNOLOGI MAKLUMAT/SISTEM MAKLUMAT">KEJURUTERAAN TEKNOLOGI MAKLUMAT/SISTEM
                  MAKLUMAT</option>
                <option value="KEJURUTERAAN TEKNOLOGI PEMBUATAN">KEJURUTERAAN TEKNOLOGI PEMBUATAN</option>
                <option value="KEJURUTERAAN TELEKOMUNIKASI">KEJURUTERAAN TELEKOMUNIKASI</option>
                <option value="KEJURUTERAAN UKUR TANAH">KEJURUTERAAN UKUR TANAH</option>
                <option value="KEMAHIRAN HIDUP">KEMAHIRAN HIDUP</option>
                <option value="KENURUTERAAN ELEKTRONIK DAN TELEKOMUNIKASI">KENURUTERAAN ELEKTRONIK DAN TELEKOMUNIKASI
                </option>
                <option value="KEPOLISAN DAN PENYIASATAN">KEPOLISAN DAN PENYIASATAN</option>
                <option value="KERJA SOSIAL">KERJA SOSIAL</option>
                <option value="KERJA SOSIAL PERUBATAN">KERJA SOSIAL PERUBATAN</option>
                <option value="KESELAMATAN DAN KESIHATAN PEKERJAAN">KESELAMATAN DAN KESIHATAN PEKERJAAN</option>
                <option value="KESELAMATAN PROSES DAN PENCEGAHAN KEHILANGAN">KESELAMATAN PROSES DAN PENCEGAHAN
                  KEHILANGAN</option>
                <option value="KESELAMATAN SISTEM KOMPUTER">KESELAMATAN SISTEM KOMPUTER</option>
                <option value="KESETIAUSAHAAN EKSEKUTIF">KESETIAUSAHAAN EKSEKUTIF</option>
                <option value="KESETIAUSAHAAN UNDANG-UNDANG">KESETIAUSAHAAN UNDANG-UNDANG</option>
                <option value="KESIHATAN DAN KESELAMATAN PERSEKITARAN">KESIHATAN DAN KESELAMATAN PERSEKITARAN
                <option>
                <option value="KESIHATAN HAIWAN & PENTERNAKAN">KESIHATAN HAIWAN & PENTERNAKAN</option>
                <option value="KESIHATAN PEKERJAAN DAN KESELAMATAN">KESIHATAN PEKERJAAN DAN KESELAMATAN</option>
                <option value="KESIHATAN PERGIGIAN AWAM">KESIHATAN PERGIGIAN AWAM</option>
                <option value="KESIHATAN PERSEKITARAN">KESIHATAN PERSEKITARAN</option>
                <option value="KESUSASTERAAN">KESUSASTERAAN</option>
                <option value="KESUSASTERAAN ARAB">KESUSASTERAAN ARAB</option>
                <option value="KESUSASTERAAN INGGERIS">KESUSASTERAAN INGGERIS</option>
                <option value="KESUSASTERAAN MELAYU">KESUSASTERAAN MELAYU</option>
                <option value="KEUSAHAWANAN">KEUSAHAWANAN</option>
                <option value="KEUSAHAWANAN (HOSPITALITI)">KEUSAHAWANAN (HOSPITALITI)</option>
                <option value="KEUSAHAWANAN (KEUSAHAWANAN KESIHATAN)">KEUSAHAWANAN (KEUSAHAWANAN KESIHATAN)</option>
                <option value="KEUSAHAWANAN (LOGISTIK DAN PERNIAGAAN PENGEDARAN)">KEUSAHAWANAN (LOGISTIK DAN PERNIAGAAN
                  PENGEDARAN)</option>
                <option value="KEUSAHAWANAN (PELANCONGAN)">KEUSAHAWANAN (PELANCONGAN)</option>
                <option value="KEUSAHAWANAN (PERDAGANGAN)">KEUSAHAWANAN (PERDAGANGAN)</option>
                <option value="KEWANGAN">KEWANGAN</option>
                <option value="KEWANGAN ANTARABANGSA">KEWANGAN ANTARABANGSA</option>
                <option value="KEWANGAN ANTARABANGSA (EKONOMI KEWANGAN ANTARABANGSA)">KEWANGAN ANTARABANGSA (EKONOMI
                  KEWANGAN ANTARABANGSA)</option>
                <option value="KEWANGAN ANTARABANGSA (PERBANKAN ANTARABANGSA DAN LUAR PERSISIR)">KEWANGAN ANTARABANGSA
                  (PERBANKAN ANTARABANGSA DAN LUAR PERSISIR)</option>
                <option value="KEWANGAN DAN BANK">KEWANGAN DAN BANK</option>
                <option value="KEWANGAN DAN PERBANKAN ISLAM">KEWANGAN DAN PERBANKAN ISLAM</option>
                <option value="KEWANGAN DENGAN MULTIMEDIA">KEWANGAN DENGAN MULTIMEDIA</option>
                <option value="KEWANGAN ISLAM">KEWANGAN ISLAM</option>
                <option value="KEWANGAN SYARIAH">KEWANGAN SYARIAH</option>
                <option value="KEWARTAWANAN DAN SAINS POLITIK">KEWARTAWANAN DAN SAINS POLITIK</option>
                <option value="KIMIA">KIMIA</option>
                <option value="KIMIA (ANALISIS FORENSIK)">KIMIA (ANALISIS FORENSIK)</option>
                <option value="KIMIA ANALISA (ANALYTICAL CHEMISTRY)">KIMIA ANALISA (ANALYTICAL CHEMISTRY)</option>
                <option value="KIMIA ANALISIS DAN PERSEKITARAN">KIMIA ANALISIS DAN PERSEKITARAN</option>
                <option value="KIMIA GUNAAN (APPLIED CHEMISTRY)">KIMIA GUNAAN (APPLIED CHEMISTRY)</option>
                <option value="KIMIA INDUSTRI">KIMIA INDUSTRI</option>
                <option value="KIMIA PERUSAHAAN/PERINDUSTRIAN">KIMIA PERUSAHAAN/PERINDUSTRIAN</option>
                <option value="KIMIA PETROLEUM">KIMIA PETROLEUM</option>
                <option value="KIMIA SUMBER">KIMIA SUMBER</option>
                <option value="KIMIA TANAH">KIMIA TANAH</option>
                <option value="KIMIA-PERUBATAN">KIMIA-PERUBATAN</option>
                <option value="KNOWLEDGE MANAGEMENT">KNOWLEDGE MANAGEMENT</option>
                <option value="KOMPUTER DAN PENGURUSAN">KOMPUTER DAN PENGURUSAN</option>
                <option value="KOMPUTERAN INDUSTRI">KOMPUTERAN INDUSTRI</option>
                <option value="KOMUNIKASI">KOMUNIKASI</option>
                <option value="KOMUNIKASI (FILEM DAN PENYIARAN)">KOMUNIKASI (FILEM DAN PENYIARAN)</option>
                <option value="KOMUNIKASI (ORGANISASI)">KOMUNIKASI (ORGANISASI)R</option>
                <option value="KOMUNIKASI (PENGAJIAN SKRIN)">KOMUNIKASI (PENGAJIAN SKRIN)</option>
                <option value="KOMUNIKASI (RADIO & TELEVISYEN)">KOMUNIKASI (RADIO & TELEVISYEN)</option>
                <option value="KOMUNIKASI (TELIVISYEN DAN FILEM)">KOMUNIKASI (TELIVISYEN DAN FILEM)</option>
                <option value="KOMUNIKASI - PENGURUSAN KOMUNIKASI DAN POLISI">KOMUNIKASI - PENGURUSAN KOMUNIKASI DAN
                  POLISI</option>
                <option value="KOMUNIKASI ANTARAPERSONAL">KOMUNIKASI ANTARAPERSONAL</option>
                <option value="KOMUNIKASI DAN DASAR AWAM">KOMUNIKASI DAN DASAR AWAM</option>
                <option value="KOMUNIKASI DAN GEOGRAFI">KOMUNIKASI DAN GEOGRAFI</option>
                <option value="KOMUNIKASI DAN KESUSASTERAAN MELAYU">KOMUNIKASI DAN KESUSASTERAAN MELAYU</option>
                <option value="KOMUNIKASI DAN MEDIA">KOMUNIKASI DAN MEDIA</option>
                <option value="KOMUNIKASI DAN PENGAJIAN MEDIA">KOMUNIKASI DAN PENGAJIAN MEDIA</option>
                <option value="KOMUNIKASI DAN PENGAJIAN MELAYU">AKUKOMUNIKASI DAN PENGAJIAN MELAYU</option>
                <option value="KOMUNIKASI DAN PENGURUSAN MAKLUMAT">KOMUNIKASI DAN PENGURUSAN MAKLUMAT</option>
                <option value="KOMUNIKASI DAN PERSURATAN MELAYU">KOMUNIKASI DAN PERSURATAN MELAYU</option>
                <option value="KOMUNIKASI DAN PSIKOLOGI">KOMUNIKASI DAN PSIKOLOGI</option>
                <option value="KOMUNIKASI DAN SAINS POLITIK">KOMUNIKASI DAN SAINS POLITIK</option>
                <option value="KOMUNIKASI DAN SEJARAH">KOMUNIKASI DAN SEJARAH</option>
                <option value="KOMUNIKASI INSTRUKSIONAL DAN LATIHAN">KOMUNIKASI INSTRUKSIONAL DAN LATIHAN</option>
                <option value="KOMUNIKASI KEMANUSIAAN">KOMUNIKASI KEMANUSIAAN</option>
                <option value="KOMUNIKASI KORPORAT">KOMUNIKASI KORPORAT</option>
                <option value="KOMUNIKASI MASSA (KEWARTAWANAN)">KOMUNIKASI MASSA (KEWARTAWANAN)</option>
                <option value="KOMUNIKASI MASSA (PENERBITAN)">KOMUNIKASI MASSA (PENERBITAN)</option>
                <option value="KOMUNIKASI MASSA (PENGIKLANAN)">KOMUNIKASI MASSA (PENGIKLANAN)</option>
                <option value="KOMUNIKASI MASSA (PENYIARAN)">KOMUNIKASI MASSA (PENYIARAN)</option>
                <option value="KOMUNIKASI MASSA (PERHUBUNGAN AWAM)">KOMUNIKASI MASSA (PERHUBUNGAN AWAM)</option>
                <option value="KOMUNIKASI MEDIA BAHARU">KOMUNIKASI MEDIA BAHARU</option>
                <option value="KOMUNIKASI MULTIMEDIA">KOMUNIKASI MULTIMEDIA</option>
                <option value="KOMUNIKASI PEMBANGUNAN">KOMUNIKASI PEMBANGUNAN</option>
                <option value="KOMUNIKASI PEMUJUKAN">KOMUNIKASI PEMUJUKAN</option>
                <option value="KOMUNIKASI PEMUJUKAN & SAINS POLITIK">KOMUNIKASI PEMUJUKAN & SAINS POLITIK</option>
                <option value="KOMUNIKASI PENGURUSAN">KOMUNIKASI PENGURUSAN</option>
                <option value="KOMUNIKASI PENYIARAN ISLAM">KOMUNIKASI PENYIARAN ISLAM</option>
                <option value="KOMUNIKASI SELULAR">KOMUNIKASI SELULAR</option>
                <option value="KOMUNIKASI VISUAL">KOMUNIKASI VISUAL</option>
                <option value="KOMUNIKASI/SEBARAN AM">KOMUNIKASI/SEBARAN AM</option>
                <option value="KOORDINASI PEMBUATAN (CAD/CAM)">KOORDINASI PEMBUATAN (CAD/CAM)</option>
                <option value="KOSMETOLOGI">KOSMETOLOGI</option>
                <option value="KREATIF MULTIMEDIA">KREATIF MULTIMEDIA</option>
                <option value="KRIMINOLOGI">KRIMINOLOGI</option>
                <option value="KULTURA KEBUNAN (HORTICULTURE)">KULTURA KEBUNAN (HORTICULTURE)</option>
                <option value="LAND ECONOMICS">LAND ECONOMICS</option>
                <option value="LAND INFORMATION(SURVEYING)">LAND INFORMATION(SURVEYING)</option>
                <option value="LAND MANAGEMENT">LAND MANAGEMENT</option>
                <option value="LANDSCAPE ARCHITECTURE">LANDSCAPE ARCHITECTURE</option>
                <option value="LANDSKAP DAN PENGURUSAN NURSERI">LANDSKAP DAN PENGURUSAN NURSERI</option>
                <option value="LAW & PSYCHOLOGY">LAW & PSYCHOLOGY</option>
                <option value="LICENCE DE SCIENCE ET TECHNOLOGIES">LICENCE DE SCIENCE ET TECHNOLOGIESR</option>
                <option value="LINGUISTIK">LINGUISTIK</option>
                <option value="LINGUISTIK (PERANCIS)">LINGUISTIK (PERANCIS)</option>
                <option value="LINGUISTIK DAN EKONOMI">LINGUISTIK DAN EKONOMI</option>
                <option value="LINGUISTIK DAN KOMUNIKASI">LINGUISTIK DAN KOMUNIKASI</option>
                <option value="LINGUISTIK DAN PERSURATAN MELAYU">LINGUISTIK DAN PERSURATAN MELAYU</option>
                <option value="LINGUISTIK DAN PROGRAM KHAS EKONOMI">LINGUISTIK DAN PROGRAM KHAS EKONOMI</option>
                <option value="LINGUISTIK DAN PSIKOLOGI">LINGUISTIK DAN PSIKOLOGI</option>
                <option value="LINGUISTIK DAN SAINS POLITIK">LINGUISTIK DAN SAINS POLITIK</option>
                <option value="LINGUISTIK MELAYU">LINGUISTIK MELAYU</option>
                <option value="LINGUISTIK MELAYU,PENULISAN&KEWARTAWANAN">LINGUISTIK MELAYU,PENULISAN&KEWARTAWANAN
                </option>
                <option value="LINGUISTIK SOSIAL">LINGUISTIK SOSIAL</option>
                <option value="LOGISTIK DAN RANGKAIAN BEKALAN">LOGISTIK DAN RANGKAIAN BEKALAN</option>
                <option value="LONDON CHAMBER OF COMMERCE & INDUSTRIAL (LCCI)">LONDON CHAMBER OF COMMERCE & INDUSTRIAL
                  (LCCI)</option>
                <option value="LUKISAN SENIBINA">LUKISAN SENIBINA</option>
                <option value="MACHINE BUILDING & MAINTENANCE TECHNOLGY">MACHINE BUILDING & MAINTENANCE TECHNOLGY
                </option>
                <option value="MANUFACTURING ENGINEERING (TOOL AND DIE DESIGN)">MANUFACTURING ENGINEERING (TOOL AND DIE
                  DESIGN)</option>
                <option value="MANUFACTURING TECHNOLOGY">MANUFACTURING TECHNOLOGY</option>
                <option value="MARIN BIOLOGI">MARIN BIOLOGI</option>
                <option value="MARINE CARGO SURVEYING">MARINE CARGO SURVEYING</option>
                <option value="MARKETING AND FINANCE">MARKETING AND FINANCE</option>
                <option value="MATEMATIK">MATEMATIK</option>
                <option value="MATEMATIK , STATISTIK DAN KOMPUTER">MATEMATIK , STATISTIK DAN KOMPUTER</option>
                <option value="MATEMATIK DAN KOMPUTER SERTA PENDIDIKAN">MATEMATIK DAN KOMPUTER SERTA PENDIDIKAN</option>
                <option value="MATEMATIK DENGAN EKONOMI">MATEMATIK DENGAN EKONOMI</option>
                <option value="MATEMATIK GUNAAN">MATEMATIK GUNAAN</option>
                <option value="MATEMATIK INDUSTRI">MATEMATIK INDUSTRI</option>
                <option value="MATEMATIK KOMPUTASI">MATEMATIK KOMPUTASI</option>
                <option value="MATEMATIK KOMPUTERAN DAN INDUSTRI">MATEMATIK KOMPUTERAN DAN INDUSTRI</option>
                <option value="MATEMATIK PERNIAGAAN">MATEMATIK PERNIAGAAN</option>
                <option value="MATHEMATICS AND STATISTICS">MATHEMATICS AND STATISTICS</option>
                <option value="MECHANICAL DESIGN & PRODUCTION ENGINEERING COURCE">MECHANICAL DESIGN & PRODUCTION
                  ENGINEERING COURCE</option>
                <option value="MECHANICAL ENGINEERING AND INDUSTRIAL AUTOMATION">MECHANICAL ENGINEERING AND INDUSTRIAL
                  AUTOMATION</option>
                <option value="MEDIA DIGITAL">MEDIA DIGITAL</option>
                <option value="MEDIA DIGITAL (SENI DIGITAL)/SENI DIGITA">MEDIA DIGITAL (SENI DIGITAL)/SENI DIGITA
                </option>
                <option value="MEDIA INOVASI">MEDIA INOVASI</option>
                <option value="MEDIA INOVATION AND ENTREPRENEURSHIP">MEDIA INOVATION AND ENTREPRENEURSHIP</option>
                <option value="MEDIA INTERAKTIF">MEDIA INTERAKTIF</option>
                <option value="MEDICAL RADIATIONS">MEDICAL RADIATIONS</option>
                <option value="MEDICINE (PERUBATAN)">MEDICINE (PERUBATAN)</option>
                <option value="MELAYU DAN ARAB">MELAYU DAN ARAB</option>
                <option value="MEMPROSES DATA">MEMPROSES DATA</option>
                <option value="METALLURY AND WELDING">METALLURY AND WELDING</option>
                <option value="METEOROLOGI">METEOROLOGI</option>
                <option value="MIKROBIOLOGI">MIKROBIOLOGI</option>
                <option value="MIKROBIOLOGI DAN IMUNOGI">MIKROBIOLOGI DAN IMUNOGI</option>
                <option value="MINING ENGINEERING">MINING ENGINEERING</option>
                <option value="MOLECULAR BIOLOGY">MOLECULAR BIOLOGY</option>
                <option value="MUAMALAT">MUAMALAT</option>
                <option value="MULTIMEDIA">MULTIMEDIA</option>
                <option value="MULTIMEDIA (PERNIAGAAN & PENGKOMPUTERAN)">MULTIMEDIA (PERNIAGAAN & PENGKOMPUTERAN)
                </option>
                <option value="MULTIMEDIA DAN KOMUNIKASI">MULTIMEDIA DAN KOMUNIKASI</option>
                <option value="MULTIMEDIA DENGAN ANIMASI">MULTIMEDIA DENGAN ANIMASI</option>
                <option value="MULTIMEDIA KREATIF (PENGIKLANAN)">MULTIMEDIA KREATIF (PENGIKLANAN)</option>
                <option value="MULTIMEDIA MEDIA INNOVATION AND MANAGEMENT">MULTIMEDIA MEDIA INNOVATION AND MANAGEMENT
                </option>
                <option value="MUZIK">MUZIK</option>
                <option value="MUZIK KOMPOSISI">MUZIK KOMPOSISI</option>
                <option value="NAUTICAL SCIENCE">NAUTICAL SCIENCE</option>
                <option value="NETWORK AND MOBILE COMPUTING">NETWORK AND MOBILE COMPUTING</option>
                <option value="NEUROSCIENCE">NEUROSCIENCE</option>
                <option value="NEW MEDIA DESIGN">NEW MEDIA DESIGN</option>
                <option value="NURSING PRACTISE DEVELOPMENT">NURSING PRACTISE DEVELOPMENT</option>
                <option value="NUTRITION">NUTRITION</option>
                <option value="OBSTETRICS & GYNAECOLOGY">OBSTETRICS & GYNAECOLOGY</option>
                <option value="OCCUPATIONAL THERAPHY (PULIH CARA KERJA)">OCCUPATIONAL THERAPHY (PULIH CARA KERJA)
                </option>
                <option value="OFFICE ADMINISTRATION">OFFICE ADMINISTRATION</option>
                <option value="OLEOKIMIA">OLEOKIMIA</option>
                <option value="OPERASI MARITIM">OPERASI MARITIM</option>
                <option value="OPERASI PERHOTELAN">OPERASI PERHOTELAN</option>
                <option value="OPERASI/PENGELUARAN DAN EKONOMI">OPERASI/PENGELUARAN DAN EKONOMI</option>
                <option value="OPTHALMOLOGY/OPTOMETRY">OPTHALMOLOGY/OPTOMETRY</option>
                <option value="OPTOMETRI">OPTOMETRI</option>
                <option value="ORGANISASI & TENAGA MANUSIA">ORGANISASI & TENAGA MANUSIA</option>
                <option value="P.C. MAINTENANCE AND SUPPORT">P.C. MAINTENANCE AND SUPPORT</option>
                <option value="PAEDIATRICS (PERUBATAN KANAK-KANAK)">PAEDIATRICS (PERUBATAN KANAK-KANAK)</option>
                <option value="PARASITOLOGY">PARASITOLOGY</option>
                <option value="PARASITOLOGY & ENTOMOLOGY">PARASITOLOGY & ENTOMOLOGY</option>
                <option value="PASTRI">PASTRI</option>
                <option value="PASTRI & BAKERI">PASTRI & BAKERI</option>
                <option value="PATHOLOGY (ILMU KAJI PENYAKIT)">PATHOLOGY (ILMU KAJI PENYAKIT)</option>
                <option value="PATOLOGI TUMBUHAN">PATOLOGI TUMBUHAN</option>
                <option value="PELABURAN HARTANAH (PROPERTY INVESTMENT)">PELABURAN HARTANAH (PROPERTY INVESTMENT)
                </option>
                <option value="PELANCONGAN">PELANCONGAN</option>
                <option value="PELANCONGAN DAN PENGEMBARAAN">PELANCONGAN DAN PENGEMBARAAN</option>
                <option value="PELUKIS PELAN SENIBINA">PELUKIS PELAN SENIBINA</option>
                <option value="PEMASANGAN DAN PENYELENGGARAAN ELEKTRIK VOLTAN RENDAH">PEMASANGAN DAN PENYELENGGARAAN
                  ELEKTRIK VOLTAN RENDAH</option>
                <option value="PEMASANGAN ELEKTRIK">PEMASANGAN ELEKTRIK</option>
                <option value="PEMASARAN">PEMASARAN</option>
                <option value="PEMASARAN ANTARABANGSA">PEMASARAN ANTARABANGSA</option>
                <option value="PEMASARAN DENGAN MULTIMEDIA">PEMASARAN DENGAN MULTIMEDIA</option>
                <option value="PEMB PERISIAN (INTERNET & MULTIMEDIA)">PEMB PERISIAN (INTERNET & MULTIMEDIA)</option>
                <option value="PEMBANGUNAN BELIA DAN KOMUNITI">PEMBANGUNAN BELIA DAN KOMUNITI</option>
                <option value="PEMBANGUNAN DAN PENGELUARAN">PEMBANGUNAN DAN PENGELUARAN</option>
                <option value="PEMBANGUNAN DESA">PEMBANGUNAN DESA</option>
                <option value="PEMBANGUNAN LUAR BANDAR">PEMBANGUNAN LUAR BANDAR</option>
                <option value="PEMBANGUNAN MANUSIA">PEMBANGUNAN MANUSIA</option>
                <option value="PEMBANGUNAN MANUSIA DAN PENGURUSAN">PEMBANGUNAN MANUSIA DAN PENGURUSAN</option>
                <option value="PEMBANGUNAN SUMBER MANUSIA">PEMBANGUNAN SUMBER MANUSIA</option>
                <option value="PEMBANGUNAN WILAYAH">PEMBANGUNAN WILAYAH</option>
                <option value="PEMBANTU AHLI TEKNOLOGI MEKATRONIK">PEMBANTU AHLI TEKNOLOGI MEKATRONIK</option>
                <option value="PEMBANTU PERUBATAN">PEMBANTU PERUBATAN</option>
                <option value="PEMODELAN MATEMATIK">PEMODELAN MATEMATIK</option>
                <option value="PEMODELAN MATEMATIK & PEMODELAN KOMPUTER">PEMODELAN MATEMATIK & PEMODELAN KOMPUTER
                </option>
                <option value="PEMPROSESAN DAN KAWALAN MUTU MAKANAN">PEMPROSESAN DAN KAWALAN MUTU MAKANAN</option>
                <option value="PEMPROSESAN MAKANAN (PENGELUARAN)">PEMPROSESAN MAKANAN (PENGELUARAN)</option>
                <option value="PEMULIHAN">PEMULIHAN</option>
                <option value="PEMULIHAN ANGGOTA(JURUPULIH ANGGOTA)">PEMULIHAN ANGGOTA(JURUPULIH ANGGOTA)</option>
                <option value="PEMULIHAN PERUBATAN (REHABILITATION MEDICINE)">PEMULIHAN PERUBATAN (REHABILITATION
                  MEDICINE)</option>
                <option value="PEMULIHARAAN ALAM SEKITAR">PEMULIHARAAN ALAM SEKITAR</option>
                <option value="PEMULIHARAAN DAN PENGURUSAN BIODIVERSITI">PEMULIHARAAN DAN PENGURUSAN BIODIVERSITI
                </option>
                <option value="PENCETAKAN/TEKNOLOGI PERCETAKAN">PENCETAKAN/TEKNOLOGI PERCETAKAN</option>
                <option value="PENDIDIKAN">PENDIDIKAN</option>
                <option value="PENDIDIKAN (BAHASA MELAYU)">PENDIDIKAN (BAHASA MELAYU)</option>
                <option value="PENDIDIKAN (BAHASA TAMIL)">PENDIDIKAN (BAHASA TAMIL)</option>
                <option value="PENDIDIKAN (BIMBINGAN DAN KAUNSELING)">PENDIDIKAN (BIMBINGAN DAN KAUNSELING)</option>
                <option value="PENDIDIKAN (EKONOMI RUMAH TANGGA)">PENDIDIKAN (EKONOMI RUMAH TANGGA)</option>
                <option value="PENDIDIKAN (GEOGRAFI)">PENDIDIKAN (GEOGRAFI)</option>
                <option value="PENDIDIKAN (KEJURUTERAAN ELEKTRIK)">PENDIDIKAN (KEJURUTERAAN ELEKTRIK)</option>
                <option value="PENDIDIKAN (KEJURUTERAAN MEKANIK)">PENDIDIKAN (KEJURUTERAAN MEKANIK)</option>
                <option value="PENDIDIKAN (KESUSASTERAAN MELAYU)">PENDIDIKAN (KESUSASTERAAN MELAYU)</option>
                <option value="PENDIDIKAN (KEUSAHAWANAN DAN PERDAGANGAN)">PENDIDIKAN (KEUSAHAWANAN DAN PERDAGANGAN)
                </option>
                <option value="PENDIDIKAN (KIMIA)">PENDIDIKAN (KIMIA)</option>
                <option value="PENDIDIKAN (MATEMATIK SEKOLAH RENDAH)">PENDIDIKAN (MATEMATIK SEKOLAH RENDAH)</option>
                <option value="PENDIDIKAN (MATEMATIK)">PENDIDIKAN (MATEMATIK)</option>
                <option value="PENDIDIKAN (MULTIMEDIA)">PENDIDIKAN (MULTIMEDIA)</option>
                <option value="PENDIDIKAN (MUZIK)">PENDIDIKAN (MUZIK)</option>
                <option value="PENDIDIKAN (PENGAJIAN PRASEKOLAH)">PENDIDIKAN (PENGAJIAN PRASEKOLAH)</option>
                <option value="PENDIDIKAN (PENGAJIAN TAMIL DAN PENDIDIKAN SENI VISUAL)">PENDIDIKAN (PENGAJIAN TAMIL DAN
                  PENDIDIKAN SENI VISUAL)</option>
                <option value="PENDIDIKAN (PENGURUSAN PENDIDIKAN)">PENDIDIKAN (PENGURUSAN PENDIDIKAN)</option>
                <option value="PENDIDIKAN (PENGURUSAN PERNIAGAAN)">PENDIDIKAN (PENGURUSAN PERNIAGAAN)</option>
                <option value="PENDIDIKAN (PENTADBIRAN PENDIDIKAN)">PENDIDIKAN (PENTADBIRAN PENDIDIKAN)</option>
                <option value="PENDIDIKAN (PERAKAUNAN)">PENDIDIKAN (PERAKAUNAN)</option>
                <option value="PENDIDIKAN (SAINS KEJURULATIHAN)">PENDIDIKAN (SAINS KEJURULATIHAN)</option>
                <option value="PENDIDIKAN (SAINS PERTANIAN)">PENDIDIKAN (SAINS PERTANIAN)</option>
                <option value="PENDIDIKAN (SAINS RUMAHTANGGA)">PENDIDIKAN (SAINS RUMAHTANGGA)</option>
                <option value="PENDIDIKAN (SAINS SUKAN)">PENDIDIKAN (SAINS SUKAN)</option>
                <option value="PENDIDIKAN (SAINS)">PENDIDIKAN (SAINS)</option>
                <option value="PENDIDIKAN (SOSIOLOGI PENDIDIKAN)">PENDIDIKAN (SOSIOLOGI PENDIDIKAN)</option>
                <option value="PENDIDIKAN (TEKNOLOGI MAKLUMAT)">PENDIDIKAN (TEKNOLOGI MAKLUMAT)</option>
                <option value="PENDIDIKAN (TEKNOLOGI REKABENTUK BERKOMPUTER)">PENDIDIKAN (TEKNOLOGI REKABENTUK
                  BERKOMPUTER)</option>
                <option value="PENDIDIKAN (TESL)">PENDIDIKAN (TESL)</option>
                <option value="PENDIDIKAN AWAL KANAK-KANAK">PENDIDIKAN AWAL KANAK-KANAK</option>
                <option value="PENDIDIKAN DENGAN SAINS SOSIAL">PENDIDIKAN DENGAN SAINS SOSIAL</option>
                <option value="PENDIDIKAN EKONOMI">PENDIDIKAN EKONOMI</option>
                <option value="PENDIDIKAN ISLAM">PENDIDIKAN ISLAM</option>
                <option value="PENDIDIKAN ISLAM DAN AL-QURAN">PENDIDIKAN ISLAM DAN AL-QURAN</option>
                <option value="PENDIDIKAN JASMANI">PENDIDIKAN JASMANI</option>
                <option value="PENDIDIKAN KESIHATAN">PENDIDIKAN KESIHATAN</option>
                <option value="PENDIDIKAN KHAS">PENDIDIKAN KHAS</option>
                <option value="PENDIDIKAN MORAL">PENDIDIKAN MORAL</option>
                <option value="PENDIDIKAN MUZIK">PENDIDIKAN MUZIK</option>
                <option value="PENDIDIKAN PEMULIHAN PENDIDIKAN RENDAH">PENDIDIKAN PEMULIHAN PENDIDIKAN RENDAH</option>
                <option value="PENDIDIKAN SAINS FIZIK">PENDIDIKAN SAINS FIZIK</option>
                <option value="PENDIDIKAN SEJARAH">PENDIDIKAN SEJARAH</option>
                <option value="PENDIDIKAN SENI VISUAL">PENDIDIKAN SENI VISUAL</option>
                <option value="PENDIDIKAN TEKNIK DAN VOKASIONAL">PENDIDIKAN TEKNIK DAN VOKASIONAL</option>
                <option value="PENDIDIKAN VOKASIONAL (ELEKTRIK & ELEKTRONIK)">PENDIDIKAN VOKASIONAL (ELEKTRIK &
                  ELEKTRONIK)</option>
                <option value="PENDIDIKAN VOKASIONAL (KATERING)">PENDIDIKAN VOKASIONAL (KATERING)</option>
                <option value="PENDIDIKAN VOKASIONAL (KIMPALAN DAN FABRIKASI LOGAM)">PENDIDIKAN VOKASIONAL (KIMPALAN DAN
                  FABRIKASI LOGAM)</option>
                <option value="PENDIDIKAN VOKASIONAL (PEMESINAN AM)">PENDIDIKAN VOKASIONAL (PEMESINAN AM)</option>
                <option value="PENDIDIKAN VOKASIONAL (PENYEJUKBEKUAN DAN PENYAMANAN UDARA)">PENDIDIKAN VOKASIONAL
                  (PENYEJUKBEKUAN DAN PENYAMANAN UDARA)</option>
                <option value="PENGAJAR VOKASIONAL TEKNOLOGI ALAT DAN ACUAN">PENGAJAR VOKASIONAL TEKNOLOGI ALAT DAN
                  ACUAN</option>
                <option value="PENGAJAR VOKASIONAL TEKNOLOGI BINAAN">PENGAJAR VOKASIONAL TEKNOLOGI BINAAN</option>
                <option value="PENGAJAR VOKASIONAL TEKNOLOGI KEJURUTERAAN PEMESINAN">PENGAJAR VOKASIONAL TEKNOLOGI
                  KEJURUTERAAN PEMESINAN</option>
                <option value="PENGAJAR VOKASIONAL TEKNOLOGI KEJURUTERAAN PENGELUARAN">PENGAJAR VOKASIONAL TEKNOLOGI
                  KEJURUTERAAN PENGELUARAN</option>
                <option value="PENGAJAR VOKASIONAL TEKNOLOGI KOMPUTER (RANGKAIAN)">PENGAJAR VOKASIONAL TEKNOLOGI
                  KOMPUTER (RANGKAIAN)</option>
                <option value="PENGAJAR VOKASIONAL TEKNOLOGI TELEKOMUNIKASI">PENGAJAR VOKASIONAL TEKNOLOGI
                  TELEKOMUNIKASI</option>
                <option value="PENGAJARAN (PENDIDIKAN RENDAH)">PENGAJARAN (PENDIDIKAN RENDAH)</option>
                <option value="PENGAJARAN BAHASA MALAYSIA SBG. BAHASA PERTAMA">PENGAJARAN BAHASA MALAYSIA SBG. BAHASA
                  PERTAMA</option>
                <option value="PENGAJIAN AKIDAH DAN AGAMA">PENGAJIAN AKIDAH DAN AGAMA</option>
                <option value="PENGAJIAN AL QURAN DAN QIRAAT">PENGAJIAN AL QURAN DAN QIRAAT</option>
                <option value="PENGAJIAN AL-QURAN & AL-SUNNAH">PENGAJIAN AL-QURAN & AL-SUNNAH</option>
                <option value="PENGAJIAN ALAM SEKITAR">PENGAJIAN ALAM SEKITAR</option>
                <option value="PENGAJIAN ANTARABANGSA DAN STRATEGI">PENGAJIAN ANTARABANGSA DAN STRATEGI</option>
                <option value="PENGAJIAN ASIA TENGGARA">PENGAJIAN ASIA TENGGARA</option>
                <option value="PENGAJIAN ASIA TIMUR">PENGAJIAN ASIA TIMUR</option>
                <option value="PENGAJIAN BAHASA CINA">PENGAJIAN BAHASA CINA</option>
                <option value="PENGAJIAN BAHASA CINA DAN SEJARAH">PENGAJIAN BAHASA CINA DAN SEJARAH</option>
                <option value="PENGAJIAN BAHASA GUNAAN (BAHASA INGGERIS KOMUNIKASI PROFESIONAL)">PENGAJIAN BAHASA GUNAAN
                  (BAHASA INGGERIS KOMUNIKASI PROFESIONAL)</option>
                <option value="PENGAJIAN BAHASA GUNAAN (BAHASA MELAYU KOMUNIKASI PROFESIONAL)">PENGAJIAN BAHASA GUNAAN
                  (BAHASA MELAYU KOMUNIKASI PROFESIONAL)</option>
                <option value="PENGAJIAN BAHASA INGGERIS">PENGAJIAN BAHASA INGGERIS</option>
                <option value="PENGAJIAN BAHASA MALAYSIA & BAHASA INGGERIS">PENGAJIAN BAHASA MALAYSIA & BAHASA INGGERIS
                </option>
                <option value="PENGAJIAN BAHASA MODEN">PENGAJIAN BAHASA MODEN</option>
                <option value="PENGAJIAN BANGUNAN">PENGAJIAN BANGUNAN</option>
                <option value="PENGAJIAN BANK">PENGAJIAN BANK</option>
                <option value="PENGAJIAN BOLA SEPAK">PENGAJIAN BOLA SEPAK</option>
                <option value="PENGAJIAN DAKWAH & KEPIMPINAN">PENGAJIAN DAKWAH & KEPIMPINAN</option>
                <option value="PENGAJIAN DESA DAN BANDAR">PENGAJIAN DESA DAN BANDAR</option>
                <option value="PENGAJIAN INDIA">PENGAJIAN INDIA</option>
                <option value="PENGAJIAN INDIA & ANTROPOLOGI/SOSIOLOGI">PENGAJIAN INDIA & ANTROPOLOGI/SOSIOLOGI</option>
                <option value="PENGAJIAN INGGERIS">PENGAJIAN INGGERIS</option>
                <option value="PENGAJIAN ISLAM">AKUAKULTUR</option>
                <option value="PENGAJIAN ISLAM (DAKWAH)">PENGAJIAN ISLAM (DAKWAH)</option>
                <option value="PENGAJIAN ISLAM (PEMBANGUNAN SUMBER MANUSIA)">PENGAJIAN ISLAM (PEMBANGUNAN SUMBER
                  MANUSIA)</option>
                <option value="PENGAJIAN ISLAM (PENGAJIAN ARAB DAN TAMADUN ISLAM)">PENGAJIAN ISLAM (PENGAJIAN ARAB DAN
                  TAMADUN ISLAM)</option>
                <option value="PENGAJIAN ISLAM (PENGURUSAN ISLAM)">PENGAJIAN ISLAM (PENGURUSAN ISLAM)</option>
                <option value="PENGAJIAN ISLAM (SYARIAH)">PENGAJIAN ISLAM (SYARIAH)</option>
                <option value="PENGAJIAN ISLAM (USULUDDIN)">PENGAJIAN ISLAM (USULUDDIN)</option>
                <option value="PENGAJIAN ISLAM - PENTADBIRAN ISLAM">PENGAJIAN ISLAM - PENTADBIRAN ISLAM</option>
                <option value="PENGAJIAN ISLAM DAN BAHASA ARAB">PENGAJIAN ISLAM DAN BAHASA ARAB</option>
                <option value="PENGAJIAN ISLAM DAN PENDIDIKAN BAHASA ARAB">PENGAJIAN ISLAM DAN PENDIDIKAN BAHASA ARAB
                </option>
                <option value="PENGAJIAN ISLAM DAN PENGAJIAN MELAYU">PENGAJIAN ISLAM DAN PENGAJIAN MELAYU</option>
                <option value="PENGAJIAN ISLAM DAN SAINS">PENGAJIAN ISLAM DAN SAINS</option>
                <option value="PENGAJIAN ISLAM DAN SAINS KONTEMPORARI">PENGAJIAN ISLAM DAN SAINS KONTEMPORARI</option>
                <option value="PENGAJIAN ISLAM DAN SEJARAH">PENGAJIAN ISLAM DAN SEJARAH</option>
                <option value="PENGAJIAN ISLAM DAN TEKNOLOGI MAKLUMAT">PENGAJIAN ISLAM DAN TEKNOLOGI MAKLUMAT</option>
                <option value="PENGAJIAN ISLAM DENGAN PENDIDIKAN">PENGAJIAN ISLAM DENGAN PENDIDIKAN</option>
                <option value="PENGAJIAN ISLAM DGN. TEKNOLOGI MAKLUMAT">PENGAJIAN ISLAM DGN. TEKNOLOGI MAKLUMAT</option>
                <option value="PENGAJIAN ISLAM PENGKHUSUSAN BAHASA ARAB & TAMADUN ISLAM">PENGAJIAN ISLAM PENGKHUSUSAN
                  BAHASA ARAB & TAMADUN ISLAM</option>
                <option value="PENGAJIAN JENAYAH KOMPUTER">PENGAJIAN JENAYAH KOMPUTER</option>
                <option value="PENGAJIAN JEPUN">PENGAJIAN JEPUN</option>
                <option value="PENGAJIAN KEPENDUDUKAN & SEJARAH">PENGAJIAN KEPENDUDUKAN & SEJARAH</option>
                <option value="PENGAJIAN KEPENDUDUKAN/DEMOGRAPHY">PENGAJIAN KEPENDUDUKAN/DEMOGRAPHY</option>
                <option value="PENGAJIAN KOMPUTER">PENGAJIAN KOMPUTER</option>
                <option value="PENGAJIAN KOREA">PENGAJIAN KOREA</option>
                <option value="PENGAJIAN MAKANAN">PENGAJIAN MAKANAN</option>
                <option value="PENGAJIAN MAKLUMAT">PENGAJIAN MAKLUMAT</option>
                <option value="PENGAJIAN MAKLUMAT (PENGURUSAN REKOD)">PENGAJIAN MAKLUMAT (PENGURUSAN REKOD)</option>
                <option value="PENGAJIAN MAKLUMAT(P'URUSAN PUSAT SUMBER)">PENGAJIAN MAKLUMAT(P'URUSAN PUSAT SUMBER)
                </option>
                <option value="PENGAJIAN MAKLUMAT(PENGURUSAN PERPUSTAKAAN & MAKLUMAT)">PENGAJIAN MAKLUMAT(PENGURUSAN
                  PERPUSTAKAAN & MAKLUMAT)</option>
                <option value="PENGAJIAN MAKLUMAT(PENGURUSAN SISTEM MAKLUMAT)">PENGAJIAN MAKLUMAT(PENGURUSAN SISTEM
                  MAKLUMAT)</option>
                <option value="PENGAJIAN MALAYSIA DENGAN PENDIDIKAN">PENGAJIAN MALAYSIA DENGAN PENDIDIKAN</option>
                <option value="PENGAJIAN MEDIA">PENGAJIAN MEDIA</option>
                <option value="PENGAJIAN MEDIA & PENGAJIAN ANTARABANGSA">PENGAJIAN MEDIA & PENGAJIAN ANTARABANGSA
                </option>
                <option value="PENGAJIAN MEDIA DAN SEJARAH">PENGAJIAN MEDIA DAN SEJARAH</option>
                <option value="PENGAJIAN MEDIA ISLAM">PENGAJIAN MEDIA ISLAM</option>
                <option value="PENGAJIAN MELAYU">PENGAJIAN MELAYU</option>
                <option value="PENGAJIAN MELAYU & ANTROPOLOGI/SOSIOLOGI">APENGAJIAN MELAYU & ANTROPOLOGI/SOSIOLOGI
                </option>
                <option value="PENGAJIAN MELAYU (KESENIAN MELAYU)">PENGAJIAN MELAYU (KESENIAN MELAYU)</option>
                <option value="PENGAJIAN MELAYU (SENI DAN BUDAYA)">PENGAJIAN MELAYU (SENI DAN BUDAYA)</option>
                <option value="PENGAJIAN MELAYU DAN PENGAJIAN GANDER">PENGAJIAN MELAYU DAN PENGAJIAN GANDER</option>
                <option value="PENGAJIAN MUAMALAT">PENGAJIAN MUAMALAT</option>
                <option value="PENGAJIAN NAUTIKA">PENGAJIAN NAUTIKA</option>
                <option value="PENGAJIAN PEMBANGUNAN & PENGURUSAN AWAM">PENGAJIAN PEMBANGUNAN & PENGURUSAN AWAM</option>
                <option value="PENGAJIAN PEMBANGUNAN & PENTADBIRAN SOSIAL">PENGAJIAN PEMBANGUNAN & PENTADBIRAN SOSIAL
                </option>
                <option value="PENGAJIAN PEMBANGUNAN DAN KOMUNIKASI">PENGAJIAN PEMBANGUNAN DAN KOMUNIKASI</option>
                <option value="PENGAJIAN PEMBANGUNAN DAN PENGURUSAN AM">PENGAJIAN PEMBANGUNAN DAN PENGURUSAN AM</option>
                <option value="PENGAJIAN PEMBANGUNAN MANUSIA">PENGAJIAN PEMBANGUNAN MANUSIA</option>
                <option value="PENGAJIAN PEMBANGUNAN/KAJIAN PEMBANGUNAN">PENGAJIAN PEMBANGUNAN/KAJIAN PEMBANGUNAN
                </option>
                <option value="PENGAJIAN PENGGUNA">PENGAJIAN PENGGUNA</option>
                <option value="PENGAJIAN PENTADBIRAN & POLITIK (SUMBER MANUSIA)">PENGAJIAN PENTADBIRAN & POLITIK (SUMBER
                  MANUSIA)</option>
                <option value="PENGAJIAN PENTADBIRAN DAN POLITIK (AWAM)">PENGAJIAN PENTADBIRAN DAN POLITIK (AWAM)
                </option>
                <option value="PENGAJIAN PERADABAN">PENGAJIAN PERADABAN</option>
                <option value="PENGAJIAN PERBANDARAN DAN PERANCANGAN">PENGAJIAN PERBANDARAN DAN PERANCANGAN</option>
                <option value="PENGAJIAN PERNIAGAAN">PENGAJIAN PERNIAGAAN</option>
                <option value="PENGAJIAN PERNIAGAAN (INSURANS)">PENGAJIAN PERNIAGAAN (INSURANS)</option>
                <option value="PENGAJIAN PERNIAGAAN (KEWANGAN DAN PELABURAN)">PENGAJIAN PERNIAGAAN (KEWANGAN DAN
                  PELABURAN)</option>
                <option value="PENGAJIAN PERNIAGAAN (PEMBANGUNAN KEUSAHAWANAN)">PENGAJIAN PERNIAGAAN (PEMBANGUNAN
                  KEUSAHAWANAN)</option>
                <option value="PENGAJIAN PERNIAGAAN (PENGANGKUTAN)">PENGAJIAN PERNIAGAAN (PENGANGKUTAN)</option>
                <option value="PENGAJIAN PERNIAGAAN (PENGURUSAN)">PENGAJIAN PERNIAGAAN (PENGURUSAN)</option>
                <option value="PENGAJIAN PERNIAGAAN/PENTADBIRAN PERNIAGAAN">PENGAJIAN PERNIAGAAN/PENTADBIRAN PERNIAGAAN
                </option>
                <option value="PENGAJIAN PERTAHANAN">PENGAJIAN PERTAHANAN</option>
                <option value="PENGAJIAN QURAN DENGAN MULTIMEDIA">PENGAJIAN QURAN DENGAN MULTIMEDIA</option>
                <option value="PENGAJIAN SAINS DAN TEKNOLOGI">PENGAJIAN SAINS DAN TEKNOLOGI</option>
                <option value="PENGAJIAN SAINS KOMPUTER & EKONOMI">PENGAJIAN SAINS KOMPUTER & EKONOMI</option>
                <option value="PENGAJIAN STRATEGI">PENGAJIAN STRATEGI</option>
                <option value="PENGAJIAN STRATEGI DAN KESELAMATAN">PENGAJIAN STRATEGI DAN KESELAMATAN</option>
                <option value="PENGAJIAN SUKAN">PENGAJIAN SUKAN</option>
                <option value="PENGAJIAN SUNNAH DENGAN PENGURUSAN MAKLUMAT">PENGAJIAN SUNNAH DENGAN PENGURUSAN MAKLUMAT
                </option>
                <option value="PENGAJIAN TEKNOLOGI KATERING DAN PENYAJIAN">PENGAJIAN TEKNOLOGI KATERING DAN PENYAJIAN
                </option>
                <option value="PENGAJIAN TIONGHOA">PENGAJIAN TIONGHOA</option>
                <option value="PENGAJIAN TIONGHOA DAN EKONOMI">PENGAJIAN TIONGHOA DAN EKONOMI</option>
                <option value="PENGAJIAN TIONGHUA DAN SEJARAH">PENGAJIAN TIONGHUA DAN SEJARAH</option>
                <option value="PENGAJIAN VIDEO DAN FILEM">PENGAJIAN VIDEO DAN FILEM</option>
                <option value="PENGAJIAN WARISAN">PENGAJIAN WARISAN</option>
                <option value="PENGANGKUTAN">PENGANGKUTAN</option>
                <option value="PENGATURCARAAN">PENGATURCARAAN</option>
                <option value="PENGATURCARAAN KOMPUTER">PENGATURCARAAN KOMPUTER</option>
                <option value="PENGEMBANGAN MASYARAKAT ISLAM">PENGEMBANGAN MASYARAKAT ISLAM</option>
                <option value="PENGIMEJAN DIAGNOSTIK DAN RADIOTERAPI">PENGIMEJAN DIAGNOSTIK DAN RADIOTERAPI</option>
                <option value="PENGIMEJAN PERUBATAN">PENGIMEJAN PERUBATAN</option>
                <option value="PENGKERANIAN AKAUN">PENGKERANIAN AKAUN</option>
                <option value="PENGKOMPUTERAN PERNIAGAAN">PENGKOMPUTERAN PERNIAGAAN</option>
                <option value="PENGOPERASIAN PERNIAGAAN">PENGOPERASIAN PERNIAGAAN</option>
                <option value="PENGURUS BINAAN AWAM DAN STRUKTUR">PENGURUS BINAAN AWAM DAN STRUKTUR</option>
                <option value="PENGURUSAN">PENGURUSAN</option>
                <option value="PENGURUSAN (KAUNSELING)">PENGURUSAN (KAUNSELING)</option>
                <option value="PENGURUSAN (KEWANGAN /ORGANISASI/ PEMASARAN)">PENGURUSAN (KEWANGAN /ORGANISASI/
                  PEMASARAN)</option>
                <option value="PENGURUSAN (KEWANGAN)">PENGURUSAN (KEWANGAN)</option>
                <option value="PENGURUSAN (ORGANISASI)">PENGURUSAN (ORGANISASI)</option>
                <option value="PENGURUSAN (PENTADBIRAN DAN OPERASI)">PENGURUSAN (PENTADBIRAN DAN OPERASI)</option>
                <option value="PENGURUSAN (POLISI DAN SEKITARAN SOSIAL)">PENGURUSAN (POLISI DAN SEKITARAN SOSIAL)
                </option>
                <option value="PENGURUSAN (TEKNOLOGI)">PENGURUSAN (TEKNOLOGI)</option>
                <option value="PENGURUSAN /PENTADBIRAN PELANCONGAN">PENGURUSAN /PENTADBIRAN PELANCONGAN</option>
                <option value="PENGURUSAN ACARA">PENGURUSAN ACARA</option>
                <option value="PENGURUSAN ALAM SEKITAR">PENGURUSAN ALAM SEKITAR</option>
                <option value="PENGURUSAN ASET DAN FASILITI">PENGURUSAN ASET DAN FASILITI</option>
                <option value="PENGURUSAN AWAM">PENGURUSAN AWAM</option>
                <option value="PENGURUSAN BINAAN (CONSTRUCTION MANAGEMENT)">PENGURUSAN BINAAN (CONSTRUCTION MANAGEMENT)
                </option>
                <option value="PENGURUSAN BINAAN DAN EKONOMI">PENGURUSAN BINAAN DAN EKONOMI</option>
                <option value="PENGURUSAN DAN PEMASARAN">PENGURUSAN DAN PEMASARAN</option>
                <option value="PENGURUSAN DAN PENTADBIRAN ISLAM">PENGURUSAN DAN PENTADBIRAN ISLAM</option>
                <option value="PENGURUSAN DAN PERKHIDMATAN MAKANAN HALAL">PENGURUSAN DAN PERKHIDMATAN MAKANAN HALAL
                </option>
                <option value="PENGURUSAN DAN TEKNOLOGI PEJABAT">PENGURUSAN DAN TEKNOLOGI PEJABAT</option>
                <option value="PENGURUSAN DENGAN MULTIMEDIA">PENGURUSAN DENGAN MULTIMEDIA</option>
                <option value="PENGURUSAN DENGAN PENDIDIKAN (PERAKUANAN)">PENGURUSAN DENGAN PENDIDIKAN (PERAKUANAN)
                </option>
                <option value="PENGURUSAN DENGAN PENDIDIKAN (TEKNOLOGI MAKLUMAT)">PENGURUSAN DENGAN PENDIDIKAN
                  (TEKNOLOGI MAKLUMAT)</option>
                <option value="PENGURUSAN FASILITI">PENGURUSAN FASILITI</option>
                <option value="PENGURUSAN FASILITI DAN PENYENGGARAAN">PENGURUSAN FASILITI DAN PENYENGGARAAN</option>
                <option value="PENGURUSAN HAJI DAN UMRAH">PENGURUSAN HAJI DAN UMRAH</option>
                <option value="PENGURUSAN HAL EHWAL ANTARABANGSA">PENGURUSAN HAL EHWAL ANTARABANGSA</option>
                <option value="PENGURUSAN HARTA BENDA (PROPERTY MANAGEMENT)">PENGURUSAN HARTA BENDA (PROPERTY
                  MANAGEMENT)</option>
                <option value="PENGURUSAN HARTA ISLAM">PENGURUSAN HARTA ISLAM</option>
                <option value="PENGURUSAN HARTA TANAH">PENGURUSAN HARTA TANAH</option>
                <option value="PENGURUSAN HARTANAH (ESTATE MANAGEMENT)">PENGURUSAN HARTANAH (ESTATE MANAGEMENT)</option>
                <option value="PENGURUSAN HARTANAH BANDAR">PENGURUSAN HARTANAH BANDAR</option>
                <option value="PENGURUSAN HARTANAH LUAR BANDAR">PENGURUSAN HARTANAH LUAR BANDAR</option>
                <option value="PENGURUSAN HOSPITALITI">PENGURUSAN HOSPITALITI</option>
                <option value="PENGURUSAN HOSPITALITI DAN PELANCONGAN">PENGURUSAN HOSPITALITI DAN PELANCONGAN</option>
                <option value="PENGURUSAN HOTEL">PENGURUSAN HOTEL</option>
                <option value="PENGURUSAN HOTEL & PENYEDIAAN MAKANAN">PENGURUSAN HOTEL & PENYEDIAAN MAKANAN</option>
                <option value="PENGURUSAN HOTEL DAN KATERING">PENGURUSAN HOTEL DAN KATERING</option>
                <option value="PENGURUSAN HOTEL DAN PELANCONGAN">PENGURUSAN HOTEL DAN PELANCONGAN</option>
                <option value="PENGURUSAN HOTEL DAN PERKHIDMATAN MAKANAN HALAL">PENGURUSAN HOTEL DAN PERKHIDMATAN
                  MAKANAN HALAL</option>
                <option value="PENGURUSAN INDUSTRI">PENGURUSAN INDUSTRI</option>
                <option value="PENGURUSAN INDUSTRI HALAL">PENGURUSAN INDUSTRI HALAL</option>
                <option value="PENGURUSAN INDUSTRI SUKAN">PENGURUSAN INDUSTRI SUKAN</option>
                <option value="PENGURUSAN INSTITUSI & PENYEDIAAN MAKANAN">PENGURUSAN INSTITUSI & PENYEDIAAN MAKANAN
                </option>
                <option value="PENGURUSAN INSTITUSI ISLAM">PENGURUSAN INSTITUSI ISLAM</option>
                <option value="PENGURUSAN KEJURUTERAAN">PENGURUSAN KEJURUTERAAN</option>
                <option value="PENGURUSAN KEJURUTERAAN AUTOMASI INDUSTRI">PENGURUSAN KEJURUTERAAN AUTOMASI INDUSTRI
                </option>
                <option value="PENGURUSAN KERJA SOSIAL">PENGURUSAN KERJA SOSIAL</option>
                <option value="PENGURUSAN KESELAMATAN DAN KESIHATAN PEKERJAAN">PENGURUSAN KESELAMATAN DAN KESIHATAN
                  PEKERJAAN</option>
                <option value="PENGURUSAN KEWANGAN">PENGURUSAN KEWANGAN</option>
                <option value="PENGURUSAN KEWANGAN ISLAM">PENGURUSAN KEWANGAN ISLAM</option>
                <option value="PENGURUSAN KHIDMAT PELANGGAN">PENGURUSAN KHIDMAT PELANGGAN</option>
                <option value="PENGURUSAN KOPERASI">PENGURUSAN KOPERASI</option>
                <option value="PENGURUSAN LADANG">PENGURUSAN LADANG</option>
                <option value="PENGURUSAN LANDSKAP">PENGURUSAN LANDSKAP</option>
                <option value="PENGURUSAN LATIHAN">PENGURUSAN LATIHAN</option>
                <option value="PENGURUSAN LOGISTIK">PENGURUSAN LOGISTIK</option>
                <option value="PENGURUSAN LOGISTIK DAN RANGKAIAN BEKALAN">PENGURUSAN LOGISTIK DAN RANGKAIAN BEKALAN
                </option>
                <option value="PENGURUSAN MAJLIS">PENGURUSAN MAJLIS</option>
                <option value="PENGURUSAN MAKLUMAT">PENGURUSAN MAKLUMAT</option>
                <option value="PENGURUSAN MAKLUMAT KESIHATAN">PENGURUSAN MAKLUMAT KESIHATAN</option>
                <option value="PENGURUSAN MARITIM">PENGURUSAN MARITIM</option>
                <option value="PENGURUSAN MUAMALAT">PENGURUSAN MUAMALAT</option>
                <option value="PENGURUSAN MUTU MAKANAN">PENGURUSAN MUTU MAKANAN</option>
                <option value="PENGURUSAN MUZIUM DAN GALERI">PENGURUSAN MUZIUM DAN GALERI</option>
                <option value="PENGURUSAN OPERASI">PENGURUSAN OPERASI</option>
                <option value="PENGURUSAN OPERASI HOTEL">PENGURUSAN OPERASI HOTEL</option>
                <option value="PENGURUSAN PEJABAT">PENGURUSAN PEJABAT</option>
                <option value="PENGURUSAN PEJABAT DAN KESETIAUSAHAAN">PENGURUSAN PEJABAT DAN KESETIAUSAHAAN</option>
                <option value="PENGURUSAN PELANCONGAN ALAM SEKITAR">PENGURUSAN PELANCONGAN ALAM SEKITAR</option>
                <option value="PENGURUSAN PEMBANGUNAN">PENGURUSAN PEMBANGUNAN</option>
                <option value="PENGURUSAN PEMBANGUNAN ISLAM">PENGURUSAN PEMBANGUNAN ISLAM</option>
                <option value="PENGURUSAN PEMBINAAN">PENGURUSAN PEMBINAAN</option>
                <option value="PENGURUSAN PEMBUATAN">PENGURUSAN PEMBUATAN</option>
                <option value="PENGURUSAN PENERBANGAN">PENGURUSAN PENERBANGAN</option>
                <option value="PENGURUSAN PENGETAHUAN">PENGURUSAN PENGETAHUAN</option>
                <option value="PENGURUSAN PENJAGAAN KESIHATAN">PENGURUSAN PENJAGAAN KESIHATAN</option>
                <option value="PENGURUSAN PENTADBIRAN">PENGURUSAN PENTADBIRAN</option>
                <option value="PENGURUSAN PERAKAUNAN">PENGURUSAN PERAKAUNAN</option>
                <option value="PENGURUSAN PERHOTELAN">PENGURUSAN PERHOTELAN</option>
                <option value="PENGURUSAN PERKHIDMATAN MAKANAN">PENGURUSAN PERKHIDMATAN MAKANAN</option>
                <option value="PENGURUSAN PERKHIDMATAN MAKANAN DAN RESTORAN">PENGURUSAN PERKHIDMATAN MAKANAN DAN
                  RESTORAN</option>
                <option value="PENGURUSAN PERKHIDMATAN PELANGGAN">PENGURUSAN PERKHIDMATAN PELANGGAN</option>
                <option value="PENGURUSAN PERNIAGAAN">PENGURUSAN PERNIAGAAN</option>
                <option value="PENGURUSAN PERNIAGAAN (LOGISTIK DAN PENGANGKUTAN)">PENGURUSAN PERNIAGAAN (LOGISTIK DAN
                  PENGANGKUTAN)</option>
                <option value="PENGURUSAN PERNIAGAAN (PERAKAUNAN)">PENGURUSAN PERNIAGAAN (PERAKAUNAN)</option>
                <option value="PENGURUSAN PERNIAGAAN ANTARABANGSA">PENGURUSAN PERNIAGAAN ANTARABANGSA</option>
                <option value="PENGURUSAN PERNIAGAAN EKSEKUTIF">PENGURUSAN PERNIAGAAN EKSEKUTIF</option>
                <option value="PENGURUSAN PERPUSTAKAAN DAN MAKLUMAT">PENGURUSAN PERPUSTAKAAN DAN MAKLUMAT</option>
                <option value="PENGURUSAN PERSEKITARAN">PENGURUSAN PERSEKITARAN</option>
                <option value="PENGURUSAN PERTANIAN">PENGURUSAN PERTANIAN</option>
                <option value="PENGURUSAN PERUNCITAN">PENGURUSAN PERUNCITAN</option>
                <option value="PENGURUSAN PROJEK">PENGURUSAN PROJEK</option>
                <option value="PENGURUSAN PUSAT SUMBER MAKLUMAT">PENGURUSAN PUSAT SUMBER MAKLUMAT</option>
                <option value="PENGURUSAN REKOD">PENGURUSAN REKOD</option>
                <option value="PENGURUSAN RIADAH LUAR DAN PENGEMBARAAN">PENGURUSAN RIADAH LUAR DAN PENGEMBARAAN</option>
                <option value="PENGURUSAN RISIKO">PENGURUSAN RISIKO</option>
                <option value="PENGURUSAN RISIKO DAN INSURANS">PENGURUSAN RISIKO DAN INSURANS</option>
                <option value="PENGURUSAN SENI KULINARI">PENGURUSAN SENI KULINARI</option>
                <option value="PENGURUSAN SISTEM MAKLUMAT">PENGURUSAN SISTEM MAKLUMAT</option>
                <option value="PENGURUSAN SISTEM PEJABAT">PENGURUSAN SISTEM PEJABAT</option>
                <option value="PENGURUSAN SUKAN">PENGURUSAN SUKAN</option>
                <option value="PENGURUSAN SUKAN DAN REKREASI">PENGURUSAN SUKAN DAN REKREASI</option>
                <option value="PENGURUSAN SUMBER DAN PENGAJIAN PENGGUNA">PENGURUSAN SUMBER DAN PENGAJIAN PENGGUNA
                </option>
                <option value="PENGURUSAN SUMBER MANUSIA">PENGURUSAN SUMBER MANUSIA</option>
                <option value="PENGURUSAN SUMBER MANUSIA & PERHUBUNGAN INDIVIDU">PENGURUSAN SUMBER MANUSIA & PERHUBUNGAN
                  INDIVIDU</option>
                <option value="PENGURUSAN SUMBER MANUSIA PERTAHANAN">PENGURUSAN SUMBER MANUSIA PERTAHANAN</option>
                <option value="PENGURUSAN TAMAN DAN AMENITI">PENGURUSAN TAMAN DAN AMENITI</option>
                <option value="PENGURUSAN TANAH DAN SUMBER AIR">PENGURUSAN TANAH DAN SUMBER AIR</option>
                <option value="PENGURUSAN TEKNOLOGI">PENGURUSAN TEKNOLOGI</option>
                <option value="PENGURUSAN TEKNOLOGI (PERAKAUNAN)">PENGURUSAN TEKNOLOGI (PERAKAUNAN)</option>
                <option value="PENGURUSAN TEKNOLOGI (INOVASI TEKNOLOGI)">PENGURUSAN TEKNOLOGI (INOVASI TEKNOLOGI)
                </option>
                <option value="PENGURUSAN TEKNOLOGI (KEWANGAN)">PENGURUSAN TEKNOLOGI (KEWANGAN)</option>
                <option value="PENGURUSAN TEKNOLOGI (PEMASARAN TEKNOLOGI TINGGI)">PENGURUSAN TEKNOLOGI (PEMASARAN
                  TEKNOLOGI TINGGI)</option>
                <option value="PENGURUSAN TEKNOLOGI (PEMASARAN)">PENGURUSAN TEKNOLOGI (PEMASARAN)</option>
                <option value="PENGURUSAN TEKNOLOGI (PEMBINAAN)">PENGURUSAN TEKNOLOGI (PEMBINAAN)</option>
                <option value="PENGURUSAN TEKNOLOGI (PEMBUATAN)">PENGURUSAN TEKNOLOGI (PEMBUATAN)</option>
                <option value="PENGURUSAN TEKNOLOGI (PENGANGKUTAN PERTAHANAN MARITIM)">PENGURUSAN TEKNOLOGI
                  (PENGANGKUTAN PERTAHANAN MARITIM)</option>
                <option value="PENGURUSAN TEKNOLOGI (PENGELUARAN DAN OPERASI)">PENGURUSAN TEKNOLOGI (PENGELUARAN DAN
                  OPERASI)</option>
                <option value="PENGURUSAN TEKNOLOGI (PERNIAGAAN ANATARABANGSA)">PENGURUSAN TEKNOLOGI (PERNIAGAAN
                  ANATARABANGSA)</option>
                <option value="PENGURUSAN TEKNOLOGI (PERTAHANAN MARITIM">PENGURUSAN TEKNOLOGI (PERTAHANAN MARITIM
                </option>
                <option value="PENGURUSAN TEKNOLOGI INDUSTRI">PENGURUSAN TEKNOLOGI INDUSTRI</option>
                <option value="PENGURUSAN TEKNOLOGI(PENGANGKUTAN MARIN)">PENGURUSAN TEKNOLOGI(PENGANGKUTAN MARIN)
                </option>
                <option value="PENGURUSAN TEKNOLOGI(PENGELUARAN)">PENGURUSAN TEKNOLOGI(PENGELUARAN)</option>
                <option value="PENGURUSAN TEKNOLOGI(PENGURUSAN SUMBER MANUSIA)">PENGURUSAN TEKNOLOGI(PENGURUSAN SUMBER
                  MANUSIA)</option>
                <option value="PENGURUSAN TEKNOLOGI(TEKNOLOGI MAKLUMAT)">PENGURUSAN TEKNOLOGI(TEKNOLOGI MAKLUMAT)
                </option>
                <option value="PENGURUSAN ZON PANTAI BERSEPADU">PENGURUSAN ZON PANTAI BERSEPADU</option>
                <option value="PENGURUSAN(PERAKAUNAN)">PENGURUSAN(PERAKAUNAN)</option>
                <option value="PENGURUSAN/PENGAJIAN BANK">PENGURUSAN/PENGAJIAN BANK</option>
                <option value="PENGURUSAN/PENTADBIRAN AWAM">PENGURUSAN/PENTADBIRAN AWAM</option>
                <option value="PENGURUSAN/PENTADBIRAN/PENGAAJIAN PERNIAGAAN">PENGURUSAN/PENTADBIRAN/PENGAAJIAN
                  PERNIAGAAN</option>
                <option value="PENGURUSAN/SAINS PENGURUSAN/PENGURUSAN MANUSIA">PENGURUSAN/SAINS PENGURUSAN/PENGURUSAN
                  MANUSIA</option>
                <option value="PENILAIAN">PENILAIAN</option>
                <option value="PENILAIAN DAN PENGURUSAN HARTANAH">PENILAIAN DAN PENGURUSAN HARTANAH</option>
                <option value="PENILAIAN TANAH UNTUK PERTANIAN">PENILAIAN TANAH UNTUK PERTANIAN</option>
                <option value="PENINGKATAN KUALITI DAN PRODUKTIVITI">PENINGKATAN KUALITI DAN PRODUKTIVITI</option>
                <option value="PENJAGAAN KESIHATAN PERSEKITARAN">PENJAGAAN KESIHATAN PERSEKITARAN</option>
                <option value="PENTADBIRAN AWAM">PENTADBIRAN AWAM</option>
                <option value="PENTADBIRAN AWAM EKSEKUTIF KOMANWEL">PENTADBIRAN AWAM EKSEKUTIF KOMANWEL</option>
                <option value="PENTADBIRAN DAN HUBUNGAN KORPORAT">PENTADBIRAN DAN HUBUNGAN KORPORAT</option>
                <option value="PENTADBIRAN DAN KEADILAN SOSIAL">PENTADBIRAN DAN KEADILAN SOSIAL</option>
                <option value="PENTADBIRAN DAN PEMBANGUNAN TANAH">PENTADBIRAN DAN PEMBANGUNAN TANAH</option>
                <option value="PENTADBIRAN DAN POLITIK (SUMBER MANUSIA)">PENTADBIRAN DAN POLITIK (SUMBER MANUSIA)
                </option>
                <option value="PENTADBIRAN HOSPITAL">PENTADBIRAN HOSPITAL</option>
                <option value="PENTADBIRAN KEHAKIMAN DAN GUAMAN ISLAM">PENTADBIRAN KEHAKIMAN DAN GUAMAN ISLAM</option>
                <option value="PENTADBIRAN KESIHATAN">PENTADBIRAN KESIHATAN</option>
                <option value="PENTADBIRAN KESIHATAN">PENTADBIRAN KESIHATAN</option>
                <option value="PENTADBIRAN KOPORAT">PENTADBIRAN KOPORAT</option>
                <option value="PENTADBIRAN KOPORAT(PENTADBIRAN AM)">PENTADBIRAN KOPORAT(PENTADBIRAN AM)</option>
                <option value="PENTADBIRAN KORPORAT (S'USAHA SYARIKAT)">PENTADBIRAN KORPORAT (S'USAHA SYARIKAT)</option>
                <option value="PENTADBIRAN MAKANAN">PENTADBIRAN MAKANAN</option>
                <option value="PENTADBIRAN MUAMALAT">PENTADBIRAN MUAMALAT</option>
                <option value="PENTADBIRAN PEMBUATAN KOMPOSIT">PENTADBIRAN PEMBUATAN KOMPOSIT</option>
                <option value="PENTADBIRAN PENGUATKUASAAN UNDANG-UNDANG">PENTADBIRAN PENGUATKUASAAN UNDANG-UNDANG
                </option>
                <option value="PENTADBIRAN PERNIAGAAN">PENTADBIRAN PERNIAGAAN</option>
                <option value="PENTADBIRAN PERNIAGAAN (EKONOMI PERNIAGAAN)">PENTADBIRAN PERNIAGAAN (EKONOMI PERNIAGAAN)
                </option>
                <option value="PENTADBIRAN PERNIAGAAN (INSURANS)">PENTADBIRAN PERNIAGAAN (INSURANS)</option>
                <option value="PENTADBIRAN PERNIAGAAN (KEPUJIAN) PENGURUSAN DAN KEUSAHAWANAN">PENTADBIRAN PERNIAGAAN
                  (KEPUJIAN) PENGURUSAN DAN KEUSAHAWANAN</option>
                <option value="PENTADBIRAN PERNIAGAAN (KEPUJIAN) PENGURUSAN TEKNOLOGI">PENTADBIRAN PERNIAGAAN (KEPUJIAN)
                  PENGURUSAN TEKNOLOGI</option>
                <option value="PENTADBIRAN PERNIAGAAN (KEUSAHAWANAN)">PENTADBIRAN PERNIAGAAN (KEUSAHAWANAN)</option>
                <option value="PENTADBIRAN PERNIAGAAN (KEWANGAN DAN PERBANKAN ISLAM)">PENTADBIRAN PERNIAGAAN (KEWANGAN
                  DAN PERBANKAN ISLAM)</option>
                <option value="PENTADBIRAN PERNIAGAAN (KEWANGAN ISLAM)">PENTADBIRAN PERNIAGAAN (KEWANGAN ISLAM)</option>
                <option value="PENTADBIRAN PERNIAGAAN (KEWANGAN)">PENTADBIRAN PERNIAGAAN (KEWANGAN)</option>
                <option value="PENTADBIRAN PERNIAGAAN (PEMASARAN)">PENTADBIRAN PERNIAGAAN (PEMASARAN)</option>
                <option value="PENTADBIRAN PERNIAGAAN (PENGANGKUTAN)">PENTADBIRAN PERNIAGAAN (PENGANGKUTAN)</option>
                <option value="PENTADBIRAN PERNIAGAAN (PENGURUSAN MINYAK DAN GAS)">PENTADBIRAN PERNIAGAAN (PENGURUSAN
                  MINYAK DAN GAS)</option>
                <option value="PENTADBIRAN PERNIAGAAN (PENGURUSAN OPERASI)">PENTADBIRAN PERNIAGAAN (PENGURUSAN OPERASI)
                </option>
                <option value="PENTADBIRAN PERNIAGAAN (PENGURUSAN PELABURAN)">PENTADBIRAN PERNIAGAAN (PENGURUSAN
                  PELABURAN)</option>
                <option value="PENTADBIRAN PERNIAGAAN (PENGURUSAN RISIKO DAN TAKAFUL)">PENTADBIRAN PERNIAGAAN
                  (PENGURUSAN RISIKO DAN TAKAFUL)</option>
                <option value="PENTADBIRAN PERNIAGAAN (PERBANKAN ISLAM)">PENTADBIRAN PERNIAGAAN (PERBANKAN ISLAM)
                </option>
                <option value="PENTADBIRAN PERNIAGAAN (PERNIAGAAN ANTARABANGSA)">PENTADBIRAN PERNIAGAAN (PERNIAGAAN
                  ANTARABANGSA)</option>
                <option value="PENTADBIRAN PERNIAGAAN DENGAN E-DAGANG">PENTADBIRAN PERNIAGAAN DENGAN E-DAGANG</option>
                <option value="PENTADBIRAN PERNIAGAAN(PENGURUSAN PENTADBIRAN MANUSIA)">PENTADBIRAN PERNIAGAAN(PENGURUSAN
                  PENTADBIRAN MANUSIA)</option>
                <option value="PENTADBIRAN PERNIAGAAN(PENGURUSAN PERUNCITAN)">PENTADBIRAN PERNIAGAAN(PENGURUSAN
                  PERUNCITAN)</option>
                <option value="PENTADBIRAN PERNIAGAAN(PERNIAGAAN ANTARABANGSA)">PENTADBIRAN PERNIAGAAN(PERNIAGAAN
                  ANTARABANGSA)</option>
                <option value="PENTADBIRAN POLISI AWAM">PENTADBIRAN POLISI AWAM</option>
                <option value="PENTADBIRAN SISTEM KOMPUTER">PENTADBIRAN SISTEM KOMPUTER</option>
                <option value="PENTADBIRAN SISTEM MAKLUMAT">PENTADBIRAN SISTEM MAKLUMAT</option>
                <option value="PENTADBIRAN SOSIAL">PENTADBIRAN SOSIAL</option>
                <option value="PENTADBIRAN SOSIAL DAN PENGAJIAN ISLAM">PENTADBIRAN SOSIAL DAN PENGAJIAN ISLAM</option>
                <option value="PENTADBIRAN SOSIAL DAN SUMBER MANUSIA">PENTADBIRAN SOSIAL DAN SUMBER MANUSIA</option>
                <option value="PENTADBIRAN TANAH">PENTADBIRAN TANAH</option>
                <option value="PENTERJEMAHAN">PENTERJEMAHAN</option>
                <option value="PENULISAN KREATIF">PENULISAN KREATIF</option>
                <option value="PENULISAN KREATIF & DESKRIPTIF">PENULISAN KREATIF & DESKRIPTIF</option>
                <option value="PENYALAHGUNAAN DADAH">PENYALAHGUNAAN DADAH</option>
                <option value="PENYEDIAAN MAKANAN">PENYEDIAAN MAKANAN</option>
                <option value="PENYEDIAAN MAKANAN & KULINARI">PENYEDIAAN MAKANAN & KULINARI</option>
                <option value="PENYEJUKAN (REFRIGERATION)">PENYEJUKAN (REFRIGERATION)</option>
                <option value="PENYELENGGARAAN MESIN">PENYELENGGARAAN MESIN</option>
                <option value="PENYELENGGARAAN PESAWAT">PENYELENGGARAAN PESAWAT</option>
                <option value="PENYELENGGARAAN PESAWAT (AVIONIK)">PENYELENGGARAAN PESAWAT (AVIONIK)</option>
                <option value="PENYELIDIKAN KENDALIAN">PENYELIDIKAN KENDALIAN</option>
                <option value="PENYELIDIKAN OPERASI (OPERATING RESEARCH)">PENYELIDIKAN OPERASI (OPERATING RESEARCH)
                </option>
                <option value="PENYENGGARAAN BANGUNAN">PENYENGGARAAN BANGUNAN</option>
                <option value="PENYIARAN & PENERANGAN AGAMA ISLAM(SEBARAN AM">PENYIARAN & PENERANGAN AGAMA ISLAM(SEBARAN
                  AM</option>
                <option value="PENYIARAN DAN PERFILEMAN">PENYIARAN DAN PERFILEMAN</option>
                <option value="PENYIMPAN KIRA-KIRA">PENYIMPAN KIRA-KIRA</option>
                <option value="PERAKAUNAN">PERAKAUNAN</option>
                <option value="PERAKAUNAN (MULTIMEDIA)">PERAKAUNAN (MULTIMEDIA)</option>
                <option value="PERAKAUNAN (SISTEM MAKLUMAT)">PERAKAUNAN (SISTEM MAKLUMAT)</option>
                <option value="PERAKAUNAN DAN ANALISA KEWANGAN">PERAKAUNAN DAN ANALISA KEWANGAN</option>
                <option value="PERAKAUNAN DAN KEWANGAN">PERAKAUNAN DAN KEWANGAN</option>
                <option value="PERAKAUNAN DAN PENDIDIKAN">PERAKAUNAN DAN PENDIDIKAN</option>
                <option value="PERAKAUNAN DAN PENGAJIAN PERNIAGAAN">PERAKAUNAN DAN PENGAJIAN PERNIAGAAN</option>
                <option value="PERAKAUNAN DENGAN PENDIDIKAN">PERAKAUNAN DENGAN PENDIDIKAN</option>
                <option value="PERAKAUNAN DENGAN SAINS KOMPUTER">PERAKAUNAN DENGAN SAINS KOMPUTER</option>
                <option value="PERAKAUNAN FORENSIK DAN KRIMINOLOGI KEWANGAN">PERAKAUNAN FORENSIK DAN KRIMINOLOGI
                  KEWANGAN</option>
                <option value="PERAKAUNAN PERNIAGAAN">PERAKAUNAN PERNIAGAAN</option>
                <option value="PERANCANG BANDAR">PERANCANG BANDAR</option>
                <option value="PERANCANG BANDAR DAN DESA/WILAYAH">PERANCANG BANDAR DAN DESA/WILAYAH</option>
                <option value="PERANCANGAN">PERANCANGAN</option>
                <option value="PERANCANGAN BANDAR DAN WILAYAH">PERANCANGAN BANDAR DAN WILAYAH</option>
                <option value="PERANCANGAN DAN PENGURUSAN PEMBANGUNAN">PERANCANGAN DAN PENGURUSAN PEMBANGUNAN</option>
                <option value="PERANCANGAN KEWANGAN (FINANCIAL PLANNING)">PERANCANGAN KEWANGAN (FINANCIAL PLANNING)
                </option>
                <option value="PERANCANGAN PEMBANGUNAN">PERANCANGAN PEMBANGUNAN</option>
                <option value="PERANCANGAN PENGANGKUTAN">PERANCANGAN PENGANGKUTAN</option>
                <option value="PERANGKAAN (STATISTICS)">PERANGKAAN (STATISTICS)</option>
                <option value="PERBANDINGAN MAZHAB DAN HUKUM">PERBANDINGAN MAZHAB DAN HUKUM</option>
                <option value="PERBANKAN">PERBANKAN</option>
                <option value="PERBANKAN ISLAM">PERBANKAN ISLAM</option>
                <option value="PERCUKAIAN (KEPUJIAN)">PERCUKAIAN (KEPUJIAN)</option>
                <option value="PERDAGANGAN">PERDAGANGAN</option>
                <option value="PERDAGANGAN (KEWANGAN DAN PEMASARAN)">PERDAGANGAN (KEWANGAN DAN PEMASARAN)</option>
                <option value="PERDAGANGAN ANTARABANGSA">PERDAGANGAN ANTARABANGSA</option>
                <option value="PERDAGANGAN DAN DIPLOMASI">PERDAGANGAN DAN DIPLOMASI</option>
                <option value="PERDAGANGAN DAN PERNIAGAAN ANTARABANGSA">PERDAGANGAN DAN PERNIAGAAN ANTARABANGSA</option>
                <option value="PERDAGANGAN KOMPUTER">PERDAGANGAN KOMPUTER</option>
                <option value="PERGIGIAN">PERGIGIAN</option>
                <option value="PERHUBUNGAN BURUH & INDUSTRI">PERHUBUNGAN BURUH & INDUSTRI</option>
                <option value="PERHUTANAN">PERHUTANAN</option>
                <option value="PERHUTANAN RENJER HUTAN">PERHUTANAN RENJER HUTAN</option>
                <option value="PERHUTANAN TROPIKA ANTARABANGSA">PERHUTANAN TROPIKA ANTARABANGSA</option>
                <option value="PERIKANAN">PERIKANAN</option>
                <option value="PERIKLANAN DAN KOMUNIKASI PEMASARAN">PERIKLANAN DAN KOMUNIKASI PEMASARAN</option>
                <option value="PERKHIDMATAN MAKANAN (AMALAN HALAL)">PERKHIDMATAN MAKANAN (AMALAN HALAL)</option>
                <option value="PERKIRAAN MATH & REKABENTUK GEO BANTUAN KOMPUTER">PERKIRAAN MATH & REKABENTUK GEO BANTUAN
                  KOMPUTER</option>
                <option value="PERLADANGAN MAKANAN">PERLADANGAN MAKANAN</option>
                <option value="PERMODELAN KOMPUTER">PERMODELAN KOMPUTER</option>
                <option value="PERNIAGAAN (KEUSAHAWANAN KEJURUTERAAN)">PERNIAGAAN (KEUSAHAWANAN KEJURUTERAAN)</option>
                <option value="PERNIAGAAN (KEUSAHAWANAN)">PERNIAGAAN (KEUSAHAWANAN)</option>
                <option value="PERNIAGAAN (PEMASARAN)">PERNIAGAAN (PEMASARAN)</option>
                <option value="PERNIAGAAN (PENGURUSAN KEWANGAN DAN PERBANKAN)">PERNIAGAAN (PENGURUSAN KEWANGAN DAN
                  PERBANKAN)</option>
                <option value="PERNIAGAAN (PENGURUSAN PERHOTELAN)">PERNIAGAAN (PENGURUSAN PERHOTELAN)</option>
                <option value="PERNIAGAAN (PERNIAGAAN ANTARABANGSA)">PERNIAGAAN (PERNIAGAAN ANTARABANGSA)</option>
                <option value="PERNIAGAAN ANTARABANGSA (KEWANGAN ANTARABANGSA)">PERNIAGAAN ANTARABANGSA (KEWANGAN
                  ANTARABANGSA)</option>
                <option value="PERSURATAN MELAYU">PERSURATAN MELAYU</option>
                <option value="PERSURATAN MELAYU DAN GEOGRAFI">PERSURATAN MELAYU DAN GEOGRAFI</option>
                <option value="PERSURATAN MELAYU DAN PSIKOLOGI">PERSURATAN MELAYU DAN PSIKOLOGI</option>
                <option value="PERTADBIRAN PERNIAGAAN (PENGURUSAN SUMBER MANUSIA)">PERTADBIRAN PERNIAGAAN (PENGURUSAN
                  SUMBER MANUSIA)</option>
                <option value="PERTANIAN/SAINS PERTANIAN">PERTANIAN/SAINS PERTANIAN</option>
                <option value="PERUBATAN DAN PEMBEDAHAN">PERUBATAN DAN PEMBEDAHAN</option>
                <option value="PERUBATAN KELUARGA (FAMILY MEDICINE)">PERUBATAN KELUARGA (FAMILY MEDICINE)</option>
                <option value="PERUBATAN VETERINAR (VETERINAR MEDICINE)">PERUBATAN VETERINAR (VETERINAR MEDICINE)
                </option>
                <option value="PERUMAHAN">PERUMAHAN</option>
                <option value="PERUMAHAN, BANGUNAN DAN PERANCANGAN (UKUR BAHAN)">PERUMAHAN, BANGUNAN DAN PERANCANGAN
                  (UKUR BAHAN)</option>
                <option value="PERUMAHAN,BANGUNAN & PERANCANGAN">PERUMAHAN,BANGUNAN & PERANCANGAN</option>
                <option value="PERUNDANGAN ISLAM/SYARIAH">PERUNDANGAN ISLAM/SYARIAH</option>
                <option value="PHARMACOLOGY">PHARMACOLOGY</option>
                <option value="PHARMACOLOGY & PHYSIOLOGY">PHARMACOLOGY & PHYSIOLOGY</option>
                <option value="PHILOSOPHY, POLITICS AND ECONOMICS">PHILOSOPHY, POLITICS AND ECONOMICS</option>
                <option value="PHOTOGRAPHY">PHOTOGRAPHY</option>
                <option value="PHYSIOLOGY">PHYSIOLOGY</option>
                <option value="PLANTING INDUSTRIAL MANAGEMENT">PLANTING INDUSTRIAL MANAGEMENT</option>
                <option value="POLISI PENGURUSAN SAINS DAN TEKNOLOGI">POLISI PENGURUSAN SAINS DAN TEKNOLOGI</option>
                <option value="POLITIK DAN PEMERINTAHAN">POLITIK DAN PEMERINTAHAN</option>
                <option value="POLITIK DAN PENGURUSAN PENTADBIRAN">POLITIK DAN PENGURUSAN PENTADBIRAN</option>
                <option value="PRASEKOLAH">PRASEKOLAH</option>
                <option value="PRECISION MECHANICAL ENGINEERING">PRECISION MECHANICAL ENGINEERING</option>
                <option value="PRODUCT DESIGN AND MANUFACTURE">PRODUCT DESIGN AND MANUFACTURE</option>
                <option value="PRODUCTION TECHNOLOGY">PRODUCTION TECHNOLOGY</option>
                <option value="PRODUKSI DAN KESIHATAN HAIWAN">PRODUKSI DAN KESIHATAN HAIWAN</option>
                <option value="PROFESSIONAL COMMUNICATION">PROFESSIONAL COMMUNICATION</option>
                <option value="PROGRAM BIOLOGI SEL & MOLEKUL(MIKROBIOLOGI)">PROGRAM BIOLOGI SEL & MOLEKUL(MIKROBIOLOGI_
                </option>
                <option value="PROGRAM KHAS EKONOMI & ANTROPOLOGI & SOSIOLOGI">PROGRAM KHAS EKONOMI & ANTROPOLOGI &
                  SOSIOLOGI</option>
                <option value="PROGRAM KHAS EKONOMI & PERSURATAN MELAYU">PROGRAM KHAS EKONOMI & PERSURATAN MELAYU
                </option>
                <option value="PROGRAM SINEMATOGRAFI">PROGRAM SINEMATOGRAFI</option>
                <option value="PROTECTION MANAGEMENT">PROTECTION MANAGEMENT</option>
                <option value="PSIKOLOGI">PSIKOLOGI</option>
                <option value="PSIKOLOGI (PSIKOLOGI KANAK-KANAK DAN KELUARGA)">PSIKOLOGI (PSIKOLOGI KANAK-KANAK DAN
                  KELUARGA)</option>
                <option value="PSIKOLOGI DAN GEOGRAFI">PSIKOLOGI DAN GEOGRAFI</option>
                <option value="PSIKOLOGI DAN SAINS POLITIK">PSIKOLOGI DAN SAINS POLITIK</option>
                <option value="PSIKOLOGI DENGAN PEMASARAN / PEMASARAN DENGAN PSIKOLOGI">PSIKOLOGI DENGAN PEMASARAN /
                  PEMASARAN DENGAN PSIKOLOGI</option>
                <option value="PSIKOLOGI DENGAN PEMBANGUNAN SUMBER MANUSIA">PSIKOLOGI DENGAN PEMBANGUNAN SUMBER MANUSIA
                </option>
                <option value="PSIKOLOGI INDUSTRI DAN ORGANISASI">PSIKOLOGI INDUSTRI DAN ORGANISASI</option>
                <option value="PSIKOLOGI KAUNSELING">PSIKOLOGI KAUNSELING</option>
                <option value="PSIKOLOGI KLINIKAL">PSIKOLOGI KLINIKAL</option>
                <option value="PSIKOLOGI PEMBANGUNAN BELIA DAN KOMUNITI">PSIKOLOGI PEMBANGUNAN BELIA DAN KOMUNITI
                </option>
                <option value="PSIKOLOGI PENDIDIKAN">PSIKOLOGI PENDIDIKAN</option>
                <option value="PSIKOLOGI PENDIDIKAN DAN BIMBINGAN">PSIKOLOGI PENDIDIKAN DAN BIMBINGAN</option>
                <option value="PSYCHIATRY (SAKIT JIWA)">PSYCHIATRY (SAKIT JIWA)</option>
                <option value="PSYCHOLOGICAL SCIENCE AND BUSINESS">AKUAKULTUR</option>
                <option value="PSYCHOLOGY AND IN JEWISH">PSYCHOLOGY AND IN JEWISH</option>
                <option value="PSYCHOLOGY AND NEUROSCIENCE">PSYCHOLOGY AND NEUROSCIENCE</option>
                <option value="PUBLIC HEALTH (KESIHATAN AWAM)">PUBLIC HEALTH (KESIHATAN AWAM)</option>
                <option value="QIRAAT">QIRAAT</option>
                <option value="QUALITY ASSURANCE">QUALITY ASSURANCE</option>
                <option value="QUALITY ASSURANCE ENGINEERING">QUALITY ASSURANCE ENGINEERING</option>
                <option value="QUALITY MANAGEMANT">QUALITY MANAGEMANT</option>
                <option value="RADIO KIMIA">RADIO KIMIA</option>
                <option value="RADIOGRAFI">RADIOGRAFI</option>
                <option value="RADIOTERAPI">RADIOTERAPI</option>
                <option value="RANGKAIAN DAN KESELAMATAN KOMPUTER">RANGKAIAN DAN KESELAMATAN KOMPUTER</option>
                <option value="RANGKAIAN DAN TEKNOLOGI MUDAHALIH">RANGKAIAN DAN TEKNOLOGI MUDAHALIH</option>
                <option value="RANGKAIAN KOMPUTER">RANGKAIAN KOMPUTER</option>
                <option value="REGENERATION AND ADVANCED MEDICAL STUDIES">REGENERATION AND ADVANCED MEDICAL STUDIES
                </option>
                <option value="REKA BENTUK (ANIMASI)">REKA BENTUK (ANIMASI)</option>
                <option value="REKA BENTUK (PENGIKLANAN)">REKA BENTUK (PENGIKLANAN)</option>
                <option value="REKA BENTUK DAN PEMBANGUNAN PERMAINAN">REKA BENTUK DAN PEMBANGUNAN PERMAINAN</option>
                <option value="REKA BENTUK GRAFIK">REKA BENTUK GRAFIK</option>
                <option value="REKAAN FESYEN DAN PAKAIAN">REKAAN FESYEN DAN PAKAIAN</option>
                <option value="REKABENTUK (DESIGN)">REKABENTUK (DESIGN)</option>
                <option value="REKABENTUK (SENI BINA)">REKABENTUK (SENI BINA)</option>
                <option value="REKABENTUK DALAMAN">REKABENTUK DALAMAN</option>
                <option value="REKABENTUK DAN PERANCANGAN PERSEKITARAN">REKABENTUK DAN PERANCANGAN PERSEKITARAN</option>
                <option value="REKABENTUK DAN TEKNOLOGI">REKABENTUK DAN TEKNOLOGI</option>
                <option value="REKABENTUK DAN TEKNOLOGI KASUT">REKABENTUK DAN TEKNOLOGI KASUT</option>
                <option value="REKABENTUK GRAFIK BERKOMPUTER">REKABENTUK GRAFIK BERKOMPUTER</option>
                <option value="REKABENTUK INDUSTRI">REKABENTUK INDUSTRI</option>
                <option value="REKABENTUK PERABOT">REKABENTUK PERABOT</option>
                <option value="REKABENTUK PRODUK INDUSTRI">REKABENTUK PRODUK INDUSTRI</option>
                <option value="REMOTE SENSING">REMOTE SENSING</option>
                <option value="RETAIL MANAGEMENT">RETAIL MANAGEMENT</option>
                <option value="SAINS">SAINS</option>
                <option value="SAINS & KEJURUTERAAN TEKNOLOGI">SAINS & KEJURUTERAAN TEKNOLOGI</option>
                <option value="SAINS & TEKNOLOGI POLIMER">SAINS & TEKNOLOGI POLIMER</option>
                <option value="SAINS (AKUAKULTUR)">SAINS (AKUAKULTUR)R</option>
                <option value="SAINS (BIOLOGI MARIN)">SAINS (BIOLOGI MARIN)</option>
                <option value="SAINS (BIOLOGI-ZOOLOGI)">SAINS (BIOLOGI-ZOOLOGI)</option>
                <option value="SAINS (BIOTEKNOLOGI)">SAINS (BIOTEKNOLOGI)</option>
                <option value="SAINS (EKOLOGI DAN BIODIVERSITI)">SAINS (EKOLOGI DAN BIODIVERSITI)</option>
                <option value="SAINS (KAJI BUMI)">SAINS (KAJI BUMI)</option>
                <option value="SAINS (KEJURUTERAAN MEKANIKAL)">SAINS (KEJURUTERAAN MEKANIKAL)</option>
                <option value="SAINS (KEWANGAN ISLAM)">SAINS (KEWANGAN ISLAM)</option>
                <option value="SAINS (KIMIA ANALISIS DAN ANALISIS BERALATAN)">SAINS (KIMIA ANALISIS DAN ANALISIS
                  BERALATAN)</option>
                <option value="SAINS (KIMIA FARMASEUTIKAL)">SAINS (KIMIA FARMASEUTIKAL)</option>
                <option value="SAINS (KOMUNIKASI DATA DAN PERANGKAIAN)">SAINS (KOMUNIKASI DATA DAN PERANGKAIAN)</option>
                <option value="SAINS (MATEMATIK DENGAN KOMPUTER GRAFIK)">SAINS (MATEMATIK DENGAN KOMPUTER GRAFIK)
                </option>
                <option value="SAINS (MATEMATIK KEJURUTERAAN)">SAINS (MATEMATIK KEJURUTERAAN)</option>
                <option value="SAINS (MATEMATIK KEWANGAN)">SAINS (MATEMATIK KEWANGAN)</option>
                <option value="SAINS (MATEMATIK KOMPUTASI)">SAINS (MATEMATIK KOMPUTASI)</option>
                <option value="SAINS (MATEMATIK PENGKOMPUTERAN)">SAINS (MATEMATIK PENGKOMPUTERAN)</option>
                <option value="SAINS (MATEMATIK PENGURUSAN)">AKUAKULTUR</option>
                <option value="SAINS (MATEMATIK) DENGAN PENDIDIKAN">SAINS (MATEMATIK) DENGAN PENDIDIKAN</option>
                <option value="SAINS (PEMAKANAN DAN KESIHATAN KOMUNITI)">SAINS (PEMAKANAN DAN KESIHATAN KOMUNITI)
                </option>
                <option value="SAINS (PEMBANGUNAN MANUSIA DAN PENGURUSAN)">SAINS (PEMBANGUNAN MANUSIA DAN PENGURUSAN)
                </option>
                <option value="SAINS (PEMBANGUNAN MANUSIA DAN TEKNOLOGI MAKLUMAT)">SAINS (PEMBANGUNAN MANUSIA DAN
                  TEKNOLOGI MAKLUMAT)</option>
                <option value="SAINS (PEMBGNAN MANUSIA & TEKNOLOGI MAKLUMAT)">SAINS (PEMBGNAN MANUSIA & TEKNOLOGI
                  MAKLUMAT)</option>
                <option value="SAINS (PENGURUSAN KONTRAK PEMBINAAN)">SAINS (PENGURUSAN KONTRAK PEMBINAAN)</option>
                <option value="SAINS (PENGURUSAN PERKHIDMATAN MAKANAN)">SAINS (PENGURUSAN PERKHIDMATAN MAKANAN)</option>
                <option value="SAINS (PENTADBIRAN DAN PEMBANGUNAN TANAH)">SAINS (PENTADBIRAN DAN PEMBANGUNAN TANAH)
                </option>
                <option value="SAINS (PERNIAGAAN TANI)">SAINS (PERNIAGAAN TANI)</option>
                <option value="SAINS (PERUBATAN MOLEKUL)">SAINS (PERUBATAN MOLEKUL)</option>
                <option value="SAINS (PERUBATAN MOLEKUL)">SAINS (PERUBATAN MOLEKUL)</option>
                <option value="SAINS (PERUMAHAN, BANGUNAN DAN PERANCANGAN) (TEKNOLOGI BANGUNAN)">SAINS (PERUMAHAN,
                  BANGUNAN DAN PERANCANGAN) (TEKNOLOGI BANGUNAN)</option>
                <option value="SAINS (REKABENTUK INDUSTRI)">SAINS (REKABENTUK INDUSTRI)</option>
                <option value="SAINS (REMOTE SENSING)">SAINS (REMOTE SENSING)</option>
                <option value="SAINS (SAINS KIMIA)">SAINS (SAINS KIMIA)</option>
                <option value="SAINS (SAINS PEMBELAJARAN)">SAINS (SAINS PEMBELAJARAN)</option>
                <option value="SAINS (SENI BINA)">SAINS (SENI BINA)</option>
                <option value="SAINS (SISTEM CERDAS)">SAINS (SISTEM CERDAS)</option>
                <option value="SAINS (STATISTIK)">SAINS (STATISTIK)</option>
                <option value="SAINS (TEKNOLOGI DAN PENGURUSAN PERLADANGAN)">SAINS (TEKNOLOGI DAN PENGURUSAN
                  PERLADANGAN)</option>
                <option value="SAINS (TEKNOLOGI TUMBUHAN)">SAINS (TEKNOLOGI TUMBUHAN)</option>
                <option value="SAINS (TOKSIKOLOGI KESIHATAN)">SAINS (TOKSIKOLOGI KESIHATAN)</option>
                <option value="SAINS - SAINS BIOMOLEKUL">SAINS - SAINS BIOMOLEKUL</option>
                <option value="SAINS AGROTEKNOLOGI (SAINS TANAMAN)">SAINS AGROTEKNOLOGI (SAINS TANAMAN)</option>
                <option value="SAINS AKTUARI">SAINS AKTUARI</option>
                <option value="SAINS ATMOSFERA">SAINS ATMOSFERA</option>
                <option value="SAINS BAHAN">SAINS BAHAN</option>
                <option value="SAINS BIO KESIHATAN">SAINS BIO KESIHATAN</option>
                <option value="SAINS BIO PERUBATAN">SAINS BIO PERUBATAN</option>
                <option value="SAINS BIOINDUSTRI">AKUAKULTURSAINS BIOINDUSTRI</option>
                <option value="SAINS BIOLOGI">SAINS BIOLOGI</option>
                <option value="SAINS BUMI">SAINS BUMI</option>
                <option value="SAINS DAN KOMPUTER SERTA PENDIDIKAN (FIZIK)">SAINS DAN KOMPUTER SERTA PENDIDIKAN (FIZIK)
                </option>
                <option value="SAINS DAN KOMPUTER SERTA PENDIDIKAN (KIMIA)">SAINS DAN KOMPUTER SERTA PENDIDIKAN (KIMIA)
                </option>
                <option value="SAINS DAN KOMPUTER SERTA PENDIDIKAN (MATEMATIK)">SAINS DAN KOMPUTER SERTA PENDIDIKAN
                  (MATEMATIK)</option>
                <option value="SAINS DAN PENGURUSAN ALAM SEKITAR">SAINS DAN PENGURUSAN ALAM SEKITAR</option>
                <option value="SAINS DAN PENGURUSAN SISTEM">SAINS DAN PENGURUSAN SISTEM</option>
                <option value="SAINS DAN PENGURUSAN SUMBER AKUATIK">SAINS DAN PENGURUSAN SUMBER AKUATIK</option>
                <option value="SAINS DAN PENGURUSAN SUMBER HAIWAN">SAINS DAN PENGURUSAN SUMBER HAIWAN</option>
                <option value="SAINS DAN PENGURUSAN SUMBER TUMBUHAN">SAINS DAN PENGURUSAN SUMBER TUMBUHAN</option>
                <option value="SAINS DAN TEKNOLOGI">SAINS DAN TEKNOLOGI</option>
                <option value="SAINS DAN TEKNOLOGI ALAM SEKITAR">SAINS DAN TEKNOLOGI ALAM SEKITAR</option>
                <option value="SAINS DAN TEKNOLOGI MAKANAN">SAINS DAN TEKNOLOGI MAKANAN</option>
                <option value="SAINS DENGAN PENDIDIKAN">SAINS DENGAN PENDIDIKAN</option>
                <option value="SAINS FALSAFAH DAN KETAMADUNAN">SAINS FALSAFAH DAN KETAMADUNAN</option>
                <option value="SAINS FORENSIK">SAINS FORENSIK</option>
                <option value="SAINS GENETIK (KEPUJIAN)">SAINS GENETIK (KEPUJIAN)</option>
                <option value="SAINS GEOMATIK">SAINS GEOMATIK</option>
                <option value="SAINS GEOMATIK (SISTEM MAKLUMAT GEOGRAFI)">SAINS GEOMATIK (SISTEM MAKLUMAT GEOGRAFI)
                </option>
                <option value="SAINS GUNAAN">SAINS GUNAAN</option>
                <option value="SAINS GUNAAN (FIZIK ELEKTRONIK DAN INSTRUMENTASI)">SAINS GUNAAN (FIZIK ELEKTRONIK DAN
                  INSTRUMENTASI)</option>
                <option value="SAINS GUNAAN (FIZIK KEJURUTERAAN)">SAINS GUNAAN (FIZIK KEJURUTERAAN)</option>
                <option value="SAINS GUNAAN (FIZIK PERUBATAN)">SAINS GUNAAN (FIZIK PERUBATAN)</option>
                <option value="SAINS GUNAAN (GEOSAINS)">SAINS GUNAAN (GEOSAINS)</option>
                <option value="SAINS GUNAAN (KEUSAHAWANAN TEKNOLOGI PERTANIAN)">SAINS GUNAAN (KEUSAHAWANAN TEKNOLOGI
                  PERTANIAN)</option>
                <option value="SAINS GUNAAN (PERIKANAN)">SAINS GUNAAN (PERIKANAN)</option>
                <option value="SAINS GUNAAN (SAINS KELESTARIAN)">SAINS GUNAAN (SAINS KELESTARIAN)</option>
                <option value="SAINS GUNAAN (SAINS SUMBER ASLI)">SAINS GUNAAN (SAINS SUMBER ASLI)</option>
                <option value="SAINS GUNAAN (TEKNOLOGI BIOINDUSTRI)">SAINS GUNAAN (TEKNOLOGI BIOINDUSTRI)</option>
                <option value="SAINS GUNAAN (TEKNOLOGI MARITIM)">SAINS GUNAAN (TEKNOLOGI MARITIM)</option>
                <option value="SAINS GUNAAN (TEKNOLOGI PEMBANGUNAN PRODUK)">SAINS GUNAAN (TEKNOLOGI PEMBANGUNAN PRODUK)
                </option>
                <option value="SAINS GUNAAN AKUATIK">SAINS GUNAAN AKUATIK</option>
                <option value="SAINS GUNAAN DENGAN KEPUJIAN (BIOLOGI & PENGURUSAN VEKTOR & PARASIT)">SAINS GUNAAN DENGAN
                  KEPUJIAN (BIOLOGI & PENGURUSAN VEKTOR & PARASIT)/option>
                <option value="SAINS GUNAAN DENGAN PENGAJIAN ISLAM (ALAM SEKITAR)">SAINS GUNAAN DENGAN PENGAJIAN ISLAM
                  (ALAM SEKITAR)</option>
                <option value="SAINS GUNAAN DENGAN PENGAJIAN ISLAM (BIOINFORMATIK)">SAINS GUNAAN DENGAN PENGAJIAN ISLAM
                  (BIOINFORMATIK)</option>
                <option value="SAINS GUNAAN DENGAN PENGAJIAN ISLAM (BIOKIMIA)">SAINS GUNAAN DENGAN PENGAJIAN ISLAM
                  (BIOKIMIA)</option>
                <option value="SAINS GUNAAN DENGAN PENGAJIAN ISLAM (BIOTEKNOLOGI)">SAINS GUNAAN DENGAN PENGAJIAN ISLAM
                  (BIOTEKNOLOGI)</option>
                <option value="SAINS GUNAAN DENGAN PENGAJIAN ISLAM (EKOLOGI DAN BIODIVERSITI)">SAINS GUNAAN DENGAN
                  PENGAJIAN ISLAM (EKOLOGI DAN BIODIVERSITI)</option>
                <option value="SAINS GUNAAN DENGAN PENGAJIAN ISLAM (GENETIK DAN BIOLOGI MOLEKUL)">SAINS GUNAAN DENGAN
                  PENGAJIAN ISLAM (GENETIK DAN BIOLOGI MOLEKUL)</option>
                <option value="SAINS GUNAAN DENGAN PENGAJIAN ISLAM (MIKROBIOLOGI)">SAINS GUNAAN DENGAN PENGAJIAN ISLAM
                  (MIKROBIOLOGI)</option>
                <option value="SAINS GUNAAN DENGAN PENGAJIAN ISLAM (SAINS BIOKESIHATAN)">SAINS GUNAAN DENGAN PENGAJIAN
                  ISLAM (SAINS BIOKESIHATAN)</option>
                <option value="SAINS GUNAAN DENGAN PENGAJIAN ISLAM (TEKNOLOGI MAKLUMAT)">SAINS GUNAAN DENGAN PENGAJIAN
                  ISLAM (TEKNOLOGI MAKLUMAT)</option>
                <option value="SAINS HAIWAN DAN PENTERNAKAN">SAINS HAIWAN DAN PENTERNAKAN</option>
                <option value="SAINS HORTIKULTUR">SAINS HORTIKULTUR</option>
                <option value="SAINS INDUSTRI">SAINS INDUSTRI</option>
                <option value="SAINS INSTRUMENTASI">SAINS INSTRUMENTASI</option>
                <option value="SAINS KEJURULATIHAN (COACHING SCIENCE)">SAINS KEJURULATIHAN (COACHING SCIENCE)</option>
                <option value="SAINS KEJURURAWATAN">SAINS KEJURURAWATAN</option>
                <option value="SAINS KEJURUTERAAN TELEKOMUNIKASI DAN MAKLUMAT">SAINS KEJURUTERAAN TELEKOMUNIKASI DAN
                  MAKLUMAT</option>
                <option value="SAINS KEMANUSIAAN">SAINS KEMANUSIAAN</option>
                <option value="SAINS KEMANUSIAAN (PSIKOLOGI)">SAINS KEMANUSIAAN (PSIKOLOGI)</option>
                <option value="SAINS KEMANUSIAAN (SEJARAH & TAMADUN)">SAINS KEMANUSIAAN (SEJARAH & TAMADUN)</option>
                <option value="SAINS KEMANUSIAAN DALAM BIDANG SAINS POLITIK">SAINS KEMANUSIAAN DALAM BIDANG SAINS
                  POLITIK</option>
                <option value="SAINS KEMASYARAKATAN">SAINS KEMASYARAKATAN</option>
                <option value="SAINS KEMASYARAKATAN (ANTROPOLOGI DAN SOSIOLOGI)">SAINS KEMASYARAKATAN (ANTROPOLOGI DAN
                  SOSIOLOGI)</option>
                <option value="SAINS KEMASYARAKATAN (KEPUJIAN) (EKONOMI)">SAINS KEMASYARAKATAN (KEPUJIAN) (EKONOMI)
                </option>
                <option value="SAINS KEMASYARAKATAN (PERANCANGAN DAN PENGURUSAN PEMBANGUNAN)">SAINS KEMASYARAKATAN
                  (PERANCANGAN DAN PENGURUSAN PEMBANGUNAN)</option>
                <option value="SAINS KEMASYARAKATAN (SAINS POLITIK)">SAINS KEMASYARAKATAN (SAINS POLITIK)</option>
                <option value="SAINS KESETIAUSAHAAN (STENOGRAPHY)">SAINS KESETIAUSAHAAN (STENOGRAPHY)</option>
                <option value="SAINS KESIHATAN">SAINS KESIHATAN</option>
                <option value="SAINS KESIHATAN (PEMAKANAN)">SAINS KESIHATAN (PEMAKANAN)</option>
                <option value="SAINS KESIHATAN (PENJAGAAN PRA HOSPITAL/PRE HOSPITAL)">SAINS KESIHATAN (PENJAGAAN PRA
                  HOSPITAL/PRE HOSPITAL)</option>
                <option value="SAINS KESIHATAN PERSEKITARAN & PEKERJAAN">SAINS KESIHATAN PERSEKITARAN & PEKERJAAN
                </option>
                <option value="SAINS KOGNITIF">SAINS KOGNITIF</option>
                <option value="SAINS KOMPUTER">SAINS KOMPUTER</option>
                <option value="SAINS KOMPUTER & PENGURUSAN PERNIAGAAN">SAINS KOMPUTER & PENGURUSAN PERNIAGAAN</option>
                <option value="SAINS KOMPUTER (BIOINFORMATIK)">SAINS KOMPUTER (BIOINFORMATIK)</option>
                <option value="SAINS KOMPUTER (KEJURUTERAAN PERISIAN DAN KEPINTARAN)">SAINS KOMPUTER (KEJURUTERAAN
                  PERISIAN DAN KEPINTARAN)</option>
                <option value="SAINS KOMPUTER (KEJURUTERAAN PERISIAN)">SAINS KOMPUTER (KEJURUTERAAN PERISIAN)</option>
                <option value="SAINS KOMPUTER (KEPINTARAN BUATAN)">SAINS KOMPUTER (KEPINTARAN BUATAN)</option>
                <option value="SAINS KOMPUTER (KESELAMATAN DAN JAMINAN MAKLUMAT)">SAINS KOMPUTER (KESELAMATAN DAN
                  JAMINAN MAKLUMAT)</option>
                <option value="SAINS KOMPUTER (KESELAMATAN RANGKAIAN DAN DIGITAL FORENSIK)">SAINS KOMPUTER (KESELAMATAN
                  RANGKAIAN DAN DIGITAL FORENSIK)</option>
                <option value="SAINS KOMPUTER (KESELAMATAN SISTEM KOMPUTER)">SAINS KOMPUTER (KESELAMATAN SISTEM
                  KOMPUTER)</option>
                <option value="SAINS KOMPUTER (KOMPUTERAN INDUSTRI)">SAINS KOMPUTER (KOMPUTERAN INDUSTRI)</option>
                <option value="SAINS KOMPUTER (KOMPUTERAN INTERNET)">SAINS KOMPUTER (KOMPUTERAN INTERNET)</option>
                <option value="SAINS KOMPUTER (MULTIMEDIA)">SAINS KOMPUTER (MULTIMEDIA)</option>
                <option value="SAINS KOMPUTER (PEMBANGUNAN PERISIAN)">SAINS KOMPUTER (PEMBANGUNAN PERISIAN)</option>
                <option value="SAINS KOMPUTER (PENGKOMPUTERAN MULTIMEDIA)">SAINS KOMPUTER (PENGKOMPUTERAN MULTIMEDIA)
                </option>
                <option value="SAINS KOMPUTER (PENGKOMPUTERAN NETSENTRIK)">SAINS KOMPUTER (PENGKOMPUTERAN NETSENTRIK)
                </option>
                <option value="AINS KOMPUTER (PENGURUSAN PANGKALAN DATA)">AINS KOMPUTER (PENGURUSAN PANGKALAN DATA)
                </option>
                <option value="SAINS KOMPUTER (PENGURUSAN SISTEM DAN RANGKAIAN)">SAINS KOMPUTER (PENGURUSAN SISTEM DAN
                  RANGKAIAN)</option>
                <option value="SAINS KOMPUTER (PERISIAN GRAFIK DAN MULTIMEDIA)">SAINS KOMPUTER (PERISIAN GRAFIK DAN
                  MULTIMEDIA)</option>
                <option value="SAINS KOMPUTER (RANGKAIAN KOMPUTER)">SAINS KOMPUTER (RANGKAIAN KOMPUTER)</option>
                <option value="SAINS KOMPUTER (SISTEM CERDAS)">SAINS KOMPUTER (SISTEM CERDAS)</option>
                <option value="SAINS KOMPUTER (SISTEM KOMPUTER DAN RANGKAIAN)">SAINS KOMPUTER (SISTEM KOMPUTER DAN
                  RANGKAIAN)</option>
                <option value="SAINS KOMPUTER (SISTEM MAKLUMAT)">SAINS KOMPUTER (SISTEM MAKLUMAT)</option>
                <option value="SAINS KOMPUTER (TEKNOLOGI MAKLUMAT)">SAINS KOMPUTER (TEKNOLOGI MAKLUMAT)</option>
                <option value="SAINS KOMPUTER (TEKNOLOGI WEB)">SAINS KOMPUTER (TEKNOLOGI WEB)</option>
                <option value="SAINS KOMPUTER - SAINS KOMPUTAN">SAINS KOMPUTER - SAINS KOMPUTAN</option>
                <option value="SAINS KOMPUTER DENGAN INFORMATIK MARITIM">SAINS KOMPUTER DENGAN INFORMATIK MARITIM
                </option>
                <option value="SAINS KUANTITATIF">SAINS KUANTITATIF</option>
                <option value="SAINS KUANTITATIF/SAINS MATEMATIK">SAINS KUANTITATIF/SAINS MATEMATIK</option>
                <option value="SAINS KUANTUM DAN TENAGA">SAINS KUANTUM DAN TENAGA</option>
                <option value="SAINS LAUT/SAMUDERA/OCEANOGRAPHY">SAINS LAUT/SAMUDERA/OCEANOGRAPHY</option>
                <option value="SAINS MAJOR MATEMATIK">ASAINS MAJOR MATEMATIK</option>
                <option value="SAINS MAKANAN & PEMAKANAN">SAINS MAKANAN & PEMAKANAN</option>
                <option value="SAINS MAKANAN (PERKHIDMATAN MAKANAN DAN PEMAKANAN)">SAINS MAKANAN (PERKHIDMATAN MAKANAN
                  DAN PEMAKANAN)</option>
                <option value="SAINS MAKANAN (PERKHIDMATAN MAKANAN)">SAINS MAKANAN (PERKHIDMATAN MAKANAN)</option>
                <option value="SAINS MAKANAN DAN MIKROBIOLOGI">SAINS MAKANAN DAN MIKROBIOLOGI</option>
                <option value="SAINS MAKANAN DAN PENGURUSAN">SAINS MAKANAN DAN PENGURUSAN</option>
                <option value="SAINS MAKLUMAT PENGURUSAN PERPUSTAKAAN">SAINS MAKLUMAT PENGURUSAN PERPUSTAKAAN</option>
                <option value="SAINS MAKMAL KLINIKAL">SAINS MAKMAL KLINIKAL</option>
                <option value="SAINS MAKMAL PERUBATAN">SAINS MAKMAL PERUBATAN</option>
                <option value="SAINS MARIN">SAINS MARIN</option>
                <option value="SAINS MATEMATIK DAN KOMPUTER">SAINS MATEMATIK DAN KOMPUTER</option>
                <option value="SAINS NUKLEAR">SAINS NUKLEAR</option>
                <option value="SAINS NUKLEUS">SAINS NUKLEUS</option>
                <option value="SAINS PARAMEDIK">SAINS PARAMEDIK</option>
                <option value="SAINS PEMAKANAN">SAINS PEMAKANAN</option>
                <option value="SAINS PEMBANGUNAN">SAINS PEMBANGUNAN</option>
                <option value="SAINS PEMBANGUNAN MANUSIA">SAINS PEMBANGUNAN MANUSIA</option>
                <option value="SAINS PEMBANGUNAN PERMAINAN">SAINS PEMBANGUNAN PERMAINAN</option>
                <option value="SAINS PEMBINAAN">SAINS PEMBINAAN</option>
                <option value="SAINS PEMUTUSAN">SAINS PEMUTUSAN</option>
                <option value="SAINS PENDIDIKAN">SAINS PENDIDIKAN</option>
                <option value="SAINS PENGANGKUTAN DAN LOGISTIK">SAINS PENGANGKUTAN DAN LOGISTIK</option>
                <option value="SAINS PENGGUNA">SAINS PENGGUNA</option>
                <option value="SAINS PENGKHUSUSAN AKUATIK">SAINS PENGKHUSUSAN AKUATIK</option>
                <option value="SAINS PENGKOMPUTERAN STATISTIK DAN PENYELIDIKAN OPERASI">SAINS PENGKOMPUTERAN STATISTIK
                  DAN PENYELIDIKAN OPERASI</option>
                <option value="SAINS PENGURUSAN DAN PEMULIHARAAN WARISAN">SAINS PENGURUSAN DAN PEMULIHARAAN WARISAN
                </option>
                <option value="SAINS PENGURUSAN PERNIAGAANTANI">SAINS PENGURUSAN PERNIAGAANTANI</option>
                <option value="SAINS PENGURUSAN PROJEK DAN KEMUDAHAN">SAINS PENGURUSAN PROJEK DAN KEMUDAHAN</option>
                <option value="SAINS PENTADBIRAN">SAINS PENTADBIRAN</option>
                <option value="SAINS PERHUTANAN">SAINS PERHUTANAN</option>
                <option value="SAINS PERHUTANAN (PERLADANGAN HUTAN DAN PERHUTANI)">SAINS PERHUTANAN (PERLADANGAN HUTAN
                  DAN PERHUTANI)</option>
                <option value="SAINS PERPUSTAKAAN">SAINS PERPUSTAKAAN</option>
                <option value="SAINS PERPUSTAKAAN DAN MAKLUMAT">SAINS PERPUSTAKAAN DAN MAKLUMAT</option>
                <option value="SAINS PERTUTURAN">SAINS PERTUTURAN</option>
                <option value="SAINS PERUBATAN">SAINS PERUBATAN</option>
                <option value="SAINS PERUBATAN (EPIDEMIOLOGI)">SAINS PERUBATAN (EPIDEMIOLOGI)</option>
                <option value="SAINS PERUBATAN (KESIHATAN AWAM)">SAINS PERUBATAN (KESIHATAN AWAM)</option>
                <option value="SAINS PERUBATAN HOMEOPATI">SAINS PERUBATAN HOMEOPATI</option>
                <option value="SAINS PERUBATAN KECEMASAN">SAINS PERUBATAN KECEMASAN</option>
                <option value="SAINS PERUMAHAN, BANGUNAN & PERANCANGAN">SAINS PERUMAHAN, BANGUNAN & PERANCANGAN</option>
                <option value="SAINS POLITIK">SAINS POLITIK</option>
                <option value="SAINS POLITIK & PENGURUSAN ORGANISASI">SAINS POLITIK & PENGURUSAN ORGANISASI</option>
                <option value="SAINS POLITIK DAN GEOGRAFI">SAINS POLITIK DAN GEOGRAFI</option>
                <option value="SAINS POLITIK DAN ILMU WAHYU">SAINS POLITIK DAN ILMU WAHYU</option>
                <option value="SAINS POLITIK DAN PENGURUSAN AWAM">SAINS POLITIK DAN PENGURUSAN AWAM</option>
                <option value="SAINS POLITIK DAN PERSURATAN MELAYU">SAINS POLITIK DAN PERSURATAN MELAYU</option>
                <option value="SAINS POLITIK DAN SEJARAH">SAINS POLITIK DAN SEJARAH</option>
                <option value="SAINS SEKITARAN">SAINS SEKITARAN</option>
                <option value="SAINS SENAMAN DAN SUKAN">SAINS SENAMAN DAN SUKAN</option>
                <option value="SAINS SERTA PENDIDIKAN (KIMIA)">SAINS SERTA PENDIDIKAN (KIMIA)</option>
                <option value="SAINS SERTA PENDIDIKAN (MATEMATIK)">SAINS SERTA PENDIDIKAN (MATEMATIK)</option>
                <option value="SAINS SERTA PENDIDIKAN (PENGAJIAN ISLAM)">SAINS SERTA PENDIDIKAN (PENGAJIAN ISLAM)
                </option>
                <option value="SAINS SERTA PENDIDIKAN (PRA-SEKOLAH)">SAINS SERTA PENDIDIKAN (PRA-SEKOLAH)</option>
                <option value="SAINS SOSIAL (ANTROPOLOGI DAN DAKWAH)">SAINS SOSIAL (ANTROPOLOGI DAN DAKWAH)</option>
                <option value="SAINS SOSIAL (ANTROPOLOGI DAN SOSIOLOGI">SAINS SOSIAL (ANTROPOLOGI DAN SOSIOLOGI</option>
                <option value="SAINS SOSIAL (BAHASA DAN KOMUNIKASI SILANG BUDAYA)">SAINS SOSIAL (BAHASA DAN KOMUNIKASI
                  SILANG BUDAYA)</option>
                <option value="SAINS SOSIAL (BAHASA DAN KOMUNITI SILANG BUDAYA)">SAINS SOSIAL (BAHASA DAN KOMUNITI
                  SILANG BUDAYA)</option>
                <option value="SAINS SOSIAL (GEOGRAFI)">SAINS SOSIAL (GEOGRAFI)</option>
                <option value="SAINS SOSIAL (HUBUNGAN ANTARABANGSA)">SAINS SOSIAL (HUBUNGAN ANTARABANGSA)</option>
                <option value="SAINS SOSIAL (HUBUNGAN INDUSTRI)">SAINS SOSIAL (HUBUNGAN INDUSTRI)</option>
                <option value="SAINS SOSIAL (KAJIAN HUBUNGAN INDUSTRI DAN PERBURUHAN)">SAINS SOSIAL (KAJIAN HUBUNGAN
                  INDUSTRI DAN PERBURUHAN)</option>
                <option value="SAINS SOSIAL (KAJIAN KOMUNIKASI)">SAINS SOSIAL (KAJIAN KOMUNIKASI)</option>
                <option value="SAINS SOSIAL (PEMBANGUNAN MANUSIA)">SAINS SOSIAL (PEMBANGUNAN MANUSIA)</option>
                <option value="SAINS SOSIAL (PENGAJIAN KERJA SOSIAL)/(KERJA SOSIAL)">SAINS SOSIAL (PENGAJIAN KERJA
                  SOSIAL)/(KERJA SOSIAL)</option>
                <option value="SAINS SOSIAL (PERANCANGAN & PENGURUSAN PEMBANGUNAN)">SAINS SOSIAL (PERANCANGAN &
                  PENGURUSAN PEMBANGUNAN)</option>
                <option value="SAINS SOSIAL (PSIKOLOGI)">SAINS SOSIAL (PSIKOLOGI)</option>
                <option value="SAINS SOSIAL (SAINS PEMBANGUNAN)">SAINS SOSIAL (SAINS PEMBANGUNAN)</option>
                <option value="SAINS SOSIAL DALAM BIDANG SEJARAH">SAINS SOSIAL DALAM BIDANG SEJARAH</option>
                <option value="SAINS SUKAN">SAINS SUKAN</option>
                <option value="SAINS SUKAN (FISIOLOGI EKSESAIS)">SAINS SUKAN (FISIOLOGI EKSESAIS)</option>
                <option value="SAINS SUKAN (PSIKOLOGI SUKAN)">v</option>
                <option value="SAINS SUKAN (REHABILITASI SUKAN)">SAINS SUKAN (REHABILITASI SUKAN)</option>
                <option value="SAINS SUKAN (SAINS EKSESAIS)">SAINS SUKAN (SAINS EKSESAIS)</option>
                <option value="SAINS SUKAN - PENGURUSAN SUKAN">SAINS SUKAN - PENGURUSAN SUKAN</option>
                <option value="SAINS SUKAN DAN REKREASI">SAINS SUKAN DAN REKREASI</option>
                <option value="SAINS SUMBER AKUATIK DAN PENGURUSAN">SAINS SUMBER AKUATIK DAN PENGURUSAN</option>
                <option value="SAINS TAMAN DAN REKREASI">SAINS TAMAN DAN REKREASI</option>
                <option value="SAINS TEKNOLOGI BAHAN">SAINS TEKNOLOGI BAHAN</option>
                <option value="SAINS TEKNOLOGI KAYU">SAINS TEKNOLOGI KAYU</option>
                <option value="SAINS TEKNOLOGI MARIN">SAINS TEKNOLOGI MARIN</option>
                <option value="SAINS TUMBUHAN & TANAH">SAINS TUMBUHAN & TANAH</option>
                <option value="SAINS UKUR DAN GEOMATIK">SAINS UKUR DAN GEOMATIK</option>
                <option value="SAINS VETERINAR (VETERINARY SCIENCE)">SAINS VETERINAR (VETERINARY SCIENCE)</option>
                <option value="SASTERA (BAHASA INGGERIS UNTUK PROFESIONAL)">SASTERA (BAHASA INGGERIS UNTUK PROFESIONAL)
                </option>
                <option value="SASTERA (KEPIMPINAN)">SASTERA (KEPIMPINAN)</option>
                <option value="SASTERA (KERAJAAN DAN POLISI UMUM)">SASTERA (KERAJAAN DAN POLISI UMUM)</option>
                <option value="SASTERA (PENGAJIAN ALAM SEKITAR)">v</option>
                <option value="SASTERA (PENGAJIAN BAHASA MELAYU)">SASTERA (PENGAJIAN BAHASA MELAYU)</option>
                <option value="SASTERA (SENI KREATIF)">ASASTERA (SENI KREATIF)</option>
                <option value="SASTERA DALAM PENGAJIAN LIBERAL">SASTERA DALAM PENGAJIAN LIBERAL</option>
                <option value="SASTERA DGN P'KAN(PERDAGANGAN & P'AKAUN)">SASTERA DGN P'KAN(PERDAGANGAN & P'AKAUN)
                </option>
                <option value="SCIENCE (MEDICAL BIOSCIENCE)">SCIENCE (MEDICAL BIOSCIENCE)</option>
                <option value="SCIENCE (SHIPPING AND PORT MANAGEMENT)">SCIENCE (SHIPPING AND PORT MANAGEMENT)</option>
                <option value="SCIENCE EDUCATION">SCIENCE EDUCATION</option>
                <option value="SCIENCE IN ADVANCED MATERIALS SCIENCE AND ENGINEERING">SCIENCE IN ADVANCED MATERIALS
                  SCIENCE AND ENGINEERING</option>
                <option value="SCIENCE IN MANAGEMENT AND TECHNOLOGY OF WATER AND WASTEWATER">SCIENCE IN MANAGEMENT AND
                  TECHNOLOGY OF WATER AND WASTEWATER</option>
                <option value="SCIENCES IN PSYCHOLOGY AND COGNITIVE NEUROSCIENCE">SCIENCES IN PSYCHOLOGY AND COGNITIVE
                  NEUROSCIENCE</option>
                <option value="SCIENCES, TECHNOLOGIES AND HEALTH (MECHANICS OF ENERGY AND ENGINEERING)">SCIENCES,
                  TECHNOLOGIES AND HEALTH (MECHANICS OF ENERGY AND ENGINEERING)</option>
                <option value="SCIENCES, TECHNOLOGIES AND HEALTH (PHYSICS AND SCIENCES FOR ENGINEER)">SCIENCES,
                  TECHNOLOGIES AND HEALTH (PHYSICS AND SCIENCES FOR ENGINEER)</option>
                <option value="SEBARAN AM-IKLAN">SEBARAN AM-IKLAN</option>
                <option value="SEBARAN AM-KEWARTAWANAN">SEBARAN AM-KEWARTAWANAN</option>
                <option value="SEBARAN AM-PENYIARAN">SEBARAN AM-PENYIARAN</option>
                <option value="SEBARAN AM-PERHUBUNGAN AWAM">SEBARAN AM-PERHUBUNGAN AWAM</option>
                <option value="SECURITY MANAGEMENT/PENGURUSAN KESELAMATAN">SECURITY MANAGEMENT/PENGURUSAN KESELAMATAN
                </option>
                <option value="SEJARAH">SEJARAH</option>
                <option value="SEJARAH & ANTROPOLOGI SOSIOLOGI">SEJARAH & ANTROPOLOGI SOSIOLOGI</option>
                <option value="SEJARAH DAN KEBUDAYAAN ISLAM">SEJARAH DAN KEBUDAYAAN ISLAM</option>
                <option value="SEJARAH DAN KEBUDAYAAN ISLAM">SEJARAH DAN KEBUDAYAAN ISLAM</option>
                <option value="SEJARAH DAN KESUSASTERAAN INGGERIS">SEJARAH DAN KESUSASTERAAN INGGERIS</option>
                <option value="SEJARAH DAN KETAMADUNAN">SEJARAH DAN KETAMADUNAN</option>
                <option value="SEJARAH DAN LINGUISTIK">SEJARAH DAN LINGUISTIK</option>
                <option value="SEJARAH DAN PENGAJIAN INDIA">SEJARAH DAN PENGAJIAN INDIA</option>
                <option value="SEJARAH DAN PENGAJIAN MELAYU">SEJARAH DAN PENGAJIAN MELAYU</option>
                <option value="SEJARAH DAN PERSURATAN MELAYU">SEJARAH DAN PERSURATAN MELAYU</option>
                <option value="SEJARAH DAN PROGRAM KHAS EKONOMI">SEJARAH DAN PROGRAM KHAS EKONOMI</option>
                <option value="SEJARAH DAN PSIKOLOGI">SEJARAH DAN PSIKOLOGI</option>
                <option value="EJARAH DAN TAMADUN ISLAM">EJARAH DAN TAMADUN ISLAM</option>
                <option value="SEJARAH KAJIPURBA">SEJARAH KAJIPURBA</option>
                <option value="SEJARAH SENI DAN PENGURUSAN KEBUDAYAAN">SEJARAH SENI DAN PENGURUSAN KEBUDAYAAN</option>
                <option value="SENI GUNAAN - CINEMATOGRAPHY">SENI GUNAAN - CINEMATOGRAPHY</option>
                <option value="SENI GUNAAN - PENGURUSAN SENI">SENI GUNAAN - PENGURUSAN SENI</option>
                <option value="SENI GUNAAN - SENI HALUS">SENI GUNAAN - SENI HALUS</option>
                <option value="SENI HALUS (GRAFIK KOMUNIKASI)">SENI HALUS (GRAFIK KOMUNIKASI)</option>
                <option value="SENI HALUS (REKABENTUK DAN TEKNOLOGI MEDIA BARU)">SENI HALUS (REKABENTUK DAN TEKNOLOGI
                  MEDIA BARU)</option>
                <option value="SENI HALUS (REKABENTUK PRODUK)">SENI HALUS (REKABENTUK PRODUK)</option>
                <option value="SENI KREATIF">SENI KREATIF</option>
                <option value="SENI LUKIS DAN SENI REKA (SENI REKA GRAFIK DAN MEDIA DIGITAL)">SENI LUKIS DAN SENI REKA
                  (SENI REKA GRAFIK DAN MEDIA DIGITAL)</option>
                <option value="SENI LUKIS DAN SENI REKA (SENI REKA PERINDUSTRIAN)">SENI LUKIS DAN SENI REKA (SENI REKA
                  PERINDUSTRIAN)</option>
                <option value="SENI PERSEMBAHAN (DRAMA)">SENI PERSEMBAHAN (DRAMA)</option>
                <option value="SENI PERSEMBAHAN (PENGURUSAN SENI)">SENI PERSEMBAHAN (PENGURUSAN SENI)</option>
                <option value="SENI PERSEMBAHAN (PENULISAN SENI LAYAR)">SENI PERSEMBAHAN (PENULISAN SENI LAYAR)</option>
                <option value="SENI PERSEMBAHAN (SENI LAYAR)">SENI PERSEMBAHAN (SENI LAYAR)</option>
                <option value="SENI REKA GRAFIK DIGITAL">SENI REKA GRAFIK DIGITAL</option>
                <option value="SENI RUPABUMI">SENI RUPABUMI</option>
                <option value="SENI RUPABUMI">SENI RUPABUMI</option>
                <option value="SENI TARI">SENI TARI</option>
                <option value="SENIBINA">SENIBINA</option>
                <option value="SENIBINA DALAMAN(INTERIOR ARCHITECTURE)">SENIBINA DALAMAN(INTERIOR ARCHITECTURE)</option>
                <option value="SENIFOTO (PHOTOGRAPHY)">SENIFOTO (PHOTOGRAPHY)</option>
                <option value="SENIKRAF (BATIK)">SENIKRAF (BATIK)</option>
                <option value="SENIKRAF (KAYU)">SENIKRAF (KAYU)</option>
                <option value="SENIKRAF (LOGAM)">SENIKRAF (LOGAM)</option>
                <option value="SENIKRAF (SERAMIK)">SENIKRAF (SERAMIK)</option>
                <option value="SENIKRAF (TENUNAN)">SENIKRAF (TENUNAN)</option>
                <option value="SENILAKON">SENILAKON</option>
                <option value="SENILUKIS/REKA">SENILUKIS/REKA</option>
                <option value="SENILUKIS/REKA - FESYEN">SENILUKIS/REKA - FESYEN</option>
                <option value="SENILUKIS/REKA - GRAFIK">SENILUKIS/REKA - GRAFIK</option>
                <option value="SENILUKIS/REKA - LOGAM HALUS">SENILUKIS/REKA - LOGAM HALUS</option>
                <option value="SENILUKIS/REKA - PERUSAHAAN">SENILUKIS/REKA - PERUSAHAAN</option>
                <option value="SENILUKIS/REKA - SENIHALUS">SENILUKIS/REKA - SENIHALUS</option>
                <option value="SENILUKIS/REKA - TEMBIKAR (CERAMICS)">SENILUKIS/REKA - TEMBIKAR (CERAMICS)</option>
                <option value="SENILUKIS/REKA -TEKSTIL (TEXTILE)">SENILUKIS/REKA -TEKSTIL (TEXTILE)</option>
                <option value="SENIREKA GRAFIK">SENIREKA GRAFIK</option>
                <option value="SERVIS KENDERAAN RINGAN">SERVIS KENDERAAN RINGAN</option>
                <option value="SHIPBUILDING AND OCEAN ENGINEERING">SHIPBUILDING AND OCEAN ENGINEERING</option>
                <option value="SHIPPING MANAGEMENT">SHIPPING MANAGEMENT</option>
                <option value="SIASAH SYAR'IYAH (SYARIAH POLITIK)">SIASAH SYAR'IYAH (SYARIAH POLITIK)</option>
                <option value="SIBER FORENSIK">SIBER FORENSIK</option>
                <option value="SINARAN PERUBATAN">SINARAN PERUBATAN</option>
                <option value="SISTEM DAN PENGURUSAN MAKLUMAT">SISTEM DAN PENGURUSAN MAKLUMAT</option>
                <option value="SISTEM DAN RANGKAIAN KOMPUTER">SISTEM DAN RANGKAIAN KOMPUTER</option>
                <option value="SISTEM KOMPUTER">SISTEM KOMPUTER</option>
                <option value="SISTEM KOMPUTER DAN KOMUNIKASI">SISTEM KOMPUTER DAN KOMUNIKASI</option>
                <option value="SISTEM KOMPUTER DAN RANGKAIAN">SISTEM KOMPUTER DAN RANGKAIAN</option>
                <option value="SISTEM KOMPUTER DAN SOKONGAN">SISTEM KOMPUTER DAN SOKONGAN</option>
                <option value="SISTEM MAKLUMAT GEOGRAFI">SISTEM MAKLUMAT GEOGRAFI</option>
                <option value="SISTEM MAKLUMAT PERNIAGAAN">SISTEM MAKLUMAT PERNIAGAAN</option>
                <option value="SISTEM MULTIMEDIA">SISTEM MULTIMEDIA</option>
                <option value="SISTEM PENGURUSAN AUTOMOTIF">SISTEM PENGURUSAN AUTOMOTIF</option>
                <option value="SISTEM PENGURUSAN MAKLUMAT">SISTEM PENGURUSAN MAKLUMAT</option>
                <option value="SOCIAL SCIENCE (GENDER STUDIES)">SOCIAL SCIENCE (GENDER STUDIES)</option>
                <option value="SOSIO BUDAYA MELAYU">SOSIO BUDAYA MELAYU</option>
                <option value="SOSIOLOGI">SOSIOLOGI</option>
                <option value="SOSIOLOGI PERBANDARAN">SOSIOLOGI PERBANDARAN</option>
                <option value="STATISTIK">STATISTIK</option>
                <option value="STATISTIK DENGAN PENGURUSAN PERNIAGAAN">STATISTIK DENGAN PENGURUSAN PERNIAGAAN</option>
                <option value="STATISTIK EKONOMI">STATISTIK EKONOMI</option>
                <option value="STATISTIK GUNAAN">STATISTIK GUNAAN</option>
                <option value="STATISTIK GUNAAN & PENYELIDIKAN OPERASI">STATISTIK GUNAAN & PENYELIDIKAN OPERASI</option>
                <option value="STATISTIK INDUSTRI">STATISTIK INDUSTRI</option>
                <option value="STRATEGIC STUDIES">STRATEGIC STUDIES</option>
                <option value="SURVEYING AND MAPPING SCIENCES">SURVEYING AND MAPPING SCIENCES</option>
                <option value="SYARIAH">SYARIAH</option>
                <option value="SYARIAH (EKONOMI DAN PERBANKAN ISLAM)">SYARIAH (EKONOMI DAN PERBANKAN ISLAM)</option>
                <option value="SYARIAH (FALAK SYARII)">SYARIAH (FALAK SYARII)</option>
                <option value="SYARIAH DAN EKONOMI">SYARIAH DAN EKONOMI</option>
                <option value="SYARIAH DAN PENGAJIAN ISLAM">SYARIAH DAN PENGAJIAN ISLAM</option>
                <option value="SYARIAH DAN PENGURUSAN">SYARIAH DAN PENGURUSAN</option>
                <option value="SYARIAH DAN POLITIK">SYARIAH DAN POLITIK</option>
                <option value="SYARIAH DAN UNDANG-UNDANG">SYARIAH DAN UNDANG-UNDANG</option>
                <option value="SYARIAH ISLAMIYYAH">SYARIAH ISLAMIYYAH</option>
                <option value="TAFSIR">TAFSIR</option>
                <option value="TAFSIR DAN HADIS">TAFSIR DAN HADIS</option>
                <option value="TAFSIR DAN ULUM QURAN">TAFSIR DAN ULUM QURAN</option>
                <option value="TAHFIZ AL-QURAN">TAHFIZ AL-QURAN</option>
                <option value="TAHFIZ AL-QURAN DAN QIRAAT">TAHFIZ AL-QURAN DAN QIRAAT</option>
                <option value="TAKHASSUS QIRAAT">TAKHASSUS QIRAAT</option>
                <option value="TAMAN ALAM SEMULAJADI DAN REKREASI">TAMAN ALAM SEMULAJADI DAN REKREASI</option>
                <option value="TARBIAH">TARBIAH</option>
                <option value="TEATER DENGAN KEPUJIAN (PENGURUSAN)">TEATER DENGAN KEPUJIAN (PENGURUSAN)</option>
                <option value="TECHNOLOGY COMMUNICATION">TECHNOLOGY COMMUNICATION</option>
                <option value="TEKNOLOGI (ALAM SEKITAR)">TEKNOLOGI (ALAM SEKITAR)</option>
                <option value="TEKNOLOGI (BIOPROSES)">TEKNOLOGI (BIOPROSES)</option>
                <option value="TEKNOLOGI (KEJURUTERAAN AWAM (LUKISAN STRUKTUR)">TEKNOLOGI (KEJURUTERAAN AWAM (LUKISAN
                  STRUKTUR)</option>
                <option value="TEKNOLOGI ALATAN DAN ACUAN MEKANIKAL">TEKNOLOGI ALATAN DAN ACUAN MEKANIKAL</option>
                <option value="TEKNOLOGI ANIMASI">TEKNOLOGI ANIMASI</option>
                <option value="TEKNOLOGI AUTOMOTIF">TEKNOLOGI AUTOMOTIF</option>
                <option value="TEKNOLOGI AUTOMOTIF - SERVIS SELEPAS JUALAN">TEKNOLOGI AUTOMOTIF - SERVIS SELEPAS JUALAN
                </option>
                <option value="TEKNOLOGI AWAM (BINAAN BANGUNAN)">TEKNOLOGI AWAM (BINAAN BANGUNAN)</option>
                <option value="TEKNOLOGI BAIK PULIH BADAN KENDERAAN">TEKNOLOGI BAIK PULIH BADAN KENDERAAN</option>
                <option value="TEKNOLOGI BANGUNAN">TEKNOLOGI BANGUNAN</option>
                <option value="TEKNOLOGI BEKALAN AIR DAN PEMBENTUNGAN">TEKNOLOGI BEKALAN AIR DAN PEMBENTUNGAN</option>
                <option value="TEKNOLOGI BERASASKAN KAYU">TEKNOLOGI BERASASKAN KAYU</option>
                <option value="TEKNOLOGI BINAAN">TEKNOLOGI BINAAN</option>
                <option value="TEKNOLOGI BIO SUMBER, KERTAS DAN PENGLITUP">TEKNOLOGI BIO SUMBER, KERTAS DAN PENGLITUP
                </option>
                <option value="TEKNOLOGI BIO-KOMPOSIT">TEKNOLOGI BIO-KOMPOSIT</option>
                <option value="TEKNOLOGI BIOPERUBATAN">TEKNOLOGI BIOPERUBATAN</option>
                <option value="TEKNOLOGI ELEKTRIK">TEKNOLOGI ELEKTRIK</option>
                <option value="TEKNOLOGI ELEKTRIK (KUASA)">TEKNOLOGI ELEKTRIK (KUASA)</option>
                <option value="TEKNOLOGI ELEKTRIK (PEMASANGAN & PERKHIDMATAN)">TEKNOLOGI ELEKTRIK (PEMASANGAN &
                  PERKHIDMATAN)</option>
                <option value="TEKNOLOGI ELEKTRIK DAN SISTEM PENGATOMAN">TEKNOLOGI ELEKTRIK DAN SISTEM PENGATOMAN
                </option>
                <option value="TEKNOLOGI ELEKTRO PENYADURAN">TEKNOLOGI ELEKTRO PENYADURAN</option>
                <option value="TEKNOLOGI ELEKTRONIK">TEKNOLOGI ELEKTRONIK</option>
                <option value="TEKNOLOGI ELEKTRONIK (AUDIO VISUAL)">TEKNOLOGI ELEKTRONIK (AUDIO VISUAL)</option>
                <option value="TEKNOLOGI ELEKTRONIK(INDUSTRI)">TEKNOLOGI ELEKTRONIK(INDUSTRI)</option>
                <option value="TEKNOLOGI FABRIK LOGAM">TEKNOLOGI FABRIK LOGAM</option>
                <option value="TEKNOLOGI INDUSTRI">TEKNOLOGI INDUSTRI</option>
                <option value="TEKNOLOGI INDUSTRI (TEKNOLOGI MAKANAN)">TEKNOLOGI INDUSTRI (TEKNOLOGI MAKANAN)</option>
                <option value="TEKNOLOGI JAMINAN KUALITI">TEKNOLOGI JAMINAN KUALITI</option>
                <option value="TEKNOLOGI KAWALAN MUTU DAN PERALATAN">TEKNOLOGI KAWALAN MUTU DAN PERALATAN</option>
                <option value="TEKNOLOGI KEJURUTERAAN (ACUAN DAN PERKAKASAN)">TEKNOLOGI KEJURUTERAAN (ACUAN DAN
                  PERKAKASAN)</option>
                <option value="TEKNOLOGI KEJURUTERAAN (ELEKTRIK DAN ELEKTRONIK MARIN)">TEKNOLOGI KEJURUTERAAN (ELEKTRIK
                  DAN ELEKTRONIK MARIN)</option>
                <option value="TEKNOLOGI KEJURUTERAAN (KEJURUTERAAN KUALITI)">TEKNOLOGI KEJURUTERAAN (KEJURUTERAAN
                  KUALITI)</option>
                <option value="TEKNOLOGI KEJURUTERAAN (KEPUJIAN) KIMPALAN DAN PEMERIKSAAN KUALITI">TEKNOLOGI
                  KEJURUTERAAN (KEPUJIAN) KIMPALAN DAN PEMERIKSAAN KUALITI</option>
                <option value="TEKNOLOGI KEJURUTERAAN (KOMUNIKASI MUDAHALIH)">TEKNOLOGI KEJURUTERAAN (KOMUNIKASI
                  MUDAHALIH)</option>
                <option value="TEKNOLOGI KEJURUTERAAN (PEMASANGAN DAN PENYELENGGARAN ELEKTROMEKANIKAL)">TEKNOLOGI
                  KEJURUTERAAN (PEMASANGAN DAN PENYELENGGARAN ELEKTROMEKANIKAL)</option>
                <option value="TEKNOLOGI KEJURUTERAAN (PEMBINAAN DAN SELENGGARAAN KAPAL)">TEKNOLOGI KEJURUTERAAN
                  (PEMBINAAN DAN SELENGGARAAN KAPAL)</option>
                <option value="TEKNOLOGI KEJURUTERAAN (PENGATURAN DAN KAWALAN BERAUTOMASI)">TEKNOLOGI KEJURUTERAAN
                  (PENGATURAN DAN KAWALAN BERAUTOMASI)</option>
                <option value="TEKNOLOGI KEJURUTERAAN (PENGURUSAN RANTAI PEMBEKALAN)">TEKNOLOGI KEJURUTERAAN (PENGURUSAN
                  RANTAI PEMBEKALAN)</option>
                <option value="TEKNOLOGI KEJURUTERAAN (PERALATAN ELEKTRIK DAN PEMASANGAN)">TEKNOLOGI KEJURUTERAAN
                  (PERALATAN ELEKTRIK DAN PEMASANGAN)</option>
                <option value="TEKNOLOGI KEJURUTERAAN (REKABENTUK DAN PEMBANGUNAN MEKANIKAL)">TEKNOLOGI KEJURUTERAAN
                  (REKABENTUK DAN PEMBANGUNAN MEKANIKAL)</option>
                <option value="TEKNOLOGI KEJURUTERAAN (REKABENTUK INDUSTRI)">TEKNOLOGI KEJURUTERAAN (REKABENTUK
                  INDUSTRI)</option>
                <option value="TEKNOLOGI KEJURUTERAAN (REKABENTUK PRODUK)">TEKNOLOGI KEJURUTERAAN (REKABENTUK PRODUK)
                </option>
                <option value="TEKNOLOGI KEJURUTERAAN (SENIBINA DAN PEMBINAAN KAPAL)">TEKNOLOGI KEJURUTERAAN (SENIBINA
                  DAN PEMBINAAN KAPAL)</option>
                <option value="TEKNOLOGI KEJURUTERAAN (SISTEM PEMBUATAN)">TEKNOLOGI KEJURUTERAAN (SISTEM PEMBUATAN)
                </option>
                <option value="TEKNOLOGI KEJURUTERAAN (TENAGA DAN PERSEKITARAN)">TEKNOLOGI KEJURUTERAAN (TENAGA DAN
                  PERSEKITARAN)</option>
                <option value="TEKNOLOGI KEJURUTERAAN - KEJURUTERAAN PENYELENGGARAAN FASILITI">TEKNOLOGI KEJURUTERAAN -
                  KEJURUTERAAN PENYELENGGARAAN FASILITI</option>
                <option value="TEKNOLOGI KEJURUTERAAN AUTOMOTIF">TEKNOLOGI KEJURUTERAAN AUTOMOTIF</option>
                <option value="TEKNOLOGI KEJURUTERAAN AUTOMOTIF (PEMBUATAN)">TEKNOLOGI KEJURUTERAAN AUTOMOTIF
                  (PEMBUATAN)</option>
                <option value="TEKNOLOGI KEJURUTERAAN AUTOMOTIF (PENYELENGGARAAN)">TEKNOLOGI KEJURUTERAAN AUTOMOTIF
                  (PENYELENGGARAAN)</option>
                <option value="TEKNOLOGI KEJURUTERAAN AWAM">TEKNOLOGI KEJURUTERAAN AWAM</option>
                <option value="TEKNOLOGI KEJURUTERAAN BANGUNAN">TEKNOLOGI KEJURUTERAAN BANGUNAN</option>
                <option value="TEKNOLOGI KEJURUTERAAN BINAAN">TEKNOLOGI KEJURUTERAAN BINAAN</option>
                <option value="TEKNOLOGI KEJURUTERAAN ELEKTRIK">TEKNOLOGI KEJURUTERAAN ELEKTRIK</option>
                <option value="TEKNOLOGI KEJURUTERAAN ELEKTRIK (KUASA INDUSTRI)">TEKNOLOGI KEJURUTERAAN ELEKTRIK (KUASA
                  INDUSTRI)</option>
                <option value="TEKNOLOGI KEJURUTERAAN ELEKTRIK (PENJAGA JENTERA - A1)">TEKNOLOGI KEJURUTERAAN ELEKTRIK
                  (PENJAGA JENTERA - A1)</option>
                <option value="TEKNOLOGI KEJURUTERAAN ELEKTRIK DAN ELEKTRONIK">TEKNOLOGI KEJURUTERAAN ELEKTRIK DAN
                  ELEKTRONIK</option>
                <option value="TEKNOLOGI KEJURUTERAAN ELEKTRIK DOMESTIK DAN INDUSTRI">TEKNOLOGI KEJURUTERAAN ELEKTRIK
                  DOMESTIK DAN INDUSTRI</option>
                <option value="TEKNOLOGI KEJURUTERAAN ELEKTRIK KUASA">TEKNOLOGI KEJURUTERAAN ELEKTRIK KUASA</option>
                <option value="TEKNOLOGI KEJURUTERAAN ELEKTRIKAL">TEKNOLOGI KEJURUTERAAN ELEKTRIKAL</option>
                <option value="TEKNOLOGI KEJURUTERAAN ELEKTRONIK">TEKNOLOGI KEJURUTERAAN ELEKTRONIK</option>
                <option value="TEKNOLOGI KEJURUTERAAN ELEKTRONIK (AUTOMASI INDUSTRI)">TEKNOLOGI KEJURUTERAAN ELEKTRONIK
                  (AUTOMASI INDUSTRI)</option>
                <option value="TEKNOLOGI KEJURUTERAAN ELEKTRONIK (INDUSTRI)">TEKNOLOGI KEJURUTERAAN ELEKTRONIK
                  (INDUSTRI)</option>
                <option value="TEKNOLOGI KEJURUTERAAN ELEKTRONIK (TELEKOMUNIKASI)">TEKNOLOGI KEJURUTERAAN ELEKTRONIK
                  (TELEKOMUNIKASI)</option>
                <option value="TEKNOLOGI KEJURUTERAAN ELEKTRONIK PERUBATAN">TEKNOLOGI KEJURUTERAAN ELEKTRONIK PERUBATAN
                </option>
                <option value="TEKNOLOGI KEJURUTERAAN FOUNDRI">TEKNOLOGI KEJURUTERAAN FOUNDRI</option>
                <option value="TEKNOLOGI KEJURUTERAAN INSTRUMEN PERINDUSTRIAN">TEKNOLOGI KEJURUTERAAN INSTRUMEN
                  PERINDUSTRIAN</option>
                <option value="TEKNOLOGI KEJURUTERAAN JAMINAN MUTU">TEKNOLOGI KEJURUTERAAN JAMINAN MUTU</option>
                <option value="TEKNOLOGI KEJURUTERAAN JENTERA BERAT">TEKNOLOGI KEJURUTERAAN JENTERA BERAT</option>
                <option value="TEKNOLOGI KEJURUTERAAN KAPAL TERBANG">TEKNOLOGI KEJURUTERAAN KAPAL TERBANG</option>
                <option value="TEKNOLOGI KEJURUTERAAN KERJA PAIP">TEKNOLOGI KEJURUTERAAN KERJA PAIP</option>
                <option value="TEKNOLOGI KEJURUTERAAN KIMIA (BIOPROSES)">TEKNOLOGI KEJURUTERAAN KIMIA (BIOPROSES)
                </option>
                <option value="TEKNOLOGI KEJURUTERAAN KIMIA (BIOTEKNOLOGI INDUSTRI)">TEKNOLOGI KEJURUTERAAN KIMIA
                  (BIOTEKNOLOGI INDUSTRI)</option>
                <option value="TEKNOLOGI KEJURUTERAAN KIMIA (BIOTEKNOLOGI)">TEKNOLOGI KEJURUTERAAN KIMIA (BIOTEKNOLOGI)
                </option>
                <option value="TEKNOLOGI KEJURUTERAAN KIMIA DALAM PERSEKITARAN">TEKNOLOGI KEJURUTERAAN KIMIA DALAM
                  PERSEKITARAN</option>
                <option value="TEKNOLOGI KEJURUTERAAN KIMIA MAKANAN">TEKNOLOGI KEJURUTERAAN KIMIA MAKANAN</option>
                <option value="TEKNOLOGI KEJURUTERAAN KIMPALAN">TEKNOLOGI KEJURUTERAAN KIMPALAN</option>
                <option value="TEKNOLOGI KEJURUTERAAN KOMPUTER">TEKNOLOGI KEJURUTERAAN KOMPUTER</option>
                <option value="TEKNOLOGI KEJURUTERAAN KOMPUTER (SISTEM KOMPUTER)">TEKNOLOGI KEJURUTERAAN KOMPUTER
                  (SISTEM KOMPUTER)</option>
                <option value="TEKNOLOGI KEJURUTERAAN KOMUNIKASI DATA">TEKNOLOGI KEJURUTERAAN KOMUNIKASI DATA</option>
                <option value="TEKNOLOGI KEJURUTERAAN LOJI (PERPAIPAN)">TEKNOLOGI KEJURUTERAAN LOJI (PERPAIPAN)</option>
                <option value="TEKNOLOGI KEJURUTERAAN MEKANIKAL">TEKNOLOGI KEJURUTERAAN MEKANIKAL</option>
                <option value="TEKNOLOGI KEJURUTERAAN MEKANIKAL (AUTOMOTIF)">TEKNOLOGI KEJURUTERAAN MEKANIKAL
                  (AUTOMOTIF)</option>
                <option value="TEKNOLOGI KEJURUTERAAN MEKATRONIK">TEKNOLOGI KEJURUTERAAN MEKATRONIK</option>
                <option value="TEKNOLOGI KEJURUTERAAN PEMBUATAN">TEKNOLOGI KEJURUTERAAN PEMBUATAN</option>
                <option value="TEKNOLOGI KEJURUTERAAN PEMBUATAN (FARMASEUTIKAL)">TEKNOLOGI KEJURUTERAAN PEMBUATAN
                  (FARMASEUTIKAL)</option>
                <option value="TEKNOLOGI KEJURUTERAAN PEMBUATAN PERKAKAS MESIN">TEKNOLOGI KEJURUTERAAN PEMBUATAN
                  PERKAKAS MESIN</option>
                <option value="TEKNOLOGI KEJURUTERAAN PEMBUNGKUSAN">TEKNOLOGI KEJURUTERAAN PEMBUNGKUSANR</option>
                <option value="TEKNOLOGI KEJURUTERAAN PEMESINAN">TEKNOLOGI KEJURUTERAAN PEMESINAN</option>
                <option value="TEKNOLOGI KEJURUTERAAN PEMPROSESAN SERAMIK">TEKNOLOGI KEJURUTERAAN PEMPROSESAN SERAMIK
                </option>
                <option value="TEKNOLOGI KEJURUTERAAN PENGELUARAN">TEKNOLOGI KEJURUTERAAN PENGELUARAN</option>
                <option value="TEKNOLOGI KEJURUTERAAN PENGURUSAN PERNIAGAAN">TEKNOLOGI KEJURUTERAAN PENGURUSAN
                  PERNIAGAAN</option>
                <option value="TEKNOLOGI KEJURUTERAAN PENYAMAN UDARA DAN PENYEJUKBEKUAN INDUSTRI">TEKNOLOGI KEJURUTERAAN
                  PENYAMAN UDARA DAN PENYEJUKBEKUAN INDUSTRI</option>
                <option value="TEKNOLOGI KIMIA (CHEMICAL TECNOLOGY)">TEKNOLOGI KIMIA (CHEMICAL TECNOLOGY)</option>
                <option value="TEKNOLOGI KIMPALAN">TEKNOLOGI KIMPALAN</option>
                <option value="TEKNOLOGI KIMPALAN DAN FABRIKASI">TEKNOLOGI KIMPALAN DAN FABRIKASI</option>
                <option value="TEKNOLOGI KIMPALAN DAN FABRIKASI LOGAM">TEKNOLOGI KIMPALAN DAN FABRIKASI LOGAM</option>
                <option value="TEKNOLOGI KOMPUTER (SISTEM)">TEKNOLOGI KOMPUTER (SISTEM)</option>
                <option value="TEKNOLOGI KOMPUTER(COMPUTING TECH)">TEKNOLOGI KOMPUTER(COMPUTING TECH)</option>
                <option value="TEKNOLOGI KREATIF (PENGURUSAN INDUSTRI KREATIF)">TEKNOLOGI KREATIF (PENGURUSAN INDUSTRI
                  KREATIF)</option>
                <option value="TEKNOLOGI KREATIF (PENGURUSAN SENI)">TEKNOLOGI KREATIF (PENGURUSAN SENI)</option>
                <option value="TEKNOLOGI KREATIF (PENULISAN ARTISTIK)">TEKNOLOGI KREATIF (PENULISAN ARTISTIK)</option>
                <option value="TEKNOLOGI KREATIF (SENI LAYAR)">TEKNOLOGI KREATIF (SENI LAYAR)</option>
                <option value="TEKNOLOGI KREATIF (SKRIN)">TEKNOLOGI KREATIF (SKRIN)</option>
                <option value="TEKNOLOGI KREATIF (TEATER)">TEKNOLOGI KREATIF (TEATER)</option>
                <option value="TEKNOLOGI LANDSKAP">TEKNOLOGI LANDSKAP</option>
                <option value="TEKNOLOGI MAKANAN">TEKNOLOGI MAKANAN</option>
                <option value="TEKNOLOGI MAKANAN DAN BIOPROSES">TEKNOLOGI MAKANAN DAN BIOPROSES</option>
                <option value="TEKNOLOGI MAKLUMAT">TEKNOLOGI MAKLUMAT</option>
                <option value="TEKNOLOGI MAKLUMAT (HIBURAN DIGITAL)">TEKNOLOGI MAKLUMAT (HIBURAN DIGITAL)</option>
                <option value="TEKNOLOGI MAKLUMAT (KEJURUTERAAN SISTEM PINTAR)">TEKNOLOGI MAKLUMAT (KEJURUTERAAN SISTEM
                  PINTAR)</option>
                <option value="TEKNOLOGI MAKLUMAT (KESELAMATAN MAKLUMAT)">TEKNOLOGI MAKLUMAT (KESELAMATAN MAKLUMAT)
                </option>
                <option value="TEKNOLOGI MAKLUMAT (KOMPUTERAN INDUSTRI)">TEKNOLOGI MAKLUMAT (KOMPUTERAN INDUSTRI)
                </option>
                <option value="TEKNOLOGI MAKLUMAT (PENGAJIAN MULTIMEDIA)">TEKNOLOGI MAKLUMAT (PENGAJIAN MULTIMEDIA)
                </option>
                <option value="TEKNOLOGI MAKLUMAT (PENGATURCARAAN)">TEKNOLOGI MAKLUMAT (PENGATURCARAAN)</option>
                <option value="TEKNOLOGI MAKLUMAT (RANGKAIAN)">TEKNOLOGI MAKLUMAT (RANGKAIAN)</option>
                <option value="TEKNOLOGI MAKLUMAT (SAINS DAN PENGURUSAN SISTEM)">TEKNOLOGI MAKLUMAT (SAINS DAN
                  PENGURUSAN SISTEM)</option>
                <option value="TEKNOLOGI MAKLUMAT (SAINS KOMPUTER)">TEKNOLOGI MAKLUMAT (SAINS KOMPUTER)</option>
                <option value="TEKNOLOGI MAKLUMAT (SAINS MAKLUMAT)">TEKNOLOGI MAKLUMAT (SAINS MAKLUMAT)</option>
                <option value="TEKNOLOGI MAKLUMAT (SISTEM CERDAS)">TEKNOLOGI MAKLUMAT (SISTEM CERDAS)</option>
                <option value="TEKNOLOGI MAKLUMAT (SISTEM PENGURUSAN)">TEKNOLOGI MAKLUMAT (SISTEM PENGURUSAN)</option>
                <option value="TEKNOLOGI MAKLUMAT (TEKNOLOGI MULTIMEDIA)">TEKNOLOGI MAKLUMAT (TEKNOLOGI MULTIMEDIA)
                </option>
                <option value="TEKNOLOGI MAKLUMAT (TEKNOLOGI PERMAINAN)">TEKNOLOGI MAKLUMAT (TEKNOLOGI PERMAINAN)
                </option>
                <option value="TEKNOLOGI MAKLUMAT - SISTEM KOMPUTER">TEKNOLOGI MAKLUMAT - SISTEM KOMPUTER</option>
                <option value="TEKNOLOGI MAKLUMAT DAN KOMUNIKASI (MULTIMEDIA)">TEKNOLOGI MAKLUMAT DAN KOMUNIKASI
                  (MULTIMEDIA)</option>
                <option value="TEKNOLOGI MAKLUMAT DAN KOMUNIKASI (SISTEM KOMPUTER)">TEKNOLOGI MAKLUMAT DAN KOMUNIKASI
                  (SISTEM KOMPUTER)</option>
                <option value="TEKNOLOGI MAKLUMAT DAN KOMUNIKASI (SISTEM MAKLUMAT)">TEKNOLOGI MAKLUMAT DAN KOMUNIKASI
                  (SISTEM MAKLUMAT)</option>
                <option value="TEKNOLOGI MAKLUMAT DAN PENGURUSAN">TEKNOLOGI MAKLUMAT DAN PENGURUSAN</option>
                <option value="TEKNOLOGI MAKLUMAT KOMUNIKASI">TEKNOLOGI MAKLUMAT KOMUNIKASI</option>
                <option value="TEKNOLOGI MAKLUMAT PERNIAGAAN">TEKNOLOGI MAKLUMAT PERNIAGAAN</option>
                <option value="TEKNOLOGI MAKLUMAT PERNIAGAAN (PERNIAGAAN ANTARABANGSA)">TEKNOLOGI MAKLUMAT PERNIAGAAN
                  (PERNIAGAAN ANTARABANGSA)</option>
                <option value="TEKNOLOGI MAKMAL">v</option>
                <option value="TEKNOLOGI MAKMAL PERUBATAN">TEKNOLOGI MAKMAL PERUBATAN</option>
                <option value="TEKNOLOGI MARIN (ELEKTRONIK) KERJASAMA DENGAN TENTERA LAUT DIRAJA MALAYSIA (TLDM)">
                  TEKNOLOGI MARIN (ELEKTRONIK) KERJASAMA DENGAN TENTERA LAUT DIRAJA MALAYSIA (TLDM)</option>
                <option value="TEKNOLOGI MARIN (MEKANIKAL)">TEKNOLOGI MARIN (MEKANIKAL)</option>
                <option value="TEKNOLOGI MARITIM">TEKNOLOGI MARITIM</option>
                <option value="TEKNOLOGI MEDIA">TEKNOLOGI MEDIA</option>
                <option value="TEKNOLOGI MEKANIKAL (LUKISAN REKABENTUK)">TEKNOLOGI MEKANIKAL (LUKISAN REKABENTUK)
                </option>
                <option value="TEKNOLOGI MEKANIKAL (PENYELENGGARAAN INDUSTRI)">TEKNOLOGI MEKANIKAL (PENYELENGGARAAN
                  INDUSTRI)</option>
                <option value="TEKNOLOGI MEKANIKAL AUTOMOTIF">TEKNOLOGI MEKANIKAL AUTOMOTIF</option>
                <option value="TEKNOLOGI MEKANIKAL GAS">TEKNOLOGI MEKANIKAL GAS</option>
                <option value="TEKNOLOGI MEKATRONIK">TEKNOLOGI MEKATRONIK</option>
                <option value="TEKNOLOGI MEMPROSES MAKANAN">TEKNOLOGI MEMPROSES MAKANAN</option>
                <option value="TEKNOLOGI MIKROB DAN BIOPEMPROSESAN">TEKNOLOGI MIKROB DAN BIOPEMPROSESAN</option>
                <option value="TEKNOLOGI MUDAHALIH / TEKNOLOGI MAKLUMAT (TEKNOLOGI MUDAHALIH)">TEKNOLOGI MUDAHALIH /
                  TEKNOLOGI MAKLUMAT (TEKNOLOGI MUDAHALIH)</option>
                <option value="TEKNOLOGI MULTIMEDIA">TEKNOLOGI MULTIMEDIA</option>
                <option value="TEKNOLOGI PEMBINAAN (FORENSIK BANGUNAN DAN PENYELENGGARAAN)">TEKNOLOGI PEMBINAAN
                  (FORENSIK BANGUNAN DAN PENYELENGGARAAN)</option>
                <option value="TEKNOLOGI PEMBINAAN (GEOSTRUKTUR)">TEKNOLOGI PEMBINAAN (GEOSTRUKTUR)</option>
                <option value="TEKNOLOGI PEMBINAAN (PERKHIDMATAN BANGUNAN DAN PENYELENGGARAAN)">TEKNOLOGI PEMBINAAN
                  (PERKHIDMATAN BANGUNAN DAN PENYELENGGARAAN)</option>
                <option value="TEKNOLOGI PEMBINAAN (SISTEM TERMAJU)">TEKNOLOGI PEMBINAAN (SISTEM TERMAJU)</option>
                <option value="TEKNOLOGI PEMBINAAN (TURAPAN DAN JALANRAYA)">TEKNOLOGI PEMBINAAN (TURAPAN DAN JALANRAYA)
                </option>
                <option value="TEKNOLOGI PEMBUATAN">TEKNOLOGI PEMBUATAN</option>
                <option value="TEKNOLOGI PEMESINAN INDUSTRI">TEKNOLOGI PEMESINAN INDUSTRI</option>
                <option value="TEKNOLOGI PEMESINAN LOGAM - PEMBUATAN (CAD/CAM)">TEKNOLOGI PEMESINAN LOGAM - PEMBUATAN
                  (CAD/CAM)</option>
                <option value="TEKNOLOGI PEMPROSESAN POLIMER KOMPOSIT">TEKNOLOGI PEMPROSESAN POLIMER KOMPOSIT</option>
                <option value="TEKNOLOGI PENDIDIKAN">TEKNOLOGI PENDIDIKAN</option>
                <option value="TEKNOLOGI PENGELUARAN">TEKNOLOGI PENGELUARAN</option>
                <option value="TEKNOLOGI PENGELUARAN (TEKNOLOGI ACUAN)">TEKNOLOGI PENGELUARAN (TEKNOLOGI ACUAN)</option>
                <option value="TEKNOLOGI PENGIKLANAN DAN REKABENTUK GRAFIK">TEKNOLOGI PENGIKLANAN DAN REKABENTUK GRAFIK
                </option>
                <option value="TEKNOLOGI PENGURUSAN DAN PERLADANGAN">TEKNOLOGI PENGURUSAN DAN PERLADANGAN</option>
                <option value="TEKNOLOGI PENGURUSAN FASILITI">TEKNOLOGI PENGURUSAN FASILITI</option>
                <option value="TEKNOLOGI PENYAMAN UDARA DAN PENYEJUK-BEKU">TEKNOLOGI PENYAMAN UDARA DAN PENYEJUK-BEKU
                </option>
                <option value="TEKNOLOGI PENYELENGGARAAN AUTOMOTIF">TEKNOLOGI PENYELENGGARAAN AUTOMOTIF</option>
                <option value="TEKNOLOGI PENYELENGGARAN SIS BERAUTOMASI">TEKNOLOGI PENYELENGGARAN SIS BERAUTOMASI
                </option>
                <option value="TEKNOLOGI PERABOT">TEKNOLOGI PERABOT</option>
                <option value="TEKNOLOGI PERABUT">TEKNOLOGI PERABUT</option>
                <option value="TEKNOLOGI PERKAYUAN">TEKNOLOGI PERKAYUAN</option>
                <option value="TEKNOLOGI PERNIAGAAN - PENGURUSAN KEUSAHAWANAN KOMPUTER">TEKNOLOGI PERNIAGAAN -
                  PENGURUSAN KEUSAHAWANAN KOMPUTER</option>
                <option value="TEKNOLOGI PERSENJATAAN">TEKNOLOGI PERSENJATAAN</option>
                <option value="TEKNOLOGI PERUBATAN">TEKNOLOGI PERUBATAN</option>
                <option value="TEKNOLOGI PETROLEUM GEOSAINS">TEKNOLOGI PETROLEUM GEOSAINS</option>
                <option value="TEKNOLOGI PLASTIK & GETAH">TEKNOLOGI PLASTIK & GETAH</option>
                <option value="TEKNOLOGI REKABENTUK DAN PENGELUARAN PERABOT">TEKNOLOGI REKABENTUK DAN PENGELUARAN
                  PERABOT</option>
                <option value="TEKNOLOGI SENI REKA">TEKNOLOGI SENI REKA</option>
                <option value="TEKNOLOGI SENI VISUAL">TEKNOLOGI SENI VISUAL</option>
                <option value="TEKNOLOGI SENIBINA">TEKNOLOGI SENIBINA</option>
                <option value="TEKNOLOGI SERTA PENDIDIKAN (KEJURUTERAAN AWAM)">TEKNOLOGI SERTA PENDIDIKAN (KEJURUTERAAN
                  AWAM)</option>
                <option value="TEKNOLOGI SERTA PENDIDIKAN (KEJURUTERAAN MEKANIKAL)">TEKNOLOGI SERTA PENDIDIKAN
                  (KEJURUTERAAN MEKANIKAL)</option>
                <option value="TEKNOLOGI SERTA PENDIDIKAN (KEMAHIRAN HIDUP)">TEKNOLOGI SERTA PENDIDIKAN (KEMAHIRAN
                  HIDUP)</option>
                <option value="TEKNOLOGI SERTA PENDIDIKAN(KEJURUTERAAN ELEKTRIK)">TEKNOLOGI SERTA
                  PENDIDIKAN(KEJURUTERAAN ELEKTRIK)</option>
                <option value="TEKNOLOGI SERTA PENDIDIKAN(KEJURUTERAAN)">TEKNOLOGI SERTA PENDIDIKAN(KEJURUTERAAN)
                </option>
                <option value="TEKNOLOGI TEKSTIL (TEXTILE)">TEKNOLOGI TEKSTIL (TEXTILE)</option>
                <option value="TEKNOLOGI TELEKOMINUKASI">TEKNOLOGI TELEKOMINUKASI</option>
                <option value="TEKNOLOGI TENAGA">TEKNOLOGI TENAGA</option>
                <option value="TEKNOLOGI TENAGA SOLAR">TEKNOLOGI TENAGA SOLAR</option>
                <option value="TEKNOLOGI UPHOLSTERI DAN HIASAN DALAMAN">TEKNOLOGI UPHOLSTERI DAN HIASAN DALAMAN</option>
                <option value="TEKNOLOGI/EKONOMI RUMAHTANGGA">TEKNOLOGI/EKONOMI RUMAHTANGGA</option>
                <option value="TEKNOUSAHAWANAN">TEKNOUSAHAWANAN</option>
                <option value="TELECOMMUNICATIONS AND ECONOMICS">TELECOMMUNICATIONS AND ECONOMICS</option>
                <option value="TERAPI KECANTIKAN SPA">TERAPI KECANTIKAN SPA</option>
                <option value="TERJEMAHAN DAN INTERPRETASI">TERJEMAHAN DAN INTERPRETASI</option>
                <option value="TESL">TESL</option>
                <option value="TESOL">TESOL</option>
                <option value="TEST1">TEST1</option>
                <option value="TOOL DESIGN">TOOL DESIGN</option>
                <option value="UJIAN TANPA MUSNAH">UJIAN TANPA MUSNAH</option>
                <option value="UKUR BAHAN">UKUR BAHAN</option>
                <option value="UKUR BAHAN (QUANTITY SURVEYING)">UKUR BAHAN (QUANTITY SURVEYING)</option>
                <option value="UKUR BANGUNAN/BUILDING SURVEYING">UKUR BANGUNAN/BUILDING SURVEYING</option>
                <option value="UKUR DASAR AIR">UKUR DASAR AIR</option>
                <option value="UKUR TANAH/SAINS UKUR TANAH">UKUR TANAH/SAINS UKUR TANAH</option>
                <option value="UNDANG-UNDANG">UNDANG-UNDANG</option>
                <option value="UNDANG-UNDANG DAN PENTADBIRAN KEHAKIMAN ISLAM">UNDANG-UNDANG DAN PENTADBIRAN KEHAKIMAN
                  ISLAM</option>
                <option value="UNDANG-UNDANG DAN PERDAGANGAN">UNDANG-UNDANG DAN PERDAGANGAN</option>
                <option value="UNDANG-UNDANG DAN SYARIAH">UNDANG-UNDANG DAN SYARIAH</option>
                <option value="UNDANG-UNDANG LAUT (MARITIME)">UNDANG-UNDANG LAUT (MARITIME)</option>
                <option value="UNDANG-UNDANG PEMBINAAN DAN PERUBATAN">UNDANG-UNDANG PEMBINAAN DAN PERUBATAN</option>
                <option value="UNDANG-UNDANG PERNIAGAAN">UNDANG-UNDANG PERNIAGAAN</option>
                <option value="URBAN ENVIRONMENTAL DESIGN">URBAN ENVIRONMENTAL DESIGN</option>
                <option value="URBAN LAND ECONOMICS">URBAN LAND ECONOMICS</option>
                <option value="URBAN PROPERTY SURVEYING">URBAN PROPERTY SURVEYING</option>
                <option value="URBAN VALUATION">URBAN VALUATION</option>
                <option value="USULUDDIN">USULUDDIN</option>
                <option value="USULUDDIN & FALSAFAH">USULUDDIN & FALSAFAH</option>
                <option value="USULUDDIN (AKIDAH DAN PEMIKIRAN ISLAM)">USULUDDIN (AKIDAH DAN PEMIKIRAN ISLAM)</option>
                <option value="USULUDDIN (AL-QURAN DAN AL-HADITH)">USULUDDIN (AL-QURAN DAN AL-HADITH)</option>
                <option value="USULUDDIN DENGAN KAUNSELING">USULUDDIN DENGAN KAUNSELING</option>
                <option value="USULUDDIN DENGAN MULTIMEDIA">USULUDDIN DENGAN MULTIMEDIA</option>
                <option value="USULUDIN DAN PERBANDINGAN AGAMA">USULUDIN DAN PERBANDINGAN AGAMA</option>
                <option value="VEHICLE INSPECTION">VEHICLE INSPECTION</option>
                <option value="VETERINAR">VETERINAR</option>
                <option value="VOC INSTRUCTOR MECHATRONIC ENG TECH">VOC INSTRUCTOR MECHATRONIC ENG TECH</option>
                <option value="VOCATIONAL EDUCATION (BUILDING CONSTRUCTION)">VOCATIONAL EDUCATION (BUILDING
                  CONSTRUCTION)</option>
                <option value="WELDING TECHNOLOGY">WELDING TECHNOLOGY</option>
              </select>

              <br>
            </div>

            <div class="col-md-6">
              Tahun:
              <select name="tahun_pengajian" id="tahun_ipt" class="form-control">
                <option value="">--Sila Pilih--</option>
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
              Gred / CGPA:
              <input type="number" id="cgpa_ipt" class="form-control" style="text-transform: uppercase"
                name="no_pejabat">
              <br>

            </div>
            <div class="col text-center">
              <button type="button" id="updateButton" class="btn btn-primary" onclick="productUpdate();">
                +
              </button>
            </div>
        </form>

        <div id="content" class="p-4 p-md-5"></div>
        <div class="col-sm-12">
          <br>
          <form action="pengajian_tinggi.php" method="post">

            <div class="container">
              <div class="row">
                <div class="col-sm-12">
                  <table id="productTable" class="table table-bordered table-condensed table-striped text-center">
                    <thead>
                      <tr>
                        <th>Kemaskini</th>
                        <th>Nama IPT</th>
                        <th>Peringkat</th>
                        <th>Bidang</th>
                        <th>Tahun</th>
                        <th>Gred / CGPA</th>
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

                  $("#nama_ipt").val($(cols[1]).text());
                  $("#peringkat_ipt").val($(cols[2]).text());
                  $("#bidang_ipt").val($(cols[3]).text());
                  $("#tahun_ipt").val($(cols[1]).text());
                  $("#cgpa_ipt").val($(cols[2]).text());

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
                    "<td>" + $("#nama_ipt").val() + "</td>" +
                    "<td>" + $("#peringkat_ipt").val() + "</td>" +
                    "<td>" + $("#bidang_ipt").val() + "</td>" +
                    "<td>" + $("#tahun_ipt").val() + "</td>" +
                    "<td>" + $("#cgpa_ipt").val() + "</td>" +
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
                  $("#nama_ipt").val("");
                  $("#peringkat_ipt").val("");
                  $("#bidang_ipt").val("");
                  $("#tahun_ipt").val("");
                  $("#cgpa_ipt").val("");
                }
              </script>
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