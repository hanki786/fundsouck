@extends('layout.header')
@section('title')
    Asset Valuation & Flows &reg;
@endsection
@section('content')

    <div class="content">
        <div class="container-fluid">
            @if($fund_identity_id)
                <div class="row">
                    <div class="col-md-7">
                        <div class="card">
                            <div class="header">
                                <h3 class="title">Fund Time Series</h3>
                                <p class="category">Following records on based on UNIQUE fund.</p>
                            </div>
                            <div class="content table-responsive table-full-width table-upgrade">
                                <table class="table">
                                    <tbody>
                                    @if($fts)
                                        <tr>
                                            <td>Fund Net Assets</td>
                                            <td>{{ $fts->fund_net_assets }}</td>
                                        </tr>
                                        <tr>
                                            <td>Asset Under Management</td>
                                            <td>{{ $fts->asset_under_management }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Initial Fund Size</td>
                                            <td>{{ $fts->initial_fund_size }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Fund Manager Investment</td>
                                            <td>{{ $fts->fund_manager_investment }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Fund Manager Investment %</td>
                                            <td>{{ $fts->fund_manager_investment_perc }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Gross Sales</td>
                                            <td>{{ $fts->gross_sales }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Gross Sales Ratio</td>
                                            <td>{{ $fts->gross_sales_ratio }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Average Net Assets</td>
                                            <td>{{ $fts->average_net_assets }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Redemption Ratio</td>
                                            <td>{{ $fts->redemption_ratio }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Redemptions</td>
                                            <td>{{ $fts->redemptions }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                No Of Units</td>
                                            <td>{{ $fts->no_of_units }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                No Of Unit Holders</td>
                                            <td>{{ $fts->no_of_unit_holders }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Unit Price</td>
                                            <td>{{ $fts->unit_price }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Last Update Date</td>
                                            <td>{{ $fts->last_update_date }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Last Valuation Date</td>
                                            <td>{{ $fts->last_valuation_date }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Valuation Basis</td>
                                            <td>{{ $fts->valuation_basis }}</td>
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
                                <h3 class="title">Valuation Frequency</h3>
                                <p class="category">Following records on based on UNIQUE fund.</p>
                            </div>
                            <div class="content table-responsive table-full-width table-upgrade">
                                <table class="table">
                                    <tbody>
                                    @if($vf)
                                        <tr>
                                            <td>Valuation Frequency</td>
                                            <td>{{ $vf->valuation_frequency }}</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Announcement Frequency</td>
                                            <td>{{ $vf->announcement_frequency }}</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                YTD Price Change</td>
                                            <td>{{ $vf->ytd_price_change }}</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Price Change Since Last Valuation</td>
                                            <td>{{ $vf->price_change_since_last_valuation }}</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Valuation Days</td>
                                            <td>{{ $vf->valuation_days }}</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Announcement Days</td>
                                            <td>{{ $vf->announcement_days }}</td>

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
                                <h3 class="title">Fund Flows</h3>
                                <p class="category">Following records on based on UNIQUE fund.</p>
                            </div>
                            <div class="content">
                                <h4>To reserve this area to display fund flows data and chart ( this will be calculated data)</h4>
                            </div>
                        </div>
                        <div class="card">
                            <div class="header">
                                <h3 class="title">Fund Net Assets</h3>
                                <p class="category">Following records on based on UNIQUE fund.</p>
                            </div>
                            <div class="content">
                                <h4>To reserve this area to display a chart of Fund Net Assets over the kast 12 months ( end of the month Data)</h4>
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