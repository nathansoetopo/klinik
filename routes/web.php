<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TestController;
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

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::middleware('auth')->group(function () {
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/profile', function () {
        return view('auth.profile');
    });
    Route::middleware('is.admin')->group(function () {
        Route::prefix('admin')->group(function () {
            Route::get('/', [AdminController::class, 'index']);
            Route::get('/data-pasien', [AdminController::class, 'dataPasien']);
            Route::get('/datapasiendetail', function () {
                return view('datapasiendetail');
            });
        });
    });
});
// Progress Slicing dan Test
Route::get('/datapasiendetail', function () {
    return view('datapasiendetail');
});
Route::post('/test-post-data', [TestController::class, 'getData']);
