@extends('layout.header')
@section('title')
    Fund Performance &  Risk Statistics &reg;
@endsection
@section('content')

    <div class="content">
        <div class="container-fluid">
            @if($fund_identity_id)
                <div class="row">
                    <div class="col-md-5">
                        <div class="card">
                            <div class="header">
                                <h3 class="title">Sourced Statistics</h3>
                                <p class="category">Following records on based on UNIQUE fund.</p>
                            </div>
                            <div class="content table-responsive table-full-width table-upgrade">
                                <table class="table">
                                    <tbody>
                                    @if($ss)
                                        <tr>
                                            <td>Sharpe Ratio</td>
                                            <td>{{ $ss->sharpe_ratio }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                YTD Current Year</td>
                                            <td>{{ $ss->ytd_current_year }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Yield Since Inception</td>
                                            <td>{{ $ss->yield_since_inception }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Yield For 3 Years</td>
                                            <td>{{ $ss->yield_for_3_years }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Yield For 5 Years</td>
                                            <td>{{ $ss->yield_for_5_years }}</td>
                                        </tr>
                                        <tr>
                                            <td>

                                                Yield For 10 Years</td>
                                            <td>{{ $ss->yield_for_10_years }}</td>
                                        </tr>
                                        <tr>
                                            <td>

                                                Ytd Standard Deviation</td>
                                            <td>{{ $ss->ytd_standard_deviation }}</td>
                                        </tr>
                                        <tr>
                                            <td>

                                                Standard Deviation For 3 Years</td>
                                            <td>{{ $ss->standard_deviation_for_3_years }}</td>
                                        </tr>
                                        <tr>
                                            <td>

                                                Standard Deviation For 5 Years</td>
                                            <td>{{ $ss->standard_deviation_for_5_years }}</td>
                                        </tr>
                                        <tr>
                                            <td>

                                                Standard Deviation For 10 Years</td>
                                            <td>{{ $ss->standard_deviation_for_10_years }}</td>
                                        </tr>
                                        <tr>
                                            <td>

                                                Borrowings</td>
                                            <td>{{ $ss->borrowings }}</td>
                                        </tr>
                                        <tr>
                                            <td>

                                                Fund Leverage Ratio</td>
                                            <td>{{ $ss->fund_leverage_ratio }}</td>
                                        </tr>
                                        <tr>
                                            <td>

                                                Duration</td>
                                            <td>{{ $ss->duration }}</td>
                                        </tr>
                                        <tr>
                                            <td>

                                                Last Update Date</td>
                                            <td>{{ $ss->last_update_date }}</td>
                                        </tr>
                                    @else
                                        <h4 class="text-center">No record found</h4>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="card">
                            <div class="header">
                                <h3 class="title">Fund Performance (Calculated Statistics)</h3>
                                <p class="category">Following records on based on UNIQUE fund.</p>
                            </div>
                            <div class="content table-responsive table-full-width table-upgrade">
                                <table class="table">
                                    <tbody>
                                    @if($fp)
                                        <tr>
                                            <td>Annual Compound Return</td>
                                            <td>{{ $fp->annual_compound_return }}</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Annualised Distribution Yield</td>
                                            <td>{{ $fp->annualised_distribution_yield }}</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Indexed Performance</td>
                                            <td>{{ $fp->indexed_performance }}</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Percentage Growth</td>
                                            <td>{{ $fp->percentage_growth }}</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Average Gain</td>
                                            <td>{{ $fp->average_gain }}</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Average Loss</td>
                                            <td>{{ $fp->average_loss }}</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Average Return</td>
                                            <td>{{ $fp->average_return }}</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Relative Average Return</td>
                                            <td>{{ $fp->relative_average_return }}</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Relative Performance</td>
                                            <td>{{ $fp->relative_performance }}</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Performance</td>
                                            <td>{{ $fp->performance }}</td>

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
                                <h3 class="title">Fund Risk Ratios (Calculated Statistics)</h3>
                                <p class="category">Following records on based on UNIQUE fund.</p>
                            </div>
                            <div class="content table-responsive table-full-width table-upgrade">
                                <table class="table">
                                    <tbody>
                                    @if($frr)
                                        <tr>
                                            <td>Bear Beta</td>
                                            <td>{{ $frr->bear_beta }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Beta</td>
                                            <td>{{ $frr->beta }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Bull Beta</td>
                                            <td>{{ $frr->bull_beta }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Bull/Bear Beta Ratio</td>
                                            <td>{{ $frr->bull_bear_beta_ratio }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Calmar Ratio</td>
                                            <td>{{ $frr->calmar_ratio }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Correlation</td>
                                            <td>{{ $frr->correlation }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Covariance</td>
                                            <td>{{ $frr->covariance }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Downside Deviation</td>
                                            <td>{{ $frr->downside_deviation }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Information Ratio</td>
                                            <td>{{ $frr->information_ratio }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Israelsen Ratio</td>
                                            <td>{{ $frr->israelsen_ratio }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Alpha</td>
                                            <td>{{ $frr->alpha }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Kurtosis</td>
                                            <td>{{ $frr->kurtosis }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Synthetic Risk Reward Indicator</td>
                                            <td>{{ $frr->synthetic_risk_reward_indicator }}</td>
                                        </tr>
                                        <tr>
                                            <td>Maximum Drawdown</td>
                                            <td>{{ $frr->maximum_drawdown }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Maximum Drawdown Period</td>
                                            <td>{{ $frr->maximum_drawdown_period }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Maximum Gain</td>
                                            <td>{{ $frr->maximum_gain }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Maximum Loss</td>
                                            <td>{{ $frr->maximum_loss }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Negative Periods</td>
                                            <td>{{ $frr->negative_periods }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Omega</td>
                                            <td>{{ $frr->omega }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Positive Periods</td>
                                            <td>{{ $frr->positive_periods }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Recovery Period</td>
                                            <td>{{ $frr->recovery_period }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Return/Risk</td>
                                            <td>{{ $frr->return_risk }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                R-Squared</td>
                                            <td>{{ $frr->r_squared }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Semi Deviation</td>
                                            <td>{{ $frr->semi_deviation }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Semi Variance</td>
                                            <td>{{ $frr->semi_variance }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Sharpe Ratio</td>
                                            <td>{{ $frr->sharpe_ratio }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Skewness</td>
                                            <td>{{ $frr->skewness }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Sortino Ratio</td>
                                            <td>{{ $frr->sortino_ratio }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Standard Deviation</td>
                                            <td>{{ $frr->standard_deviation }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Standard Error</td>
                                            <td>{{ $frr->standard_error }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Sterling Ratio</td>
                                            <td>{{ $frr->sterling_ratio }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Terynor Ratio</td>
                                            <td>{{ $frr->terynor_ratio }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Tracking Error
                                            </td>
                                            <td>{{ $frr->tracking_error }}</td>
                                        </tr>
                                        <tr>
                                            <td>Upside Deviaton</td>
                                            <td>{{ $frr->upside_deviaton }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Variance</td>
                                            <td>{{ $frr->variance }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Active Share</td>
                                            <td>{{ $frr->active_share }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                KNAAR Perflow Ratio</td>
                                            <td>{{ $frr->knaar_perflow_ratio }}</td>
                                        </tr>
                                    @else
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