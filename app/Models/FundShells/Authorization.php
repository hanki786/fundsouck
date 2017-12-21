<?php

namespace App\Models\FundShells;

use Illuminate\Database\Eloquent\Model;

class Authorization extends Model
{
    protected $table = 'authorizations';


    protected $fillable = [
        'user_id', 'authorization_number', 'authorization_date', 'prospectus_visa_number','prospectus_visa_date','regulator','created_at','updated_at'
    ];
}
