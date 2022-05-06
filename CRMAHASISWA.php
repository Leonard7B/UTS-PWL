<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Laporan Data Mahasiswa</title>
  </head>
  <body style="padding: 50px;" onload="window.print();">
    <?php
      $no = 1;
      include("KONEK.php");
      $cari=mysqli_query($konek, "SELECT * from mahasiswa") or die (mysqli_error());

      ?>
      <h3 class="text-center">LAPORAN DATA MAHASISWA</h3>
      <table class="table table-striped table-dark">
          <thead>
              <tr>
              <tr class="text-monospace">
            <th scope="col">No.</th>
            <th scope="col">Nama Mahasiswa</th>
            <th scope="col">NIM</th>
            <th scope="col">Alamat</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Agama</th>
            <th scope="col">Sekolah Asal</th>
            <th scope="col">Aksi</th>
             </tr>
          </thead>
          <tbody>
              <?php
                  while ($data=mysqli_fetch_array($cari)){
              ?>
              <tr class="text-monospace">
                <th scope="row"><?php echo $no; ?></th>
                <td><?php echo $data['nama_mahasiswa']; ?></td>
                <td><?php echo $data['nim']; ?></td>
                <td><?php echo $data['alamat']; ?></td>
                <td><?php echo $data['jenis_kelamin']; ?></td>
                <td><?php echo $data['agama']; ?></td>
                <td><?php echo $data['sekolah_asal']; ?></td>
                <td>
                    <a href="?z=HMAHASISWA&id=<?php echo $data['id_mahasiswa']; ?>" class="btn btn-danger  text-monospace">Hapus</a>
                    <a href="?z=EMAHASISWA&id=<?php echo $data['id_mahasiswa']; ?>" class="btn btn-warning  text-monospace">Edit</a>
                </td>
              </tr>
              <?php
                  $no++;
              }
              ?>
          </tbody>
      </table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>