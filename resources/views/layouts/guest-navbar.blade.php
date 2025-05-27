<header id="header" class="header sticky-top">
    <div class="topbar d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">info@gmail.com</a></i>
                <i class="bi bi-whatsapp d-flex align-items-center ms-4"><span>0812 3456 7890</span></i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
    </div>

    <div class="branding d-flex align-items-cente">
        <div class="container position-relative d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="guest/img/logo.png" alt=""> -->
                <h1 class="sitename text-uppercase">{{ config('app.name') }}</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{ route('home') }}" class="{{ Request::routeIs('home') ? 'active' : '' }}">Home</a></li>
                    <li class="dropdown"><a href="" class="{{ Request::routeIs('guest.tentang-kami.visi-dan-misi') ? 'active' : '' }}"><span>Tentang Kami</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="{{ route('guest.tentang-kami.visi-dan-misi') }}">Visi dan Misi</a></li>
                            <li><a href="">Sejarah</a></li>
                            <li><a href="{{ route('guest.tentang-kami.struktur-organisasi') }}">Struktur Organisasi</a></li>
                            <li><a href="">Guru</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('guest.ekskul') }}" class="{{ Request::routeIs('guest.ekskul') ? 'active' : '' }}">Ekstrakurikuler</a></li>
                    <li><a href="{{ route('guest.prestasi') }}" class="{{ Request::routeIs('guest.prestasi') ? 'active' : '' }}">Prestasi</a></li>
                    <li><a href="{{ route('guest.berita') }}" class="{{ Request::routeIs('guest.berita') ? 'active' : '' }}">Kegiatan</a></li>
                    <li><a href="{{ route('guest.berita') }}" class="{{ Request::routeIs('guest.berita') ? 'active' : '' }}">Berita</a></li>
                    <li><a href="{{ route('login') }}" class="text-primary">LOGIN</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </div>
</header>
