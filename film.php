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
		.nowplay{
			background-color: green;
			width: 130px;
			height: 40px;
		}
		.nowplay h2{
			color: white;
			text-align: center;
		}
		.judul1{
			background-color: blue;
			height: 250px;
			width: 200px; 
		}
		.judul1 img{
			height: 200px;
			width: 200px;
		}
		.judul1 h3{									
			color: white;
			text-align: center;
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
<div class="nowplay">
	<h2>Action</h2>
</div>
<br>
<br>
<a href="judul1.php">
	<div class="judul1">
		<img src="img/programmer.png">
		<h3>Judul</h3>
	</div>
</a>
</body>
</html>