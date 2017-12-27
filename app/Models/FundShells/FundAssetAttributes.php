<?php

namespace App\Models\FundShells;

use Illuminate\Database\Eloquent\Model;

class FundAssetAttributes extends Model
{
    protected $table = 'fund_asset_attributes';


    protected $fillable = [
        'user_id', 'status', 'asset_class', 'asset_universe','domicile','geo_focus','legal_form','stock_exchange_name','created_at','updated_at'
    ];
}
