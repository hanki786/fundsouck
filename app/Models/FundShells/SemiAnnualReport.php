<?php

namespace App\Models\FundShells;

use Illuminate\Database\Eloquent\Model;

class SemiAnnualReport extends Model
{
    protected $table = 'semi_annual_reports';


    protected $fillable = [
        'user_id', 'semi_annual_report','fund_identity_id','file_path', 'semi_annual_report_year', 'semi_annual_report_date','created_at','updated_at'
    ];
}
