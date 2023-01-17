<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerpustakaanController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
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

Route::get('/book', function () {
    return view('book');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});


Route::get('/', [PerpustakaanController::class, 'index']);
Route::post('/login', [logincontroller::class, 'login'])->name('login-auth');
Route::get('/login', [PerpustakaanController::class,'login']);
Route::get('/register', [PerpustakaanController::class,'register']);
Route::post('/register', [registercontroller::class,'register']);



