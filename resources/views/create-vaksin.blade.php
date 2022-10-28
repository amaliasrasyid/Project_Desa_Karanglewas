@extends('layouts.master-1')
@push('plugins_css')
<link rel="stylesheet" href="../node_modules/bootstrap-daterangepicker/daterangepicker.css">
<link rel="stylesheet" href="../node_modules/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
<link rel="stylesheet" href="../node_modules/select2/dist/css/select2.min.css">
<link rel="stylesheet" href="../node_modules/selectric/public/selectric.css">
<link rel="stylesheet" href="../node_modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
<link rel="stylesheet" href="../node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
@endpush

@section('title', 'Input Vaksin')
@section('appName', 'Website Desa')
@section('content')
<section class="section">
  <div class="section-header">
    <h1>Form Tambah Vaksin</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="{{route('vaksin.index')}}">Vaksin</a></div>
      <div class="breadcrumb-item">Form Tambah Vaksin</div>
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
                <label for="tempatLahir">Tempat Lahir</label>
                <input type="text" id="tempatLahir" name="tempatLahir" class="form-control" disabled>
              </div>
              <div class="form-group">
                <label for="tanggalLahir">Tanggal Lahir</label>
                <input type="text" id="tanggalLahir" name="tanggalLahir" class="form-control" disabled>
            </div>
            <div class="form-group">
                <label for="jenisKelamin">Jenis Kelamin</label>
                <input type="text" id="jenisKelamin" name="jenisKelamin" class="form-control" disabled>
              </div>
              <div class="form-group">
                <label for="telepon">Nomor Handphone</label>
                <input type="text" id="telepon" name="telepon" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="penyakit">Riwayat Penyakit</label>
                <select id="penyakit" name="penyakit" class="form-control" required>
                  <option>--Pilih Riwayat Penyakit--</option>
                  <option value="Demam">Demam</option>
                  <option value="Jantung">Jantung</option>
                  <option value="Lupus">Lupus</option>
                  <option value="Positif Covid-19">Positif Covid-19</option>
                  <option value="Alergi Parah Setelah Dosis Pertama">Alergi Parah Setelah Dosis Pertama</option>
                  <option value="Pembekuan Darah">Pembekuan Darah</option>
                  <option value="Darah Tinggi">Darah Tinggi</option>
                  <option value="Kanker">Kanker</option>
                  <option value="HIV">HIV</option>
                  <option value="Ginjal Kronis">Ginjal Kronis</option>
                  <option value="Tidak Ada">Tidak Ada</option>
                </select>
              </div>
              <div class="form-group">
                <label for="vaksin">Status Vaksin</label>
                <select id="vaksin" name="vaksin" class="form-control" required>
                  <option>--Pilih Status Vaksin--</option>
                  <option value="0">Belum Vaksin</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
              </div>
              <button class="btn btn-primary" type="submit">Simpan</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

@push('plugins_js')
<script src="../node_modules/cleave.js/dist/cleave.min.js"></script>
<script src="../node_modules/cleave.js/dist/addons/cleave-phone.us.js"></script>
<script src="../node_modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
<script src="../node_modules/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="../node_modules/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<script src="../node_modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
<script src="../node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
<script src="../node_modules/select2/dist/js/select2.full.min.js"></script>
<script src="../node_modules/selectric/public/jquery.selectric.min.js"></script>
@endpush

@push('page_js')
<script src="../assets/js/page/forms-advanced-forms.js"></script>
<script>
    function getData(nik) {
        let user_id = nik.value;
        console.log(user_id);
        $.ajax({
            method: 'GET',
            url: '/vaksin/getData/'+user_id,
            cache: false,
            data: {
                    _token: "{{csrf_token()}}"
                },
            success: function (result) {
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
