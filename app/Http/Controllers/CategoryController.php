<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    

   public function store(Request $request){

//    dd($request);

   $request->validate([
    "name" => 'string|max:200'
   ]);

   Category::create([
    'name' => $request->name,
    'colocation_id' => $request->colocation_id
   ]);

   return redirect()->route('colocations.show' , $request->colocation_id);

   }
  

}
