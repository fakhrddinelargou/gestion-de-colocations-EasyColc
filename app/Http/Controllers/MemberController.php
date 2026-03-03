<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;


class MemberController extends Controller
{
   

  public function remove($id){

      
      $member = Member::find($id);
      $member->update([
        'left_at' => now()
      ]);

      return back();
    
      }



}
