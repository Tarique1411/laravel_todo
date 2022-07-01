<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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


Route::get('/index',[TodoController::class,'index'])->name('index.todo');
Route::get('/create',[TodoController::class,'create']);
Route::get('/edit',[TodoController::class,'edit']);
Route::post('/upload',[TodoController::class,'upload']);
Route::get('/edit/{id}',[TodoController::class,'edit'])->name('edit.todo');
Route::post('/update/{id}',[TodoController::class,'update'])->name('update.todo');
Route::get('/done/{id}',[TodoController::class,'done'])->name('todo.done');
Route::get('/delete/{id}',[TodoController::class,'delete'])->name('delete.todo');






