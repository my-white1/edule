<div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link active" href="../pages/dashboard.html">
                <div
                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Dashboard</span>
            </a>
        </li>
        <!-- Example single danger button -->
        @can('user_menegment_access')
            <li class="nav-item">
                <a type="button" class="btn btn-danger dropdown-toggle nav-link text-white" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    User
                </a>
                <div class="dropdown-menu">
                    @can('users_access')
                        <a class="dropdown-item nav-link" href="{{ route('users.index') }}">Users</a>
                    @endcan

                    @can('roles_access')
                        <a class="dropdown-item nav-link" href="{{ route('roles.index') }}">Roles</a>
                    @endcan

                    @can('permissions_access')
                        <a class="dropdown-item nav-link" href="{{ route('permissions.index') }}">Permissions</a>
                    @endcan
                </div>
            </li>
        @endcan 

        @can('courses_access')
            <li class="nav-item">
                <a class="nav-link " href="{{ route('courses.index') }}">
                    <div </div>
                        <span class="nav-link-text ms-1">Courses</span>
                </a>
            </li>
        @endcan


        @can('groups_access')
            <l12i class="nav-item">
                <a class="nav-link " href="{{ route('groups.index') }}">
                    <div </div>
                        <span class="nav-link-text ms-1">Groups</span>
                </a>
            </l12i>
        @endcan


        @can('rooms_access')
            <li class="nav-item">
                <a class="nav-link " href="{{ route('rooms.index') }}">
                    <div </div>
                        <span class="nav-link-text ms-1">Room</span>
                </a>
            </li>
        @endcan

        @can('workers_access')
            <li class="nav-item">
                <a class="nav-link " href="{{ route('workers.index') }}">
                    <div </div>
                        <span class="nav-link-text ms-1">workers</span>
                </a>
            </li>
        @endcan

        <li class="nav-item">
            <a class="nav-link " href="{{ asset('edule/pages/profile.html') }}">
                <div
                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Profile</span>
            </a>
        </li>
    </ul>
</div>
