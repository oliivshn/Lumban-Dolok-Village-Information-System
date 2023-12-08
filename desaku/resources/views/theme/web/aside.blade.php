<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->

        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('dashboard') }}">
                        <i data-feather="home" class="icon-dual"></i> <span data-key="t-dashboards">Beranda</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarApps">
                        <i data-feather="grid" class="icon-dual"></i> <span data-key="t-apps">Artikel</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarApps">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('artikel.index') }}" class="nav-link"
                                    data-key="Daftar Kegiatan"> Daftar Kegiatan </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('berita.index') }}" class="nav-link"
                                    data-key="Berita Terbaru">
                                    Berita Terbaru</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('perangkatdesa.index') }}" role="button"
                        aria-expanded="false" aria-controls="sidebarLayouts">
                        <i data-feather="layout" class="icon-dual"></i> <span data-key="t-layouts">Perangkat Desa
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    {{-- <a class="nav-link menu-link" href="{{route('datapenduduk.index')}}" role="button"
                        aria-expanded="false" aria-controls="sidebarLayouts">
                        <i data-feather="layout" class="icon-dual"></i> <span data-key="t-layouts">Data Penduduk</span>
                    </a> --}}
                    <a class="nav-link menu-link" href="#sidebarApps1" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarApps">
                        <i data-feather="grid" class="icon-dual"></i> <span data-key="t-apps">Data Penduduk</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarApps1">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('datapenduduk.index') }}" class="nav-link"
                                    data-key="Data Penduduk"> Data penduduk </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('demografi.index') }}" class="nav-link"
                                    data-key="Demografi">Data penduduk Demografi</a>
                            </li>
                        </ul>
                    </div>

                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('sarana.index') }}" aria-expanded="false"
                        aria-controls="sidebarLayouts">
                        <i data-feather="layout" class="icon-dual"></i> <span data-key="t-layouts">Sarana &
                            Prasarana</span>
                    </a>



                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('galeri.index') }}" role="button"
                        aria-expanded="false" aria-controls="sidebarLayouts">
                        <i data-feather="layout" class="icon-dual"></i> <span data-key="t-layouts">Galeri
                            Desa</span>
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ url('hubungikami') }}" role="button" aria-expanded="false"
                        aria-controls="sidebarLayouts">
                        <i data-feather="layout" class="icon-dual"></i> <span data-key="t-layouts">Hubungi
                            Kami</span>
                    </a>

                </li>
                </li>
                @auth
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="{{ route('kritik_saran.index') }}" aria-expanded="false"
                            aria-controls="sidebarLayouts">
                            <i data-feather="layout" class="icon-dual"></i> <span data-key="t-layouts">Kritik &
                                Saran</span>
                        </a>

                    </li>
                @endauth
                @guest
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="{{ route('kritik_saran.create') }}" aria-expanded="false"
                            aria-controls="sidebarLayouts">
                            <i data-feather="layout" class="icon-dual"></i> <span data-key="t-layouts">Kritik &
                                Saran</span>
                        </a>

                    </li>
                @endguest
            </ul>
        </div>
    </div>
</div>
