<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SipalinkController;
use App\Http\Controllers\MalinkController;
use App\Http\Controllers\LoginController;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/home', [SipalinkController::class, 'index'])->middleware('guest');

Route::get('/malink',[MalinkController::class, 'index'])->middleware('auth');

Route::get('/create',function(){
    return view('malink.create');
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
