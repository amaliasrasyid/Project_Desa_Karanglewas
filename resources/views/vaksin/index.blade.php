@extends('layouts.master')

@section('title', 'Vaksin')
@section('appName', 'Website Desa')
@section('content')
<section class="section">
  <div class="section-header">
    <h1>Data Vaksin</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item">Vaksin</div>
    </div>
  </div>

  <div class="section-body">
    <h2 class="section-title">Tabel Data Vaksin Desa Karanglewas</h2>
    <p class="section-lead">Example of some Bootstrap table components.</p>

    <div class="row">
      <div class="col-xl-12 col-md-6 col-lg-6">
        <div class="card">
          <div class="card-header">
            <h4>Overview</h4>
            <div class="card-header-action">
              <a href="{{ route('vaksin.create') }}" class="btn btn-icon icon-left btn-primary"><i class="fas fa-plus"></i>&nbsp;Tambah Vaksin</a>
            </div>
          </div>
          <div class="card-body p-0">
            <div class="col-xl-12 col-md-6 col-lg-6" style="overflow-x: auto">
              <table class="table table-bordered" style="width:120rem">
                <tbody>
                  <tr>
                    <th>No.</th>
                    <th>NIK</th>
                    <th>Name</th>
                    <th>Alamat</th>
                    <th>Tampat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>No, Handphone</th>
                    <th>Riwayat Penyakit</th>
                    <th>Status Vaksin</th>
                    <th>Action</th>
                  </tr>
                  @forelse ($vaksin as $value)
                  <tr>
                    <td>{{++$i}}</td>
                    <td>{{$value->nik}}</td>
                    <td>{{$value->nama}}</td>
                    <td>{{$value->alamat}}</td>
                    <td>{{$value->tptLahir}}</td>
                    <td>{{$value->tglLahir}}</td>
                    <td>{{$value->kelamin}}</td>
                    <td>{{$value->telpon}}</td>
                    <td>{{$value->penyakit}}</td>
                    @if ($value->vaksin == 1)
                    <td>Vaksin 1</td>
                    @elseif ($value->vaksin == 2)
                    <td>Vaksin 2</td>
                    @elseif ($value->vaksin == 3)
                    <td>Vaksin 3</td>
                    @else
                    <td>Belum Vaksin</td>
                    @endif
                    <td>
                      <a class="btn btn-primary btn-action m-1" data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                      <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  @empty
                    <div class="alert alert-danger">
                        Data Penduduk belum Tersedia.
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


