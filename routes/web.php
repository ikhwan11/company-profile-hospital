<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogCategory;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\User_Controller;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\BlogGuestController;
use App\Http\Controllers\PoliklinikController;
use App\Http\Controllers\jadwalDokterController;
use App\Http\Controllers\LayananImageController;
use App\Http\Controllers\LayananDetailController;



// halaman guest
Route::get('/', [MainController::class, 'index'])->middleware('guest');
Route::get('/tentang', [MainController::class, 'tentang'])->middleware('guest');


//blog guest
Route::get('/artikel', [BlogGuestController::class, 'index'])->middleware('guest');
Route::get('/artikel/{blog}', [BlogGuestController::class, 'show'])->middleware('guest');

// dokter guest
Route::get('/dokter/profil', [MainController::class, 'profilDokter'])->middleware('guest');
Route::get('/dokter/jadwal', [MainController::class, 'jadwalDokter'])->middleware('guest');
Route::get('/dokter/profil/{dokter}', [MainController::class, 'profilDokterDetail'])->middleware('guest');

// layanan guest
Route::get('/services', [MainController::class, 'layananIndex'])->middleware('guest');
Route::get('/services/detail/{layanan}', [MainController::class, 'layananDetail'])->middleware('guest');


// <-- Bagian Admin -->

// form login dan logout
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'auth']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/admin', [AdminController::class, 'index'])->middleware('auth');

// Blog
Route::get('/blog', [BlogController::class, 'index'])->middleware('auth');
Route::get('/blogCreate', [BlogController::class, 'create'])->middleware('auth');
Route::post('/blogCreate', [BlogController::class, 'store']);

// ..............
Route::resource('/dashboard/blog', BlogController::class)->middleware('auth');

Route::get('/blogCategory', [BlogCategory::class, 'index'])->middleware('auth');
Route::post('/blogCategory', [BlogCategory::class, 'store']);

// users
Route::resource('/dashboard/user', User_Controller::class)->middleware('auth');

// banner
Route::resource('/dashboard/banner', BannerController::class)->middleware('auth');

// Dokter
Route::resource('/dashboard/dokter', DokterController::class)->middleware('auth');
Route::resource('/dashboard/poliklinik', PoliklinikController::class)->middleware('auth');

// jadwal dokter
Route::resource('/dashboard/jadwal', jadwalDokterController::class)->middleware('auth');

// layanan
Route::resource('/dashboard/layanan', LayananController::class)->middleware('auth');
Route::resource('/dashboard/layananImage', LayananImageController::class)->middleware('auth');
Route::resource('/dashboard/layanan/detail/{layanan}', LayananDetailController::class)->middleware('auth');
