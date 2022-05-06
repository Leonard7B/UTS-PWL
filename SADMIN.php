<?php
include("KONEK.php");
$nama= $_POST['txtNama'];
$username= $_POST['txtUsername'];
$password= $_POST['txtPassword'];
$simpan= mysqli_query($konek,"INSERT into admin(nama,username, password)
	values('$nama','$username','$password')") or die (mysqli_error());
if ($simpan) {
    header("Location:INDEX.php?z=ADMIN");
}

?>
