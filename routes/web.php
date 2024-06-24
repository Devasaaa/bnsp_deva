<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

// Rute untuk halaman utama
Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

// Rute untuk halaman home atau dashboard
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

// Rute untuk halaman pegawai
Route::get('/pegawai', [PegawaiController::class, 'index'])->name('pegawai');
Route::get('/pegawai/tambah', [PegawaiController::class, 'create'])->name('pegawai.tambah');
Route::post('/pegawai/simpan', [PegawaiController::class, 'simpan'])->name('pegawai.simpan');
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit'])->name('pegawai.edit');
Route::put('/pegawai/update/{id}', [PegawaiController::class, 'simpanedit'])->name('pegawai.update');
Route::get('/pegawai/delete/{id}', [PegawaiController::class, 'hapus'])->name('pegawai.delete');
Route::get('/pegawai/detail/{id}', [PegawaiController::class, 'detail'])->name('pegawai.detail');

// Rute untuk halaman register
// Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
// Route::post('/register', [RegisterController::class, 'register']);

// Rute untuk halaman login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
