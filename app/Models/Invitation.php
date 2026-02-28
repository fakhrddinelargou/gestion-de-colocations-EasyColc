<?php

namespace App\Models;

use App\Models\Colocation;
use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    protected $fillable = [
        'colocation_id',
        'email',
        'token',
        'status'
    ];


    public function colocation(){
        return $this->belongsTo(Colocation::class  , 'colocation_id');
    }

}
