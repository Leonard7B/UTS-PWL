<?php
include("KONEK.php");
$nama_mahasiswa= $_POST['txtMahasiswa'];
$nim= $_POST['txtNim'];
$alamat= $_POST['txtAlamat'];
$jenis_kelamin= $_POST['kelamin'];
$agama= $_POST['txtAgama'];
$sekolah_asal= $_POST['txtSekolah'];
$simpan= mysqli_query($konek,"UPDATE mahasiswa set nama_mahasiswa='$nama_mahasiswa', nim='$nim', alamat='$alamat', jenis_kelamin='$jenis_kelamin', agama='$agama', sekolah_asal='$sekolah_asal' where id_mahasiswa='$kode'");
if ($simpan) {
	header("Location:INDEX.php?z=MAHASISWA");
}
?>