<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;

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

Route::get('/create', [KaryawanController::class, 'Create1']);
Route::post('/create-post', [KaryawanController::class, 'Create'])->name('Create');

Route::get('/view-karyawan', [KaryawanController::class, 'viewKaryawan']);
Route::get('/edit-karyawan/{id}', [KaryawanController::class, 'editKaryawan']);
Route::put('/update-karyawan/{id}', [KaryawanController::class, 'updateKaryawan']);
Route::delete('/delete-karyawan/{id}', [KaryawanController::class, 'deleteKaryawan']);
