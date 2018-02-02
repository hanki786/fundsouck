@extends('layout.header')
@section('title')
    Sourced Statistics - New
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item">Fund Performance & Risk Statistics</li>
        <li class="breadcrumb-item active">Sourced Statistics - New</li>
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
            <form action="{{ route('register-sourcedStatistics-on-admin-side') }}" method="post">
                {!! csrf_field() !!}
                <div class="row">
                    <div class="col-sm-12">

                        <div class="card">
                            <div class="header">
                                <h4 class="title">Add Sourced Statistics</h4>
                                <p class="category">Please fill all the information</p>
                            </div>
                            <div class="content">
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
                                            <label for="sharpe_ratio">Sharpe Ratio</label>
                                            <input type="text" value="{{ old('sharpe_ratio') }}"
                                                   class="form-control border-input" name="sharpe_ratio"  placeholder="0.48">
                                        </div>

                                        <div class="form-group">
                                            <label for="ytd_current_year">YTD Current Year</label>
                                            <input type="text" value="{{ old('ytd_current_year') }}"
                                                   class="form-control border-input" name="ytd_current_year" placeholder="7.52">
                                        </div>

                                        <div class="form-group">
                                            <label for="yield_since_inception">Yield Since Inception</label>
                                            <input type="text" value="{{ old('yield_since_inception') }}"
                                                   class="form-control border-input" name="yield_since_inception" placeholder="2.19">
                                        </div>

                                        <div class="form-group">
                                            <label for="yield_for_3_years">Yield For 3 Years</label>

                                            <input type="text" value="{{ old('yield_for_3_years') }}"
                                                   class="form-control border-input" name="yield_for_3_years" placeholder="100.15">
                                        </div>

                                        <div class="form-group">
                                            <label for="yield_for_5_years">Yield For 5 Years</label>
                                            <input type="text" value="{{ old('yield_for_5_years') }}"
                                                   class="form-control border-input" name="yield_for_5_years" placeholder="6.52">
                                        </div>

                                        <div class="form-group">
                                            <label for="yield_for_10_years">Yield For 10 Years</label>
                                            <input type="text" value="{{ old('yield_for_10_years') }}"
                                                   class="form-control border-input" name="yield_for_10_years" placeholder="15.2">
                                        </div>

                                        <div class="form-group">
                                            <label for="ytd_standard_deviation">YTD Standard Deviation</label>
                                            <input type="text" value="{{ old('ytd_standard_deviation') }}"
                                                   class="form-control border-input" name="ytd_standard_deviation" placeholder="0.007">
                                        </div>


                                    </div>
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label for="standard_deviation_for_3_years">Standard Deviation For 3 Years</label>
                                            <input type="text" value="{{ old('standard_deviation_for_3_years') }}"
                                                   class="form-control border-input" name="standard_deviation_for_3_years" placeholder="10">
                                        </div>

                                        <div class="form-group">
                                            <label for="standard_deviation_for_5_years">Standard Deviation For 5 Years</label>
                                            <input type="text" value="{{ old('standard_deviation_for_5_years') }}"
                                                   class="form-control border-input" name="standard_deviation_for_5_years" placeholder="5">
                                        </div>

                                        <div class="form-group">
                                            <label for="standard_deviation_for_10_years">Standard Deviation For 10 Years</label>
                                            <input type="text" value="{{ old('standard_deviation_for_10_years') }}"
                                                   class="form-control border-input" name="standard_deviation_for_10_years" placeholder="10">
                                        </div>

                                        <div class="form-group">
                                            <label for="borrowings">Borrowings</label>
                                            <input type="text" value="{{ old('borrowings') }}"
                                                   class="form-control border-input" name="borrowings" placeholder="10">
                                        </div>

                                        <div class="form-group">
                                            <label for="fund_leverage_ratio">Fund Leverage Ratio</label>
                                            <input type="text" value="{{ old('fund_leverage_ratio') }}"
                                                   class="form-control border-input" name="fund_leverage_ratio" placeholder="10">
                                        </div>

                                        <div class="form-group">
                                            <label for="duration">Duration</label>
                                            <input type="text" value="{{ old('duration') }}"
                                                   class="form-control border-input" name="duration" placeholder="1.5 - 11">
                                        </div>

                                        <div class="form-group">
                                            <label for="last_update_date">Last Update Date</label>
                                            <input type="date" value="{{ old('last_update_date') }}"
                                                   class="form-control border-input" name="last_update_date">
                                        </div>

                                    </div>
                                </div>

                            </div>

                            <div class="footer">
                                <button type="submit" class="btn btn-info btn-fill"><i class="fa fa-dot-circle-o"></i> Submit</button>
                                <button type="reset" class="btn btn-danger btn-fill"><i class="fa fa-ban"></i> Reset</button>
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