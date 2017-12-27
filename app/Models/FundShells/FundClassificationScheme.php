<?php

namespace App\Models\FundShells;

use Illuminate\Database\Eloquent\Model;

class FundClassificationScheme extends Model
{
    protected $table = 'fund_classification_schemes';


    protected $fillable = [
        'user_id', 'fund_souk_classification', 'tadawul_fund_category','ammc_classification','cmf_classification','cmb_classification','created_at','updated_at'
    ];
}
