<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SipalinkController;
use App\Http\Controllers\MalinkController;

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

Route::get('/home', [SipalinkController::class, 'index']);

Route::get('/malink',[MalinkController::class, 'index']);

Route::get('/create',function(){
    return view('malink.create');
});

Route::get('/login',function(){
    return view('login.login');
});