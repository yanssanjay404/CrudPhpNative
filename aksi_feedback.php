<?php 
include 'koneksi.php';
$name=$_POST['name'];
$email=$_POST['email'];
$phone_number=$_POST['phone_number'];
$message=$_POST['message'];

$query = "INSERT INTO report (name, email, phone_number, message) VALUES ('$name', '$email', '$phone_number', '$message')";
                  $result = mysqli_query($konek, $query);
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($konek).
                           " - ".mysqli_error($konek));
                  } else {
                    echo "<script>alert('Terima Kasih Atas Saran Anda.');window.location='index.php';</script>";
                  }
 ?>