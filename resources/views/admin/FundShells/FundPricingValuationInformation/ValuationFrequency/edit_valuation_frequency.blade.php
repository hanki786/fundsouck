@extends('layout.header')
@section('title')
    Valuation Frequency - Edit
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item">Fund Pricing & Valuation Information</li>
        <li class="breadcrumb-item"><a  href="{{ route('list-valuationFrequency-on-admin-side') }}">Valuation Frequency - List</a></li>
        <li class="breadcrumb-item active">	Valuation Frequency - Edit</li>
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
            <form action="{{ route('update-valuationFrequency-on-admin-side',$valuation_frequency->id) }}" method="post">
                {!! csrf_field() !!}
                <div class="row">
                    <div class="col-sm-12">

                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Valuation Frequency</h4>
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

                                            <input type="hidden" name="fund_objective_id" value="{{ $valuation_frequency->id}}">

                                            <input type="hidden" name="user_id" value="{{ $valuation_frequency->user_id}}">


                                            @php
                                            $valuation = ['Daily','Saturday','Sunday','Monday',
                                            'Tuesday','Wednesday','Thursday','Friday','Weekly','Monthly',
                                            'Bi-Weekly','Bi-Monthly','Quarterly','Semi-Annually','Annually',];
                                        @endphp

                                        <div class="form-group">
                                            <label for="valuation_frequency">Valuation Frequency</label>
                                            <select class="form-control input-sm" name="valuation_frequency">
                                                <option value="">Select an option</option>
                                                @foreach($valuation as $i_key => $rih)
                                                    <option {{ $valuation_frequency->valuation_frequency==$rih?'selected':'' }}>{{ $rih }}</option>
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
                                                    <option {{ $valuation_frequency->announcement_frequency==$rih?'selected':'' }}>{{ $rih }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="ytd_price_change">YTD Price Change</label>
                                            <input type="text" value="{{ $valuation_frequency->ytd_price_change }}"
                                                   class="form-control border-input" name="ytd_price_change" placeholder="2.02%">
                                        </div>

                                    </div>

                                    <div class="col-md-6">


                                        <div class="form-group">
                                            <label for="price_change_since_last_valuation">Price Change Since Last Valuation</label>
                                            <input type="text" value="{{ $valuation_frequency->price_change_since_last_valuation }}"
                                                   class="form-control border-input" name="price_change_since_last_valuation" placeholder="0%">
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
                                                    <option {{ $valuation_frequency->valuation_days==$rih?'selected':'' }}>{{ $rih }}</option>
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
                                                    <option {{ $valuation_frequency->announcement_days==$rih?'selected':'' }}>{{ $rih }}</option>
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