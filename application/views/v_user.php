<!-- Begin Page Content -->
<div class="container-fluid">

    <?= $this->session->flashdata('message'); ?>

    <!-- data table -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary"><?= $title; ?></h6>
            <button data-toggle="modal" data-target="#add" type="button" class="btn btn-sm btn-success"><i class="fas fa-user-plus fa-sm"></i> Tambah User</button>
        </div>
        <div class="card-body">
            <?php
            if ($this->session->flashdata('pesan')) {
                echo '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i>';
                echo $this->session->flashdata('pesan');
                echo '</h5></div>';
            }
            ?>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="text-center thead-light">
                        <tr>
                            <th>No</th>
                            <th>Nama User</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Level</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php $no = 1;
                        foreach ($user as $key => $value) { ?>
                            <tr>
                                <th scope="row"><?= $no++   ?></th>
                                <th scope="row"><?= $value->nama  ?></th>
                                <th scope="row"><?= $value->username   ?></th>
                                <th scope="row"><?= $value->password    ?></th>
                                <th scope="row"><?php
                                                if ($value->role_id == 1) {
                                                    echo '<span class="badge bg-success">Admin</span>';
                                                } else {
                                                    echo '<span class="badge bg-danger">User</span>';
                                                } ?></th>
                                <td class="text-center">
                                    <a href="#edit<?= $value->id ?>" data-toggle="modal" class="badge badge-warning mr-1">
                                        <i class="fas fa-edit fa-sm"></i> Edit
                                    </a>

                                    <a href="#delete<?= $value->id ?>" data-toggle="modal" class="badge badge-danger">
                                        <i class="far fa-trash-alt fa-sm"></i> Delete
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- modal add -->
<div class="modal fade" id="add">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah User</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php
                echo form_open('user/add');
                ?>

                <div class="form-group">
                    <label>Nama User</label>
                    <input type="text" name="nama" class="form-control" placeholder="Isi Nama User" required>
                </div>

                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Isi Username" required>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="text" name="password" class="form-control" placeholder="Isi Password" required>
                </div>


                <div class="form-group">
                    <label>Level</label>
                    <select name="role_id" class="form-control">
                        <option value="1" selected>Admin</option>
                        <!-- <option value="2">User</option> -->
                    </select>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            <?php
            echo form_close();
            ?>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- modal edit -->
<?php foreach ($user as $key => $value) { ?>
    <div class="modal fade" id="edit<?= $value->id ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit User</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php
                    echo form_open('user/edit/' .  $value->id);
                    ?>

                    <div class="form-group">
                        <label>Nama User</label>
                        <input type="text" name="nama" value="<?= $value->nama ?>" class="form-control" placeholder="Isi Nama User" required>
                    </div>

                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" value="<?= $value->username ?>" class="form-control" placeholder="Isi Username" required>
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" name="password" value=" <?= $value->password ?>" class="form-control" placeholder="Isi Password" required>
                    </div>


                    <div class="form-group">
                        <label>Level</label>
                        <select name="role_id" class="form-control">
                            <option value="1" <?php if ($value->role_id == 1) {
                                                    echo 'selected';
                                                } ?>>Admin</option>
                            <option value="2" <?php if ($value->role_id == 2) {
                                                    echo 'selected';
                                                } ?>>User</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                <?php
                echo form_close();
                ?>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<?php } ?>
<!-- /.modal -->

<!-- modal delete -->
<?php foreach ($user as $key => $value) { ?>
    <div class="modal fade" id="delete<?= $value->id ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Hapus <?= $value->nama ?> ?</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <h5>Apakah anda ingin menghapus data ini?</h5>

                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                        <a href="<?= base_url('user/delete/' . $value->id) ?>?" class="btn btn-primary">Hapus</a>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    </div>
<?php } ?>
<!-- /.modal -->