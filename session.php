<?php 
session_start();
if(!isset($_SESSION['no_kad_pengenalan_baru'])){
    header("Location: login.php");
    exit();
}
?>