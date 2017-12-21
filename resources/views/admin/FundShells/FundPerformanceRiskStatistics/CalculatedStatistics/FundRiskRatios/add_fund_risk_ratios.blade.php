@extends('layout.header')
@section('title')
    Fund Risk Ratio - New
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item">Fund Performance & Risk Statistics</li>
        <li class="breadcrumb-item active">Calculated Statistics</li>
        <li class="breadcrumb-item active">Fund Risk Ratio - New</li>
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
            <form action="{{ route('register-fundRiskRatios-on-admin-side') }}" method="post">
                {!! csrf_field() !!}
                <div class="row">
                    <div class="col-sm-12">

                        <div class="card">
                            <div class="card-header">
                                <strong>Add Fund Risk Ratio</strong>
                                <small>Form</small>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        @if($errors->any())
                                            <div class="alert alert-info alert-dismissible " role="alert">
                                                <button class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                                                </button>
                                                {{$errors->first()}}.
                                            </div>
                                        @endif

                                        <div class="form-group">
                                            <label for="bear_beta">Bear Beta</label>
                                            <input type="text" value="{{ old('bear_beta') }}"
                                                   class="form-control" name="bear_beta"  placeholder="0.0048">
                                        </div>

                                        <div class="form-group">
                                            <label for="beta">Beta</label>
                                            <input type="text" value="{{ old('beta') }}"
                                                   class="form-control" name="beta" placeholder="0.072">
                                        </div>

                                        <div class="form-group">
                                            <label for="bull_beta">Bull Beta</label>
                                            <input type="text" value="{{ old('bull_beta') }}"
                                                   class="form-control" name="bull_beta" placeholder="0.19">
                                        </div>

                                        <div class="form-group">
                                            <label for="bull_bear_beta_ratio">Bull/Bear Beta Ratio</label>

                                            <input type="text" value="{{ old('bull_bear_beta_ratio') }}"
                                                   class="form-control" name="bull_bear_beta_ratio" placeholder="0.015">
                                        </div>

                                        <div class="form-group">
                                            <label for="calmar_ratio">Calmar Ratio</label>
                                            <input type="text" value="{{ old('calmar_ratio') }}"
                                                   class="form-control" name="calmar_ratio" placeholder="0.52">
                                        </div>

                                            <div class="form-group">
                                                <label for="correlation">Correlation</label>
                                                <input type="text" value="{{ old('correlation') }}"
                                                       class="form-control" name="correlation" placeholder="1.052">
                                            </div>

                                            <div class="form-group">
                                                <label for="covariance">Covariance</label>
                                                <input type="text" value="{{ old('covariance') }}"
                                                       class="form-control" name="covariance" placeholder="0.007">
                                            </div>

                                            <div class="form-group">
                                                <label for="downside_deviation">Downside Deviation</label>
                                                <input type="text" value="{{ old('downside_deviation') }}"
                                                       class="form-control" name="downside_deviation" placeholder="0.01">
                                            </div>

                                            <div class="form-group">
                                                <label for="information_ratio">Information Ratio</label>
                                                <input type="text" value="{{ old('information_ratio') }}"
                                                       class="form-control" name="information_ratio" placeholder="0.052">
                                            </div>

                                            <div class="form-group">
                                                <label for="israelsen_ratio">Israelsen Ratio</label>
                                                <input type="text" value="{{ old('israelsen_ratio') }}"
                                                       class="form-control" name="israelsen_ratio" placeholder="1.03">
                                            </div>


                                            <div class="form-group">
                                                <label for="alpha">Alpha</label>
                                                <input type="text" value="{{ old('alpha') }}"
                                                       class="form-control" name="alpha" placeholder="0.054">
                                            </div>

                                            <div class="form-group">
                                                <label for="kurtosis">Kurtosis</label>
                                                <input type="text" value="{{ old('kurtosis') }}"
                                                       class="form-control" name="kurtosis" placeholder="0.030">
                                            </div>

                                            <div class="form-group">
                                                <label for="synthetic_risk_reward_indicator">Synthetic Risk Reward Indicator</label>
                                                <input type="text" value="{{ old('synthetic_risk_reward_indicator') }}"
                                                       class="form-control" name="synthetic_risk_reward_indicator" placeholder="3.015">
                                            </div>

                                            <div class="form-group">
                                                <label for="maximum_drawdown">Maximum Drawdown</label>
                                                <input type="text" value="{{ old('maximum_drawdown') }}"
                                                       class="form-control" name="maximum_drawdown" placeholder="1.25">
                                            </div>

                                            <div class="form-group">
                                                <label for="maximum_drawdown_period">Maximum Drawdown Period</label>
                                                <input type="text" value="{{ old('maximum_drawdown_period') }}"
                                                       class="form-control" name="maximum_drawdown_period" placeholder="2.05">
                                            </div>


                                            <div class="form-group">
                                                <label for="maximum_gain">Maximum Gain</label>
                                                <input type="text" value="{{ old('maximum_gain') }}"
                                                       class="form-control" name="maximum_gain" placeholder="3.052">
                                            </div>

                                            <div class="form-group">
                                                <label for="maximum_loss">Maximum Loss</label>
                                                <input type="text" value="{{ old('maximum_loss') }}"
                                                       class="form-control" name="maximum_loss" placeholder="0.027">
                                            </div>

                                            <div class="form-group">
                                                <label for="negative_periods">Negative Periods</label>
                                                <input type="text" value="{{ old('negative_periods') }}"
                                                       class="form-control" name="negative_periods" placeholder="6.01">
                                            </div>


                                    </div>
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label for="omega">Omega</label>
                                            <input type="text" value="{{ old('omega') }}"
                                                   class="form-control" name="omega" placeholder="3.26">
                                        </div>


                                        <div class="form-group">
                                            <label for="positive_periods">Positive Periods</label>
                                            <input type="text" value="{{ old('positive_periods') }}"
                                                   class="form-control" name="positive_periods" placeholder="2.03">
                                        </div>


                                        <div class="form-group">
                                            <label for="recovery_period">Recovery Period</label>
                                            <input type="text" value="{{ old('recovery_period') }}"
                                                   class="form-control" name="recovery_period" placeholder="0.063">
                                        </div>

                                        <div class="form-group">
                                            <label for="return_risk">Return/Risk</label>
                                            <input type="text" value="{{ old('return_risk') }}"
                                                   class="form-control" name="return_risk" placeholder="0.10">
                                        </div>

                                        <div class="form-group">
                                            <label for="r_squared">R-Squared</label>
                                            <input type="text" value="{{ old('r_squared') }}"
                                                   class="form-control" name="r_squared" placeholder="0.015">
                                        </div>

                                        <div class="form-group">
                                            <label for="semi_deviation">Semi Deviation</label>
                                            <input type="text" value="{{ old('semi_deviation') }}"
                                                   class="form-control" name="semi_deviation" placeholder="1.25">
                                        </div>

                                        <div class="form-group">
                                            <label for="semi_variance">Semi Variance</label>
                                            <input type="text" value="{{ old('semi_variance') }}"
                                                   class="form-control" name="semi_variance" placeholder="0.05">
                                        </div>

                                        <div class="form-group">
                                            <label for="sharpe_ratio">Sharpe Ratio</label>
                                            <input type="text" value="{{ old('sharpe_ratio') }}"
                                                   class="form-control" name="sharpe_ratio" placeholder="4.25">
                                        </div>

                                        <div class="form-group">
                                            <label for="skewness">Skewness</label>
                                            <input type="text" value="{{ old('skewness') }}"
                                                   class="form-control" name="skewness" placeholder="3.05">
                                        </div>


                                        <div class="form-group">
                                            <label for="sortino_ratio">Sortino Ratio</label>
                                            <input type="text" value="{{ old('sortino_ratio') }}"
                                                   class="form-control" name="sortino_ratio" placeholder="3.052">
                                        </div>

                                        <div class="form-group">
                                            <label for="standard_deviation">Standard Deviation</label>
                                            <input type="text" value="{{ old('standard_deviation') }}"
                                                   class="form-control" name="standard_deviation" placeholder="0.027">
                                        </div>

                                        <div class="form-group">
                                            <label for="standard_error">Standard Error</label>
                                            <input type="text" value="{{ old('standard_error') }}"
                                                   class="form-control" name="standard_error" placeholder="2.01">
                                        </div>

                                        <div class="form-group">
                                            <label for="sterling_ratio">Sterling Ratio</label>
                                            <input type="text" value="{{ old('sterling_ratio') }}"
                                                   class="form-control" name="sterling_ratio" placeholder="1.26">
                                        </div>

                                        <div class="form-group">
                                            <label for="terynor_ratio">Terynor Ratio</label>
                                            <input type="text" value="{{ old('terynor_ratio') }}"
                                                   class="form-control" name="terynor_ratio" placeholder="0.03">
                                        </div>


                                        <div class="form-group">
                                            <label for="tracking_error">Tracking Error</label>
                                            <input type="text" value="{{ old('tracking_error') }}"
                                                   class="form-control" name="tracking_error" placeholder="1.063">
                                        </div>

                                        <div class="form-group">
                                            <label for="upside_deviaton">Upside Deviaton</label>
                                            <input type="text" value="{{ old('upside_deviaton') }}"
                                                   class="form-control" name="upside_deviaton" placeholder="1.50">
                                        </div>

                                        <div class="form-group">
                                            <label for="variance">Variance</label>
                                            <input type="text" value="{{ old('variance') }}"
                                                   class="form-control" name="variance" placeholder="0.015">
                                        </div>

                                        <div class="form-group">
                                            <label for="active_share">Active Share</label>
                                            <input type="text" value="{{ old('active_share') }}"
                                                   class="form-control" name="active_share" placeholder="0.24">
                                        </div>

                                        <div class="form-group">
                                            <label for="knaar_perflow_ratio">KNAAR Perflow Ratio</label>
                                            <input type="text" value="{{ old('knaar_perflow_ratio') }}"
                                                   class="form-control" name="knaar_perflow_ratio" placeholder="0.05">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Submit</button>
                                <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i> Reset</button>
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