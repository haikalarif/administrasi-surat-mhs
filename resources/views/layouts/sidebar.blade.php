<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-envelope"></i>
        </div>
        <div class="sidebar-brand-text mx-3"><sup>Aplikasi Surat </sup>STMIK Bdg</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::is('dashboard*') ? 'active' : '' }}">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Surat
    </div>

    @can('mhs')
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item {{ Request::is('ajuan*') ? 'active' : '' }}">
            <a class="nav-link collapsed" href="/ajuan">
                <span>Pengajuan Surat</span>
            </a>
        </li>
    @endcan

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item {{ Request::is('surat*') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="/surat">
            <span>List Surat</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Pengguna
    </div>

    @can('admin')
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item {{ Request::is('user*') ? 'active' : '' }}">
            <a class="nav-link collapsed" href="/user">
                <span>Data Mahasiswa</span>
            </a>
        </li>
    @endcan

    <!-- Nav Item - Charts -->
    <li class="nav-item {{ Request::is('profile*') ? 'active' : '' }}">
        <a class="nav-link" href="/profile">
            <span>Profile</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

</ul>
