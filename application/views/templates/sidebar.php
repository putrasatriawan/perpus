<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"
    id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center"
       href="<?= base_url('user'); ?>">
        <div class="sidebar-brand-icon">
            <i class="fas fa-user-graduate"></i>
        </div>
        <div class="sidebar-brand-text mx-3">E-<small><em>Liblary</em></small></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link btn-logout"
           href="<?= base_url('dashboard'); ?>">

            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>


    <li class="nav-item">
        <a class="nav-link btn-logout"
           href="<?= base_url('anggota'); ?>">

            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Anggota</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link btn-logout"
           href="<?= base_url('user'); ?>">

            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>User</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <div class="sidebar-heading">
        Dat
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item active">
        <a class="nav-link"
           href="#"
           data-toggle="collapse"
           data-target="#collapseTwo"
           aria-expanded="true"
           aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Master</span>
        </a>
        <div id="collapseTwo"
             class="collapse show"
             aria-labelledby="headingTwo"
             data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Masukan Data Anda Disini !</h6>
                <a class="collapse-item"
                   href=" <?= base_url('buku') ?>">Buku</a>
                <a class="collapse-item"
                   href="<?= base_url('penerbit') ?>">Penerbit</a>
                <a class="collapse-item"
                   href="<?= base_url('pengarang') ?>">Pengarang</a>
            </div>
        </div>
    </li>


    <li class="nav-item active">
        <a class="nav-link"
           href="#"
           data-toggle="collapse"
           data-target="#collapseTwo1"
           aria-expanded="true"
           aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Transaksi</span>
        </a>
        <div id="collapseTwo1"
             class="collapse show"
             aria-labelledby="headingTwo"
             data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Masukan Data Anda Disini !</h6>
                <a class="collapse-item"
                   href=" <?= base_url('peminjaman') ?>">Peminjaman</a>
                <a class="collapse-item"
                   href="<?= base_url('pengembalian') ?>">Pengembalian</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item active">
        <a class="nav-link"
           href="#"
           data-toggle="collapse"
           data-target="#collapseTwo"
           aria-expanded="true"
           aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Laporan</span>
        </a>
        <div id="collapseTwo"
             class="collapse show"
             aria-labelledby="headingTwo"
             data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Laporan Anda <br> Anda Disini !</h6>
                <a class="collapse-item"
                   href=" <?= base_url('Rekap_buku') ?>">Rekap Buku</a>
                <a class="collapse-item"
                   href="<?= base_url('Rekap_peminjaman') ?>">Rekap Peminjaman</a>
                <a class="collapse-item"
                   href="<?= base_url('Rekap_pengembalian') ?>">Rekap Pengambalian</a>
            </div>
        </div>
    </li>
    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link btn-logout"
           href="<?= base_url('auth/logout'); ?>"
           data-toggle="modal"
           data-target="#logoutModal">
            <i class="fas fa-fw fa-power-off"></i>
            <span>Logout</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0"
                id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->