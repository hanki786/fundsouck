@extends('layout.header')
@section('title')
    Redemption - New
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item active">Fund Subscription & Redemption</li>
        <li class="breadcrumb-item active">Redemption - New</li>
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
                <form action="{{ route('register-redemption-on-admin-side') }}" method="post">
                    {!! csrf_field() !!}
                <div class="row">

                    <div class="col-sm-12">

                        <div class="card">
                            <div class="card-header">
                                <strong>Add Redemption</strong>
                                <small>Form</small>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3"></div>
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
                                        <label for="minimum">Minimum</label>
                                        <input type="number" value="{{ old('minimum') }}"
                                               class="form-control" name="minimum" placeholder="Enter Minimum ">
                                    </div>

                                            @php
                                                $frequency = ['Daily','Saturday','Sunday','Monday',
                                                'Tuesday','Wednesday','Thursday','Friday','Weekly',
                                                'Monthly','Bi-Weekly','Bi-Monthly','Quarterly','Semi-Annually','Annually' ];
                                            @endphp

                                    <div class="form-group">
                                        <label for="frequency">Frequency</label>
                                        <select class="form-control input-sm" name="frequency">
                                            <option value="">Select an option</option>
                                            @foreach($frequency as $i_key => $risk)
                                                <option {{ old('frequency')==$risk?'selected':'' }}>{{ $risk }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="payment_period">Payment Period</label>
                                        <input type="text" value="{{ old('payment_period') }}"
                                               class="form-control" name="payment_period" placeholder="Enter Payment Period">
                                    </div>

                                    <div class="form-group">
                                        <label for="cut_off_time">Cut-Off Time</label>
                                        <select class="form-control input-sm" name="cut_off_time">
                                            <option value="">Select an option</option>
                                            <option>10:30</option>
                                        </select>
                                    </div>

                                            @php
                                                $business_days = ['Monday to Friday','Sunday to Thursday','Saturday to Thursday'];
                                            @endphp

                                    <div class="form-group">
                                        <label for="business_days">Business Days</label>
                                        <select class="form-control input-sm" name="business_days">
                                            <option value="">Select an option</option>
                                            @foreach($business_days as $i_key => $risk)
                                                <option {{ old('business_days')==$risk?'selected':'' }}>{{ $risk }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="last_update_date">Last Update Date</label>
                                        <input type="date" value="{{ old('last_update_date') }}" class="form-control" name="last_update_date" placeholder="Enter ">
                                    </div>

                                    </div>
                                    <div class="col-md-3"></div>
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