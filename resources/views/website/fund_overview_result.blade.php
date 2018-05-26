@extends('layout.header')
@section('title')
    Fund Overview &reg;
@endsection
@section('content')
    <link href="{{ asset('website/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('website/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('website/css/flexslider.css') }}" type="text/css" media="screen" property="" />
    <!-- js -->
    <script type="text/javascript" src="{{ asset('website/js/jquery-2.1.4.min.js') }}"></script>
    <!-- //js -->
    <!-- font-awesome icons -->
    <link href="{{ asset('website/css/font-awesome.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!-- //font-awesome icons -->
    <link href="//fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <!-- start-smoth-scrolling -->

    <!-- start-smoth-scrolling -->

    <style>
        .no-display{ display:none !important; }
        .agile-header{
            padding: 10px 10px;
            background-color: #049ddc;
            color: #7b7b7d;
        }
        .agileits-contact-info ul li span, .agileits-contact-info ul li a, .agileits-contact-info ul li, .w3_agileits_social_media ul li a{
            color: black;
        }
        nav.navbar.navbar-default{ padding: 10px 10px;}
        .banner {
            background-color: #049ddc;
            /* background: url(../images/bannerO.jpg) no-repeat 0px 0px; */
            background: #049ddc;
            background-size: cover;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            -ms-background-size: cover;
            min-height: 130px;
        }
        .CurverContainer {
            background: url('http://fundata.com/images/BGCurveContainerDark.png') repeat 0 0;
            border: 1px solid #ccc;
            background-color: #fff;
            margin-bottom: 10px;
            font-size: 13px;
            display: block;
            width: 100%;
        }
        table.HomePageList {
            border-collapse: collapse;
            width: 100%;
        }
        table.HomePageList ul {
            margin-left: 20px;
        }
        table.HomePageList li {
            padding-bottom: 10px;
            padding-right: 10px;
            list-style: none;
            list-style-image: url(../images/BulletBlue.png);
        }
        table.HomePageList a {
            text-decoration: none;
            font-size: 14px;
        }
        input, button, select, textarea {
            color: black;
        }
    </style>
    <style>
        a {
            color: #ffffff;
            text-decoration: none;
        }
    </style>
    <div class="banner">
        <div class="container" style="padding:0;">
            @include('website.nav')
            <h3 ><a style="color:white" href="/">Fundsouk</a></h3>
            <h4 style="color:white">Search Result...</h4>
            <ul id="menu-content" class="nav menu-content collapse in">
                <li data-toggle="collapse" data-target="#products" class="collapsed active">
                    <a href="#"><i class="ti-user"></i> Fund Profile &copy; <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="products">
                    <li>
                        <a href="#" onclick="return alert('Not login yet! you cannot access this page')"> Fund Attributes </a>
                    </li>
                    <li>
                        <a  href="#" onclick="return alert('Not login yet! you cannot access this page')"> Historical Prices & Charts </a>
                    </li>
                    <li>
                        <a  href="#" onclick="return alert('Not login yet! you cannot access this page')"> Asset Valuation & Flows </a>
                    </li>
                    <li>
                        <a  href="#" onclick="return alert('Not login yet! you cannot access this page')"> Fees & Expenses </a>
                    </li>
                    <li>
                        <a  href="#" onclick="return alert('Not login yet! you cannot access this page')"> Performance & Risk Analytics </a>
                    </li>
                    <li>
                        <a  href="#" onclick="return alert('Not login yet! you cannot access this page')"> Fund Holdings </a>
                    </li>
                    <li>
                        <a  href="#" onclick="return alert('Not login yet! you cannot access this page')"> Fund Documents </a>
                    </li>
                    <li>
                        <a  href="#" onclick="return alert('Not login yet! you cannot access this page')"> Fund People </a>
                    </li>
                    <li>
                        <a  href="#" onclick="return alert('Not login yet! you cannot access this page')"> Fund Service Providers </a>
                    </li>
                    <li>
                        <a  href="#" onclick="return alert('Not login yet! you cannot access this page')"> Fund Compliance & Regulations</a>
                    </li>
                </ul>
            </ul>
        </div>
    </div>


    <div class="content">
        <div class="container">
            @if($fund_identity_id)
                <div class="row">
                    <div class="col-md-7">
                        <div class="card">
                            <div class="header">
                                <h3 class="title">Fund Identity</h3>
                                <p class="category">Following records on based on UNIQUE fund.</p>
                            </div>
                            <div class="content table-responsive table-full-width table-upgrade">
                                <table class="table">

                                    <tbody>
                                    @if($fi)
                                        <tr>
                                            <td>Fund Name</td>
                                            <td>{{ $fi->fund_name }}</td>

                                        </tr>
                                        <tr>
                                            <td>Fund Short Name</td>
                                            <td>{{ $fi->fund_short_name }}</td>

                                        </tr>
                                    @else
                                        <h4 class="text-center">No record found</h4>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card">
                            <div class="header">
                                <h3 class="title">Fund Objective & Strategy</h3>
                                <p class="category">Following records on based on UNIQUE fund.</p>
                            </div>
                            <div class="content table-responsive table-full-width table-upgrade">
                                <table class="table">

                                    <tbody>
                                    @if($fos)
                                        <tr>
                                            <td>Recommended Investment Horizon</td>
                                            <td>{{ $fos->recommended_investment_horizon }}</td>

                                        </tr>
                                        <tr>
                                            <td>Risk Profile</td>
                                            <td>{{ $fos->risk_profile }}</td>

                                        </tr>
                                        <tr>
                                            <td>Types Of Risk</td>
                                            <td>{{ $fos->types_of_risk }}</td>

                                        </tr>
                                        <tr>
                                            <td>Short Objective</td>
                                            <td> {{ $fos->short_objective }}</td>

                                        </tr>
                                        <tr>
                                            <td>Detailed Objective</td>
                                            <td>{{ $fos->detailed_objective }}</td>

                                        </tr>
                                        <tr>
                                            <td>Investment Strategy</td>
                                            <td>{{ $fos->investment_strategy }}</td>

                                        </tr>
                                    @else
                                        <h4 class="text-center">No record found</h4>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card">
                            <div class="header">
                                <h3 class="title">Fund Asset Attributes</h3>
                                <p class="category">Following records on based on UNIQUE fund.</p>
                            </div>
                            <div class="content table-responsive table-full-width table-upgrade">
                                <table class="table">

                                    <tbody>
                                    @if($faa)
                                        <tr>
                                            <td>Status</td>
                                            <td>{{ $faa->status }}</td>

                                        </tr>
                                        <tr>
                                            <td>Asset Class</td>
                                            <td>{{ $faa->asset_class }}</td>

                                        </tr>
                                        <tr>
                                            <td>Asset Universe</td>
                                            <td>{{ $faa->asset_universe }}</td>

                                        </tr>
                                        <tr>
                                            <td>Domicile</td>
                                            <td>{{ $faa->domicile }}</td>

                                        </tr>
                                        <tr>
                                            <td>Geo Focus</td>
                                            <td>{{ $faa->geo_focus }}</td>

                                        </tr>
                                        <tr>
                                            <td>Legal Form</td>
                                            <td>{{ $faa->legal_form }}</td>

                                        </tr>
                                        <tr>
                                            <td>Stock Exchange Name</td>
                                            <td>{{ $faa->stock_exchange_name }}</td>

                                        </tr>
                                    @else
                                        <h4 class="text-center">No record found</h4>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card">
                            <div class="header">
                                <h3 class="title">Fund Classification & Benchmarks</h3>
                                <p class="category">Following records on based on UNIQUE fund.</p>
                            </div>
                            <div class="content table-responsive table-full-width table-upgrade">
                                <table class="table">

                                    <tbody>
                                    @if($fcb)
                                        <tr>
                                            <td>FundSouk Classification</td>
                                            <td>{{ $fcb->fund_souk_classification }}</td>

                                        </tr>
                                        <tr>
                                            <td>Tadawul Fund Category</td>
                                            <td>{{ $fcb->tadawul_fund_category }}</td>

                                        </tr>
                                        <tr>
                                            <td>AMMC Classification</td>
                                            <td>{{ $fcb->ammc_classification }}</td>

                                        </tr>
                                        <tr>
                                            <td>CMF Classification</td>
                                            <td>{{ $fcb->cmf_classification }}</td>

                                        </tr>
                                        <tr>
                                            <td>CMB Classification</td>
                                            <td>{{ $fcb->cmb_classification }}</td>

                                        </tr>
                                    @endif
                                    @if($fcb1)
                                        <tr>
                                            <td>Fund Manager Benchmark</td>
                                            <td>{{ $fcb1->fund_manager_benchmark }}</td>

                                        </tr>
                                        <tr>
                                            <td>FundSouk Benchmark</td>
                                            <td>{{ $fcb1->fund_souk_benchmark }}</td>

                                        </tr>
                                        <tr>
                                            <td>Risk Free Rate</td>
                                            <td>{{ $fcb1->risk_free_rate }}</td>

                                        </tr>
                                    @else
                                        <h4 class="text-center">No record found</h4>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="card">
                            <div class="header">
                                <h3 class="title">Latest Price</h3>
                                <p class="category">Following records on based on UNIQUE fund.</p>
                            </div>
                            <div class="content">
                                <h>To Display the Fund and Benchmark chart when data is available</h>
                                <div id="chartActivity" class="ct-chart"></div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="header">
                                <h3 class="title">YTD Performance</h3>
                                <p class="category">Following records on based on UNIQUE fund.</p>
                            </div>
                            <div class="content">
                                <h>To Display the Fund and Benchmark chart when data is available</h>
                            </div>
                        </div>
                        <div class="card">
                            <div class="header">
                                <h3 class="title">Fund Key Attributes</h3>
                                <p class="category">Following records on based on UNIQUE fund.</p>
                            </div>
                            <div class="content table-responsive table-full-width table-upgrade">
                                <table class="table">

                                    <tbody>
                                    @if($fka)
                                    <tr>
                                        <td>Fund Currency</td>
                                        <td>{{ $fka->fund_currency }}</td>

                                    </tr>
                                    <tr>
                                        <td>Inception Date</td>
                                        <td>{{ $fka->inception_date }}</td>

                                    </tr>
                                    <tr>
                                        <td>Inception Price Type</td>
                                        <td>{{ $fka->inception_price_type }}</td>

                                    </tr>
                                    <tr>
                                        <td>Inception Price</td>
                                        <td>{{ $fka->inception_price }}</td>

                                    </tr>
                                    <tr>
                                        <td>FY Start Date</td>
                                        <td>{{ $fka->fy_start_date }}</td>

                                    </tr>
                                    <tr>
                                        <td>FY End Date</td>
                                        <td>{{ $fka->fy_end_date }}</td>

                                    </tr>@else
                                        <h4 class="text-center">No record found</h4>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card">
                            <div class="header">
                                <h3 class="title">Fund Sales & Distribution</h3>
                                <p class="category">Following records on based on UNIQUE fund.</p>
                            </div>
                            <div class="content table-responsive table-full-width table-upgrade">
                                <table class="table">

                                    <tbody>
                                    @if($fsd)
                                    <tr>
                                        <td>Countries Of Distribution</td>
                                        <td>{{ $fsd->countries_of_distribution }}</td>

                                    </tr>@else
                                        <h4 class="text-center">No record found</h4>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card">
                            <div class="header">
                                <h3 class="title">Subscription</h3>
                                <p class="category">Following records on based on UNIQUE fund.</p>
                            </div>
                            <div class="content table-responsive table-full-width table-upgrade">
                                <table class="table">

                                    <tbody>
                                    @if($s)
                                        <tr>
                                            <td>Minimum Initial</td>
                                            <td>{{ $s->minimum_initial }}</td>

                                        </tr>
                                        <tr>
                                            <td>Additional</td>
                                            <td>{{ $s->additional }}</td>

                                        </tr>
                                        <tr>
                                            <td>Minimum Balance</td>
                                            <td>{{ $s->minimum_balance }}</td>

                                        </tr>
                                        <tr>
                                            <td>Currency</td>
                                            <td>{{ $s->currency }}</td>

                                        </tr>
                                        <tr>
                                            <td>Frequency</td>
                                            <td>{{ $s->frequency }}</td>

                                        </tr>@else
                                        <h4 class="text-center">No record found</h4>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card">
                            <div class="header">
                                <h3 class="title">Redemption</h3>
                                <p class="category">Following records on based on UNIQUE fund.</p>
                            </div>
                            <div class="content table-responsive table-full-width table-upgrade">
                                <table class="table">

                                    <tbody>
                                    @if($r)
                                        <tr>
                                            <td>Minimum</td>
                                            <td>{{ $r->minimum }}</td>

                                        </tr>
                                        <tr>
                                            <td>Frequency</td>
                                            <td>{{ $r->frequency }}</td>

                                        </tr>
                                        <tr>
                                            <td>Payment Period</td>
                                            <td>{{ $r->payment_period }}</td>

                                        </tr>
                                        <tr>
                                            <td>Cut-Off Time</td>
                                            <td>{{ $r->cut_off_time }}</td>

                                        </tr>
                                        <tr>
                                            <td>Business Days</td>
                                            <td>{{ $r->business_days }}</td>

                                        </tr>@else
                                        <h4 class="text-center">No record found</h4>
                                    @endif

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            @else
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center">Sorry! you must choose fund identity to visit this page.</h3>
                    </div>
                </div>
            @endif
        </div>
    </div>
    <!-- Main content -->
    <!-- /.container-fluid -->

        <script type="text/javascript" src="{{ asset('website/js/move-top.js') }}"></script>
        <script type="text/javascript" src="{{ asset('website/js/easing.js') }}"></script>
        <script type="text/javascript" src="{{ asset('website/js/chartist.min.js') }}"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
        <script type="text/javascript" src="{{ asset('website/js/paper-dashboard.js') }}"></script>
        <script type="text/javascript" src="{{ asset('website/js/demo.js') }}"></script>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event){
                    event.preventDefault();
                    $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                });
            });
        </script>
        <script type="text/javascript">
            $(document).ready(function(){

                var data = {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                    series: [
                        [542, 543, 520, 680, 653, 753, 326, 434, 568, 610, 756, 895],
                        [230, 293, 380, 480, 503, 553, 600, 664, 698, 710, 736, 795]
                    ]
                };

                var options = {
                    seriesBarDistance: 10,
                    axisX: {
                        showGrid: true
                    },
                    height: "245px"
                };

                var responsiveOptions = [
                    ['screen and (max-width: 640px)', {
                        seriesBarDistance: 5,
                        axisX: {
                            labelInterpolationFnc: function (value) {
                                return value[0];
                            }
                        }
                    }]
                ];

                Chartist.Line('#chartActivity', data, options, responsiveOptions);


            });
        </script>
@endsection