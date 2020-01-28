  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="{{route('dashboard')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
     

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Master</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Master</h6>
            <a class="collapse-item" href="{{route('accessgroup_index')}}">Access Groups</a>
            <a class="collapse-item" href="cards.html">Management User</a>
            <a class="collapse-item" href="{{route('Employee')}}">Employee</a>
            <a class="collapse-item" href="{{route('bank')}}">Bank Name</a>
            <a class="collapse-item" href="{{route('positions')}}">Position</a>
            <a class="collapse-item" href="{{route('salary')}}">Salary Employee</a>
            <a class="collapse-item" href="cards.html">Supplier</a>
            <a class="collapse-item" href="{{route('menu_access')}}">Menu Access</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#job" aria-expanded="true" aria-controls="job">
          <i class="fas fa-fw fa-cog"></i>
          <span>Job Recruitment</span>
        </a>
        <div id="job" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Job Recruitment</h6>
            <a class="collapse-item" href="buttons.html">job description</a>
            <a class="collapse-item" href="cards.html">Aproval Job Description</a>
            <a class="collapse-item" href="cards.html">Selection Employee</a>
            <a class="collapse-item" href="cards.html">Aproval Employee</a>
          </div>
        </div>
      </li>
      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Laporan</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Laporan</h6>
            <a class="collapse-item" href="utilities-border.html">Pendapatan </a>
            <a class="collapse-item" href="utilities-animation.html">Pengeluaran</a>
            <a class="collapse-item" href="utilities-animation.html">Pendapatan & Pengeluaran</a>
            <a class="collapse-item" href="{{url('laporanpenjualan')}}">Penjualan</a>
            <a class="collapse-item" href="utilities-animation.html">Absensi Pegawai</a>
            <a class="collapse-item" href="utilities-animation.html">Leave</a>
          </div>
        </div>
      </li>
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Transaksi</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Transaksi</h6>
            <a class="collapse-item" href="login.html">Bahan Baku</a>
            <a class="collapse-item" href="register.html">Salary Pegawai</a>
            <div class="collapse-divider"></div>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagesi" aria-expanded="true" aria-controls="collapsePagesi">
          <i class="fas fa-fw fa-folder"></i>
          <span>Manage Shift</span>
        </a>
        <div id="collapsePagesi" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Manage Shift</h6>
            <a class="collapse-item" href="login.html">Details Shift</a>
            <a class="collapse-item" href="register.html">Salary Pegawai</a>
            <div class="collapse-divider"></div>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Leave" aria-expanded="true" aria-controls="Leave">
          <i class="fas fa-fw fa-folder"></i>
          <span>Leave</span>
        </a>
        <div id="Leave" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Leave</h6>
            <a class="collapse-item" href="login.html">filling leave</a>
            <a class="collapse-item" href="register.html">Aproval filling leave</a>
            <div class="collapse-divider"></div>
          </div>
        </div>
      </li>
       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Orders" aria-expanded="true" aria-controls="Orders">
          <i class="fas fa-fw fa-folder"></i>
          <span>Orders</span>
        </a>
        <div id="Orders" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Orders</h6>
            <a class="collapse-item" href="login.html">History Orders</a>
            <a class="collapse-item" href="register.html">Buat Orderan</a>
            <a class="collapse-item" href="register.html">View Order</a>
            <a class="collapse-item" href="register.html">Liat Meja Tersedia</a>
            <div class="collapse-divider"></div>
          </div>
        </div>
      </li>
      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Menus" aria-expanded="true" aria-controls="Menus">
          <i class="fas fa-fw fa-folder"></i>
          <span>Menus</span>
        </a>
        <div id="Menus" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Menus</h6>
            <a class="collapse-item" href="login.html">Daftar menu</a>
            <a class="collapse-item" href="register.html">Bahan Baku</a>
            <div class="collapse-divider"></div>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Reset Quota Leave</span></a>
      </li>
  
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Category menu</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>