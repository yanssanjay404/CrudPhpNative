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
<br>
<form action="olahdata.php" method="post" accept-charset="utf-8">
	<label>Name Film</label>
			<select name="film" required="">
				    <?php
                    $query1 = "SELECT * FROM film";
                    $query2 = mysqli_query($konek,$query1);
                    while ($film = mysqli_fetch_array($query2)) { ?>
                        <option value="<?php echo $film['film'] ?>"><?php echo $film["film"] ?>
                        </option>
                    <?php
                    }
                    ?>
			</select>
			<br>
			<br>
			<label>Date</label>
			<input type="date" name="tanggal_pesan" required="">
			<br>
			<br>
			<label>Time </label>
            	<select name="jam_pesan" required="">
				    <?php
                    $query1 = "SELECT * FROM jam";
                    $query2 = mysqli_query($konek,$query1);
                    while ($jam = mysqli_fetch_array($query2)) { ?>
                        <option value="<?php echo $jam['jam_pesan'] ?>"><?php echo $jam["jam_pesan"] ?>
                        </option>
                    <?php
                    }
                    ?>
			</select>
			<br>
			<br>
			<label>Grade</label>
			<select name="grade_pesan" required="">
				    <?php
                    $query1 = "SELECT * FROM fasilitas";
                    $query2 = mysqli_query($konek,$query1);
                    while ($fasilitas = mysqli_fetch_array($query2)) { ?>
                        <option value="<?php echo $fasilitas['grade_pesan'] ?>"><?php echo $fasilitas["grade_pesan"] ?> | <?php echo $fasilitas["harga"] ?>
                        </option>
                    <?php
                    }
                    ?>
			</select>
			<br>
			<br>
			<label>Pilih Kursi :</label><br>
	<select name="kursi_pesan" required>
		<option value="kosong"> --- Pilih Nomor Kursi --- </option>
		<optgroup label="Bagian Depan">
			<?php for ($i=1; $i <= 5 ; $i++) { ?>
				<option value="<?php echo $i; ?>"><?php echo "Kursi ". $i; ?></option>
			<?php } ?>
		</optgroup>
		<optgroup label="Bagian Tengah">
			<?php for ($i=6; $i <= 12 ; $i++) { ?>
				<option value="<?php echo $i; ?>"><?php echo "Kursi ". $i; ?></option>
			<?php } ?>
		</optgroup>
		<optgroup label="Bagian Belakang">
			<?php for ($i=13; $i <= 24 ; $i++) { ?>
				<option value="<?php echo $i; ?>"><?php echo "Kursi ". $i; ?></option>
			<?php } ?>
		</optgroup>
	</select>
			<br>
			<br>
			<input type="radio" name="payment" value="Dana" required="">Dana
			<input type="radio" name="payment" value="Ovo" required="">Ovo
			<input type="radio" name="payment" value="BCA" required="">BCA
			<input type="radio" name="payment" value="Mandiri" required="">Mandiri
			<br>
			<br>
			<br>
        <input type="hidden" name="id_user" value="<?php echo $_SESSION['id_user']; ?>" class="form-control" readonly>
        <br>
        <br>
        <br>
			<input type="submit" name="tekan" value="Paynow">
			<button><a style="text-decoration: none;" href="login.php">Cancel</a></button>
			<br>
			<br>
</form>
</body>
</html>