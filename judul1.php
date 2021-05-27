<!-- <?php
// session_start();
// if(!isset($_SESSION['login'])){
// 	header('location:login.php');
//}

// include "koneksi.php";
?> -->

<!DOCTYPE html>
<html>
<head>
	<title>Film</title>
	<style type="text/css">
		.header img {
			width: 1370px;
			height: 200px;
		}
		.book{
			background-color: red;
		}
	</style>
</head>
<body>
<h3>Bioskop</h3>
<hr/>
<a href="index.php">Home</a> |
<a href="film.php">Film</a> |
<a href="feed_back.php">Feed Back</a> |
<a href="login.php">Login</a>
<hr/>
<hr/>
<div class="header">
	<img src="img/">
</div>
<hr>
<h2>Judul 1</h2>
<table>
		<tr>
		<td><b>Genre :</b></td>
		<td>Komedi</td>
	    </tr>
	    <tr>
		<td><b>Duration :</b></td>
		<td>2 Hours</td>
	    </tr>
	    <tr>
	    	<td><b>Sinopsis :</b></td>
	    </tr>
	    <tr>
	    	<td>disugfiui3ati</td>
	    </tr>
	</table>
	<h3>Schedule</h3>
	<table>
		<tr>
			<td><b>Reguler</b></td>
			<td>Rp 30.000</td>
		</tr>
		<tr>
			<td><b>VIP</b></td>
			<td>Rp 50.000</td>
		</tr>
		<tr>
			<td><b>VVIP</b></td>
			<td>Rp 70.000</td>
		</tr>
	</table>
	<a href="login.php" class="book">Booking</a>
</body>
</html>