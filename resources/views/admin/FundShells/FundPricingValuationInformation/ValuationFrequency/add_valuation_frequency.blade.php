@extends('layout.header')
@section('title')
    Valuation Frequency - New
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item">Fund Pricing & Valuation Information</li>
        <li class="breadcrumb-item active">	Valuation Frequency - New</li>
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
            <form action="{{ route('register-valuationFrequency-on-admin-side') }}" method="post">
                {!! csrf_field() !!}
                <div class="row">
                    <div class="col-sm-12">

                        <div class="card">
                            <div class="card-header">
                                <strong>Add Valuation Frequency</strong>
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

                                            @php
                                                $valuation = ['Daily','Saturday','Sunday','Monday',
                                                'Tuesday','Wednesday','Thursday','Friday','Weekly','Monthly',
                                                'Bi-Weekly','Bi-Monthly','Quarterly','Semi-Annually','Annually',];
                                            @endphp
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
                                                <label for="valuation_frequency">Valuation Frequency</label>
                                                <select class="form-control input-sm" name="valuation_frequency">
                                                    <option value="">Select an option</option>
                                                    @foreach($valuation as $i_key => $rih)
                                                        <option {{ old('valuation_frequency')==$rih?'selected':'' }}>{{ $rih }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            @php
                                                $announcement = ['Daily','Saturday','Sunday','Monday',
                                                'Tuesday','Wednesday','Thursday','Friday','Weekly','Monthly',
                                                'Bi-Weekly','Bi-Monthly','Quarterly','Semi-Annually','Annually',];
                                            @endphp

                                            <div class="form-group">
                                                <label for="announcement_frequency">Announcement Frequency</label>
                                                <select class="form-control input-sm" name="announcement_frequency">
                                                    <option value="">Select an option</option>
                                                    @foreach($announcement as $i_key => $rih)
                                                        <option {{ old('announcement_frequency')==$rih?'selected':'' }}>{{ $rih }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                        <div class="form-group">
                                            <label for="ytd_price_change">YTD Price Change</label>
                                            <input type="text" value="{{ old('ytd_price_change') }}"
                                                   class="form-control" name="ytd_price_change" placeholder="2.02%">
                                        </div>

                                    </div>

                                    <div class="col-md-6">


                                        <div class="form-group">
                                            <label for="price_change_since_last_valuation">Price Change Since Last Valuation</label>
                                            <input type="text" value="{{ old('price_change_since_last_valuation') }}"
                                                   class="form-control" name="price_change_since_last_valuation" placeholder="0%">
                                        </div>

                                        @php
                                            $valuation = ['Daily','Saturday','Sunday','Monday',
                                            'Tuesday','Wednesday','Thursday','Friday',];
                                        @endphp

                                        <div class="form-group">
                                            <label for="valuation_days">Valuation Days</label>
                                            <select class="form-control input-sm" name="valuation_days">
                                                <option value="">Select an option</option>
                                                @foreach($valuation as $i_key => $rih)
                                                    <option {{ old('valuation_days')==$rih?'selected':'' }}>{{ $rih }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        @php
                                            $announcement = ['Daily','Saturday','Sunday','Monday',
                                            'Tuesday','Wednesday','Thursday','Friday',];
                                        @endphp

                                        <div class="form-group">
                                            <label for="announcement_days">Announcement Days</label>
                                            <select class="form-control input-sm" name="announcement_days">
                                                <option value="">Select an option</option>
                                                @foreach($announcement as $i_key => $rih)
                                                    <option {{ old('announcement_days')==$rih?'selected':'' }}>{{ $rih }}</option>
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