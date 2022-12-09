<!-- Begin Page Content -->
<div class="container-fluid">

    <?= $this->session->flashdata('message'); ?>

    <!-- data table -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary"><?= $title; ?></h6>
            <a class="btn btn-sm btn-primary shadow-sm"
               href="<?= base_url('peminjaman/tambahPeminjaman'); ?>"><i class="fas fa-user-plus fa-sm"></i> Tambah
                Peminjaman</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered"
                       id="dataTable"
                       width="100%"
                       cellspacing="0">
                    <thead class="text-center thead-light">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Id Peminjaman</th>
                            <th scope="col">Nama Peminjam</th>
                            <th scope="col">Buku</th>
                            <th scope="col">Tanggal Pinjam</th>
                            <th scope="col">Tanggal Kembali</th>
                            <th scope="col">Status</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php foreach ($peminjaman as $row) : ?>
                        <?php $no = 1;
                            $tgl_kembali = new DateTime($row->tgl_kembali);
                            $tgl_sekarang = new DateTime();
                            $selisih = $tgl_sekarang->diff($tgl_kembali)->format("%a");
                            ?>
                        <tr>
                            <th scope="row"><?= $no++   ?></th>
                            <td><?= $row->id_pm; ?></td>
                            <td><?= $row->nama_anggota; ?></td>
                            <td><?= $row->judul_buku; ?></td>
                            <td><?= $row->tgl_pinjam; ?></td>
                            <td><?= $row->tgl_kembali; ?></td>

                            <?php if ($tgl_kembali <= $tgl_sekarang or $selisih == 0) { ?>
                            <td>
                                <span class="label label-warning">Belum dikembalikan</span>
                            </td>
                            <td>
                                Telat <b style="color: red;"><?= $selisih; ?></b> Hari <br> <span
                                      class="label label-danger">Denda perhari = Rp. 1000,-</span>
                            </td>
                            <?php } else { ?>
                            <td></td>
                            <td></td>
                            <?php } ?>

                            <td>
                                <a href="<?= base_url('peminjaman/kembalikan/') . $row->id_pm ?>"
                                   class="btn btn-primary btn-xs"
                                   onclick="return confirm('Yakin mau dikembalikan?')">Kembalikan</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->