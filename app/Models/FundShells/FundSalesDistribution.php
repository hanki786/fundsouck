<?php

namespace App\Models\FundShells;

use Illuminate\Database\Eloquent\Model;

class FundSalesDistribution extends Model
{
    protected $table = 'fund_sales_distributions';


    protected $fillable = [
        'user_id', 'countries_of_distribution', 'registration_date', 'de_registration_date','created_at','updated_at'
    ];
}
