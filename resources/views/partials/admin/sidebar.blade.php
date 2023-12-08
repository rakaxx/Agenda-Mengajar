 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a class="brand-link">
    <img src="{{ asset('img/logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">E-Agenda | Admin</span>
  </a>
  
<!-- Sidebar -->
<div class="sidebar">

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="{{ url('admin/dashboard') }}" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>

        <li class="nav-header">ADMIN SECTION</li>     
        <li class="nav-item">
          <a href="{{ url('admin/akun') }}" class="nav-link">
            <i class="nav-icon fas fa-people-arrows"></i>
            <p>
              Kelola Akun
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ url('admin/mapel') }}" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
            <p>
              Kelola Mapel
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ url('admin/kelas') }}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Kelola Kelas
            </p>
          </a>
        </li>
        
        <li class="nav-header">GURU SECTION</li>
        <li class="nav-item">
          <a href="{{ url('admin/agenda') }}" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
            <p>
              Agenda Mengajar
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ url('admin/draf') }}" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Lihat Agenda
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
  