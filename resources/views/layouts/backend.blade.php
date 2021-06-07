
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('AdminLTE') }}/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('AdminLTE') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{ asset('AdminLTE') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('AdminLTE') }}/dist/css/adminlte.min.css">
  <!-- Styles -->
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="{{ asset('AdminLTE') }}/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">

  <!-- jQuery -->
  <script src="{{ asset('AdminLTE') }}/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('AdminLTE') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- DataTables -->
  <script src="{{ asset('AdminLTE') }}/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="{{ asset('AdminLTE') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="{{ asset('AdminLTE') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="{{ asset('AdminLTE') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

  <!-- AdminLTE App -->
  <script src="{{ asset('AdminLTE') }}/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{ asset('AdminLTE') }}/dist/js/demo.js"></script>

  <script src="https://code.highcharts.com/highcharts.js"></script>


</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->

      <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
            <i class="fas fa-th-large"></i>
                Logout
            </a>
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>

      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-white-red elevation-4">
    <!-- Brand Logo -->
    <a href="/home" class="brand-link">
      <img src="{{ asset('AdminLTE') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Project Intern</span>
    </a>
    <br>
    <br>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="/home" class="nav-link {{request()->is('home')? 'active': ''}}">
                    <img src="{{ asset('AdminLTE/icon/dashboard.svg') }}" width="30">
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/bumdes" class="nav-link {{request()->is('bumdes')? 'active': ''}}">
                    <img src="{{ asset('AdminLTE/icon/bumdes.svg') }}" width="30">
                    <p>
                        BUMDES
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/umkm" class="nav-link {{request()->is('umkm')? 'active': ''}}">
                    <img src="{{ asset('AdminLTE/icon/umkm.svg') }}" width="30">
                    <p>
                        UMKM
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/product" class="nav-link {{request()->is('product')? 'active': ''}}">
                    <img src="{{ asset('AdminLTE/icon/product.svg') }}" width="30">
                    <p>
                        PRODUCT
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/banner" class="nav-link {{request()->is('banner')? 'active': ''}}">
                    <img src="{{ asset('AdminLTE/icon/Banner.svg') }}" width="30">
                    <p>
                        BANNER
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/cart" class="nav-link {{request()->is('cart')? 'active': ''}}">
                    <img src="{{ asset('AdminLTE/icon/cart.svg') }}" width="30">
                    <p>
                        Cart
                        <span class="badge badge-danger right">{{ \App\Cart::get()->count() }}</span>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/transaction" class="nav-link {{request()->is('transaction')? 'active': ''}}">
                    <img src="{{ asset('AdminLTE/icon/transaction.svg') }}" width="30">
                    <p>
                        Transactions
                        <span class="badge badge-danger right">{{ \App\Transaction::get()->count() }}</span>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/transdel" class="nav-link {{request()->is('transdel')? 'active': ''}}">
                    <img src="{{ asset('AdminLTE/icon/transaction.svg') }}" width="30">
                    <p>
                        Transactions Detail
                    </p>
                </a>
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @yield('judul1')

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
         @yield('content')
      </div>
    </section>
  </div>
  <footer class="main-footer">
    <strong>Copyright &copy; 2021 </strong>
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.4
    </div>
  </footer>
  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>

<script>
    window.setTimeout(function(){
      $(".alert").fadeTo(500,0).slideUp(500,function(){
        $(this).remove();
      });
    },3000)
  </script>
  @stack('modals')
</body>
</html>
