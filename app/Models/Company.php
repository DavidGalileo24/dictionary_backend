<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'email',
        'phone',
        'country_id',
        'state_id',
        'address'
    ];


    /*Relationship: Company-user */
    public function userCustomer(){
        return $this->hasOne(UserCustomer::class);
    }


    /*Inverse relationship: State-user */
    public function state(){
        return $this->belongsTo(State::class);
    }

    
    /*Inverse relationship: Country-user */
    public function country(){
        return $this->belongsTo(Country::class);
    }
}
