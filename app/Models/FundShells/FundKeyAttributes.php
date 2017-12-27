<?php

namespace App\Models\FundShells;

use Illuminate\Database\Eloquent\Model;

class FundKeyAttributes extends Model
{
    protected $table = 'fund_key_attributes';


    protected $fillable = [
        'user_id', 'fund_currency', 'inception_date', 'inception_price_type', 'inception_price', 're_launch_date', 're_launch_price', 'maturity_date', 'fy_start_date', 'fy_end_date','guarantee','created_at','updated_at'
    ];
}
