<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\Student\AuthenticateController;    
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:api')->get('/user', function(Request $request){
    return $request->user();
}); 

Route::post('/student', [StudentController::class, 'store']);
Route::get('/student', [StudentController::class, 'show']);
Route::get('/student/{id}', [StudentController::class, 'showbyid']);
Route::put('/student/{id}', [StudentController::class, 'updateStudent']);
Route::patch('/student/partialUpdate/{id}', [StudentController::class, 'partialUpdate']);
Route::delete('/student/{id}', [StudentController::class, 'delete']);