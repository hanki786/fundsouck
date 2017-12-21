@extends('layout.header')
@section('title')
    Fund Time Series - View
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item">Fund Pricing & Valuation Information</li>
        <li class="breadcrumb-item"><a  href="{{ route('list-fundTimeSeries-on-admin-side') }}">Fund Time Series - List</a></li>
        <li class="breadcrumb-item active">	Fund Time Series - View</li>
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
                            <div class="card-header">
                                <strong>Fund Time Series</strong>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">

                                        <div class="form-group">
                                            <label for="fund_net_assets">Fund Net Assets</label>
                                            <input type="text" disabled value="{{ $fund_time_series->fund_net_assets }}"
                                                   class="form-control" name="fund_net_assets" >
                                        </div>

                                        <div class="form-group">
                                            <label for="asset_under_management">Asset Under Management</label>
                                            <input type="text" disabled value="{{ $fund_time_series->asset_under_management }}"
                                                   class="form-control" name="asset_under_management" placeholder="372,687,887.52">
                                        </div>

                                        <div class="form-group">
                                            <label for="initial_fund_size">Initial Fund Size</label>
                                            <input type="number" disabled value="{{$fund_time_series->initial_fund_size }}"
                                                   class="form-control" name="initial_fund_size" placeholder="10,000,000.00">
                                        </div>

                                        <div class="form-group">
                                            <label for="fund_manager_investment">Fund Manager Investment</label>
                                            <input type="number" disabled value="{{ $fund_time_series->fund_manager_investment }}"
                                                   class="form-control" name="fund_manager_investment" placeholder="100.15">
                                        </div>

                                        <div class="form-group">
                                            <label for="fund_manager_investment_perc">Fund Manager Investment %</label>
                                            <input type="number" disabled value="{{ $fund_time_series->fund_manager_investment_perc }}"
                                                   class="form-control" name="fund_manager_investment_perc" placeholder="0%">
                                        </div>

                                        <div class="form-group">
                                            <label for="gross_sales">Gross Sales</label>
                                            <input type="number" disabled value="{{ $fund_time_series->gross_sales }}"
                                                   class="form-control" name="gross_sales" placeholder="1500000">
                                        </div>

                                        <div class="form-group">
                                            <label for="gross_sales_ratio">Gross Sales Ratio</label>
                                            <input type="number" disabled value="{{ $fund_time_series->gross_sales_ratio }}"
                                                   class="form-control" name="gross_sales_ratio" placeholder="1500000">
                                        </div>

                                        <div class="form-group">
                                            <label for="average_net_assets">Average Net Assets</label>
                                            <input type="number" disabled value="{{ $fund_time_series->average_net_assets }}"
                                                   class="form-control" name="average_net_assets" placeholder="10">
                                        </div>

                                    </div>
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label for="redemption_ratio">Redemption Ratio</label>
                                            <input type="number" disabled value="{{ $fund_time_series->redemption_ratio }}"
                                                   class="form-control" name="redemption_ratio" placeholder="5">
                                        </div>

                                        <div class="form-group">
                                            <label for="redemptions">Redemption</label>
                                            <input type="text" disabled value="{{$fund_time_series->redemptions }}"
                                                   class="form-control" name="redemptions" placeholder="10">
                                        </div>

                                        <div class="form-group">
                                            <label for="no_of_units">No Of Units</label>
                                            <input type="number" disabled value="{{ $fund_time_series->no_of_units }}"
                                                   class="form-control" name="no_of_units" placeholder="10">
                                        </div>

                                        <div class="form-group">
                                            <label for="no_of_unit_holders">No Of Unit Holders</label>
                                            <input type="number" disabled value="{{ $fund_time_series->no_of_unit_holders }}"
                                                   class="form-control" name="no_of_unit_holders" placeholder="10">
                                        </div>

                                        <div class="form-group">
                                            <label for="unit_price">Unit Price</label>
                                            <input type="number" disabled value="{{$fund_time_series->unit_price }}"
                                                   class="form-control" name="unit_price" placeholder="5">
                                        </div>

                                        <div class="form-group">
                                            <label for="last_update_date">Last Update Date</label>
                                            <input type="date" disabled value="{{ $fund_time_series->last_update_date }}"
                                                   class="form-control" name="last_update_date">
                                        </div>

                                        <div class="form-group">
                                            <label for="last_valuation_date">Last Valuation Date</label>
                                            <input type="date"  disabled value="{{ $fund_time_series->last_valuation_date }}"
                                                   class="form-control" name="last_valuation_date">
                                        </div>

                                        @php
                                            $valuation = ['Daily','Saturday','Sunday','Monday',
                                            'Tuesday','Wednesday','Thursday','Friday','Weekly','Monthly',
                                            'Bi-Weekly','Bi-Monthly','Quarterly','Semi-Annually','Annually',];
                                        @endphp

                                        <div class="form-group">
                                            <label for="valuation_basis">Valuation Basis</label>
                                            <select class="form-control input-sm" disabled name="valuation_basis">
                                                <option value="">Select an option</option>
                                                @foreach($valuation as $i_key => $rih)
                                                    <option {{ $fund_time_series->valuation_basis==$rih?'selected':'' }}>{{ $rih }}</option>
                                                @endforeach
                                            </select>
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