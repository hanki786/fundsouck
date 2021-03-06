@extends('layout.header')
@section('title')
    Fund Income Settings - View
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item">Fund Pricing & Valuation Information</li>
        <li class="breadcrumb-item"><a  href="{{ route('list-fundIncomeSettings-on-admin-side') }}">Fund Income Settings - List</a></li>
        <li class="breadcrumb-item active">	Fund Income Settings - View</li>
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
                                <h4 class="title">Fund Income Settings</h4>
                            </div>
                            <div class="content">
                                <div class="row">
                                    <div class="col-sm-6">

                                        <div class="form-group">
                                            <label for="ex_dividend_date">Ex-Dividend Date</label>
                                            <input type="text" value="{{ $fund_income_settings->ex_dividend_date }}"
                                                   class="form-control border-input" name="ex_dividend_date" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="dividend_amount">Dividend Amount</label>
                                            <input type="text" value="{{ $fund_income_settings->dividend_amount }}"
                                                   class="form-control border-input" name="dividend_amount" placeholder="372,687,887.52"  disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="payment_date">Payment Date</label>
                                            <input type="date" value="{{ $fund_income_settings->payment_date }}"
                                                   class="form-control border-input" name="payment_date"  disabled>
                                        </div>


                                        @php
                                            $dividend  = ['Daily','Saturday','Sunday','Monday',
                                            'Tuesday','Wednesday','Thursday','Friday','Weekly','Monthly',
                                            'Bi-Weekly','Bi-Monthly','Quarterly','Semi-Annually','Annually',];
                                        @endphp

                                        <div class="form-group">
                                            <label for="dividend_frequency">Dividend Frequency</label>
                                            <select class="form-control input-sm" name="dividend_frequency" disabled>
                                                <option value="">Select an option</option>
                                                @foreach($dividend as $i_key => $rih)
                                                    <option {{ $fund_income_settings->dividend_frequency==$rih?'selected':'' }}>{{ $rih }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="dividend_currency">Dividend Currency</label>
                                            <?php $currencies = \App\Models\DomainValues\GlobalCurrencies::all(); ?>
                                            <select class="form-control input-sm" name="dividend_currency" disabled>
                                                <option value="">Select an option</option>
                                                @foreach($currencies as $row)
                                                    <option value="{{ $row->iso_4217 }}"
                                                            {{ $fund_income_settings->dividend_currency == $row->iso_4217?'selected':'' }}>
                                                        {{ $row->iso_4217 }})</option>
                                                @endforeach
                                            </select>
                                        </div>


                                    </div>
                                    <div class="col-md-6">

                                        @php
                                            $default_tax  = ['Gross ','Net',];
                                        @endphp

                                        <div class="form-group">
                                            <label for="default_tax_basis">Default Tax Basis</label>
                                            <select class="form-control input-sm" name="default_tax_basis" disabled>
                                                <option value="">Select an option</option>
                                                @foreach($default_tax as $i_key => $rih)
                                                    <option {{ $fund_income_settings->default_tax_basis==$rih?'selected':'' }}>{{ $rih }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        @php
                                            $default_tax  = ['Income ','Capital Gain',
                                            'Bonus Issue','Split','Reverse Split',];
                                        @endphp

                                        <div class="form-group">
                                            <label for="corporate_action_type">Corporate Action Type</label>
                                            <select class="form-control input-sm" name="corporate_action_type" disabled>
                                                <option value="">Select an option</option>
                                                @foreach($default_tax as $i_key => $rih)
                                                    <option {{ $fund_income_settings->corporate_action_type==$rih?'selected':'' }}>{{ $rih }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        @php
                                            $distribution  = ['Paid ','Accumulated',];
                                        @endphp

                                        <div class="form-group">
                                            <label for="income_distribution">Income Distribution</label>
                                            <select class="form-control input-sm" name="income_distribution" disabled>
                                                <option value="">Select an option</option>
                                                @foreach($distribution as $i_key => $rih)
                                                    <option {{ $fund_income_settings->income_distribution==$rih?'selected':'' }}>{{ $rih }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        @php
                                            $operation  = ['Re-invested ','Paid',];
                                        @endphp

                                        <div class="form-group">
                                            <label for="income_operation">Income Operation</label>
                                            <select class="form-control input-sm" name="income_operation" disabled>
                                                <option value="">Select an option</option>
                                                @foreach($operation as $i_key => $rih)
                                                    <option {{ $fund_income_settings->income_operation==$rih?'selected':'' }}>{{ $rih }}</option>
                                                @endforeach
                                            </select>
                                        </div>


                                        <div class="form-group">
                                            <label for="reinvest_date">Reinvest Date</label>
                                            <input type="date" value="{{ $fund_income_settings->reinvest_date }}"
                                                   class="form-control border-input" name="reinvest_date"  disabled>
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