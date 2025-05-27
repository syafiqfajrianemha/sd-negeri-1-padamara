@extends('layouts.guest')

@section('title', 'Sejarah')

@section('content')
<div class="page-title" data-aos="fade">
    <div class="container d-lg-flex justify-content-center align-items-center">
        <h1 class="mb-2 mb-lg-0">Sejarah</h1>
    </div>
</div>

<section class="services section">
    <div class="container">
        <div class="row gy-4 text-center">
            @forelse ($sejarah as $item)
                <span>
                    {!! nl2br($item->isi) !!}
                </span>
            @empty
                <p class="text-center text-danger">Belum Ada Sejarah.</p>
            @endforelse
        </div>
    </div>
</section>
@endsection
