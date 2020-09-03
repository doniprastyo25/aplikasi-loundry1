<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title')</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('/assets/css/all.css') }}" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('/assets/css/jquery.dataTables.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/assets/css/datatables.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/node_modules/datatables.net-select-bs4/css/select.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/node_modules/@fortawesome/fontawesome-free/css/all.min.css') }}">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('/assets/css/components.css') }}">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
          <div class="d-sm-none d-lg-inline-block">{{ Auth::user()->username }}</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Logged in 5 min ago</div>
              <a href="features-profile.html" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="features-activities.html" class="dropdown-item has-icon">
                <i class="fas fa-bolt"></i> Activities
              </a>
              <a href="features-settings.html" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">ParaLondry</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">PL</a>
          </div>
          <ul class="sidebar-menu">
            <li class=""><a class="nav-link" href="{{ url('dashboard') }}"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
              <li class="menu-header">Navigasi utama</li>
              <li class=""><a class="nav-link" href="{{ url('transaksi') }}"><i class="fa fa-plus"></i> <span>Buat Transaksi</span></a></li>
              <li class=""><a class="nav-link" href="{{ url('riwayat') }}"><i class="fa fa-clock"></i> <span>Riwayat</span></a></li>
              <li class=""><a class="nav-link" href="{{ url('finance') }}"><i class="fa fa-money-bill-alt"></i> <span>Keuangan</span></a></li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fa fa-database"></i> <span>Data</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="{{ url('stock') }}">Barang</a></li>
                  <li><a class="nav-link" href="{{ url('konsumen') }}">Konsumen</a></li>
                  <li><a class="nav-link" href="{{ url('suppliershow') }}">Supplier</a></li>
                  <li><a class="nav-link" href="{{ url('karyawanshow') }}">Karyawan</a></li>
                  <li><a class="nav-link" href="{{ url('pembelian') }}">Pembelian</a></li>
                  <li><a class="nav-link" href="{{ url('pemakaian') }}">Pemakaian</a></li>
                </ul>
              </li>
              @can('akses_divisi', App\User::class)
              <li class="menu-header">Menu Admin</li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Components</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ url('karyawan') }}">karyawan</a></li>
                    <li><a class="nav-link" href="{{ url('supplier') }}">supplier</a></li>
                </ul>
              </li>
              @endcan
              
        </aside>
      </div>

      <!-- Main Content -->
      <script src="/assets/js/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
      @yield('content')
      <footer class="main-footer">
        <div class="footer-left">
          ParaLondry &copy; 2020 <div class="bullet"></div> Design By Doni Prastyo
        </div>
        <div class="footer-right">
          2.3.0
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="/assets/js/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="{{ asset('/assets/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('/assets/js/stisla.js') }}"></script>

  <!-- JS Libraies -->

  <!-- Template JS File -->
  <script src="{{ asset('/assets/js/scripts.js') }}"></script>
  <script src="{{ asset('/assets/js/custom.js') }}"></script>

  <!-- Page Specific JS File -->
 {{--  <script src="{{ asset('/assets/js/page/modules-datatables.js') }}"></script>
  <script src="{{ asset('/assets/js/page/components-table.js') }}"></script> --}}
  <script src="{{ asset('/node_modules/datatables/media/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('/node_modules/datatables.net-select-bs4/js/select.bootstrap4.min.js') }}"></script>
  <script>
    $(document).ready(function () {
      $('#table1').DataTable()
    })
  </script>
  {{-- @yield('script') --}}
</body>
</html>

