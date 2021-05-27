<?php 

$sambungkan = new mysqli("localhost", "root", "", "bioskop");

if (isset($_POST['tekan'])) {
	$film    = $_POST['film'];
    $tanggal_pesan = $_POST['tanggal_pesan'];
    $jam_pesan     = $_POST['jam_pesan'];
    $grade_pesan   = $_POST['grade_pesan'];
    $payment       = $_POST['payment'];
	$data          = $_POST['kursi_pesan'];
	$id_user = $_POST['id_user'];
	$ambil         = $sambungkan->query("SELECT * FROM pesanan WHERE kursi_pesan = ('$data') ")->fetch_assoc();

	$pesan = "";
	if ($data == "kosong") {
		$pesan = "Anda belum memilih kursi ! ";
	}
	elseif (isset($ambil['kursi_pesan'])) {
		$pesan = "Kursi yang anda pilih telah penuh, silahkan pilih kursi lain";
	}
	else{
		$sambungkan->query("INSERT INTO pesanan (film, tanggal_pesan, jam_pesan, grade_pesan, payment, kursi_pesan, id_user) VALUES ('$film', '$tanggal_pesan', '$jam_pesan', '$grade_pesan', '$payment', '$data', '$id_user')");
		$pesan = "Kursi berhasil di pesan";
	}
	 echo $pesan. "<br>";
	 echo "<a href='booking.php'>Kembali</a>";


}
 ?>