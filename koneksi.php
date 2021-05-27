<?php
//variabel koneksi
$konek = mysqli_connect("localhost","root","","bioskop");

if(!$konek){
	echo "Koneksi Database Gagal...!!!";
}
?>