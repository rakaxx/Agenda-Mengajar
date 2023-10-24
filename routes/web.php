<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\CetakController;
use App\Http\Controllers\DrafController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\KepsekController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\MultiController;
use App\Http\Controllers\SesiController;
use App\Models\Cetak;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['guest'])->group(function(){
    Route::get('/', [SesiController::class, 'index'])->name('login');
    Route::post('/', [SesiController::class, 'login']);
});


Route::get('/home', function(){
    return redirect('/logout');
});


Route::middleware(['auth'])->group(function(){
    Route::get('/logout', [SesiController::class, 'logout']);



    // // ADMIN 
    Route::get('/admin/dashboard', [MultiController::class, 'admin'])->middleware('userAkses:admin');

    Route::get('/admin/akun', [AdminController::class, 'akun'])->middleware('userAkses:admin');
    Route::get('/admin/akun/tambah', [AdminController::class, 'tambahAkun'])->middleware('userAkses:admin');
    Route::post('/user/{id}', [AkunController::class, 'destroy']);

    Route::get('/admin/mapel', [AdminController::class, 'mapel'])->middleware('userAkses:admin');
    Route::get('/admin/mapel/tambah', [AdminController::class, 'tambahMapel'])->middleware('userAkses:admin');
    Route::patch('/mapel/{id}/edit', [MapelController::class, 'update']);
    Route::post('/mapel/{id}', [MapelController::class, 'destroy']);

    Route::get('/admin/kelas', [AdminController::class, 'kelas'])->middleware('userAkses:admin');
    Route::get('/admin/kelas/tambah', [AdminController::class, 'tambahKelas'])->middleware('userAkses:admin');
    Route::patch('/kelas/{id}/edit', [KelasController::class, 'update']);
    Route::post('/kelas/{id}', [KelasController::class, 'destroy']);

    Route::get('/admin/agenda', [AdminController::class, 'agenda'])->middleware('userAkses:admin');
    Route::get('/admin/agenda/tambah', [AdminController::class, 'tambahAgenda'])->middleware('userAkses:admin');
    Route::patch('/agenda/{id}/edit', [AgendaController::class, 'update']);
    Route::post('/agenda/{id}', [AgendaController::class, 'destroy']);

    Route::get('/admin/draf', [AdminController::class, 'draf'])->middleware('userAkses:admin');
    Route::get('/draf/{id}/view', [CetakController::class, 'show']);

  
    
    // // GURU
    Route::get('/guru/dashboard', [MultiController::class, 'guru'])->middleware('userAkses:guru');

    Route::get('/guru/agenda', [GuruController::class, 'agenda'])->middleware('userAkses:guru');

    Route::get('/guru/draf', [GuruController::class, 'draf'])->middleware('userAkses:guru');
    Route::get('/draf/{id}/view', [DrafController::class, 'show']);
    Route::patch('/draf/{id}/edit', [DrafController::class, 'update']);
    Route::post('/draf/{id}', [DrafController::class, 'destroy']);

    Route::get('/guru/cetak', [GuruController::class, 'cetak'])->middleware('userAkses:guru');
    Route::get('/cetak/{id}/view', [CetakController::class, 'show']);
    



    // // KEPALA SEKOLAH
    Route::get('/kepsek/dashboard', [MultiController::class, 'kepalasekolah'])->middleware('userAkses:kepalasekolah');

    Route::get('/kepsek/agenda', [KepsekController::class, 'agenda'])->middleware('userAkses:kepalasekolah'); 
    //Route::patch('/draf/{id}/edit', [DrafController::class, 'update']);

    Route::get('/kepsek/draf', [KepsekController::class, 'draf'])->middleware('userAkses:kepalasekolah'); 
    



    // // RESOURCES
    Route::resource('user', AkunController::class);
    Route::resource('mapel', MapelController::class);
    Route::resource('kelas', KelasController::class);
    Route::resource('agenda', AgendaController::class);
    Route::resource('draf', DrafController::class);

    // Route::get('/formCetak', function(){
    //     return view('guru.formCetak');
    // });
     
});

