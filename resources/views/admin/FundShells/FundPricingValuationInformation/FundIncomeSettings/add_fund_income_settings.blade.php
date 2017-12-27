@extends('layout.header')
@section('title')
    Fund Income Settings - New
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item">Fund Pricing & Valuation Information</li>
        <li class="breadcrumb-item active">	Fund Income Settings - New</li>
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
            <form action="{{ route('register-fundIncomeSettings-on-admin-side') }}" method="post">
                {!! csrf_field() !!}
                <div class="row">
                    <div class="col-sm-12">

                        <div class="card">
                            <div class="card-header">
                                <strong>Add Fund Income Settings</strong>
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
                                            <label for="name">Fund Identity</label>
                                            <select type="text" class="form-control" id="fund_identity_id" name="fund_identity_id">
                                                <option value="">Select an option</option>
                                                @foreach($fund_identities as $fund_identity)
                                                    <option value="{{ $fund_identity->id }}">{{ $fund_identity->fund_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="ex_dividend_date">Ex-Dividend Date</label>
                                            <input type="text" value="{{ old('ex_dividend_date') }}"
                                                   class="form-control" name="ex_dividend_date" >
                                        </div>

                                        <div class="form-group">
                                            <label for="dividend_amount">Dividend Amount</label>
                                            <input type="text" value="{{ old('dividend_amount') }}"
                                                   class="form-control" name="dividend_amount" placeholder="372,687,887.52">
                                        </div>

                                        <div class="form-group">
                                            <label for="payment_date">Payment Date</label>
                                            <input type="date" value="{{ old('payment_date') }}"
                                                   class="form-control" name="payment_date" >
                                        </div>


                                            @php
                                                $dividend  = ['Daily','Saturday','Sunday','Monday',
                                                'Tuesday','Wednesday','Thursday','Friday','Weekly','Monthly',
                                                'Bi-Weekly','Bi-Monthly','Quarterly','Semi-Annually','Annually',];
                                            @endphp

                                            <div class="form-group">
                                                <label for="dividend_frequency">Dividend Frequency</label>
                                                <select class="form-control input-sm" name="dividend_frequency">
                                                    <option value="">Select an option</option>
                                                    @foreach($dividend as $i_key => $rih)
                                                        <option {{ old('dividend_frequency')==$rih?'selected':'' }}>{{ $rih }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="dividend_currency">Dividend Currency</label>
                                                <?php $currencies = \App\Models\DomainValues\GlobalCurrencies::all(); ?>
                                                <select class="form-control input-sm" name="dividend_currency">
                                                    <option value="">Select an option</option>
                                                    <?php foreach($currencies as $row): ?>
                                                    <option value="<?php echo e($row->iso_4217); ?>"
                                                    <?php echo e(old('dividend_currency')==$row->iso_4217?'selected':''); ?>>
                                                        <?php echo e($row->iso_4217); ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>


                                    </div>
                                    <div class="col-md-6">

                                        @php
                                            $default_tax  = ['Gross','Net',];
                                        @endphp

                                        <div class="form-group">
                                            <label for="default_tax_basis">Default Tax Basis</label>
                                            <select class="form-control input-sm" name="default_tax_basis">
                                                <option value="">Select an option</option>
                                                @foreach($default_tax as $i_key => $rih)
                                                    <option {{ old('default_tax_basis')==$rih?'selected':'' }}>{{ $rih }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        @php
                                            $default_tax  = ['Income','Capital Gain',
                                            'Bonus Issue','Split','Reverse Split',];
                                        @endphp

                                        <div class="form-group">
                                            <label for="corporate_action_type">Corporate Action Type</label>
                                            <select class="form-control input-sm" name="corporate_action_type">
                                                <option value="">Select an option</option>
                                                @foreach($default_tax as $i_key => $rih)
                                                    <option {{ old('corporate_action_type')==$rih?'selected':'' }}>{{ $rih }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        @php
                                            $distribution  = ['Paid','Accumulated',];
                                        @endphp

                                        <div class="form-group">
                                            <label for="income_distribution">Income Distribution</label>
                                            <select class="form-control input-sm" name="income_distribution">
                                                <option value="">Select an option</option>
                                                @foreach($distribution as $i_key => $rih)
                                                    <option {{ old('income_distribution')==$rih?'selected':'' }}>{{ $rih }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        @php
                                            $operation  = ['Re-invested','Paid',];
                                        @endphp

                                        <div class="form-group">
                                            <label for="income_operation">Income Operation</label>
                                            <select class="form-control input-sm" name="income_operation">
                                                <option value="">Select an option</option>
                                                @foreach($operation as $i_key => $rih)
                                                    <option {{ old('income_operation')==$rih?'selected':'' }}>{{ $rih }}</option>
                                                @endforeach
                                            </select>
                                        </div>


                                        <div class="form-group">
                                            <label for="reinvest_date">Reinvest Date</label>
                                            <input type="date" value="{{ old('reinvest_date') }}"
                                                   class="form-control" name="reinvest_date" >
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