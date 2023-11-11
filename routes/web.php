<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\TugasController;

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

Route::get('/', function () {
    return view('landing-page');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/login/auth', 'authenticate');
    Route::get('/register', 'regist');
    Route::post('/register/create', 'registration');
    Route::post('/logout', 'logout')->name('logout');
});


Route::middleware(['auth:guru', 'guruMiddleware'])->group(function () {
    Route::controller(GuruController::class)->group(function () {
        Route::get('/guru', 'index');
        Route::get('/api/jurusan', 'jurusanApi');
    });
    Route::controller(KelasController::class)->group(function () {
        Route::get('/kelas/{slug}', 'index');
    });
    Route::controller(TugasController::class)->group(function () {
        Route::get('/tugas','index');
    });
});
