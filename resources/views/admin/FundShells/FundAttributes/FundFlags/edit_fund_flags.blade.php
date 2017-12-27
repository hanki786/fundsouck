@extends('layout.header')
@section('title')
    Fund Flags - Edit
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item">Fund Attributes</li>
        <li class="breadcrumb-item"><a  href="{{ route('list-fundFlags-on-admin-side') }}">Fund Flags - List</a></li>
        <li class="breadcrumb-item active">Fund Flags - Edit</li>
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
                <form action="{{ route('update-fundFlags-on-admin-side',$fund_flags->id) }}" method="post" >
                    {!! csrf_field() !!}
                <div class="row">

                    <div class="col-sm-12">

                        <div class="card">
                            <div class="card-header">
                                <strong>Edit Fund Flags</strong>
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

                                        <input type="hidden" name="fund_objective_id" value="{{ $fund_flags->id}}">

                                        <input type="hidden" name="user_id" value="{{ $fund_flags->user_id}}">


                                        <div class="form-group">
                                        <label for="closed_fund">Closed Fund</label>
                                        <select class="form-control input-sm" name="closed_fund">
                                            <option {{ $fund_flags->closed_fund == "Yes"?'selected':'' }}>Yes</option>
                                            <option {{ $fund_flags->closed_fund == "No"?'selected':'' }}>No</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="closed_end_fund">Closed End Fund</label>
                                        <select class="form-control input-sm" name="closed_end_fund">
                                            <option {{ $fund_flags->closed_end_fund == "Yes"?'selected':'' }}>Yes</option>
                                            <option {{ $fund_flags->closed_end_fund == "No"?'selected':'' }}>No</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="exchange_listed">Exchange Listed</label>
                                        <select class="form-control input-sm" name="exchange_listed">
                                            <option {{ $fund_flags->exchange_listed == "Yes"?'selected':'' }}>Yes</option>
                                            <option {{ $fund_flags->exchange_listed == "No"?'selected':'' }}>No</option>
                                        </select>
                                    </div>

                                            <div class="form-group">
                                                <label for="exchange_listed">Primary Share Class</label>
                                                <select class="form-control input-sm" name="primary_share_class">
                                                    <option {{ $fund_flags->primary_share_class == "Yes"?'selected':'' }}>Yes</option>
                                                    <option {{ $fund_flags->primary_share_class == "No"?'selected':'' }}>No</option>
                                                </select>
                                            </div>

                                    <div class="form-group">
                                        <label for="vehicle">Vehicle</label>
                                        <select class="form-control input-sm" name="vehicle">
                                            <option {{ $fund_flags->vehicle == "Yes"?'selected':'' }}>Yes</option>
                                            <option {{ $fund_flags->vehicle == "No"?'selected':'' }}>No</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="umbrella">Umbrella</label>
                                        <select class="form-control input-sm" name="umbrella">
                                            <option {{ $fund_flags->umbrella == "Yes"?'selected':'' }}>Yes</option>
                                            <option {{ $fund_flags->umbrella == "No"?'selected':'' }}>No</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="exchange_traded_fund">Exchange Traded Fund</label>
                                        <select class="form-control input-sm" name="exchange_traded_fund">
                                            <option {{ $fund_flags->exchange_traded_fund == "Yes"?'selected':'' }}>Yes</option>
                                            <option {{ $fund_flags->exchange_traded_fund == "No"?'selected':'' }}>No</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="government_bond">Government Bond</label>
                                        <select class="form-control input-sm" name="government_bond">
                                            <option {{ $fund_flags->government_bond == "Yes"?'selected':'' }}>Yes</option>
                                            <option {{ $fund_flags->government_bond == "No"?'selected':'' }}>No</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="corporate_bond">Corporate Bond</label>
                                        <select class="form-control input-sm" name="corporate_bond">
                                            <option {{ $fund_flags->corporate_bond == "Yes"?'selected':'' }}>Yes</option>
                                            <option {{ $fund_flags->corporate_bond == "No"?'selected':'' }}>No</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="asset_backed_securities">Asset Backed Securities</label>
                                        <select class="form-control input-sm" name="asset_backed_securities">
                                            <option {{ $fund_flags->asset_backed_securities == "Yes"?'selected':'' }}>Yes</option>
                                            <option {{ $fund_flags->asset_backed_securities == "No"?'selected':'' }}>No</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="futures_and_options">Futures And Options</label>
                                        <select class="form-control input-sm" name="futures_and_options">
                                            <option {{ $fund_flags->futures_and_options == "Yes"?'selected':'' }}>Yes</option>
                                            <option {{ $fund_flags->futures_and_options == "No"?'selected':'' }}>No</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="infrastructure_fund">Infrastructure Fund</label>
                                        <select class="form-control input-sm" name="infrastructure_fund">
                                            <option {{ $fund_flags->infrastructure_fund == "Yes"?'selected':'' }}>Yes</option>
                                            <option {{ $fund_flags->infrastructure_fund == "No"?'selected':'' }}>No</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="hedge_fund">Hedge Fund - Non Reporting</label>
                                        <select class="form-control input-sm" name="hedge_fund">
                                            <option {{ $fund_flags->hedge_fund_non_reporting == "Yes"?'selected':'' }}>Yes</option>
                                            <option {{ $fund_flags->hedge_fund_non_reporting == "No"?'selected':'' }}>No</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for=insurance_funds">Insurance Funds</label>
                                        <select class="form-control input-sm" name="insurance_funds">
                                            <option {{ $fund_flags->insurance_funds == "Yes"?'selected':'' }}>Yes</option>
                                            <option {{ $fund_flags->insurance_funds == "No"?'selected':'' }}>No</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for=	short">Short</label>
                                        <select class="form-control input-sm" name="short">
                                            <option {{ $fund_flags->short == "Yes"?'selected':'' }}>Yes</option>
                                            <option {{ $fund_flags->short == "No"?'selected':'' }}>No</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for=	"linked_fund">Linked Fund</label>
                                        <select class="form-control input-sm" name="linked_fund">
                                            <option {{ $fund_flags->linked_fund == "Yes"?'selected':'' }}>Yes</option>
                                            <option {{ $fund_flags->linked_fund == "No"?'selected':'' }}>No</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for=	"pre_ipo">Pre-IPO</label>
                                        <select class="form-control input-sm" name="pre_ipo">
                                            <option {{ $fund_flags->pre_ipo == "Yes"?'selected':'' }}>Yes</option>
                                            <option {{ $fund_flags->pre_ipo == "No"?'selected':'' }}>No</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for=	"private_fund">Private Fund</label>
                                        <select class="form-control input-sm" name="private_fund">
                                            <option {{ $fund_flags->private_fund == "Yes"?'selected':'' }}>Yes</option>
                                            <option {{ $fund_flags->private_fund == "No"?'selected':'' }}>No</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for=	"provident_fund">Provident Fund</label>
                                        <select class="form-control input-sm" name="provident_fund">
                                            <option {{ $fund_flags->provident_fund == "Yes"?'selected':'' }}>Yes</option>
                                            <option {{ $fund_flags->provident_fund == "No"?'selected':'' }}>No</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for=	"reit">REIT</label>
                                        <select class="form-control input-sm" name="reit">
                                            <option {{ $fund_flags->reit == "Yes"?'selected':'' }}>Yes</option>
                                            <option {{ $fund_flags->reit == "No"?'selected':'' }}>No</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for=	"eltif">ELTIF</label>
                                        <select class="form-control input-sm" name="eltif">
                                            <option {{ $fund_flags->eltif == "Yes"?'selected':'' }}>Yes</option>
                                            <option {{ $fund_flags->eltif == "No"?'selected':'' }}>No</option>
                                        </select>
                                    </div>

                                    </div>
                                    <div class="col-md-3"></div>
                                </div>

                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Save</button>
                                <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i> Cancel</button>
                            </div>
                        </div>

                    </div>
                    <!--/.col-->

                </div>
                </form>
            </div>
        </div>
        <!-- /.conainer-fluid -->
    </main>
@endsection