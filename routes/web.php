<?php

use App\Http\Controllers\AdministratorController;
use App\Models\Kucing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    $kucing = Kucing::all();
    return view('home', compact('kucing'));
});

Route::get('/login', [UserController::class, 'loginform'])->name('loginform');
Route::post('/login', [UserController::class, 'login'])->name('login');

Route::get('/register', [UserController::class, 'registerform'])->name('registerform');
Route::post('/register', [UserController::class, 'register'])->name('register');

Route::post('/logout', [UserController::class, 'logout'])->name('logout')->middleware('auth');

// Admin
Route::middleware(['middleware' => 'auth'])->group(function () {
    Route::get('/view', [AdministratorController::class, 'show'])->name('show');

    Route::get('/formtambah', [AdministratorController::class, 'formtambah'])->name('formtambah');
    Route::post('/formtambah/tambah', [AdministratorController::class, 'tambah'])->name('tambah');

    Route::get('/formedit{id}', [AdministratorController::class, 'formedit'])->name('formedit');
    Route::post('/formedit/edit/{id}', [AdministratorController::class, 'edit'])->name('edit');

    Route::get('/formhapus/{id}', [AdministratorController::class, 'formhapus'])->name('formhapus');
    Route::post('/formhapus/hapus', [AdministratorController::class, 'hapus'])->name('hapus');
});
