<?php

namespace App\Http\Controllers;
use App\Models\Colocation;
use App\Models\Member;
use App\Models\Expense;
use App\Models\Settlement;
use Illuminate\Http\Request;
use App\Http\Requests\StoreColocationRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;


class ColocationController extends Controller
{
    public function index(){
      $colocations = Colocation::whereHas('members', function ($query) {
    $query->where('user_id', auth()->id())
          ->whereNull('left_at');
          })->get();
      
    //  dd($colocations);

      return  view('colocation/colocations-home' , compact('colocations'));
    }
    
    public function store(StoreColocationRequest $request){
    
    $colocation = $request->validated();
    $colocation['owner_id'] = auth()->id();
    $colocation = Colocation::create($colocation);

    Member::create([
    'colocation_id' => $colocation->id,
    'user_id' => auth()->id(),
    'role' => 'owner'
    ]);

    return Redirect::route('colocations');

    }

    public function show(Colocation $colocation){



      $members = Member::where('colocation_id', $colocation->id)
    ->whereNull('left_at')
    ->orderByRaw('user_id = ? DESC', [$colocation->owner_id])
    ->orderByDesc('created_at')
    ->get();
      $isOwner = $members->where('user_id' , auth()->id())
                 ->where('role' , 'owner')
                ->isNotEmpty();
      $colocation  = Colocation::find($colocation->id);

      $settlement = Settlement::where('colocation_id' , $colocation->id)
                                ->where('debtor_id' , auth()->id())
                                ->orwhere('creditor_id' , auth()->id())
                                ->get();

    //  dd($settlement);

      return view('colocation/colocations' , compact( 'colocation','members' , 'isOwner' , 'settlement'));
    }



    public function update(Colocation $colocation){

        $user = auth()->user();

        $member = Member::where('colocation_id' , $colocation->id)
                          ->where('user_id' , $user->id)
                          ->whereNull('left_at')
                          ->first();

        if (!$member) {
        return back()->with('error', 'Member not found.');
        }
        $nextOwner = null;            
      // for get next owner from members
        if($colocation->owner_id === $user->id){
          $nextOwner = Member::where('colocation_id' , $colocation->id )
                               ->where('user_id' , '!=' , $user->id)
                               ->orderByDesc('created_at')
                               ->first();
                               
                               
        if($nextOwner){
          $colocation->update([
                'owner_id' => $nextOwner->user_id
              ]);
              
              $nextOwner->update([
                'role' => 'owner'
                ]);
                
            }else{
                $colocation->delete();
                return redirect()->route('dashboard');
                }
                
                
                
                }

                $member->update([
                  'left_at' => now()
                  
                  ]);


                  $hasUnpaidDebt = Settlement::where('colocation_id', $colocation->id)
    ->where('debtor_id', $user->id)
    ->where('status', 'pending')
    ->exists();

  if ($hasUnpaidDebt) {
    $user->decrement('reputation');
} else {
    $user->increment('reputation');
}

        return redirect()->route('dashboard');


      }


      public function delete($id){

      $colocation = Colocation::find($id);
      $colocation->delete();

      return back();
      // dd($id);

      }
  

    


}
