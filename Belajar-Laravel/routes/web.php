<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\HomeController;

Route::get('/guru', [GuruController::class, 'index'])->name('guru');
Route::get('/', [HomeController::class, 'index']);
Route::get('/guru/detail/{id_guru}', [GuruController::class, 'detail']);
Route::get('/guru/add' , [GuruController::class, 'add']);
Route::post('/guru/insert' , [GuruController::class, 'insert']);
Route::get('/guru/edit/{id_guru}' , [GuruController::class, 'edit']);
Route::post('/guru/update/{id_guru}' , [GuruController::class, 'update']);
Route::get('/guru/delete/{id_guru}' , [GuruController::class, 'delete']);
Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa');
Route::get('/siswa/detail/{id}', [SiswaController::class, 'detail']);
Route::get('/siswa/add' , [SiswaController::class, 'add']);
Route::post('/siswa/insert' , [SiswaController::class, 'insert']);
Route::get('/siswa/edit/{id}' , [SiswaController::class, 'edit']);
Route::post('/siswa/update/{id}' , [SiswaController::class, 'update']);
Route::get('/siswa/delete/{id}' , [SiswaController::class, 'delete']);