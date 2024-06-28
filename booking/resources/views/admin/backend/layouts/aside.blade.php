<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="index.html">Yunta Booking</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="index.html">St</a>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">Dashboard</li>
      <li class="{{ Route::is('dashboard') ? 'active' : '' }}"><a class="nav-link" href="{{route('dashboard')}}"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
      <li class="menu-header">Master Data</li>
      <li class="{{ Route::is('fasilitas.*') ? 'active' : '' }}"><a class="nav-link" href="{{route('fasilitas.index')}}"><i class="far fa-square"></i> <span>Fasilitas</span></a></li>
      <li class="{{ Route::is('rules.*') ? 'active' : '' }}"><a class="nav-link" href="{{route('rules.index')}}"><i class="far fa-square"></i> <span>Rules</span></a></li>
      <li class="menu-header">Big Data</li>
      <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Booking</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{route('booking.index')}}">All Booking</a></li>
        </ul>
      </li>
      <li class="{{ Route::is('lapangan.*') ? 'active' : '' }} nav-item dropdown">
        <a href="{{route('lapangan.index')}}" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Lapangan</span></a>
        <ul class="dropdown-menu">
          <li class="{{ Route::is('lapangan.index') ? 'active' : '' }}"><a class="nav-link" href="{{route('lapangan.index')}}">All Lapangan</a></li>
          <li class="{{ Route::is('lapangan.create') ? 'active' : '' }}"><a class="nav-link" href="{{route('lapangan.create')}}">Create Lapangan</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Account</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="bootstrap-alert.html">All Data</a></li>
          <li><a class="nav-link" href="bootstrap-alert.html">Create Account</a></li>
        </ul>
      </li>
  </aside>