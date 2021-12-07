
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Admin Panel</title>

    <meta name="description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="Codebase">
    <meta property="og:description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="/admin/assets/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/admin/assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/admin/assets/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="/admin/assets/js/plugins/datatables/dataTables.bootstrap4.css">

    <!-- Fonts and Codebase framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700&display=swap">
    <link rel="stylesheet" id="css-main" href="/admin/assets/css/codebase.min.css">

    @yield('css')

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="/admin/assets/css/themes/flat.min.css"> -->
    <!-- END Stylesheets -->
  </head>
  <body>

    <div id="page-container" class="sidebar-o enable-page-overlay side-scroll page-header-modern main-content-boxed">
      <nav id="sidebar">
        <!-- Sidebar Content -->
        <div class="sidebar-content">
          <!-- Side Header -->
          <div class="content-header content-header-fullrow px-15">
            <!-- Mini Mode -->
            <div class="content-header-section sidebar-mini-visible-b">
              <!-- Logo -->
              <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
              </span>
              <!-- END Logo -->
            </div>
            <!-- END Mini Mode -->

            <!-- Normal Mode -->
            <div class="content-header-section text-center align-parent sidebar-mini-hidden">
              <!-- Close Sidebar, Visible only on mobile screens -->
              <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
              <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                <i class="fa fa-times text-danger"></i>
              </button>
              <!-- END Close Sidebar -->

              <!-- Logo -->
              <div class="content-header-item">
                <a class="link-effect font-w700" href="#">
                  <i class="si si-fire text-primary"></i>
                  <span class="font-size-xl text-dual-primary-dark">Admin</span><span class="font-size-xl text-primary">Panel</span>
                </a>
              </div>
              <!-- END Logo -->
            </div>
            <!-- END Normal Mode -->
          </div>
          <!-- END Side Header -->

          <!-- Sidebar Scrolling -->
          <div class="js-sidebar-scroll">
            <!-- Side User -->
            <div class="content-side content-side-full content-side-user px-10 align-parent">
              <!-- Visible only in mini mode -->
              <div class="sidebar-mini-visible-b align-v animated fadeIn">
                <img class="img-avatar img-avatar32" src="/admin/assets/media/avatars/avatar0.jpg" alt="">
              </div>
              <!-- END Visible only in mini mode -->

              <!-- Visible only in normal mode -->
              <div class="sidebar-mini-hidden-b text-center">
                <a class="img-link" href="">
                  <img class="img-avatar" src="/admin/assets/media/avatars/avatar0.jpg" alt="">
                </a>
                <ul class="list-inline mt-10">
                  <li class="list-inline-item">
                    <a class="link-effect text-dual-primary-dark font-size-sm font-w600 text-uppercase" href="">{{auth()->user()->name}}</a>
                  </li>
                  <li class="list-inline-item">
                    <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                    <a class="link-effect text-dual-primary-dark" data-toggle="layout" data-action="sidebar_style_inverse_toggle" href="javascript:void(0)">
                      <i class="si si-drop"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a class="link-effect text-dual-primary-dark" href="">
                      <i class="si si-logout"></i>
                    </a>
                  </li>
                </ul>
              </div>
              <!-- END Visible only in normal mode -->
            </div>
            <!-- END Side User -->

            <!-- Side Navigation -->
            <div class="content-side content-side-full">
              <ul class="nav-main">
                <li>
                  <a class="active" href="{{asset('/admin/dashboard')}}"><i class="si si-cup"></i><span class="sidebar-mini-hide">Dashboard</span></a>
                </li>



                {{-- Users --}}
                <li>
                  <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-user-o"></i><span class="sidebar-mini-hide">Users</span></a>
                  <ul>
                    <li>
                      <a href="{{asset('/admin/user')}}">All Users</a>
                    </li>
                  </ul>
                </li>
                {{-- End Users --}}

                {{-- Roles --}}
                <li>
                  <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-user-o"></i><span class="sidebar-mini-hide">Roles</span></a>
                  <ul>
                    <li>
                      <a href="{{asset('/admin/role')}}">All Roles</a>
                    </li>
                  </ul>
                </li>
                {{-- End Roles --}}

                {{-- Gender --}}
                <li>
                  <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-user-o"></i><span class="sidebar-mini-hide">Gender</span></a>
                  <ul>
                    <li>
                      <a href="{{asset('/admin/gender')}}">All Genders</a>
                    </li>
                  </ul>
                </li>
                {{-- End Gender --}}


              </ul>
            </div>
            <!-- END Side Navigation -->
          </div>
          <!-- END Sidebar Scrolling -->
        </div>
        <!-- Sidebar Content -->
      </nav>
      <!-- END Sidebar -->

      <!-- Header -->
      <header id="page-header">
        <!-- Header Content -->
        <div class="content-header">
          <!-- Left Section -->
          <div class="content-header-section">
            <!-- Toggle Sidebar -->
            <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
            <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="sidebar_toggle">
              <i class="fa fa-navicon"></i>
            </button>
            <!-- END Toggle Sidebar -->


            <!-- Color Themes (used just for demonstration) -->
            <!-- Themes functionality initialized in Codebase() -> uiHandleTheme() -->
            <div class="btn-group" role="group">
              <button type="button" class="btn btn-circle btn-dual-secondary" id="page-header-themes-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-paint-brush"></i>
              </button>
              <div class="dropdown-menu min-width-150" aria-labelledby="page-header-themes-dropdown">
                <h6 class="dropdown-header text-center">Color Themes</h6>
                <div class="row no-gutters text-center mb-5">
                  <div class="col-4 mb-5">
                    <a class="text-default" data-toggle="theme" data-theme="default" href="javascript:void(0)">
                      <i class="fa fa-2x fa-circle"></i>
                    </a>
                  </div>
                  <div class="col-4 mb-5">
                    <a class="text-elegance" data-toggle="theme" data-theme="/admin/assets/css/themes/elegance.min.css" href="javascript:void(0)">
                      <i class="fa fa-2x fa-circle"></i>
                    </a>
                  </div>
                  <div class="col-4 mb-5">
                    <a class="text-pulse" data-toggle="theme" data-theme="/admin/assets/css/themes/pulse.min.css" href="javascript:void(0)">
                      <i class="fa fa-2x fa-circle"></i>
                    </a>
                  </div>
                  <div class="col-4 mb-5">
                    <a class="text-flat" data-toggle="theme" data-theme="/admin/assets/css/themes/flat.min.css" href="javascript:void(0)">
                      <i class="fa fa-2x fa-circle"></i>
                    </a>
                  </div>
                  <div class="col-4 mb-5">
                    <a class="text-corporate" data-toggle="theme" data-theme="/admin/assets/css/themes/corporate.min.css" href="javascript:void(0)">
                      <i class="fa fa-2x fa-circle"></i>
                    </a>
                  </div>
                  <div class="col-4 mb-5">
                    <a class="text-earth" data-toggle="theme" data-theme="/admin/assets/css/themes/earth.min.css" href="javascript:void(0)">
                      <i class="fa fa-2x fa-circle"></i>
                    </a>
                  </div>
                </div>
                <div class="dropdown-divider"></div>
                <button type="button" class="btn btn-sm btn-block btn-alt-secondary mb-10" data-toggle="layout" data-action="sidebar_style_inverse_toggle">Sidebar Style</button>
              </div>
            </div>
            <!-- END Color Themes -->
          </div>
          <!-- END Left Section -->

          <!-- Right Section -->
          <div class="content-header-section">
            <!-- User Dropdown -->
            <div class="btn-group" role="group">
              <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{auth()->user()->name}}<i class="fa fa-angle-down ml-5"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-right min-width-150" aria-labelledby="page-header-user-dropdown">

                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  <i class="si si-logout mr-5"></i> Sign Out
                </a>
              </div>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </div>
            <!-- END User Dropdown -->

            <!-- Toggle Side Overlay -->
            <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
            {{-- <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="side_overlay_toggle">
              <i class="fa fa-tasks"></i>
            </button> --}}
            <!-- END Toggle Side Overlay -->
          </div>
          <!-- END Right Section -->
        </div>
        <!-- END Header Content -->


        <!-- Header Loader -->
        <div id="page-header-loader" class="overlay-header bg-primary">
          <div class="content-header content-header-fullrow text-center">
            <div class="content-header-item">
              <i class="fa fa-sun-o fa-spin text-white"></i>
            </div>
          </div>
        </div>
        <!-- END Header Loader -->
      </header>
      <!-- END Header -->

      <!-- Main Container -->
      <main id="main-container">
        <!-- Page Content -->

        @yield('content')

        <!-- END Page Content -->
      </main>
      <!-- END Main Container -->

      <!-- Footer -->
      <footer id="page-footer">
        <div class="content py-20 font-size-sm clearfix">
          <div class="float-right">
            Crafted with <i class="fa fa-heart text-pulse"></i> by <a class="font-w600" href="#">Bilal</a>
          </div>
          <div class="float-left">
            <a class="font-w600" href="#">Bilal</a> &copy; <span class="js-year-copy"></span>
          </div>
        </div>
      </footer>
      <!-- END Footer -->
    </div>
    <!-- END Page Container -->

    <!-- Codebase JS -->
    <script src="/admin/assets/js/codebase.core.min.js"></script>
    <script src="/admin/assets/js/codebase.app.min.js"></script>

    <script src="/admin/assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/admin/assets/js/plugins/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page JS Code -->
    <script src="/admin/assets/js/pages/be_tables_datatables.min.js"></script>

    @yield('scripts')


  </body>
</html>
