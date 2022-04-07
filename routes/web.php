<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\TaskContorller;
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


Route::get('/', [TaskContorller::class, 'index'])->name('tasks.index');
Route::get('/task/{id}', [TaskContorller::class, 'show'])->name('task.show');
Route::post('/task/store', [TaskContorller::class, 'store'])->name('task.store');
Route::delete('task/destroy/{id}', [TaskContorller::class, 'destroy'])->name('task.destroy');