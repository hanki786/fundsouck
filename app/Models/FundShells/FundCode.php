<?php

namespace App\Models\FundShells;

use Illuminate\Database\Eloquent\Model;

class FundCode extends Model
{
    protected $table = 'fund_codes';


    protected $fillable = [
        'user_id', 'isin_code', 'isin_currency_class_code', 'tadawul_fund_code', 'maroclear_code', 'stock_exchange_ticker', 'etf_ticker', 'turkish_fund_code', 'cusip', 'polish_rfi_code','johannesburg_se_code','sedol_code','valoren_code','wkngerman_code','indonesian_sec_code','created_at','updated_at'
    ];
}
