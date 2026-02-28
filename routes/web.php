<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ColocationController;
use App\Http\Controllers\InvitationController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ExpenseController;
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
    Route::get('/colocation/{id}' , [ColocationController::class , 'show'])->name('colocations.show');
    // Route::get('/colocations' , [ColocationController::class , 'show'])->name('colocations.show');
    Route::post('/colocation/{colocation}/intive' , [InvitationController::class , 'store'])->name('invitation.store');
    Route::get('/invitation/{token}' , [InvitationController::class , 'show'])->name('invitation.show');
    Route::patch('/invitation/{token}/accept' , [InvitationController::class , 'accept'])->name('invitation.accept');
    Route::patch('/invitation/{token}/decliner' , [InvitationController::class , 'decliner'])->name('invitation.decliner');

    Route::post('/category' , [CategoryController::class , 'store'])->name('category.store');

    Route::post('/expense' , [ExpenseController::class , 'store'])->name('expenses.store');
    Route::put('/expense/{expense}' , [ExpenseController::class , 'update'])->name('expenses.update');
    Route::delete('/expense/{id}' , [ExpenseController::class , 'delete'])->name('expenses.delete');

    Route::post('/logout' , [AuthenticatedSessionController::class , 'destroy'])->name('logout');
});

require __DIR__.'/auth.php';
