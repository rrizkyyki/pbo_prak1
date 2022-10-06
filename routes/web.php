<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PetugasController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [BaseController::class, 'index']);
Route::get('/menu1', [BukuController::class, 'index']);
Route::get('/menu2', [PetugasController::class, 'index']);
Route::get('/menu3', [AnggotaController::class, 'index']);

// create
Route::get('/menu1create', [BukuController::class, 'create']);