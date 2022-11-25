<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCustomer extends Model
{
    use HasFactory;


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

}
