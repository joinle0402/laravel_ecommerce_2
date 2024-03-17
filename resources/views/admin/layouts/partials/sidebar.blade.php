<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{ asset("admin/dist/img/AdminLTELogo.png") }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: 0.8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset("admin/dist/img/user2-160x160.jpg") }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}"  @class(["nav-link", 'active' => request()->routeIs('admin.dashboard')])>
                        <i class="nav-icon fas fa-th"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.users.index') }}" @class(["nav-link", 'active' => request()->routeIs('admin.users*')]) style="padding-left: 20px;">
                        <i class="fas fa-users"></i>
                        <p style="padding-left: 5px;">User</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="javascript:void(0)" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link" style="padding-left: 22px;">
                        <i class="fas fa-sign-out-alt"></i>
                        <p style="padding-left: 6px;">Logout</p>
                    </a>
                </li>
                <form id="logout-form" action="{{ route('auth.logout') }}" method="post">
                    @csrf
                    @method("POST")
                </form>
            </ul>
        </nav>
    </div>
</aside>
