<?php

namespace App\Models;
use App\Models\User;
use App\Models\Member;
use App\Models\Category;
use App\Models\Expense;


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

        public function members(){
            return $this->hasMany(Member::class);
        }

        public function categories(){
            return $this->hasMany(Category::class);
        }

        public function expenses(){
            return $this->hasMany(Expense::class);
        }


        public function settlements(){
            return $this->hassMany(Settlement::class);
        }




        }

