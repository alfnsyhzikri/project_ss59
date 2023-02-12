<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\TahunAjaranController;

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

Route::get('/', function () {
    return view('layouts.master');
})->middleware('auth');

Route::get('/login', function () {
    return view('layouts.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    // manajemen jurusan
    Route::get('/jurusan', [JurusanController::class, 'index']);
    Route::get('/jurusan/form', [JurusanController::class, 'create']);
    Route::post('/jurusan', [JurusanController::class, 'store']);
    Route::get('/jurusan/edit/{id}', [JurusanController::class, 'edit']);
    Route::put('/jurusan/{id}', [JurusanController::class, 'update']);
    Route::delete('/jurusan/{id}', [JurusanController::class, 'destroy']);
    
    // manajemen angkatan
    Route::get('/tahun_ajaran', [TahunAjaranController::class, 'index']);
    Route::get('/tahun_ajaran/form', [TahunAjaranController::class, 'create']);
    Route::post('/tahun_ajaran', [TahunAjaranController::class, 'store']);
    Route::get('/tahun_ajaran/edit/{id}', [TahunAjaranController::class, 'edit']);
    Route::put('/tahun_ajaran/{id}', [TahunAjaranController::class, 'update']);
});