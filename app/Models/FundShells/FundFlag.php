<?php

namespace App\Models\FundShells;

use Illuminate\Database\Eloquent\Model;

class FundFlag extends Model
{
    protected $table = 'fund_flags';


    protected $fillable = [
        'user_id', 'closed_fund', 'closed_end_fund', 'exchange_listed','primary_share_class','vehicle','umbrella','exchange_traded_fund','government_bond','corporate_bond','asset_backed_securities','futures_and_options','infrastructure_fund','hedge_fund_non_reporting','insurance_funds','short','linked_fund','pre_ipo','private_fund','provident_fund','reit','eltif','created_at','updated_at'
    ];
}
