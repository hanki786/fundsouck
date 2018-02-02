@extends('layout.header')
@section('title')
    Fund Performance - View
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item">Fund Performance & Risk Statistics</li>
        <li class="breadcrumb-item active">Calculated Statistics</li>
        <li class="breadcrumb-item"><a  href="{{ route('list-fundPerformance-on-admin-side') }}">Sourced Statistics - List</a></li>
        <li class="breadcrumb-item active">Fund Performance - View</li>
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
                                <h4 class="title">Fund Performance</h4>
                            </div>
                            <div class="content">
                                <div class="row">
                                    <div class="col-sm-6">

                                        <div class="form-group">
                                            <label for="annual_compound_return">Annual Compound Return</label>
                                            <input type="text" value="{{ $fund_performance->annual_compound_return }}"
                                                   class="form-control border-input" name="annual_compound_return"  placeholder="0.48" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="annualised_distribution_yield">Annualised Distribution Yield</label>
                                            <input type="text" value="{{ $fund_performance->annualised_distribution_yield }}"
                                                   class="form-control border-input" name="annualised_distribution_yield" placeholder="7.52" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="indexed_performance">Indexed Performance</label>
                                            <input type="text" value="{{ $fund_performance->indexed_performance }}"
                                                   class="form-control border-input" name="indexed_performance" placeholder="2.19" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="percentage_growth">Percentage Growth</label>

                                            <input type="text" value="{{ $fund_performance->percentage_growth }}"
                                                   class="form-control border-input" name="percentage_growth" placeholder="100.15" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="average_gain">Average Gain</label>
                                            <input type="text" value="{{ $fund_performance->average_gain }}"
                                                   class="form-control border-input" name="average_gain" placeholder="6.52" disabled>
                                        </div>


                                    </div>
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label for="average_loss">Average Loss</label>
                                            <input type="text" value="{{ $fund_performance->average_loss }}"
                                                   class="form-control border-input" name="average_loss" placeholder="15.2" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="average_return">Average Return</label>
                                            <input type="text" value="{{ $fund_performance->average_return }}"
                                                   class="form-control border-input" name="average_return" placeholder="0.007" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="relative_average_return">Relative Average Return</label>
                                            <input type="text" value="{{ $fund_performance->relative_average_return }}"
                                                   class="form-control border-input" name="relative_average_return" placeholder="10" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="relative_performance">Relative Performance</label>
                                            <input type="text" value="{{ $fund_performance->relative_performance }}"
                                                   class="form-control border-input" name="relative_performance" placeholder="5" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="performance">Performance</label>
                                            <input type="text" value="{{ $fund_performance->performance }}"
                                                   class="form-control border-input" name="performance" placeholder="10" disabled>
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