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
use App\Models\FundShells\FundIdentity;
use App\Models\FundShells\FundIncomeSetting;
use App\Models\FundShells\FundKeyAttributes;
use App\Models\FundShells\FundObjectiveStrategy;
use App\Models\FundShells\FundPerformance;
use App\Models\FundShells\FundRiskRatio;
use App\Models\FundShells\FundSalesDistribution;
use App\Models\FundShells\FundIdentityPolicy;
use App\Models\FundShells\KeyInvestorInformationDocument;
use App\Models\FundShells\Redemption;
use App\Models\FundShells\SourcedStatistic;
use App\Models\FundShells\ValuationFrequency;
use App\Models\FundShells\SemiAnnualReport;
use App\Models\FundShells\FundTimeSeries;
use App\Models\FundShells\TermsCondition;
use App\Models\IndexShells\IndexFact;
use App\Models\FundShells\Initial;
use App\Models\FundShells\InvestorType;
use App\Models\FundShells\LawsRegulation;
use App\Models\FundShells\RelatedFund;
use App\Models\FundShells\Subscription;
use App\Models\FundShells\ThemesAttributes;
use App\Models\FundShells\MarketData;
use App\Models\IndexShells\IndexTimeSeries;
use Illuminate\Contracts\Auth\Access\Authorizable;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class FundViewController extends Controller
{
//	Fund Identity & Policy
    public function createFundIdentityPolicy()
    {
        $fund_identities = FundIdentity::all();
        $fund_objective_strategies = FundObjectiveStrategy::all();

        $data_array = [
            'fund_identities' => $fund_identities,
            'fund_objective_strategies' => $fund_objective_strategies
        ];
        return view('admin.FundShells.FundIdentityPolicy.Root.add_fund_identity_policy', $data_array);
    }

    public function listFundIdentityPolicy()
    {
        $fund_identity_policies = DB::table('fund_identity_policies')
            ->select(DB::raw('
                fund_identity_policies.id as fip_id,
                fund_identity_policies.created_at as dated,
                fi.*,fi.id as fi_id,
                fos.*,fos.id as fos_id
            '))
            ->leftJoin('fund_identities as fi', 'fi.id', '=', 'fund_identity_policies.fund_identity_id')
            ->leftJoin('fund_objective_strategies as fos', 'fos.id', '=', 'fund_identity_policies.fund_objective_strategy_id')
            ->orderBy('fund_identity_policies.created_at', 'desc')
            ->paginate(5);

        $data_array = [
            'fund_identity_policies' => $fund_identity_policies
        ];
        return view('admin.FundShells.FundIdentityPolicy.Root.fund_identity_policy', $data_array);
    }

//	Fund Identity
    public function createFundIdentity()
    {

        return view('admin.FundShells.FundIdentityPolicy.FundIdentity.add_fund_identity');
    }

    public function updateFundIdentity($fund_id)
    {
        $fund_identity = FundIdentity::whereId($fund_id)->first();
        return view('admin.FundShells.FundIdentityPolicy.FundIdentity.edit_fund_identity', ['fund_identity' => $fund_identity]);
    }

    public function listFundIdentity()
    {
        $fund_identities = FundIdentity::orderBy('created_at', 'desc')->get();
        return view('admin.FundShells.FundIdentityPolicy.FundIdentity.fund_identity', ['fund_identities' => $fund_identities]);
    }

    public function viewFundIdentity($fund_id)
    {
        $fund_identity = FundIdentity::whereId($fund_id)->first();
        return view('admin.FundShells.FundIdentityPolicy.FundIdentity.view_fund_identity', ['fund_identity' => $fund_identity]);
    }

//	Fund Objective & Strategy

    public function createFundObjectiveStrategy()
    {
        $fund_identities = FundIdentity::all();

        return view('admin.FundShells.FundIdentityPolicy.FundObjectiveStrategy.add_fund_objective_strategy'  ,['fund_identities' => $fund_identities]);
    }

    public function updateFundObjectiveStrategy($id)
    {
        $fund_objective = FundObjectiveStrategy::whereId($id)->first();
        return view('admin.FundShells.FundIdentityPolicy.FundObjectiveStrategy.edit_fund_objective_strategy', ['fund_objective' => $fund_objective]);
    }

    public function listFundObjectiveStrategy()
    {
        $fund_objective = FundObjectiveStrategy::orderBy('created_at', 'desc')->get();
        return view('admin.FundShells.FundIdentityPolicy.FundObjectiveStrategy.fund_objective_strategy', ['fund_objective' => $fund_objective]);
    }

    public function viewFundObjectiveStrategy($id)
    {
        $fund_objective = FundObjectiveStrategy::whereId($id)->first();
        return view('admin.FundShells.FundIdentityPolicy.FundObjectiveStrategy.view_fund_objective_strategy', ['fund_objective' => $fund_objective]);
    }


    //	Fund Attributes
    public function createFundAttributes()
    {
        $fund_key_attributes = FundKeyAttributes::orderBy('created_at', 'desc')->get();
        $fund_sales_distribution = FundSalesDistribution::orderBy('created_at', 'desc')->get();
        $fund_asset_attributes = FundAssetAttributes::orderBy('created_at', 'desc')->get();
        $related_fund = RelatedFund::orderBy('created_at', 'desc')->get();
        $fund_flags = FundFlag::orderBy('created_at', 'desc')->get();
        $investor_type = InvestorType::orderBy('created_at', 'desc')->get();
        $themes_attributes = ThemesAttributes::orderBy('created_at', 'desc')->get();
        $fund_histories = FundHistory::orderBy('created_at', 'desc')->get();;

        $data_array = [
            'fund_key_attributes' => $fund_key_attributes,
            'fund_sales_distributions' => $fund_sales_distribution,
            'fund_asset_attributes' => $fund_asset_attributes,
            'related_funds' => $related_fund,
            'fund_flags' => $fund_flags,
            'investor_types' => $investor_type,
            'themes_attributes' => $themes_attributes,
            'fund_histories' => $fund_histories,
        ];
        return view('admin.FundShells.FundAttributes.Root.add_fund_attributes', $data_array);
    }

    public function listFundAttributes()
    {
        $fund_attributes = DB::table('fund_attributes')
            ->select(DB::raw('
                fund_attributes.id as fa_id,
                fund_attributes.created_at as dated,
                fka.*,
                fka.id as fka_id,
                fsd.*,
                fsd.id as fsd_id,
                faa.*,
                faa.id as faa_id,
                rf.*,
                rf.id as rf_id,
                ff.*,
                ff.id as ff_id,
                it.*,
                it.id as it_id,
                ta.*,
                ta.id as ta_id,
                fh.*,
                fh.id as fh_id
            '))
            ->leftJoin('fund_key_attributes as fka', 'fka.id', '=', 'fund_attributes.fund_key_attribute_id')
            ->leftJoin('fund_sales_distributions as fsd', 'fsd.id', '=', 'fund_attributes.fund_sales_distribution_id')
            ->leftJoin('fund_asset_attributes as faa', 'faa.id', '=', 'fund_attributes.fund_asset_attribute_id')
            ->leftJoin('related_funds as rf', 'rf.id', '=', 'fund_attributes.related_fund_id')
            ->leftJoin('fund_flags as ff', 'ff.id', '=', 'fund_attributes.fund_flag_id')
            ->leftJoin('investor_types as it', 'it.id', '=', 'fund_attributes.investor_type_id')
            ->leftJoin('themes_attributes as ta', 'ta.id', '=', 'fund_attributes.themes_attribute_id')
            ->leftJoin('fund_histories as fh', 'fh.id', '=', 'fund_attributes.fund_history_id')
            ->orderBy('fund_attributes.created_at', 'desc')
            ->paginate(5);

        $data_array = [
            'fund_attributes' => $fund_attributes
        ];
        return view('admin.FundShells.FundAttributes.Root.fund_attributes', $data_array);
    }

    //		Fund Key Attributes
    public function createFundKeyAttributes()
    {        $fund_identities = FundIdentity::all();

        return view('admin.FundShells.FundAttributes.FundKeyAttributes.add_fund_key_attributes' ,['fund_identities' => $fund_identities]);
    }

    public function updateFundKeyAttributes($id)
    {
        $fund_key_attributes = FundKeyAttributes::whereId($id)->first();
        return view('admin.FundShells.FundAttributes.FundKeyAttributes.edit_fund_key_attributes', ['fund_key_attributes' => $fund_key_attributes]);
    }

    public function listFundKeyAttributes()
    {
        $fund_key_attributes = FundKeyAttributes::orderBy('created_at', 'desc')->get();
        return view('admin.FundShells.FundAttributes.FundKeyAttributes.fund_key_attributes', ['fund_key_attributes' => $fund_key_attributes]);
    }

    public function viewFundKeyAttributes($id)
    {
        $fund_key_attributes = FundKeyAttributes::whereId($id)->first();
        return view('admin.FundShells.FundAttributes.FundKeyAttributes.view_fund_key_attributes', ['fund_key_attributes' => $fund_key_attributes]);
    }

    //  Fund Asset Attributes
    public function createFundAssetAttributes()
    {
        $fund_identities = FundIdentity::all();

        return view('admin.FundShells.FundAttributes.FundAssetAttributes.add_fund_asset_attributes',['fund_identities' => $fund_identities]);
    }

    public function updateFundAssetAttributes($id)
    {
        $fund_asset_attributes = FundAssetAttributes::whereId($id)->first();
        return view('admin.FundShells.FundAttributes.FundAssetAttributes.edit_fund_asset_attributes', ['fund_asset_attributes' => $fund_asset_attributes]);
    }

    public function listFundAssetAttributes()
    {
        $fund_asset_attributes = FundAssetAttributes::orderBy('created_at', 'desc')->get();
        return view('admin.FundShells.FundAttributes.FundAssetAttributes.fund_asset_attributes', ['fund_asset_attributes' => $fund_asset_attributes]);
    }

    public function viewFundAssetAttributes($id)
    {
        $fund_asset_attributes = FundAssetAttributes::whereId($id)->first();
        return view('admin.FundShells.FundAttributes.FundAssetAttributes.view_fund_asset_attributes', ['fund_asset_attributes' => $fund_asset_attributes]);
    }

    //  Fund Sales & Distribution
    public function createFundSalesDistribution()
    {
        $fund_identities = FundIdentity::all();

        return view('admin.FundShells.FundAttributes.FundSalesDistribution.add_fund_sales_distribution',['fund_identities' => $fund_identities]);
    }

    public function updateFundSalesDistribution($id)
    {
        $fund_sales_distribution = FundSalesDistribution::whereId($id)->first();
        return view('admin.FundShells.FundAttributes.FundSalesDistribution.edit_fund_sales_distribution', ['fund_sales_distribution' => $fund_sales_distribution]);
    }

    public function listFundSalesDistribution()
    {
        $fund_sales_distribution = FundSalesDistribution::orderBy('created_at', 'desc')->get();

        return view('admin.FundShells.FundAttributes.FundSalesDistribution.fund_sales_distribution', ['fund_sales_distribution' => $fund_sales_distribution]);
    }

    public function viewFundSalesDistribution($id)
    {
        $fund_sales_distribution = FundSalesDistribution::whereId($id)->first();
        return view('admin.FundShells.FundAttributes.FundSalesDistribution.view_fund_sales_distribution', ['fund_sales_distribution' => $fund_sales_distribution]);
    }

    //  	Fund History
    public function createFundHistory()
    {

        $fund = FundIdentity::all();

        return view('admin.FundShells.FundAttributes.FundHistory.add_fund_history', ['fund' => $fund]);
    }

    public function updateFundHistory($id)
    {
        $fund = FundIdentity::all();
        $fund_history = FundHistory::whereId($id)->first();
        return view('admin.FundShells.FundAttributes.FundHistory.edit_fund_history', ['fund_history' => $fund_history, 'fund' => $fund]);
    }

    public function listFundHistory()
    {

        $fund_history = DB::table('fund_histories')
            ->join('fund_identities', 'fund_histories.successor', '=', 'fund_identities.id')
            ->select(
                'fund_identities.fund_name as successorname',
                'fund_histories.*'
            )->orderby('fund_histories.created_at', 'DESC')
            ->get();
        return view('admin.FundShells.FundAttributes.FundHistory.fund_history', ['fund_history' => $fund_history]);
    }

    public function viewFundHistory($id)
    {
        $fund = FundIdentity::all();
        $fund_history = FundHistory::whereId($id)->first();
        return view('admin.FundShells.FundAttributes.FundHistory.view_fund_history', ['fund_history' => $fund_history, 'fund' => $fund]);
    }

    //  	Related Funds
    public function createRelatedFunds()
    {
        $fund_identities = FundIdentity::all();

        return view('admin.FundShells.FundAttributes.RelatedFunds.add_related_funds',['fund_identities' => $fund_identities]);
    }

    public function updateRelatedFunds($id)
    {
        $related_fund = RelatedFund::whereId($id)->first();
        return view('admin.FundShells.FundAttributes.RelatedFunds.edit_related_funds', ['related_fund' => $related_fund]);
    }

    public function listRelatedFunds()
    {
        $related_fund = RelatedFund::orderBy('created_at', 'desc')->get();
        return view('admin.FundShells.FundAttributes.RelatedFunds.related_funds', ['related_fund' => $related_fund]);
    }

    public function viewRelatedFunds($id)
    {
        $related_fund = RelatedFund::whereId($id)->first();
        return view('admin.FundShells.FundAttributes.RelatedFunds.view_related_funds', ['related_fund' => $related_fund]);
    }

    //  	Fund Flags
    public function createFundFlags()
    {
        $fund_identities = FundIdentity::all();

        return view('admin.FundShells.FundAttributes.FundFlags.add_fund_flags',['fund_identities' => $fund_identities]);
    }

    public function updateFundFlags($id)
    {
        $fund_flags = FundFlag::whereId($id)->first();
        return view('admin.FundShells.FundAttributes.FundFlags.edit_fund_flags', ['fund_flags' => $fund_flags]);
    }

    public function listFundFlags()
    {
        $fund_flags = FundFlag::orderBy('created_at', 'desc')->get();
        return view('admin.FundShells.FundAttributes.FundFlags.fund_flags', ['fund_flags' => $fund_flags]);
    }

    public function viewFundFlags($id)
    {
        $fund_flags = FundFlag::whereId($id)->first();
        return view('admin.FundShells.FundAttributes.FundFlags.view_fund_flags', ['fund_flags' => $fund_flags]);
    }

    //  	Investor Type
    public function createInvestorType()
    {
        $fund_identities = FundIdentity::all();

        return view('admin.FundShells.FundAttributes.InvestorType.add_investor_type',['fund_identities' => $fund_identities]);
    }

    public function updateInvestorType($id)
    {
        $investor_type = InvestorType::whereId($id)->first();
        return view('admin.FundShells.FundAttributes.InvestorType.edit_investor_type', ['investor_type' => $investor_type]);
    }

    public function listInvestorType()
    {
        $investor_type = InvestorType::orderBy('created_at', 'desc')->get();
        return view('admin.FundShells.FundAttributes.InvestorType.investor_type', ['investor_type' => $investor_type]);
    }

    public function viewInvestorType($id)
    {
        $investor_type = InvestorType::whereId($id)->first();
        return view('admin.FundShells.FundAttributes.InvestorType.view_investor_type', ['investor_type' => $investor_type]);
    }

    //  	Themes Attributes
    public function createThemesAttributes()
    {
        $fund_identities = FundIdentity::all();

        return view('admin.FundShells.FundAttributes.ThemesAttributes.add_themes_attributes' ,['fund_identities' => $fund_identities]);
    }

    public function updateThemesAttributes($id)
    {
        $theme_attributes = ThemesAttributes::whereId($id)->first();
        return view('admin.FundShells.FundAttributes.ThemesAttributes.edit_themes_attributes', ['theme_attributes' => $theme_attributes]);
    }

    public function listThemesAttributes()
    {
        $theme_attributes = ThemesAttributes::orderBy('created_at', 'desc')->get();
        return view('admin.FundShells.FundAttributes.ThemesAttributes.themes_attributes', ['theme_attributes' => $theme_attributes]);
    }

    public function viewThemesAttributes($id)
    {
        $theme_attributes = ThemesAttributes::whereId($id)->first();
        return view('admin.FundShells.FundAttributes.ThemesAttributes.view_themes_attributes', ['theme_attributes' => $theme_attributes]);
    }

    //  	Fund Codes
    public function createFundCodes()
    {
        $fund_identities = FundIdentity::all();

        return view('admin.FundShells.FundCodes.add_fund_codes' ,['fund_identities' => $fund_identities]);
    }

    public function updateFundCodes($id)
    {
        $fund_codes = FundCode::whereId($id)->first();
        return view('admin.FundShells.FundCodes.edit_fund_codes', ['fund_codes' => $fund_codes]);
    }

    public function listFundCodes()
    {
        $fund_codes = FundCode::orderBy('created_at', 'desc')->get();
        return view('admin.FundShells.FundCodes.fund_codes', ['fund_codes' => $fund_codes]);
    }

    public function viewFundCodes($id)
    {
        $fund_codes = FundCode::whereId($id)->first();
        return view('admin.FundShells.FundCodes.view_fund_codes', ['fund_codes' => $fund_codes]);
    }


//	Fund Classification & Benchmarks
    public function createFundClassificationBenchmarks()
    {
        $fund_classifications = FundClassificationScheme::all();
        $fund_benchmarks = FundBenchmarks::all();

        $data_array = [
            'fund_classifications' => $fund_classifications,
            'fund_benchmarks' => $fund_benchmarks
        ];
        return view('admin.FundShells.FundClassificationBenchmarks.Root.add_fund_classification_benchmarks', $data_array);
    }

    public function listFundClassificationBenchmarks()
    {
        $fund_identity_policies = DB::table('fund_identity_policies')
            ->select(DB::raw('
            fund_identity_policies.id as fip_id,
            fund_identity_policies.created_at as dated,
            fi.*,fi.id as fi_id,
            fos.*,fos.id as fos_id
        '))
            ->leftJoin('fund_identities as fi', 'fi.id', '=', 'fund_identity_policies.fund_identity_id')
            ->leftJoin('fund_objective_strategies as fos', 'fos.id', '=', 'fund_identity_policies.fund_objective_strategy_id')
            ->orderBy('fund_identity_policies.created_at', 'desc')
            ->paginate(5);

        $data_array = [
            'fund_identity_policies' => $fund_identity_policies
        ];
        return view('admin.FundShells.FundClassificationBenchmarks.Root.fund_identity_policy', $data_array);
    }

    //  	Fund Classification Schemes
    public function createFundClassificationSchemes()
    {
        $fund_identities = FundIdentity::all();

        return view('admin.FundShells.FundClassificationBenchmarks.FundClassificationSchemes.add_fund_classification_schemes' ,['fund_identities' => $fund_identities]);
    }

    public function updateFundClassificationSchemes($id)
    {
        $fund_classification_schemes = FundClassificationScheme::whereId($id)->first();
        return view('admin.FundShells.FundClassificationBenchmarks.FundClassificationSchemes.edit_fund_classification_schemes', ['fund_classification_schemes' => $fund_classification_schemes]);
    }

    public function listFundClassificationSchemes()
    {
        $fund_classification_schemes = FundClassificationScheme::orderBy('created_at', 'desc')->get();
        return view('admin.FundShells.FundClassificationBenchmarks.FundClassificationSchemes.fund_classification_schemes', ['fund_classification_schemes' => $fund_classification_schemes]);
    }

    public function viewFundClassificationSchemes($id)
    {
        $fund_classification_schemes = FundClassificationScheme::whereId($id)->first();
        return view('admin.FundShells.FundClassificationBenchmarks.FundClassificationSchemes.view_fund_classification_schemes', ['fund_classification_schemes' => $fund_classification_schemes]);
    }

    //  	Fund Benchmarks
    public function createFundBenchmarks()
    {
        $fund_identities = FundIdentity::all();

        return view('admin.FundShells.FundClassificationBenchmarks.FundBenchmarks.add_fund_benchmarks' ,['fund_identities' => $fund_identities]);
    }

    public function updateFundBenchmarks($id)
    {
        $fund_benchmarks = FundBenchmarks::whereId($id)->first();
        return view('admin.FundShells.FundClassificationBenchmarks.FundBenchmarks.edit_fund_benchmarks', ['fund_benchmarks' => $fund_benchmarks]);
    }

    public function listFundBenchmarks()
    {
        $fund_benchmarks = FundBenchmarks::orderBy('created_at', 'desc')->get();
        return view('admin.FundShells.FundClassificationBenchmarks.FundBenchmarks.fund_benchmarks', ['fund_benchmarks' => $fund_benchmarks]);
    }

    public function viewFundBenchmarks($id)
    {
        $fund_benchmarks = FundBenchmarks::whereId($id)->first();
        return view('admin.FundShells.FundClassificationBenchmarks.FundBenchmarks.view_fund_benchmarks', ['fund_benchmarks' => $fund_benchmarks]);
    }

    //  	Authorizations
    public function createAuthorizations()
    {
        $fund_identities = FundIdentity::all();

        return view('admin.FundShells.FundRegulationsCompliance.FundCompliance.Authorizations.add_authorizations',['fund_identities' => $fund_identities]);
    }

    public function updateAuthorizations($id)
    {
        $authorizations = Authorization::whereId($id)->first();
        return view('admin.FundShells.FundRegulationsCompliance.FundCompliance.Authorizations.edit_authorizations', ['authorizations' => $authorizations]);
    }

    public function listAuthorizations()
    {
        $authorizations = Authorization::orderBy('created_at', 'desc')->get();
        return view('admin.FundShells.FundRegulationsCompliance.FundCompliance.Authorizations.authorizations', ['authorizations' => $authorizations]);
    }

    public function viewAuthorizations($id)
    {
        $authorizations = Authorization::whereId($id)->first();
        return view('admin.FundShells.FundRegulationsCompliance.FundCompliance.Authorizations.view_authorizations', ['authorizations' => $authorizations]);
    }

    //  	Compliance Officer
    public function createComplianceOfficer()
    {        $fund_identities = FundIdentity::all();


        return view('admin.FundShells.FundRegulationsCompliance.FundCompliance.ComplianceOfficer.add_compliance_officer',['fund_identities' => $fund_identities]);
    }

    public function updateComplianceOfficer($id)
    {
        $compliance_officer = ComplianceOfficer::whereId($id)->first();
        return view('admin.FundShells.FundRegulationsCompliance.FundCompliance.ComplianceOfficer.edit_compliance_officer', ['compliance_officer' => $compliance_officer]);
    }

    public function listComplianceOfficer()
    {
        $compliance_officer = ComplianceOfficer::orderBy('created_at', 'desc')->get();
        return view('admin.FundShells.FundRegulationsCompliance.FundCompliance.ComplianceOfficer.compliance_officer', ['compliance_officer' => $compliance_officer]);
    }

    public function viewComplianceOfficer($id)
    {
        $compliance_officer = ComplianceOfficer::whereId($id)->first();
        return view('admin.FundShells.FundRegulationsCompliance.FundCompliance.ComplianceOfficer.view_compliance_officer', ['compliance_officer' => $compliance_officer]);
    }

    //  	Laws and Regulations
    public function createLawsAndRegulations()
    {
        $fund_identities = FundIdentity::all();

        return view('admin.FundShells.FundRegulationsCompliance.FundRegulations.LawsAndRegulations.add_laws_and_regulations',['fund_identities' => $fund_identities]);
    }

    public function updateLawsAndRegulations($id)
    {
        $law_regulations = LawsRegulation::whereId($id)->first();
        return view('admin.FundShells.FundRegulationsCompliance.FundRegulations.LawsAndRegulations.edit_laws_and_regulations', ['law_regulations' => $law_regulations]);
    }

    public function listLawsAndRegulations()
    {
        $law_regulations = LawsRegulation::orderBy('created_at', 'desc')->get();
        return view('admin.FundShells.FundRegulationsCompliance.FundRegulations.LawsAndRegulations.laws_and_regulations', ['law_regulations' => $law_regulations]);
    }

    public function viewLawsAndRegulations($id)
    {
        $law_regulations = LawsRegulation::whereId($id)->first();
        return view('admin.FundShells.FundRegulationsCompliance.FundRegulations.LawsAndRegulations.view_laws_and_regulations', ['law_regulations' => $law_regulations]);
    }

    //  	Subscription
    public function createSubscription()
    {
        $fund_identities = FundIdentity::all();

        return view('admin.FundShells.FundSubscriptionRedemption.Subscription.add_subscription',['fund_identities' => $fund_identities]);
    }

    public function updateSubscription($id)
    {
        $subscription = Subscription::whereId($id)->first();
        return view('admin.FundShells.FundSubscriptionRedemption.Subscription.edit_subscription', ['subscription' => $subscription]);
    }

    public function listSubscription()
    {
        $subscription = Subscription::orderBy('created_at', 'desc')->get();
        return view('admin.FundShells.FundSubscriptionRedemption.Subscription.subscription', ['subscription' => $subscription]);
    }

    public function viewSubscription($id)
    {
        $subscription = Subscription::whereId($id)->first();
        return view('admin.FundShells.FundSubscriptionRedemption.Subscription.view_subscription', ['subscription' => $subscription]);
    }

    //  	Redemption
    public function createRedemption()
    {
        $fund_identities = FundIdentity::all();

        return view('admin.FundShells.FundSubscriptionRedemption.Redemption.add_redemption' ,['fund_identities' => $fund_identities]);
    }

    public function updateRedemption($id)
    {
        $redemption = Redemption::whereId($id)->first();
        return view('admin.FundShells.FundSubscriptionRedemption.Redemption.edit_redemption', ['redemption' => $redemption]);
    }

    public function listRedemption()
    {
        $redemption = Redemption::orderBy('created_at', 'desc')->get();
        return view('admin.FundShells.FundSubscriptionRedemption.Redemption.redemption', ['redemption' => $redemption]);
    }

    public function viewRedemption($id)
    {
        $redemption = Redemption::whereId($id)->first();
        return view('admin.FundShells.FundSubscriptionRedemption.Redemption.view_redemption', ['redemption' => $redemption]);
    }

    //  	Initial
    public function createInitial()
    {
        $fund_identities = FundIdentity::all();

        return view('admin.FundShells.FundFeesExpenseDetails.Charges.Initial.add_initial' ,['fund_identities' => $fund_identities]);
    }

    public function updateInitial($id)
    {
        $initial = Initial::whereId($id)->first();
        return view('admin.FundShells.FundFeesExpenseDetails.Charges.Initial.edit_initial', ['initial' => $initial]);
    }

    public function listInitial()
    {
        $initial = Initial::orderBy('created_at', 'desc')->get();
        return view('admin.FundShells.FundFeesExpenseDetails.Charges.Initial.initial', ['initial' => $initial]);
    }

    public function viewInitial($id)
    {
        $initial = Initial::whereId($id)->first();
        return view('admin.FundShells.FundFeesExpenseDetails.Charges.Initial.view_initial', ['initial' => $initial]);
    }

    //  Charges	Redemption
    public function createChargesRedemption()
    {
        $fund_identities = FundIdentity::all();

        return view('admin.FundShells.FundFeesExpenseDetails.Charges.Redemption.add_redemption',['fund_identities' => $fund_identities]);
    }

    public function updateChargesRedemption($id)
    {
        $redemption = ChargesRedemption::whereId($id)->first();
        return view('admin.FundShells.FundFeesExpenseDetails.Charges.Redemption.edit_redemption', ['redemption' => $redemption]);
    }

    public function listChargesRedemption()
    {
        $redemption = ChargesRedemption::orderBy('created_at', 'desc')->get();
        return view('admin.FundShells.FundFeesExpenseDetails.Charges.Redemption.redemption', ['redemption' => $redemption]);
    }

    public function viewChargesRedemption($id)
    {
        $redemption = ChargesRedemption::whereId($id)->first();
        return view('admin.FundShells.FundFeesExpenseDetails.Charges.Redemption.view_redemption', ['redemption' => $redemption]);
    }

    //  Annual
    public function createAnnual()
    {
        $fund_identities = FundIdentity::all();

        return view('admin.FundShells.FundFeesExpenseDetails.Charges.Annual.add_annual',['fund_identities' => $fund_identities]);
    }

    public function updateAnnual($id)
    {
        $annual = Annual::whereId($id)->first();
        return view('admin.FundShells.FundFeesExpenseDetails.Charges.Annual.edit_annual', ['annual' => $annual]);
    }

    public function listAnnual()
    {
        $annual = Annual::orderBy('created_at', 'desc')->get();
        return view('admin.FundShells.FundFeesExpenseDetails.Charges.Annual.annual', ['annual' => $annual]);
    }

    public function viewAnnual($id)
    {
        $annual = Annual::whereId($id)->first();
        return view('admin.FundShells.FundFeesExpenseDetails.Charges.Annual.view_annual', ['annual' => $annual]);
    }

    //  	Annual Report Fees Breakdown
    public function createAnnualReportFeesBreakdown()
    {
        $fund_identities = FundIdentity::all();

        return view('admin.FundShells.FundFeesExpenseDetails.Expenses.AnnualReportFeesBreakdown.add_annual_report_fees_breakdown',['fund_identities' => $fund_identities]);
    }

    public function updateAnnualReportFeesBreakdown($id)
    {
        $annual_report = AnnualReportFeesBreakdown::whereId($id)->first();
        return view('admin.FundShells.FundFeesExpenseDetails.Expenses.AnnualReportFeesBreakdown.edit_annual_report_fees_breakdown', ['annual_report' => $annual_report]);
    }

    public function listAnnualReportFeesBreakdown()
    {
        $annual_report = AnnualReportFeesBreakdown::orderBy('created_at', 'desc')->get();
        return view('admin.FundShells.FundFeesExpenseDetails.Expenses.AnnualReportFeesBreakdown.annual_report_fees_breakdown', ['annual_report' => $annual_report]);
    }

    public function viewAnnualReportFeesBreakdown($id)
    {
        $annual_report = AnnualReportFeesBreakdown::whereId($id)->first();
        return view('admin.FundShells.FundFeesExpenseDetails.Expenses.AnnualReportFeesBreakdown.view_annual_report_fees_breakdown', ['annual_report' => $annual_report]);
    }

    // 26/10/2017


    //  	Fund Time Series
    public function createFundTimeSeries()
    {
        $fund_identities = FundIdentity::all();

        return view('admin.FundShells.FundPricingValuationInformation.FundTimeSeries.add_fund_time_series',['fund_identities' => $fund_identities]);
    }

    public function updateFundTimeSeries($id)
    {
        $fund_time_series = FundTimeSeries::whereId($id)->first();
        return view('admin.FundShells.FundPricingValuationInformation.FundTimeSeries.edit_fund_time_series', ['fund_time_series' => $fund_time_series]);
    }

    public function listFundTimeSeries()
    {

        $fund_time_series = FundTimeSeries::orderBy('created_at', 'desc')->paginate(10);

        return view('admin.FundShells.FundPricingValuationInformation.FundTimeSeries.fund_time_series', ['fund_time_series' => $fund_time_series]);
    }

    public function viewFundTimeSeries($id)
    {
        $fund_time_series = FundTimeSeries::whereId($id)->first();
        return view('admin.FundShells.FundPricingValuationInformation.FundTimeSeries.view_fund_time_series', ['fund_time_series' => $fund_time_series]);
    }

    //  	Valuation Frequency
    public function createValuationFrequency()
    {
        $fund_identities = FundIdentity::all();

        return view('admin.FundShells.FundPricingValuationInformation.ValuationFrequency.add_valuation_frequency',['fund_identities' => $fund_identities]);
    }

    public function updateValuationFrequency($id)
    {
        $valuation_frequency = ValuationFrequency::whereId($id)->first();
        return view('admin.FundShells.FundPricingValuationInformation.ValuationFrequency.edit_valuation_frequency', ['valuation_frequency' => $valuation_frequency]);
    }

    public function listValuationFrequency()
    {
        $valuation_frequency = ValuationFrequency::orderBy('created_at', 'desc')->get();
        return view('admin.FundShells.FundPricingValuationInformation.ValuationFrequency.valuation_frequency', ['valuation_frequency' => $valuation_frequency]);
    }

    public function viewValuationFrequency($id)
    {
        $valuation_frequency = ValuationFrequency::whereId($id)->first();
        return view('admin.FundShells.FundPricingValuationInformation.ValuationFrequency.view_valuation_frequency', ['valuation_frequency' => $valuation_frequency]);
    }

    //  Market Data
    public function createMarketData()
    {
        $fund_identities = FundIdentity::all();

        return view('admin.FundShells.FundPricingValuationInformation.MarketData.add_market_data' ,['fund_identities' => $fund_identities]);
    }

    public function updateMarketData($id)
    {
        $market_data = MarketData::whereId($id)->first();
        return view('admin.FundShells.FundPricingValuationInformation.MarketData.edit_market_data', ['market_data' => $market_data]);
    }

    public function listMarketData()
    {
        $market_data = MarketData::orderBy('created_at', 'desc')->get();
        return view('admin.FundShells.FundPricingValuationInformation.MarketData.market_data', ['market_data' => $market_data]);
    }

    public function viewMarketData($id)
    {
        $market_data = MarketData::whereId($id)->first();
        return view('admin.FundShells.FundPricingValuationInformation.MarketData.view_market_data', ['market_data' => $market_data]);
    }

    //  Fund Income Settings
    public function createFundIncomeSettings()
    {
        $fund_identities = FundIdentity::all();

        return view('admin.FundShells.FundPricingValuationInformation.FundIncomeSettings.add_fund_income_settings',['fund_identities' => $fund_identities]);
    }

    public function updateFundIncomeSettings($id)
    {
        $fund_income_settings = FundIncomeSetting::whereId($id)->first();
        return view('admin.FundShells.FundPricingValuationInformation.FundIncomeSettings.edit_fund_income_settings', ['fund_income_settings' => $fund_income_settings]);
    }

    public function listFundIncomeSettings()
    {
        $fund_income_settings = FundIncomeSetting::orderBy('created_at', 'desc')->get();
        return view('admin.FundShells.FundPricingValuationInformation.FundIncomeSettings.fund_income_settings', ['fund_income_settings' => $fund_income_settings]);
    }

    public function viewFundIncomeSettings($id)
    {
        $fund_income_settings = FundIncomeSetting::whereId($id)->first();
        return view('admin.FundShells.FundPricingValuationInformation.FundIncomeSettings.view_fund_income_settings', ['fund_income_settings' => $fund_income_settings]);
    }

    //  Sourced Statistics
    public function createSourcedStatistics()
    {
        $fund_identities = FundIdentity::all();

        return view('admin.FundShells.FundPerformanceRiskStatistics.SourcedStatistics.add_sourced_statistics' ,['fund_identities' => $fund_identities]);
    }

    public function updateSourcedStatistics($id)
    {
        $sourced_statistics = SourcedStatistic::whereId($id)->first();
        return view('admin.FundShells.FundPerformanceRiskStatistics.SourcedStatistics.edit_sourced_statistics', ['sourced_statistics' => $sourced_statistics]);
    }

    public function listSourcedStatistics()
    {
        $sourced_statistics = SourcedStatistic::orderBy('created_at', 'desc')->get();
        return view('admin.FundShells.FundPerformanceRiskStatistics.SourcedStatistics.sourced_statistics', ['sourced_statistics' => $sourced_statistics]);
    }

    public function viewSourcedStatistics($id)
    {
        $sourced_statistics = SourcedStatistic::whereId($id)->first();
        return view('admin.FundShells.FundPerformanceRiskStatistics.SourcedStatistics.view_sourced_statistics', ['sourced_statistics' => $sourced_statistics]);
    }

    //  Fund Performance
    public function createFundPerformance()
    {
        $fund_identities = FundIdentity::all();

        return view('admin.FundShells.FundPerformanceRiskStatistics.CalculatedStatistics.FundPerformance.add_fund_performance'  ,['fund_identities' => $fund_identities]);
    }

    public function updateFundPerformance($id)
    {
        $fund_performance = FundPerformance::whereId($id)->first();
        return view('admin.FundShells.FundPerformanceRiskStatistics.CalculatedStatistics.FundPerformance.edit_fund_performance', ['fund_performance' => $fund_performance]);
    }

    public function listFundPerformance()
    {
        $fund_performance = FundPerformance::orderBy('created_at', 'desc')->get();
        return view('admin.FundShells.FundPerformanceRiskStatistics.CalculatedStatistics.FundPerformance.fund_performance', ['fund_performance' => $fund_performance]);
    }

    public function viewFundPerformance($id)
    {
        $fund_performance = FundPerformance::whereId($id)->first();
        return view('admin.FundShells.FundPerformanceRiskStatistics.CalculatedStatistics.FundPerformance.view_fund_performance', ['fund_performance' => $fund_performance]);
    }

    //  Fund Risk Ratios
    public function createFundRiskRatios()
    {
        $fund_identities = FundIdentity::all();

        return view('admin.FundShells.FundPerformanceRiskStatistics.CalculatedStatistics.FundRiskRatios.add_fund_risk_ratios' ,['fund_identities' => $fund_identities]);
    }

    public function updateFundRiskRatios($id)
    {
        $fund_risk_ratio = FundRiskRatio::whereId($id)->first();
        return view('admin.FundShells.FundPerformanceRiskStatistics.CalculatedStatistics.FundRiskRatios.edit_fund_risk_ratios', ['fund_risk_ratio' => $fund_risk_ratio]);
    }

    public function listFundRiskRatios()
    {
        $fund_risk_ratio = FundRiskRatio::orderBy('created_at', 'desc')->get();
        return view('admin.FundShells.FundPerformanceRiskStatistics.CalculatedStatistics.FundRiskRatios.fund_risk_ratios', ['fund_risk_ratio' => $fund_risk_ratio]);
    }

    public function viewFundRiskRatios($id)
    {
        $fund_risk_ratio = FundRiskRatio::whereId($id)->first();
        return view('admin.FundShells.FundPerformanceRiskStatistics.CalculatedStatistics.FundRiskRatios.view_fund_risk_ratios', ['fund_risk_ratio' => $fund_risk_ratio]);
    }

    //  Terms And Conditions
    public function createTermsAndConditions()
    {
        $fund_identities = FundIdentity::all();
        return view('admin.FundShells.FundDocuments.TermsAndConditions.add_terms_and_conditions',['fund_identities' => $fund_identities]);
    }

    public function updateTermsAndConditions($id)
    {
        $terms_and_conditions = TermsCondition::whereId($id)->first();
        return view('admin.FundShells.FundDocuments.TermsAndConditions.edit_terms_and_conditions', ['terms_and_conditions' => $terms_and_conditions]);
    }

    public function listTermsAndConditions()
    {
        $terms_and_conditions = TermsCondition::select(DB::raw('terms_conditions.*,fund_identities.fund_name '))->leftJoin('fund_identities','fund_identities.id','=','terms_conditions.fund_identity_id')->orderBy('created_at', 'desc')->get();
        return view('admin.FundShells.FundDocuments.TermsAndConditions.terms_and_conditions', ['terms_and_conditions' => $terms_and_conditions]);
    }

    public function viewTermsAndConditions($id)
    {
        $terms_and_conditions = TermsCondition::whereId($id)->first();
        return view('admin.FundShells.FundDocuments.TermsAndConditions.view_terms_and_conditions', ['terms_and_conditions' => $terms_and_conditions]);
    }

    //  Annual Report
    public function createAnnualReport()
    {
        $fund_identities = FundIdentity::all();
        return view('admin.FundShells.FundDocuments.AnnualReport.add_annual_report',['fund_identities' => $fund_identities]);
    }

    public function updateAnnualReport($id)
    {
        $annual_report = AnnualReport::whereId($id)->first();
        return view('admin.FundShells.FundDocuments.AnnualReport.edit_annual_report', ['annual_report' => $annual_report]);
    }

    public function listAnnualReport()
    {
        $annual_report = AnnualReport::select(DB::raw('annual_reports.*,fund_identities.fund_name '))->leftJoin('fund_identities','fund_identities.id','=','annual_reports.fund_identity_id')->orderBy('created_at', 'desc')->get();
        return view('admin.FundShells.FundDocuments.AnnualReport.annual_report', ['annual_report' => $annual_report]);
    }

    public function viewAnnualReport($id)
    {
        $annual_report = AnnualReport::whereId($id)->first();
        return view('admin.FundShells.FundDocuments.AnnualReport.view_annual_report', ['annual_report' => $annual_report]);
    }

    //  Semi Annual Report
    public function createSemiAnnualReport()
    {
        $fund_identities = FundIdentity::all();
        return view('admin.FundShells.FundDocuments.SemiAnnualReport.add_semi_annual_report',['fund_identities' => $fund_identities ]);
    }

    public function updateSemiAnnualReport($id)
    {
        $semi_annual_report = SemiAnnualReport::whereId($id)->first();
        return view('admin.FundShells.FundDocuments.SemiAnnualReport.edit_semi_annual_report', ['semi_annual_report' => $semi_annual_report]);
    }

    public function listSemiAnnualReport()
    {
        $semi_annual_report = SemiAnnualReport::select(DB::raw('semi_annual_reports.*,fund_identities.fund_name '))->leftJoin('fund_identities','fund_identities.id','=','semi_annual_reports.fund_identity_id')->orderBy('created_at', 'desc')->get();
        return view('admin.FundShells.FundDocuments.SemiAnnualReport.semi_annual_report', ['semi_annual_report' => $semi_annual_report]);
    }

    public function viewSemiAnnualReport($id)
    {
        $semi_annual_report = SemiAnnualReport::whereId($id)->first();
        return view('admin.FundShells.FundDocuments.SemiAnnualReport.view_semi_annual_report', ['semi_annual_report' => $semi_annual_report]);
    }

    //  Key Investor Information Document
    public function createKeyInvestorInformationDocument()
    {
        $fund_identities = FundIdentity::all();

        return view('admin.FundShells.FundDocuments.KeyInvestorInformationDocument.add_key_investor_information_document'  ,['fund_identities' => $fund_identities]);
    }

    public function updateKeyInvestorInformationDocument($id)
    {
        $semi_annual_report = KeyInvestorInformationDocument::whereId($id)->first();
        return view('admin.FundShells.FundDocuments.KeyInvestorInformationDocument.edit_key_investor_information_document', ['semi_annual_report' => $semi_annual_report]);
    }

    public function listKeyInvestorInformationDocument()
    {
        $semi_annual_report = KeyInvestorInformationDocument::orderBy('created_at', 'desc')->get();
        return view('admin.FundShells.FundDocuments.KeyInvestorInformationDocument.semi_annual_report', ['key_investor_information_document' => $semi_annual_report]);
    }

    public function viewKeyInvestorInformationDocument($id)
    {
        $semi_annual_report = KeyInvestorInformationDocument::whereId($id)->first();
        return view('admin.FundShells.FundDocuments.KeyInvestorInformationDocument.view_key_investor_information_document',
            ['semi_annual_report' => $semi_annual_report]);
    }

    //Index Shell
    //  		Index Facts
    public function createIndexFacts()
    {
        $fund_identities = FundIdentity::all();

        return view('admin.IndexShells.IndicesInformation.IndexFacts.add_index_facts',['fund_identities' => $fund_identities]);
    }

    public function updateIndexFacts($id)
    {
        $index_fact = IndexFact::whereId($id)->first();
        return view('admin.IndexShells.IndicesInformation.IndexFacts.edit_index_facts', ['index_fact' => $index_fact]);
    }

    public function listIndexFacts()
    {
        $index_fact = IndexFact::orderBy('created_at', 'desc')->get();
        return view('admin.IndexShells.IndicesInformation.IndexFacts.index_facts', ['index_fact' => $index_fact]);
    }

    public function viewIndexFacts($id)
    {
        $index_fact = IndexFact::whereId($id)->first();
        return view('admin.IndexShells.IndicesInformation.IndexFacts.view_index_facts', ['index_fact' => $index_fact]);
    }

    //  	Index Time Series
    public function createIndexTimeSeries()
    {
        $fund_identities = FundIdentity::all();

        return view('admin.IndexShells.IndicesInformation.IndexTimeSeries.add_index_time_series',['fund_identities' => $fund_identities]);
    }

    public function updateIndexTimeSeries($id)
    {
        $index_time_series = IndexTimeSeries::whereId($id)->first();
        return view('admin.IndexShells.IndicesInformation.IndexTimeSeries.edit_index_time_series', ['index_time_series' => $index_time_series]);
    }

    public function listIndexTimeSeries()
    {
        $index_time_series = IndexTimeSeries::orderBy('created_at', 'desc')->get();
        return view('admin.IndexShells.IndicesInformation.IndexTimeSeries.index_time_series', ['index_time_series' => $index_time_series]);
    }

    public function viewIndexTimeSeries($id)
    {
        $index_time_series = IndexTimeSeries::whereId($id)->first();
        return view('admin.IndexShells.IndicesInformation.IndexTimeSeries.view_index_time_series', ['index_time_series' => $index_time_series]);
    }

    //Company Shell

    //  Profile
    public function createProfile()
    {
        $fund_identities = FundIdentity::all();
        return view('admin.CompanyShells.CompanyInformation.Profile.create_profile' ,['fund_identities' => $fund_identities]);
    }

    public function updateProfile($id)
    {
        $profile = Profile::whereId($id)->first();
        return view('admin.CompanyShells.CompanyInformation.Profile.edit_profile', ['profile' => $profile]);
    }

    public function listProfile()
    {
        $profile = Profile::orderBy('created_at', 'desc')->get();
        return view('admin.CompanyShells.CompanyInformation.Profile.profile', ['profile' => $profile]);
    }

    public function viewProfile($id)
    {
        $profile = Profile::whereId($id)->first();
        return view('admin.CompanyShells.CompanyInformation.Profile.view_profile', ['profile' => $profile]);
    }

    //  Shareholders
    public function createShareholders()
    {
        $fund_identities = FundIdentity::all();

        return view('admin.CompanyShells.CompanyInformation.Shareholders.add_shareholders',['fund_identities' => $fund_identities]);
    }

    public function updateShareholders($id)
    {
        $shareholders = Shareholder::whereId($id)->first();
        return view('admin.CompanyShells.CompanyInformation.Shareholders.edit_shareholders', ['shareholders' => $shareholders]);
    }

    public function listShareholders()
    {
        $shareholders = Shareholder::orderBy('created_at', 'desc')->get();
        return view('admin.CompanyShells.CompanyInformation.Shareholders.shareholders', ['shareholders' => $shareholders]);
    }

    public function viewShareholders($id)
    {
        $shareholders = Shareholder::whereId($id)->first();
        return view('admin.CompanyShells.CompanyInformation.Shareholders.view_shareholders', ['shareholders' => $shareholders]);
    }


    //  Address
    public function createAddress(){
        $fund_identities = FundIdentity::all();

        return view('admin.CompanyShells.CompanyInformation.ContactDetails.Address.add_address',['fund_identities' => $fund_identities]);
    }

    public function updateAddress($id){
        $address = Address::whereId($id)->first();
        return view('admin.CompanyShells.CompanyInformation.ContactDetails.Address.edit_address',['address' => $address]);
    }
    public function listAddress(){
        $address = Address::orderBy('created_at','desc')->get();
        return view('admin.CompanyShells.CompanyInformation.ContactDetails.Address.address',['address' => $address]);
    }

    public function viewAddress($id){
        $address = Address::whereId($id)->first();
        return view('admin.CompanyShells.CompanyInformation.ContactDetails.Address.view_address',['address' => $address]);
    }
}
