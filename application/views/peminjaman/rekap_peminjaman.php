<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1">
    <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url(); ?>assets_laporan/vendor/bootstrap/css/bootstrap.min.css"
          rel="stylesheet">

    <!--<link href="<?php echo base_url(); ?>assets/css/jquery-ui.css" rel="stylesheet">-->
    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url(); ?>assets_laporan/vendor/fontawesome-free/css/all.min.css"
          rel="stylesheet"
          type="text/css">

    <script src="<?php echo base_url(); ?>assets_laporan/js/jquery-3.2.1.min.js"
            type="text/javascript"></script>
    <!--<script src="" type="text/javascript"></script>-->

    <!-- Page level plugin CSS-->
    <link href="<?php echo base_url(); ?>assets_laporan/vendor/datatables/dataTables.bootstrap4.css"
          rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url(); ?>assets_laporan/css/sb-admin.css"
          rel="stylesheet">

    <script src="<?php echo base_url(); ?>assets/_laporannode_modules/sweetalert/dist/sweetalert.min.js"></script>
    <script src="<?php echo base_url(); ?>assets_laporan/node_modules/jquery-mask-plugin/dist/jquery.mask.min.js">
    </script>

    <script src="<?php echo base_url(); ?>assets_laporan/vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url(); ?>assets_laporan/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!--<script src="<?php echo base_url(); ?>assets/js/jquery-ui.js" ></script>-->

<body onload="window.print()">
    <div>

        <div id="content-wrapper"
             style="margin-top:50px">

            <div class="container-fluid">



                <!-- DataTables Example -->
                <div class="card mb-3"
                     id="cardbayar">
                    <div class="card-header">
                        <center>
                            <b>
                                <h3>Laporan Rekap Peminjaman<br></h3>
                                <!-- <h4> <br></h4> -->
                            </b>
                        </center>
                    </div>
                    <div class="card-body card-block">
                        <left>
                            <b>
                                <h3>Data Peminjaman <br></h3>
                                <!-- <h4> <br></h4> -->
                            </b>
                        </left>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered"
                                       id="tabelbayar"
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
                                            <!-- <th scope="col">Aksi</th> -->
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

                                            <!-- <td>
                                                <a href="<?= base_url('peminjaman/kembalikan/') . $row->id_pm ?>"
                                                   class="btn btn-primary btn-xs"
                                                   onclick="return confirm('Yakin mau dikembalikan?')">Kembalikan</a>
                                            </td> -->
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- <hr>
                        <left>
                            <b>
                                <h3>Data Siswa <br></h3>
                                <!-- <h4> <br></h4> -->
                        </b>
                        </left>
                        <!-- <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="tabelbayar" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama Siswa</th>
                                            <th>Nis</th>
                                            <th>Kelas</th>
                                            <th>Jenis Kelamin</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <tr>
                                            <td><?= $data->nama_siswa ?></td>
                                        </tr>
                                    </tbody>


                                </table>
                            </div>
                        </div> -->

                        <div class=" row">
                            <div class="col-auto mr-auto"">
                                <div class="
                                 card-body
                                 card-block">
                                <div class="row form-group">
                                    <div id="form-tanggal"
                                         class="col col-md-12"><label for="select"
                                               class=" form-control-label"></label></div>
                                    <div id="form-tanggal"
                                         class="col col-md-12"><label for="select"
                                               class=" form-control-label">Bima, <?php echo date('d M Y') ?></label>
                                    </div>

                                </div>
                                <div class="row form-group">
                                    <div id="form-tanggal"
                                         class="col col-md-12"><label for="select"
                                               class=" form-control-label"></label></div>
                                    <div id="form-tanggal"
                                         class="col col-md-12"><label for="select"
                                               class=" form-control-label"></label></div>

                                </div>
                                <br><br><br>
                                <div class="row form-group">
                                    <div id="form-tanggal"
                                         class="col col-md-12"><label for="select"
                                               class=" form-control-label"></label></div>
                                    <div id="form-tanggal"
                                         class="col col-md-12"><label for="select"
                                               class=" form-control-label"></label>Kepala Keuangan</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="card-body card-block">
                                <div class="row form-group">
                                    <div id="form-tanggal"
                                         class="col col-md-12"><label for="select"
                                               class=" form-control-label"></label></div>
                                    <div id="form-tanggal"
                                         class="col col-md-12"><label for="select"
                                               class=" form-control-label">Bima, <?php echo date('d M Y') ?></label>
                                    </div>

                                </div>
                                <div class="row form-group">
                                    <div id="form-tanggal"
                                         class="col col-md-12"><label for="select"
                                               class=" form-control-label"></label></div>
                                    <div id="form-tanggal"
                                         class="col col-md-12"><label for="select"
                                               class=" form-control-label">Petugas</label></div>

                                </div>
                                <br><br><br>
                                <div class="row form-group">
                                    <div id="form-tanggal"
                                         class="col col-md-12"><label for="select"
                                               class=" form-control-label"></label></div>
                                    <div id="form-tanggal"
                                         class="col col-md-12"><label for="select"
                                               class=" form-control-label"></label><?= $this->session->userdata('username') ?>
                                        </< /div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <!-- Bootstrap core JavaScript-->
            <script src="<?php echo base_url(); ?>assets_laporan/vendor/jquery/jquery.min.js"></script>
            <script src="<?php echo base_url(); ?>assets_laporan/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="<?php echo base_url(); ?>assets_laporan/vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="<?php echo base_url(); ?>assets_laporan/js/sb-admin-2.min.js"></script>

            <!-- Page level plugins -->
            <script src="<?php echo base_url(); ?>assets_laporan/vendor/datatables/jquery.dataTables.min.js"></script>
            <script src="<?php echo base_url(); ?>assets_laporan/vendor/datatables/dataTables.bootstrap4.min.js">
            </script>

            <!-- Page level custom scripts -->
            <script src="<?php echo base_url(); ?>assets_laporan/js/demo/datatables-demo.js"></script>

</body>

</html>