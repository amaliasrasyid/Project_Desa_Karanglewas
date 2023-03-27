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
@section('title', 'Form PKH')
{{-- send nama aplikasi --}}
@section('appName', 'Website Desa')
{{-- send tampilan form tambah PKH --}}
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Form Tambah PKH</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('pkh.index') }}">PKH</a></div>
                <div class="breadcrumb-item">Form Tambah PKH</div>
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
                            <form action="{{ route('pkh.store') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="nik">NIK</label>
                                    <input type="text" id="nik" name="nik" class="form-control" required>
                                    @error('nik')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <!-- Nek required kue ngadu di isi ora olih kosong -->
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" id="nama" name="nama" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" id="alamat" name="alamat" class="form-control" required>
                                </div>
                                <!-- <div class="form-group">
                                    <label for="tempatLahir">Tempat Lahir</label>
                                    <input type="text" id="tempatLahir" name="tempatLahir" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="tanggalLahir">Tanggal Lahir</label>
                                    <input type="date" id="tanggalLahir" name="tanggalLahir" class="form-control"
                                        required>
                                </div> -->
                                <div class="form-group">
                                    <label for="anak">Status Anak</label>
                                    <select id="anak" name="anak" class="form-control" required>
                                        <option disabled selected>--Pilih Status Anak--</option>
                                        <option value="sekolah">Sekolah</option>
                                        <option value="tidakSekolah">Tidak Sekolah</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="kendaraan">Kendaraan</label>
                                    <select id="kendaraan" name="kendaraan" class="form-control" required>
                                        <option disabled selected>--Pilih Status Kendaraan--</option>
                                        <option value="punya">Punya</option>
                                        <option value="tidakPunya">Tidak Punya</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="pendapatan">Pendapatan /bulan</label>
                                    <select id="pendapatan" name="pendapatan" class="form-control" required>
                                        <option disabled selected>--Pilih Pendapatan--</option>
                                        <option value="golongan1"> < 1 Juta </option>
                                        <option value="golongan2"> < 3 Juta </option>
                                        <option value="golongan3"> < 5 Juta </option>
                                        <option value="golongan3"> > 5 Juta </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="penerimaan">Penerimaan PKH</label>
                                    <select id="penerimaan" name="penerimaan" class="form-control" required>
                                        <option disabled selected>--Pilih Penerimaan--</option>
                                        <option value="sudah"> Sudah Menerima </option>
                                        <option value="belum"> Belum Menerima </option>
                                    </select>
                                </div>
                                <!-- <div class="form-group">
                                    <label for="akta">Nomor Akta</label>
                                    <input type="text" id="akta" name="akta" class="form-control" required>
                                    @error('akta')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="pam">Pengguna Pamsimas</label>
                                    <select id="pam" name="pam" class="form-control" required>
                                        <option disabled selected>--Pilih Status Pengguna Pamsimas--</option>
                                        <option value="Ya">Pengguna Pamsimas</option>
                                        <option value="Tidak">Bukan Pengguna Pamsimas</option>
                                    </select>
                                </div> -->
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
