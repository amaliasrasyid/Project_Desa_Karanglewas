


<?php $__env->startPush('plugins_css'); ?>
<link rel="stylesheet" href="../node_modules/bootstrap-social/bootstrap-social.css">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('title', 'Login'); ?>
<?php $__env->startSection('appName', 'Website Desa'); ?>
<?php $__env->startSection('content_2'); ?>
<section class="section">
  <div class="d-flex flex-wrap align-items-stretch">
    <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
      <div class="text-center p-2 mt-5">
        <img src="../assets/img/Desa.png" alt="logo" width="180" ></div>
      <div class="p-4 m-3">
        <p class="text-muted">Sebelum memulai, Anda harus login atau mendaftar jika Anda belum memiliki akun.</p>
        <form method="POST" action="<?php echo e(route('login.process')); ?>" class="needs-validation" novalidate="">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <?php $__errorArgs = ['login_failed'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <span class="alert-inner--text"><strong>Warning!</strong> <?php echo e($message); ?></span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <label for="username">Username/NIK</label>
                <input id="username" type="text" class="form-control" name="username" tabindex="1" required autofocus>
                <?php if($errors->has('username')): ?>
                <div class="invalid-feedback">
                <?php echo e($errors->first('username')); ?>

                </div>
                <?php endif; ?>
            </div>

          <div class="form-group">
            <div class="d-block">
              <label for="password" class="control-label">Password</label>
            </div>
            <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
            <?php if($errors->has('password')): ?>
            <div class="invalid-feedback">
            <?php echo e($errors->first('password')); ?>

            </div>
            <?php endif; ?>
          </div>

          <div class="form-group text-center">
            <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
              Login
            </button>
          </div>
        </form>

        <div class="text-center mt-5 text-small">
          Desa Karanglewas. Design 💙 by Stisla
          
        </div>
      </div>
    </div>
    <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom" data-background="../assets/img/unsplash/login-bg.jpg">
      <div class="absolute-bottom-left index-2">
        <div class="text-light p-5 pb-2">
          <div class="mb-5 pb-3">
            <h1 class="mb-2 display-4 font-weight-bold">Selamat Datang</h1>
            <h5 class="font-weight-normal text-muted-transparent">Website Desa Karanglewas</h5>
          </div>
          Banyumas, <a class="text-light bb" target="_blank" href="https://unsplash.com/photos/a8lTjWJJgLA">Jawa Tengah</a> on <a class="text-light bb" target="_blank" href="https://unsplash.com">Indonesia</a>
        </div>
      </div>
    </div>
  </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Aryansyah\Documents\Kerjaan\Project_Desa_Karanglewas\resources\views/auth/login.blade.php ENDPATH**/ ?>