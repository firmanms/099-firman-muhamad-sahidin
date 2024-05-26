<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
      @if (Auth::user()->role->name === 'Admin')
      <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : 'collapsed' }}" href="{{ route('admin.dashboard') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>
      @else
      <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('user.dashboard') ? 'active' : 'collapsed' }}" href="{{ route('user.dashboard') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>
      @endif<!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('admin.publikasi.*') ? '' : 'collapsed' }}" data-bs-target="#publication-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-up"></i><span>Publikasi</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="publication-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          @if (Auth::user()->role->name === 'Admin')
          <li>
            <a href="{{ route('admin.publikasi.post') }}" class="{{ request()->routeIs('admin.publikasi.post') ? 'active' : '' }}">
              <i class="bi bi-circle"></i><span>Posting</span>
            </a>
          </li>
          <li>
            <a href="{{ route('admin.publikasi.category') }}" class="{{ request()->routeIs('admin.publikasi.category') ? 'active' : '' }}">
              <i class="bi bi-circle"></i><span>Kategori Posting</span>
            </a>
          </li>
          @else
          <li>
            <a href="{{ route('user.publikasi.post') }}" class="{{ request()->routeIs('user.publikasi.post') ? 'active' : '' }}">
              <i class="bi bi-circle"></i><span>Posting</span>
            </a>
          </li>
          @endif
          {{-- <li>
            <a href="publication-alerts.html">
              <i class="bi bi-circle"></i><span>Halaman</span>
            </a>
          </li> --}}
        </ul>
      </li><!-- End Components Nav -->

      <!--<li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#setting-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gear"></i><span>Pengaturan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="setting-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="setting-alerts.html">
              <i class="bi bi-circle"></i><span>Slide</span>
            </a>
          </li>
          <li>
            <a href="setting-alerts.html">
              <i class="bi bi-circle"></i><span>Menu</span>
            </a>
          </li>
          <li>
            <a href="setting-alerts.html">
              <i class="bi bi-circle"></i><span>Site Profil</span>
            </a>
          </li>
        </ul>
      </li> End Components Nav -->
      @if (Auth::user()->role->name === 'admin')
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#user-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-person"></i><span>Pengguna</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="user-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="user-alerts.html">
              <i class="bi bi-circle"></i><span>Kelola Pengguna</span>
            </a>
          </li>
          {{-- <li>
            <a href="user-accordion.html">
              <i class="bi bi-circle"></i><span>Role</span>
            </a>
          </li> --}}
        </ul>
      </li><!-- End Components Nav -->
      @endif

    </ul>

  </aside><!-- End Sidebar-->
