<?php

namespace App\Models\FundShells;

use Illuminate\Database\Eloquent\Model;

class LawsRegulation extends Model
{
    protected $table = 'laws_regulations';


    protected $fillable = [
        'user_id', 'cuits_directive', 'aifmd_directive', 'aifmd_status','fatca_compliant','giin_number','lei_code','last_update_date','created_at','updated_at'
    ];
}
