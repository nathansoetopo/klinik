<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LabController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\SOAPController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ResepController;
use App\Http\Controllers\PasienController;

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

Route::get('/', [LoginController::class, 'index'])->name('login');
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
            Route::post('/data-pasien', [PasienController::class, 'store']);
            Route::post('/data-pasien/{pasienID}/update', [PasienController::class, 'update']);
            Route::get('/data-pasien/{pasienID}/delete', [PasienController::class, 'delete']);
            Route::get('/data-pasien/{pasienID}/detail', [PasienController::class, 'detail']);
            Route::post('/data-pasien/{pasienID}/soap', [SOAPController::class, 'store']);
            Route::get('/soap', [SOAPController::class, 'index']);
            Route::get('/soap/{pasienID}/list', [SOAPController::class, 'lists']);
            Route::get('/soap/{soapID}/detail', [SOAPController::class, 'detail']);
            Route::post('/soap/{soapID}/update', [SOAPController::class, 'update']);
            Route::get('/medicines', [ObatController::class, 'index']);
            Route::post('/medicines', [ObatController::class, 'store']);
            Route::post('/medicines/{medicineID}/update', [ObatController::class, 'update']);
            Route::get('/medicines/{medicineID}/delete', [ObatController::class, 'delete']);
            Route::post('/resep', [ResepController::class, 'store']);
            Route::get('/lab', [LabController::class, 'index']);
            Route::post('/lab', [LabController::class, 'store']);
            Route::get('/lab/{pasienID}/list', [LabController::class, 'lists']);
            Route::get('/lab/{labID}/detail', [LabController::class, 'detail']);
            Route::post('/lab/{labID}/update', [LabController::class, 'update']);
        });
    });
});
// Progress Slicing dan Test
Route::get('/datapasiendetail', function () {
    return view('datapasiendetail');
});
Route::post('/test-post-data', [TestController::class, 'getData']);
