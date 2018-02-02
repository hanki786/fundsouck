@extends('layout.header')
@section('title')
    Fund Codes - View
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item"><a  href="{{ route('list-fundCodes-on-admin-side') }}">Fund Codes - List</a></li>
        <li class="breadcrumb-item active">Fund Codes - View</li>
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
                                <h4 class="title">Fund Code</h4>
                            </div>
                            <div class="content">
                                <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-sm-6">

                                        <div class="form-group">
                                            <label for="isin_code">ISIN Code</label>
                                            <input type="text" class="form-control border-input" name="isin_code" placeholder="Enter ISIN Code "
                                                   value="{{ $fund_codes->isin_code}}" disabled>
                                        </div>


                                        <div class="form-group">
                                            <label for="isin_currency_class_code">ISIN Currency Class Code</label>
                                            <input type="text" class="form-control border-input" name="isin_currency_class_code"
                                                   placeholder="Enter ISIN Currency Class Code "
                                                   value="{{ $fund_codes->isin_currency_class_code}}" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="tadawul_fund_code">Tadawul Fund Code</label>
                                            <input type="text" class="form-control border-input" name="tadawul_fund_code"
                                                   placeholder="Enter Tadawul Fund Code" value="{{ $fund_codes->tadawul_fund_code}}"
                                                   disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="maroclear_code">Maroclear Code</label>
                                            <input type="text" class="form-control border-input" name="maroclear_code"
                                                   placeholder="Enter Maroclear Code" value="{{ $fund_codes->maroclear_code}}"
                                                   disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="stock_exchange_ticker">Stock Exchange Ticker</label>
                                            <input type="text" class="form-control border-input" name="stock_exchange_ticker"
                                                   placeholder="Enter Stock Exchange Ticker"
                                                   value="{{ $fund_codes->stock_exchange_ticker}}" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="etf_ticker">ETF Ticker</label>
                                            <input type="text" class="form-control border-input" name="etf_ticker" placeholder="Enter ETF Ticker"
                                                   value="{{ $fund_codes->etf_ticker}}" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="turkish_fund_code">Turkish Fund Code</label>
                                            <input type="text" class="form-control border-input" name="turkish_fund_code"
                                                   placeholder="Enter Turkish Fund Code " value="{{ $fund_codes->turkish_fund_code}}"
                                                   disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="cusip">CUSIP</label>
                                            <input type="text" class="form-control border-input" name="cusip" placeholder="Enter CUSIP"
                                                   value="{{ $fund_codes->cusip}}" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="polish_rfi_code">Polish RFI Code</label>
                                            <input type="text" class="form-control border-input" name="polish_rfi_code"
                                                   placeholder="Enter Polish RFI Code" value="{{ $fund_codes->polish_rfi_code}}"
                                                   disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="johannesburg_se_code">Johannesburg SE Code</label>
                                            <input type="text" class="form-control border-input" name="johannesburg_se_code"
                                                   placeholder="Enter Johannesburg SE Code"
                                                   value="{{ $fund_codes->johannesburg_se_code}}" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="sedol_code">SEDOL Code</label>
                                            <input type="text" class="form-control border-input" name="sedol_code" placeholder="Enter SEDOL Code"
                                                   value="{{ $fund_codes->sedol_code}}" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="valoren_code">Valoren Code</label>
                                            <input type="text" class="form-control border-input" name="valoren_code"
                                                   placeholder="Enter Valoren Code" value="{{ $fund_codes->valoren_code}}" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="wkngerman_code">WKNGerman Code</label>
                                            <input type="text" class="form-control border-input" name="wkngerman_code"
                                                   placeholder="Enter WKNGerman Code" value="{{ $fund_codes->wkngerman_code}}"
                                                   disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="indonesian_sec_code">Indonesian SEC Code</label>
                                            <input type="text" class="form-control border-input" name="indonesian_sec_code"
                                                   placeholder="Enter Indonesian SEC Code"
                                                   value="{{ $fund_codes->indonesian_sec_code}}" disabled>
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