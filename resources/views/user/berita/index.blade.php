@extends('layouts.guest')

@section('title', 'Berita')

@section('content')
<div class="page-title" data-aos="fade">
    <div class="container d-lg-flex justify-content-center align-items-center">
        <h1 class="mb-2 mb-lg-0">Berita</h1>
    </div>
</div>

<section class="team section">
    <div class="container">
        <div class="row gy-4 justify-content-center">
            @forelse ($berita as $item)
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="team-member">
                        <a href="">
                            <div class="member-img">
                                <img src="{{ asset('storage/' . $item->foto) }}" class="img-fluid" alt="Foto">
                            </div>
                        </a>
                        <div class="member-info">
                            <h4>{{ $item->judul }}</h4>
                            {!! nl2br($item->isi) !!}
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center text-danger">Belum Ada Berita.</p>
            @endforelse
        </div>
    </div>
</section>
@endsection
