<?php

namespace App\Models\FundShells;

use Illuminate\Database\Eloquent\Model;

class Annual extends Model
{
    protected $table = 'annuals';


    protected $fillable = [
        'user_id', 'actual', 'min', 'max','currency','type','created_at','updated_at'
    ];
}
