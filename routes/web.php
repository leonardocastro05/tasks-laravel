<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

// Pujo la web
Route::get('/', [StudentController::class, 'index'])->name('index');
Route::get('/create', [StudentController::class, 'create'])->name('create');
Route::post('/new', [StudentController::class, 'new'])->name('new');
Route::post('/update/{id}', [StudentController::class, 'update'])->name('update');
Route::post('/edit/{id}', [StudentController::class, 'edit'])->name('edit');
Route::post('/delete/{id}', [StudentController::class, 'delete'])->name('delete');