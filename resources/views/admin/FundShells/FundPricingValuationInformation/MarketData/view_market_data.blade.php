@extends('layout.header')
@section('title')
    Market Data - Edit
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item">Fund Pricing & Valuation Information</li>
        <li class="breadcrumb-item"><a  href="{{ route('list-marketData-on-admin-side') }}">Market Data - List</a></li>
        <li class="breadcrumb-item active">	Market Data - Edit</li>
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
                                <strong>Market Data</strong>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">

                                        <div class="form-group">
                                            <label for="open">Open</label>
                                            <input disabled type="text" value="{{ $market_data->open }}"
                                                   class="form-control" name="open" placeholder="1.2189">
                                        </div>

                                        <div class="form-group">
                                            <label for="high">High</label>
                                            <input disabled type="text" value="{{ $market_data->high }}"
                                                   class="form-control" name="high" placeholder="1.2189">
                                        </div>

                                        <div class="form-group">
                                            <label for="low">Low</label>
                                            <input disabled type="text" value="{{ $market_data->low }}"
                                                   class="form-control" name="low" placeholder="1.2189">
                                        </div>

                                        <div class="form-group">
                                            <label for="close">Close</label>
                                            <input disabled type="text" value="{{ $market_data->close }}"
                                                   class="form-control" name="close" placeholder="100.15">
                                        </div>

                                    </div>
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label for="change">Change</label>
                                            <input disabled type="number" value="{{ $market_data->change }}"
                                                   class="form-control" name="change" placeholder="0%">
                                        </div>

                                        <div class="form-group">
                                            <label for="perc_change">% Change</label>
                                            <input disabled type="number" value="{{ $market_data->perc_change }}"
                                                   class="form-control" name="perc_change" placeholder="2%">
                                        </div>

                                        <div class="form-group">
                                            <label for="volume_traded">Volume Traded</label>
                                            <input disabled type="number" value="{{ $market_data->volume_traded }}"
                                                   class="form-control" name="volume_traded" placeholder="1500000">
                                        </div>

                                        <div class="form-group">
                                            <label for="value_traded">Value Traded</label>
                                            <input disabled type="text" value="{{ $market_data->value_traded }}"
                                                   class="form-control" name="value_traded" placeholder="100000 USD">
                                        </div>

                                        <div class="form-group">
                                            <label for="price_date">Price Date</label>
                                            <input disabled type="date" value="{{ $market_data->price_date }}"
                                                   class="form-control" name="price_date" >
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