<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; 
use App\Http\Controllers\WriterController; 
use App\Http\Controllers\CategoryController;
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

Route::get('/writers', function () {
    return view('writers');
});

// Home Controller
Route::get('/', [HomeController::class, 'index']);
Route::get('/writers', [WriterController::class, 'index']);

Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('categories');
