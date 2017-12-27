<?php

namespace App\Models\FundShells;

use Illuminate\Database\Eloquent\Model;

class FundBenchmarks extends Model
{
    protected $table = 'fund_benchmarks';


    protected $fillable = [
        'user_id', 'fund_manager_benchmark', 'fund_souk_benchmark', 'risk_free_rate','created_at','updated_at'
    ];
}
