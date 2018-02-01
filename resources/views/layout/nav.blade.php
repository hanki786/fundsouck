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
                            <a href="{{ route('fund_overview') }}"> Fund Overview </a>
                        </li>
                        <li>
                            <a href="{{ route('dashboard') }}"> Fund Attributes </a>
                        </li>
                        <li>
                            <a href="{{ route('dashboard') }}"> Historical Prices & Charts </a>
                        </li>
                        <li>
                            <a href="{{ route('dashboard') }}"> Asset Valuation & Flows </a>
                        </li>
                        <li>
                            <a href="{{ route('dashboard') }}"> Fees & Expenses </a>
                        </li>
                        <li>
                            <a href="{{ route('dashboard') }}"> Performance & Risk Analytics </a>
                        </li>
                        <li>
                            <a href="{{ route('dashboard') }}"> Fund Holdings </a>
                        </li>
                        <li>
                            <a href="{{ route('dashboard') }}"> Fund Documents </a>
                        </li>
                        <li>
                            <a href="{{ route('dashboard') }}"> Fund People </a>
                        </li>
                        <li>
                            <a href="{{ route('dashboard') }}"> Fund Service Providers </a>
                        </li>
                    </ul>

                    <li data-toggle="collapse" data-target="#products2" class="collapsed">
                        <a href="#"><i class="ti-agenda"></i> Fund Shell <span class="arrow"></span></a>
                    </li>
                    <ul class="sub-menu collapse" id="products2">
                        <ul class="nav collapse in">
                            <li data-toggle="collapse" data-target="#products3" class="collapsed">
                                <a href="#"><i class="fa fa-cubes"></i> Fund Identity & Policy <span
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
                                <a href="#"><i class="fa fa-cubes"></i> Fund Attributes <span class="arrow"></span></a>
                            </li>
                            <ul class="sub-menu collapse" id="products7">
                                <ul class="nav collapse in">
                                    <li data-toggle="collapse" data-target="#products8" class="collapsed">
                                        <a class="nav-link nav-dropdown-toggle" href="#"> Fund Attributes</a>
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
                                        <a class="nav-link nav-dropdown-toggle" href="#"> Fund Key Attributes</a>
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
                                        <a class="nav-link nav-dropdown-toggle" href="#"> Fund Asset Attributes</a>
                                    </li>
                                    <ul class="sub-menu collapse" id="products10">

                                        <li>
                                            <a href="{{ route('add-fundAssetAttributes-on-admin-side') }}"> Add</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('list-fundAssetAttributes-on-admin-side') }}"> List</a>
                                        </li>

                                    </ul>

                                    <li data-toggle="collapse" data-target="#products6" class="collapsed">
                                        <a class="nav-link nav-dropdown-toggle" href="#"> Fund Sales & Distribution</a>
                                    </li>
                                    <ul class="sub-menu collapse" id="products7">

                                        <li>
                                            <a href="{{ route('add-fundSalesDistribution-on-admin-side') }}"> Add</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('list-fundSalesDistribution-on-admin-side') }}"> List</a>
                                        </li>

                                    </ul>

                                    <li data-toggle="collapse" data-target="#products6" class="collapsed">
                                        <a class="nav-link nav-dropdown-toggle" href="#"> Fund History</a>
                                    </li>
                                    <ul class="sub-menu collapse" id="products7">

                                        <li>
                                            <a href="{{ route('add-fundHistory-on-admin-side') }}"> Add</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('list-fundHistory-on-admin-side') }}"> List</a>
                                        </li>

                                    </ul>


                                    <li data-toggle="collapse" data-target="#products6" class="collapsed">
                                        <a class="nav-link nav-dropdown-toggle" href="#"> Related Funds</a>
                                    </li>
                                    <ul class="sub-menu collapse" id="products7">

                                        <li>
                                            <a href="{{ route('add-relatedFunds-on-admin-side') }}"> Add</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('list-relatedFunds-on-admin-side') }}"> List</a>
                                        </li>

                                    </ul>

                                    <li data-toggle="collapse" data-target="#products6" class="collapsed">
                                        <a class="nav-link nav-dropdown-toggle" href="#"> Fund Flags</a>
                                    </li>
                                    <ul class="sub-menu collapse" id="products7">

                                        <li>
                                            <a href="{{ route('add-fundFlags-on-admin-side') }}"> Add</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('list-fundFlags-on-admin-side') }}"> List</a>
                                        </li>


                                    </ul>

                                    <li data-toggle="collapse" data-target="#products6" class="collapsed">
                                        <a class="nav-link nav-dropdown-toggle" href="#"> Investor Type</a>
                                    </li>
                                    <ul class="sub-menu collapse" id="products7">

                                        <li>
                                            <a href="{{ route('add-investorType-on-admin-side') }}"> Add</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('list-investorType-on-admin-side') }}"> List</a>
                                        </li>


                                    </ul>

                                    <li data-toggle="collapse" data-target="#products6" class="collapsed">
                                        <a class="nav-link nav-dropdown-toggle" href="#"> Themes Attributes</a>
                                    </li>
                                    <ul class="sub-menu collapse" id="products7">

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


                        <li data-toggle="collapse" data-target="#products6" class="collapsed">
                            <a class="nav-link nav-dropdown-toggle" href="#"> Fund Shells</a>
                            <ul class="sub-menu collapse" id="products7">
                                <li data-toggle="collapse" data-target="#products6" class="collapsed">
                                    <a class="nav-link nav-dropdown-toggle" href="#">Fund Attributes</a>
                                    <ul class="sub-menu collapse" id="products7">
                                        <li data-toggle="collapse" data-target="#products6" class="collapsed">
                                            <a class="nav-link nav-dropdown-toggle" href="#"> FA</a>
                                            <ul class="sub-menu collapse" id="products7">

                                                <li>
                                                    <a href="{{ route('add-fundAttributes-on-admin-side') }}"> Add</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('list-fundAttributes-on-admin-side') }}"> List</a>
                                                </li>

                                            </ul>
                                        </li>

                                        <li data-toggle="collapse" data-target="#products6" class="collapsed">
                                            <a class="nav-link nav-dropdown-toggle" href="#"> Fund Key Attributes</a>
                                            <ul class="sub-menu collapse" id="products7">

                                                <li>
                                                    <a href="{{ route('add-fundKeyAttributes-on-admin-side') }}">
                                                        Add</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('list-fundKeyAttributes-on-admin-side') }}">
                                                        List</a>
                                                </li>

                                            </ul>
                                        </li>

                                        <li data-toggle="collapse" data-target="#products6" class="collapsed">
                                            <a class="nav-link nav-dropdown-toggle" href="#"> Fund Asset Attributes</a>
                                            <ul class="sub-menu collapse" id="products7">

                                                <li>
                                                    <a href="{{ route('add-fundAssetAttributes-on-admin-side') }}">
                                                        Add</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('list-fundAssetAttributes-on-admin-side') }}">
                                                        List</a>
                                                </li>

                                            </ul>
                                        </li>

                                        <li data-toggle="collapse" data-target="#products6" class="collapsed">
                                            <a class="nav-link nav-dropdown-toggle" href="#"> Fund Sales &
                                                Distribution</a>
                                            <ul class="sub-menu collapse" id="products7">

                                                <li>
                                                    <a href="{{ route('add-fundSalesDistribution-on-admin-side') }}">
                                                        Add</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('list-fundSalesDistribution-on-admin-side') }}">
                                                        List</a>
                                                </li>

                                            </ul>
                                        </li>

                                        <li data-toggle="collapse" data-target="#products6" class="collapsed">
                                            <a class="nav-link nav-dropdown-toggle" href="#"> Fund History</a>
                                            <ul class="sub-menu collapse" id="products7">

                                                <li>
                                                    <a href="{{ route('add-fundHistory-on-admin-side') }}"> Add</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('list-fundHistory-on-admin-side') }}"> List</a>
                                                </li>

                                            </ul>
                                        </li>

                                        <li data-toggle="collapse" data-target="#products6" class="collapsed">
                                            <a class="nav-link nav-dropdown-toggle" href="#"> Related Funds</a>
                                            <ul class="sub-menu collapse" id="products7">

                                                <li>
                                                    <a href="{{ route('add-relatedFunds-on-admin-side') }}"> Add</a>
                                                </li>

                                                <li>
                                                    <a href="{{ route('list-relatedFunds-on-admin-side') }}"> List</a>
                                                </li>

                                            </ul>
                                        </li>

                                        <li data-toggle="collapse" data-target="#products6" class="collapsed">
                                            <a class="nav-link nav-dropdown-toggle" href="#"> Fund Flags</a>
                                            <ul class="sub-menu collapse" id="products7">

                                                <li>
                                                    <a href="{{ route('add-fundFlags-on-admin-side') }}"> Add</a>
                                                </li>

                                                <li>
                                                    <a href="{{ route('list-fundFlags-on-admin-side') }}"> List</a>
                                                </li>


                                            </ul>
                                        </li>

                                        <li data-toggle="collapse" data-target="#products6" class="collapsed">
                                            <a class="nav-link nav-dropdown-toggle" href="#"> Investor Type</a>
                                            <ul class="sub-menu collapse" id="products7">

                                                <li>
                                                    <a href="{{ route('add-investorType-on-admin-side') }}"> Add</a>
                                                </li>

                                                <li>
                                                    <a href="{{ route('list-investorType-on-admin-side') }}"> List</a>
                                                </li>


                                            </ul>
                                        </li>

                                        <li data-toggle="collapse" data-target="#products6" class="collapsed">
                                            <a class="nav-link nav-dropdown-toggle" href="#"> Themes Attributes</a>
                                            <ul class="sub-menu collapse" id="products7">

                                                <li>
                                                    <a href="{{ route('add-themesAttributes-on-admin-side') }}"> Add</a>
                                                </li>

                                                <li>
                                                    <a href="{{ route('list-themesAttributes-on-admin-side') }}">
                                                        List</a>
                                                </li>


                                            </ul>
                                        </li>

                                    </ul>
                                </li>

                                <li data-toggle="collapse" data-target="#products6" class="collapsed">
                                    <a class="nav-link nav-dropdown-toggle" href="#"> Fund Codes</a>
                                    <ul class="sub-menu collapse" id="products7">

                                        <li>
                                            <a href="{{ route('add-fundCodes-on-admin-side') }}"> Add</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('list-fundCodes-on-admin-side') }}"> List</a>
                                        </li>


                                    </ul>
                                </li>

                                <li data-toggle="collapse" data-target="#products6" class="collapsed">
                                    <a class="nav-link nav-dropdown-toggle" href="#"> Fund Classification &
                                        Benchmarks</a>
                                    <ul class="sub-menu collapse" id="products7">

                                        <li data-toggle="collapse" data-target="#products6" class="collapsed">
                                            <a class="nav-link nav-dropdown-toggle" href="#"> FC&B</a>
                                            <ul class="sub-menu collapse" id="products7">

                                                <li>
                                                    <a href="{{ route('add-fundClassificationBenchmarks-on-admin-side') }}">
                                                        Add</a>
                                                </li>
                                                <li sytle="display:none">
                                                    <a href="{{ route('list-fundClassificationBenchmarks-on-admin-side') }}">
                                                        List</a>
                                                </li>

                                            </ul>
                                        </li>


                                        <li data-toggle="collapse" data-target="#products6" class="collapsed">
                                            <a class="nav-link nav-dropdown-toggle" href="#"> Fund Classification
                                                Schemes</a>
                                            <ul class="sub-menu collapse" id="products7">

                                                <li>
                                                    <a href="{{ route('add-fundClassificationSchemes-on-admin-side') }}">
                                                        Add</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('list-fundClassificationSchemes-on-admin-side') }}">
                                                        List</a>
                                                </li>

                                            </ul>
                                        </li>
                                        <li data-toggle="collapse" data-target="#products6" class="collapsed">
                                            <a class="nav-link nav-dropdown-toggle" href="#"> Fund Benchmarks</a>
                                            <ul class="sub-menu collapse" id="products7">

                                                <li>
                                                    <a href="{{ route('add-fundBenchmarks-on-admin-side') }}"> Add</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('list-fundBenchmarks-on-admin-side') }}"> List</a>
                                                </li>

                                            </ul>
                                        </li>


                                    </ul>
                                </li>


                                <li data-toggle="collapse" data-target="#products6" class="collapsed">
                                    <a class="nav-link nav-dropdown-toggle" href="#"> Fund Regulations & Compliance</a>
                                    <ul class="sub-menu collapse" id="products7">

                                        <li data-toggle="collapse" data-target="#products6" class="collapsed">
                                            <a class="nav-link nav-dropdown-toggle" href="#"> Fund Compliance</a>
                                            <ul class="sub-menu collapse" id="products7">

                                                <li data-toggle="collapse" data-target="#products6" class="collapsed">
                                                    <a class="nav-link nav-dropdown-toggle" href="#"> Authorizations</a>
                                                    <ul class="sub-menu collapse" id="products7">

                                                        <li>
                                                            <a href="{{ route('add-authorizations-on-admin-side') }}">
                                                                Add</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('list-authorizations-on-admin-side') }}">
                                                                List</a>
                                                        </li>

                                                    </ul>
                                                </li>

                                                <li data-toggle="collapse" data-target="#products6" class="collapsed">
                                                    <a class="nav-link nav-dropdown-toggle" href="#"> Compliance
                                                        Officer</a>
                                                    <ul class="sub-menu collapse" id="products7">

                                                        <li>
                                                            <a href="{{ route('add-complianceOfficer-on-admin-side') }}">
                                                                Add</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('list-complianceOfficer-on-admin-side') }}">
                                                                List</a>
                                                        </li>

                                                    </ul>
                                                </li>


                                            </ul>
                                        </li>

                                        <li data-toggle="collapse" data-target="#products6" class="collapsed">
                                            <a class="nav-link nav-dropdown-toggle" href="#"> Fund Regulations</a>
                                            <ul class="sub-menu collapse" id="products7">

                                                <li data-toggle="collapse" data-target="#products6" class="collapsed">
                                                    <a class="nav-link nav-dropdown-toggle" href="#"> Laws and
                                                        Regulations</a>
                                                    <ul class="sub-menu collapse" id="products7">

                                                        <li>
                                                            <a href="{{ route('add-lawsAndRegulations-on-admin-side') }}">
                                                                Add</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('list-lawsAndRegulations-on-admin-side') }}">
                                                                List</a>
                                                        </li>

                                                    </ul>
                                                </li>


                                            </ul>
                                        </li>

                                    </ul>
                                </li>

                                <li data-toggle="collapse" data-target="#products6" class="collapsed">
                                    <a class="nav-link nav-dropdown-toggle" href="#"> Fund Subscription &
                                        Redemption </a>
                                    <ul class="sub-menu collapse" id="products7">

                                        <li data-toggle="collapse" data-target="#products6" class="collapsed">
                                            <a class="nav-link nav-dropdown-toggle" href="#"> Subscription</a>
                                            <ul class="sub-menu collapse" id="products7">

                                                <li>
                                                    <a href="{{ route('add-subscription-on-admin-side') }}"> Add</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('list-subscription-on-admin-side') }}"> List</a>
                                                </li>


                                            </ul>
                                        </li>

                                        <li data-toggle="collapse" data-target="#products6" class="collapsed">
                                            <a class="nav-link nav-dropdown-toggle" href="#"> Redemption</a>
                                            <ul class="sub-menu collapse" id="products7">

                                                <li>
                                                    <a href="{{ route('add-redemption-on-admin-side') }}"> Add</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('list-redemption-on-admin-side') }}"> List</a>
                                                </li>


                                            </ul>
                                        </li>

                                    </ul>
                                </li>

                                <li data-toggle="collapse" data-target="#products6" class="collapsed">
                                    <a class="nav-link nav-dropdown-toggle" href="#"> Fund Fees & Expense Details </a>
                                    <ul class="sub-menu collapse" id="products7">

                                        <li data-toggle="collapse" data-target="#products6" class="collapsed">
                                            <a class="nav-link nav-dropdown-toggle" href="#"> Charges</a>
                                            <ul class="sub-menu collapse" id="products7">

                                                <li data-toggle="collapse" data-target="#products6" class="collapsed">
                                                    <a class="nav-link nav-dropdown-toggle" href="#"> Initial</a>
                                                    <ul class="sub-menu collapse" id="products7">

                                                        <li>
                                                            <a href="{{ route('add-initial-on-admin-side') }}">
                                                                Add</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('list-initial-on-admin-side') }}">
                                                                List</a>
                                                        </li>


                                                    </ul>
                                                </li>

                                                <li data-toggle="collapse" data-target="#products6" class="collapsed">
                                                    <a class="nav-link nav-dropdown-toggle" href="#"> Redemption</a>
                                                    <ul class="sub-menu collapse" id="products7">

                                                        <li>
                                                            <a href="{{ route('add-chargesRedemption-on-admin-side') }}">
                                                                Add</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('list-chargesRedemption-on-admin-side') }}">
                                                                List</a>
                                                        </li>


                                                    </ul>
                                                </li>

                                                <li data-toggle="collapse" data-target="#products6" class="collapsed">
                                                    <a class="nav-link nav-dropdown-toggle" href="#"> Annual</a>
                                                    <ul class="sub-menu collapse" id="products7">

                                                        <li>
                                                            <a href="{{ route('add-annual-on-admin-side') }}">
                                                                Add</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('list-annual-on-admin-side') }}">
                                                                List</a>
                                                        </li>


                                                    </ul>
                                                </li>
                                                <!-- 26/10/2017 -->

                                            </ul>
                                        </li>


                                    </ul>
                                </li>

                                <li data-toggle="collapse" data-target="#products6" class="collapsed">
                                    <a class="nav-link nav-dropdown-toggle" href="#"> Fund Pricing & Valuation
                                        Information</a>
                                    <ul class="sub-menu collapse" id="products7">

                                        <li data-toggle="collapse" data-target="#products6" class="collapsed">
                                            <a class="nav-link nav-dropdown-toggle" href="#"> Fund Time Series</a>
                                            <ul class="sub-menu collapse" id="products7">

                                                <li>
                                                    <a href="{{ route('add-fundTimeSeries-on-admin-side') }}">
                                                        Add</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('list-fundTimeSeries-on-admin-side') }}">
                                                        List</a>
                                                </li>


                                            </ul>
                                        </li>

                                        <li data-toggle="collapse" data-target="#products6" class="collapsed">
                                            <a class="nav-link nav-dropdown-toggle" href="#"> Valuation Frequency</a>
                                            <ul class="sub-menu collapse" id="products7">

                                                <li>
                                                    <a href="{{ route('add-valuationFrequency-on-admin-side') }}">
                                                        Add</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('list-valuationFrequency-on-admin-side') }}">
                                                        List</a>
                                                </li>


                                            </ul>
                                        </li>

                                        <li data-toggle="collapse" data-target="#products6" class="collapsed">
                                            <a class="nav-link nav-dropdown-toggle" href="#"> Market Data</a>
                                            <ul class="sub-menu collapse" id="products7">

                                                <li>
                                                    <a href="{{ route('add-marketData-on-admin-side') }}">
                                                        Add</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('list-marketData-on-admin-side') }}">
                                                        List</a>
                                                </li>


                                            </ul>
                                        </li>

                                        <li data-toggle="collapse" data-target="#products6" class="collapsed">
                                            <a class="nav-link nav-dropdown-toggle" href="#"> Fund Income Settings</a>
                                            <ul class="sub-menu collapse" id="products7">

                                                <li>
                                                    <a href="{{ route('add-fundIncomeSettings-on-admin-side') }}">
                                                        Add</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('list-fundIncomeSettings-on-admin-side') }}">
                                                        List</a>
                                                </li>


                                            </ul>
                                        </li>


                                    </ul>
                                </li>

                                <li data-toggle="collapse" data-target="#products6" class="collapsed">
                                    <a class="nav-link nav-dropdown-toggle" href="#"> Fund Performance & Risk
                                        Statistics</a>
                                    <ul class="sub-menu collapse" id="products7">

                                        <li data-toggle="collapse" data-target="#products6" class="collapsed">
                                            <a class="nav-link nav-dropdown-toggle" href="#"> Sourced Statistics</a>
                                            <ul class="sub-menu collapse" id="products7">

                                                <li>
                                                    <a href="{{ route('add-sourcedStatistics-on-admin-side') }}">
                                                        Add</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('list-sourcedStatistics-on-admin-side') }}">
                                                        List</a>
                                                </li>


                                            </ul>
                                        </li>

                                        <li data-toggle="collapse" data-target="#products6" class="collapsed">
                                            <a class="nav-link nav-dropdown-toggle" href="#"> Calculated Statistics</a>
                                            <ul class="sub-menu collapse" id="products7">

                                                <li data-toggle="collapse" data-target="#products6" class="collapsed">
                                                    <a class="nav-link nav-dropdown-toggle" href="#"> Fund
                                                        Performance</a>
                                                    <ul class="sub-menu collapse" id="products7">
                                                        <li>
                                                            <a href="{{ route('add-fundPerformance-on-admin-side') }}">
                                                                Add</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('list-fundPerformance-on-admin-side') }}">
                                                                List</a>
                                                        </li>

                                                    </ul>
                                                </li>

                                                <li data-toggle="collapse" data-target="#products6" class="collapsed">
                                                    <a class="nav-link nav-dropdown-toggle" href="#"> Fund Risk
                                                        Ratios</a>
                                                    <ul class="sub-menu collapse" id="products7">
                                                        <li>
                                                            <a href="{{ route('add-fundRiskRatios-on-admin-side') }}">
                                                                Add</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('list-fundRiskRatios-on-admin-side') }}">
                                                                List</a>
                                                        </li>

                                                    </ul>
                                                </li>

                                            </ul>
                                        </li>


                                    </ul>
                                </li>

                                <li data-toggle="collapse" data-target="#products6" class="collapsed">
                                    <a class="nav-link nav-dropdown-toggle" href="#"> Fund Documents</a>
                                    <ul class="sub-menu collapse" id="products7">

                                        <li data-toggle="collapse" data-target="#products6" class="collapsed">
                                            <a class="nav-link nav-dropdown-toggle" href="#"> Terms And Conditions</a>
                                            <ul class="sub-menu collapse" id="products7">
                                                <li>
                                                    <a href="{{ route('add-termsAndConditions-on-admin-side') }}">
                                                        Add</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('list-termsAndConditions-on-admin-side') }}">
                                                        List</a>
                                                </li>

                                            </ul>
                                        </li>

                                        <li data-toggle="collapse" data-target="#products6" class="collapsed">
                                            <a class="nav-link nav-dropdown-toggle" href="#"> Annual Report</a>
                                            <ul class="sub-menu collapse" id="products7">
                                                <li>
                                                    <a href="{{ route('add-annualReport-on-admin-side') }}">
                                                        Add</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('list-annualReport-on-admin-side') }}">
                                                        List</a>
                                                </li>

                                            </ul>
                                        </li>

                                        <li data-toggle="collapse" data-target="#products6" class="collapsed">
                                            <a class="nav-link nav-dropdown-toggle" href="#"> Semi Annual Report</a>
                                            <ul class="sub-menu collapse" id="products7">
                                                <li>
                                                    <a href="{{ route('add-semiAnnualReport-on-admin-side') }}">
                                                        Add</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('list-semiAnnualReport-on-admin-side') }}">
                                                        List</a>
                                                </li>

                                            </ul>
                                        </li>

                                    </ul>
                                </li>


                            </ul>
                        </li>


                        <li data-toggle="collapse" data-target="#products6" class="collapsed">
                            <a class="nav-link nav-dropdown-toggle" href="#"> Index Shell</a>
                            <ul class="sub-menu collapse" id="products7">

                                <li data-toggle="collapse" data-target="#products6" class="collapsed">
                                    <a class="nav-link nav-dropdown-toggle" href="#"> Indices Information </a>
                                    <ul class="sub-menu collapse" id="products7">

                                        <li data-toggle="collapse" data-target="#products6" class="collapsed">
                                            <a class="nav-link nav-dropdown-toggle" href="#"> Index Facts</a>
                                            <ul class="sub-menu collapse" id="products7">

                                                <li>
                                                    <a href="{{ route('add-indexFacts-on-admin-side') }}">
                                                        Add</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('list-indexFacts-on-admin-side') }}">
                                                        List</a>
                                                </li>


                                            </ul>
                                        </li>

                                        <li data-toggle="collapse" data-target="#products6" class="collapsed">
                                            <a class="nav-link nav-dropdown-toggle" href="#"> Index Time Series</a>
                                            <ul class="sub-menu collapse" id="products7">

                                                <li>
                                                    <a href="{{ route('add-indexTimeSeries-on-admin-side') }}">
                                                        Add</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('list-indexTimeSeries-on-admin-side') }}">
                                                        List</a>
                                                </li>


                                            </ul>
                                        </li>


                                    </ul>
                                </li>

                            </ul>
                        </li>
                        <li data-toggle="collapse" data-target="#products6" class="collapsed">
                            <a class="nav-link nav-dropdown-toggle" href="#"> Company Shell</a>
                            <ul class="sub-menu collapse" id="products7">

                                <li data-toggle="collapse" data-target="#products6" class="collapsed">
                                    <a class="nav-link nav-dropdown-toggle" href="#"> Company Information </a>
                                    <ul class="sub-menu collapse" id="products7">

                                        <li data-toggle="collapse" data-target="#products6" class="collapsed">
                                            <a class="nav-link nav-dropdown-toggle" href="#"> Profile</a>
                                            <ul class="sub-menu collapse" id="products7">

                                                <li>
                                                    <a href="{{ route('add-profile-on-admin-side') }}">
                                                        Add</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('list-profile-on-admin-side') }}">
                                                        List</a>
                                                </li>


                                            </ul>
                                        </li>

                                        <li data-toggle="collapse" data-target="#products6" class="collapsed">
                                            <a class="nav-link nav-dropdown-toggle" href="#"> Shareholders</a>
                                            <ul class="sub-menu collapse" id="products7">

                                                <li>
                                                    <a href="{{ route('add-shareholders-on-admin-side') }}">
                                                        Add</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('list-shareholders-on-admin-side') }}">
                                                        List</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li data-toggle="collapse" data-target="#products6" class="collapsed">
                                            <a class="nav-link nav-dropdown-toggle" href="#"> Address</a>
                                            <ul class="sub-menu collapse" id="products7">

                                                <li>
                                                    <a href="{{ route('add-address-on-admin-side') }}">
                                                        Add</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('list-address-on-admin-side') }}">
                                                        List</a>
                                                </li>
                                            </ul>
                                        </li>


                                    </ul>
                                </li>

                            </ul>
                        </li>
                        <li style="display:none;">
                            <a href="/"><i class="icon-pie-chart"></i> Users</a>
                        </li>
                        <li class="divider" style="display:none;"></li>
                        <li class="nav-title" style="display:none;">
                            Extras
                        </li>
                        <li class="nav-item nav-dropdown" style="display:none;">
                            <a class="nav-link nav-dropdown-toggle" href="#"> Tools</a>
                            <ul class="sub-menu collapse" id="products7">
                                <!--<li>
                                    <a href="pages-login.html" target="_top"> Login</a>
                                </li>!-->
                            </ul>
                        </li>
                        <li class="nav-item nav-dropdown" style="display:none;">
                            <a class="nav-link nav-dropdown-toggle" href="#"> Help</a>
                            <ul class="sub-menu collapse" id="products7">
                                <!-- <li>
                                     <a href="pages-login.html" target="_top"> Login</a>
                                 </li>
                                 <li>
                                     <a href="pages-add.html" target="_top"> add</a>
                                 </li>
                                 <li>
                                     <a href="pages-404.html" target="_top"> Error 404</a>
                                 </li>
                                 <li>
                                     <a href="pages-500.html" target="_top"> Error 500</a>
                                 </li>!-->
                            </ul>
                        </li>


                    </ul>
            </div>
        </div>
    </div>
</div>
