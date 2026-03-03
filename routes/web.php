<?php

use App\Http\Middleware\AdminMiddleware;

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ColocationController;
use App\Http\Controllers\InvitationController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\SettlementController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
Route::get('/', function () {
    return view('auth.login');
});


Route::middleware('auth' , 'banned')->group(function () {
    Route::get('/dashboard', [DashboardController::class , 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('register' , [RegisteredUserController::class, 'store'])->name('register.user');
    
    Route::get('/colocations' , [ColocationController::class , 'index'])->name('colocations');
    Route::post('/colocations' , [ColocationController::class , 'store'])->name('colocations.store');
    Route::get('/colocation/{colocation}' , [ColocationController::class , 'show'])->name('colocations.show');
    // Route::delete('/colocations/{id}' , [ColocationController::class , 'delete'])->name('colocations.leave');
    Route::post('/colocation/{colocation}/intive' , [InvitationController::class , 'store'])->name('invitation.store');
    Route::patch('/colocations/{colocation}' , [ColocationController::class , 'update'])->name('colocations.leave');
    Route::delete('/colocations/{colocation}' , [ColocationController::class , 'delete'])->name('colocations.destroy');

    Route::patch('/members/{id}' , [MemberController::class , 'remove'])->name('members.remove');
 
    Route::get('/invitation/{token}' , [InvitationController::class , 'show'])->name('invitation.show');
    Route::patch('/invitation/{token}/accept' , [InvitationController::class , 'accept'])->name('invitation.accept');
    Route::patch('/invitation/{token}/decliner' , [InvitationController::class , 'decliner'])->name('invitation.decliner');

    Route::post('/category' , [CategoryController::class , 'store'])->name('category.store');

    Route::post('/expense' , [ExpenseController::class , 'store'])->name('expenses.store');
    Route::put('/expense/{expense}' , [ExpenseController::class , 'update'])->name('expenses.update');
    Route::delete('/expense/{id}' , [ExpenseController::class , 'delete'])->name('expenses.delete');

    Route::post('/logout' , [AuthenticatedSessionController::class , 'destroy'])->name('logout');
    
    Route::patch('/settlement/{settlement}' , [SettlementController::class , 'markAsPaid'])->name('settlements.pay');
    
    Route::middleware(['auth', 'admin'])->group(function () {

    Route::get('/admin/dashboard', 
        [AdminController::class, 'index'])
        ->name('admin.dashboard');

        });

        Route::middleware(['auth', 'admin'])->group(function () {

        Route::patch('/admin/users/{user}/ban', 
        [AdminController::class, 'ban'])
        ->name('admin.users.ban');

        });

        Route::middleware(['auth', 'admin'])->group(function () {

        Route::patch('/admin/users/{user}/unban', 
        [AdminController::class, 'unban'])
        ->name('admin.users.unban');

        });
        

      });

require __DIR__.'/auth.php';
