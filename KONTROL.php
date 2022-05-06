<?php
if (isset($_GET['z'])){
    switch ($_GET['z']){
        case 'KELUAR':
            include("KELUAR.php");
            break;
        case 'ADMIN':
            include("ADMIN.php");
            break;
        case 'TADMIN':
            include("TADMIN.php");
            break;
        case 'SADMIN':
            include("SADMIN.php");
            break;
        case 'HADMIN':
            include("HADMIN.php");
            break;
        case 'EADMIN':
            include("EADMIN.php");
            break;
        case 'UADMIN':
            include("UADMIN.php");
            break;
        case 'MAHASISWA':
            include("MAHASISWA.php");
            break;
        case 'TMAHASISWA':
            include("TMAHASISWA.php");
            break;
        case 'SMAHASISWA':
            include("SMAHASISWA.php");
            break;
        case 'HMAHASISWA':
            include("HMAHASISWA.php");
            break;
        case 'EMAHASISWA':
            include("EMAHASISWA.php");
            break;
        case 'UMAHASISWA':
            include("UMAHASISWA.php");
            break;
        case 'RMAHASISWA':
            include("RMAHASISWA.php");
            break;
    }
}
else{
    echo  "<h4  class=mx-auto>Selamat Datang di Aplikasi CRUD Pendataan Mahasiswa</h4>";
}