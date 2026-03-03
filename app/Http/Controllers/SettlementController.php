<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Settlement;
use App\Models\Expense;
use App\Models\User;
use App\Models\Member;

class SettlementController extends Controller
{
    public function store($colocationId){    
      
    
    //  dd($colocation);
    $total = Expense::where('colocation_id' , $colocationId)
                      ->sum('amount');
                                
    $members = Member::where('colocation_id' , $colocationId)
                            ->whereNull('left_at')->get();
    $membersCount = $members->count();

    if($membersCount == 0){
        return ;
        }
        
        $share = $total / $membersCount;

        $paidPerUser = Expense::where('colocation_id' , $colocationId)
                                ->selectRaw('payer_id , SUM(amount)  as total_paid')
                                ->groupBy("payer_id")
                                // value with key
                                ->pluck('total_paid' , 'payer_id');

        $balances = [];

        foreach($members as $member){
            $paid = $paidPerUser[$member->user_id] ?? 0 ;

            $balance = $paid - $share;

            $balances[$member->user_id] = $balance;
        }


        $creditors = []; 
        $debtors  = []; 

        foreach($balances as $user_id => $balance){
            if($balance > 0 ){
                $creditors[$user_id] = $balance;
            }

                        if($balance < 0 ){
                $debtors[$user_id] = abs($balance);
            }
        }

        Settlement::where('colocation_id', $colocationId)
                ->where('status', 'pending')
                ->delete();

      foreach ($debtors as $debtorId => $debtorAmount) {
        foreach ($creditors as $creditorId => $creditAmount) {

        if ($debtorAmount <= 0) break;
        if ($creditors[$creditorId] <= 0) continue;

        $amountToPay = min($debtorAmount, $creditors[$creditorId]);

        Settlement::create([
            'colocation_id' => $colocationId,
            'debtor_id' => $debtorId,
            'creditor_id' => $creditorId,
            'amount' => $amountToPay,
            'status' => 'pending'
        ]);

        $debtorAmount -= $amountToPay;
        $creditors[$creditorId] -= $amountToPay;
    }
}
    }


    public function markAsPaid(Settlement $settlement){

    // dd($settlement);

    if ($settlement->debtor_id !== auth()->id()) {
        abort(403);
    }

     if ($settlement->status === 'paid') {
        return back();
    }

      $settlement->update([
        'status' => 'paid',
        'paid_at' => now()
    ]);

    return back()->with('success', 'Paiement confirmé');
    }




}
