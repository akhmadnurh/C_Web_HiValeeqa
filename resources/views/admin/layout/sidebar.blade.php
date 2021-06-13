<div class="main-sidebar">
    <aside id="sidebar-wrapper">

        <div class="sidebar-brand">
            <a href="index.html">{{ config('app.name')}}</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html"><img src="{{ asset('/assets/img/logo-hv.svg')}}"></a>
        </div>
        <ul class="sidebar-menu">
            <li><a class="nav-link" href="{{ url('/adm') }}"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
            <li class="menu-header">Manajemen Akun</li>
            <li><a class="nav-link" href="{{ url('/adm/user-management') }}"><i class="fas fa-user"></i> <span>User</span></a></li>
            <li><a class="nav-link" href="{{ url('/adm/admin-management') }}"><i class="fas fa-user-cog"></i> <span>Admin</span></a></li>
        </ul>
    </aside>
</div>
