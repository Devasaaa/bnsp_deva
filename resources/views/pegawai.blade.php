@extends('layouts.app')
@section('title','Data Pegawai')

@section('content')
    <h1 class="h3 mb-2 text-gray-800">Daftar Pegawai</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3" style="display: flex; justify-content: space-between; align-items: center;">
            <h6 class="m-0 font-weight-bold text-primary">Table Pegawai</h6>
            <a href="{{ route('pegawai.tambah') }}" class="btn btn-success btn-sm">Tambah</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Posisi</th>
                            <th>Divisi</th>
                            <th>Umur</th>
                            <th>Alamat</th>
                            <th>Menu</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pegawai as $p)
                        <tr>
                            <td>{{ $p->nama }}</td>
                            <td>{{ $p->posisi }}</td>
                            <td>{{ $p->divisi }}</td>
                            <td>{{ $p->umur }}</td>
                            <td>{{ $p->alamat }}</td>
                            <td style="width: 200px"> 
                            <a href="{{ route('pegawai.detail', $p->id) }}" class="btn btn-info btn-sm">Detail</a>
                                <a href='{{ route("pegawai.edit", $p->id) }}' class="btn btn-primary btn-sm">Edit</a>
                                <a href='{{ route("pegawai.delete", $p->id) }}' class="btn btn-danger btn-sm delete-btn">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
