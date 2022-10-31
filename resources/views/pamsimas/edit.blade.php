@extends('layouts.master')
@push('plugins_css')
<link rel="stylesheet" href="node_modules/bootstrap-daterangepicker/daterangepicker.css">
<link rel="stylesheet" href="node_modules/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
<link rel="stylesheet" href="node_modules/select2/dist/css/select2.min.css">
<link rel="stylesheet" href="node_modules/selectric/public/selectric.css">
<link rel="stylesheet" href="node_modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
<link rel="stylesheet" href="node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
@endpush

@section('title', 'Edit Vaksin')
@section('appName', 'Website Desa')
@section('content')
<section class="section">
    <div class="section-header">
        <h1>Form Edit UMKM</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{route('vaksin.index')}}">Vaksin</a></div>
            <div class="breadcrumb-item">Form Edit UMKM</div>
        </div>
    </div>

    <div class="section-body">
        {{-- <h2 class="section-title">Advanced Forms</h2>
    <p class="section-lead">We provide advanced input fields, such as date picker, color picker, and so on.</p> --}}

        <div class="row">
            <div class="col-xl-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('vaksin.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="nik">NIK</label>
                                <select id="nik" name="nik" class="form-control" required onchange="getData(this)">
                                    <option disabled selected>--Pilih NIK--</option>
                                    @foreach ($penduduk as $item)
                                    <option value="{{$item->user_id}}">{{$item->nik}} ({{$item->nama}})</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" id="nama" name="nama" class="form-control" disabled>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" id="alamat" name="alamat" class="form-control" disabled>
                            </div>
                            <div class="form-group">
                                <label for="tempatLahir">Bulan</label>
                                <input type="text" id="tempatLahir" name="tempatLahir" class="form-control" disabled>
                            </div>
                            <div class="form-group">
                                <label for="tanggalLahir">Tanggal</label>
                                <input type="text" id="tanggalLahir" name="tanggalLahir" class="form-control" disabled>
                            </div>
                            <div class="form-group">
                                <label for="vaksin">Status Pembayaran</label>
                                <select id="vaksin" name="vaksin" class="form-control" required>
                                    <option>--Pilih Status Pembayaran--</option>
                                    <option value="sudah">Sudah Bayar</option>
                                    <option value="belum">Belum Bayar</option>
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
<script src="{{asset('assets/js/page/forms-advanced-forms.js')}}"></script>
<script>
    function getData(nik) {
        let user_id = nik.value;
        console.log(user_id);
        $.ajax({
            method: 'GET',
            url: '/vaksin/getData/' + user_id,
            cache: false,
            data: {
                _token: "{{csrf_token()}}"
            },
            success: function(result) {
                console.log(result);
                $('#nama').val(result['nama']);
                $('#alamat').val(result['alamat']);
                $('#tempatLahir').val(result['tptLahir']);
                $('#tanggalLahir').val(result['tglLahir']);
                $('#jenisKelamin').val(result['kelamin']);
            }
        });
    }
</script>
@endpush