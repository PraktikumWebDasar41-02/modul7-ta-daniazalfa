<?php
include 'conn.php';
$id=$_GET['id'];
mysqli_query($simpan, "DELETE FROM jurnal WHERE id=$id");
if (mysqli_affected_rows($simpan) > 0){
	echo "data dihapus";
header("location:hasil.php");
}
 ?>
