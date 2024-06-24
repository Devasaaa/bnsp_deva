<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawai = Pegawai::all(); // Mengambil semua data pegawai
        return view('pegawai', compact('pegawai')); // Mengirim data ke view
    }

    public function create()
    {
        return view('tambah'); // Menampilkan form tambah pegawai
    }

    public function simpan(Request $request)
    {
        $save = Pegawai::create([
            'id' => $request->id,
            'nama' => $request->nama,
            'posisi' => $request->posisi,
            'divisi' => $request->divisi,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
        ]);
        if ($save->exists) {
            return redirect('pegawai');
        }
    }

    public function edit($id)
    {
        $pegawai = Pegawai::findOrFail($id); // Mengambil data pegawai berdasarkan ID
        return view('edit', compact('pegawai')); // Mengirim data ke view
    }

    public function simpanedit(Request $request, $id)
    {
        $pegawai = Pegawai::findOrFail($id);
        $pegawai->update($request->all());
        return redirect('pegawai');
    }

    public function hapus($id)
    {
        $pegawai = Pegawai::findOrFail($id);
        $pegawai->delete();
        return redirect('pegawai');
    }

    public function detail($id)
    {
        $pegawai = Pegawai::findOrFail($id); // Mengambil data pegawai berdasarkan ID
        return view('detail', compact('pegawai')); // Mengirim data ke view
    }
}
