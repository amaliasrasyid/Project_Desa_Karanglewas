@extends('layouts.master')

@section('title', 'Penduduk')
@section('appName', 'Website Desa')
@section('content')
<section class="section">
  <div class="section-header">
    <h1>Data Penduduk</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item">Penduduk</div>
    </div>
  </div>

  <div class="section-body">
    <h2 class="section-title">Tabel Data Penduduk Desa Karanglewas</h2>
    <p class="section-lead">Example of some Bootstrap table components.</p>

    <div class="row">
      <div class="col-xl-12 col-md-6 col-lg-6">
        <div class="card">
          <div class="card-header">
            <h4>Overview</h4>
            <div class="card-header-action">
              <a href="{{ route('penduduk.create') }}" class="btn btn-icon icon-left btn-primary"><i class="fas fa-plus"></i>&nbsp;Tambah Penduduk</a>
            </div>
          </div>
          <div class="card-body p-0">
            <div class="col-xl-12 col-md-6 col-lg-6" style="overflow-x: auto">
              @if ($message = Session::get('success'))
              <div class="alert alert-success">
                <p>{{ $message }}</p>
              </div>
              @endif
              <table class="table table-bordered" style="width:100rem">
                <tbody>
                  <tr>
                    <th>No.</th>
                    <th>NIK</th>
                    <th>Name</th>
                    <th>Alamat</th>
                    <th>Tampat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Status Kawin</th>
                    <th>Agama</th>
                    <th>No. Akta</th>
                    <th>Pamsimas</th>
                    <th>Action</th>
                  </tr>
                  @forelse ($penduduk as $value)
                  <tr>
                    <td>{{++$i}}</td>
                    <td>{{$value->nik}}</td>
                    <td>{{$value->nama}}</td>
                    <td>{{$value->alamat}}</td>
                    <td>{{$value->tptLahir}}</td>
                    <td>{{$value->tglLahir}}</td>
                    <td>{{$value->kelamin}}</td>
                    <td>{{$value->kawin}}</td>
                    <td>{{$value->agama}}</td>
                    <td>{{$value->akta}}</td>
                    <td>{{$value->pam}}</td>
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
                  {!! $penduduk->links() !!}
                <tbody>
              </table>
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