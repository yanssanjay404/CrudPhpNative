<?php
session_start();
$sambung = new mysqli("localhost", "root", "", "bioskop");
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Reset Password</title>
</head>
<body>
	<h3>Reset Password</h3>
	<p><a href="login.php">Kembali</a></p>
	<form method="post" accept-charset="utf-8">
		<label>Email</label>
		<input type="email" name="mailnya"> <br>
		<button type="submit" name="periksa">Periksa</button>
	</form>

<?php if (isset($_POST["periksa"])): ?>	
<?php 
	$m = $_POST["mailnya"];
	$_SESSION['baw'] = $m;
	$am = $sambung->query("SELECT * FROM user WHERE email = '$m' ");
	if ($am->num_rows == 1) {
 ?>
	<form method="post" accept-charset="utf-8">
		<label>Password baru</label>
		<input type="password" name="pa" minlength="4">
		<button type="submit" name="ubah">Reset</button>
	</form>	
<?php  
	}else{
		echo "Email belum terdaftar";
	}
?>	
<?php endif ?>

<?php if (isset($_POST["ubah"])) {
	$ma = $_SESSION['baw'];
	$pa = md5($_POST["pa"]);
	$sambung->query("UPDATE user SET password = '$pa' WHERE email = '$ma' ");
	unset($ma);
	echo "<script>alert('Berhasil Di Ubah');window.location='login.php';</script>";
} ?>
</body>
</html>