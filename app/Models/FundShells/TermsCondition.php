<?php

namespace App\Models\FundShells;

use Illuminate\Database\Eloquent\Model;

class TermsCondition extends Model
{
    protected $table = 'terms_conditions';


    protected $fillable = [
        'user_id', 'prospectus','fund_identity_id', 'prospectus_date', 'file_path','created_at','updated_at'
    ];
}
