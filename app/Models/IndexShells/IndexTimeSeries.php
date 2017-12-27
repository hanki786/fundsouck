<?php

namespace App\Models\IndexShells;

use Illuminate\Database\Eloquent\Model;

class IndexTimeSeries extends Model
{
    protected $table = 'index_time_series';


    protected $fillable = [
        'user_id', 'index_price', ' index_price_date', 'index_net_return ','index_gross_return','created_at','updated_at'
    ];
}
