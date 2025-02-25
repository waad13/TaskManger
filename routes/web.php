<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\usercontroller;
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


Route::get('/',[TaskController::class, 'index']);
Route::get('tasksdone',[TaskController::class, 'done']);
Route::get('tasksonprogress',[TaskController::class, 'onprogress']);
Route::get('todo',[TaskController::class, 'todo']);
Route::get('users',[usercontroller::class, 'index']);
Route::get('delete/{id}',[TaskController::class, 'delete']);
Route::get('due',[TaskController::class, 'due']);
Route::post('task/create',[TaskController::class, 'store']);
Route::get('task/create',[TaskController::class, 'create']);
Route::get('user/{id}', [usercontroller::class, 'show']);
Route::post('task/{id}/onprogress',[TaskController::class, 'asonProgress']);
Route::post('task/{id}/done',[TaskController::class, 'asdone']);
    
    