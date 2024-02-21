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
Route::get(uri: '/students', action: [StudentController::class, 'store']) -> name (name: 'pages.create');
Route::post('/delete/{id}', [StudentController::class, 'delete']) -> name (name:'students.delete');