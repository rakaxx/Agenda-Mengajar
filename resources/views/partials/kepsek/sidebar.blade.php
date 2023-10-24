 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a class="brand-link">
    <img src="{{ asset('img/logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">E-Agenda | Kepsek</span>
  </a>
  
<!-- Sidebar -->
<div class="sidebar">

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="{{ url('kepsek/dashboard') }}" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        
        <li class="nav-header">KEPALA SEKOLAH SECTION</li>
        <li class="nav-item">
          <a href="{{ url('kepsek/agenda') }}" class="nav-link">
            <i class="nav-icon fas fa-calendar-alt"></i>
            <p>
              Persetujuan Agenda
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ url('kepsek/draf') }}" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Agenda Mengajar Guru
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
  