<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon ">
            <img class="img-profile rounded-circle" src="<?= base_url('assets/sbadmin2/') ?>img/insti.png">
        </div>
        <div class="sidebar-brand-text mx-4">S I R T</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('View') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Home</span></a>
    </li>
    <li class="nav-item ">
        <a class="nav-link active" href="<?= base_url() ?>Admin/Profil">
            <i class="fas fa-fw fa-user"></i>
            <span>Profil Saya</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Tambah data</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Components:</h6>
                <a class="collapse-item" href="<?= base_url() ?>Admin/Tambah_data/KK">Kartu Keluarga</a>
                <a class="collapse-item" href="<?= base_url() ?>Admin/Tambah_data/Penduduk">Penduduk</a>
            </div>
        </div>
    </li>
    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url() ?>Admin/DetailPenduduk">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Detail Penduduk</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url() ?>Admin/PembuatanSurat">
            <i class="fas fa-fw fa-table"></i>
            <span>Pembuatan Surat</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url() ?>Admin/Rekap">
            <i class="fas fa-fw fa-table"></i>
            <span>Rekap Surat</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url() ?>Login/logout">
            <i class="fas fa-sign-out-alt fa-fw"></i>
            <span>Log Out</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->