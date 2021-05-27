<?php
session_start();
if(!isset($_SESSION['login'])){
	header('location:login.php');
}
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Booking</title>
	<style type="text/css">
		
	</style>
</head>
<body>
<h3>Bioskop</h3>
<hr/>
<a href="index.php">Home</a> |
<a href="film.php">Film</a> |
<a href="feed_back.php">Feed Back</a>|
<a href="my_order.php">My Order</a>
<a href="logout.php">Logout</a>
<h2>Hy, <?php echo $_SESSION['namalengkap'] ?></h2>
<hr/>
<table>
	<thead>
		<tr>
			<th>No</th>
			<th>Id Pesan</th>
			<th>Film</th>
			<th>Tgl Pesan</th>
			<th>Jam Pesan</th>
			<th>Grade Pesan</th>
			<th>No Kursi</th>
			<th>Payment</th>
			<th>Action</th>
		</tr>
	</thead>
	<?php
    $query = mysqli_query ($konek, "SELECT * FROM pesanan where id_user='$_SESSION[id_user]'");
    $no = 1;
    while($row = mysqli_fetch_array($query)){
    ?>
    <tbody>
    	<tr>
    		<td><?php echo $no; ?></td>
    		<td><?php echo $row['id_pesan']; ?></td>
    		<td><?php echo $row['film']; ?></td>
    		<td><?php echo $row['tanggal_pesan']; ?></td>
    		<td><?php echo $row['jam_pesan']; ?></td>
    		<td><?php echo $row['grade_pesan']; ?></td>
    		<td><?php echo $row['kursi_pesan']; ?></td>
    		<td><?php echo $row['payment']; ?></td>
    		<td>
    			<a href="struk.php?id_pesan=<?php echo $row['id_pesan']; ?>" target="_blank">Cetak</a>
    		</td>
    	</tr>
    </tbody>
    <?php
    $no++;
    } 
    ?>
</table>
</body>
</html>