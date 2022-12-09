<!-- Begin Page Content -->
<div class="container-fluid">

    <?= $this->session->flashdata('message'); ?>

    <!-- data table -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary"><?= $title; ?></h6>
            <a class="btn btn-sm btn-primary shadow-sm" href="<?= base_url('penerbit/tambahPenerbit'); ?>"><i class="fas fa-user-plus fa-sm"></i> Tambah Penerbit</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="text-center thead-light">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Id Penerbit</th>
                            <th scope="col">Nama Penerbit</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php $no = 1;
                        foreach ($penerbit as $row) : ?>
                            <tr>
                                <th scope="row"><?= $no++   ?></th>
                                <td><?= $row->id_penerbit; ?></td>
                                <td><?= $row->nama_penerbit; ?></td>
                                <td>
                                    <a href="<?= base_url('penerbit/edit/') . $row->id_penerbit; ?>" class="btn btn-success btn-xs">
                                        <i class="fas fa-edit fa-sm"></i> Edit</a>
                                    <a href="<?= base_url('penerbit/delete/') . $row->id_penerbit; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin mau menghapus?')">
                                        <i class="far fa-trash-alt fa-sm"></i>Delete</a>
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