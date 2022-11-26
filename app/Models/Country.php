<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;


    protected $fillable = [
        'name'
    ];

    /* Relationship: country-state */
    public function state(){
        return $this->hasMany(State::class);
    }


    /* Inverse relationship: user-country */
    public function userCustomer(){
        return $this->BelongsTo(UserCustomer::class);
    }

     /*Inverse relationship: country-company */
     public function company(){
        return $this->BelongsTo(Company::class);
    }
}
