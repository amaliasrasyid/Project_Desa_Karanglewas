@extends('layouts.master')

@section('title', 'Bahan Jadi')
@section('appName', 'Website Desa')
@section('content')
<section class="section">
  <div class="section-header">
    <h1>Produk 1/2 Jadi</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item">Usaha Mikro Kecil Dan Menengah (UMKM)</div>
    </div>
  </div>

  <div class="section-body">
    <h2 class="section-title">Produk UMKM Desa Karanglewas</h2>
    <p class="section-lead">Example of some Bootstrap table components.</p>

    <div class="row">
      <div class="col-12 col-sm-6 col-md-6 col-lg-3">
        <article class="article">
          <div class="article-header">
            <div class="article-image" data-background="../assets/img/news/img08.jpg">
            </div>
          </div>
          <div class="article-details">
            <p>Ayam Gepuk Pak Gembus</p>
            <p>RT 02/ RW 12, Dekat kantor pos</p>
            <p>Rp. 15.000.-</p>
            <div class="article-cta">
              <a href="#" class="btn btn-primary">Beli</a>
            </div>
          </div>
        </article>
      </div>
      <div class="col-12 col-sm-6 col-md-6 col-lg-3">
        <article class="article">
          <div class="article-header">
            <div class="article-image" data-background="../assets/img/news/img04.jpg">
            </div>
          </div>
          <div class="article-details">
          <p>Ayam Gepuk Pak Gembus</p>
            <p>RT 02/ RW 12, Dekat kantor pos</p>
            <p>Rp. 15.000.-</p>
            <div class="article-cta">
              <a href="#" class="btn btn-primary">Beli</a>
            </div>
          </div>
        </article>
      </div>
      <div class="col-12 col-sm-6 col-md-6 col-lg-3">
        <article class="article">
          <div class="article-header">
            <div class="article-image" data-background="../assets/img/news/img09.jpg">
            </div>
          </div>
          <div class="article-details">
          <p>Ayam Gepuk Pak Gembus</p>
            <p>RT 02/ RW 12, Dekat kantor pos</p>
            <p>Rp. 15.000.-</p>
            <div class="article-cta">
              <a href="#" class="btn btn-primary">Beli</a>
            </div>
          </div>
        </article>
      </div>
      <div class="col-12 col-sm-6 col-md-6 col-lg-3">
        <article class="article">
          <div class="article-header">
            <div class="article-image" data-background="../assets/img/news/img12.jpg">
            </div>
          </div>
          <div class="article-details">
          <p>Ayam Gepuk Pak Gembus</p>
            <p>RT 02/ RW 12, Dekat kantor pos</p>
            <p>Rp. 15.000.-</p>
            <div class="article-cta">
              <a href="#" class="btn btn-primary">Beli</a>
            </div>
          </div>
        </article>
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