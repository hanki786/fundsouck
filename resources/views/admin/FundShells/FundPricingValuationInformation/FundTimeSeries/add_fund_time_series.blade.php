@extends('layout.header')
@section('title')
    Fund Time Series - New
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item">Fund Pricing & Valuation Information</li>
        <li class="breadcrumb-item active">	Fund Time Series - New</li>
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
            <form action="{{ route('register-fundTimeSeries-on-admin-side') }}" method="post">
                {!! csrf_field() !!}
                <div class="row">
                    <div class="col-sm-12">

                        <div class="card">
                            <div class="header">
                                <h4 class="title">Add Fund Time Series</h4>
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
                                            <label for="name">Fund Identity</label>
                                            <select type="text" class="form-control border-input" id="fund_identity_id" name="fund_identity_id">
                                                <option value="">Select an option</option>
                                                @foreach($fund_identities as $fund_identity)
                                                    <option value="{{ $fund_identity->id }}">{{ $fund_identity->fund_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="fund_net_assets">Fund Net Assets</label>
                                            <input type="text" value="{{ old('fund_net_assets') }}"
                                                   class="form-control border-input" name="fund_net_assets" >
                                        </div>

                                        <div class="form-group">
                                            <label for="asset_under_management">Asset Under Management</label>
                                            <input type="text" value="{{ old('asset_under_management') }}"
                                                   class="form-control border-input" name="asset_under_management" placeholder="372,687,887.52">
                                        </div>

                                        <div class="form-group">
                                            <label for="initial_fund_size">Initial Fund Size</label>
                                            <input type="number" value="{{ old('initial_fund_size') }}"
                                                   class="form-control border-input" name="initial_fund_size" placeholder="10,000,000.00">
                                        </div>

                                            <div class="form-group">
                                                <label for="fund_manager_investment">Fund Manager Investment</label>
                                                <input type="number" value="{{ old('fund_manager_investment') }}"
                                                       class="form-control border-input" name="fund_manager_investment" placeholder="100.15">
                                            </div>

                                            <div class="form-group">
                                                <label for="fund_manager_investment_perc">Fund Manager Investment %</label>
                                                <input type="number" value="{{ old('fund_manager_investment_perc') }}"
                                                       class="form-control border-input" name="fund_manager_investment_perc" placeholder="0%">
                                            </div>

                                            <div class="form-group">
                                                <label for="gross_sales">Gross Sales</label>
                                                <input type="number" value="{{ old('gross_sales') }}"
                                                       class="form-control border-input" name="gross_sales" placeholder="1500000">
                                            </div>

                                            <div class="form-group">
                                                <label for="gross_sales_ratio">Gross Sales Ratio</label>
                                                <input type="number" value="{{ old('gross_sales_ratio') }}"
                                                       class="form-control border-input" name="gross_sales_ratio" placeholder="1500000">
                                            </div>

                                            <div class="form-group">
                                                <label for="average_net_assets">Average Net Assets</label>
                                                <input type="number" value="{{ old('average_net_assets') }}"
                                                       class="form-control border-input" name="average_net_assets" placeholder="10">
                                            </div>

                                    </div>
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label for="redemption_ratio">Redemption Ratio</label>
                                            <input type="number" value="{{ old('redemption_ratio') }}"
                                                   class="form-control border-input" name="redemption_ratio" placeholder="5">
                                        </div>

                                        <div class="form-group">
                                            <label for="redemptions">Redemption</label>
                                            <input type="text" value="{{ old('redemptions') }}"
                                                   class="form-control border-input" name="redemptions" placeholder="10">
                                        </div>

                                        <div class="form-group">
                                            <label for="no_of_units">No Of Units</label>
                                            <input type="number" value="{{ old('no_of_units') }}"
                                                   class="form-control border-input" name="no_of_units" placeholder="10">
                                        </div>

                                        <div class="form-group">
                                            <label for="no_of_unit_holders">No Of Unit Holders</label>
                                            <input type="number" value="{{ old('no_of_unit_holders') }}"
                                                   class="form-control border-input" name="no_of_unit_holders" placeholder="10">
                                        </div>

                                        <div class="form-group">
                                            <label for="unit_price">Unit Price</label>
                                            <input type="number" value="{{ old('unit_price') }}"
                                                   class="form-control border-input" name="unit_price" placeholder="5">
                                        </div>

                                        <div class="form-group">
                                            <label for="last_update_date">Last Update Date</label>
                                            <input type="date" value="{{ old('last_update_date') }}"
                                                   class="form-control border-input" name="last_update_date">
                                        </div>

                                        <div class="form-group">
                                            <label for="last_valuation_date">Last Valuation Date</label>
                                            <input type="date" value="{{ old('last_valuation_date') }}"
                                                   class="form-control border-input" name="last_valuation_date">
                                        </div>

                                        @php
                                            $valuation = ['Daily','Saturday','Sunday','Monday',
                                            'Tuesday','Wednesday','Thursday','Friday','Weekly','Monthly',
                                            'Bi-Weekly','Bi-Monthly','Quarterly','Semi-Annually','Annually',];
                                        @endphp

                                        <div class="form-group">
                                            <label for="valuation_basis">Valuation Basis</label>
                                            <select class="form-control input-sm" name="valuation_basis">
                                                <option value="">Select an option</option>
                                                @foreach($valuation as $i_key => $rih)
                                                    <option {{ old('valuation_basis')==$rih?'selected':'' }}>{{ $rih }}</option>
                                                @endforeach
                                            </select>
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