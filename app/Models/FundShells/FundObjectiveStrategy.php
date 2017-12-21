<?php

namespace App\Models\FundShells;

use Illuminate\Database\Eloquent\Model;

class FundObjectiveStrategy extends Model
{
    protected $table = 'fund_objective_strategies';


    protected $fillable = [
        'user_id', 'short_objective', 'detailed_objective', 'investment_strategy', 'recommended_investment_horizon', 'risk_profile', 'types_of_risk','created_at','updated_at'
    ];
}
