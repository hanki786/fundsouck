<?php

namespace App\Models\FundShells;

use Illuminate\Database\Eloquent\Model;

class Redemption extends Model
{
    protected $table = 'redemptions';


    protected $fillable = [
        'user_id', 'minimum', 'frequency', 'payment_period','cut_off_time','business_days','last_update_date','created_at','updated_at'
    ];
}
