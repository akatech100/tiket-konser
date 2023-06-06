<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenontonController;
use App\Http\Controllers\AdminController;

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
    return view('welcome');
});

Route::post('/penonton', function () {
    return view('welcome');
});

Route::post('/penonton', [PenontonController::class, 'create']);
Route::get('/resume', [PenontonController::class, 'resume']);
Route::get('/login', [PenontonController::class, 'login']);
Route::post('/login', [PenontonController::class, 'authenticate']);
Route::post('/logout', [PenontonController::class, 'logout'])->middleware('auth');;

Route::get('/cekstatus', [AdminController::class, 'cekstatus'])->middleware('auth');
Route::get('/editpemesanan/{id}', [AdminController::class, 'edit'])->middleware('auth');
Route::get('/dashboard', [AdminController::class, 'index'])->middleware('auth');
Route::post('/destory', [AdminController::class, 'destroy'])->middleware('auth');
Route::get('/hasilcek', [AdminController::class, 'hasilcek'])->middleware('auth');
Route::post('/editdatapemesanan', [AdminController::class, 'editdatapemesanan'])->middleware('auth');
Route::post('/cekdata', [AdminController::class, 'cekdata'])->middleware('auth');
