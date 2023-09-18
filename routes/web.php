<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

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
})->name('welcome');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('/success', function () {
    return view('success');
})->name('success');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/register',[ClientController::class , 'register'])->name('register');
Route::match(['get', 'post'],'/pay',[ClientController::class , 'payment']);
Route::post('/verificationCode',[ClientController::class, 'verificationCode']);


Route::get('/dashboard',[DashboardController::class , 'index'])->name('dashboard')->middleware('auth');
Route::post('/deleteDetail/{id}',[DashboardController::class, 'deleteDetail'])->middleware('auth');
Route::post('/changeStatus' , [DashboardController::class, 'changeStatus'])->middleware('auth');
Route::post('/check-login' , [DashboardController::class, 'login'])->name('check-login');