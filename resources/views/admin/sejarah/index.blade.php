@extends('layouts.admin')

@section('title', 'Sejarah')

@push('style')
    <link href="{{ asset('sb-admin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush

@section('content')
<div id="flash-data" data-flashdata="{{ session('message') }}"></div>

<h1 class="h3 mb-3 text-gray-800">Sejarah</h1>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="{{ route('sejarah.create') }}" class="btn btn-primary @if ($sejarah->count() >= 1) disabled @endif">Tambah</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Isi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sejarah as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{!! nl2br($item->isi) !!}</td>
                            <td>
                                <a href="{{ route('sejarah.edit', $item->id) }}" class="btn btn-success btn-sm mb-1">Edit</a>

                                <form action="{{ route('sejarah.destroy', $item->id) }}" method="POST" class="d-inline form-delete">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm mb-1">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('script')
    <script src="{{ asset('sb-admin/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('sb-admin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('sb-admin/js/datatables.js') }}"></script>
    <script src="{{ asset('js/sweetalert2@10.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
@endpush
