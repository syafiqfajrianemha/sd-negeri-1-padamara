@extends('layouts.guest')

@section('title', 'Struktur Organisasi')

@section('content')
<div class="page-title" data-aos="fade">
    <div class="container d-lg-flex justify-content-center align-items-center">
        <h1 class="mb-2 mb-lg-0">Struktur Organisasi</h1>
    </div>
</div>

<section class="services section">
    <div class="container">
        <div class="row gy-4 text-center">
            @forelse ($struktur as $item)
                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ asset('storage/' . $item->foto) }}" alt="Foto" class="img-fluid">
                </div>
            @empty
                <p class="text-center text-danger">Belum Ada Struktur Organisasi.</p>
            @endforelse
        </div>
    </div>
</section>
@endsection
