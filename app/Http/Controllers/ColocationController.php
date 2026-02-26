<?php

namespace App\Http\Controllers;
use App\Models\Colocation;
use Illuminate\Http\Request;
use App\Http\Requests\StoreColocationRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;


class ColocationController extends Controller
{
    public function index(){
      $colocations = Colocation::all();
      return  view('colocation/colocations-home' , compact('colocations'));
    }
    
    public function store(StoreColocationRequest $request){
    
    $colocation = $request->validated();

    $colocation['owner_id'] = auth()->id();

    // dd($colocation);
    Colocation::create($colocation);

    return Redirect::route('colocations');
    }

    public function show(Request $request){
      $colocation  = Colocation::find($request->id);
      return view('colocation/colocations' , compact('colocation'));
    }


}
