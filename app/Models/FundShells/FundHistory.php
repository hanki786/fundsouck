<?php

namespace App\Models\FundShells;

use Illuminate\Database\Eloquent\Model;

class FundHistory extends Model
{
    protected $table = 'fund_histories';


    protected $fillable = [
        'user_id', 'liquidation_date', 'successor', 'successor_code','succession_date','extended_history_date','availble_history_date','primary_share_class_name','primary_share_class_code','portfolio_name','portfolio_code','created_at','updated_at'
    ];
}
