@extends('layout.header')
@section('title')
    Fund Codes - List
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item active">Fund Codes - List</li>
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

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="header">
                                <i class="fa fa-align-justify"></i> Fund Codes Table
                            </div>
                            <div class="content table-responsive">
                                <table class="table table-bordered table-striped table-sm">
                                    <thead>
                                    <tr>
                                        <th>Sr.No</th>
                                        <th>ISIN Code</th>
                                        <th>ISIN Currency Class Code</th>
                                        <th>Tadawul Fund Code</th>
                                        <th>Maroclear Code</th>
                                        <th>Stock Exchange Ticker</th>
                                        <th>ETF Ticker</th>
                                        <th>Turkish Fund Code</th>
                                        <th>CUSIP</th>
                                        <!--
                                        <th>Polish RFI Code</th>
                                        <th>Johannesburg SE Code</th>
                                        <th>SEDOL Code</th>
                                        <th>Valoren Code</th>
                                        <th>WKNGerman Code</th>
                                        <th>Indonesian SEC Code</th>
                                        !-->
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($fund_codes as $row)
                                        <tr id="remote-fundkeyAttribute-{{ $row->id }}">
                                            <td>{{ $row->id }}</td>
                                            <td>
                                                <a  href="{{ route('view-fundCodes-on-admin-side', $row->id) }}" class="btn btn-default btn-sm">{{ $row->isin_code }}</a>
                                            </td>
                                            <td>{{ $row->isin_currency_class_code }}</td>
                                            <td>{{ $row->tadawul_fund_code }}</td>
                                            <td>{{ $row->maroclear_code }}</td>
                                            <td>{{ $row->stock_exchange_ticker }}</td>
                                            <td>{{ $row->etf_ticker }}</td>
                                            <td>{{ $row->turkish_fund_code }}</td>
                                            <td>{{ $row->cusip }}</td>
                                        <!--
                                            <td>{{ $row->polish_rfi_code }}</td>
                                            <td>{{ $row->johannesburg_se_code }}</td>
                                            <td>{{ $row->sedol_code }}</td>
                                            <td>{{ $row->valoren_code }}</td>
                                            <td>{{ $row->wkngerman_code }}</td>
                                            <td>{{ $row->indonesian_sec_code }}</td>
                                            !-->
                                            <td>
                                                <a  href="{{ route('edit-fundCodes-on-admin-side', $row->id) }}" class="btn btn-default btn-sm"><i class="fa fa-pencil "> Edit</i></a>
                                                <a href="{{ route('fundCodes-delete', $row->id) }}"  class="btn btn-danger btn-sm"><i class="fa fa-remove"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                                <!-- <nav>
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="#">Prev</a>
                                        </li>
                                        <li class="page-item active">
                                            <a class="page-link" href="#">1</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">2</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">3</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">4</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </nav> -->
                            </div>
                        </div>
                    </div>
                    <!--/.col-->
                </div>
                <!--/.row-->
            </div>

        </div>
        <!-- /.conainer-fluid -->
@endsection