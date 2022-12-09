<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-primary"><?= $title; ?></h1>
  <div class="row">
    <div class="col-lg-8">

      <form class="form-horizontal" method="post" action="<?= base_url('pengarang/update'); ?>">
        <div class="box-body">
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Nama Pengarang</label>

            <div class="col-sm-10">
              <input type="hidden" name="id_pengarang" value="<?= $pengarang['id_pengarang'] ?>">
              <input type="text" name="nama_pengarang" value="<?= $pengarang['nama_pengarang'] ?>" class="form-control" placeholder="Nama anggota..." required>
            </div>
          </div>

        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <div class="col-sm-2"></div>
          <div class="col-sm-10">
            <a href="<?= base_url('pengarang'); ?>" class="btn btn-warning">Cancel</a>
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
        </div>
        <!-- /.box-footer -->
      </form>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->