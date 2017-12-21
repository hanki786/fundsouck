@extends('layout.header')
@section('title')
    Fund Classification Schemes - Edit
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item active">Fund Classification & Benchmarks</li>
        <li class="breadcrumb-item"><a  href="{{ route('list-fundClassificationSchemes-on-admin-side') }}">Fund Classification Schemes - List</a></li>
        <li class="breadcrumb-item active">Fund Classification Schemes - Edit</li>
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
            <form action="{{ route('update-fundClassificationSchemes-on-admin-side',$fund_classification_schemes->id) }}" method="post">
                {!! csrf_field() !!}
                <div class="row">

                    <div class="col-sm-12">

                        <div class="card">
                            <div class="card-header">
                                <strong>Edit Fund Classification Scheme</strong>
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

                                            <input type="hidden" name="id" value="{{ $fund_classification_schemes->id}}">

                                            <input type="hidden" name="user_id" value="{{ $fund_classification_schemes->user_id}}">


                                            <div class="form-group">
                                                <label for="fund_souk_classification">FundSouk Classification</label>
                                                <?php $fundsouk_classification = \App\Models\DomainValues\FundSoukClassification::all(); ?>
                                                <select class="form-control input-sm" name="fund_souk_classification">
                                                    <option value="">Select an option</option>
                                                    @foreach($fundsouk_classification as $row)
                                                        <option value="{{ $row->fund_souk_classification }}"
                                                                {{ $fund_classification_schemes->fund_souk_classification ==
                                                                $row->fund_souk_classification?'selected':'' }}>
                                                            {{ $row->fund_souk_classification }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            @php
                                                $tadawul = ['Equity Funds - Local','Equity Funds - International/ Global',
                                                'Equity Funds - US','Equity Funds - European',
                                                'Equity Funds - Asian','Equity Funds - Arabian','Bond/ Debt Funds - International',
                                                'Bond/ Debt Funds - Local','Money Market Funds - International',
                                                'Money Market Funds - Local','Money Market Funds - Foreign Currency Murabaha',
                                                'Money Market Funds - Saudi Riyal Murabaha','Equity Funds - GCC','Funds of Funds',
                                                 'Balanced Funds - International','Balanced Funds - Local','Real Estate Funds',
                                                 'Multi - Assets Funds', 'Other Funds'];
                                            @endphp

                                        <div class="form-group">
                                            <label for="tadawul_fund_category">Tadawul Fund Category</label>
                                            <select class="form-control input-sm" name="tadawul_fund_category">
                                                @foreach($tadawul as $i_key => $rih)
                                                    <option {{ $fund_classification_schemes->tadawul_fund_category
                                                    ==$rih?'selected':'' }}>{{ $rih }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                            @php
                                                $ammc = ['Actions','Contractuel','Diversifié','	Monétaire','OCT','OMLT',];
                                            @endphp

                                        <div class="form-group">
                                            <label for="ammc_classification">AMMC Classification</label>
                                            <select class="form-control input-sm" name="ammc_classification">
                                                @foreach($ammc as $i_key => $rih)
                                                    <option {{ $fund_classification_schemes->ammc_classification
                                                    ==$rih?'selected':'' }}>{{ $rih }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                            @php
                                                $cmf = ['Mixte (CEA)','Mixte','Obligataire','Actions',];
                                            @endphp

                                        <div class="form-group">
                                            <label for="cmf_classification">CMF Classification</label>
                                            <select class="form-control input-sm" name="cmf_classification">
                                                <option {{ $fund_classification_schemes->cmf_classification == ""?'selected':'' }}></option>
                                                @foreach($cmf as $i_key => $rih)
                                                    <option {{ $fund_classification_schemes->cmf_classification
                                                    ==$rih?'selected':'' }}>{{ $rih }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                            @php
                                                $cmb = ['Balanced/Mixed','Affiliate Companies','Sector','Equity',
                                                'Private','Index','Notes and Bonds','Liquid', 'Foreign Securities',
                                                'Capital Protected','Capital Guaranteed','Variable','Hedge Funds'];
                                            @endphp

                                        <div class="form-group">
                                            <label for="cmb_classification">CMB Classification</label>
                                            <select class="form-control input-sm" name="cmb_classification">
                                                @foreach($cmb as $i_key => $rih)
                                                    <option {{ $fund_classification_schemes->cmb_classification
                                                    ==$rih?'selected':'' }}>{{ $rih }}</option>
                                                @endforeach
                                            </select>
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