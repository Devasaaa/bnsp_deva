@extends('layouts.app')
@section('title', 'Tambah Pegawai')

@section('content')
<h1 class="h3 mb-2 text-gray-800">Tambah Pegawai</h1>
<div class="card shadow mb-4">
    <div class="card-body">
        <form action="{{ route('pegawai.simpan') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="posisi">Posisi:</label>
                <input type="text" class="form-control" id="posisi" name="posisi" required>
            </div>
            <div class="form-group">
                <label for="divisi">Divisi:</label>
                <input type="text" class="form-control" id="divisi" name="divisi" required>
            </div>
            <div class="form-group">
                <label for="umur">Umur:</label>
                <input type="number" class="form-control" id="umur" name="umur" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <textarea class="form-control" id="alamat" name="alamat" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>
@endsection
