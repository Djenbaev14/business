<<<<<<< HEAD

<div class="app-sidebar-menu">
  <div class="h-100" data-simplebar>

      <!--- Sidemenu -->
      <div id="sidebar-menu">

          <div class="logo-box">
              <a class='logo logo-light' href='index.html'>
                  <span class="logo-sm">
                      <img src="assets/images/logo-sm.png" alt="" height="22">
                  </span>
                  <span class="logo-lg">
                      <img src="assets/images/logo-light.png" alt="" height="24">
                  </span>
              </a>
              <a class='logo logo-dark' href='index.html'>
                  <span class="logo-sm">
                      <img src="assets/images/logo-sm.png" alt="" height="22">
                  </span>
                  <span class="logo-lg">
                      <img src="assets/images/logo-dark.png" alt="" height="24">
                  </span>
              </a>
          </div>

          <ul class="side-menu">
            <li>
                <a class='tp-link' href="{{route('home')}}">
                    <i data-feather="home"></i>
                    <span> Home </span>
                </a>
            </li>
            @role('Admin')
                <li>
                    <a href="#sidebarProducts" data-bs-toggle="collapse">
                        <i data-feather="archive"></i>
                        <span> Продукты </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarProducts">
                        <ul class="nav-second-level">
                            <li>
                                <a class='tp-link' href='{{route('categories.index')}}'>Категории</a>
                            </li>
                            <li>
                                <a class='tp-link' href='{{route('products.index')}}'>Продукты</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a class='tp-link' href="{{route('feedback.index')}}">
                        <i data-feather="list"></i>
                        <span> Отзывы </span>
                    </a>
                </li>
                <li>
                    <a class='tp-link' href="{{route('settings.index')}}">
                        <i data-feather="settings"></i>
                        <span> Настройки </span>
                    </a>
                </li>
                @else
                <li>
                    <a class='tp-link' href="{{route('companies.index')}}">
                        <i data-feather="home"></i>
                        <span> Компании </span>
                    </a>
                </li>
                @endrole
                
                <li>
                    <a class='tp-link' href="{{route('clients.index')}}">
                        <i data-feather="users"></i>
                        <span> Клиенты <?=(auth()->user()->can('only-thier-clients-list')) ? "<span class='mx-2 badge text-bg-danger'>".is_answered()."</span>" : '';?> </span>
                        
                    </a>
                </li>   
            
          </ul>
            

      </div>
      <!-- End Sidebar -->

      <div class="clearfix"></div>

  </div>
=======
<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li>
                <a href="{{route('home')}}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-home"></i>
                    <span class="nav-text">Home</span>
                </a>
            </li>
            @can('category-list')
                <li>
                    <a href="{{route('categories.index')}}" class="ai-icon" aria-expanded="false">
                        <i class="flaticon-381-archive"></i>
                        <span class="nav-text">Категории</span>
                    </a>
                </li>
            @endif
            {{-- @can('subcategory-list')
                <li>
                    <a href="{{route('feedback.index')}}" class="ai-icon" aria-expanded="false">
                        <i class="flaticon-381-settings-2"></i>
                        <span class="nav-text">Под категории</span>
                    </a>
                </li>
            @endif --}}
            @can('product-list') 
                <li>
                    <a href="{{route('products.index')}}" class="ai-icon" aria-expanded="false">
                        <i class="flaticon-381-archive"></i>
                        <span class="nav-text">Продукты</span>
                    </a>
                </li>
            @endif
            @can('feedback-list')
                <li>
                    <a href="{{route('feedback.index')}}" class="ai-icon" aria-expanded="false">
                        <i class="flaticon-381-settings-2"></i>
                        <span class="nav-text">Отзывы</span>
                    </a>
                </li>
            @endif
            @can('setting-list')
                <li>
                    <a href="{{route('settings.index')}}" class="ai-icon" aria-expanded="false">
                        <i class="flaticon-381-settings-2"></i>
                        <span class="nav-text">Настройки</span>
                    </a>
                </li>
            @endif
            @can('company-list')
                <li>
                    <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-settings-7"></i>
                        <span class="nav-text">Компании</span>
                    </a>
                    <ul aria-expanded="false">
                        <li>
                           <a href='{{route('companies.index')}}'>Список компаний</a>
                       </li>
                       <li>
                           <a href='{{route('companies.create')}}'>Добавить компанию</a>
                       </li>
                    </ul>
                </li>
            @endcan
            <li>
                    <a  href="{{route('clients.index')}}" class="ai-icon" aria-expanded="false">
                        <i class="flaticon-381-settings-2"></i>
                        <span> Клиенты <?=(auth()->user()->can('only-thier-clients-list')) ? "<span class='mx-2 badge text-bg-danger'>".is_answered()."</span>" : '';?> </span>
                    </a>
            </li>
            @can('all-categories-list')
                <li>
                    <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-heart"></i>
                        <span class="nav-text">Категории</span>
                    </a>
                    <ul aria-expanded="false">
                        <li>
                           <a href='{{route('all-categories.index')}}'>Список категорий</a>
                       </li>
                       <li>
                           <a href='{{route('all-categories.create')}}'>Добавить категорию</a>
                       </li>
                    </ul>
                </li>
            @endcan
        </ul>
    
    </div>
>>>>>>> ad7da9f53347bfd5ee561a3a260da9b63cc10dc5
</div>