<div class="container">


    <!-- Outer Row -->
    <div class="row justify-content-center">


        <div class="col-lg-7">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-4">
                                <div class="text-center">
                                    <img src="<?= base_url('assets/'); ?>logo/logo.png" alt="logo-image" class="img-circle" width="100px" height="100px">
                                    <h1 class="h4 text-gray-900 mb-0"><b>E</b>-<em>Spp</em></h1>
                                    <p class="lead text-blue-900 mb-3">SMK ---------</p>
                                    <hr>
                                    <h1 class="h4 text-gray-900">Login Page</h1>
                                </div>

                                <?= $this->session->flashdata('message'); ?>

                                <form class="user" method="post" action="<?= base_url('auth'); ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukan Username" name="username">
                                        <?php echo form_error('username', '<div class="text-danger small">', '</div>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="masukan password" name="password">
                                        <?php echo form_error('password', '<div class="text-danger small">', '</div>'); ?>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>

                                </form>
                                <hr>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>