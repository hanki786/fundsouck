<?php

namespace App\Models\FundShells;

use Illuminate\Database\Eloquent\Model;

class InvestorType extends Model
{
    protected $table = 'investor_types';


    protected $fillable = [
        'user_id', 'institutional', 'retail', 'hnw','uhnw','qualified','private','created_at','updated_at'
    ];
}
