@extends('layouts.guest')

@section('title', 'Prestasi')

@section('content')
<div class="page-title" data-aos="fade">
    <div class="container d-lg-flex justify-content-center align-items-center">
        <h1 class="mb-2 mb-lg-0">Prestasi</h1>
    </div>
</div>

<section class="team section">
    <div class="container">
        <div class="row gy-4">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Lomba</th>
                        <th scope="col">Nama Siswa</th>
                        <th scope="col">Juara</th>
                        <th scope="col">Kelas</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($prestasi as $item)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $item->nama_lomba }}</td>
                            <td>{{ $item->nama_siswa }}</td>
                            <td>{{ $item->juara }}</td>
                            <td>{{ $item->kelas }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-danger text-center">Belum Ada Prestasi.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
