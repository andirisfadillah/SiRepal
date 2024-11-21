<!-- sidebar -->
<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a href="#" class="logo">
                <img src="{{ asset('assets/img/kapall.png') }}" alt="SiRebon logo" class="navbar-brand  ml-2 ms-9"
                    width="190" />
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
        <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                @if (auth()->user()->level === 'admin')
                    <li class="nav-item {{ request()->is('dashboard*') ? 'active' : '' }}">
                        <a href="{{ route('dashboard') }}">
                            <i class="fas fa-home"></i>
                            <p>Beranda</p>
                        </a>
                    </li>
                    <li class="nav-item {{ request()->is('rekening-pembayaran-retribusi*') ? 'active' : '' }}">
                        <a href="{{ route('rekening.index') }}">
                            <i class="fas fa-wallet"></i>
                            <p>Rekening Pembayaran</p>
                        </a>
                    </li>
                    <li class="nav-item {{ request()->is('kategori-retribusi*') ? 'active' : '' }}">
                        <a href="{{ route('kategori-retribusi.index') }}">
                            <i class="fas fa-exclamation"></i>
                            <p>Kategori Retribusi</p>
                        </a>
                    </li>
                    <li class="nav-item {{ request()->is('wajib-retribusi*') ? 'active' : '' }}">
                        <a href="{{ route('wajib-retribusi.index') }}">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            <p>Wajib Retribusi</p>
                        </a>
                    </li>
                    <li class="nav-item {{ request()->is('kapal-wajib*') ? 'active' : ''}}">
                        <a href="{{ route('Kapalwajib.index') }}">
                            <i class="fas fa-ship"></i>
                            <p>Kapal Wajib Retribusi</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="">
                            <i class="fa fa-address-card" aria-hidden="true"></i>
                            <p>Pembayaran Retribusi</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="">
                            <i class="fas fa-star"></i>
                            <p>Laporan</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('logout') }}">
                            <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                            <p>Logout</p>
                        </a>
                    </li>
                @endif

                @if (auth()->user()->level == 'wajib')
                    <li class="nav-item">
                        <a href="{{ route('dashboard') }}">
                            <i class="fas fa-user"></i>
                            <p>Profil</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('kategori-retribusi.index') }}">
                            <i class="fas fa-exclamation"></i>
                            <p>Kategori Retribusi</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('kapal.index') }}">
                            <i class="fas fa-ship"></i>
                            <p>Kapalku</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="">
                            <i class="fa fa-address-card" aria-hidden="true"></i>
                            <p>Konfirmasi Pembayaran</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="">
                            <i class="fas fa-star"></i>
                            <p>Laporan</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('logout') }}">
                            <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                            <p>Logout</p>
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</div>
