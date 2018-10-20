<?php
$simpan=mysqli_connect("localhost","root","","data");
if (isset($_POST['submit'])) {
	$nama=$_POST["nama"];
	$nim=$_POST["nim"];
	$tgl_lahir=$_POST["tgl_lahir"];
	$jeniskelamin=$_POST["jeniskelamin"];
	$programstudi=$_POST["programstudi"];
	$fakultas=$_POST["fakultas"];
	$asal=$_POST["asal"];
	$motto=$_POST["motto"];
$con=mysqli_query($simpan, "INSERT INTO jurnal VALUES('','$nama','$nim','$tgl_lahir','$jeniskelamin','$programstudi','$fakultas','$asal','$motto')");
if ($con) {
	echo "Data berhasil di input";
	header("location:hasil.php");
}else{
	echo "gagal";
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>
	</title>
</head>
<body>
<form method="post" >
	Nama : <input type="text" name="nama"><br>
	Nim :<input type="text" name="nim"><br>
	Tanggal lahir :<input type="date" name="tgl_lahir"><br>

	Jenis Kelamin:
	<select name="jeniskelamin">
	<option name="jeniskelamin">perempuan</option>
	<option name="jeniskelamin">laki-laki</option></select><br>
	program studi :
	<select name="programstudi">
	<option name="programstudi">Manajemen Informatika</option>
	<option name="programstudi">Teknik informatika</option>
	<option name="programstudi">DKV</option>
	<option name="programstudi">Teknik elektro</option>
	</select><br>
	Fakultas : <input type="radio" name="fakultas" value="ilmuterapan">ilmu terapan
				<input type="radio" name="fakultas" value="idustrikreatif">industri kreatif
				<input type="radio" name="fakultas" value="teknik">Teknik<br>
	Asal : <input type="text" name="asal"><br>
	Motto hidup : <textarea name="motto">
	</textarea><br>

<input type="submit" name="submit">
</form>
</body>
</html>
