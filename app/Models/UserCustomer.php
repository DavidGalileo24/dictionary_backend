<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCustomer extends Model
{
    use HasFactory;

    protected $table = 'usercustomers';

    protected $fillable = [
        'name',
        'last_name',
        'email',
        'phone',
        'date_of_birth',
        'gender',
        'country_id',
        'state_id',
        'company_id'
    ];


    protected $cast = [
        'gender' => GenderEnum::class
    ];


    /*Inverse relationship: Company-user */
    public function company(){
        return $this->belongsTo(UserCustomer::class);
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
