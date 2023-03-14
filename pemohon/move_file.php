<?php
$target_dir = "..\pemohon\profile\\";
$target_file = $target_dir . basename($_FILES["gambar_pemohon"]["name"]);

if (move_uploaded_file($_FILES["gambar_pemohon"]["tmp_name"], $target_file)) {
  echo "<script>alert('Profile picture uploaded successfully.'); setTimeout(function(){
    window.history.back();
  }, 2000);</script>";
} else {
  echo "<script>alert('An error occurred! Please upload again.'); setTimeout(function(){
    window.history.back();
  }, 2000);</script>";
}
?> action="<?php echo $_SERVER["PHP_SELF"]; ?>"