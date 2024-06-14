@extends('layouts.main')

@section('title', 'Buku')

@section('konten')
<div class="container mt-4">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h2>Daftar Buku</h2>
            <a href="/buku/formadd" class="btn btn-primary"><i class="bi bi-plus-square-fill"></i> Add Buku </a>
        </div>
        <div class="card-body">
            @if (session('alert'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>{{ session('alert') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Judul</th>
                        <th>Harga</th>
                        <th>Penulis</th>    
                        <th>Gambar</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($et as $idx => $m)
                    <tr>
                        <td>{{ $idx + 1 }}</td>
                        <td>{{ $m->judul }}</td>
                        <td>{{ $m->harga }}</td>
                        <td>{{ $m->penulis }}</td>
                        <td>
                            <img src="{{ asset('storage/' . $m->gambar) }}" alt="{{ $m->judul }}" class="img-thumbnail" height="80" width="80">
                        </td>
                        <td>
                            <a href="/buku/edit/{{ $m->id }}" class="btn btn-primary"><i class="bi bi-pencil-square"></i> Edit</a>
                            <a href="/buku/delete/{{ $m->id }}" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="bi bi-trash"></i> Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
@endsection
