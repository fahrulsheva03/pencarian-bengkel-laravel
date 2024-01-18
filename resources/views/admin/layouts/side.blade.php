<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu  mb-4">
            <li class="menu-header">Dashboard</li>
            <li class="{{ Route::is('admin') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin') }} "><i class="fas fa-fire"></i> <span>Dashboard</span></a>
            </li>
            <li class="menu-header">Data</li>

            <li class="nav-item {{ Route::is('index.admin') ? 'active' : '' }}">
                <a href="{{ route('index.admin') }} " class="nav-link "><i
                        class="fas fa-th-large"></i><span>Admin</span></a>
            </li>
            <li class="nav-item {{ Route::is('index.bengkel') ? 'active' : '' }}">
                <a href="{{ route('index.bengkel') }} " class="nav-link "><i
                        class="fas fa-th-large"></i><span>Bengkel</span></a>
            </li>

        </ul>


    </aside>
</div>
