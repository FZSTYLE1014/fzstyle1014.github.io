<?php
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "kerjaya";


 $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);

 if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
  }
  //echo "Connected successfully";
   
?>