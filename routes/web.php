<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\JurusanController;

Route::get('/', [JurusanController::class, 'index']);
Route::get('/admin', function () {
    return view('/admin/index', ['status'=>'']);
});
Route::resource('/siswa', SiswaController::class);
Route::resource('/jurusan',JurusanController::class);
