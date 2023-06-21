{{-- manggil file tampilan master ng folder layout --}}
@extends('layouts.master')

{{-- push plugin_css page ming tampilan layout master --}}
@push('plugins_css')
    <link rel="stylesheet" href="node_modules/bootstrap-daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="node_modules/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
    <link rel="stylesheet" href="node_modules/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="node_modules/selectric/public/selectric.css">
    <link rel="stylesheet" href="node_modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
@endpush

{{-- send nama page --}}
@section('title', 'Edit Penduduk')
{{-- send nama aplikasi --}}
@section('appName', 'Website Desa')
{{-- send tampilan form edit penduduk --}}
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Form Edit Penduduk</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('penduduk.index') }}">Penduduk</a></div>
                <div class="breadcrumb-item">Form Edit Penduduk</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-xl-12 col-md-6 col-lg-6">
                    <div class="card">
                        <!-- Fungsi kondisi error message/pringatan -->
                        <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <strong>Peringatan!</strong> Data yang dimasukan tidak sesuai.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{ route('penduduk.update', $data) }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="nik">NIK</label>
                                    <input type="text" id="nik" name="nik" class="form-control"
                                        value="{{ $data->nik }}" required>
                                    @error('nik')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" id="nama" name="nama" class="form-control"
                                        value="{{ $data->nama }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" id="alamat" name="alamat" class="form-control"
                                        value="{{ $data->alamat }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="tempatLahir">Tempat Lahir</label>
                                    <input type="text" id="tempatLahir" name="tempatLahir" class="form-control"
                                        value="{{ $data->tptLahir }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="tanggalLahir">Tanggal Lahir</label>
                                    <input type="date" id="tanggalLahir" name="tanggalLahir" class="form-control"
                                        value="{{ $data->tglLahir }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="jenisKelamin">Jenis Kelamin</label>
                                    <input type="text" id="jenisKelamin" name="jenisKelamin" class="form-control"
                                        value="{{ $data->kelamin }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="kawin">Status Perkawinan</label>
                                    <select id="kawin" name="kawin" class="form-control" required>
                                        <option value="{{ $data->kawin }}" selected>{{ $data->kawin }}</option>
                                        <option value="Sudah Kawin">Sudah Kawin</option>
                                        <option value="Belum Kawin">Belum Kawin</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="agama">Agama</label>
                                    <select id="agama" name="agama" class="form-control" required>
                                        <option value="{{ $data->agama }}" selected>{{ $data->agama }}</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Katholik">Katholik</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Konghucu">Konghucu</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="pendidikan">Pendidikan</label>
                                    <select id="pendidikan" name="pendidikan" class="form-control" required>
                                        <option value="{{ $data->pendidikan }}" selected>{{ $data->pendidikan }}
                                        </option>
                                        <option value="SD">SD</option>
                                        <option value="SMP">SMP</option>
                                        <option value="SLTA">SLTA</option>
                                        <option value="DIII">DIII</option>
                                        <option value="S1/DIV">S1/DIV</option>
                                        <option value="S2">S2</option>
                                        <option value="S3">S3</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="akta">Nomor Akta</label>
                                    <input type="text" id="akta" name="akta" class="form-control"
                                        value="{{ $data->akta }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="pam">Pengguna Pamsimas</label>
                                    <select id="pam" name="pam" class="form-control" required>
                                        <option value="{{ $data->pam }}" selected>{{ $data->pam }}
                                        </option>
                                        <option value="Pengguna Pamsimas">Pengguna Pamsimas</option>
                                        <option value="Bukan Pengguna Pamsimas">Bukan Pengguna Pamsimas</option>
                                    </select>
                                </div>
                                <div class="text-center pt-1 pb-1">
                                    <button class="btn btn-primary" type="submit">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('plugins_js')
    <script src="node_modules/cleave.js/dist/cleave.min.js"></script>
    <script src="node_modules/cleave.js/dist/addons/cleave-phone.us.js"></script>
    <script src="node_modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
    <script src="node_modules/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="node_modules/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
    <script src="node_modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
    <script src="node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
    <script src="node_modules/select2/dist/js/select2.full.min.js"></script>
    <script src="node_modules/selectric/public/jquery.selectric.min.js"></script>
@endpush

@push('page_js')
    <script src="{{ asset('assets/js/page/forms-advanced-forms.js') }}"></script>
@endpush
