<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-primary"><?= $title; ?></h1>

    <!-- card -->
    <div class="card shadow mb-4 py-4 px-4">

        <!-- form Input data -->
        <form method="post" action="<?= base_url('anggota/simpan'); ?>">
            <div class="row">
                <div class="col-lg">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Id Anggota</label>

                        <div class="col-sm-10">
                            <input type="text" name="id_anggota" value="<?= $id_anggota ?>" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Nama Anggota</label>

                        <div class="col-sm-10">
                            <input type="text" name="nama_anggota" class="form-control" placeholder="Nama anggota..." required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Jenis Kelamin</label>

                        <div class="col-sm-10">
                            <select name="jenis_kelamin" class="form-control" required>
                                <option value="">-Pilih Jenis Kelamin-</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>

                        <div class="col-sm-10">
                            <textarea name="alamat" class="form-control" required></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">No. Telepon</label>

                        <div class="col-sm-10">
                            <input type="text" name="no_telepon" class="form-control" placeholder="Nomor telepon" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a class="btn btn-outline-secondary ml-2" role="button" href="<?= base_url('anggota'); ?>">Batal</a>
                    </div>
                </div>
            </div>

        </form>
        <!-- akhir form input -->

    </div>
    <!-- /.card -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->