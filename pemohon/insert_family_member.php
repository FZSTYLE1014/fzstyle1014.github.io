<?php
// Connect to database
include $_SERVER['DOCUMENT_ROOT'].'/db/db_connection.php';

// Retrieve form data
$nama_keluarga = $_POST["nama_keluarga"];
$hubungan_keluarga = $_POST["hubungan_keluarga"];
$pekerjaan_keluarga = $_POST["pekerjaan_keluarga"];
$warganegara_keluarga = $_POST["warganegara_keluarga"];
$telefon_keluarga = $_POST["telefon_keluarga"];

// Insert data into database
$sql = "INSERT INTO family_members (nama_keluarga, hubungan_keluarga, pekerjaan_keluarga, warganegara_keluarga, telefon_keluarga)
VALUES ('$nama_keluarga', '$hubungan_keluarga', '$pekerjaan_keluarga', '$warganegara_keluarga', '$telefon_keluarga')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>