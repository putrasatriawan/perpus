<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-primary"><?= $title; ?></h1>

    <!-- card -->
    <div class="card shadow mb-4 py-4 px-4">

        <!-- form Input data -->
        <form class="form-horizontal"
              method="post"
              action="<?= base_url('peminjaman/simpan'); ?>">
            <div class="box-body">
                <div class="form-group">
                    <label for="inputEmail3"
                           class="col-sm-2 control-label">Id Peminjaman</label>
                    <div class="col-sm-10">
                        <input type="text"
                               name="id_pm"
                               value="<?= $id_pm ?>"
                               class="form-control"
                               readonly>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3"
                           class="col-sm-2 control-label">Peminjam</label>
                    <div class="col-sm-10">
                        <select name="id_anggota"
                                class="form-control select2"
                                id="">
                            <option value="">-Pilih Peminjam-</option>
                            <?php foreach ($peminjam as $row) : ?>
                            <option value="<?= $row->id_anggota ?>"> <?= $row->nama_anggota; ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3"
                           class="col-sm-2 control-label">Buku</label>
                    <div class="col-sm-10">
                        <select name="id_buku"
                                class="form-control select2"
                                id="">
                            <option value="">-Pilih Buku-</option>
                            <?php foreach ($buku as $row) : ?>
                            <option value="<?= $row->id_buku ?>"><?= $row->judul_buku; ?> | <?= $row->jumlah; ?>
                            </option>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3"
                           class="col-sm-2 control-label">Tanggal Pinjam</label>
                    <div class="col-sm-10">
                        <input type="date"
                               name="tgl_pinjam"
                               class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3"
                           class="col-sm-2 control-label">Tanggal Kembali</label>
                    <div class="col-sm-10">
                        <input type="date"
                               name="tgl_kembali"
                               class="form-control">
                    </div>
                </div>


                <div class="form-group">
                    <button type="submit"
                            class="btn btn-primary">Simpan</button>
                    <a class="btn btn-outline-secondary ml-2"
                       role="button"
                       href="<?= base_url('peminjaman'); ?>">Batal</a>
                </div>
        </form>
    </div>
</div>
</div>

<!-- akhir form input -->