@extends('layout.header')
@section('title')
    Fund Asset Attributes - Edit
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item">Fund Attributes</li>
        <li class="breadcrumb-item"><a  href="{{ route('list-fundAssetAttributes-on-admin-side') }}">Fund Asset Attributes - List</a></li>
        <li class="breadcrumb-item active">Fund Asset Attributes - Edit</li>
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
                <form action="{{ route('update-fundAssetAttributes-on-admin-side',$fund_asset_attributes->id) }}" method="post" >
                    {!! csrf_field() !!}
                <div class="row">

                    <div class="col-sm-12">

                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Fund Asset Attributes</h4>
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

                                        <input type="hidden" name="fund_objective_id" value="{{ $fund_asset_attributes->id}}">

                                        <input type="hidden" name="user_id" value="{{ $fund_asset_attributes->user_id}}">


                                            @php
                                                $status = ['Active','Inactive','Pending','Merged',
                                                'Liquidated','Liquidation','Processs',];
                                            @endphp

                                        <div class="form-group">
                                        <label for="status">Status</label>
                                        <select class="form-control input-sm" name="status">
                                            @foreach($status as $i_key => $rih)
                                                <option {{ $fund_asset_attributes->status==$rih?'selected':'' }}>{{ $rih }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                            @php
                                                $asset = ['Alternatives','Bond','Commodities','Money Market',
                                                'Equity','Mixed Asset','Real Estate',];
                                            @endphp

                                    <div class="form-group">
                                        <label for="asset_class">Asset Class</label>
                                        <select class="form-control input-sm" name="asset_class">
                                            <option value="">Select an option</option>
                                            @foreach($asset as $i_key => $rih)
                                                <option {{ $fund_asset_attributes->asset_class==$rih?'selected':'' }}>{{ $rih }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                            @php
                                                $asset = ['Mutual Fund','Exchange Traded Fund','Insurance Fund','Pension Fund',
                                                'Hedge Fund','Private Equity Fund','REITs',];
                                            @endphp

                                    <div class="form-group">
                                        <label for="asset_universe">Asset Universe</label>
                                        <select class="form-control input-sm" name="asset_universe">
                                            @foreach($asset as $i_key => $rih)
                                                <option {{ $fund_asset_attributes->asset_universe==$rih?'selected':'' }}>
                                                    {{ $rih }}</option>
                                            @endforeach

                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="domicile">Domicile</label>
                                        <?php $countries = \App\Models\DomainValues\GlobalCurrencies::all(); ?>
                                        <select class="form-control input-sm" name="domicile">
                                            <option value="">Select an option</option>
                                            @foreach($countries as $row)
                                                <option value="{{ $row->country }}" {{ $fund_asset_attributes->domicile ==
                                                $row->country?'selected':'' }}>{{ $row->country }}</option>
                                            @endforeach
                                        </select>
                                    </div>


                                    </div>
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label for="geo_focus">Geo Focus</label>
                                            <?php $countries = \App\Models\DomainValues\GlobalCurrencies::all(); ?>
                                            <?php $regions = \App\Models\DomainValues\Region::all(); ?>
                                            <select class="form-control input-sm" name="geo_focus">
                                                <option value="">Select an option</option>
                                                @foreach($countries as $row)
                                                    <option value="{{ $row->country }}" {{ $fund_asset_attributes->geo_focus ==
                                                     $row->country?'selected':'' }}>{{ $row->country }}</option>
                                                @endforeach
                                                @foreach($regions as $row)
                                                    <option value="{{ $row->region }}" {{ $fund_asset_attributes->geo_focus ==
                                                     $row->region?'selected':'' }}>{{ $row->region }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        @php
                                            $legal = ['Open End','Closed End','FCP','SICAV',
                                            'FCPR','SICAR'];
                                        @endphp

                                        <div class="form-group">
                                            <label for="legal_form">Legal Form</label>
                                            <select class="form-control input-sm" name="legal_form">
                                                <option value="">Select an option</option>
                                                @foreach($legal as $i_key => $rih)
                                                    <option {{ $fund_asset_attributes->legal_form==$rih?'selected':'' }}>{{ $rih }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="stock_exchange_name">Stock Exchange Name</label>
                                            <option value="">Select an option</option>
                                            <?php $stock_exchange = \App\Models\DomainValues\StockExchanges::all(); ?>
                                            <select class="form-control input-sm" name="stock_exchange_name">
                                                <option value="">Select an option</option>
                                                @foreach($stock_exchange as $row)
                                                    <option value="{{ $row->stock_exchange_name }}"
                                                            {{ $fund_asset_attributes->stock_exchange_name ==
                                                            $row->stock_exchange_name?'selected':'' }}>
                                                        {{ $row->stock_exchange_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="footer">
                                <button type="submit" class="btn btn-info btn-fill"><i class="fa fa-dot-circle-o"></i> Save</button>
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