<?php

namespace App\Models\FundShells;

use Illuminate\Database\Eloquent\Model;

class ThemesAttributes extends Model
{
    protected $table = 'themes_attributes';


    protected $fillable = [
        'user_id', 'fofs_external', 'fofs_internal', 'f_of_etfs', 'f_of_reits', 'f_of_hfs', 'f_of_pefs', 'hedged', 'index_tracking', 'index_replication_method','shariah_compliant','leveraged','created_at','updated_at'
    ];
}
