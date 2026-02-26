<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Colocation extends Model
{
    protected $fillable = [
        'name',
        'description',
        'owner_id'
    ];

    public function user(){
        return $this->belongsTo(User::class , 'owner_id');
        }
}
