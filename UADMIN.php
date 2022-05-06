<?php
include("KONEK.php");
$kode= $_POST['kode'];
$nama= $_POST['txtNama'];
$username= $_POST['txtUsername'];
$password= $_POST['txtPassword'];
$simpan= mysqli_query($konek,"UPDATE admin SET nama='$nama', username='$username', 
password='$password' WHERE id='$kode'") or die (mysqli_error());
if ($simpan) {
	header("Location:INDEX.php?z=ADMIN");
}