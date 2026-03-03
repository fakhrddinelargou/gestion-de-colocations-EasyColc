<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Colocation;
use App\Models\Expense;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
{
    $usersCount = User::count();
    $colocationsCount = Colocation::count();
    $expensesCount = Expense::count();
    $users = User::all();
    $totalAmount = Expense::sum('amount');

    return view('admin.dashboard', compact(
        'usersCount',
        'colocationsCount',
        'expensesCount',
        'totalAmount',
        'users'
    ));
}

public function ban(User $user){

    if ($user->id === auth()->id()) {
        return back()->with('error', 'Vous ne pouvez pas vous bannir.');
        }
        
        if ($user->role === 'admin') {
            return back()->with('error', 'Impossible de bannir un administrateur.');
            }
            
            $user->update([
                'is_banned' => true
                ]);
                
                // dd($user);
    return back()->with('success', 'Utilisateur banni avec succès.');

}

public function unban(User $user){

    if ($user->id === auth()->id()) {
        return back()->with('error', 'Vous ne pouvez pas vous bannir.');
        }
        
        if ($user->role === 'admin') {
            return back()->with('error', 'Impossible de bannir un administrateur.');
            }
            
            $user->update([
                'is_banned' => false
                ]);
                
                // dd($user);
    return back()->with('success', 'Utilisateur unbanni avec succès.');

}
}
