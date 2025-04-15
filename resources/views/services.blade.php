@extends('layouts.app')

@section('title', 'Our Services')
@section('content')
<div class="position-relative" style="max-height: 300px; overflow: hidden; padding-top: 2rem;">
    <img src="{{ asset('images/bukber.JPG') }}" 
         class="img-fluid w-100" 
         alt="Foto Bukber" 
         style="height: 300px; object-fit: cover;">

    <div class="position-absolute top-50 start-50 translate-middle text-white text-center px-3" style="background-color: rgb(255, 198, 10); border-radius: 10px; opacity: 0.8;">
        <h2 style="font-size: 1.8rem; color: #3490dc">Join HM Course Now!</h2>
    </div>
</div>
<<div class="d-grid gap-2" style="padding-top: 1rem">
  <a href="https://bit.ly/FORMPENDAFTARANSISWABARU2024-2025" target="_blank" class="btn btn-primary">
    Daftar Disini
  </a>
</div>
@endsection