<?php

use App\Http\Controllers\TodoListController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('todo-lists', TodoListController::class);
Route::resource('todo-lists.tasks', \App\Http\Controllers\TaskController::class);

//Route::get('/todo-lists', [TodoListController::class, 'index'])->name('todo-lists.index');
//Route::get('/todo-lists/create', [TodoListController::class, 'create'])->name('todo-lists.create');
//Route::post('/todo-lists/create', [TodoListController::class, 'store'])->name('todo-lists.store');
//Route::get('/todo-lists/{todo-list}', [TodoListController::class, 'show'])->name('todo-lists.show');
//Route::get('/todo-lists/{todo-list}/edit', [TodoListController::class, 'edit'])->name('todo-lists.edit');
//Route::match(['PUT', 'PATCH'], '/todo-lists/{todo-list}', [TodoListController::class, 'update'])->name('todo-lists.update');
//Route::delete('/todo-lists/{todo-list}', [TodoListController::class, 'destroy'])->name('todo-lists.destroy');
