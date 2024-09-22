<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\ErrorController\ErrorController;
use App\Http\Controllers\admin\BerandaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/profil', [PageController::class, 'profil']);
Route::get('/berita', [PageController::class, 'berita']);
Route::get('/galeri', [PageController::class, 'galeri']);
Route::get('/kontak', [PageController::class, 'kontak']);
Route::get('/detailberita', [PageController::class, 'detailBerita']);

//dropdown
Route::get('/visi-misi', [PageController::class, 'visiMisi']);
Route::get('/struktur-organisasi', [PageController::class, 'strukturOrganisasi']);
Route::get('/profil-kepala-daerah', [PageController::class, 'profilKepalaDaerah']);

// Route::post('/sendkontakemail', [PageController::class, 'sendkontakemail']);

//contact
Route::post('/contact', [ContactController::class, 'send'])->name('contact');


// Admin
Route::get('/admins', [DashboardController::class, 'index'])->name('admin.dashboard');

// Beranda
Route::get('/admins/beranda', [BerandaController::class, 'viewberanda'])->name('admin.viewberanda');
Route::post('/admins/beranda/upload', [BerandaController::class, 'uploadberanda'])->name('admin.uploadberanda');

Route::fallback([ErrorController::class, 'error_404'])->name('error.404');

