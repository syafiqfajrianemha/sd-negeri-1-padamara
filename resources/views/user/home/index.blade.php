@extends('layouts.guest')

@section('title', 'Home')

@section('content')
<section class="hero section light-background">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
                <h1>Selamat Datang di <span>SD Negeri 1 Padamara</span></h1>
                <p>Slogan</p>
            </div>
        </div>
    </div>
</section>

<section class="about section">
    <div class="container section-title" data-aos="fade-up">
        <p><span>Sambutan</span> <span class="description-title">Kepala Sekolah</span></p>
    </div>

    <div class="container">
        <div class="row gy-3">
            @forelse ($sambutan as $item)
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ asset('storage/' . $item->foto) }}" alt="Foto" class="img-fluid">
                </div>

                <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="about-content ps-0 ps-lg-3" style="text-align: justify;">
                        {!! nl2br($item->isi) !!}
                    </div>
                </div>
            @empty
                <p class="text-center text-danger">Belum Ada Sambutan.</p>
            @endforelse
        </div>
    </div>
</section>

<section class="team section light-background">
    <div class="container section-title" data-aos="fade-up">
        <p><span>Berita</span> <span class="description-title">Terbaru</span></p>
    </div>

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

<section class="contact section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4 align-items-center">
            <div class="col-lg-7">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.751641220722!2d109.31829959999999!3d-7.3817063!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6558e601d25841%3A0xff97c956819c1dcb!2sSD%20Negeri%201%20Padamara!5e0!3m2!1sid!2sid!4v1748212956897!5m2!1sid!2sid"
                    frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="col-lg-5">
                <div class="info-wrap">
                    <div class="info-item d-flex mb-0" data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h3>Jl. Raya Padamara No.24</h3>
                            <p>Kec. Padamara, Kabupaten Purbalingga, Jawa Tengah 53372</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
