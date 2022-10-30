@extends('layouts.master')

@section('title', 'pamsimas')
@section('appName', 'Website Desa')
@section('content')
<section class="section">
  @if (Auth::user()->role == "admin")
  <div class="section-header">
    <h1>Data Pamsimas</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item">Pamsimas</div>
    </div>
  </div>

  <div class="section-body">
    <h2 class="section-title">Tabel Data Pamsimas Desa Karanglewas</h2>
    <p class="section-lead">Example of some Bootstrap table components.</p>

    <div class="row">
      <div class="col-xl-12 col-md-6 col-lg-6">
        <div class="card">
          <div class="card-header">
            <h4>Overview</h4>
          </div>
          <div class="card-body p-0">
            <div class="col-xl-12 col-md-6 col-lg-6" style="overflow-x: auto">
              <table class="table table-bordered" style="width:80rem">
                <tbody>
                  <tr>
                    <th>No.</th>
                    <th>NIK</th>
                    <th>Name</th>
                    <th>Alamat</th>
                    <th>Bulan</th>
                    <th>Tanggal</th>
                    <th>Harga</th>
                    <th>Status Pembayaran</th>
                    <th>Action</th>
                  </tr>
                  @forelse ($pamsimas as $item)
                  <tr>
                    <td>{{++$i}}</td>
                    <td>{{$item->nik}}</td>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->alamat}}</td>
                    <td>{{$item->bulan}}</td>
                    <td>{{$item->tanggal}}</td>
                    <td>{{$item->harga}}</td>
                    <td>{{$item->status}}</td>
                    <td>
                      <a class="btn btn-primary btn-action m-1" data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                      <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  @empty
                  <div class="alert alert-danger">
                    Data Pamsimas belum Tersedia.
                  </div>
                  @endforelse
                <tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="card-footer text-right">
          <nav class="d-inline-block">
            <ul class="pagination mb-0">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
              </li>
              <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
              <li class="page-item">
                <a class="page-link" href="#">2</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
  </div>
  @endif

  @if (Auth::user()->role == "user")
  <div class="row">
    <div class="col-12 col-sm-12 col-lg-6">
      <div class="card">
        <div class="card-header">
          <h4>Pamsimas</h4>
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
                <p>NIK</p>
                <p>Nama</p>
                <p>Alamat</p>
                <p>Bulan</p>
                <p>Tanggal</p>
                <p>Harga</p>
                <p>Status Pembayaran</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  <div class="section-header">
    <h1>Pembayaran Pamsimas</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item">Pamsimas</div>
    </div>
  </div>

  <div class="section-body">
    <h2 class="section-title">Input Data Pembayaran</h2>
    <p class="section-lead">Silahkan isi form pembayaran pamsimas sesuai dengan penggunaan anda.</p>

    <div class="row">
      <div class="col-xl-12 col-md-6 col-lg-6">

        <div class="card">
          <div class="card-body">

            @csrf
            <div class="form-group">
              <label for="nik">NIK</label>
              <input type="text" id="nik" name="nik" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="nik">Input Pemakaian</label>
              <input type="text" id="pemakaian" name="pemakaian" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" id="nama" name="nama" class="form-control" disabled>
            </div>
            <div class="form-group">
              <label for="bulan">Bulan</label>
              <input type="text" id="bulan" name="bulan" class="form-control" disabled>
            </div>
            <div class="form-group">
              <label for="tanggal">Tanggal</label>
              <input type="text" id="tanggal" name="tanggal" class="form-control" disabled>
            </div>
            <div class="form-group">
              <label for="alamat">Alamat</label>
              <input type="text" id="alamat" name="alamat" class="form-control" disabled>
            </div>
            <div class="form-group">
              <label for="statuspembayaran">Status Pembayaran</label>
              <input type="text" id="statuspembayaran" name="statuspembayaran" class="form-control" disabled>
            </div>
            <div class="form-group">
              <label for="harga">Harga</label>
              <input type="text" id="harga" name="harga" class="form-control" class="form-control" disabled>
            </div>
            <button class="btn btn-primary" type="submit">Bayar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endif
</section>
@endsection

@push('plugins_js')
<script src="../node_modules/jquery-ui-dist/jquery-ui.min.js"></script>
@endpush

@push('page_js')
<script src="../assets/js/page/components-table.js"></script>
@endpush