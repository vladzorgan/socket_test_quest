<?php

use App\Http\Controllers\Front\Auth\AuthController;
use App\Http\Controllers\Front\Cabinet\CabinetController;
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

Route::get('/', [AuthController::class, 'index'])
    ->name('front.auth.index');

Route::prefix('cabinet')->group(function () {
    Route::get('', [CabinetController::class, 'index'])
        ->middleware(['auth'])->name('front.cabinet.index');
});

require __DIR__.'/auth.php';
