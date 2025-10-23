@extends('layouts.app')
@section('title', 'Beranda')

@section('content')
<section class="hero" style="background-image:url('{{ asset('images/picgedung.png') }}')">
  <div class="hero-inner">
    <div class="hero-banner">
      <div class="hero-text">
        INGIN KULIAH DAN BERKARIR<br>DI LUAR NEGERI?
      </div>
      <a href="#" class="hero-btn">SELENGKAPNYA ▾</a>
    </div>
  </div>
</section>

{{-- ===== Tentang Kami ===== --}}
<section class="about">
  <div class="about-container">
    <h2>TENTANG KAMI</h2>
    <p>
      INAKLUG adalah Konsultan Pendidikan Internasional di Indonesia yang sudah memberangkatkan lebih dari 3000 mahasiswa Indonesia yang ingin kuliah, perjalanan wisata dan berkarir di negara maju di dunia.
    </p>
  </div>
</section>

{{-- ===== Layanan Kami ===== --}}
<section class="services">
  <div class="services-wrap">
    <h2>LAYANAN KAMI</h2>

    <div class="services-grid">
      {{-- 1 --}}
      <a href="#" class="service-card" style="--bg:url('{{ asset('images/bachelor.png') }}')">
        <span class="service-title">Studi S1 - Bachelor</span>
      </a>

      {{-- 2 --}}
      <a href="#" class="service-card" style="--bg:url('{{ asset('images/master.png') }}')">
        <span class="service-title">Studi S2 - Master</span>
      </a>

      {{-- 3 --}}
      <a href="#" class="service-card" style="--bg:url('{{ asset('images/phd.jpg') }}')">
        <span class="service-title">Studi S3 - Ph.D</span>
      </a>

      {{-- 4 --}}
      <a href="#" class="service-card" style="--bg:url('{{ asset('images/kursus.png') }}')">
        <span class="service-title">Kursus Bahasa Asing</span>
      </a>

      {{-- 5 --}}
      <a href="#" class="service-card" style="--bg:url('{{ asset('images/studytour.png') }}')">
        <span class="service-title">Study Tour</span>
      </a>

      {{-- 6 --}}
      <a href="#" class="service-card" style="--bg:url('{{ asset('images/ausbildung.jpg') }}')">
        <span class="service-title">Ausbildung</span>
      </a>
    </div>
  </div>
</section>

<div class="section-sep"></div>

{{-- ===== Mitra Kami ===== --}}
<section class="partners">
  <div class="partners-wrap">
    <h2>MITRA KAMI</h2>

    <div class="partners-grid">
      {{-- ganti src sesuai file logo Anda --}}
      <div class="partner-card">
        <img src="{{ asset('images/aviation.jpg') }}" alt="424 Aviation">
      </div>
      <div class="partner-card">
        <img src="{{ asset('images/adrew.png') }}" alt="St. Andrew’s College">
      </div>
      <div class="partner-card">
        <img src="{{ asset('images/htw.png') }}" alt="HTW Berlin">
      </div>
      <div class="partner-card">
        <img src="{{ asset('images/studygroup.png') }}" alt="StudyGroup">
      </div>
    </div>

    {{-- CTA banner --}}
    <div class="partners-cta">
      <div class="cta-copy">
        <div class="cta-title">GRATIS KONSELING STUDI DI LUAR NEGERI !!!</div>
        <div class="cta-sub">Konsultasi seputar kuliah / bekerja di Luar Negeri</div>
      </div>
      <a href="#" class="cta-action">MULAI KONSULTASI <span>▾</span></a>
    </div>
  </div>
</section>

{{-- ===== Artikel Terbaru ===== --}}
<section class="articles">
  <div class="articles-wrap">
    <h2>ARTIKEL TERBARU</h2>

    <div class="articles-grid">
      {{-- Card 1 --}}
      <a href="#" class="article-card">
        <div class="article-thumb"
             style="--img:url('{{ asset('images/studijerman.png') }}')"></div>
        <h3 class="article-title">5 Fakta yang Harus Kamu Ketahui Sebelum Studi ke Jerman</h3>
      </a>

      {{-- Card 2 --}}
      <a href="#" class="article-card">
        <div class="article-thumb"
             style="--img:url('{{ asset('images/korona.png') }}')"></div>
        <h3 class="article-title">Uni Eropa Menghadapi Virus Korona</h3>
      </a>

      {{-- Card 3 --}}
      <a href="#" class="article-card">
        <div class="article-thumb"
             style="--img:url('{{ asset('images/bahasajerman.png') }}')"></div>
        <h3 class="article-title">Belajar Bahasa Jerman Bersama Goethe Insitut</h3>
      </a>

      {{-- Card 4 --}}
      <a href="#" class="article-card">
        <div class="article-thumb"
             style="--img:url('{{ asset('images/gatescambride.png') }}')"></div>
        <h3 class="article-title">Apa itu Gates Cambridge? Yuk Cari Tahu</h3>
      </a>
    </div>

    <a href="#" class="articles-more">LAINNYA</a>
  </div>
</section>
@endsection
