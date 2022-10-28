@extends('layouts.master-1')

@section('title', 'pamsimas')
@section('appName', 'Website Desa')
@section('content')
<section class="section">
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
              <table class="table table-bordered" style="width:70rem">
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
</section>
@endsection

@push('plugins_js')
<script src="../node_modules/jquery-ui-dist/jquery-ui.min.js"></script>
@endpush

@push('page_js')
<script src="../assets/js/page/components-table.js"></script>
@endpush
