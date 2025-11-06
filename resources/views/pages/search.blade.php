{{-- Abdurrahman Arrasyid - 41523010175 --}}

@extends('layouts.app')
@section('title', 'Pencarian')
@section('content')
  <section class="page">
    <h2>Hasil Pencarian</h2>
    <p>Kata kunci: <strong>{{ $q }}</strong></p>
  </section>
@endsection
