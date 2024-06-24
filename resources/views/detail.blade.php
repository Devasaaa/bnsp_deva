@extends('layouts.app')
@section('title', 'Detail Pegawai')

@section('content')
<h1 class="h3 mb-2 text-gray-800">Detail Pegawai</h1>
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $pegawai->nama }}" readonly>
        </div>
        <div class="form-group">
            <label for="posisi">Posisi:</label>
            <input type="text" class="form-control" id="posisi" name="posisi" value="{{ $pegawai->posisi }}" readonly>
        </div>
        <div class="form-group">
            <label for="divisi">Divisi:</label>
            <input type="text" class="form-control" id="divisi" name="divisi" value="{{ $pegawai->divisi }}" readonly>
        </div>
        <div class="form-group">
            <label for="umur">Umur:</label>
            <input type="number" class="form-control" id="umur" name="umur" value="{{ $pegawai->umur }}" readonly>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <textarea class="form-control" id="alamat" name="alamat" readonly>{{ $pegawai->alamat }}</textarea>
        </div>
        <a href="{{ route('pegawai') }}" class="btn btn-secondary">Kembali</a>
    </div>
</div>
@endsection
