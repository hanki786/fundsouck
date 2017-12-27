<?php

namespace App\Models\FundShells;

use Illuminate\Database\Eloquent\Model;

class ComplianceOfficer extends Model
{
    protected $table = 'compliance_officers';


    protected $fillable = [
        'user_id', 'compliance_officer_name', 'telephone', 'fax','email','url','address','city','postal_code','country','created_at','updated_at'
    ];
}
