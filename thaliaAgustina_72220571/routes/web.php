<?php

use App\Http\Controllers\ArrayController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/array', [ArrayController::class, 'showArray']);


// NOMOR 2

use App\Http\Controllers\FormController;

Route::get('/formA', [FormController::class, 'showForm']);

Route::post('/formB', [FormController::class, 'handleForm'])->name('handleForm');


// NOMOR 3
use App\Http\Controllers\PerhitunganController;

Route::get('/perhitungan', [PerhitunganController::class, 'tampilkanForm']);
Route::post('/hitung', [PerhitunganController::class, 'hitung'])->name('hitung');


//NOMOR 4
use App\Http\Controllers\Student571Controller;

Route::get('/students', [Student571Controller::class, 'index'])->name('studentsIndex');
Route::get('/students/top-gpa', [Student571Controller::class, 'topGpa'])->name('topGpa');
Route::get('/students/search', [Student571Controller::class, 'search'])->name('searchStudent');

