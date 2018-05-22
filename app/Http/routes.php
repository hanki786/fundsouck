<?php

/*

|--------------------------------------------------------------------------

| Application Routes

|--------------------------------------------------------------------------

|

| Here is where you can register all of the routes for an application.

| It's a breeze. Simply tell Laravel the URIs it should respond to

| and give it the controller to call when that URI is requested.

|

*/


Route::get('/', function () {

    if (!Auth::check()) {

        return view('website.welcome');

    } else

        return redirect('/dashboard');

})->name('welcome');

Route::get('saudia', function () {

    return view('website.saudia');

});


Route::get('profile', function () {
    return view('website.profile');
});

Route::get('/fund_overview', [
        'uses' => 'UserController@fund_overview',
        'as' => 'fund_overview'
]);

Route::get('/fund_overview_result', [
        'uses' => 'UserController@fund_overview_result',
        'as' => 'fund_overview_result'
]);

Route::get('/fund_overview_search', [
    'uses' => 'UserController@fund_overview_search',
    'as' => 'fund_overview_search'
]);

Route::get('/fund_attributes', [
    'uses' => 'UserController@fund_attributes',
    'as' => 'fund_attributes'
]);


Route::get('/historical_prices_charts', [
    'uses' => 'UserController@historical_prices_charts',
    'as' => 'historical_prices_charts'
]);


Route::get('/asset_valuation_flows', [
    'uses' => 'UserController@asset_valuation_flows',
    'as' => 'asset_valuation_flows'
]);

Route::get('/fees_expenses', [
    'uses' => 'UserController@fees_expenses',
    'as' => 'fees_expenses'
]);

Route::get('/performance_risk_analytics', [
    'uses' => 'UserController@performance_risk_analytics',
    'as' => 'performance_risk_analytics'
]);

Route::get('/fund_holdings', [
    'uses' => 'UserController@fund_holdings',
    'as' => 'fund_holdings'
]);

Route::get('/fund_documents', [
    'uses' => 'UserController@fund_documents',
    'as' => 'fund_documents'
]);

Route::get('/fund_people', [
    'uses' => 'UserController@fund_people',
    'as' => 'fund_people'
]);

Route::get('/fund_service_providers', [
    'uses' => 'UserController@fund_service_providers',
    'as' => 'fund_service_providers'
]);

Route::get('/fund_compliance_regulations', [
    'uses' => 'UserController@fund_compliance_regulations',
    'as' => 'fund_compliance_regulations'
]);

Route::get('login', function () {

    return view('auth.login');

});


Route::get('/dashboard', [
    'uses' => 'UserController@getAdminDashboard',
    'as' => 'dashboard'

]);

Route::post('/register', [
    'uses' => 'UserController@register',
    'as' => 'register'
]);


Route::get('register_auth0', function () {
    return view('auth.register');
});

Route::post('/login', [

    'uses' => 'UserController@login',

    'as' => 'login'

]);


Route::get('/account/sign_out', array(

    'uses' => 'UserController@logout',

    'as' => 'logout'

));


//Fund Identity

Route::get('admin/fundidentity/list', [

    'uses' => 'FundViewController@listFundIdentity',

    'as' => 'list-fundidentity-on-admin-side'

]);

Route::get('admin/fundidentity/view/{fundId}', [

    'uses' => 'FundViewController@viewFundIdentity',

    'as' => 'view-fundidentity-on-admin-side'

]);

Route::get('admin/fundidentity/add', [

    'uses' => 'FundViewController@createFundIdentity',

    'as' => 'add-fundidentity-on-admin-side'

]);

Route::post('admin/fundidentity/create', [

    'uses' => 'FundShellController@createFundIdentity',

    'as' => 'register-fundidentity-on-admin-side'

]);

Route::get('admin/fundidentity/edit/{fundId}', [

    'uses' => 'FundViewController@updateFundIdentity',

    'as' => 'edit-fundidentity-on-admin-side'

]);

Route::post('admin/fundidentity/update/{fundId}', [

    'uses' => 'FundShellController@updateFundIdentity',

    'as' => 'update-fundidentity-on-admin-side'

]);

Route::get('/admin/fundidentity/delete/{id}', [

    'uses' => 'FundShellController@removeFundIdentity',

    'as' => 'fundidentity-delete'

]);


//Fund Identity & Policy

Route::get('admin/fundidentitypolicy/list', [

    'uses' => 'FundViewController@listFundIdentityPolicy',

    'as' => 'list-fundidentitypolicy-on-admin-side'

]);

Route::get('admin/fundidentitypolicy/add', [

    'uses' => 'FundViewController@createFundIdentityPolicy',

    'as' => 'add-fundidentitypolicy-on-admin-side'

]);

Route::post('admin/fundidentitypolicy/create', [

    'uses' => 'FundShellController@createFundIdentityPolicy',

    'as' => 'register-fundidentitypolicy-on-admin-side'

]);

Route::get('/admin/fundidentitypolicy/delete/{id}', [

    'uses' => 'FundShellController@removeFundIdentityPolicy',

    'as' => 'fundidentitypolicy-delete'

]);


//	Fund Objective & Strategy

Route::get('admin/fundObjectiveStrategy/list', [

    'uses' => 'FundViewController@listFundObjectiveStrategy',

    'as' => 'list-fundObjectiveStrategy-on-admin-side'

]);

Route::get('admin/fundObjectiveStrategy/view/{id}', [

    'uses' => 'FundViewController@viewFundObjectiveStrategy',

    'as' => 'view-fundObjectiveStrategy-on-admin-side'

]);

Route::get('admin/fundObjectiveStrategy/add', [

    'uses' => 'FundViewController@createFundObjectiveStrategy',

    'as' => 'add-fundObjectiveStrategy-on-admin-side'

]);

Route::post('admin/fundObjectiveStrategy/create', [

    'uses' => 'FundShellController@createFundObjectiveStrategy',

    'as' => 'register-fundObjectiveStrategy-on-admin-side'

]);

Route::get('admin/fundObjectiveStrategy/edit/{id}', [

    'uses' => 'FundViewController@updateFundObjectiveStrategy',

    'as' => 'edit-fundObjectiveStrategy-on-admin-side'

]);

Route::post('admin/fundObjectiveStrategy/update/{id}', [

    'uses' => 'FundShellController@updateFundObjectiveStrategy',

    'as' => 'update-fundObjectiveStrategy-on-admin-side'

]);

Route::get('/admin/fundObjectiveStrategy/delete/{id}', [

    'uses' => 'FundShellController@removeFundObjectiveStrategy',

    'as' => 'fundObjectiveStrategy-delete'

]);


//Fund Attributes

Route::get('admin/fundAttributes/list', [

    'uses' => 'FundViewController@listFundAttributes',

    'as' => 'list-fundAttributes-on-admin-side'

]);

Route::get('admin/fundAttributes/add', [

    'uses' => 'FundViewController@createFundAttributes',

    'as' => 'add-fundAttributes-on-admin-side'

]);

Route::post('admin/fundAttributes/create', [

    'uses' => 'FundShellController@createFundAttributes',

    'as' => 'register-fundAttributes-on-admin-side'

]);

Route::get('/admin/fundAttributes/delete/{id}', [

    'uses' => 'FundShellController@removeFundAttributes',

    'as' => 'fundAttributes-delete'

]);


//	Fund Key Attributes

Route::get('admin/fundKeyAttributes/list', [

    'uses' => 'FundViewController@listFundKeyAttributes',

    'as' => 'list-fundKeyAttributes-on-admin-side'

]);

Route::get('admin/fundKeyAttributes/view/{id}', [

    'uses' => 'FundViewController@viewFundKeyAttributes',

    'as' => 'view-fundKeyAttributes-on-admin-side'

]);

Route::get('admin/fundKeyAttributes/add', [

    'uses' => 'FundViewController@createFundKeyAttributes',

    'as' => 'add-fundKeyAttributes-on-admin-side'

]);

Route::post('admin/fundKeyAttributes/create', [

    'uses' => 'FundShellController@createFundKeyAttributes',

    'as' => 'register-fundKeyAttributes-on-admin-side'

]);

Route::get('admin/fundKeyAttributes/edit/{id}', [

    'uses' => 'FundViewController@updateFundKeyAttributes',

    'as' => 'edit-fundKeyAttributes-on-admin-side'

]);

Route::post('admin/fundKeyAttributes/update/{id}', [

    'uses' => 'FundShellController@updateFundKeyAttributes',

    'as' => 'update-fundKeyAttributes-on-admin-side'

]);

Route::get('/admin/fundKeyAttributes/delete/{id}', [

    'uses' => 'FundShellController@removeFundKeyAttributes',

    'as' => 'fundKeyAttributes-delete'

]);


//	Fund Asset Attributes

Route::get('admin/fundAssetAttributes/list', [

    'uses' => 'FundViewController@listFundAssetAttributes',

    'as' => 'list-fundAssetAttributes-on-admin-side'

]);

Route::get('admin/fundAssetAttributes/view/{id}', [

    'uses' => 'FundViewController@viewFundAssetAttributes',

    'as' => 'view-fundAssetAttributes-on-admin-side'

]);

Route::get('admin/fundAssetAttributes/add', [

    'uses' => 'FundViewController@createFundAssetAttributes',

    'as' => 'add-fundAssetAttributes-on-admin-side'

]);

Route::post('admin/fundAssetAttributes/create', [

    'uses' => 'FundShellController@createFundAssetAttributes',

    'as' => 'register-fundAssetAttributes-on-admin-side'

]);

Route::get('admin/fundAssetAttributes/edit/{id}', [

    'uses' => 'FundViewController@updateFundAssetAttributes',

    'as' => 'edit-fundAssetAttributes-on-admin-side'

]);

Route::post('admin/fundAssetAttributes/update/{id}', [

    'uses' => 'FundShellController@updateFundAssetAttributes',

    'as' => 'update-fundAssetAttributes-on-admin-side'

]);

Route::get('/admin/fundAssetAttributes/delete/{id}', [

    'uses' => 'FundShellController@removeFundAssetAttributes',

    'as' => 'fundAssetAttributes-delete'

]);


//	Fund Sales & Distribution

Route::get('admin/fundSalesDistribution/list', [

    'uses' => 'FundViewController@listFundSalesDistribution',

    'as' => 'list-fundSalesDistribution-on-admin-side'

]);

Route::get('admin/fundSalesDistribution/view/{id}', [

    'uses' => 'FundViewController@viewFundSalesDistribution',

    'as' => 'view-fundSalesDistribution-on-admin-side'

]);

Route::get('admin/fundSalesDistribution/add', [

    'uses' => 'FundViewController@createFundSalesDistribution',

    'as' => 'add-fundSalesDistribution-on-admin-side'

]);

Route::post('admin/fundSalesDistribution/create', [

    'uses' => 'FundShellController@createFundSalesDistribution',

    'as' => 'register-fundSalesDistribution-on-admin-side'

]);

Route::get('admin/fundSalesDistribution/edit/{id}', [

    'uses' => 'FundViewController@updateFundSalesDistribution',

    'as' => 'edit-fundSalesDistribution-on-admin-side'

]);

Route::post('admin/fundSalesDistribution/update/{id}', [

    'uses' => 'FundShellController@updateFundSalesDistribution',

    'as' => 'update-fundSalesDistribution-on-admin-side'

]);

Route::get('/admin/fundSalesDistribution/delete/{id}', [

    'uses' => 'FundShellController@removeFundSalesDistribution',

    'as' => 'fundSalesDistribution-delete'

]);


//	Fund History

Route::get('admin/fundHistory/list', [

    'uses' => 'FundViewController@listFundHistory',

    'as' => 'list-fundHistory-on-admin-side'

]);

Route::get('admin/fundHistory/view/{id}', [

    'uses' => 'FundViewController@viewFundHistory',

    'as' => 'view-fundHistory-on-admin-side'

]);

Route::get('admin/fundHistory/add', [

    'uses' => 'FundViewController@createFundHistory',

    'as' => 'add-fundHistory-on-admin-side'

]);

Route::post('admin/fundHistory/create', [

    'uses' => 'FundShellController@createFundHistory',

    'as' => 'register-fundHistory-on-admin-side'

]);

Route::get('admin/fundHistory/edit/{id}', [

    'uses' => 'FundViewController@updateFundHistory',

    'as' => 'edit-fundHistory-on-admin-side'

]);

Route::post('admin/fundHistory/update/{id}', [

    'uses' => 'FundShellController@updateFundHistory',

    'as' => 'update-fundHistory-on-admin-side'

]);

Route::get('/admin/fundHistory/delete/{id}', [

    'uses' => 'FundShellController@removeFundHistory',

    'as' => 'fundHistory-delete'

]);


//	Related Funds

Route::get('admin/relatedFunds/list', [

    'uses' => 'FundViewController@listRelatedFunds',

    'as' => 'list-relatedFunds-on-admin-side'

]);

Route::get('admin/relatedFunds/view/{id}', [

    'uses' => 'FundViewController@viewRelatedFunds',

    'as' => 'view-relatedFunds-on-admin-side'

]);

Route::get('admin/relatedFunds/add', [

    'uses' => 'FundViewController@createRelatedFunds',

    'as' => 'add-relatedFunds-on-admin-side'

]);

Route::post('admin/relatedFunds/create', [

    'uses' => 'FundShellController@createRelatedFunds',

    'as' => 'register-relatedFunds-on-admin-side'

]);

Route::get('admin/relatedFunds/edit/{id}', [

    'uses' => 'FundViewController@updateRelatedFunds',

    'as' => 'edit-relatedFunds-on-admin-side'

]);

Route::post('admin/relatedFunds/update/{id}', [

    'uses' => 'FundShellController@updateRelatedFunds',

    'as' => 'update-relatedFunds-on-admin-side'

]);

Route::get('/admin/relatedFunds/delete/{id}', [

    'uses' => 'FundShellController@removeRelatedFunds',

    'as' => 'relatedFunds-delete'

]);


//	Fund Flags

Route::get('admin/fundFlags/list', [

    'uses' => 'FundViewController@listFundFlags',

    'as' => 'list-fundFlags-on-admin-side'

]);

Route::get('admin/fundFlags/view/{id}', [

    'uses' => 'FundViewController@viewFundFlags',

    'as' => 'view-fundFlags-on-admin-side'

]);

Route::get('admin/fundFlags/add', [

    'uses' => 'FundViewController@createFundFlags',

    'as' => 'add-fundFlags-on-admin-side'

]);

Route::post('admin/fundFlags/create', [

    'uses' => 'FundShellController@createFundFlags',

    'as' => 'register-fundFlags-on-admin-side'

]);

Route::get('admin/fundFlags/edit/{id}', [

    'uses' => 'FundViewController@updateFundFlags',

    'as' => 'edit-fundFlags-on-admin-side'

]);

Route::post('admin/fundFlags/update/{id}', [

    'uses' => 'FundShellController@updateFundFlags',

    'as' => 'update-fundFlags-on-admin-side'

]);

Route::get('/admin/fundFlags/delete/{id}', [

    'uses' => 'FundShellController@removeFundFlags',

    'as' => 'fundFlags-delete'

]);


//	Investor Type

Route::get('admin/investorType/list', [

    'uses' => 'FundViewController@listInvestorType',

    'as' => 'list-investorType-on-admin-side'

]);

Route::get('admin/investorType/view/{id}', [

    'uses' => 'FundViewController@viewInvestorType',

    'as' => 'view-investorType-on-admin-side'

]);

Route::get('admin/investorType/add', [

    'uses' => 'FundViewController@createInvestorType',

    'as' => 'add-investorType-on-admin-side'

]);

Route::post('admin/investorType/create', [

    'uses' => 'FundShellController@createInvestorType',

    'as' => 'register-investorType-on-admin-side'

]);

Route::get('admin/investorType/edit/{id}', [

    'uses' => 'FundViewController@updateInvestorType',

    'as' => 'edit-investorType-on-admin-side'

]);

Route::post('admin/investorType/update/{id}', [

    'uses' => 'FundShellController@updateInvestorType',

    'as' => 'update-investorType-on-admin-side'

]);

Route::get('/admin/investorType/delete/{id}', [

    'uses' => 'FundShellController@removeInvestorType',

    'as' => 'investorType-delete'

]);


//	Themes Attributes

Route::get('admin/themesAttributes/list', [

    'uses' => 'FundViewController@listThemesAttributes',

    'as' => 'list-themesAttributes-on-admin-side'

]);

Route::get('admin/themesAttributes/view/{id}', [

    'uses' => 'FundViewController@viewThemesAttributes',

    'as' => 'view-themesAttributes-on-admin-side'

]);

Route::get('admin/themesAttributes/add', [

    'uses' => 'FundViewController@createThemesAttributes',

    'as' => 'add-themesAttributes-on-admin-side'

]);

Route::post('admin/themesAttributes/create', [

    'uses' => 'FundShellController@createThemesAttributes',

    'as' => 'register-themesAttributes-on-admin-side'

]);

Route::get('admin/themesAttributes/edit/{id}', [

    'uses' => 'FundViewController@updateThemesAttributes',

    'as' => 'edit-themesAttributes-on-admin-side'

]);

Route::post('admin/themesAttributes/update/{id}', [

    'uses' => 'FundShellController@updateThemesAttributes',

    'as' => 'update-themesAttributes-on-admin-side'

]);

Route::get('/admin/themesAttributes/delete/{id}', [

    'uses' => 'FundShellController@removeThemesAttributes',

    'as' => 'themesAttributes-delete'

]);


//  	Fund Codes

Route::get('admin/fundCodes/list', [

    'uses' => 'FundViewController@listFundCodes',

    'as' => 'list-fundCodes-on-admin-side'

]);

Route::get('admin/fundCodes/view/{id}', [

    'uses' => 'FundViewController@viewFundCodes',

    'as' => 'view-fundCodes-on-admin-side'

]);

Route::get('admin/fundCodes/add', [

    'uses' => 'FundViewController@createFundCodes',

    'as' => 'add-fundCodes-on-admin-side'

]);

Route::post('admin/fundCodes/create', [

    'uses' => 'FundShellController@createFundCodes',

    'as' => 'register-fundCodes-on-admin-side'

]);

Route::get('admin/fundCodes/edit/{id}', [

    'uses' => 'FundViewController@updateFundCodes',

    'as' => 'edit-fundCodes-on-admin-side'

]);

Route::post('admin/fundCodes/update/{id}', [

    'uses' => 'FundShellController@updateFundCodes',

    'as' => 'update-fundCodes-on-admin-side'

]);

Route::get('/admin/fundCodes/delete/{id}', [

    'uses' => 'FundShellController@removeFundCodes',

    'as' => 'fundCodes-delete'

]);


//Fund Classification & Benchmarks

Route::get('admin/fundClassificationBenchmarks/list', [

    'uses' => 'FundViewController@listFundClassificationBenchmarks',

    'as' => 'list-fundClassificationBenchmarks-on-admin-side'

]);

Route::get('admin/fundClassificationBenchmarks/add', [

    'uses' => 'FundViewController@createFundClassificationBenchmarks',

    'as' => 'add-fundClassificationBenchmarks-on-admin-side'

]);

Route::post('admin/fundClassificationBenchmarks/create', [

    'uses' => 'FundShellController@createFundClassificationBenchmarks',

    'as' => 'register-fundClassificationBenchmarks-on-admin-side'

]);

Route::get('/admin/fundClassificationBenchmarks/delete/{id}', [

    'uses' => 'FundShellController@removeFundClassificationBenchmarks',

    'as' => 'fundClassificationBenchmarks-delete'

]);


//  	Fund Classification Schemes

Route::get('admin/fundClassificationSchemes/list', [

    'uses' => 'FundViewController@listFundClassificationSchemes',

    'as' => 'list-fundClassificationSchemes-on-admin-side'

]);

Route::get('admin/fundClassificationSchemes/view/{id}', [

    'uses' => 'FundViewController@viewFundClassificationSchemes',

    'as' => 'view-fundClassificationSchemes-on-admin-side'

]);

Route::get('admin/fundClassificationSchemes/add', [

    'uses' => 'FundViewController@createFundClassificationSchemes',

    'as' => 'add-fundClassificationSchemes-on-admin-side'

]);

Route::post('admin/fundClassificationSchemes/create', [

    'uses' => 'FundShellController@createFundClassificationSchemes',

    'as' => 'register-fundClassificationSchemes-on-admin-side'

]);

Route::get('admin/fundClassificationSchemes/edit/{id}', [

    'uses' => 'FundViewController@updateFundClassificationSchemes',

    'as' => 'edit-fundClassificationSchemes-on-admin-side'

]);

Route::post('admin/fundClassificationSchemes/update/{id}', [

    'uses' => 'FundShellController@updateFundClassificationSchemes',

    'as' => 'update-fundClassificationSchemes-on-admin-side'

]);

Route::get('/admin/fundClassificationSchemes/delete/{id}', [

    'uses' => 'FundShellController@removeFundClassificationSchemes',

    'as' => 'fundClassificationSchemes-delete'

]);


//  	Fund Benchmarks

Route::get('admin/fundBenchmarks/list', [

    'uses' => 'FundViewController@listFundBenchmarks',

    'as' => 'list-fundBenchmarks-on-admin-side'

]);

Route::get('admin/fundBenchmarks/view/{id}', [

    'uses' => 'FundViewController@viewFundBenchmarks',

    'as' => 'view-fundBenchmarks-on-admin-side'

]);

Route::get('admin/fundBenchmarks/add', [

    'uses' => 'FundViewController@createFundBenchmarks',

    'as' => 'add-fundBenchmarks-on-admin-side'

]);

Route::post('admin/fundBenchmarks/create', [

    'uses' => 'FundShellController@createFundBenchmarks',

    'as' => 'register-fundBenchmarks-on-admin-side'

]);

Route::get('admin/fundBenchmarks/edit/{id}', [

    'uses' => 'FundViewController@updateFundBenchmarks',

    'as' => 'edit-fundBenchmarks-on-admin-side'

]);

Route::get('admin/fundBenchmarks/update/{id}', [

    'uses' => 'FundShellController@updateFundBenchmarks',

    'as' => 'update-fundBenchmarks-on-admin-side'

]);

Route::get('/admin/fundBenchmarks/delete/{id}', [

    'uses' => 'FundShellController@removeFundBenchmarks',

    'as' => 'fundBenchmarks-delete'

]);


//  	Authorizations

Route::get('admin/authorizations/list', [

    'uses' => 'FundViewController@listAuthorizations',

    'as' => 'list-authorizations-on-admin-side'

]);

Route::get('admin/authorizations/view/{id}', [

    'uses' => 'FundViewController@viewAuthorizations',

    'as' => 'view-authorizations-on-admin-side'

]);

Route::get('admin/authorizations/add', [

    'uses' => 'FundViewController@createAuthorizations',

    'as' => 'add-authorizations-on-admin-side'

]);

Route::post('admin/authorizations/create', [

    'uses' => 'FundShellController@createAuthorizations',

    'as' => 'register-authorizations-on-admin-side'

]);

Route::get('admin/authorizations/edit/{id}', [

    'uses' => 'FundViewController@updateAuthorizations',

    'as' => 'edit-authorizations-on-admin-side'

]);

Route::post('admin/authorizations/update/{id}', [

    'uses' => 'FundShellController@updateAuthorizations',

    'as' => 'update-authorizations-on-admin-side'

]);

Route::get('/admin/authorizations/delete/{id}', [

    'uses' => 'FundShellController@removeAuthorizations',

    'as' => 'authorizations-delete'

]);


//  	Compliance Officer

Route::get('admin/complianceOfficer/list', [

    'uses' => 'FundViewController@listComplianceOfficer',

    'as' => 'list-complianceOfficer-on-admin-side'

]);

Route::get('admin/complianceOfficer/view/{id}', [

    'uses' => 'FundViewController@viewComplianceOfficer',

    'as' => 'view-complianceOfficer-on-admin-side'

]);

Route::get('admin/complianceOfficer/add', [

    'uses' => 'FundViewController@createComplianceOfficer',

    'as' => 'add-complianceOfficer-on-admin-side'

]);

Route::post('admin/complianceOfficer/create', [

    'uses' => 'FundShellController@createComplianceOfficer',

    'as' => 'register-complianceOfficer-on-admin-side'

]);

Route::get('admin/complianceOfficer/edit/{id}', [

    'uses' => 'FundViewController@updateComplianceOfficer',

    'as' => 'edit-complianceOfficer-on-admin-side'

]);

Route::post('admin/complianceOfficer/update/{id}', [

    'uses' => 'FundShellController@updateComplianceOfficer',

    'as' => 'update-complianceOfficer-on-admin-side'

]);

Route::get('/admin/complianceOfficer/delete/{id}', [

    'uses' => 'FundShellController@removeComplianceOfficer',

    'as' => 'complianceOfficer-delete'

]);


//  	Laws and Regulations

Route::get('admin/lawsAndRegulations/list', [

    'uses' => 'FundViewController@listLawsAndRegulations',

    'as' => 'list-lawsAndRegulations-on-admin-side'

]);

Route::get('admin/lawsAndRegulations/view/{id}', [

    'uses' => 'FundViewController@viewLawsAndRegulations',

    'as' => 'view-lawsAndRegulations-on-admin-side'

]);

Route::get('admin/lawsAndRegulations/add', [

    'uses' => 'FundViewController@createLawsAndRegulations',

    'as' => 'add-lawsAndRegulations-on-admin-side'

]);

Route::post('admin/lawsAndRegulations/create', [

    'uses' => 'FundShellController@createLawsAndRegulations',

    'as' => 'register-lawsAndRegulations-on-admin-side'

]);

Route::get('admin/lawsAndRegulations/edit/{id}', [

    'uses' => 'FundViewController@updateLawsAndRegulations',

    'as' => 'edit-lawsAndRegulations-on-admin-side'

]);

Route::post('admin/lawsAndRegulations/update/{id}', [

    'uses' => 'FundShellController@updateLawsAndRegulations',

    'as' => 'update-lawsAndRegulations-on-admin-side'

]);

Route::get('/admin/lawsAndRegulations/delete/{id}', [

    'uses' => 'FundShellController@removeLawsAndRegulations',

    'as' => 'lawsAndRegulations-delete'

]);


//  	Subscription

Route::get('admin/subscription/list', [

    'uses' => 'FundViewController@listSubscription',

    'as' => 'list-subscription-on-admin-side'

]);

Route::get('admin/subscription/view/{id}', [

    'uses' => 'FundViewController@viewSubscription',

    'as' => 'view-subscription-on-admin-side'

]);

Route::get('admin/subscription/add', [

    'uses' => 'FundViewController@createSubscription',

    'as' => 'add-subscription-on-admin-side'

]);

Route::post('admin/subscription/create', [

    'uses' => 'FundShellController@createSubscription',

    'as' => 'register-subscription-on-admin-side'

]);

Route::get('admin/subscription/edit/{id}', [

    'uses' => 'FundViewController@updateSubscription',

    'as' => 'edit-subscription-on-admin-side'

]);

Route::post('admin/subscription/update/{id}', [

    'uses' => 'FundShellController@updateSubscription',

    'as' => 'update-subscription-on-admin-side'

]);

Route::get('/admin/subscription/delete/{id}', [

    'uses' => 'FundShellController@removeSubscription',

    'as' => 'subscription-delete'

]);


//  	Redemption

Route::get('admin/redemption/list', [

    'uses' => 'FundViewController@listRedemption',

    'as' => 'list-redemption-on-admin-side'

]);

Route::get('admin/redemption/view/{id}', [

    'uses' => 'FundViewController@viewRedemption',

    'as' => 'view-redemption-on-admin-side'

]);

Route::get('admin/redemption/add', [

    'uses' => 'FundViewController@createRedemption',

    'as' => 'add-redemption-on-admin-side'

]);

Route::post('admin/redemption/create', [

    'uses' => 'FundShellController@createRedemption',

    'as' => 'register-redemption-on-admin-side'

]);

Route::get('admin/redemption/edit/{id}', [

    'uses' => 'FundViewController@updateRedemption',

    'as' => 'edit-redemption-on-admin-side'

]);

Route::post('admin/redemption/update/{id}', [

    'uses' => 'FundShellController@updateRedemption',

    'as' => 'update-redemption-on-admin-side'

]);

Route::get('/admin/redemption/delete/{id}', [

    'uses' => 'FundShellController@removeRedemption',

    'as' => 'redemption-delete'

]);


//  	Initial

Route::get('admin/initial/list', [

    'uses' => 'FundViewController@listInitial',

    'as' => 'list-initial-on-admin-side'

]);

Route::get('admin/initial/view/{id}', [

    'uses' => 'FundViewController@viewInitial',

    'as' => 'view-initial-on-admin-side'

]);

Route::get('admin/initial/add', [

    'uses' => 'FundViewController@createInitial',

    'as' => 'add-initial-on-admin-side'

]);

Route::post('admin/initial/create', [

    'uses' => 'FundShellController@createInitial',

    'as' => 'register-initial-on-admin-side'

]);

Route::get('admin/initial/edit/{id}', [

    'uses' => 'FundViewController@updateInitial',

    'as' => 'edit-initial-on-admin-side'

]);

Route::post('admin/initial/update/{id}', [

    'uses' => 'FundShellController@updateInitial',

    'as' => 'update-initial-on-admin-side'

]);

Route::get('/admin/initial/delete/{id}', [

    'uses' => 'FundShellController@removeInitial',

    'as' => 'initial-delete'

]);


//  	Charges Redemption

Route::get('admin/chargesRedemption/list', [

    'uses' => 'FundViewController@listChargesRedemption',

    'as' => 'list-chargesRedemption-on-admin-side'

]);

Route::get('admin/chargesRedemption/view/{id}', [

    'uses' => 'FundViewController@viewChargesRedemption',

    'as' => 'view-chargesRedemption-on-admin-side'

]);

Route::get('admin/chargesRedemption/add', [

    'uses' => 'FundViewController@createChargesRedemption',

    'as' => 'add-chargesRedemption-on-admin-side'

]);

Route::post('admin/chargesRedemption/create', [

    'uses' => 'FundShellController@createChargesRedemption',

    'as' => 'register-chargesRedemption-on-admin-side'

]);

Route::get('admin/chargesRedemption/edit/{id}', [

    'uses' => 'FundViewController@updateChargesRedemption',

    'as' => 'edit-chargesRedemption-on-admin-side'

]);

Route::post('admin/chargesRedemption/update/{id}', [

    'uses' => 'FundShellController@updateChargesRedemption',

    'as' => 'update-chargesRedemption-on-admin-side'

]);

Route::get('/admin/chargesRedemption/delete/{id}', [

    'uses' => 'FundShellController@removeChargesRedemption',

    'as' => 'chargesRedemption-delete'

]);


//  	Annual

Route::get('admin/annual/list', [

    'uses' => 'FundViewController@listAnnual',

    'as' => 'list-annual-on-admin-side'

]);

Route::get('admin/annual/view/{id}', [

    'uses' => 'FundViewController@viewAnnual',

    'as' => 'view-annual-on-admin-side'

]);

Route::get('admin/annual/add', [

    'uses' => 'FundViewController@createAnnual',

    'as' => 'add-annual-on-admin-side'

]);

Route::post('admin/annual/create', [

    'uses' => 'FundShellController@createAnnual',

    'as' => 'register-annual-on-admin-side'

]);

Route::get('admin/annual/edit/{id}', [

    'uses' => 'FundViewController@updateAnnual',

    'as' => 'edit-annual-on-admin-side'

]);

Route::post('admin/annual/update/{id}', [

    'uses' => 'FundShellController@updateAnnual',

    'as' => 'update-annual-on-admin-side'

]);

Route::get('/admin/annual/delete/{id}', [

    'uses' => 'FundShellController@removeAnnual',

    'as' => 'annual-delete'

]);


//  	Annual Report Fees Breakdown

Route::get('admin/annualReportFeesBreakdown/list', [

    'uses' => 'FundViewController@listAnnualReportFeesBreakdown',

    'as' => 'list-annualReportFeesBreakdown-on-admin-side'

]);

Route::get('admin/annualReportFeesBreakdown/view/{id}', [

    'uses' => 'FundViewController@viewAnnualReportFeesBreakdown',

    'as' => 'view-annualReportFeesBreakdown-on-admin-side'

]);

Route::get('admin/annualReportFeesBreakdown/add', [

    'uses' => 'FundViewController@createAnnualReportFeesBreakdown',

    'as' => 'add-annualReportFeesBreakdown-on-admin-side'

]);

Route::post('admin/annualReportFeesBreakdown/create', [

    'uses' => 'FundShellController@createAnnualReportFeesBreakdown',

    'as' => 'register-annualReportFeesBreakdown-on-admin-side'

]);

Route::get('admin/annualReportFeesBreakdown/edit/{id}', [

    'uses' => 'FundViewController@updateAnnualReportFeesBreakdown',

    'as' => 'edit-annualReportFeesBreakdown-on-admin-side'

]);

Route::post('admin/annualReportFeesBreakdown/update/{id}', [

    'uses' => 'FundShellController@updateAnnualReportFeesBreakdown',

    'as' => 'update-annualReportFeesBreakdown-on-admin-side'

]);

Route::get('/admin/annualReportFeesBreakdown/delete/{id}', [

    'uses' => 'FundShellController@removeAnnualReportFeesBreakdown',

    'as' => 'annualReportFeesBreakdown-delete'

]);


// 26/10/2017


//  Fund Time Series

Route::get('admin/fundTimeSeries/list', [

    'uses' => 'FundViewController@listFundTimeSeries',

    'as' => 'list-fundTimeSeries-on-admin-side'

]);

Route::get('admin/fundTimeSeries/view/{id}', [

    'uses' => 'FundViewController@viewFundTimeSeries',

    'as' => 'view-fundTimeSeries-on-admin-side'

]);

Route::get('admin/fundTimeSeries/add', [

    'uses' => 'FundViewController@createFundTimeSeries',

    'as' => 'add-fundTimeSeries-on-admin-side'

]);

Route::post('admin/fundTimeSeries/create', [

    'uses' => 'FundShellController@createFundTimeSeries',

    'as' => 'register-fundTimeSeries-on-admin-side'

]);

Route::get('admin/fundTimeSeries/edit/{id}', [

    'uses' => 'FundViewController@updateFundTimeSeries',

    'as' => 'edit-fundTimeSeries-on-admin-side'

]);

Route::post('admin/fundTimeSeries/update/{id}', [

    'uses' => 'FundShellController@updateFundTimeSeries',

    'as' => 'update-fundTimeSeries-on-admin-side'

]);

Route::get('/admin/fundTimeSeries/delete/{id}', [

    'uses' => 'FundShellController@removeFundTimeSeries',

    'as' => 'fundTimeSeries-delete'

]);


// 	Valuation Frequency

Route::get('admin/valuationFrequency/list', [

    'uses' => 'FundViewController@listValuationFrequency',

    'as' => 'list-valuationFrequency-on-admin-side'

]);

Route::get('admin/valuationFrequency/view/{id}', [

    'uses' => 'FundViewController@viewValuationFrequency',

    'as' => 'view-valuationFrequency-on-admin-side'

]);

Route::get('admin/valuationFrequency/add', [

    'uses' => 'FundViewController@createValuationFrequency',

    'as' => 'add-valuationFrequency-on-admin-side'

]);

Route::post('admin/valuationFrequency/create', [

    'uses' => 'FundShellController@createValuationFrequency',

    'as' => 'register-valuationFrequency-on-admin-side'

]);

Route::get('admin/valuationFrequency/edit/{id}', [

    'uses' => 'FundViewController@updateValuationFrequency',

    'as' => 'edit-valuationFrequency-on-admin-side'

]);

Route::post('admin/valuationFrequency/update/{id}', [

    'uses' => 'FundShellController@updateValuationFrequency',

    'as' => 'update-valuationFrequency-on-admin-side'

]);

Route::get('/admin/valuationFrequency/delete/{id}', [

    'uses' => 'FundShellController@removeValuationFrequency',

    'as' => 'valuationFrequency-delete'

]);


// 	Market Data

Route::get('admin/marketData/list', [

    'uses' => 'FundViewController@listMarketData',

    'as' => 'list-marketData-on-admin-side'

]);

Route::get('admin/marketData/view/{id}', [

    'uses' => 'FundViewController@viewMarketData',

    'as' => 'view-marketData-on-admin-side'

]);

Route::get('admin/marketData/add', [

    'uses' => 'FundViewController@createMarketData',

    'as' => 'add-marketData-on-admin-side'

]);

Route::post('admin/marketData/create', [

    'uses' => 'FundShellController@createMarketData',

    'as' => 'register-marketData-on-admin-side'

]);

Route::get('admin/marketData/edit/{id}', [

    'uses' => 'FundViewController@updateMarketData',

    'as' => 'edit-marketData-on-admin-side'

]);

Route::post('admin/marketData/update/{id}', [

    'uses' => 'FundShellController@updateMarketData',

    'as' => 'update-marketData-on-admin-side'

]);

Route::get('/admin/marketData/delete/{id}', [

    'uses' => 'FundShellController@removeMarketData',

    'as' => 'marketData-delete'

]);


// Fund Income Settings

Route::get('admin/	fundIncomeSettings/list', [

    'uses' => 'FundViewController@listFundIncomeSettings',

    'as' => 'list-fundIncomeSettings-on-admin-side'

]);

Route::get('admin/fundIncomeSettings/view/{id}', [

    'uses' => 'FundViewController@viewFundIncomeSettings',

    'as' => 'view-fundIncomeSettings-on-admin-side'

]);

Route::get('admin/fundIncomeSettings/add', [

    'uses' => 'FundViewController@createFundIncomeSettings',

    'as' => 'add-fundIncomeSettings-on-admin-side'

]);

Route::post('admin/fundIncomeSettings/create', [

    'uses' => 'FundShellController@createFundIncomeSettings',

    'as' => 'register-fundIncomeSettings-on-admin-side'

]);

Route::get('admin/fundIncomeSettings/edit/{id}', [

    'uses' => 'FundViewController@updateFundIncomeSettings',

    'as' => 'edit-fundIncomeSettings-on-admin-side'

]);

Route::post('admin/fundIncomeSettings/update/{id}', [

    'uses' => 'FundShellController@updateFundIncomeSettings',

    'as' => 'update-fundIncomeSettings-on-admin-side'

]);

Route::get('/admin/fundIncomeSettings/delete/{id}', [

    'uses' => 'FundShellController@removeFundIncomeSettings',

    'as' => 'fundIncomeSettings-delete'

]);


// Sourced Statistics

Route::get('admin/sourcedStatistics/list', [

    'uses' => 'FundViewController@listSourcedStatistics',

    'as' => 'list-sourcedStatistics-on-admin-side'

]);

Route::get('admin/sourcedStatistics/view/{id}', [

    'uses' => 'FundViewController@viewSourcedStatistics',

    'as' => 'view-sourcedStatistics-on-admin-side'

]);

Route::get('admin/sourcedStatistics/add', [

    'uses' => 'FundViewController@createSourcedStatistics',

    'as' => 'add-sourcedStatistics-on-admin-side'

]);

Route::post('admin/sourcedStatistics/create', [

    'uses' => 'FundShellController@createSourcedStatistics',

    'as' => 'register-sourcedStatistics-on-admin-side'

]);

Route::get('admin/sourcedStatistics/edit/{id}', [

    'uses' => 'FundViewController@updateSourcedStatistics',

    'as' => 'edit-sourcedStatistics-on-admin-side'

]);

Route::post('admin/sourcedStatistics/update/{id}', [

    'uses' => 'FundShellController@updateSourcedStatistics',

    'as' => 'update-sourcedStatistics-on-admin-side'

]);

Route::get('/admin/sourcedStatistics/delete/{id}', [

    'uses' => 'FundShellController@removeSourcedStatistics',

    'as' => 'sourcedStatistics-delete'

]);


// Fund Performance

Route::get('admin/fundPerformance/list', [

    'uses' => 'FundViewController@listFundPerformance',

    'as' => 'list-fundPerformance-on-admin-side'

]);

Route::get('admin/fundPerformance/view/{id}', [

    'uses' => 'FundViewController@viewFundPerformance',

    'as' => 'view-fundPerformance-on-admin-side'

]);

Route::get('admin/fundPerformance/add', [

    'uses' => 'FundViewController@createFundPerformance',

    'as' => 'add-fundPerformance-on-admin-side'

]);

Route::post('admin/fundPerformance/create', [

    'uses' => 'FundShellController@createFundPerformance',

    'as' => 'register-fundPerformance-on-admin-side'

]);

Route::get('admin/fundPerformance/edit/{id}', [

    'uses' => 'FundViewController@updateFundPerformance',

    'as' => 'edit-fundPerformance-on-admin-side'

]);

Route::post('admin/fundPerformance/update/{id}', [

    'uses' => 'FundShellController@updateFundPerformance',

    'as' => 'update-fundPerformance-on-admin-side'

]);

Route::get('/admin/fundPerformance/delete/{id}', [

    'uses' => 'FundShellController@removeFundPerformance',

    'as' => 'fundPerformance-delete'

]);


// Fund Risk Ratios

Route::get('admin/fundRiskRatios/list', [

    'uses' => 'FundViewController@listFundRiskRatios',

    'as' => 'list-fundRiskRatios-on-admin-side'

]);

Route::get('admin/fundRiskRatios/view/{id}', [

    'uses' => 'FundViewController@viewFundRiskRatios',

    'as' => 'view-fundRiskRatios-on-admin-side'

]);

Route::get('admin/fundRiskRatios/add', [

    'uses' => 'FundViewController@createFundRiskRatios',

    'as' => 'add-fundRiskRatios-on-admin-side'

]);

Route::post('admin/fundRiskRatios/create', [

    'uses' => 'FundShellController@createFundRiskRatios',

    'as' => 'register-fundRiskRatios-on-admin-side'

]);

Route::get('admin/fundRiskRatios/edit/{id}', [

    'uses' => 'FundViewController@updateFundRiskRatios',

    'as' => 'edit-fundRiskRatios-on-admin-side'

]);

Route::post('admin/fundRiskRatios/update/{id}', [

    'uses' => 'FundShellController@updateFundRiskRatios',

    'as' => 'update-fundRiskRatios-on-admin-side'

]);

Route::get('/admin/fundRiskRatios/delete/{id}', [

    'uses' => 'FundShellController@removeFundRiskRatios',

    'as' => 'fundRiskRatios-delete'

]);


// Terms And Conditions

Route::get('admin/termsAndConditions/list', [

    'uses' => 'FundViewController@listTermsAndConditions',

    'as' => 'list-termsAndConditions-on-admin-side'

]);

Route::get('admin/termsAndConditions/view/{id}', [

    'uses' => 'FundViewController@viewTermsAndConditions',

    'as' => 'view-termsAndConditions-on-admin-side'

]);

Route::get('admin/termsAndConditions/add', [

    'uses' => 'FundViewController@createTermsAndConditions',

    'as' => 'add-termsAndConditions-on-admin-side'

]);

Route::post('admin/termsAndConditions/create', [

    'uses' => 'FundShellController@createTermsAndConditions',

    'as' => 'register-termsAndConditions-on-admin-side'

]);

Route::get('admin/termsAndConditions/edit/{id}', [

    'uses' => 'FundViewController@updateTermsAndConditions',

    'as' => 'edit-termsAndConditions-on-admin-side'

]);

Route::post('admin/termsAndConditions/update/{id}', [

    'uses' => 'FundShellController@updateTermsAndConditions',

    'as' => 'update-termsAndConditions-on-admin-side'

]);

Route::get('/admin/termsAndConditions/delete/{id}', [

    'uses' => 'FundShellController@removeTermsAndConditions',

    'as' => 'termsAndConditions-delete'

]);


// Annual Report

Route::get('admin/annualReport/list', [

    'uses' => 'FundViewController@listAnnualReport',

    'as' => 'list-annualReport-on-admin-side'

]);

Route::get('admin/annualReport/view/{id}', [

    'uses' => 'FundViewController@viewAnnualReport',

    'as' => 'view-annualReport-on-admin-side'

]);

Route::get('admin/annualReport/add', [

    'uses' => 'FundViewController@createAnnualReport',

    'as' => 'add-annualReport-on-admin-side'

]);

Route::post('admin/annualReport/create', [

    'uses' => 'FundShellController@createAnnualReport',

    'as' => 'register-annualReport-on-admin-side'

]);

Route::get('admin/annualReport/edit/{id}', [

    'uses' => 'FundViewController@updateAnnualReport',

    'as' => 'edit-annualReport-on-admin-side'

]);

Route::post('admin/annualReport/update/{id}', [

    'uses' => 'FundShellController@updateAnnualReport',

    'as' => 'update-annualReport-on-admin-side'

]);

Route::get('/admin/annualReport/delete/{id}', [

    'uses' => 'FundShellController@removeAnnualReport',

    'as' => 'annualReport-delete'

]);


// Semi Annual Report

Route::get('admin/semiAnnualReport/list', [

    'uses' => 'FundViewController@listSemiAnnualReport',

    'as' => 'list-semiAnnualReport-on-admin-side'

]);

Route::get('admin/semiAnnualReport/view/{id}', [

    'uses' => 'FundViewController@viewSemiAnnualReport',

    'as' => 'view-semiAnnualReport-on-admin-side'

]);

Route::get('admin/semiAnnualReport/add', [

    'uses' => 'FundViewController@createSemiAnnualReport',

    'as' => 'add-semiAnnualReport-on-admin-side'

]);

Route::post('admin/semiAnnualReport/create', [

    'uses' => 'FundShellController@createSemiAnnualReport',

    'as' => 'register-semiAnnualReport-on-admin-side'

]);

Route::get('admin/semiAnnualReport/edit/{id}', [

    'uses' => 'FundViewController@updateSemiAnnualReport',

    'as' => 'edit-semiAnnualReport-on-admin-side'

]);

Route::post('admin/semiAnnualReport/update/{id}', [

    'uses' => 'FundShellController@updateSemiAnnualReport',

    'as' => 'update-semiAnnualReport-on-admin-side'

]);

Route::get('/admin/semiAnnualReport/delete/{id}', [

    'uses' => 'FundShellController@removeSemiAnnualReport',

    'as' => 'semiAnnualReport-delete'

]);


// Key Investor Information Document

Route::get('admin/keyInvestorInformationDocument/list', [

    'uses' => 'FundViewController@listKeyInvestorInformationDocument',

    'as' => 'list-keyInvestorInformationDocument-on-admin-side'

]);

Route::get('admin/keyInvestorInformationDocument/view/{id}', [

    'uses' => 'FundViewController@viewKeyInvestorInformationDocument',

    'as' => 'view-keyInvestorInformationDocument-on-admin-side'

]);

Route::get('admin/keyInvestorInformationDocument/add', [

    'uses' => 'FundViewController@createKeyInvestorInformationDocument',

    'as' => 'add-keyInvestorInformationDocument-on-admin-side'

]);

Route::post('admin/keyInvestorInformationDocument/create', [

    'uses' => 'FundShellController@createKeyInvestorInformationDocument',

    'as' => 'register-keyInvestorInformationDocument-on-admin-side'

]);

Route::get('admin/keyInvestorInformationDocument/edit/{id}', [

    'uses' => 'FundViewController@updateKeyInvestorInformationDocument',

    'as' => 'edit-keyInvestorInformationDocument-on-admin-side'

]);

Route::post('admin/keyInvestorInformationDocument/update/{id}', [

    'uses' => 'FundShellController@updateKeyInvestorInformationDocument',

    'as' => 'update-keyInvestorInformationDocument-on-admin-side'

]);

Route::get('/admin/keyInvestorInformationDocument/delete/{id}', [

    'uses' => 'FundShellController@removeKeyInvestorInformationDocument',

    'as' => 'keyInvestorInformationDocument-delete'

]);


//Index Shell


//	Index Facts

Route::get('admin/indexFacts/list', [

    'uses' => 'FundViewController@listIndexFacts',

    'as' => 'list-indexFacts-on-admin-side'

]);

Route::get('admin/indexFacts/view/{id}', [

    'uses' => 'FundViewController@viewIndexFacts',

    'as' => 'view-indexFacts-on-admin-side'

]);

Route::get('admin/indexFacts/add', [

    'uses' => 'FundViewController@createIndexFacts',

    'as' => 'add-indexFacts-on-admin-side'

]);

Route::post('admin/indexFacts/create', [

    'uses' => 'FundShellController@createIndexFacts',

    'as' => 'register-indexFacts-on-admin-side'

]);

Route::get('admin/indexFacts/edit/{id}', [

    'uses' => 'FundViewController@updateIndexFacts',

    'as' => 'edit-indexFacts-on-admin-side'

]);

Route::post('admin/indexFacts/update/{id}', [

    'uses' => 'FundShellController@updateIndexFacts',

    'as' => 'update-indexFacts-on-admin-side'

]);

Route::get('/admin/indexFacts/delete/{id}', [

    'uses' => 'FundShellController@removeIndexFacts',

    'as' => 'indexFacts-delete'

]);


//		Index Time Series

Route::get('admin/indexTimeSeries/list', [

    'uses' => 'FundViewController@listIndexTimeSeries',

    'as' => 'list-indexTimeSeries-on-admin-side'

]);

Route::get('admin/indexTimeSeries/view/{id}', [

    'uses' => 'FundViewController@viewIndexTimeSeries',

    'as' => 'view-indexTimeSeries-on-admin-side'

]);

Route::get('admin/indexTimeSeries/add', [

    'uses' => 'FundViewController@createIndexTimeSeries',

    'as' => 'add-indexTimeSeries-on-admin-side'

]);

Route::post('admin/indexTimeSeries/create', [

    'uses' => 'FundShellController@createIndexTimeSeries',

    'as' => 'register-indexTimeSeries-on-admin-side'

]);

Route::get('admin/indexTimeSeries/edit/{id}', [

    'uses' => 'FundViewController@updateIndexTimeSeries',

    'as' => 'edit-indexTimeSeries-on-admin-side'

]);

Route::post('admin/indexTimeSeries/update/{id}', [

    'uses' => 'FundShellController@updateIndexTimeSeries',

    'as' => 'update-indexTimeSeries-on-admin-side'

]);

Route::get('/admin/indexTimeSeries/delete/{id}', [

    'uses' => 'FundShellController@removeIndexTimeSeries',

    'as' => 'indexTimeSeries-delete'

]);


//Company Shell


//	Profile

Route::get('admin/profile/list', [

    'uses' => 'FundViewController@listProfile',

    'as' => 'list-profile-on-admin-side'

]);

Route::get('admin/profile/view/{id}', [

    'uses' => 'FundViewController@viewProfile',

    'as' => 'view-profile-on-admin-side'

]);

Route::get('admin/profile/add', [

    'uses' => 'FundViewController@createProfile',

    'as' => 'add-profile-on-admin-side'

]);

Route::post('admin/profile/create', [

    'uses' => 'FundShellController@createProfile',

    'as' => 'register-profile-on-admin-side'

]);

Route::get('admin/profile/edit/{id}', [

    'uses' => 'FundViewController@updateProfile',

    'as' => 'edit-profile-on-admin-side'

]);

Route::post('admin/profile/update/{id}', [

    'uses' => 'FundShellController@updateProfile',

    'as' => 'update-profile-on-admin-side'

]);

Route::get('/admin/profile/delete/{id}', [

    'uses' => 'FundShellController@removeProfile',

    'as' => 'profile-delete'

]);


//Company Shell


//	Shareholders

Route::get('admin/shareholders/list', [

    'uses' => 'FundViewController@listShareholders',

    'as' => 'list-shareholders-on-admin-side'

]);

Route::get('admin/shareholders/view/{id}', [

    'uses' => 'FundViewController@viewShareholders',

    'as' => 'view-shareholders-on-admin-side'

]);

Route::get('admin/shareholders/add', [

    'uses' => 'FundViewController@createShareholders',

    'as' => 'add-shareholders-on-admin-side'

]);

Route::post('admin/shareholders/create', [

    'uses' => 'FundShellController@createShareholders',

    'as' => 'register-shareholders-on-admin-side'

]);

Route::get('admin/shareholders/edit/{id}', [

    'uses' => 'FundViewController@updateShareholders',

    'as' => 'edit-shareholders-on-admin-side'

]);

Route::post('admin/shareholders/update/{id}', [

    'uses' => 'FundShellController@updateShareholders',

    'as' => 'update-shareholders-on-admin-side'

]);

Route::get('/admin/shareholders/delete/{id}', [

    'uses' => 'FundShellController@removeShareholders',

    'as' => 'shareholders-delete'

]);


//	Address

Route::get('admin/address/list', [

    'uses' => 'FundViewController@listAddress',

    'as' => 'list-address-on-admin-side'

]);

Route::get('admin/address/view/{id}', [

    'uses' => 'FundViewController@viewAddress',

    'as' => 'view-address-on-admin-side'

]);

Route::get('admin/address/add', [

    'uses' => 'FundViewController@createAddress',

    'as' => 'add-address-on-admin-side'

]);

Route::post('admin/address/create', [

    'uses' => 'FundShellController@createAddress',

    'as' => 'register-address-on-admin-side'

]);

Route::get('admin/address/edit/{id}', [

    'uses' => 'FundViewController@updateAddress',

    'as' => 'edit-address-on-admin-side'

]);

Route::post('admin/address/update/{id}', [

    'uses' => 'FundShellController@updateAddress',

    'as' => 'update-address-on-admin-side'

]);

Route::get('/admin/address/delete/{id}', [

    'uses' => 'FundShellController@removeAddress',

    'as' => 'address-delete'

]);