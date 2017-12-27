<style>
.sidebar .nav .nav-item .nav-link.active i, .sidebar .nav .nav-item .navbar .active.dropdown-toggle i, .navbar .sidebar .nav .nav-item .active.dropdown-toggle i { color:#fff;}
</style>
<div class="sidebar">
<nav class="sidebar-nav">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}"> <i class="icon-speedometer"></i> Dashboard </a>
        <li class="nav-title">
            Profile
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}"> Fund Overview </a>
</li>
<li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}"> Fund Attributes </a>
           </li>
<li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}"> Historical Prices & Charts </a>
           </li>
<li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}"> Asset Valuation & Flows </a>
           </li>
<li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}"> Fees & Expenses </a>
           </li>
<li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}"> Performance & Risk Analytics </a>
           </li>
<li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}"> Fund Holdings </a>
           </li>
<li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}"> Fund Documents </a>
           </li>
<li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}"> Fund People </a>
           </li>
<li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}"> Fund Service Providers </a>
           </li>

<li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}"> Fund Compliance & Regulations </a>
           </li>
        <li class="nav-title">
            Database Administrative Tools
        </li>
        <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle" href="#"> Fund Shells</a>
            <ul class="nav-dropdown-items">
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#">Fund Identity & Policy</a>
                    <ul class="nav-dropdown-items">
                    
                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#">Fund Identity</a>
                                <ul class="nav-dropdown-items">

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('add-fundidentity-on-admin-side') }}"> Create</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('list-fundidentity-on-admin-side') }}"> List</a>
                                    </li>

                                </ul>
                        </li>

                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#">	Fund Objective & Strategy</a>
                            <ul class="nav-dropdown-items">

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('add-fundObjectiveStrategy-on-admin-side') }}"> Create</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('list-fundObjectiveStrategy-on-admin-side') }}"> List</a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#">FI&P</a>
                                <ul class="nav-dropdown-items">

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('add-fundidentitypolicy-on-admin-side') }}"> Create</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('list-fundidentitypolicy-on-admin-side') }}"> List</a>
                                    </li>

                                </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#">Fund Attributes</a>
                    <ul class="nav-dropdown-items">
                    <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"> FA</a>
                            <ul class="nav-dropdown-items">

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('add-fundAttributes-on-admin-side') }}"> Create</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('list-fundAttributes-on-admin-side') }}"> List</a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"> Fund Key Attributes</a>
                            <ul class="nav-dropdown-items">

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('add-fundKeyAttributes-on-admin-side') }}"> Create</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('list-fundKeyAttributes-on-admin-side') }}"> List</a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"> Fund Asset Attributes</a>
                            <ul class="nav-dropdown-items">

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('add-fundAssetAttributes-on-admin-side') }}"> Create</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('list-fundAssetAttributes-on-admin-side') }}"> List</a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"> Fund Sales & Distribution</a>
                            <ul class="nav-dropdown-items">

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('add-fundSalesDistribution-on-admin-side') }}"> Create</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('list-fundSalesDistribution-on-admin-side') }}"> List</a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"> Fund History</a>
                            <ul class="nav-dropdown-items">

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('add-fundHistory-on-admin-side') }}"> Create</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('list-fundHistory-on-admin-side') }}"> List</a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"> Related Funds</a>
                            <ul class="nav-dropdown-items">

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('add-relatedFunds-on-admin-side') }}"> Create</a>
                                </li>

                                  <li class="nav-item">
                                    <a class="nav-link" href="{{ route('list-relatedFunds-on-admin-side') }}"> List</a>
                                </li>

                    </ul>
                </li>

                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"> Fund Flags</a>
                    <ul class="nav-dropdown-items">

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('add-fundFlags-on-admin-side') }}"> Create</a>
                        </li>

                         <li class="nav-item">
                    <a class="nav-link" href="{{ route('list-fundFlags-on-admin-side') }}"> List</a>
                </li>


            </ul>
        </li>

                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"> Investor Type</a>
                            <ul class="nav-dropdown-items">

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('add-investorType-on-admin-side') }}"> Create</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('list-investorType-on-admin-side') }}"> List</a>
                                </li>


                            </ul>
                        </li>

                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"> Themes Attributes</a>
                            <ul class="nav-dropdown-items">

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('add-themesAttributes-on-admin-side') }}"> Create</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('list-themesAttributes-on-admin-side') }}"> List</a>
                                </li>


                            </ul>
                        </li>

                    </ul>
                </li>

                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"> Fund Codes</a>
                    <ul class="nav-dropdown-items">

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('add-fundCodes-on-admin-side') }}"> Create</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('list-fundCodes-on-admin-side') }}"> List</a>
                        </li>


                    </ul>
                </li>

                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"> Fund Classification & Benchmarks</a>
                    <ul class="nav-dropdown-items">
                    
                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"> FC&B</a>
                            <ul class="nav-dropdown-items">

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('add-fundClassificationBenchmarks-on-admin-side') }}"> Create</a>
                                </li>
                                <li class="nav-item" sytle="display:none">
                                    <a class="nav-link" href="{{ route('list-fundClassificationBenchmarks-on-admin-side') }}"> List</a>
                                </li>

                            </ul>
                        </li>

                        
                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"> Fund Classification Schemes</a>
                            <ul class="nav-dropdown-items">

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('add-fundClassificationSchemes-on-admin-side') }}"> Create</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('list-fundClassificationSchemes-on-admin-side') }}"> List</a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"> Fund Benchmarks</a>
                            <ul class="nav-dropdown-items">

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('add-fundBenchmarks-on-admin-side') }}"> Create</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('list-fundBenchmarks-on-admin-side') }}"> List</a>
                                </li>

                            </ul>
                        </li>


                    </ul>
                </li>

             
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"> Fund Regulations & Compliance</a>
                    <ul class="nav-dropdown-items">

                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"> Fund Compliance</a>
                            <ul class="nav-dropdown-items">

                                <li class="nav-item nav-dropdown">
                                    <a class="nav-link nav-dropdown-toggle" href="#"> Authorizations</a>
                                    <ul class="nav-dropdown-items">

                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('add-authorizations-on-admin-side') }}"> Create</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('list-authorizations-on-admin-side') }}"> List</a>
                                        </li>

                                    </ul>
                                </li>

                                <li class="nav-item nav-dropdown">
                                    <a class="nav-link nav-dropdown-toggle" href="#"> Compliance Officer</a>
                                    <ul class="nav-dropdown-items">

                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('add-complianceOfficer-on-admin-side') }}"> Create</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('list-complianceOfficer-on-admin-side') }}"> List</a>
                                        </li>

                                    </ul>
                                </li>


                            </ul>
                        </li>

                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"> Fund Regulations</a>
                            <ul class="nav-dropdown-items">

                                <li class="nav-item nav-dropdown">
                                    <a class="nav-link nav-dropdown-toggle" href="#"> Laws and Regulations</a>
                                    <ul class="nav-dropdown-items">

                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('add-lawsAndRegulations-on-admin-side') }}"> Create</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('list-lawsAndRegulations-on-admin-side') }}"> List</a>
                                        </li>

                                    </ul>
                                </li>


                            </ul>
                        </li>

                    </ul>
                </li>

                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"> Fund Subscription & Redemption </a>
                            <ul class="nav-dropdown-items">

                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"> Subscription</a>
                            <ul class="nav-dropdown-items">

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('add-subscription-on-admin-side') }}"> Create</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('list-subscription-on-admin-side') }}"> List</a>
                                </li>


                            </ul>
                        </li>

                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"> Redemption</a>
                            <ul class="nav-dropdown-items">

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('add-redemption-on-admin-side') }}"> Create</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('list-redemption-on-admin-side') }}"> List</a>
                                </li>


                            </ul>
                        </li>

                            </ul>
                        </li>

                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"> Fund Fees & Expense Details </a>
                    <ul class="nav-dropdown-items">

                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"> Charges</a>
                            <ul class="nav-dropdown-items">

                                <li class="nav-item nav-dropdown">
                                    <a class="nav-link nav-dropdown-toggle" href="#"> Initial</a>
                                    <ul class="nav-dropdown-items">

                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('add-initial-on-admin-side') }}">
                                                 Create</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('list-initial-on-admin-side') }}">
                                                 List</a>
                                        </li>


                                    </ul>
                                </li>

                                <li class="nav-item nav-dropdown">
                                    <a class="nav-link nav-dropdown-toggle" href="#"> Redemption</a>
                                    <ul class="nav-dropdown-items">

                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('add-chargesRedemption-on-admin-side') }}">
                                                 Create</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('list-chargesRedemption-on-admin-side') }}">
                                                 List</a>
                                        </li>


                                    </ul>
                                </li>

                                <li class="nav-item nav-dropdown">
                                    <a class="nav-link nav-dropdown-toggle" href="#"> Annual</a>
                                    <ul class="nav-dropdown-items">

                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('add-annual-on-admin-side') }}">
                                                 Create</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('list-annual-on-admin-side') }}">
                                                 List</a>
                                        </li>


                                    </ul>
                                </li>
                                <!-- 26/10/2017 -->

                            </ul>
                        </li>


                    </ul>
                </li>

                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"> Fund Pricing & Valuation Information</a>
                    <ul class="nav-dropdown-items">

                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"> Fund Time Series</a>
                            <ul class="nav-dropdown-items">

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('add-fundTimeSeries-on-admin-side') }}">
                                         Create</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('list-fundTimeSeries-on-admin-side') }}">
                                         List</a>
                                </li>


                            </ul>
                        </li>

                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"> Valuation Frequency</a>
                            <ul class="nav-dropdown-items">

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('add-valuationFrequency-on-admin-side') }}">
                                         Create</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('list-valuationFrequency-on-admin-side') }}">
                                         List</a>
                                </li>


                            </ul>
                        </li>

                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"> Market Data</a>
                            <ul class="nav-dropdown-items">

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('add-marketData-on-admin-side') }}">
                                         Create</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('list-marketData-on-admin-side') }}">
                                         List</a>
                                </li>


                            </ul>
                        </li>

                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"> Fund Income Settings</a>
                            <ul class="nav-dropdown-items">

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('add-fundIncomeSettings-on-admin-side') }}">
                                         Create</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('list-fundIncomeSettings-on-admin-side') }}">
                                         List</a>
                                </li>


                            </ul>
                        </li>


                    </ul>
                </li>

                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"> Fund Performance & Risk Statistics</a>
                    <ul class="nav-dropdown-items">

                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"> Sourced Statistics</a>
                            <ul class="nav-dropdown-items">

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('add-sourcedStatistics-on-admin-side') }}">
                                         Create</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('list-sourcedStatistics-on-admin-side') }}">
                                         List</a>
                                </li>


                            </ul>
                        </li>

                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"> Calculated Statistics</a>
                            <ul class="nav-dropdown-items">

                                <li class="nav-item nav-dropdown">
                                    <a class="nav-link nav-dropdown-toggle" href="#"> Fund Performance</a>
                                    <ul class="nav-dropdown-items">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('add-fundPerformance-on-admin-side') }}">
                                                 Create</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('list-fundPerformance-on-admin-side') }}">
                                                 List</a>
                                        </li>

                                    </ul>
                                </li>

                                <li class="nav-item nav-dropdown">
                                    <a class="nav-link nav-dropdown-toggle" href="#"> Fund Risk Ratios</a>
                                    <ul class="nav-dropdown-items">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('add-fundRiskRatios-on-admin-side') }}">
                                                 Create</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('list-fundRiskRatios-on-admin-side') }}">
                                                 List</a>
                                        </li>

                                    </ul>
                                </li>

                            </ul>
                        </li>


                    </ul>
                </li>

                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"> Fund Documents</a>
                    <ul class="nav-dropdown-items">

                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"> Terms And Conditions</a>
                            <ul class="nav-dropdown-items">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('add-termsAndConditions-on-admin-side') }}">
                                         Create</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('list-termsAndConditions-on-admin-side') }}">
                                         List</a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"> Annual Report</a>
                            <ul class="nav-dropdown-items">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('add-annualReport-on-admin-side') }}">
                                         Create</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('list-annualReport-on-admin-side') }}">
                                         List</a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"> Semi Annual Report</a>
                            <ul class="nav-dropdown-items">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('add-semiAnnualReport-on-admin-side') }}">
                                         Create</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('list-semiAnnualReport-on-admin-side') }}">
                                         List</a>
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
                    <a class="nav-link nav-dropdown-toggle" href="#"> Indices Information </a>
                    <ul class="nav-dropdown-items">

                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"> Index Facts</a>
                            <ul class="nav-dropdown-items">

                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('add-indexFacts-on-admin-side') }}">
                                                 Create</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('list-indexFacts-on-admin-side') }}">
                                                 List</a>
                                        </li>



                            </ul>
                        </li>

                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"> Index Time Series</a>
                            <ul class="nav-dropdown-items">

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('add-indexTimeSeries-on-admin-side') }}">
                                         Create</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('list-indexTimeSeries-on-admin-side') }}">
                                         List</a>
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
                    <a class="nav-link nav-dropdown-toggle" href="#"> Company Information </a>
                    <ul class="nav-dropdown-items">

                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"> Profile</a>
                            <ul class="nav-dropdown-items">

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('add-profile-on-admin-side') }}">
                                         Create</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('list-profile-on-admin-side') }}">
                                         List</a>
                                </li>



                            </ul>
                        </li>

                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"> Shareholders</a>
                            <ul class="nav-dropdown-items">

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('add-shareholders-on-admin-side') }}">
                                         Create</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('list-shareholders-on-admin-side') }}">
                                         List</a>
                                </li>
                            </ul>
                        </li>

         <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"> Address</a>
                            <ul class="nav-dropdown-items">

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('add-address-on-admin-side') }}">
                                         Create</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('list-address-on-admin-side') }}">
                                         List</a>
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