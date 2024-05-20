<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
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
})->name('main');

Route::get('/dashboard',[DashboardController::class,'dashboard_index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/about', function () {
        return view('about');
    })->name('about');
    
});


Route::get('/contactus', function () {
    return view('contactus');
})->name('contactus');


Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');





Route::get('/users/create', [DashboardController::class, 'create'])->name('users.create');
Route::post('/users', [DashboardController::class, 'store'])->name('users.store');
Route::get('/users/{user}/edit', [DashboardController::class, 'edit'])->name('users.edit');
Route::put('/users/{user}', [DashboardController::class, 'update'])->name('users.update');
Route::delete('/users/{user}', [DashboardController::class, 'destroy'])->name('users.destroy');








require __DIR__.'/auth.php';
