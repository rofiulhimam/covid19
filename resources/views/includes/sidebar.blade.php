<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('home') }}">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-viruses"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Covid-19</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item @yield('dashboard')">
    <a class="nav-link" href="{{ url('home') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item  @yield('datapasien')">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-users"></i>
      <span>Data Pasien</span>
    </a>
    <div id="collapseTwo" class="collapse @yield('opencolapse')" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Custom Components:</h6>
        <a class="collapse-item @yield('pasien')" href="{{ url('pasien') }} ">Semua</a>
        <a class="collapse-item @yield('odp')" href="{{ url('pasienodp') }} ">ODP</a>
        <a class="collapse-item @yield('pdp')" href="{{ url('pasienpdp') }} ">PDP</a>
        <a class="collapse-item @yield('positif')" href="{{ url('pasienpositif') }} ">Positif</a>
        <a class="collapse-item @yield('sembuh')" href="{{ url('pasiensembuh') }} ">Sembuh</a>
        <a class="collapse-item @yield('meninggal')" href="{{ url('pasienmeninggal') }} ">Meninggal</a>
      </div>
    </div>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>