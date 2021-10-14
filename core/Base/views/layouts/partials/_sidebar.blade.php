<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('admin.index') }}">APP</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('admin.index') }}">APP</a>
        </div>
        <ul class="sidebar-menu">
            <!-- START: Dashboard -->
            <li class="menu-header">Dashboard</li>
            <li class="{{ Request::is('admin') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.index') }}">
                    <i class="fas fa-home" aria-hidden="true"></i><span>Dashboard</span>
                </a>
            </li>
            <!-- END: Dashboard -->

            <!-- START: Tracker Management -->
            <li class="menu-header">Tracker Management</li>
            <li class="nav-item dropdown
                {{ Request::is('admin/projects') ? 'active' : (Request::is('admin/projects/*') ? 'active' : '') }}"
            >
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-briefcase" aria-hidden="true"></i> <span>Projects</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/projects') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.projects.index') }}">List</a>
                    </li>
                    <li class="{{ Request::is('admin/projects/create') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.projects.create') }}">New</a>
                    </li>
                </ul>
            </li>
            <!-- END: Tracker Management -->
        </ul>
    </aside>
</div>
