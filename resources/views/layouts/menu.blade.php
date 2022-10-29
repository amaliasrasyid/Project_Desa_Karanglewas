          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown">
              <a href="{{ route('user.index') }}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
              <a href="{{ route('profile.index') }}" class="nav-link"><i class="fas fa-book-reader"></i><span>Profil Desa</span></a>
              <a href="{{ route('struktur.index') }}" class="nav-link"><i class="fas fa-sitemap"></i><span>Struktur Organisasi</span></a>

            </li>
            @if (Auth::user()->role == "admin")
            <li class="menu-header">Master</li>
            <li class="nav-item dropdown">
              <a href="{{ route('penduduk.index') }}" class="nav-link"><i class="fas fa-users"></i> <span>Data Penduduk</span></a>
              <a href="{{ route('vaksin.index') }}" class="nav-link"><i class="fas fa-address-card"></i> <span>Data Vaksin</span></a>
            </li>

            <li class="menu-header">Pembayaran</li>
            <li class="nav-item dropdown">
              <a href="{{ route('umkm.index') }}" class="nav-link"><i class="fas fa-th-large"></i> <span>UMKM</span></a>
              <a href="{{ route('pamsimas.index') }}" class="nav-link"><i class="fab fa-product-hunt"></i> <span>Pamsimas</span></a>
            </li>
            @endif

            @if (Auth::user()->role == "user")
            <li class="menu-header">Pembayaran</li>
            <li class="nav-item dropdown {{ request()->is('room*') ? 'active' : '' }}">
              <a href="{{ route('umkm.index') }}" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-th-large"></i> <span>UMKM</span></a>
              <ul class="dropdown-menu">
                  <li class="active"><a class="nav-link" href="{{ route('umkm.index') }}">Produk Jadi</a></li>
                  <li class="active"><a class="nav-link" href="index.html">Produk 1/2 Jadi</a></li>
                  <li class="active"><a class="nav-link" href="index.html">Produk Mentah</a></li>
                </ul>
              <a href="{{ route('pamsimas.index') }}" class="nav-link"><i class="fab fa-product-hunt"></i> <span>Pamsimas</span></a>
            </li>
            @endif

            <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
              <a href="#" class="btn btn-danger btn-lg btn-block btn-icon-split">
                <i class="fa fa-power-off"></i> Log Out
              </a>
            </div>