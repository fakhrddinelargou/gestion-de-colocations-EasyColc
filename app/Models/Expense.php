<?php

namespace App\Models;
use App\Models\Colocation;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $fillable = [
        'colocation_id',
        'payer_id',
        'category_id',
        'title',
        'amount',
        'expense_date',
    ];

    public function colocation(){
        return $this->belongTo(Colocation::class);
    }

    public function user(){
        return $this->belongsTo(User::class , 'payer_id');
    }


    public function category(){
        return $this->belongsTo(Category::class , 'category_id');
    }
}
