<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Colocation;


class Settlement extends Model
{

protected $fillable = [
    'colocation_id',
    'debtor_id',
    'creditor_id',
    'amount',
    'status',
    'paid_at'
];

public function colocation(){
    return $this->belongTo(Colocation::class , 'colocation_id' );
}

public function debtor()
{
    return $this->belongsTo(User::class, 'debtor_id');
}

public function creditor()
{
    return $this->belongsTo(User::class, 'creditor_id');
}
}
