          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>

              </li>
              <li class="menu-header">Master</li>
              <li class="nav-item dropdown">
                <a href="{{ route('penduduk.index') }}" class="nav-link"><i class="fas fa-users"></i> <span>Data Penduduk</span></a>
                <a href="{{ route('vaksin.index') }}" class="nav-link"><i class="fas fa-address-card"></i> <span>Data Vaksin</span></a>
              </li>

              <li class="menu-header">Pembayaran</li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link"><i class="fas fa-th-large"></i> <span>UMKM</span></a>
                <a href="#" class="nav-link"><i class="fab fa-product-hunt"></i> <span>Pamsimas</span></a>

              </li>


            <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
              <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Documentation
              </a>
            </div>
