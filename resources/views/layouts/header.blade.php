<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
        <a href="/" class="logo d-flex align-items-center">
            <img src="https://papuabaratprov.go.id/web/uploads/files/page/logo/VR_FKYYSVxT39qTmMICOs8q-KlK1YeNT.png"
                alt="">
            <h1 class="sitename">
                <span class="bintuni">Bintuni</span>
                <span class="timur">Timur</span>
            </h1>
        </a>
        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="/" class="{{ $current_page == 'index' ? 'active' : '' }}">Beranda</a></li>
                <li><a href="/berita" class="{{ $current_page == 'berita' ? 'active' : '' }}">Berita</a></li>
                <li><a href="/galeri" class="{{ $current_page == 'galeri' ? 'active' : '' }}">Galeri</a></li>
                <li class="dropdown">
                    <a href="#" class="{{ $current_page == 'profil' ? 'active' : '' }}">
                        <span>Profil</span> <i class="bi bi-chevron-down toggle-dropdown"></i>
                    </a>
                    <ul>
                        <li><a href="/struktur-organisasi"
                                class="{{ Request::is('struktur-organisasi') ? 'active' : '' }}">Struktur Organisasi</a>
                        </li>
                        <li><a href="/profil" class="{{ Request::is('profil') ? 'active' : '' }}">Profil Distrik</a>
                        </li>
                        <li><a href="/visi-misi" class="{{ Request::is('visi-misi') ? 'active' : '' }}">Visi & Misi
                                Daerah</a></li>
                        <li><a href="/profil-kepala-daerah"
                                class="{{ Request::is('profil-kepala-daerah') ? 'active' : '' }}">Profil Kepala
                                Daerah</a></li>
                    </ul>
                </li>
                <li><a href="/kontak" class="{{ $current_page == 'kontak' ? 'active' : '' }}">Hubungi Kami</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
    </div>
</header>
