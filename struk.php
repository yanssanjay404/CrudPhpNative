<?php
session_start();
if(!isset($_SESSION['login'])){
	header('location:login.php');
}
include 'koneksi.php';
if (isset($_GET['id_pesan'])) {
    $id_pesan = ($_GET["id_pesan"]);
    $query = "SELECT * FROM pesanan WHERE id_pesan='$id_pesan'";
    $result = mysqli_query($konek, $query);
    if(!$result){
      die ("Query Error: ".mysqli_errno($konek).
         " - ".mysqli_error($konek));
    }
    $data = mysqli_fetch_assoc($result);
       if (!count($data)) {
          echo "<script>alert('Data tidak ditemukan pada database');window.location='my_order.php';</script>";
       }
  } else {
    echo "<script>alert('Masukkan data id.');window.location='my_order.php';</script>";
  }    
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Struk</title>
		<link rel="shortcut icon" href="img/favicon.ico">
		<style>
			table, th, td {
			border: 1px solid black;
			}
		</style>
	</head>
	<body topmargin="0">
		<center>
		<table style="font-size:25px; background-color:#ffffff">
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<tr>
				<th>Order Number :</th>
				<td>SMB000<?php echo $data['id_pesan']; ?><?php echo $data['kursi_pesan']; ?><?php echo $data['id_user']; ?></td>
			</tr>
			<tr>
				<th>Movie Name :</th>
				<td><?php echo $data['film']; ?></td>
			</tr>
			<tr>
				<th>Date :</th>
				<td><?php echo $data['tanggal_pesan']; ?></td>
			</tr>
			<tr>
				<th>Time :</th>
				<td><?php echo $data['jam_pesan']; ?></td>
			</tr>
			<tr>
				<th>Grade :</th>
				<td><?php echo $data['grade_pesan']; ?></td>
			</tr>
			<tr>
				<th>Seats :</th>
				<td><?php echo $data['kursi_pesan']; ?></td>
			</tr>
			<tr>
				<th>Payment :</th>
				<td><?php echo $data['payment']; ?></td>
			</tr>	
		</table>
		</center>
	</body>
</html>