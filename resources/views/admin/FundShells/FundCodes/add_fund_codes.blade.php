@extends('layout.header')
@section('title')
    Fund Codes - New
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item active">Fund Codes - New</li>
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
                <form action="{{ route('register-fundCodes-on-admin-side') }}" method="post">
                    {!! csrf_field() !!}
                <div class="row">

                    <div class="col-sm-12">

                        <div class="card">
                            <div class="card-header">
                                <strong>Add Fund Code</strong>
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
                                        <label for="isin_code">ISIN Code</label>
                                        <input type="text" class="form-control" name="isin_code" placeholder="Enter ISIN Code ">
                                    </div>


                                    <div class="form-group">
                                        <label for="isin_currency_class_code">ISIN Currency Class Code</label>
                                        <input type="text" class="form-control" name="isin_currency_class_code" placeholder="Enter ISIN Currency Class Code ">
                                    </div>

                                    <div class="form-group">
                                        <label for="tadawul_fund_code">Tadawul Fund Code</label>
                                        <input type="text" class="form-control" name="tadawul_fund_code" placeholder="Enter Tadawul Fund Code">
                                    </div>

                                    <div class="form-group">
                                        <label for="maroclear_code">Maroclear Code</label>
                                        <input type="text" class="form-control" name="maroclear_code" placeholder="Enter Maroclear Code">
                                    </div>

                                    <div class="form-group">
                                        <label for="stock_exchange_ticker">Stock Exchange Ticker</label>
                                        <input type="text" class="form-control" name="stock_exchange_ticker" placeholder="Enter Stock Exchange Ticker">
                                    </div>

                                    <div class="form-group">
                                        <label for="etf_ticker">ETF Ticker</label>
                                        <input type="text" class="form-control" name="etf_ticker" placeholder="Enter ETF Ticker">
                                    </div>

                                    <div class="form-group">
                                        <label for="turkish_fund_code">Turkish Fund Code</label>
                                        <input type="text" class="form-control" name="turkish_fund_code" placeholder="Enter Turkish Fund Code ">
                                    </div>

                                    <div class="form-group">
                                        <label for="cusip">CUSIP</label>
                                        <input type="text" class="form-control" name="cusip" placeholder="Enter CUSIP">
                                    </div>

                                    <div class="form-group">
                                        <label for="polish_rfi_code">Polish RFI Code</label>
                                        <input type="text" class="form-control" name="polish_rfi_code" placeholder="Enter Polish RFI Code">
                                    </div>

                                    <div class="form-group">
                                        <label for="johannesburg_se_code">Johannesburg SE Code</label>
                                        <input type="text" class="form-control" name="johannesburg_se_code" placeholder="Enter Johannesburg SE Code">
                                    </div>

                                    <div class="form-group">
                                        <label for="sedol_code">SEDOL Code</label>
                                        <input type="text" class="form-control" name="sedol_code" placeholder="Enter SEDOL Code">
                                    </div>

                                    <div class="form-group">
                                        <label for="valoren_code">Valoren Code</label>
                                        <input type="text" class="form-control" name="valoren_code" placeholder="Enter Valoren Code">
                                    </div>

                                    <div class="form-group">
                                        <label for="wkngerman_code">WKNGerman Code</label>
                                        <input type="text" class="form-control" name="wkngerman_code" placeholder="Enter WKNGerman Code">
                                    </div>

                                    <div class="form-group">
                                        <label for="indonesian_sec_code">Indonesian SEC Code</label>
                                        <input type="text" class="form-control" name="indonesian_sec_code" placeholder="Enter Indonesian SEC Code">
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
    </main>
@endsection