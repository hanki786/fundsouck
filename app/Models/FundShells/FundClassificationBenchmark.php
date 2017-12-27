<?php

namespace App\Models\FundShells;

use Illuminate\Database\Eloquent\Model;

class FundClassificationBenchmark extends Model
{
    protected $table = 'fund_classification_benchmarks';


    protected $fillable = [
        'user_id', 'fund_classification_id', 'fund_benchmark_id','created_at','updated_at'
    ];
}
