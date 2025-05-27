@extends('layouts.guest')

@section('title', 'Visi dan Misi')

@section('content')
<div class="page-title" data-aos="fade">
    <div class="container d-lg-flex justify-content-center align-items-center">
        <h1 class="mb-2 mb-lg-0">Visi dan Misi</h1>
    </div>
</div>

<section class="services section">
    <div class="container">
        <div class="row gy-4">
            @forelse ($visimisi as $item)
                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-activity"></i>
                        </div>
                        <a href="" class="stretched-link">
                            <h3>Visi</h3>
                        </a>
                        {!! nl2br($item->visi) !!}
                    </div>
                </div>
                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-activity"></i>
                        </div>
                        <a href="" class="stretched-link">
                            <h3>Misi</h3>
                        </a>
                        {!! nl2br($item->misi) !!}
                    </div>
                </div>
            @empty
                <p class="text-center text-danger">Belum Ada Visi Misi.</p>
            @endforelse
        </div>
    </div>
</section>
@endsection
