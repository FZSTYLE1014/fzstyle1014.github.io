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
            <a class="nav-link active" aria-current="page" href="spm.php">SPM</a>
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
          <h2 style="color:FFFFFF"><b>KEPUTUSAN SPM / SPMV</b></h2>
        </div>


        <form class="col-sm-12 shadow-lg p-3  mb-12 bg-white rounded" enctype="multipart/form-data"
          action="maklumat_peribadi.php" method="POST">


          <div class="row">
            <div class="col-md-6">
              Tahun:
              <select name="tahun_spm" id="tahun_spm" class="form-control" style="width: 250px;">
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
              Jenis Sijil:
              <select name="jenis_sijil" id="jenis_sijil" class="form-control" style="width: 250px;">
                <option value="" selected disabled>Sila Pilih</option>
                <option value="PT3/PMR">PT3/PMR</option>
                <option value="SRP">SRP</option>
                <option value="LCE">LCE</option>
              </select>
              <br>


            </div>

            <div class="col-md-6">
              Pangkat:
              <select name="pangkat_spm" id="pangkat_spm" class="form-control" style="width: 250px;">
                <option value="" selected disabled>Sila Pilih</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="S">S</option>
              </select>
              <br>

            </div>
            <div class="col-md-6">
              Mata Pelajaran:
              <select name="subjek_spm" id="subjek_spm" class="form-control">
                <option value="">--Sila Pilih--</option>
                <option id="1" value="BAHASA MELAYU/BAHASA MAlAYSIA">BAHASA MELAYU/BAHASA MALAYSIA</option>
                <option id="2" value="AKUAKULTUR DAN HAIWAN REKREASI ">AKUAKULTUR DAN HAIWAN REKREASI </option>
                <option value="AMALAN BENGKEL KEJURUTERAAN">AMALAN BENGKEL KEJURUTERAAN</option>
                <option value="AMALAN BENGKEL MEKANIKAL">AMALAN BENGKEL MEKANIKAL</option>
                <option value="ANIMASI DAN REKABENTUK PENERBITAN">ANIMASI DAN REKABENTUK PENERBITAN</option>
                <option value="APLIKASI ELEKTRIK & ELEKTRONIK">APLIKASI ELEKTRIK & ELEKTRONIK</option>
                <option value="APLIKASI KOMPUTER DALAM PERNIAGAAN">APLIKASI KOMPUTER DALAM PERNIAGAAN</option>
                <option value="APPLIED SCIENCE">APPLIED SCIENCE</option>
                <option value="ASAS KELASTARIAN">ASAS KELASTARIAN</option>
                <option value="ASAS KEMAHIRAN PELANCONGAN">ASAS KEMAHIRAN PELANCONGAN</option>
                <option value="ASAS PEMPROSESAN">ASAS PEMPROSESAN</option>
                <option value="ASAS PEMPROSESAN MAKLUMAT">ASAS PEMPROSESAN MAKLUMAT</option>
                <option value="ASUHAN KANAK-KANAK">ASUHAN KANAK-KANAK</option>
                <option value="ASUHAN/PENDIDIKAN AWAL KANAK-KANAK">ASUHAN/PENDIDIKAN AWAL KANAK-KANAK</option>
                <option value="AUTOMOTIF ELEKTRIK DAN DIESEL">AUTOMOTIF ELEKTRIK DAN DIESEL</option>
                <option value="AUTOMOTIF KENDERAAN">AUTOMOTIF KENDERAAN</option>
                <option value="BAHAN BINAAN">BAHAN BINAAN</option>
                <option value="BAHASA ARAB KOMUNIKASI">BAHASA ARAB KOMUNIKASI</option>
                <option value="PELAJARAN PERDAGANGAN">PELAJARAN PERDAGANGAN</option>
                <option value="BAHASA ARAB TINGGI">BAHASA ARAB TINGGI</option>
                <option value="BAHASA INGGERIS">BAHASA INGGERIS</option>
                <option value="BAHASA JEPUN">BAHASA JEPUN</option>
                <option value="BAHASA JERMAN">BAHASA JERMAN</option>
                <option value="BAHASA KADAZANDUSUN">BAHASA KADAZANDUSUN</option>
                <option value="BAHASA PERANCIS">BAHASA PERANCIS</option>
                <option value="BAHASA PUNJABI">BAHASA PUNJABI</option>
                <option value="BAHASA TAMIL">BAHASA TAMIL</option>
                <option value="BIBLE KNOWLEDGE ">BIBLE KNOWLEDGE </option>
                <option value="BINAAN BANGUNAN">BINAAN BANGUNAN</option>
                <option value="BIOLOGI ">BIOLOGI </option>
                <option value="DANDANAN RAMBUT ">DANDANAN RAMBUT </option>
                <option value="EKONOMI">EKONOMI </option>
                <option value="EKONOMI ASAS">EKONOMI ASAS</option>
                <option value="EKONOMI RUMAH TANGGA">EKONOMI RUMAH TANGGA</option>
                <option value="ENGLISH FOR SCIENCE AND TECHNOLOGY">ENGLISH FOR SCIENCE AND TECHNOLOGY</option>
                <option value="FIZIK">FIZIK</option>
                <option value="FUNDAMENTALS OF PROGRAMMING">FUNDAMENTALS OF PROGRAMMING</option>
                <option value="GENERAL HOUSECRAFT">GENERAL HOUSECRAFT</option>
                <option value="GEOGRAFI">GEOGRAFI</option>
                <option value="GERONTOLOGI ASAS & P'KHID GERIATRIK">GERONTOLOGI ASAS & P'KHID GERIATRIK</option>
                <option value="GRAFIK BERKOMPUTER">GRAFIK BERKOMPUTER</option>
                <option value="GRAFIK KOMUNIKASI TEKNIKAL">GRAFIK KOMUNIKASI TEKNIKAL</option>
                <option value="HIASAN DALAMAN ASAS">HIASAN DALAMAN ASAS</option>
                <option value="HIFZ AL-QURAN">HIFZ AL-QURAN</option>
                <option value="HORTIKULTUR HIASAN & LANDSKAP">HORTIKULTUR HIASAN & LANDSKAP</option>
                <option value="ILMU HISAB (SUKATAN B)">ILMU HISAB (SUKATAN B)</option>
                <option value="ILMU UKUR ">ILMU UKUR </option>
                <option value="KAJIHAYAT MANUSIA & KEMASY.">KAJIHAYAT MANUSIA & KEMASY.</option>
                <option value="KAJISAWAT MOTOR (PETROL & DIESEL)">BAHASA IBAN </option>
                <option value="KATERING DAN PENYAJIAN">KATERING DAN PENYAJIAN</option>
                <option value="KEJENTERAAN LADANG ">KEJENTERAAN LADANG</option>
                <option value="KEJENTERAAN PERTANIAN">KEJENTERAAN PERTANIAN</option>
                <option value="KEMAHIRAN PEJABAT DAN MENAIP ">KEMAHIRAN PEJABAT DAN MENAIP </option>
                <option value="KER. PENYEJUKAN & PENYAMAN UDARA">KER. PENYEJUKAN & PENYAMAN UDARA</option>
                <option value="KERJA KAYU & BINAAN BANGUNAN">KERJA KAYU & BINAAN BANGUNAN</option>
                <option value="KERJA KAYU DAN BATA">KERJA KAYU DAN BATA</option>
                <option value="KERJA KEPINGAN LOGAM & KIMPALAN">KERJA KEPINGAN LOGAM & KIMPALAN</option>
                <option value="KERJA KIMPALAN">KERJA KIMPALAN</option>
                <option value="KERJA MENGGEGAS DAN MEMESIN">KERJA MENGGEGAS DAN MEMESIN</option>
                <option value="KERJA PAIP DOMESTIK">KERJA PAIP DOMESTIK</option>
                <option value="KESUSASTERAAN  CINA">KESUSASTERAAN CINA</option>
                <option value="KESUSASTERAAN DALAM B. INGGERIS">KESUSASTERAAN DALAM B. INGGERIS</option>
                <option value="KESUSASTERAAN MELAYU">KESUSASTERAAN MELAYU</option>
                <option value="KESUSASTERAAN TAMIL">KESUSASTERAAN TAMIL</option>
                <option value="KIMIA">KIMIA</option>
                <option value="KIMPALAN ARKA ">KIMPALAN ARKA </option>
                <option value="KIMPALAN ARKA DAN GAS ">KIMPALAN ARKA DAN GAS </option>
                <option value="KIMPALAN GAS">KIMPALAN GAS</option>
                <option value="KOMUNIKASI VISUAL">KOMUNIKASI VISUAL</option>
                <option value="LANDSKAP DAN NURSERI">LANDSKAP DAN NURSERI</option>
                <option value="LUKISAN">LUKISAN </option>
                <option value="LUKISAN GEO. & FIBRIKASI LOGAM">LUKISAN GEO. & FIBRIKASI LOGAM</option>
                <option value="LUKISAN GEO. & PENYAMAN UDARA">LUKISAN GEO. & PENYAMAN UDARA</option>
                <option value="LUKISAN GEOMETRI & AUTOMOTIF">LUKISAN GEOMETRI & AUTOMOTIF</option>
                <option value="LUKISAN GEOMETRI & BINAAN BGNAN.">LUKISAN GEOMETRI & BINAAN BGNAN.</option>
                <option value="LUKISAN GEOMETRI & ELEKTRONIK">LUKISAN GEOMETRI & ELEKTRONIK</option>
                <option value="LUKISAN GEOMETRI DAN ELEKTRIK">LUKISAN GEOMETRI DAN ELEKTRIK</option>
                <option value="LUKISAN GEOMETRI DAN MESIN">LUKISAN GEOMETRI DAN MESIN</option>
                <option value="LUKISAN KEJURUTERAAN">LUKISAN KEJURUTERAAN</option>
                <option value="M'ASUH & M'BIMBING KANAK-KANAK">M'ASUH & M'BIMBING KANAK-KANAK</option>
                <option value="MAHARAT AL-QURAN">MAHARAT AL-QURAN</option>
                <option value="MATEMATIK TAMBAHAN">MATEMATIK TAMBAHAN</option>
                <option value="MATEMATIK/MATEMATIK PILIHAN C">MATEMATIK/MATEMATIK PILIHAN C</option>
                <option value="MEMBUAT PAKAIAN">MEMBUAT PAKAIAN</option>
                <option value="MEMBUAT PERABOT ">MEMBUAT PERABOT </option>
                <option value="MEMBUAT ROTI DAN PATISSERIE">MEMBUAT ROTI DAN PATISSERIE</option>
                <option value="MENGGEGAS DAN MEMESIN">MENGGEGAS DAN MEMESIN</option>
                <option value="MENSERVIS & MEMBAIKI KENDERAAN">MENSERVIS & MEMBAIKI KENDERAAN</option>
                <option value="MENSERVIS AUTOMOBIL">MENSERVIS AUTOMOBIL</option>
                <option value="MENSERVIS MOTOSIKAL">MENSERVIS MOTOSIKAL</option>
                <option value="MENSERVIS PERALATAN E'TRIK DOMESTIK">MENSERVIS PERALATAN E'TRIK DOMESTIK</option>
                <option value="MENSERVIS PERALATAN PENYEJUKAN">MENSERVIS PERALATAN PENYEJUKAN</option>
                <option value="MENSERVIS RADIO DAN TV">MENSERVIS RADIO DAN TV</option>
                <option value="MENSERVIS P'ALATAN P'NYEJUKAN & P'NY">MENSERVIS P'ALATAN P'NYEJUKAN & P'NY</option>
                <option value="OTHER APPROVED LANGUAGE ">OTHER APPROVED LANGUAGE </option>
                <option value="PATISSERIE">PATISSERIE</option>
                <option value="PELANCONGAN DAN REKREASI">PELANCONGAN DAN REKREASI</option>
                <option value="PEMASANGAN & KAWALAN ELEKTRIK">PEMASANGAN & KAWALAN ELEKTRIK</option>
                <option value="PEMBINAAN DOMESTIK">PEMBINAAN DOMESTIK</option>
                <option value="PEMESINAN BERKOMPUTER">PEMESINAN BERKOMPUTER</option>
                <option value="PEMPROSESAN HASIL PERTANIAN">PEMPROSESAN HASIL PERTANIAN</option>
                <option value="PEMPROSESAN MAKANAN">PEMPROSESAN MAKANAN</option>
                <option value="PENDAWAIAN DOMESTIK">PENDAWAIAN DOMESTIK</option>
                <option value="PENDIDIKAN AL-QURAN & AL-SUNNAH">PENDIDIKAN AL-QURAN & AL-SUNNAH</option>
                <option value="PENDIDIKAN ISLAM">PENDIDIKAN ISLAM</option>
                <option value="PENDIDIKAN JASMANI">PENDIDIKAN JASMANI</option>
                <option value="PENDIDIKAN MORAL">PENDIDIKAN MORAL</option>
                <option value="PENDIDIKAN MUZIK">PENDIDIKAN MUZIK</option>
                <option value="PENDIDIKAN SENI/SENI VISUAL">PENDIDIKAN SENI/SENI VISUAL</option>
                <option value="PENDIDIKAN SIVIK & KEWARGANEGARAAN">PENDIDIKAN SIVIK & KEWARGANEGARAAN</option>
                <option value="PENDIDIKAN SYARIAH ISLAMIAH">PENDIDIKAN SYARIAH ISLAMIAH</option>
                <option value="PENERBITAN MULTIMEDIA KREATIF ">PENERBITAN MULTIMEDIA KREATIF </option>
                <option value="PENGAJ. KEJ. ELEKTRIK & ELEKTRONIK">PENGAJ. KEJ. ELEKTRIK & ELEKTRONIK </option>
                <option value="PENGAJIAN AGROTEKNOLOGI">PENGAJIAN AGROTEKNOLOGI</option>
                <option value="PENGAJIAN HAL EHWAL MALAYSIA ">PENGAJIAN HAL EHWAL MALAYSIA </option>
                <option value="PENGAJIAN KEJ. JENTERA/MEKANIKAL">PENGAJIAN KEJ. JENTERA/MEKANIKAL</option>
                <option value="PENGAJIAN KEJURUTERAAN AWAM">PENGAJIAN KEJURUTERAAN AWAM</option>
                <option value="PENGAJIAN PAKAIAN">PENGAJIAN PAKAIAN</option>
                <option value="PENGAJIAN PERDAGANGAN/KEUSAHAWANAN">PENGAJIAN PERDAGANGAN/KEUSAHAWANAN</option>
                <option value="PENGAJIAN PERKEMBANGAN KANAK-KANAK">PENGAJIAN PERKEMBANGAN KANAK-KANAK</option>
                <option value="PENGELUARAN TANAMAN">PENGELUARAN TANAMAN</option>
                <option value="PENGELUARAN TERNAKAN">PENGELUARAN TERNAKAN</option>
                <option value="PENGETAHUAN AGAMA ISLAM">PENGETAHUAN AGAMA ISLAM</option>
                <option value="PENGETAHUAN AGAMA ISLAM TINGGI ">PENGETAHUAN AGAMA ISLAM TINGGI </option>
                <option value="PENGETAHUAN MORAL">PENGETAHUAN MORAL</option>
                <option value="PENGETAHUAN SAINS SUKAN">PENGETAHUAN SAINS SUKAN </option>
                <option value="PENGURUSAN LADANG">PENGURUSAN LADANG</option>
                <option value="PENGURUSAN MAKANAN">PENGURUSAN MAKANAN</option>
                <option value="PENJAGAAN MUKA DAN DANDANAN RAMBUT">PENJAGAAN MUKA DAN DANDANAN RAMBUT</option>
                <option value="PENYAJIAN MAKANAN DAN MINUM">PENYAJIAN MAKANAN DAN MINUM</option>
                <option value="PENYAMAN UDARA DAN PENYEJUKAN">PENYAMAN UDARA DAN PENYEJUKAN</option>
                <option value="PENYAMAN UDARA">PENYAMAN UDARA</option>
                <option value="PENYEDIAAN & PERKHID. MAKANAN">PENYEDIAAN & PERKHID. MAKANAN</option>
                <option value="PENYEDIAAN MAKANAN & MINUMAN">PENYEDIAAN MAKANAN & MINUMAN </option>
                <option value="PENYEDIAAN MASAKAN BARAT & TIMUR">PENYEDIAAN MASAKAN BARAT & TIMUR</option>
                <option value="PENYEJUKAN">PENYEJUKAN</option>
                <option value="PEPASANGAN DAN PENYE. ELEKTRIK">PEPASANGAN DAN PENYE. ELEKTRIK</option>
                <option value="PERAKAUNAN PERNIAGAAN">PERAKAUNAN PERNIAGAAN</option>
                <option value="PERDAGANGAN">PERDAGANGAN</option>
                <option value="PERKHIDMATAN AWAL KANAK-KANAK">PERKHIDMATAN AWAL KANAK-KANAK</option>
                <option value="PERNIAGAAN">PERNIAGAAN</option>
                <option value="PERNIAGAAN DAN KEUSAHAWANAN">PERNIAGAAN DAN KEUSAHAWANAN</option>
                <option value="PERSOLEKAN">PERSOLEKAN</option>
                <option value="PERSOLEKAN & MENDANDAN RAMBUT">PERSOLEKAN & MENDANDAN RAMBUT</option>
                <option value="PERTANIAN">PERTANIAN</option>
                <option value="PERTUKANGAN KAYU">PERTUKANGAN KAYU</option>
                <option value="PERTUKANGAN LOGAM">PERTUKANGAN LOGAM </option>
                <option value="POLA PAKAIAN">POLA PAKAIAN</option>
                <option value="PRINSIP AKAUN/ASAS PERAKAUNAN">PRINSIP AKAUN/ASAS PERAKAUNAN</option>
                <option value="PRINSIP ELEKTRIK & ELEKTRONIK">PRINSIP ELEKTRIK & ELEKTRONIK</option>
                <option value="PRINSIP PERNIAGAAN">PRINSIP PERNIAGAAN</option>
                <option value="PRODUKSI MULTIMEDIA">PRODUKSI MULTIMEDIA </option>
                <option value="PROGRAMMING AND DEVELOPMENT TOOLS">PROGRAMMING AND DEVELOPMENT TOOLS</option>
                <option value="RAMPAIAN SAINS">RAMPAIAN SAINS</option>
                <option value="RAMPAIAN SAINS TAMBAHAN">RAMPAIAN SAINS TAMBAHAN</option>
                <option value="RAWATAN RADIO, TV DAN ELEKTRIK">RAWATAN RADIO, TV DAN ELEKTRIK</option>
                <option value="REKA CIPTA ">REKA CIPTA </option>
                <option value="REKA FESYEN & MEMBUAT PAKAIAN">REKA FESYEN & MEMBUAT PAKAIAN</option>
                <option value="REKAAN DAN JAHITAN PAKAIAN">REKAAN DAN JAHITAN PAKAIAN</option>
                <option value="REKAAN/JAHITAN DAN MEMBUAT PAKAIAN">REKAAN/JAHITAN DAN MEMBUAT PAKAIAN</option>
                <option value="REKABENTUK">REKABENTUK</option>
                <option value="ROTI DAN MAKANAN YIS">ROTI DAN MAKANAN YIS</option>
                <option value="SAINS">SAINS</option>
                <option value="SAINS FIZIKAL">SAINS FIZIKAL</option>
                <option value="SAINS KEJURUTERAAN">SAINS KEJURUTERAAN</option>
                <option value="SAINS KESIHATAN">SAINS KESIHATAN</option>
                <option value="SAINS KOMPUTER">SAINS KOMPUTER </option>
                <option value="SAINS PERTANIAN">SAINS PERTANIAN</option>
                <option value="SAINS RUMAH TANGGA">SAINS RUMAH TANGGA</option>
                <option value="SAINS RUMAHTANGGA - KURSUS A">SAINS RUMAHTANGGA - KURSUS A</option>
                <option value="SAINS SUKAN">SAINS SUKAN</option>
                <option value="SAINS TAMBAHAN">SAINS TAMBAHAN</option>
                <option value="SEJARAH">SEJARAH </option>
                <option value="SENI HALUS">SENI HALUS</option>
                <option value="SENI REKA TANDA">SENI REKA TANDA</option>
                <option value="SISTEM SOKONGAN KOMPUTER">SISTEM SOKONGAN KOMPUTER</option>
                <option value="SISTEM SOKONGAN RANGKAIAN">SISTEM SOKONGAN RANGKAIAN</option>
                <option value="TANAMAN MAKANAN">TANAMAN MAKANAN</option>
                <option value="TARI">TARI</option>
                <option value="TASAWWUR ISLAM">TASAWWUR ISLAM</option>
                <option value="TEATER">TEATER </option>
                <option value="TEK. BEKERI & KONFEKSIONERI">TEK. BEKERI & KONFEKSIONERI</option>
                <option value="TEK. KIMPAL & FABRIKASI LOGAM">TEK. KIMPAL & FABRIKASI LOGAM</option>
                <option value="TEK. PENYEJUKAN & P'NYAMAN UDARA">TEK. PENYEJUKAN & P'NYAMAN UDARA</option>
                <option value="TEKNOLOGI AUTOMOTIF">TEKNOLOGI AUTOMOTIF</option>
                <option value="TEKNOLOGI BENGKEL MESIN">TEKNOLOGI BENGKEL MESIN</option>
                <option value="TEKNOLOGI BINAAN">TEKNOLOGI BINAAN</option>
                <option value="TEKNOLOGI BINAAN BANGUNAN">TEKNOLOGI BINAAN BANGUNAN</option>
                <option value="TEKNOLOGI ELEKTRIK">TEKNOLOGI ELEKTRIK</option>
                <option value="TEKNOLOGI ELEKTRONIK">TEKNOLOGI ELEKTRONIK</option>
                <option value="TEKNOLOGI KATERING">TEKNOLOGI KATERING</option>
                <option value="TEKNOLOGI KEJURUTERAAN">TEKNOLOGI KEJURUTERAAN</option>
                <option value="TEKNOLOGI MAKLUMAT/ICT">TEKNOLOGI MAKLUMAT/ICT</option>
                <option value="TEKNOLOGI PEJABAT PERNIAGAAN">TEKNOLOGI PEJABAT PERNIAGAAN</option>
                <option value="TEKNOLOGI SENI KECANTIKAN">TEKNOLOGI SENI KECANTIKAN</option>
                <option value="TRENGKAS">TRENGKAS </option>
              </select><br />

            </div>
            <div class="col-md-6">
              Gred:
              <select name="gred_spm" id="gred_spm" class="form-control" style="width: 250px;">
                <option value="">--Sila Pilih--</option>
                <option id="1" value="A+">A+</option>
                <option value="A">A</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B">B</option>
                <option value="B-">B-</option>
                <option value="C+">C+</option>
                <option value="C">C</option>
                <option value="C-">C-</option>
                <option value="D+">D+</option>
                <option value="D">D</option>
                <option value="D-">D-</option>
                <option value="E">E</option>
                <option value="F">F</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="TIDAK HADIR">TIDAK HADIR</option>

              </select>
              <br />

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
          <br>
          <form action="kelab_persatuan.php" method="post">

            <div class="container">
              <div class="row">
                <div class="col-sm-12">
                  <table id="productTable" class="table table-bordered table-condensed table-striped text-center">
                    <thead>
                      <tr>
                        <th>Kemaskini</th>
                        <th>Tahun Menduduki SPM / SPMV</th>
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

                  $("#tahun_spm").val($(cols[1]).text());
                  $("#subjek_spm").val($(cols[2]).text());
                  $("#gred_spm").val($(cols[3]).text());

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
                    "<td>" + $("#tahun_spm").val() + "</td>" +
                    "<td>" + $("#subjek_spm").val() + "</td>" +
                    "<td>" + $("#gred_spm").val() + "</td>" +
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
                  $("#tahun_spm").val("");
                  $("#subjek_spm").val("");
                  $("#gred_spm").val("");
                }
              </script>
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