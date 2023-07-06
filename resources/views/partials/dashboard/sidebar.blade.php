<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="mt-3 sidebar-brand">
            <a href="/">
                <img src="{{ URL::asset('assets/images/Logo.svg') }}" alt="" width="64" />
            </a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="/">
                <img src="{{ URL::asset('assets/images/Logo.svg') }}" alt="" width="64" />
            </a>
        </div>
        <ul class="mt-4 sidebar-menu">
            <li class="{{ request()->routeIs('dashboard') ? 'active' : '' }}"><a class="nav-link" href="{{ route('dashboard') }}"><i class="fas fa-columns"></i> <span>Dashboard</span></a></li>
        </ul>
    </aside>
</div>
