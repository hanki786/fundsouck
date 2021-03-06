@extends('layout.header')
@section('title')
    Fund Risk Ratio - View
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item">Fund Performance & Risk Statistics</li>
        <li class="breadcrumb-item active">Calculated Statistics</li>
        <li class="breadcrumb-item"><a  href="{{ route('list-fundRiskRatios-on-admin-side') }}">Fund Risk Ratio - List</a></li>
        <li class="breadcrumb-item active">Fund Risk Ratio - View</li>
        <!-- Breadcrumb Menu-->
        <li class="breadcrumb-menu d-md-down-none">
            <div class="btn-group" role="group" aria-label="Button group">
                <a class="btn" href="#"><i class="icon-speech"></i></a>
                <a class="btn" href="{{ route('dashboard') }}"><i class="icon-graph"></i> &nbsp;Dashboard</a>
                <a class="btn" href="#"><i class="icon-settings"></i> &nbsp;Settings</a>
            </div>
        </li>
    </ol>
@endsection
@section('content')
    <!-- Main content -->

    <div class="container-fluid">
        <div class="animated fadeIn">
            <form action="" method="post">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="card">
                            <div class="header">
                                <h4 class="title">Fund Risk Ratio</h4>
                            </div>
                            <div class="content">
                                <div class="row">
                                    <div class="col-sm-6">

                                        <div class="form-group">
                                            <label for="bear_beta">Bear Beta</label>
                                            <input type="text" value="{{ $fund_risk_ratio->bear_beta }}"
                                                   class="form-control border-input" name="bear_beta"  placeholder="0.0048" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="beta">Beta</label>
                                            <input type="text" value="{{ $fund_risk_ratio->beta }}"
                                                   class="form-control border-input" name="beta" placeholder="0.072" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="bull_beta">Bull Beta</label>
                                            <input type="text" value="{{ $fund_risk_ratio->bull_beta }}"
                                                   class="form-control border-input" name="bull_beta" placeholder="0.19" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="bull_bear_beta_ratio">Bull/Bear Beta Ratio</label>

                                            <input type="text" value="{{ $fund_risk_ratio->bull_bear_beta_ratio }}"
                                                   class="form-control border-input" name="bull_bear_beta_ratio" placeholder="0.015" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="calmar_ratio">Calmar Ratio</label>
                                            <input type="text" value="{{ $fund_risk_ratio->calmar_ratio }}"
                                                   class="form-control border-input" name="calmar_ratio" placeholder="0.52" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="correlation">Correlation</label>
                                            <input type="text" value="{{ $fund_risk_ratio->correlation }}"
                                                   class="form-control border-input" name="correlation" placeholder="1.052" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="covariance">Covariance</label>
                                            <input type="text" value="{{ $fund_risk_ratio->covariance }}"
                                                   class="form-control border-input" name="covariance" placeholder="0.007" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="downside_deviation">Downside Deviation</label>
                                            <input type="text" value="{{ $fund_risk_ratio->downside_deviation }}"
                                                   class="form-control border-input" name="downside_deviation" placeholder="0.01" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="information_ratio">Information Ratio</label>
                                            <input type="text" value="{{ $fund_risk_ratio->information_ratio }}"
                                                   class="form-control border-input" name="information_ratio" placeholder="0.052" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="israelsen_ratio">Israelsen Ratio</label>
                                            <input type="text" value="{{ $fund_risk_ratio->israelsen_ratio }}"
                                                   class="form-control border-input" name="israelsen_ratio" placeholder="1.03" disabled>
                                        </div>


                                        <div class="form-group">
                                            <label for="alpha">Alpha</label>
                                            <input type="text" value="{{ $fund_risk_ratio->alpha }}"
                                                   class="form-control border-input" name="alpha" placeholder="0.054" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="kurtosis">Kurtosis</label>
                                            <input type="text" value="{{ $fund_risk_ratio->kurtosis }}"
                                                   class="form-control border-input" name="kurtosis" placeholder="0.030" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="synthetic_risk_reward_indicator">Synthetic Risk Reward Indicator</label>
                                            <input type="text" value="{{ $fund_risk_ratio->synthetic_risk_reward_indicator }}"
                                                   class="form-control border-input" name="synthetic_risk_reward_indicator" placeholder="3.015"
                                                   disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="maximum_drawdown">Maximum Drawdown</label>
                                            <input type="text" value="{{ $fund_risk_ratio->maximum_drawdown }}"
                                                   class="form-control border-input" name="maximum_drawdown" placeholder="1.25" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="maximum_drawdown_period">Maximum Drawdown Period</label>
                                            <input type="text" value="{{ $fund_risk_ratio->maximum_drawdown_period }}"
                                                   class="form-control border-input" name="maximum_drawdown_period" placeholder="2.05" disabled>
                                        </div>


                                        <div class="form-group">
                                            <label for="maximum_gain">Maximum Gain</label>
                                            <input type="text" value="{{ $fund_risk_ratio->maximum_gain }}"
                                                   class="form-control border-input" name="maximum_gain" placeholder="3.052" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="maximum_loss">Maximum Loss</label>
                                            <input type="text" value="{{ $fund_risk_ratio->maximum_loss }}"
                                                   class="form-control border-input" name="maximum_loss" placeholder="0.027" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="negative_periods">Negative Periods</label>
                                            <input type="text" value="{{ $fund_risk_ratio->negative_periods }}"
                                                   class="form-control border-input" name="negative_periods" placeholder="6.01" disabled>
                                        </div>


                                    </div>
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label for="omega">Omega</label>
                                            <input type="text" value="{{ $fund_risk_ratio->omega }}"
                                                   class="form-control border-input" name="omega" placeholder="3.26" disabled>
                                        </div>


                                        <div class="form-group">
                                            <label for="positive_periods">Positive Periods</label>
                                            <input type="text" value="{{ $fund_risk_ratio->positive_periods }}"
                                                   class="form-control border-input" name="positive_periods" placeholder="2.03" disabled>
                                        </div>


                                        <div class="form-group">
                                            <label for="recovery_period">Recovery Period</label>
                                            <input type="text" value="{{ $fund_risk_ratio->recovery_period }}"
                                                   class="form-control border-input" name="recovery_period" placeholder="0.063" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="return_risk">Return/Risk</label>
                                            <input type="text" value="{{ $fund_risk_ratio->return_risk }}"
                                                   class="form-control border-input" name="return_risk" placeholder="0.10" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="r_squared">R-Squared</label>
                                            <input type="text" value="{{ $fund_risk_ratio->r_squared }}"
                                                   class="form-control border-input" name="r_squared" placeholder="0.015" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="semi_deviation">Semi Deviation</label>
                                            <input type="text" value="{{ $fund_risk_ratio->semi_deviation }}"
                                                   class="form-control border-input" name="semi_deviation" placeholder="1.25" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="semi_variance">Semi Variance</label>
                                            <input type="text" value="{{ $fund_risk_ratio->semi_variance }}"
                                                   class="form-control border-input" name="semi_variance" placeholder="0.05" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="sharpe_ratio">Sharpe Ratio</label>
                                            <input type="text" value="{{ $fund_risk_ratio->sharpe_ratio }}"
                                                   class="form-control border-input" name="sharpe_ratio" placeholder="4.25" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="skewness">Skewness</label>
                                            <input type="text" value="{{ $fund_risk_ratio->skewness }}"
                                                   class="form-control border-input" name="skewness" placeholder="3.05" disabled>
                                        </div>


                                        <div class="form-group">
                                            <label for="sortino_ratio">Sortino Ratio</label>
                                            <input type="text" value="{{ $fund_risk_ratio->sortino_ratio }}"
                                                   class="form-control border-input" name="sortino_ratio" placeholder="3.052" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="standard_deviation">Standard Deviation</label>
                                            <input type="text" value="{{ $fund_risk_ratio->standard_deviation }}"
                                                   class="form-control border-input" name="standard_deviation" placeholder="0.027" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="standard_error">Standard Error</label>
                                            <input type="text" value="{{ $fund_risk_ratio->standard_error }}"
                                                   class="form-control border-input" name="standard_error" placeholder="2.01" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="sterling_ratio">Sterling Ratio</label>
                                            <input type="text" value="{{ $fund_risk_ratio->sterling_ratio }}"
                                                   class="form-control border-input" name="sterling_ratio" placeholder="1.26" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="terynor_ratio">Terynor Ratio</label>
                                            <input type="text" value="{{ $fund_risk_ratio->terynor_ratio }}"
                                                   class="form-control border-input" name="terynor_ratio" placeholder="0.03" disabled>
                                        </div>


                                        <div class="form-group">
                                            <label for="tracking_error">Tracking Error</label>
                                            <input type="text" value="{{ $fund_risk_ratio->tracking_error }}"
                                                   class="form-control border-input" name="tracking_error" placeholder="1.063" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="upside_deviaton">Upside Deviaton</label>
                                            <input type="text" value="{{ $fund_risk_ratio->upside_deviaton }}"
                                                   class="form-control border-input" name="upside_deviaton" placeholder="1.50" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="variance">Variance</label>
                                            <input type="text" value="{{ $fund_risk_ratio->variance }}"
                                                   class="form-control border-input" name="variance" placeholder="0.015" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="active_share">Active Share</label>
                                            <input type="text" value="{{ $fund_risk_ratio->active_share }}"
                                                   class="form-control border-input" name="active_share" placeholder="0.24" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="knaar_perflow_ratio">KNAAR Perflow Ratio</label>
                                            <input type="text" value="{{ $fund_risk_ratio->knaar_perflow_ratio }}"
                                                   class="form-control border-input" name="knaar_perflow_ratio" placeholder="0.05" disabled>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                    <!--/.col-->

                </div>
            </form>
        </div>
    </div>
    <!-- /.conainer-fluid -->
@endsection