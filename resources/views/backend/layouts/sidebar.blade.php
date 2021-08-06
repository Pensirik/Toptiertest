<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin.home')}}">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class=""></i>
      </div>
      <div class="sidebar-brand-text mx-3"> Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
      <a class="nav-link" href="{{route('admin.home')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Menu
    </div>

    {{-- Info --}}
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.home')}}">
            <i class="fas fa-address-card"></i>
            <span>Infomation Form</span>
        </a>
    </li>


    {{-- Log --}}
    <li class="nav-item">
        <a class="nav-link" href="{{ route('log.home')}}">
            <i class="fas fa-sitemap"></i>
            <span>Log</span>
        </a>
    </li>
 <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>