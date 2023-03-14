<?php
session_start();
unset($_SESSION["email"]);
unset($_SESSION["kata_laluan"]);
header("Location:admin.php");
?>