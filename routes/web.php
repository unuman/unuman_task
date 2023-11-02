<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

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

Route::resource('tasks', TaskController::class);

// リソースを使用しない場合
// Route::get('/tasks', [TaskController::class, 'index']);
// Route::get('/tasks/create', [TaskController::class, 'create']);
// Route::post('/tasks', [TaskController::class, 'store']);
// Route::get('/tasks/{task}', [TaskController::class, 'show']);
// Route::get('/tasks/{task}/edit', [TaskController::class, 'edit']);
// Route::patch('/tasks/{task}', [TaskController::class, 'update']);
// Route::delete('/tasks/{task}', [TaskController::class, 'destroy']);
