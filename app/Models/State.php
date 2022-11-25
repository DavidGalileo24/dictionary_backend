<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class State extends Model
{
    use HasFactory;


    protected $fillable = [
        'name', 'country_id'
    ];
    


     /*Relationship: Company-user */
     public function userCustomer(){
        return $this->BelongsTo(UserCustomer::class);
    }

    

     /*Relationship: Company-user */
     public function company(){
        return $this->BelongsTo(Company::class);
    }
}
