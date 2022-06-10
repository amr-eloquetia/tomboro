<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link text-center">
        {{-- <img src="{{asset('img/favicon.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">--}}
        <span class="brand-text font-weight-light">Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ URL::asset('storage/user_avatars/' .Auth::user()->avatar) }}"
                    class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{Auth::user()->email}}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->

                <li class="nav-header">Meniu principal</li>
                <li class="nav-item">
                    <a href="{{route('dashboard.index')}}"
                        class="nav-link {{(request()->segment(2) == 'dashboard' ? 'active' : '')}}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('dashboard.users')}}"
                        class="nav-link {{(request()->segment(2) == 'dashboard' ? 'active' : '')}}">
                        <i class="nav-icon fas fa-solid fa-users"></i>
                        <p>
                            Users
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('dashboard.prizes')}}"
                        class="nav-link {{(request()->segment(2) == 'dashboard' ? 'active' : '')}}">
                        <i class="nav-icon fas fa-solid fa-cart-arrow-down"></i>
                        <p>
                            Prizes
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('dashboard.categories')}}"
                        class="nav-link {{(request()->segment(2) == 'dashboard' ? 'active' : '')}}">
                        <i class="nav-icon fas  fa-list-alt"></i>
                        <p>
                            Categories
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('dashboard.tickets')}}"
                        class="nav-link {{(request()->segment(2) == 'dashboard' ? 'active' : '')}}">
                        <i class="nav-icon fas  fa-ticket-alt"></i>
                        <p>
                            Tickets
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('dashboard.winners')}}"
                        class="nav-link {{(request()->segment(2) == 'dashboard' ? 'active' : '')}}">
                        <i class="nav-icon fas  fa-trophy"></i>
                        <p>
                            Winners
                        </p>
                    </a>
                </li>
                <li class="nav-item mt-5">
                    <a href="{{route('logout')}}" class="nav-link text-warning">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
                <li><a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-danger">Logout</button>
                        </form>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
