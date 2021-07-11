<div class="main-sidebar">
    <aside id="sidebar-wrapper">

        <div class="sidebar-brand">
            <a href="/">{{ config('app.name') }}</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="/"><img src="{{ asset('img/logo-hv.svg') }}"></a>
        </div>
        <ul class="sidebar-menu">
            <li><a class="nav-link"
                   href="{{ url('/adm') }}"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>

            <li class="menu-header">Produk & Kategori</li>
            <li><a class="nav-link"
                   href="{{ url('/adm/product') }}"><i class="fas fa-cube"></i> <span>Produk</span></a></li>
            <li><a class="nav-link"
                   href="{{ url('/adm/category') }}"><i class="fas fa-th-list"></i> <span>Kategori</span></a></li>

            <li class="menu-header">Transaksi</li>
            <li><a class="nav-link"
                   href="{{ url('/adm/payment-pending') }}"><i class="fas fa-clock"></i>
                    <span>Menunggu Pembayaran</span>
                    <div class="badge badge-info">10</div>
                </a>
            </li>
            <li><a class="nav-link"
                   href="{{ url('/adm/payment-approval') }}"><i class="fas fa-money-check"></i>
                    <span>Konfirmasi Pembayaran</span>
                    <div class="badge badge-info">10</div>
                </a>
            </li>
            <li><a class="nav-link"
                   href="{{ url('/adm/shipment-pending') }}"><i class="fas fa-truck-loading"></i>
                    <span>Menunggu Pengiriman</span>
                    <div class="badge badge-info">10</div>
                </a>
            </li>
            <li><a class="nav-link"
                   href="{{ url('/adm/shipment-process') }}"><i class="fas fa-truck"></i>
                    <span>Proses Pengiriman</span>
                    <div class="badge badge-info">10</div>
                </a>
            </li>
            <li><a class="nav-link"
                   href="{{ url('/adm/order-completed') }}"><i class="fas fa-clipboard-check"></i>
                    <span>Selesai</span>
                </a>
            </li>
            <li><a class="nav-link"
                   href="{{ url('/adm/order-canceled') }}"><i class="fas fa-window-close"></i>
                    <span>Dibatalkan</span>
                </a>
            </li>
            <li><a class="nav-link"
                   href="{{ url('/adm/all-transaction') }}"><i class="fas fa-clipboard-list"></i>
                    <span>Semua</span>
                </a>
            </li>

            <li class="menu-header">Manajemen Akun</li>
            <li><a class="nav-link"
                   href="{{ url('/adm/user-management') }}"><i class="fas fa-user"></i> <span>User</span></a></li>
            <li><a class="nav-link"
                   href="{{ url('/adm/admin-management') }}"><i class="fas fa-user-cog"></i> <span>Admin</span></a>
            </li>
        </ul>
    </aside>
</div>
