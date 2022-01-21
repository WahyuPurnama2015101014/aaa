<?php

use App\Http\Controllers\mainController;
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

Route::get('/', [mainController::class, 'index'])->name('dashboard');
Route::get('/databergolong', [mainController::class, 'dataBergolong'])->name('datber');
Route::get('/chikuadrat', [mainController::class, 'chiKuadrat'])->name('chi');
Route::get('/liliefors', [mainController::class, 'liliefors'])->name('lili');
Route::get('/korelasi', [mainController::class, 'korelasiPearson'])->name('pearson');
Route::get('/ujimean', [mainController::class, 'ujimean'])->name('mean');

Route::group(['' => 'auth:sanctum'], function () {
    Route::resource('dhs', mainController::class);
});
require __DIR__ . '/auth.php';
