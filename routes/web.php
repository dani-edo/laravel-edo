<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\DatasController;

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

Route::get('/', [PagesController::class, 'home']);
Route::get('/about', [PagesController::class, 'about']);

Route::get('/data', [DataController::class, 'index']);

// Datas
Route::get('/datas', [DatasController::class, 'index']);
Route::get('/datas/create', [DatasController::class, 'create']);
Route::get('/datas/{data}', [DatasController::class, 'show']);
Route::post('/datas', [DatasController::class, 'store']);
