@extends('layouts.main')

@section('title', 'Add Buku')

@section('konten')
<div class="container mt-4">
    <h1>Add New Buku</h1>
    <form action="/save" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" required>
        </div>
        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="text" class="form-control" id="harga" name="harga" required>
        </div>
        <div class="form-group">
            <label for="penulis">Penulis</label>
            <input type="text" class="form-control" id="penulis" name="penulis" required>
        </div>
        <div class="form-group">
            <label for="gambar">Gambar</label>
            <input type="file" class="form-control" id="gambar" name="gambar" required>
        </div>
        <button type="submit" class="bi bi-plus-square-fill"> Save </button>
    </form>
</div>
@endsection
