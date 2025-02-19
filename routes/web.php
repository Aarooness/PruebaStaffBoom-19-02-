<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\invoiceController; //se importa el controlador

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

Route::get('/tasks/create', [invoiceController::class, 'create']) -> name('tasks.create');
Route::post('/tasks', [invoiceController::class, 'store']) -> name('task.store');
Route::post('/customers', [invoiceController::class, 'store']) -> name('customer.store');

// CRUD de Tareas
Route::resource('tasks', invoiceController::class);