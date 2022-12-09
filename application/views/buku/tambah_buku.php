<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-primary"><?= $title; ?></h1>

    <!-- card -->
    <div class="card shadow mb-4 py-4 px-4">

        <!-- form Input data -->
        <form method="post" action="<?= base_url('buku/simpan'); ?>">
            <div class="row">
                <div class="col-lg">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Id Buku</label>
                        <div class="col-sm-10">
                            <input type="text" name="id_buku" value="<?= $id_buku ?>" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Judul Buku</label>
                        <div class="col-sm-10">
                            <input type="text" name="judul_buku" class="form-control" required placeholder="Judul buku...">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Pengarang</label>
                        <div class="col-sm-10">
                            <select name="id_pengarang" class="form-control select2" id="" required>
                                <option value="">-Pilih Pengarang-</option>
                                <?php foreach ($pengarang as $row) : ?>
                                    <option value="<?= $row->id_pengarang ?>"><?= $row->nama_pengarang; ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Penerbit</label>
                        <div class="col-sm-10">
                            <select name="id_penerbit" class="form-control select2" id="" required>
                                <option value="">-Pilih Penerbit-</option>
                                <?php foreach ($penerbit as $row) : ?>
                                    <option value="<?= $row->id_penerbit ?>"><?= $row->nama_penerbit; ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Tahun Terbit</label>
                        <div class="col-sm-10">
                            <select name="tahun_terbit" class="form-control select2" id="" required>
                                <option value="">-Pilih tahun-</option>
                                <?php for ($tahun = 2000; $tahun <= 2020; $tahun++) { ?>
                                    <option value="<?= $tahun ?>"><?= $tahun; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Jumlah</label>

                        <div class="col-sm-10">
                            <input type="number" name="jumlah" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a class="btn btn-outline-secondary ml-2" role="button" href="<?= base_url('buku'); ?>">Batal</a>
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