<?php

namespace App\Models\IndexShells;

use Illuminate\Database\Eloquent\Model;

class IndexFact extends Model
{
    protected $table = 'index_facts';


    protected $fillable = [
        'user_id', 'index_name', 'index_code', 'index_objective 	',' 	index_investability','index_weighting',
        ' 	component_number','auditor_fees',' 	review_frequency','calculation','base_value','base_date',
        'introduction_date','settlement_procedure','index_provider','created_at','updated_at'
    ];
}
