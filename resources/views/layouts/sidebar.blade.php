<ul class="navbar-nav sidebar sidebar-dark accordion" style="background-color: green;" id="accordionSidebar">
  
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-city"></i>
      </div>
      <div class="sidebar-brand-text mx-3">TABLE SPK TOPSIS </div>
    </a>
    
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    
    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
      <a class="nav-link" href="{{ route('dashboard') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ route('alternatif') }}">
        <i class="fas fa-chart-bar"></i>
        <span>ALTERNATIF</span></a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="{{ route('kriteria') }}">
        <i class="fas fa-chart-bar"></i>
        <span>KRITERIA</span></a>
    </li>

    <!-- <li class="nav-item">
      <a class="nav-link" href="{{ route('subkriteria') }}">
        <i class="fas fa-chart-bar"></i>
        <span>Sub Kriteria</span></a>
    </li> -->

    <li class="nav-item">
      <a class="nav-link" href="{{ route('penilaian.index') }}">
        <i class="fas fa-chart-bar"></i>
        <span>Penilaian</span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ route('calculate.topsis') }}">
        <i class="fas fa-chart-bar"></i>
        <span>calculate</span></a>
    </li>

    <!-- <li class="nav-item">
      <a class="nav-link" href="{{ route('calculate.index') }}">
        <i class="fas fa-chart-bar"></i>
        <span>topsis</span></a> -->
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="/profile">
        <i class="fas fa-user-edit"></i>
        <span>Profile</span></a>
    </li>

    <!-- <li class="nav-item">
      <a class="nav-link" href="/profile">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>calculate</span></a>
    </li> -->
    
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
    
    
  </ul>