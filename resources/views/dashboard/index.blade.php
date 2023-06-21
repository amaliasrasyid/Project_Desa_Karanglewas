{{-- manggil file tampilan master ng folder layout --}}
@extends('layouts.master')

{{-- push plugin_css page ming tampilan layout master --}}
@push('plugins_css')
    <link rel="stylesheet" href="node_modules/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="node_modules/summernote/dist/summernote-bs4.css">
    <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">
@endpush

{{-- send nama page --}}
@section('title', 'Dashboard')
{{-- send nama aplikasi --}}
@section('appName', 'Website Desa')
{{-- send tampilan dashboard --}}
@section('content')
    {{-- tampilan global --}}
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
                            {{ $penduduk }}
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
                            {{ $laki }}
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
                            <h4>Perempuan</h4>
                        </div>
                        <div class="card-body">
                            {{ $perempuan }}
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
                            {{ $vaksin }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- tampilan nggo user --}}
        @if (Auth::user()->role == 'user')
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
                                    <img alt="image" src="../assets/img/avatar/avatar-1.png"
                                        class="rounded-circle author-box-picture">
                                </div>
                                <div class="author-box-details">
                                    <div class="author-box-name">
                                        {{ $data->nama }}
                                    </div>
                                    <div class="author-box-job">{{ $data->nik }}</div>
                                    <div class="author-box-description">
                                        <table class="table table-striped">
                                            <tr>
                                                <th>Tanggal Lahir</th>
                                                <td>{{ $data->tglLahir }}</td>
                                            </tr>
                                            <tr>
                                                <th>Alamat</th>
                                                <td>{{ $data->alamat }}</td>
                                            </tr>
                                            <tr>
                                                <th>Pengguna Pamsimas</th>
                                                <td>{{ $data->pam }}</td>
                                            </tr>
                                            <tr>
                                                <th>Status Vaksin</th>
                                                @if ($data->vaksin == 0)
                                                    <td class="text-danger">Belum Vaksin</td>
                                                @elseif ($data->vaksin >= 1)
                                                    <td class="text-success">Sudah Vaksin</td>
                                                @endif
                                            </tr>
                                            <tr>
                                                <th>Status Bantuan PKH</th>
                                                @if ($data->pkh->penerimaan == 'sudah')
                                                    <td class="text-success">
                                                        Sudah Menerima di Tanggal  {{ $data->pkh->tgl_penerimaan }}
                                                    </td>
                                                @else
                                                    <td onclick="terima({{ $data->id }})"
                                                        class="text-danger">
                                                        Belum Menerima
                                                    </td>
                                                @endif
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        @endif

        {{-- tampilan nggo admin --}}
        @if (Auth::user()->role == 'admin')
            <div class="row">
                <div class="col-12 col-sm-12 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Informasi Vaksin</h4>
                            <div class="card-header-action">
                                <a href="{{ route('vaksin.index') }}" class="btn btn-primary">View More <i
                                        class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                        <div class="card-body" style="height:375px;overflow-y:scroll">
                            <div class="list-unstyled list-unstyled-border">
                                <table class="table table-striped" style="width:32rem">
                                    <tr>
                                        <th>Nama</th>
                                        <th>Status</th>
                                        <th>Riwayat Penyakit</th>
                                    </tr>
                                    {{-- nampilna data vaksin --}}
                                    @forelse ($dataVaksin as $item)
                                        <tr>
                                            <td class="font-weight-600">{{ $item->nama }}</td>
                                            <td>
                                                @if ($item->vaksin == 0)
                                                    <div class="badge badge-danger">Belum</div>
                                                @elseif ($item->vaksin >= 1)
                                                    <div class="badge badge-success">Sudah</div>
                                                @endif
                                            </td>
                                            <td>{{ $item->penyakit }}</td>
                                        </tr>
                                        {{-- nek data vaksin urung ana --}}
                                    @empty
                                        <tr class="text-danger">
                                            Data Belum Tersedia
                                        </tr>
                                    @endforelse
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        @endif
        @if (Auth::user()->role == 'admin')
        <div class="col-12 col-sm-12 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="d-inline">Informasi PKH</h4>
                    {{-- nampilna tombol view more nggo admin --}}
                    @if (Auth::user()->role == 'admin')
                        <div class="card-header-action">
                            <a href="{{ route('pkh.index') }}" class="btn btn-primary">View More <i
                                    class="fas fa-chevron-right"></i></a>
                        </div>
                    @endif
                </div>
                <div class="card-body" style="height:375px;overflow-y:scroll">
                    <div class="list-unstyled list-unstyled-border">
                        <table class="table table-striped" style="width:32rem">
                            <tr>
                                <th>Nama</th>
                                <th>Status Penerimaan Bantuan</th>
                            </tr>
                            {{-- display data pkh--}}
                            
                            @forelse ($pkh as $item)
                                <tr>
                                    <td class="font-weight-600">{{ $item->nama }}</td>
                                    <td>
                                        @if ($item->penerimaan == 'sudah')
                                            <div class="badge badge-pill badge-success mb-1">
                                                Sudah Menerima
                                            </div>
                                        @else
                                        <div class="badge badge-pill badge-danger mb-1">
                                            Belum Menerima
                                        </div>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                            <tr>
                                <th class="text-danger">Data Belum Tersedia</th>
                            </tr>
                            @endforelse
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @endif
        
        @if (Auth::user()->role == 'admin')
            <div class="col-12 col-sm-12 col-lg-12">
        @else
            <div class="col-12 col-sm-12 col-lg-6">
        @endif
            <div class="card">
                <div class="card-header">
                    <h4 class="d-inline">Riwayat Pembayaran Pamsimas</h4>
                    {{-- nampilna tombol view more nggo admin --}}
                    @if (Auth::user()->role == 'admin')
                        <div class="card-header-action">
                            <a href="{{ route('pamsimas.index') }}" class="btn btn-primary">View More <i
                                    class="fas fa-chevron-right"></i></a>
                        </div>
                    @endif
                </div>
                <div class="card-body" style="height:375px;overflow-y:scroll">
                    <ul class="list-unstyled list-unstyled-border">
                        {{-- nampilna data pamsimas global --}}
                        @forelse ($dataPamsimas as $item)
                            <li class="media">
                                <div class="media-body">
                                    @if ($item->status == 'Sudah Bayar')
                                        <div class="badge badge-pill badge-success mb-1 float-right">Bayar</div>
                                    @else
                                        <div class="badge badge-pill badge-danger mb-1 float-right">Belum</div>
                                    @endif
                                    <h6 class="media-title">{{ $item->nama }}</h6>
                                    <div class="text-small text-muted"> {{ $item->tanggal }} <div class="bullet"></div>
                                        {{ $item->bulan }}
                                    </div>
                                </div>
                            </li>
                            {{-- nek data pamsimas urung ana --}}
                        @empty
                            <li>
                                <h1 class="text-danger">Data Belum Tersedia</h1>
                            </li>
                        @endforelse
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
                                <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel
                                    metus scelerisque ante sollicitudin.</span>
                            </div>
                        </li>
                        <li class="media">
                            <img class="mr-3" width="80" src="../assets/img/news/img04.jpg" alt="avatar">
                            <div class="media-body">
                                <div class="float-right">12m</div>
                                <div class="media-title">Tanah Longsor</div>
                                <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel
                                    metus scelerisque ante sollicitudin.</span>
                            </div>
                        </li>
                        <li class="media">
                            <img class="mr-3" width="80" src="../assets/img/news/img09.jpg" alt="avatar">
                            <div class="media-body">
                                <div class="float-right">17m</div>
                                <div class="media-title">Gempa Bumi</div>
                                <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel
                                    metus scelerisque ante sollicitudin.</span>
                            </div>
                        </li>
                        <li class="media">
                            <img class="mr-3" width="80" src="../assets/img/news/img12.jpg" alt="avatar">
                            <div class="media-body">
                                <div class="float-right">Tsunami</div>
                                <div class="media-title">Alfa Zulkarnain</div>
                                <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel
                                    metus scelerisque ante sollicitudin.</span>
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
    <script src="node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="node_modules/chart.js/dist/Chart.min.js"></script>
    <script src="node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="node_modules/summernote/dist/summernote-bs4.js"></script>
    <script src="node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
@endpush

@push('page_js')
    <script src="{{ asset('assets/js/page/index.js') }}"></script>
@endpush
