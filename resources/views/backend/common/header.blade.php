<header class="top-header">
    <nav class="navbar navbar-expand">
        <div class="left-topbar d-flex align-items-center">
            <a href="javascript();" class="toggle-btn"> <i class="bx bx-menu"></i>
            </a>
        </div>

        <div class="right-topbar ms-auto">
            <ul class="navbar-nav">
                <li class="nav-item dropdown dropdown-user-profile">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"
                       data-bs-toggle="dropdown">
                        <div class="d-flex user-box align-items-center">
                            <div class="user-info">
                                <p class="user-name mb-0">{{ Auth::user()->name }}</p>
                            </div>
                            <img src="{{ asset('backend/images/avatars/avatar-1.png') }}" class="user-img" alt="user avatar">
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <div class="dropdown-divider mb-0"></div> <a class="dropdown-item" href="{{url('/logout')}}"><i
                        class="bx bx-power-off"></i><span>Logout</span></a>
                    </div>
                </li>

            </ul>
        </div>
    </nav>
</header>
