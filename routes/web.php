<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MoodController;

Route::get('/', function () {
    return view('register');
});

Route::get('/mood_table', function () {
    return view('mood_table');
});




Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth')->group(function () {
    Route::get('/welcome', function () {
        return view('welcome');
    })->name('welcome');

    Route::get('/mood_table',[MoodController::class, 'index'], function () {
        return view('mood_table');
    })->name('index');
    
    
    Route::post('/submit-mood', [MoodController::class, 'add'])->name('add');
    Route::put('/mood/{mood}', [MoodController::class, 'update'])->name('mood.update');
    Route::delete('/mood/{mood}', [MoodController::class, 'destroy'])->name('mood.destroy');
   


    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});





