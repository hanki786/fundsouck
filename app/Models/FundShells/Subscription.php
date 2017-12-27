<?php

namespace App\Models\FundShells;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $table = 'subscriptions';


    protected $fillable = [
        'user_id', 'minimum_initial', 'additional', 'minimum_balance','currency','frequency','created_at','updated_at'
    ];
}
