<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\User;

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
    return view('home');
});

Route::get('dashboard', function () {
    return view('dashboard');
});

Route::post('/login', [UserController::class,'login']);

Route::post('/register', [UserController::class,'register']);

Route::post('/logout',[UserController::class, 'logout']);

