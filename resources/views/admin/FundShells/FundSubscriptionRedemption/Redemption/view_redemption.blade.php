@extends('layout.header')
@section('title')
    Redemption - View
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item active">Fund Subscription & Redemption</li>
        <li class="breadcrumb-item"><a  href="{{ route('list-redemption-on-admin-side') }}">Redemption - List</a></li>
        <li class="breadcrumb-item active">Redemption - View</li>
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
                                <h4 class="title">View Redemption</h4>
                            </div>
                            <div class="content">
                                <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-sm-6">

                                        <div class="form-group">
                                            <label for="minimum">Minimum</label>
                                            <input type="number" value="{{ $redemption->minimum}}"
                                                   class="form-control border-input" name="minimum" placeholder="Enter Minimum " disabled>
                                        </div>

                                        @php
                                            $frequency = ['Daily','Saturday','Sunday','Monday',
                                            'Tuesday','Wednesday','Thursday','Friday','Weekly',
                                            'Monthly','Bi-Weekly','Bi-Monthly','Quarterly','Semi-Annually','Annually' ];
                                        @endphp

                                        <div class="form-group">
                                            <label for="frequency">Frequency</label>
                                            <select class="form-control input-sm" name="frequency" disabled>
                                                <option value="">Select an option</option>
                                                @foreach($frequency as $i_key => $risk)
                                                    <option {{ $redemption->frequency==$risk?'selected':'' }}>{{ $risk }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="payment_period">Payment Period</label>
                                            <input type="text" value="{{ $redemption->payment_period}}"
                                                   class="form-control border-input" name="payment_period"
                                                   placeholder="Enter Payment Period" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="cut_off_time">Cut-Off Time</label>
                                            <select class="form-control input-sm" name="cut_off_time" disabled>
                                                <option>Select an option</option>
                                                <option {{ $redemption->cut_off_time=="10:30"?'selected':'' }}>10:30</option>
                                            </select>
                                        </div>

                                        @php
                                            $business_days = ['Monday to Friday','Sunday to Thursday','Saturday to Thursday'];
                                        @endphp

                                        <div class="form-group">
                                            <label for="business_days">Business Days</label>
                                            <select class="form-control input-sm" name="business_days" disabled>
                                                <option value="">Select an option</option>
                                                @foreach($business_days as $i_key => $risk)
                                                    <option {{ $redemption->business_days==$risk?'selected':'' }}>{{ $risk }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="last_update_date">Last Update Date</label>
                                            <input type="date" value="{{ $redemption->last_update_date}}" class="form-control border-input"
                                                   name="last_update_date" disabled>
                                        </div>

                                    </div>
                                    <div class="col-md-3"></div>
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