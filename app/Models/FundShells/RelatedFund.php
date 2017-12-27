<?php

namespace App\Models\FundShells;

use Illuminate\Database\Eloquent\Model;

class RelatedFund extends Model
{
    protected $table = 'related_funds';


    protected $fillable = [
        'user_id', 'status', 'vehicle_name', 'vehicle_code','umbrella_name','umbrella_code','created_at','updated_at'
    ];
}
