<?php

namespace App\Models\FundShells;

use Illuminate\Database\Eloquent\Model;

class FundRiskRatio extends Model
{
    protected $table = 'fund_risk_ratios';


    protected $fillable = [
        'user_id', 'bear_beta', 'beta', 'bull_beta','bull_bear_beta_ratio','calmar_ratio','correlation',
        'covariance','downside_deviation','information_ratio','israelsen_ratio','alpha','kurtosis',
        'synthetic_risk_reward_indicator','maximum_drawdown','maximum_drawdown_period','maximum_gain','maximum_loss',
        'negative_periods','omega','positive_periods','recovery_period','return_risk','r_squared','semi_deviation',
        'semi_variance','sharpe_ratio','skewness','sortino_ratio','standard_deviation','standard_error','sterling_ratio',
        'terynor_ratio','tracking_error','upside_deviaton','variance','active_share','knaar_perflow_ratio','created_at','updated_at'
    ];
}
