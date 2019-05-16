<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon ">
            <img class="img-profile rounded-circle" src="<?= base_url('assets/sbadmin2/') ?>img/inst.png">
        </div>
        <div class="sidebar-brand-text mx-4">S I R T</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('Viewp') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Home</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="<?= base_url() ?>Warga/Profil">
            <i class="fas fa-fw fa-user"></i>
            <span>Profil Saya</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item active">
        <a class="nav-link" href="<?= base_url() ?>Login/logout">
            <i class="fas fa-fw fa-sign-out-alt"></i>
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