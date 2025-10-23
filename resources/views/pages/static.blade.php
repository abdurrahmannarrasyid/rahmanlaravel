@extends('layouts.app')
@section('title', $title ?? 'Halaman')
@section('content')
  <section class="page">
    <h2>{{ $title ?? 'Halaman' }}</h2>
    <p>Ini contoh halaman statis.</p>
  </section>
@endsection
