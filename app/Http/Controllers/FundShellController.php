<?php

namespace App\Http\Controllers;

use App\Models\CompanyShells\Address;
use App\Models\CompanyShells\Profile;
use App\Models\CompanyShells\Shareholder;
use App\Models\FundShells\Annual;
use App\Models\FundShells\AnnualReport;
use App\Models\FundShells\AnnualReportFeesBreakdown;
use App\Models\FundShells\Authorization;
use App\Models\FundShells\ChargesRedemption;
use App\Models\FundShells\ComplianceOfficer;
use App\Models\FundShells\FundAssetAttributes;
use App\Models\FundShells\FundBenchmarks;
use App\Models\FundShells\FundClassificationScheme;
use App\Models\FundShells\FundCode;
use App\Models\FundShells\FundFlag;
use App\Models\FundShells\FundHistory;
use App\Models\FundShells\FundClassificationBenchmark;
use App\Models\FundShells\FundIdentity;
use App\Models\FundShells\FundIncomeSetting;
use App\Models\FundShells\FundKeyAttributes;
use App\Models\FundShells\FundObjectiveStrategy;
use App\Models\FundShells\FundPerformance;
use App\Models\FundShells\FundRiskRatio;
use App\Models\FundShells\FundSalesDistribution;
use App\Models\FundShells\FundTimeSeries;
use App\Models\FundShells\MarketData;
use App\Models\FundShells\SemiAnnualReport;
use App\Models\FundShells\SourcedStatistic;
use App\Models\FundShells\TermsCondition;
use App\Models\FundShells\ValuationFrequency;
use App\Models\IndexShells\IndexFact;
use App\Models\FundShells\Initial;
use App\Models\FundShells\InvestorType;
use App\Models\FundShells\LawsRegulation;
use App\Models\FundShells\Redemption;
use App\Models\FundShells\FundAttribute;
use App\Models\FundShells\RelatedFund;
use App\Models\FundShells\Subscription;
use App\Models\FundShells\ThemesAttributes;
use App\Models\FundShells\FundIdentityPolicy;
use App\Models\IndexShells\IndexTimeSeries;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Validator;
use View;

class FundShellController extends Controller
{
    //Fund Identity & Policy
    public function createFundIdentityPolicy(Request $request)
    {


        $validator = Validator::make($request->all(), [
            'fund_identity_id' => 'required|exists:fund_identities,id',
            'fund_objective_strategy_id' => 'required|exists:fund_objective_strategies,id'
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $user = Auth::user();

        $fund_Identity = FundIdentityPolicy::create([
            'user_id' => $user->id,
            'fund_identity_id' => $request->fund_identity_id,
            'fund_objective_strategy_id' => $request->fund_objective_strategy_id,

        ]);

        return redirect()->back()->withErrors('Congrats! Record created successfully!');
    }

    public function removeFundIdentityPolicy($id)
    {
        $fund_identity = FundIdentityPolicy::find($id);
        $fund_identity->delete();
        return redirect()->back()->withErrors('Record has been deleted successfully!');
    }

    //Fund Identity
    public function createFundIdentity(Request $request)
    {


        $validator = Validator::make($request->all(), [
            'fund_name' => 'required|max:100',
            'fund_short_name' => 'required|max:30'
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $user = Auth::user();

        $fund_Identity = FundIdentity::create([
            'user_id' => $user->id,
            'fund_souk_code' => "",
            'fund_name' => $request->fund_name,
            'fund_short_name' => $request->fund_short_name,

        ]);

        $fundIdentity = FundIdentity::find($fund_Identity->id);
        $fundIdentity->fund_souk_code = "SA" . str_pad($fund_Identity->id, 6, '0', STR_PAD_LEFT) . "FS";
        $fundIdentity->save();

        return redirect()->back()->withErrors('Congrats! Fund Identity is created successfully.');
    }

    public function updateFundIdentity(Request $request, $fund_id)
    {

        $validator = Validator::make($request->all(), [
            'fund_name' => 'required|max:100',
            'fund_short_name' => 'required|max:30'
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $fundIdentity = FundIdentity::find($fund_id);
        $fundIdentity->user_id = $request->user_id;
        $fundIdentity->fund_souk_code = $request->fund_souk_code;
        $fundIdentity->fund_name = $request->fund_name;
        $fundIdentity->fund_short_name = $request->fund_short_name;
        $fundIdentity->save();


        return redirect()->back()->withErrors('Fund Identity is updated successfully.');
    }

    public function removeFundIdentity($id)
    {
        $fund_identity = FundIdentity::find($id);
        $fund_identity->delete();
        return redirect()->back()->withErrors('Fund Identity record is deleted successfully.');
    }

    //	Fund Objective & Strategy
    public function createFundObjectiveStrategy(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'fund_identity_id' => 'required|exists:fund_identities,id',
            'short_objective' => 'required',
            'detailed_objective' => 'required',
            'investment_strategy' => 'required',
            'recommended_investment_horizon' => 'required',
            'risk_profile' => 'required',
            'risk_type' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $user = Auth::user();

        FundObjectiveStrategy::create([
            'fund_identity_id' => $request->fund_identity_id,
            'user_id' => $user->id,
            'short_objective' => $request->short_objective,
            'detailed_objective' => $request->detailed_objective,
            'investment_strategy' => $request->investment_strategy,
            'recommended_investment_horizon' => $request->recommended_investment_horizon,
            'risk_profile' => $request->risk_profile,
            'types_of_risk' => $request->risk_type,

        ]);

        return redirect()->back()->withErrors('Congrats! Fund Objective & Strategy  is created successfully.');
    }

    public function updateFundObjectiveStrategy(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'short_objective' => 'required',
            'detailed_objective' => 'required',
            'investment_strategy' => 'required',
            'recommended_investment_horizon' => 'required',
            'risk_profile' => 'required',
            'risk_type' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $fundObjective = FundObjectiveStrategy::find($id);
        $fundObjective->user_id = $request->user_id;
        $fundObjective->short_objective = $request->short_objective;
        $fundObjective->detailed_objective = $request->detailed_objective;
        $fundObjective->investment_strategy = $request->investment_strategy;
        $fundObjective->recommended_investment_horizon = $request->recommended_investment_horizon;
        $fundObjective->risk_profile = $request->risk_profile;
        $fundObjective->types_of_risk = $request->risk_type;
        $fundObjective->save();


        return redirect()->back()->withErrors('Fund Objective & Strategy  is updated successfully.');
    }

    public function removeFundObjectiveStrategy($id)
    {
        $fund_objective_strategy = FundObjectiveStrategy::find($id);
        $fund_objective_strategy->delete();
        return redirect()->back()->withErrors('Fund Objective & Strategy record is deleted successfully.');
    }

    //Fund Attributes
    public function createFundAttributes(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'fund_key_attribute_id' => 'required|exists:fund_key_attributes,id',
            'fund_asset_attribute_id' => 'required|exists:fund_asset_attributes,id',
            'fund_sales_distribution_id' => 'required|exists:fund_sales_distributions,id',
            'fund_history_id' => 'required|exists:fund_histories,id',
            'related_fund_id' => 'required|exists:related_funds,id',
            'fund_flag_id' => 'required|exists:fund_flags,id',
            'investor_type_id' => 'required|exists:investor_types,id',
            'themes_attribute_id' => 'required|exists:themes_attributes,id'
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $user = Auth::user();

        $FundAttributes = FundAttribute::create([
            'user_id' => $user->id,
            'fund_key_attribute_id' => $request->fund_key_attribute_id,
            'fund_asset_attribute_id' => $request->fund_asset_attribute_id,
            'fund_sales_distribution_id' => $request->fund_sales_distribution_id,
            'fund_history_id' => $request->fund_history_id,
            'related_fund_id' => $request->related_fund_id,
            'fund_flag_id' => $request->fund_flag_id,
            'investor_type_id' => $request->investor_type_id,
            'themes_attribute_id' => $request->themes_attribute_id

        ]);

        return redirect()->back()->withErrors('Congrats! Record created successfully!');
    }

    public function removeFundAttributes($id)
    {
        $fund_identity = FundAttribute::find($id);
        $fund_identity->delete();
        return redirect()->back()->withErrors('Record has been deleted successfully!');
    }

    //	Fund Key Attributes
    public function createFundKeyAttributes(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'fund_identity_id' => 'required|exists:fund_identities,id',
            'fund_currency' => 'required',
            'inception_date' => 'required|date',
            'inception_price_type' => 'required',
            'inception_price' => 'required',
            're_launch_date' => 'required',
            're_launch_price' => 'required',
            'maturity_date' => 'required',
            'fy_start_date' => 'required',
            'fy_end_date' => 'required',
            'guarantee' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }
        $user = Auth::user();

        FundKeyAttributes::create([
            'user_id' => $user->id,
            'fund_identity_id' => $request->fund_identity_id,
            'fund_currency' => $request->fund_currency,
            'inception_date' => $request->inception_date,
            'inception_price_type' => $request->inception_price_type,
            'inception_price' => $request->inception_price,
            're_launch_date' => $request->re_launch_date,
            're_launch_price' => $request->re_launch_price,
            'maturity_date' => $request->maturity_date,
            'fy_start_date' => $request->fy_start_date,
            'fy_end_date' => $request->fy_end_date,
            'guarantee' => $request->guarantee,

        ]);

        return redirect()->back()->withErrors('Congrats! Fund Key Attribute is created successfully.');
    }

    public function updateFundKeyAttributes(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'fund_currency' => 'required',
            'inception_date' => 'required|date',
            'inception_price_type' => 'required',
            'inception_price' => 'required',
            're_launch_date' => 'required',
            're_launch_price' => 'required',
            'maturity_date' => 'required',
            'fy_start_date' => 'required',
            'fy_end_date' => 'required',
            'guarantee' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $fundkeyAttributes = FundKeyAttributes::find($id);
        $fundkeyAttributes->user_id = $request->user_id;
        $fundkeyAttributes->fund_currency = $request->fund_currency;
        $fundkeyAttributes->inception_date = $request->inception_date;
        $fundkeyAttributes->inception_price_type = $request->inception_price_type;
        $fundkeyAttributes->inception_price = $request->inception_price;
        $fundkeyAttributes->re_launch_date = $request->re_launch_date;
        $fundkeyAttributes->re_launch_price = $request->re_launch_price;
        $fundkeyAttributes->maturity_date = $request->maturity_date;
        $fundkeyAttributes->fy_start_date = $request->fy_start_date;
        $fundkeyAttributes->fy_end_date = $request->fy_end_date;
        $fundkeyAttributes->guarantee = $request->guarantee;
        $fundkeyAttributes->save();


        return redirect()->back()->withErrors('Fund Key Attribute is updated successfully.');

    }

    public function removeFundKeyAttributes($id)
    {
        $fund_key_attributes = FundKeyAttributes::find($id);
        $fund_key_attributes->delete();
        return redirect()->back()->withErrors('Fund Key Attribute record is deleted successfully.');
    }

    //  Fund Asset Attributes
    public function createFundAssetAttributes(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'fund_identity_id' => 'required|exists:fund_identities,id',
            'status' => 'required',
            'asset_class' => 'required',
            'asset_universe' => 'required',
            'domicile' => 'required',
            'geo_focus' => 'required',
            'legal_form' => 'required',
            'stock_exchange_name' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $user = Auth::user();

        FundAssetAttributes::create([
            'user_id' => $user->id,
            'fund_identity_id' => $request->fund_identity_id,
            'status' => $request->status,
            'asset_class' => $request->asset_class,
            'asset_universe' => $request->asset_universe,
            'domicile' => $request->domicile,
            'geo_focus' => $request->geo_focus,
            'legal_form' => $request->legal_form,
            'stock_exchange_name' => $request->stock_exchange_name,

        ]);

        return redirect()->back()->withErrors('Congrats! Fund Asset Attributes is created successfully.');
    }

    public function updateFundAssetAttributes(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'status' => 'required',
            'asset_class' => 'required',
            'asset_universe' => 'required',
            'domicile' => 'required',
            'geo_focus' => 'required',
            'legal_form' => 'required',
            'stock_exchange_name' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $fundAssetAttributes = FundAssetAttributes::find($id);
        $fundAssetAttributes->user_id = $request->user_id;
        $fundAssetAttributes->status = $request->status;
        $fundAssetAttributes->asset_class = $request->asset_class;
        $fundAssetAttributes->asset_universe = $request->asset_universe;
        $fundAssetAttributes->domicile = $request->domicile;
        $fundAssetAttributes->geo_focus = $request->geo_focus;
        $fundAssetAttributes->legal_form = $request->legal_form;
        $fundAssetAttributes->stock_exchange_name = $request->stock_exchange_name;
        $fundAssetAttributes->save();


        return redirect()->back()->withErrors('Fund Asset Attributes is updated successfully.');
    }

    public function removeFundAssetAttributes($id)
    {
        $fund_asset_attributes = FundAssetAttributes::find($id);
        $fund_asset_attributes->delete();
        return redirect()->back()->withErrors('Fund Asset Attributes record is deleted successfully.');
    }

    //  Fund Sales & Distribution
    public function createFundSalesDistribution(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'fund_identity_id' => 'required|exists:fund_identities,id',
            'countries_of_distribution' => 'required',
            'registration_date' => 'required',
            'de_registration_date' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $user = Auth::user();

        FundSalesDistribution::create([
            'fund_identity_id' => $request->fund_identity_id,
            'user_id' => $user->id,
            'countries_of_distribution' => $request->countries_of_distribution,
            'registration_date' => $request->registration_date,
            'de_registration_date' => $request->de_registration_date,

        ]);

        return redirect()->back()->withErrors('Congrats! Fund Sales & Distribution is created successfully.');
    }

    public function updateFundSalesDistribution(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'countries_of_distribution' => 'required',
            'registration_date' => 'required',
            'de_registration_date' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $fundSalesDistribution = FundSalesDistribution::find($id);
        $fundSalesDistribution->user_id = $request->user_id;
        $fundSalesDistribution->countries_of_distribution = $request->countries_of_distribution;
        $fundSalesDistribution->registration_date = $request->registration_date;
        $fundSalesDistribution->de_registration_date = $request->de_registration_date;
        $fundSalesDistribution->save();


        return redirect()->back()->withErrors('Fund Sales & Distribution is updated successfully.');
    }

    public function removeFundSalesDistribution($id)
    {
        $fund_sales_distribution = FundSalesDistribution::find($id);
        $fund_sales_distribution->delete();
        return redirect()->back()->withErrors('Fund Sales & Distribution record is deleted successfully.');
    }

    //  	Fund History
    public function createFundHistory(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'liquidation_date' => 'required',
            'successor_name' => 'required',
            'succession_date' => 'required',
            'extended_history_date' => 'required',
            'available_history_date' => 'required',
            'primary_share_class_name' => 'required',
            'portfolio_name' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $user = Auth::user();

        $fundHistory = FundHistory::create([
            'user_id' => $user->id,
            'liquidation_date' => $request->liquidation_date,
            'successor' => $request->successor_name,
            'successor_code' => "",
            'succession_date' => $request->succession_date,
            'extended_history_date' => $request->extended_history_date,
            'available_history_date' => $request->available_history_date,
            'primary_share_class_name' => $request->primary_share_class_name,
            'primary_share_class_code' => "",
            'portfolio_name' => $request->portfolio_name,
            'portfolio_code' => "",

        ]);

        $fundHistory = FundHistory::find($fundHistory->id);
        $fundHistory->primary_share_class_code = "SA" . str_pad($fundHistory->id, 6, '2', STR_PAD_LEFT) . "FS";
        $fundHistory->portfolio_code = "SA" . str_pad($fundHistory->id, 6, '3', STR_PAD_LEFT) . "FS";
        $fundHistory->save();

        return redirect()->back()->withErrors('Congrats! Fund History is created successfully.');
    }

    public function updateFundHistory(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'liquidation_date' => 'required',
            'successor_name' => 'required',
            'succession_date' => 'required',
            'extended_history_date' => 'required',
            'available_history_date' => 'required',
            'primary_share_class_name' => 'required',
            'portfolio_name' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $fundHistory = FundHistory::find($id);
        $fundHistory->user_id = $request->user_id;
        $fundHistory->liquidation_date = $request->liquidation_date;
        $fundHistory->successor = $request->successor_name;
        $fundHistory->succession_date = $request->succession_date;
        $fundHistory->extended_history_date = $request->extended_history_date;
        $fundHistory->available_history_date = $request->available_history_date;
        $fundHistory->primary_share_class_name = $request->primary_share_class_name;
        $fundHistory->portfolio_name = $request->portfolio_name;
        $fundHistory->save();


        return redirect()->back()->withErrors('Fund History is updated successfully.');
    }

    public function removeFundHistory($id)
    {
        $fund_history = FundHistory::find($id);
        $fund_history->delete();
        return redirect()->back()->withErrors('Fund History record is deleted successfully.');
    }

    //  	Related Funds
    public function createRelatedFunds(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'vehicle_name' => 'required',
            'umbrella_name' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $user = Auth::user();

        $relatedFund = RelatedFund::create([
            'user_id' => $user->id,
            'vehicle_name' => $request->vehicle_name,
            'vehicle_code' => "",
            'umbrella_name' => $request->umbrella_name,
            'umbrella_code' => "",

        ]);

        $relatedFund = RelatedFund::find($relatedFund->id);
        $relatedFund->vehicle_code = "SA" . str_pad("", 3, '3', STR_PAD_LEFT) . str_pad($relatedFund->id, 3, '0', STR_PAD_LEFT) . "FS";
        $relatedFund->umbrella_code = "SA" . str_pad("", 3, '4', STR_PAD_LEFT) . str_pad($relatedFund->id, 3, '0', STR_PAD_LEFT) . "FS";
        $relatedFund->save();

        return redirect()->back()->withErrors('Congrats! Related Funds is created successfully.');
    }

    public function updateRelatedFunds(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'vehicle_name' => 'required',
            'umbrella_name' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }


        $relatedFund = RelatedFund::find($id);
        $relatedFund->user_id = $request->user_id;
        $relatedFund->vehicle_name = $request->vehicle_name;
        $relatedFund->umbrella_name = $request->umbrella_name;
        $relatedFund->save();


        return redirect()->back()->withErrors('Related Funds is updated successfully.');
    }

    public function removeRelatedFunds($id)
    {
        $related_funds = RelatedFund::find($id);
        $related_funds->delete();
        return redirect()->back()->withErrors('Related Funds record is deleted successfully.');
    }

    //  	Fund Flags
    public function createFundFlags(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'closed_fund' => 'required',
            'closed_end_fund' => 'required',
            'exchange_listed' => 'required',
            'vehicle' => 'required',
            'umbrella' => 'required',
            'exchange_traded_fund' => 'required',
            'government_bond' => 'required',
            'corporate_bond' => 'required',
            'asset_backed_securities' => 'required',
            'futures_and_options' => 'required',
            'infrastructure_fund' => 'required',
            'hedge_fund' => 'required',
            'insurance_funds' => 'required',
            'short' => 'required',
            'linked_fund' => 'required',
            'pre_ipo' => 'required',
            'private_fund' => 'required',
            'provident_fund' => 'required',
            'reit' => 'required',
            'eltif' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $user = Auth::user();

        FundFlag::create([
            'user_id' => $user->id,
            'closed_fund' => $request->closed_fund,
            'closed_end_fund' => $request->closed_end_fund,
            'exchange_listed' => $request->exchange_listed,
            'vehicle' => $request->vehicle,
            'umbrella' => $request->umbrella,
            'exchange_traded_fund' => $request->exchange_traded_fund,
            'government_bond' => $request->government_bond,
            'corporate_bond' => $request->corporate_bond,
            'asset_backed_securities' => $request->asset_backed_securities,
            'futures_and_options' => $request->futures_and_options,
            'infrastructure_fund' => $request->infrastructure_fund,
            'hedge_fund_non_reporting' => $request->hedge_fund,
            'insurance_funds' => $request->insurance_funds,
            'short' => $request->short,
            'linked_fund' => $request->linked_fund,
            'pre_ipo' => $request->pre_ipo,
            'private_fund' => $request->private_fund,
            'provident_fund' => $request->provident_fund,
            'reit' => $request->reit,
            'eltif' => $request->eltif,

        ]);


        return redirect()->back()->withErrors('Congrats! Fund Flags is created successfully.');
    }

    public function updateFundFlags(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'closed_fund' => 'required',
            'closed_end_fund' => 'required',
            'exchange_listed' => 'required',
            'vehicle' => 'required',
            'umbrella' => 'required',
            'exchange_traded_fund' => 'required',
            'primary_share_class' => 'required',
            'government_bond' => 'required',
            'corporate_bond' => 'required',
            'asset_backed_securities' => 'required',
            'futures_and_options' => 'required',
            'infrastructure_fund' => 'required',
            'hedge_fund' => 'required',
            'insurance_funds' => 'required',
            'short' => 'required',
            'linked_fund' => 'required',
            'pre_ipo' => 'required',
            'private_fund' => 'required',
            'provident_fund' => 'required',
            'reit' => 'required',
            'eltif' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $fundFlags = FundFlag::find($id);
        $fundFlags->user_id = $request->user_id;
        $fundFlags->closed_fund = $request->closed_fund;
        $fundFlags->closed_end_fund = $request->closed_end_fund;
        $fundFlags->exchange_listed = $request->exchange_listed;
        $fundFlags->vehicle = $request->vehicle;
        $fundFlags->umbrella = $request->umbrella;
        $fundFlags->exchange_traded_fund = $request->exchange_traded_fund;
        $fundFlags->primary_share_class = $request->primary_share_class;
        $fundFlags->corporate_bond = $request->corporate_bond;
        $fundFlags->asset_backed_securities = $request->asset_backed_securities;
        $fundFlags->futures_and_options = $request->futures_and_options;
        $fundFlags->infrastructure_fund = $request->infrastructure_fund;
        $fundFlags->hedge_fund_non_reporting = $request->hedge_fund;
        $fundFlags->insurance_funds = $request->insurance_funds;
        $fundFlags->short = $request->short;
        $fundFlags->linked_fund = $request->linked_fund;
        $fundFlags->pre_ipo = $request->pre_ipo;
        $fundFlags->private_fund = $request->private_fund;
        $fundFlags->provident_fund = $request->provident_fund;
        $fundFlags->reit = $request->reit;
        $fundFlags->eltif = $request->eltif;
        $fundFlags->save();


        return redirect()->back()->withErrors('Fund Flags is updated successfully.');
    }

    public function removeFundFlags($id)
    {
        $fund_flags = FundFlag::find($id);
        $fund_flags->delete();
        return redirect()->back()->withErrors('Fund Flags record is deleted successfully.');
    }

    //  	Investor Type
    public function createInvestorType(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'institutional' => 'required',
            'retail' => 'required',
            'hnw' => 'required',
            'uhnw' => 'required',
            'qualified' => 'required',
            'private' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $user = Auth::user();

        InvestorType::create([
            'user_id' => $user->id,
            'institutional' => $request->institutional,
            'retail' => $request->retail,
            'hnw' => $request->hnw,
            'uhnw' => $request->uhnw,
            'qualified' => $request->qualified,
            'private' => $request->private,

        ]);


        return redirect()->back()->withErrors('Congrats! Investor Type is added successfully.');
    }

    public function updateInvestorType(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'institutional' => 'required',
            'retail' => 'required',
            'hnw' => 'required',
            'uhnw' => 'required',
            'qualified' => 'required',
            'private' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $investorType = InvestorType::find($id);
        $investorType->user_id = $request->user_id;
        $investorType->institutional = $request->institutional;
        $investorType->retail = $request->retail;
        $investorType->hnw = $request->hnw;
        $investorType->uhnw = $request->uhnw;
        $investorType->qualified = $request->qualified;
        $investorType->private = $request->private;
        $investorType->save();

        return redirect()->back()->withErrors('Investor Type is updated successfully.');

    }

    public function removeInvestorType($id)
    {
        $investor_type = InvestorType::find($id);
        $investor_type->delete();
        return redirect()->back()->withErrors('Investor Type record is deleted successfully.');
    }

    //  	Themes Attributes
    public function createThemesAttributes(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'fofs_external' => 'required',
            'fofs_internal' => 'required',
            'f_of_etfs' => 'required',
            'f_of_reits' => 'required',
            'f_of_hfs' => 'required',
            'f_of_pefs' => 'required',
            'hedged' => 'required',
            'index_tracking' => 'required',
            'index_replication_method' => 'required',
            'shariah_compliant' => 'required',
            'leveraged' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $user = Auth::user();

        ThemesAttributes::create([
            'user_id' => $user->id,
            'fofs_external' => $request->fofs_external,
            'fofs_internal' => $request->fofs_internal,
            'f_of_etfs' => $request->f_of_etfs,
            'f_of_reits' => $request->f_of_reits,
            'f_of_hfs' => $request->f_of_hfs,
            'f_of_pefs' => $request->f_of_pefs,
            'hedged' => $request->hedged,
            'index_tracking' => $request->index_tracking,
            'index_replication_method' => $request->index_replication_method,
            'shariah_compliant' => $request->shariah_compliant,
            'leveraged' => $request->leveraged,

        ]);


        return redirect()->back()->withErrors('Congrats! Themes Attributes is added successfully.');
    }

    public function updateThemesAttributes(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'fofs_external' => 'required',
            'fofs_internal' => 'required',
            'f_of_etfs' => 'required',
            'f_of_reits' => 'required',
            'f_of_hfs' => 'required',
            'f_of_pefs' => 'required',
            'hedged' => 'required',
            'index_tracking' => 'required',
            'index_replication_method' => 'required',
            'shariah_compliant' => 'required',
            'leveraged' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $themeAttributes = ThemesAttributes::find($id);
        $themeAttributes->user_id = $request->user_id;
        $themeAttributes->fofs_external = $request->fofs_external;
        $themeAttributes->fofs_internal = $request->fofs_internal;
        $themeAttributes->f_of_etfs = $request->f_of_etfs;
        $themeAttributes->f_of_reits = $request->f_of_reits;
        $themeAttributes->f_of_hfs = $request->f_of_hfs;
        $themeAttributes->f_of_pefs = $request->f_of_pefs;
        $themeAttributes->hedged = $request->hedged;
        $themeAttributes->index_tracking = $request->index_tracking;
        $themeAttributes->index_replication_method = $request->index_replication_method;
        $themeAttributes->shariah_compliant = $request->shariah_compliant;
        $themeAttributes->leveraged = $request->leveraged;
        $themeAttributes->save();

        return redirect()->back()->withErrors('Themes Attributes is updated successfully.');
    }

    public function removeThemesAttributes($id)
    {
        $themes_attributes = ThemesAttributes::find($id);
        $themes_attributes->delete();
        return redirect()->back()->withErrors('Themes Attributes record is deleted successfully.');
    }

    //  	Fund Codes
    public function createFundCodes(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'isin_code' => 'required',
            'isin_currency_class_code' => 'required',
            'tadawul_fund_code' => 'required',
            'maroclear_code' => 'required',
            'stock_exchange_ticker' => 'required',
            'etf_ticker' => 'required',
            'turkish_fund_code' => 'required',
            'cusip' => 'required',
            'polish_rfi_code' => 'required',
            'johannesburg_se_code' => 'required',
            'sedol_code' => 'required',
            'valoren_code' => 'required',
            'wkngerman_code' => 'required',
            'indonesian_sec_code' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $user = Auth::user();

        FundCode::create([
            'user_id' => $user->id,
            'isin_code' => $request->isin_code,
            'isin_currency_class_code' => $request->isin_currency_class_code,
            'tadawul_fund_code' => $request->tadawul_fund_code,
            'maroclear_code' => $request->maroclear_code,
            'stock_exchange_ticker' => $request->stock_exchange_ticker,
            'etf_ticker' => $request->etf_ticker,
            'turkish_fund_code' => $request->turkish_fund_code,
            'cusip' => $request->cusip,
            'polish_rfi_code' => $request->polish_rfi_code,
            'johannesburg_se_code' => $request->johannesburg_se_code,
            'sedol_code' => $request->sedol_code,
            'valoren_code' => $request->valoren_code,
            'wkngerman_code' => $request->wkngerman_code,
            'indonesian_sec_code' => $request->indonesian_sec_code,

        ]);


        return redirect()->back()->withErrors('Congrats! Fund Codes record is added successfully.');
    }

    public function updateFundCodes(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'isin_code' => 'required',
            'isin_currency_class_code' => 'required',
            'tadawul_fund_code' => 'required',
            'maroclear_code' => 'required',
            'stock_exchange_ticker' => 'required',
            'etf_ticker' => 'required',
            'turkish_fund_code' => 'required',
            'cusip' => 'required',
            'polish_rfi_code' => 'required',
            'johannesburg_se_code' => 'required',
            'sedol_code' => 'required',
            'valoren_code' => 'required',
            'wkngerman_code' => 'required',
            'indonesian_sec_code' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $fundCodes = FundCode::find($id);
        $fundCodes->user_id = $request->user_id;
        $fundCodes->isin_code = $request->isin_code;
        $fundCodes->isin_currency_class_code = $request->isin_currency_class_code;
        $fundCodes->tadawul_fund_code = $request->tadawul_fund_code;
        $fundCodes->maroclear_code = $request->maroclear_code;
        $fundCodes->stock_exchange_ticker = $request->stock_exchange_ticker;
        $fundCodes->etf_ticker = $request->etf_ticker;
        $fundCodes->turkish_fund_code = $request->turkish_fund_code;
        $fundCodes->cusip = $request->cusip;
        $fundCodes->polish_rfi_code = $request->polish_rfi_code;
        $fundCodes->johannesburg_se_code = $request->johannesburg_se_code;
        $fundCodes->sedol_code = $request->sedol_code;
        $fundCodes->valoren_code = $request->valoren_code;
        $fundCodes->wkngerman_code = $request->wkngerman_code;
        $fundCodes->indonesian_sec_code = $request->indonesian_sec_code;
        $fundCodes->save();

        return redirect()->back()->withErrors('Fund Codes record is updated successfully.');
    }

    public function removeFundCodes($id)
    {
        $fund_codes = FundCode::find($id);
        $fund_codes->delete();
        return redirect()->back()->withErrors('Fund Codes record is deleted successfully.');
    }


    //Fund Classification & Benchmarks
    public function createFundClassificationBenchmarks(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'fund_classification_id' => 'required|exists:fund_classification_schemes,id',
            'fund_benchmark_id' => 'required|exists:fund_benchmarks,id'
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $user = Auth::user();
        $fund_attributes = FundClassificationBenchmark::create([
            'user_id' => $user->id,
            'fund_classification_id' => $request->fund_classification_id,
            'fund_benchmark_id' => $request->fund_benchmark_id
        ]);

        return redirect()->back()->withErrors('Congrats! Record created successfully!');
    }

    public function removeFundClassificationBenchmarks($id)
    {
        $fund_identity = FundAttribute::find($id);
        $fund_identity->delete();
        return redirect()->back()->withErrors('Record has been deleted successfully!');
    }

    //  	Fund Classification Schemes
    public function createFundClassificationSchemes(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fund_souk_classification' => 'required',
            'tadawul_fund_category' => 'required',
            'ammc_classification' => 'required',
            'cmf_classification' => 'required',
            'cmb_classification' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $user = Auth::user();

        FundClassificationScheme::create([
            'user_id' => $user->id,
            'fund_souk_classification' => $request->fund_souk_classification,
            'tadawul_fund_category' => $request->tadawul_fund_category,
            'ammc_classification' => $request->ammc_classification,
            'cmf_classification' => $request->cmf_classification,
            'cmb_classification' => $request->cmb_classification,

        ]);


        return redirect()->back()->withErrors('Congrats! Fund Classification Schemes record is added successfully.');

    }

    public function updateFundClassificationSchemes(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'fund_souk_classification' => 'required',
            'tadawul_fund_category' => 'required',
            'ammc_classification' => 'required',
            'cmf_classification' => 'required',
            'cmb_classification' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $fundCodes = FundClassificationScheme::find($id);
        $fundCodes->user_id = $request->user_id;
        $fundCodes->fund_souk_classification = $request->fund_souk_classification;
        $fundCodes->tadawul_fund_category = $request->tadawul_fund_category;
        $fundCodes->ammc_classification = $request->ammc_classification;
        $fundCodes->cmf_classification = $request->cmf_classification;
        $fundCodes->cmb_classification = $request->cmb_classification;
        $fundCodes->save();

        return redirect()->back()->withErrors('Fund Classification Schemes record is updated successfully.');
    }

    public function removeFundClassificationSchemes($id)
    {
        $fund_classification_schemes = FundClassificationScheme::find($id);
        $fund_classification_schemes->delete();
        return redirect()->back()->withErrors('Fund Classification Schemes record is deleted successfully.');
    }

    //  	Fund Benchmarks
    public function createFundBenchmarks(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'fund_identity_id' => 'required|exists:fund_identities,id',
            'fund_manager_benchmark' => 'required',
            'fund_souk_benchmark' => 'required',
            'risk_free_rate' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $user = Auth::user();

        FundBenchmarks::create([
            'user_id' => $user->id,
            'fund_identity_id' => $request->fund_identity_id,
            'fund_manager_benchmark' => $request->fund_manager_benchmark,
            'fund_souk_benchmark' => $request->fund_souk_benchmark,
            'risk_free_rate' => $request->risk_free_rate,

        ]);


        return redirect()->back()->withErrors('Congrats! Fund Benchmarks record is added successfully.');

    }

    public function updateFundBenchmarks(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'fund_manager_benchmark' => 'required',
            'fund_souk_benchmark' => 'required',
            'risk_free_rate' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $fundBenchmarks = FundBenchmarks::find($id);
        $fundBenchmarks->user_id = $request->user_id;
        $fundBenchmarks->fund_manager_benchmark = $request->fund_manager_benchmark;
        $fundBenchmarks->fund_souk_benchmark = $request->fund_souk_benchmark;
        $fundBenchmarks->risk_free_rate = $request->risk_free_rate;
        $fundBenchmarks->save();

        return redirect()->back()->withErrors('Fund Benchmarks record is updated successfully.');
    }

    public function removeFundBenchmarks($id)
    {
        $fund_benchmarks = FundBenchmarks::find($id);
        $fund_benchmarks->delete();
        return redirect()->back()->withErrors('Fund Benchmarks record is deleted successfully.');
    }

    //  	Authorizations
    public function createAuthorizations(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'authorization_number' => 'required',
            'authorization_date' => 'required',
            'prospectus_visa_number' => 'required',
            'prospectus_visa_date' => 'required',
            'regulator' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $user = Auth::user();

        Authorization::create([
            'user_id' => $user->id,
            'authorization_number' => $request->authorization_number,
            'authorization_date' => $request->authorization_date,
            'prospectus_visa_number' => $request->prospectus_visa_number,
            'prospectus_visa_date' => $request->prospectus_visa_date,
            'regulator' => $request->regulator,

        ]);


        return redirect()->back()->withErrors('Congrats! Authorization record is added successfully.');

    }

    public function updateAuthorizations(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'authorization_number' => 'required',
            'authorization_date' => 'required',
            'prospectus_visa_number' => 'required',
            'prospectus_visa_date' => 'required',
            'regulator' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $authorization = Authorization::find($id);
        $authorization->user_id = $request->user_id;
        $authorization->authorization_number = $request->authorization_number;
        $authorization->authorization_date = $request->authorization_date;
        $authorization->prospectus_visa_number = $request->prospectus_visa_number;
        $authorization->prospectus_visa_date = $request->prospectus_visa_date;
        $authorization->regulator = $request->regulator;
        $authorization->save();

        return redirect()->back()->withErrors('Fund Authorization record is updated successfully.');
    }

    public function removeAuthorizations($id)
    {
        $authorizations = Authorization::find($id);
        $authorizations->delete();
        return redirect()->back()->withErrors('Authorization record is deleted successfully.');
    }

    //  	Compliance Officer
    public function createComplianceOfficer(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'fund_identity_id' => 'required|exists:fund_identities,id',
            'compliance_officer_name' => 'required',
            'telephone' => 'required',
            'fax' => 'required',
            'email' => 'required|email',
            'url' => 'required',
            'address' => 'required',
            'city' => 'required',
            'postal_code' => 'required',
            'country' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $user = Auth::user();

        ComplianceOfficer::create([
            'user_id' => $user->id,
            'fund_identity_id' => $request->fund_identity_id,
            'compliance_officer_name' => $request->compliance_officer_name,
            'telephone' => $request->telephone,
            'fax' => $request->fax,
            'email' => $request->email,
            'url' => $request->url,
            'address' => $request->address,
            'city' => $request->city,
            'postal_code' => $request->postal_code,
            'country' => $request->country,

        ]);


        return redirect()->back()->withErrors('Congrats! Compliance Officer record is added successfully.');
    }

    public function updateComplianceOfficer(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'compliance_officer_name' => 'required',
            'telephone' => 'required',
            'fax' => 'required',
            'email' => 'required|email',
            'url' => 'required',
            'address' => 'required',
            'city' => 'required',
            'postal_code' => 'required',
            'country' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $complianceOfficer = ComplianceOfficer::find($id);
        $complianceOfficer->user_id = $request->user_id;
        $complianceOfficer->compliance_officer_name = $request->compliance_officer_name;
        $complianceOfficer->telephone = $request->telephone;
        $complianceOfficer->fax = $request->fax;
        $complianceOfficer->email = $request->email;
        $complianceOfficer->url = $request->url;
        $complianceOfficer->address = $request->address;
        $complianceOfficer->city = $request->city;
        $complianceOfficer->postal_code = $request->postal_code;
        $complianceOfficer->country = $request->country;
        $complianceOfficer->save();

        return redirect()->back()->withErrors('Fund Compliance Officer record is updated successfully.');
    }

    public function removeComplianceOfficer($id)
    {
        $compliance_officer = ComplianceOfficer::find($id);
        $compliance_officer->delete();
        return redirect()->back()->withErrors('Compliance Officer record is deleted successfully.');
    }

    //  	Laws and Regulations
    public function createLawsAndRegulations(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'ucits_directive' => 'required',
            'aifmd_directive' => 'required',
            'aifmd_status' => 'required',
            'fatca_compliant' => 'required',
            'giin_number' => 'required',
            'lei_code' => 'required',
            'last_update_date' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $user = Auth::user();

        LawsRegulation::create([
            'user_id' => $user->id,
            'cuits_directive' => $request->ucits_directive,
            'aifmd_directive' => $request->aifmd_directive,
            'aifmd_status' => $request->aifmd_status,
            'fatca_compliant' => $request->fatca_compliant,
            'giin_number' => $request->giin_number,
            'lei_code' => $request->lei_code,
            'last_update_date' => $request->last_update_date,

        ]);


        return redirect()->back()->withErrors('Congrats! Laws and Regulations record is added successfully.');
    }

    public function updateLawsAndRegulations(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'ucits_directive' => 'required',
            'aifmd_directive' => 'required',
            'aifmd_status' => 'required',
            'fatca_compliant' => 'required',
            'giin_number' => 'required',
            'lei_code' => 'required',
            'last_update_date' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $lawsRegulation = LawsRegulation::find($id);
        $lawsRegulation->user_id = $request->user_id;
        $lawsRegulation->cuits_directive = $request->ucits_directive;
        $lawsRegulation->aifmd_directive = $request->aifmd_directive;
        $lawsRegulation->aifmd_status = $request->aifmd_status;
        $lawsRegulation->fatca_compliant = $request->fatca_compliant;
        $lawsRegulation->giin_number = $request->giin_number;
        $lawsRegulation->lei_code = $request->lei_code;
        $lawsRegulation->last_update_date = $request->last_update_date;
        $lawsRegulation->save();

        return redirect()->back()->withErrors('Laws and Regulations record is updated successfully.');
    }

    public function removeLawsAndRegulations($id)
    {
        $laws_and_regulations = LawsRegulation::find($id);
        $laws_and_regulations->delete();
        return redirect()->back()->withErrors('Laws and Regulations record is deleted successfully.');
    }

    //  	Subscription
    public function createSubscription(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'minimum_initial' => 'required',
            'additional' => 'required',
            'minimum_balance' => 'required',
            'currency' => 'required',
            'frequency' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $user = Auth::user();

        Subscription::create([
            'user_id' => $user->id,
            'minimum_initial' => $request->minimum_initial,
            'additional' => $request->additional,
            'minimum_balance' => $request->minimum_balance,
            'currency' => $request->currency,
            'frequency' => $request->frequency,

        ]);


        return redirect()->back()->withErrors('Congrats! Subscription record is added successfully.');
    }

    public function updateSubscription(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'minimum_initial' => 'required',
            'additional' => 'required',
            'minimum_balance' => 'required',
            'currency' => 'required',
            'frequency' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $subscription = Subscription::find($id);
        $subscription->user_id = $request->user_id;
        $subscription->minimum_initial = $request->minimum_initial;
        $subscription->additional = $request->additional;
        $subscription->minimum_balance = $request->minimum_balance;
        $subscription->currency = $request->currency;
        $subscription->frequency = $request->frequency;
        $subscription->save();

        return redirect()->back()->withErrors('Subscription record is updated successfully.');
    }

    public function removeSubscription($id)
    {
        $subscription = Subscription::find($id);
        $subscription->delete();
        return redirect()->back()->withErrors('Subscription record is deleted successfully.');
    }

    //  	Redemption
    public function createRedemption(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'fund_identity_id' => 'required|exists:fund_identities,id',
            'minimum' => 'required',
            'frequency' => 'required',
            'payment_period' => 'required',
            'cut_off_time' => 'required',
            'business_days' => 'required',
            'last_update_date' => 'required|date',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $user = Auth::user();

        Redemption::create([
            'user_id' => $user->id,
            'fund_identity_id' => $request->fund_identity_id,
            'minimum' => $request->minimum,
            'frequency' => $request->frequency,
            'payment_period' => $request->payment_period,
            'cut_off_time' => $request->cut_off_time,
            'business_days' => $request->business_days,
            'last_update_date' => $request->last_update_date,

        ]);


        return redirect()->back()->withErrors('Congrats! Redemption record is added successfully.');
    }

    public function updateRedemption(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'minimum' => 'required',
            'frequency' => 'required',
            'payment_period' => 'required',
            'cut_off_time' => 'required',
            'business_days' => 'required',
            'last_update_date' => 'required|date',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $redemption = Redemption::find($id);
        $redemption->user_id = $request->user_id;
        $redemption->minimum = $request->minimum;
        $redemption->frequency = $request->frequency;
        $redemption->payment_period = $request->payment_period;
        $redemption->cut_off_time = $request->cut_off_time;
        $redemption->business_days = $request->business_days;
        $redemption->last_update_date = $request->last_update_date;
        $redemption->save();

        return redirect()->back()->withErrors('Redemption record is updated successfully.');

    }

    public function removeRedemption($id)
    {
        $redemption = Redemption::find($id);
        $redemption->delete();
        return redirect()->back()->withErrors('Redemption record is deleted successfully.');
    }

    //  	Initial
    public function createInitial(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'actual' => 'required',
            'min' => 'required',
            'max' => 'required',
            'amount' => 'required',
            'currency' => 'required',
            'type' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $user = Auth::user();

        Initial::create([
            'user_id' => $user->id,
            'actual' => $request->actual,
            'min' => $request->min,
            'max' => $request->max,
            'amount' => $request->amount,
            'currency' => $request->currency,
            'type' => $request->type,

        ]);


        return redirect()->back()->withErrors('Congrats! Initial record is added successfully.');
    }

    public function updateInitial(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'actual' => 'required',
            'min' => 'required',
            'max' => 'required',
            'amount' => 'required',
            'currency' => 'required',
            'type' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $initial = Initial::find($id);
        $initial->user_id = $request->user_id;
        $initial->actual = $request->actual;
        $initial->min = $request->min;
        $initial->max = $request->max;
        $initial->amount = $request->amount;
        $initial->currency = $request->currency;
        $initial->type = $request->type;
        $initial->save();

        return redirect()->back()->withErrors('Initial record is updated successfully.');
    }

    public function removeInitial($id)
    {
        $initial = Initial::find($id);
        $initial->delete();
        return redirect()->back()->withErrors('Initial record is deleted successfully.');
    }

    //  Charges	Redemption
    public function createChargesRedemption(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'actual' => 'required',
            'min' => 'required',
            'max' => 'required',
            'amount' => 'required',
            'payment_deadline' => 'required',
            'currency' => 'required',
            'early_redemption_fees' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $user = Auth::user();

        ChargesRedemption::create([
            'user_id' => $user->id,
            'actual' => $request->actual,
            'min' => $request->min,
            'max' => $request->max,
            'amount' => $request->amount,
            'payment_deadline' => $request->payment_deadline,
            'currency' => $request->currency,
            'early_redemption_fees' => $request->early_redemption_fees,

        ]);


        return redirect()->back()->withErrors('Congrats! Redemption record is added successfully.');
    }

    public function updateChargesRedemption(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'actual' => 'required',
            'min' => 'required',
            'max' => 'required',
            'amount' => 'required',
            'payment_deadline' => 'required',
            'currency' => 'required',
            'early_redemption_fees' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $charges_redemption = ChargesRedemption::find($id);
        $charges_redemption->user_id = $request->user_id;
        $charges_redemption->actual = $request->actual;
        $charges_redemption->min = $request->min;
        $charges_redemption->max = $request->max;
        $charges_redemption->amount = $request->amount;
        $charges_redemption->payment_deadline = $request->payment_deadline;
        $charges_redemption->currency = $request->currency;
        $charges_redemption->early_redemption_fees = $request->early_redemption_fees;
        $charges_redemption->save();

        return redirect()->back()->withErrors('Redemption record is updated successfully.');
    }

    public function removeChargesRedemption($id)
    {
        $charges_redemption = ChargesRedemption::find($id);
        $charges_redemption->delete();
        return redirect()->back()->withErrors('Redemption record is deleted successfully.');
    }

    //  	Annual
    public function createAnnual(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'actual' => 'required',
            'min' => 'required',
            'max' => 'required',
            'currency' => 'required',
            'type' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $user = Auth::user();

        Initial::create([
            'user_id' => $user->id,
            'actual' => $request->actual,
            'min' => $request->min,
            'max' => $request->max,
            'currency' => $request->currency,
            'type' => $request->type,

        ]);


        return redirect()->back()->withErrors('Congrats! Annual record is added successfully.');
    }

    public function updateAnnual(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'actual' => 'required',
            'min' => 'required',
            'max' => 'required',
            'currency' => 'required',
            'type' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $annual = Annual::find($id);
        $annual->user_id = $request->user_id;
        $annual->actual = $request->actual;
        $annual->min = $request->min;
        $annual->max = $request->max;
        $annual->currency = $request->currency;
        $annual->type = $request->type;
        $annual->save();

        return redirect()->back()->withErrors('Annual record is updated successfully.');
    }

    public function removeAnnual($id)
    {
        $annual = Annual::find($id);
        $annual->delete();
        return redirect()->back()->withErrors('Annual record is deleted successfully.');
    }


    //  	Annual Report Fees Breakdown
    public function createAnnualReportFeesBreakdown(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'fund_identity_id' => 'required|exists:fund_identities,id',
            'fund_manager_fees' => 'required',
            'investment_advisor_fees' => 'required',
            'distribution_fees' => 'required',
            'board_members_fees' => 'required',
            'shariah_comitee_fees' => 'required',
            'custodian_fees' => 'required',
            'transfer_agent_fees' => 'required',
            'auditor_fees' => 'required',
            'administrator_fees' => 'required',
            'publication_fees' => 'required',
            'regulator_fees' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $user = Auth::user();

        AnnualReportFeesBreakdown::create([
            'user_id' => $user->id,
            'fund_identity_id' => $request->fund_identity_id,
            'fund_manager_fees' => $request->fund_manager_fees,
            'investment_advisor_fees' => $request->investment_advisor_fees,
            'distribution_fees' => $request->distribution_fees,
            'board_members_fees' => $request->board_members_fees,
            'shariah_comitee_fees' => $request->shariah_comitee_fees,
            'custodian_fees' => $request->custodian_fees,
            'transfer_agent_fees' => $request->transfer_agent_fees,
            'auditor_fees' => $request->auditor_fees,
            'administrator_fees' => $request->administrator_fees,
            'publication_fees' => $request->publication_fees,
            'regulator_fees' => $request->regulator_fees,

        ]);


        return redirect()->back()->withErrors('Congrats! Annual Report Fees Breakdown record is added successfully.');
    }

    public function updateAnnualReportFeesBreakdown(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'fund_manager_fees' => 'required',
            'investment_advisor_fees' => 'required',
            'distribution_fees' => 'required',
            'board_members_fees' => 'required',
            'shariah_comitee_fees' => 'required',
            'custodian_fees' => 'required',
            'transfer_agent_fees' => 'required',
            'auditor_fees' => 'required',
            'administrator_fees' => 'required',
            'publication_fees' => 'required',
            'regulator_fees' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $annual_report_fees = AnnualReportFeesBreakdown::find($id);
        $annual_report_fees->user_id = $request->user_id;
        $annual_report_fees->fund_manager_fees = $request->fund_manager_fees;
        $annual_report_fees->investment_advisor_fees = $request->investment_advisor_fees;
        $annual_report_fees->distribution_fees = $request->distribution_fees;
        $annual_report_fees->board_members_fees = $request->board_members_fees;
        $annual_report_fees->shariah_comitee_fees = $request->shariah_comitee_fees;
        $annual_report_fees->custodian_fees = $request->custodian_fees;
        $annual_report_fees->transfer_agent_fees = $request->transfer_agent_fees;
        $annual_report_fees->auditor_fees = $request->auditor_fees;
        $annual_report_fees->administrator_fees = $request->administrator_fees;
        $annual_report_fees->publication_fees = $request->publication_fees;
        $annual_report_fees->regulator_fees = $request->regulator_fees;
        $annual_report_fees->save();

        return redirect()->back()->withErrors('Annual Report Fees Breakdown record is updated successfully.');
    }

    public function removeAnnualReportFeesBreakdown($id)
    {
        $annual_report_fees = AnnualReportFeesBreakdown::find($id);
        $annual_report_fees->delete();
        return redirect()->back()->withErrors('Annual Report Fees Breakdown record is deleted successfully.');
    }

    // 26/10/2017


    //  	Fund Time Series
    public function createFundTimeSeries(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'fund_identity_id' => 'required|exists:fund_identities,id',
            'fund_net_assets' => 'required',
            'asset_under_management' => 'required',
            'initial_fund_size' => 'required',
            'fund_manager_investment' => 'required',
            'fund_manager_investment_perc' => 'required',
            'gross_sales' => 'required',
            'gross_sales_ratio' => 'required',
            'average_net_assets' => 'required',
            'redemption_ratio' => 'required',
            'redemptions' => 'required',
            'no_of_units' => 'required',
            'no_of_unit_holders' => 'required',
            'unit_price' => 'required',
            'last_update_date' => 'required',
            'last_valuation_date' => 'required',
            'valuation_basis' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $user = Auth::user();

        FundTimeSeries::create([
            'user_id' => $user->id,
            'fund_identity_id' => $request->fund_identity_id,
            'fund_net_assets' => $request->fund_net_assets,
            'asset_under_management' => $request->asset_under_management,
            'initial_fund_size' => $request->initial_fund_size,
            'fund_manager_investment' => $request->fund_manager_investment,
            'fund_manager_investment_perc' => $request->fund_manager_investment_perc,
            'gross_sales' => $request->gross_sales,
            'gross_sales_ratio' => $request->gross_sales_ratio,
            'average_net_assets' => $request->average_net_assets,
            'redemption_ratio' => $request->redemption_ratio,
            'redemptions' => $request->redemptions,
            'no_of_units' => $request->no_of_units,
            'no_of_unit_holders' => $request->no_of_unit_holders,
            'unit_price' => $request->unit_price,
            'last_update_date' => $request->last_update_date,
            'last_valuation_date' => $request->last_valuation_date,
            'valuation_basis' => $request->valuation_basis,

        ]);


        return redirect()->back()->withErrors('Congrats! Fund Time Series record is added successfully.');


    }

    public function updateFundTimeSeries(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'fund_net_assets' => 'required',
            'asset_under_management' => 'required',
            'initial_fund_size' => 'required',
            'fund_manager_investment' => 'required',
            'fund_manager_investment_perc' => 'required',
            'gross_sales' => 'required',
            'gross_sales_ratio' => 'required',
            'average_net_assets' => 'required',
            'redemption_ratio' => 'required',
            'redemptions' => 'required',
            'no_of_units' => 'required',
            'no_of_unit_holders' => 'required',
            'unit_price' => 'required',
            'last_update_date' => 'required',
            'last_valuation_date' => 'required',
            'valuation_basis' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $fund_time_series = FundTimeSeries::find($id);
        $fund_time_series->user_id = $request->user_id;
        $fund_time_series->fund_net_assets = $request->fund_net_assets;
        $fund_time_series->asset_under_management = $request->asset_under_management;
        $fund_time_series->initial_fund_size = $request->initial_fund_size;
        $fund_time_series->fund_manager_investment = $request->fund_manager_investment;
        $fund_time_series->fund_manager_investment_perc = $request->fund_manager_investment_perc;
        $fund_time_series->gross_sales = $request->gross_sales;
        $fund_time_series->gross_sales_ratio = $request->gross_sales_ratio;
        $fund_time_series->average_net_assets = $request->average_net_assets;
        $fund_time_series->redemption_ratio = $request->redemption_ratio;
        $fund_time_series->redemptions = $request->redemptions;
        $fund_time_series->no_of_units = $request->no_of_units;
        $fund_time_series->no_of_unit_holders = $request->no_of_unit_holders;
        $fund_time_series->unit_price = $request->unit_price;
        $fund_time_series->last_update_date = $request->last_update_date;
        $fund_time_series->last_valuation_date = $request->last_valuation_date;
        $fund_time_series->valuation_basis = $request->valuation_basis;
        $fund_time_series->save();

        return redirect()->back()->withErrors('Fund Time Series record is updated successfully.');
    }

    public function removeFundTimeSeries($id)
    {
        $fund_time_series = FundTimeSeries::find($id);
        $fund_time_series->delete();
        return redirect()->back()->withErrors('Fund Time Series record is deleted successfully.');
    }

    //  	Valuation Frequency
    public function createValuationFrequency(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'fund_identity_id' => 'required|exists:fund_identities,id',
            'valuation_frequency' => 'required',
            'announcement_frequency' => 'required',
            'ytd_price_change' => 'required',
            'price_change_since_last_valuation' => 'required',
            'valuation_days' => 'required',
            'announcement_days' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $user = Auth::user();

        ValuationFrequency::create([
            'user_id' => $user->id,
            'fund_identity_id' => $request->fund_identity_id,
            'valuation_frequency' => $request->valuation_frequency,
            'announcement_frequency' => $request->announcement_frequency,
            'ytd_price_change' => $request->ytd_price_change,
            'price_change_since_last_valuation' => $request->price_change_since_last_valuation,
            'valuation_days' => $request->valuation_days,
            'announcement_days' => $request->announcement_days,

        ]);

        return redirect()->back()->withErrors('Congrats! Valuation Frequency record is added successfully.');
    }

    public function updateValuationFrequency(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'valuation_frequency' => 'required',
            'announcement_frequency' => 'required',
            'ytd_price_change' => 'required',
            'price_change_since_last_valuation' => 'required',
            'valuation_days' => 'required',
            'announcement_days' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $valuation_frequency = ValuationFrequency::find($id);
        $valuation_frequency->user_id = $request->user_id;
        $valuation_frequency->valuation_frequency = $request->valuation_frequency;
        $valuation_frequency->announcement_frequency = $request->announcement_frequency;
        $valuation_frequency->ytd_price_change = $request->ytd_price_change;
        $valuation_frequency->price_change_since_last_valuation = $request->price_change_since_last_valuation;
        $valuation_frequency->valuation_days = $request->valuation_days;
        $valuation_frequency->announcement_days = $request->announcement_days;
        $valuation_frequency->save();

        return redirect()->back()->withErrors('Valuation Frequency record is updated successfully.');

    }

    public function removeValuationFrequency($id)
    {
        $valuation_frequency = ValuationFrequency::find($id);
        $valuation_frequency->delete();
        return redirect()->back()->withErrors('Valuation Frequency record is deleted successfully.');
    }

    //  Market Data
    public function createMarketData(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'open' => 'required',
            'high' => 'required',
            'low' => 'required',
            'close' => 'required',
            'change' => 'required',
            'perc_change' => 'required',
            'volume_traded' => 'required',
            'value_traded' => 'required',
            'price_date' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $user = Auth::user();

        MarketData::create([
            'user_id' => $user->id,
            'open' => $request->open,
            'high' => $request->high,
            'low' => $request->low,
            'close' => $request->close,
            'change' => $request->change,
            'perc_change' => $request->perc_change,
            'volume_traded' => $request->volume_traded,
            'value_traded' => $request->value_traded,
            'price_date' => $request->price_date,

        ]);

        return redirect()->back()->withErrors('Congrats! Market Data record is added successfully.');
    }

    public function updateMarketData(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'open' => 'required',
            'high' => 'required',
            'low' => 'required',
            'close' => 'required',
            'change' => 'required',
            'perc_change' => 'required',
            'volume_traded' => 'required',
            'value_traded' => 'required',
            'price_date' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $market_data = MarketData::find($id);
        $market_data->user_id = $request->user_id;
        $market_data->open = $request->open;
        $market_data->high = $request->high;
        $market_data->low = $request->low;
        $market_data->close = $request->close;
        $market_data->change = $request->change;
        $market_data->perc_change = $request->perc_change;
        $market_data->volume_traded = $request->volume_traded;
        $market_data->value_traded = $request->value_traded;
        $market_data->price_date = $request->price_date;
        $market_data->save();

        return redirect()->back()->withErrors('Market Data record is updated successfully.');
    }

    public function removeMarketData($id)
    {
        $market_data = MarketData::find($id);
        $market_data->delete();
        return redirect()->back()->withErrors('Market Data record is deleted successfully.');
    }

    //  Fund Income Settings
    public function createFundIncomeSettings(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'fund_identity_id' => 'required|exists:fund_identities,id',
            'ex_dividend_date' => 'required',
            'dividend_amount' => 'required',
            'payment_date' => 'required',
            'dividend_frequency' => 'required',
            'dividend_currency' => 'required',
            'default_tax_basis' => 'required',
            'corporate_action_type' => 'required',
            'income_distribution' => 'required',
            'income_operation' => 'required',
            'reinvest_date' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $user = Auth::user();

        FundIncomeSetting::create([
            'user_id' => $user->id,
            'fund_identity_id' => $request->fund_identity_id,
            'ex_dividend_date' => $request->ex_dividend_date,
            'dividend_amount' => $request->dividend_amount,
            'payment_date' => $request->payment_date,
            'dividend_frequency' => $request->dividend_frequency,
            'dividend_currency' => $request->dividend_currency,
            'default_tax_basis' => $request->default_tax_basis,
            'corporate_action_type' => $request->corporate_action_type,
            'income_distribution' => $request->income_distribution,
            'income_operation' => $request->income_operation,
            'reinvest_date' => $request->reinvest_date,

        ]);

        return redirect()->back()->withErrors('Congrats! Fund Income Settings record is added successfully.');
    }

    public function updateFundIncomeSettings(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'ex_dividend_date' => 'required',
            'dividend_amount' => 'required',
            'payment_date' => 'required',
            'dividend_frequency' => 'required',
            'dividend_currency' => 'required',
            'default_tax_basis' => 'required',
            'corporate_action_type' => 'required',
            'income_distribution' => 'required',
            'income_operation' => 'required',
            'reinvest_date' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $Fund_income_setting = FundIncomeSetting::find($id);
        $Fund_income_setting->user_id = $request->user_id;
        $Fund_income_setting->ex_dividend_date = $request->ex_dividend_date;
        $Fund_income_setting->dividend_amount = $request->dividend_amount;
        $Fund_income_setting->payment_date = $request->payment_date;
        $Fund_income_setting->dividend_frequency = $request->dividend_frequency;
        $Fund_income_setting->dividend_currency = $request->dividend_currency;
        $Fund_income_setting->default_tax_basis = $request->default_tax_basis;
        $Fund_income_setting->corporate_action_type = $request->corporate_action_type;
        $Fund_income_setting->income_distribution = $request->income_distribution;
        $Fund_income_setting->income_operation = $request->income_operation;
        $Fund_income_setting->reinvest_date = $request->reinvest_date;
        $Fund_income_setting->save();

        return redirect()->back()->withErrors('Fund Income Setting record is updated successfully.');
    }

    public function removeFundIncomeSettings($id)
    {
        $fund_income_setting = FundIncomeSetting::find($id);
        $fund_income_setting->delete();
        return redirect()->back()->withErrors('Fund Income Setting record is deleted successfully.');
    }

    //  Sourced Statistics
    public function createSourcedStatistics(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'fund_identity_id' => 'required|exists:fund_identities,id',
            'sharpe_ratio' => 'required',
            'ytd_current_year' => 'required',
            'yield_since_inception' => 'required',
            'yield_for_3_years' => 'required',
            'yield_for_5_years' => 'required',
            'yield_for_10_years' => 'required',
            'ytd_standard_deviation' => 'required',
            'standard_deviation_for_3_years' => 'required',
            'standard_deviation_for_5_years' => 'required',
            'standard_deviation_for_10_years' => 'required',
            'borrowings' => 'required',
            'fund_leverage_ratio' => 'required',
            'duration' => 'required',
            'last_update_date' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $user = Auth::user();

        SourcedStatistic::create([
            'user_id' => $user->id,
            'sharpe_ratio' => $request->sharpe_ratio,
            'fund_identity_id' => $request->fund_identity_id,
            'ytd_current_year' => $request->ytd_current_year,
            'yield_since_inception' => $request->yield_since_inception,
            'yield_for_3_years' => $request->yield_for_3_years,
            'yield_for_5_years' => $request->yield_for_5_years,
            'yield_for_10_years' => $request->yield_for_10_years,
            'ytd_standard_deviation' => $request->ytd_standard_deviation,
            'standard_deviation_for_3_years' => $request->standard_deviation_for_3_years,
            'standard_deviation_for_5_years' => $request->standard_deviation_for_5_years,
            'standard_deviation_for_10_years' => $request->standard_deviation_for_10_years,
            'borrowings' => $request->borrowings,
            'fund_leverage_ratio' => $request->fund_leverage_ratio,
            'duration' => $request->duration,
            'last_update_date' => $request->last_update_date,

        ]);

        return redirect()->back()->withErrors('Congrats! Sourced Statistics record is added successfully.');
    }

    public function updateSourcedStatistics(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'sharpe_ratio' => 'required',
            'ytd_current_year' => 'required',
            'yield_since_inception' => 'required',
            'yield_for_3_years' => 'required',
            'yield_for_5_years' => 'required',
            'yield_for_10_years' => 'required',
            'ytd_standard_deviation' => 'required',
            'standard_deviation_for_3_years' => 'required',
            'standard_deviation_for_5_years' => 'required',
            'standard_deviation_for_10_years' => 'required',
            'borrowings' => 'required',
            'fund_leverage_ratio' => 'required',
            'duration' => 'required',
            'last_update_date' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }
        $sourced_statistic = SourcedStatistic::find($id);
        $sourced_statistic->user_id = $request->user_id;
        $sourced_statistic->sharpe_ratio = $request->sharpe_ratio;
        $sourced_statistic->ytd_current_year = $request->ytd_current_year;
        $sourced_statistic->yield_since_inception = $request->yield_since_inception;
        $sourced_statistic->yield_for_3_years = $request->yield_for_3_years;
        $sourced_statistic->yield_for_5_years = $request->yield_for_5_years;
        $sourced_statistic->yield_for_10_years = $request->yield_for_10_years;
        $sourced_statistic->ytd_standard_deviation = $request->ytd_standard_deviation;
        $sourced_statistic->standard_deviation_for_3_years = $request->standard_deviation_for_3_years;
        $sourced_statistic->standard_deviation_for_5_years = $request->standard_deviation_for_5_years;
        $sourced_statistic->standard_deviation_for_10_years = $request->standard_deviation_for_10_years;
        $sourced_statistic->borrowings = $request->borrowings;
        $sourced_statistic->fund_leverage_ratio = $request->fund_leverage_ratio;
        $sourced_statistic->duration = $request->duration;
        $sourced_statistic->last_update_date = $request->last_update_date;
        $sourced_statistic->save();

        return redirect()->back()->withErrors('Sourced Statistics record is updated successfully.');
    }

    public function removeSourcedStatistics($id)
    {
        $sourced_statistic = SourcedStatistic::find($id);
        $sourced_statistic->delete();
        return redirect()->back()->withErrors('Sourced Statistics record is deleted successfully.');
    }

    //  Fund Performance
    public function createFundPerformance(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'annual_compound_return' => 'required',
            'annualised_distribution_yield' => 'required',
            'indexed_performance' => 'required',
            'percentage_growth' => 'required',
            'average_gain' => 'required',
            'average_loss' => 'required',
            'average_return' => 'required',
            'relative_average_return' => 'required',
            'relative_performance' => 'required',
            'performance' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $user = Auth::user();

        FundPerformance::create([
            'user_id' => $user->id,
            'annual_compound_return' => $request->annual_compound_return,
            'annualised_distribution_yield' => $request->annualised_distribution_yield,
            'indexed_performance' => $request->indexed_performance,
            'percentage_growth' => $request->percentage_growth,
            'average_gain' => $request->average_gain,
            'average_loss' => $request->average_loss,
            'average_return' => $request->average_return,
            'relative_average_return' => $request->relative_average_return,
            'relative_performance' => $request->relative_performance,
            'performance' => $request->performance,
        ]);

        return redirect()->back()->withErrors('Congrats! Fund Performance record is added successfully.');
    }

    public function updateFundPerformance(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'annual_compound_return' => 'required',
            'annualised_distribution_yield' => 'required',
            'indexed_performance' => 'required',
            'percentage_growth' => 'required',
            'average_gain' => 'required',
            'average_loss' => 'required',
            'average_return' => 'required',
            'relative_average_return' => 'required',
            'relative_performance' => 'required',
            'performance' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $fund_performance = FundPerformance::find($id);
        $fund_performance->user_id = $request->user_id;
        $fund_performance->annual_compound_return = $request->annual_compound_return;
        $fund_performance->annualised_distribution_yield = $request->annualised_distribution_yield;
        $fund_performance->indexed_performance = $request->indexed_performance;
        $fund_performance->percentage_growth = $request->percentage_growth;
        $fund_performance->average_gain = $request->average_gain;
        $fund_performance->average_loss = $request->average_loss;
        $fund_performance->average_return = $request->average_return;
        $fund_performance->relative_average_return = $request->relative_average_return;
        $fund_performance->relative_performance = $request->relative_performance;
        $fund_performance->performance = $request->performance;
        $fund_performance->save();

        return redirect()->back()->withErrors('Fund Performance record is updated successfully.');
    }

    public function removeFundPerformance($id)
    {
        $fund_performance = FundPerformance::find($id);
        $fund_performance->delete();
        return redirect()->back()->withErrors('Fund Performance record is deleted successfully.');
    }

    //  Fund Risk Ratios
    public function createFundRiskRatios(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'bear_beta' => 'required',
            'beta' => 'required',
            'bull_beta' => 'required',
            'bull_bear_beta_ratio' => 'required',
            'calmar_ratio' => 'required',
            'correlation' => 'required',
            'covariance' => 'required',
            'downside_deviation' => 'required',
            'information_ratio' => 'required',
            'israelsen_ratio' => 'required',
            'alpha' => 'required',
            'kurtosis' => 'required',
            'synthetic_risk_reward_indicator' => 'required',
            'maximum_drawdown' => 'required',
            'maximum_drawdown_period' => 'required',
            'maximum_gain' => 'required',
            'maximum_loss' => 'required',
            'negative_periods' => 'required',
            'omega' => 'required',
            'positive_periods' => 'required',
            'recovery_period' => 'required',
            'return_risk' => 'required',
            'r_squared' => 'required',
            'semi_deviation' => 'required',
            'semi_variance' => 'required',
            'sharpe_ratio' => 'required',
            'skewness' => 'required',
            'sortino_ratio' => 'required',
            'standard_deviation' => 'required',
            'standard_error' => 'required',
            'sterling_ratio' => 'required',
            'terynor_ratio' => 'required',
            'tracking_error' => 'required',
            'upside_deviaton' => 'required',
            'variance' => 'required',
            'active_share' => 'required',
            'knaar_perflow_ratio' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $user = Auth::user();

        FundRiskRatio::create([
            'user_id' => $user->id,
            'bear_beta' => $request->bear_beta,
            'beta' => $request->beta,
            'bull_beta' => $request->bull_beta,
            'bull_bear_beta_ratio' => $request->bull_bear_beta_ratio,
            'calmar_ratio' => $request->calmar_ratio,
            'correlation' => $request->correlation,
            'covariance' => $request->covariance,
            'downside_deviation' => $request->downside_deviation,
            'information_ratio' => $request->information_ratio,
            'israelsen_ratio' => $request->israelsen_ratio,
            'alpha' => $request->alpha,
            'kurtosis' => $request->kurtosis,
            'synthetic_risk_reward_indicator' => $request->synthetic_risk_reward_indicator,
            'maximum_drawdown' => $request->maximum_drawdown,
            'maximum_drawdown_period' => $request->maximum_drawdown_period,
            'maximum_gain' => $request->maximum_gain,
            'maximum_loss' => $request->maximum_loss,
            'negative_periods' => $request->negative_periods,
            'omega' => $request->omega,
            'positive_periods' => $request->positive_periods,
            'recovery_period' => $request->recovery_period,
            'return_risk' => $request->return_risk,
            'r_squared' => $request->r_squared,
            'semi_deviation' => $request->semi_deviation,
            'sharpe_ratio' => $request->sharpe_ratio,
            'skewness' => $request->skewness,
            'sortino_ratio' => $request->sortino_ratio,
            'standard_deviation' => $request->standard_deviation,
            'standard_error' => $request->standard_error,
            'sterling_ratio' => $request->sterling_ratio,
            'terynor_ratio' => $request->terynor_ratio,
            'tracking_error' => $request->tracking_error,
            'upside_deviaton' => $request->upside_deviaton,
            'variance' => $request->variance,
            'active_share' => $request->active_share,
            'knaar_perflow_ratio' => $request->knaar_perflow_ratio,
        ]);

        return redirect()->back()->withErrors('Congrats! Fund Risk Ratios record is added successfully.');
    }

    public function updateFundRiskRatios(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'bear_beta' => 'required',
            'beta' => 'required',
            'bull_beta' => 'required',
            'bull_bear_beta_ratio' => 'required',
            'calmar_ratio' => 'required',
            'correlation' => 'required',
            'covariance' => 'required',
            'downside_deviation' => 'required',
            'information_ratio' => 'required',
            'israelsen_ratio' => 'required',
            'alpha' => 'required',
            'kurtosis' => 'required',
            'synthetic_risk_reward_indicator' => 'required',
            'maximum_drawdown' => 'required',
            'maximum_drawdown_period' => 'required',
            'maximum_gain' => 'required',
            'maximum_loss' => 'required',
            'negative_periods' => 'required',
            'omega' => 'required',
            'positive_periods' => 'required',
            'recovery_period' => 'required',
            'return_risk' => 'required',
            'r_squared' => 'required',
            'semi_deviation' => 'required',
            'semi_variance' => 'required',
            'sharpe_ratio' => 'required',
            'skewness' => 'required',
            'sortino_ratio' => 'required',
            'standard_deviation' => 'required',
            'standard_error' => 'required',
            'sterling_ratio' => 'required',
            'terynor_ratio' => 'required',
            'tracking_error' => 'required',
            'upside_deviaton' => 'required',
            'variance' => 'required',
            'active_share' => 'required',
            'knaar_perflow_ratio' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $fund_risk_ratio = FundRiskRatio::find($id);
        $fund_risk_ratio->user_id = $request->user_id;
        $fund_risk_ratio->bear_beta = $request->bear_beta;
        $fund_risk_ratio->beta = $request->beta;
        $fund_risk_ratio->bull_beta = $request->bull_beta;
        $fund_risk_ratio->bull_bear_beta_ratio = $request->bull_bear_beta_ratio;
        $fund_risk_ratio->calmar_ratio = $request->calmar_ratio;
        $fund_risk_ratio->correlation = $request->correlation;
        $fund_risk_ratio->covariance = $request->covariance;
        $fund_risk_ratio->downside_deviation = $request->downside_deviation;
        $fund_risk_ratio->information_ratio = $request->information_ratio;
        $fund_risk_ratio->israelsen_ratio = $request->israelsen_ratio;
        $fund_risk_ratio->alpha = $request->alpha;
        $fund_risk_ratio->kurtosis = $request->kurtosis;
        $fund_risk_ratio->synthetic_risk_reward_indicator = $request->synthetic_risk_reward_indicator;
        $fund_risk_ratio->maximum_drawdown = $request->maximum_drawdown;
        $fund_risk_ratio->maximum_drawdown_period = $request->maximum_drawdown_period;
        $fund_risk_ratio->maximum_gain = $request->maximum_gain;
        $fund_risk_ratio->maximum_loss = $request->maximum_loss;
        $fund_risk_ratio->negative_periods = $request->negative_periods;
        $fund_risk_ratio->omega = $request->omega;
        $fund_risk_ratio->positive_periods = $request->positive_periods;
        $fund_risk_ratio->recovery_period = $request->recovery_period;
        $fund_risk_ratio->return_risk = $request->return_risk;
        $fund_risk_ratio->r_squared = $request->r_squared;
        $fund_risk_ratio->semi_deviation = $request->semi_deviation;
        $fund_risk_ratio->semi_variance = $request->semi_variance;
        $fund_risk_ratio->sharpe_ratio = $request->sharpe_ratio;
        $fund_risk_ratio->skewness = $request->skewness;
        $fund_risk_ratio->sortino_ratio = $request->sortino_ratio;
        $fund_risk_ratio->standard_deviation = $request->standard_deviation;
        $fund_risk_ratio->standard_error = $request->standard_error;
        $fund_risk_ratio->sterling_ratio = $request->sterling_ratio;
        $fund_risk_ratio->terynor_ratio = $request->terynor_ratio;
        $fund_risk_ratio->tracking_error = $request->tracking_error;
        $fund_risk_ratio->upside_deviaton = $request->upside_deviaton;
        $fund_risk_ratio->variance = $request->variance;
        $fund_risk_ratio->active_share = $request->active_share;
        $fund_risk_ratio->knaar_perflow_ratio = $request->knaar_perflow_ratio;
        $fund_risk_ratio->save();

        return redirect()->back()->withErrors('Fund Risk Ratios record is updated successfully.');
    }

    public function removeFundRiskRatios($id)
    {
        $fund_risk_ratio = FundRiskRatio::find($id);
        $fund_risk_ratio->delete();
        return redirect()->back()->withErrors('Fund Risk Ratios record is deleted successfully.');
    }

    //  Terms And Conditions
    public function generateRandomString($length = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function createTermsAndConditions(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'fund_identity_id' => 'required|exists:fund_identities,id',
            'propsectus' => 'required',
            'prospectus_date' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $user = Auth::user();

        if ($request->hasFile('propsectus')) {
            foreach($request->file('propsectus') as $file){
                $rand_str = $this->generateRandomString(10);
                $fileName = $file->getClientOriginalName();
                $destinationPath = public_path() . '/images/' . $rand_str . '/';
                $file->move($destinationPath, $fileName);

                //Storage::disk('s3')->put('avatars/1', $file);
                TermsCondition::create([
                    'user_id' => $user->id,
                    'fund_identity_id' => $request->fund_identity_id,
                    'prospectus' => $fileName,
                    'file_path' => '/images/' . $rand_str . '/' . (string)$fileName,
                    'prospectus_date' => $request->prospectus_date,
                ]);
            }
        }

        return redirect()->back()->withErrors('Congrats! Term And Condition is added successfully.');
    }

    public function updateTermsAndConditions(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'propsectus' => 'required',
            'prospectus_date' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $terms_condition = TermsCondition::find($id);
        $terms_condition->user_id = $request->user_id;
        $terms_condition->propsectus = $request->propsectus;
        $terms_condition->prospectus_date = $request->prospectus_date;
        $terms_condition->save();

        return redirect()->back()->withErrors('Term And Condition is updated successfully.');
    }

    public function removeTermsAndConditions($id)
    {
        $terms_condition = TermsCondition::find($id);
        $terms_condition->delete();
        return redirect()->back()->withErrors('Term And Condition is deleted successfully.');
    }

    //  Annual Report
    public function createAnnualReport(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'fund_identity_id' => 'required|exists:fund_identities,id',
            'financial_statement' => 'required',
            'financial_statement_year' => 'required',
            'financial_statement_date' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $user = Auth::user();

        if ($request->hasFile('financial_statement')) {

            foreach ($request->file('financial_statement') as $file) {
                if (!empty($file)) {
                    try{

                        $rand_str = $this->generateRandomString(10);
                        $fileName = $file->getClientOriginalName();
                        $destinationPath = public_path() . '/images/' . $rand_str . '/';
                        $file->move($destinationPath, $fileName);

                        AnnualReport::create([
                            'user_id' => $user->id,
                            'fund_identity_id' => $request->fund_identity_id,
                            'file_path' => '/images/' . $rand_str . '/' . (string)$fileName,
                            'financial_statement' => $fileName,
                            'financial_statement_year' => $request->financial_statement_year,
                            'financial_statement_date' => $request->financial_statement_date,
                        ]);
                    } catch (\Exception $e){
                        return redirect()->back()->withErrors('Oops! duplicate file name/files not allowed into database.');
                    }
                }
            }

        }

        return redirect()->back()->withErrors('Congrats! Annual Report is added successfully.');
    }

    public function updateAnnualReport(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'financial_statement' => 'required',
            'financial_statement_year' => 'required',
            'financial_statement_date' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $annual_report = AnnualReport::find($id);
        $annual_report->user_id = $request->user_id;
        $annual_report->financial_statement = $request->financial_statement;
        $annual_report->financial_statement_year = $request->financial_statement_year;
        $annual_report->financial_statement_date = $request->financial_statement_date;
        $annual_report->save();

        return redirect()->back()->withErrors('Annual Report is updated successfully.');
    }

    public function removeAnnualReport($id)
    {
        $annual_report = AnnualReport::find($id);
        $annual_report->delete();
        return redirect()->back()->withErrors('Annual Report is deleted successfully.');
    }

    //  Semi Annual Report
    public function createSemiAnnualReport(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'fund_identity_id' => 'required',
            'semi_annual_report' => 'required',
            'semi_annual_report_year' => 'required',
            'semi_annual_report_date' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $user = Auth::user();

        if ($request->hasFile('semi_annual_report')) {
            foreach($request->file('semi_annual_report') as $file){
                $rand_str = $this->generateRandomString(10);
                $fileName = $file->getClientOriginalName();
                $destinationPath = public_path() . '/images/' . $rand_str . '/';
                $file->move($destinationPath, $fileName);

                SemiAnnualReport::create([
                    'user_id' => $user->id,
                    'fund_identity_id' => $request->fund_identity_id,
                    'file_path' => '/images/' . $rand_str . '/' . (string)$fileName,
                    'semi_annual_report' => $fileName,
                    'semi_annual_report_year' => $request->semi_annual_report_year,
                    'semi_annual_report_date' => $request->semi_annual_report_date,
                ]);
            }
        }

        return redirect()->back()->withErrors('Congrats! Semi Annual Report is added successfully.');
    }

    public function updateSemiAnnualReport(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'semi_annual_report' => 'required',
            'semi_annual_report_year' => 'required',
            'semi_annual_report_date' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $annual_report = SemiAnnualReport::find($id);
        $annual_report->user_id = $request->user_id;
        $annual_report->semi_annual_report = $request->semi_annual_report;
        $annual_report->semi_annual_report_year = $request->semi_annual_report_year;
        $annual_report->semi_annual_report_year = $request->semi_annual_report_year;
        $annual_report->save();

        return redirect()->back()->withErrors('Semi Annual Report is updated successfully.');
    }

    public function removeSemiAnnualReport($id)
    {
        $semi_annual_report = SemiAnnualReport::find($id);
        $semi_annual_report->delete();
        return redirect()->back()->withErrors('Semi Annual Report is deleted successfully.');
    }


    //Index Shell

    //  Index Facts
    public function createIndexFacts(Request $request)
    {


        $validator = Validator::make($request->all(), [
            'index_name' => 'required',
            'index_code' => 'required',
            'index_objective' => 'required',
            'index_investability' => 'required',
            'index_weighting' => 'required',
            'component_number' => 'required',
            'review_frequency' => 'required',
            'calculation' => 'required',
            'base_value' => 'required',
            'base_date' => 'required',
            'introduction_date' => 'required',
            'settlement_procedure' => 'required',
            'index_provider' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $user = Auth::user();

        IndexFact::create([
            'user_id' => $user->id,
            'index_name' => $request->index_name,
            'index_code' => $request->index_code,
            'index_objective' => $request->index_objective,
            'index_investability' => $request->index_investability,
            'index_weighting' => $request->index_weighting,
            'component_number' => $request->component_number,
            'review_frequency' => $request->review_frequency,
            'calculation' => $request->calculation,
            'base_value' => $request->base_value,
            'base_date' => $request->base_date,
            'introduction_date' => $request->introduction_date,
            'settlement_procedure' => $request->settlement_procedure,
            'index_provider' => $request->index_provider,

        ]);


        return redirect()->back()->withErrors('Congrats! Index Facts record is added successfully.');
    }

    public function updateIndexFacts(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'index_name' => 'required',
            'index_code' => 'required',
            'index_objective' => 'required',
            'index_investability' => 'required',
            'index_weighting' => 'required',
            'component_number' => 'required',
            'review_frequency' => 'required',
            'calculation' => 'required',
            'base_value' => 'required',
            'base_date' => 'required',
            'introduction_date' => 'required',
            'settlement_procedure' => 'required',
            'index_provider' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $index_fact = IndexFact::find($id);
        $index_fact->user_id = $request->user_id;
        $index_fact->index_name = $request->index_name;
        $index_fact->index_code = $request->index_code;
        $index_fact->index_objective = $request->index_objective;
        $index_fact->index_investability = $request->index_investability;
        $index_fact->index_weighting = $request->index_weighting;
        $index_fact->component_number = $request->component_number;
        $index_fact->review_frequency = $request->review_frequency;
        $index_fact->calculation = $request->calculation;
        $index_fact->base_value = $request->base_value;
        $index_fact->base_date = $request->base_date;
        $index_fact->introduction_date = $request->introduction_date;
        $index_fact->settlement_procedure = $request->settlement_procedure;
        $index_fact->index_provider = $request->index_provider;
        $index_fact->save();

        return redirect()->back()->withErrors('Index Facts record is updated successfully.');
    }

    public function removeIndexFacts($id)
    {
        $index_fact = IndexFact::find($id);
        $index_fact->delete();
        return redirect()->back()->withErrors('Index Facts record is deleted successfully.');
    }

    //  	Index Time Series
    public function createIndexTimeSeries(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'index_price' => 'required',
            'index_price_date' => 'required',
            'index_net_return' => 'required',
            'index_gross_return' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $user = Auth::user();

        IndexTimeSeries::create([
            'user_id' => $user->id,
            'index_price' => $request->index_price,
            'index_price_date' => $request->index_price_date,
            'index_net_return' => $request->index_net_return,
            'index_gross_return' => $request->index_gross_return,

        ]);


        return redirect()->back()->withErrors('Congrats! Index Time Series record is added successfully.');
    }

    public function updateIndexTimeSeries(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'index_price' => 'required',
            'index_price_date' => 'required',
            'index_net_return' => 'required',
            'index_gross_return' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $index_time_series = IndexTimeSeries::find($id);
        $index_time_series->user_id = $request->user_id;
        $index_time_series->index_price = $request->index_price;
        $index_time_series->index_price_date = $request->index_price_date;
        $index_time_series->index_net_return = $request->index_net_return;
        $index_time_series->index_gross_return = $request->index_gross_return;
        $index_time_series->save();

        return redirect()->back()->withErrors('Index Time Series record is updated successfully.');

    }

    public function removeIndexTimeSeries($id)
    {
        $index_time_series = IndexTimeSeries::find($id);
        $index_time_series->delete();
        return redirect()->back()->withErrors('Index Time Series record is deleted successfully.');
    }

    //Company Shell

    //  Profile
    public function createProfile(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'fund_identity_id' => 'required|exists:fund_identities,id',
            'legal_name' => 'required',
            'common_name' => 'required',
            'commercial_registration_number' => 'required',
            'role' => 'required',
            'chairman' => 'required',
            'ceo' => 'required',
            'register_number' => 'required',
            'regulator_authorization_number' => 'required',
            'authorization_date' => 'required',
            'share_capital' => 'required',
            'share_capital_currency' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $user = Auth::user();

        Profile::create([
            'user_id' => $user->id,
            'fund_identity_id' => $request->fund_identity_id,
            'legal_name' => $request->legal_name,
            'common_name' => $request->common_name,
            'commercial_registration_number' => $request->commercial_registration_number,
            'role' => $request->role,
            'chairman' => $request->chairman,
            'ceo' => $request->ceo,
            'register_number' => $request->register_number,
            'regulator_authorization_number' => $request->regulator_authorization_number,
            'authorization_date' => $request->authorization_date,
            'share_capital' => $request->share_capital,
            'share_capital_currency' => $request->share_capital_currency,

        ]);


        return redirect()->back()->withErrors('Congrats! Profile is created successfully.');
    }

    public function updateProfile(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'legal_name' => 'required',
            'common_name' => 'required',
            'commercial_registration_number' => 'required',
            'role' => 'required',
            'chairman' => 'required',
            'ceo' => 'required',
            'register_number' => 'required',
            'regulator_authorization_number' => 'required',
            'authorization_date' => 'required',
            'share_capital' => 'required',
            'share_capital_currency' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }


        $profile = Profile::find($id);
        $profile->user_id = $request->user_id;
        $profile->legal_name = $request->legal_name;
        $profile->common_name = $request->common_name;
        $profile->commercial_registration_number = $request->commercial_registration_number;
        $profile->role = $request->role;
        $profile->chairman = $request->chairman;
        $profile->ceo = $request->ceo;
        $profile->register_number = $request->register_number;
        $profile->regulator_authorization_number = $request->regulator_authorization_number;
        $profile->authorization_date = $request->authorization_date;
        $profile->share_capital = $request->share_capital;
        $profile->share_capital_currency = $request->share_capital_currency;
        $profile->save();

        return redirect()->back()->withErrors('Profile is updated successfully.');
    }

    public function removeProfile($id)
    {
        $profile = Profile::find($id);
        $profile->delete();
        return redirect()->back()->withErrors('Profile is deleted successfully.');
    }

    //  Shareholders
    public function createShareholders(Request $request)
    {


        $validator = Validator::make($request->all(), [
            'fund_identity_id' => 'required|exists:fund_identities,id',
            'shareholder_name' => 'required',
            'percentage' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $user = Auth::user();

        Shareholder::create([
            'user_id' => $user->id,
            'fund_identity_id' => $request->fund_identity_id,
            'shareholder_name' => $request->shareholder_name,
            'percentage' => $request->percentage,

        ]);


        return redirect()->back()->withErrors('Congrats! Shareholder record is added successfully.');

    }

    public function updateShareholders(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'shareholder_name' => 'required',
            'percentage' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }


        $shareholder = Shareholder::find($id);
        $shareholder->user_id = $request->user_id;
        $shareholder->shareholder_name = $request->shareholder_name;
        $shareholder->percentage = $request->percentage;
        $shareholder->save();

        return redirect()->back()->withErrors('Shareholder record is updated successfully.');

    }

    public function removeShareholders($id)
    {
        $shareholder = Shareholder::find($id);
        $shareholder->delete();
        return redirect()->back()->withErrors('Shareholder is deleted successfully.');
    }


    //  Address
    public function createAddress(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'line_1' => 'required',
            'line_2' => 'required',
            'city' => 'required',
            'postal_code' => 'required',
            'country' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $user = Auth::user();

        Address::create([
            'user_id' => $user->id,
            'line_1' => $request->line_1,
            'line_2' => $request->line_2,
            'city' => $request->city,
            'postal_code' => $request->postal_code,
            'country' => $request->country,

        ]);


        return redirect()->back()->withErrors('Congrats! Address record is added successfully.');
    }

    public function updateAddress(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'line_1' => 'required',
            'line_2' => 'required',
            'city' => 'required',
            'postal_code' => 'required',
            'country' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }

        $address = Address::find($id);
        $address->user_id = $request->user_id;
        $address->line_1 = $request->line_1;
        $address->line_2 = $request->line_2;
        $address->city = $request->city;
        $address->postal_code = $request->postal_code;
        $address->country = $request->country;
        $address->save();

        return redirect()->back()->withErrors('Address record is updated successfully.');

    }

    public function removeAddress($id)
    {
        $address = Address::find($id);
        $address->delete();
        return redirect()->back()->withErrors('Address is deleted successfully.');
    }
}
        