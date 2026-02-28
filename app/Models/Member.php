<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Colocation;
use App\Models\User;

class Member extends Model
{
    
    protected $fillable = [
        'colocation_id',
        'user_id',
        'role',
        'colocation_id',
        'left_at'
    ];



     public function colocation(){
        return $this->belongsTo(Colocation::class);
    }

    public function user(){
        return $this->belongsTo(User::class , 'user_id');
    }
}
