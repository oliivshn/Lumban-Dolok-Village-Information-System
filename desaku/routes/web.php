<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\SaranaController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DemografiController;
use App\Http\Controllers\KritikSaranController;
use App\Http\Controllers\DataPendudukController;
use App\Http\Controllers\PerangkatDesaController;
use App\Http\Controllers\HubungiKamiController;


Route::get('auth', [AuthController::class, 'index'])->name('auth.index');
Route::get('auth/register', [AuthController::class, 'register'])->name('auth.register');
Route::prefix('auth')->name('auth.')->group(function () {
    Route::post('login', [AuthController::class, 'do_login'])->name('login');
    Route::post('register', [AuthController::class, 'do_register'])->name('register');
});

Route::redirect('/', 'dashboard', 301);
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('logout', [AuthController::class, 'do_logout'])->name('auth.logout');
Route::resource('artikel', ArtikelController::class);
Route::resource('berita', BeritaController::class);
Route::resource('sarana', SaranaController::class);
Route::resource('kritik_saran', KritikSaranController::class);
Route::resource('datapenduduk', DataPendudukController::class);
Route::resource('galeri', GaleriController::class);
Route::resource('perangkatdesa', PerangkatDesaController::class);
Route::resource('demografi', DemografiController::class);
Route::resource('hubungikami', HubungiKamiController::class);
