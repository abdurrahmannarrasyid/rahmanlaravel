{{-- Abdurrahman Arrasyid - 41523010175 --}}

@extends('layouts.app')
@section('title', 'Artikel - Inaklug')

@section('content')

  {{-- ===== HERO 4 ===== --}}
  <section class="hero4" style="background-image:url('{{ asset('images/artikelhero.jpeg') }}')">
    <div class="hero4__overlay"></div>
    <div class="hero4__inner">
      <div class="hero4__meta">
        <p class="hero4__category">TIPS</p>
        <h1 class="hero4__title">
          Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa
        </h1>
      </div>
    </div>
  </section>

  {{-- ===== ISI ARTIKEL ===== --}}
  <main class="artikel-page">

    {{-- ===== Section Gambar Berdampingan ===== --}}
    <section class="article-subgrid">
      <div class="subgrid-wrap">

        {{-- Kartu pertama --}}
        <a class="subcard" href="#" aria-label="Baca artikel: Cara Mudah Kuliah di Luar Negeri dengan Beasiswa">
          <div class="subcard__image">
            <img
              src="{{ asset('images/korona.png') }}"
              alt="Ilustrasi tupai di batang pohon"
              width="1280" height="800"
              loading="lazy" decoding="async">
          </div>
          <p class="subcard__title">
            Penting! Cara Mudah agar Bisa Kuliah di Luar 
          </p>
          <p class="subcard__title">Negeri dengan Beasiswa</p>
        </a>

        {{-- Kartu kedua --}}
        <a class="subcard" href="#" aria-label="Baca artikel: Cara Mudah Kuliah di Luar Negeri dengan Beasiswa">
          <div class="subcard__image">
            <img
              src="{{ asset('images/htw.png') }}"
              alt="Suasana jalan dengan becak"
              width="1280" height="800"
              loading="lazy" decoding="async">
          </div>
          <p class="subcard__title">
            Penting! Cara Mudah agar Bisa Kuliah di Luar 
          </p>
          <p class="subcard__title">Negeri dengan Beasiswa</p>
        </a>

      </div>
    </section>

    {{-- ===== Artikel Terbaru (list kecil) ===== --}}
    <section class="newarticles-list">
      <div class="newarticles-wrap">

        <h3 class="newarticles-heading">ARTIKEL TERBARU</h3>

        @foreach (range(1, 5) as $i)
          <a href="#" class="newarticles-item" aria-label="Baca artikel terbaru {{ $i }}">
            <div class="newarticles-thumb">
              <img
                src="{{ asset("images/$i.jpg") }}"
                alt="Thumbnail artikel {{ $i }}"
                width="640" height="400"
                loading="lazy" decoding="async">
            </div>
            <div class="newarticles-meta">
              <h4 class="newarticles-title">
                Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa
              </h4>
              <div class="newarticles-date">Selasa, 18 Feb 2020 | 02:01 WIB</div>
            </div>
          </a>
        @endforeach

        {{-- pagination dummy --}}
        <ul class="newarticles-pager" role="navigation" aria-label="Pagination">
          <li><button class="pager-arrow" aria-label="Halaman sebelumnya" disabled>‹</button></li>
          <li><button class="is-active" aria-current="page">1</button></li>
          <li><button>2</button></li>
          <li><button>3</button></li>
          <li><button>4</button></li>
          <li><button>5</button></li>
          <li><button class="pager-arrow" aria-label="Halaman berikutnya">›</button></li>
        </ul>

      </div>
    </section>

  </main>

@endsection
