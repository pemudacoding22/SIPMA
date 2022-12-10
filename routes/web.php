<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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
})->middleware('auth');


Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'authentication']);
Route::get('register', [AuthController::class, 'register']);

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware(['auth', 'only_admin']);
Route::
Route::get('profile', [ProfileController::class, 'index'])->name('profile')->middleware(['auth', 'only_client']);
// Route::get('books', [BookController::class, 'index']);