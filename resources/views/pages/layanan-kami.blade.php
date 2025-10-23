@extends('layouts.app')
@section('title', 'Layanan Kami')
@section('content')

  {{-- ===== Banner (500px + overlay sama persis) ===== --}}
  <section class="svc-hero" style="background-image:url('{{ asset('images/gatescambride.png') }}')">
    <div class="svc-hero__overlay">
      <div class="svc-hero__inner">
        <h1 class="svc-hero__title">LAYANAN KAMI</h1>
      </div>
    </div>
  </section>

  {{-- ===== Grid 6 Kartu ===== --}}
  <section class="svc-main">
    <div class="svc-container">
      <div class="svc-grid">
        {{-- 1 --}}
        <a href="#" class="svc-card" style="--img: url('{{ asset('images/bachelor.png') }}')">
          <div class="svc-card__stripe"></div>
          <div class="svc-card__overlay"></div>
          <h3 class="svc-card__title">Studi S1 - Bachelor</h3>
        </a>

        {{-- 2 --}}
        <a href="#" class="svc-card" style="--img: url('{{ asset('images/master.png') }}')">
          <div class="svc-card__stripe"></div>
          <div class="svc-card__overlay"></div>
          <h3 class="svc-card__title">Studi S2 - Master</h3>
        </a>

        {{-- 3 --}}
        <a href="#" class="svc-card" style="--img: url('{{ asset('images/phd.jpg') }}')">
          <div class="svc-card__stripe"></div>
          <div class="svc-card__overlay"></div>
          <h3 class="svc-card__title">Kursus Bahasa Asing</h3>
        </a>

        {{-- 4 --}}
        <a href="#" class="svc-card" style="--img: url('{{ asset('images/kursus.png') }}')">
          <div class="svc-card__stripe"></div>
          <div class="svc-card__overlay"></div>
          <h3 class="svc-card__title">Studi S3 - Ph.D</h3>
        </a>

        {{-- 5 --}}
        <a href="#" class="svc-card" style="--img: url('{{ asset('images/studytour.png') }}')">
          <div class="svc-card__stripe"></div>
          <div class="svc-card__overlay"></div>
          <h3 class="svc-card__title">Study Tour</h3>
        </a>

        {{-- 6 --}}
        <a href="#" class="svc-card" style="--img: url('{{ asset('images/ausbildung.jpg') }}')">
          <div class="svc-card__stripe"></div>
          <div class="svc-card__overlay"></div>
          <h3 class="svc-card__title">Ausbildung</h3>
        </a>
      </div>
    </div>
  </section>

@endsection
