<aside class="sidebar sidebar-base sidebar-white sidebar-default navs-rounded-all " id="first-tour"
    data-toggle="main-sidebar" data-sidebar="responsive">
    <div class="sidebar-header d-flex align-items-center justify-content-start">
        <a href="#" class="navbar-brand">
            <!--Logo start-->
            <div class="logo-main">
                <div class="logo-normal">
                    <img src="{{ asset('assets/img/logo.png') }}" width="150px" alt="">
                </div>
            </div>
        </a>
        <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
            <i class="icon">

                <svg class="icon-10" width="10" height="10" viewBox="0 0 8 8" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M7.29853 8C7.11974 8 6.94002 7.93083 6.80335 7.79248L3.53927 4.50446C3.40728 4.37085 3.33333 4.18987 3.33333 4.00036C3.33333 3.81179 3.40728 3.63081 3.53927 3.4972L6.80335 0.207279C7.07762 -0.069408 7.52132 -0.069408 7.79558 0.209174C8.06892 0.487756 8.06798 0.937847 7.79371 1.21453L5.02949 4.00036L7.79371 6.78618C8.06798 7.06286 8.06892 7.51201 7.79558 7.79059C7.65892 7.93083 7.47826 8 7.29853 8Z"
                        fill="white" />
                    <path
                        d="M3.96552 8C3.78673 8 3.60701 7.93083 3.47034 7.79248L0.206261 4.50446C0.0742745 4.37085 0.000325203 4.18987 0.000325203 4.00036C0.000325203 3.81179 0.0742745 3.63081 0.206261 3.4972L3.47034 0.207279C3.74461 -0.069408 4.18831 -0.069408 4.46258 0.209174C4.73591 0.487756 4.73497 0.937847 4.4607 1.21453L1.69649 4.00036L4.4607 6.78618C4.73497 7.06286 4.73591 7.51201 4.46258 7.79059C4.32591 7.93083 4.14525 8 3.96552 8Z"
                        fill="white" />
                </svg>
            </i>
        </div>
    </div>
    <div class="sidebar-body pt-0 data-scrollbar">
        <div class="sidebar-list">
            <!-- Sidebar Menu Start -->
            <ul class="navbar-nav iq-main-menu" id="sidebar-menu">
                <li class="nav-item static-item">
                    <a class="nav-link static-item disabled text-start" href="#" tabindex="-1">
                        <span class="default-icon">Home</span>
                        <span class="mini-icon" data-bs-toggle="tooltip" title="Home"
                            data-bs-placement="right">-</span>
                    </a>
                </li>
                <!-- Dashboard Link -->
                <li class="nav-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                    <a class="nav-link" aria-current="page" href="{{ route('dashboard') }}">
                        <i class="fas fa-home" data-bs-toggle="tooltip" title="Dashboard" data-bs-placement="right"></i>
                        <span class="item-name">Dashboard</span>
                    </a>
                </li>

                <!-- User CV's Link -->
                <li class="nav-item {{ request()->routeIs('application.index') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('application.index') }}">
                        <i class="fas fa-file-alt" data-bs-toggle="tooltip" title="User CV's"
                            data-bs-placement="right"></i>
                        <span class="item-name">Job Applications</span>
                    </a>
                </li>

                <!-- Recent Messages Link -->
                <li class="nav-item {{ request()->routeIs('messages.recent') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('messages.recent') }}">
                        <i class="fas fa-envelope" data-bs-toggle="tooltip" title="Recent messages"
                            data-bs-placement="right"></i>
                        <span class="item-name">Recent messages</span>
                    </a>
                </li>
                <!-- My Blogs Link -->
                <li class="nav-item {{ request()->routeIs('blogs.index') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('blogs.index') }}">
                        <i class="fas fa-blog" data-bs-toggle="tooltip" title="My Blogs" data-bs-placement="right"></i>
                        <span class="item-name">My Blogs</span>
                    </a>
                </li>
                <li class="nav-item {{ request()->routeIs('logout') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt" data-bs-toggle="tooltip" title="Logout"
                            data-bs-placement="right"></i>
                        <span class="item-name">Logout</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>

            </ul>
        </div>
    </div>
    <div class="sidebar-footer"></div>
</aside>
