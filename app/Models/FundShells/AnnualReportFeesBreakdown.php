<?php

namespace App\Models\FundShells;

use Illuminate\Database\Eloquent\Model;

class AnnualReportFeesBreakdown extends Model
{
    protected $table = 'annual_report_fees_breakdowns';


    protected $fillable = [
        'user_id', 'fund_manager_fees', 'investment_advisor_fees', 'distribution_fees','board_members_fees','shariah_comitee_fees',
        'transfer_agent_fees','auditor_fees','administrator_fees','publication_fees','regulator_fees','created_at','updated_at'
    ];
}
