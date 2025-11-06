{{-- Abdurrahman Arrasyid - 41523010175 --}}

@extends('layouts.app')
@section('title', 'Tentang Kami')
@section('content')
  {{-- Banner --}}
  <section class="about-hero" style="background-image:url('{{ asset('images/studytour.png') }}')">
    <div class="about-hero__overlay">
      <div class="about-hero__inner">
        <h1 class="about-hero__title">TENTANG KAMI</h1>
      </div>
    </div>
  </section>

  {{-- Konten --}}
  <section class="about-main">
    <div class="about-container">
      {{-- frame = kanvas 1006px agar profil, foto, dan CTA punya kiri yang sama --}}
      <div class="about-frame">
        <h2 class="about-title">PROFIL</h2>
        <p class="about-desc">
          Didirikan pada tahun 2018, ini membuktikan bahwa <strong>INAKLUG</strong> merupakan konsultan pendidikan
          internasional yang berpengalaman, terbesar, terpercaya, dan juga memiliki jam terbang tinggi untuk
          melayani para anak-anak muda Indonesia untuk menuntut ilmu di berbagai negara maju di dunia.
        </p>

        {{-- Visi & Misi (84px di bawah paragraf) --}}
        <section class="about-vm">
          <div class="about-vm__grid">
            <article class="about-vm__card">
              <img src="{{ asset('images/visi.png') }}" alt="Visi Inaklug" class="about-vm__img" width="485" height="253">
              <h3 class="about-vm__title">VISI</h3>
              <p class="about-vm__text">
                Membangun Sumber Daya Indonesia yang mempunyai daya saing tinggi, tangguh secara internasional
                untuk menghadapi persaingan di era globalisasi serta membangun karakter pemimpin Indonesia masa
                depan yang tangguh, mandiri, dan profesional.
              </p>
            </article>

            <article class="about-vm__card">
              <img src="{{ asset('images/misi.png') }}" alt="Misi Inaklug" class="about-vm__img" width="485" height="253">
              <h3 class="about-vm__title">MISI</h3>
              <p class="about-vm__text">
                Memfasilitasi siswa Indonesia untuk menempuh pendidikan di berbagai perguruan tinggi di lebih dari
                25 negara maju di dunia dengan layanan yang profesional. Memberikan bantuan konsultasi terhadap
                siswa/i Indonesia dalam mempersiapkan studinya dari berbagai aspek, baik aspek sosial, budaya,
                maupun pendidikan.
              </p>
            </article>
          </div>

          {{-- CTA (100px di bawah grid, kiri sejajar grid) --}}
          <div class="about-vm__cta-wrap">
            <a href="{{ route('services') }}" class="about-vm__cta">LAYANAN KAMI</a>
          </div>
        </section>
      </div>
    </div>
  </section>
@endsection
