<style>
.sidebar .nav .nav-item .nav-link.active i, .sidebar .nav .nav-item .navbar .active.dropdown-toggle i, .navbar .sidebar .nav .nav-item .active.dropdown-toggle i { color:#fff;}
</style>
<div class="sidebar">
<nav class="sidebar-nav">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}"><i class="icon-speedometer"></i> Dashboard <span class="badge badge-primary">NEW</span></a>
        <li class="nav-title">
            Profile
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}"><i class="icon-speedometer"></i> Fund Overview <span class="badge badge-primary">NEW</span></a>
</li>
<li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}"><i class="icon-speedometer"></i> Fund Attributes <span class="badge badge-primary">NEW</span></a>
           </li>
<li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}"><i class="icon-speedometer"></i> Historical Prices & Charts <span class="badge badge-primary">NEW</span></a>
           </li>
<li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}"><i class="icon-speedometer"></i> Asset Valuation & Flows <span class="badge badge-primary">NEW</span></a>
           </li>
<li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}"><i class="icon-speedometer"></i> Fees & Expenses <span class="badge badge-primary">NEW</span></a>
           </li>
<li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}"><i class="icon-speedometer"></i> Performance & Risk Analytics <span class="badge badge-primary">NEW</span></a>
           </li>
<li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}"><i class="icon-speedometer"></i> Fund Holdings <span class="badge badge-primary">NEW</span></a>
           </li>
<li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}"><i class="icon-speedometer"></i> Fund Documents <span class="badge badge-primary">NEW</span></a>
           </li>
<li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}"><i class="icon-speedometer"></i> Fund People <span class="badge badge-primary">NEW</span></a>
           </li>
<li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}"><i class="icon-speedometer"></i> Fund Service Providers <span class="badge badge-primary">NEW</span></a>
           </li>

<li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}"><i class="icon-speedometer"></i> Fund Compliance & Regulations <span class="badge badge-primary">NEW</span></a>
           </li>
        <li class="nav-title">
            Functions
        </li>
        <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Fund Shells</a>
            <ul class="nav-dropdown-items">
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i>Fund Identity & Policy</a>
                    <ul class="nav-dropdown-items">
                    
                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i>Fund Identity</a>
                                <ul class="nav-dropdown-items">

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('add-fundidentity-on-admin-side') }}"><i class="icon-puzzle"></i> Create</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('list-fundidentity-on-admin-side') }}"><i class="icon-puzzle"></i> List</a>
                                    </li>

                                </ul>
                        </li>

                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i>	Fund Objective & Strategy</a>
                            <ul class="nav-dropdown-items">

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('add-fundObjectiveStrategy-on-admin-side') }}"><i class="icon-puzzle"></i> Create</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('list-fundObjectiveStrategy-on-admin-side') }}"><i class="icon-puzzle"></i> List</a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i>FI&P</a>
                                <ul class="nav-dropdown-items">

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('add-fundidentitypolicy-on-admin-side') }}"><i class="icon-puzzle"></i> Create</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('list-fundidentitypolicy-on-admin-side') }}"><i class="icon-puzzle"></i> List</a>
                                    </li>

                                </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i>Fund Attributes</a>
                    <ul class="nav-dropdown-items">
                    <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> FA</a>
                            <ul class="nav-dropdown-items">

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('add-fundAttributes-on-admin-side') }}"><i class="icon-puzzle"></i> Create</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('list-fundAttributes-on-admin-side') }}"><i class="icon-puzzle"></i> List</a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Fund Key Attributes</a>
                            <ul class="nav-dropdown-items">

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('add-fundKeyAttributes-on-admin-side') }}"><i class="icon-puzzle"></i> Create</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('list-fundKeyAttributes-on-admin-side') }}"><i class="icon-puzzle"></i> List</a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Fund Asset Attributes</a>
                            <ul class="nav-dropdown-items">

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('add-fundAssetAttributes-on-admin-side') }}"><i class="icon-puzzle"></i> Create</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('list-fundAssetAttributes-on-admin-side') }}"><i class="icon-puzzle"></i> List</a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Fund Sales & Distribution</a>
                            <ul class="nav-dropdown-items">

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('add-fundSalesDistribution-on-admin-side') }}"><i class="icon-puzzle"></i> Create</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('list-fundSalesDistribution-on-admin-side') }}"><i class="icon-puzzle"></i> List</a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Fund History</a>
                            <ul class="nav-dropdown-items">

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('add-fundHistory-on-admin-side') }}"><i class="icon-puzzle"></i> Create</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('list-fundHistory-on-admin-side') }}"><i class="icon-puzzle"></i> List</a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Related Funds</a>
                            <ul class="nav-dropdown-items">

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('add-relatedFunds-on-admin-side') }}"><i class="icon-puzzle"></i> Create</a>
                                </li>

                                  <li class="nav-item">
                                    <a class="nav-link" href="{{ route('list-relatedFunds-on-admin-side') }}"><i class="icon-puzzle"></i> List</a>
                                </li>

                    </ul>
                </li>

                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Fund Flags</a>
                    <ul class="nav-dropdown-items">

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('add-fundFlags-on-admin-side') }}"><i class="icon-puzzle"></i> Create</a>
                        </li>

                         <li class="nav-item">
                    <a class="nav-link" href="{{ route('list-fundFlags-on-admin-side') }}"><i class="icon-puzzle"></i> List</a>
                </li>


            </ul>
        </li>

                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Investor Type</a>
                            <ul class="nav-dropdown-items">

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('add-investorType-on-admin-side') }}"><i class="icon-puzzle"></i> Create</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('list-investorType-on-admin-side') }}"><i class="icon-puzzle"></i> List</a>
                                </li>


                            </ul>
                        </li>

                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Themes Attributes</a>
                            <ul class="nav-dropdown-items">

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('add-themesAttributes-on-admin-side') }}"><i class="icon-puzzle"></i> Create</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('list-themesAttributes-on-admin-side') }}"><i class="icon-puzzle"></i> List</a>
                                </li>


                            </ul>
                        </li>

                    </ul>
                </li>

                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Fund Codes</a>
                    <ul class="nav-dropdown-items">

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('add-fundCodes-on-admin-side') }}"><i class="icon-puzzle"></i> Create</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('list-fundCodes-on-admin-side') }}"><i class="icon-puzzle"></i> List</a>
                        </li>


                    </ul>
                </li>

                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Fund Classification & Benchmarks</a>
                    <ul class="nav-dropdown-items">
                    
                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> FC&B</a>
                            <ul class="nav-dropdown-items">

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('add-fundClassificationBenchmarks-on-admin-side') }}"><i class="icon-puzzle"></i> Create</a>
                                </li>
                                <li class="nav-item" sytle="display:none">
                                    <a class="nav-link" href="{{ route('list-fundClassificationBenchmarks-on-admin-side') }}"><i class="icon-puzzle"></i> List</a>
                                </li>

                            </ul>
                        </li>

                        
                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Fund Classification Schemes</a>
                            <ul class="nav-dropdown-items">

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('add-fundClassificationSchemes-on-admin-side') }}"><i class="icon-puzzle"></i> Create</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('list-fundClassificationSchemes-on-admin-side') }}"><i class="icon-puzzle"></i> List</a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Fund Benchmarks</a>
                            <ul class="nav-dropdown-items">

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('add-fundBenchmarks-on-admin-side') }}"><i class="icon-puzzle"></i> Create</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('list-fundBenchmarks-on-admin-side') }}"><i class="icon-puzzle"></i> List</a>
                                </li>

                            </ul>
                        </li>


                    </ul>
                </li>

             
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Fund Regulations & Compliance</a>
                    <ul class="nav-dropdown-items">

                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Fund Compliance</a>
                            <ul class="nav-dropdown-items">

                                <li class="nav-item nav-dropdown">
                                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Authorizations</a>
                                    <ul class="nav-dropdown-items">

                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('add-authorizations-on-admin-side') }}"><i class="icon-puzzle"></i> Create</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('list-authorizations-on-admin-side') }}"><i class="icon-puzzle"></i> List</a>
                                        </li>

                                    </ul>
                                </li>

                                <li class="nav-item nav-dropdown">
                                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Compliance Officer</a>
                                    <ul class="nav-dropdown-items">

                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('add-complianceOfficer-on-admin-side') }}"><i class="icon-puzzle"></i> Create</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('list-complianceOfficer-on-admin-side') }}"><i class="icon-puzzle"></i> List</a>
                                        </li>

                                    </ul>
                                </li>


                            </ul>
                        </li>

                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Fund Regulations</a>
                            <ul class="nav-dropdown-items">

                                <li class="nav-item nav-dropdown">
                                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Laws and Regulations</a>
                                    <ul class="nav-dropdown-items">

                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('add-lawsAndRegulations-on-admin-side') }}"><i class="icon-puzzle"></i> Create</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('list-lawsAndRegulations-on-admin-side') }}"><i class="icon-puzzle"></i> List</a>
                                        </li>

                                    </ul>
                                </li>


                            </ul>
                        </li>

                    </ul>
                </li>

                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Fund Subscription & Redemption </a>
                            <ul class="nav-dropdown-items">

                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Subscription</a>
                            <ul class="nav-dropdown-items">

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('add-subscription-on-admin-side') }}"><i class="icon-puzzle"></i> Create</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('list-subscription-on-admin-side') }}"><i class="icon-puzzle"></i> List</a>
                                </li>


                            </ul>
                        </li>

                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Redemption</a>
                            <ul class="nav-dropdown-items">

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('add-redemption-on-admin-side') }}"><i class="icon-puzzle"></i> Create</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('list-redemption-on-admin-side') }}"><i class="icon-puzzle"></i> List</a>
                                </li>


                            </ul>
                        </li>

                            </ul>
                        </li>

                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Fund Fees & Expense Details </a>
                    <ul class="nav-dropdown-items">

                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Charges</a>
                            <ul class="nav-dropdown-items">

                                <li class="nav-item nav-dropdown">
                                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Initial</a>
                                    <ul class="nav-dropdown-items">

                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('add-initial-on-admin-side') }}">
                                                <i class="icon-puzzle"></i> Create</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('list-initial-on-admin-side') }}">
                                                <i class="icon-puzzle"></i> List</a>
                                        </li>


                                    </ul>
                                </li>

                                <li class="nav-item nav-dropdown">
                                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Redemption</a>
                                    <ul class="nav-dropdown-items">

                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('add-chargesRedemption-on-admin-side') }}">
                                                <i class="icon-puzzle"></i> Create</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('list-chargesRedemption-on-admin-side') }}">
                                                <i class="icon-puzzle"></i> List</a>
                                        </li>


                                    </ul>
                                </li>

                                <li class="nav-item nav-dropdown">
                                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Annual</a>
                                    <ul class="nav-dropdown-items">

                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('add-annual-on-admin-side') }}">
                                                <i class="icon-puzzle"></i> Create</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('list-annual-on-admin-side') }}">
                                                <i class="icon-puzzle"></i> List</a>
                                        </li>


                                    </ul>
                                </li>
                                <!-- 26/10/2017 -->

                            </ul>
                        </li>


                    </ul>
                </li>

                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Fund Pricing & Valuation Information</a>
                    <ul class="nav-dropdown-items">

                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Fund Time Series</a>
                            <ul class="nav-dropdown-items">

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('add-fundTimeSeries-on-admin-side') }}">
                                        <i class="icon-puzzle"></i> Create</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('list-fundTimeSeries-on-admin-side') }}">
                                        <i class="icon-puzzle"></i> List</a>
                                </li>


                            </ul>
                        </li>

                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Valuation Frequency</a>
                            <ul class="nav-dropdown-items">

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('add-valuationFrequency-on-admin-side') }}">
                                        <i class="icon-puzzle"></i> Create</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('list-valuationFrequency-on-admin-side') }}">
                                        <i class="icon-puzzle"></i> List</a>
                                </li>


                            </ul>
                        </li>

                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Market Data</a>
                            <ul class="nav-dropdown-items">

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('add-marketData-on-admin-side') }}">
                                        <i class="icon-puzzle"></i> Create</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('list-marketData-on-admin-side') }}">
                                        <i class="icon-puzzle"></i> List</a>
                                </li>


                            </ul>
                        </li>

                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Fund Income Settings</a>
                            <ul class="nav-dropdown-items">

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('add-fundIncomeSettings-on-admin-side') }}">
                                        <i class="icon-puzzle"></i> Create</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('list-fundIncomeSettings-on-admin-side') }}">
                                        <i class="icon-puzzle"></i> List</a>
                                </li>


                            </ul>
                        </li>


                    </ul>
                </li>

                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Fund Performance & Risk Statistics</a>
                    <ul class="nav-dropdown-items">

                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Sourced Statistics</a>
                            <ul class="nav-dropdown-items">

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('add-sourcedStatistics-on-admin-side') }}">
                                        <i class="icon-puzzle"></i> Create</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('list-sourcedStatistics-on-admin-side') }}">
                                        <i class="icon-puzzle"></i> List</a>
                                </li>


                            </ul>
                        </li>

                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Calculated Statistics</a>
                            <ul class="nav-dropdown-items">

                                <li class="nav-item nav-dropdown">
                                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Fund Performance</a>
                                    <ul class="nav-dropdown-items">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('add-fundPerformance-on-admin-side') }}">
                                                <i class="icon-puzzle"></i> Create</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('list-fundPerformance-on-admin-side') }}">
                                                <i class="icon-puzzle"></i> List</a>
                                        </li>

                                    </ul>
                                </li>

                                <li class="nav-item nav-dropdown">
                                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Fund Risk Ratios</a>
                                    <ul class="nav-dropdown-items">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('add-fundRiskRatios-on-admin-side') }}">
                                                <i class="icon-puzzle"></i> Create</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('list-fundRiskRatios-on-admin-side') }}">
                                                <i class="icon-puzzle"></i> List</a>
                                        </li>

                                    </ul>
                                </li>

                            </ul>
                        </li>


                    </ul>
                </li>

                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Fund Documents</a>
                    <ul class="nav-dropdown-items">

                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Terms And Conditions</a>
                            <ul class="nav-dropdown-items">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('add-termsAndConditions-on-admin-side') }}">
                                        <i class="icon-puzzle"></i> Create</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('list-termsAndConditions-on-admin-side') }}">
                                        <i class="icon-puzzle"></i> List</a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Annual Report</a>
                            <ul class="nav-dropdown-items">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('add-annualReport-on-admin-side') }}">
                                        <i class="icon-puzzle"></i> Create</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('list-annualReport-on-admin-side') }}">
                                        <i class="icon-puzzle"></i> List</a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Semi Annual Report</a>
                            <ul class="nav-dropdown-items">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('add-semiAnnualReport-on-admin-side') }}">
                                        <i class="icon-puzzle"></i> Create</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('list-semiAnnualReport-on-admin-side') }}">
                                        <i class="icon-puzzle"></i> List</a>
                                </li>

                            </ul>
                        </li>

                    </ul>
                </li>


            </ul>
        </li>



        <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-star"></i> Index Shell</a>
            <ul class="nav-dropdown-items">

                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Indices Information </a>
                    <ul class="nav-dropdown-items">

                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Index Facts</a>
                            <ul class="nav-dropdown-items">

                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('add-indexFacts-on-admin-side') }}">
                                                <i class="icon-puzzle"></i> Create</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('list-indexFacts-on-admin-side') }}">
                                                <i class="icon-puzzle"></i> List</a>
                                        </li>



                            </ul>
                        </li>

                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Index Time Series</a>
                            <ul class="nav-dropdown-items">

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('add-indexTimeSeries-on-admin-side') }}">
                                        <i class="icon-puzzle"></i> Create</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('list-indexTimeSeries-on-admin-side') }}">
                                        <i class="icon-puzzle"></i> List</a>
                                </li>



                            </ul>
                        </li>


                    </ul>
                </li>

            </ul>
        </li>
        <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-star"></i> Company Shell</a>
            <ul class="nav-dropdown-items">

                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Company Information </a>
                    <ul class="nav-dropdown-items">

                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Profile</a>
                            <ul class="nav-dropdown-items">

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('add-profile-on-admin-side') }}">
                                        <i class="icon-puzzle"></i> Create</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('list-profile-on-admin-side') }}">
                                        <i class="icon-puzzle"></i> List</a>
                                </li>



                            </ul>
                        </li>

                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Shareholders</a>
                            <ul class="nav-dropdown-items">

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('add-shareholders-on-admin-side') }}">
                                        <i class="icon-puzzle"></i> Create</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('list-shareholders-on-admin-side') }}">
                                        <i class="icon-puzzle"></i> List</a>
                                </li>
                            </ul>
                        </li>

         <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Address</a>
                            <ul class="nav-dropdown-items">

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('add-address-on-admin-side') }}">
                                        <i class="icon-puzzle"></i> Create</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('list-address-on-admin-side') }}">
                                        <i class="icon-puzzle"></i> List</a>
                                </li>
                            </ul>
                        </li>



                    </ul>
                </li>

            </ul>
        </li>
        <li class="nav-item" style="display:none;">
            <a class="nav-link" href="/"><i class="icon-pie-chart"></i> Users</a>
        </li>
        <li class="divider"  style="display:none;"></li>
        <li class="nav-title"  style="display:none;">
            Extras
        </li>
        <li class="nav-item nav-dropdown"  style="display:none;">
            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-star"></i> Tools</a>
            <ul class="nav-dropdown-items">
                <!--<li class="nav-item">
                    <a class="nav-link" href="pages-login.html" target="_top"><i class="icon-star"></i> Login</a>
                </li>!-->
            </ul>
        </li>

        <li class="nav-item nav-dropdown"  style="display:none;">
            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-star"></i> Help</a>
            <ul class="nav-dropdown-items">
               <!-- <li class="nav-item">
                    <a class="nav-link" href="pages-login.html" target="_top"><i class="icon-star"></i> Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages-add.html" target="_top"><i class="icon-star"></i> add</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages-404.html" target="_top"><i class="icon-star"></i> Error 404</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages-500.html" target="_top"><i class="icon-star"></i> Error 500</a>
                </li>!-->
            </ul>
        </li>

    </ul>
</nav>
</div>