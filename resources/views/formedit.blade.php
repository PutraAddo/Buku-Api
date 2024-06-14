@extends('layouts.main')

@section('title', 'Edit Buku')

@section('konten')
<div class="container mt-4">
    <h1>Edit Buku</h1>
    <form action="/buku/update/{{ $ts->id }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" value="{{ $ts->judul }}" required>
        </div>
        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="text" class="form-control" id="harga" name="harga" value="{{ $ts->harga }}" required>
        </div>
        <div class="form-group">
            <label for="penulis">Penulis</label>
            <input type="text" class="form-control" id="penulis" name="penulis" value="{{ $ts->penulis }}" required>
        </div>
        <div class="form-group">
            <label for="gambar">Gambar</label>
            <input type="file" class="form-control" id="gambar" name="gambar">
            <small class="form-text text-muted">Leave blank to keep the current image.</small>
        </div>
        <button type="submit" class="btn btn-primary"><i class="bi bi-save-fill"></i> Save</button>
    </form>
</div>
@endsection
