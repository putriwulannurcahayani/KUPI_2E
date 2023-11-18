<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\signupController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\ProfileController;

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
    return view('welcome');
}); 
Route::get('/signup',[signupController::class, 'index']);
Route::post('/signup',[signupController::class, 'register'])->name('signup');
Route::get('/login', [loginController::class, 'index'])->name('viewLogin');
Route::post('/login', [loginController::class, 'login'])->name('login');
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [dashboardController::class,'index']);
    Route::get('/profile', [ProfileController::class,'index'])->name('profile');
});

Route::put('/edit-profile', [ProfileController::class,'update'])->name('editProfile');