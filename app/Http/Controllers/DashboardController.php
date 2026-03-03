<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use App\Models\Colocation;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
    
    $now = now();
    $colocation = Colocation::whereHas('members', function ($query) {
        $query->where('user_id', auth()->id())
            ->whereNull('left_at');
        })->first();

    // dd($colocation);

    if($colocation){

        
        $total = Expense::where('colocation_id', $colocation->id)
        ->whereMonth('expense_date', $now->month)
        ->whereYear('expense_date', $now->year)
        ->sum('amount');
        $lastExpenses = Expense::where('colocation_id', $colocation->id)
        ->whereMonth('expense_date', $now->month)
        ->whereYear('expense_date', $now->year)
        ->get();
        }else{
            $total = 0;
            $lastExpenses = [];
        }



    // dd($total);
    return view('dashboard' , compact('total' , 'lastExpenses'));
    }
}
