@extends('layouts.admin')

@section('title', 'Edit Prestasi')

@section('content')
<h1 class="h3 mb-3 text-gray-800"><a href="{{ route('prestasi.index') }}" class="text-dark"><i class="fas fa-fw fa-arrow-left mr-3"></i></a> Edit Prestasi</h1>

<form action="{{ route('prestasi.update', $prestasi->id) }}" method="POST">
    @csrf
    @method('PATCH')

    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="nama_lomba">Nama Lomba<span class="text-danger">*</span></label>
                <input type="text" class="form-control @error('nama_lomba') is-invalid @enderror" id="nama_lomba" name="nama_lomba" required value="{{ old('nama_lomba', $prestasi->nama_lomba) }}">
                @error('nama_lomba')
                    <div id="nama_lomba" class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="nama_siswa">Nama Siswa<span class="text-danger">*</span></label>
                <input type="text" class="form-control @error('nama_siswa') is-invalid @enderror" id="nama_siswa" name="nama_siswa" required value="{{ old('nama_siswa', $prestasi->nama_siswa) }}">
                @error('nama_siswa')
                    <div id="nama_siswa" class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="juara">Juara<span class="text-danger">*</span></label>
                <input type="text" class="form-control @error('juara') is-invalid @enderror" id="juara" name="juara" required value="{{ old('juara', $prestasi->juara) }}">
                @error('juara')
                    <div id="juara" class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="kelas">Kelas<span class="text-danger">*</span></label>
                <input type="text" class="form-control @error('kelas') is-invalid @enderror" id="kelas" name="kelas" required value="{{ old('kelas', $prestasi->kelas) }}">
                @error('kelas')
                    <div id="kelas" class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-primary mb-5">Update</button>
</form>
@endsection

@push('script')
    <script src="{{ asset('js/imgpreview.js') }}"></script>
@endpush
