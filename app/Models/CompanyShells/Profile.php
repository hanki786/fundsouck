<?php

namespace App\Models\CompanyShells;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $table = 'profiles';


    protected $fillable = [
        'user_id', 'legal_name', 'common_name', 'fund_souk_code ',' commercial_registration_number',' 	role',
        ' chairman','ceo','register_number','regulator_authorization_number','authorization_date',' 	share_capital',
        'share_capital_currency','created_at','updated_at'
    ];
}
