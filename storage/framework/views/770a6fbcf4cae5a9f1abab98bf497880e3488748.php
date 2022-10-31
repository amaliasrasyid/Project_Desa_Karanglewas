
<?php $__env->startPush('plugins_css'); ?>
<link rel="stylesheet" href="../node_modules/jqvmap/dist/jqvmap.min.css">
<link rel="stylesheet" href="../node_modules/summernote/dist/summernote-bs4.css">
<link rel="stylesheet" href="../node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
<link rel="stylesheet" href="../node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('title', 'Dashboard'); ?>
<?php $__env->startSection('appName', 'Website Desa'); ?>
<?php $__env->startSection('content'); ?>
<section class="section">
  <div class="section-header">
    <h1>Dashboard</h1>
  </div>
  <div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-primary">
          <i class="fas fa-restroom"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Total Penduduk</h4>
          </div>
          <div class="card-body">
            10.000
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-danger">
          <i class="fas fa-male"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Laki-laki</h4>
          </div>
          <div class="card-body">
            4000
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-warning">
          <i class="fas fa-female"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Wanita</h4>
          </div>
          <div class="card-body">
            6000
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-success">
          <i class="fas fa-id-card"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Vaksin</h4>
          </div>
          <div class="card-body">
            9000
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-12 col-sm-12 col-lg-6">
      <div class="card">
        <div class="card-header">
          <h4>Tentang Saya</h4>
          <div class="card-header-action">
            <div class="btn-group">
              <a href="#" class="btn btn-primary">Week</a>
              <a href="#" class="btn">Month</a>
            </div>
          </div>
        </div>
        <div class="card author-box card-primary">
          <div class="card-body">
            <div class="author-box-left">
              <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle author-box-picture">
              <div class="clearfix"></div>
              <a href="#" class="btn btn-primary mt-3 follow-btn" data-follow-action="alert('follow clicked');" data-unfollow-action="alert('unfollow clicked');">Follow</a>
            </div>
            <div class="author-box-details">
              <div class="author-box-name">
                <a href="#">Hasan Basri</a>
              </div>
              <div class="author-box-job">Web Developer</div>
              <div class="author-box-description">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat.</p>
              </div>
              <div class="mb-2 mt-3">
                <div class="text-small font-weight-bold">Follow Hasan On</div>
              </div>

              <div class="w-100 d-sm-none"></div>
              <div class="float-right mt-sm-0 mt-3">
                <a href="#" class="btn">View Posts <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-sm-12 col-lg-6">
      <div class="card">
        <div class="card-header">
          <h4 class="d-inline">Vaksin Terbaru</h4>
          
        </div>
        <div class="card-body">
          <ul class="list-unstyled list-unstyled-border">
            <li class="media">
              
              <img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-4.png" alt="avatar">
              <div class="media-body">
                <div class="badge badge-pill badge-danger mb-1 float-right">Not Finished</div>
                <h6 class="media-title"><a href="#">Redesign header</a></h6>
                <div class="text-small text-muted">Alfa Zulkarnain <div class="bullet"></div> <span class="text-primary">Now</span></div>
              </div>
            </li>
            <li class="media">
              
              <img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-5.png" alt="avatar">
              <div class="media-body">
                <div class="badge badge-pill badge-primary mb-1 float-right">Completed</div>
                <h6 class="media-title"><a href="#">Add a new component</a></h6>
                <div class="text-small text-muted">Serj Tankian <div class="bullet"></div> 4 Min</div>
              </div>
            </li>
            <li class="media">
              
              <img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-2.png" alt="avatar">
              <div class="media-body">
                <div class="badge badge-pill badge-warning mb-1 float-right">Progress</div>
                <h6 class="media-title"><a href="#">Fix modal window</a></h6>
                <div class="text-small text-muted">Ujang Maman <div class="bullet"></div> 8 Min</div>
              </div>
            </li>
            <div class="text-center pt-1 pb-1">
            <a href="#" class="btn btn-primary btn-lg btn-round">
              View All
            </a>
          </div>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4>Informasi Seputar Desa</h4>
        </div>
        <div class="card-body">
          <ul class="list-unstyled list-unstyled-border">
            <li class="media">
              <img class="mr-3" width="80" src="../assets/img/news/img08.jpg" alt="avatar">
              <div class="media-body">
                <div class="float-right text-primary">Now</div>
                <div class="media-title">Banjir</div>
                <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</span>
              </div>
            </li>
            <li class="media">
              <img class="mr-3" width="80" src="../assets/img/news/img04.jpg" alt="avatar">
              <div class="media-body">
                <div class="float-right">12m</div>
                <div class="media-title">Tanah Longsor</div>
                <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</span>
              </div>
            </li>
            <li class="media">
              <img class="mr-3" width="80" src="../assets/img/news/img09.jpg" alt="avatar">
              <div class="media-body">
                <div class="float-right">17m</div>
                <div class="media-title">Gempa Bumi</div>
                <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</span>
              </div>
            </li>
            <li class="media">
              <img class="mr-3" width="80" src="../assets/img/news/img12.jpg" alt="avatar">
              <div class="media-body">
                <div class="float-right">Tsunami</div>
                <div class="media-title">Alfa Zulkarnain</div>
                <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</span>
              </div>
            </li>
          </ul>
          <div class="text-center pt-1 pb-1">
            <a href="#" class="btn btn-primary btn-lg btn-round">
              View All
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('plugins_js'); ?>
<script src="../node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
<script src="../node_modules/chart.js/dist/Chart.min.js"></script>
<script src="../node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
<script src="../node_modules/summernote/dist/summernote-bs4.js"></script>
<script src="../node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('page_js'); ?>
<script src="../assets/js/page/index.js"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.master-1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Aryansyah\Documents\Kerjaan\Project_Desa_Karanglewas\resources\views/index.blade.php ENDPATH**/ ?>