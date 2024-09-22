<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="index.html" class="waves-effect">
                        <i class="ri-dashboard-line"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <!-- end li -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fas fa-home"></i>
                        <span>Beranda</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="{{ route('admin.viewberanda') }}">
                                <i class="fas fa-plus-square"></i>
                                Tambah
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-images"></i>
                                Gambar
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- end li -->

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fas fa-newspaper"></i>
                        <span>Berita</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="#">
                                <i class="fas fa-plus-square"></i>
                                Tambah
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-images"></i>
                                Gambar
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- end li -->
                <li>
                    <a href="index.html" class="waves-effect">
                        <i class="mdi mdi-contacts"></i>
                        <span>Kontak</span>
                    </a>
                </li>
            </ul>
            <!-- end ul -->
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
