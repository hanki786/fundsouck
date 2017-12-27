@extends('layout.header')
@section('title')
    Fund Objective & Strategy - New
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item">Fund Identity Policy</li>
        <li class="breadcrumb-item active">Fund Objective & Strategy - New</li>
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
            <form action="{{ route('register-fundObjectiveStrategy-on-admin-side') }}" method="post">
                {!! csrf_field() !!}
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>	Fund Objective & Strategy</strong>
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
                                    <label for="short_objective">Short Objective</label>
                                    <input type="text" value="{{ old('short_objective') }}" class="form-control" name="short_objective" placeholder="Enter short objective">
                                </div>

                                <div class="form-group">
                                    <label for="detailed_objective">Detailed Objective</label>
                                    <textarea class="form-control" rows="3" name="detailed_objective" placeholder="Write detailed objective" >{{ old('detailed_objective') }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="investment_strategy">Investment Strategy</label>
                                    <textarea class="form-control" rows="3" name="investment_strategy" placeholder="Write Investment Strategy...">{{ old('investment_strategy') }}</textarea>
                                </div>

                                </div>

                                <div class="col-md-6">
                                    @php
                                        $rihs = ['1 Month','3 Months','6 Months','1 Year','2 Years','3 Years','4 Years',
                                                '5 Years','6 Years','7 Years','8 Years','9 Years','10 Years','Short Term','Medium Term','Long Term'];
                                    @endphp
                                    <div class="form-group">
                                        <label for="recommended_investment_horizon">Recommended Investment Horizon</label>
                                        <select class="form-control" name="recommended_investment_horizon">
                                            <option value="">Select an option</option>
                                            @foreach($rihs as $i_key => $rih)
                                                <option {{ old('recommended_investment_horizon')==$rih?'selected':'' }}>{{ $rih }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @php
                                        $risks = ['Low','Low to Medium','Medium','Medium to High','High'];
                                    @endphp


                                    <div class="form-group">
                                        <label for="risk_profile">Risk Profile</label>
                                        <select class="form-control" name="risk_profile">
                                            <option value="">Select an option</option>
                                            @foreach($risks as $i_key => $risk)
                                                <option {{ old('risk_profile')==$risk?'selected':'' }}>{{ $risk }}</option>
                                            @endforeach
                                        </select>

                                    </div>

                                    @php
                                        $risk_types = ['Interest Rate Risk','Business Risk','Credit Risk','Taxability Risk',
                                        'Call Risk','Inflationary Risk','Liquidity Risk','Market Risk','Investment Risk',
                                        'Social/Political/legislative Risk','Currency/Exchange Rate Risk','Systematic Risk',
                                        'Unsystematic Risk','Concentration Risk','Small & Mid Cap Risk',
                                        'Conflict of Interest Risk','Borrowing Risk','Sukuk Risk'];
                                    @endphp

                                    <div class="form-group">
                                        <label for="risk_type">Risk Type</label>
                                        <select class="form-control" name="risk_type">
                                            <option value="">Select an option</option>
                                            @foreach($risk_types as $i_key => $risk)
                                                <option {{ old('risk_type')==$risk?'selected':'' }}>{{ $risk }}</option>
                                            @endforeach
                                        </select>
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