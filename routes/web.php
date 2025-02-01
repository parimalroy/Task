<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [TaskController::class, 'index'])->name('index.home');
Route::get('/show', [TaskController::class, 'task_show'])->name('task.show');
Route::post('/store', [TaskController::class, 'task_store'])->name('task.store');
Route::get('/edit/{id}', [TaskController::class, 'task_edit'])->name('task.edit');
Route::post('/update', [TaskController::class, 'task_update'])->name('task.update');
Route::post('/delete', [TaskController::class, 'task_delete'])->name('task.delete');