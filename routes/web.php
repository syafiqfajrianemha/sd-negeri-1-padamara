<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EkskulController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManajemenAkunController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\SambutanKepalaSekolahController;
use App\Http\Controllers\StrukturOrganisasiController;
use App\Http\Controllers\VisiMisiController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.check');

Route::get('/visi-dan-misi', [ProfilController::class, 'visimisi'])->name('guest.tentang-kami.visi-dan-misi');
Route::get('/struktur-organisasi', [ProfilController::class, 'strukturorganisasi'])->name('guest.tentang-kami.struktur-organisasi');

Route::get('/ekstrakulikuler', [EkskulController::class, 'guest'])->name('guest.ekskul');

Route::get('/prestasi', [PrestasiController::class, 'guest'])->name('guest.prestasi');
Route::get('/prestasi/detail/{id}', [PrestasiController::class, 'show'])->name('guest.prestasi.detail');

Route::get('/berita', [BeritaController::class, 'guest'])->name('guest.berita');
Route::get('/berita/detail/{id}', [BeritaController::class, 'show'])->name('guest.berita.detail');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::resource('/admin/sambutan-kepala-sekolah', SambutanKepalaSekolahController::class);
    Route::resource('/admin/prestasi', PrestasiController::class);
    Route::resource('/admin/berita', BeritaController::class);
    Route::resource('/admin/visi-misi', VisiMisiController::class);
    Route::resource('/admin/ekskul', EkskulController::class);
    Route::resource('/admin/struktur', StrukturOrganisasiController::class);

    Route::resource('/admin/manajemen-akun', ManajemenAkunController::class);

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
