<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style type="text/css">
		.container{
			margin: auto;
			background-color: lightblue; 
			width: 400px;
			height: 500px;
		}
	</style>
</head>
<body>
		<?php
	//Jika ada request dengan method post maka akan menampung datanya di variabel di bawah ini 
	if($_SERVER['REQUEST_METHOD']=='POST'){
		//Untuk menampung data username
		$user = $_POST['username'];
		//Untuk menapmpung data password
		$pass = $_POST['password'];
		//Untuk mencocokkan karena didatabasenya menggunakan fungsi md5 maka dibuatkan variabelnya
		$p    = md5($pass);

        //Jika variabel user atau password kosong
		if($user=='' || $pass==''){
			echo "Form anda belum lengkap";
		//Jika sudah lengkap data inputnya maka akan di cek dibawah ini
		}else{
			//Untuk mengecek data
			include "koneksi.php";
			$sqlLogin = mysqli_query($konek, "SELECT * FROM user WHERE username='$user' AND password='$p'");
			//Untuk mengetahui jumlah data yang ditemukannya
			$jml = mysqli_num_rows($sqlLogin);
			//Tampung data
			$d = mysqli_fetch_array($sqlLogin);

			//Jika hasil cek datanya ketemu maka mulai sessionnya
			if($jml >0){
				session_start();
				$_SESSION['login']        = TRUE;
				$_SESSION['id_user']           = $d['id_user'];
				$_SESSION['username']     = $d['username'];
				$_SESSION['namalengkap']  = $d['namalengkap'];
				$_SESSION['email']        = $d['email'];

				//Diarahkan kedalam index (Jika Session berhasil)
				header('Location:./booking.php');
			//Jika tidak ditemukan datanya 
			}else{
				echo "Username atau password anda salah";
			}
		}
	} 
	?>
	<br>
	<br>
	<form action="" method="post">
	<div class="container">
		<br>
		<h3 style="text-align: center;">Sign in your account</h3>
		<input type="text" name="username" placeholder="Username">
		<br>
		<br>
		<input type="password" name="password" placeholder="Password">
		<br>
		<br>
		<a href="forget_password.php">Forget Password?</a>
		<table>
			<tr>
				<td>
					<h4>Don't have account?</h4>
				</td>
				<td>
					<a href="register.php">Register</a>
				</td>
			</tr>
		</table>
		<input type="submit" value="Login">
		<button><a href="index.php">Batal</a></button>
	</div>
	</form>
</body>
</html>