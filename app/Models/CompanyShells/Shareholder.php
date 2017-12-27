<?php

namespace App\Models\CompanyShells;

use Illuminate\Database\Eloquent\Model;

class Shareholder extends Model
{
    protected $table = 'shareholders';


    protected $fillable = [
        'user_id', 'shareholder_name', ' 	percentage','created_at','updated_at'
    ];
}
