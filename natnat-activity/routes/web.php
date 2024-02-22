<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;

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

Route::get(uri: '/', action: [StudentController::class, 'index']) -> name (name: 'index');
Route::get(uri: '/student/create', action: [StudentController::class, 'create']) -> name (name: 'students.create');
Route::post(uri: '/student/create', action: [StudentController::class, 'store']) -> name (name: 'students.store');
Route::get(uri: '/student/{id}', action: [StudentController::class, 'update']) -> name (name: 'students.update');
Route::post(uri: '/student/partialUpdate/{id}', action: [StudentController::class, 'partialUpdate']) -> name (name: 'students.partialUpdate');
Route::get(uri: '/student/view/{id}', action: [StudentController::class, 'viewStudent']) -> name (name: 'students.viewStudent');
Route::post('/delete/{id}', [StudentController::class, 'delete']) -> name (name:'students.delete');