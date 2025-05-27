@extends('layouts.admin')

@section('title', 'Edit Sejarah')

@push('style')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endpush

@section('content')
<h1 class="h3 mb-3 text-gray-800"><a href="{{ route('sejarah.index') }}" class="text-dark"><i class="fas fa-fw fa-arrow-left mr-3"></i></a> Edit Sejarah</h1>

<form action="{{ route('sejarah.update', $sejarah->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')

    <div class="row mt-3">
        <div class="col">
            <div class="form-group">
                <label for="summernote">Isi<span class="text-danger">*</span></label>
                <textarea name="isi" id="summernote" rows="5" class="form-control @error('isi') is-invalid @enderror" required>{{ old('isi', $sejarah->isi) }}</textarea>
                @error('isi')
                    <div class="invalid-feedback">
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
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $('#summernote').summernote({
            height: 300
        });
    </script>
    <script src="{{ asset('js/imgpreview.js') }}"></script>
@endpush
