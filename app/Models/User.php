<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Colocation;
use App\Models\Expense;
use App\Models\Member;
class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'is_banned'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }


    public function colocation(){
        return $this->hasOne(Colocation::class , 'owner_id');
    }

    public function member(){
        return $this->hasOne(Member::class);
    }

    public function expenses(){
 
    return $this->hasMany(Expense::class);

    }

    public function debts()
{
    return $this->hasMany(Settlement::class, 'debtor_id');
}

public function credits()
{
    return $this->hasMany(Settlement::class, 'creditor_id');
}



}
