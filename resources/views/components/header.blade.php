
<div class="topbar-custom">
    <div class="container-xxl">
        <div class="d-flex justify-content-between">
            <ul class="list-unstyled topnav-menu mb-0 d-flex align-items-center">
                <li>
                    <button class="button-toggle-menu nav-link ps-0">
                        <i data-feather="menu" class="noti-icon"></i>
                    </button>
                </li>
                <li class="d-none d-lg-block">
                    <div class="position-relative topbar-search">
                        <input type="text" class="form-control bg-light bg-opacity-75 border-light ps-4" placeholder="Search...">
                        <i class="mdi mdi-magnify fs-16 position-absolute text-muted top-50 translate-middle-y ms-2"></i>
                    </div>
                </li>
            </ul>
  
            <ul class="list-unstyled topnav-menu mb-0 d-flex align-items-center">
  
                <li class="d-none d-sm-flex">
                    <button type="button" class="btn nav-link" data-toggle="fullscreen">
                        <i data-feather="maximize" class="align-middle fullscreen noti-icon"></i>
                    </button>
                </li>
  
                <li class="dropdown notification-list topbar-dropdown">
                    <a class="nav-link dropdown-toggle nav-user me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <span class="pro-user-name ms-1">
                            {{auth()->user()->name}} <i class="mdi mdi-chevron-down"></i> 
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                        <!-- item-->
                        <div class="dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Welcome !</h6>
                        </div>
  
                        <!-- item-->
                        <a class='dropdown-item notify-item' href='pages-profile.html'>
                            <i class="mdi mdi-account-circle-outline fs-16 align-middle"></i>
                            <span>My Account</span>
                        </a>
  
                        <!-- item-->
                        <a class='dropdown-item notify-item' href='auth-lock-screen.html'>
                            <i class="mdi mdi-lock-outline fs-16 align-middle"></i>
                            <span>Lock Screen</span>
                        </a>
  
                        <div class="dropdown-divider"></div>
  
                        <!-- item-->
                        <a class='dropdown-item notify-item' href='{{route('logout')}}'>
                            <i class="mdi mdi-location-exit fs-16 align-middle"></i>
                            <span>Logout</span>
                        </a>
  
                    </div>
                </li>
  
            </ul>
        </div>
  
    </div>
   
  </div>