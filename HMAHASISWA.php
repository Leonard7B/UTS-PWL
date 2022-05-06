<?php
include ("KONEK.php");
$id = $_GET['id'];
$hapus=mysqli_query($konek,"DELETE FROM mahasiswa WHERE id_mahasiswa='$id'");
if($hapus) {
	header("Location:INDEX.php?z=MAHASISWA");
}
?>