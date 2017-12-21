<?php

namespace App\Models\FundShells;

use Illuminate\Database\Eloquent\Model;

class Initial extends Model
{
    protected $table = 'initials';


    protected $fillable = [
        'user_id', 'actual', 'min', 'max','amount','currency','type','created_at','updated_at'
    ];
}
