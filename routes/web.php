<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuruController;

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
})->middleware('guest');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route::middleware(['auth', 'guru'])->group(function () {
    Route::controller(GuruController::class)->group(function () {
        Route::get('/guru', 'index');
    });
// });
