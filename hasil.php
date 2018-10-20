<?php
include 'conn.php';
$data=mysqli_query($simpan, "SELECT * FROM jurnal");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border="1">
	<tr>
		<th>nama</th>
		<th>nim</th>
		<th>tgl_lahir</th>
		<th>jenis kelamin</th>
		<th>program studi</th>
		<th>Fakultas</th>
		<th>asal</th>
		<th>motto</th>
		<th>aksi</th>
	</tr>
	<?php
	while($baru=mysqli_fetch_assoc($data)) :?>
		<tr>
			<td><?php echo $baru["nama"]; ?></td>
			<td><?php echo $baru["nim"]; ?></td>
			<td><?php echo $baru["tgl_lahir"]; ?></td>
			<td><?php echo $baru["jeniskelamin"]; ?></td>
			<td><?php echo $baru["programstudi"]; ?></td>
			<td><?php echo $baru["fakultas"]; ?></td>
			<td><?php echo $baru["asal"]; ?></td>
			<td><?php echo $baru["motto"]; ?></td>
			<td><a href="hapus.php?id=<?php echo $baru['id']; ?>">hapus</a></td>

		</tr>
   <?php endwhile; ?>
</table>
</body>
