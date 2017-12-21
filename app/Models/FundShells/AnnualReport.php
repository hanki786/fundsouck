<?php

namespace App\Models\FundShells;

use Illuminate\Database\Eloquent\Model;

class AnnualReport extends Model
{
    protected $table = 'annual_reports';


    protected $fillable = [
        'user_id', 'financial_statement','fund_identity_id','file_path', 'financial_statement_year', 'financial_statement_date','created_at','updated_at'
    ];
}
