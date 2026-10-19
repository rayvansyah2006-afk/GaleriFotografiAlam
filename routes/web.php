<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('page.home');
});

Route::view('/about', 'page.about')->name('about');

Route::get('/project', [ProjectController::class, 'index'])->name('project.index');
Route::get('/project/{id}', [ProjectController::class, 'show'])->name('project.show');


Route::get('/kontak', function () {
    return view('page.kontak');
})->name('kontak');

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);