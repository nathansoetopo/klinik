<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::middleware('is.admin.api')->group(function () {
        Route::prefix('admin')->group(function () {
            Route::get('/', [AdminController::class, 'index']);
            Route::get('/accounts', [AdminController::class, 'showAllAccounts']);
            Route::get('/{roleName}/accounts', [AdminController::class, 'showRoleAccounts']);
            Route::post('/register/hrd', [RegisterController::class, 'registerHRD']);
            Route::post('/update/{userID}/hrd', [RegisterController::class, 'updateHRD']);
            Route::get('/delete/{userID}/hrd', [RegisterController::class, 'destroyHRD']);
            Route::post('/register/satpam', [RegisterController::class, 'registerSatpam']);
            Route::post('/update/{userID}/satpam', [RegisterController::class, 'updateSatpam']);
            Route::get('/delete/{userID}/satpam', [RegisterController::class, 'destroySatpam']);
            Route::get('/shift', [ShiftController::class, 'index']);
            Route::get('/show/{shiftID}/shift', [ShiftController::class, 'show']);
            Route::post('/create/shift', [ShiftController::class, 'store']);
            Route::post('/update/{shiftID}/shift', [ShiftController::class, 'update']);
            Route::get('/delete/{shiftID}/shift', [ShiftController::class, 'destroy']);
            Route::post('/assign/{shiftID}/hrd', [ShiftController::class, 'assignHRDToShift']);
            Route::post('/resign/{shiftID}/hrd', [ShiftController::class, 'resignHRDFromShift']);
            Route::post('/assign/{shiftID}/satpam', [ShiftController::class, 'assignSatpamToShift']);
            Route::post('/resign/{shiftID}/satpam', [ShiftController::class, 'resignSatpamFromShift']);
        });
    });
});
        