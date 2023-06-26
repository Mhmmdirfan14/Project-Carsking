<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{ asset('assets/images/logocar.png')}}" alt="CarsKing Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">CarsKing</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('assets/images/org.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth()->user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="{{ route('backend') }}" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                    @if (auth()->user()->level == "admin")
                <li class="nav-item menu-open">
                    <a href="{{ route('merk_mobil') }}" class="nav-link">
                        <i class="fa fa-car" aria-hidden="true"></i>
                        <p>
                            Merk Mobil
                        </p>
                    </a>
                </li>
                @endif
                @if (auth()->user()->level == "admin")
                <li class="nav-item menu-open">
                    <a href="{{ route('daftar_mobil') }}" class="nav-link ">
                        <i class="fa fa-list" aria-hidden="true"></i>
                        <p>
                            Daftar Mobil
                        </p>
                    </a>
                </li>
                @endif
                @if (auth()->user()->level == "admin")
                <li class="nav-item menu-open">
                    <a href="{{ route('daftar_mobil_tersewa') }}" class="nav-link">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            Daftar mobil tersewa
                        </p>
                    </a>
                </li>
                @endif
                @if (auth()->user()->level == "admin")
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link">
                        <i class="nav-icon far fa-circle text-danger"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
                @endif

                @if (auth()->user()->level == "user")
                <li class="nav-item menu-open">
                    <a href="{{ route('merk_mobil') }}" class="nav-link">
                        <i class="fa fa-car" aria-hidden="true"></i>
                        <p>
                            Merk Mobil
                        </p>
                    </a>
                </li>
                @endif
                @if (auth()->user()->level == "user")
                <li class="nav-item menu-open">
                    <a href="{{ route('daftar_mobil') }}" class="nav-link ">
                        <i class="fa fa-list" aria-hidden="true"></i>
                        <p>
                            Daftar Mobil
                        </p>
                    </a>
                </li>
                @endif

                @if (auth()->user()->level == "user")
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link">
                        <i class="nav-icon far fa-circle text-danger"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
                @endif
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>