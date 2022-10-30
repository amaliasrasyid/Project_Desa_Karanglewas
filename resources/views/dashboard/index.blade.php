@extends('layouts.master')
@push('plugins_css')
<link rel="stylesheet" href="../node_modules/jqvmap/dist/jqvmap.min.css">
<link rel="stylesheet" href="../node_modules/summernote/dist/summernote-bs4.css">
<link rel="stylesheet" href="../node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
<link rel="stylesheet" href="../node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">
@endpush

@section('title', 'Dashboard')
@section('appName', 'Website Desa')
@section('content')
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
            {{$penduduk}}
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
            {{$laki}}
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
            {{$perempuan}}
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
            {{$vaksin}}
          </div>
        </div>
      </div>
    </div>
  </div>

  @if (Auth::user()->role == "user")
  <div class="row">
    <div class="col-12 col-sm-12 col-lg-6">
      <div class="card">
        <div class="card-header">
          <h4>Tentang Saya</h4>
          <div class="card-header-action">

          </div>
        </div>
        <div class="card author-box card-primary">
          <div class="card-body">
            <div class="author-box-left">
              <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle author-box-picture">
              <div class="clearfix"></div>
            </div>
            <div class="author-box-details">
              <div class="author-box-name">
                <a href="#">Hasan Basri</a>
              </div>
              <div class="author-box-job">Web Developer</div>
              <div class="author-box-description">
                <p>nik</p>
                <p>Tanggal Lahir</p>
                <p>Alamat</p>
                <p>Pengguna Pamsimas</p>
                <p>Status Vaksin</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endif
    @if (Auth::user()->role == "admin")
    <div class="row">
      <div class="col-12 col-sm-12 col-lg-6">
        <div class="card">
          <div class="card-header">
            <h4>Informasi Vaksin</h4>
            <div class="card-header-action">
              <a href="#" class="btn btn-danger">View More <i class="fas fa-chevron-right"></i></a>
            </div>
          </div>
          <div class="card-body p-0">
            <div class="table-responsive table-invoice">
              <table class="table table-striped">
                <tr>
                  <th>Nama</th>
                  <th>Status</th>
                  <th>Tanggal</th>
                  <th>Action</th>
                </tr>
                <tr>
                  <td class="font-weight-600">Kusnadi</td>
                  <td>
                    <div class="badge badge-danger">Belum</div>
                  </td>
                  <td>July 19, 2018</td>
                  <td>
                    <a href="#" class="btn btn-primary">Detail</a>
                  </td>
                </tr>
                <tr>
                  <td class="font-weight-600">Hasan Basri</td>
                  <td>
                    <div class="badge badge-success">Sudah</div>
                  </td>
                  <td>July 21, 2018</td>
                  <td>
                    <a href="#" class="btn btn-primary">Detail</a>
                  </td>
                </tr>
                <tr>
                  <td class="font-weight-600">Muhamad Nuruzzaki</td>
                  <td>
                    <div class="badge badge-success">Sudah</div>
                  </td>
                  <td>July 22, 2018</td>
                  <td>
                    <a href="#" class="btn btn-primary">Detail</a>
                  </td>
                </tr>
                <tr>
                  <td class="font-weight-600">Agung Ardiansyah</td>
                  <td>
                    <div class="badge badge-danger">Belum</div>
                  </td>
                  <td>July 22, 2018</td>
                  <td>
                    <a href="#" class="btn btn-primary">Detail</a>
                  </td>
                </tr>
                <tr>
                  <td class="font-weight-600">Ardian Rahardiansyah</td>
                  <td>
                    <div class="badge badge-success">Sudah</div>
                  </td>
                  <td>July 28, 2018</td>
                  <td>
                    <a href="#" class="btn btn-primary">Detail</a>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
      @endif
      <div class="col-12 col-sm-12 col-lg-6">
        <div class="card">
          <div class="card-header">
            <h4 class="d-inline">Riwayat Pembayaran Pamsimas</h4>

          </div>
          <div class="card-body" style="height:350px;overflow-y:scroll">
            <ul class="list-unstyled list-unstyled-border">
              <li class="media">

                <div class="media-body">
                  <div class="badge badge-pill badge-success mb-1 float-right">Bayar</div>
                  <h6 class="media-title"><a href="#">Januari</a></h6>
                  <div class="text-small text-muted"> 05-01-2022 <div class="bullet"></div>Rp. 200.000,-</div>
                </div>
              </li>
              <li class="media">

                <div class="media-body">
                  <div class="badge badge-pill badge-success mb-1 float-right">Bayar</div>
                  <h6 class="media-title"><a href="#">Februari</a></h6>
                  <div class="text-small text-muted">05-02-2022 <div class="bullet"></div> Rp. 200.000,-</div>
                </div>
              </li>
              <li class="media">

                <div class="media-body">
                  <div class="badge badge-pill badge-success mb-1 float-right">Bayar</div>
                  <h6 class="media-title"><a href="#">Maret</a></h6>
                  <div class="text-small text-muted">05-03-2022 <div class="bullet"></div> Rp. 200.000,-</div>
                </div>
              </li>
              <li class="media">

                <div class="media-body">
                  <div class="badge badge-pill badge-success mb-1 float-right">Bayar</div>
                  <h6 class="media-title"><a href="#">Maret</a></h6>
                  <div class="text-small text-muted">05-03-2022 <div class="bullet"></div> Rp. 200.000,-</div>
                </div>
              </li>
              <li class="media">

                <div class="media-body">
                  <div class="badge badge-pill badge-success mb-1 float-right">Bayar</div>
                  <h6 class="media-title"><a href="#">Maret</a></h6>
                  <div class="text-small text-muted">05-03-2022 <div class="bullet"></div> Rp. 200.000,-</div>
                </div>
              </li>
              <li class="media">

                <div class="media-body">
                  <div class="badge badge-pill badge-success mb-1 float-right">Bayar</div>
                  <h6 class="media-title"><a href="#">Maret</a></h6>
                  <div class="text-small text-muted">05-03-2022 <div class="bullet"></div> Rp. 200.000,-</div>
                </div>
              </li>
              <li class="media">

                <div class="media-body">
                  <div class="badge badge-pill badge-success mb-1 float-right">Bayar</div>
                  <h6 class="media-title"><a href="#">Maret</a></h6>
                  <div class="text-small text-muted">05-03-2022 <div class="bullet"></div> Rp. 200.000,-</div>
                </div>
              </li>
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
@endsection

@push('plugins_js')
<script src="../node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
<script src="../node_modules/chart.js/dist/Chart.min.js"></script>
<script src="../node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
<script src="../node_modules/summernote/dist/summernote-bs4.js"></script>
<script src="../node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
@endpush

@push('page_js')
<script src="../assets/js/page/index.js"></script>
@endpush
