<?php

namespace App\Models\FundShells;

use Illuminate\Database\Eloquent\Model;

class FundIdentity extends Model
{

    protected $table = 'fund_identities';


    protected $fillable = [
        'user_id', 'fund_souk_code', 'fund_name', 'fund_short_name','created_at','updated_at'
    ];

}
