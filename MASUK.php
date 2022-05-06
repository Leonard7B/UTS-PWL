<?php
include("KONEK.php");
session_start();
$username=$_POST['txtUsername'];
$password=$_POST['txtPassword'];
$cek=mysqli_query($konek, "SELECT * from admin where username='$username' and password='$password'") or die(mysqli_error());
$data=mysqli_fetch_array($cek);
$banyak=mysqli_num_rows($cek);
if($banyak >= 1){
    $_SESSION['username']=$data['username'];
    $_SESSION['id']=$data['id'];
    header("Location:INDEX.php");
} else{ ?>
    <script type="text/javascript">
        alert("Username atau Password Salah!");
    </script>
{
<?php
    header("Location:LOGIN.php");
}

?>