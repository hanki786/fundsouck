@extends('layout.header')
@section('title')
    Sourced Statistics - View
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item">Fund Performance & Risk Statistics</li>
        <li class="breadcrumb-item"><a  href="{{ route('list-sourcedStatistics-on-admin-side') }}">Sourced Statistics - List</a></li>
        <li class="breadcrumb-item active">Sourced Statistics - View</li>
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
                                <h4 class="title">Sourced Statistics</h4>
                            </div>
                            <div class="content">
                                <div class="row">
                                    <div class="col-sm-6">


                                        <div class="form-group">
                                            <label for="sharpe_ratio">Sharpe Ratio</label>
                                            <input type="text" value="{{ $sourced_statistics->sharpe_ratio }}"
                                                   class="form-control border-input" name="sharpe_ratio"  placeholder="0.48" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="ytd_current_year">YTD Current Year</label>
                                            <input type="text" value="{{ $sourced_statistics->ytd_current_year }}"
                                                   class="form-control border-input" name="ytd_current_year" placeholder="7.52" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="yield_since_inception">Yield Since Inception</label>
                                            <input type="text" value="{{ $sourced_statistics->yield_since_inception }}"
                                                   class="form-control border-input" name="yield_since_inception" placeholder="2.19" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="yield_for_3_years">Yield For 3 Years</label>

                                            <input type="text" value="{{ $sourced_statistics->yield_for_3_years }}"
                                                   class="form-control border-input" name="yield_for_3_years" placeholder="100.15" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="yield_for_5_years">Yield For 5 Years</label>
                                            <input type="text" value="{{ $sourced_statistics->yield_for_5_years }}"
                                                   class="form-control border-input" name="yield_for_5_years" placeholder="6.52" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="yield_for_10_years">Yield For 10 Years</label>
                                            <input type="text" value="{{ $sourced_statistics->yield_for_10_years }}"
                                                   class="form-control border-input" name="yield_for_10_years" placeholder="15.2" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="ytd_standard_deviation">YTD Standard Deviation</label>
                                            <input type="text" value="{{ $sourced_statistics->ytd_standard_deviation }}"
                                                   class="form-control border-input" name="ytd_standard_deviation" placeholder="0.007" disabled>
                                        </div>


                                    </div>
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label for="standard_deviation_for_3_years">Standard Deviation For 3 Years</label>
                                            <input type="text" value="{{ $sourced_statistics->standard_deviation_for_3_years }}"
                                                   class="form-control border-input" name="standard_deviation_for_3_years" placeholder="10" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="standard_deviation_for_5_years">Standard Deviation For 5 Years</label>
                                            <input type="text" value="{{ $sourced_statistics->standard_deviation_for_5_years }}"
                                                   class="form-control border-input" name="standard_deviation_for_5_years" placeholder="5" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="standard_deviation_for_10_years">Standard Deviation For 10 Years</label>
                                            <input type="text" value="{{ $sourced_statistics->standard_deviation_for_10_years }}"
                                                   class="form-control border-input" name="standard_deviation_for_10_years" placeholder="10" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="borrowings">Borrowings</label>
                                            <input type="text" value="{{ $sourced_statistics->borrowings }}"
                                                   class="form-control border-input" name="borrowings" placeholder="10" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="fund_leverage_ratio">Fund Leverage Ratio</label>
                                            <input type="text" value="{{ $sourced_statistics->fund_leverage_ratio }}"
                                                   class="form-control border-input" name="fund_leverage_ratio" placeholder="10" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="duration">Duration</label>
                                            <input type="text" value="{{ $sourced_statistics->duration }}"
                                                   class="form-control border-input" name="duration" placeholder="1.5 - 11" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="last_update_date">Last Update Date</label>
                                            <input type="date" value="{{ $sourced_statistics->last_update_date }}"
                                                   class="form-control border-input" name="last_update_date" disabled>
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