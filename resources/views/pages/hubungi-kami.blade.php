{{-- Abdurrahman Arrasyid - 41523010175 --}}

@extends('layouts.app')
@section('title', 'Hubungi Kami')

@section('content')
  {{-- ===== HERO 5 ===== --}}
  <section class="hero5" style="background-image:url('{{ asset('images/becak.png') }}')">
    <div class="hero5__overlay"></div>
    <div class="hero5__inner">
      <h1 class="hero5__title">HUBUNGI KAMI</h1>
    </div>
  </section>

  {{-- ===== FORMULIR ===== --}}
  <section class="contact-page">
    <div class="contact-wrap">

      <div class="contact-info">
        <h3 class="cf-title">KIRIM PESAN</h3>
        <p>Silakan isi formulir berikut, tim kami akan segera menghubungi Anda.</p>
      </div>

      <form class="contact-form contact-form--flat" method="POST" action="{{ route('contact.submit') }}">
        @csrf

        @if(session('ok'))
          <div class="alert ok">{{ session('ok') }}</div>
        @endif
        @error('recaptcha')
          <div class="alert err">{{ $message }}</div>
        @enderror

        <div class="grid">
          <label class="field">
            <span>Nama*</span>
            <input type="text" name="name" value="{{ old('name') }}" placeholder="Nama lengkap Anda" required>
            @error('name') <small class="err">{{ $message }}</small> @enderror
          </label>

          <label class="field">
            <span>E-Mail*</span>
            <input type="email" name="email" value="{{ old('email') }}" placeholder="Alamat E-mail Anda" required>
            @error('email') <small class="err">{{ $message }}</small> @enderror
          </label>

          <label class="field">
            <span>Perusahaan / Organisasi</span>
            <input type="text" name="company" value="{{ old('company') }}" placeholder="Nama Perusahaan / Organisasi">
            @error('company') <small class="err">{{ $message }}</small> @enderror
          </label>

          <label class="field">
            <span>Telepon</span>
            <input type="text" name="phone" value="{{ old('phone') }}" placeholder="Nomor telepon Anda">
            @error('phone') <small class="err">{{ $message }}</small> @enderror
          </label>

          <label class="field field--full">
            <span>Isi Pesan*</span>
            <textarea name="message" rows="6" placeholder="Isi pesan Anda ..." required>{{ old('message') }}</textarea>
            @error('message') <small class="err">{{ $message }}</small> @enderror
          </label>
        </div>

        <div class="form-actions">
          <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.sitekey') }}"></div>
          <button type="submit" class="btn-outline-gradient">KIRIM PESAN</button>
        </div>
      </form>

    </div>
  </section>

  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endsection
