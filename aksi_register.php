<?php
session_start();
if(!isset($_SESSION['login'])){
	header('location:login.php');
}
include "koneksi.php";

$username    = $_POST['username'];
$password    = md5($_POST['password']);
$namalengkap = $_POST['namalengkap'];
$email       = $_POST['email'];

if($username=='' || $_POST['password']=='' || $namalengkap=='' || $email==''){
			echo "Form anda belum lengkap";
		}else{
			//proses simpan data
			$simpan = mysqli_query($konek, "INSERT INTO user(username,password,namalengkap,email)VALUES('$username', '$password', '$namalengkap', '$email')");

			if($simpan){
				header('location:login.php?e=sukses');
			}else{
				header('location:login.php?e=gagal');
				echo "gagal";
			}
		}
?>