<?php

use App\Http\Controllers\TasksControler;
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

Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/dashboard', [TasksControler::class, 'index'])->name('dashboard');

    Route::get('/task', [TasksControler::class, 'add']);
    Route::post('/task', [TasksControler::class, 'create']);

    Route::get('/task/{task}', [TasksControler::class, 'edit']);
    Route::post('/task/{task}', [TasksControler::class, 'update']);



});
