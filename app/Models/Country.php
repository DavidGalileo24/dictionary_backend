<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    public function state(){
        return $this->hasMany(State::class);
    }


    /*Relationship: Company-user */
    public function userCustomer(){
        return $this->BelongsTo(UserCustomer::class);
    }

     /*Relationship: Company-user */
     public function company(){
        return $this->BelongsTo(Company::class);
    }
}
