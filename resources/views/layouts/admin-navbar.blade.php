<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard.index') }}">
        <div class="sidebar-brand-text mx-3">{{ config('app.name') }}</div>
    </a>

    <hr class="sidebar-divider my-0">

    <li class="nav-item{{ Request::routeIs('dashboard.index', 'dashboard.*') ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <hr class="sidebar-divider my-0">

    <li class="nav-item{{ Request::routeIs('sambutan-kepala-sekolah.index', 'sambutan-kepala-sekolah.*') ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('sambutan-kepala-sekolah.index') }}">
            <i class="fas fa-fw fa-user-tie"></i>
            <span>Sambutan Kepala Sekolah</span>
        </a>
    </li>

    <li class="nav-item{{ Request::routeIs('prestasi.index', 'prestasi.*') ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('prestasi.index') }}">
            <i class="fas fa-fw fa-trophy"></i>
            <span>Prestasi</span>
        </a>
    </li>

    <li class="nav-item{{ Request::routeIs('berita.index', 'berita.*') ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('berita.index') }}">
            <i class="fas fa-fw fa-file-alt"></i>
            <span>Berita</span>
        </a>
    </li>

    <li class="nav-item{{ Request::routeIs('visi-misi.index', 'visi-misi.*') ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('visi-misi.index') }}">
            <i class="fas fa-fw fa-bullseye"></i>
            <span>Visi dan Misi</span>
        </a>
    </li>

    <li class="nav-item{{ Request::routeIs('sejarah.index', 'sejarah.*') ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('sejarah.index') }}">
            <i class="fas fa-fw fa-bullseye"></i>
            <span>Sejarah</span>
        </a>
    </li>

    <li class="nav-item{{ Request::routeIs('guru.index', 'guru.*') ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('guru.index') }}">
            <i class="fas fa-fw fa-bullseye"></i>
            <span>Guru</span>
        </a>
    </li>

    <li class="nav-item{{ Request::routeIs('struktur.index', 'struktur.*') ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('struktur.index') }}">
            <i class="fas fa-fw fa-user-tie"></i>
            <span>Struktur Organisasi</span>
        </a>
    </li>

    <li class="nav-item{{ Request::routeIs('ekskul.index', 'ekskul.*') ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('ekskul.index') }}">
            <i class="fas fa-fw fa-medal"></i>
            <span>Ekstrakulikuler</span>
        </a>
    </li>

    <hr class="sidebar-divider my-0">

    <li class="nav-item{{ Request::routeIs('manajemen-akun.index', 'manajemen-akun.*') ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('manajemen-akun.index') }}">
            <i class="fas fa-fw fa-user"></i>
            <span>Manajemen Akun</span>
        </a>
    </li>

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
