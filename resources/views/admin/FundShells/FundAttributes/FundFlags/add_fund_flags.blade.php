@extends('layout.header')
@section('title')
    Fund Flags - New
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item">Fund Attributes</li>
        <li class="breadcrumb-item active">Fund Flags - New</li>
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
                <form action="{{ route('register-fundFlags-on-admin-side') }}" method="post">
                    {!! csrf_field() !!}
                <div class="row">
                    <div class="col-sm-12">

                        <div class="card">
                            <div class="header">
                                <h4 class="title">Add Fund Flags</h4>
                                <p class="category">Please fill all the information</p>
                            </div>
                            <div class="content">
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
                                        <label for="closed_fund">Closed Fund</label>
                                        <select class="form-control input-sm" name="closed_fund">
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="closed_end_fund">Closed End Fund</label>
                                        <select class="form-control input-sm" name="closed_end_fund">
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="exchange_listed">Exchange Listed</label>
                                        <select class="form-control input-sm" name="exchange_listed">
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>

                                            <div class="form-group">
                                                <label for="exchange_listed">Primary Share Class</label>
                                                <select class="form-control input-sm" name="primary_share_class">
                                                    <option>Yes</option>
                                                    <option>No</option>
                                                </select>
                                            </div>

                                    <div class="form-group">
                                        <label for="vehicle">Vehicle</label>
                                        <select class="form-control input-sm" name="vehicle">
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="umbrella">Umbrella</label>
                                        <select class="form-control input-sm" name="umbrella">
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="exchange_traded_fund">Exchange Traded Fund</label>
                                        <select class="form-control input-sm" name="exchange_traded_fund">
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="government_bond">Government Bond</label>
                                        <select class="form-control input-sm" name="government_bond">
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="corporate_bond">Corporate Bond</label>
                                        <select class="form-control input-sm" name="corporate_bond">
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="asset_backed_securities">Asset Backed Securities</label>
                                        <select class="form-control input-sm" name="asset_backed_securities">
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="futures_and_options">Futures And Options</label>
                                        <select class="form-control input-sm" name="futures_and_options">
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="infrastructure_fund">Infrastructure Fund</label>
                                        <select class="form-control input-sm" name="infrastructure_fund">
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="hedge_fund">Hedge Fund - Non Reporting</label>
                                        <select class="form-control input-sm" name="hedge_fund">
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for=insurance_funds">Insurance Funds</label>
                                        <select class="form-control input-sm" name="insurance_funds">
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for=	short">Short</label>
                                        <select class="form-control input-sm" name="short">
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for=	"linked_fund">Linked Fund</label>
                                        <select class="form-control input-sm" name="linked_fund">
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for=	"pre_ipo">Pre-IPO</label>
                                        <select class="form-control input-sm" name="pre_ipo">
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for=	"private_fund">Private Fund</label>
                                        <select class="form-control input-sm" name="private_fund">
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for=	"provident_fund">Provident Fund</label>
                                        <select class="form-control input-sm" name="provident_fund">
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for=	"reit">REIT</label>
                                        <select class="form-control input-sm" name="reit">
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for=	"eltif">ELTIF</label>
                                        <select class="form-control input-sm" name="eltif">
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>

                                    </div>
                                    <div class="col-md-3"></div>
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
    </main>
@endsection