<<<<<<< HEAD

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
 
=======
<div class="nav-header">
    <a href="index.html" class="brand-logo">
        {{-- <img class="logo-abbr" src="{{asset('logo-image/qr-menu.png')}}" alt=""> --}}
        {{-- <img class="logo-compact" src="{{asset('logo-image/qr-menu.png')}}" alt=""> --}}
        <img class="logo" src="{{asset('logo-image/qr-menu.png')}}" width="100%" alt="">
    </a>

    <div class="nav-control">
        <div class="hamburger">
            <span class="line"></span><span class="line"></span><span class="line"></span>
        </div>
    </div>
</div>
<div class="header">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="header-left">
                </div>

                <ul class="navbar-nav header-right">
                    <li class="nav-item dropdown notification_dropdown">
                        <a class="nav-link dz-fullscreen primary" href="#">
                            <svg id="Capa_1" enable-background="new 0 0 482.239 482.239" height="22" viewBox="0 0 482.239 482.239" width="22" xmlns="http://www.w3.org/2000/svg"><path d="m0 17.223v120.56h34.446v-103.337h103.337v-34.446h-120.56c-9.52 0-17.223 7.703-17.223 17.223z" fill=""/><path d="m465.016 0h-120.56v34.446h103.337v103.337h34.446v-120.56c0-9.52-7.703-17.223-17.223-17.223z" fill=""/><path d="m447.793 447.793h-103.337v34.446h120.56c9.52 0 17.223-7.703 17.223-17.223v-120.56h-34.446z" fill="" /><path d="m34.446 344.456h-34.446v120.56c0 9.52 7.703 17.223 17.223 17.223h120.56v-34.446h-103.337z" fill=""/></svg>
                        </a>
                    </li>
                    <li class="nav-item dropdown header-profile">
                        <a class="nav-link" href="#"  role="button" data-toggle="dropdown">
                            <div class="header-info">
                                <span>Hello, <strong>{{auth()->user()->name}}</strong></span>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="./app-profile.html" class="dropdown-item ai-icon">
                                <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                <span class="ml-2">Profile </span>
                            </a>
                            <a href="./email-inbox.html" class="dropdown-item ai-icon">
                                <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                <span class="ml-2">Inbox </span>
                            </a>
                            <a href="{{route('logout')}}" class="dropdown-item ai-icon">
                                <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                <span class="ml-2">Logout </span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
>>>>>>> ad7da9f53347bfd5ee561a3a260da9b63cc10dc5
</div>