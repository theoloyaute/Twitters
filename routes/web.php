<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class, 'index'])->name('tweets');

Route::post('/tweets/create', [MainController::class, 'store'])->name('tweets.store');

Route::get('/tweets/{id}', [MainController::class, 'edit'])->name('tweets.edit');

Route::patch('/tweets/update/{id}', [MainController::class, 'update'])->name('tweets.update');

Route::any('/tweets/delete/{id}', [MainController::class, 'delete'])->name('tweets.delete');

Route::get('/tweets/reply/{id}', [MainController::class, 'reply'])->name('tweets.reply');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
