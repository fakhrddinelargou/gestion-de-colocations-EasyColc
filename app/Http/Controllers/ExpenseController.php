<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Expense;
use App\Http\Controllers\SettlementController;

class ExpenseController extends Controller
{


public function store(Request $request ,SettlementController $calc){

    // dd($request);

    $request->validate([
        'title' => 'required|string|max:100',
        'amount' => 'required|numeric|min:5',
    ]);

    $expense =  Expense::create([
        'title' => $request->title,
        'amount' => $request->amount,
        'payer_id' => $request->payer_id,
        'colocation_id' => $request->colocation_id,
        'category_id' => $request->category_id,
        'expense_date' => $request->expense_date,
     ]);

  
     $calc->store($expense->colocation_id);
    


     return redirect()->route('colocations.show' , $request->colocation_id);

    }



    public function update(Request $request, Expense $expense ,SettlementController $calc)
{

    $request->validate([
        'title' => 'required|string|max:100',
        'amount' => 'required|numeric|min:5',
    ]);

    $expense->update([
        'title' => $request->title,
        'amount' => $request->amount,
        'payer_id' => $request->payer_id,
        'colocation_id' => $request->colocation_id,
        'category_id' => $request->category_id,
        'expense_date' => $request->expense_date,
    ]);

     $calc->store($request->colocation_id);

    return redirect()->route('colocations.show', $expense->colocation_id);
}


public function delete($id , SettlementController $calc){

$expense = Expense::findOrFail($id);
$expense->delete();

     $calc->store($expense->colocation_id);

return back();

}

}
