@extends('layouts.app')
@section('title', 'Edit Pegawai')

@section('content')
<h1 class="h3 mb-2 text-gray-800">Edit Pegawai</h1>
<div class="card shadow mb-4">
    <div class="card-body">
        <form action="{{ route('pegawai.update', $pegawai->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $pegawai->nama }}" required>
            </div>
            <div class="form-group">
                <label for="posisi">Posisi:</label>
                <input type="text" class="form-control" id="posisi" name="posisi" value="{{ $pegawai->posisi }}" required>
            </div>
            <div class="form-group">
                <label for="divisi">Divisi:</label>
                <input type="text" class="form-control" id="divisi" name="divisi" value="{{ $pegawai->divisi }}" required>
            </div>
            <div class="form-group">
                <label for="umur">Umur:</label>
                <input type="number" class="form-control" id="umur" name="umur" value="{{ $pegawai->umur }}" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <textarea class="form-control" id="alamat" name="alamat" required>{{ $pegawai->alamat }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
