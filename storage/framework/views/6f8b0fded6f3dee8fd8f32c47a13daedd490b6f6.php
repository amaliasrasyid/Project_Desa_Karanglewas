          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
              <li class="nav-item dropdown">
                <a href="<?php echo e(route('user.index')); ?>" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <a href="<?php echo e(route('profile.index')); ?>" class="nav-link"><i class="fas fa-book-reader"></i><span>Profil Desa</span></a>
                <a href="<?php echo e(route('struktur.index')); ?>" class="nav-link"><i class="fas fa-sitemap"></i><span>Struktur Organisasi</span></a>

              </li>
              <?php if(Auth::user()->role == "admin"): ?>
              <li class="menu-header">Master</li>
              <li class="nav-item dropdown">
                <a href="<?php echo e(route('penduduk.index')); ?>" class="nav-link"><i class="fas fa-users"></i> <span>Data Penduduk</span></a>
                <a href="<?php echo e(route('vaksin.index')); ?>" class="nav-link"><i class="fas fa-address-card"></i> <span>Data Vaksin</span></a>
              </li>
              <?php endif; ?>
              <li class="menu-header">Pembayaran</li>
              <li class="nav-item dropdown">
                <a href="<?php echo e(route('umkm.index')); ?>" class="nav-link"><i class="fas fa-th-large"></i> <span>UMKM</span></a>
                <a href="<?php echo e(route('pamsimas.index')); ?>" class="nav-link"><i class="fab fa-product-hunt"></i> <span>Pamsimas</span></a>

              </li>


            <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
              <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Documentation
              </a>
            </div>
<?php /**PATH C:\Users\Aryansyah\Documents\Kerjaan\Project_Desa_Karanglewas\resources\views/layouts/menu.blade.php ENDPATH**/ ?>