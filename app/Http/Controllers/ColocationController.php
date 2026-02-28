<?php

namespace App\Http\Controllers;
use App\Models\Colocation;
use App\Models\Member;
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

    public function show(Request $request){
      $members = Member::where("colocation_id" , $request->id)->get();
      $isOwner = $members->where('user_id' , auth()->id())
                 ->where('role' , 'owner')
                 ->isNotEmpty();
      $colocation  = Colocation::find($request->id);
      return view('colocation/colocations' , compact( 'colocation','members' , 'isOwner'));
    }





}
