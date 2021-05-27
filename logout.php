<?php
session_start();
//Untuk menghancurkan/memberhentikan sessionnya
session_destroy();

//kembali/redirect ke halaman login.php
header('location:login.php');
?>