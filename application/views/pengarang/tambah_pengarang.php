<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-primary"><?= $title; ?></h1>

    <!-- card -->
    <div class="card shadow mb-4 py-4 px-4">

        <!-- form Input data -->
        <form method="post" action="<?= base_url('pengarang/simpan'); ?>">
            <div class="row">
                <div class="col-lg">
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Nama Pengarang</label>

                        <div class="col-sm-10">
                            <input type="text" name="nama_pengarang" class="form-control" placeholder="Nama pengarang..." required>
                        </div>
                    </div>


                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a class="btn btn-outline-secondary ml-2" role="button" href="<?= base_url('pengarang'); ?>">Batal</a>
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