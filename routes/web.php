<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ColocationController;
Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('register' , [RegisteredUserController::class, 'store'])->name('register.user');
    
    Route::get('/colocations' , [ColocationController::class , 'index'])->name('colocations');
    Route::post('/colocations' , [ColocationController::class , 'store'])->name('colocations.store');
    Route::get('/colocations/{id}' , [ColocationController::class , 'show'])->name('colocations.show');
    // Route::get('/colocations' , [ColocationController::class , 'show'])->name('colocations.show');
});

require __DIR__.'/auth.php';
