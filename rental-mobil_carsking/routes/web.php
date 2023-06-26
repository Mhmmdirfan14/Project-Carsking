<?php

use App\Http\Controllers\LandingpageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MerkController;
use App\Http\Controllers\DaftarMobilController;
use App\Http\Controllers\MobilTersewaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LandingpageController::class, 'index']);

    // route for landingpage and login
;
Route::get('/login', [LoginController::class, 'halamanlogin'])->name('login');
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth', 'ceklevel:admin,user']], function () {
    Route::get('/backend', [BackendController::class, 'index'])->name('backend');
});


//route register
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/simpanregister', [LoginController::class, 'simpanregister'])->name('simpanregister');

// Backend Controller
// route for Merk_mobil
Route::get('/merk_mobil', [MerkController::class, 'index'])->name('merk_mobil');
Route::get('/create_merk', [MerkController::class, 'create'])->name('create_merk');
Route::post('/simpan_merk', [MerkController::class, 'store'])->name('simpan_merk');
Route::get('/edit_merk/{id}', [MerkController::class, 'edit'])->name('edit_merk');
Route::post('/update_merk/{id}', [MerkController::class, 'update'])->name('update_merk');
Route::get('/delete_merk/{id}', [MerkController::class, 'destroy'])->name('delete_merk');


// route for daftar_mobil
Route::get('/daftar_mobil', [DaftarMobilController::class, 'index'])->name('daftar_mobil');
Route::get('/create_mobil', [DaftarMobilController::class, 'create'])->name('create_mobil');
Route::post('/simpan_mobil', [DaftarMobilController::class, 'store'])->name('simpan_mobil');
Route::get('/edit_mobil/{id}', [DaftarMobilController::class, 'edit'])->name('edit_mobil');
Route::post('/update_mobil/{id}', [DaftarMobilController::class, 'update'])->name('update_mobil');
Route::get('/delete_mobil/{id}', [DaftarMobilController::class, 'destroy'])->name('delete_mobil');

// route for Daftar_sewa
Route::get('/daftar_mobil_tersewa', [MobilTersewaController::class, 'index'])->name('daftar_mobil_tersewa');
Route::get('/create_sewa', [MobilTersewaController::class, 'create'])->name('create_sewa');
Route::post('/simpan_sewa', [MobilTersewaController::class, 'store'])->name('simpan_sewa');
Route::get('/edit_sewa/{id}', [MobilTersewaController::class, 'edit'])->name('edit_sewa');
Route::post('/update_sewa/{id}', [MobilTersewaController::class, 'update'])->name('update_sewa');
Route::get('/delete_sewa/{id}', [MobilTersewaController::class, 'destroy'])->name('delete_sewa');
