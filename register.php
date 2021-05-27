
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>
	<h2>Register</h2>
	<form method="post" action="aksi_register.php">
			<label>Username</label>
			<input type="text" name="username" placeholder="Username" required="">
			<br>
			<br>
			<label>Password</label>
			<input type="password" name="password" placeholder="Password" required="">
			<br>
			<br>
			<label>Nama Lengkap</label>
			<input type="text" name="namalengkap" placeholder="Nama Lengkap" required="">
			<br>
			<br>
			<label>Email</label>
			<input type="email" name="email" placeholder="Nama Lengkap" required="">
			<br>
			<br>
			<input type="submit" value="Submit">
			<button><a href="login.php">Batal</a></button>
			<br>
			<br>
		</form>

</body>
</html>