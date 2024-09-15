<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('to-do', ToDoController::class);

Route::get('/to-do-delete/{toDo}', [ToDoController::class, 'destroy'])->name('to-do.destroy');
