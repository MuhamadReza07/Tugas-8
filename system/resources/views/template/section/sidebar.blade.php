@php
function checkRouteActive($route){
  if(Route::current()->uri == $route) return 'active';
}
@endphp
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('beranda') }}" class="brand-link">
      <img src="{{url('public')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">MYBLOG</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{url('public')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
            @if(Auth::check())
           {{request()->user()->nama}}
           @else
             Silahkan Login
           @endif
          </a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="{{url('beranda')}}" class="nav-link {{checkRouteActive('beranda')}}">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Beranda
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/artikel')}}" class="nav-link {{checkRouteActive('admin/artikel')}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Article
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/komen')}}" class="nav-link {{checkRouteActive('admin/komen')}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Komentar
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/user')}}"  class="nav-link {{checkRouteActive('admin/user')}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
               User
              </p>
            </a>
          </li>
          
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>