<?php

namespace App\Http\Controllers;

use App\Models\FundShells\Annual;
use App\Models\FundShells\AnnualReport;
use App\Models\FundShells\AnnualReportFeesBreakdown;
use App\Models\FundShells\AssetClassAllocation;
use App\Models\FundShells\Authorization;
use App\Models\FundShells\BoardMembers;
use App\Models\FundShells\Charges;
use App\Models\FundShells\ChargesRedemption;
use App\Models\FundShells\ComplianceOfficer;
use App\Models\FundShells\CountryAllocation;
use App\Models\FundShells\CurrencyAllocation;
use App\Models\FundShells\DebtorQualityAllocation;
use App\Models\FundShells\FundAssetAttributes;
use App\Models\FundShells\FundBenchmarks;
use App\Models\FundShells\FundClassificationBenchmark;
use App\Models\FundShells\FundClassificationScheme;
use App\Models\FundShells\FundCode;
use App\Models\FundShells\FundDocuments;
use App\Models\FundShells\FundFlag;
use App\Models\FundShells\FundHistory;
use App\Models\FundShells\FundIncomeSetting;
use App\Models\FundShells\FundKeyAttributes;
use App\Models\FundShells\FundManager;
use App\Models\FundShells\FundNote;
use App\Models\FundShells\FundObjectiveStrategy;
use App\Models\FundShells\FundPerformance;
use App\Models\FundShells\FundRiskRatio;
use App\Models\FundShells\FundSalesDistribution;
use App\Models\FundShells\FundTimeSeries;
use App\Models\FundShells\Initial;
use App\Models\FundShells\InvestorType;
use App\Models\FundShells\KeyInvestorInformationDocument;
use App\Models\FundShells\LawsRegulation;
use App\Models\FundShells\MaturityDateAllocation;
use App\Models\FundShells\Redemption;
use App\Models\FundShells\RelatedFund;
use App\Models\FundShells\SemiAnnualReport;
use App\Models\FundShells\ShariaCommittee;
use App\Models\FundShells\SourcedStatistic;
use App\Models\FundShells\Subscription;
use App\Models\FundShells\TermsCondition;
use App\Models\FundShells\ThemesAttributes;
use App\Models\FundShells\TopAllocation;
use App\Models\FundShells\ValuationFrequency;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\User\User;
use App\Models\FundShells\FundIdentity;

use Carbon\Carbon;
use DB;
use Auth;
use Hash;
use Illuminate\Http\Response;
use Validator;
use View;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{
    public function fund_overview(Request $request){

        $fund_key = null;
        if(isset($request['fund_key'])){
            $fund_key = $request['fund_key'];
        }
        $fund_identities = FundIdentity::all();

        if($fund_key){
            $fi = FundIdentity::where('fund_name', 'LIKE', "%$fund_key%")
                ->orwhere('fund_short_name', 'LIKE', "%$fund_key%")->first();
            $fos = FundObjectiveStrategy::whereFundIdentityId($fi->id)->first();
            $faa = FundAssetAttributes::whereFundIdentityId($fi->id)->first();
            $fcb = FundClassificationScheme::whereFundIdentityId($fi->id)->first();
            $fcb1 = FundBenchmarks::whereFundIdentityId($fi->id)->first();
            $fka = FundKeyAttributes::whereFundIdentityId($fi->id)->first();
            $fsd = FundSalesDistribution::whereFundIdentityId($fi->id)->first();
            $s = Subscription::whereFundIdentityId($fi->id)->first();
            $r = Redemption::whereFundIdentityId($fi->id)->first();
        }else{
            $fi = FundIdentity::whereId($request['fund_identity_id'])->first();
            $fos = FundObjectiveStrategy::whereFundIdentityId($request['fund_identity_id'])->first();
            $faa = FundAssetAttributes::whereFundIdentityId($request['fund_identity_id'])->first();
            $fcb = FundClassificationScheme::whereFundIdentityId($request['fund_identity_id'])->first();
            $fcb1 = FundBenchmarks::whereFundIdentityId($request['fund_identity_id'])->first();
            $fka = FundKeyAttributes::whereFundIdentityId($request['fund_identity_id'])->first();
            $fsd = FundSalesDistribution::whereFundIdentityId($request['fund_identity_id'])->first();
            $s = Subscription::whereFundIdentityId($request['fund_identity_id'])->first();
            $r = Redemption::whereFundIdentityId($request['fund_identity_id'])->first();
        }

        $data_array = [
            'fund_identity_id' => $request['fund_identity_id'] or $fund_key,
            'fund_identities' => $fund_identities,
            'fi' => $fi,
            'fos' => $fos,
            'faa' => $faa,
            'fcb' => $fcb,
            'fcb1' => $fcb1,
            'fka' => $fka,
            'fsd' => $fsd,
            's' => $s,
            'r' => $r,
        ];
        return view('website.fund_overview',$data_array);
    }

    public function fund_overview_result(Request $request){

        $fund_key = null;
        if(isset($request['fund_key'])){
            $fund_key = $request['fund_key'];
        }
        $fund_identities = FundIdentity::all();

        if($fund_key){
            $fi = FundIdentity::where('fund_name', 'LIKE', "%$fund_key%")
                ->orwhere('fund_short_name', 'LIKE', "%$fund_key%")->first();
            $fos = FundObjectiveStrategy::whereFundIdentityId($fi->id)->first();
            $faa = FundAssetAttributes::whereFundIdentityId($fi->id)->first();
            $fcb = FundClassificationScheme::whereFundIdentityId($fi->id)->first();
            $fcb1 = FundBenchmarks::whereFundIdentityId($fi->id)->first();
            $fka = FundKeyAttributes::whereFundIdentityId($fi->id)->first();
            $fsd = FundSalesDistribution::whereFundIdentityId($fi->id)->first();
            $s = Subscription::whereFundIdentityId($fi->id)->first();
            $r = Redemption::whereFundIdentityId($fi->id)->first();
        }else{
            $fi = FundIdentity::whereId($request['fund_identity_id'])->first();
            $fos = FundObjectiveStrategy::whereFundIdentityId($request['fund_identity_id'])->first();
            $faa = FundAssetAttributes::whereFundIdentityId($request['fund_identity_id'])->first();
            $fcb = FundClassificationScheme::whereFundIdentityId($request['fund_identity_id'])->first();
            $fcb1 = FundBenchmarks::whereFundIdentityId($request['fund_identity_id'])->first();
            $fka = FundKeyAttributes::whereFundIdentityId($request['fund_identity_id'])->first();
            $fsd = FundSalesDistribution::whereFundIdentityId($request['fund_identity_id'])->first();
            $s = Subscription::whereFundIdentityId($request['fund_identity_id'])->first();
            $r = Redemption::whereFundIdentityId($request['fund_identity_id'])->first();
        }

        $data_array = [
            'fund_identity_id' => $request['fund_identity_id'] or $fund_key,
            'fund_identities' => $fund_identities,
            'fi' => $fi,
            'fos' => $fos,
            'faa' => $faa,
            'fcb' => $fcb,
            'fcb1' => $fcb1,
            'fka' => $fka,
            'fsd' => $fsd,
            's' => $s,
            'r' => $r,
        ];
        return view('website.fund_overview_result',$data_array);
    }

    public function fund_overview_search(Request $request){

        $fund_key = null;
        if(isset($request['fund_key'])){
            $fund_key = $request['fund_key'];
        }
        $fund_identities = FundIdentity::all();
        $fi = FundIdentity::where('fund_name', 'LIKE', "%$fund_key%")
            ->orwhere('fund_short_name', 'LIKE', "%$fund_key%")->get();


        $data_array = [
            'fund_identity_id' => $request['fund_identity_id'] or $fund_key,
            'fund_identities' => $fund_identities,
            'fi' => $fi,
        ];
        $body = View::make('website.search',$data_array)->render();
        return response()->json($body);
    }

    public function fund_attributes(Request $request){

        $fund_identities = FundIdentity::all();

        $fh = FundHistory::whereFundIdentityId($request['fund_identity_id'])->first();
        $rf = RelatedFund::whereFundIdentityId($request['fund_identity_id'])->first();
        $ta = ThemesAttributes::whereFundIdentityId($request['fund_identity_id'])->first();
        $it = InvestorType::whereFundIdentityId($request['fund_identity_id'])->first();
        $ff = FundFlag::whereFundIdentityId($request['fund_identity_id'])->first();
        $fc = FundCode::whereFundIdentityId($request['fund_identity_id'])->first();

        $data_array = [
            'fund_identity_id' => $request['fund_identity_id'],
            'fund_identities' => $fund_identities,
            'fh' => $fh,
            'rf' => $rf,
            'ta' => $ta,
            'it' => $it,
            'ff' => $ff,
            'fc' => $fc,
        ];
        return view('website.fund_attribute',$data_array);
    }


    public function historical_prices_charts(Request $request){

        $fund_identities = FundIdentity::all();

        $fis = FundIncomeSetting::whereFundIdentityId($request['fund_identity_id'])->first();
        $fn = FundNote::whereFundIdentityId($request['fund_identity_id'])->first();
        $fund_net_assets = FundTimeSeries::whereFundIdentityId($request['fund_identity_id'])->select('fund_net_assets')->limit(9)->orderBy('last_valuation_date','desc')->get();
        $fund_net_asset = array();
        $f=0;
        foreach($fund_net_assets as $key => $fund_net){
            //$fund_net_asset[$f] = $fund_net['fund_net_assets'];
            $f = $f + 1;
        }
        $data_array = [
            'fund_identity_id' => $request['fund_identity_id'],
            'fund_identities' => $fund_identities,
            'fis' => $fis,
            'fn' => $fn,
            'fund_net_assets' => ($fund_net_assets),
        ];
        return view('website.historical_prices_charts',$data_array);
    }

    public function asset_valuation_flows(Request $request){

        $fund_identities = FundIdentity::all();

        $fts = FundTimeSeries::whereFundIdentityId($request['fund_identity_id'])->first();
        $vf = ValuationFrequency::whereFundIdentityId($request['fund_identity_id'])->first();

        $data_array = [
            'fund_identity_id' => $request['fund_identity_id'],
            'fund_identities' => $fund_identities,
            'fts' => $fts,
            'vf' => $vf,
        ];
        return view('website.asset_valuation_flows',$data_array);
    }

    public function fees_expenses(Request $request){

        $fund_identities = FundIdentity::all();

        $i = Initial::whereFundIdentityId($request['fund_identity_id'])->first();
        $a = Annual::whereFundIdentityId($request['fund_identity_id'])->first();
        $cr = ChargesRedemption::whereFundIdentityId($request['fund_identity_id'])->first();
        $arfb = AnnualReportFeesBreakdown::whereFundIdentityId($request['fund_identity_id'])->first();

        $data_array = [
            'fund_identity_id' => $request['fund_identity_id'],
            'fund_identities' => $fund_identities,
            'i' => $i,
            'a' => $a,
            'r' => $cr,
            'arfb' => $arfb,
        ];
        return view('website.fees_expenses',$data_array);
    }

    public function performance_risk_analytics(Request $request){

        $fund_identities = FundIdentity::all();

        $ss = SourcedStatistic::whereFundIdentityId($request['fund_identity_id'])->first();
        $fp = AssetClassAllocation::whereFundIdentityId($request['fund_identity_id'])->first();
        $frr = FundRiskRatio::whereFundIdentityId($request['fund_identity_id'])->first();

        $data_array = [
            'fund_identity_id' => $request['fund_identity_id'],
            'fund_identities' => $fund_identities,
            'ss' => $ss,
            'fp' => $fp,
            'frr' => $frr,
        ];
        return view('website.performance_risk_analytics',$data_array);
    }

    public function fund_holdings(Request $request){

        $fund_identities = FundIdentity::all();

        $ta = TopAllocation::whereFundIdentityId($request['fund_identity_id'])->orderBy('date','desc')->limit(10)->get();
        $aca = AssetClassAllocation::whereFundIdentityId($request['fund_identity_id'])->orderBy('date','desc')->limit(10)->get();
        $dqa = DebtorQualityAllocation::whereFundIdentityId($request['fund_identity_id'])->orderBy('date','desc')->limit(10)->get();
        $ca = CurrencyAllocation::whereFundIdentityId($request['fund_identity_id'])->orderBy('date','desc')->limit(10)->get();
        $ca1 = CountryAllocation::whereFundIdentityId($request['fund_identity_id'])->orderBy('date','desc')->limit(10)->get();
        $mda = MaturityDateAllocation::whereFundIdentityId($request['fund_identity_id'])->orderBy('date','desc')->limit(10)->get();

        $data_array = [
            'fund_identity_id' => $request['fund_identity_id'],
            'fund_identities' => $fund_identities,
            'ta' => $ta,
            'aca' => $aca,
            'dqa' => $dqa,
            'ca' => $ca,
            'ca1' => $ca1,
            'mda' => $mda,
        ];
        return view('website.fund_holdings',$data_array);
    }

    public function fund_documents(Request $request){

        $fund_identities = FundIdentity::all();

        $tc = TermsCondition::whereFundIdentityId($request['fund_identity_id'])->orderBy('prospectus_date','desc')->get();
        $ar = AnnualReport::whereFundIdentityId($request['fund_identity_id'])->orderBy('financial_statement_year','desc')->get();
        $sar = SemiAnnualReport::whereFundIdentityId($request['fund_identity_id'])->orderBy('semi_annual_report_date','desc')->get();
        $kid = KeyInvestorInformationDocument::whereFundIdentityId($request['fund_identity_id'])->orderBy('date','desc')->get();

        $data_array = [
            'fund_identity_id' => $request['fund_identity_id'],
            'fund_identities' => $fund_identities,
            'tc' => $tc,
            'ar' => $ar,
            'sar' => $sar,
            'kid' => $kid,
        ];
        return view('website.fund_documents',$data_array);
    }

    public function fund_people(Request $request){

        $fund_identities = FundIdentity::all();

        $fm = FundManager::whereFundIdentityId($request['fund_identity_id'])->get();
        $bm = BoardMembers::whereFundIdentityId($request['fund_identity_id'])->get();
        $sc = ShariaCommittee::whereFundIdentityId($request['fund_identity_id'])->get();

        $data_array = [
            'fund_identity_id' => $request['fund_identity_id'],
            'fund_identities' => $fund_identities,
            'fm' => $fm,
            'bm' => $bm,
            'sc' => $sc,
        ];
        return view('website.fund_people',$data_array);
    }

    public function fund_service_providers(Request $request){

        $fund_identities = FundIdentity::all();

        $fm = FundManager::whereFundIdentityId($request['fund_identity_id'])->get();
        $bm = BoardMembers::whereFundIdentityId($request['fund_identity_id'])->get();
        $sc = ShariaCommittee::whereFundIdentityId($request['fund_identity_id'])->get();

        $data_array = [
            'fund_identity_id' => $request['fund_identity_id'],
            'fund_identities' => $fund_identities,
            'fm' => $fm,
            'bm' => $bm,
            'sc' => $sc,
        ];
        return view('website.fund_service_providers',$data_array);
    }

    public function fund_compliance_regulations(Request $request){

        $fund_identities = FundIdentity::all();

        $co = ComplianceOfficer::whereFundIdentityId($request['fund_identity_id'])->first();
        $a = Authorization::whereFundIdentityId($request['fund_identity_id'])->first();
        $lr = LawsRegulation::whereFundIdentityId($request['fund_identity_id'])->first();

        $data_array = [
            'fund_identity_id' => $request['fund_identity_id'],
            'fund_identities' => $fund_identities,
            'co' => $co,
            'a' => $a,
            'lr' => $lr,
        ];
        return view('website.fund_compliance_regulations',$data_array);
    }

    public function getAdminDashboard(){
        if(Auth::check()){
            return redirect('/');
        }
        $fund_identities = FundIdentity::all();
        $fund_objective_strategies = FundObjectiveStrategy::all();

        $data_array = [
            'fund_identities' => $fund_identities,
            'fund_objective_strategies' => $fund_objective_strategies
        ];
        return view('admin.dashboard',$data_array);
    }

    public function login(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6|max:30'
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error]);
            }
        }
        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
                return redirect('dashboard')->withErrors('Congrats! you have been logged into system successfully.');
        }

        return redirect()->back()->withErrors('Sorry your email/password is incorrect');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|max:30',
            'confirm-password' => 'required|same:password',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error]);
            }
        }

        $user = User::create([
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'role_key' => 2
        ]);

        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
            return redirect('dashboard')->withErrors('Congrats! you have been registered system successfully.');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
