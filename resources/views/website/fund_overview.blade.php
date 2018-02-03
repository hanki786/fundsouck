@extends('layout.header')
@section('title')
    Fund Overview &reg;
@endsection
@section('content')

    <div class="content">
        <div class="container-fluid">
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
@endsection