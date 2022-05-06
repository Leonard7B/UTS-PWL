<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>
  <body>
   <div class="card w-50 p-3 mb-2 bg-secondary text-white">
        <h5 class="mx-auto mt-2 font-weight-bold text-monospace">FORM TAMBAH DATA MAHASISWA</h5>
            <div class="card-body">
                <form method="post" action="?z=SMAHASISWA">
                    <div class="form-group">
                        <label class="text-monospace">Nama Mahasiswa</label>
                        <input type="text" class="form-control" name="txtMahasiswa">
                      </div>
                      <div class="form-group">
                        <label class="text-monospace">NIM</label>
                        <input type="text" class="form-control" name="txtNim">
                      </div>
                      <div class="form-group">
                          <label class="text-monospace">Alamat</label>
                          <input type="text" class="form-control" name="txtAlamat">
                        </div>
                        <div class="form-group">
                            <label class="text-monospace">Jenis Kelamin</label>
                            <select name="kelamin" class="form-control">
                            <option value="">->Pilih<-</option>
                            <option value="Pria">Pria</option>
                            <option value="Wanita">Wanita</option>
                            </select>
                          </div>
                          <div class="form-group">
                              <label class="text-monospace">Agama</label>
                              <select name="txtAgama" class="form-control">
                              <option value="">->Pilih<-</option>
                              <option value="Katolik">Katolik</option>
                              <option value="Kristen">Kristen</option>
                              <option value="Islam">Islam</option>
                              <option value="Hindu">Hindu</option>
                              <option value="Budha">Budha</option>
                              <option value="Konghucu">Konghucu</option>
                            </select>
                            </div>
                            <div class="form-group">
                                <label class="text-monospace">Sekolah Asal</label>
                                <input type="text" class="form-control" name="txtSekolah">
                            </div>
                            <button type="submit" class="btn btn-dark text-monospace">SIMPAN</button>
                        </form>
                    </div>
                </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
