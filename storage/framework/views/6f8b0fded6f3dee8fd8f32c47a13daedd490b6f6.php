          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <?php if(Auth::user()->role == "admin"): ?>
            <li class="<?php echo e(request()->is('admin') ? 'active' : ''); ?>">
              <a href="<?php echo e(route('user.index')); ?>" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <?php endif; ?>
            <?php if(Auth::user()->role == "user"): ?>
            <li class="<?php echo e(request()->is('/') ? 'active' : ''); ?>">
              <a href="<?php echo e(route('user.index')); ?>" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <?php endif; ?>
            <li class="<?php echo e(request()->is('profile') ? 'active' : ''); ?>">
              <a href="<?php echo e(route('profile.index')); ?>" class="nav-link"><i class="fas fa-book-reader"></i><span>Profil Desa</span></a>
            </li>
            <li class="<?php echo e(request()->is('struktur') ? 'active' : ''); ?>">
              <a href="<?php echo e(route('struktur.index')); ?>" class="nav-link"><i class="fas fa-sitemap"></i><span>Struktur Organisasi</span></a>
            </li>

            </li>
            <?php if(Auth::user()->role == "admin"): ?>
            <li class="menu-header">Master</li>
            <li class="nav-item dropdown">
            <li class="<?php echo e(request()->is('penduduk') ? 'active' : ''); ?>">
              <a href="<?php echo e(route('penduduk.index')); ?>" class="nav-link"><i class="fas fa-users"></i> <span>Data Penduduk</span></a>
            </li>
            <li class="<?php echo e(request()->is('vaksin') ? 'active' : ''); ?>">
              <a href="<?php echo e(route('vaksin.index')); ?>" class="nav-link"><i class="fas fa-address-card"></i> <span>Data Vaksin</span></a>
            </li>
            </li>

            <li class="menu-header">Pembayaran</li>
            <li class="nav-item dropdown">
            <li class="<?php echo e(request()->is('umkm') ? 'active' : ''); ?>">
              <a href="<?php echo e(route('umkm.index')); ?>" class="nav-link"><i class="fas fa-th-large"></i> <span>UMKM</span></a>
            </li>
            <li class="<?php echo e(request()->is('pamsimas') ? 'active' : ''); ?>">
              <a href="<?php echo e(route('pamsimas.index')); ?>" class="nav-link"><i class="fab fa-product-hunt"></i> <span>Pamsimas</span></a>
            </li>
            </li>
            <?php endif; ?>

            <?php if(Auth::user()->role == "user"): ?>
            <li class="menu-header">Pembayaran</li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-th-large"></i> <span>UMKM</span></a>
              <ul class="dropdown-menu">
                <li class="<?php echo e(request()->is('jadi') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('umkm.jadi.index')); ?>">Produk Jadi</a></li>
                <li class="<?php echo e(request()->is('setengahjadi') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('umkm.setengahjadi.index')); ?>">Produk 1/2 Jadi</a></li>
                <li class="<?php echo e(request()->is('mentah') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('umkm.mentah.index')); ?>">Produk Mentah</a></li>
              </ul>
            <li class=" <?php echo e(request()->is('pamsimas') ? 'active' : ''); ?>">
              <a href="<?php echo e(route('pamsimas.index')); ?>" class="nav-link"><i class="fab fa-product-hunt"></i> <span>Pamsimas</span></a>
            </li>
            <?php endif; ?>

            <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
              <a href="<?php echo e(route('logout.logout')); ?>" class="btn btn-danger btn-lg btn-block btn-icon-split">
                <i class="fa fa-power-off"></i> Log Out
              </a>
            </div>
<?php /**PATH C:\Users\Aryansyah\Documents\Kerjaan\Project_Desa_Karanglewas\resources\views/layouts/menu.blade.php ENDPATH**/ ?>