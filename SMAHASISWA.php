<?php
include("KONEK.php");
$nama_mahasiswa= $_POST['txtMahasiswa'];
$nim= $_POST['txtNim'];
$alamat= $_POST['txtAlamat'];
$jenis_kelamin= $_POST['kelamin'];
$agama= $_POST['txtAgama'];
$sekolah_asal= $_POST['txtSekolah'];

$simpan= mysqli_query($konek,"INSERT into mahasiswa(nama_mahasiswa, nim, alamat, jenis_kelamin, agama, sekolah_asal)
	values('$nama_mahasiswa','$nim','$alamat','$jenis_kelamin','$agama', '$sekolah_asal')") or die (mysqli_error());
if ($simpan) {
	header("Location:INDEX.php?z=MAHASISWA");
}
?>