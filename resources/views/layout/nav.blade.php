<style>
    .sidebar .nav li > a, .off-canvas-sidebar .nav li > a {
        margin: 2px 0px;
        padding-left: 25px;
        padding-right: 25px;
        opacity: .7;
    }

    .sidebar .nav, .off-canvas-sidebar .nav {
        margin-top: 2px;
    }
</style>
<div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="{{ route('dashboard') }}" class="simple-text">
                Fundsouk &reg; Pvt, Ltd
            </a>
        </div>


        <div class="nav-side-menu">
            <div class="menu-list">
                <ul id="menu-content" class="nav menu-content collapse in">
                    <li data-toggle="collapse" data-target="#products" class="collapsed active">
                        <a href="#"><i class="ti-user"></i> Fund Profile &copy; <span class="arrow"></span></a>
                    </li>
                    <ul class="sub-menu collapse" id="products">
                        <li>
                            <a href="{{ route('fund_overview') }}?fund_identity_id=17"> Fund Overview </a>
                        </li>
                        <li>
                            <a href="{{ route('fund_attributes') }}?fund_identity_id=17"> Fund Attributes </a>
                        </li>
                        <li>
                            <a href="{{ route('historical_prices_charts') }}?fund_identity_id=17"> Historical Prices & Charts </a>
                        </li>
                        <li>
                            <a href="{{ route('dashboard') }}?fund_identity_id=17"> Asset Valuation & Flows </a>
                        </li>
                        <li>
                            <a href="{{ route('dashboard') }}?fund_identity_id=17"> Fees & Expenses </a>
                        </li>
                        <li>
                            <a href="{{ route('dashboard') }}?fund_identity_id=17"> Performance & Risk Analytics </a>
                        </li>
                        <li>
                            <a href="{{ route('dashboard') }}?fund_identity_id=17"> Fund Holdings </a>
                        </li>
                        <li>
                            <a href="{{ route('dashboard') }}?fund_identity_id=17"> Fund Documents </a>
                        </li>
                        <li>
                            <a href="{{ route('dashboard') }}?fund_identity_id=17"> Fund People </a>
                        </li>
                        <li>
                            <a href="{{ route('dashboard') }}?fund_identity_id=17"> Fund Service Providers </a>
                        </li>
                    </ul>

                    <li data-toggle="collapse" data-target="#products2" class="collapsed">
                        <a href="#"><i class="ti-bar-chart"></i> Fund Shell <span class="arrow"></span></a>
                    </li>
                    <ul class="sub-menu collapse in" id="products2">
                        <ul class="nav collapse in">
                            <li data-toggle="collapse" data-target="#products3" class="collapsed">
                                <a href="#"><i class="ti-settings"></i> Fund Identity & Policy <span
                                            class="arrow"></span></a>
                            </li>
                            <ul class="sub-menu collapse" id="products3">
                                <ul class="nav collapse in">
                                    <li data-toggle="collapse" data-target="#products4" class="collapsed">
                                        <a href="#">Fund Identity<span class="arrow"></span></a>
                                    </li>
                                    <ul class="sub-menu collapse" id="products4">
                                        <li>
                                            <a href="{{ route('add-fundidentity-on-admin-side') }}"> New</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('list-fundidentity-on-admin-side') }}"> List</a>
                                        </li>
                                    </ul>


                                    <li data-toggle="collapse" data-target="#products5" class="collapsed">
                                        <a href="#">Fund Objective & Strategy<span class="arrow"></span></a>
                                    </li>
                                    <ul class="sub-menu collapse" id="products5">
                                        <li>
                                            <a href="{{ route('add-fundObjectiveStrategy-on-admin-side') }}"> Add</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('list-fundObjectiveStrategy-on-admin-side') }}"> List</a>
                                        </li>
                                    </ul>


                                    <li data-toggle="collapse" data-target="#products6" class="collapsed">
                                        <a href="#">Fund Identity & Policy<span class="arrow"></span></a>
                                    </li>
                                    <ul class="sub-menu collapse" id="products6">
                                        <li>
                                            <a href="{{ route('add-fundidentitypolicy-on-admin-side') }}"> Add</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('list-fundidentitypolicy-on-admin-side') }}"> List</a>
                                        </li>
                                    </ul>

                                </ul>
                            </ul>
                        </ul>

                        <ul class="nav collapse in">
                            <li data-toggle="collapse" data-target="#products7" class="collapsed">
                                <a href="#"><i class="ti-agenda"></i> Fund Attributes <span class="arrow"></span></a>
                            </li>
                            <ul class="sub-menu collapse" id="products7">
                                <ul class="nav collapse in">
                                    <li data-toggle="collapse" data-target="#products8" class="collapsed">
                                        <a href="#"> Fund Attributes</a>
                                    </li>
                                    <ul class="sub-menu collapse" id="products8">

                                        <li>
                                            <a href="{{ route('add-fundAttributes-on-admin-side') }}"> Add</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('list-fundAttributes-on-admin-side') }}"> List</a>
                                        </li>

                                    </ul>

                                    <li data-toggle="collapse" data-target="#products9" class="collapsed">
                                        <a href="#"> Fund Key Attributes</a>
                                    </li>
                                    <ul class="sub-menu collapse" id="products9">

                                        <li>
                                            <a href="{{ route('add-fundKeyAttributes-on-admin-side') }}"> Add</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('list-fundKeyAttributes-on-admin-side') }}"> List</a>
                                        </li>

                                    </ul>

                                    <li data-toggle="collapse" data-target="#products10" class="collapsed">
                                        <a href="#"> Fund Asset Attributes</a>
                                    </li>
                                    <ul class="sub-menu collapse" id="products10">

                                        <li>
                                            <a href="{{ route('add-fundAssetAttributes-on-admin-side') }}"> Add</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('list-fundAssetAttributes-on-admin-side') }}"> List</a>
                                        </li>

                                    </ul>

                                    <li data-toggle="collapse" data-target="#products11" class="collapsed">
                                        <a href="#"> Fund Sales & Distribution</a>
                                    </li>
                                    <ul class="sub-menu collapse" id="products11">

                                        <li>
                                            <a href="{{ route('add-fundSalesDistribution-on-admin-side') }}"> Add</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('list-fundSalesDistribution-on-admin-side') }}"> List</a>
                                        </li>

                                    </ul>

                                    <li data-toggle="collapse" data-target="#products12" class="collapsed">
                                        <a href="#"> Fund History</a>
                                    </li>
                                    <ul class="sub-menu collapse" id="products12">

                                        <li>
                                            <a href="{{ route('add-fundHistory-on-admin-side') }}"> Add</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('list-fundHistory-on-admin-side') }}"> List</a>
                                        </li>

                                    </ul>


                                    <li data-toggle="collapse" data-target="#products13" class="collapsed">
                                        <a href="#"> Related Funds</a>
                                    </li>
                                    <ul class="sub-menu collapse" id="products13">

                                        <li>
                                            <a href="{{ route('add-relatedFunds-on-admin-side') }}"> Add</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('list-relatedFunds-on-admin-side') }}"> List</a>
                                        </li>

                                    </ul>

                                    <li data-toggle="collapse" data-target="#products14" class="collapsed">
                                        <a href="#"> Fund Flags</a>
                                    </li>
                                    <ul class="sub-menu collapse" id="products14">

                                        <li>
                                            <a href="{{ route('add-fundFlags-on-admin-side') }}"> Add</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('list-fundFlags-on-admin-side') }}"> List</a>
                                        </li>


                                    </ul>

                                    <li data-toggle="collapse" data-target="#products15" class="collapsed">
                                        <a href="#"> Investor Type</a>
                                    </li>
                                    <ul class="sub-menu collapse" id="products15">

                                        <li>
                                            <a href="{{ route('add-investorType-on-admin-side') }}"> Add</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('list-investorType-on-admin-side') }}"> List</a>
                                        </li>


                                    </ul>

                                    <li data-toggle="collapse" data-target="#products16" class="collapsed">
                                        <a href="#"> Themes Attributes</a>
                                    </li>
                                    <ul class="sub-menu collapse" id="products16">

                                        <li>
                                            <a href="{{ route('add-themesAttributes-on-admin-side') }}"> Add</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('list-themesAttributes-on-admin-side') }}"> List</a>
                                        </li>

                                    </ul>

                                </ul>
                            </ul>
                        </ul>

                        <ul class="nav collapse in">
                            <li data-toggle="collapse" data-target="#products17" class="collapsed">
                                <a href="#"><i class="ti-shortcode"></i> Fund Codes</a>
                            </li>
                            <ul class="sub-menu collapse" id="products17">

                                <li>
                                    <a href="{{ route('add-fundCodes-on-admin-side') }}"> Add</a>
                                </li>

                                <li>
                                    <a href="{{ route('list-fundCodes-on-admin-side') }}"> List</a>
                                </li>

                            </ul>
                        </ul>

                        <ul class="nav collapse in">
                            <li data-toggle="collapse" data-target="#products18" class="collapsed">
                                <a href="#"><i class="ti-wallet"></i> Fund Classification &
                                    Benchmarks</a>
                            </li>
                            <ul class="sub-menu collapse" id="products18">

                                <li data-toggle="collapse" data-target="#products19" class="collapsed">
                                    <a href="#"> Fund Classification &
                                        Benchmarks</a>
                                </li>
                                <ul class="sub-menu collapse" id="products19">

                                    <li>
                                        <a href="{{ route('add-fundClassificationBenchmarks-on-admin-side') }}">
                                            Add</a>
                                    </li>
                                    <li sytle="display:none">
                                        <a href="{{ route('list-fundClassificationBenchmarks-on-admin-side') }}">
                                            List</a>
                                    </li>

                                </ul>


                                <li data-toggle="collapse" data-target="#products20" class="collapsed">
                                    <a href="#"> Fund Classification
                                        Schemes</a>
                                </li>
                                <ul class="sub-menu collapse" id="products20">

                                    <li>
                                        <a href="{{ route('add-fundClassificationSchemes-on-admin-side') }}">
                                            Add</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('list-fundClassificationSchemes-on-admin-side') }}">
                                            List</a>
                                    </li>

                                </ul>
                                <li data-toggle="collapse" data-target="#products21" class="collapsed">
                                    <a href="#"> Fund Benchmarks</a>
                                </li>
                                <ul class="sub-menu collapse" id="products21">

                                    <li>
                                        <a href="{{ route('add-fundBenchmarks-on-admin-side') }}"> Add</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('list-fundBenchmarks-on-admin-side') }}"> List</a>
                                    </li>

                                </ul>
                            </ul>
                        </ul>

                        <ul class="nav collapes in">
                            <li data-toggle="collapse" data-target="#products22" class="collapsed">
                                <a href="#"><i class="ti-folder"></i> Fund
                                    Regulations & Compliance</a>
                            </li>
                            <ul class="sub-menu collapse" id="products22">

                                <li data-toggle="collapse" data-target="#products23" class="collapsed">
                                    <a href="#"> Fund Compliance</a>
                                </li>
                                <ul class="sub-menu collapse" id="products23">
                                    <li data-toggle="collapse" data-target="#products24" class="collapsed">
                                        <a href="#"> Authorizations</a>
                                    </li>
                                    <ul class="sub-menu collapse" id="products24">

                                        <li>
                                            <a href="{{ route('add-authorizations-on-admin-side') }}">
                                                Add</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('list-authorizations-on-admin-side') }}">
                                                List</a>
                                        </li>

                                    </ul>

                                    <li data-toggle="collapse" data-target="#products25" class="collapsed">
                                        <a href="#"> Compliance
                                            Officer</a>
                                    </li>
                                    <ul class="sub-menu collapse" id="products25">

                                        <li>
                                            <a href="{{ route('add-complianceOfficer-on-admin-side') }}">
                                                Add</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('list-complianceOfficer-on-admin-side') }}">
                                                List</a>
                                        </li>

                                    </ul>


                                </ul>

                                <li data-toggle="collapse" data-target="#products26" class="collapsed">
                                    <a href="#"> Fund Regulations</a>
                                </li>
                                <ul class="sub-menu collapse" id="products26">

                                    <li data-toggle="collapse" data-target="#products27" class="collapsed">
                                        <a href="#"> Laws and
                                            Regulations</a>
                                    </li>
                                    <ul class="sub-menu collapse" id="products27">

                                        <li>
                                            <a href="{{ route('add-lawsAndRegulations-on-admin-side') }}">
                                                Add</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('list-lawsAndRegulations-on-admin-side') }}">
                                                List</a>
                                        </li>

                                    </ul>
                                </ul>
                            </ul>
                        </ul>

                        <ul class="nav collapes in">
                            <li data-toggle="collapse" data-target="#products28" class="collapsed">
                                <a href="#"><i class="ti-gift"></i> Fund
                                    Subscription &
                                    Redemption </a>
                            </li>
                            <ul class="sub-menu collapse" id="products28">

                                <li data-toggle="collapse" data-target="#products29" class="collapsed">
                                    <a href="#"> Subscription</a>
                                </li>
                                <ul class="sub-menu collapse" id="products29">

                                    <li>
                                        <a href="{{ route('add-subscription-on-admin-side') }}"> Add</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('list-subscription-on-admin-side') }}"> List</a>
                                    </li>


                                </ul>

                                <li data-toggle="collapse" data-target="#products30" class="collapsed">
                                    <a href="#"> Redemption</a>
                                </li>
                                <ul class="sub-menu collapse" id="products30">

                                    <li>
                                        <a href="{{ route('add-redemption-on-admin-side') }}"> Add</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('list-redemption-on-admin-side') }}"> List</a>
                                    </li>


                                </ul>

                            </ul>
                        </ul>

                        <ul class="nav collapes in">
                            <li data-toggle="collapse" data-target="#products31" class="collapsed">
                                <a href="#"><i class="ti-pencil-alt"></i> Fund Fees
                                    &
                                    Expense Details </a>
                            </li>
                            <ul class="sub-menu collapse" id="products31">
                                <li data-toggle="collapse" data-target="#products32" class="collapsed">
                                    <a href="#"> Charges</a>
                                </li>
                                <ul class="sub-menu collapse" id="products32">
                                    <li data-toggle="collapse" data-target="#products33" class="collapsed">
                                        <a href="#"> Initial</a>
                                    </li>
                                    <ul class="sub-menu collapse" id="products33">

                                        <li>
                                            <a href="{{ route('add-initial-on-admin-side') }}">
                                                Add</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('list-initial-on-admin-side') }}">
                                                List</a>
                                        </li>


                                    </ul>

                                    <li data-toggle="collapse" data-target="#products34" class="collapsed">
                                        <a href="#"> Redemption</a>
                                    </li>
                                    <ul class="sub-menu collapse" id="products34">

                                        <li>
                                            <a href="{{ route('add-chargesRedemption-on-admin-side') }}">
                                                Add</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('list-chargesRedemption-on-admin-side') }}">
                                                List</a>
                                        </li>


                                    </ul>

                                    <li data-toggle="collapse" data-target="#products35" class="collapsed">
                                        <a href="#"> Annual</a>
                                    </li>
                                    <ul class="sub-menu collapse" id="products35">

                                        <li>
                                            <a href="{{ route('add-annual-on-admin-side') }}">
                                                Add</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('list-annual-on-admin-side') }}">
                                                List</a>
                                        </li>


                                    </ul>
                                    <!-- 26/10/2017 -->

                                </ul>


                            </ul>
                        </ul>

                        <ul class="nav collapes in">
                            <li data-toggle="collapse" data-target="#products36" class="collapsed">
                                <a href="#"><i class="ti-money"></i> Fund Pricing &
                                    Valuation
                                    Information</a>
                            </li>
                            <ul class="sub-menu collapse" id="products36">

                                <li data-toggle="collapse" data-target="#products37" class="collapsed">
                                    <a href="#"> Fund Time Series</a>
                                </li>
                                <ul class="sub-menu collapse" id="products37">

                                    <li>
                                        <a href="{{ route('add-fundTimeSeries-on-admin-side') }}">
                                            Add</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('list-fundTimeSeries-on-admin-side') }}">
                                            List</a>
                                    </li>


                                </ul>

                                <li data-toggle="collapse" data-target="#products38" class="collapsed">
                                    <a href="#"> Valuation Frequency</a>
                                </li>
                                <ul class="sub-menu collapse" id="products38">

                                    <li>
                                        <a href="{{ route('add-valuationFrequency-on-admin-side') }}">
                                            Add</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('list-valuationFrequency-on-admin-side') }}">
                                            List</a>
                                    </li>


                                </ul>

                                <li data-toggle="collapse" data-target="#products39" class="collapsed">
                                    <a href="#"> Market Data</a>
                                </li>
                                <ul class="sub-menu collapse" id="products39">

                                    <li>
                                        <a href="{{ route('add-marketData-on-admin-side') }}">
                                            Add</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('list-marketData-on-admin-side') }}">
                                            List</a>
                                    </li>


                                </ul>

                                <li data-toggle="collapse" data-target="#products40" class="collapsed">
                                    <a href="#"> Fund Income Settings</a>
                                </li>
                                <ul class="sub-menu collapse" id="products40">

                                    <li>
                                        <a href="{{ route('add-fundIncomeSettings-on-admin-side') }}">
                                            Add</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('list-fundIncomeSettings-on-admin-side') }}">
                                            List</a>
                                    </li>


                                </ul>


                            </ul>
                        </ul>

                        <ul class="nav collapes in">
                            <li data-toggle="collapse" data-target="#products41" class="collapsed">
                                <a href="#"><i class="ti-pie-chart"></i> Fund
                                    Performance & Risk
                                    Statistics</a>
                            </li>
                            <ul class="sub-menu collapse" id="products41">
                                <li data-toggle="collapse" data-target="#products42" class="collapsed">
                                    <a href="#"> Sourced Statistics</a>
                                </li>
                                <ul class="sub-menu collapse" id="products42">

                                    <li>
                                        <a href="{{ route('add-sourcedStatistics-on-admin-side') }}">
                                            Add</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('list-sourcedStatistics-on-admin-side') }}">
                                            List</a>
                                    </li>


                                </ul>

                                <li data-toggle="collapse" data-target="#products43" class="collapsed">
                                    <a href="#"> Calculated Statistics</a>
                                </li>
                                <ul class="sub-menu collapse" id="products43">
                                    <li data-toggle="collapse" data-target="#products44" class="collapsed">
                                        <a href="#"> Fund
                                            Performance</a>
                                    </li>
                                    <ul class="sub-menu collapse" id="products44">
                                        <li>
                                            <a href="{{ route('add-fundPerformance-on-admin-side') }}">
                                                Add</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('list-fundPerformance-on-admin-side') }}">
                                                List</a>
                                        </li>

                                    </ul>
                                    <li data-toggle="collapse" data-target="#products45" class="collapsed">
                                        <a href="#"> Fund Risk
                                            Ratios</a>
                                    </li>
                                    <ul class="sub-menu collapse" id="products45">
                                        <li>
                                            <a href="{{ route('add-fundRiskRatios-on-admin-side') }}">
                                                Add</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('list-fundRiskRatios-on-admin-side') }}">
                                                List</a>
                                        </li>
                                    </ul>

                                </ul>
                            </ul>
                        </ul>

                        <ul class="nav collapes in">
                            <li data-toggle="collapse" data-target="#products46" class="collapsed">
                                <a href="#"><i class="ti-files"></i> Fund Documents</a>
                            </li>
                            <ul class="sub-menu collapse" id="products46">

                                <li data-toggle="collapse" data-target="#products47" class="collapsed">
                                    <a href="#"> Terms And Conditions</a>
                                </li>
                                <ul class="sub-menu collapse" id="products47">
                                    <li>
                                        <a href="{{ route('add-termsAndConditions-on-admin-side') }}">
                                            Add</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('list-termsAndConditions-on-admin-side') }}">
                                            List</a>
                                    </li>

                                </ul>

                                <li data-toggle="collapse" data-target="#products48" class="collapsed">
                                    <a href="#"> Annual Report</a>
                                </li>
                                <ul class="sub-menu collapse" id="products48">
                                    <li>
                                        <a href="{{ route('add-annualReport-on-admin-side') }}">
                                            Add</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('list-annualReport-on-admin-side') }}">
                                            List</a>
                                    </li>

                                </ul>

                                <li data-toggle="collapse" data-target="#products49" class="collapsed">
                                    <a href="#"> Semi Annual Report</a>
                                </li>
                                <ul class="sub-menu collapse" id="products49">
                                    <li>
                                        <a href="{{ route('add-semiAnnualReport-on-admin-side') }}">
                                            Add</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('list-semiAnnualReport-on-admin-side') }}">
                                            List</a>
                                    </li>

                                </ul>

                            </ul>
                        </ul>
                    </ul>


                    <li data-toggle="collapse" data-target="#products50" class="collapsed">
                        <a href="#"><i class="ti-ink-pen"></i> Index Shell</a>
                    </li>
                    <ul class="sub-menu collapse in" id="products50">
                        <ul class="nav collapse in">
                            <li data-toggle="collapse" data-target="#products51" class="collapsed">
                                <a href="#"><i class="ti-pulse"></i> Indices Information </a>
                            </li>
                            <ul class="sub-menu collapse" id="products51">

                                <li data-toggle="collapse" data-target="#products52" class="collapsed">
                                    <a href="#"> Index Facts</a>
                                </li>
                                <ul class="sub-menu collapse" id="products52">

                                    <li>
                                        <a href="{{ route('add-indexFacts-on-admin-side') }}">
                                            Add</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('list-indexFacts-on-admin-side') }}">
                                            List</a>
                                    </li>


                                </ul>

                                <li data-toggle="collapse" data-target="#products53" class="collapsed">
                                    <a href="#"> Index Time Series</a>
                                </li>
                                <ul class="sub-menu collapse" id="products53">

                                    <li>
                                        <a href="{{ route('add-indexTimeSeries-on-admin-side') }}">
                                            Add</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('list-indexTimeSeries-on-admin-side') }}">
                                            List</a>
                                    </li>

                                </ul>
                            </ul>
                        </ul>
                    </ul>

                    <li data-toggle="collapse" data-target="#products54" class="collapsed">
                        <a href="#"><i class="ti-shield"></i> Company Shell</a>
                    </li>
                    <ul class="sub-menu collapse in" id="products54">
                        <ul class="nav collapse in">
                            <li data-toggle="collapse" data-target="#products55" class="collapsed">
                                <a href="#"><i class="ti-info"></i> Company Information </a>
                            </li>
                            <ul class="sub-menu collapse" id="products55">

                                <li data-toggle="collapse" data-target="#products56" class="collapsed">
                                    <a href="#"> Profile</a>
                                </li>
                                <ul class="sub-menu collapse" id="products56">

                                    <li class="nav-item">
                                        <a href="{{ route('add-profile-on-admin-side') }}">
                                            Add</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('list-profile-on-admin-side') }}">
                                            List</a>
                                    </li>


                                </ul>

                                <li data-toggle="collapse" data-target="#products57" class="collapsed">
                                    <a href="#"> Share Holders</a>
                                </li>
                                <ul class="sub-menu collapse" id="products57">

                                    <li class="nav-item">
                                        <a href="{{ route('add-shareholders-on-admin-side') }}">
                                            Add</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('list-shareholders-on-admin-side') }}">
                                            List</a>
                                    </li>
                                </ul>

                                <li data-toggle="collapse" data-target="#products58" class="collapsed">
                                    <a href="#"> Address</a>
                                </li>
                                <ul class="sub-menu collapse" id="products58">

                                    <li class="nav-item">
                                        <a href="{{ route('add-address-on-admin-side') }}">
                                            Add</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('list-address-on-admin-side') }}">
                                            List</a>
                                    </li>
                                </ul>


                            </ul>
                        </ul>
                    </ul>
                </ul>
            </div>
        </div>
    </div>
</div>
