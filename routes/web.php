<?php

use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class, 'index']);
Route::get('/profil', [PageController::class, 'profil']);
Route::get('/berita', [PageController::class, 'berita']);
Route::get('/galeri', [PageController::class, 'galeri']);
Route::get('/kontak', [PageController::class, 'kontak']);

//dropdown
Route::get('/visi-misi', [PageController::class, 'visiMisi']);
Route::get('/struktur-organisasi', [PageController::class, 'strukturOrganisasi']);
Route::get('/profil-kepala-daerah', [PageController::class, 'profilKepalaDaerah']);

Route::post('/sendkontakemail', [PageController::class, 'sendkontakemail']);